<?php

session_start();

$name = $_POST ["name"];
$note = $_POST ["note"];

// vypsání historie příspevku
if (file_exists('prispevky.txt')) {
    $handle = fopen('prispevky.txt', 'r');

if ($handle) {
    while (($line = fgets($handle, 4096)) !== false) {
        echo $line;     }
    fclose($handle);
}
}

// přidání dat na konec souboru
$handle = fopen('prispevky.txt', 'a');

if (fwrite($handle, $name . '<br>' . $note . '<br>'. '<hr>') != NULL) {
    fwrite($handle, $name . '<br>' . $note . '<br>'. '<hr>');
    echo 'Uložení příspěvku proběhlo úspěšně';
    } else {
        echo 'Chyba při ukládání';
    }
fclose($handle);
?>

<li class="nav-item active">
    <a class="nav-link" href="navstevni-kniha.php">Návštěvní kniha </a>
</li>
