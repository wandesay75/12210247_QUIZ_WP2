<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <div>
        <h1><center>DAFTAR MAHASISWA</center></h1>
        <table align="center" border=2>
            <thead>
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">PROGRAM STUDI</th>
                        <th width="200">Aksi</th>
                </tr>
            </thead>
            <?php
        $count = 0;
        foreach ($mahasiswa->result() as $row) :
            $count++;
    ?>
            <tr>
                <th scope="row"><?php echo $row->NIM; ?></th>
                <td><?php echo $row->NAMA; ?></td>
                <td><?php echo $row->PROGRAM_STUDI;?></td>
                    <td>
                        <a href="<?php echo site_url('controller_mahasiswa/hapus/' .$row->NIM); ?>">Hapus</a>
                    </td>
            </tr>
        <?php endforeach;?>
        </table>
    </div>
</body>
</html>