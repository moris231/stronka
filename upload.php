
<?php
$target_dir = "pliki/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Sprawdzamy czy plik już istnieje
if (file_exists($target_file)) {
    echo "Niestety, taki plik już istnieje.";
    $uploadOk = 0;
}
// Sprawdzamy wielkość pliku
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Twój plik jest za duży!";
    $uploadOk = 0;
}
// Sprawdzamy czy uda się wgrać plik
if ($uploadOk == 0) {
    echo "Nie udało się wgrać pliku";
// wgrywamy plik jeśl wszystko jest ok
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Plik ". basename( $_FILES["fileToUpload"]["name"]). " został wgrany.";
    } else {
        echo "Coś poszło nie tak :-( ";
    }
}
?>
