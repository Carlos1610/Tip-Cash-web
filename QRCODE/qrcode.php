<!doctype html>
<html lang="en">
  <head>

  <link href="qrcode.css"  type="text/css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>

  </head>
  <body>
  <div class = "qrcode">

    <?PHP

    $aux =  'qr_img0.50j/php/qr_img.php?';
    $aux .= 'd=Hello, world!&';
    $aux .= 'e=H&';
    $aux .= 's=10&';
    $aux .= 't=P';

    ?>

    <div style="float: left; border: 1px solid #000;">
        <img src="<?php echo $aux; ?>"/>
    </div>

  </div>
  
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light py-4">
        <a class="navbar-brand" href="../Home/home.html">Tip-Cash</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link " href="../Sobre nós/sobre.html">Sobre nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Duvidas frequentes/duvidas.html">Duvidas Frequentes</a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../QRCODE/qrcode.html">Gerador de QR Code</a>
            </li>
          </ul>
          <form class="form-inline">
            <button class="btn btn-outline-success" type="button">Baixe o app</button>
          </form>
        </div>
      </nav>

  </body>
</html>