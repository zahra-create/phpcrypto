<?php
/*
in this script we imagine alice is the local party and bob the remote party and we want to compute 
the shared key localy (in alice level), but the same logic can be applied for bob :) 
*/

$local_privatekey = openssl_pkey_get_private("file://alicepk.pem");
$remote_publickey = '00c04a49d6ffc4cead1cf938a9a54f382c0a20087c7cdd7c7e7a9551c80ff701c5f013539a4ac591cc01b7736d127926bd69522472f762571a0e15da126c2729272d8a3c7fd101af4f1e2b8022a2d7ab11932f1c5e94c6ec299a50a0100b88aecc8ac9a8be905532cf4cc77cacf58a0f4ba801685680d295573c34643eac71a54011c2275cbe5886383b99e24bbce33748190101daf55ceb6a1522658128e6970defcfb72f5f224bfd6c7e029f8562e30e2e8b10c7b5b221944a3091639bfe7b6e8409ef55c7395c437b20040185c649712d18ce95537db3bc906a25f89ea27df905ecb2c80acdbe6d5c15126f46708ee26123f69953afda47fcfee4b5a390bdc8';

$shared_secret = openssl_dh_compute_key(hex2bin($remote_publickey), $local_privatekey);

echo bin2hex($shared_secret); 
 
