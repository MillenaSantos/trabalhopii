<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Criação de post</title>
</head>
<body id="body_post">
    <?php
        require_once("acesso_banco.php");
        $tipos = select_tipos();
        $nichos = select_nichos();
    ?>
    <header>
            <?php
                $login = $_COOKIE['login'];
                ?>
                <div id="menu_nav">

                    <a href="pag1.php">Home</a>
                </div>
                    <div class=dropdown>
                        <button id=menubutton><?php echo $login ?><img src="img/seta.png" alt=""></button>
                        <div class="submenu">
                            <a href="session.php">Sair</a>
                        </div>
                    </div>
    
    </header>
    <section>
        <div id="form_post">
    <h2>Cadastro do post</h2>
        <br>
        <?php
            if(ISSET($_GET['id'])){
                $post=select_post_id($_GET['id']);
            }
        ?>
    <form action="<?php if(!ISSET($post)){echo 'insert_post.php'}else{ echo 'editar_post.php?id='$post['id_post']}?>" method="POST">
        <input placeholder="Título" type="text" name="titulo" id="titulo" value="<?php if(ISSET($post)){ echo $post[0]['tt_post'];}?>">
        <br><br>
        <label for="tipo">Tipo</label>
        <select name="tipo" id="tipo">
            <?php
                foreach($tipos as $tipo){
                    if(ISSET($post) and $post[0]['id_tipo']==$tipo['id_tipo']){
                        echo "<option selected name=\"".$tipo['id_tipo']."\" value=\"".$tipo['id_tipo']."\">".$tipo['nm_tipo']."</option>";
                    }else{
                        echo "<option name=\"".$tipo['id_tipo']."\" value=\"".$tipo['id_tipo']."\">".$tipo['nm_tipo']."</option>";
                    }
                }   
            ?>          
        </select>
        <br><br>
        <label for="nicho">Nicho</label>
        <select name="nicho" id="nicho">
            <?php
                foreach($nichos as $nicho){
                    if(ISSET($post) and $post[0]['id_nicho']==$nicho['id_nicho']){
                        echo "<option selected name=\"".$nicho['id_nicho']."\" value=\"".$nicho['id_nicho']."\">".$nicho['nm_nicho']."</option>";
                    }else{
                        echo "<option name=\"".$nicho['id_nicho']."\" value=\"".$nicho['id_nicho']."\">".$nicho['nm_nicho']."</option>";
                    }
                }   
            ?>          
        </select>
        <br><br>
        <textarea placeholder="Descrição" name="descricao" id="descricao" cols="39" rows="10"><?php if(ISSET($post)){ echo $post[0]['ds_post'];}?></textarea>
        <br><br>
        <div id="button">
            <button type="submit"><?php if(ISSET($post)){ echo "Atualizar";}else{echo "Cadastrar";}?></button>
        </div>
    </form>
    </div>

    </section>

    <footer>

    </footer>
</body>
</html>