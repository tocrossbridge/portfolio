<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $collection = [
             [
                'image' => "images/projects/colecoes-fauna-do-brasil/square.png",
                'alt' => "Photo of the project Coleções Fauna do Brasil",
                'link' => "colecoes-fauna-brasil"
             ],
             [
                'image' => "images/projects/escola-renovacao/square.png",
                'alt' => "Photo of the project Escola Renovação",
                'link' => "escola-renovacao"
             ],
             [
                'image' => "images/projects/pantera-motors/square.png",
                'alt' => "Photo of the project Pantera Motors",
                'link' => "pantera-motors"
             ],
             [
                'image' => "images/projects/show-gospel/square.png",
                'alt' => "Photo of the project Show Gospel",
                'link' => "show-gospel"
             ],
             [
                'image' => "images/projects/tempestade-criativa/square.png",
                'alt' => "Photo of the project Tempestade Criativa",
                'link' => "tempestade-criativa"
             ],
            ];

        return view('portfolio.index', ['collection' => $collection]);
    }

    // Projects
    public function colecoesFaunaBrasil(){ return view('portfolio.projects.colecoes-fauna-brasil'); }
    public function escolaRenovacao(){ return view('portfolio.projects.escola-renovacao'); }
    public function panteraMotors(){ return view('portfolio.projects.pantera-motors'); }
    public function showGospel(){ return view('portfolio.projects.show-gospel'); }
    public function tempestadeCriativa(){ return view('portfolio.projects.tempestade-criativa'); }
}
