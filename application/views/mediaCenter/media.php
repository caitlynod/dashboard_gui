<div id="topClock" class="text-center"><span id="topClockTime"></span></div>
<ul id="mainDash" class="small-block-grid-4 text-center">
	<li>
		<a href="<?php echo base_url()."index.php/media/radio";?>">
		<img src="<?php echo base_url().'images/radio_icon.png';?>">
		<h3 class="userhead">radio</h3>
		<p class="white">fm radio</p><br>
		<div class="dashInfo">
			<p class="topNumber">97.5</p>
			<p class="white">Currently Playing: Adele - "Hello"</p>
		</div>
		</a>
	</li>
	<li>
		<img src="<?php echo base_url().'images/input_icon.png';?>">
		<h3 class="userhead">input</h3>
		<p class="white">disc inserted:<br>Adele: 25</p>
		<div class="dashInfo">
			<p id="dashClock" class="topNumber"></p>
			<p class="white"><?php echo date('l');?><br><?php echo date('F jS Y');?></p>
		</div>
	</li>
	<li>
		<img src="<?php echo base_url().'images/satellite_icon.png';?>">
		<h3 class="userhead">satellite</h3>
		<p class="white">Sirius Radio:<br>@<?php echo strtolower($name[0].str_replace("'", "", $lname));?></p>
		<div class="dashInfo">
			<p class="topNumber">off</p>
			<p class="white">Last Station:<br> Pop2K</p>
		</div>
	</li>
	<li>
		<img src="<?php echo base_url().'images/spotify_icon.png';?>">
		<h3 class="userhead">spotify</h3>
		<p class="white">@<?php echo strtolower($name[0].str_replace("'", "", $lname));?></p><br>
		<div class="dashInfo">
			<p class="topNumber">off</p>
			<p class="white">Last Played: <?php echo $name;?>'s Playlist</p>
		</div>
	</li>
</ul>