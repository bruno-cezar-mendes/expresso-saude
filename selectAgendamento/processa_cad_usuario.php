<?php
	include_once("conexao.php");
	$nome_usuario = $_POST['txt_nome_usuario'];
	$txt_email_usuario = $_POST['txt_email_usuario'];
	$txt_senha_usuario = $_POST['txt_senha_usuario'];
	$select_niveis_acesso = $_POST['select_niveis_acesso'];
	
	//echo "$nome_usuario - $email_usuario";
	
	$result_usuario = "INSERT INTO usuarios(nome, email, senha, niveis_acesso_id, created) VALUES ('$nome_usuario','$txt_email_usuario', '$txt_senha_usuario', '$select_niveis_acesso', NOW())";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"Usuario cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"O Usuario não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
?>