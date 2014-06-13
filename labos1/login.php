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

                    $ime = $_GET['username'];
                    echo "Dobro došli, ".$ime."!";
	
                    ?>
				  
			</h2> 
	     </div>	 
	
     </div> 
  </header>


  <section class="gray-boxes row">
    <div class="meni column column-3">
      
	  <div class="izbor column column 2">
            
		  <a href="#">Meni</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="#">Meni</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="#">Meni</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="#">Meni</a>
		
      </div>
     
    </div>

    <div class="sadrzaj column column-9">
		 
         </br>
		 <h3><a name="1">Osobni podaci:</a></h3></br>
		 
		 <p>Dominik Garić, Požega, 14.6.1992.</p></br>
		 
		 <h3><a name="2">Školovanje:</a></h3></br>
		 
		 <p></br> Osnovna škola Julija Kempfa, Požega </br>Srednja škola: Tehnička škola Požega </br>Fakultet: Tehničko veleučilište u Zagrebu</p></br>

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