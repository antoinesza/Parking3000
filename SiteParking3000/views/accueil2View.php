<?php
        require "headerView.php";
    
?>
<!doctype html>
<html lang="fr-FR">
<!-- Mirrored from www.parkingsdeparis.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Oct 2018 11:25:08 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <title>Réservations de places de parking en ligne | Parkingsdeparis</title>
    <base>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="title" content="Réservations de places de parking en ligne | Parkingsdeparis">
    <meta name="description" content="Réservez votre parking en ligne, votre place est garantie, et économisez jusqu&#039;à 70% du prix final. Garez-vous avec Parkingsdeparis !">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Parkingsdeparis">
    <meta name="theme-color" content="#e76500">
    <meta property="og:title" content="Réservations de places de parking en ligne | Parkingsdeparis">
    <meta property="og:description" content="Réservez votre parking en ligne, votre place est garantie, et économisez jusqu&#039;à 70% du prix final. Garez-vous avec Parkingsdeparis !">
    <meta property="og:type" content="website">
    <meta property="og:image" content="../static.parkingsdeparis.com/application/parkingsdeparis/meta/logotipo.png">
    <meta property="og:site_name" content="Parkingsdeparis">
    <meta http-equiv="cleartype" content="on">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript">
        (window.NREUM || (NREUM = {})).loader_config = {
            xpid: "VQUOVl9aCRACU1RVAwcAXw=="
        };
        window.NREUM || (NREUM = {}), __nr_require = function (t, n, e) {
            function r(e) {
                if (!n[e]) {
                    var o = n[e] = {
                        exports: {}
                    };
                    t[e][0].call(o.exports, function (n) {
                        var o = t[e][1][n];
                        return r(o || n)
                    }, o, o.exports)
                }
                return n[e].exports
            }
            if ("function" == typeof __nr_require) return __nr_require;
            for (var o = 0; o < e.length; o++) r(e[o]);
            return r
        }({
            1: [function (t, n, e) {
                function r(t) {
                    try {
                        s.console && console.log(t)
                    }
                    catch (n) {}
                }
                var o, i = t("ee")
                    , a = t(16)
                    , s = {};
                try {
                    o = localStorage.getItem("__nr_flags").split(","), console && "function" == typeof console.log && (s.console = !0, o.indexOf("dev") !== -1 && (s.dev = !0), o.indexOf("nr_dev") !== -1 && (s.nrDev = !0))
                }
                catch (c) {}
                s.nrDev && i.on("internal-error", function (t) {
                    r(t.stack)
                }), s.dev && i.on("fn-err", function (t, n, e) {
                    r(e.stack)
                }), s.dev && (r("NR AGENT IN DEVELOPMENT MODE"), r("flags: " + a(s, function (t, n) {
                    return t
                }).join(", ")))
            }, {}]
            , 2: [function (t, n, e) {
                function r(t, n, e, r, s) {
                    try {
                        p ? p -= 1 : o(s || new UncaughtException(t, n, e), !0)
                    }
                    catch (f) {
                        try {
                            i("ierr", [f, c.now(), !0])
                        }
                        catch (d) {}
                    }
                    return "function" == typeof u && u.apply(this, a(arguments))
                }

                function UncaughtException(t, n, e) {
                    this.message = t || "Uncaught error with no additional information", this.sourceURL = n, this.line = e
                }

                function o(t, n) {
                    var e = n ? null : c.now();
                    i("err", [t, e])
                }
                var i = t("handle")
                    , a = t(17)
                    , s = t("ee")
                    , c = t("loader")
                    , f = t("gos")
                    , u = window.onerror
                    , d = !1
                    , l = "nr@seenError"
                    , p = 0;
                c.features.err = !0, t(1), window.onerror = r;
                try {
                    throw new Error
                }
                catch (h) {
                    "stack" in h && (t(8), t(7), "addEventListener" in window && t(5), c.xhrWrappable && t(9), d = !0)
                }
                s.on("fn-start", function (t, n, e) {
                    d && (p += 1)
                }), s.on("fn-err", function (t, n, e) {
                    d && !e[l] && (f(e, l, function () {
                        return !0
                    }), this.thrown = !0, o(e))
                }), s.on("fn-end", function () {
                    d && !this.thrown && p > 0 && (p -= 1)
                }), s.on("internal-error", function (t) {
                    i("ierr", [t, c.now(), !0])
                })
            }, {}]
            , 3: [function (t, n, e) {
                t("loader").features.ins = !0
            }, {}]
            , 4: [function (t, n, e) {
                function r(t) {}
                if (window.performance && window.performance.timing && window.performance.getEntriesByType) {
                    var o = t("ee")
                        , i = t("handle")
                        , a = t(8)
                        , s = t(7)
                        , c = "learResourceTimings"
                        , f = "addEventListener"
                        , u = "resourcetimingbufferfull"
                        , d = "bstResource"
                        , l = "resource"
                        , p = "-start"
                        , h = "-end"
                        , m = "fn" + p
                        , v = "fn" + h
                        , w = "bstTimer"
                        , y = "pushState"
                        , g = t("loader");
                    g.features.stn = !0, t(6);
                    var b = NREUM.o.EV;
                    o.on(m, function (t, n) {
                        var e = t[0];
                        e instanceof b && (this.bstStart = g.now())
                    }), o.on(v, function (t, n) {
                        var e = t[0];
                        e instanceof b && i("bst", [e, n, this.bstStart, g.now()])
                    }), a.on(m, function (t, n, e) {
                        this.bstStart = g.now(), this.bstType = e
                    }), a.on(v, function (t, n) {
                        i(w, [n, this.bstStart, g.now(), this.bstType])
                    }), s.on(m, function () {
                        this.bstStart = g.now()
                    }), s.on(v, function (t, n) {
                        i(w, [n, this.bstStart, g.now(), "requestAnimationFrame"])
                    }), o.on(y + p, function (t) {
                        this.time = g.now(), this.startPath = location.pathname + location.hash
                    }), o.on(y + h, function (t) {
                        i("bstHist", [location.pathname + location.hash, this.startPath, this.time])
                    }), f in window.performance && (window.performance["c" + c] ? window.performance[f](u, function (t) {
                        i(d, [window.performance.getEntriesByType(l)]), window.performance["c" + c]()
                    }, !1) : window.performance[f]("webkit" + u, function (t) {
                        i(d, [window.performance.getEntriesByType(l)]), window.performance["webkitC" + c]()
                    }, !1)), document[f]("scroll", r, {
                        passive: !0
                    }), document[f]("keypress", r, !1), document[f]("click", r, !1)
                }
            }, {}]
            , 5: [function (t, n, e) {
                function r(t) {
                    for (var n = t; n && !n.hasOwnProperty(u);) n = Object.getPrototypeOf(n);
                    n && o(n)
                }

                function o(t) {
                    s.inPlace(t, [u, d], "-", i)
                }

                function i(t, n) {
                    return t[1]
                }
                var a = t("ee").get("events")
                    , s = t(19)(a, !0)
                    , c = t("gos")
                    , f = XMLHttpRequest
                    , u = "addEventListener"
                    , d = "removeEventListener";
                n.exports = a, "getPrototypeOf" in Object ? (r(document), r(window), r(f.prototype)) : f.prototype.hasOwnProperty(u) && (o(window), o(f.prototype)), a.on(u + "-start", function (t, n) {
                    var e = t[1]
                        , r = c(e, "nr@wrapped", function () {
                        function t() {
                            if ("function" == typeof e.handleEvent) return e.handleEvent.apply(e, arguments)
                        }
                        var n = {
                            object: t
                            , "function": e
                        }[typeof e];
                        return n ? s(n, "fn-", null, n.name || "anonymous") : e
                    });
                    this.wrapped = t[1] = r
                }), a.on(d + "-start", function (t) {
                    t[1] = this.wrapped || t[1]
                })
            }, {}]
            , 6: [function (t, n, e) {
                var r = t("ee").get("history")
                    , o = t(19)(r);
                n.exports = r, o.inPlace(window.history, ["pushState", "replaceState"], "-")
            }, {}]
            , 7: [function (t, n, e) {
                var r = t("ee").get("raf")
                    , o = t(19)(r)
                    , i = "equestAnimationFrame";
                n.exports = r, o.inPlace(window, ["r" + i, "mozR" + i, "webkitR" + i, "msR" + i], "raf-"), r.on("raf-start", function (t) {
                    t[0] = o(t[0], "fn-")
                })
            }, {}]
            , 8: [function (t, n, e) {
                function r(t, n, e) {
                    t[0] = a(t[0], "fn-", null, e)
                }

                function o(t, n, e) {
                    this.method = e, this.timerDuration = isNaN(t[1]) ? 0 : +t[1], t[0] = a(t[0], "fn-", this, e)
                }
                var i = t("ee").get("timer")
                    , a = t(19)(i)
                    , s = "setTimeout"
                    , c = "setInterval"
                    , f = "clearTimeout"
                    , u = "-start"
                    , d = "-";
                n.exports = i, a.inPlace(window, [s, "setImmediate"], s + d), a.inPlace(window, [c], c + d), a.inPlace(window, [f, "clearImmediate"], f + d), i.on(c + u, r), i.on(s + u, o)
            }, {}]
            , 9: [function (t, n, e) {
                function r(t, n) {
                    d.inPlace(n, ["onreadystatechange"], "fn-", s)
                }

                function o() {
                    var t = this
                        , n = u.context(t);
                    t.readyState > 3 && !n.resolved && (n.resolved = !0, u.emit("xhr-resolved", [], t)), d.inPlace(t, y, "fn-", s)
                }

                function i(t) {
                    g.push(t), h && (x ? x.then(a) : v ? v(a) : (E = -E, O.data = E))
                }

                function a() {
                    for (var t = 0; t < g.length; t++) r([], g[t]);
                    g.length && (g = [])
                }

                function s(t, n) {
                    return n
                }

                function c(t, n) {
                    for (var e in t) n[e] = t[e];
                    return n
                }
                t(5);
                var f = t("ee")
                    , u = f.get("xhr")
                    , d = t(19)(u)
                    , l = NREUM.o
                    , p = l.XHR
                    , h = l.MO
                    , m = l.PR
                    , v = l.SI
                    , w = "readystatechange"
                    , y = ["onload", "onerror", "onabort", "onloadstart", "onloadend", "onprogress", "ontimeout"]
                    , g = [];
                n.exports = u;
                var b = window.XMLHttpRequest = function (t) {
                    var n = new p(t);
                    try {
                        u.emit("new-xhr", [n], n), n.addEventListener(w, o, !1)
                    }
                    catch (e) {
                        try {
                            u.emit("internal-error", [e])
                        }
                        catch (r) {}
                    }
                    return n
                };
                if (c(p, b), b.prototype = p.prototype, d.inPlace(b.prototype, ["open", "send"], "-xhr-", s), u.on("send-xhr-start", function (t, n) {
                    r(t, n), i(n)
                }), u.on("open-xhr-start", r), h) {
                    var x = m && m.resolve();
                    if (!v && !m) {
                        var E = 1
                            , O = document.createTextNode(E);
                        new h(a).observe(O, {
                            characterData: !0
                        })
                    }
                }
                else f.on("fn-end", function (t) {
                    t[0] && t[0].type === w || a()
                })
            }, {}]
            , 10: [function (t, n, e) {
                function r(t) {
                    var n = this.params
                        , e = this.metrics;
                    if (!this.ended) {
                        this.ended = !0;
                        for (var r = 0; r < d; r++) t.removeEventListener(u[r], this.listener, !1);
                        if (!n.aborted) {
                            if (e.duration = a.now() - this.startTime, 4 === t.readyState) {
                                n.status = t.status;
                                var i = o(t, this.lastSize);
                                if (i && (e.rxSize = i), this.sameOrigin) {
                                    var c = t.getResponseHeader("X-NewRelic-App-Data");
                                    c && (n.cat = c.split(", ").pop())
                                }
                            }
                            else n.status = 0;
                            e.cbTime = this.cbTime, f.emit("xhr-done", [t], t), s("xhr", [n, e, this.startTime])
                        }
                    }
                }

                function o(t, n) {
                    var e = t.responseType;
                    if ("json" === e && null !== n) return n;
                    var r = "arraybuffer" === e || "blob" === e || "json" === e ? t.response : t.responseText;
                    return h(r)
                }

                function i(t, n) {
                    var e = c(n)
                        , r = t.params;
                    r.host = e.hostname + ":" + e.port, r.pathname = e.pathname, t.sameOrigin = e.sameOrigin
                }
                var a = t("loader");
                if (a.xhrWrappable) {
                    var s = t("handle")
                        , c = t(11)
                        , f = t("ee")
                        , u = ["load", "error", "abort", "timeout"]
                        , d = u.length
                        , l = t("id")
                        , p = t(14)
                        , h = t(13)
                        , m = window.XMLHttpRequest;
                    a.features.xhr = !0, t(9), f.on("new-xhr", function (t) {
                        var n = this;
                        n.totalCbs = 0, n.called = 0, n.cbTime = 0, n.end = r, n.ended = !1, n.xhrGuids = {}, n.lastSize = null, p && (p > 34 || p < 10) || window.opera || t.addEventListener("progress", function (t) {
                            n.lastSize = t.loaded
                        }, !1)
                    }), f.on("open-xhr-start", function (t) {
                        this.params = {
                            method: t[0]
                        }, i(this, t[1]), this.metrics = {}
                    }), f.on("open-xhr-end", function (t, n) {
                        "loader_config" in NREUM && "xpid" in NREUM.loader_config && this.sameOrigin && n.setRequestHeader("X-NewRelic-ID", NREUM.loader_config.xpid)
                    }), f.on("send-xhr-start", function (t, n) {
                        var e = this.metrics
                            , r = t[0]
                            , o = this;
                        if (e && r) {
                            var i = h(r);
                            i && (e.txSize = i)
                        }
                        this.startTime = a.now(), this.listener = function (t) {
                            try {
                                "abort" === t.type && (o.params.aborted = !0), ("load" !== t.type || o.called === o.totalCbs && (o.onloadCalled || "function" != typeof n.onload)) && o.end(n)
                            }
                            catch (e) {
                                try {
                                    f.emit("internal-error", [e])
                                }
                                catch (r) {}
                            }
                        };
                        for (var s = 0; s < d; s++) n.addEventListener(u[s], this.listener, !1)
                    }), f.on("xhr-cb-time", function (t, n, e) {
                        this.cbTime += t, n ? this.onloadCalled = !0 : this.called += 1, this.called !== this.totalCbs || !this.onloadCalled && "function" == typeof e.onload || this.end(e)
                    }), f.on("xhr-load-added", function (t, n) {
                        var e = "" + l(t) + !!n;
                        this.xhrGuids && !this.xhrGuids[e] && (this.xhrGuids[e] = !0, this.totalCbs += 1)
                    }), f.on("xhr-load-removed", function (t, n) {
                        var e = "" + l(t) + !!n;
                        this.xhrGuids && this.xhrGuids[e] && (delete this.xhrGuids[e], this.totalCbs -= 1)
                    }), f.on("addEventListener-end", function (t, n) {
                        n instanceof m && "load" === t[0] && f.emit("xhr-load-added", [t[1], t[2]], n)
                    }), f.on("removeEventListener-end", function (t, n) {
                        n instanceof m && "load" === t[0] && f.emit("xhr-load-removed", [t[1], t[2]], n)
                    }), f.on("fn-start", function (t, n, e) {
                        n instanceof m && ("onload" === e && (this.onload = !0), ("load" === (t[0] && t[0].type) || this.onload) && (this.xhrCbStart = a.now()))
                    }), f.on("fn-end", function (t, n) {
                        this.xhrCbStart && f.emit("xhr-cb-time", [a.now() - this.xhrCbStart, this.onload, n], n)
                    })
                }
            }, {}]
            , 11: [function (t, n, e) {
                n.exports = function (t) {
                    var n = document.createElement("a")
                        , e = window.location
                        , r = {};
                    n.href = t, r.port = n.port;
                    var o = n.href.split("://");
                    !r.port && o[1] && (r.port = o[1].split("index.html")[0].split("@").pop().split(":")[1]), r.port && "0" !== r.port || (r.port = "https" === o[0] ? "443" : "80"), r.hostname = n.hostname || e.hostname, r.pathname = n.pathname, r.protocol = o[0], "/" !== r.pathname.charAt(0) && (r.pathname = "/" + r.pathname);
                    var i = !n.protocol || ":" === n.protocol || n.protocol === e.protocol
                        , a = n.hostname === document.domain && n.port === e.port;
                    return r.sameOrigin = i && (!n.hostname || a), r
                }
            }, {}]
            , 12: [function (t, n, e) {
                function r() {}

                function o(t, n, e) {
                    return function () {
                        return i(t, [f.now()].concat(s(arguments)), n ? null : this, e), n ? void 0 : this
                    }
                }
                var i = t("handle")
                    , a = t(16)
                    , s = t(17)
                    , c = t("ee").get("tracer")
                    , f = t("loader")
                    , u = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = u);
                var d = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"]
                    , l = "api-"
                    , p = l + "ixn-";
                a(d, function (t, n) {
                    u[n] = o(l + n, !0, "api")
                }), u.addPageAction = o(l + "addPageAction", !0), u.setCurrentRouteName = o(l + "routeName", !0), n.exports = newrelic, u.interaction = function () {
                    return (new r).get()
                };
                var h = r.prototype = {
                    createTracer: function (t, n) {
                        var e = {}
                            , r = this
                            , o = "function" == typeof n;
                        return i(p + "tracer", [f.now(), t, e], r)
                            , function () {
                            if (c.emit((o ? "" : "no-") + "fn-start", [f.now(), r, o], e), o) try {
                                return n.apply(this, arguments)
                            }
                            catch (t) {
                                throw c.emit("fn-err", [arguments, this, t], e), t
                            }
                            finally {
                                c.emit("fn-end", [f.now()], e)
                            }
                        }
                    }
                };
                a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function (t, n) {
                    h[n] = o(p + n)
                }), newrelic.noticeError = function (t) {
                    "string" == typeof t && (t = new Error(t)), i("err", [t, f.now()])
                }
            }, {}]
            , 13: [function (t, n, e) {
                n.exports = function (t) {
                    if ("string" == typeof t && t.length) return t.length;
                    if ("object" == typeof t) {
                        if ("undefined" != typeof ArrayBuffer && t instanceof ArrayBuffer && t.byteLength) return t.byteLength;
                        if ("undefined" != typeof Blob && t instanceof Blob && t.size) return t.size;
                        if (!("undefined" != typeof FormData && t instanceof FormData)) try {
                            return JSON.stringify(t).length
                        }
                        catch (n) {
                            return
                        }
                    }
                }
            }, {}]
            , 14: [function (t, n, e) {
                var r = 0
                    , o = navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);
                o && (r = +o[1]), n.exports = r
            }, {}]
            , 15: [function (t, n, e) {
                function r(t, n) {
                    if (!o) return !1;
                    if (t !== o) return !1;
                    if (!n) return !0;
                    if (!i) return !1;
                    for (var e = i.split("."), r = n.split("."), a = 0; a < r.length; a++)
                        if (r[a] !== e[a]) return !1;
                    return !0
                }
                var o = null
                    , i = null
                    , a = /Version\/(\S+)\s+Safari/;
                if (navigator.userAgent) {
                    var s = navigator.userAgent
                        , c = s.match(a);
                    c && s.indexOf("Chrome") === -1 && s.indexOf("Chromium") === -1 && (o = "Safari", i = c[1])
                }
                n.exports = {
                    agent: o
                    , version: i
                    , match: r
                }
            }, {}]
            , 16: [function (t, n, e) {
                function r(t, n) {
                    var e = []
                        , r = ""
                        , i = 0;
                    for (r in t) o.call(t, r) && (e[i] = n(r, t[r]), i += 1);
                    return e
                }
                var o = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}]
            , 17: [function (t, n, e) {
                function r(t, n, e) {
                    n || (n = 0), "undefined" == typeof e && (e = t ? t.length : 0);
                    for (var r = -1, o = e - n || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = t[n + r];
                    return i
                }
                n.exports = r
            }, {}]
            , 18: [function (t, n, e) {
                n.exports = {
                    exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart
                }
            }, {}]
            , 19: [function (t, n, e) {
                function r(t) {
                    return !(t && t instanceof Function && t.apply && !t[a])
                }
                var o = t("ee")
                    , i = t(17)
                    , a = "nr@original"
                    , s = Object.prototype.hasOwnProperty
                    , c = !1;
                n.exports = function (t, n) {
                    function e(t, n, e, o) {
                        function nrWrapper() {
                            var r, a, s, c;
                            try {
                                a = this, r = i(arguments), s = "function" == typeof e ? e(r, a) : e || {}
                            }
                            catch (f) {
                                l([f, "", [r, a, o], s])
                            }
                            u(n + "start", [r, a, o], s);
                            try {
                                return c = t.apply(a, r)
                            }
                            catch (d) {
                                throw u(n + "err", [r, a, d], s), d
                            }
                            finally {
                                u(n + "end", [r, a, c], s)
                            }
                        }
                        return r(t) ? t : (n || (n = ""), nrWrapper[a] = t, d(t, nrWrapper), nrWrapper)
                    }

                    function f(t, n, o, i) {
                        o || (o = "");
                        var a, s, c, f = "-" === o.charAt(0);
                        for (c = 0; c < n.length; c++) s = n[c], a = t[s], r(a) || (t[s] = e(a, f ? s + o : o, i, s))
                    }

                    function u(e, r, o) {
                        if (!c || n) {
                            var i = c;
                            c = !0;
                            try {
                                t.emit(e, r, o, n)
                            }
                            catch (a) {
                                l([a, e, r, o])
                            }
                            c = i
                        }
                    }

                    function d(t, n) {
                        if (Object.defineProperty && Object.keys) try {
                            var e = Object.keys(t);
                            return e.forEach(function (e) {
                                Object.defineProperty(n, e, {
                                    get: function () {
                                        return t[e]
                                    }
                                    , set: function (n) {
                                        return t[e] = n, n
                                    }
                                })
                            }), n
                        }
                        catch (r) {
                            l([r])
                        }
                        for (var o in t) s.call(t, o) && (n[o] = t[o]);
                        return n
                    }

                    function l(n) {
                        try {
                            t.emit("internal-error", n)
                        }
                        catch (e) {}
                    }
                    return t || (t = o), e.inPlace = f, e.flag = a, e
                }
            }, {}]
            , ee: [function (t, n, e) {
                function r() {}

                function o(t) {
                    function n(t) {
                        return t && t instanceof r ? t : t ? c(t, s, i) : i()
                    }

                    function e(e, r, o, i) {
                        if (!l.aborted || i) {
                            t && t(e, r, o);
                            for (var a = n(o), s = m(e), c = s.length, f = 0; f < c; f++) s[f].apply(a, r);
                            var d = u[g[e]];
                            return d && d.push([b, e, r, a]), a
                        }
                    }

                    function p(t, n) {
                        y[t] = m(t).concat(n)
                    }

                    function h(t, n) {
                        var e = y[t];
                        if (e)
                            for (var r = 0; r < e.length; r++) e[r] === n && e.splice(r, 1)
                    }

                    function m(t) {
                        return y[t] || []
                    }

                    function v(t) {
                        return d[t] = d[t] || o(e)
                    }

                    function w(t, n) {
                        f(t, function (t, e) {
                            n = n || "feature", g[e] = n, n in u || (u[n] = [])
                        })
                    }
                    var y = {}
                        , g = {}
                        , b = {
                        on: p
                        , addEventListener: p
                        , removeEventListener: h
                        , emit: e
                        , get: v
                        , listeners: m
                        , context: n
                        , buffer: w
                        , abort: a
                        , aborted: !1
                    };
                    return b
                }

                function i() {
                    return new r
                }

                function a() {
                    (u.api || u.feature) && (l.aborted = !0, u = l.backlog = {})
                }
                var s = "nr@context"
                    , c = t("gos")
                    , f = t(16)
                    , u = {}
                    , d = {}
                    , l = n.exports = o();
                l.backlog = u
            }, {}]
            , gos: [function (t, n, e) {
                function r(t, n, e) {
                    if (o.call(t, n)) return t[n];
                    var r = e();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(t, n, {
                            value: r
                            , writable: !0
                            , enumerable: !1
                        }), r
                    }
                    catch (i) {}
                    return t[n] = r, r
                }
                var o = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}]
            , handle: [function (t, n, e) {
                function r(t, n, e, r) {
                    o.buffer([t], r), o.emit(t, n, e)
                }
                var o = t("ee").get("handle");
                n.exports = r, r.ee = o
            }, {}]
            , id: [function (t, n, e) {
                function r(t) {
                    var n = typeof t;
                    return !t || "object" !== n && "function" !== n ? -1 : t === window ? 0 : a(t, i, function () {
                        return o++
                    })
                }
                var o = 1
                    , i = "nr@id"
                    , a = t("gos");
                n.exports = r
            }, {}]
            , loader: [function (t, n, e) {
                function r() {
                    if (!E++) {
                        var t = x.info = NREUM.info
                            , n = p.getElementsByTagName("script")[0];
                        if (setTimeout(u.abort, 3e4), !(t && t.licenseKey && t.applicationID && n)) return u.abort();
                        f(g, function (n, e) {
                            t[n] || (t[n] = e)
                        }), c("mark", ["onload", a() + x.offset], null, "api");
                        var e = p.createElement("script");
                        e.src = "https://" + t.agent, n.parentNode.insertBefore(e, n)
                    }
                }

                function o() {
                    "complete" === p.readyState && i()
                }

                function i() {
                    c("mark", ["domContent", a() + x.offset], null, "api")
                }

                function a() {
                    return O.exists && performance.now ? Math.round(performance.now()) : (s = Math.max((new Date).getTime(), s)) - x.offset
                }
                var s = (new Date).getTime()
                    , c = t("handle")
                    , f = t(16)
                    , u = t("ee")
                    , d = t(15)
                    , l = window
                    , p = l.document
                    , h = "addEventListener"
                    , m = "attachEvent"
                    , v = l.XMLHttpRequest
                    , w = v && v.prototype;
                NREUM.o = {
                    ST: setTimeout
                    , SI: l.setImmediate
                    , CT: clearTimeout
                    , XHR: v
                    , REQ: l.Request
                    , EV: l.Event
                    , PR: l.Promise
                    , MO: l.MutationObserver
                };
                var y = "" + location
                    , g = {
                    beacon: "bam.nr-data.net"
                    , errorBeacon: "bam.nr-data.net"
                    , agent: "js-agent.newrelic.com/nr-1099.min.js"
                }
                    , b = v && w && w[h] && !/CriOS/.test(navigator.userAgent)
                    , x = n.exports = {
                    offset: s
                    , now: a
                    , origin: y
                    , features: {}
                    , xhrWrappable: b
                    , userAgent: d
                };
                t(12), p[h] ? (p[h]("DOMContentLoaded", i, !1), l[h]("load", r, !1)) : (p[m]("onreadystatechange", o), l[m]("onload", r)), c("mark", ["firstbyte", s], null, "api");
                var E = 0
                    , O = t(18)
            }, {}]
        }, {}, ["loader", 2, 10, 4, 3]);
    </script>
    <link rel="author" href="humans.txt">
    <link rel="canonical" href="index.html">

    <link rel="alternate" href="index.html" hreflang="fr-FR">
    <link rel="alternate" href="NL/index.html" hreflang="nl-NL">
    <link rel="icon" sizes="16x16" href="https://static.parkingsdeparis.com/application/parkingsdeparis/meta/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../img/static.parkingsdeparis.com/application/parkingsdeparis/meta/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="../img/static.parkingsdeparis.com/application/parkingsdeparis/meta/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../img/static.parkingsdeparis.com/application/parkingsdeparis/meta/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../img/static.parkingsdeparis.com/application/parkingsdeparis/meta/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../img/static.parkingsdeparis.com/application/parkingsdeparis/meta/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../img/static.parkingsdeparis.com/application/parkingsdeparis/meta/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../img/static.parkingsdeparis.com/application/parkingsdeparis/meta/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../img/static.parkingsdeparis.com/application/parkingsdeparis/meta/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="../img/static.parkingsdeparis.com/application/parkingsdeparis/meta/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="../img/static.parkingsdeparis.com/application/parkingsdeparis/meta/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../img/static.parkingsdeparis.com/application/parkingsdeparis/meta/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="../img/static.parkingsdeparis.com/application/parkingsdeparis/meta/favicon-128x128.png" sizes="128x128">
    <link rel="icon" type="image/png" href="../img/static.parkingsdeparis.com/application/parkingsdeparis/meta/favicon-196x196.png" sizes="196x196">
    <link rel="preload" href="assets/fonts/MuseoSans-300.ttf" as="font">
    <link rel="preload" href="assets/fonts/MuseoSans-300.woff" as="font">
    <link rel="preload" href="assets/fonts/MuseoSans-500.ttf" as="font">
    <link rel="preload" href="assets/fonts/MuseoSans-500.woff" as="font">
    <link rel="preload" href="assets/fonts/MuseoSans-700.ttf" as="font">
    <link rel="preload" href="assets/fonts/MuseoSans-700.woff" as="font">
    <link rel="preload" href="assets/fonts/MuseoSans-900.ttf" as="font">
    <link rel="preload" href="assets/fonts/MuseoSans-900.woff" as="font">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="https://static.parkingsdeparis.com/application/parkingsdeparis/meta/mstile-144x144.png">
    <meta name="msapplication-square70x70logo" content="https://static.parkingsdeparis.com/application/parkingsdeparis/meta/mstile-70x70.png">
    <meta name="msapplication-square150x150logo" content="https://static.parkingsdeparis.com/application/parkingsdeparis/meta/mstile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="https://static.parkingsdeparis.com/application/parkingsdeparis/meta/mstile-310x150.png">
    <meta name="msapplication-square310x310logo" content="https://static.parkingsdeparis.com/application/parkingsdeparis/meta/mstile-310x310.png">
    <script>
        (function (P, r, c, l, k) {
            P[l] = P[l] || [];
            P[l].push({
                'gtm.start': new Date().getTime()
                , event: 'gtm.js'
            });
            var f = r.getElementsByTagName(c)[0]
                , j = r.createElement(c)
                , dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '../www.googletagmanager.com/gtm5445.html?id=' + k + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5GVLSVH');
    </script>
    <script type="application/ld+json"> { "@context": "http://schema.org", "@type": "WebSite", "url": "https://www.parkingsdeparis.com/", "image": "https://static.parkingsdeparis.com/assets/img/logotipo-parkingsdeparis.svg", "potentialAction": { "@type": "SearchAction", "target": "https://www.parkingsdeparis.com/search?q={search_term_string}", "query-input": "required name=search_term_string" } } </script>
    <link rel="stylesheet" href="../publics/css/styleAccueil.css">

<body id="mainframe" class="home">
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GVLSVH" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<app-base enabled="true" data-runtime="eyJhcHBsaWNhdGlvbiI6MiwiYXBwbGljYXRpb25OYW1lIjoiUGFya2luZ3NkZXBhcmlzIiwiY29udGFjdEVtYWlsIjoiaW5mb0BwYXJjbGljay5jb20iLCJjb250ZXh0IjowLCJjb250ZXh0TmFtZSI6Ik5vbmUiLCJkZXZpY2UiOiJEZXNrdG9wIiwiZW52aXJvbm1lbnQiOiJwcm9kIiwiaG9zdCI6Ind3dy5wYXJraW5nc2RlcGFyaXMuY29tIiwibG9jYWxlIjoiZnJfRlIiLCJsb2NhbGVzIjpbImRlX0RFIiwiZW5fR0IiLCJlc19FUyIsImZyX0ZSIiwibmxfTkwiXSwicXVlcnlQYXJhbXMiOltdLCJyb3V0ZSI6ImhvbWUiLCJyb3V0ZVBhcmFtcyI6W10sInN1YmRvbWFpbiI6IiJ9"></app-base>
<app-affiliate enabled="true" data-affiliate="eyJ2aXNpdCI6bnVsbCwibGlmZXRpbWUiOm51bGx9"></app-affiliate>
<header>
    <div class="container p-0">
        <nav class="navbar navbar-light">
            <a class="navbar-brand mr-auto" href="index.html"> <img src="https://static.parkingsdeparis.com/assets/img/logotipo-parkingsdeparis.svg" height="38" alt="Parkingsdeparis"> <span class="sr-only">Parkingsdeparis</span> </a>
            <div class="off-screen-content d-flex align-items-center">
                <app-menu-mobile enabled="true" data-urlItems="W3sibmFtZSI6IkRFIiwidXJsIjoiaHR0cHM6XC9cL3d3dy5wYXJraW5nc2RlcGFyaXMuY29tXC9ERVwvIn0seyJuYW1lIjoiRU4iLCJ1cmwiOiJodHRwczpcL1wvd3d3LnBhcmtpbmdzZGVwYXJpcy5jb21cL0VOXC8ifSx7Im5hbWUiOiJFUyIsInVybCI6Imh0dHBzOlwvXC93d3cucGFya2luZ3NkZXBhcmlzLmNvbVwvRVNcLyJ9LHsibmFtZSI6IkZSIiwidXJsIjoiaHR0cHM6XC9cL3d3dy5wYXJraW5nc2RlcGFyaXMuY29tXC8ifSx7Im5hbWUiOiJOTCIsInVybCI6Imh0dHBzOlwvXC93d3cucGFya2luZ3NkZXBhcmlzLmNvbVwvTkxcLyJ9XQ==" data-titleSelected="IkZSIg=="></app-menu-mobile>
                <div class="social-icons d-none d-md-block">
                    <a href="https://itunes.apple.com/fr/app/parclick-encontrar-parking/id1175900386?mt=8" class="ios-icon"> <span class="sr-only">
            <img src="https://static.parkingsdeparis.com/assets/img/apps/apple.svg" width="21" height="25" alt="iOS">
        </span> </a>
                    <a href="https://play.google.com/store/apps/details?id=com.parclick&amp;hl=fr" class="android-icon"> <span class="sr-only">
            <img src="https://static.parkingsdeparis.com/assets/img/apps/android.svg" width="23" height="25" alt="Android">
        </span> </a>
                </div>
                <div class="divider d-none d-md-block"></div>
                <div class="d-none d-sm-block">
                    <app-modal-how-it-works enabled="true"></app-modal-how-it-works> <a class="btn btn-link ct" href="faq.html">Aide</a> <a class="btn btn-link ct" href="contact.html">Contact</a> </div>
                <app-login-menu enabled="true"></app-login-menu>
                <app-dropdown enabled="true" data-urlItems="W3sibmFtZSI6IkRFIiwidXJsIjoiaHR0cHM6XC9cL3d3dy5wYXJraW5nc2RlcGFyaXMuY29tXC9ERVwvIn0seyJuYW1lIjoiRU4iLCJ1cmwiOiJodHRwczpcL1wvd3d3LnBhcmtpbmdzZGVwYXJpcy5jb21cL0VOXC8ifSx7Im5hbWUiOiJFUyIsInVybCI6Imh0dHBzOlwvXC93d3cucGFya2luZ3NkZXBhcmlzLmNvbVwvRVNcLyJ9LHsibmFtZSI6IkZSIiwidXJsIjoiaHR0cHM6XC9cL3d3dy5wYXJraW5nc2RlcGFyaXMuY29tXC8ifSx7Im5hbWUiOiJOTCIsInVybCI6Imh0dHBzOlwvXC93d3cucGFya2luZ3NkZXBhcmlzLmNvbVwvTkxcLyJ9XQ==" data-titleSelected="IkZSIg==">
                    <ul class="dropdown list-inline m-0">
                        <li class="list-inline-item btn btn-outline-light m-0 "> <a href="DE/index.html" class="btn btn-link p-0">
                                DE
                            </a> </li>
                        <li class="list-inline-item btn btn-outline-light m-0 d-none"> <a href="EN/index.html" class="btn btn-link p-0">
                                EN
                            </a> </li>
                        <li class="list-inline-item btn btn-outline-light m-0 d-none"> <a href="ES/index.html" class="btn btn-link p-0">
                                ES
                            </a> </li>
                        <li class="list-inline-item btn btn-outline-light m-0 d-none"> <a href="index.html" class="btn btn-link p-0">
                                FR
                            </a> </li>
                        <li class="list-inline-item btn btn-outline-light m-0 d-none"> <a href="NL/index.html" class="btn btn-link p-0">
                                NL
                            </a> </li>
                    </ul>
                </app-dropdown>
            </div>
        </nav>
    </div>
</header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center intro-box">
            <h1>Garez-vous avant d&#039;arriver</h1>
            <h4>Plus de 500.000 conducteurs ont déjà réservé sur Parclick</h4>
            <div class="mt-3 text-left">
                <app-home enabled="true" data-queryParams="W10=" data-parking="bnVsbA==" data-terminals="bnVsbA==">
                    <div class="content-placeholder">
                        <div class="d-flex justify-content-center">
                            <div class="loading-search bar col-5 col-lg-12">
                                <div class="second-divider d-none d-lg-block"></div>
                            </div>
                        </div>
                    </div>
                </app-home>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid animation-container">
    <div id="pck-animation-container" class="row no-gutters">
        <div class="col-12 text-center mb-3 mb-md-0">
            <div class="position-absolute animated fadeOut delay-2s"> <img src="../static.parkingsdeparis.com/assets/img/animation/parkingsdeparis/static-city.png" class="img-fluid" alt=""> </div>
            <div class="animated fadeIn delay-2s">
                <div class="paperless animated bounceInDown delay-3s"> Votre réservation est électronique !
                    <br>Pas besoin d&#039;imprimer quoi que ce soit </div> <img src="../static.parkingsdeparis.com/assets/img/animation/parkingsdeparis/static-city-green.png" class="img-fluid" alt=""> </div>
        </div>
        <div class="col-12 px-2"> <span class="text">Plus de <strong>500.000</strong> conducteurs nous font déjà confiance.</span> </div>
    </div>
</div>
<section id="booking-banner">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-lg-6 text-center text-sm-left">
                <p class="h1"> <span class="d-block">
                        Réservez votre parking et économisez jusqu&#039;à 70%
                    </span> <a href="#" onclick="document.getElementsByTagName('body')[0].scrollIntoView({behavior: 'smooth'});" class="btn btn-primary text-uppercase">Réserver</a> </p>
            </div>
            <div class="col-12 col-lg-6"> <img src="../static.parclick.com/assets/img/banners/booking-banner.png" width="589" height="345" class="img-fluid" alt=""> </div>
        </div>
    </div>
</section>
<section class="block-links">
    <div class="container p-lg-0">
        <div class="row">
            <div class="col-12 col-md-6 no-gutters">
                <div class="col">
                    <h5 class="light">Localiser un parking</h5> </div>
                <div class="w-100"></div>
                <div class="col">
                    <ul>
                        <li><a href="reservation-moto-carte.html" class="btn btn-block-link">Parkings pour motos</a></li>
                        <li><a href="reservation-utilitaire-carte.html" class="btn btn-block-link">Parkings pour utilitaires</a></li>
                        <li><a href="reservation-camion-carte.html" class="btn btn-block-link">Parkings pour camions</a></li>
                        <li><a href="reservation-campingcar-carte.html" class="btn btn-block-link">Parkings pour camping-cars</a></li>
                        <li><a href="reservation-autocar-carte.html" class="btn btn-block-link">Parkings pour autocars</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>



<section id="app-banner">
    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-12 col-md-7 text-center text-md-left">
                <p class="h1">Réservez quand vous voulez</p>
                <p class="h3 light text-secondary">Téléchargez notre appli</p>
                <ul class="list-inline">
                    <li class="list-inline-item mr-0 mr-md-3">
                        <a href="https://itunes.apple.com/fr/app/parclick-encontrar-parking/id1175900386?mt=8" class="d-block"> <img src="../static.parkingsdeparis.com/assets/img/apps/badges/ios_badge_FR.png" alt=""> </a>
                    </li>
                    <li class="list-inline-item mt-3 mt-md-0">
                        <a href="https://play.google.com/store/apps/details?id=com.parclick&amp;hl=fr" class="d-block"> <img src="../static.parkingsdeparis.com/assets/img/apps/badges/android_badge_FR.png" alt=""> </a>
                    </li>
                </ul>
            </div>
            <div class="col-10 col-md-5 mx-auto"> <img src="../static.parkingsdeparis.com/assets/img/apps/app-screenshots.png" class="img-fluid"> </div>
        </div>
    </div>
</section>
<footer class="off-screen-content">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-9 col-lg-10 order-12 order-md-1 text-center text-md-left">
                <ul class="list-inline m-0">
                    <li class="list-inline-item d-block d-md-inline-block"> <a href="about-us.html">Qui sommes-nous ?</a> </li>
                    <li class="list-inline-item d-block d-md-inline-block"> <a href="contact.html">Contact</a> </li>
                    <li class="list-inline-item d-block d-md-inline-block"> <a href="legal.html">Conditions légales</a> </li>
                    <li class="list-inline-item d-block d-md-inline-block"> <a href="legal.html">Conditions d&#039;annulation</a> </li>
                    <li class="list-inline-item d-block d-md-inline-block"> <a href="parking-paris.html">Nos parkings</a> </li>
                    <li class="list-inline-item d-block d-md-inline-block"> <a href="archives.html">Archives</a> </li>
                    <li class="list-inline-item d-block d-md-inline-block"> <a href="hotels.html">Réserver parkings hôtels</a> </li>
                </ul>
            </div>
            <div class="col-12 col-md-3 col-lg-2 order-1 order-md-12 text-center text-md-right">
                <ul class="list-inline m-sm-3 m-md-0 social">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/parkingsdeparisparclick" target="_blank"> <i class="socicon socicon-facebook"></i> <span class="sr-only">Facebook</span> </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://twitter.com/parclickfrance" target="_blank"> <i class="socicon socicon-twitter"></i> <span class="sr-only">Twitter</span> </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/company/parclick" target="_blank"> <i class="socicon socicon-linkedin"></i> <span class="sr-only">Linkedin</span> </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="js/8f90d1f5391.js?v1284e64"></script>
<app-alert enabled="false"></app-alert>
<app-card enabled="false"></app-card>
<app-carousel enabled="false"></app-carousel>
<app-carousel-press enabled="false"></app-carousel-press>
<app-cart enabled="false"></app-cart>
<app-checkout enabled="false"></app-checkout>
<app-collapse enabled="false"></app-collapse>
<app-cookies enabled="false"></app-cookies>
<app-detail enabled="false"></app-detail>
<app-dropdown-vehicle enabled="false"></app-dropdown-vehicle>
<app-faq enabled="false"></app-faq>
<app-login enabled="false"></app-login>
<app-modal-profile enabled="false"></app-modal-profile>
<app-phone-prefix enabled="false"></app-phone-prefix>
<app-popover enabled="false"></app-popover>
<app-purchases enabled="false"></app-purchases>
<app-register enabled="false"></app-register>
<app-runtime enabled="false"></app-runtime>
<app-search enabled="false"></app-search>
<app-tabs enabled="false"></app-tabs>
<app-typeahead enabled="false"></app-typeahead>
<script type="text/javascript">
    window.NREUM || (NREUM = {});
    NREUM.info = {
        "beacon": "bam.nr-data.net"
        , "licenseKey": "e09512c615"
        , "applicationID": "27574679"
        , "transactionName": "YgNXZRBYCEpTAE1eDVtJdFIWUAlXHQtWWgc="
        , "queueTime": 0
        , "applicationTime": 40
        , "atts": "TkRUE1hCG0Q="
        , "errorBeacon": "bam.nr-data.net"
        , "agent": ""
    }
</script>
</body>
<!-- Mirrored from www.parkingsdeparis.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Oct 2018 11:26:01 GMT -->

</html>

<?php

        require "footerView.php"; 
?>

