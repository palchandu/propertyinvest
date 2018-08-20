<?php

	class Client {

	private $uri;

	private $jsonrpc;
	
	

	function __construct($host, $port, $user, $pass)

	{

	$this->uri = "http://" . $user . ":" . $pass . "@" . $host . ":" . $port . "/";

	$this->jsonrpc = new jsonRPCClient($this->uri,false);

	}

	

	function getBalance($user_session)

	{

	return $this->jsonrpc->getbalance("Web_(" . $user_session . ")", 6);

	//return 21;

	}

	

	function getAddress($user_session)

	{

	return $this->jsonrpc->getaccountaddress("Web_(" . $user_session . ")");

	}

	

	function getAddressList($user_session)

	{

	return $this->jsonrpc->getaddressesbyaccount("Web_(" . $user_session . ")");

	//return array("1test", "1test");

	}

	

	function getTransactionList($user_session)

	{

	return $this->jsonrpc->listtransactions("Web_(" . $user_session . ")", 200);

	}

	

	function getNewAddress($user_session)

	{

	// echo "indise add";

	return $this->jsonrpc->getnewaddress("Web_(" . $user_session . ")");

	//return "1test";

	}

	

	function withdraw($user_session, $address, $amount)
	{

	return $this->jsonrpc->sendfrom("Web_(" . $user_session . ")", $address, (float)$amount, 6);
		//return $this->jsonrpc->sendfrom("", $address, (float)$amount, 6);

	//return "ok wow";

	}

	function payment($address, $amount,$comment)
	{

	return $this->jsonrpc->sendtoaddress( $address, (float)$amount, $comment);

	//return "ok wow";

	}

	function getadminbal($user_session)

	{

	//return $this->jsonrpc->listaccounts();

	return $this->jsonrpc->getbalance($user_session);

	}

	function getresevedadminbal()

	{

	//return $this->jsonrpc->listaccounts();

	return $this->jsonrpc->getbalance('admin');

	}

	
	function getmove($from, $to, $amount)
	{
	return $this->jsonrpc->move($from, $to, $amount);

	}


	function sendmany($user_session,$addressandbal)

	{
		
		
	return $this->jsonrpc->sendmany("zelles(".$user_session.")", $addressandbal, 6);

	//return "ok wow";

	}

	}

	?>


