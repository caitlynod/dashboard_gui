<div id="topClock" class="text-center"><span id="topClockTime"></span> | <?php echo $title;?></div>
<section class="row">
	<div class="small-4 columns side">
	<ul id="mainDash" class="text-center sidebar">
		<li>
		<img class="twitteric" src="<?php echo base_url().'images/twitter_icon.png';?>">
		<h3 class="userhead">twitter</h3>
		<p class="white">@<?php echo strtolower($name[0].str_replace("'", "", $lname));?></p>
	<hr id="profTwitter">
	<img class="userProfImg" src="<?php echo base_url().'images/thumb/'.$image;?>">
	<p class="white">developer | coffee | begos</p>
	<hr id="bottomTwitter">
		<a href="<?php echo base_url()."index.php/Social_media/";?>"><img class="closeTwitter" src="<?php echo base_url()."images/close_icon.png";?>"></a>
	</li>
	</ul>
	</div>
	<div class="small-8 columns">
	<h2 class="text-center userhead marginTop">twitter feed</h2>
	<p class="white text-center">@<?php echo strtolower($name[0].str_replace("'", "", $lname));?></p>
<hr id="bottomTwitter">
<div>
	<ul class="small-block-grid-3 columns twitterfeed">
		<li><i class="fa fa-retweet twitterfa"></i>AIGA</li>
		<li>Unpacking the 116 images @NASA...</li>
		<li class="response"><i class="fa fa-retweet twitterfa"></i><i class="fa fa-share twitterfa"></i><i class="fa fa-heart twitterfa"></i></li>
		<li>HostGator</li>
		<li>Hey there, we would love to be your...</li>
		<li class="response"><i class="fa fa-retweet twitterfa"></i><i class="fa fa-share twitterfa"></i><i class="fa fa-heart twitterfa"></i></li>
		<li>House of Friendship</li>
		<li>Hey there, we would love to be your...</li>
		<li class="response"><i class="fa fa-retweet twitterfa"></i><i class="fa fa-share twitterfa"></i><i class="fa fa-heart twitterfa"></i></li>
		<li>Chriskindl Canada</li>
		<li>Hey there, we would love to be your...</li>
		<li class="response"><i class="fa fa-retweet twitterfa"></i><i class="fa fa-share twitterfa"></i><i class="fa fa-heart twitterfa"></i></li>
		<li>Forest City Gallery</li>
		<li>Hey there, we would love to be your...</li>
		<li class="response"><i class="fa fa-retweet twitterfa"></i><i class="fa fa-share twitterfa"></i><i class="fa fa-heart twitterfa"></i></li>
		<li><i class="fa fa-retweet twitterfa"></i>Arcane</li>
		<li>Hey there, we would love to be your...</li>
		<li class="response"><i class="fa fa-retweet twitterfa"></i><i class="fa fa-share twitterfa"></i><i class="fa fa-heart twitterfa"></i></li>
		<li><i class="fa fa-retweet twitterfa"></i>Scotch Bran Canada</li>
		<li>Hey there, we would love to be your...</li>
		<li class="response"><i class="fa fa-retweet twitterfa"></i><i class="fa fa-share twitterfa"></i><i class="fa fa-heart twitterfa"></i></li>
	</ul>
</div>
<div>
	<ul class="small-block-grid-4 columns twitterFunc text-center">
		<li>
			<img class="twitterIcons" src="<?php echo base_url();?>images/compose_icon.png">
			<p>compose</p>
		</li>
		<li>
			<img class="twitterIcons" src="<?php echo base_url();?>images/user_icon.png">
			<p>following</p>
		</li>
		<li>
			<img class="twitterIcons" class="twitterIcons" src="<?php echo base_url();?>images/user_icon.png">
			<p>followers</p>
		</li>
		<li>
			<img class="twitterIcons" src="<?php echo base_url();?>images/search_icon.png">
			<p>search</p>
		</li>
		
	</ul>
</div>
</div>
</section>