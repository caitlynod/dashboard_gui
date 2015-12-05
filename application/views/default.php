<div id="topClock" class="text-center"><span id="topClockTime"></span></div>
<ul id="mainDash" class="small-block-grid-4 text-center">
	<li>
		<img src="<?php echo base_url().'images/weather_icon.png';?>">
		<h3 class="userhead">weather</h3>
		<p class="white">London ON</p>
		<div class="dashInfo">
			<p class="topNumber"><?php echo $temp;?>°c</p>
			<p class="userhead"><i class="fa fa-arrow-up"></i><?php echo $max;?>°c <i class="fa fa-arrow-down"></i>-<?php echo $min;?>°c</p>
			<p class="white">Sunny With<br>Cloudy Periods</p>
		</div>
	</li>
	<li>
		<img src="<?php echo base_url().'images/clock_icon.png';?>">
		<h3 class="userhead">clock</h3>
		<p class="white">London ON</p>
		<div class="dashInfo">
			<p id="dashClock" class="topNumber"></p>
			<p class="white"><?php echo date('l');?><br><?php echo date('F jS Y');?></p>
		</div>
	</li>
	<li>
		<img src="<?php echo base_url().'images/trip_icon.png';?>">
		<h3 class="userhead">trip</h3>
		<p class="white">Woodstock ON</p>
		<div class="dashInfo">
			<p class="topNumber">50km</p>
			<p class="white">From Home<br>No Destination Set</p>
		</div>
	</li>
	<li>
		<img src="<?php echo base_url().'images/radio_icon.png';?>">
		<h3 class="userhead">radio</h3>
		<p class="white">FM Radio</p>
		<div class="dashInfo">
			<p class="topNumber">97.5</p>
			<p class="white">Currently Playing:<br>Adele - “Hello”</p>
		</div>
	</li>
</ul>