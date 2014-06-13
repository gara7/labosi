<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>ZKD</title>

  <!-- Učitavanje stilskih datoteka -->
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="stil.css" />

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

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
                   /*  $ime = $_GET['username']; */
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
            
		   <a href="forma.php">Forma</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="#">Meni</a>
		
      </div>
     
    </div>

    <div class="sadrzaj column column-9">
         

          <div class="izborni row">
		   
		   <!--  <div class="column column-3">
			 <form action="pacijenti2.php" method="GET">
			  Pretraži: <input type="search" name="trazi"><br>
			  <input type="submit">
			</form>
			 
			</div> -->
		 
		  
		  <div class="php column column-9">
		  
		   <?php 
			  require('../fpdf/fpdf.php');
			
			  
			 
			
			  
			  
			/*   if(isset($_POST['name'], $_POST['lastname'],$_POST['krv'])) { 
			  
					   echo '</br>' .'</br>'  .'</br>' .'</br>' .'</br>' .'</br>' .'</br>' .'</br>' .'</br>' .'</br>' .'</br>'
					        .'Pacijent:  '.$_POST['name'].' '.$_POST['lastname'] .
						    '</br>' .'Krvna grupa:  '.$_POST['krv']; 

					if(isset($_POST['krv+'])){	
			            echo $_POST['krv+'] ;
			        }
			 */
			


 
//class instantiation

$objPdf = PDF_new(); 
PDF_open_file($bjPDF); 

			          
						
					
			
			?>
		 
		  
			   </div>
		
	  
     </div>

  </section>

 

  <footer class="site-footer">
  
	<hr>
    <p>Copyright &copy; ZKD, 2014</p>
  </footer>
  
</body>
</html>