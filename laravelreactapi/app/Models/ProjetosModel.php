<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProjetosModel extends Model
{
    use HasFactory;

    protected $fillable = ['empresa', 'projeto', 'tipo_projeto', 'status','lider','tarefas','situacao'];

    public function index()
    {
        $projetos = DB::table('projetos')->get();
        return $projetos;
    }

    
}
