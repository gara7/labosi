<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>ZKD</title>

  <!-- Učitavanje stilskih datoteka -->
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="stil.css" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=latin,latin-ext' rel='stylesheet' type='text/css'> 


<script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
var $rows = $('#table tr');
$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
});//]]>  

</script>
  
  
  
  
  
  
  
  
  
  
  
  
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
                 <!-- PHP ZA KORISNIČKO IME-->
				   <?php  
                    session_start();
				   
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
    <div class="sadrzaj2 column column-9">
         
 <!-- PRETRAŽIVANJE-->
		 
		     <input type="text" id="search" placeholder="Pretraži" />
                   <table id="table" border="2" width="100%">
			    
					<tr>
			
					
					
					
					 <?php 
			  
		
					
			   
                    $con=mysqli_connect("localhost","root","root","zdk");
                    if (mysqli_connect_errno())
                      {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                         }
						 
						 
					    mysqli_query($con,"SET NAMES 'utf8'");
					    mysqli_query($con,"SET CHARACTER_SET 'utf8'");
					    $result = mysqli_query($con,"SELECT * FROM pacijenti");
					  while($row = mysqli_fetch_array($result))
					    { 
					   echo 
					         '<tr>'.
							'<td>'. $row['ime'] .'</td>'.
                         	 '<td>'.$row['prezime'].'</td>'.		   
					         '<td>'.$row['spol'].'</td>'.
							 '<td>'.$row['datumrodenja'] .'</td>'.
							 '<td>'.$row['mobitel'] .'</td>'.
							'<td>'. $row['adresa'] .'</td>'.
							'<td>'. $row['mjesto'] .'</td>'.
							'</tr>';
					    } 

					  
					mysqli_close($con);
			
			         ?>
               
			      </tr>
			     
				 
				</table>
						
		
	  
     </div>

  </section>

 

  <footer class="site-footer">
    <p>Copyright &copy; ZKD, 2014</p>
  </footer>
  
</body>
</html>