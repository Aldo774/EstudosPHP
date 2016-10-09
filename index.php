<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Estudos PHP</title>
	</head>
	<body>
		<section>
			<div class="wrap">
<?php

	if ((isset($_POST["nome"]) && isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["n3"]) && isset($_POST["n4"])))
	{
		$nome = (isset($_POST["nome"]) && $_POST["nome"] != "") ? $_POST["nome"] : "Anonimo";

		$N1 = isset($_POST["n1"]) ? $_POST["n1"] : 0;
		$N2 = isset($_POST["n2"]) ? $_POST["n2"] : 0;
		$N3 = isset($_POST["n3"]) ? $_POST["n3"] : 0;
		$N4 = isset($_POST["n4"]) ? $_POST["n4"] : 0;

		$media = ($N1+$N2+$N3+$N4)/4;

		$situacao = $media>=7 ? "Aprovado" : "Reprovado";
?>
				<div class="box-vendas">
					<div class="box-title">
						<span>
							<h4>Nome</h4>
						</span>
						<span>
							<h4>Média</h4>
						</span>
						<span>
							<h4>Situação</h4>
						</span>
					</div>
					<div class="box-content">
						<div>
							<span>
								<?php echo $nome;?>
							</span>
							<span>
								<?php echo $media?>
							</span>
							<span>
								<?php echo $situacao;?>
							</span>
						</div>
					</div>
				</div>
<?php
	}
	else{
?>
				<div class="box-vendas">
					<div class="box-title box-form">
						<span>
							<h4>Formulario</h4>
						</span>
					</div>
					<div class="box-content box-form">
						<div>
							<form action="index.php" method="post">
								<label>Nome</label>
								<input type="text" name="nome">
								<label>Nota 1</label>
								<input type="text" name="n1">
								<label>Nota 2</label>
								<input type="text" name="n2">
								<label>Nota 3</label>
								<input type="text" name="n3">
								<label>Nota 4</label>
								<input type="text" name="n4">
								<input type="submit">
							</form>
						</div>
					</div>
				</div>
<?php
	}
?>
			</div>
		</section>
	</body>
</html>