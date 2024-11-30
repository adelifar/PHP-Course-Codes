<?php
header('Content-Type: text/plain; charset=utf-8');

class Page
{
    public array $attributes;

    public function __construct()
    {
        $this->attributes = [
            'id' => 7,
            'title' => 'About us page'
        ];
    }

    public function __get($key)
    {
//        var_dump($key);
//        return "title1";
        if (isset($this->attributes[$key]))
            return $this->attributes[$key];
        return null;
    }
    public function __set($key,$value)
    {
//        var_dump($key);
//        var_dump($value);
        $this->attributes[$key]=$value;
    }

    public function __unset($key)
    {
        var_dump("unset has been called for $key");
//        unset($this->attributes[$key]);
    }
}

$aboutUs = new Page();
var_dump($aboutUs->title);
var_dump($aboutUs->id);

$aboutUs->content='This is contnet of about us page. you can know about us in this page';


var_dump(isset($aboutUs->content));
var_dump(isset($aboutUs->title));
//var_dump($aboutUs->content);

unset($aboutUs->content);