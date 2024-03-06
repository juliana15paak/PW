<?php
    $radio8 = $_POST["radio8"];
    session_start();
    $_SESSION["radio8"] = $radio8;
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
            <h2>Bill Cipher ele é?</h2>
            <div class="form">
                <form class="container" action="pag10.php" method="post">
                    <div class="row align-items-start">
                <main>
                    <div class="content">
                        <span class="spnQtd"></span>
                        <span class="question"></span>
                        <div class="answers"></div>
                    </div>
                    <div class="imagem">
                        <div>
                            <img src="image/vilao.gif"></img>
                        </div>
                    <div class="inputbox">
                                    <p class="p"><b>alternativas</b><br><input type="radio" name="radio9"  class="inputUser" id="radio" value="a">Amigo de Dipper</p>
                                    <p class="p"> <input type="radio" name="radio9" class="inputUser" id="radio" value="b">Amigo de Mabel</p>
                                    <p class="p"> <input type="radio" name="radio9" class="inputUser" id="radio" value="c">Vilão</p>
                                    
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