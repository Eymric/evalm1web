<?php 

namespace App\API\Repository;

use App\API\Core\Database;

class CityRepository
{
    private $database;
    private $connection;

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->connection = $this->database->connect();
    }


    public function findAll():array
    {
        $sql = "
            SELECT city.*
            FROM destination.city
            ";

        $query = $this->connection->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(\PDO::FETCH_CLASS,'App\API\Entity\City');
        return $results;
    }

    
	public function getCapital(int $id){
		$sql = "
			SELECT city.*
			FROM destination.city
			WHERE city.id = $id;
		";
		
		$query = $this->connection->prepare($sql);
		$query->execute();
		$result = $query->fetchAll(\PDO::FETCH_CLASS, 'App\API\Entity\City');
		return $result[0];
	}
}