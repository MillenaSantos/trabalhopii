
<?php
    $html=file_get_contents('home.html');

    if(ISSET($_GET['errado'])){
        $html = str_replace("<!--mensagem de erro-->", "<div class=\"errado\" id=\"errado\">
        <p>Usuário ou senha incorretos!</p>
    </div><br><br>", $html);
    }
    echo $html;
?>
    