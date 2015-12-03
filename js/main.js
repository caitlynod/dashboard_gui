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
			document.location.href = "http://localhost:8888/dashboard_gui/index.php/dashboard/volt";
		}
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