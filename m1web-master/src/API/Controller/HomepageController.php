<?php 

namespace App\API\Controller;
use App\API\Repository\CityRepository;

class HomepageController extends AbstractController{

    private $cityRepository;

public function __construct(CityRepository $cityRepository)
{
    $this->cityRepository = $cityRepository;
}

    public function index(array $uriVars = [])
    {
        // $date = new \DateTime();
        // $this->render('homepage/index', [
        //     'id' => $uriVars['id'],
        //     'date' => $date->format('d/m/Y')
        // ]);
        $this->render([
            'cities'=>$this->cityRepository->findAll()
        ]);
    }
}