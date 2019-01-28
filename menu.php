	<!-- HEADER -->
	<header class="main-header ">
		<div class="row-fluid" id="js-menu-sticky-anchor">
			<div class="row align-justify align-middle row-logo">
				<div class="columns small-12 medium-6">
					<div class="logo">
						<a href="index.html">

							<img style="width: 200px;" src="images/logo/logo-almeida.png" alt="Almeida advogados assossiados">

						</a>
					</div>
				</div>
				<div class="columns small-12 shrink">
					<div class="contact-phone">
						<i class="icon-phone-3"></i>Entre em contato: <span>11 4444-5555</span>
					</div>
				</div>
			</div>
		</div>
		<div class="sticky-container">
			<div class="row-fluid row-fluid--menu js-sticky">
				<div class="row align-middle main-navigation">

					<div class="columns small-order-2 large-order-1 menu-col">
						<nav>
							<ul class="menu main-menu">
								<li <?php if($paginaCorrente == 'index.php') {echo 'class="current-menu-parent menu-item menu-item-has-children"';} ?> class="menu-item menu-item-has-children">
									<a href="index.php">Home</a>
								</li>
								<li <?php if($paginaCorrente == 'sobre-nos.php') {echo 'class="current-menu-parent menu-item menu-item-has-children"';} ?> class="menu-item">
									<a href="sobre-nos.php">Sobre Nós</a>
								</li>
								<li <?php if($paginaCorrente == 'servicos.php') {echo 'class="current-menu-parent menu-item menu-item-has-children"';} ?> class="menu-item">
									<a href="servicos.php">Serviços</a>
								</li>
								<li <?php if($paginaCorrente == 'contato.php') {echo 'class="current-menu-parent menu-item menu-item-has-children"';} ?> class="menu-item">
									<a href="contato.php">Contato</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>