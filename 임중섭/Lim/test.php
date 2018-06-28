<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include("module\dbConnect.php");
      function genRandom($length)
      {
        $char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $char .= 'abcdefghijklmnopqrstuvwxyz';
        $char .= '0123456789';
        //$char .= '!@#%^&*-_+=';
        $result = '';
        for($i = 0; $i <= $length; $i++)
        {
            $result .= $char[mt_rand(0, strlen($char))];
        }
        return($result);
      }

      $rand_string = genRandom(32);
      //echo $rand_string."</br>";
      $encodeBase64 = base64_encode($rand_string);
      echo $encodeBase64."</br>"; //salt값

      $pw = 'misozium233';
    //  echo crypt($pw)."</br>";
    //  echo crypt($pw,'$1$XpD10upw$')."</br>";
      echo hash('md5',$pw.'T1lzaFVFMW03SDhzS29JdENRUWpwUVJkS0pscmd6UVVi',false)."</br>이까진 ok</br>";
      // 해시 함수에 3번째 인자로 true를 넣으면 바이너리값(문자가 꺠져서 나옴)이 출력
      // false를 넣으면 문자열 그대로 출력
      
      // $a2s3 = md5($pw);
      // echo $a2s3."</br>";
      // $a1s2 = md5($pw,"a");
      // echo $a1s2."</br>";
      // $a1s3 = md5($pw,"a");
      // echo $a1s3."</br>";
      // if($a1s3 == $a1s2)
      // {
      //   echo "Success!";
      // }else {echo "False!!";}
      // echo crypt($pw)."</br>";
      // echo crypt($pw,$encodeBase64);
      // $sql = "INSERT INTO login VALUES('qqqq','asdasdasd')";
      // $conn->query($sql);

      mysqli_close();
    ?>

  </body>
</html>
