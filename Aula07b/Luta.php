<?php
class Luta {
    // Atributos
    private $desafiado;  // Tipo Abstrato de Dados
    private $desafiante; // Tipo Abstrato de Dados
    private $rounds;
    private $aprovada;

    // Métodos Personalizados
    public function marcarLuta($l1 , $l2) {
        if (($l1->getCategoria() === $l2->getCategoria()) && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    
    public function lutar() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0: // Empate
                    echo"<p>Empatou!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: // Ganhou Desafiado
                    echo "<p>" . $this->desafiado->getNome() . " venceu.</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: // Ganhou Desafiante
                    echo "<p>" . $this->desafiante->getNome(). " venceu.</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
            
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
    }
    
    // Métodos Especiais
    function getDesafiado() {
        return $this->desafiado;
    }
    
    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }
    
    function getDesafiante() {
        return $this->desafiante;
    }
    
    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }
    
    function getRounds() {
        return $this->rounds;
    }
    
    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function getAprovado() {
        return $this->aprovado;
    }
    
    function setAprovado($aprovado) {
        $this->aprovado = $aprovado;
    }
    
}
