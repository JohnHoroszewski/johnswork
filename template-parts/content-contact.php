<?php
/**
 * Template part for displaying page content in contact.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Johns_Work
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="contact-me">
		<div class="container">
			<section class="links">
				<div class="connect">
					<h3>Connect with Me @</h3>
				</div>
				<div class="find-me">
					<h3>Find Me @</h3>
				</div>
			</section>
			<section class="contact-form">
				<?php $contact = get_field('contact_form');
						echo do_shortcode($contact);
				?>
			</section>
		</div>
	</section>

	<hr class="divider">

	<section class="address">
		<div class="container">
			<section class="my-info">
				<h3>Where I Live</h3>
				<span class="address">
					<?php the_field('street_address'); ?>
				</span>
				<span class="address">
					<?php the_field('city'); ?>
				</span>
				<span class="address">
					<?php the_field('state'); ?>
				</span>
				<span class="address">
					<?php the_field('zip_code'); ?>
				</span>
				<span class="address">
					<script type="text/javascript">
						//OBFUS Ph.No.
					//<![CDATA[
					<!--
						var x="function f(x){var i,o=\"\",l=x.length;for(i=0;i<l;i+=2) {if(i+1<l)o+=" +
							"x.charAt(i+1);try{o+=x.charAt(i);}catch(e){}}return o;}f(\"ufcnitnof x({)av" +
							" r,i=o\\\"\\\"o,=l.xelgnhtl,o=;lhwli(e.xhcraoCedtAl(1/)3=!88{)rt{y+xx=l;=+;" +
							"lc}tahce({)}}of(r=i-l;1>i0=i;--{)+ox=c.ahAr(t)i};erutnro s.buts(r,0lo;)f}\\" +
							"\"(9),6\\\"\\\\\\\\\\\\\\\\\\\\^VAMPPoXksijkw`k}t?:%7=9c9%8$/$=!)\\\"\\\\f(" +
							";} ornture;}))++(y)^(iAtdeCoarchx.e(odrChamCro.fngriSt+=;o27=1y%2;*=)yy)9+(" +
							"6i>f({i+)i+l;i<0;i=r(foh;gten.l=x,l\\\"\\\\\\\"\\\\o=i,r va){,y(x fontincfu" +
							")\\\"\")"                                                                    ;
						while(x=eval(x));
					//-->
					//]]>
					</script>
				</span>
			</section>

			<section class="gmap">
				<div class="map-wrapper">
					<?php the_field('google_map'); ?>
				</div>
			</section>
		</div>
	</section>

</article><!-- #post-## -->
