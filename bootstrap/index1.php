
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title> Matematix</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <link href="css/print.css" type="text/css" rel="stylesheet" media="print">
    
	<link href='https://fonts.googleapis.com/css?family=Inconsolata:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="styleWisielec.css" type="text/css" />
	<script src="js/szubienica.js"></script>
  
<link href='https://fonts.googleapis.com/css?family=Inconsolata:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="js/styleWisielec.css" type="text/css" />
	<script src="js/szubienica.js"></script>

  </head>
<body>
    <header>

    
      <div class="navbar navbar-dark bg-dark">
        <div class="container d-flex justify-content-between">
          <a href="index1.php" class="navbar-brand">MATEMATIX</a>
          

              <a href="ajax-chat.html" class="btn btn-info" role="button">CHAT</a> 
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">MATEMATIX</h1>
          <p class="lead text-muted">Strona poświęcona matematyce. Projekt ma na celu stworzenie strony www  pomocnej zarówno nauczycielom jak i  dzieciom w nauczaniu matematyki w zakresie początkowym.<br />Nauka przez zabawę.  </p>
          <div>
            <a href="uczen/login.php" class="btn btn-info">Uczeń</a>
            <a href="admin/login.php" class="btn btn-secondary">Nauczyciel</a>
          </div>
        </div>
      </section>

      <div class="album text-muted">
        <div class="container">

          <div class="row">
            <div class="card">
              <img src="img/2.jpeg" alt="Klasa 1">

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Klasa 1</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div class="embed-responsive embed-responsive-4by3">
    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/fTKcVN37SjM"></iframe>
        </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
        </div>
      </div>
      
    </div>
  </div>
  
  
</div>
              
              

             
              
            
            
            <div class="card">
              <img src="img/1.jpeg" alt="Klasa 2">
            
              
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Klasa2</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body"><span>
          
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Szubienica</title>

	<link href='https://fonts.googleapis.com/css?family=Inconsolata:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/styleWisielec.css" type="text/css" />
	<script src="js/szubienica.js"></script>
	<style>
        
#pojemnik
{
	width:300px;
	margin-left:auto;
	margin-right:auto;
}

#plansza
{
	width: 300px;
/*	margin-top: 50px;*/
    margin-top: 0px;
    margin-bottom:  0px;
	text-align: center;
	font-size: 48px;
/*	min-height: 40px;*/
}
#pytanie
{
	width: 300px;
    height: 50px;
        margin-top: 0px;
    margin-bottom:  10px;
/*	margin-top: 50px;*/

	text-align: center;
	font-size: 38px;
	min-height: 40px;
}
#szubienica
{
/*	float: left; */
	width: 450px;
	text-align: center;
/*	min-height: 280px;*/
}

#alfabet
{
/*	float: left; */
    padding-right: 100px;
	width: 450px;
	text-align: center;
/*	min-height: 280px;*/
}

.litera
{
	width: 30px;
	height: 30px;
	text-align:center;
	padding: 5px;
	margin: 5px;
	border: 3px solid gray;
	float: left;
	cursor: pointer;
	border-radius: 15px;
}

.litera:hover
{
	background-color: #222222;
	color: white;
	border: 3px solid white;
}

.reset
{
	color:green;
	cursor: pointer;
	font-size: 48px;
}

.reset:hover
{
	color:white;
}

    </style>

</head>
<body>

	<div id="pojemnik">
		<div id="plansza"></div>
		<div id="pytanie"></div>
		<center><div id="alfabet"></div></center>
		<div style="clear:both;"></div>
<!--		<div id="szubienica">-->
<!--
			<img src="img/s0.jpg" alt="" />
		</div>
-->
		<div style="clear:both;"></div>
		<center></center>
<!--		<div style="clear:both;"></div>-->
	</div>

</body>
</html>
      
       </span>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
            
            <div class="card">
              <img src="img/3.jpeg" alt="Klasa 3">
             
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Klasa 3</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <table align="center">
  <tr>
<!--    <td colspan="3" align="center"><input type="button" class="btn btn-info btn-lg" value="Nowa Gra" onClick="location.reload();"></td></tr><tr>-->
    <td colspan="3" align="center"><input type="button" class="btn btn-info btn-lg" value="Start" size="5" onClick="startgame()"></td>

  </tr>
  <tr>
    <form name="math">
      <td colspan="3" align="center" ><b><font size="3" color="#0000FF">Czas: </font></b> <font size="3" color="#0000FF"> </font><input type="text" class="form-control" name="timer" size="5"></td>
    </tr>
    <tr>
     
      <td colspan="3" align="center"><b><font size="3" color="#0000FF"><br/>Pytanie: </font></b> <font size="3" color="#0000FF"> </font>
            <tr>
      <td align="right"><input type="text" name="firstnum" class="form-control" size="5"></td>
      <td align="center"><input type="text" name="operator"class="form-control"size="2"></td>
      <td align="left"><input type="text" name="secondnum" class="form-control" size="5"></td>
    </tr>
    <tr>
      <td colspan="3" align="center"><hr><b><font size="3" color="#0000FF">Odpowiedź:</font> </b> <input type="text" name="answer" class="form-control" size="5"> <input type="button" class="btn btn-info btn-lg" value="Odpowiedz" onClick="answerit();"><hr></td>
    </tr>
    <tr>

      <td  colspan="3" align="center"><font color="#0000FF">Wynik</font><font face="Arial, Helvetica, Sans Serif" size="3" color="#0000FF"><b>:</b> </font> <input type="text" name="points" class="form-control"size="5" value="0"></td>
    </tr>
    <tr>
    </form>
  </tr>
</table>
	<!--
    	This script downloaded from www.JavaScriptBank.com
    	Come to view and download over 2000+ free javascript at www.JavaScriptBank.com
	-->

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
        </div>
      </div>
      
    </div>
  </div>      
             
             
            </div>

            
          </div>

        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
         <a href="toprint.html" class="btn btn-info">Drukuj</a>
          <a href="#">Do góry!</a>
          
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });</script>
  
<script src="js/jquery.js"></script>
<script src="game.js"></script>
<!--
<script type="text/javascript" src="js/chat.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
-->

<!--<script src="scripts/popup.js"></script>-->

  </body>
</html>
