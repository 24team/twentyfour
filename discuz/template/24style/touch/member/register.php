<?php echo 'zhengban QQ:3383288270';exit;?>
<!--
	[Zheng Ban URL]
	https://addon.dismall.com/?@wubian
-->
<!--{template common/header}-->
<!-- header start -->
<header class="header">
    <div class="nav">
        <a href="javascript:;" onclick="history.go(-1)" class="z wubianfont iconback fznav grey"></a>
		<span>{lang register}</span>
		<a href="forum.php" class="y wubianfont iconhomepage fznav grey"></a>
    </div>
</header>
<!-- header end -->
<!-- registerbox start -->
<div class="loginbox registerbox">
	<div class="login_from">
		<form method="post" autocomplete="off" name="register" id="registerform" action="member.php?mod={$_G[setting][regname]}&mobile=2">
		<input type="hidden" name="regsubmit" value="yes" />
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<!--{eval $dreferer = str_replace('&amp;', '&', dreferer());}-->
		<input type="hidden" name="referer" value="$dreferer" />
		<input type="hidden" name="activationauth" value="{if $_GET[action] == 'activation'}$activationauth{/if}" />
		<input type="hidden" name="agreebbrule" value="$bbrulehash" id="agreebbrule" checked="checked" />
		<!--{if $_G['setting']['sendregisterurl']}-->
			<input type="hidden" name="hash" value="$_GET[hash]" />
		<!--{/if}-->
		<ul>
			<!--{if $sendurl}-->
				<li class="bl_none"><input type="email" tabindex="1" class="wb_input" size="30" autocomplete="off" value="" name="{$_G['setting']['reginput']['email']}" placeholder="{lang registeremail}" fwin="login"></li>
			<!--{else}-->
				<!--{if empty($invite) && $_G['setting']['regstatus'] == 2 && !$invitestatus}-->
					<li><input type="text" tabindex="1" class="wb_input" size="30" autocomplete="off" value="{lang invite_code}" name="invitecode" placeholder="{lang invite_code}" fwin="login"></li>
				<!--{/if}-->
				<li><input type="text" tabindex="2" class="wb_input" size="30" autocomplete="off" value="" name="{$_G['setting']['reginput']['username']}" placeholder="{lang registerinputtip}" fwin="login"></li>
				<li><input type="password" tabindex="3" class="wb_input" size="30" value="" name="{$_G['setting']['reginput']['password']}" placeholder="{lang login_password}" fwin="login"></li>
				<li><input type="password" tabindex="4" class="wb_input" size="30" value="" name="{$_G['setting']['reginput']['password2']}" placeholder="{lang registerpassword2}" fwin="login"></li>
				<li><input type="email" tabindex="5" class="wb_input" size="30" autocomplete="off" value="$hash[0]" name="{$_G['setting']['reginput']['email']}" placeholder="{lang registeremail}" fwin="login"></li>
				<!--{if $_G['setting']['regverify'] == 2}-->
					<li><input type="text" tabindex="6" class="wb_input" size="30" autocomplete="off" value="" name="regmessage" placeholder="{lang register_message}" fwin="login"></li>
				<!--{/if}-->
				<!--{if empty($invite) && $_G['setting']['regstatus'] == 3}-->
					<li><input type="text" tabindex="7" class="wb_input" size="30" autocomplete="off" value="" name="invitecode" placeholder="{lang invite_code}" fwin="login"></li>
				<!--{/if}-->
				<!--{loop $_G['cache']['fields_register'] $field}-->
					<!--{if $htmls[$field['fieldid']]}-->
						<li><strong>$field[title]</strong><br />$htmls[$field['fieldid']]</li>	
					<!--{/if}-->
				<!--{/loop}-->
			<!--{/if}-->
		</ul>
		<!--{if $secqaacheck || $seccodecheck}-->
			<!--{subtemplate common/seccheck}-->
		<!--{/if}-->
	</div>
	<div class="btn_register">
		<button tabindex="7" value="true" name="regsubmit" type="submit" class="formdialog wb_lore"><span>{lang quickregister}</span></button>
	</div>
	</form>
</div>
<!-- registerbox end -->

<!--{eval updatesession();}-->


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

<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->
