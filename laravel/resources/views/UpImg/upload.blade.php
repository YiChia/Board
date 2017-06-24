<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Img UPload</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
    <div class="col-lg-offset-4 col-lg-4">
        <center><h1>UPload a File</h1></center>
        <form action="/store" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
            <input type="file" name="image" >
            <input type="submit"  value="Upload">
        </form>
    </div>
    </body>
</html>