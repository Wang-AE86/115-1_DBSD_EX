<html>
    <body>
        <table border="1">
            <tr>
                <td>值</td>
            </tr>
            <?php
// 顯示所有$_SERVER變數
foreach ($_SERVER as $key => $value) {
    echo "<tr><td>". $key. "</td>";
    echo "<td>" . $value . "</td></tr>";
    }
    ?>
    </table>
</body>
</html>