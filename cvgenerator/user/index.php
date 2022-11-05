<?php
include '../koneksi/conn.php';
$koneksiUser=mysqli_query($con,"select * from tbuser");
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
                <th>ID User</th>
                <th>ID Premium</th>
                <th>Nama User</th>
                <th>Password User</th>
            </tr>
        <?php while ($dataUser= mysqli_fetch_assoc($koneksiUser)) { ?>
                <tr>
                    <td><?php echo $dataUser['IDUSER'] ?></td>
                    <td><?php echo $dataUser['IDPREMIUM'] ?></td>
                    <td><?php echo $dataUser['NAMAUSER'] ?></td>
                    <td><?php echo $dataUser['PWUSER'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </form>
</body>

</html>