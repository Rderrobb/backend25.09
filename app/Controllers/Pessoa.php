<?php namespace App\Controllers;

    use App\Models\PessoaModel;
    use CodeIgniter\Controller;

    class Pessoa extends BaseController
{
 public function index()
 {
 
 }
 public function exibir(){

    $pessoasModel = new PessoaModel();

    $pessoas = $pessoasModel->findAll();

    $variaveis = [
    'pessoas' => $pessoas
 ];
 
    return view ('exibir', $variaveis);
}
}