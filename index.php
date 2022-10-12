<!--
    Esercizio di oggi: PHP Badwords

    Descrizione:

    Creare una variabile con un paragrafo di testo a vostra scelta.

    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    
    Stampare di nuovo il paragrafo e la sua lunghezza,
    dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
-->

<?php

$wordToHide = $_GET["word"];

$textToScan = "
    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
    Earum maiores quasi maxime tempora, iusto eos, vitae soluta saepe commodi atque excepturi?
    Dignissimos odit ipsum ad placeat nostrum cupiditate qui minus!

    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
    Ex esse sed quis ad quo, qui atque voluptates quidem a minima dignissimos iusto placeat illo,
    totam, ut aspernatur odit reprehenderit! Repudiandae?
";

$cleanText = str_replace ( $wordToHide , "***" , $textToScan );

$textLength = strlen ( $textToScan );

?>

<p>
    Il paragrafo a disposizione è:
    <p>
        <?php echo $textToScan ?>
    </p>
    
</p>

<hr>

<p>
    La lunghezza del paragrafo è:
    <p>
        <?php echo $textLength ?>
    </p>
</p>

<hr>

<p>
    La parola da censurare è:
    <?php echo $wordToHide ?>
</p>

<hr>

<p>
    Il testo pulito è:
    <p>
        <?php echo $cleanText ?>
    </p>
</p>