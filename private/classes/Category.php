<?php

class Category
{

    private $id; // Auto Incremented
    private $name;
    private $description;
    private $visible;

    public function __construct($args = [])
    {
        $this->name = $args['name'];
        $this->description = $args['description'];
        $this->visible = $args['visible'];
    }
}
