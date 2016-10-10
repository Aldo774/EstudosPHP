<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<title>Estudos PHP</title>
	</head>
	<body>
		<section>
			<div class="wrap">
<?php

	function VerificaTipoValor($vetor){
		foreach ($vetor as $valor) {
			if (!(is_numeric($valor)) || (!($valor >= 0) && ($valor <=10))) {
				return False;
			}
		}
		return True;
	}

	function MostraTipoValor($vetor){
		foreach ($vetor as $valor) {
			if (!(is_numeric($valor)) || (!($valor >= 0) && ($valor <=10)))
				return True;
		}
	}

	if (isset($_POST["nome"]) && isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["n3"]) && isset($_POST["n4"]))
	{

		$nome = $_POST["nome"];

		$vetor[0] = $_POST["n1"];
		$vetor[1] = $_POST["n2"];
		$vetor[2] = $_POST["n3"];
		$vetor[3] = $_POST["n4"];

		$resultado = VerificaTipoValor($vetor);

		if ($resultado && ($nome != "")) {
			$media = ($vetor[0]+$vetor[1]+$vetor[2]+$vetor[3])/4;
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
<?php
	$situacao = MostraTipoValor($vetor);
	if ($situacao) {
		echo "<h6>Apenas Valores Núméricos entre 01 e 10</h6>";
	}
	if ($nome === ""){
		echo "<h6>Informe um nome</h6>";	
	}
?>
							<form action="index.php" method="post">
								<label>Nome</label>
								<input type="text" name="nome">
								<label>Nota 1</label>
								<input type="number" name="n1" min="0" max="10">
								<label>Nota 2</label>
								<input type="number" name="n2" min="0" max="10">
								<label>Nota 3</label>
								<input type="number" name="n3" min="0" max="10">
								<label>Nota 4</label>
								<input type="number" name="n4" min="0" max="10">
								<input type="submit">
							</form>
						</div>
					</div>
				</div>
<?php
	}
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
								<input type="number" name="n1" min="0" max="10">
								<label>Nota 2</label>
								<input type="number" name="n2" min="0" max="10">
								<label>Nota 3</label>
								<input type="number" name="n3" min="0" max="10">
								<label>Nota 4</label>
								<input type="number" name="n4" min="0" max="10">
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