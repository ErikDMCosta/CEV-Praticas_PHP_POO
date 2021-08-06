<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        <?php 
            //require_once 'Pessoa.php';
            #$p1 = new Pessoa(); # Uma classe abstrata não pode virar um objeto
            
            /*
            require_once 'Visitante.php';
            $v1 = new Visitante();
            $v1->setNome("Juvenal");
            $v1->setIdade(33);
            $v1->getSexo("M");
            print_r($v1);
            */
            
            require_once 'Aluno.php';
            $a1 = new Aluno();
            $a1->setNome("Pedro");
            $a1->setMatricula(1111);
            $a1->setIdade(16);
            $a1->setSexo("M");
            $a1->setCurso("Informática");
            $a1->pagarMensalidade();
            print_r($a1);
            
            require_once 'Bolsista.php';
            $b1 = new Bolsista();
            $b1->setMatricula(1112);
            $b1->setNome("Jubileu");
            $b1->setBolsa(12.5);
            $b1->setCurso("Administração");
            $b1->setIdade(17);
            $b1->pagarMensalidade();
            print_r($b1);
            
        ?>
    </body></pre>
</html>
