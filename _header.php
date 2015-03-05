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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
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

  <div class="container">
      <nav class="navbar navbar-default">
          <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/" title="Lianza.org">
                      <span><img alt="Lianza.org" src="/images/tomavatar_20.png"> Lianza.org</span>
                  </a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                      <li <?php if(isset($nav) && 0==$nav){?>class="active"<?php };?> ><a href="/">Home</a></li>
                      <li <?php if(isset($nav) && 1==$nav){?>class="active"<?php };?> ><a href="/blog">Blog</a></li>
                      <li <?php if(isset($nav) && 2==$nav){?>class="active"<?php };?> ><a href="/projects.php">Projects</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                      <li <?php if(isset($nav) && 3==$nav){?>class="active"<?php };?> ><a href="/mail.php" title="Send an email">Contact</a></li>

                  </ul>
              </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
      </nav>