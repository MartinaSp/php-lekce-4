<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">

<form method="POST" action="vlozit.php">

  <div class="form-group">
    <label for="exampleInputEmail1">Jméno:</label>
        <input name = "name" type="text" class="form-control" id="exampleName" aria-describedby="nameHelp" placeholder="Vyplň jméno">
    <label for="exampleFormControlTextarea1">Vzkaz:</label>
        <input name = "note" type="text" textarea class="form-control" id="textarea" rows="3"></textarea>
    <br>
    <button type="submit" class="btn btn-success">Submit</button>
    <br> 
  </div>

<?php

session_start();

if ((!isset ($_POST))) {
    $name = $_POST ["name"];
    $note = $_POST ["note"];
} else {
    echo "";
}
?>

<?php

function seradPrispevky ($prispevky, $oddelovac = '<hr>') {
        if (file_exists('prispevky.txt')) {
        $handle = fopen('prispevky.txt', 'r');
        if ($handle) {
            while (($prispevky = fgets($handle, 4096)) !== false) {
            $row = explode('<hr>', $prispevky);
            $i = count ($row);
            while ($i >= 0) {
                echo $row [$i];
                $i = $i-1;
                echo '<hr>';
            }
            } 
        }   
        }
}

echo seradPrispevky ($oddelovac = '<hr>');

//echo $serazeni;

// if (file_exists('prispevky.txt')) {
//    $handle = fopen('prispevky.txt', 'r');
//    $text = fread($handle, 1000);
//    echo $text;
// } else {
//    echo 'Žádné příspěvky';
// }
?>

</div>
</body>
</html>
