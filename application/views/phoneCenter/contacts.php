<div id="topClock" class="text-center"></div>
<div id="container">
	<h2 class="text-center columns userhead">address book</h2>
		<p class="text-center columns">showing 6 of 50 results</p>
	<a href="<?php echo base_url()."index.php/dashboard/phone";?>"><img class="close" src="<?php echo base_url()."images/close_icon.png";?>"></a>
    	<ul class="small-block-grid-6 columns contacts" id="searchResults">
    	<?php foreach($contacts as $contact):?>

			<li><img class="navPic" src="<?php echo base_url().'images/'.$contact['contacts_img'];?>"><h2 class="contactName"><?php echo $contact['contacts_fname'];?></h2><p class="contactName"><?php echo $contact['contacts_lname'];?></p></li>
            
        
    <?php endforeach;?>
</ul>

    
</div>