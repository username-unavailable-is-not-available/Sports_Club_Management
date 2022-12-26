<?php

/*function dbConn() {
    $db_username = "sportsclub";
    $db_password = "football";
    $connection_string = "localhost/xe";
    $connection = oci_connect($db_username, $db_password, $connection_string);

    if ($connection) {
        return true;
    } else {
        return false;
    }
}*/

$conn = oci_connect('sportsclub', 'football', '//localhost/xe');

if (!$conn) {
    echo 'Failed to connect' . "<br>";
} else {
    echo 'Connected Successfully!' . "<br>";
}

$query = 'select * from manager';
$stid = oci_parse($conn, $query);

if(!$stid) {
    $m = oci_error($conn);
    trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
}

print "oci_parse executed";
echo "<br>";

$r = oci_execute($stid);
if(!$r) {
    $m = oci_error($stid);
    trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);    
}

print "oci executed" . "\n";
echo "<br>";

?>

<?php while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {?>

<tr>
    <?php foreach($row as $item) {?>

    <td class="y"><input type="text" value="<?php $item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp';?>"></td>

    <?php }?>
</tr>

<?php }

oci_close($conn);
?>
