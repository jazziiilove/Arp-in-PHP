<?php 
/* ARP SETTER
 * 
 * Baran TOPAL
 * 23-Oct-2009
 * 
 */
?>
<?php 
	$hid = $_POST['hid'];  
    exec("arp -s " . $hid, $output);
?>
<html> 
<head> 
<title>ARP SETTER</title> 
</head> 
<body> 
<em>Baran TOPAL</em>
<h1>Press the button</h1>
<form method="post" action="<?php echo $PHP_SELF;?>">
<input type="hidden" value = "139.179.33.1 00-15-f2-64-a3-38" name = "hid">
<input type="submit" value="submit" name="submit"><br />

</form>
</body>
</html>