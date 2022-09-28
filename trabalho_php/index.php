<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>
        <?php
            if(isset($_GET['p'])){
                
                $titulo = $_GET["p"];

                if ($titulo == "home"){
                    echo "Home";
                } elseif($titulo == "form1"){
                    echo "Formulário 1";

                }elseif($titulo == "form2"){
                    echo "Formulário 2";

                }elseif($titulo == "form3"){
                    echo "Formulário 3";

                }else{
                    echo "Titulo ERRO";
                }
            } else {
                echo "Titulo Home";
            }
        ?>
    </title>
</head>
<body>
    <?php
        require_once("./header.php");
    ?>
    <div class="main">
        <?php
            if(isset($_GET["p"])){
                $page = $_GET["p"];
            } else {
                $page = "home";
            }

            switch($page){
                case "home":
                    require_once("./pages/home.php");
                break;
                case "form1":
                    require_once("./pages/form1.php");
                break;
                case "form2":
                    require_once("./pages/form2.php");
                break;
                case "form3":
                    require_once("./pages/form3.php");
                break;
                default:
                    require_once("./pages/error404.php");
                break;
            }
        ?>
    </div>
    <?php
        require_once("./footer.php");
    ?>
</body>
</html>