<?php  
    include 'koneksi.php';

    // Check if the 'id' parameter is set in the URL
    if(isset($_GET['id'])) {
        // Sanitize the input to prevent SQL injection (you should consider using prepared statements)
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        // Perform the quer
        $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '$id'");
        
        // Check if the query was successful and if a record was found
        if($peserta && $p = mysqli_fetch_object($peserta)) {
            // Display the registration information
?>
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width initial-scale=1">
                <link rel="stylesheet" type="text/css" href="css/style.css">
            </head>
            <body>
                <h2>Bukti Pendaftaran</h2>
                <table class = "table data">
                    <tr>
                        <td>Kode Pendaftaran</td>
                        <td>:</td>
                        <td><?php echo $p->id_pendaftaran; ?></td>
                    </tr>
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td><?php echo $p->th_ajaran; ?></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td><?php echo $p->jurusan; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $p->nm_peserta; ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><?php echo $p->tmpt_lahir; ?></td>
                    </tr>
                    <tr>
                        <td>Tgl Lahir</td>
                        <td>:</td>
                        <td><?php echo $p->tgl_lahir; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?php echo $p->jk; ?></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><?php echo $p->agama; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $p->alamat_peserta; ?></td>
                    </tr>
                </table>
            </body>
            </html>
<?php
        } else {
            echo "No record found for the given ID.";
        }
    } else {
        echo "ID parameter not set in the URL.";
    }
?>
