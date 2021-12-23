<?php
include_once ( "koneksi.php" );
$ sql = "hapus dari pengguna dimana id_user= '$_GET[id]'" ;
mysqli_query ( $ con , $ sql );
mysqli_close ( $ con );
header ( 'lokasi:tampil_user.php' );