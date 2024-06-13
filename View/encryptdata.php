<?php 
if(isset($_POST['encrypt'])){

        $simple_string = $_POST['text'];
        echo "Original Data :" .$simple_string;
        echo "<br>";
        $ciphering = "AES-128-CTR";
        $option = 0;
        $encryption_iv= '1234567890123456';
        $encryption_key = "hello";
        $encryption = openssl_encrypt($simple_string, $ciphering,$encryption_key,$option,$encryption_iv);
       
        echo "Encrypting Data : " .$encryption;
        echo "<br>";
}

if(isset($_POST['decrypt'])){

    $text = $_POST['text'];
    $ciphering = "AES-128-CTR";
    $option = 0;
    $decrypt_key = "devanshu";
    $decrypt_iv= "1234567890123456";

    $decrypt = openssl_decrypt($text,$ciphering,$decrypt_key,$option,$decrypt_iv);
    echo "Decrypted Data : " .$decrypt;
    echo"<br>";

}
