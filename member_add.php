
<!--	 Mitglieder hinzufügen Seite
		Textfelder für InGameName und ForumName
		Textfelder für ID und Tel.Nr.:
		
-->
 <form action="index.php" method="post" name="Invite">
 <?php
            if($error_txt != ""){
            ?>
                <div class="alert <?php echo $error_style; ?>" role="alert">
                <?php echo $error_txt; ?>
            </div>
            <?php
            }
            ?>
			
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">ID</span>
  </div>
  <input type="text" class="form-control" placeholder="ID" aria-label="Username" aria-describedby="basic-addon1" required autofocus>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">InGameName</span>
  </div>
  <input type="text" class="form-control" placeholder="InGameName" aria-label="Username" aria-describedby="basic-addon1" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1" >ForumName</span>
  </div>
  <input type="text" class="form-control" placeholder="ForumName" aria-label="Username" aria-describedby="basic-addon1" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Tel.Nr.:</span>
  </div>
  <input type="text" class="form-control" placeholder="Tel.Nr.:" aria-label="Username" aria-describedby="basic-addon1" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Rang</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
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
    <span class="input-group-text" id="basic-addon1">Info</span>
  </div>
  <input type="text" class="form-control" placeholder="Info" aria-label="Username" aria-describedby="basic-addon1">
</div>

<input type="hidden" name="site" value="invite" />
<input class="btn btn.lg btn-primary btn-block" type="submit" value="Hinzufügen" />
</form>