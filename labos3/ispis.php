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
            
		   <a href="#">Meni</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="#">Meni</a>
		
      </div>
     
    </div>

    <div class="sadrzaj column column-9">
         

            <?php 
			  
			  $ime = $_POST['name'];
			  $prezime=$_POST['lastname'];
			  
			  $dan=$_POST['dan'];
			  $mjesec=$_POST['mjesec'];
			  $godina=$_POST['godina'];
			  $datum=$dan . '.' . $mjesec .'.'. $godina; 
			  $mjesto=$_POST['mjesto'];
			  $adresa=$_POST['adresa'];
			  $kojetegobe=$_POST['description'];
			  $kojealergije=$_POST['description22'];
			
			  
			  
			  if(isset($ime, $prezime, $_POST['gen'], $dan, $mjesec, $godina, $mjesto, $adresa, $_POST['krv'],$_POST['tegobe'],$_POST['alergija'])) { 
			  
					   echo '</br>' .'Pacijent:  '.$ime .' '.$prezime .
							 '</br>' .'Spol:  ' .$_POST['gen'] .
							 '</br>' .'Rođen:  '.$dan.'. '. $mjesec . $godina .'.  u ' .$mjesto .'u' .
							 '</br>' .'Adresa:  '.$adresa .				
							 '</br>' .'Krvna grupa:  '.$_POST['krv']; 

					if(isset($krv2)){	
			            echo $krv2 ;
			        }
			
			
			           echo 	 '</br>' .'Ima li tegoba:  ' .$_POST['tegobe'];
					             
								 
						if(isset($kojetegobe)){	
						
						echo	 '</br>' .'Tegobe:  ' .$_POST['description']; 
						
						}
						
					    echo      '</br>' .'Jeli osoba alergična na ljekove:  ' .$_POST['alergija'] ;           
                                 
						if(isset($kojealergije)){ 
						
						echo	 '</br>' .'Alergija na:  ' .$_POST['description22'];	
						
						}	

						
						  $spol=$_POST['gen'];
						  $krv=$_POST['krv'];
			             
						  
			              $tegobe=$_POST['tegobe'];
						  $alergija= $_POST['alergija'];
						  
						  if(isset($_POST['krv+'])){
						  $krv2=$_POST['krv+'];
						  }else {
						  $krv2=' ';
						  }
						  $krvna=$krv . $krv2;

						  
                    $con=mysqli_connect("localhost","root","123","zdk");
                        // provjera konekcije
                    if (mysqli_connect_errno())
                      {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                         }
              
                       mysqli_query($con,"SET NAMES 'utf8'");
					    mysqli_query($con,"SET CHARACTER_SET 'utf8'");
           
                       

            $query = "INSERT INTO unos(ime, prezime,spol,datumrodenja,mjesto,adresa,krvnagrupa,tegobe,kojetegobe,alergija,kojealergije) VALUES ('$ime', '$prezime', '$spol', '$datum', '$mjesto', '$adresa', '$krvna', '$tegobe', '$kojetegobe', '$alergija', '$kojealergije')";





            $result = mysqli_query($con, $query);

            mysqli_close($con);




						
			  }                    
			  
			   else {
				 echo "<script type='text/javascript'>alert('Molimo popunite sve podatke');
							  window.location='unos.php';
							   </script>";
				 
			 }
			
			?>
		 
		  
			   
		
	  
     </div>

  </section>

 

  <footer class="site-footer">
  
	<hr>
    <p>Copyright &copy; ZKD, 2014</p>
  </footer>
  
</body>
</html>