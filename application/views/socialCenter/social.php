<div id="topClock" class="text-center"><span id="topClockTime"></span> | <?php echo $title;?></div>
<ul id="mainDash" class="small-block-grid-4 text-center">
	<li><a href="<?php echo base_url().'index.php/Social_media/twitter';?>">
		<img src="<?php echo base_url().'images/twitter_icon.png';?>">
		<h3 class="userhead">twitter</h3>
			<p class="white">@<?php echo strtolower($name[0].str_replace("'", "", $lname));?></p>
		</a>
	</li>
	<li>
		<img src="<?php echo base_url().'images/facebook_icon.png';?>">
		<h3 class="userhead">facebook</h3>
		<p class="white"><?php echo $name.' '.$lname;?></p>
	</li>
	<li>
		<img src="<?php echo base_url().'images/foursq_icon.png';?>">
		<h3 class="userhead">foursquare</h3>
		<p class="white">@<?php echo strtolower($name[0].str_replace("'", "", $lname));?></p>
	</li>
	<li>
		<img src="<?php echo base_url().'images/gplus_icon.png';?>">
		<h3 class="userhead">google+</h3>
		<p class="white"><?php echo strtolower($name[0].str_replace("'", "", $lname));?></p>
	</li>
</ul>
