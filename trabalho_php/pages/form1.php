<h1> Regra de Três </h1>
<p>O cálculo da regra de 3 é feito separando-se os valores em duas colunas. Na primeira linha coloca-se o nome das grandezas em cada coluna. Na linha debaixo preenche-se os respectivos valores conhecidos das duas grandezas. Na terceira linha escreve-se o outro valor conhecido e na coluna do valor desconhecido coloca-se x.
</p>

<form method="get">
    <input type="hidden" name="p" value="form1">
    <label>A: </label>
    <input type="text" name="a">
    <span>está para</span>
    <label>B: </label>
    <input type="text" name="b">
    <p>assim como </p>
    <label>C: </label>
    <input type="text" name="c">
    <span>está para</span>
    <label>D: </label>
    <input type="text" name="d" disabled><br>
    <input type="submit" value="Calcular">
</form>
<div class='resultado'>
    <?php
        if (isset($_GET["a"])){

            $a = (float)$_GET["a"];
            $b = (float)$_GET["b"];
            $c = (float)$_GET["c"];

            if($a != 0 && $b != 0 && $c != 0) {
                $d = ($b*$c)/$a;
            } else {
                $d = null;
            }

            if($a == null || $b == null || $c == null) {
                if($_GET["a"] ==""){
                    echo "Preencha o valor de A <br>";
                } elseif ($_GET["b"] ==""){
                    echo "Preencha o valor de B <br>";
                } elseif ($_GET["c"] =="") {
                    echo "Preencha o valor de C <br>";
                }
            } else {
                echo "<hr><p>Resultado:</p>";
                echo $_GET["a"]." está para ".$_GET["b"]."<br>";
                echo "assim como <br>";
                echo $_GET["c"]." está para ".$d." <br>";
                echo "<hr>";
            }
        }
    ?>
</div>
