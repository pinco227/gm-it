<?
session_start();
	if(isset($_POST['contact']))
	{
		if($_SESSION['cod'] != $_POST['cod'])
		{
			echo '<script>alert("Cod de siguranta incorect! Incercati din nou!");</script>';
		}
		else
		{
			$to      = "service@pi-design.ro";//
			$name = $_POST["name"];
			$email = $_POST["email"];
			$address = $_POST["address"];
			$comments = $_POST["comments"];
			
			$message = "
				Ai primit un nou comentariu!
				De la: ".$name."
				Email: ".$email."
				Adresa: ".$address."
				Comentariu: ".$comments."
				
				www.pi-design.ro
				";
			$subject = "Comentariu nou de pe pi-design.ro";
			$headers = "From: ".$email;
			
			if (mail($to, $subject, $message, $headers)) {
				echo '<script>alert("Mesajul a fost trimis cu succes!\nVa multumim!");</script>';
			} else {
				echo '<script>alert("Mesajul nu a putut fi trimis! \nVa rugam incercati din nou!");</script>';
			}
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>GM - Servicii IT</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--header start -->
<div id="header">
	<img src="images/logo.jpg" alt="gm - servicii it" />
	<ul>
		<li class="home"><a href="index.html">Home</a></li>
		<li><a href="service.html">Service IT</a></li>
		<li><a href="web_design.html">Web Design</a></li>
		<li><a href="hosting.html">Hosting</a></li>
		<li><a href="oferte.html">Oferte</a></li>
		<li><a href="shop_it.html">Shop IT</a></li>
		<li class="contactsel">Contact</li>
	</ul>
</div>
<!--header end -->
<!--body start -->
<div id="body">
	<div id="left">
		<h2 id="categorii">Servicii</h2>
		<a class="categorii_link" href="calculatoare.html" >Service calculatoare</a><br />
		<a class="categorii_link" href="service.html#depanare-it" >Depanare IT</a><br />
		<a class="categorii_link" href="service.html#consultanta-it" >Consultanta IT</a><br />
		<a class="categorii_link" href="service.html#instalare-software" >Instalare Software</a><br />
		<a class="categorii_link" href="service.html#mentenanta" >Mentenanta</a><br />
		<a class="categorii_link" href="service.html#devirusare" >Devirusare</a><br />
		<a class="categorii_link" href="service.html#diagnosticare" >Diagnosticare</a><br /><br />
<script type="text/javascript" src="http://profitshare.emag.ro/get_ads.php?zone_id=33819"></script>
	</div>
	<div id="mid">
		<h2>Detalii contact</h2>
		<p class="text1"><strong>P.F.A Gradinaru Marian</strong><br />
		<strong>Adresa:</strong> Str. Cerna, nr. 6-A, Iasi<br />
		<strong>Telefon:</strong> 0756 242 177<br />
		<strong>E-mail:</strong> service@pi-design.ro</p>
		<div id="contact-form">
			<form method="post" action="contact.php" name="contact">
				<h2>Formular de contact</h2>
				<label>Nume:</label><input name="name" type="text" /><br class="spacer" />
				<label>Adresa E-Mail:</label><input name="email" type="text" /><br class="spacer" />
				<label>Oras:</label><input name="address" type="text" /><br class="spacer" />
				<label class="comment">Mesaj:</label><textarea name="comments" cols="30" rows="4"></textarea>
				<br class="spacer" />
                <label>Cod siguranta: <img src="captcha.php?width=100&height=40&characters=4" width="100" height="40" align="middle" /></label> 
                <input name="cod" type="text" />
				<br />
				<input name="contact" type="submit" title="Submit" class="submit" value="Send" />
			</form>
		</div>
        <h2>Yahoo! messenger</h2>
		<p class="text1">
        	<a href="ymsgr:sendim?gradinarumarian"><img src="http://opi.yahoo.com/online?u=gradinarumarian&amp;m=g&amp;t=14" width="139" height="107" border="0" /></a>
        </p>
	</div>
</div>
<!--body end -->
<!--footer start -->
<div id="footer-main">
  <div id="footer">
    <ul>
      <li><a href="index.html">Home</a>|</li>
			<li><a href="service.html">Service IT</a>|</li>
			<li><a href="web_design.html">Web Design</a>|</li>
			<li><a href="hosting.html">Hosting</a>|</li>
			<li><a href="oferte.html">Oferte</a>|</li>
			<li><a href="shop_it.html">Shop IT</a>|</li>
			<li><a href="contact.html" class="nobdr">Contact</a></li>
    </ul>
    <p class="copyright">&copy; Copyright GM - Servicii IT.</p>
  </div>
</div>
<!--footer end -->
</body>
</html>
