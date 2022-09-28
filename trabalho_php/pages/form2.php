<h1> Cadastro de Clientes </h1>
<p> Formulário para Cadastro de Clientes </p>

<form method="get">
<input type="hidden" name="p" value="form2">
  <label> Nome: </label>
  <input type="text" name="nome"><br>
  <label> telefone: </label>
  <input type="text" name="telefone"><br>
  <label> CPF: </label>
  <input type="text" name="cpf"><br>
  <label> Data de Nascimento: </label>
  <input type="text" name="dataNascimento"><br>
  <label> Endereço: </label>
  <input type="text" placeholder="Nome da rua, número da residência" name="rua"><br>
  <label> Bairro: </label>
  <input type="text" name="bairro"><br>
  <label> Cidade: </label>
  <input type="text" name="cidade"><br>
  <label> Estado: </label>
  <input type="text" name="estado"><br>
  <input type="submit" value="Enviar">
</form>

<div class='resultado'>
    <?php
        if(isset($_GET['nome'])){
            echo "Nome: ".$_GET["nome"]."<br>";
            echo "Telefone: ".$_GET["telefone"]."<br>";
            echo "CPF: ".$_GET["cpf"]."<br>";
            echo "Data de Nascimento: ".$_GET["dataNascimento"]."<br>";
            echo "Endereço: ".$_GET["rua"]."<br>";
            echo "Bairro: ".$_GET["bairro"]."<br>";
            echo "Cidade: ".$_GET["cidade"]."<br>";
            echo "Estado: ".$_GET["estado"]."<br>";
            
            if($_GET["nome"] == ""){
                echo "Preencha o seu Nome <hr>";
            }
            if($_GET["telefone"] == ""){
                echo "Preencha o seu telefone <hr>";
            }
            if($_GET["cpf"] == ""){
                echo "Preencha o seu CPF <hr>";
            }
        }
    ?>
</div>

