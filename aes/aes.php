<?php
$text = "your life and your experiences are the best resources
you can learn from.";
$cipher = "aes-192-cbc";
$key = openssl_random_pseudo_bytes(8);
$iv = openssl_random_pseudo_bytes(16);
$ciphertext = openssl_encrypt($text, $cipher, $key, $options=0, $iv);
$plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv);
echo $plaintext . "\n";
