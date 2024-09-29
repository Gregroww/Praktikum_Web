<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Review</title>
    <link rel="stylesheet" href="style/start.css">
</head>
<body>
    <div class="container">
        <h1 class= "title">Start Review</h1>
        <p class="title">Review tempat yang kamu kunjungi dan bagikan pengalamanmu!</p>
        <div class="content" >
            <form action="process_review.php" method="POST" >

                <label for="place">Nama Tempat</label><br>
                <input type="text" id="place" name="place" required><br>

                <label for="rating">Rating</label><br>
                <input type="number" id="rating" name="rating" min="1" max="5" required><br>

                <label for="password">Kata sandi untuk Postingan Review</label><br>
                <input type="password" id="password" name="password" required><br>

                <label for="review">Ulasan Review</label><br>
                <textarea id="review" name="review" required></textarea><br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>