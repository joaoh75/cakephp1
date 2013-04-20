<?php
/**
 *
 * PHP 5
 *
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
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('css.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Coding Dojo</a></h1>				
			</div>
			<div id="menu">
				<ul>
					<li><a href="/">Inicio</a></li>
					<li><a href="/cadastre-se">Cadastre-se</a></li>
					<li><a href="/pages/mapa">Localização</a></li>
					<li><a href="#">Contato</a></li>
				</ul>
			</div>	
		</div>
		<div id="banner">
			<div class="content"><img src="/img/dojo.jpg" alt="" /></div>
		</div>
		

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		
		<div id="footer">
			<p>Exercício de treinamento cakephp
	<br /><a href="http://www.assando-sites.com.br">Assando Sites</a>. 
	</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
