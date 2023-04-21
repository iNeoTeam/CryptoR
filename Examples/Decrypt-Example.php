<?php
error_reporting(0);
require_once '../CryptoR.php';

# Use CryptoR Class:
$CryptoR = new CryptoR();

# Create a Private Key and Save on Database or File:
# $password = $CryptoR->KeyGen();
$privateKey = "1499759b861f97284f4c4114de8b407e7a14943096bed1b10d78833658f1e787"; # Create Private Key: $password = $CryptoR->KeyGen();

# Decrypt a Encrypted String:
echo "Decrypt: ".$CryptoR->Decrypt("MWZtTFVzSElWZyszcUJmVVowdWdKbXlZa1QyOWs5eFFEczZoNjJhQUJjND0:be988021e5a65eef2b968d43e90f5c03aed67fe11d86591a738779edee159fcc", $privateKey);
?>
