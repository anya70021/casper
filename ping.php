<?php
$ip=$_POST["ip"];
$cmd='ping -c 4$ip';
echo"<pre>$cmd</pre>";
?>