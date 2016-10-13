				<footer>
					<div id="footer">
					    <a class="cd-top visible-lg"></a>
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 text-center">
									<p class="kratos-social-icons">
									<?php echo (!kratos_option('social_weibo')) ? '' : '<a target="_blank" rel="nofollow" href="' . kratos_option('social_weibo') . '"><i class="fa fa-weibo"></i></a>'; ?>
									<?php echo (!kratos_option('social_tweibo')) ? '' : '<a target="_blank" rel="nofollow" href="' . kratos_option('social_tweibo') . '"><i class="fa fa-tencent-weibo"></i></a>'; ?>
									<?php echo (!kratos_option('social_twitter')) ? '' : '<a target="_blank" rel="nofollow" href="' . kratos_option('social_twitter') . '"><i class="fa fa-twitter"></i></a>'; ?>
									<?php echo (!kratos_option('social_facebook')) ? '' : '<a target="_blank" rel="nofollow" href="' . kratos_option('social_facebook') . '"><i class="fa fa-facebook-official"></i></a>'; ?>
									<?php echo (!kratos_option('social_linkedin')) ? '' : '<a target="_blank" rel="nofollow" href="' . kratos_option('social_linkedin') . '"><i class="fa fa-linkedin-square"></i></a>'; ?>
									<?php echo (!kratos_option('social_github')) ? '' : '<a target="_blank" rel="nofollow" href="' . kratos_option('social_github') . '"><i class="fa fa-github"></i></a>'; ?>

<p><span class="smalltxt"><SCRIPT language=javascript><!--
BirthDay=new Date("Octobe 5,2016");
today=new Date();
timeold=(today.getTime()-BirthDay.getTime());
sectimeold=timeold/1000
secondsold=Math.floor(sectimeold);
msPerDay=24*60*60*1000
e_daysold=timeold/msPerDay
daysold=Math.floor(e_daysold);
document.write("Vasilis's Blog 已萌萌哒运行了<font color=red>"+daysold+"</font>天 !");
//-->
</SCRIPT> <span class="my-face">(●'◡'●)ﾉ♥</span></span></P>
									<p>Cop	yright 2016 <a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>. All Rights Reserved.Theme: <a href="https://github.com/vtrois/kratos" target="_blank" rel="nofollow">Kratos</a> made by <a href="http://www.aiwangxu.top/" target="_blank" rel="nofollow">Vasilis</a><br><a href="http://www.miitbeian.gov.cn/" rel="external nofollow" target="_blank"><?php echo get_option( 'zh_cn_l10n_icp_num' );?></a><?php echo (!kratos_option('site_tongji')) ? '' : '<script ' . kratos_option('site_tongji') . '</script>'; ?></p>
								



</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>

		<?php wp_footer();?>
	</body>
</html>

<!--[amazeui 引用|!(JS)]><!-->
<script src="/wp-content/themes/Kratos-master/assets/js/amazeui.min.js"></script>
<!--<![endif]-->
<!--[菜单样式引用|!(JS)]><!-->

<script src="/wp-content/themes/Kratos-master/js/plus/anchorHoverEffect.js"></script>




