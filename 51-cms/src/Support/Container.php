<?php

namespace App\Support;
class Container
{
    private array $instances = [];
    private array $recipes = [];

    public function bind(string $what, \Closure $recipe): void
    {
        $this->recipes[$what] = $recipe;
    }

    public function get($className)
    {
        if (empty($this->instances[$className])) {
            if (empty($this->recipes[$className]))
                die("Could not build $className");
            $this->instances[$className] = $this->recipes[$className]();
        }
        return $this->instances[$className];
    }
}
