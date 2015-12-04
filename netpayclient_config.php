<?php
	/*请按照您的实际情况配置以下各参数*/

	//私钥文件，在CHINAPAY申请商户号时获取，请相应修改此处，可填相对路径，下同
	define("PRI_KEY", "MerPrK_808080211389826_20151117161941.key");
	//公钥文件，示例中已经包含
	define("PUB_KEY", "PgPubk.key");
	
	/*如您已有生产密钥，请修改以下配置，默认为测试环境*/
	
	//ORA单笔交易请求地址(测试)
	define("PAY_URL","http://sfj-test.chinapay.com/dac/SinPayServletGBK");
	//ORA单笔交易请求地址(生产)
	//define("PAY_URL","http://ora.chinapay.com/oratrans/OraTransGet");
	
	//单笔查询请求地址(测试)
	define("QRY_URL","http://sfj-test.chinapay.com/dac/SinPayQueryServletGBK");
	//单笔查询请求地址(生产)
	//define("QRY_URL","http://ora.chinapay.com/oraquery/SingleOrderQuery");
	
	//批量退单查询请求地址(测试)
	define("BatchOrder_URL_QRY","http://sfj-test.chinapay.com/dac/FailureTradeQueryGBK");
	//批量退单查询请求地址(生产)
	//define("BatchOrder_URL_QRY","http://ora.chinapay.com/oraquery/BatchOrderQuery");
	
	//备付金余额查询请求地址(测试)
	define("Balance_URL_QRY","http://sfj-test.chinapay.com/dac/BalanceQueryGBK");
	//备付金余额查询请求地址(生产)
	//define("Balance_URL_QRY","http://ora.chinapay.com/oraquery/BalanceQuery");
	
	//备付金明细查询请求地址(测试)
	define("DepositDetail_URL_QRY","http://sfj-test.chinapay.com/dac/DepositDetailQueryGBK");
	//备付金明细查询请求地址(生产)
	//define("DepositDetail_URL_QRY","http://ora.chinapay.com/oraquery/DepositDetailQuery");
	

	function getcwdOL(){
    $total = $_SERVER['PHP_SELF'];
    $file = explode("/", $total);
    $file = $file[sizeof($file)-1];
    return substr($total, 0, strlen($total)-strlen($file)-1);
	}
	
	function getSiteUrl(){
		$host = $_SERVER['SERVER_NAME'];
		$port = ($_SERVER['SERVER_PORT']=="80")?"":":$_SERVER[SERVER_PORT]";
		return "http://" . $host . $port . getcwdOL();
	}
	
	function traceLog($file, $log){
		$f = fopen($file, 'a'); 
		if($f){
			fwrite($f, date('Y-m-d H:i:s') . " => $log\n");
            fclose($f);
		} 
	}
	
	//取得本示例安装位置
	$site_url = getSiteUrl();
	
	
	

?>
