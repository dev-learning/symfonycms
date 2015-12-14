<?php

namespace Model;

class Model
{
    /**
     * @var PDO
     */
    protected $db;

    public function __construct()
    {
        $this->db = new \PDO('mysql:host=localhost;dbname=symfony', 'root', '');
    }
}