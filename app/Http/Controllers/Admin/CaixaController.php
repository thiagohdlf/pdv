<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Pdv, Caixa
};

class CaixaController extends Controller
{
    private $caixa, $pdv;

    public function __construct(Caixa $caixa, Pdv $pdv){

        $this->caixa = $caixa;
        $this->pdv = $pdv;
    }

    public function index(){

        $dados = $this->pdv->all();
        return view('admin.paginas.caixa.index', compact('dados'));
    }

    public function pdv(Request $request){

//        dd($request->all());
        $pdvs = new Pdv;

        $pdvs->nome = $request['nome'];

        $caixa = $this->caixa->create([$pdvs]);


    }
}
