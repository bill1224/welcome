<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/changePw.css">
  </head>
  <body>
    <div class="changePw">
      <h1 class="change_head">비밀번호 변경</h1>
      <div class="changePw_div">
      <form action="./check/changePw_ok.php" method="post">
      <div class="changePw_pw">
        <input class="pw" type="password" name="pw" placeholder="변경할 비밀번호를 입력해주세요." required>
      </div>
      <div class="changePw_re_pw">
        <input class="re_pw" type="password" name="re_pw" placeholder="비밀번호를 한번더 입력해주세요." required>
      </div>
        <input class="change_submit" type="submit" name="submit" value="변경">
      </form>
    </div>
    </div>
  </body>
</html>
