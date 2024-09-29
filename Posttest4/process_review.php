<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $place = htmlspecialchars($_POST["place"]);
    $rating = htmlspecialchars($_POST["rating"]);
    $password = htmlspecialchars($_POST["password"]);
    $review = htmlspecialchars($_POST["review"]);
    
    echo "<h1>Hasil Review</h1>" ;
    echo "Nama Tempat: $place <br>";
    echo "Rating: $rating <br>";
    echo "Kata Sandi: (Disebunyikan) <br>";
    echo "Ulasan: $review <br>";
} else {
    echo "Data tidak ditemukan";
}

var_dump($_POST);
?>