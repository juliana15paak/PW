<?php
    $radio3 = $_POST["radio3"];
    session_start();
    $_SESSION["radio3"] = $radio3;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style1.css?25">
        <title>Quiz</title>
    </head>
    <body>
        <br>
        <h2>Qual o nome deste personagem?</h2>
        <div class="form">
            <form class="container" action="pag5.php" method="post">
                <div class="row align-items-start">
                    <main>
                        <div class="content">
                            <span class="spnQtd"></span>
                            <span class="question"></span>
                            <div class="answers"></div>
                        </div>
                        <div class="imagem">
                            <div>
                                <img src="image/soos.jpeg"></img>
                            </div>
                        <div class="inputbox">
                                <p class="p"><b>Alternativas</b><br><input type="radio" name="radio4"  class="inputUser" id="radio" value="a">Diogo</p>
                                <p class="p"> <input type="radio" name="radio4" class="inputUser" id="radio" value="b">Pires</p>
                                <p class="p"> <input type="radio" name="radio4" class="inputUser" id="radio" value="c">Soos</p>
                                <p class="p"> <input type="radio" name="radio4" class="inputUser" id="radio" value="d">Gustavo</p>
                                <p class="p"> <input type="radio" name="radio4" class="inputUser" id="radio" value="e">Renato</p>
                        </div>
                        <div>
                            <span></span>
                            <button>proximo</button>
                        </div>
                        </div>
                    </main>
                </div>
            </form>
        </div>
    </body>
</html>