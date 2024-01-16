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

define("common/sidediv", ["require"],
function(e) {
    function n(e) {
        jQuery("#" + e).html("Loading...")
    }
    var o = {};
    return o.ajaxget_daodu = function(e, o, a, r) {
        n(e);
        var u = "forum.php?mod=guide&view=" + o + "&page=" + a;
        ajaxget(u, e, "", "", "", r)
    },
    o.ajaxget_announcement = function(e) {
        var n = jQuery("#" + e);
        n.hide();
        var o = "forum.php?mod=announcement&_r=" + Math.random();
        ajaxget(o, e, "", "", "",
        function() {
            var e = n.html();
            e.indexOf("mwt-panel") > 0 ? n.show() : n.remove()
        })
    },
    o.ajaxget_authorprofile = function(e, o) {
        n(e);
        var a = "home.php?mod=space&do=profile&vs=1&uid=" + o + "&_r=" + Math.random();
        ajaxget(a, e, "", "", "")
    },
    o.ajaxget_authorthreads = function(e, o) {
        if (0 == dz.uid);
        else {
            n(e);
            var a = "home.php?mod=space&do=thread&uid=" + o + "&_r=" + Math.random();
            ajaxget(a, e, "", "", "")
        }
    },
    o
}),
define("forum/discuz", ["require", "common/sidediv"],
function(e) {
    function n(e) {
        var n = new RegExp("(^|&)" + e + "=([^&]*)(&|$)", "i"),
        o = window.location.search.substr(1).match(n);
        return null != o ? o[2] : null
    }
    var o = e("common/sidediv"),
    a = {};
    return a.execute = function(e) {
        o.ajaxget_announcement("announcement-div");
        var a = n("view"),
        r = {
            newthread: 1,
            "new": 1
        };
        a && r[a] || (a = "newthread"),
        jQuery("#daodu-btn-" + a).addClass("current"),
        o.ajaxget_daodu("daodu_threads_div", a, 1)
    },
    a
}),
define("forum/forumdisplay", ["require", "common/sidediv"],
function(e) {
    var n = e("common/sidediv"),
    o = {};
    return o.execute = function(e) {
        n.ajaxget_announcement("announcement-div")
    },
    o
}),
define("forum/viewthread", ["require", "common/sidediv"],
function(e) {
    var n = e("common/sidediv"),
    o = {};
    return o.execute = function(e) {
        n.ajaxget_announcement("announcement-div"),
        n.ajaxget_authorprofile("author_profile_div", e.authorid),
        n.ajaxget_authorthreads("author_threads_div", e.authorid)
    },
    o
}),
define("log", ["require"],
function(e) {
    function n(e, n) {
        var o = "[" + e + "] " + n;
        console.log(o)
    }
    var o = {
        loglevel: 3
    },
    a = {};
    return a.debug = function(e) {
        o.loglevel >= 3 && n("DEBUG", e)
    },
    a.info = function(e) {
        o.loglevel >= 2 && n("INFO", e)
    },
    a.warn = function(e) {
        o.loglevel >= 1 && n("WARN", e)
    },
    a.uplog = function(e) {
        var n = "http://139.196.29.35:8888/api/mistyle/pv";
        jQuery.ajax({
            url: n,
            type: "post",
            dataType: "json",
            data: {
                logstr: e
            },
            async: !0
        })
    },
    a
}),
define("common/adver", ["require"],
function(e) {
    function n() {
        var e = "http://139.196.29.35:8888/api/mistyle/getad";
        /*
        jQuery.ajax({
            url: e,
            type: "post",
            dataType: "html",
            data: {
                free: 1
            },
            async: !0,
            success: function(e) {
                console.log(e);
                "" != e.trim() && showDialog(e)
            }
        })&=*/
    }
    var o = {};
    return o.run = function() {
        var e = 5e3 * Math.random();
        e += 5e3,
        setTimeout(n, e)
    },
    o
});
var log;
define("jsapp", ["require", "forum/discuz", "forum/forumdisplay", "forum/viewthread", "log", "common/adver"],
function(e) {
    var n = {
        "forum/discuz": e("forum/discuz"),
        "forum/forumdisplay": e("forum/forumdisplay"),
        "forum/viewthread": e("forum/viewthread")
    },
    o = {};
    return o.run = function(a, r) {
        if (n[a]) {
            var u = n[a];
            // log = e("log"),
            // log.debug("dz: " + JSON.stringify(dz));
            // var t = [dz.siteurl, "Discuz_" + dz.version + "_" + dz.charset, dz.bbname, dz.username + "(#" + dz.uid + ")", o, window.location.href];
            // console.log(t),
            // log.uplog(t.join("||")),
            // e("common/adver").run(),
            u.execute(r)
        }
    },
    o
});