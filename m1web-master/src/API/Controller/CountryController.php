<?php 

namespace App\API\Controller;
use App\API\Repository\CountryRepository;


class CountryController extends AbstractController{

    public function __construct(CountryRepository $countryRepository)
{
    $this->countryRepository = $countryRepository;
}

    private $countryRepository;
    public function index(array $data = [])
    {
        $this->render([
            'Pays'=>$this->countryRepository->findAll()
        ]);
    }
}