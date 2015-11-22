<?php
include 'header.php';

?>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<title>Ardours Health Service</title>
<div class="container-fluid" style="background: url('pics/background5.png');height: 100%;min-height: 100vh; ">
	<div class="container " style="margin-top: 120px;">
		<button type="button " class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#login"  style="color: #fff;margin:0 25px 10px 0;">Welcome Prashant</button>
		<button type="button" class="btn btn-xs btn-danger pull-left" onclick="eas()">Emergency Ambulance Service</button>
	</div>
	<h2 class="center-block" style="color:#080808;margin-top: 50px;text-align: center;">Nearest Hospitals To Your Location</h2>
	
	<a href="#" style="text-decoration:none;">
		<div class="jumbotron center-block" style="margin-top: 30px;width: 100%;height: 100%;max-height: 750px;max-width: 450px;padding: 5px 5px 5px 5px;">
		<img src="hosp/Fortis.jpg" class="img-responsive center-block" alt="" style="width:100%;height:100%;max-width: 450px;max-height: 350px;opacity: 1;z-index: 14px;box-shadow: 0 5px 5px #fff;">
		<div class="jumbotron center-block" style="margin:0 0 2px 0;padding:15px 10px 15px 10px;width:100%;height: 100%;max-width: 850px; max-height: 500px;background: #fff; color:#080808;">
			<h3>Fortis Hospital</h3>
			<address style="color:#888">B-22, Sector 62, Gautam Buddh Nagar, Noida, Uttar Pradesh 201301</address>
			<span class="glyphicon glyphicon-flag" style="color: #888">2.8 Km Away </span><br>
			<span class="glyphicon glyphicon-phone-alt" style="color:#888;"> 0120 240 0222</span>
		</div>
	</div>
	</a>
	<a href="#" style="text-decoration:none;">
		<div class="jumbotron center-block" style="margin-top: 30px;width: 100%;height: 100%;max-height: 750px;max-width: 450px;;padding: 5px 5px 5px 5px;">
		<img src="hosp/Dharamshila.jpg" class="img-responsive center-block" alt="" style="width:100%;height:100%;max-height: 750px;max-width: 450px;max-width: 450px;max-height: 350px;opacity: 1;z-index: 14px;box-shadow: 0 5px 5px #fff;">
		<div class="jumbotron center-block" style="margin:0 0 2px 0;padding:15px 10px 15px 10px;width:100%;height: 100%;max-width: 850px; max-height: 500px;background: #fff; color:#080808;">
			<h3>Dharamshila  Hospital</h3>
			<address style="color:#888">Vasundhara Enclave, 
				Dharamshila Road,
				 Near New Ashok Nagar Metro Station,
				  New Delhi, Delhi 110096</address>
			<span class="glyphicon glyphicon-flag" style="color: #888">4.5 Km Away </span><br>
			<span class="glyphicon glyphicon-phone-alt" style="color:#888;"> 011 4306 6353</span>
		</div>
	</div>
	</a>
	<a href="#" style="text-decoration:none;">
		<div class="jumbotron center-block" style="margin-top: 30px;width: 100%;height: 100%;max-height: 750px;max-width: 450px;padding: 5px 5px 5px 5px;">
		<img src="hosp/Max.jpg" class="img-responsive center-block" alt="" style="width:100%;height:100%;max-width: 450px;max-height: 350px;opacity: 1;z-index: 14px;box-shadow: 0 5px 5px #fff;">
		<div class="jumbotron center-block" style="margin:0 0 2px 0;padding:15px 10px 15px 10px;width:100%;height: 100%;max-width: 850px; max-height: 500px;background: #fff; color:#080808;">
			<h3>Max Hospital</h3>
			<address style="color:#888">1,2, Press Enclave Road, Saket, New Delhi, Delhi 110017</address>
			<span class="glyphicon glyphicon-flag" style="color: #888">12.5 Km Away </span><br>
			<span class="glyphicon glyphicon-phone-alt" style="color:#888;"> 011 2651 5050</span>
		</div>
	</div>
	</a>
	
	<a style="text-decoration: none;">
		<div class="jumbotron center-block" style="margin-top: 30px;width: 100%;height: 100%;max-height: 750px;max-width: 450px;padding: 5px 5px 5px 5px;">
		<img src="pics/hospital.jpg" class="img-responsive center-block" alt="" style="width:100%;height:100%;max-width: 450px;max-height: 350px;opacity: 1;z-index: 14px;box-shadow: 0 5px 5px #fff;">
		<div class="jumbotron center-block" style="margin:0 0 2px 0;padding:15px 10px 15px 10px;width:100%;height: 100%;max-width: 450px; max-height: 350px;background: #fff; color:#080808;">
			<h3>City Hospital</h3>
			<address style="color:#888">Sector- 62, 
				Noida</address>
			<span class="glyphicon glyphicon-flag" style="color: #888">1.1 Km Away </span><br>
			<span class="glyphicon glyphicon-phone-alt" style="color:#888;"> 9999999999</span>
		</div>
	</div>
	</a>
</div>

<!--Login Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content center-block" style="text-align: center;color:#080808;">
      <div class="modal-header center-block">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title center-block" id="myModalLabel" style="color:#080808">Login/Register</h4>
      </div>
      <div class="modal-body">
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
      </div>
      
      <div style="width:100%;background: #888;height: 1px;margin-top: 15px;">
      	
      </div>
      <div >
      	<h3 style="color:#080808;margin-top: 15px;">Sign Up</h3>
      </div>
      	<form style="margin-top: 25px;">
		  <div class="form-group">
		    <label for="regemail" style="color:#080808;">Email address</label>
		    <input type="email" class="form-control" id="regemail" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="regpass" style="color:#080808;">Password</label>
		    <input type="password" class="form-control" id="regpass" placeholder="Password">
		  </div>
		  <div class="form-group">
		    <label for="regpasscon" style="color:#080808;">Re-enter Password</label>
		    <input type="password" class="form-control" id="regpasscon" placeholder="Re-enter Password">
		  </div>
		  <div class="form-group">
		    <label for="tuname" style="color:#080808;">Twitter Username</label>
		    <input type="text" class="form-control" id="tuname" placeholder="Twitter Username">
		  </div>
		  <div class="form-group">
		    <label for="age" style="color:#080808;">Age</label>
		    <input type="text" class="form-control" id="tuname" placeholder="Age">
		  </div>
		  
  <button type="submit" class="btn btn-default">Sign Up</button>
</form>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div><!--Login modal ends-->
<script>
	function eas(){
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
            alert("Ambulance will be soon available at "+results[0].formatted_address);
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
<?php
include 'footer.php';
?>
