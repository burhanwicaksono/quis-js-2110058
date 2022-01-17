<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
<body>
    <script>
        document.write("Nama : <?php echo $_POST["nama"]; ?>" + "<br>");
        document.write("Jenis Kelamin : <?php echo $_POST["jenis"]; ?>" + "<br>");
        document.write("Prodi : <?php echo $_POST["prodi"]; ?>" + "<br>");
        document.write("Hoby : <?php echo $_POST["hoby"]; ?>" + "," + " ");
        document.write("<?php echo $_POST["hobi2"]; ?>");
    </script>
</body>    
</html>