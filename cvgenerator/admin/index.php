<?php
include '../koneksi/conn.php';
$koneksiadmin=mysqli_query($con,"select * from tbadmin");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="desain.css">
</head>

<body>
    <table>
            <tr>
                <th>ID Admin</th>
                <th>Nama Admin</th>
                <th>Password Admin</th>
            </tr>
        <?php while ($dataAdmin= mysqli_fetch_assoc($koneksiadmin)) { ?>
                <tr>
                    <td><?php echo $dataAdmin['IDADMIN'] ?></td>
                    <td><?php echo $dataAdmin['NAMAADMIN'] ?></td>
                    <td><?php echo $dataAdmin['PWADMIN'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </form>
</body>

</html>