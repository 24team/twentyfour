function show_user_space_card(e, n) {
    var o = "card_user_" + n,
        a = document.getElementById(o);
    if (a) showMenu({
        ctrlid: e,
        menuid: o,
        pos: "23"
    });
    else {
        var r = document.createElement("div");
        r.id = o,
            r.className = "p_pop card",
            document.body.appendChild(r);
        var u = "home.php?mod=space&uid=" + n + "&inajax=1";
        ajaxget(u, o, null, "", "",
            function() {
                showMenu({
                    ctrlid: e,
                    menuid: o,
                    pos: "23"
                })
            })
    }
}

function daodu_n(e) {
    jQuery("#" + e).html("Loading...")
}

//一些功能函数
var ajaxget_daodu = function(e, o, a, r) {
    daodu_n(e);
    var u = "forum.php?mod=guide&view=" + o + "&page=" + a;
    ajaxget(u, e, "", "", "", r)
};

var ajaxget_announcement = function(e) {
    var n = jQuery("#" + e);
    n.hide();
    var o = "forum.php?mod=announcement&_r=" + Math.random();
    ajaxget(o, e, "", "", "",
        function() {
            var e = n.html();
            e.indexOf("mwt-panel") > 0 ? n.show() : n.remove()
        })
};

var ajaxget_authorprofile = function(e, o) {
    daodu_n(e);
    var a = "home.php?mod=space&do=profile&vs=1&uid=" + o + "&_r=" + Math.random();
    ajaxget(a, e, "", "", "")
};

var ajaxget_authorthreads = function(e, o) {
    if (0 == dz.uid);
    else {
        daodu_n(e);
        var a = "home.php?mod=space&do=thread&uid=" + o + "&_r=" + Math.random();
        ajaxget(a, e, "", "", "")
    }
};

function discuz_n(e) {
    var n = new RegExp("(^|&)" + e + "=([^&]*)(&|$)", "i"),
        o = window.location.search.substr(1).match(n);
    return null != o ? o[2] : null
}

function discuz(e) {
    ajaxget_announcement("announcement-div");
    var a = discuz_n("view"),
        r = {
            newthread: 1,
            "new": 1
        };
    a && r[a] || (a = "newthread"),
        jQuery("#daodu-btn-" + a).addClass("current"),
        ajaxget_daodu("daodu_threads_div", a, 1)
}

function viewthread(e) {
    ajaxget_announcement("announcement-div");
    ajaxget_authorprofile("author_profile_div", e.authorid);
    ajaxget_authorthreads("author_threads_div", e.authorid);
}

function forumdisplay(e) {
    ajaxget_announcement("announcement-div");
}





