<?php
namespace Projeto;
use Projeto\Banco;
use PDO, Exception;
class Usuario{
    private int $id;
    private string $nome;
    private string $email;
    private string $senha;
    private string $livros;
    private string $senac;
    private PDO $conexao;

    public function __construct(){ //método que functiona na criação do objeto
        $this->conexao = Banco::conecta();
    }

    public function listar(){
        $sql = "SELECT id, nome, email, livros, senac FROM usuarios ORDER BY nome";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: ".$erro->getMessage());
        }
        return $resultado;
    }
    public function inserir():void{
        $sql = "INSERT INTO  usuarios(nome, email, senha, livros, livros) VALUES (:nome, :email, :senha, :livros, :senac) "; //named param
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $consulta->bindParam(":email", $this->email, PDO::PARAM_STR);
            $consulta->bindParam(":senha", $this->senha, PDO::PARAM_STR);
            $consulta->bindParam(":livros", $this->tipo, PDO::PARAM_STR);
            $consulta->bindParam(":senac", $this->tipo, PDO::PARAM_STR);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: ".$erro->getMessage());
        }
    }
    
    

    public function getId(): int {
        return $this->id;
    }
    public function setId(int $id) {
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        return $this;
    }


    public function getNome(): string{
        return $this->nome;
    }
    public function setNome(string $nome){
        $this->nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);
        return $this;
    }


    public function getEmail(): string{
        return $this->email;
    }
    public function setEmail(string $email){
        $this->email = filter_var($email, FILTER_SANITIZE_SPECIAL_CHARS);
        return $this;
    }


    public function getSenha(): string{
        return $this->senha;
    }
    public function setSenha(string $senha){
        $this->senha = filter_var($senha, FILTER_SANITIZE_SPECIAL_CHARS);
        return $this;
    }


    public function getLivros(): string{
        return $this->livros;
    }
    public function setLivros(string $livros){
        $this->livros = filter_var($livros, FILTER_SANITIZE_SPECIAL_CHARS);
        return $this;
    }


    public function getSenac(): string{
        return $this->senac;
    }
    public function setSenac(string $senac) {
        $this->senac = filter_var($senac, FILTER_SANITIZE_SPECIAL_CHARS);
        return $this;
    }


    public function getConexao(): PDO{
        return $this->conexao;
    }
}

