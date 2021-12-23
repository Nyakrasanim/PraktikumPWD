<?php
echo  "<h2>Pengguna</h2>
<form method=POST action=form_user.php>
<input type=submit value='Tambah Pengguna'>
</form>
<tabel>
<tr><th>Tidak</th><th>Nama Pengguna</th><th>NamaLengkap</th><th>Email</th><th>Aksi</th
></tr>" ;
include_once ( "koneksi.php" );
$ sql = "pilih * dari pengguna, urutkan berdasarkan id_user" ;
$ tampil = mysqli_query ( $ con , $ sql );
if ( mysqli_num_rows ( $ tampil ) > 0 ) {
    $ tidak = 1 ;
    while ( $ r = mysqli_fetch_array ( $ tampil )) {
        echo  "<tr><td>$no</td><td>$r[id_user]</td>
<td>$r[nama_lengkap]</td>
<td>$r[email]</td>
<td><a href='hapus_user.php?id=$r[id_user]'>Hapus</a></td>
</tr>" ;
        $ tidak ++;
    }
    echo  "</tabel>" ;
} lain {
    echo  "0 hasil" ;
}
mysqli_close ( $ con );