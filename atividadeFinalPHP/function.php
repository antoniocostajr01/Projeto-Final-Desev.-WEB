<?php

$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "nsw";
//conexão banco de dados
$connect = mysqli_connect( $host, $db_user, $db_pass, $db_name);

function login( $connect ){
    if (isset($_POST['acessar']) AND !empty($_POST['email']) AND !empty($_POST['senha'])){

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $senha = sha1($_POST['senha']);
        $query = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha' ";
        $executar = mysqli_query($connect, $query);
        $return = mysqli_fetch_assoc($executar);
        
        if (!empty($return['email']) AND $return['adm'] == 1 ){
            echo "Bem vindo " . $return['nome'];

            session_start();
            $_SESSION['nome'] = $return ['nome'];
            $_SESSION['id'] = $return ['id'];
            $_SESSION['ativa'] = TRUE;

            header("location:painel.php");
        }else{
            echo "Usuário não encontrado ou sem permissão de administrador";
        }
    }
}

function usuarios($connect){
	$query = "SELECT * FROM users";
	$action = mysqli_query($connect, $query);
	$results = mysqli_fetch_all($action, MYSQLI_ASSOC);
	return $results;
}

function logout(){
    session_start();
    session_unset();
    session_destroy();
    header("location:login.php");
}

// Seleciona(busca) no Banco de dados um resultado com base no IDK
function buscaUnica($connect, $tabela, $id) {
    $query = "SELECT * FROM $tabela WHERE id =" . (int) $id;
    $execute = mysqli_query($connect, $query);
    $result = mysqli_fetch_assoc($execute);
    return $result;
}

// Seleciona (busca) no BD todos os resultados com base no WHERE
function buscar($connect, $tabela, $where = 1, $order = ""){
    if (!empty($order)){
        $order = "ORDER BY $order";
    }
    $query = "SELECT * FROM $tabela WHERE $where $order";
    $execute = mysqli_query($connect, $query);
    $results = mysqli_fetch_all($execute, MYSQLI_ASSOC);
    return $results;
}

// Inserir novos usuarios
function inserirUsuarios($connect) {
    if ((isset($_POST['cadastrar']) AND !empty($_POST['email']) AND !empty($_POST['senha'])) ) {
        $erros = array();
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $nome = mysqli_real_escape_string($connect, $_POST['nome']);
        $senha = sha1($_POST['senha']);
        $adm = isset($_POST['adm']);

        if ($_POST['senha'] != $_POST['repetesenha']){
            $erros[] = "Senhas não conferem!";
        }
        $queryEmail = "SELECT email FROM users WHERE email = '$email' ";
        $buscaEmail = mysqli_query($connect, $queryEmail);
        $verifica = mysqli_num_rows($buscaEmail);

        if (!empty($verifica)) {
            $erros[] = "Email já cadastrado!";
        }

        $adm = isset($_POST['adm']) ? 1 : 0;


        $nomeArquivo = null;
        $tipo = null;
        $nomeTemporario = null;

        // Verificação de imagem
        if (!empty($_FILES['arquivo']['name'])) {
		 	
            $nomeArquivo = $_FILES['arquivo']['name'];
            $tipo = $_FILES['arquivo']['type'];
            $nomeTemporario = $_FILES['arquivo']['tmp_name'];
            $tamanho = $_FILES['arquivo']['size'];
            $erros = array();

            $tamanhoMaximo = 1024 * 1024 * 5; //5MB
            if ($tamanho > $tamanhoMaximo) {
                $erros[] = "Seu arquivo excede o tamanho máximo<br>";
            }

            $arquivosPermitidos = ["png", "jpg", "jpeg"];
            $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
            if ( !in_array($extensao, $arquivosPermitidos) ) {
                $erros[] = "Arquivo não permitido.<br>";
            }

           $typesPermitidos = ["image/png", "image/jpg", "image/jpeg"];
           if ( !in_array($tipo, $typesPermitidos) ) {
                $erros[] = "Tipo de arquivo não permitido.<br>";
           }
        }

        if (empty($erros)) {
            // $nomeArquivo = $_FILES['arquivo']['name'];
            // $tipo = $_FILES['arquivo']['type'];
            // $nomeTemporario = $_FILES['arquivo']['tmp_name'];

            // Adiciona a imagem
            $caminho = "uploads-img/";
            $hoje = date("d-m-Y_h-i");
            $user = $_POST['nome'];
            //$novoNome = $hoje."-".$nomeArquivo;
            $novoNome = $user."-". $nomeArquivo;

            if(move_uploaded_file($nomeTemporario, $caminho.$novoNome)) {
                echo "Upload feito com Sucesso!";
            }else{
                echo "Erro ao enviar o arquivo!";
            }

            $query = "INSERT users (nome, email, senha, imagem, adm, data_cadastro) VALUES ('$nome', '$email', '$senha', '$novoNome', $adm, NOW())";
            $executar = mysqli_query($connect, $query);

            if ($executar) {
                echo "Usuário Inserido com sucesso!";
            } else {
                echo "Erro ao inserir o usuário no banco.";
            }
        } else {
            echo "Erro ao inserir o usuário:";
            foreach ($erros as $erro) {
                echo "<p>$erro</p>";
            }
        }
    }
}

