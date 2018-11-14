<!doctype html>
<html lang="pt-BR">
	<!--HEAD-->
	<?php include('head.php');?>
	<!--/HEAD-->

	<!--BODY-->
	<body>
		<!--HEADER-->
		<?php include('header.php');?>
		<!--/HEADER-->

		<!--BANNER-->
		<div class="page-heading page-heading--height-3  overlay">
			<img class="s-img-switch" src="images/banner-img--about-us.jpg" alt="" />
			<h2 class="page-heading__title">Contato</h2>
		</div>
		<!--/BANNER-->

		<!-- BREADCRUMBS -->
		<div class="row-fluid light-grey-bg">
			<div class="row">
				<div class="column">
					<div class="b-breadcrumbs b-breadcrumbs--marg-b">
						<a href="index.php" class="b-breadcrumbs__link">Home</a>
						<a href="contato.php" class="b-breadcrumbs__link">Contato</a>
					</div>
				</div>
			</div>
		</div>

		<!--CONTEÚDO-->
		<section class="row-fluid contacts-section">
			<div class="row">
				<div class="columns small-12">
					<h2 class="contacts-section__title">Nosso Escritório</h2>
					<div class="row">
						<div class="columns small-12 medium-6 large-4">
							<h4>Endereço</h4>
							<div class="widget widget-address">
								<p class="widget-address__text">34789 The 2nd Building, 27 Seventh Avenue, <br> New York, 10787, United States</p>
								<p class="widget-address__info icon-phone-3">+44 12 3456 7788</p>
								<p class="widget-address__info icon-fax">+44 12 3456 7878</p>
								<p class="widget-address__info icon-mail-3"><a class="widget-address__link" href="mailto:thememakers@mail.com">thememakers@mail.com</a></p>
							</div>

						</div>
						<div class="columns small-12 medium-6 large-4">
							<h4>Email de Contato</h4>
							<p>Support ticket system: <a href="http://tickets.webtemplatemasters.com">http://tickets.webtemplatemasters.com</a><br> Support forum: <a href="http://forums.webtemplatemasters.com">http://forums.webtemplatemasters.com</a><br> E-mail address: <a href="mailto:thememakers@mail.com">thememakers@mail.com</a>
							</p>
						</div>
						<div class="columns small-12 medium-6 large-4">
							<h4>Horario de Trabalho</h4>
							<p>
								Segunda-feira à Sexta-feiras das 9h as 18h <br> Sábado: <strong>Fechado</strong><br> Domingo: <strong>Fechado</strong>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--FORM CONTATO-->
		<div class="row">
			<div class="columns">
				<form class="contact-form js-contact-form" action="mail.php" method="post">
					<div class="row">
						<div class="columns">
							<h2 class="element-title contact-form__title">Fale Conosco</h2>
						</div>
					</div>
					<div class="row">
						<div class="columns small-12 medium-5">
							<label for="name">Nome*</label>
							<input type="text" name="fields[name]" id="nome" required>

							<label for="email">Email*</label>
							<input type="email" name="fields[email]" id="email" required>

							<label for="subject">Assunto</label>
							<input type="text" name="fields[subject]" id="assunto">

							<label for="phone">Telefone*</label>
							<input type="tel" name="fields[phone]" id="telefone">
						</div>
						<div class="columns small-12 medium-7">
							<label for="message">Mensagem*</label>
							<textarea name="fields[text]" id="mensagem" required></textarea>
						</div>
					</div>
					<div class="row">
						<div class="columns small-12 medium-5">
							<button type="submit" class="btn">Enviar</button>
						</div>
					</div>
				</form>
				<div class="ajax-result">
					<div class="success"></div>
					<div class="error"></div>
				</div>
				<div class="ajax-loader"></div>
			</div>
		</div>
		<!--/FORM CONTATO-->
		<div class="content-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="mapa">
						Mapa aqui
					</div>
				</div>
			</div>
		</div>		
		
		<!--/CONTEÚDO-->

		<!--FOOTER-->
		<?php include('footer.php');?>
		<!--/FOOTER-->

		<!--SCRIPTS-->
		<?php include('scripts.php');?>
		<!--/SCRIPTS-->
	</body>
	<!--/BODY-->

</html>
