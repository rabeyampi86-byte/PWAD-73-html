<?php include("header.php");?>
		
		<div class="main">
		<div style="padding: 10px 10px 10px 10px;">
		<h1 style="margin-top:0px;">Sum,Sub,Mul,Div,Mud</h1>
		    a=50<br>
			b=45<br>
			<?php
			$a=50;
			$b=45;
			?>
			a+b= <?php $sum=$a+$b; echo($sum);?><br>
			a-b= <?php $sub=$a-$b; echo($sub);?><br>
			a*b= <?php $mul=$a*$b; echo($mul);?><br>
			a/b= <?php $div=$a/$b; echo($div);?><br>
			a%b= <?php $mud=$a%$b; echo($mud);?><br>
			
		</div>
		</div>
		
<?php include("footer.php");?>