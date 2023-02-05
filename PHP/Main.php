<?php
    require_once('Estoque.php');
    require_once('Produtos.php');
    require_once('Endereco.php');
    require_once('Modelo/DAO/Conexao.php');
    require_once('LoginUsuario.php');

    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\LoginUsu;



  /*
    // Instanciando um objeto da classe Estoque
  $estoque = new Estoque();
 
  $endereco = new Endereco("Rua Paraíba", "108", "fundos", "Vila conceição","São José Dos Campos","SP","Brasil","099450123");
  $funcionario = new Funcionario("35169745633", "Joel Santana", "11 9 45326978", $endereco, "2119", 3500.00, "Estoquista");
  
  // Adicionando produtos ao estoque
  $produto1 = new Produtos("Arroz", 10, 20.90);
  $produto2 = new Produtos("Pasta de dente", 5, 15.99);
  $produto3 = new Produtos("Sabonete Lux", 2, 4.99);
  
  $estoque->adicProduto($produto1);
  $estoque->adicProduto($produto2);
  $estoque->adicProduto($produto3);
  
  // Exibindo a lista de produtos
  $estoque->listarProdutos();
  
  echo $endereco->logradouro." - N°: ".$endereco->numero." - Complemento: ".$endereco->complemento."<br>Bairro: ".$endereco->bairro." - Cidade: ".$endereco->cidade." - UF: ".$endereco->uf."<br>País: ".$endereco->pais." - CEP: ".$endereco->cep;*/

  echo "------ Teste Banco De Dados ------<br><br>";
  $conexao = new Conexao();
  $conexao->conectar();//abrindo a conexão com banco de dados

  echo "<br><br>------ Teste do LOGIN e SENHA ------<br><br>";

  //Incluindo o usuario e senha
  $login = new LoginUsu("jr1986", "sen@c");
  if ($login->autenticar()) {
      echo "Autenticado com sucesso";
      return;
  }
  echo "Usuário ou senha inválidos";
  //Fim do incluindo o usuario e senha

 

?>
 