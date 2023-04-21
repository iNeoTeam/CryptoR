<?php
/*
 * CryptoR:		A Simple PHP Encryption/Decryption Library.
 *
 * Copyright (c) 2023 iNeoTeam
 *
 * @copyright	2023 iNeoTeam <ineoteam.co@gmail.com>
 *
 * @github		https://github.com/iNeoTeam/CryptoR
 * @telegram	https://t.me/iNeoTeam
 * @website		https://ineo-team.ir
 */
class CryptoR{
	public function KeyGen(){
		return hash('sha256', uniqid(mt_rand(), true));
	}
	public function Encrypt($string, $encryption_key, $salt = null){
		if(empty($salt)){ $salt = self::KeyGen(); }
		$pad = str_pad(substr($salt, 0,16), 16, '0', STR_PAD_LEFT);
		return str_replace("=", null, base64_encode(openssl_encrypt($string, 'AES-256-CBC', $encryption_key, 0, $pad)).":".$salt);
	}
	public function Decrypt($encrypted_data, $encryption_key){
		if(count(explode(":", $encrypted_data)) !== 2){ return false; }
		$pad = str_pad(substr(explode(":", $encrypted_data)[1], 0, 16), 16, '0', STR_PAD_LEFT);
		return openssl_decrypt(base64_decode(explode(":", $encrypted_data)[0]), 'AES-256-CBC', $encryption_key, 0, $pad);
	}
}
