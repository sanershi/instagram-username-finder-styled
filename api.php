<?php
class igfind{
	public $username;
public function userchecker($le){
	error_reporting(0);
	$lsayisi = "-$le";
	$my_rand_strng = substr(str_shuffle("abcdefghijklmopqrstuwxyz0123456789_0123456789"), $lsayisi);
	$this->username = $my_rand_strng;
	$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/accounts/web_create_ajax/attempt/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "enc_password=#PWD_INSTAGRAM_BROWSER:0:".time().":4l_pickrala&email=sallamasuphibaba@gmail.com&username=$this->username&first_name=picya&client_id=YmhXBwAEAAEZmK-T3ZQC2AmE16gD&seamless_login_enabled=1&opt_into_one_tap=false");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$headers = array();
$headers[] = 'Authority: www.instagram.com';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: tr-TR,tr;q=0.9';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Cookie: ig_did=79160B26-05A1-4775-93DD-46BBF2CCE1BB; ig_nrcb=1; csrftoken=XkYUFcX0rvkYslx8v3PfE42t8XfaoCV2; mid=YmhXBwAEAAEZmK-T3ZQC2AmE16gD';
$headers[] = 'Origin: https://www.instagram.com';
$headers[] = 'Referer: https://www.instagram.com/accounts/emailsignup/';
$headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"100\", \"Google Chrome\";v=\"100\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?1';
$headers[] = 'Sec-Ch-Ua-Platform: \"Android\"';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Mobile Safari/537.36';
$headers[] = 'X-Asbd-Id: 198387';
$headers[] = 'X-Csrftoken: XkYUFcX0rvkYslx8v3PfE42t8XfaoCV2';
$headers[] = 'X-Ig-App-Id: 936619743392459';
$headers[] = 'X-Ig-Www-Claim: 0';
$headers[] = 'X-Instagram-Ajax: 20e2a5e214f4';
$headers[] = 'X-Requested-With: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$kahka = json_decode($result, true);

$code = $kahka['errors']['username']['0']['code'];
if($code){
echo $code;
}else{
$myfile = fopen("checker.txt", "a") or die("Dosya Olusturulmadı PHP Surumu ile alakalı olabilir!");
$txt = "$this->username\r\n";
fwrite($myfile, $txt);
$file = fopen('kinoshi.php', 'a');
fwrite($file, "

<html>
<head>
	<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>

</style>
<body bgcolor='#000000'>
<body bgcolor='rgb(0,0,0)'>
<body bgcolor='black'>
<hr>
<font class='awesome' style='font-family:Arial'>
<font color='orange'>Kullanıcı Adı: </font><font color='white'>".$this->username."</font><br>
<font color='orange'>Link: </font><font color='red !important'><a style='color: black !important; background-color: white !important; text-decoration: none !important; padding: 1px; font-weight: bold;' target='_blank' href='https://www.instagram.com/".$this->username."'>Tıkla</a></font><br>
<font color='orange'>Uzunluk: </font><font color='white'>".strlen($this->username)."</font><br>
</font>
<hr>
<br>

");
fclose($myfile);
	echo "<div class='username'><font color='orange'>Boşta: </font><a style='color: white !important; border-radius: 5px; padding-left: 10px !important; margin-left: 10px !important; padding-right: 10px !important; background-color: #5089C7 !important; text-decoration: none !important; padding: 2px; font-weight: bold;' target='_blank' href='https://www.instagram.com/".$this->username."'>".$this->username."</a></div>";
}


if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
	
	
}


}
