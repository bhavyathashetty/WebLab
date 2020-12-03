<strong style="color:green;backgroung:lightpink;">
<?php
$handle=fopen("counter.txt","r");
if(!$handle)
{
    echo"cound not open file";
}
else{
    $counter=(int)fread($handle,20);
    fclose($handle);
    $counter++;
    echo"<p>WELCOME TO THE PAGE</p><p align=center><strong>You are Visitor Number:".$counter."</strong></p>";
    $handle=fopen("counter.txt","w");
    fwrite($handle,$counter);
    fclose($handle);
}
?>