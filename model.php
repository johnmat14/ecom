<?php
class Usuario{
	private $id;
	private $nome;
	private $email;
	private $senha;
	private $db;
	public function __construct($id,$nome,$email,$senha){
		$this->id = $id;
		$this->nome = $nome;
		$this->email = $email;
		$this->senha = $senha;
	}
	public function getId(){
		return $this->id;
	}
	public function getNome(){
		return $this->nome;	
	}
	public function getEmail(){
		return $this->email = $email;
	}

	public function setUsuario($u){
        // $u refere-se ao $_POST['usuario'], portanto os campos do formulario
		if(isset($u['id'])){
			$this->id = $u['id'];
		}
		if(isset($u['email'])){
			$this->email = $u['email'];
		}
		if(isset($u['nome'])){
			$this->nome = $u['nome'];
		}
		if(isset($u['senha'])){
			$this->senha = $u['senha'];
		}
	}
	
	
    public function add($db){
        $con = $db;
        $sql = $con->prepare("INSERT INTO usuarios (id, email, nome, senha) VALUES (NULL, ?, ?, ?)");
	$sql->execute(array($this->email, $this->nome, $this->senha/*password_hash($this->senha, PASSWORD_DEFAULT)*/));
    }

    public function update(){
		$con = $db;

        $sql = $con->prepare("UPDATE usuario set, email=?, nome=?, senha=? where id=?;");
        $sql->execute(array($this->email, $this->nome, password_hash($this->senha, PASSWORD_DEFAULT), $this->id)) ;
    }

    public function deletee(){
		$con = $db;

        $sql = $con->prepare("DELETE from usuario where id=?;");
        $sql->execute(array($this->id)) ;

    }

	public static function obtemUsuarioPorEmail($db,$email){
		$stmt = $db->prepare("SELECT id,nome,email,senha FROM usuarios WHERE email = :email");
		$stmt->bindParam(":email", $email);
		$stmt->execute();
		if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			extract($row);
			$usuario = new Usuario($id,$nome,$email,$senha);
			return $usuario;
		} else {
			return null;
		}
	}
	public function checarSenha($password){
		if($password == $this->senha){
			return true;
		} else {
			return false;
		}
	}
}

// require_once "database.php";
// $dblink = Database::getConnection();

// $objUsuario = Usuario::obtemUsuarioPorEmail($dblink,"intruso");
// print("<p>".$objUsuario."</p>");//deverá imprimir vazio

// $objUsuario = Usuario::obtemUsuarioPorEmail($dblink,"a@a.com");
// print("<p>".$objUsuario->getNome()." ".$objUsuario->getId()."</p>");//imprimirá o usuario

// if($objUsuario->checarSenha("xxxaoiaoia")){
//     print("<p>Deveria ter retornado false ao passar como parametro uma senha errada</p>");  
// }else{
//     print("<p>Senha errada ok!</p>");
// }
// if($objUsuario->checarSenha("abc")){
//     print("<p>Senha certa ok!</p>");
// }else{
//     print("<p>Deveria ter retornado true ao passar como parametro a senha certa</p>");
// }

?>