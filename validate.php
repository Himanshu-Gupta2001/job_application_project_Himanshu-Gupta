<?php
$email=$_GET['t1'];
$psw=$_GET['t2'];
$flag=0;
$s=array();
$file = fopen("details.txt", 'r');
while(!feof($file))
  {
  $s=fgets($file);
  $str_arr = array_pad(explode('::', $s),3,null);
  if ($str_arr[1]==$psw and $str_arr[2]==$email){
		echo "Authorized User";
		$flag=1;
	  	break;
	}//end if 
  }//end while
if ($flag==0)
	echo "Please register before login";
fclose($file);
?>
