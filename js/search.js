if(window.location.href.indexOf("/Search") !== -1){
	var results;
	var searchText = "";
	var searchField = document.querySelector(".search");
	var searchKey = document.querySelectorAll(".key li");
	var form = document.querySelector(".userForm");
	
	[].forEach.call(searchKey, function(el) {
		el.addEventListener("click", function(){
			ajaxGetSearch(this.id);
		}, false);
	});

	function ajaxGetSearch(q) {
		if(q === "del"){
			searchText = searchText.substring(0,searchText.length-1);
		}else{
			searchText += q;
		}
		console.log('hello');

		results=GetXmlHttpObject();
		
		var url = baseURL + "index.php/search/placeSearch/"+searchText;
		results.onreadystatechange=stateChanged;
		results.open("GET",url,true);
		results.send(null);
	}

	function stateChanged() {
		var searchResults = document.querySelector("#placeSearch");
		if (results.readyState==4 || results.readyState=="complete") {
			var search = JSON.parse(results.responseText);
			searchResults.innerHTML = "";
			for(var i=0;i<search.length;i++){
				searchResults.innerHTML += '<li class="searchList"><p class="white">'+search[i].search_place+'</p></li><li><p class="white">'+search[i].search_location+'</p></li> <li><p class="white">'+search[i].search_distance+'</p></li><li><img src="'+baseURL+'images/location_icon.png"></li>';
			}
			if(search.length === 0){
				//console.log("No Results");
				searchResults.innerHTML = "<h2 id='noResult' class='contactName'>No Results</h2>";
			}

		}
	}

	function GetXmlHttpObject() { //called at the start of the script to kick off the whole process
	results=null;
	try {
		results=new XMLHttpRequest(); //for modern browsers that aren't IE
	}
	catch(e) {
		try {
			results=new ActiveXObject("Msxml2.XMLHTTP"); //newer IE versions
		}
		catch(e) {
			results=new ActiveXObject("Microsoft.XMLHTTP"); //older IE versions
		}
	}
	return results;
}
}