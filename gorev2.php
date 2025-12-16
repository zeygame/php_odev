<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gorev 2</title>
</head>
<body>
    <h1>Tablo Olusturucu</h1>
    
    <form method="get">
        Satir sayisi: <input type="number" name="rows" min="1" max="50"><br><br>
        Sutun sayisi: <input type="number" name="cols" min="1" max="50"><br><br>
        <input type="submit" value="Olustur">
    </form>
    
    <?php
    if (isset($_GET["rows"]) && isset($_GET["cols"])) {
        $rows = (int) $_GET["rows"];
        $cols = (int) $_GET["cols"];
        
        if ($rows > 0 && $cols > 0) {
            echo "<table border='1'>";
            
            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $cols; $j++) {
                    $sayi = rand(1, 100);
                    echo "<td>$sayi</td>";
                }
                echo "</tr>";
            }
            
            echo "</table>";
        }
    }
    ?>
    
    <br>
    <a href="index.php">Ana sayfa</a>
</body>
</html>
