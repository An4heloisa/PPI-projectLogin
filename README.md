# PPI-projectLogin

index.php

Esse código recebe o e-mail e a senha digitados pelo usuário através do método $_POST, verifica se os campos foram preenchidos e se uma variável existe com o isset(). Usando o $mysqli->query() consulta o banco de dados para procurar um usuário com essas informações. 
Se encontrar, inicia uma sessão e armazena o ID e o nome do usuário com o $_SESSION e o fetch_assoc() e redireciona para painel.php com o header(). Caso não encontre, exibe uma mensagem de erro. Também possui um include() para o arquivo de "conexao.php". O código funciona como uma ponte entre o formulário HTML, o PHP e o banco de dados.

conexao.php

é o arquivo responsável por conectar o projeto com o banco de dados, logo contém todas as variáveis necessárias dentro dele. Inclusive a variável $mysqli que é criada para permitir que o código converse com o banco de dados.

painel.php

Esse código protege uma página para usuários logados com o include('protect.php'). O $_SESSION['nome'] recupera o nome do usuário que foi armazenado na sessão durante o login. Também possui um link de logout oferecendo um botão para sair da conta.

protect.php
 É o arquivo responsável por proteger uma página contra acessos de usuários não logados. Ele inicia a sessão e depois verifica se existe um id dentro dela. Se o id não existir, significa que o usuário não fez login, então o acesso é bloqueado e uma mensagem é exibida. 

logout.php 
Esse arquivo serve para deslogar o usuário do sistema. Primeiro, ele verifica se a sessão existe e, caso não exista, inicia uma. Depois, usando session_destroy() encerra a sessão, apagando as informações armazenadas nela, como o ID e o nome do usuário. Por fim, leva para a página inicial.
