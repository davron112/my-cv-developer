<?php
header('Content-type: application/json');
if($_POST['email'] && $_POST['message'] && $_POST['name']){
$apiToken = "YOUR_TOKEN";
$ip = @$_SERVER['HTTP_CLIENT_IP'] ?: @$_SERVER['HTTP_X_FORWARDED_FOR'] ?: @$_SERVER['REMOTE_ADDR'];
$data = [
    'chat_id' => "CHAT_ID",
    'text' => 'Ismi: '.$_POST['name'].' Email: '.$_POST['email'].' Xabar: '.$_POST['message'].' Sana: '.date().' Vaqt: '.time().' Ip: '.$ip
];

file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

// Do what you want with result
}else{
	return 0;
}