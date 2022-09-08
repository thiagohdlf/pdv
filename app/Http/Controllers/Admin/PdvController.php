<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Pdv
};

class PdvController extends Controller
{
    private $pdv;

    public function __construct(Pdv $pdv){

        return $this->pdv = $pdv;
    }

    public function index(){

        $dados = $this->pdv->paginate(5);
        return view('admin.paginas.pdv.index', compact('dados'));
    }

    public function criar(){

        return view('admin.paginas.pdv.criar');
    }

    public function salvar(Request $request){

        $this->pdv->create($request->all());
        return redirect()->route('admin.pdv.index');
    }

    public function mostrar($id){

        if(!$dados = $this->pdv->find($id)){
            return redirect()->back();
        }

        return view('admin.paginas.pdv.mostrar', compact('dados'));
    }

    public function editar($id){

        if(!$dados = $this->pdv->find($id)){
            return redirect()->back();
        }

        return view('admin.paginas.pdv.editar', compact('dados'));
    }

    public function atualizar(Request $request, $id){

        if(!$dados = $this->pdv->find($id)){

            return redirect()->back();
        }

        $dados->update($request->all());
        return redirect()->route('admin.pdv.index');
    }

    public function deletar($id){

        if(!$dados = $this->pdv->find($id)){

            return redirect()->back();
        }

        $dados->delete();
        return redirect()->route('admin.pdv.index');
    }
}
