<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>ZKD</title>

  <!-- Učitavanje stilskih datoteka -->
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="stil.css" />

  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=latin,latin-ext' rel='stylesheet' type='text/css'> 

</head>
<body>
  <header class="site-header">
   
  </header>

  <section class="gray-boxes row">
    <div class="column column-5">
      <img src="images/logo.png">
      <h1>“Dominica sancta, quid remediis sunt.”</h1>
    </div>
        
		<?php
		session_start();
		   session_destroy();
		?>
	
	
    <div class="forma column column-5">
        
		<form action="registracija2.php" method="post">
            

          <label for="ime">Željeno Ime:</label></br>
          <input id="ime" type="text" name="usernam" /></br></br></br>
          <label for="lozinka">Lozinka:</label></br>
          <input id="lozinka" type="password" name="passwor" /></br></br></br>
          <label for="lozinka">Lozinka:</label></br>
          <input id="lozinka" type="password" name="passwor" /></br></br></br>
          <p><input type="submit" value="Login" class="InputButton" /></p>
        </form>   

	</div>
<a href="login0.php">login</a>
 
  </section>

  
  <footer class="site-footer">
    <p>Copyright &copy; ZKD, 2014</p>
  </footer>
</body>
</html>