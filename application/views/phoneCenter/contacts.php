<div id="topClock" class="text-center"></div>
<div id="container">
	<a href="<?php echo base_url()."index.php/dashboard/phone";?>"><img class="close" src="<?php echo base_url()."images/close_icon.png";?>"></a>
	<h2 id="addressbook" class="text-center userhead">address book</h2>
	<p class="text-center totalContact">showing <span id="showing">6</span> of <span id="total">24</span> results</p>
	<?php echo $this->pagination->create_links();?>
    <input id="resultSlider" type="range" min="1" value="1" max="4">
    <ul id="contactList" class="small-block-grid-6 columns contacts">
        <?php foreach($contacts as $contact):?>
    		<li><img class="navPic" src="<?php echo base_url().'images/'.$contact['contacts_img'];?>"><h2 class="contactName"><?php echo $contact['contacts_fname'];?></h2><p class="contactName"><?php echo $contact['contacts_lname'];?></p></li>
        <?php endforeach;?>
    </ul>  
</div>