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
	        <a href="login0.php"><button type="button" class="bttn" >Odjava</button></a>
	     </div>
		 
         <div class="korisnik column column-3">
	     
    		 <h2>  
                 <!-- PHP ZA LOGIRANJE-->
				   <?php  
 
                     session_start();
					 
					if(isset($_POST['username'])&&isset($_POST['password'])){
					 
                    
					 
					 $br=0;
					 
					$con=mysqli_connect("localhost","root","root","zdk");
                    if (mysqli_connect_errno())
                      {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                         }
						 
						 
					    mysqli_query($con,"SET NAMES 'utf8'");
					    mysqli_query($con,"SET CHARACTER_SET 'utf8'");
					
					
					$passwordHash = sha1($_POST['password']);
					    $result = mysqli_query($con,"SELECT * FROM korisnici");
					  while($row = mysqli_fetch_array($result))
					    { 
					
					         
						if($_POST['username']==$row['username'] && $passwordHash==$row['password']){
                     $br=1;
					 } 
					    } 
						
						if($br){
						
						 $_SESSION['pac'] =  $_POST['username'];	
						
						}
						else {
					 
					 
					 echo "<script type='text/javascript'>alert('Nepostojeće ime ili kriva lozinka');
                          window.location='login0.php';
                           </script>";
						

					   }

					  
					mysqli_close($con);
					
					
					
                         } 
						 
						 
						  if(isset($_SESSION['pac'])){
				   
                    echo $_SESSION['pac'];
					}
					
					else {
					 
					 
					 echo "<script type='text/javascript'>alert('Niste ulogirani, molim ulogirajte se');
                          window.location='login0.php';
                           </script>";
						

					   }
                     				
				
	
                    ?>
	
 
				  
			</h2> 
	     </div>	 
	
     </div> 
  </header>

<!-- NAVIGACIJA-->
  <section class="gray-boxes row">
    <div class="meni column column-3">
      
	  <div class="izbor column column 2">
            
		  <a href="login.php">životopis</a>
		
      </div>
	  
	 <div class="izbor column column 2">
            
		  <a href="pacijenti.php">Pacijenti</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="unos.php">Unos</a>
		
      </div>
	  	  <div class="izbor column column 2">
            
		  <a href="unos-m.php">Unos-m</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		    <a href="forma.php">Forma pdf</a>
		
      </div>
	  
  	  <div class="izbor column column 2">
            
		<a href="grafikon.php">Graf</a>
		
      </div>
     
	  <div class="izbor column column 2">
            
		<a href="trazi.php">Traži doktora</a>
		
      </div>
	  
	 <div class="izbor column column 2">
            
		<a href="jsonfromdatabases.php">Json IZ baze</a>
		
      </div>	  
    </div>
<!-- SADRŽAJ-->
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
		 
		 
		 
		 
		 <h3><a name="1" onmouseover="document.getElementById('osobniPodaci').style.display = 'block';" onmouseout="document.getElementById('osobniPodaci').style.display = 'none';">Osobni podaci:</a></h3></br>
		 <div id="osobniPodaci">
			 
			 
			 <p>Dominik Garić, Požega, 14.6.1992.</p></br>
		 </div>
		
		 
		 <h3><a name="2" onmouseover="document.getElementById('skolovanje').style.display = 'block';" onmouseout="document.getElementById('skolovanje').style.display = 'none';">Školovanje:</a></h3></br>
         <div id="skolovanje">
			 
			 <p></br> Osnovna škola Julija Kempfa </br>Srednja škola: Tehnička škola Požega </br>Fakultet: Tehničko veleučilište u Zagrebu</p></br>
         </div>
		 
		 
		 <h3><a name="3" onmouseover="document.getElementById('radnoIskustvo').style.display = 'block';" onmouseout="document.getElementById('radnoIskustvo').style.display = 'none';">Radno iskustvo:</a></h3></br>
		 <div id="radnoIskustvo">

			 <p>Rad u punionici pića, ljepljenje plakata, ličenje zidova</p></br>
         </div>
		 
		 
		 <h3><a name="4" onmouseover="document.getElementById('znanja').style.display = 'block';" onmouseout="document.getElementById('znanja').style.display = 'none';">Znanja i vještine:</a></h3></br>
         <div id="znanja"> 

			 <p>MS Office, HTML, CSS, C, C++, Java, PHP </br> </p>		 
			 
		  </div>
		
	  
	  <div id="reklama">
	  <a href="http://imstore.bet365affiliates.com/Tracker.aspx?AffiliateId=9899&amp;AffiliateCode=365_293274&amp;CID=198&amp;DID=5&amp;TID=1&amp;PID=149&amp;LNG=1" target="_blank">
	  <img src="http://imstore.bet365affiliates.com/?AffiliateCode=365_293274&amp;CID=198&amp;DID=5&amp;TID=1&amp;PID=149&amp;LNG=1" border="0"></a>
	  </div>
	  
	  <button type="button" class="bttn" onclick="document.getElementById('reklama').style.display = 'none';" >Reklama</button>
	  
     </div>
	 
	
	 

  </section>

 

  <footer class="site-footer">
    <p>Copyright &copy; ZKD, 2014</p>
  </footer>
  
</body>
</html>