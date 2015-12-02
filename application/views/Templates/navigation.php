
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="small-4 columns">
        <div class="left">
		<h2 id="mainClock" class="left"></h2>
		<div class="right date">
			<p ><?php echo date('l');?></p>
		<p ><?php echo date('F d Y');?></p>
		</div>
		
	</div>
      </section>

      <section class="medium-4 columns">
        <h1 class="title text-center">Volt</h1>
      </section>
      <section class="medium-4 columns right">
        <div id="changeUser" class="small-8 columns">
          <a href="" class="left">change user</a>
          <img class="userChange" src="<?php echo base_url().'images/change_icon.png';?>">
        </div>
		
        <a class="right-off-canvas-toggle menu-icon right" href="#"><span></span></a>
      </section>
    </nav>
