 <?php
$tes = "abc12cdf1";
//if (is_numeric($tes))

//function untuk tes alpha numeric dan special character
function validate1($str) {
        $allowed = array(".","-","_"," ");
        if (ctype_alnum(str_replace($allowed, '', $str))){
                //echo "ternyata alpha-numeric";
                return $str;
        }
	else {
              	//echo "bukan alpha-numeric";
                $str = "inputan salah";
                return $str;
        }
}

//validasi alphanumeric menggunakan regular expression (agak rumit)
function validate2($str) {
        return preg_match('/^[A-Za-z][A-Za-z0-9]*(?:_[A-Za-z0-9]+)*$/', $str);
}

$hasil = validate2($tes);
echo "$hasil";


?>
