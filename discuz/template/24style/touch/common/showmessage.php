<?php echo 'zhengban QQ:3383288270';exit;?>
<!--
	[Zheng Ban URL]
	https://addon.dismall.com/?@wubian
-->
<!--{if $param['login']}-->
	<!--{if $_G['inajax']}-->
	<!--{eval dheader('Location:member.php?mod=logging&action=login&inajax=1&infloat=1');exit;}-->
	<!--{else}-->
	<!--{eval dheader('Location:member.php?mod=logging&action=login');exit;}-->
	<!--{/if}-->
<!--{/if}-->
<!--{template common/header}-->

<!--{if $_G['inajax']}-->

	<div class="tip">
		<dt id="messagetext">
			<p>$show_message</p>
	        <!--{if $_G['forcemobilemessage']}-->
	        	<p >
	            	<a href="{$_G['setting']['mobile']['pageurl']}" class="mtn">{lang continue}</a><br />
	                <a href="javascript:history.back();">{lang goback}</a>
	            </p>
	        <!--{/if}-->
			<!--{if $url_forward && !$_GET['loc']}-->
				<!--<p><a class="grey" href="$url_forward">{lang message_forward_mobile}</a></p>-->
				<script type="text/javascript">
					setTimeout(function() {
						window.location.href = '$url_forward';
					}, '2000');
				</script>
			<!--{elseif $allowreturn}-->
				<p><input type="button" class="button" onclick="popup.close();" value="{lang close}"></p>
			<!--{/if}-->
		</dt>
	</div>

<!--{else}-->
	
	<!-- header start -->
	<!--{if $_G['setting']['domain']['app']['mobile']}-->
		{eval $nav = $_G['scheme'].'://'.$_G['setting']['domain']['app']['mobile'];}
	<!--{else}-->
		{eval $nav = "forum.php";}
	<!--{/if}-->
	<!-- header end -->
	<!-- main jump start -->
	<div class="jump_c">
		<p>$show_message</p>
	    <!--{if $_G['forcemobilemessage']}-->
			<p>
	            <a href="{$_G['setting']['mobile']['pageurl']}" class="mtn">{lang continue}</a><br />
	            <a href="javascript:history.back();">{lang goback}</a>
	        </p>
	    <!--{/if}-->
		<!--{if $url_forward}-->
			<p><a class="grey" href="$url_forward">{lang message_forward_mobile}</a></p>
		<!--{elseif $allowreturn}-->
			<p><a class="grey" href="javascript:history.back();">{lang message_go_back}</a></p>
		<!--{/if}-->
	</div>
	<!-- main jump end -->
	
	<!--{if $_G['setting']['mobile']['mobilehotthread']}-->
	<div class="footernav4">
	<ul>
		<li><a href="forum.php" class="wubianfont iconhomepage"><span>{lang homepage}</span></a></li>
	    <li><a href="forum.php?forumlist=1&mobile=2" class="wubianfont iconmanage"><span>&#31038;&#21306;</span></a></li>
	    <li><a href="search.php?mod=forum&mobile=2" class="wubianfont iconsearch"><span>{lang search}</span></a></li>
	    <li><a href="{if $_G[uid]}home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1{else}member.php?mod=logging&action=login{/if}" class="wubianfont iconpeople"><span>{if $_G[uid]}{lang myitem}{else}{lang login}{/if}</span></a></li>
	</ul>
	</div>
	<!--{else}-->
	<div class="footernav3">
	<ul>
	    <li><a href="forum.php?forumlist=1&mobile=2" class="wubianfont iconhomepage"><span>{lang homepage}</span></a></li>
	    <li><a href="search.php?mod=forum&mobile=2" class="wubianfont iconsearch"><span>{lang search}</span></a></li>
	    <li><a href="{if $_G[uid]}home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1{else}member.php?mod=logging&action=login{/if}" class="wubianfont iconpeople"><span>{if $_G[uid]}{lang myitem}{else}{lang login}{/if}</span></a></li>
	</ul>
	</div>
	<!--{/if}-->


<!--{/if}-->

<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->
