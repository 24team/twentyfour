<?php echo 'zhengban QQ:3383288270';exit;?>
<!--
	[Zheng Ban URL]
	https://addon.dismall.com/?@wubian
-->
<!--{template common/header}-->
<!-- header start -->
<!--{if $_G['setting']['domain']['app']['mobile']}-->
	{eval $nav = $_G['scheme'].'://'.$_G['setting']['domain']['app']['mobile'];}
<!--{else}-->
	{eval $nav = "forum.php";}
<!--{/if}-->
<!-- header end -->
<!-- main threadlist start -->
<div class="topnav">
	<a href="$nav" class="blue">$_G['setting']['sitename']</a>
</div>
<div class="threadlist">
<!--{loop $data $key $list}-->
	<!--{subtemplate forum/guide_list_row}-->
<!--{/loop}-->
</div>
<!-- main threadlist end -->

$multipage

<div class="pullrefresh" style="display:none;"></div>

<div class="footernav4">
<ul>
	<li class="a"><a href="forum.php" class="wubianfont iconhomepage_fill"><span>{lang homepage}</span></a></li>
    <li><a href="forum.php?forumlist=1&mobile=2" class="wubianfont iconmanage"><span>&#31038;&#21306;</span></a></li>
    <li><a href="search.php?mod=forum&mobile=2" class="wubianfont iconsearch"><span>{lang search}</span></a></li>
    <li><a href="{if $_G[uid]}home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1{else}member.php?mod=logging&action=login{/if}" class="wubianfont iconpeople"><span>{if $_G[uid]}{lang myitem}{else}{lang login}{/if}</span><!--{if $_G[member][newpm]}--><i class="wubianfont icondian"></i><!--{/if}--></a></li>
</ul>
</div>

<!--
	[Zheng Ban]
	https://addon.dismall.com/?@wubian
-->
<!--{template common/footer}-->
