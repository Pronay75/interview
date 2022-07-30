
<!DOCTYPE html>
<html>
<body>

<?php
$n = 0; 
for ($i = 0; $i < 7; $i++)
{
    for ($j = 0; $j <= $i; $j++ )
    {
        echo $n." ";
        $n = $n + 1;
    }
    echo "<br/>";
}
?>

</body>
</html>