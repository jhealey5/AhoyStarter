<?php/** * Add any email functions here */$email_header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html xmlns:v="urn:schemas-microsoft-com:vml"><head>	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	<title>[title]</title>	<style type="text/css">	</style></head><body marginheight="0" bgcolor="#ffffff" style="margin:0px; padding:0px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff">	<tr>		<td>';$email_footer = '</td></tr></table></body></html>';function test_email(){	//Email administrator	$title = 'Test title';	$headers = array('From: ' . get_bloginfo('name') . ' <no-reply@' . clean_site_url() . '>');	$message = '<h1>TEST</h1>';	//Send the email	add_filter('wp_mail_content_type', create_function('', 'return "text/html"; '));	$email = wp_mail('chris@ahoy.co.uk', $title, $email_header . $message . $email_footer, $headers);	remove_filter('wp_mail_content_type', 'set_html_content_type');	return $email;}?>