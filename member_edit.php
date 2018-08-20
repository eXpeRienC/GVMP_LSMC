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
  <input type="text" value="<?php echo $player[0]['ID']; ?>" class="form-control" placeholder="ID" aria-label="Username" aria-describedby="basic-addon1" disabled="disabled">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">InGameName</span>
  </div>
  <input type="text" name="inputicname" value="<?php echo $player[0]['icname']; ?>" class="form-control" placeholder="InGameName" aria-label="Username" aria-describedby="basic-addon1" required autofocus>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1" >ForumName</span>
  </div>
  <input type="text" name="inputforumname" value="<?php echo $player[0]['forumname']; ?>" class="form-control" placeholder="ForumName" aria-label="Username" aria-describedby="basic-addon1" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Beitritt</span>
  </div>
  <input type="text" value="<?php echo $player[0]['beitritt']; ?>" class="form-control" placeholder="Beitritt" aria-label="Username" aria-describedby="basic-addon1" disabled="disabled">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Tel.Nr.:</span>
  </div>
  <input type="text" value="<?php echo $player[0]['telefon']; ?>" class="form-control" placeholder="Tel.Nr.:" aria-label="Username" aria-describedby="basic-addon1" disabled="disabled">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Info</span>
  </div>
  <input type="text" name="inputinfo" value="<?php echo $player[0]['info']; ?>" class="form-control" placeholder="Info" aria-label="Username" aria-describedby="basic-addon1" >
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Bemerkung</span>
  </div>
  <input type="text" name="inputbemerkung" value="<?php echo $player[0]['bemerkung']; ?>" class="form-control" placeholder="Bemerkung" aria-label="Username" aria-describedby="basic-addon1" >
</div>

<input type="hidden" name="site" value="member_edit_save" />
<input type="hidden" name="playerid" value="<?php echo $player[0]['ID']; ?>" />
<input class="btn btn.lg btn-primary btn-block" type="submit" value="Bearbeiten" />		
</form>