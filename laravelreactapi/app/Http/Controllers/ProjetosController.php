<?php

namespace App\Http\Controllers;

use App\Models\ProjetosModel as Projetos;
use Illuminate\Http\Request;

class ProjetosController extends Controller
{
    private $projetos;

    public function __construct(Projetos $projetos)
   {
       $this->projetos = $projetos;
   }

   public function index()
   {
       return Projetos::select('id','empresa','projeto','tipo_projeto','status','lider','tarefas','situacao')->get();
   }
}
