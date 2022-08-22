<?php 
    $string = "Mi sposai giovane, e fui felice di trovare in mia moglie una indole congeniale <br>
    alla mia. Osservando la mia predilezione per gli animali domestici, non perdeva <br>
    occasione di procurarmi quelli delle specie più piacevoli. Avevamo uccelli, pesci <br>
    dorati, un bellissimo cane, conigli, una scimmietta e un gatto. <br>
    Quest'ultimo era un animale eccezionalmente forte e bello, tutto nero, e <br>
    straordinariamente sagace. Quando parlava della sua intelligenza, mia moglie, che <br>
    in cuor suo era non poco imbevuta di superstizione, alludeva spesso all'antica <br>
    credenza popolare che considerava tutti i gatti neri streghe travestite. Non che ne <br>
    parlasse seriamente: se accenno alla cosa, è solo perché proprio ora mi è capitato di <br>
    rammentarmene. <br>
    Pluto ‐ era questo il nome del gatto ‐ era il mio beniamino, il mio compagno di <br>
    giochi. Io solo gli davo da mangiare, e in casa lui mi seguiva dovunque andassi, Anzi, <br>
    a fatica riuscivo a impedirgli di accompagnarmi per la strada. <br>
    La nostra amicizia durò a questo modo per parecchi anni, durante i quali il <br>
    mio temperamento, il mio carattere (arrossisco a confessarlo) avevano subìto, ad <br>
    opera del demone dell'Intemperanza, un radicale peggioramento. Giorno dopo <br>
    giorno divenni più lunatico, più irritabile, più indifferente ai sentimenti altrui. Mi <br>
    lasciai andare al punto di usare con mia moglie un linguaggio brutale. Alla fine, <br>
    arrivai anche a picchiarla. I miei animali, naturalmente, risentirono di questo <br>
    mutamento d'umore. Non solo li trascurai, ma li maltrattai. Per Pluto, tuttavia, <br>
    conservavo ancora quel tanto di riguardo che bastava a impedirmi di malmenarlo <br>
    come, senza scrupolo alcuno, malmenavo i conigli, la scimmia o anche il cane, <br>
    quando per caso o per affetto mi venivano tra i piedi. Ma la mia malattia mi <br>
    divorava sempre più (e quale malattia è paragonabile all'alcool?), e alla fine anche <br>
    Pluto, che si faceva vecchio e di conseguenza un po' fastidioso anche Pluto cominciò <br>
    a provare gli effetti del mio malumore. <br>
    Una notte, tornando a casa, ubriaco fradicio, da uno dei ritrovi che <br>
    frequentavo in città, ebbi l'impressione che il gatto evitasse la mia presenza. Lo <br>
    afferrai; e allora, impaurito dalla mia violenza, coi denti mi ferì lievemente alla <br>
    mano. Subito la furia di un demone si impadronì di me. Non mi conoscevo più.";

    $censoredWord = $_GET["censoredWord"];
    $censoredString = str_replace($censoredWord, "*****", $string);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head>
<body>
    <h1>Il Gatto Nero</h1>
    <h3>Parola censurata:
        <?php 
            echo $censoredWord;
        ?>
    </h3>
    <p>
        <?php 
            echo $censoredString;
        ?>
    </p>    
</body>
</html>