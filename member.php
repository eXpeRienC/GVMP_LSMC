


  <div class="row bg-primary text-white">
    <div class="col-sm border border-dark">
      InGame_Name
    </div>
    <div class="col-sm border border-left-0 border-dark">
      Forum_Name
    </div>
    <div class="col-1 border border-left-0 border-dark text-center">
      Rang
    </div>
	<div class="col-1 border border-left-0 border-dark text-center">
      Tel.Nr.:
    </div>
  </div>
  <?php
  $db->select("mitarbeiter","*","","","rang DESC, icname");
  $fetch = $db->getResult();
  foreach($fetch as $k => $v){
  ?>
  <div class="row">
	<div class="col-sm border border-top-0 border-dark">
		<?php echo $v['icname']; ?>
	</div>
	<div class="col-sm border border-left-0 border-top-0 border-dark">
		<?php echo $v['forumname']; ?>
	</div>	
	<div class="col-1 border border-left-0 border-top-0 border-dark text-center">
		<?php echo $v['rang']; ?>
	</div>	
	<div class="col-1 border border-left-0 border-top-0 border-dark text-center">
		<?php echo $v['telefon']; ?>
  </div>
  </div>
  <?php
  }
  ?>
