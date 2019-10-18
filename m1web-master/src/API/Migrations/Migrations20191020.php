<?php

namespace App\API\Migrations; 

use App\API\Migrations\AbstractMigrations;

require_once 'vendor/autoload.php';

class Migrations20191020 extends AbstractMigrations
{
    protected $sql = " 
                     CREATE DATABASE IF NOT EXISTS destination;
                     CREATE TABLE destination.country(
                        id TINYINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
                        name VARCHAR(100),
                        city_id TINYINT,
                        FOREIGN KEY(city_id) REFERENCES city(id)
                     );
                   ";

}