// Deletar algum dado
function deletar($connect, $tabela, $id){
    if (!empty($id)) {
        $query = "DELETE FROM $tabela WHERE id =". (int) $id;
        $execute = mysqli_query($connect, $query);
        if ($execute){
            echo "Dado deletado com sucesso!";
        } else{
            echo "Erro ao deletar!";
        }
    }
}

function updateUser($connect){
    if (isset($_POST['atualizar']) AND !empty($_POST['email'])) {
        $erros = array();
        $id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $nome = mysqli_real_escape_string($connect, $_POST['nome']);
        $senha ="";
        $data = mysqli_real_escape_string($connect, $_POST['data_cadastro']);
        $adm = isset($_POST['adm']) ? 1 : 0;

        if (empty($data)) {
            $erros[] ="Preencha a data de cadastro" ;
        }
        if (empty($email)) {
            $erros[] ="Preencha seu e-mail corretamente" ;
        }
        if (strlen($nome) < 4) {
            $erros[] ="Preencha seu nome completo" ;
        }
        if (!empty($_POST['senha'])) {
            if ($_POST['senha'] != $_POST['repetesenha']){
                $senha = sha1(($_POST['senha']));
            }else{
                $erros = 'Senhas não conferem';
            }
        }
        $queryEmailAtual = "SELECT email FROM users WHERE id = $id ";

        $buscaEmailAtual = mysqli_query($connect, $queryEmailAtual);

        $returnoEmail = mysqli_fetch_assoc($buscaEmailAtual);

        $queryEmail = "SELECT email FROM users WHERE email = '$email' AND email <> ' ". $returnoEmail['email']." ' ";

        $buscaEmail = mysqli_query($connect, $queryEmail);

        $verifica = mysqli_num_rows($buscaEmail);

        if (!empty($verifica)) {
            $erros[] = "Email já cadastrado!";
        }
        if(empty($erros)){
            // Update do usuário
            if (!empty($senha)) {
                $query = "UPDATE users SET nome = '$nome', email = '$email', senha = '$senha', data_cadastro = '$data', adm = '$adm' WHERE id =" . $id;
            } else{
                $query = "UPDATE users SET nome = '$nome', email = '$email', data_cadastro = '$data', adm = '$adm' WHERE id =". $id;
            }
            $executar = mysqli_query($connect, $query);
            if ($executar) {
                echo "Usuário atualizado com sucesso!";
            } else {
                echo "Erro ao atualizar o usuário.";
            }
        }else{
            foreach ($erros as $erro) {
                echo "<p>$erro</p>";
            }
        }
    }
}
