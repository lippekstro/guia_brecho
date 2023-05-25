<?php
include_once "/opt/lampp/htdocs/guia_brecho/templates/cabecalho.php"
?>

<div>
        <form action="" autocomplete="off" method="POST">
            <fieldset>
                <h1>Login</h1>
                <p>Digite os seus dados de acesso nos campos abaixo.</p>
                <div style="display: flex; align-items: center;">
                    <input type="mail" name="nome" id="nome" placeholder="E-mail" required autofocus>
                </div>
                <div style="display: flex; align-items: center;">
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                </div>
                <button type="submit">Acessar</button>
                <p><a href="esqueci_senha.html">Esqueci minha senha</a></p> 
                <p><a href="cadastrar.html">Cadastrar</a></p> 

            </fieldset>
         </form>
</div>

<?php
include_once "/opt/lampp/htdocs/guia_brecho/templates/rodape.php"
?>