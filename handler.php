<?php

//Production URL
$url = 'https://www.myvirtualmerchant.com/VirtualMerchant/process.do';
//Demo URL
//$url = 'https://demo.myvirtualmerchant.com/VirtualMerchantDemo/process.do';

/*
 * Set up data which is to submitted to the remote URL
 */
$data = array();
// Import form imformation into data array
foreach($_POST as $key=>$value) {
	$data[$key] = filter_var($value, FILTER_SANITIZE_STRING);
}
// Additional input for VirtualMerchant

$data["ssl_merchant_id"] = XXX;
$data["ssl_user_id"] = "webpage";
$data["ssl_pin"] = "XXX";
$data["ssl_show_form"] = "true";
$data["ssl_test_mode"] = "false";
// $data["ssl_cvv2cvc2_indicator"] = 1;

/*
 * urlencode data for posting.  
 */
$post_str = '';
foreach($data as $key=>$val) {
	$post_str .= $key.'='.rawurlencode($val).'&';
}
$post_str = substr($post_str, 0, -1);


/*
 * Set base URL
 */
echo "<html><head><base href='" . $url .  "'></base></head>";

/*
 * Now POST to virtualMerchant
 */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_str);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
// curl_setopt($ch, CURLOPT_VERBOSE, true);
$result = curl_exec($ch);
curl_close($ch);
?>
