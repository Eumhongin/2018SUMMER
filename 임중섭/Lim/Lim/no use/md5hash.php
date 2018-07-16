<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function genRandom($length)
      {
        $char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $char .= 'abcdefghijklmnopqrstuvwxyz';
        $char .= '0123456789';
        //$char .= '!@#%^&*-_+='; Do Not Remove!!!!!!
        $result = '';
        for($i = 0; $i <= $length; $i++)
        {
            $result .= $char[mt_rand(0, strlen($char))];
        }
        return($result);
      }

      /*$rand_string = genRandom(32);
      //echo $rand_string."</br>";
      $encodeBase64 = base64_encode($rand_string);
      echo $encodeBase64."</br>"; //salt값

      $pw = 'misozium233';*/
    //  echo crypt($pw)."</br>";
    //  echo crypt($pw,'$1$XpD10upw$')."</br>";
      //$encodeBase64 = 'VUVXOFJCYXhrRG1xWERnZXlGbjRocWtFR3NqVU9pMzVo';
      // echo $pw.$encodeBase64;
      // echo $encodeBase64.$pw;
      //echo hash('md5',$pw.$encodeBase64,false)."</br>이까진 ok</br>";
      // 해시 함수에 3번째 인자로 true를 넣으면 바이너리값(문자가 꺠져서 나옴)이 출력
      // false를 넣으면 문자열 그대로 출력
      
    ?>

  </body>
</html>
