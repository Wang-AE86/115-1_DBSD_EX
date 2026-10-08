# SID:C113181148 <BR>
# Name:王智弘 <BR>
# EX02
<HR>
<?php
$total = 0;
for ($i = 1; $i <= 10; $i++) {
    print "|" . $i;
    $total += $i;
}
echo "<HR>";
echo "總和: " . $total;