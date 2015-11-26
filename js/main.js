(function(){
			console.log("fired");
			var latlng = new google.maps.LatLng(42.983151,-81.25067);

			if(navigator.geolocation){
				navigator.geolocation.getCurrentPosition(showPosition, showFail);
			}else{
				console.log('no geolocation for you!');
			}

			function showPosition(e){
				initialize(e.coords.latitude, e.coords.longitude);



			}

			function showFail(){
				console.log('no geolocation for you!');
			}

			function initialize(){

				var mapOptions = {
					center : latlng,
					zoom: 18,
					scrollwheel: false,
				};
			var marker = new google.maps.Marker({
				position: latlng,
				map: map,
				animation: google.maps.Animation.DROP,
				title: 'Hello World'
			});

			var map = new google.maps.Map(document.querySelector("#mapCanvas"), mapOptions);
			marker.setMap(map);
			}
		})();