<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Usuario extends BaseController
{
    private $UserModel;

    public function __construct(){
        $this->UserModel = new UserModel();
    }

    public function index(){

        return view('usuarios', [
            'usuarios' => $this->UserModel->findAll()
        ]);
    }

    public function delete($id){
        if ($this->UserModel->delete($id)){
            echo view('messages', [
                'message' => 'Usuario Excluido com Sucesso !'
            ]);
        } else {
            echo "Erro ao Excluir Usuario";
        }
    }

    function create(){
        return view('form');
    }

    public function store(){
        if ($this->UserModel->save($this->request->getPost())) {
            return view('messages', [
                'message' => 'Usuario salvo com sucesso !'
            ]);
        } else {
            echo "Ocorreu um erro !";
        }
    }

    public function editar($id){
        return view('form',[
            'useredit' => $this->UserModel->find($id)
        ]);
    }
}
