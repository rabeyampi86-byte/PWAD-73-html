<?php include("loop_header.php"); ?>
<marquee> Welcome to loop programimg</marquee>

	<div class="main" style="height:auto;">	
	<div style="padding: 10px 10px 10px 10px;">
			<h1>Increment</h1>
			<?php
			echo("for loop <br>");
			for($x=1; $x<=10; $x=$x+2){
				echo("$x <br>");
			}
			
			echo("while loop <br>");
			$x=1;
			while($x<=10){
				echo("$x <br>");
				$x=$x+1;
			}
			
			echo("do while loop <br>");
			$x=2;
			do{
				echo("$x <br>");
				$x=$x+2;
			}while($x<=10);
			
			echo("foreach loop <br>");
			$array = array(1,2,3,4,5,6,7,8,9,10);
			foreach($array as $value){
				if($value==7){
					break;
				}
				echo("$value <br>");
			}
			?>
			<h1>Decrement</h1>
			<?php
			
			echo("for loop <br>");
			for($x=10; $x>=1; $x=$x-2){
				echo("$x <br>");
			}
			
			echo("while loop <br>");
			$x=10;
			while($x>=1){
				echo("$x <br>");
				$x=$x-1;
			}
			
			?>
		
		
		<h1>Loop Syntax</h1>
		1.For<br>
		2.While<br>
		3.Do While <br>
		4.Foreach <br>
		
		* For loop syntax:<br>
		for(init; condi; increment/Decrement){ <br>
			statement <br>
		}<br><br>
		* while loop syntax:<br>
		init <br>
		while(condi){ <br>
			statement <br>
			increment/Decrement <br>
		}while(condi); <br> <br>
		</div>
	</div>
	<?php include("footer.php"); ?>