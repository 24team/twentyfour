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
<form id="searchform" class="searchform" method="post" autocomplete="off" action="search.php?mod=forum&mobile=2">
<input type="hidden" name="formhash" value="{FORMHASH}" />

<!--{subtemplate search/pubsearch}-->

<!--{eval $policymsgs = $p = '';}-->
<!--{loop $_G['setting']['creditspolicy']['search'] $id $policy}-->
<!--{block policymsg}--><!--{if $_G['setting']['extcredits'][$id][img]}-->$_G['setting']['extcredits'][$id][img] <!--{/if}-->$_G['setting']['extcredits'][$id][title] $policy $_G['setting']['extcredits'][$id][unit]<!--{/block}-->
<!--{eval $policymsgs .= $p.$policymsg;$p = ', ';}-->
<!--{/loop}-->
<!--{if $policymsgs}--><p>{lang search_credit_msg}</p><!--{/if}-->
</form>

<!--{if !empty($searchid) && submitcheck('searchsubmit', 1)}-->
	<!--{subtemplate search/thread_list}-->
<!--{/if}-->

<!--{if $_G['setting']['mobile']['mobilehotthread']}-->
<div class="footernav4">
<ul>
	<li><a href="forum.php" class="wubianfont iconhomepage"><span>{lang homepage}</span></a></li>
    <li><a href="forum.php?forumlist=1&mobile=2" class="wubianfont iconmanage"><span>&#31038;&#21306;</span></a></li>
    <li class="a"><a href="search.php?mod=forum&mobile=2" class="wubianfont iconsearchfill"><span>{lang search}</span></a></li>
    <li><a href="{if $_G[uid]}home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1{else}member.php?mod=logging&action=login{/if}" class="wubianfont iconpeople"><span>{if $_G[uid]}{lang myitem}{else}{lang login}{/if}</span><!--{if $_G[member][newpm]}--><i class="wubianfont icondian"></i><!--{/if}--></a></li>
</ul>
</div>
<!--{else}-->
<div class="footernav3">
<ul>
    <li><a href="forum.php?forumlist=1&mobile=2" class="wubianfont iconhomepage"><span>{lang homepage}</span></a></li>
    <li class="a"><a href="search.php?mod=forum&mobile=2" class="wubianfont iconsearchfill"><span>{lang search}</span></a></li>
    <li><a href="{if $_G[uid]}home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1{else}member.php?mod=logging&action=login{/if}" class="wubianfont iconpeople"><span>{if $_G[uid]}{lang myitem}{else}{lang login}{/if}</span><!--{if $_G[member][newpm]}--><i class="wubianfont icondian"></i><!--{/if}--></a></li>
</ul>
</div>
<!--{/if}-->

<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->
