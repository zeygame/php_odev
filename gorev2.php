
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Görev 2 - Rastgele Sayı Tablosu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        td, th {
            border: 1px solid #000;
            padding: 5px 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Rastgele Sayılardan Oluşan Tablo</h1>

    <p>Formdan satır ve sütun sayısını giriyorum, PHP ile tabloyu oluşturuyorum.</p>

    <form method="get" action="">
        <label>Satır sayısı: </label>
        <input type="number" name="rows" min="1" max="50">

        <label>Sütun sayısı: </label>
        <input type="number" name="cols" min="1" max="50">

        <input type="submit" value="Oluştur">
    </form>

    <?php
    if (isset($_GET["rows"]) && isset($_GET["cols"])) {
        $rows = (int) $_GET["rows"];
        $cols = (int) $_GET["cols"];

        if ($rows > 0 && $cols > 0) {
            echo "<table>";

            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";

                for ($j = 0; $j < $cols; $j++) {
                    $sayi = rand(1, 100);
                    echo "<td>$sayi</td>";
                }

                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Lütfen 0'dan büyük bir sayı girin.</p>";
        }
    }
    ?>

    <p>
        <a href="index.php">Ana sayfaya dön</a>
    </p>
</body>
</html>
