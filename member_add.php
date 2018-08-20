
<!--	 Mitglieder hinzufügen Seite
		Textfelder für InGameName und ForumName
		Textfelder für ID und Tel.Nr.:
		
-->
 <form action="index.php" method="post" name="Invite">
			
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">ID</span>
  </div>
  <input type="text" class="form-control" name="inputid" placeholder="ID" aria-label="ID" aria-describedby="basic-addon1" value="<?php echo $inputid ; ?>" required autofocus>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">InGameName</span>
  </div>
  <input type="text" class="form-control" name="inputicname" placeholder="InGameName" aria-label="icname" aria-describedby="basic-addon1" value="<?php echo $inputicname; ?>" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1" >ForumName</span>
  </div>
  <input type="text" class="form-control" name="inputforumname" placeholder="ForumName" aria-label="ForumName" aria-describedby="basic-addon1" value="<?php echo $inputforumname ; ?>" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Tel.Nr.:</span>
  </div>
  <input type="text" class="form-control" name="inputtelefon" placeholder="Tel.Nr.:" aria-label="telefon" aria-describedby="basic-addon1" value="<?php echo $inputtelefon ; ?>" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Rang</label>
  </div>
  <select class="custom-select" name="inputrang" id="inputGroupSelect01">
    <option value="0" selected>0</option>
    <option value="1">1</option>
    <option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
  </select>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Email</span>
  </div>
  <input type="text" class="form-control" name="inputemail" placeholder="maxmusterman@test.com" aria-label="Email" aria-describedby="basic-addon1" value="<?php echo $inputemail ; ?>" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Info</span>
  </div>
  <input type="text" class="form-control" name="inputinfo" placeholder="Info" aria-label="Info" aria-describedby="basic-addon1" value="<?php echo $inputinfo ; ?>">
</div>

<input type="hidden" name="site" value="invite" />
<input class="btn btn.lg btn-primary btn-block" type="submit" value="Hinzufügen" />
</form>