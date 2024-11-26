<?php
require_once __DIR__ . '/inc/functions.php';
include_once __DIR__ . '/views/header.inc.php';
//$selectedCity=$_GET['city'];
//var_dump($selectedCity);
$selectedCity = null;
$selectedFilename = null;
if (!empty($_GET['city']))
    $selectedCity = $_GET['city'];
//var_dump($selectedCity);
$citiesPath = __DIR__ . '/data/cities.json';
$citiesContent = file_get_contents($citiesPath);
//var_dump($citiesContent);
$cities = json_decode($citiesContent, true);
//var_dump($cities);
if ($selectedCity == null) {
    echo "City not found!";
} else {

//    foreach ($cities as $city){
//        if ($city['city']===$selectedCity){
//            $selectedFilename=$city['jsonfile'];
//            break;
//        }
//    }
//    var_dump($filename);

//var_dump(array_column($cities,'city'));

    $cityColumns = array_column($cities, 'city');
//    var_dump(array_search($selectedCity, $cityColumns));
    $index = array_search($selectedCity, $cityColumns);
    if (is_int($index)) {
        $selectedFilename = $cities[$index]['jsonfile'];
    }


    if (!empty($selectedFilename)) {
        $selectedCityContent = file_get_contents(__DIR__ . "/data/$selectedFilename");
        $selectedCityWeather = json_decode($selectedCityContent, true);

    }
}
?>
<pre>
    <?php
    if (isset($selectedCityWeather)) {
//        echo "'".join("','",$selectedCityWeather['daily']['time'])."'";


//        print_r($selectedCityWeather)
        $dailyTemperature =
            array_combine($selectedCityWeather['daily']['time'],
                $selectedCityWeather['daily']['temperature_2m_mean']);
//        print_r($dailyTemperature);
    }
    ?>
</pre>
<?php if (isset($dailyTemperature)): ?>
    <div class="container">
        <h2><?= e($selectedCity) ?></h2>
        <canvas id="chart"></canvas>
        <table>
            <thead>
            <tr>
                <th>
                    Date
                </th>
                <th>
                    Temperature
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($dailyTemperature as $date => $temp): ?>
                <tr>
                    <td><?= e($date) ?></td>
                    <td><?= e($temp) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>
<?php include_once __DIR__ . '/views/footer.inc.php'; ?>
<script>
    const ctx = document.getElementById('chart');
    //const labels = [<?php // echo "'".join("','",$selectedCityWeather['daily']['time'])."'"; ?>//];
    //const data = {
    //    labels: labels,
    //    datasets: [{
    //        label: '<?php //=$selectedCity?>// Temperature',
    //        data: [<?php //echo join(',', $selectedCityWeather['daily']['temperature_2m_mean']) ?>//],
    //        fill: false,
    //        borderColor: 'rgb(75, 192, 192)',
    //        tension: 0.1
    //    }]
    //};

    const labels = <?php echo json_encode($selectedCityWeather['daily']['time'])?>;
    <?php
        $dateset[]=[
            'label' => $selectedCity . ' Temperature',
            'data' => $selectedCityWeather['daily']['temperature_2m_mean'],
            'fill' => false,
            'borderColor' => 'rgb(75, 192, 192)',
            'tension' => 0.1
        ];
    ?>
    const data = {
        labels: labels,
        datasets: <?=json_encode($dateset)?>
        //    [{
        //    label: '<?php //=$selectedCity?>// Temperature',
        //    data: <?php //=json_encode($selectedCityWeather['daily']['temperature_2m_mean'])?>//,
        //    fill: false,
        //    borderColor: 'rgb(75, 192, 192)',
        //    tension: 0.1
        //}]
    };


    const myChart = new Chart(ctx, {
        type: 'line',
        data: data,
    });
</script>
