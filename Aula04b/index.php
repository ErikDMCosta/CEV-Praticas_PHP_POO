<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            
            $c1 = new Caneta("BIC", "Azul", 0.5);
            $c2 = new Caneta("KKK", "Verde", 1.0);
            
            print_r($c1);
            print_r($c2);
            /*
            $c1->setModelo("BIC");
            
            # $c1->modelo = "NIC";
            $c1->setPonta(0.5);
            # $c1->ponta = 0.4;
            // print_r($c1);
            print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
            print_r($c1);
            */
            
           
        ?>
        </pre>
    </body>
</html>
