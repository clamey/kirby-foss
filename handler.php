<?php
/*
 * Set up data which is to submitted to the remote URL
 */
$data = array();
// Import form imformation into data array
foreach($_POST as $key=>$value) {
	$data[$key] = filter_var($value, FILTER_SANITIZE_STRING);
}
// Additional input for VirtualMerchant

$data["ssl_merchant_id"] = CHANGE_THIS_TO_SSL_MERCHANT_ID;
$data["ssl_user_id"] = "webpage";
$data["ssl_pin"] = "CHANGE_THIS_TO_SSL_PIN";
$data["ssl_transaction_type"] = "ccsale";
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
 * Now redirect to virtualMerchant
 */
header("Location: https://www.myvirtualmerchant.com:443/VirtualMerchant/process.do?".$post_str);

?>
