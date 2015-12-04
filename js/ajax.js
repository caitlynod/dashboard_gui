if(window.location.href.indexOf("contactSearch") !== -1){
	var results;
	var searchText = "";
	var searchField = document.querySelector(".search");
	var searchKey = document.querySelectorAll(".key li");
	var form = document.querySelector(".userForm");
	var pageSlider = document.querySelector("#resultSlider");
	var rArrow = document.querySelector(".rightArrow");
	var lArrow = document.querySelector(".leftArrow");

	console.log(pageSlider.value);

	[].forEach.call(searchKey, function(el) {
		el.addEventListener("click", function(){
			ajaxGetEmp(this.id);
		}, false);
	});

	function ajaxGetEmp(q) {
		if(q === "del"){
			searchText = searchText.substring(0,searchText.length-1);
		}else{
			searchText += q;
		}

		if(searchText === ""){
			if(rArrow){
			rArrow.style.display = "block";
			}
			if(lArrow){
			lArrow.style.display = "block";
			}
		}else{
			if(rArrow){
			rArrow.style.display = "none";
			}
			if(lArrow){
			lArrow.style.display = "none";
			}
		}

		results=GetXmlHttpObject();
		
		var url = baseURL + "index.php/Dashboard/contactsSearch/"+searchText;
		results.onreadystatechange=stateChanged;
		results.open("GET",url,true);
		results.send(null);
	}

	function stateChanged() {
		var searchResults = document.querySelector("#searchResults");
		if (results.readyState==4 || results.readyState=="complete") {
			var contact = JSON.parse(results.responseText);
			searchResults.innerHTML = "";
			for(var i=0;i<contact.length;i++){
				searchResults.innerHTML += '<li class="contact"><img class="navPic"  src="'+baseURL+'images/'+contact[i].contacts_img+'" ><h2 class="contactName">'+contact[i].contacts_fname+'</h2><p class="contactName">'+contact[i].contacts_lname+'</li>';
			}
			if(contact.length === 0){
				//console.log("No Results");
				searchResults.innerHTML = "<h2 id='noResult' class='contactName'>No Results</h2>";
			}

        //Creates arrow pagination for alumni section
	var contactList = document.querySelectorAll(".contact");
	var totalContact = contactList.length;
	var showing = document.querySelector("#showing");
	var total = document.querySelector("#total");


	showing.innerHTML = totalContact;
	total.innerHTML = totalContact;
	if(searchText == ""){
		total.innerHTML = 24;
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