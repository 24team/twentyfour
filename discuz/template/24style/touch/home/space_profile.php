<?php echo 'zhengban QQ:3383288270';exit;?>
<!--
	[Zheng Ban URL]
	https://addon.dismall.com/?@wubian
-->
<!--{if $_GET['mycenter'] && !$_G['uid']}-->
	<!--{eval dheader('Location:member.php?mod=logging&action=login');exit;}-->
<!--{/if}-->

<!--{template common/header}-->

<!--{if !$_GET['mycenter']}-->
	
	<!-- header start -->
	<header class="header">
	    <div class="nav">
			<a href="javascript:;" onclick="history.go(-1);" class="z wubianfont iconback fznav grey"></a>
			<span><!--{if $_G['uid'] == $space['uid']}-->{lang myprofile}<!--{else}-->$space[username]{lang otherprofile}<!--{/if}--></span>
			<a href="forum.php" class="y wubianfont iconhomepage fznav grey"></a>
	    </div>
	</header>
	<!-- header end -->
	<!-- userinfo start -->
	<div class="userinfo">
		<div class="user_avatar">
			<div class="avatar_m"><span><img src="<!--{avatar($space[uid], big, true)}-->" /></span></div>
			<h2 class="name">$space[username]</h2>
		</div>
		<div class="user_box">
			<ul>
				<li><span>$space[credits]</span>{lang credits}</li>
				<!--{loop $_G[setting][extcredits] $key $value}-->
				<!--{if $value[title]}-->
				<li><span>{$space["extcredits$key"]} $value[unit]</span>$value[title]</li>
				<!--{/if}-->
				<!--{/loop}-->
			</ul>
		</div>
	</div>
	<!-- userinfo end -->
	<!--{if $space['uid'] == $_G['uid']}-->
	<div class="btn_exit">
		<a href="member.php?mod=logging&action=logout&formhash={FORMHASH}" class="wb_lore">{lang logout_mobile}</a>
	</div>
	<!--{/if}-->

<!--{else}-->
	
	<!-- header start -->
	<!--{if $_G['setting']['domain']['app']['mobile']}-->
		{eval $nav = $_G['scheme'].'://'.$_G['setting']['domain']['app']['mobile'];}
	<!--{else}-->
		{eval $nav = "forum.php";}
	<!--{/if}-->
	<!-- header end -->
	<!-- userinfo start -->
	<div class="userinfo">
		<div class="user_avatar">
			<div class="avatar_m"><span><img src="<!--{avatar($_G[uid], big, true)}-->" /></span></div>
			<h2 class="name">$_G[username]</h2>
		</div>
		<div class="myinfo_list cl">
			<ul>
				<li><a href="home.php?mod=space&uid={$_G[uid]}&do=favorite&view=me&type=thread">{lang myfavorite}</a></li>
				<li><a href="home.php?mod=space&uid={$_G[uid]}&do=thread&view=me">{lang mythread}</a></li>
				<li><a href="home.php?mod=space&do=pm">{lang mypm}<!--{if $_G[member][newpm]}--><i class="wubianfont icondian rq"></i><!--{/if}--></a></li>
				<li><a href="home.php?mod=space&uid={$_G[uid]}&do=profile">{lang myprofile}</a></li>
			</ul>
		</div>
	</div>
	<!-- userinfo end -->
	<!--{if $_G['setting']['mobile']['mobilehotthread']}-->
	<div class="footernav4">
	<ul>
		<li><a href="forum.php" class="wubianfont iconhomepage"><span>{lang homepage}</span></a></li>
	    <li><a href="forum.php?forumlist=1&mobile=2" class="wubianfont iconmanage"><span>&#31038;&#21306;</span></a></li>
	    <li><a href="search.php?mod=forum&mobile=2" class="wubianfont iconsearch"><span>{lang search}</span></a></li>
	    <li class="a"><a href="{if $_G[uid]}home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1{else}member.php?mod=logging&action=login{/if}" class="wubianfont iconpeoplefill"><span>{if $_G[uid]}{lang myitem}{else}{lang login}{/if}</span><!--{if $_G[member][newpm]}--><i class="wubianfont icondian"></i><!--{/if}--></a></li>
	</ul>
	</div>
	<!--{else}-->
	<div class="footernav3">
	<ul>
	    <li><a href="forum.php?forumlist=1&mobile=2" class="wubianfont iconhomepage"><span>{lang homepage}</span></a></li>
	    <li><a href="search.php?mod=forum&mobile=2" class="wubianfont iconsearch"><span>{lang search}</span></a></li>
	    <li class="a"><a href="{if $_G[uid]}home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1{else}member.php?mod=logging&action=login{/if}" class="wubianfont iconpeoplefill"><span>{if $_G[uid]}{lang myitem}{else}{lang login}{/if}</span><!--{if $_G[member][newpm]}--><i class="wubianfont icondian"></i><!--{/if}--></a></li>
	</ul>
	</div>
	<!--{/if}-->

<!--{/if}-->


<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->
