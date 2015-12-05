<div id="topClock" class="text-center"><span id="topClockTime"></span> | <?php echo $title;?></div>
<ul id="mainDash" class="small-block-grid-4 text-center">
	<li>
		<img src="<?php echo base_url().'images/weather_icon.png';?>">
		<h3 class="userhead">twitter</h3>
			<p class="white">@<?php echo strtolower($name[0].str_replace("'", "", $lname));?></p>
	</li>
	<li>
		<img src="<?php echo base_url().'images/clock_icon.png';?>">
		<h3 class="userhead">facebook</h3>
		<p class="white"><?php echo $name.' '.$lname;?></p>
	</li>
	<li>
		<img src="<?php echo base_url().'images/trip_icon.png';?>">
		<h3 class="userhead">foursquare</h3>
		<p class="white">@<?php echo strtolower($name[0].str_replace("'", "", $lname));?></p>
	</li>
	<li>
		<img src="<?php echo base_url().'images/radio_icon.png';?>">
		<h3 class="userhead">google+</h3>
		<p class="white"><?php echo strtolower($name[0].str_replace("'", "", $lname));?></p>
	</li>
</ul>