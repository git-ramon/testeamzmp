<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model{
    protected $table = 'login';

    protected $allowedFields = [
        'nome',
        'senha'
    ];

    public function getByname(string $nome) : array{
        
        $rq = $this->where('nome', $nome)->first();

        return ! is_null($rq) ? $rq : [];
    }
}