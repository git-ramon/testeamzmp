<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Home extends BaseController
{
    public function index()
    {
        return view('/login');
    }

    public function insere() {
        $dados = [
            'nome' => 'admin',
            'senha' => password_hash('admin', PASSWORD_DEFAULT)
        ];

        (new UsuarioModel())->save($dados);
    }
}
