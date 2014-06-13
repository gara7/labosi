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
					 
					 $pravoime='gara';
					 $pass='gara';
					 if(!array_key_exists('username', $_GET) or !array_key_exists('password', $_GET)){
					 	echo "dost dobar password, NOT!";
					 	echo "<script type='text/javascript'>
	                          window.location='login.html';
	                           </script>";
					 }else{
					 	
						$ime = $_GET['username'];
						$lozinka = $_GET['password'];
						if($ime==$pravoime && $lozinka==$pass){
	                    	echo "Dobro došli, ".$ime."!";
						} else {
							echo "<script type='text/javascript'>alert('Wrong Username or Password');
	                          window.location='login.html';
	                           </script>";
						}
						$_SESSION['pac'] =  $ime;					
					}
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
		   
		    <div class="sidro column column-3">
			 <a href="#1">Osobni podaci</a>
			 
			</div>
		    
			<div class="sidro column column-3">
			 <a href="#2">Školovanje</a>
			 
			</div>
			
			<div class="sidro column column-3">
			 <a href="#3">Radno iskustvo</a>
			 
			</div>
			
			<div class="sidro column column-3">
			 <a href="#4">Znanja i vještne</a>
			 
			</div>
		   
		  </div>
		 
		 
         </br>
		 <h3><a name="1">Osobni podaci:</a></h3></br>
		 
		 <p>Dominik Garić, 14.6.1992.</p></br>
		 
		 <h3><a name="2">Školovanje:</a></h3></br>
		 
		 <p>Osnovna škola: OŠ Julija Kempfa </br>Srednja škola: Tehnička škola Kutina</br>Fakultet: Tehničko veleučilište u Zagrebu</p></br>

         <h3><a name="3">Radno iskustvo:</a></h3></br>

         <p>Rad u punionici pića, ljepljenje plakata, ličenje zidova</p></br>

         <h3><a name="4">Znanja i vještine:</a></h3></br>

         <p>MS Office, HTML, CSS, C, C++, Java, PHP </br> </p>		 
		 	 
		 
		 
		
	  
     </div>

  </section>

 

  <footer class="site-footer">
  
    <p>Copyright &copy; ZKD, 2014</p>
  </footer>
  
</body>
</html>