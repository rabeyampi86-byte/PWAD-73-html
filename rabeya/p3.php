<?php include("header.php");?>
		

		<div class="main" style="height:auto;">
		<div style="padding-top: 10px 10px 10px 10px; font-size-24px;">
		<div style="padding: 10px 10px 10px 10px;">
		<h1 style="margin-top:0px;">Largest number Find out.</h1> 
			
			a=19</br>
			b=12</br>
			c=15</br></br>
			
			<?php
			$a= 19;
			$b= 12;
			$c= 15;
			
			if($a>$b and $a>$c){
				echo("The Largest number is $a <br>");
			}elseif($b>$c and $b>$a){
			    echo("The Largest number is $b <br>");
			}else{
			    echo("The Largest number is $c <br>");
			}
			
			if($b==12){
				echo("largest value of B = $b");
			}else{
				echo("The Value of B = Wrong");
			}
			?>
			
			<h1>smallest number Find out.</h1> 
			
			
			
			<?php
			$a= 150;
			$b= 120;
			$c= 150;
			$d= 250;
			
			if($a<$b and $a<$c and $a<$d){
				echo("The smallest number is $a <br>");
			}elseif($b<$c and $b<$a and $b<$d){
			    echo("The smallest number is $b <br>");
			}elseif($c<$d and $c<$a and $c<$b){
			    echo("The smallest number is $c <br>");
			}else{
			    echo("The smallest number is $d <br>");
			}
			
			if($b==12){
				echo("smallest value of B = $b");
			}else{
				echo("The Value of B = Wrong");
			}
			?>
		</div>
		</div>
		</div>
		
		
<?php include("footer.php");?>				