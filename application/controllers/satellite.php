<div id="topClock" class="text-center"><span id="topClockTime"></span> | <?php echo $title;?></div>
<div id="container">
	<img class="play" src="<?php echo base_url()."images/play_icon.png";?>">
	<a href="<?php echo base_url()."index.php/Media/";?>"><img class="close" src="<?php echo base_url()."images/close_icon.png";?>"></a>
	<h2 id="addressbook" class="text-center userhead">satellite radio</h2>
	<p class="text-center totalContact white">@<?php echo strtolower($name[0].str_replace("'", "", $lname));?></p>
	<div class="spotifySong">
	<div class="small-4 columns mediaBtns">
		<img src="<?php echo base_url()."images/pop2k.png";?>"><p class="white text-center">(click to change)</p>
	</div>
	<div class="small-8 columns songOptions">
		<p>Current Station: <span class="white marginLeft1">Pop2k</span></p>
		<p>Current Song: <span class="white marginLeft">What's Love by Ashanti and Ja Rule</span></p>
	</div>
	<hr>
</div>