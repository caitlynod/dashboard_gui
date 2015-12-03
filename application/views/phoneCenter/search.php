<div id="topClock" class="text-center"></div>
<div id="container">
	<a href="<?php echo base_url()."index.php/dashboard/phone";?>"><img class="close" src="<?php echo base_url()."images/close_icon.png";?>"></a>
    <textarea class="search" id="write"></textarea>
    	<ul class="small-block-grid-6 columns contacts" id="searchResults">
    	<?php foreach($contacts as $contact):?>

			<li><img class="navPic" src="<?php echo base_url().'images/'.$contact['contacts_img'];?>"><h2 class="contactName"><?php echo $contact['contacts_fname'];?></h2><p class="contactName"><?php echo $contact['contacts_lname'];?></p></li>
            
        
    <?php endforeach;?>
</ul>
<div class="keyboard row large-centered columns">
	<ul id="keyboard" class="key">
        <li class="symbol"><span class="off">`</span><span class="on">~</span></li>
        <li class="symbol"><span class="off">1</span><span class="on">!</span></li>
        <li class="symbol"><span class="off">2</span><span class="on">@</span></li>
        <li class="symbol"><span class="off">3</span><span class="on">#</span></li>
        <li class="symbol"><span class="off">4</span><span class="on">$</span></li>
        <li class="symbol"><span class="off">5</span><span class="on">%</span></li>
        <li class="symbol"><span class="off">6</span><span class="on">^</span></li>
        <li class="symbol"><span class="off">7</span><span class="on">&amp;</span></li>
        <li class="symbol"><span class="off">8</span><span class="on">*</span></li>
        <li class="symbol"><span class="off">9</span><span class="on">(</span></li>
        <li class="symbol"><span class="off">0</span><span class="on">)</span></li>
        <li class="symbol"><span class="off">-</span><span class="on">_</span></li>
        <li class="symbol"><span class="off">=</span><span class="on">+</span></li>
        <li class="delete lastitem">delete</li>
        <li class="tab">tab</li>
        <li class="letter">q</li>
        <li class="letter">w</li>
        <li class="letter">e</li>
        <li class="letter">r</li>
        <li class="letter">t</li>
        <li class="letter">y</li>
        <li class="letter">u</li>
        <li class="letter">i</li>
        <li class="letter">o</li>
        <li class="letter">p</li>
        <li class="symbol"><span class="off">[</span><span class="on">{</span></li>
        <li class="symbol"><span class="off">]</span><span class="on">}</span></li>
        <li class="symbol lastitem"><span class="off">\</span><span class="on">|</span></li>
        <li class="capslock">caps lock</li>
        <li class="letter">a</li>
        <li class="letter">s</li>
        <li class="letter">d</li>
        <li class="letter">f</li>
        <li class="letter">g</li>
        <li class="letter">h</li>
        <li class="letter">j</li>
        <li class="letter">k</li>
        <li class="letter">l</li>
        <li class="symbol"><span class="off">;</span><span class="on">:</span></li>
        <li class="symbol"><span class="off">'</span><span class="on">&quot;</span></li>
        <li class="return lastitem">return</li>
        <li class="left-shift">shift</li>
        <li class="letter">z</li>
        <li class="letter">x</li>
        <li class="letter">c</li>
        <li class="letter">v</li>
        <li class="letter">b</li>
        <li class="letter">n</li>
        <li class="letter">m</li>
        <li class="symbol"><span class="off">,</span><span class="on">&lt;</span></li>
        <li class="symbol"><span class="off">.</span><span class="on">&gt;</span></li>
        <li class="symbol"><span class="off">/</span><span class="on">?</span></li>
        <li class="right-shift lastitem">shift</li>
        <li class="space lastitem">&nbsp;</li>
    </ul>
</div>

    
</div>