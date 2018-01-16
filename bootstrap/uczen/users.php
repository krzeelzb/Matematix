<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: login.php');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Matematix| Strefa Ucznia</title>
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
            <li ><a href="index.php"> Strefa Ucznia</a></li>
            <li><a href="pages.php">Zadania</a></li>
            <li><a href="posts.php">Posty</a></li>
            <li class="active"><a href="users.php">Uczniowie</a></li>
            <li><a href="http://localhost/bootstrap/index1.php">Strona Główna</a></li>>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Witaj,Karolina</a></li>
            <li><a href="login.php">Wyloguj</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Strefa Nauczyciela <small></small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Utwórz
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Dodaj zadanie</a></li>
                <li><a href="#">Dodaj ucznia</a></li>
                <li><a href="#">Dodaj post</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Strefa Nauczyciela</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
             <a href="index.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Strefa Ucznia
              </a>
              <a href="pages.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Zadania  <span class="badge">12</span></a>
              <a href="posts.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Oceny <span class="badge">33</span></a>
            </div>

            <div class="well">
              <h4>Procent zrealizowanej podstawy programowej </h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
            <h4>Ilość dni do końca roku</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    150
            </div>
          </div>
            </div>
          </div>
          <div class="col-md-9">
        <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Uczniowie</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Szukaj...">
                      </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                      <tr><th>Imię i Nazwisko</th>
                        <th>Email</th>
                        <th>Klasa</th>
                      </tr>
                      <tr>
                        <td>Karolina Tytko</td>
                        <td>kt@gmail.com</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>Aga Pękala</td>
                        <td>ag@yahoo.com</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>Maria Mamica</td>
                        <td>mm@gmail.com</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>Ela Krzeczek</td>
                        <td>landon@yahoo.com</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>Random Random</td>
                        <td>mjohnson@gmail.com</td>
                        <td>1</td>
                      </tr>
                    </table>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>


    <footer id="footer">
      <p>Copyright Matematix, &copy; 2017</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

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
