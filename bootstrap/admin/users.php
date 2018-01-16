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
    <title>Matematix| Strefa Nauczyciela</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styleadmin.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body onload="viewData()">

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
            <li ><a href="index.php"> Strefa Nauczyciela</a></li>
            <li><a href="pages.php">Zadania</a></li>
            <li><a href="posts.php">Posty</a></li>
            <li class="active"><a href="users.php">Uczniowie</a></li>
            <li><a href="http://localhost/bootstrap/index1.php">Strona Główna</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
                	<li><?php echo "Witaj ".$_SESSION['user'].''; ?> </li>
        <li><?php echo '<a href="logout.php">Wyloguj się</a>'; ?> </li>
<!--
           <li>    	<?php echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj</a> ]</p>'; ?></li>
//            <li><a href="login.php">Wyloguj</a></li>
-->
           
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

    <div class="container" style="margin-top:35px">
        <h4>Table Quick Edit</h4>
        <table id="tabledit" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imię i Nazwisko</th>
                    <th>Klasa</th>
                    <th>Email</th>
                    <th>Numer Telefonu</th>
                    <th>Oceny</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.tabledit.js"></script>
    <script>
    function viewData(){
        $.ajax({
            url: 'process.php?p=view',
            method: 'GET'
        }).done(function(data){
            $('tbody').html(data)
            tableData()
        })
    }
    function tableData(){
        $('#tabledit').Tabledit({
            url: 'process.php',
            eventType: 'dblclick',
            editButton: true,
            deleteButton: true,
            hideIdentifier: false,
            buttons: {
                edit: {
                    class: 'btn btn-sm btn-warning',
                    html: '<span class="glyphicon glyphicon-pencil"></span> Edytuj',
                    action: 'edit'
                },
                delete: {
                    class: 'btn btn-sm btn-danger',
                    html: '<span class="glyphicon glyphicon-trash"></span> Usuń',
                    action: 'delete'
                },
                save: {
                    class: 'btn btn-sm btn-success',
                    html: 'Save'
                },
                restore: {
                    class: 'btn btn-sm btn-warning',
                    html: 'Restore',
                    action: 'restore'
                },
                confirm: {
                    class: 'btn btn-sm btn-default',
                    html: 'Confirm'
                }
            },
            columns: {
                identifier: [0, 'id'],
                editable: [[1, 'name'],[2, 'klasa', '{"1": "1", "2": "2", "3": "3"}'],[3, 'email'], [4, 'phone'], [5, 'address']]
            },
            onSuccess: function(data, textStatus, jqXHR) {
                viewData()
            },
            onFail: function(jqXHR, textStatus, errorThrown) {
                console.log('onFail(jqXHR, textStatus, errorThrown)');
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            },
            onAjax: function(action, serialize) {
                console.log('onAjax(action, serialize)');
                console.log(action);
                console.log(serialize);
            }
        });
    }
    </script>
    
  </body>
</html>
