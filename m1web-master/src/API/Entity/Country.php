<?php

namespace App\API\Entity;

class Country implements \JsonSerializable
{
    private $id;
    private $name;
    private $city_id;

    public function jsonSerialize():array
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'city_id' => $this->getCityId()
        ];
    }

    public function getId():int
    {
        return $this->id;
    }

    public function setId():void
    {
        $this->id = $id;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setName():void
    {
        $this->name = $name;
    }
    
    public function getCityId():string
    {
        return $this->city_id;
    }

    public function setCityId():void
    {
        $this->city_id = $city_id;
    }
}