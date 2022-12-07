<?php
	
//Definições de Acesso ao Banco de Dados 
	
$host = "localhost:3306";
$dbusername = "alaein48_steticapelli";
$dbpass = "@steticapelli1234";
$dbname = "alaein48_steticapelli";

//Realizar Conexão

$conn = new mysqli($host, $dbusername, $dbpass, $dbname);

if(mysqli_connect_error()){
    die('Connection error'. mysqli_connect_error() );
}else{
    echo "";
}

// Mudar Caracteres para utf8
mysqli_set_charset($conn,"utf8");

/*echo "Current character set is: " . mysqli_character_set_name($conn);*/

//$_POST - Capturar Dados do Formulário de Cadastro

$nomecompleto  = $_POST['nome']['sobrenome'];
$email  = $_POST['email'];
$whatsapp  = $_POST['whatsapp'];

//$_POST - Inserir Novo cadastro na Tabela de Contribuintes

$dupesql = "SELECT * FROM newsletter_users WHERE email = '$email' AND whatsapp = '$whatsapp'";
$duperaw = mysqli_query($conn, $dupesql);

if (mysqli_num_rows($duperaw) > 0) {
    echo '
  <script>
  alert("E-mail ou Whatsapp já existente!");
  window.location.href = "https://steticapelli.com.br/index.html";
</script>';


} else {

    $sql = "INSERT INTO newsletter_users (nomecompleto, email, whatsapp) VALUES ('$nomecompleto', '$email', '$whatsapp')";
    if (mysqli_query($conn, $sql)) {
        echo '
  <script>
  alert("Inscrição efetuada com sucesso!");
  window.location.href = "https://steticapelli.com.br/index.html";
</script>';

        mysqli_close($conn);

    } else {
        echo '
  <script>
  alert("Erro ao efetuar inscrição!");
  window.location.href = "https://steticapelli.com.br/index.html";
</script>';
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}

?>