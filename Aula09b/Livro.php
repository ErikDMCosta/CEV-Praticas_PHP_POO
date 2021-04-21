<?php
require_once 'Publicacao.php';
require_once 'Pessoa.php';
class Livro implements Publicacao {
    // Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    // Métodos Personalizados
    public function detalhes() {
        echo '<hr>';
        echo '<br>' . 'Livro ' . $this->getTitulo();
        echo '<br>' . 'Escrito por: ' . $this->getAutor();
        echo '<br>' . 'Paginas: ' . $this->getTotPaginas() . ' atual ' . $this->getPagAtual();
        echo '<br>' . 'Leitor: ' . $this->leitor->getNome();
        echo '<br>Título: ' . $this->getTitulo();
        echo '<br>Autor: ' . $this->getAutor();
        echo '<br>Idade: ' . $this->leitor->getIdade();
        echo '<br>Sexo: ' . $this->leitor->getSexo();
        echo '<br>Total de páginas: ' . $this->getTotPaginas();
        echo '<br>Página atual: ' . $this->getPagAtual();
        echo '<br>Aberto: ' . $this->getAberto();
        echo '<br>Leitor: ' . $this->leitor->getNome();
        echo '<hr>';
    }
    
    // Método Contrutor
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }

    
    // Métodos Especiais
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }
    
    // Métodos Abstratos da Interface
    public function abrir() {
        $this->aberto = true;
    }

    public function fechar() {
        $this->aberto=false;
    }
    
    public function folhear($pagina) {
        if ($pagina > $this->getTotPaginas()) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $pagina;
        }
    }
    
    public function avançarPag() {
        $this->setPagAtual($this->getPagAtual() + 1);
    }

    public function voltarPag() {
        $this->setPagAtual($this->getPagAtual() - 1);
    }

}
