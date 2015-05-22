<?php
if($_POST['data'] == null) $errorMsg = 'dataが入力されていません';
if(count($_POST['data']) == 0) $errorMsg = 'オブジェクトが生成されていません';

if (!isset($errorMsg)) {
	//JSONへ変換して書き込み
	$filename = '../json/data.json';
	$handle = fopen($filename, 'w');
	fwrite($handle,json_encode($_POST['data']));
	fclose($handle);
	echo '保存しました';
}else{
	echo $errorMsg;
}
?>