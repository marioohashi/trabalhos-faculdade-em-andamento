<h1>Página de Cálculo</h1>

<p> Esta página tem a finalidade de paresentar o cálculo de quantos litros de tintas são necessários para cobrir uma superfície.</p>  

<form method="get">
    <!-- criando um get de página -->
    <input type="hidden" name="p" value="form3">
    <label>Altura da área é: </label>
    <input type="text" name="alt"><br>
    <label>Largura da área é: </label>
    <input type="text" name="larg"><br>
    <input type="submit" value="Calcular">
</form>

<?php
     if(isset($_GET['alt'])){  
        echo "Altura da área: ".$_GET["alt"]."<br>";
        echo "Largura da área: ".$_GET["larg"]."<br>";

        //$area = (float)$_GET["area"] ;
        $alt = (float)$_GET["alt"] ;
        $larg = (float)$_GET["larg"] ;
        $litro = 1 ;

        $area = $alt * $larg ;
      
        echo "A área total é: ". $area . "m2";

        $resultado = $area * $litro;
          
        echo " e você precisa de ".$resultado." litros para pintar esta área"; 
     }
?>
