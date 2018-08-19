


  <div class="row bg-primary text-white">
	<div class="col-1 border border-right-0 border-dark text-center">
      ID
    </div>
    <div class="col-2 border border-dark">
      InGame_Name
    </div>
    <div class="col-2 border border-left-0 border-dark">
      Forum_Name
    </div>
    <div class="col-1 border border-left-0 border-dark text-center">
      Beitritt
    </div>
	<div class="col-1 border border-left-0 border-dark text-center">
      Tel.Nr.:
    </div>
	<div class="col-2 border border-left-0 border-dark text-center">
      Info
    </div>
	<div class="col-1 border border-left-0 border-dark text-center">
      Rang
    </div>
	<div class="col-sm border border-left-0 border-dark text-center">
      Bemerkung
    </div>
	<div class="col-1 border border-left-0 border-dark text-center">
    </div>
  </div>
  <?php
  $db->select("mitarbeiter","*","","","rang DESC, icname");
  $fetch = $db->getResult();
  foreach($fetch as $k => $v){
  ?>
  <div class="row">
	<div class="col-1 border border-right-0 border-top-0 border-dark text-center">
		<?php echo $v['ID']; ?>
	</div>
	<div class="col-2 border border-top-0 border-dark">
		<?php echo $v['icname']; ?>
	</div>
	<div class="col-2 border border-left-0 border-top-0 border-dark">
		<?php echo $v['forumname']; ?>
	</div>
	<div class="col-1 border border-left-0 border-top-0 border-dark text-center">
		<?php echo $v['beitritt']; ?>
	</div>
	<div class="col-1 border border-left-0 border-top-0 border-dark text-center">
		<?php echo $v['telefon']; ?>
	</div>	
	<div class="col-2 border border-left-0 border-top-0 border-dark text-center">
		<?php echo $v['info']; ?>
  </div>
  <div class="col-1 border border-left-0 border-top-0 border-dark text-center">
		<?php echo $v['rang']; ?>
  </div>
  <div class="col-sm border border-left-0 border-top-0 border-dark text-center" & nbsb;>
	
  </div>
  <div class="col-1 border border-left-0 border-top-0 border-dark text-center">
	<button type="button" class="btn btn-outline-dark btn-sm fas fa-edit"></button>
  </div>
  
  </div>
  <?php
  }
  ?>
