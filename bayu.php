<?php

error_reporting(0);
include ("func.php");
echo "\e            GOJEK VERSION 1.9.0              \n";
echo "\e GOJEK AUTO CLAIM ALL PROMO AZKACELL88\n";
echo "\n";
nope:
echo "\e[?] Lebokno Nomer Hpmu : ";
$nope = trim(fgets(STDIN));
$cek = cekno($nope);
if ($cek == false)
    {
    echo "\e[x] Wes Kedaftar Cok\n";
			goto nope;
    }
  else
    {
echo "\e[!] Siapkan OTPmu\n";
sleep(5);
$register = register($nope);
if ($register == false)
    {
    echo "\e[x] Failed Get OTP!\n";
    }
  else
    {
    otp:
    echo "\e[!] Masukkan Kode Verifikasi (OTP) : ";
    $otp = trim(fgets(STDIN));
    $verif = verif($otp, $register);
    if ($verif == false)
        {
        echo "\e[x] Kode Verifikasi Salah\n";
        goto otp;
        }
      else
        {
	echo "\e[!] Trying to redeem Voucher : GOFOOD022620A !\n";
        $claim = claim1($verif);
        if ($claim == false){
            echo "\e[!] Failed to Claim Voucher, Try to Claim Manually\n";
			      sleep(3);
            echo "\e[!] Trying to redeem Voucher : COBAGOFOOD090320A !\n";
			      goto ride;
            }else{
                echo "\e[+] ".$claim."\n";
				    sleep(3);
                echo "\e[!] Trying to redeem Voucher : KEALFAYUK !\n";
                sleep(3);
                goto ride;
            }
            ride:
            $claim = ride($verif);
            if ($claim == false){
            echo "\e[!] Failed to Claim Voucher, Try to Claim Manually\n";
			      sleep(3);
            echo "\e[!] Trying to redeem Voucher : KEALFAYUK !\n";
            sleep(3);
            }else{
                echo "\e[+] ".$claim."\n";
				    sleep(3);
                echo "\e[!] Trying to redeem Voucher : COBAGOFOOD090320A !\n";
                sleep(3);
                goto pengen;
            }
            pengen:
            $claim = cekvocer($verif);
            if ($claim == false ) {
            echo "\e[!] Failed to Claim Voucher, Try to Claim Manually\n";
           }
		  else
			{
			echo $claim . "\n";
			}
		}
	}
}
?>
