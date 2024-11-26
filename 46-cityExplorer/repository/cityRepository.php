<?php
declare(strict_types=1);

class CityRepository
{
    private City $emptyCity;

    public function __construct(private PDO $pdo)
    {
        $this->emptyCity = new City(0, '', '', '', 0, 0, '', '', '', 0, '');
    }

    public function update(int $id, City $city)
    {
        $statement = $this->pdo->prepare("update worldcities set city=:city,
                       city_ascii=:cityAscii,country=:country,iso2=:iso2,population=:pop where id=:id");
        $statement->bindValue(':city', $city->city);
        $statement->bindValue(':cityAscii', $city->cityAscii);
        $statement->bindValue(':country', $city->country);
        $statement->bindValue(':iso2', $city->iso2);
        $statement->bindValue(':pop', $city->population, PDO::PARAM_INT);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();
    }

    public function paginate(int $page = 1, int $perPage = 15): array
    {
        $statement = $this->pdo->prepare("select *  from worldcities  order by population desc limit :limit offset :offset");
        $statement->bindValue(':limit', $perPage, PDO::PARAM_INT);
        $statement->bindValue(':offset', max($page - 1, 0) * $perPage, PDO::PARAM_INT);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $entries = [];
        foreach ($results as $result) {
            $entries[] = $this->mapToCity($result);
        }

        return $entries;
    }

    public function count(): int
    {
        $statement = $this->pdo->prepare("select count(*) as cnt from worldcities ");
        $statement->execute();
        $cnt = $statement->fetch(PDO::FETCH_ASSOC);
        return $cnt['cnt'];
    }

    public function fetchById(int $id): City
    {
        $statement = $this->pdo->prepare("select * from worldcities where id=:id");
        $statement->bindValue(':id', $id);
        $statement->execute();
        $entry = $statement->fetch(PDO::FETCH_ASSOC);
        if (!empty($entry))
            return $this->mapToCity($entry);
        return $this->emptyCity;
    }

    public function fetch(): array
    {
        $statement = $this->pdo->prepare("select *  from worldcities  order by population desc limit 15");
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $entries = [];
        foreach ($results as $result) {
            $entries[] = $this->mapToCity($result);
        }

//        var_dump($entries);
        return $entries;
    }
//  public function fetch():array
//  {
//
//      $tehran=new City();
//      $tehran->city="Tehran";
//      $tehran->country="Iran";
//      $tehran->population=2000000;
//
//      $nyc =new City();
//      $nyc->city="New York City";
//      $nyc->country="USA";
//      $nyc->population=8000000;
//
//      $berlin =new City();
//      $berlin->city="Berlin";
//      $berlin->country="Germany";
//      $berlin->population=4000000;
//      return[
//          $tehran,
//          $berlin,
//          $nyc
//      ];
//
//  }
    private function mapToCity(array $entry): City
    {
        return new City($entry['id'],
            $entry['city'],
            $entry['city_ascii'],
            $entry['country'],
            (float)$entry['lat'],
            (float)$entry['lng'],
            $entry['iso2'],
            $entry['iso3'],
            $entry['capital'],
            $entry['population'],
            $entry['admin_name']
        );
    }
}