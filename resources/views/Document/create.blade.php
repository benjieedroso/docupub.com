<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/document/upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="document" id="document" multiple>
        <button type="submit">Upload</button>
    </form>
</body>
</html>