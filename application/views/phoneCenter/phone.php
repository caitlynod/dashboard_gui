<div id="topClock" class="text-center"><span id="topClockTime"></span> | <?php echo $title;?></div>
<ul id="mainDash" class="small-block-grid-4 text-center">
	<li>
		<img src="<?php echo base_url().'images/voiceDial_icon.png';?>">
		<h3 class="userhead">voice dial</h3>
		<div class="voiceInfo">
			<img src="<?php echo base_url().'images/voiceOn_icon.png';?>">
			<p class="white">speak now...</p>
		</div>
	</li>
	<li><a href="<?php echo base_url()."index.php/phone/keypad";?>">
		<img src="<?php echo base_url().'images/keyDial_icon.png';?>">
		<h3 class="userhead">keypad dial</h3>
	</a>
	</li>
	<li><a href="<?php echo base_url()."index.php/phone/contacts";?>">
		<img src="<?php echo base_url().'images/address_icon.png';?>">
		<h3 class="userhead">address book</h3>
	</a>
	</li>
	<li><a href="<?php echo base_url()."index.php/phone/contactSearch";?>">
		<img src="<?php echo base_url().'images/searchL_icon.png';?>">
		<h3 class="userhead">search</h3>
</a>
	</li>
</ul>