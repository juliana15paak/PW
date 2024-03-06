
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css?25">
    <title>Quiz</title>
</head>

<body>
    <main>
        <form class="container" action="index.html" method="post">
            <div class="row align-items-start">
                <main>
                    <div class="content">
                        <span class="spnQtd"></span>
                        <span class="question"></span>
                        <div class="answers"></div>
                    </div>
                    <div class="imagem">
                        <div class="inputbox">
                        <br><br>
                        <?php
                            $q10 = $_POST["radio10"];
                            session_start();
                            $q1 =$_SESSION["radio"];
                            $q2 =$_SESSION["radio2"];
                            $q3 =$_SESSION["radio3"];
                            $q4 =$_SESSION["radio4"];
                            $q5 =$_SESSION["radio5"];
                            $q6 =$_SESSION["radio6"];
                            $q7 =$_SESSION["radio7"];
                            $q8 =$_SESSION["radio8"];
                            $q9 =$_SESSION["radio9"];
                            

                            $resposta1 = "b";
                            $resposta2 = "d";
                            $resposta3 = "e";
                            $resposta4 = "c";
                            $resposta5 = "e";
                            $resposta6 = "a";
                            $resposta7 = "c";
                            $resposta8 = "b";
                            $resposta9 = "c";
                            $resposta10 = "b";

                            $acertou = 0;
                            $errou = 0;

                            if($q1 == $resposta1){
                                $acertou++;
                                echo "Questão 1 - Parabéns Você acertou <br><br>";
                            }else{	   
                            $errou++;
                            echo "Questão 1 -  A resposta está errada a alternativa Correta seria letra b <br><br>";
                            }if($q2 == $resposta2){
                                $acertou++;
                                echo "Questão 2 - Parabéns Você acertou<br><br>";
                            }else{
                                $errou++;
                                echo "Questão 2 - A resposta está errada a alternativa correta seria letra d<br><br>";
                            }if($q3 == $resposta3){
                                $acertou++;
                                echo "Questão 3 - Parabéns Você acertou<br><br>";
                            }else{
                                $errou++;
                                echo "Questão 3 - A resposta está errada a alternativa correta seria letra e<br><br>";
                            }if($q4 == $resposta4){
                                $acertou++;
                                echo "Questão 4 - Parabéns Você acertou <br><br>";
                            }else{	   
                            $errou++;
                            echo "Questão 4 -  A resposta está errada a alternativa Correta seria letra c<br><br>";
                            }if($q5 == $resposta5){
                                $acertou++;
                                echo "Questão 5 - Parabéns Você acertou<br><br>";
                            }else{
                                $errou++;
                                echo "Questão 5 - A resposta está errada a alternativa correta seria letra e<br><br>";
                            }if($q6 == $resposta6){
                                $acertou++;
                                echo "Questão 6 - Parabéns Você acertou<br><br>";
                            }else{
                                $errou++;
                                echo "Questão 6 - A resposta está errada a alternativa correta seria letra a<br><br>";
                            }if($q7 == $resposta7){
                                $acertou++;
                                echo "Questão 7 - Parabéns Você acertou <br><br>";
                            }else{	   
                            $errou++;
                            echo "Questão 7 -  A resposta está errada a alternativa Correta seria letra c<br><br>";
                            }if($q8 == $resposta8){
                                $acertou++;
                                echo "Questão 8 - Parabéns Você acertou<br><br>";
                            }else{
                                $errou++;
                                echo "Questão 8 - A resposta está errada a alternativa correta seria letra b<br><br>";
                            }if($q9 == $resposta9){
                                $acertou++;
                                echo "Questão 9 - Parabéns Você acertou<br><br>";
                            }else{
                                $errou++;
                                echo "Questão 9 - A resposta está errada a alternativa correta seria letra c<br><br>";
                            }if($q10 == $resposta10){
                                $acertou++;
                                echo "Questão 10 - Parabéns Você acertou<br><br>";
                            }else{
                                $errou++;
                                echo "Questão 10 - A resposta está errada a alternativa correta seria letra b<br><br>";
                            }

                            echo "<br><br>Voce acertou $acertou e errou $errou <br><br>";
                            
                            /*casting de conversão para numero inteiro*/
                            
                            $porc_acertos = ($acertou * (100/ ( $acertou + $errou)));
                            
                            $porc_erros = ($errou * (100/ ( $acertou + $errou)));
                            
                            echo "Percentual de erros : $porc_erros%  <br> ";
                            
                            echo "Percentual de acertos : $porc_acertos%  <br> ";
                            
                        ?>
                        <br><br>
                        </div>
                        <div>
                            <span></span>
                            <button>Voltar ao início</button>  
                        </div>
                    </div>
                </main>
            </div>
        </form>
    </main>
</body>
</html>

