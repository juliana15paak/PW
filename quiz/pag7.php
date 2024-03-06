<?php
    $radio6 = $_POST["radio6"];
    session_start();
    $_SESSION["radio6"] = $radio6;
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
            <h2>Quantas Temporadas tem Gravity Falls?</h2>
            <div class="form">
                <form class="container" action="pag8.php" method="post">
                    <div class="row align-items-start">
                <main>
                    <div class="content">
                        <span class="spnQtd"></span>
                        <span class="question"></span>
                        <div class="answers"></div>
                    </div>
                    <div class="imagem">
                        <div>
                            <img src="image/gra.webp"></img>
                        </div>
                    <div class="inputbox">
                                    <p class="p"><b>alternativas</b><br><input type="radio" name="radio7"  class="inputUser" id="radio" value="a">1 Temporada</p>
                                    <p class="p"> <input type="radio" name="radio7" class="inputUser" id="radio" value="b">5 Temporada</p>
                                    <p class="p"> <input type="radio" name="radio7" class="inputUser" id="radio" value="c">2 Temporada</p>
                                    <p class="p"> <input type="radio" name="radio7" class="inputUser" id="radio" value="d">9 Temporada</p>
                                    <p class="p"> <input type="radio" name="radio7" class="inputUser" id="radio" value="e">3 Temporada</p>
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