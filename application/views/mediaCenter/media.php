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
			<img class="input" src="<?php echo base_url();?>images/cd_icon.png">
			<p>CD Player</p>
			<img class="input" src="<?php echo base_url();?>images/aux_icon.png">
			<p>AUX</p>
		</div>
	</li>
	<li><a href="<?php echo base_url();?>index.php/Media/satellite">
		<img src="<?php echo base_url().'images/satellite_icon.png';?>">
		<h3 class="userhead">satellite</h3>
		<p class="white">Sirius Radio:<br>@<?php echo strtolower($name[0].str_replace("'", "", $lname));?></p>
		<div class="dashInfo">
			<p class="topNumber">off</p>
			<p class="white">Last Station:<br> Pop2K</p>
		</div>
	</a>
	</li>
	<li><a href="<?php echo base_url();?>index.php/Media/spotify">
		<img src="<?php echo base_url().'images/spotify_icon.png';?>">
		<h3 class="userhead">spotify</h3>
		<p class="white">@<?php echo strtolower($name[0].str_replace("'", "", $lname));?></p><br>
		<div class="dashInfo">
			<p class="topNumber">off</p>
			<p class="white">Last Played: <?php echo $name;?>'s Playlist</p>
		</div>
	</a>
	</li>
</ul>