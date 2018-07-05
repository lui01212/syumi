<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login</title>
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <!-- <link rel="author" href="humans.txt"> -->
    </head>
    <body>
        <div>
          <form>
          <div><input type="text"></div>
          <div><input type="password"></div>
          <div><input type="submit" value="login"></div>
          {{ csrf_field ()}}
          </form>
        </div>
        <!-- <script src="js/main.js"></script> -->
    </body>
</html>