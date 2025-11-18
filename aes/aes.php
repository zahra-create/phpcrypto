<?php
$text = "your life and your experiences are the best resources
you can learn from.";
$cipher = "AES-192-CBC";
$iv_length = openssl_cipher_iv_length($cipher);
if (!$iv_length)
{
    throw new Exception("la méthode du chiffrement non définie!");
}
$passphrase = openssl_random_pseudo_bytes(8,$strong);
if (!$strong)
{ 
    throw new Exception("la passphrase non sécurisée.");
}
$iv = openssl_random_pseudo_bytes($iv_length);
$ciphertext = openssl_encrypt($text, $cipher, $passphrase, $options=0, $iv);
if (!$ciphertext)
{
    throw new Exception("Echec du chiffrement !");
}
$plaintext = openssl_decrypt($ciphertext, $cipher, $passphrase, $options=0, $iv);
if (!$plaintext)
{
    throw new Exception("Echec du déchiffrement !");
}
echo $plaintext . "\n";
