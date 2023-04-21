<?php
error_reporting(0);
require_once '../CryptoR.php';

# Use CryptoR Class:
$CryptoR = new CryptoR();

# Create a Private Key and Save on Database or File:
# $password = $CryptoR->KeyGen();
$privateKey = "1499759b861f97284f4c4114de8b407e7a14943096bed1b10d78833658f1e787"; # Create Private Key: $password = $CryptoR->KeyGen();

# Encrypt a String:
echo "Encrypt: ".$CryptoR->Encrypt("Powered By iNeoTeam.", $privateKey);
?>
