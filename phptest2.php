<html>
<body>
<form method="post" action="<?php echo $_SERVER["REQUEST_URI"] ?>">
<p>テスト文字列
<input type=text name=iTest size=60 value="ソリューション表示">
<input type=submit value=" テスト ">
</p>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
  echo "<hr><p>入力した文字列は「" . htmlspecialchars($_POST['iTest']) . "」ですよね？</p>";
?>
</form>
</body>
</html>