<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/3d3a1ab939.js"></script>

    <title>MD5</title>
  </head>

  <style>
h1, h2, h3, h4, h5, h6 {
   font-family: 'Fjalla One';
}
  </style>

  <body>
    <h1 class="my-1 text-sm-center">MD5</h1>

    <div class="container">
      <p>
        <strong>MD5s</strong><br>
        <?php
          echo md5('amazon2016') . '<br>';
          echo md5('PaypalEntry') . '<br>';
        ?>
      </p>

      <p>
        <strong>password_hashes</strong><br>
        <?php
          echo password_hash('amazon2016', PASSWORD_DEFAULT) . '<br>';
          echo password_hash('PaypalEntry', PASSWORD_DEFAULT) . '<br>';
        ?>
      </p>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
            integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"
            integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>
