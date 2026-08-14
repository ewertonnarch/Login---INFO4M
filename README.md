# Login---INFO4M
Projeto de Login do 2º/3º bimestre de Programação para Internet. 


Aluno: EWERTON JOSÉ DA SILVA SOUZA, 20231134010009.

"conexao.php" - esse arquivo funciona como ponte entre o usuário (do computador) e o banco de dados, ele auxilia, por meio das variáveis, na identificação do usuário e em seu login dentro do mysql;

"index.php" - é o arquivo principal. nele, a página é construída em sua base (tanto no HTML para questão visual e de preenchimento, quanto no PHP para a criação da lógica de variáveis e de login). nele, o 'conexao.php' é incluído para que o banco de dados possa funcionar e, além disso, é construída a lógica para que seja possível consultar o banco de dados e saber se o email e senha de usuários apresentado é válido e existente dentro do banco de dados, bem como a construção da falha de login (caso exista);

"logout.php" - construção da lógica de um if para que a sessão seja encerrada quando pedida;

"painel.php" - painel de login, quando o login é validado, o usuário é levado a essa parte do código (o painel conta somente com o HTML, sem uma lógica além do "include" que inclui o 'protect.php';

"protect.php" - lógica que protege o 'painel.php' de ser acessado sem um login válido verificando se existe uma 'sessão' de usuário válida para acesso à página.


