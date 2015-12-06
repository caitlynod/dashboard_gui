<div id="topClock" class="text-center"><span id="topClockTime"></span> | <?php echo $title;?></div>
<div id="container">
	<a href="<?php echo base_url()."index.php/phone/";?>"><img class="close" src="<?php echo base_url()."images/close_icon.png";?>"></a>
	<h2 id="addressbook" class="text-center userhead">address book</h2>
	<p class="text-center totalContact">showing <span id="showing">4</span> of <span id="total">24</span> results</p>
	<?php echo $this->pagination->create_links();?>
    <input id="resultSlider" type="range" min="1" value="1" max="6">
    <ul id="contactList" class="small-block-grid-6 columns contacts">
        <li><img class="navPic" src="<?php echo base_url().'images/adduser_icon.png';?>"><h2 class="contactName">add user</h2></li>
        <li><a href="<?php echo base_url()."index.php/phone/contactView";?>"><img class="navPic" src="<?php echo base_url().'images/adduser_icon.png';?>"><h2 class="contactName">search</h2></a></li>
        <?php foreach($contacts as $contact):?>
    		<li><img class="navPic" src="<?php echo base_url().'images/'.$contact['contacts_img'];?>"><h2 class="contactName"><?php echo $contact['contacts_fname'];?></h2><p class="contactName"><?php echo $contact['contacts_lname'];?></p></li>
        <?php endforeach;?>
    </ul>  
</div>