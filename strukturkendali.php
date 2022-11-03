<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Kendali PHP</title>
</head>
<body>
    <!-- For dalam HTML -->
    <!-- Metode 1 -->
    <table border="1">
        <?php for($i = 1; $I <= 3; $i++){ ?>
            <tr>
                <?php for($j = 1; $j <= 5; $i++){ ?>
                    <td><?= $i, $j ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

    <!-- Metode 2 -->
    <table border="1">
        <?php for($i = 1; $I <= 3; $i++): ?>
            <tr>
                <?php for($j = 1; $j <= 5; $i++): ?>
                    <td><?= $i, $j ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>