<?php
namespace Projeto;
use Projeto\Banco;
use PDO, Exception;
class Livro{
    public int $id;
    public string $titulo;
    public string $capa;
    public string $descricao;
    public string $genero;	
    public string $id_usuario_entrega;	
    public string $id_usuario_recebe;	
    public string $diasEntrega;	
    public string $horariosEntrega;
    public string $autor;

    public function __construct(){ //método que functiona na criação do objeto
        $this->conexao = Banco::conecta();
    }

    public function listar(){
        $sql = "SELECT id, titulo, capa, descricao, genero, id_usuario_entrega, id_usuario_recebe, diasEntrega, horariosEntrega, autor FROM livros ORDER BY titulo";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro: ".$erro->getMessage());
        }
        return $resultado;
    }

    public function getId(): int {
        return $this->id;
    }
    public function setId(int $id){
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        return $this;
    }


    public function getTitulo(): string{
        return $this->titulo;
    }
    public function setTitulo(string $titulo){
        $this->titulo = filter_var($titulo, FILTER_SANITIZE_SPECIAL_CHARS) ;
        return $this;
    }


    public function getCapa(): string{
        return $this->capa;
    }
    public function setCapa(string $capa){
        $this->capa = filter_var($capa, FILTER_SANITIZE_SPECIAL_CHARS);
        return $this;
    }

     function getDescricao(): string{
        return $this->descricao;
    }
    public function setDescricao(string $descricao){
        $this->descricao = filter_var($descricao, FILTER_SANITIZE_SPECIAL_CHARS);
        return $this;
    }


    public function getGenero(): string{
        return $this->genero;
    }
    public function setGenero(string $genero){
        $this->genero = filter_var($genero, FILTER_SANITIZE_SPECIAL_CHARS);
        return $this;
    }


    public function getIdUsuarioEntrega(): string{
        return $this->id_usuario_entrega;
    }
    public function setIdUsuarioEntrega(string $id_usuario_entrega){
        $this->id_usuario_entrega = filter_var($id_usuario_entrega, FILTER_SANITIZE_SPECIAL_CHARS);
        return $this;
    }


    public function getIdUsuarioRecebe(): string{
        return $this->id_usuario_recebe;
    }
    public function setIdUsuarioRecebe(string $id_usuario_recebe){
        $this->id_usuario_recebe = filter_var($id_usuario_recebe, FILTER_SANITIZE_SPECIAL_CHARS);
        return $this;
    }


    public function getDiasEntrega(): string{
        return $this->diasEntrega;
    }
    public function setDiasEntrega(string $diasEntrega){
        $this->diasEntrega = $diasEntrega;
        return $this;
    }


    public function getHorariosEntrega(): string{
        return $this->horariosEntrega;
    }
    public function setHorariosEntrega(string $horariosEntrega){
        $this->horariosEntrega = $horariosEntrega;
        return $this;
    }


    public function getAutor(): string{
        return $this->autor;
    }
    public function setAutor(string $autor){
        $this->autor = filter_var($autor, FILTER_SANITIZE_SPECIAL_CHARS);
        return $this;
    }
}