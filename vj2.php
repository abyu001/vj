<?php
function bngst($a, $id, $token, $user) {
                $body = 'data={
	"clientId":"1",
	"accountId":"'.$id.'",
	"accessToken":"'.$token.'",
	"user":"'.$user.'",
	"name":"1",
	"value":"Admob Video Credit",
	"dev_name":"Redmi 6",
	"dev_man":"Xiaomi",
	"ver":"2.1",
	"pckg":"com.digitan.digirewards"
}&';
                $ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://pckmncash.xyz:80/api/v2/account.Reward.php");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		$headers = array ();
			$headers[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
			    $headers[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 8.1.0; Redmi 6 MIUI/V10.3.3.0.OCGMIXM)";
                $headers[] = "Host: pckmncash.xyz";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;

}
function njing($a, $id, $token, $user) {
                $body = 'data={
	"clientId":"1",
	"accountId":"'.$id.'",
	"accessToken":"'.$token.'",
	"user":"'.$user.'",
	"ver":"2.1",
	"pckg":"com.digitan.digirewards"
}&';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://pckmncash.xyz:80/api/v2/account.Balance.php");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		$headers = array ();
			$headers[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
			    $headers[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 8.1.0; Redmi 6 MIUI/V10.3.3.0.OCGMIXM)";
                $headers[] = "Host: pckmncash.xyz";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;

}
print "Admob Videos  - Digi Rewards\n";
print "Thanks To : Vj Rusmayana\n\n";
echo "accountId : ";
$id = trim(fgets(STDIN));
echo "accessToken : ";
$token = trim(fgets(STDIN));
echo "user : ";
$user = trim(fgets(STDIN));
echo "Jumlah   : ";
$jum = trim(fgets(STDIN));
echo "\e[0m\n";
echo "Sedang login...\n\n";
for($a=1;$a<$jum;$a++){
sleep (30);
$pertama = json_decode(bngst($a, $id, $token, $user));
$kedua = json_decode(njing($a, $id, $token, $user));
$data  = $pertama->error_description;
$data2  = $kedua->user_balance;
echo "[+] ".$data." - ".$data2." [+]\n";
}
?>
