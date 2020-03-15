<?php echo 'zhengban QQ:3383288270';exit;?>
<!--{template common/header}-->
<!-- header start -->
<header class="header">
    <div class="nav">
   	 	<a href="forum.php?forumlist=1" class="z wubianfont iconback fznav grey"></a>
		<span class="category">
			<!--{if $subexists && $_G['page'] == 1}-->
			<span class="display name vm" href="#subname_list">
				<h2 class="tit"><!--{eval echo strip_tags($_G['forum']['name']) ? strip_tags($_G['forum']['name']) : $_G['forum']['name'];}--></h2>
				<img src="{STATICURL}image/mobile/images/icon_arrow_down.png">
			</span>
			<div id="subname_list" class="subname_list" display="true" style="display:none;">
				<ul>
				<!--{loop $sublist $sub}-->
				<li>
					<a href="forum.php?mod=forumdisplay&fid={$sub[fid]}">{$sub['name']}</a>
				</li>
				<!--{/loop}-->
				</ul>
			</div>
			<!--{else}-->
			<span class="name">
				<!--{eval echo strip_tags($_G['forum']['name']) ? strip_tags($_G['forum']['name']) : $_G['forum']['name'];}-->
			</span>
			<!--{/if}-->
		</span>
		<div class="icon_edit y"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]" title="{lang send_threads}"><span class="wubianfont iconwrite fznav grey"></span></a></div>
    </div>
</header>
<!-- header end -->

<!--{hook/forumdisplay_top_mobile}-->
<!-- main threadlist start -->
<!--{if !$subforumonly}-->
<div class="threadlist">
	<ul>
	<!--{if $_G['forum_threadcount']}-->
		<!--{loop $_G['forum_threadlist'] $key $thread}-->
			<!--{if !$_G['setting']['mobile']['mobiledisplayorder3'] && $thread['displayorder'] > 0}-->
				{eval continue;}
			<!--{/if}-->
			<!--{if $thread['displayorder'] > 0 && !$displayorder_thread}-->
				{eval $displayorder_thread = 1;}
		    <!--{/if}-->
			<!--{if $thread['moved']}-->
				<!--{eval $thread[tid]=$thread[closed];}-->
			<!--{/if}-->
			<li>
				<!--{hook/forumdisplay_thread_mobile $key}-->
		        <a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra">
				<span $thread[highlight]>{$thread[subject]}</span>
				<!--{if in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
					<span class="icon icon_ding">&#32622;&#39030;</span>
				<!--{elseif $thread['digest'] > 0}-->
					<span class="icon icon_jing">&#31934;&#21326;</span>
				<!--{elseif $thread['attachment'] == 2 && $_G['setting']['mobile']['mobilesimpletype'] == 0}-->
					<span class="icon icon_tu">&#22270;&#29255;</span>
				<!--{/if}-->
				<span class="by">$thread[author]</span>
				<span class="num wubianfont iconcomment">{$thread[replies]}</span>
				</a>
			</li>
		<!--{/loop}-->
    <!--{else}-->
		<li class="b_p mtw mbw hm grey">{lang forum_nothreads}</li>
	<!--{/if}-->
	</ul>
</div>
$multipage
<!--{/if}-->
<!-- main threadlist end -->
<!--{hook/forumdisplay_bottom_mobile}-->
<div class="pullrefresh" style="display:none;"></div>
<!--{template common/footer}-->


