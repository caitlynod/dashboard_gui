var results;
var searchField = document.querySelector(".search");
var searchKey = document.querySelectorAll(".key li");
var form = document.querySelector(".userForm");

[].forEach.call(searchKey, function(el) {
	el.addEventListener("click", function(){
		ajaxGetEmp(this.innerHTML);
	}, false);
});

function ajaxGetEmp(q) {
results=GetXmlHttpObject(); //creates the JS data handling object by calling function at bottom
console.log(q);
var url = baseURL + "Dashboard/contactsSearch/"+q;

results.onreadystatechange=stateChanged; //listener for data returning from the server
results.open("GET",url,true);
results.send(null);
}

function stateChanged() {
	var searchResults = document.querySelector("#searchResults");
	if (results.readyState==4 || results.readyState=="complete") {
		var contact = JSON.parse(results.responseText);
		//searchResults.innerHTML = "";

		for(var i=0;i<contact.length;i++){
			searchResults.innerHTML += '<li>'+contact[i].contacts_fname+'</li>';
		
		}
			
		}
	}


function ajaxFormSubmit(thisform) {
	
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