<div id="topClock" class="text-center"><span id="topClockTime"></span> | <?php echo $title;?></div>
<div class="marginTop"></div>
<a href="<?php echo base_url()."index.php/dashboard/volt";?>"><img class="close" src="<?php echo base_url()."images/close_icon.png";?>"></a>
<h2 id="addressbook" class="text-center userhead">volt status</h2>
<div class="statusImages">
    <div class="row">
    <div class="small-8 columns">
        <img src="<?php echo base_url().'images/carstatus_icon.png';?>">
    </div>
    <div class="small-4 columns">
        <img src="<?php echo base_url().'images/cargraph_icon.png';?>">
    </div>
    </div>
</div>
<div class="small-8 small-centered columns">
<ul class="small-block-grid-4 text-center">
    <li>
        <img src="<?php echo base_url().'images/power_icon.png';?>">
        <p>powerflow</p>
    </li>
    <li>
        <img src="<?php echo base_url().'images/charge_icon.png';?>">
        <p>charging</p>
    </li>
    <li>
        <img src="<?php echo base_url().'images/carinfo_icon.png';?>">
        <p>info</p>
    </li>
    <li>
        <img src="<?php echo base_url().'images/diagnostics_icon.png';?>">
        <p>diagnostics</p>
    </li>
</ul>
</div>