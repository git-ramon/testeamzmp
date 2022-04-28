<?php namespace App\Controllers;

use App\Models\UsuarioModel;

class Login extends BaseController{

    public function index(){
        return view('login');
    }

    public function signIn(){
        $nome = $this->request->getPost('inputname');
        $password = $this->request->getPost('inputpassword');

        $usuarioModel = new UsuarioModel();
        $dadosUsuario = $usuarioModel->getByname($nome);
        

        if (count($dadosUsuario) > 0) {
            $hashUsuario = $dadosUsuario['senha'];
            if (password_verify($password, $hashUsuario)) {
                session()->set('logado', true);
                session()->set('nome', $dadosUsuario['nome']);
                return redirect()->to('/Usuario');
        }else{
            session()->setFlashData('msg', 'Usuario ou senha incorreto!');
            return redirect()->to('/login');
            }
        }else{
            session()->setFlashData('msg', 'Usuario ou senha incorreto!');
            return redirect()->to('/login');
        }
    }

    public function signout(){
        session()->destroy();
        return redirect()->to(base_url());
    }
}