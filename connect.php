<php
$first_name = "root";
$second_name = "root";
$other_name = "root";
$dob = "root";
$email = "root";
$phone = "root";
$gender = "root"
$address = "root";
$nok_full_name = "root";
$nok_phone = "root";
$nok_address = "root";
$nok_email = "root";
$hispri = "root";
$pridate = "root";
$hissecon = "root";
$scodate = "root";
$primary = "root";
$ssce = "root";
$indigin = "root";
$other_certificate = "root";
$db = "firsttime";


$db = mew mysqli('localhost', $first_name, $second_name, $other_name, $dob,
$email, $phone, $gender, $address,$nok_full_name, $nok_phone, $nok_address, $nok_email, $hispri, $hissecon, $pridate, $scodate, $primary, $ssce, $indigin, $other_certificate, $db) or die("unable to connect");
echo"successfully submitted";

