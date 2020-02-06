<?
function xor_encrypt($text) {
    $key = 'qw8J';
    $outText = '';
 
    for($i=0;$i<strlen($text);$i++) {
       $outText .= $text[$i] ^ $key[$i % strlen($key)];
    }
 
    return $outText;
}
 
$data = array("showpassword"=>"yes", "bgcolor"=>"#ffffff");
print base64_encode(xor_encrypt(json_encode($data)));
?>
