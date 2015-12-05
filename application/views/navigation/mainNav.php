<section class="row selectUser">
	<div class="medium-12 columns user">
		<h2 class="text-center userhead">hello, <?php echo $name; ?></h2>
		<p>Please make a selection.</p>
	</div>
	<hr>
	<div class="users">
		<ul class="small-block-grid-6 columns mainNav">
			<li><a href="<?php echo base_url().'index.php/Phone';?>"><img class="navPic" src="<?php echo base_url().'images/phone_icon.png';?>"><h2 class="navOption">phone</h2></a></li>
            <li><a href="<?php echo base_url().'index.php/Social_media';?>"><img class="navPic" src="<?php echo base_url().'images/social_icon.png';?>"><h2 class="navOption">social media</h2></a></li>
            <li><a href="<?php echo base_url().'index.php/Media';?>"><img class="navPic" src="<?php echo base_url().'images/media_icon.png';?>"><h2 class="navOption">media center</h2></a></li>
            <li><a href="<?php echo base_url().'index.php/GPS';?>"><img class="navPic" src="<?php echo base_url().'images/gps_icon.png';?>"><h2 class="navOption">GPS</h2></a></li>
            <li><a href="<?php echo base_url().'index.php/Search';?>"><img class="navPic" src="<?php echo base_url().'images/search_icon.png';?>"><h2 class="navOption">search</h2></a></li>
            <li><a href="<?php echo base_url().'index.php/Volt';?>"><img class="navPic" src="<?php echo base_url().'images/status_icon.png';?>"><h2 class="navOption">volt status</h2></a></li>
            
        </ul>
    </div>
</section>
<img id="settings" src="<?php echo base_url().'images/settings.png';?>">
</aside>