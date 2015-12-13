<?php

namespace Model;

class Model
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=cms', 'root', '');
    }
}