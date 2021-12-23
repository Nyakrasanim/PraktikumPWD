<?php
include_once ( "koneksi.php" );
$ id_user = $ _POST [ 'id_user' ];
$ nama_lengkap = $ _POST [ 'nama_lengkap' ];
$ email = $ _POST [ 'email' ];
$ kata sandi = md5 ( $ _POST [ 'kata sandi' ]);
$ sql = "INSERT INTO users(id_user,password, nama_lengkap, email) VALUES('$id_user', '$password','$nama_lengkap','$email')" ;
$ query = mysqli_query ( $ con , $ sql );
mysqli_close ( $ con );
header ( 'lokasi:tampil_user.php' );