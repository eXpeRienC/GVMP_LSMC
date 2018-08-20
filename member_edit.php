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

		
</form>