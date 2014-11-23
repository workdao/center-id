<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Blank
 */

$cc_link = '<a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons СС-BY-SA 3.0</a>';
$tst = __("Teplitsa of social technologies - crowdsourcing, technologies for the charity", "tst");?>

<div id="bottombar" class="widget-area page-bottom small">

	<div class="row">
	
		<div class="col-md-4">
			<div class="fb-widget">
			<?php dynamic_sidebar('footer_one-sidebar');?>
			</div>
		</div>		
	
		<div class="col-md-4" align="center">

            <?php
				if( !is_page('contacts') ) {
					get_template_part('contact', 'form');
				}
				else {
					echo '&nbsp;';
				}
			?>
				
		</div><!-- col-md-4 -->
		
		<div class="col-md-4">
			<div class="te-st"  align="center"><br />
 <a href="http://45.lc" target="_blank">
			<img  align="center" src="http://center-id.ru/wp-content/uploads/2014/11/minilogos.png" alt="Живая Команда">
</a> <a href="http://te-st.ru" target="_blank">
			<img  align="center" src="<?php echo get_template_directory_uri().'/img/tst-banner.png';?>" alt="<?php echo $tst;?>">

			</a><br/>
<hr />
</div>

</div>


		</div>
	</div>

</div>

</div><!-- .page-decor -->
</div><!-- .contaner -->
</div><!-- #page -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="copy">
					<!-- <a href="<?php home_url();?>"><?php bloginfo('name');?></a>-->
					<?php printf(__('All materials of the site are avaliabe under license %s', 'tst'), $cc_link);?>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="rss-link pull-right footer-rss">

<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=27172739&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/27172739/1_0_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" onclick="try{Ya.Metrika.informer({i:this,id:27172739,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter27172739 = new Ya.Metrika({id:27172739,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/27172739" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<a href="<?php echo site_url('/feed/')?>" target="_blank" title="RSS">
				<img src="<?php echo get_template_directory_uri().'/img/rss.png';?>" alt="RSS" width="16">
				</a></div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>