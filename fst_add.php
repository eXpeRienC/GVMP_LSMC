
<table class="table table-striped">
<thead>
    <tr>
    <th class="p-2 text-center bg-primary text-white">
        Mitarbeiter
    </th>
    <th class="p-2 text-center bg-primary text-white">
        RTW
    </th>
    <th class="p-2 text-center bg-primary text-white">
        NEF
    </th>
    <th class="p-2 text-center bg-primary text-white">
        TLF
    </th>
    <th class="p-2 text-center bg-primary text-white">
        RTH
    </th>
    <th class="p-2 text-center bg-primary text-white">
        RTB
    </th>
    </tr>
</thead>
<tbody>
<?php foreach($fstuser as $k => $v){ ?>
    <form action="index.php" method="post" name="fst_add_save">
<tr>
    <td><?php echo $v['icname']; ?></td>
    <td class="text-center"><?php check_fst($fstcheck,$v['ID'],"RTW",$user['rang']); ?></td>
    <td class="text-center"><?php check_fst($fstcheck,$v['ID'],"NEF",$user['rang']); ?></td>
    <td class="text-center"><?php check_fst($fstcheck,$v['ID'],"TLW",$user['rang']); ?></td>
    <td class="text-center"><?php check_fst($fstcheck,$v['ID'],"RTH",$user['rang']); ?></td>
    <td class="text-center"><?php check_fst($fstcheck,$v['ID'],"RTB",$user['rang']); ?></td>
</tr>
    <input type="hidden" name="inputmitarbeiter" value="<?php echo $v['ID']; ?>" />
    <input type="hidden" name="inputicname" value="<?php echo $v['icname']; ?>" />
    <input type="hidden" name="site" value="fst_add_save" />
    </form>
<?php } ?>
</tbody>
</table>