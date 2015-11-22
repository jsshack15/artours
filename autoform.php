<?php
include 'header.php';
?>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<div class="container" id="autofill">
<div style="margin-top: 125px;">
	<h2> Auto form filling</h2>
		  <div class="form-group">
		    <label for="regemail" style="color:#080808;">Email address</label>
		    <input type="email" class="form-control" id="regemail" value="prashantpreetam@gmail.com" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="uname" style="color:#080808;">Full Name</label>
		    <input type="text" class="form-control" id="uname" value="Prashant Preetam" placeholder="Name">
		  </div>
		  
		  <div class="form-group">
		    <label for="age" style="color:#080808;">Age</label>
		    <input type="text" class="form-control" value="21" id="age" placeholder="Age">
		  </div>
		  <div class="form-group">
		    <label for="gender" style="color:#080808;">Gender</label>
		    <select type="dropdown" value="male" class="form-control" id="gender" placeholder="Gender">
		    	<option style="color: #888">Male</option>
		    	<option value="male" style="color: #888">Male</option>
		    	<option value="female" style="color: #888">Female</option>
		    </select>
		  </div>
		  
  
</div>
<button type="button" class="btn btn-default btn-success" onclick="sent()">Confirm</button>
</div>
<script>
	function sent(){
	
		if (navigator.geolocation) {
  console.log('Geolocation is supported!');
}
else {
  console.log('Geolocation is not supported for this Browser/OS version yet.');
}
  var startPos;
  var geoOptions = {
  	maximumAge: 5 * 60 * 1000,
  	 timeout: 10 * 1000
  }
  var geoSuccess = function(position) {
    startPos = position;
    //document.getElementById('startLat').innerHTML ="<h2>LATITUDE :</h2>"+ startPos.coords.latitude;
   // document.getElementById('startLon').innerHTML ="<h2>LONGITUDE :</h2>"+ startPos.coords.longitude;
    var geocoder = new google.maps.Geocoder();
   var latLng = new google.maps.LatLng(startPos.coords.latitude,startPos.coords.longitude);

   if (geocoder) {
      geocoder.geocode({ 'latLng': latLng}, function (results, status) {
         if (status == google.maps.GeocoderStatus.OK) {
         	alert("Your Data successfully updated at address "+results[0].formatted_address);
         	window.location="index.php";
         	//document.getElementById('autofill').innerHTML='Your Data was successfully updated at address '+results[0].formatted_address;
            //document.getElementById('loc').innerHTML="<h2>"+(results[0].formatted_address)+"</h2>";
         }
         else {
            console.log("Geocoding failed: " + status);
         }
      });
   }
  };
  var geoError = function(position) {
    console.log('Error occurred. Error code: ' + error.code);
    // error.code can be:
    //   0: unknown error
    //   1: permission denied
    //   2: position unavailable (error response from location provider)
    //   3: timed out
   
    
   
  };
  navigator.geolocation.getCurrentPosition(geoSuccess, geoError,geoOptions);
		
	}
</script>