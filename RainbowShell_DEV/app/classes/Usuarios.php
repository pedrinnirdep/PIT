<?php

require_once 'Core.php';

class Usuarios extends Core{

    public function checarEmail($email){
        $sql = "SELECT * FROM tbl_usuario WHERE email = :email";
        $stmt = Database::prepare($sql);
        $stmt->bindValue(":email", $email, \PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() != 0) return true;
        else return false;
    }

    public function registrar($nome, $sobrenome, $telefone, $email, $senha)
    {
        if(Usuarios::checarEmail($email)){
            echo Core::erro("Este e-mail já foi registrado!");
        } else{
            $tipo = 1;
            $sql = "INSERT INTO tbl_usuario(`id_usuario`, `nome`, `sobrenome`, `cpf`, `telefone`, `email`, `senha`, `tipo`) VALUES (null, :nome, :sobrenome, :cpf, :telefone, :email, :senha, :tipo)";
            $stmt = Database::prepare($sql);
            $senha = Core::hash($senha);
            $stmt->bindParam(":nome", $nome, \PDO::PARAM_STR);
            $stmt->bindParam(":sobrenome", $sobrenome, \PDO::PARAM_STR);
            $stmt->bindParam(":cpf", $cpf, \PDO::PARAM_INT);
            $stmt->bindParam(":telefone", $telefone, \PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, \PDO::PARAM_STR);
            $stmt->bindParam(":senha", $senha, \PDO::PARAM_STR);
            $stmt->bindParam(":tipo", $tipo , \PDO::PARAM_INT);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                //criar sessão
                echo Core::sucesso("Sucesso!");
            } else{
                echo Core::erro("Erro no sistema, contate o administrador!");
            }
        }
        
    }

    public function logar($email, $senha)
    {
        
        $sql = "SELECT * FROM tbl_usuario WHERE email = :email AND senha = :senha";
        $stmt = Database::prepare($sql);
        $senha = Core::hash($senha);
        $stmt->bindValue(":email", $email, \PDO::PARAM_STR);
        $stmt->bindValue(":senha", $senha, \PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetchObject();

        // if ($stmt->rowCount() != 0) return true;
        if ($row) 
        {
            $_SESSION['usuario'] = $row;
            echo '<script type="text/javascript">
			window.location = ""
			</script>';
        }
        else{
            echo Core::erro("Os dados inseridos não estão corretos!");
        }

    }

    public function listarDadosUsuario($id){
        $sql = "SELECT * FROM tbl_usuario WHERE id_usuario = :id";
        $stmt = Database::prepare($sql);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetchObject();
        return $row;
    }

    public function alterarImgUsuario($id_usuario, $imagemNome, $diretorio, $imagemTmp){

        $deleteCheck = $_SERVER['DOCUMENT_ROOT'] . '/PIT/RainbowShell_DEV/img/avatar/'.$id_usuario.'/'.$id_usuario.'.png';

        if (file_exists($deleteCheck)) {
            unlink($deleteCheck);
        }
        
        $imgInsert = Core::imgUpload($diretorio, $imagemNome, $imagemTmp);
        $imgInsert = $imgInsert['img'];

        $sql = "UPDATE tbl_usuario SET imagem = :img WHERE id_usuario = :id";
        $stmt = Database::prepare($sql);
        $stmt->bindValue(":id", $id_usuario, \PDO::PARAM_INT);
        $stmt->bindValue(":img", $imgInsert, \PDO::PARAM_STR);
        $_SESSION['usuario']->imagem = $imgInsert;
        $stmt->execute();
    }

    public function alterarDados($id, $email, $nome, $sobrenome, $cpf, $telefone){

        $sql = "UPDATE tbl_usuario SET nome = :nome, sobrenome = :sobrenome, email = :email, cpf = :cpf, telefone = :telefone WHERE id_usuario = :id";
        $stmt = Database::prepare($sql);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->bindValue(":email", $email, \PDO::PARAM_STR);
        $stmt->bindValue(":nome", $nome, \PDO::PARAM_STR);
        $stmt->bindValue(":sobrenome", $sobrenome, \PDO::PARAM_STR);
        $stmt->bindValue(":cpf", $cpf, \PDO::PARAM_STR);
        $stmt->bindValue(":telefone", $telefone, \PDO::PARAM_STR);
        $stmt->execute();
        $_SESSION['usuario']->email = $email;
        $_SESSION['usuario']->nome = $nome;
        $_SESSION['usuario']->sobrenome = $sobrenome;
        $_SESSION['usuario']->cpf = $cpf;
        $_SESSION['usuario']->telefone = $telefone;

    }

    public function EntreLogado()
	{
		if(!isset($_SESSION['usuario']))
		{
			echo '<script type="text/javascript">
			window.location = "index.php"
			</script>';
		}
	}

	public function EntreDeslogado()
	{
		if(isset($_SESSION['usuario']))
		{
			echo '<script type="text/javascript">
			window.location = "index.php"
			</script>';
		}
    }
    
    function verifyEmail($toemail, $fromemail, $getdetails = false)
    {
        $details = "";
        // Get the domain of the email recipient
        $email_arr = explode('@', $toemail);
        $domain = array_slice($email_arr, -1);
        $domain = $domain[0];

        // Trim [ and ] from beginning and end of domain string, respectively
        $domain = ltrim($domain, '[');
        $domain = rtrim($domain, ']');

        if ('IPv6:' == substr($domain, 0, strlen('IPv6:'))) {
            $domain = substr($domain, strlen('IPv6') + 1);
        }

        $mxhosts = array();
            // Check if the domain has an IP address assigned to it
        if (filter_var($domain, FILTER_VALIDATE_IP)) {
            $mx_ip = $domain;
        } else {
            // If no IP assigned, get the MX records for the host name
            getmxrr($domain, $mxhosts, $mxweight);
        }

        if (!empty($mxhosts)) {
            $mx_ip = $mxhosts[array_search(min($mxweight), $mxhosts)];
        } else {
            // If MX records not found, get the A DNS records for the host
            if (filter_var($domain, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
                $record_a = dns_get_record($domain, DNS_A);
                // else get the AAAA IPv6 address record
            } elseif (filter_var($domain, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
                $record_a = dns_get_record($domain, DNS_AAAA);
            }

            if (!empty($record_a)) {
                $mx_ip = $record_a[0]['ip'];
            } else {
                // Exit the program if no MX records are found for the domain host
                $result = 'invalid';
                $details .= 'No suitable MX records found.';
                echo Core::erro('Email inválido!');
                //return ((true == $getdetails) ? array($result, $details) : $result);
            }
        }

        // Open a socket connection with the hostname, smtp port 25
        $connect = @fsockopen($mx_ip, 25);

        if ($connect) {

                // Initiate the Mail Sending SMTP transaction
            if (preg_match('/^220/i', $out = fgets($connect, 1024))) {

                        // Send the HELO command to the SMTP server
                fputs($connect, "HELO $mx_ip\r\n");
                $out = fgets($connect, 1024);
                $details .= $out."\n";

                // Send an SMTP Mail command from the sender's email address
                fputs($connect, "MAIL FROM: <$fromemail>\r\n");
                $from = fgets($connect, 1024);
                $details .= $from."\n";

                            // Send the SCPT command with the recepient's email address
                fputs($connect, "RCPT TO: <$toemail>\r\n");
                $to = fgets($connect, 1024);
                $details .= $to."\n";

                // Close the socket connection with QUIT command to the SMTP server
                fputs($connect, 'QUIT');
                fclose($connect);

                // The expected response is 250 if the email is valid
                if (!preg_match('/^250/i', $from) || !preg_match('/^250/i', $to)) {
                    $result = 'invalid';
                    echo Core::erro('Email inválido!');
                } else {
                    $result = 'valid';
                }
            }
        } else {
            $result = 'invalid';
            $details .= 'Could not connect to server';
        }
        if ($getdetails) {
            return array($result, $details);
        } else {
            return $result;
        }
    }

}

?>

