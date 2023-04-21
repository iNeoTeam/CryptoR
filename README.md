# CryptoR

**A Simple PHP Encryption/Decryption Library.**



## Usage

### Getting Started

> \$CryptoR = new CryptoR();

```php
<?php
error_reporting(0);
require_once 'CryptoR.php';

# Use CryptoR Class:
$CryptoR = new CryptoR();

# Create a Private Key and Save on Database or File:
# $privateKey = $CryptoR->KeyGen();
$privateKey = "1499759b861f97284f4c4114de8b407e7a14943096bed1b10d78833658f1e787"; # Create Private Key: $privateKey = $CryptoR->KeyGen();
```



### Create Private Key:

Create a Private Key for Encrypt/Decrypt.

> \$privateKey = $CryptoR->KeyGen();

```php
// Create a Private Key
$privateKey = $CryptoR->KeyGen();

echo $privateKey;
```

**Result:**

```
1499759b861f97284f4c4114de8b407e7a14943096bed1b10d78833658f1e787
```


### Encrypt

Encrypts a string to secure it.

> \$CryptoR->Encrypt("Powered By iNeoTeam.", $privateKey);

```php
// Encrypt a string
$encrypted = $CryptoR->Encrypt("Powered By iNeoTeam.", $privateKey);

echo $encrypted;
```

**Result:**

```
MjJnRmd2VHlWdHFOVEtBb0tmUk1EYnBtZmhBVWowdDNyc0JmS2pMMUhwWT0:5e59e5db18cbee8ca772bfe56af42e998b85f4bd33e9fc8ec72ad1e67aaedfce
```



### Decrypt

Decrypts an encrypted string.

> \$CryptoR->Decrypt("MWZtTFVzSElWZyszcUJmVVowdWdKbXlZa1QyOWs5eFFEczZoNjJhQUJjND0:be988021e5a65eef2b968d43e90f5c03aed67fe11d86591a738779edee159fcc", $privateKey);

```php
$decrypted = $CryptoR->Decrypt("MWZtTFVzSElWZyszcUJmVVowdWdKbXlZa1QyOWs5eFFEczZoNjJhQUJjND0:be988021e5a65eef2b968d43e90f5c03aed67fe11d86591a738779edee159fcc", $privateKey);

echo $decrypted;
```

**Result:**

```
Powered By iNeoTeam.
```
