function string2base58($key)
{
    $step5 = hash("sha256", hexStringToByteString($key));
    $step6 = hash("sha256", hexStringToByteString($step5));
    $checksum = substr($step6, 0, 8);
    $step8 = $key . $checksum;
    $step9 = bc_hexdec($step8);
    $step10 = bc_base58_encode($step9);
    return $step10;
}
