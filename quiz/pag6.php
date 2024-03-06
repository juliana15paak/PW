<?php
    $radio5 = $_POST["radio5"];
    session_start();
    $_SESSION["radio5"] = $radio5;
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
            <h2>Qual é o nome do animal de estimaçao de Mabel?</h2>
            <div class="form">
                <form class="container" action="pag7.php" method="post">
                    <div class="row align-items-start">
                        <main>
                            <div class="content">
                                <span class="spnQtd"></span>
                                <span class="question"></span>
                                <div class="answers"></div>
                            </div>
                            <div class="imagem">
                                <div>
                                    <img src="image/animal.jpg"></img>
                                </div>
                            <div class="inputbox">
                                            <p class="p"><b>alternativas</b><br><input type="radio" name="radio6"  class="inputUser" id="radio" value="a">Waddles</p>
                                            <p class="p"> <input type="radio" name="radio6" class="inputUser" id="radio" value="b">Peppa</p>
                                            <p class="p"> <input type="radio" name="radio6" class="inputUser" id="radio" value="c">Maya</p>
                                            <p class="p"> <input type="radio" name="radio6" class="inputUser" id="radio" value="d">Porquinha</p>
                                            <p class="p"> <input type="radio" name="radio6" class="inputUser" id="radio" value="e">Rosa</p>
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