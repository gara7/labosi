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

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/[version]/jquery.mobile-[version].min.css" />
	<script src="http://code.jquery.com/jquery-[version].min.js"></script>
	<script src="http://code.jquery.com/mobile/[version]/jquery.mobile-[version].min.js"></script>
<script src="detectmobilebrowser.js"></script>

<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
header('Location: unos.php');
?>
	</head>
<body>

  <header class="site-header "data-role="page">
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
         

          <div class="izborni row">
		   
		<!-- FORMA ZA UNOS PACIJENATA-->
		  <form action="ispis.php" method="post">
            

          <label for="ime">Ime:</label></br>
          <input id="ime" type="text" name="name" /></br></br>
		  
          <label for="prezime">Prezime:</label></br>
          <input id="prezime" type="text" name="lastname" /></br></br>
		  
          <label for="spol">Spol:</label></br></br>
          <input id="spol" type="radio" name="gen" value="M"/>M
		  <input id="spol" type="radio" name="gen" value="Ž"/>Ž<br></br>

		  <label for="datum">Datum rođenja: </label>
          <p>Dan:&nbsp;&nbsp;&nbsp;
		     Mjesec:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
			 Godina: 
		  </p>
			     <select name="dan">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
				  <option value="4">4</option>
                  <option value="5">5</option>
				  <option value="6">6</option>
                  <option value="7">7</option>
				  <option value="8">8</option>
                  <option value="9">9</option>
				  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
				  <option value="13">13</option>
                  <option value="14">14</option>
				  <option value="15">15</option>
                  <option value="16">16</option>
				  <option value="17">17</option>
                  <option value="18">18</option>
				  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
				  <option value="22">22</option>
                  <option value="23">23</option>
				  <option value="24">24</option>
                  <option value="25">25</option>
				  <option value="26">26</option>
                  <option value="27">27</option>
				  <option value="28">28</option>
                  <option value="29">29</option>
				  <option value="30">30</option>
                  <option value="31">31</option>
                  </select>
				  
		
				  
				  <select name="mjesec">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
				  <option value="4">4</option>
                  <option value="5">5</option>
				  <option value="6">6</option>
                  <option value="7">7</option>
				  <option value="8">8</option>
                  <option value="9">9</option>
				  <option value="10">10</option>
                  <option value="11">11</option>
				  <option value="12">12</option>
                 
                  </select> 
				  
		 
			     <select name="godina">
                  <option value="1931">1931</option>
                  <option value="1932">1932</option>
                  <option value="1933">1933</option>
				  <option value="1934">1934</option>
                  <option value="1935">1935</option>
				  <option value="1936">1936</option>
                  <option value="1937">1937</option>
				  <option value="1938">1938</option>
                  <option value="1939">1939</option>
				  <option value="1940">1940</option>
                  <option value="1941">1941</option>
                  <option value="1942">1942</option>
				  <option value="1943">1943</option>
                  <option value="1944">1944</option>
				  <option value="1945">1945</option>
                  <option value="1946">1946</option>
				  <option value="1947">1947</option>
                  <option value="1948">1948</option>
				  <option value="1949">1949</option>
                  <option value="1950">1950</option>
                  <option value="1951">1951</option>
				  <option value="1952">1952</option>
                  <option value="1953">1953</option>
				  <option value="1954">1954</option>
                  <option value="1955">1955</option>
				  <option value="1956">1956</option>
                  <option value="1957">1957</option>
				  <option value="1958">1958</option>
                  <option value="1959">1959</option>
				  <option value="1960">1960</option>
                  <option value="1961">1961</option>
				  <option value="1962">1962</option>
                  <option value="1963">1963</option>
                  <option value="1964">1964</option>
				  <option value="1965">1965</option>
                  <option value="1966">1966</option>
				  <option value="1967">1967</option>
                  <option value="1968">1968</option>
				  <option value="1969">1969</option>
                  <option value="1970">1970</option>
				  <option value="1971">1971</option>
                  <option value="1972">1972</option>
                  <option value="1973">1973</option>
				  <option value="1974">1974</option>
                  <option value="1975">1975</option>
				  <option value="1976">1976</option>
                  <option value="1977">1977</option>
				  <option value="1978">1978</option>
                  <option value="1979">1979</option>
				  <option value="1980">1980</option>
                  <option value="1981">1981</option>
                  <option value="1982">1982</option>
				  <option value="1983">1983</option>
                  <option value="1984">1984</option>
				  <option value="1985">1985</option>
                  <option value="1986">1986</option>
				  <option value="1987">1987</option>
                  <option value="1988">1988</option>
				  <option value="1989">1989</option>
                  <option value="1990">1990</option>
				  <option value="1991">1991</option>
                  <option value="1992">1992</option>
				  <option value="1993">1993</option>
				  <option value="1994">1994</option>
                  <option value="1995">1995</option>
				  <option value="1996">1996</option>
                  <option value="1997">1997</option>
				  <option value="1998">1998</option>
                  <option value="1999">1999</option>
				  <option value="2000">2000</option>
                  <option value="2001">2001</option>
                  <option value="2002">2002</option>
				  <option value="2003">2003</option>
                  <option value="2004">2004</option>
				  <option value="2005">2005</option>
                  <option value="2006">2006</option>
				  <option value="2007">2007</option>
                  <option value="2008">2008</option>
				  <option value="2009">2009</option>
                  <option value="2010">2010</option>
				  <option value="2011">2011</option>
                  <option value="2012">2012</option>
				  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  </select></br></br>
		  
		  <label for="mjesto">Mjesto rođenja:</label></br>
          <input id="mjesto" type="text" name="mjesto" /></br></br>
		  
		  <label for="adresa">Adresa i mjesto stanovanja:</label></br>
          <input id="adresa" type="text" name="adresa" /></br></br>
		  
		  <label for="grupa">Krvna grupa (ako zna):</label></br></br>
		  <input id="grupa" type="radio" name="krv" value="A"/>A
          <input id="grupa" type="radio" name="krv" value="B"/>B
		  <input id="grupa" type="radio" name="krv" value="AB"/>AB
		  <input id="grupa" type="radio" name="krv" value="0"/>0</br>
		  <input id="grupa+" type="radio" name="krv+" value="+"/>+
		  <input id="grupa-" type="radio" name="krv+" value="-"/>-</br></br>
		  
		  <label for="tegobe">Ima li prijašnjih medicinskih tegoba (srčane tegobe, tlak, virusne bolesti (Hepatits, HIV)):</label></br></br>
          <input id="tegobe" type="radio" name="tegobe" value="Da"/>Da</br></br>
		  <input id="tegobe" type="radio" name="tegobe" value="Ne"/>Ne</br></br>
		  
		  <label for="kojetegobe">Ako je odgovor na prijašnje pitanje "Da" popuniti: Koje tegobe osoba ima</label></br>
          <textarea id="kojetegobe" name="description" rows="3" cols="50" class="InputTextArea"></textarea></br></br>
		  
		  <label for="alergija">Je li osoba alergična na lijekove:</label></br></br>
          <input id="alergija" type="radio" name="alergija" value="Da"/>Da</br></br>
		  <input id="alergija" type="radio" name="alergija" value="Ne"/>Ne</br></br>
		  <input id="alergija" type="radio" name="alergija" value="Ne zna"/>Ne zna</br></br>
		  
		  <label for="kojaalergija">Ako je odgovor na prijašnje pitanje "Da" popuniti: Na koje lijekove je osoba alergična</label></br>
          <textarea id="kojaalergija" name="description22" rows="3" cols="50" class="InputTextArea"></textarea></br></br>
		  
          <p><input type="submit" value="Pošalji" class="InputButton" /></p>
		  
        </form>   
		
		   
		  </div>
		 
		  
			   
		
	  
     </div>

  </section>

 

  <footer class="site-footer">
    <p>Copyright &copy; ZKD, 2014</p>
  </footer>
  
</body>
</html>