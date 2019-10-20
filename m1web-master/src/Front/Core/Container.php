<?php

namespace App\Front\Core;

class Container
{

	private $services; 
	public function get(string $idService)
	{
		$this->services = [
			'core.dotenv' => function () {
                return new \App\API\Core\DotEnv();
            },
            'core.database' => function () {
                return new \App\API\Core\Database($this->services['core.dotenv']());
			},
			'repository.country' => function () {
                return new \App\API\Repository\CountryRepository($this->services['core.database']() );
            },
            'repository.city' => function () {
                return new \App\API\Repository\CityRepository($this->services['core.database']() );
			},
			'controller.homepage' => function(){
				return new \App\Front\Controller\HomepageController();
			},
			'controller.not.found' => function(){
				return new \App\Front\Controller\NotFoundController();
			},
			'controller.country' => function() { return new \App\Front\Controller\CountryController(
				$this->services['repository.country'](),
				$this->services['repository.city']()
			);},
			
		];

		return $this->services[$idService]();
	}
}
