<?php
include "ch.php";
echo "W08-EX02<br/>";
$ip=$_SERVER['REMOTE_ADDR'];
echo "IP ADDRESS:" . $ip . "<br/>";
$path = $_SERVER['SCRIPT_NAME'];
echo "PATH:" . $path . "<br/>";
?>
<Table border="1">
    <TR>
        <TD>Key</TD>
        <TD>Value</TD>
    </TR>
    <?php
    foreach ($_SERVER as $key => $value) {
        echo"<TR><TD>". $key ."</TD>";
        echo"<TD>". $value ."</TD></TR>";
    }
    ?>
</Table>