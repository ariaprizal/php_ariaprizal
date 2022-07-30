<?php
$db = mysqli_connect("localhost", "root", "", "testdb");

// Ambil Data
$query = mysqli_query($db, "SELECT hobi, COUNT(hobi) AS total FROM hobi GROUP BY hobi ORDER BY total DESC");

// Pencarian
if (isset($_POST["search"])) {
    $keyword = $_POST['keyword'];
    $query = mysqli_query($db, "SELECT hobi, COUNT(hobi) AS total FROM hobi WHERE hobi LIKE '%$keyword%' GROUP BY hobi ORDER BY total DESC");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-table">
        <h2>Table Hobi</h2>
        <div class="container-search">
            <form action="" method="post">
                <input type="text" name="keyword" autofocus placeholder="Masukan Pencarian">
                <button type="submit" name="search">Cari</button>
            </form>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Hobi</th>
                    <th>Jumlah person</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_assoc($query)) : ?>
                <tr>
                    <td><?= $data["hobi"] ?></td>
                    <td><?= $data["total"]?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>