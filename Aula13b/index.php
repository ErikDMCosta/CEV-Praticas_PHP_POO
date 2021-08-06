<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>
        <?php
            //Programa Principal
            #require_once 'Animal.php'; // Erro de classe abastrata
            require_once 'Mamifero.php';
            require_once 'Lobo.php';
            require_once 'Cachorro.php';
            
            /*
            $m = new Mamifero();
            $l = new Lobo();
            $c = new Cachorro();
            
            $m->emitirSom();
            $l->emitirSom();
            $c->emitirSom();
            */
            
            //Programa Principal
            $c = new Cachorro();
            $c->reagirFrase("Olá");             // Abanar e Latir
            $c->reagirFrase("Vai Apanhar!");    // Rosnar
            
            $c->reagirHora(11,45);              // Abanar
            $c->reagirHora(21,00);              // Ignorar
            
            $c->reagirDono(true);               // Abanar
            $c->reagirDono(false);              // Rosnar e Latir
            
            $c->reagirIdadePeso(2, 12.5);       // Latir
            $c->reagirIdadePeso(17, 4.5);       // Rosnar
            
        ?>
        </h1>
    </body>
</html>
