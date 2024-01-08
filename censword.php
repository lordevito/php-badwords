<?php
$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];
$p_length = strlen($paragraph);
$censor = str_replace($badword, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <div class="paragraph">
        <h1>Ecco il tuo paragrafo:</h1>
        <p><?php echo "$paragraph" ?></p>
        <p>Il paragrafo da te inserito è lungo:
            <?php
            echo $p_length;
            ?>
            caratteri
        </p>
    </div>

    <div class="censored_p">
        <h1>Ecco il tuo paragrafo censurato:</h1>
        <p><?php echo "$censor" ?></p>
        <p>Il paragrafo da te inserito è lungo:
            <?php
            echo $p_length;
            ?>
            caratteri
        </p>
    </div>
</body>

</html>