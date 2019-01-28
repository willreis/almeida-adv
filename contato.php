<!doctype html>
<html lang="pt-BR">
	<!--HEAD-->
	<?php include('head.php');?>
	<!--/HEAD-->

	<!--BODY-->
	<body onload="atualizarDataHora()">
		<!--HEADER-->
		<?php include('header.php');?>
		<!--/HEADER-->

		<!--BANNER-->
		<div class="page-heading page-heading--height-3  overlay">
			<img class="s-img-switch" src="images/banner-img--about-us.jpg" alt="" />
			<h2 class="page-heading__title">Contato</h2>
		</div>
		<!--/BANNER-->

		<!--FORM CONTATO-->
		<div class="row">
			<div class="columns">
				<form class="contact-form js-contact-form" action="mail.php" method="post">
					<div class="row">
						<div class="columns">
							<h2 class="element-title contact-form__title" style="margin-top:50px">Fale Conosco</h2>
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

		<!--CONTEÚDO-->
		<section class="row-fluid contacts-section">
			<div class="row">
				<div class="columns small-12">
					<h2 class="contacts-section__title">Nosso Escritório</h2>
					<div class="row">
						<div class="columns small-12 medium-6 large-4">
							<h4>Endereço</h4>
							<div class="widget widget-address">
								<p class="widget-address__text">Rua Santa Cruz, 289, Centro,<br>
								Itu/SP, CEP: 13.300-090</p>
								<p class="widget-address__info icon-phone-3">(11) 4023-3376</p>
								<p class="widget-address__info icon-phone-3">(11) 97100-3670</p>
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
		<div class="content-fluid">
			
				<div class="col-md-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.5685625812316!2d-47.30362828560466!3d-23.258781856371645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf501808e54cef%3A0xabf7a7824f5ea2!2sR.+Santa+Cruz%2C+289+-+Centro%2C+Itu+-+SP%2C+13300-220!5e0!3m2!1spt-BR!2sbr!4v1548700616757" width="100%" style="border:0; height:380px"  frameborder="0" allowfullscreen></iframe>
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
