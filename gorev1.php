<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gorev 1</title>
</head>
<body>
    <h1>1-100 Arasi Tek Sayilar</h1>
    
    <?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
    ?>
    
    <br><br>
    <a href="index.php">Ana sayfa</a>
</body>
</html>
