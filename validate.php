<?php
$email=$_GET['t1'];
$psw=$_GET['t2'];
$flag=0;
$s=array();
$file = fopen("details.txt", 'r');
while(!feof($file))
  {
  $s=fgets($file);
  $str_arr = array_pad(explode('::', $s),5,null);
  if ($str_arr[1]==$psw and $str_arr[2]==$email){
		echo "Congratulations! You are authorized user"."<br>";
    echo "Your Job Application number is ".$str_arr[4]."<br>";
    echo "<br>";
    $ques=$str_arr[4] % 20 + 1;
    if($ques == 1){
      $solve=fopen("ques1.txt", 'r');
      $str = fread($solve, filesize("ques1.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 2){
      $solve=fopen("ques2.txt", 'r');
      $str = fread($solve, filesize("ques2.txt"));
      echo "$str";
      fclose($solve);
    }
?>

<form action="answer.txt">
<table border=1>
<tr>
<td>Choose Your Programming language
<td colspan=10>
<select name="lang">
<option value=".java">Java</option>
<option value=".py">Python</option>
</select>
</tr>
<tr>
<td colspan=11 align=center><textarea name="program" rows=30 cols=150></textarea>
</tr>
<tr>
<td colspan=11 align=center><input type=submit value="SUBMIT">
</tr>
</table>
  </form>

<?php

      $flag=1;
      break;
    }//end if 
  }//end while
if ($flag==0)
echo "Please register yourself before login";
  fclose($file);
?>




