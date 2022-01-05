<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinkrof2xeum</title>
</head>
<body>
    <form>
         Nazwa: <input type='text' name='nazwa'>
        <input type='submit' value='wyslij'>
    </form>
<br>
     <?php
         @$imie = $_GET['nazwa'];
         echo("Szczęśliwego nowego roku $imie");
    ?>
</body>
</html>