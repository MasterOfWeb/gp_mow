<?php
/**
 * The template for displaying single posts.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$title = get_the_title();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php generate_do_microdata( 'article' ); ?>>
	<div class="inside-article">
		<?php
		/**
		 * generate_before_content hook.
		 *
		 * @since 0.1
		 *
		 * @hooked generate_featured_page_header_inside_single - 10
		 */
		do_action( 'generate_before_content' );

		if ( generate_show_entry_header() ) :
			?>
			<header class="entry-header">
				<?php

				do_action( 'generate_before_entry_title' ); ?>

				<h1><?=$title;?> Test & Vergleich</h1>
				<p class="entry-meta">
                    <small class="text-muted">
											geschrieben von Jens Bucher <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/jens.jpg" style="width:20px; border-radius:20px;"> am <?php echo date('j. F Y', $date = strtotime("-7 day")); ?>
                    </small>
                </p>

				<?php
				/**
				 * generate_after_entry_title hook.
				 *
				 * @since 0.1
				 *
				 * @hooked generate_post_meta - 10
				 */
				do_action( 'generate_after_entry_title' );
				?>
			</header>
			<?php
		endif;

		/**
		 * generate_after_entry_header hook.
		 *
		 * @since 0.1
		 *
		 * @hooked generate_post_image - 10
		 */
		do_action( 'generate_after_entry_header' );

		$itemprop = '';

		if ( 'microdata' === generate_get_schema_type() ) {
			$itemprop = ' itemprop="text"';
		}
		?>

		<div class="entry-content"<?php echo $itemprop; // phpcs:ignore -- No escaping needed. ?>>

			<!-- Top3 -->
			<div class="row row-cols-1 row-cols-md-3" id="top3">
				<div class="col">
					<div class="card h-100 text-center border border-primary">
						<div class="card-header">
							Meist gekauft
						</div>
						<div class="card-body d-flex flex-column justify-content-bottom">
							<?=do_shortcode( '[amazon bestseller="'.$title.'" items="15" select="1" template="widget" ribbon="none"]' ); ?>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 text-center border border-success">
						<div class="card-header">
							Top bewertet
						</div>
						<div class="card-body d-flex flex-column justify-content-bottom">
							<?=do_shortcode( '[amazon bestseller="'.$title.'" items="15" select="1" orderby="rating" template="widget" ribbon="none"]' ); ?>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 text-center border border-secondary">
						<div class="card-header">
							bester Preis
						</div>
						<div class="card-body d-flex flex-column ">
							<?=do_shortcode( '[amazon bestseller="'.$title.'" items="15" select="1" orderby="price" order="ASC" template="widget" ribbon="none"]' ); ?>
						</div>
					</div>
				</div>
			</div>
			<!-- / Top3 -->

			<?php  if(get_theme_mod('pt_ads_responstive')):?>
					<?php echo get_theme_mod('pt_ads_inarticle');?>
			<?php endif; ?>

			<h2>Die 10 besten <?=$title;?> im Vergleich</h2>
			<p>
				Hier findest du eine Übersicht der meistverkauften <b><?=$title;?></b> auf Amazon. Was du bei der Suche nach den besten <?=$title; ?> beachten musst, haben wir in unserem Ratgeber zusammengefasst.
			</p>
			<?php echo do_shortcode('[amazon bestseller="'.$title.'"]');?>

			<?php  if(get_theme_mod('pt_ads_responstive')):?>
					<?php echo get_theme_mod('pt_ads_inarticle');?>
			<?php endif; ?>

			<p>
			  Du interessiert sich für <?=$title;?>? Du willst mit Sicherheit viele Informationen dazu einholen. Wir haben extra für dich umfassende Nachforschungen angestellt und uns dafür auch verschiedene <?=$title; ?> Tests angeschaut und analysiert. Dadurch vereinfachen wir dir die Kaufentscheidung.
			</p>
			<p>
			  Auf welche wichtigen Kaufkriterien solltest du achten?. Einen Fehlkauf möchte keiner erleiden, deshalb haben wir für dich die wichtigsten Kaufkriterien zusammengestellt. So wirst du mit Sicherheit den Kauf von <?=$title; ?> nicht bereuen. Mit unseren Tipps und Tricks bist du bestens gerüstet, ein passendes Produkt zu kaufen. Wir bitten dich jedoch vorher die verschiedenen Produkten von den unterschiedlichen Herstellern untereinander zu vergleichen. Kommen wir aber zunächst zu den wichtigsten Kaufkriterien.
			</p>
			<h3><?=$title; ?> Test</h3>
			<p>
			  Einen wichtigen Hinweis geben wir dir vorweg. Wir haben selber keinen <?=$title; ?> Test selbst durchgeführt. Wir geben dir letztendlich hier die Möglichkeit, die verschiedenen Produkte unter einander in Ruhe anzuschauen und zu vergleichen. Wenn du gute <?=$title; ?> Tests suchst, findest du diese zum Beispiel bei der Stiftung Warentest online oder Test.de. Diese Portale bieteten dir verschiedenen Testberichte aus den verschiedensten Bereichen. Test.de ist übrigens nichts anderes als ein Tochter von der Stiftung Warentest. Dennoch haben wir für dich, einen kurzen Kaufratgeber verfasst, so weisst du genau, was bei dem Kauf wichtig ist. Es gibt nämlich viele Unterschiede, auf welche du unbedingt Acht geben solltest. Nicht allein der Preis beim Kauf ist wichtig. Denn du kannst nicht allein anhand des Preises von Produkten genau sagen, ob dieser auch gerechtfertigt ist und ob dieses Produkt schlussendlich auch gut ist.
			</p>
			<h3>Anwendungsgebiete</h3>
			<p>
			  <b>Das Anwendungsgebiet:</b> Je nach Anwendungsbereich kann es durchaus passieren, dass der beliebteste <?=$title; ?> nicht das perfekte Produkt für dich ist, für das du es hältst. In dem Fall, solltest du dich für ein anderes Produkt entscheiden. Durch unserer übersichtlichen Auflistung kannst du die verschieden Produktmerkmale perfekt untereinander vergleichen und direkt sehen, ob sich das <?=$title; ?> für dein gewünschtes Anwendungsgebiet lohnt oder ob du lieber doch ein anderes <?=$title; ?> aus unserer Auflistung entscheiden solltest.
			</p>
			<p>
			  <b>Verschiedene Nutzererfahrungen:</b> Wie bereits weiter oben von uns beschrieben, solltest du immer schauen, wie andere Nutzer über verschiedene <?=$title;?> denken. Sind die Verbraucher zufrieden oder haben sie eventuell diverse Mängel am jeweiligen Produkt feststellen können? Lies dir daher bitte, die verschiedenen Kundenbewertungen genau durch, und übertrage deren Meinung auf deine Kaufintention.
			</p>
			<p>
			  <b>Flexibilität:</b> Wenn du <?=$title;?> für ganz verschiedene Dinge benutzen willst, wähle ein Produkt mit vielen Funktionen und Optionen. Solltest du dein Artikel häufig transportieren wollen, musst du auf jeden Fall darauf achten, wie groß das gekaufte Produkt ist ist und wie viel es wiegt.
			</p>
			<h3><?=$title; ?> online kaufen</h3>
			<p>
			  Bist du nun vollkommen zufrieden, kannst du mit ruhigen Gewissen ein <?=$title; ?> kaufen. Dazu empfehlen wir dir den Online-Shop Amazon. Denn dort hast du nicht allein nur eine riesige Produktauswahl, sondern auch die von uns vorgestellten <?=$title;?> werden dort zum Handel bereit gestellt. Die Preise sind sehr oft viel günstiger als bei dem Geschäft um die Ecke und die Lieferzeiten sind phänomenal. So bekommst zum Beispiel, als Amazon Prime-Kunde deine bestellten Produkte schon am nächsten Tag nach Hause geliefert. Dies ist einer der Punkte, was Amazon unter anderem zu beliebt macht.
			</p>
			<h3>Checkliste: Worauf achten?</h3>
			<ul>
			  <li>Der Preis: was darf ihr neues Produkt eigentlich kosten? – Limit setzen nicht vergessen!</li>
			  <li>Ist teurerer auch gleich gut? Worin unterscheiden sich teure Produkte von den günstigen Alternativen?</li>
			  <li>Was schreiben andere Kunden die bereits diesen Artikel gekauft haben?</li>
			  <li>Wie schneidet das Produkt im Test der anderen Portale im Durchschnitt ab?</li>
			  <li>Produkt defekt? Bietet der Hersteller einen (gratis) Kundenservice für defekt Produkte?</li>
			  <li>Wie sieht es mit der Garantie aus?</li>
			</ul>


			<?php  if(get_theme_mod('pt_ads_responstive')):?>
					<?php echo get_theme_mod('pt_ads_inarticle');?>
			<?php endif; ?>

			<h2>Weitere Tests</h2>
			<ul>
		    <?php
				global $post;

				// WP_Query arguments
				$args = array (
				    'post_type'              => 'index',
				    'post_status'            => 'publish',
						'posts_per_page' => 100,
				     'date_query'    => array(
				        'column'  => 'post_date',
				        'before'   => $post->post_date,
								'inclusive' => true,
				    ),
				);
				// The Query
				$the_query = new WP_Query( $args );

				// The Loop
				if ( $the_query->have_posts() ) {
					$i = 1;
					$step = 1;
				    while ( $the_query->have_posts() ) {
							$the_query->the_post();
							if ($i == $step) {
				        echo '<li><a href="'.get_the_permalink().'">' . get_the_title() . '</a></li>';
								$step = $step + $i;
							}
							$i++;
				    }
				}
				wp_reset_query();
				// WP_Query arguments
				$args = array (
				    'post_type'              => 'index',
				    'post_status'            => 'publish',
						'posts_per_page' => 100,
						'order' => 'ASC',
				     'date_query'    => array(
				        'column'  => 'post_date',
				        'after'   => $post->post_date,
								'inclusive' => false,
				    ),
				);
				// The Query
				$the_query = new WP_Query( $args );

				// The Loop
				if ( $the_query->have_posts() ) {
					$i = 1;
					$step = 1;
				    while ( $the_query->have_posts() ) {
							$the_query->the_post();
							if ($i == $step) {
				        echo '<li><a href="'.get_the_permalink().'">' . get_the_title() . '</a></li>';
								$step = $step + $i;
							}
							$i++;
				    }
				}
				wp_reset_query();

		    ?>
		</ul>
	</div> <!-- .entry-content -->

		<?php
		/**
		 * generate_after_entry_content hook.
		 *
		 * @since 0.1
		 *
		 * @hooked generate_footer_meta - 10
		 */
		do_action( 'generate_after_entry_content' );

		/**
		 * generate_after_content hook.
		 *
		 * @since 0.1
		 */
		do_action( 'generate_after_content' );
		?>
	</div>
</article>
