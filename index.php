<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Tugas_Basis_Data_8</title>
</head>
<body>
   <div class="container">
      <center><h1>Agen Tiket Bus Nyaman</h1></center>
      <div class="main">
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql = 'SELECT * FROM Pelanggan';
         $result = mysqli_query($conn, $sql);
         ?>
         <h3>Tabel Pelanggan</h3>
         <table>
          <tr>
            <th>ID_Pelanggan</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal_lahir</th>
            <th>No_Telepon</th>
            
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['ID_Pelanggan'];?></td>
               <td><?= $row['Nama'];?></td>
               <td><?= $row['Alamat'];?></td>
               <td><?= $row['Tanggal_lahir'];?></td>
               <td><?= $row['No_Telepon'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql2 = 'SELECT * FROM Bus';
         $result = mysqli_query($conn, $sql2);
         ?>
      </table>
         <h3>Tabel Bus</h3>
         <table>
          <tr>
            <th>ID_Bus</th>
            <th>Nomor_plat</th>
            <th>Kapasitas</th>
            <th>Merek</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['ID_Bus'];?></td>
               <td><?= $row['Nomor_plat'];?></td>
               <td><?= $row['Kapasitas'];?></td>
               <td><?= $row['Merek'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM Jadwal';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>Tabel Jadwal</h3>
         <table>
          <tr>
            <th>ID_Jadwal</th>
            <th>ID_Bus</th>
            <th>Tujuan</th>
            <th>Tanggal_Berangkat</th>
            <th>Waktu_Berangkat</th>
            
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['ID_Jadwal'];?></td>
               <td><?= $row['ID_Bus'];?></td>
               <td><?= $row['Tujuan'];?></td>
               <td><?= $row['Tanggal_Berangkat'];?></td>
               <td><?= $row['Waktu_Berangkat'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         $sql3 = 'SELECT * FROM detail_pemesanan';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>Tabel Detail_Pemesanan</h3>
         <table>
          <tr>
            <th>ID_Pemesanan</th>
            <th>ID_Bus</th>
            <th>Nomor_Kursi</th>
            
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['ID_Pemesanan'];?></td>
               <td><?= $row['ID_Bus'];?></td>
               <td><?= $row['Nomor_Kursi'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         
         // query untuk menampilkan data
         $sql4 = 'SELECT * FROM pemesanan';
         $result = mysqli_query($conn, $sql4);
         ?>
         <h3>Tabel Pemesanan</h3>
         <table>
          <tr>
            <th>ID_Pemesanan</th>
            <th>ID_Pelanggan</th>
            <th>ID_Jadwal</th>
            <th>Tanggal_Pemesanan</th>
            <th>Jumlah_Tiket</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['ID_Pemesanan'];?></td>
               <td><?= $row['ID_Pelanggan'];?></td>
               <td><?= $row['ID_Jadwal'];?></td>
               <td><?= $row['Tanggal_Pemesanan'];?></td>
               <td><?= $row['Jumlah_Tiket'];?></td>

            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
      </div>
   </div>
</body>
</html>