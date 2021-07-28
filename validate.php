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
    else if($ques == 3){
      $solve=fopen("ques3.txt", 'r');
      $str = fread($solve, filesize("ques3.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 4){
      $solve=fopen("ques4.txt", 'r');
      $str = fread($solve, filesize("ques4.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 5){
      $solve=fopen("ques5.txt", 'r');
      $str = fread($solve, filesize("ques5.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 6){
      $solve=fopen("ques6.txt", 'r');
      $str = fread($solve, filesize("ques6.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 7){
      $solve=fopen("ques7.txt", 'r');
      $str = fread($solve, filesize("ques7.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 8){
      $solve=fopen("ques8.txt", 'r');
      $str = fread($solve, filesize("ques8.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 9){
      $solve=fopen("ques9.txt", 'r');
      $str = fread($solve, filesize("ques9.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 10){
      $solve=fopen("ques10.txt", 'r');
      $str = fread($solve, filesize("ques10.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 11){
      $solve=fopen("ques11.txt", 'r');
      $str = fread($solve, filesize("ques11.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 12){
      $solve=fopen("ques12.txt", 'r');
      $str = fread($solve, filesize("ques12.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 13){
      $solve=fopen("ques13.txt", 'r');
      $str = fread($solve, filesize("ques13.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 14){
      $solve=fopen("ques14.txt", 'r');
      $str = fread($solve, filesize("ques14.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 15){
      $solve=fopen("ques15.txt", 'r');
      $str = fread($solve, filesize("ques15.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 16){
      $solve=fopen("ques16.txt", 'r');
      $str = fread($solve, filesize("ques16.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 17){
      $solve=fopen("ques17.txt", 'r');
      $str = fread($solve, filesize("ques17.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 18){
      $solve=fopen("ques18.txt", 'r');
      $str = fread($solve, filesize("ques18.txt"));
      echo "$str";
      fclose($solve);
    }
    else if($ques == 19){
      $solve=fopen("ques19.txt", 'r');
      $str = fread($solve, filesize("ques19.txt"));
      echo "$str";
      fclose($solve);
    }
    else {
      $solve=fopen("ques20.txt", 'r');
      $str = fread($solve, filesize("ques20.txt"));
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




