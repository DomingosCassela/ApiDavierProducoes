<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Models\modelos;

class modelosController extends Controller
{

    public function index()
    {
        $modelos=modelos::all();

        return $modelos;
    }



    public function store(Request $request)
    {
        $modelos=new modelos();


        $modelos->nome=$request->nome;
        $modelos->altura=$request->altura;
        $modelos->manequim=$request->manequim;
        $modelos->busto=$request->busto;
        $modelos->cintura=$request->cintura;
        $modelos->cor_dos_olhos=$request->cor_dos_olhos;
        $modelos->cor_do_cabelo=$request->cor_do_cabelo;
        $modelos->calcado=$request->calcado;
        $modelos->cidade=$request->cidade;
        $modelos->categoria=$request->categoria;
        $modelos->seccao=$request->seccao;
        $modelos->genero=$request->genero;
        $modelos->quadril=$request->quadril;
        $modelos->imagem="";


        $modelos->save();

        return $modelos;

    }

    public function uploadImagem(Request $request, $id){
        $modelos = modelos::findOrFail($id);

        if($request->imagem){
            $imagem = $request->imagem;
            $extesaoimg = $imagem->getClientOriginalExtension();
            if($extesaoimg !='jpg' && $extesaoimg !='jpeg' && $extesaoimg='png'){

                return back()->with('erro','Arquivo inválido!');
            }
        }

        $modelos->save();

        if($request->imagem){
            File::move($imagem,public_path().'/imagens_modelos/imagens'.$modelos->id.'.'.$extesaoimg);

            $modelos->imagem='/imagens_modelos/imagens'.$modelos->id.'.'.$extesaoimg;
            $modelos->save();
        }

        return 'imagem carregada com sucesso';

    }


    public function show($id)
    {
           return modelos::findOrFail($id);

    }





    public function update(Request $request, $id)
    {
            $modelos=modelos::findOrFail($id);
            $modelos->update($request->all());
            return $modelos;

    }
    public function destroy($id)
    {
      return modelos::destroy($id);
    }
}
