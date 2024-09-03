<?php

class Usuario {
    private $nome;
    private $sobrenome;
    private $email;
    private $senha;
    private $genero;
    private $daNascimento;
    private $cep;
    private $rua;
    private $cidade;
    private $bairro;
    private $estado;
    private $uf;


    public function __construct(
        $nome, $sobrenome,  $email,  $senha, 
        $genero, $daNascimento, $cep, $rua,
        $bairro, $cidade, $uf){
        
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->email = $email;
            $this->senha = $senha;
            $this->genero = $genero;
            $this->daNascimento = $daNascimento;
            $this->cep = $cep;
            $this->rua = $rua;
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->uf = $uf;
        }


    public function get_nome() {
        return $this->nome;
    }
    public function get_sobrenome() {
        return $this->sobrenome;
    }
    public function get_email() {
        return $this->email;
    }
    public function get_senha() {
        return $this->senha;
    }
    public function get_genero() {
        return $this->genero;
    }
    public function get_daNascimento() {
        return $this->daNascimento;
    }
    public function get_cep() {
        return $this->cep;
    }
    public function get_rua() {
        return $this->rua;
    }
    public function get_bairro() {
        return $this->bairro;
    }
    public function get_cidade() {
        return $this->cidade;
    }
    public function get_estado() {
        return $this->uf;
    }



    public function set_nome($nome){
        $this->nome = $nome;
    }
    public function set_sobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }
    public function set_email($email){
        $this->email = $email;
    }
    public function set_genero($genero) {
        $this->genero = $genero;
    }
    public function set_daNascimento($daNascimento){
        $this->daNascimento = $daNascimento;
    }
    public function set_cep($cep) {
        $this->cep = $cep;
    }
    public function set_rua($rua){
        $this->rua = $rua;
    }
    public function set_bairro($sobrenome) {
        $this->sobrenome = $sobrenome;
    }
    public function set_cidade($cidade) {
        $this->cidade = $cidade;
    }
    public function set_estado($estado){
        $this->uf = $estado;
    }



    // ainda será revisto
    private function set_senha($senha){
        $this->senha = $senha;
    }



}
