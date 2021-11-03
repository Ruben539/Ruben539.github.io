<h1>Cantidad de Motos Pendientes Por Sector</h1>

			<table class="cartas">
		<tr>
			<!--Tarjeta de HERRERIA-->
			
			<td>
				<div class="tarjeta">
					<div class="albunes">
						<br>
						<a href="Planillas/tablaherreria.php"><i class="fas fa-bolt"></i>
						<h3 class="subtitulo">HERRERIA</h3>
						<div class="contenido">
						<p class="letra"><?= $data_dash['herreria']; ?></p></a>
					</div>
					</div>
				</div>
			</td>


				<!--Tarjeta de Pintura-->
			<td>
				<div class="tarjeta">
					<div class="albunes">
						<br>
						<a href="Planillas/tablaPintura.php"><i class="fas fa-broom"></i>
						<h3 class="subtitulo">PINTURA</h3>
						<div class="contenido">
					<p class="letra"><?= $data_dash['pintura']; ?></p>	</a>
					</div>
					</div>
				</div>
			</td>

				<!--Tarjeta de RUEDAS-->
			<td>
				<div class="tarjeta">
					<div class="albunes">
						<br>
						<a href="Planillas/tablaRuedas.php"><i class="fas fa-dot-circle"></i>
						<h3 class="subtitulo">RUEDAS</h3>
						<div class="contenido">
						<p class="letra"><?= $data_dash['ruedas'] ?></p></a>
					</div>
					</div>
				</div>
			</td>

				<!--Tarjeta de Cinta-->
			<td>
				<div class="tarjeta">
					<div class="albunes"> 
						<br>
					<a href="Planillas/tablaCinta.php"><i class="fas fa-user-cog"></i>
						<h3 class="subtitulo">CINTA DE ENSAMBLE</h3>
						<div class="contenido">
						<p class="letra"><?= $data_dash['cinta'] ?></p></a>
					</div>
					</div>
				</div>
			</td>

				<!--Tarjeta de la PROBADO-->
			<td>
				<div class="tarjeta">
					<div class="albunes">
						<br>
						<a href="Planillas/tablaProbado.php"><i class="fas fa-motorcycle"></i>
						<h3 class="subtitulo">INSPECCION Y CONTROL</h3>
						<div class="contenido">
						<p class="letra"><?= $data_dash['probado'] ?></p></a>
					</div>
					</div>
				</div>
			</td>
		</tr>
	</table>

<br>
<h1>Cantidad de Motos Liberadas Por Sector</h1>
<br>
			<table class="cartas">
		<tr>
			<!--Tarjeta de HERRERIA-->
			
			<td>
				<div class="tarjeta">
					<div class="albunes">
						<br>
						<a href="Planillas/tablaherreriaLiberadas.php"><i class="fas fa-bolt"></i>
						<h3 class="subtitulo">HERRERIA</h3>
						<div class="contenido">
						<p class="letra"><?= $data_dashLib['herreria']; ?></p></a>
					</div>
					</div>
				</div>
			</td>


				<!--Tarjeta de Pintura-->
			<td>
				<div class="tarjeta">
					<div class="albunes">
						<br>
						<a href="Planillas/tablapinturaLiberado.php"><i class="fas fa-broom"></i>
						<h3 class="subtitulo">PINTURA</h3>
						<div class="contenido">
					<p class="letra"><?= $data_dashLib['pintura']; ?></p>	</a>
					</div>
					</div>
				</div>
			</td>

				<!--Tarjeta de RUEDAS-->
			<td>
				<div class="tarjeta">
					<div class="albunes">
						<br>
						<a href="Planillas/tablaruedasLiberadas.php"><i class="fas fa-dot-circle"></i>
						<h3 class="subtitulo">RUEDAS</h3>
						<div class="contenido">
						<p class="letra"><?= $data_dashLib['ruedas'] ?></p></a>
					</div>
					</div>
				</div>
			</td>

				<!--Tarjeta de Cinta-->
			<td>
				<div class="tarjeta">
					<div class="albunes"> 
						<br>
					<a href="Planillas/tablacintaLiberadas.php"><i class="fas fa-user-cog"></i>
						<h3 class="subtitulo">CINTA DE ENSAMBLE</h3>
						<div class="contenido">
						<p class="letra"><?= $data_dashLib['cinta'] ?></p></a>
					</div>
					</div>
				</div>
			</td>

				<!--Tarjeta de la PROBADO-->
			<td>
				<div class="tarjeta">
					<div class="albunes">
						<br>
						<a href="Planillas/tablaLiberado.php"><i class="fas fa-motorcycle"></i>
						<h3 class="subtitulo">INSPECCION Y CONTROL</h3>
						<div class="contenido">
						<p class="letra"><?= $data_dashLib['probado'] ?></p></a>
					</div>
					</div>
				</div>
			</td>
		</tr>
	</table>