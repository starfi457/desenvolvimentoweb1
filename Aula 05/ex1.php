<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05</title>
</head>
<body>
<?php
$texto='Sophia Isabelle de Mello BIni Oliveira Santos';
echo 'CR32: ',crc32($texto),'<br />';
echo 'MD5: ',md5($texto),'<br />';
echo 'SHA1' , sha1($texto),'<br />';
?>
</body>
</html=