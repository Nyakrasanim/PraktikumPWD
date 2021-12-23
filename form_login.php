<?php
echo  "<h2>Masuk</h2>
    <form method=post action=cek_login.php>
        <tabel>
        <tr>
            <td>Nama pengguna</td>
            <td> : <input name='id_user' type='text'></td>
        </tr>
        <tr>
            <td>Kata Sandi</td>
            <td> : <input name='paswd' type='text'></td>
        </tr>
        <tr>
            <td>Captcha<br>
            <img src='captcha.php' /></td><td> : <input name='captcha_code' type='text'></td>
        </tr>
        <tr>
            <td colspan=2><input type='submit' value='LOGIN'></td>
        </tr>
        </tabel>
    </form>" ;
?>
<!-- buat tabel form untuk login -->
<!-- "<h2>Masuk</h2>
<form method=post action=cek_login.php>
    <tabel>
        <tr>
            <td>Nama pengguna</td>
            <td> : <input name='id_user' type='text'></td>
        </tr>
        <tr>
            <td>Kata Sandi</td>
            <td> : <input name='paswd' type='password'></td>
        </tr>
        <tr>
            <td colspan=2>
                <input type='submit' value='LOGIN'>
            </td>
        </tr>
    </tabel>
</form>"; -->