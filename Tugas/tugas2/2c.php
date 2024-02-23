<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
    <style>
        body {
            font-size: 10px;
        }

        .kotak {
            width: 30px;
            height: 30px;
            background-color: salmon;
            border: 1px solid black;
            color: black;
            display: flex;
        }

        .kotak h2 {
            margin: auto;
        }


        .row {
            display: flex;
        }
    </style>
</head>
<body>
    <?php for ($i = 10; $i >= 1; $i--) : ?>
        <div class="row">
        <?php for ($a = 1; $a <= $i; $a++) : ?>
        <div class="kotak"><h2><?= "$a" ?></h2></div>
        <?php if($i == $a) : ?>
        <br>
        <?php endif ; ?>
        <?php endfor ; ?>
        </div>

    <?php endfor ; ?>
</body>
</html> 