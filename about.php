<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>

    <?php 
        $paragraph = $_POST['paragraph'];
        $badword = $_POST['badword'];

        $paragraph_lenght = strlen($paragraph);

        $paragraph_censured = str_replace($badword, '***', $paragraph);

        $paragraph_censured_lenght = strlen($paragraph_censured);
    ?>

    <div>

        <div>
            <h1>
                Risposta ricevuta
            </h1>
        </div>

        <div>
            <p>
                paragrafo: <?php echo $paragraph ?>
            </p>

            <p>
                Lunghezza paragrafo: <?php echo $paragraph_lenght ?>
            </p>
        </div>

        <div>
            <p>
                badword: <?php echo $paragraph_censured ?>
            </p>

            <p>
                Lunghezza paragrafo censurato: <?php echo $paragraph_censured_lenght ?>
            </p>

        </div>
        <a href="index.php">
            Index
        </a>
    </div>
</body>
</html>