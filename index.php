<html>
<head>
  <title>Menampilkan data dari database ke dalam bentuk tabel</title>
  <style type="text/css">
    table{
    border-collapse: collapse;
    width: 80%;
    }
    table th{
      border: 1px solid #000;
        padding: 2px;
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #0055ff;
        color: white;
        text-align: center;
    }
    table td{
      border: 1px solid #000;
        padding: 2px;
        padding-top: 5px;
        padding-bottom: 5px;
        text-align: left;
        color: black;
    }
  </style>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container">
    <h2><center>DATA PESERTA</center></h2>
    <table class="tabel" align="center">
  <tr>
    <th>Id</th>
    <th>Username</th>
    <th>fullname</th>
    <th>password</th>
    <th>level</th>
    <th>Aksi</th>
  </tr></div>
  <?php
  //  1. Lakukan include koneksi.php untuk membuat koneksi
  include('konek.php');
  // 2. Buat perintah SQL untuk menampilkan data
  $sql_tampil ="SELECT * FROM user";
  // 3. Jalankan perintah diatas dengan fungsi mysqli_query
  $peserta=mysqli_query($conn,$sql_tampil);
  // 4. Lakukan fetch dengan result type MYSQL_ASSOC
  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
    ?>
    <tr>
      <td><?php echo $baris_data['id']; ?></td>
      <td><?php echo $baris_data['username']; ?></td>
      <td><?php echo $baris_data['full name']; ?></td>
      <td><?php echo $baris_data['password']; ?></td>
      <td><?php echo $baris_data['level']; ?></td>
      <td>
      <a class="edit" href="edit.php?id=<?php echo $baris_data['id']; ?>">Edit</a> |
      <a class="hapus" href="delete.php?id=<?php echo $baris_data['id']; ?>">Hapus</a>
      </td>
    </tr>
<?php } ?>
</body>
</html>