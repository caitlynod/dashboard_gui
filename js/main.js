(function(){
	var count = 0;
	var logindots = document.querySelectorAll("#loginPanel li");

	[].forEach.call(logindots, function(el) {
		el.addEventListener("click", makeActive, false);
	});

	function makeActive(){
		this.firstChild.classList.add("active");
		count++;
		if(count === 4){
			document.location.href = baseURL+"index.php/dashboard/volt";
		}
	}

    if(window.location.href.indexOf("contacts") !== -1){
        var pageSlider = document.querySelector("#resultSlider");

        if(window.location.href.indexOf("contacts/6") !== -1){
            pageSlider.value = 2;
        }

        if(window.location.href.indexOf("contacts/12") !== -1){
            pageSlider.value = 3;
        }

        if(window.location.href.indexOf("contacts/18") !== -1){
            pageSlider.value = 4;
        }

        function sliderVal(){
            if(pageSlider.value == 1){
                document.location.href = baseURL+"index.php/dashboard/contacts";
            }
            if(pageSlider.value == 2){
                document.location.href = baseURL+"index.php/dashboard/contacts/6";
            }
            if(pageSlider.value == 3){
                document.location.href = baseURL+"index.php/dashboard/contacts/12";
            }
            if(pageSlider.value == 4){
                document.location.href = baseURL+"index.php/dashboard/contacts/18";
            }
        }

        pageSlider.addEventListener("change", sliderVal, false);
    }

})();

$(function(){
    var $write = $('#write'),
        shift = false,
        capslock = false;
     
    $('#keyboard li').click(function(){
        var $this = $(this),
            character = $this.html(); // If it's a lowercase letter, nothing happens to this variable
         
        // Shift keys
        if ($this.hasClass('left-shift') || $this.hasClass('right-shift')) {
            $('.letter').toggleClass('uppercase');
            $('.symbol span').toggle();
             
            shift = (shift === true) ? false : true;
            capslock = false;
            return false;
        }
         
        // Caps lock
        if ($this.hasClass('capslock')) {
            $('.letter').toggleClass('uppercase');
            capslock = true;
            return false;
        }
         
        // Delete
        if ($this.hasClass('delete')) {
            var html = $write.html();
             
            $write.html(html.substr(0, html.length - 1));
            return false;
        }
         
        // Special characters
        if ($this.hasClass('symbol')) character = $('span:visible', $this).html();
        if ($this.hasClass('space')) character = ' ';
        if ($this.hasClass('tab')) character = "\t";
        if ($this.hasClass('return')) character = "\n";
         
        // Uppercase letter
        if ($this.hasClass('uppercase')) character = character.toUpperCase();
         
        // Remove shift once a key is clicked.
        if (shift === true) {
            $('.symbol span').toggle();
            if (capslock === false) $('.letter').toggleClass('uppercase');
             
            shift = false;
        }
         
        // Add the character
        $write.html($write.html() + character);
    });
});