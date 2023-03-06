<?php
    require_once("./verificacookie.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body id="body_list">

    <?php
        require_once("acesso_banco.php");
        $posts = select_post();
    ?>
    <header>
            <?php
                $login = $_COOKIE['login'];
            ?>
            <div id="menu_nav">
                <a href="pag1.php">Home</a>
                <a href="form_post.php">Criar post</a>
            </div>
            <div class=dropdown>
                <button id=menubutton><?php echo $login ?><img src="img/seta.png" alt=""></button>
                <div class="submenu">
                    <a href="session.php">Sair</a>
                </div>
            </div>
    </header>
    <section>
        <div class=section>
            <div class="post">
                <?php
                    foreach($posts as $post){
                ?>
                <div class="conteudopost">
                <div class="postinfo">

                    <div class="titulopost">
                        <h2><?php echo $post['tt_post']?></h2>
                    </div>
                    <div class="textopost">
                        <p><?php echo $post['ds_post']?></p>
                    </div>
                    </div>
                    <div class="postbotoes">
                        <div class="botao">
                            <a href="form_post.php?id=<?php echo $post['id_post']?>"><img src="img/escrever.png" alt=""></a>
                        </div>
                        <div class="botao">
                        <a href="excluir_post.php?id=<?php echo $post['id_post']?>"><img src="img/excluir.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <footer>

    </footer>
</body>

</html>