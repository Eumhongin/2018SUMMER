<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
include_once 'Snoopy.class.php';
$snoopy=new snoopy;

#스누피 클래스를 이용해 url의 html 코드 가져오기
$snoopy->fetch('url');
#정규식으로 테이블 추출하기
preg_match('/<div id="my2">(.*?)<\/div>/is', $snoopy->results, $html);
?>
    <div id="my1">
          <p>my1 content</p>
      </div>
      <div id="my2">
          <p>my2 content</p>
      </div>
  </body>
</html>
