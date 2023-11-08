<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Departamento;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /* Verificar se o usuário estar logado no sistema */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalFuncionarios = Funcionario::where('status','on')->count();
        $totalCargos = Cargo::all()->count();
        $totalDepartamentos = Departamento::all()->count();
        $somaSalarios = Funcionario::where('status','on')->sum('salario');

        // Dados dos departamentos
        $departamentos = Departamento::all()->sortBy('nome');
        foreach($departamentos as $departamento){
            $nomesDepartamento[] = "'".$departamento->nome;
            // $totalFuncionariosDepartamentos[] = $departamento->
        }
        // dd($nomesDepartamento);

        return view('dashboard.index', compact('totalFuncionarios', 'totalCargos', 'totalDepartamentos', 'somaSalarios'));
    }
}
