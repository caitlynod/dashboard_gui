<div id="topClock" class="text-center"><span id="topClockTime"></span> | <?php echo $title;?></div>
<section class="row selectUser">
	<div class="medium-12 columns user">
		<a href="<?php echo base_url()."index.php/GPS";?>"><img class="closeTrips" src="<?php echo base_url()."images/close_icon.png";?>"></a>

		<h2 class="text-center userhead">find amenities</h2>
		<p>Find things close to you</p>
	</div>
	<hr>
	<div class="users">
		<ul class="small-block-grid-6 columns mainNav">
			<li><img class="navPic" src="<?php echo base_url().'images/amenities_icon.png';?>"><h2 class="navOption">food</h2></a></li>
            <li><img class="navPic" src="<?php echo base_url().'images/coffee_icon.png';?>"><h2 class="navOption">coffee</h2></a></li>
            <li><img class="navPic" src="<?php echo base_url().'images/gas_icon.png';?>"><h2 class="navOption">gas</h2></a></li>
            <li><img class="navPic" src="<?php echo base_url().'images/shop_icon.png';?>"><h2 class="navOption">shopping</h2></a></li>
            <li><img class="navPic" src="<?php echo base_url().'images/hotel_icon.png';?>"><h2 class="navOption">hotels</h2></a></li>
            <li><a href="<?php echo base_url().'index.php/Search';?>"><img class="navPic" src="<?php echo base_url().'images/search_icon.png';?>"><h2 class="navOption">search</h2></a></li>
            
        </ul>
    </div>
</section>