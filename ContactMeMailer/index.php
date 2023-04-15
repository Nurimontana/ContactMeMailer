<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="post" ACTION="result.php">
<table class="Table">
    <tr>
        <td>Adınız Soyadınız :</td>
        <td><input type="text" name="name" class="inputText"></td>
    </tr>
    <tr>
        <td>Telefon Numarası :</td>
        <td><input type="text" name="phonenumber" class="inputText"></td>
    </tr>
    <tr>
        <td>E-Mail Adresi :</td>
        <td><input type="text" name="email" class="inputText"></td>
    </tr>
    <tr>
        <td>Konu :</td>
        <td><input type="text" name="subject" class="inputText"></td>
    </tr>
    <tr>
        <td>Mesaj :</td>
        <td><textarea name="message" class="textareaMessage"></textarea></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submitButton" class="submitButton"></td>
    </tr>
</table>
</form>
</body>
</html>