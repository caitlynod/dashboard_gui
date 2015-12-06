<div id="topClock" class="text-center"><span id="topClockTime"></span></div>
<ul id="mainDash" class="small-block-grid-4 text-center">
	<li>
		<a href="<?php echo base_url()."index.php/GPS/trip";?>">
			<img src="<?php echo base_url().'images/trip_icon.png';?>">
			<h3 class="userhead">current trip</h3>
			<p class="white">Walmart Superstore</p><br>
			<div class="dashInfo">
				<p class="topNumber">200m</p>
				<p class="white">Left on Queens Ave</p>
			</div>
		</a>
	</li>
	<li>
		<a href="<?php echo base_url()."index.php/GPS/newtrip";?>">
			<img src="<?php echo base_url().'images/new_trip_icon.png';?>">
			<h3 class="userhead">new trip</h3>
			<p class="white">pick new destination</p>
		</a>
	</li>
	<li>
		<a href="<?php echo base_url()."index.php/GPS/prevtrip";?>">
			<img src="<?php echo base_url().'images/prev_trip_icon.png';?>">
			<h3 class="userhead">recent trips</h3>
			<p class="white">view past destinations</p>
		</a>
	</li>
	<li>
		<a href="<?php echo base_url()."index.php/GPS/amenities";?>">
			<img src="<?php echo base_url().'images/amenities_icon.png';?>">
			<h3 class="userhead">find amenities</h3>
			<p class="white">find things close to you</p><br>
		</a>
	</li>
</ul>