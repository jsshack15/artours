<?php
include 'header.php';

?>
<title>Ardours Health Service</title>
<div class="container-fluid" style="background: url('pics/background5.png');height: 100%;min-height: 100vh; ">
	<div class="pull-right">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login"  style="margin-top: 250px;color: #fff;margin:0 25px 0 0;">Login/Register</button>
	</div>
	<h2 class="center-block" style="color:#080808;margin-top: 150px;margin-left: 32vw;">Nearest Hospitals To Your Location</h2>
	<div class="jumbotron center-block" style="margin-top: 50px;width: 100%;height: 100%;max-height: 750px;max-width: 450px;padding: 5px 5px 5px 5px;">
		<img src="pics/hospital.jpg" class="img-responsive center-block" alt="" style="width:100%;height:100%;max-width: 450px;max-height: 350px;opacity: 1;z-index: 14px;box-shadow: 0 5px 5px #fff;">
		<div class="jumbotron center-block" style="margin:0 0 2px 0;padding:15px 10px 15px 10px;width:100%;height: 100%;max-width: 450px; max-height: 350px;background: #fff; color:#080808;">
			<h3>City Hospital</h3>
			<address style="color:#888">Sector- 62, 
				Noida</address>
			<span class="glyphicon glyphicon-flag" style="color: #888">1.1 Km Away </span><br>
			<span class="glyphicon glyphicon-phone-alt" style="color:#888;"> 9999999999</span>
		</div>
	</div>
</div>

<!--Login Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div><!--Login modal ends>

<?php
include 'footer.php';
?>
