<?php
class Page implements ArrayAccess,Countable
{
    public string $title='Hello';

    public function offsetExists(mixed $offset): bool
    {
        return isset($this->{$offset});
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->{$offset};
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->{$offset}=$value;
    }

    public function offsetUnset(mixed $offset): void
    {
       unset($this->{$offset});
    }

    public function count(): int
    {
       return 10;
    }
}
$aboutUs=new Page();
//var_dump($aboutUs->title);

$aboutUs['title']="About us page";
var_dump($aboutUs['title']);

var_dump(isset($aboutUs['title']));

//unset($aboutUs['Mehdi']);
var_dump(count($aboutUs));