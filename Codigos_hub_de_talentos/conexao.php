<?php

class Conexao {

	private $host = 'sql200.infinityfree.com';
	private $dbname = 'if0_35618536_hub_db';
	private $user = 'if0_35618536';
	private $pass = 'vHUWl3uagO1H';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessege().'</p>';
		}
	}
}

?>