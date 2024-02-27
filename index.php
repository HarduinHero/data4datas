<?php
    $json = file_get_contents('data/datas.json');
    $json_data = json_decode($json,true);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/style.css">
    <title>D4D</title>
    <script src="/static/js/index.js"></script>
</head>
<body>
    <h1>Data for Datas</h1>
    <h2>Le test de la malveillance #1</h2>

    
    <section id="answerSection">
        
    <hr>
        
        <datalist id="markers">
            <option value="-10"></option>
            <option value="-5"></option>
            <option value="0"></option>
            <option value="5"></option>
            <option value="10">max</option>
        </datalist>
        
        <p>
            Ce test a pour objectif d'établir de manière empirique une mesure de l'aigreur ainsi que de la malveillance
            (d'autres indicateurs pourront être ajouté dans le futur) de la classe. Pour cela, la
            méthode choisie consiste à ce que chaque membre de la classe note l'ensemble des membres (lui-même compris).
            Sur une échelle entière allant de -10 à 10. Où -10 = bienveillance MAX et 10 = malveillance MAX. Afin de
            diminuer le biais de définition, merci de garder en tête les définitions données ci-dessous.<br>
            Seule votre dernière réponse est prise en compte.
        </p>
        <p>
            <strong>MALVEILLANCE</strong> : <br>
            &nbsp;&nbsp;&nbsp;&nbsp;Disposition d'esprit à l'égard de quelqu'un, qui conduit à le juger défavorablement, à lui vouloir du mal. <br>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;<i>Ex : "Malheureusement, certains individus ont délibérément propagé de fausses informations dans le but
            de discréditer la réputation de leur collègue, démontrant ainsi une intention malveillante et préjudiciable."</i>
        </p>
        <p>
            <strong>AIGREUR</strong> : <br>
            &nbsp;&nbsp;&nbsp;&nbsp;Disposition d'esprit qui conduit à un comportement déplaisant, à des paroles désobligeantes. <br>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;<i>Ex : "Face aux succès de ses collègues, Jean exprimait régulièrement son aigreur en faisant des commentaires
            sarcastiques et en minimisant leurs réalisations, reflétant ainsi un sentiment de frustration et d'amertume."</i>
        </p>
        <hr>
        <form action="question.php" method="post">
            <?php if (isset($_GET['erruid'])) {
                 echo '<p class="err">Identifiant invalide, petit cocain.</p>';
            }?>
            <p>
                <label for="idfield">uuid personel :</label>
                <input id="idfield" type="text" name="uid" placeholder="ex : 6b02d0f0-93f7-4e45-87a7-cf10b2288915">
                <input type="submit" value="Accéder">
            </p>
    
        </form>
    </section>
</body>
</html>
