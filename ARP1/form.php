<?php 
/* ARP SETTER
 * 
 * Baran TOPAL
 * 23-Oct-2009
 * 
 */
?>
<?php 
    $ip = "139.179.33.1";
    //$ip = "192.168.2.1";
    $mac = "00-15-f2-64-a3-38";    
    //$mac = "00-12-bf-5b-7f-2d";
    exec("arp -s " . $ip . " " . $mac, $output);    
     //exec("ping ".$ip." -n 1 -w 90 && exit", $output);

?>
<html> 
<head> 
<title>ARP SETTER</title> 
</head> 
<body> 
<em>Baran TOPAL</em>
<em>CTIS Assistant</em>
<h1>Press the button</h1>
<form method="post" action="<?php echo $PHP_SELF;?>">

<input type="submit" value="submit" name="submit"><br />

</form>
</body>
</html>