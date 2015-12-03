<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar">
      <a class="left-off-canvas-toggle menu-icon left" href="#"><span></span></a>
    </nav>

    <aside class="left-off-canvas-menu">
      <section class="small-4 columns dateTime">
  <div class="left">
    <h2 id="mainClock" class="left"></h2>
    <div class="right date">
      <p ><?php echo date('l');?></p>
    <p ><?php echo date('F jS Y');?></p>
    </div>
    
  </div>
      </section>

      <section class="medium-4 columns">
       <img class="logo" src="<?php echo base_url().'images/logo.png';?>">
      </section>


      <section class="medium-4 columns right">
        <div id="changeUser" class="small-6 columns">
          <a href="<?php echo base_url().'index.php/dashboard/';?>" class="left change">change user</a>
          <img class="userChange" src="<?php echo base_url().'images/change_icon.png';?>">
        </div>
</section>
<img id="settings" src="<?php echo base_url().'images/settings.png';?>">