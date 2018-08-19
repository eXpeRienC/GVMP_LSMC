

<table class="table">
  <thead>
    <tr class="d-flex">
	<th class="col-1 border border-right-0 border-dark text-center bg-primary text-white">
      ID
</th>
    <th class="col-2 border border-dark bg-primary text-white">
      InGame_Name
</th>
    <th class="col-2 border border-left-0 border-dark bg-primary text-white">
      Forum_Name
    </th>
    <th class="col-2 border border-left-0 border-dark text-center bg-primary text-white">
      Beitritt
    </th>
	<th class="col-1 border border-left-0 border-dark text-center bg-primary text-white">
      Tel.Nr.:
    </th>
	<th class="col-2 border border-left-0 border-dark text-center bg-primary text-white">
      Info
    </div>
	<th class="col-1 border border-left-0 border-dark text-center bg-primary text-white">
      Rang
    </div>
	<th class="col-2 border border-left-0 border-dark text-center bg-primary text-white">
      Bemerkung
    </th>
	<th class="col-1 border border-left-0 border-dark text-center bg-primary text-white">
    &nbsp;
    </th>
</tr>
</thead>
<tbody>
  <?php
  $db->select("mitarbeiter","*","","","rang DESC, icname");
  $fetch = $db->getResult();
  foreach($fetch as $k => $v){
  ?>
  <tr class="d-flex">
	<td class="col-1 border border-right-0 border-top-0 border-dark text-center">
		<?php echo $v['ID']; ?>
	</td>
	<td class="col-2 border border-top-0 border-dark">
		<?php echo $v['icname']; ?>
	</td>
	<td class="col-2 border border-left-0 border-top-0 border-dark">
		<?php echo $v['forumname']; ?>
	</td>
	<td class="col-2 border border-left-0 border-top-0 border-dark text-center">
		<?php echo $v['beitritt']; ?>
	</td>
	<td class="col-1 border border-left-0 border-top-0 border-dark text-center">
		<?php echo $v['telefon']; ?>
	</ditdv>	
	<td class="col-2 border border-left-0 border-top-0 border-dark text-center">
		<?php echo $v['info']; ?>
  </td>
  <td class="col-1 border border-left-0 border-top-0 border-dark text-center">
		<?php echo $v['rang']; ?>
  </td>
  <td class="col-2 border border-left-0 border-top-0 border-dark text-center" & nbsb;>
	
  </td>
  <td class="col-1 border border-left-0 border-top-0 border-dark text-center">
	<button type="button" class="btn btn-outline-dark btn-sm fas fa-edit"></button>
  </td>
  
  </tr>
  <?php
  }
  ?>
</tbody>
</table>