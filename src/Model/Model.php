<?php

namespace Model;

class Model
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=cms', 'root', '');
    }
}