<div id="topClock" class="text-center"><span id="topClockTime"></span> | <?php echo $title;?></div>
<div id="container">
<a href="<?php echo base_url()."index.php/media/";?>"><img class="close" src="<?php echo base_url()."images/close_icon.png";?>"></a>
<h2 id="addressbook" class="text-center userhead">radio</h2>
<p class="text-center white">currently playing 97.5FM</p>
<a href="<?php echo base_url()."index.php/media/radio";?>"><i class="fa fa-arrow-left rightArrow"></i></a>
<input id="resultSlider" type="range" min="0" value="1" max="4">
<a href="<?php echo base_url()."index.php/media/radio";?>"><i class="fa fa-arrow-right leftArrow"></i></a>
<ul class="small-block-grid-6 columns radioStations contacts text-center">
    <li><p>97.5</p></li>
    <li><p>97.7</p></li>
    <li><p>97.9</p></li>
    <li><p>98.1</p></li>
    <li><p>98.3</p></li>
    <li><p>98.5</p></li>
</ul>
</div>
<div class="small-3 small-centered columns">
<ul class="small-block-grid-2 columns text-center radioIcons">
    <li><a href="<?php echo base_url()."index.php/media/radio";?>"><div><i class="fa fa-arrow-left"></i></div></a></li>
    <li><img src="<?php echo base_url()."images/delfav_icon.png";?>"></li>
</ul>
</div>
<hr>
<div class="small-10 small-centered columns text-center">
<ul class="small-block-grid-12 columns dialIcons">
    <p id="quickEnter">Quick Enter:</p>
    <li><div><p>1</p></div></li>
    <li><div><p>2</p></div></li>
    <li><div><p>3</p></div></li>
    <li><div><p>4</p></div></li>
    <li><div><p>5</p></div></li>
    <li><div><p>6</p></div></li>
    <li><div><p>7</p></div></li>
    <li><div><p>8</p></div></li>
    <li><div><p>9</p></div></li>
    <li><div><p>0</p></div></li>
    <li><div><p id="dialDot">.</p></div></li>
    <li><img src="<?php echo base_url()."images/check_icon.png";?>"></li>
</ul>
</div>