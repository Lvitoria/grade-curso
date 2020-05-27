<?php
if ($this->session->flashdata('success')) {
	$alert['msg'] = '<b>' . $this->session->flashdata('success') . '</b>';
}
if (isset($alert)) {
?>
	<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<?php
		echo $alert['msg'];
		?>
	</div>
<?php
}
?>

<div class="tc-mobile-wrap space-top">
	<div class="control-bar">
		<div>
			<h4 class="title">Grade Curricular:</h4>
		</div>
	</div>

	<div class="grid-week space-top">
		<div class="box day2">
			<div class="day-view">
				<p>Segunda</p>
				<?php if (count($segundas)) : ?>
					<?php foreach ($segundas as $segunda) : ?>
						<div class="punch-view">
							<span class="clr-green"><?php echo ucfirst($segunda->discipline) ?></span>
							<br>
							<span><?php  echo "Período: $segunda->classes"?></span>
							<br>
							<span style="font-size: .90em;">
								<?php
								echo "professor(a) $segunda->name é o $segunda->status da disciplina ";
								if ($segunda->holidayStart != "0000-00-00") {
									echo "<br>";
									echo "férias marcadas em:";
									echo "<br>";
									echo dataBR($segunda->holidayStart);
									echo " - ";
									echo dataBR($segunda->holidayEnd);
									echo "<br>";
								}
								?>
							</span>

						</div>
					<?php endforeach ?>
				<?php else : ?>
					<div class="punch-view">
						Esta semana não possui nenhuma aula marcada
					</div>
				<?php endif ?>
			</div>
		</div>
		<div class="box day3">
			<div class="day-view">
				<p>Terça</p>
				<?php if (count($tercas)) : ?>
					<?php foreach ($tercas as $terca) : ?>
						<div class="punch-view">
							<span class="clr-green"><?php echo ucfirst($terca->discipline) ?></span>
							<br>
							<span><?php  echo "Período: $terca->classes"?></span>
							<br>
							<span style="font-size: .90em;">
								<?php echo "professor(a) $terca->name é o $terca->status da disciplina " ?>
							</span>

						</div>
					<?php endforeach ?>
				<?php else : ?>
					<div class="punch-view">
						Esta semana não possui nenhuma aula marcada
					</div>
				<?php endif ?>
			</div>
		</div>
		<div class="box day4">
			<div class="day-view">
				<p>Quarta</p>
				<?php if (count($quartas)) : ?>
					<?php foreach ($quartas as $quarta) : ?>
						<div class="punch-view">
							<span class="clr-green"><?php echo ucfirst($quarta->discipline) ?></span>
							<br>
							<span><?php  echo "Período: $quarta->classes"?></span>
							<br>
							<span style="font-size: .90em;">
								<?php echo "professor(a) $quarta->name é o $quarta->status da disciplina " ?>
							</span>

						</div>
					<?php endforeach ?>
				<?php else : ?>
					<div class="punch-view">
						Esta semana não possui nenhuma aula marcada
					</div>
				<?php endif ?>
			</div>
		</div>
		<div class="box day5">
			<div class="day-view">
				<p>Quinta</p>
				<?php if (count($quintas)) : ?>
					<?php foreach ($quintas as $quinta) : ?>
						<div class="punch-view">
							<span class="clr-green"><?php echo ucfirst($quinta->discipline) ?></span>
							<br>
							<span><?php  echo "Período: $quinta->classes"?></span>
							<br>
							<span style="font-size: .90em;">
								<?php echo "professor(a) $quinta->name é o $quinta->status da disciplina " ?>
							</span>

						</div>
					<?php endforeach ?>
				<?php else : ?>
					<div class="punch-view">
						Esta semana não possui nenhuma aula marcada
					</div>
				<?php endif ?>
			</div>
		</div>
		<div class="box day6">
			<div class="day-view">
				<p>Sexta</p>
				<?php if (count($sextas)) : ?>
					<?php foreach ($sextas as $sexta) : ?>
						<div class="punch-view">
							<span class="clr-green"><?php echo ucfirst($sexta->discipline) ?></span>
							<br>
							<span><?php  echo "Período: $sexta->classes"?></span>
							<br>
							<span style="font-size: .90em;">
								<?php echo "professor(a) $sexta->name é o $sexta->status da disciplina " ?>
							</span>

						</div>
					<?php endforeach ?>
				<?php else : ?>
					<div class="punch-view">
						Esta semana não possui nenhuma aula marcada
					</div>
				<?php endif ?>
			</div>
		</div>
		<div class="box day7">
			<div class="day-view">
				<p class="clr-red">Sabado</p>
				<span style="color:white">Reforço para último sabado do mês</span>
				<?php if (count($sabados)) : ?>
					<?php foreach ($sabados as $sabado) : ?>
						<div class="punch-view">
							<span class="clr-green"><?php echo ucfirst($sabado->discipline) ?></span>
							<br>
							<span><?php  echo "Período: $sabado->classes"?></span>
							<br>
							<span style="font-size: .90em;">
								<?php
								echo "professor(a) $sabado->name é o $sabado->status da disciplina ";
								?>
							</span>
						</div>
					<?php endforeach ?>
				<?php else : ?>
					<div class="punch-view">
						Esta semana não possui nenhuma aula marcada
					</div>
				<?php endif ?>
			</div>
		</div>
	</div>
	<hr>
</div>