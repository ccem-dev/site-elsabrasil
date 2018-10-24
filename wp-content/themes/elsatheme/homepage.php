<?php
/**
 * Template name: HOMEPAGE
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elsatheme
 */

get_header();
?>
<!-- Banner -->
		
			<!-- Main -->
				<article id="main" >



					<!-- One -->
						<section class="wrapper style2 container special-alt" style="background-color: #6689CC; width:100%;" >
							<div class="row gtr-50">
								<div class="col-8 col-12-narrower">
					<div class="special container">
						<span class="icon fa-bar-chart-o"></span>
						<h2>O Estudo Longitudinal de Saúde do Adulto <strong>ELSA Brasil</strong></h2>
						<p>É uma investigação multicêntrica de coorte composta por 15 mil,
						<br />
						funcionários de seis instituições públicas de ensino superior e pesquisa das regiões Nordeste,Sul e Sudeste do Brasil. A pesquisa tem o propósito de investigar a incidência e os fatores de risco para doenças crônicas, em particular, as cardiovasculares e o diabetes.</p>
					</div>
									<header>
										<h2>Em cada centro integrante do estudo, <strong>os sujeitos da pesquisa</strong> com idade entre 35 e 74 anos – fazem exames e entrevistas.</h2>
									</header>
									<p>Nas quais são avaliados aspectos como condições de vida, diferenças sociais, relação com o trabalho, gênero e especificidades da dieta da população brasileira.</p>
									<footer>
										<ul class="buttons">
											<li><a href="#" class="button">Conheça mais</a></li>
										</ul>
									</footer>

								</div>
								<div class="col-4 col-12-narrower imp-narrower">

									<ul class="featured-icons">
										<li><span class="icon fa-clock-o"><span class="label">Feature 1</span></span></li>
										<li><span class="icon fa-volume-up"><span class="label">Feature 2</span></span></li>
										<li><span class="icon fa-laptop"><span class="label">Feature 3</span></span></li>
										<li><span class="icon fa-inbox"><span class="label">Feature 4</span></span></li>
										<li><span class="icon fa-lock"><span class="label">Feature 5</span></span></li>
										<li><span class="icon fa-cog"><span class="label">Feature 6</span></span></li>
									</ul>

								</div>
							</div>
						</section>
<section class="wrapper style4 container">

							<!-- Content -->
								<div class="content">
									<section style="text-align:center;">
										
										<header>
											<h3><strong>Histórico</strong></h3>
										</header>
										<p>Nas últimas décadas, profundas transformações sociais, econômicas e demográficas fizeram com que o Brasil vivenciasse um grande crescimento da ocorrência de doenças crônicas.
</p>
										<p>Fatores como urbanização acelerada e modificações da estrutura familiar colaboraram para que, em 2002, tais enfermidades já respondessem por 75% dos gastos com internações hospitalares no Sistema Único de Saúde (SUS).</p>
										<p>Devido à escassez de estudos longitudinais em populações adultas que investiguem as mudanças ocorridas em várias regiões brasileiras, a incidência dessas doenças e seus fatores de risco ainda são pouco conhecidos.</p>
										<p>Buscando sanar essa lacuna, o Ministério da Saúde, em parceria com o Ministério da Ciência e Tecnologia, propôs o desenvolvimento do ELSA – estudo de coorte que busca investigar o desenvolvimento de doenças crônicas, em particular, das cardiovasculares e do diabetes.</p>
										<p class="image featured" style=" width:50%!important; margin-left: 26%; display: unset;"><img src="http://localhost/elsasite/wp-content/uploads/2018/09/banner.jpg" style=" width:50%; margin-left: 24%;" alt=""><span style="font-size:0.53em;">Imagem retirada do FREEPIK</span></p>
										<p>Para isso, foi selecionado um consórcio formado por seis instituições de diferentes estados do país: Fundação Oswaldo Cruz (Rio de Janeiro), Universidade de São Paulo (USP), e as universidades federais da Bahia (UFBA), Espírito Santo (Ufes), Minas Gerais (UFMG) e Rio Grande do Sul UFRGS).

</p>
									</section>
								</div>

						</section>
					<!-- Two -->
						<section class="wrapper style1 container special">
							<div class="row">
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon featured fa-check"></span>
										<header>
											<h3>ELSA monitoramento de Saúde</h3>
										</header>
										<p><iframe width="100%" height="315" src="https://www.youtube.com/embed/6OtUcBMVdOM?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon featured fa-check"></span>
										<header>
											<h3>18º Congresso UNIDAS - ELSA</h3>
										</header>
										<p><iframe width="100%" height="315" src="https://www.youtube.com/embed/SGcIxH2juKs?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<span class="icon featured fa-check"></span>
										<header>
											<h3>Sala de Convidados - ELSA</h3>
										</header>
										<p><iframe width="100%" height="315" src="https://www.youtube.com/embed/LjN4vxhgDa4?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
									</section>

								</div>
							</div>
						</section>

					<!-- Three -->
						<section class="wrapper style3 container special">

							<header class="major">
								<h2>Notícias em<strong> Destaque</strong></h2>
							</header>

		<?php echo do_shortcode( '[post_grid id="127"]' ); ?>
						</section>

				</article>

			<!-- CTA -->
				<section id="cta">

					<header>
						<h2>Gostaria de receber <strong>Novidades?</strong>?</h2>
						<p>Assine nossa Newsletter</p>
					</header>
					<footer>

		<?php echo do_shortcode( '[contact-form-7 id="139" title="Newsletter Inscrição"]' ); ?>
					</footer>

				</section>
<?php
get_footer(); ?>