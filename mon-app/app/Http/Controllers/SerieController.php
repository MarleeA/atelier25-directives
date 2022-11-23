<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    protected $tableauSeries;

    public function __construct()
    {
        $this->tableauSeries = [
            'Friends'=>['Nombre de saison'=>12,'Année'=>1997,'type'=>'Comédie'],
            'GOT'=>['Nombre de saison'=>6,'Année'=>2010,'type'=>'Drame'],
            'This is us'=>['Nombre de saison'=>5,'Année'=>2015,'type'=>'Drame'],
            'How I meet your mother'=>['Nombre de saison'=>8,'Année'=>1997,'type'=>'Comédie'],
            'MrRobot'=>['Nombre de saison'=>4,'Année'=>2015,'type'=>'Psychologie'],
        ];
    }

    public function index()
    {
        return view('series.index', [ 'tableauSeries' => $this->tableauSeries ]);
    }
    public function show()
    {
        return view('series.show', [ 'tableauSeries' => $this->tableauSeries ]);
    }
}
