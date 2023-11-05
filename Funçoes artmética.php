    <?php
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];
            echo"<h2> valores recebidos $v1 e $v2</h2>"; 
            echo "O valor absoluto de $v2 e ". abs($v2); 
            echo "O valor de $v1 <sup>$v2</sup> e ". pow($v1, $v2); 
            echo "Digite a funcao:", $_GET["formulario"], "<br/>";
            echo "<br/>A raiz de  $v1 e". sqrt($v1);
            echo "<br/>O valor de $v2 arredondado e ". round($v2); //arredondar pra cima "ceil" e floor arredonda para baixo
            echo "<br/>A interira de $v2 e ". intval($v2);
            echo "<br/>P valor de $v1 em moeda e R$". number_format($v1,2,",", ".");
        ?>
