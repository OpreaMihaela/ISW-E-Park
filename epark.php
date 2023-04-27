<!DOCTYPE html>
<html lang="en">
	<head>
		<title>E-Park</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<style>
		body { 
			background-image: url("spate.jpeg");
			}
		.header {
			position: fixed;
			width: 100%;
			top: 0;
    			background-color: #12D61B;;
			text-align: center;
			padding: 0;
			height:136.5px;

			}
		.nume { 
			margin:auto;
			font-size: 60px;
			background-image: url("nume.jpeg");
			}
		ul {
			position: fixed;
			top: 120px;
			width: 100%;
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: black;
			 border: 1px solid green;
			}
		li {
			float: left;
			}
		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			}
		li a:hover {
			background-color: #016B39;	
			}
		.unu {
			width:30%;
			height: 100%;
			text-align: center;
			float: left;
			clear: left;
			left: -10px;
			}
		img {
			border-radius: 50%;
			}
		.doi {
			width: 50%;
			height: 100%;
			padding: 20px;
			float: left;
			right: -10px;
			right: 0;
			color: white;
			background-color: rgb(179, 179, 179, 0.7);
			}
		h1 {
			text-align: center;
		}
		button {
  			display: block;
  			border-radius: 4px;
  			background-color: white;
  			border: none;
  			color: #12D61B;
  			text-align: center;
  			font-size: 28px;
  			padding: 20px;
  			width: 200px;
  			transition: all 0.5s;
  			cursor: pointer;
  			margin: 5px;
			}

		button span {
  			cursor: pointer;
  			display: inline-block;
  			position: relative;
  			transition: 0.5s;
			}

		button span:after {
  			content: '\00bb';
  			position: absolute;
  			top: 0;
  			right: -20px;
  			transition: 0.5s;
			}

		button:hover span {
  			padding-right: 25px;
			}

		button:hover span:after {
  			opacity: 1;
  			right: 0;
}
		.despremine {
			float: left;
		}
		.unitbv{
			float: right;
		}
		.footer1 {
			background-color: rgb(179, 179, 179, 0.7);
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
			color: white;
			text-align: right;
}
	</style>
	<body>
</div>
 		<div class="header">
    		<h1 class="nume" ><i>E-Park</i></h1>
			<h3>Rezervă parcarea pentru mașina ta electrică!<h3>
			
 		</div>
 		<br><br><br><br><br><br><br>
 		<ul>

			<li><a href="http://localhost/E-Park_Cod/epark.php">Acasa</a><li>
			<li><a href="file:///C:/xampp/htdocs/phplogin/contact.htm">Detalii</a></li>
			<li><a href="http://localhost/E-Park_Cod/indexp.php">Rezervă</a></li>
			
		</ul>
		<div class="unu">
			<br><br><br><br><br><br><br><br><br>
			<img src="sigla.jpeg" alt="Avatar" style="width:300px">
		</div>
		<br><br><br><br><br><br><br>
		<?php 
 				echo '<form method="POST" action="indexp.php">
 				   <input type="submit"/>
 					 </form>';
			?>
		<div class="doi">
			<h style="font-size: 50px;"><b>Bun Venit!</b></h>
			<p style="font-size: 25px;">E-Park, platforma online ce vine în ajutorul persoanelor cu autovehicule electrice. Rezervă un loc de parcare într-un mod simplu, rapid și sigur, profitând de cele mai bune servicii.</p>
			<p style="font-size: 18px;"> <br>

		</div>
		<div class="footer1">
			<footer>
				<p id="mail">Contact information: <a href="e-park@gmail.com">e-park@gmail.com</a></p>
			</footer>
		</div>
	</body>
</html>
