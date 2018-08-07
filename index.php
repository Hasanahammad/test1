<!DOCTYPE html>
<html>
<head>
	<title>PHP Syntex</title>
	<style>
		.phpcoding{
			width :900px;
			margin :0 auto ;
			background:#ddd;
			padding: 20px;
			min-height: 400px
		}
		.headeroption,
		.footer{
			background:#333;
			color:#fff;
			padding:  20px;
			text-align: center;
			text-transform:  uppercase;
		}
		.maincontent{
			min-height: 200px;
			text-align: center;
			font-size:  10px;
			text-transform:  uppercase;
			margin-top:  140px;
			}

		.headeroption h2, .footer h2{margin: 0;

		}
	</style>



</head>
<body>
	<div class="phpcoding">
	<section class="headeroption">

		<h2>php fundamental traning</h2>
		
	</section>

	<section class="maincontent">
		1.String
		2.Integer
		3.Float
		4.Boolean
		5.Array
		6.Object
		7.Null
		8.Resource
	<hr/>
		1.String
	<hr/>
			<?php
			echo  "hasan";
			?>
	<br/>
	<hr/>
		2.Integer
	<hr/>
			<?php
			$x = 28;
			var_dump ($x);
			?>
	<br/>
	<hr/>
		3.Float
	<hr/>
			<?php
			$x = 3.75;
			var_dump ($x);
			?>
	<br/>
	<hr/>
		4.Boolean
	<hr/>
			<?php
			$x = true;
			var_dump($x);
			?>

	<br/>
	<hr/>
		5.Array
	<hr/>
			<?php
			$x = array("Hasan","Ahammad");
			var_dump($x);
			?>

	<br/>
	<hr/>
		6. Object
	<hr/>
			<?php
				class Student{
								function department (){
								return "physics";
								}
								function details(){
								echo $this->department();
								}
							}

			$st = new student ();
			$st->details();
			?>
	<br/>
		<hr/>
			7.null
		<hr/>
				<?php
				//$x = "PHP is nice";
				$x = null;
				var_dump($x);
				?>
	</section>
	<section class="footer">
		<h2>www.trainging.com</h2>
		
	</section>
	</div>
</body>
</html>