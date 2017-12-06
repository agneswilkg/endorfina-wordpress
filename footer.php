<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package endorfina
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="wrapper">


            <ul>
                <li>Studio Ruchu i Tańca</li>
                <li>Endorfina</li>
            </ul>

            <ul>
                <li>Adres</li>
                <li>ul. Plac Pod Lipami 1</li>
                <li>Katowice-Giszowiec</li>
            </ul>

            <ul>
                <li>Kontakt</li>
                <li>Telefon: 731-331-200</li>
                <li>e-Mail: mail.mail@mail.pl</li>
            </ul>
            
                        <ul>
                <li><img src="<?php echo(get_template_directory_uri()); ?>/images/small-white-logo.png" heigth='50%'></li>
            </ul>
		</div><!-- .wrapper -->
	</footer><!-- footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
