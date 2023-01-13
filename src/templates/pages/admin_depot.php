<?php
ob_start();
$page_title = "Admin contact - monsite.com";
$trans = $getDepot -> take_depot();
$role = 200;
?>

<h1 class="h1admindepot">Admin Depot</h1>

<?php show_error(); ?>
<div>
<table class="tab">
    <thead class="tab">
        <tr class="tab">
            <th>id</th>
            <th>amount</th>
            <th>created_by</th>
            <th>created_at</th>
            <th>currency</th>
            <th> Acceptation</th>
        </tr>
    </thead>
   <tbody class="tab">
    <?php
        foreach ($trans as $cform){ 
    ?>
    <tr class="tab">
        <td><?= $cform -> idd ?></td>
        <td><?= $cform -> amount?></td>
        <td><?= $cform -> email?></td>
        <td><?= $cform -> created_at?></td>
        <td><?= $cform -> currency_name?></td>
        
        
    
        <td>
            <form action="/actions/update_transaction.php" method="post">
                <input type="hidden" name="transaction_id" value="<?= $cform->idd ?>">
                <input type="hidden" name="created_by" value="<?= $cform -> created_by?>">
                <input type="hidden" name="to_currency" value="<?= $cform -> to_currency?>">
                <input type="hidden" name="amount" value="<?= $cform -> amount?>">
                <button type="submit" name="action" value="approve">Valider</button>
                <button type="submit" name="action" value="reject">Refuser</button>
            </form> 
        </td>
    </tr>

        <?php
        }
        ?>
   </tbody>
   
</table>
</div>

<hr>


<?php
$page_content = ob_get_clean();
?>