<?php echo 'zhengban QQ:3383288270';exit;?>
<!--
	[Zheng Ban URL]
	https://addon.dismall.com/?@wubian
-->
<!--{template common/header}-->
<!-- header start -->
<header class="header">
    <div class="nav">
		<a href="home.php?mod=space&uid={$_G[uid]}&do=profile&mycenter=1" class="z wubianfont iconback fznav grey"></a>
		<!--{if $_GET['type'] == 'forum'}-->
		<span class="category">
			<span class="display name vm" href="#subname_list">
				<h2 class="tit">{lang favforum}</h2>
				<img src="{STATICURL}image/mobile/images/icon_arrow_down.png" />
			</span>
	        <div id="subname_list" class="subname_list" display="true">
				<ul>
				<li><a href="home.php?mod=space&uid={$_G[uid]}&do=favorite&view=me&type=thread">{lang favthread}</a></li>
				</ul>
	        </div>
		</span>
		<!--{else}-->
		<span class="category">
			<span class="display name vm" href="#subname_list">
				<h2 class="tit">{lang favthread}</h2>
				<img src="{STATICURL}image/mobile/images/icon_arrow_down.png" />
			</span>
	        <div id="subname_list" class="subname_list" display="true">
				<ul>
				<li><a href="home.php?mod=space&uid={$_G[uid]}&do=favorite&view=me&type=forum">{lang favforum}</a></li>
				</ul>
	        </div>
		</span>
		<!--{/if}-->
		<a href="forum.php" class="y wubianfont iconhomepage fznav grey"></a>
    </div>
</header>

<!-- main collectlist start -->
<!--{if $_GET['type'] == 'forum'}-->
<div class="coll_list b_radius">
	<ul>
		<!--{if $list}-->
			<!--{loop $list $k $value}-->
			<li><a href="$value[url]">$value[title]</a></li>
			<!--{/loop}-->
		<!--{else}-->
		<li>{lang no_favorite_yet}</li>
		<!--{/if}-->

	</ul>
</div>
<!--{else}-->
<div class="threadlist">
	<ul>
		<!--{if $list}-->
			<!--{loop $list $k $value}-->
			<li><a href="$value[url]">$value[title]</a></li>
			<!--{/loop}-->
		<!--{else}-->
		<li>{lang no_favorite_yet}</li>
		<!--{/if}-->
	</ul>
</div>
<!--{/if}-->
<!-- main collectlist end -->
$multi

<!--
	[ Zheng Ban URL]
	https://addon.dismall.com/?@wubian
-->
<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->
