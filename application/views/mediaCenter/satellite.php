<div id="topClock" class="text-center"><span id="topClockTime"></span> | <?php echo $title;?></div>
<div id="container">
	<img class="play" src="<?php echo base_url()."images/play_icon.png";?>">
	<a href="<?php echo base_url()."index.php/Media/";?>"><img class="close" src="<?php echo base_url()."images/close_icon.png";?>"></a>
	<h2 id="addressbook" class="text-center userhead">satellite radio</h2>
	<p class="text-center totalContact white">please choose a station...</p>
	<input id="resultSlider" class="stationSlider" type="range" min="1" value="1" max="4">
	<div class="spotifySong">
	<div class="small-12 columns mediaBtns">
		<ul class="small-block-grid-6">
			<li><a href="<?php echo base_url()."index.php/Media/satellitestation";?>"><img src="<?php echo base_url()."images/pop2k_bw.png";?>"></a></li>
			<li><img src="<?php echo base_url()."images/90son9.png";?>"></li>
			<li><img src="<?php echo base_url()."images/80son8.png";?>"></li>
			<li><img src="<?php echo base_url()."images/70son7.png";?>"></li>
			<li><img src="<?php echo base_url()."images/60son6.png";?>"></li>
			<li><img src="<?php echo base_url()."images/50son5.png";?>"></li>
		</ul>
		
	</div>


	<hr>
	<div class="rkeyboard large-centered columns">
	<ul id="keyboard" class="key ">
        <li class="symbol"><span class="off">`</span><span class="on">~</span></li>
        <li id="1" class="symbol"><span class="off">1</span><span class="on">!</span></li>
        <li id="2" class="symbol"><span class="off">2</span><span class="on">@</span></li>
        <li id="3" class="symbol"><span class="off">3</span><span class="on">#</span></li>
        <li id="4" class="symbol"><span class="off">4</span><span class="on">$</span></li>
        <li id="5" class="symbol"><span class="off">5</span><span class="on">%</span></li>
        <li id="6" class="symbol"><span class="off">6</span><span class="on">^</span></li>
        <li id="7" class="symbol"><span class="off">7</span><span class="on">&amp;</span></li>
        <li id="8" class="symbol"><span class="off">8</span><span class="on">*</span></li>
        <li id="9" class="symbol"><span class="off">9</span><span class="on">(</span></li>
        <li id="0" class="symbol"><span class="off">0</span><span class="on">)</span></li>
        <li class="symbol"><span class="off">-</span><span class="on">_</span></li>
        <li class="symbol"><span class="off">=</span><span class="on">+</span></li>
        <li id="del" class="delete lastitem">delete</li>
        <li class="tab">tab</li>
        <li id="q" class="letter">q</li>
        <li id="w" class="letter">w</li>
        <li id="e" class="letter">e</li>
        <li id="r" class="letter">r</li>
        <li id="t" class="letter">t</li>
        <li id="y" class="letter">y</li>
        <li id="u" class="letter">u</li>
        <li id="i" class="letter">i</li>
        <li id="o" class="letter">o</li>
        <li id="p" class="letter">p</li>
        <li class="symbol"><span class="off">[</span><span class="on">{</span></li>
        <li class="symbol"><span class="off">]</span><span class="on">}</span></li>
        <li class="symbol lastitem"><span class="off">\</span><span class="on">|</span></li>
        <li class="capslock">caps lock</li>
        <li id="a" class="letter">a</li>
        <li id="s" class="letter">s</li>
        <li id="d" class="letter">d</li>
        <li id="f" class="letter">f</li>
        <li id="g" class="letter">g</li>
        <li id="h" class="letter">h</li>
        <li id="j" class="letter">j</li>
        <li id="k" class="letter">k</li>
        <li id="l" class="letter">l</li>
        <li class="symbol"><span class="off">;</span><span class="on">:</span></li>
        <li class="symbol"><span class="off">'</span><span class="on">&quot;</span></li>
        <li class="return lastitem">return</li>
        <li class="left-shift">shift</li>
        <li id="z" class="letter">z</li>
        <li id="x" class="letter">x</li>
        <li id="c" class="letter">c</li>
        <li id="v" class="letter">v</li>
        <li id="b" class="letter">b</li>
        <li id="n" class="letter">n</li>
        <li id="m" class="letter">m</li>
        <li class="symbol"><span class="off">,</span><span class="on">&lt;</span></li>
        <li class="symbol"><span class="off">.</span><span class="on">&gt;</span></li>
        <li class="symbol"><span class="off">/</span><span class="on">?</span></li>
        <li class="right-shift lastitem">shift</li>
        <li class="space lastitem">&nbsp;</li>
    </ul>
</div>    
</div>