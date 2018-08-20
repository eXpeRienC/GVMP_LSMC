

<table class="table-responsive table-striped">
  <thead>
    <tr>
	<th class="p-2 text-center bg-primary text-white">
      ID
</th>
    <th class="p-2 bg-primary text-white">
      InGame_Name
</th>
    <th class="p-2 bg-primary text-white">
      Forum_Name
    </th>
    <th class="p-2 text-center bg-primary text-white">
      Beitritt
    </th>
	<th class="p-2 text-center bg-primary text-white">
      Tel.Nr.:
    </th>
	<th class="p-2 text-center bg-primary text-white">
      Info
    </div>
	<th class="p-2 text-center bg-primary text-white">
      Rang
    </div>
	<th class="p-2 text-center bg-primary text-white">
      Bemerkung
    </th>
	<th class="p-2 text-center bg-primary text-white">
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
  <tr>
	<td class="p-2 text-center">
		<?php echo $v['ID']; ?>
	</td>
	<td class="p-2">
		<?php echo $v['icname']; ?>
	</td>
	<td class="p-2">
		<?php echo $v['forumname']; ?>
	</td>
	<td class="p-2 text-center">
		<?php echo $v['beitritt']; ?>
	</td>
	<td class="p-2 text-center">
		<?php echo $v['telefon']; ?>
	</ditdv>	
	<td class="p-2 text-center">
		<?php echo $v['info']; ?>
  </td>
  <td class="p-2 text-center">
    <form action="../index.php" method="post">
    <?php echo $v['rang']; 
    if($v['rang'] < $user['rang']){ ?>
		<button type="submit" name="site" value="rankup" class="btn btn-outline-success btn-sm fas fa-caret-square-up"></button>
    <button type="submit" name="site" value="rankdown" class="btn btn-outline-danger btn-sm fas fa-caret-square-down"></button>
    <input type="hidden" name="playerid" value="<?php echo $v['ID']; ?>">
    <?php } ?>
    </form>
  </td>
  <td class="p-2 text-center">  
    &nbsp;	
  </td>
  <td class="p-2 text-center">
    <form action="../index.php" method="post">
      <button type="submit" name="site" value="member_edit" class="btn btn-outline-dark btn-sm fas fa-edit"></button>
    <input type="hidden" name="playerid" value="<?php echo $v['ID']; ?>">
    </form>
  </td>
  </tr>
  <?php
  }
  ?>
</tbody>
</table>