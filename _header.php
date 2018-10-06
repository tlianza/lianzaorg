<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php print(isset($title) ? $title : 'Lianza.org - personal website of Tom Lianza');?></title>
    <link rel="openid.server" href="https://indieauth.com/openid" />
    <link rel="openid.delegate" href="http://lianza.org/" />
    <meta http-equiv="X-XRDS-Location" content="http://tlianza.myopenid.com/xrds" />

    <meta name="description" content="The personal home page of Tom Lianza" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha256-eSi1q2PG6J7g7ib17yAaWMcrr5GrtohYChqibrV7PBE=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      <?php if(isset($head)){ echo $head; }?>
  </head>
  <body>

<div class="container mb-3">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/" title="Lianza.org">
        <span><img alt="Lianza.org" src="/images/tomavatar_20.png"> Lianza.org</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php if(isset($nav) && 0==$nav){?>active<?php };?>" ><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item <?php if(isset($nav) && 2==$nav){?>active<?php };?>" ><a class="nav-link" href="/projects.php">Projects</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item <?php if(isset($nav) && 3==$nav){?>active<?php };?>" ><a class="nav-link" href="/mail.php" title="Send an email">Contact</a></li>
        </ul>
    </div>
    </nav>
</div>

<div class="container">