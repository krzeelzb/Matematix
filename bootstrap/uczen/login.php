<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: index.php');
		exit();
	}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Matematix | Logowanie</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styleadmin.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Matematix</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            
            <li><a href="http://localhost/bootstrap/index1.php">Strona Główna</a></li>

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Matematix <small>Strona Logowania</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form id="login" action="zaloguj.php" method="post" class="well">
                  <div class="form-group">
                    <label>Login</label>
                    <input type="text" name="login"  class="form-control" placeholder="Wpisz login">
                  </div>
                  <div class="form-group">
                    <label>Hasło</label>
                    <input type="password" name="haslo"  class="form-control" placeholder="Wpisz hasło">
                  </div>
                  <button type="submit" class="btn btn-default btn-block">Zaloguj</button>
                   
              </form>
              <?php
	if(isset($_SESSION['blad']))	  echo $_SESSION['blad'] ;
?>
         <center><a  class="btn btn-default btn-info" href="rejestracja.php" role="button">Rejestracja</a> </center>
          </div>
           
        </div>
        
      </div>
    </section>

    <footer id="footer">
      <p>Copyright Matematix, &copy; 2017</p>
    </footer>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
