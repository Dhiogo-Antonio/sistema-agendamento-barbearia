<?php

require_once "C:/Turma2/xampp/htdocs/sistema-agendamento-barbearia/app/models/UsuarioModel.php";

class UsuarioController {
    private $usuarioModel;

    public function __construct() {
        $this->usuarioModel = new UsuarioModel();
    }

    public function cadastrarUsuario($nome, $email, $senha) {
        return $this->usuarioModel->cadastrarUsuario($nome, $email, $senha);
    }

    public function autenticarUsuario($email, $senha) {
        return $this->usuarioModel->autenticarUsuario($email, $senha);
    }
}

?>