<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Bienvenido a StackUnderflow
	</title>
	<?php


		echo $this->Html->css(array(
				'StackStyle',
				'https://fonts.googleapis.com/css?family=Press+Start+2P',
				'css/bootstrap-theme.min.css',
				));
		echo $this->Html->script(array(
				'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
				'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header" class="row">
			<div class= "col-md-9">
			<?php	echo $this->Html->image(
					'stackunderflow_logo.png',
					array('class'=>'img-responsive')
			); ?>
			</div>
			<!--BOTON LOGIN CUANDO LA PAGINA ESTA GRANDE -->
			<div id="navbar loginContainer" class="loginContainer col-md-3 visible-lg visible-md">
				<ul class="nav pull-left " id="loginButton">
					<li class="dropdown" id="menuLogin">
						<a class="dropdown-toggle loginButton" href="#" data-toggle="dropdown" id="navLogin">
							Login
						</a>
						<div class="dropdown-menu" style="padding:17px;">
								<form class="form" id="formLogin" action="controller/login.php">
									<input name="username" id="username" placeholder="Usuario" type="text">
									<input name="password" id="password" placeholder="Contraseña" type="password">
									<br>
									<div class="divBotonesLogin">
										<button type="button" id="registro" class="btn buttonStackLoginClicked">Registro</button>
										<button type="submit" id="btnLogin" class="btn buttonStackLoginClicked">Entrar</button>
									</div>
								</form>
						</div>
					</li>
				</ul>
			</div>
		<!-- FIN BOTON LOGIN CUANDO LA PAGINA ESTA GRANDE -->
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer" class="row finalPagina">
			<div class="linksFooter col-md-12">
				<span class="elemFooter"><a href='#'>Empleos</a></span>
				<span class="verticalSeparator"></span>
				<span class="elemFooter"><a href='#'>Informacion</a></span>
				<span class="verticalSeparator"></span>
				<span class="elemFooter"><a href='#'>Privacidad</a></span>
				<span class="verticalSeparator"></span>
				<span class="elemFooter"><a href='#'>Terminos</a></span>
			</div>
		</div>
		<?php
			echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
		?>
	</div>
</body>
</html>
