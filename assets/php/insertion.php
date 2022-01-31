<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=binouze','root','');

$pdoStat = $objetPdo->prepare('INSERT INTO biere VALUES (NULL,:nom_b, :degres_b)');

$pdoStat->bindValue(':nom_b', $_POST['biere'], PDO::PARAM_STR);
$pdoStat->bindValue(':degres_b', $_POST['degres'], PDO::PARAM_STR);

$insertIsOk = $pdoStat->execute();

if($insertIsOk){
    $message = 'La biere à été ajouté dans le bar';
}
else{
    $message ='Echec, pas assez bonne';
}
?>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Comment Créer un beau Formulaire de Contact en HTML & CSS</title>
    <link rel="stylesheet" href="style.css" />
    <link/>
</head>
<body>
<?php echo $message ?>
</body>
</html>