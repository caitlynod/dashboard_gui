<div id="topClock" class="text-center"><span id="topClockTime"></span> | <?php echo $title;?></div>
<div class="marginTop"></div>
<a href="<?php echo base_url()."index.php/media/";?>"><img class="close" src="<?php echo base_url()."images/close_icon.png";?>"></a>
<h2 id="addressbook" class="text-center userhead">cd player</h2>
<p class="text-center white">Current Disc: Adele 25</p>
<br>
<div class="small-10 small-centered columns">
<hr>
</div>
<div class="row playButtons">
    <div class="small-6 small-centered columns">
        <ul class="small-block-grid-3 columns">
            <li><img id="rButton" class="right sideButs" src="<?php echo base_url()."images/rewind_icon.png";?>" alt="rewind"></li>
            <li><img id="pButton" src="<?php echo base_url()."images/play_icon.png";?>" alt="play"></li>
            <li><img id="fButton" class="sideButs" src="<?php echo base_url()."images/forward_icon.png";?>" alt="forward"></li>
        </ul>
    </div>
</div>
<div class="small-10 small-centered columns">
<input id="resultSlider" type="range" min="0" value="0" max="295">
<div class="row text-center">
    <div class="small-2 columns">
        <p class="white">0:00</p>
    </div>
    <div class="small-8 columns">
        <p>Track 1: "Hello"</p>
    </div>
    <div class="small-2 columns">
        <p class="white">4:55</p>
    </div>
</div>
</div>