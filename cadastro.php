<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastre-se</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/cadastro.css"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <header class="cabecalho">
      <div class="boxLogo">
        <img class="logo" src="./assets/evernote.png" alt="logo"/>
      </div>
      <nav>
        <ul class="nav__menu">
          <li>Início</li>
          <li>Configuração</li>
          <li>Sair</li>
        </ul>
      </nav>
    </header>
    <main class="container">
      <form action="conexao/cadastro.php" method="POST" onsubmit="return enviar(event)">
        <label for="nomeUsuario">Nome</label>
        <input type="text" id="nomeUsuario" name="nomeUsuario" placeholder="Digite aqui..." maxlength="30" required/>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Digite aqui..." maxlength="50" required/>
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="Digite aqui..." maxlength="30" required/>
        <label for="confirmSenha">Confirme a senha</label>
        <input type="password" id="confirmSenha" name="confirmSenha" placeholder="Digite a senha novamente..." maxlength="30" required/>
        <button type="submit">Cadastrar</button>
      </form>
    </main>
    <script>
        function verificandoSenha(){
            var passWord = document.getElementById('senha').value;
            var confirm = document.getElementById('confirmSenha').value;
            if(passWord === confirm){
                console.log('enviar formulario');
                return true;
            }else{
                Swal.fire({
                    icon:"error",
                    title:"Erro Senha",
                    text:"Senhas não estão iguais",
                });
                return false;
            }
        }
        function enviar(e){
            if(!verificandoSenha()){
              e.preventDefault(); 
              return false;
            }
            return true; 
        }
    </script>
  </body>
</html>
