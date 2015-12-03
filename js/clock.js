(function(){

  var maintime = document.querySelector("#mainClock");
  var toptime = document.querySelector("#topClock");
  var dashtime = document.querySelector("#dashClock");
  var t = true;

  if(maintime){
    function switchTime(){
      if(t){
        t = false;
      }else{
        t = true;
      }
    }

    function updateMainTime(){
      var currentTime = new Date();

      var currentHours = currentTime.getHours();
      var currentMinutes = currentTime.getMinutes();
      var currentSeconds = currentTime.getSeconds();

      // Pad the minutes and seconds with leading zeros, if required
      currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
      currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

      var currentTimeStringMain;

      if(t){
        // Choose either "AM" or "PM" as appropriate
        var timeOfDay = (currentHours < 12) ? "AM" : "PM";
        // Convert the hours component to 12-hour format
        currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
        // Convert an hours component of "0" to "12"
        currentHours = (currentHours === 0) ? 12 : currentHours;
        // Compose the string for display
        currentTimeStringMain = currentHours + ":" + currentMinutes + " " + timeOfDay;
      }else{
        // Compose the string for display
        currentTimeStringMain = currentHours + ":" + currentMinutes;
      }

      // Update the time display
      maintime.innerHTML = currentTimeStringMain;
      toptime.innerHTML = currentTimeStringMain;
      if(dashtime){
        dashtime.innerHTML = currentHours + ":" + currentMinutes;
      }
    }
    updateMainTime();
    window.setInterval(updateMainTime,1000);
    maintime.addEventListener("click", switchTime, false);
  }

  
})();