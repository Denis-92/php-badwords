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
    <br>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
    Ex esse sed quis ad quo, qui atque voluptates quidem a minima dignissimos iusto placeat illo,
    totam, ut aspernatur odit reprehenderit! Repudiandae?
";

$cleanText = str_replace ( $wordToHide , "***" , $textToScan );

$textLength = strlen ( $textToScan );

$testArray = explode( "," , "Lorem, ipsum, dorol, sit amte. ba bla bla , ciao" );

?>

Il paragrafo a disposizione è:

<br><br>

<?php echo $textToScan; ?>

<hr>
<br>

La lunghezza del paragrafo è:

<br><br>

<?php echo $textLength; ?>

<hr>
<br>

La parola da censurare è:
<form name="form" action="" method="get">
    <input type="text" name="word" id="word">
    <button type="submit">Censura</button>
</form>

<h2>
    <?php echo $wordToHide; ?>
</h2>

<hr>
<br>

Il testo pulito è:

<br><br>

<?php echo $cleanText; ?>

<hr>
<br>

La lunghezza del paragrafo pulito è:

<br><br>

<?php echo strlen ( $cleanText ); ?>

<hr><hr>

<p>Test array</p>
<pre>
<?php var_dump( $testArray ); ?>
</pre>