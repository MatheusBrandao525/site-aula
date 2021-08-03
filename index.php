<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Projeto_01</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Palavras-chave, de, um, site">
    <meta name="description" content="Descrição do meu site">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>
<body>
    <header>
    <div class="center">

        <div class="logo left">Logo-marca</div><!--logo-->

        <nav class="desktop right">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">contato</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">sobre</a></li>
            </ul>
        </nav><!--desktop-->

        <nav class="mobile right">
            <div class="botao-menu-mobile">
            <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">contato</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">sobre</a></li>
            </ul>
        </nav><!--mobile-->
        <div class="clear"></div><!--clear-->
        </div><!--center-->
    </header>

    <?php 
        $url = isset($_GET['url']) ? $_GET['url']: 'home';
        
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        } else{
            $pagina404 = true;
            include('pages/404.php');
        }
    ?>

    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
        <div class="center">
            <p>Todos os direitos reservados!</p>
        </div>
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/Jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>
</body>
</html>