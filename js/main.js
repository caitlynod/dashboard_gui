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