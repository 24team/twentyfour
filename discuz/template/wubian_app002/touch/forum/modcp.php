<?php echo 'zhengban QQ:3383288270';exit;?>
<!--
    [Zheng Ban URL]
    https://addon.dismall.com/?@wubian
-->
<!--{template common/header}-->
<!--{if $script == 'noperm'}-->
    <div class="bm bw0">
        <h1 class="mt">{lang mod_option_error}</h1>
        <p>{lang mod_error_invalid}</p>
        <p class="notice">{lang mod_notice}</p>
    </div>
<!--{elseif !empty($modtpl)}-->
	<!--{if in_array($script, array('member', 'login'))}-->
    	<!--{eval include(template($modtpl));}-->
    <!--{else}-->
    	<div class="box ban pbn">
    		{lang admin_threadtopicadmin_error}
        </div>
    <!--{/if}-->
<!--{/if}-->

<!--
    [Zheng Ban]
    https://addon.dismall.com/?@wubian
-->
<!--{template common/footer}-->
