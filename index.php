<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=3">
    <meta name="description" content="Aprendendo">
    <meta name="keywords" content="aprendendo,teste">
    <meta name="author" content="Edir R.M.">

    <title>Hello World</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/jquery-3.1.0.js" ></script>
    <script src="js/script.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>

<body class="container" id="body">

    <header class="cabecalho"><!--cabeçalho-->
        <div class="container" id="titulo">
            <h1>Hello</h1>
        </div>
        <div class="row" id="bemVindo">
            <h2><p>Welcome</p></h2>
        </div>
        <div class="navBar">
        <nav id="menuTOP">
            <ul>
                <li>
                    <a href="#">Wallpappers</a>
                    <a href="#">Images</a>
                    <a href="#">Screan Shots</a>
                    <a href="#">Video</a>
                    <a href="#">Help</a>
                </li>
            </ul>
        </nav>
        </div>
    </header>

        <section id="main"><!--conteudo principal-->
            <pre>
            <?php

            require_once 'banco.php';
            echo "</br>";
                $p1 = new Banco();
                $p2 = new Banco();
            
                $p1->setDono("jaguara");
                $p1->abrirConta("CC");
                $p1->setNumConta(1111);
                $p1->depositar(200);
                $p1->sacar(30);
                $p1->pagarMensal();

            echo "</br>";
                $p2->setDono("tranquera");
                $p2->abrirConta("CP");
                $p2->setNumConta(2222);
                $p2->depositar(300);
                $p2->sacar(100);
                $p2->pagarMensal();
            
            print_r($p1);
            print_r($p2);

            require_once 'poo.php';
        echo "</br>";
            $ca = new Carro();
            $ca->setAno("1990");
            $ca->setMarca("BMW");
            $ca->setModelo("s35");
            $ca->setEstado("usado");
            $ca->setGarantia(false);
            $ca->vendas();
            $ca->chekup();
            $ca->estadoCarro();
         var_dump($ca);

         echo "</br>";
            $ca = new Carro();
            $ca->setAno("2016");
            $ca->setMarca("BMW");
            $ca->setModelo("V350");
            $ca->setEstado("novo");
            $ca->setGarantia(true);
            $ca->vendas();
            $ca->chekup();
            $ca->estadoCarro();
         var_dump($ca);


            ?>
            </pre>
        </section>
        <section id="destaques"><!--conteudo em destaque-->
            <pre>
            <?php

                require_once 'poo.php';

            // $c1 = new Caneta("BIC", "Azul", "0.5");     metodo construtor
            // $c2 = new Caneta("ZIG", "preta", "1.0");     metodo construtor
                $c1 = new Caneta();
                $c1->setCor("azul");
                $c1->setPonta(0.5);
                $c1->setModelo("BIC");
                $c1->setTampada(false);
                $c1->destampar();
                $c1->rabiscar();
            //var_dump($c1);      pode usar o var_dump ou print_r
            //var_dump($c2);
            var_dump($c1);

            echo "</br>";
                $c2 = new Caneta();
                $c2->setCor("verde");
                $c2->setCarga(60);
                $c2->setTampada(true);
                $c2->tampar();
                $c2->rabiscar();
                $c2->carga();
            var_dump($c2);

            echo "</br>";
                $c3 = new Caneta();
                $c3->setCor("preta");
                $c3->setPonta(1.0);
                $c3->setModelo("ZIG");
                $c3->setCarga(10);
                $c3->destampar();
                $c3->rabiscar();
                $c3->carga();
            var_dump($c3);

            echo "</br>";
            print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
            echo "</br>";


            ?>
            </pre>
        </section>

    <footer class="rodape"><!--rodape-->

    </footer>
</body>
</html>
