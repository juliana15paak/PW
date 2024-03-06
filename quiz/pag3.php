<?php
    $radio2 = $_POST["radio2"];
    session_start();
    $_SESSION["radio2"] = $radio2;
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
                <form class="container" action="pag4.php" method="post">
                    <div class="row align-items-start">
                <main>
                    <div class="content">
                        <span class="spnQtd"></span>
                        <span class="question"></span>
                        <div class="answers"></div>
                    </div>
                    <div class="imagem">
                        <div>
                            <img src="image/wendy.jpeg"></img>
                        </div>
                    <div class="inputbox">
                                    <p class="p"><b>Alternativas</b><br><input type="radio" name="radio3"  class="inputUser" id="radio" value="a">Cardy chiu</p>
                                    <p class="p"> <input type="radio" name="radio3" class="inputUser" id="radio" value="b"> Mable Pires</p>
                                    <p class="p"> <input type="radio" name="radio3" class="inputUser" id="radio" value="c">Maria</p>
                                    <p class="p"> <input type="radio" name="radio3" class="inputUser" id="radio" value="d">Anna</p>
                                    <p class="p"> <input type="radio" name="radio3" class="inputUser" id="radio" value="e"> Wendy</p>
                        </div>
                        <div>
                            <span></span>
                            <button>Próximo</button>
                        </div>
                    </div>
                </main>
                    </div>
                </form>
            </div>
    </body>
</html>
