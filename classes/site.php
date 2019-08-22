<?php 


class Site {

	CONST HOST = "127.0.0.1:3307";
	CONST USER = "root";
	CONST PASS = "";
	CONST DB   = "base_llama";

	protected $con;
	protected $sess;


	protected function __construct() {

		$this->conexao();
		$this->session();

	}


	protected function conexao() {


		$this->con = mysqli_connect(self::HOST, self::USER, self::PASS, self::DB);


		if (!$this->con) {die("Não foi");}

	}

	protected function session() {

		$this->sess = session_start();

	}


}



?>