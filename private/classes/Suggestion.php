<?php

class Suggestion
{

    // INSTANCE VARIABLES
    private $id; // Auto incremented
    private $name;
    private $url;
    private $category;
    private $description;

    private const CATEGORY_OPTIONS = [
        'Front-end Development',
        'Full-stack Development',
        'Mobile App Development',
        'Languages',
        'Artificial Intelligence & Machine Learning',
        'Data Science & Analytics',
        'Cybersecurity',
        'QA & Testing',
        'DevOps',
        'Game Development',
        'Embedded Systems / IoT',
    ];

    // CONSTRUCTOR
    public function __construct($args = [])
    {
        $this->name = $args['name'] ?? null;
        $this->url = $args['url'] ?? null;
        $this->category = $args['category'] ?? null;
        $this->description = $args['description'] ?? null;
    }

    public function insert()
    {
        $sql = "INSERT INTO 'resources' ";
        $sql .= "('name', 'url', 'category', 'description') ";
        $sql .= "VALUES ";
        $sql .= "('$this->name', '$this->url', '$this->category', '$this->description')";
    }

    public function validate($args = []): array
    {
        $errors = [];

        if (!array_key_exists($this->category, self::CATEGORY_OPTIONS)) {
            $errors[] = "Selected category is not valid.";
            echo "Selected category is not valid.";
        }

        return $errors;
    }

    public static function getCategories(): array
    {
        return self::CATEGORY_OPTIONS;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getURL()
    {
        return $this->url;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
