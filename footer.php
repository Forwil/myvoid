
<div class="footer">
	<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fff037fc9c69426e8752fe059341edcb1' type='text/javascript'%3E%3C/script%3E"));
</script>
	<br/>
	By <strong>Forwil</strong>
</div>
<div class="footer">
<?php
$user_online = "count.php";
touch($user_online);
$timeout = 30;
$user_arr = file_get_contents($user_online);
$user_arr = explode('#',rtrim($user_arr,'#'));

$temp = array();
foreach($user_arr as $value){
$user = explode(",",trim($value));
if (($user[0] != getenv('REMOTE_ADDR')) && ($user[1] > time())) {
array_push($temp,$user[0].",".$user[1]);
}
}
array_push($temp,getenv('REMOTE_ADDR').",".(time() + ($timeout)).'#');
$user_arr = implode("#",$temp);

$fp = fopen($user_online,"w");
flock($fp,LOCK_EX); 
fputs($fp,$user_arr);
flock($fp,LOCK_UN);
fclose($fp);
echo count($temp)." user online "; 
?>
</div>
<noscript>
	</body>
</html>
</noscript>