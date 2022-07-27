<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT DATA</title>
</head>
<body>
    <form action="simpan.php" method="post">
        <input type="text" name="nama" placeholder="masukan nama"><br>
        <input type="text" name="nim" placeholder="masukan nim"><br>
        <input type="text" name="kelas" placeholder="masukan kelas"><br>
        <button type="submit">Simpan</button>
    </form>

    <table>
        <tr>
            <th>nama </th>
            <th>nim </th>
            <th>kelas</th>
        </tr>
        <?php 
        include "koneksi.php";
        foreach ($koneksi->query("SELECT * FROM kelas") as $data) : 
        ?>
        <tr>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['nim'] ?></td>
            <td><?= $data['kelas'] ?></td>
        </tr>
      
        <?php endforeach; ?>
    </table>
</body>
</html>