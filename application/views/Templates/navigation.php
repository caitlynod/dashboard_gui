
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
    <p ><?php echo date('F d Y');?></p>
    </div>
    
  </div>
      </section>

      <section class="medium-4 columns">
       <img class="logo" src="<?php echo base_url().'images/logo.png';?>">
      </section>


      <section class="medium-4 columns right">
        <div id="changeUser" class="small-6 columns">
          <a href="" class="left change">change user</a>
          <img class="userChange" src="<?php echo base_url().'images/change_icon.png';?>">
        </div>
</section>
        <section class="row selectUser ">
          <div class="medium-12 columns">
            <h2 class="text-center columns userhead">please select a user</h2>
            <p>Hello! Who will be driving today?</p>
          </div>
          <hr>
          <div class="users">
            <ul class="small-block-grid-4 columns userProf">
              <li><img class="profPic" src="<?php echo base_url().'images/user_icon.png';?>"><h2 class="profile">John</h2></li>
              <li><img class="profPic" src="<?php echo base_url().'images/user_icon.png';?>"><h2 class="profile">Annie</h2></li>
               <li><img class="profPic" src="<?php echo base_url().'images/user_icon.png';?>"><h2 class="profile">Guest</h2></li>
               <li><img class="profPic" src="<?php echo base_url().'images/adduser_icon.png';?>"><h2 class="profile">Add User</h2></li>
            </ul>
          </div>
          
        </section>
    </aside>
