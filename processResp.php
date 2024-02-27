<?php

$json = file_get_contents('data/datas.json');
$json_data = json_decode($json,true);

$CURRENT_CAMPAIN_ID = 1;
$filename = 'data/#'.$CURRENT_CAMPAIN_ID.'-';

if (!isset($_POST['uid'])) {
    header('location: index.php?erruid=1');
    exit();
}
if (!array_key_exists($_POST['uid'], $json_data)) {
    header('location: index.php?erruid=1');
    exit();
}

$filename .= $_POST['uid'].'.json';


file_put_contents($filename, json_encode($_POST));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D4D</title>
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
    <h1>Merci pour votre participation.</h1>
</body>
</html>