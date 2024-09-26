<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <?php 
        $title = 'PHP Badwords';
    ?>
    <div>
        <h1>
            <?php echo $title ?>
        </h1>
    </div>

    <div>
        <form action="./about.php" method="POST">
            <div>
                <label>Textarea:</label>
                <textarea name="paragraph" id=""></textarea>
            </div>

            <div>
                <label>Badword:</label>
                <input name="badword" type="text">
            </div>

            <button type="submit">
                Invia
            </button>
        </form>
    </div>
</body>
</html>