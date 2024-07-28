<?php
$productName = "Amazing Product";
$productDescription = "Its versatility allows it to fit various musical styles, making it suitable for different types of campaigns. The violin's expressive sound can enhance the emotional resonance and uniqueness of a commercial, helping to capture and hold the audience's attention.";
$productImage = "./assets/violin.jpg";
$productAudio = "./assets/violin.mp3";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Advertisement</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Product Advertisement</h1>
        <div class="product">
            <img src="<?php echo htmlspecialchars($productImage); ?>" alt="Product Image" class="product-image">
            <div class="product-info">
                <h2><?php echo htmlspecialchars($productName); ?></h2>
                <p><i><?php echo htmlspecialchars($productDescription); ?></i></p>
                <button id="play" onclick="playAudio()">Play Audio ▶</button>
                <audio id="audio" src="<?php echo htmlspecialchars($productAudio); ?>"></audio>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>
</html>
