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
         

          <div class="izborni row">
		   
		   <!--  <div class="column column-3">
			 <form action="pacijenti2.php" method="GET">
			  Pretraži: <input type="search" name="trazi"><br>
			  <input type="submit">
			</form>
			 
			</div> -->
		    <form action="unos.php" method="post">
            

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
                  <option value="Siječanj">Siječanj</option>
                  <option value="Veljača">Veljača</option>
                  <option value="Ožujak">Ožujak</option>
				  <option value="Travanj">Travanj</option>
                  <option value="Svibanj">Svibanj</option>
				  <option value="Lipanj">Lipanj</option>
                  <option value="Srpanj">Srpanj</option>
				  <option value="Kolovoz">Kolovoz</option>
                  <option value="Rujan">Rujan</option>
				  <option value="Listopad">Listopad</option>
                  <option value="Studeni">Studeni</option>
				  <option value="Prosinac">Prosinac</option>
                  <option value="Rujan">Rujan</option>
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
          <textarea id="kojaalergija" name="description" rows="3" cols="50" class="InputTextArea"></textarea></br></br>
		  
          <p><input type="submit" value="Posalji" class="InputButton" /></p>
		  
        </form>   
		
		   
		  </div>
		 
		  
			   
		
	  
     </div>

  </section>

 

  <footer class="site-footer">
  
	<hr>
    <p>Copyright &copy; ZKD, 2014</p>
  </footer>
  
</body>
</html>