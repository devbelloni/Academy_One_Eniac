<?php 

namespace Application_Controller;

global $conn;

class  Application_Controller{

    private $nome, $email, $mensagem;

    function __construct($nome, $email, $mensagem) {

        $this->setNome($nome);
        $this->setEmail($email);
        $this->setMensagem($mensagem);

        require('../database/conexao.php');

        $data = array(
            'nome' => $nome,
            'email' => $email,
            'mensagem' => $mensagem,
            // Add more columns and values as needed
        );
        
        // Construct the SQL query
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("', '", $data) . "'";
        $sql = "INSERT INTO entre_contato ($columns) VALUES ($values)";
        
        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "Dados Cadastrados com Sucesso";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        mysqli_close($conn);
    }

    public function setEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)):
            $this->email = $email;
        else:
            die('Email Invalido');
        endif;
    }

    public function setNome($nome){
        if($nome && is_string($nome)):
            $this->nome = $nome;
        else:
            die('Erro no Nome!');
        endif;
    }

    public function setMensagem($mensagem){
        if($mensagem && is_string($mensagem)):
            $this->mensagem = $mensagem;
        else:
            die('Erro no senha!');
        endif;
    }


}


?>