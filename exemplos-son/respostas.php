<?php
    echo "<br /><b>Resposta 1 -> B</b>";
    $x=2;
    function skill()
    {
        echo "<label>x=$x</label>";
    }
    skill();
    echo "<i>A variável estava fora do escopo da função.</i>";

    echo "<hr />";

    echo "<br /><b>Resposta 2 -> C </b>";
    $var = strlen("I´m in São Paulo ");
    echo "<label>var=$var</label>";
    echo "<i>O caracter especial ocupa 2 espaços</i>";

    echo "<hr />";

    echo "<br /><b>Resposta 3 -> A </b>";
?>