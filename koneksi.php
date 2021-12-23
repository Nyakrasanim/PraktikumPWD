<?php
$ host = "host lokal" ;
$ namapengguna = "akar" ;
$ sandi = "" ;
$ Databasename = "akademik" ;
$ con = @mysqli_connect ( $ host , $ username , $ password , $ databasename );
jika (! $ kon ) {
    gema  "Kesalahan: " . mysqli_connect_error ();
}
// lain {
// echo "berhasil";
// }