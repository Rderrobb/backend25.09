<?php namespace App\Models;
// importa a classe CodeIgniter\Model que contém todos os métodos, inclusive o CRUD
use CodeIgniter\Model;
// Criamos a classe PessoaModel que é uma herança da superclasse Model
// O nome da classe sempre será o mesmo nome do arquivo
class PessoaModel extends Model{
// definir os atributos/variáveis
// estas são as informações básicas da tabela
protected $table = 'Pessoas'; // armazena o nome da tabela pessoa
protected $primaryKey = 'Id'; // armazena o nome da chave primária
protected $allowedFields = ['Nome', 'Naturalidade']; // quais campos serão permitidos manipula dentro da tabela, se tiver mais é só listar no array
protected $returnType = 'array'; // pode ser array ou object
}
