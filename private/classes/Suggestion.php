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
        'front_end' => 'Front-end Development',
        'full_stack' => 'Full-stack Development',
        'mobile_app' => 'Mobile App Development',
        'languages' => 'Languages',
        'ai_ml' => 'Artificial Intelligence & Machine Learning',
        'data_science' => 'Data Science & Analytics',
        'cybersecurity' => 'Cybersecurity',
        'qa_testing' => 'QA & Testing',
        'devops' => 'DevOps',
        'game_dev' => 'Game Development',
        'embedded_iot' => 'Embedded Systems / IoT',
    ];

    // CONSTRUCTOR
    public function __construct($args = [])
    {
        $this->name = $args['name'];
        $this->url = $args['url'];
        $this->category = $args['category'];
        $this->description = $args['description'];
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
}
