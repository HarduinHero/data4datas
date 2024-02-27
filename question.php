<?php
    $json = file_get_contents('data/datas.json');
    $json_data = json_decode($json,true);

    if (!isset($_POST['uid'])) {
        header('location: index.php?erruid=1');
        exit();
    }
    if (!array_key_exists($_POST['uid'], $json_data)) {
        header('location: index.php?erruid=1');
        exit();
    }
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
        <form action="processResp.php" method="post">
            <input type="hidden" name="uid" value="<?=$_POST['uid']?>">
            <table>
                <thead>
                    <tr>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Malveillance</th>
                        <th>Aigreur</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($json_data as $uuid => $data) { ?>
                        <tr id="line-<?=$data['anno_id']?>">
                            <td><?=$data['firstname']?></td>
                            <td><?=$data['lastname']?></td>
                            <td id="cell-mlv-<?=$data['anno_id']?>"><i>-10 </i><input type="range" name="mlv-<?=$data['anno_id']?>" id="range-mlv-<?=$data['anno_id']?>" min="-10" max="10" value="0" step="1" list="markers"><i> 10</i></td>
                            <td id="cell-aig-<?=$data['anno_id']?>"><i>-10 </i><input type="range" name="aig-<?=$data['anno_id']?>" id="range-aig-<?=$data['anno_id']?>" min="-10" max="10" value="0" step="1" list="markers"><i> 10</i></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
            <input id="validationbutton" type="submit" value="Envoyer">
        </form>
    </section>
</body>
</html>
