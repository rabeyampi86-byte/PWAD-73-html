<?php include("header.php");?>
		
		<div class="main" style="height:auto;">
		<div style="padding: 10px 10px 10px 10px;">
		<h1 style="margin-top:0px;">Triangle Area</h1>
		    land=60<br>
			height=34<br>
			<?php
			$land=60;
			$height=34;
			?>
			Triangle area= <?php $area=0.5*$land=60*$height=34; echo($area);?>
		
		<h1>Rectangle area</h1>
			length=50<br>
			width=45<br>
			<?php
			$length=50;
			$width=45;
			?>
			Rectangle area= <?php $area=$length=50*$width=45; echo($area);?>
			<h1>Circle area</h1>
			R=25<br>
			<?php
			$R=25;
			?>
			Circle area= <?php $area=3.1416*$R*$R; echo($area);?>
			
		<h1>Average</h1>
			a=35<br>
			b=40<br>
			c=45<br>
			d=50<br>
			e=55<br>
			<?php
			$a=35;
			$b=40;
			$c=45;
			$d=50;
			$e=55;
			?>
			Average= <?php $area=($a+$b+$c+$d+$e)/5; echo($area);?>
		</div>
		</div>
		
<?php include("footer.php");?>