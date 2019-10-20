<?php

namespace App\Front\Controller;


use App\API\Repository\CityRepository;
use App\API\Repository\CountryRepository;

class CountryController extends AbstractController
{
	private $countryRepository;
	private $cityRepository;
	
	public function __construct(CountryRepository $countryRepository, CityRepository $cityRepository)
	{
		$this->countryRepository = $countryRepository;
		$this->cityRepository = $cityRepository;
	}

	public function index(array $data = [])
	{
		$capital = array();
		$countries = $this->countryRepository->findAll();
		foreach ($countries as $country){
			$capital[$country->getId()] = $this->cityRepository->getCapital($country->getId());
		}
		$this->render('country/index', [
			'countries' => $countries,
			'capital' => $capital,
		]);
	}
}