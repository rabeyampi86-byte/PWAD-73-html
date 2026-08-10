<?php include("loop_header.php"); ?>

	<div class="main" style="height:auto;">	
	<div style="padding: 10px 10px 10px 10px;">
			<h1>Decrement</h1>
			<?php
			
			echo("for loop <br>");
			for($x=20; $x>=2; $x=$x-2){
				echo("$x <br>");
			}
			
			echo("for loop <br>");
			for($x=20; $x>=2; $x=$x-2){
				echo("Rabeya <br>");
			}
			
			echo("while loop ");
			$a=19;
			while($a>=1){
				echo("$a <br>");
				$a=$a-2;
			}
			$a= 67;
			$b= 78;
			$c= 89;
			
		
			
			if($a>$b and $a>$c){
				echo("The Largest number is $a <br>");
			}elseif($b>$c and $b>$a){
			    echo("The Largest number is $b <br>");
			}else{
			    echo("The Largest number is $c <br>");
			}
			?>
			
			
			</div>
	</div>
	<?php include("footer.php"); ?>