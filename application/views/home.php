<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
    <h3>Data List Mahasiswa</h3>
    <a href="<?php echo base_url() ?>Home/createData"><button>Tambah Data</button></a>
    <br>
    <table style="border: 1px solid black" border="1px">
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
        <?php foreach($mahasiswa as $m) :  ?>
        <tr>
            <td><?php echo $m['name'] ?></td>
            <td>
                <ul>
                    <a onclick="confirm('yakin?')" href="<?php echo base_url() ?>Home/delete/<?php echo $m['id'] ?>">Hapus</a>
                    <a href="<?php echo base_url() ?>Home/edit/<?php echo $m['id'] ?>">Edit</a>
                    <a href="<?php echo base_url() ?>Home/viewDataById/<?php echo $m['id'] ?>">Lihat</a>
                </ul>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>