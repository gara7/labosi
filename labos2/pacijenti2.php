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
     <div class="row">
         <img src="images/logo.png">
   
         <div class="gumb column column-2">
	        <a href="login.html"><button type="button" class="bttn" >Odjava</button></a>
	     </div>
		 
         <div class="korisnik column column-3">
	     
    		 <h2>  
                 
				   <?php  
                    session_start();
                    echo $_SESSION['pac'];
	
                    ?>
				  
			</h2> 
	     </div>	 
	
     </div> 
  </header>


  <section class="gray-boxes row">
    <div class="meni column column-3">
      
	  <div class="izbor column column 2">
            
		  <a href="pacijenti.php">Pacijenti</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="unos.php">Unos</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="#">Meni</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="#">Meni</a>
		
      </div>
     
    </div>

    <div class="sadrzaj column column-9">
         

          <div class="izborni row">
		   
		    <div class="column column-3">
			 <form action="pacijenti2.php" method="GET">
			  Pretraži: <input type="search" name="trazi"><br>
			  <input type="submit">
			</form>
			 
			</div>
		    
		
							 <?php
							 
							 $rijec = $_GET['trazi'];
					
					$mystring  = 'ivica';
					$pos = strpos($mystring, $rijec);

					if ($pos === false) {
						echo "The string '$rijec' was not found in the string '$mystring'";
					} else {
						echo "The string '$rijec' was found in the string '$mystring'";
						echo " and exists at position $pos";
					}
											



							$xml = file_get_contents('pacijenti.php');

							$dom = new DOMDocument;
							@$dom->loadHTML($xml);
							$books = $dom->getElementsByTagName('tr');
							foreach ($books as $td) {


								echo $td->nodeValue;
							}

					?>
		    
			   
		
	  
     </div>
	</section>

 

  <footer class="site-footer">
    <p>Copyright &copy; ZKD, 2014</p>
  </footer>
  
</body>
</html>