<!DOCTYPE html>
<html lang="en" <head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible " content="IE-edge">
<meta name="viewport" content="width-device-width, initial-scale-1.0">
<title>Upload File</title>
</head>

<body>
    <form enctype="multipart/form-data" method="POST" action="latihan1_upload.php">
        file yang di upload : <input type="file" name="fupload"><br> Deskripsi file : <br> <textarea name="deskripsi" rows="6" cols="20"></textarea><br>
        <input type=submit value=Upload>
    </form>

    <br>
    <a href="download.php">klik untuk download</a>

</body>

</html>