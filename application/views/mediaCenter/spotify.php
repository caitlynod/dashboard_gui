<div id="topClock" class="text-center"><span id="topClockTime"></span> | <?php echo $title;?></div>
<div id="container">
	<a href="<?php echo base_url()."index.php/Media/";?>"><img class="close" src="<?php echo base_url()."images/close_icon.png";?>"></a>
	<h2 id="addressbook" class="text-center userhead">spotify</h2>
	<p class="text-center totalContact white">@<?php echo strtolower($name[0].str_replace("'", "", $lname));?></p>
	<div class="spotifySong">
	<hr>
	<div class="small-4 columns mediaBtns">
		<img class="playOptions" src="<?php echo base_url()."images/rewind_icon.png";?>"><img class="playBtn" src="<?php echo base_url()."images/play_icon.png";?>"><img class="playOptions" src="<?php echo base_url()."images/forward_icon.png";?>">
	</div>
	<div class="small-8 columns songOptions">
		<p>Current Playlist: <span class="white marginLeft1">Pop</span></p>
		<p>Current Song: <span class="white marginLeft">Sorry by Justin Bieber</span></p>
	</div>
	<hr>
</div>
    <ul id="playlists" class="small-block-grid-4 columns contacts">
    	<li><img src="<?php echo base_url();?>images/trending.png"></li>
    	<li><img src="<?php echo base_url();?>images/pop.png"></li>
    	<li><img src="<?php echo base_url();?>images/workout.png"></li>
    	<li><img src="<?php echo base_url();?>images/rock.png"></li>
    	<li><img src="<?php echo base_url();?>images/rnb.png"></li>
    	<li><img src="<?php echo base_url();?>images/party.png"></li>
    	<li><img src="<?php echo base_url();?>images/holidays.png"></li>
    	<li><img src="<?php echo base_url();?>images/hiphop.png"></li>
    	<li><img src="<?php echo base_url();?>images/chill.png"></li>
    	<li><img src="<?php echo base_url();?>images/francophone.png"></li>
    	<li><img src="<?php echo base_url();?>images/country.png"></li>
    	<li><img src="<?php echo base_url();?>images/emd.png"></li>

    </ul>  
</div>