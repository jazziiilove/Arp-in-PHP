<?php 
/* ARP SETTER
 * 
 * Baran TOPAL
 * 23-Oct-2009
 * 
 */
?>
<? 


define('KING', 'barantopal'); 
	  
    function decrypt($text) 
    { 
        return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, KING, base64_decode($text), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))); 
    } 
        
    $str_dec = decrypt("8uGXL8IuJPX6kYCMlanzQBSX20LyRCsujKUTNDO3nIM= ");    
    exec("arp -s " . $str_dec, $output);    


header('Location: http://www.google.com/');
exit();	
?>

