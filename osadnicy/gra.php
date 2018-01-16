<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Matematix</title>
		<title>Matematix</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
     <link rel="stylesheet" href="todo/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<header>
	
		<center><h1><a href="index.php" class="logo">Matematix </a></h1><center>
		
		<nav id="topnav">
		
			<ul class="menu">
				<li><a href="index.php">Strona główna</a></li>
				<li><a href="#">Klasa 1</a></li>
				<li><a href="#">Klasa 2</a></li>
				<li><a href="#">Klasa 3</a></li>
				<li><a href="#">Łamigłowki</a></li>
			</ul>
			
		</nav>
	
	</header>
	
<div class="powitanie">
<?php

	echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
	"</p>";
	
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	"</p>";
	
?>
</div>	
  <main class="app-container">
   	<h3 class="text-center">Co umiem?</h3>
   	
   	<section class="new-task-container">
   		<form>
   			<div class="input-group">
   				<input type="text" class="form-control" placeholder="Umiejętność">
   				
   				<span class="input-group-btn">
   					<button class="btn btn-primary" type="submit">Dodaj umiejętność</button>
   				</span>
   			</div>
   		</form>
   	</section>
   	
   	<section class="tasks-container">
   		<ul></ul>
   	</section>
   </main>

</center>
		<article>
		
			<div id="container">
				<div class="categories" style="clear:both">
				
					<header>
					
						<h1>W której klasie jesteś?</h1>
						
					</header>
					
					<div class="author">
					
						<figure>
							<a href="szubienica.html"><img src="img/1.gif" alt="Klasa 1"></a>
							<figcaption></figcaption>
						</figure>
					
					</div>
					
					<div class="author">
					
						<figure>
							<a href="memory.html"><img src="img/2.gif" alt="Klasa 2"></a>
							<figcaption></figcaption>
						</figure>
					
					</div>

					<div class="author">
					
						<figure>
							<a href="snake2.html"><img src="img/3.gif" alt="Klasa 3"></a>
							<figcaption></figcaption>
						</figure>
					
					</div>
    </article>
					
			
		<div class="square">
			<div class="yt">
				<a href="http://youtube.com" target="_blank" class="sociallink"><i class="icon-youtube"></i></a>
			</div>
			<div class="fb">
				<a href="http://facebook.com" target="_blank" class="sociallink"><i class="icon-facebook"></i></a>
			</div>
			<div class="gplus">
				<a href="http://plus.google.com" target="_blank" class="sociallink"><i class="icon-gplus"></i></a>
			</div>
			<div class="tw">
				<a href="http://twitter.com" target="_blank" class="sociallink"><i class="icon-twitter"></i></a>			
			</div>
			
		
		</div>
        
        
<!--
     <a href="" class="btn btn-default btn-xl wow tada" id="info-button" onclick="showPopup(event);">Pobierz Informator</a>
     
    <aside id="popup">
        <div class="popup-inner" id="popup-inner">
             <a href="" class="close"><i class="fa fa-times fa-2x" ></i></a>
             <h3>Pobierz informator</h3>
             <img src="img/pobierz-informator.jpg" alt="Grafika pobierz informator">   
            <form name="pobranie" id="form-popup">
                <input type="email" placeholder="Adres email" name="email" id="popup-email"/>
                <p id="message"></p>
                <input id="przycisk-pobierz" type="submit" value="pobierz" onClick=""/>
                <a id="pobierz-informator" href="">Kliknij, aby pobrać informator</a>
            </form>      
        </div>    
    </aside>
    
-->
    
    
		
		<div style="clear: both;"></div>
			</main>
		<div class="rectangle">2017 &copy; Ela Krzeczek- Matematix! <i class="icon-mail-alt"></i> elakrz@gmail.com</div>
        <script src="popup.js"></script>
        <script src="todo/js/app.js"></script>
        <script src="todo/js/modules/tasks.js"></script>
        <script src="todo/js/modules/new-task.js"></script>
        <script src="todo/js/modules/tasks-list.js"></script>
                

	

</body>
</html>