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

    <div class="sadrzaj column column-9">
         

          <div class="izborni row">
		   
          </div>
		  
		 
		  
		 	<?php

		
		 // create image
$image = imagecreatetruecolor(600, 400);

// allocate some colors
$white    = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$gray     = imagecolorallocate($image, 0xC0, 0xC0, 0xC0);
$darkgray = imagecolorallocate($image, 0x90, 0x90, 0x90);
$navy     = imagecolorallocate($image, 0x00, 0x00, 0x80);
$darknavy = imagecolorallocate($image, 0x00, 0x00, 0x50);
$red      = imagecolorallocate($image, 0xFF, 0x00, 0x00);
$darkred  = imagecolorallocate($image, 0x90, 0x00, 0x00);

// make the 3D effect
/* for ($i = 60; $i > 50; $i--) {
   imagefilledarc($image, 50, $i, 100, 50, 0, 45, $darknavy, IMG_ARC_PIE);
   imagefilledarc($image, 50, $i, 100, 50, 45, 75 , $darkgray, IMG_ARC_PIE);
   imagefilledarc($image, 50, $i, 100, 50, 75, 360 , $darkred, IMG_ARC_PIE);
} */

                  $con=mysqli_connect("localhost","root","root","zdk");
                        // provjera konekcije
                    if (mysqli_connect_errno())
                      {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                         }
						 
						 
					    mysqli_query($con,"SET NAMES 'utf8'");
					    mysqli_query($con,"SET CHARACTER_SET 'utf8'");
					/* povlače se podaci iz baze */
					    $result = mysqli_query($con,"SELECT * FROM unos");
                     /* ime odredišta koje je kliknuto se traži u bazi i ispisuje se određeni sadržaj */
					 $m=0;
					 $z=0;
					 $nula=2;
					 $nulam=2;
					 $nulap=2;
					 $a=2;
					 $ap=2;
					 $am=2;
					 $b=2;
					 $bp=2;
					 $bm=2;
					 $ab=2;
					 $abp=2;
					 $abm=2;
					  while($row = mysqli_fetch_array($result))
					    { 
					   if( $row['spol'] =='M'){
                        $m++;
					    } 
						if($row['spol'] =='Ž'){
						$z++;
						}
						if($row['krvnagrupa']=='0'){
						$nula++;
						}
						if($row['krvnagrupa']=='0-'){
						$nulam++;
						}
						if($row['krvnagrupa']=='0+'){
						$nulap++;
						}
						if($row['krvnagrupa']=='A'){
						$a++;
						}
						if($row['krvnagrupa']=='A+'){
						$ap++;
						}
						if($row['krvnagrupa']=='A-'){
						$am++;
						}
						if($row['krvnagrupa']=='B'){
						$b++;
						}
						if($row['krvnagrupa']=='B+'){
						$bp++;
						}
						if($row['krvnagrupa']=='B-'){
						$bm++;
						}
						if($row['krvnagrupa']=='AB'){
						$ab++;
						}
						if($row['krvnagrupa']=='AB+'){
						$abm++;
						}
						if($row['krvnagrupa']=='AB+'){
						$abp++;
						}
                        }
					  
					mysqli_close($con);

$uk=($m+$z);
$mm=($m/$uk)*100*3.6;

echo '<p>muskaraca ima: '.$m.' oznaceni su bijelo </br>zena ima: '.$z.' oznaceni su crveno</p>';

imagefilledarc($image, 300, 200, 300, 300, 0, $mm, $white, IMG_ARC_PIE);
imagefilledarc($image, 300, 200, 300, 300, $mm, 0, $red, IMG_ARC_PIE);
/* imagefilledarc($image, 100, 100, 200, 200, 0, $zz, $red, IMG_ARC_PIE); */
/* imagefilledarc($image, 50, 50, 100, 50, 45, 75 , $gray, IMG_ARC_PIE);
imagefilledarc($image, 50, 50, 100, 50, 75, 360 , $red, IMG_ARC_PIE); */


// flush image
 imagejpeg( $image, "graph.jpeg", 90); 
 imagedestroy($image); 
 echo "<img src='graph.jpeg'><p></p>"; 


?>

<?php
		   
		$k=1;

// This array of values is just here for the example.

    $values = array("$nula","$nulam","$nulap","$a","$ap",
                    "$am","$b","$bp","$bm","$ab",
                    "$abp","$abm");

// Get the total number of columns we are going to plot

    $columns  = count($values);

// Get the height and width of the final image

    $width = 600;
    $height = 300;

// Set the amount of space between each column

    $padding = 5;

// Get the width of 1 column

    $column_width = $width / $columns ;

// Generate the image variables

    $im1        = imagecreate($width,$height);
    $gray      = imagecolorallocate ($im1,0xcc,0xcc,0xcc);
    $gray_lite = imagecolorallocate ($im1,0xee,0xee,0xee);
    $gray_dark = imagecolorallocate ($im1,0x7f,0x7f,0x7f);
    $white     = imagecolorallocate ($im1,0xff,0xff,0xff);
    
// Fill in the background of the image

    imagefilledrectangle($im1,0,0,$width,$height,$white);
    
    $maxv = 0;

// Calculate the maximum value we are going to plot

    for($i=0;$i<$columns;$i++)$maxv = max($values[$i],$maxv);

// Now plot each column
        
    for($i=0;$i<$columns;$i++)
    {
        $column_height = ($height / 100) * (( $values[$i] / $maxv) *100);

        $x1 = $i*$column_width;
        $y1 = $height-$column_height;
        $x2 = (($i+1)*$column_width)-$padding;
        $y2 = $height;

        imagefilledrectangle($im1,$x1,$y1,$x2,$y2,$gray);

// This part is just for 3D effect

        imageline($im1,$x1,$y1,$x1,$y2,$gray_lite);
        imageline($im1,$x1,$y2,$x2,$y2,$gray_lite);
        imageline($im1,$x2,$y1,$x2,$y2,$gray_dark);

    }

// Send the PNG header information. Replace for JPEG or GIF or whatever
 echo '<p>Krvne grupe:</p>';
 imagejpeg( $im1, "graph2.jpeg", 90); 
 imagedestroy($im1); 
 echo "<img src='graph2.jpeg'><p></p>"; 
 echo '<p> 0: '.$nula.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0-: '.$nulam.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0+:'
               .$nulap.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A:'.$a.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A+:'
			   .$ap.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A-:'.$am.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B:'
			   .$b.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B+:'.$bp.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B-:'
			   .$bm.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AB:'.$ab.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AB+:'
			   .$abp.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AB-:'.$abm.'</p>';
 
?>
		
	  
     </div>

  </section>

 

  <footer class="site-footer">
    <p>Copyright &copy; ZKD, 2014</p>
  </footer>
  
</body>
</html>