
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Görev 1 - Tek Sayılar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .tek-sayilar {
            margin-top: 20px;
        }
        .tek-sayilar span {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <h1>1-100 Arası Tek Sayılar</h1>

    <p>Bu sayfada 1 ile 100 arasındaki <strong>tek</strong> sayıları yazdırdım.</p>

    <div class="tek-sayilar">
        <?php
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 != 0) {
                echo "<span>$i</span>";
            }
        }
        ?>
    </div>

    <p>
        <a href="index.php">Ana sayfaya dön</a>
    </p>
</body>
</html>
