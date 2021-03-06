<html>
<head>
	<?=application::renderMeta()?>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="<?=application::getController()->getCSSClass()?>">
	<? include dirname(__FILE__).'/_partials/ga.php'; ?>
	<?=application::getController()->body_start?>
	<div class="container">
		<div class="masthead">
			<h3 class="text-muted">
				<a href="/">Appers</a>
				<span>[Don't be slow] [Provide the best]</span>
			</h3>
			<ul class="nav nav-justified">
				<li <? if(application::getController()->getFirstName() == 'index') print 'class="active"';?> ><a href="/">Начало</a></li>
				<li <? if(application::getController()->getFirstName() == 'mission') print 'class="active"';?>><a href="/mission/">Миссия</a></li>
				<li <? if(application::getController()->getFirstName() == 'gettingStarted') print 'class="active"';?>><a href="/gettingStarted/">Документация</a></li>
				<li <? if(application::getController()->getFirstName() == 'solutions') print 'class="active"';?>><a href="/solutions/">Солюшины</a></li>
				<li <? if(application::getController()->getFirstName() == 'download') print 'class="active"';?>><a href="/download/">Загрузки</a></li>
				<li <? if(application::getController()->getFirstName() == 'contact') print 'class="active"';?>><a href="/contact/">Контакты</a></li>
			</ul>
		</div>
		<?=$content?>
		<!-- Site footer -->
		<div class="footer">
			<p class="copy">
				&copy;
				<a href="/">Appers</a>
				2014 <? if(($y=date('Y')) > 2014) echo '- '.$y; ?>
			</p>
			<p class="time"><?=application::getExecutingTime()?></p>
		</div>
	</div>
	<?=application::getController()->body_end?>
</body>
</html>
