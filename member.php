

<table class="table">
  <thead>
    <tr>
	<th class="p-2 text-center bg-primary text-white">
      InGame_Name
  </th>
      <th class="p-2 bg-primary text-white">
        Forum_Name
  </th>
      <th class="p-2 bg-primary text-white">
        Rang
  </th>
      <th class="p-2 bg-primary text-white">
        Tel.Nr.:
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
		<?php echo $v['icname']; ?>
	</td>
	<td class="p-2">
		<?php echo $v['forumname']; ?>
	</td>
	<td class="p-2">
		<?php echo $v['rang']; ?>
	</td>
	<td class="p-2">
		<?php echo $v['telefon']; ?>
  </td>
  </tr>
  <?php
  }
  ?>
</table>