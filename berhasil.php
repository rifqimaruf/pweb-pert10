</head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
<body>
    <!-- bagian box formulir -->
    <section class="box-formulir">
        <h2>Pendaftaran Berhasil</h2>
        <div class="box">
            <h4>Kode pendaftaran Anda adalah <?php echo $_GET['id'] ?></h4>
            <a href="cetak-bukti.php?id=<?php echo $_GET['id'] ?>;" class="btn-cetak">Cetak Bukti Daftar </a> 
        </div>
    </section>
    </body>
</html>