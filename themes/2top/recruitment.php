<?php
    getHeader();
?>
<style>
    .footer-contact {
        display: none;
    }
</style>
<main>
    <section id="section-banner-top" class="recruitment">

        <div class="container">
            <div class="banner-contain">
                <div>
                    <div class="desktop-banner">
                        <img src="<?= $settingPageRecuitment['banner_desktop'] ?>" alt="">
                    </div>
                    <div class="banner-contain-title">
                        <?= $settingPageRecuitment['banner_contain_title'] ?>
                    </div>
                </div>

            </div>

            <div class="banner-contain-2">
                <div class="banner-contain-2-img">
                    <img src="<?= $settingPageRecuitment['banner_contain_2_img'] ?>" alt="">
                </div>
                <div class="banner-contain-2-content">
                    <?= $settingPageRecuitment['banner_contain_2_content'] ?>
                    <div class="banner-contain-2-btn">
                        <a href="<?= $settingPageRecuitment['banner_contain_2_link'] ?>"><?= $settingPageRecuitment['banner_contain_2_btn'] ?></a>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <section id="section-company-culture">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="company-culture-short">
                        <h3><?= $settingPageRecuitment['company_culture_title'] ?></h3>
                        <p><?= $settingPageRecuitment['company_culture_short_description'] ?></p>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="list-company-culture">
                        <div class="row">
                            <?php for ($i = 1; $i < 7 ; $i++) { ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                <div class="item-company-culture">
                                    <div class="item-company-culture-num">
                                        <?= $settingPageRecuitment['item_company_culture_num_' . $i] ?>
                                    </div>
                                    <div class="item-company-culture-name">
                                        <?= $settingPageRecuitment['item_company_culture_name_' . $i] ?>
                                    </div>
                                    <div class="item-company-culture-detail">
                                        <p>
                                            <?= $settingPageRecuitment['item_company_culture_detail_' . $i] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="section-jobs">

        <div class="container">
            <div class="jobs-content">
                <div class="row">
                    <div class="col-lg-6 no-padding-right">
                        <div class="jobs-banner">
                            <img src="<?= $settingPageRecuitment['jobs_banner'] ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 no-padding">
                        <div class="jobs-content-title">
                            <?= $settingPageRecuitment['jobs_content_title'] ?>
                        </div>

                        <div class="jobs-content-slide">
                            <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                                <div class="swiper-wrapper" style="" id="swiper-wrapper-27df4cac3aea0ae9" aria-live="polite">
                                    <?php foreach ($recruitments as $value => $recruitment): ?>
                                    <div class="swiper-slide item-jobs swiper-slide-active" role="group" aria-label="1 / <?= ++$value ?>" style="width: 405.769px; margin-right: 15px;">
                                        <div class="item-jobs-body">
                                            <div class="item-jobs-date">
                                                <p><i class="fa-regular fa-calendar-days" aria-hidden="true"></i><?= date('d-m-Y', strtotime($recruitment->created_at)) ?></p>
                                            </div>
                                            <div class="item-jobs-detail">
                                                <a href="/tuyen-dung/<?= $recruitment->slug ?>" class="item-jobs-name"><?= $recruitment->title ?></a>
                                                <p class="item-jobs-text"><?= $recruitment->short_description ?></p>
                                            </div>
                                            <div class="item-jobs-btn">
                                                <a href="/tuyen-dung/<?= $recruitment->slug ?>">Xem chi tiết <i class="fa-solid fa-arrow-right-long" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>

                                </div>
                                <div class="swiper-scrollbar swiper-scrollbar-horizontal"><div class="swiper-scrollbar-drag" style="transform: translate3d(0px, 0px, 0px); width: 166.163px;"></div></div>

                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div></section>

    <section id="section-company-album">
        <div class="container">
            <div class="company-album-title">
                <h3>BẠN SẼ NHẬN ĐƯỢC GÌ KHI THAM GIA VÀO <br> “CHIẾN KHU” TOP TOP?</h3>
            </div>
            <div class="company-album">
                <div class="item-company-album set-1">
                    <div class="item-company-image">
                        <a href="<?= $urlThemeActive ?>asset/image/toptop-car.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                            <img src="<?= $urlThemeActive ?>asset/image/toptop-car.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="item-company-image">
                        <a href="<?= $urlThemeActive ?>asset/image/toptop-bag.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                            <img src="<?= $urlThemeActive ?>asset/image/toptop-bag.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="item-company-image">
                        <a href="<?= $urlThemeActive ?>asset/image/toptop-bottle.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                            <img src="<?= $urlThemeActive ?>asset/image/toptop-bottle.jpg" alt="Image Gallery">
                        </a>
                    </div>
                </div>

                <div class="item-company-album set-2">
                    <div class="item-company-image">
                        <a href="<?= $urlThemeActive ?>asset/image/toptop-card.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                            <img src="<?= $urlThemeActive ?>asset/image/toptop-card.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="item-company-image">
                        <a href="<?= $urlThemeActive ?>asset/image/toptop-pen.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                            <img src="<?= $urlThemeActive ?>asset/image/toptop-pen.jpg" alt="Image Gallery">
                        </a>
                    </div>
                    <div class="item-company-image">
                        <a href="<?= $urlThemeActive ?>asset/image/toptop-intro.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                            <img src="<?= $urlThemeActive ?>asset/image/toptop-intro.jpg" alt="Image Gallery">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="section-benefits">
        <div class="container">
            <div class="section-benefits-title">
                <h3>NHỮNG QUYỀN LỢI DÀNH CHO CÁC CHIẾN BINH TOP TOP</h3>
            </div>

            <div class="list-benefits">
                <div class="row">
                    <?php for ($i = 1; $i < 7; $i++ ) { ?>
                    <div class="col-lg-2 col-md-4 col-sm-6 pd-8">
                        <div class="item-benefits">
                            <div class="benefits-num"><?= $settingPageRecuitment['benefit_num_' . $i] ?></div>
                            <div class="benefits-name"><?= $settingPageRecuitment['benefit_name_' . $i] ?></div>
                            <div class="benefits-detail">
                                <p><?= $settingPageRecuitment['benefit_detail_' . $i] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section id="section-decoration">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="decoration-media">
                        <img src="<?= $settingPageRecuitment['decoration_media'] ?>" alt="">
                    </div>
                </div>

                <div class="col-lg-3 no-padding">
                    <div class="decoration-content">
                        <div class="decoration-title">
                            <h3><?= $settingPageRecuitment['decoration_title'] ?></h3>
                        </div>
                        <div class="decoration-detail">
                            <p>
                                <?= $settingPageRecuitment['decoration_detail'] ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="team-box-svg">
            <svg id="es6BAjzpUPa1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1925.945000 257.064000" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                <defs>
                    <linearGradient id="es6BAjzpUPa5-fill" x1="0.784000" y1="-0.323000" x2="0.509000" y2="1.049000" spreadMethod="pad" gradientUnits="objectBoundingBox">
                        <stop id="es6BAjzpUPa5-fill-0" offset="0%" stop-color="rgb(112,239,209)"></stop>
                        <stop id="es6BAjzpUPa5-fill-1" offset="100%" stop-color="rgb(27,193,193)"></stop>
                    </linearGradient>
                    <linearGradient id="es6BAjzpUPa6-fill" x1="0.784000" y1="-0.323000" x2="0.509000" y2="1.049000" spreadMethod="pad" gradientUnits="objectBoundingBox">
                        <stop id="es6BAjzpUPa6-fill-0" offset="0%" stop-color="rgb(112,239,209)"></stop>
                        <stop id="es6BAjzpUPa6-fill-1" offset="100%" stop-color="rgb(27,193,193)"></stop>
                    </linearGradient>
                </defs>
                <g id="es6BAjzpUPa2" transform="matrix(1 0 0 1 0.27100000000000 0.51900000000000)">
                    <path id="es6BAjzpUPa3" d="M0,148.766000C0,148.766000,88.339000,98.874000,239.881000,96.912000C391.423000,94.950000,462.252000,125.768000,582.188000,139.018000C702.124000,152.268000,934.693000,191.462000,1236.267000,71.182000C1537.841000,-49.098000,1801.723000,12.690000,1920,43.556000" transform="matrix(0.99863000000000 0.05233600000000 -0.05233600000000 0.99863000000000 8.15300000000000 0)" fill="none" stroke="rgb(52,213,209)" stroke-width="1"></path>
                    <g id="es6BAjzpUPa4" transform="matrix(0.99863000000000 0.05233600000000 -0.05233600000000 0.99863000000000 659.67399999999998 -4218.06999999999971)">
                        <rect id="es6BAjzpUPa5" width="44.484000" height="44.264000" rx="15" ry="15" transform="matrix(1.00030467929165 0.01745506492822 0.01745506492822 1 608.03209882256408 4323.99416720728823)" fill="url(#es6BAjzpUPa5-fill)" stroke="none" stroke-width="1"></rect>
                        <rect id="es6BAjzpUPa6" width="21.484000" height="21.264000" rx="6" ry="6" transform="matrix(0.54317448217321 0.83961984368872 -0.83961984368872 0.54317448217321 831.68611306665980 4280.99532332464059)" fill="url(#es6BAjzpUPa6-fill)" stroke="none" stroke-width="1"></rect>
                    </g>
                </g>
                <script>

                    ! function(t, n) {
                        "object" == typeof exports &amp;&amp; "undefined" != typeof module ? module.exports = n() : "function" == typeof define &amp;&amp;
                        define.amd ? define(n) : (t = "undefined" != typeof globalThis ? globalThis : t || self).__SVGATOR_PLAYER__ =
                            n()
                    }(this, (function() {
                        "use strict";

                        function t(n) {
                            return (t = "function" == typeof Symbol &amp;&amp; "symbol" == typeof Symbol.iterator ? function(t) {
                                return typeof t
                            } : function(t) {
                                return t &amp;&amp; "function" == typeof Symbol &amp;&amp; t.constructor === Symbol &amp;&amp; t !== Symbol.prototype ?
                                    "symbol" : typeof t
                            })(n)
                        }

                        function n(t, n) {
                            if (!(t instanceof n)) throw new TypeError("Cannot call a class as a function")
                        }

                        function r(t, n) {
                            for (var r = 0; r &lt; n.length; r++) {
                                var e = n[r];
                                e.enumerable = e.enumerable || !1, e.configurable = !0, "value" in e &amp;&amp; (e.writable = !0), Object
                                    .defineProperty(t, e.key, e)
                            }
                        }

                        function e(t, n, e) {
                            return n &amp;&amp; r(t.prototype, n), e &amp;&amp; r(t, e), t
                        }

                        function i(t) {
                            return (i = Object.setPrototypeOf ? Object.getPrototypeOf : function(t) {
                                return t.__proto__ || Object.getPrototypeOf(t)
                            })(t)
                        }

                        function o(t, n) {
                            return (o = Object.setPrototypeOf || function(t, n) {
                                return t.__proto__ = n, t
                            })(t, n)
                        }

                        function u(t, n) {
                            return !n || "object" != typeof n &amp;&amp; "function" != typeof n ? function(t) {
                                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                                return t
                            }(t) : n
                        }

                        function a(t) {
                            var n = function() {
                                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                                if (Reflect.construct.sham) return !1;
                                if ("function" == typeof Proxy) return !0;
                                try {
                                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function() {}))), !0
                                } catch (t) {
                                    return !1
                                }
                            }();
                            return function() {
                                var r, e = i(t);
                                if (n) {
                                    var o = i(this).constructor;
                                    r = Reflect.construct(e, arguments, o)
                                } else r = e.apply(this, arguments);
                                return u(this, r)
                            }
                        }

                        function l(t, n, r) {
                            return (l = "undefined" != typeof Reflect &amp;&amp; Reflect.get ? Reflect.get : function(t, n, r) {
                                var e = function(t, n) {
                                    for (; !Object.prototype.hasOwnProperty.call(t, n) &amp;&amp; null !== (t = i(t)););
                                    return t
                                }(t, n);
                                if (e) {
                                    var o = Object.getOwnPropertyDescriptor(e, n);
                                    return o.get ? o.get.call(r) : o.value
                                }
                            })(t, n, r || t)
                        }
                        var f = Math.abs;

                        function s(t) {
                            return t
                        }

                        function c(t, n, r) {
                            var e = 1 - r;
                            return 3 * r * e * (t * e + n * r) + r * r * r
                        }

                        function h() {
                            var t = arguments.length &gt; 0 &amp;&amp; void 0 !== arguments[0] ? arguments[0] : 0,
                                n = arguments.length &gt; 1 &amp;&amp; void 0 !== arguments[1] ? arguments[1] : 0,
                                r = arguments.length &gt; 2 &amp;&amp; void 0 !== arguments[2] ? arguments[2] : 1,
                                e = arguments.length &gt; 3 &amp;&amp; void 0 !== arguments[3] ? arguments[3] : 1;
                            return t &lt; 0 || t &gt; 1 || r &lt; 0 || r &gt; 1 ? null : f(t - n) &lt;= 1e-5 &amp;&amp; f(r - e) &lt;= 1e-5 ? s : function(i) {
                                if (i &lt;= 0) return t &gt; 0 ? i * n / t : 0 === n &amp;&amp; r &gt; 0 ? i * e / r : 0;
                                if (i &gt;= 1) return r &lt; 1 ? 1 + (i - 1) * (e - 1) / (r - 1) : 1 === r &amp;&amp; t &lt; 1 ? 1 + (i - 1) * (n - 1) /
                                    (t - 1) : 1;
                                for (var o, u = 0, a = 1; u &lt; a;) {
                                    var l = c(t, r, o = (u + a) / 2);
                                    if (f(i - l) &lt; 1e-5) break;
                                    l &lt; i ? u = o : a = o
                                }
                                return c(n, e, o)
                            }
                        }

                        function v() {
                            return 1
                        }

                        function y(t) {
                            return 1 === t ? 1 : 0
                        }

                        function d() {
                            var t = arguments.length &gt; 0 &amp;&amp; void 0 !== arguments[0] ? arguments[0] : 1,
                                n = arguments.length &gt; 1 &amp;&amp; void 0 !== arguments[1] ? arguments[1] : 0;
                            if (1 === t) {
                                if (0 === n) return y;
                                if (1 === n) return v
                            }
                            var r = 1 / t;
                            return function(t) {
                                return t &gt;= 1 ? 1 : (t += n * r) - t % r
                            }
                        }

                        function g(t) {
                            var n = arguments.length &gt; 1 &amp;&amp; void 0 !== arguments[1] ? arguments[1] : 2;
                            if (Number.isInteger(t)) return t;
                            var r = Math.pow(10, n);
                            return Math.round(t * r) / r
                        }
                        var p = Math.PI / 180;

                        function m(t, n, r) {
                            return t &gt;= .5 ? r : n
                        }

                        function b(t, n, r) {
                            return 0 === t || n === r ? n : t * (r - n) + n
                        }

                        function w(t, n, r) {
                            var e = b(t, n, r);
                            return e &lt;= 0 ? 0 : e
                        }

                        function x(t, n, r) {
                            return 0 === t ? n : 1 === t ? r : {
                                x: b(t, n.x, r.x),
                                y: b(t, n.y, r.y)
                            }
                        }

                        function k(t, n, r) {
                            var e = function(t, n, r) {
                                return Math.round(b(t, n, r))
                            }(t, n, r);
                            return e &lt;= 0 ? 0 : e &gt;= 255 ? 255 : e
                        }

                        function A(t, n, r) {
                            return 0 === t ? n : 1 === t ? r : {
                                r: k(t, n.r, r.r),
                                g: k(t, n.g, r.g),
                                b: k(t, n.b, r.b),
                                a: b(t, null == n.a ? 1 : n.a, null == r.a ? 1 : r.a)
                            }
                        }

                        function _(t, n, r) {
                            if (0 === t) return n;
                            if (1 === t) return r;
                            var e = n.length;
                            if (e !== r.length) return m(t, n, r);
                            for (var i = [], o = 0; o &lt; e; o++) i.push(A(t, n[o], r[o]));
                            return i
                        }

                        function S(t, n) {
                            for (var r = [], e = 0; e &lt; t; e++) r.push(n);
                            return r
                        }

                        function O(t, n) {
                            if (--n &lt;= 0) return t;
                            var r = (t = Object.assign([], t)).length;
                            do {
                                for (var e = 0; e &lt; r; e++) t.push(t[e])
                            } while (--n &gt; 0);
                            return t
                        }
                        var M, j = function() {
                                function t(r) {
                                    n(this, t), this.list = r, this.length = r.length
                                }
                                return e(t, [{
                                    key: "setAttribute",
                                    value: function(t, n) {
                                        for (var r = this.list, e = 0; e &lt; this.length; e++) r[e].setAttribute(t, n)
                                    }
                                }, {
                                    key: "removeAttribute",
                                    value: function(t) {
                                        for (var n = this.list, r = 0; r &lt; this.length; r++) n[r].removeAttribute(t)
                                    }
                                }, {
                                    key: "style",
                                    value: function(t, n) {
                                        for (var r = this.list, e = 0; e &lt; this.length; e++) r[e].style[t] = n
                                    }
                                }]), t
                            }(),
                            F = /-./g,
                            P = function(t, n) {
                                return n.toUpperCase()
                            };

                        function B(t) {
                            return "function" == typeof t ? t : m
                        }

                        function I(t) {
                            return t ? "function" == typeof t ? t : Array.isArray(t) ? function(t) {
                                var n = arguments.length &gt; 1 &amp;&amp; void 0 !== arguments[1] ? arguments[1] : s;
                                if (!Array.isArray(t)) return n;
                                switch (t.length) {
                                    case 1:
                                        return d(t[0]) || n;
                                    case 2:
                                        return d(t[0], t[1]) || n;
                                    case 4:
                                        return h(t[0], t[1], t[2], t[3]) || n
                                }
                                return n
                            }(t, null) : function(t, n) {
                                var r = arguments.length &gt; 2 &amp;&amp; void 0 !== arguments[2] ? arguments[2] : s;
                                switch (t) {
                                    case "linear":
                                        return s;
                                    case "steps":
                                        return d(n.steps || 1, n.jump || 0) || r;
                                    case "bezier":
                                    case "cubic-bezier":
                                        return h(n.x1 || 0, n.y1 || 0, n.x2 || 0, n.y2 || 0) || r
                                }
                                return r
                            }(t.type, t.value, null) : null
                        }

                        function R(t, n, r) {
                            var e = arguments.length &gt; 3 &amp;&amp; void 0 !== arguments[3] &amp;&amp; arguments[3],
                                i = n.length - 1;
                            if (t &lt;= n[0].t) return e ? [0, 0, n[0].v] : n[0].v;
                            if (t &gt;= n[i].t) return e ? [i, 1, n[i].v] : n[i].v;
                            var o, u = n[0],
                                a = null;
                            for (o = 1; o &lt;= i; o++) {
                                if (!(t &gt; n[o].t)) {
                                    a = n[o];
                                    break
                                }
                                u = n[o]
                            }
                            return null == a ? e ? [i, 1, n[i].v] : n[i].v : u.t === a.t ? e ? [o, 1, a.v] : a.v : (t = (t - u.t) / (a
                                .t - u.t), u.e &amp;&amp; (t = u.e(t)), e ? [o, t, r(t, u.v, a.v)] : r(t, u.v, a.v))
                        }

                        function q(t, n) {
                            var r = arguments.length &gt; 2 &amp;&amp; void 0 !== arguments[2] ? arguments[2] : null;
                            return t &amp;&amp; t.length ? "function" != typeof n ? null : ("function" != typeof r &amp;&amp; (r = null), function(e) {
                                var i = R(e, t, n);
                                return null != i &amp;&amp; r &amp;&amp; (i = r(i)), i
                            }) : null
                        }

                        function E(t, n) {
                            return t.t - n.t
                        }

                        function T(n, r, e, i, o) {
                            var u, a = "@" === e[0],
                                l = "#" === e[0],
                                f = M[e],
                                s = m;
                            switch (a ? (u = e.substr(1), e = u.replace(F, P)) : l &amp;&amp; (e = e.substr(1)), t(f)) {
                                case "function":
                                    if (s = f(i, o, R, I, e, a, r, n), l) return s;
                                    break;
                                case "string":
                                    s = q(i, B(f));
                                    break;
                                case "object":
                                    if ((s = q(i, B(f.i), f.f)) &amp;&amp; "function" == typeof f.u) return f.u(r, s, e, a, n)
                            }
                            return s ? function(t, n, r) {
                                var e = arguments.length &gt; 3 &amp;&amp; void 0 !== arguments[3] &amp;&amp; arguments[3];
                                if (e) return t instanceof j ? function(e) {
                                    return t.style(n, r(e))
                                } : function(e) {
                                    return t.style[n] = r(e)
                                };
                                if (Array.isArray(n)) {
                                    var i = n.length;
                                    return function(e) {
                                        var o = r(e);
                                        if (null == o)
                                            for (var u = 0; u &lt; i; u++) t[u].removeAttribute(n);
                                        else
                                            for (var a = 0; a &lt; i; a++) t[a].setAttribute(n, o)
                                    }
                                }
                                return function(e) {
                                    var i = r(e);
                                    null == i ? t.removeAttribute(n) : t.setAttribute(n, i)
                                }
                            }(r, e, s, a) : null
                        }

                        function N(n, r, e, i) {
                            if (!i || "object" !== t(i)) return null;
                            var o = null,
                                u = null;
                            return Array.isArray(i) ? u = function(t) {
                                if (!t || !t.length) return null;
                                for (var n = 0; n &lt; t.length; n++) t[n].e &amp;&amp; (t[n].e = I(t[n].e));
                                return t.sort(E)
                            }(i) : (u = i.keys, o = i.data || null), u ? T(n, r, e, u, o) : null
                        }

                        function C(t, n, r) {
                            if (!r) return null;
                            var e = [];
                            for (var i in r)
                                if (r.hasOwnProperty(i)) {
                                    var o = N(t, n, i, r[i]);
                                    o &amp;&amp; e.push(o)
                                } return e.length ? e : null
                        }

                        function z(t, n) {
                            if (!n.duration || n.duration &lt; 0) return null;
                            var r = function(t, n) {
                                if (!n) return null;
                                var r = [];
                                if (Array.isArray(n))
                                    for (var e = n.length, i = 0; i &lt; e; i++) {
                                        var o = n[i];
                                        if (2 === o.length) {
                                            var u = null;
                                            if ("string" == typeof o[0]) u = t.getElementById(o[0]);
                                            else if (Array.isArray(o[0])) {
                                                u = [];
                                                for (var a = 0; a &lt; o[0].length; a++)
                                                    if ("string" == typeof o[0][a]) {
                                                        var l = t.getElementById(o[0][a]);
                                                        l &amp;&amp; u.push(l)
                                                    } u = u.length ? 1 === u.length ? u[0] : new j(u) : null
                                            }
                                            if (u) {
                                                var f = C(t, u, o[1]);
                                                f &amp;&amp; (r = r.concat(f))
                                            }
                                        }
                                    } else
                                    for (var s in n)
                                        if (n.hasOwnProperty(s)) {
                                            var c = t.getElementById(s);
                                            if (c) {
                                                var h = C(t, c, n[s]);
                                                h &amp;&amp; (r = r.concat(h))
                                            }
                                        } return r.length ? r : null
                            }(t, n.elements);
                            return r ? function(t, n) {
                                var r = arguments.length &gt; 2 &amp;&amp; void 0 !== arguments[2] ? arguments[2] : 1 / 0,
                                    e = arguments.length &gt; 3 &amp;&amp; void 0 !== arguments[3] ? arguments[3] : 1,
                                    i = arguments.length &gt; 4 &amp;&amp; void 0 !== arguments[4] &amp;&amp; arguments[4],
                                    o = arguments.length &gt; 5 &amp;&amp; void 0 !== arguments[5] ? arguments[5] : 1,
                                    u = t.length,
                                    a = e &gt; 0 ? n : 0;
                                i &amp;&amp; r % 2 == 0 &amp;&amp; (a = n - a);
                                var l = null;
                                return function(f, s) {
                                    var c = f % n,
                                        h = 1 + (f - c) / n;
                                    s *= e, i &amp;&amp; h % 2 == 0 &amp;&amp; (s = -s);
                                    var v = !1;
                                    if (h &gt; r) c = a, v = !0, -1 === o &amp;&amp; (c = e &gt; 0 ? 0 : n);
                                    else if (s &lt; 0 &amp;&amp; (c = n - c), c === l) return !1;
                                    l = c;
                                    for (var y = 0; y &lt; u; y++) t[y](c);
                                    return v
                                }
                            }(r, n.duration, n.iterations || 1 / 0, n.direction || 1, !!n.alternate, n.fill || 1) : null
                        }
                        var L = function() {
                            function t(r, e) {
                                var i = arguments.length &gt; 2 &amp;&amp; void 0 !== arguments[2] ? arguments[2] : {};
                                n(this, t), this._id = 0, this._running = !1, this._rollingBack = !1, this._animations = r, this
                                    .duration = e.duration, this.alternate = e.alternate, this.fill = e.fill, this.iterations = e
                                    .iterations, this.direction = i.direction || 1, this.speed = i.speed || 1, this.fps = i.fps || 100,
                                    this.offset = i.offset || 0, this.rollbackStartOffset = 0
                            }
                            return e(t, [{
                                key: "_rollback",
                                value: function() {
                                    var t = this,
                                        n = 1 / 0,
                                        r = null;
                                    this.rollbackStartOffset = this.offset, this._rollingBack || (this._rollingBack = !0, this
                                        ._running = !0);
                                    this._id = window.requestAnimationFrame((function e(i) {
                                        if (t._rollingBack) {
                                            null == r &amp;&amp; (r = i);
                                            var o = i - r,
                                                u = t.rollbackStartOffset - o,
                                                a = Math.round(u * t.speed);
                                            if (a &gt; t.duration &amp;&amp; n != 1 / 0) {
                                                var l = !!t.alternate &amp;&amp; a / t.duration % 2 &gt; 1,
                                                    f = a % t.duration;
                                                a = (f += l ? t.duration : 0) || t.duration
                                            }
                                            var s = t.fps ? 1e3 / t.fps : 0,
                                                c = Math.max(0, a);
                                            if (c &lt; n - s) {
                                                t.offset = c, n = c;
                                                for (var h = t._animations, v = h.length, y = 0; y &lt; v; y++) h[y](c, t.direction)
                                            }
                                            var d = !1;
                                            if (t.iterations &gt; 0 &amp;&amp; -1 === t.fill) {
                                                var g = t.iterations * t.duration,
                                                    p = g == a;
                                                a = p ? 0 : a, t.offset = p ? 0 : t.offset, d = a &gt; g
                                            }
                                            a &gt; 0 &amp;&amp; t.offset &gt;= a &amp;&amp; !d ? t._id = window.requestAnimationFrame(e) : t.stop()
                                        }
                                    }))
                                }
                            }, {
                                key: "_start",
                                value: function() {
                                    var t = this,
                                        n = arguments.length &gt; 0 &amp;&amp; void 0 !== arguments[0] ? arguments[0] : 0,
                                        r = -1 / 0,
                                        e = null,
                                        i = {},
                                        o = function o(u) {
                                            t._running = !0, null == e &amp;&amp; (e = u);
                                            var a = Math.round((u - e + n) * t.speed),
                                                l = t.fps ? 1e3 / t.fps : 0;
                                            if (a &gt; r + l &amp;&amp; !t._rollingBack) {
                                                t.offset = a, r = a;
                                                for (var f = t._animations, s = f.length, c = 0, h = 0; h &lt; s; h++) i[h] ? c++ : (i[h] =
                                                    f[h](a, t.direction), i[h] &amp;&amp; c++);
                                                if (c === s) return void t._stop()
                                            }
                                            t._id = window.requestAnimationFrame(o)
                                        };
                                    this._id = window.requestAnimationFrame(o)
                                }
                            }, {
                                key: "_stop",
                                value: function() {
                                    this._id &amp;&amp; window.cancelAnimationFrame(this._id), this._running = !1, this._rollingBack = !1
                                }
                            }, {
                                key: "play",
                                value: function() {
                                    !this._rollingBack &amp;&amp; this._running || (this._rollingBack = !1, this.rollbackStartOffset &gt;
                                    this.duration &amp;&amp; (this.offset = this.rollbackStartOffset - (this.rollbackStartOffset -
                                        this.offset) % this.duration, this.rollbackStartOffset = 0), this._start(this.offset))
                                }
                            }, {
                                key: "stop",
                                value: function() {
                                    this._stop(), this.offset = 0, this.rollbackStartOffset = 0;
                                    var t = this.direction,
                                        n = this._animations;
                                    window.requestAnimationFrame((function() {
                                        for (var r = 0; r &lt; n.length; r++) n[r](0, t)
                                    }))
                                }
                            }, {
                                key: "reachedToEnd",
                                value: function() {
                                    return this.iterations &gt; 0 &amp;&amp; this.offset &gt;= this.iterations * this.duration
                                }
                            }, {
                                key: "restart",
                                value: function() {
                                    this._stop(), this.offset = 0, this._start()
                                }
                            }, {
                                key: "pause",
                                value: function() {
                                    this._stop()
                                }
                            }, {
                                key: "reverse",
                                value: function() {
                                    this.direction = -this.direction
                                }
                            }], [{
                                key: "build",
                                value: function(n, r) {
                                    return (n = function(t, n) {
                                        if (M = n, !t || !t.root || !Array.isArray(t.animations)) return null;
                                        for (var r = document.getElementsByTagName("svg"), e = !1, i = 0; i &lt; r.length; i++)
                                            if (r[i].id === t.root &amp;&amp; !r[i].svgatorAnimation) {
                                                (e = r[i]).svgatorAnimation = !0;
                                                break
                                            } if (!e) return null;
                                        var o = t.animations.map((function(t) {
                                            return z(e, t)
                                        })).filter((function(t) {
                                            return !!t
                                        }));
                                        return o.length ? {
                                            element: e,
                                            animations: o,
                                            animationSettings: t.animationSettings,
                                            options: t.options || void 0
                                        } : null
                                    }(n, r)) ? {
                                        el: n.element,
                                        options: n.options || {},
                                        player: new t(n.animations, n.animationSettings, n.options)
                                    } : null
                                }
                            }]), t
                        }();
                        ! function() {
                            for (var t = 0, n = ["ms", "moz", "webkit", "o"], r = 0; r &lt; n.length &amp;&amp; !window.requestAnimationFrame; ++r)
                                window.requestAnimationFrame = window[n[r] + "RequestAnimationFrame"], window.cancelAnimationFrame =
                                    window[n[r] + "CancelAnimationFrame"] || window[n[r] + "CancelRequestAnimationFrame"];
                            window.requestAnimationFrame || (window.requestAnimationFrame = function(n) {
                                var r = Date.now(),
                                    e = Math.max(0, 16 - (r - t)),
                                    i = window.setTimeout((function() {
                                        n(r + e)
                                    }), e);
                                return t = r + e, i
                            }, window.cancelAnimationFrame = window.clearTimeout)
                        }();
                        var D = /\.0+$/g;

                        function Q(t) {
                            return Number.isInteger(t) ? t + "" : t.toFixed(6).replace(D, "")
                        }

                        function U(t) {
                            var n = arguments.length &gt; 1 &amp;&amp; void 0 !== arguments[1] ? arguments[1] : " ";
                            return t &amp;&amp; t.length ? t.map(Q).join(n) : ""
                        }

                        function V(t) {
                            return t ? null == t.a || t.a &gt;= 1 ? "rgb(" + t.r + "," + t.g + "," + t.b + ")" : "rgba(" + t.r + "," + t
                                .g + "," + t.b + "," + t.a + ")" : "transparent"
                        }
                        var $ = {
                                f: null,
                                i: function(t, n, r) {
                                    return 0 === t ? n : 1 === t ? r : {
                                        x: w(t, n.x, r.x),
                                        y: w(t, n.y, r.y)
                                    }
                                },
                                u: function(t, n) {
                                    return function(r) {
                                        var e = n(r);
                                        t.setAttribute("rx", Q(e.x)), t.setAttribute("ry", Q(e.y))
                                    }
                                }
                            },
                            G = {
                                f: null,
                                i: function(t, n, r) {
                                    return 0 === t ? n : 1 === t ? r : {
                                        width: w(t, n.width, r.width),
                                        height: w(t, n.height, r.height)
                                    }
                                },
                                u: function(t, n) {
                                    return function(r) {
                                        var e = n(r);
                                        t.setAttribute("width", Q(e.width)), t.setAttribute("height", Q(e.height))
                                    }
                                }
                            },
                            H = Math.sin,
                            Y = Math.cos,
                            Z = Math.acos,
                            J = Math.asin,
                            K = Math.tan,
                            W = Math.atan2,
                            X = Math.PI / 180,
                            tt = 180 / Math.PI,
                            nt = Math.sqrt,
                            rt = function() {
                                function t() {
                                    var r = arguments.length &gt; 0 &amp;&amp; void 0 !== arguments[0] ? arguments[0] : 1,
                                        e = arguments.length &gt; 1 &amp;&amp; void 0 !== arguments[1] ? arguments[1] : 0,
                                        i = arguments.length &gt; 2 &amp;&amp; void 0 !== arguments[2] ? arguments[2] : 0,
                                        o = arguments.length &gt; 3 &amp;&amp; void 0 !== arguments[3] ? arguments[3] : 1,
                                        u = arguments.length &gt; 4 &amp;&amp; void 0 !== arguments[4] ? arguments[4] : 0,
                                        a = arguments.length &gt; 5 &amp;&amp; void 0 !== arguments[5] ? arguments[5] : 0;
                                    n(this, t), this.m = [r, e, i, o, u, a], this.i = null, this.w = null, this.s = null
                                }
                                return e(t, [{
                                    key: "determinant",
                                    get: function() {
                                        var t = this.m;
                                        return t[0] * t[3] - t[1] * t[2]
                                    }
                                }, {
                                    key: "isIdentity",
                                    get: function() {
                                        if (null === this.i) {
                                            var t = this.m;
                                            this.i = 1 === t[0] &amp;&amp; 0 === t[1] &amp;&amp; 0 === t[2] &amp;&amp; 1 === t[3] &amp;&amp; 0 === t[4] &amp;&amp; 0 === t[5]
                                        }
                                        return this.i
                                    }
                                }, {
                                    key: "point",
                                    value: function(t, n) {
                                        var r = this.m;
                                        return {
                                            x: r[0] * t + r[2] * n + r[4],
                                            y: r[1] * t + r[3] * n + r[5]
                                        }
                                    }
                                }, {
                                    key: "translateSelf",
                                    value: function() {
                                        var t = arguments.length &gt; 0 &amp;&amp; void 0 !== arguments[0] ? arguments[0] : 0,
                                            n = arguments.length &gt; 1 &amp;&amp; void 0 !== arguments[1] ? arguments[1] : 0;
                                        if (!t &amp;&amp; !n) return this;
                                        var r = this.m;
                                        return r[4] += r[0] * t + r[2] * n, r[5] += r[1] * t + r[3] * n, this.w = this.s = this.i =
                                            null, this
                                    }
                                }, {
                                    key: "rotateSelf",
                                    value: function() {
                                        var t = arguments.length &gt; 0 &amp;&amp; void 0 !== arguments[0] ? arguments[0] : 0;
                                        if (t %= 360) {
                                            var n = H(t *= X),
                                                r = Y(t),
                                                e = this.m,
                                                i = e[0],
                                                o = e[1];
                                            e[0] = i * r + e[2] * n, e[1] = o * r + e[3] * n, e[2] = e[2] * r - i * n, e[3] = e[3] * r -
                                                o * n, this.w = this.s = this.i = null
                                        }
                                        return this
                                    }
                                }, {
                                    key: "scaleSelf",
                                    value: function() {
                                        var t = arguments.length &gt; 0 &amp;&amp; void 0 !== arguments[0] ? arguments[0] : 1,
                                            n = arguments.length &gt; 1 &amp;&amp; void 0 !== arguments[1] ? arguments[1] : 1;
                                        if (1 !== t || 1 !== n) {
                                            var r = this.m;
                                            r[0] *= t, r[1] *= t, r[2] *= n, r[3] *= n, this.w = this.s = this.i = null
                                        }
                                        return this
                                    }
                                }, {
                                    key: "skewSelf",
                                    value: function(t, n) {
                                        if (n %= 360, (t %= 360) || n) {
                                            var r = this.m,
                                                e = r[0],
                                                i = r[1],
                                                o = r[2],
                                                u = r[3];
                                            t &amp;&amp; (t = K(t * X), r[2] += e * t, r[3] += i * t), n &amp;&amp; (n = K(n * X), r[0] += o * n, r[
                                                1] += u * n), this.w = this.s = this.i = null
                                        }
                                        return this
                                    }
                                }, {
                                    key: "resetSelf",
                                    value: function() {
                                        var t = arguments.length &gt; 0 &amp;&amp; void 0 !== arguments[0] ? arguments[0] : 1,
                                            n = arguments.length &gt; 1 &amp;&amp; void 0 !== arguments[1] ? arguments[1] : 0,
                                            r = arguments.length &gt; 2 &amp;&amp; void 0 !== arguments[2] ? arguments[2] : 0,
                                            e = arguments.length &gt; 3 &amp;&amp; void 0 !== arguments[3] ? arguments[3] : 1,
                                            i = arguments.length &gt; 4 &amp;&amp; void 0 !== arguments[4] ? arguments[4] : 0,
                                            o = arguments.length &gt; 5 &amp;&amp; void 0 !== arguments[5] ? arguments[5] : 0,
                                            u = this.m;
                                        return u[0] = t, u[1] = n, u[2] = r, u[3] = e, u[4] = i, u[5] = o, this.w = this.s = this.i =
                                            null, this
                                    }
                                }, {
                                    key: "recomposeSelf",
                                    value: function() {
                                        var t = arguments.length &gt; 0 &amp;&amp; void 0 !== arguments[0] ? arguments[0] : null,
                                            n = arguments.length &gt; 1 &amp;&amp; void 0 !== arguments[1] ? arguments[1] : null,
                                            r = arguments.length &gt; 2 &amp;&amp; void 0 !== arguments[2] ? arguments[2] : null,
                                            e = arguments.length &gt; 3 &amp;&amp; void 0 !== arguments[3] ? arguments[3] : null,
                                            i = arguments.length &gt; 4 &amp;&amp; void 0 !== arguments[4] ? arguments[4] : null;
                                        return this.isIdentity || this.resetSelf(), t &amp;&amp; (t.x || t.y) &amp;&amp; this.translateSelf(t.x, t.y),
                                        n &amp;&amp; this.rotateSelf(n), r &amp;&amp; (r.x &amp;&amp; this.skewSelf(r.x, 0), r.y &amp;&amp; this.skewSelf(0, r.y)),
                                        !e || 1 === e.x &amp;&amp; 1 === e.y || this.scaleSelf(e.x, e.y), i &amp;&amp; (i.x || i.y) &amp;&amp; this
                                            .translateSelf(i.x, i.y), this
                                    }
                                }, {
                                    key: "decompose",
                                    value: function() {
                                        var t = arguments.length &gt; 0 &amp;&amp; void 0 !== arguments[0] ? arguments[0] : 0,
                                            n = arguments.length &gt; 1 &amp;&amp; void 0 !== arguments[1] ? arguments[1] : 0,
                                            r = this.m,
                                            e = r[0] * r[0] + r[1] * r[1],
                                            i = [
                                                [r[0], r[1]],
                                                [r[2], r[3]]
                                            ],
                                            o = nt(e);
                                        if (0 === o) return {
                                            origin: {
                                                x: r[4],
                                                y: r[5]
                                            },
                                            translate: {
                                                x: t,
                                                y: n
                                            },
                                            scale: {
                                                x: 0,
                                                y: 0
                                            },
                                            skew: {
                                                x: 0,
                                                y: 0
                                            },
                                            rotate: 0
                                        };
                                        i[0][0] /= o, i[0][1] /= o;
                                        var u = r[0] * r[3] - r[1] * r[2] &lt; 0;
                                        u &amp;&amp; (o = -o);
                                        var a = i[0][0] * i[1][0] + i[0][1] * i[1][1];
                                        i[1][0] -= i[0][0] * a, i[1][1] -= i[0][1] * a;
                                        var l = nt(i[1][0] * i[1][0] + i[1][1] * i[1][1]);
                                        if (0 === l) return {
                                            origin: {
                                                x: r[4],
                                                y: r[5]
                                            },
                                            translate: {
                                                x: t,
                                                y: n
                                            },
                                            scale: {
                                                x: o,
                                                y: 0
                                            },
                                            skew: {
                                                x: 0,
                                                y: 0
                                            },
                                            rotate: 0
                                        };
                                        i[1][0] /= l, i[1][1] /= l, a /= l;
                                        var f = 0;
                                        return i[1][1] &lt; 0 ? (f = Z(i[1][1]) * tt, i[0][1] &lt; 0 &amp;&amp; (f = 360 - f)) : f = J(i[0][1]) *
                                            tt, u &amp;&amp; (f = -f), a = W(a, nt(i[0][0] * i[0][0] + i[0][1] * i[0][1])) * tt, u &amp;&amp; (a = -
                                            a), {
                                            origin: {
                                                x: r[4],
                                                y: r[5]
                                            },
                                            translate: {
                                                x: t,
                                                y: n
                                            },
                                            scale: {
                                                x: o,
                                                y: l
                                            },
                                            skew: {
                                                x: a,
                                                y: 0
                                            },
                                            rotate: f
                                        }
                                    }
                                }, {
                                    key: "toString",
                                    value: function() {
                                        return null === this.s &amp;&amp; (this.s = "matrix(" + this.m.map(it).join(" ") + ")"), this.s
                                    }
                                }]), t
                            }(),
                            et = /\.0+$/;

                        function it(t) {
                            return Number.isInteger(t) ? t : t.toFixed(14).replace(et, "")
                        }

                        function ot(t, n, r) {
                            return t + (n - t) * r
                        }

                        function ut(t, n, r) {
                            var e = arguments.length &gt; 3 &amp;&amp; void 0 !== arguments[3] &amp;&amp; arguments[3],
                                i = {
                                    x: ot(t.x, n.x, r),
                                    y: ot(t.y, n.y, r)
                                };
                            return e &amp;&amp; (i.a = at(t, n)), i
                        }

                        function at(t, n) {
                            return Math.atan2(n.y - t.y, n.x - t.x)
                        }
                        Object.freeze({
                            M: 2,
                            L: 2,
                            Z: 0,
                            H: 1,
                            V: 1,
                            C: 6,
                            Q: 4,
                            T: 2,
                            S: 4,
                            A: 7
                        });
                        var lt = {},
                            ft = null;

                        function st(n) {
                            var r = function() {
                                if (ft) return ft;
                                if ("object" !== ("undefined" == typeof document ? "undefined" : t(document))) return {};
                                var n = document.createElementNS("http://www.w3.org/2000/svg", "svg");
                                return n.style.position = "absolute", n.style.opacity = "0.01", n.style.zIndex = "-9999", n.style.left =
                                    "-9999px", n.style.width = "1px", n.style.height = "1px", ft = {
                                    svg: n
                                }
                            }().svg;
                            if (!r) return function(t) {
                                return null
                            };
                            var e = document.createElementNS(r.namespaceURI, "path");
                            e.setAttributeNS(null, "d", n), e.setAttributeNS(null, "fill", "none"), e.setAttributeNS(null, "stroke",
                                "none"), r.appendChild(e);
                            var i = e.getTotalLength();
                            return function(t) {
                                var n = e.getPointAtLength(i * t);
                                return {
                                    x: n.x,
                                    y: n.y
                                }
                            }
                        }

                        function ct(t) {
                            return lt[t] ? lt[t] : lt[t] = st(t)
                        }

                        function ht(t, n, r, e) {
                            if (!t || !e) return !1;
                            var i = ["M", t.x, t.y];
                            if (n &amp;&amp; r &amp;&amp; (i.push("C"), i.push(n.x), i.push(n.y), i.push(r.x), i.push(r.y)), n ? !r : r) {
                                var o = n || r;
                                i.push("Q"), i.push(o.x), i.push(o.y)
                            }
                            return n || r || i.push("L"), i.push(e.x), i.push(e.y), i.join(" ")
                        }

                        function vt(t, n, r, e) {
                            var i = arguments.length &gt; 4 &amp;&amp; void 0 !== arguments[4] ? arguments[4] : 1,
                                o = ht(t, n, r, e),
                                u = ct(o);
                            try {
                                return u(i)
                            } catch (t) {
                                return null
                            }
                        }

                        function yt(t, n, r, e) {
                            var i = 1 - e;
                            return i * i * t + 2 * i * e * n + e * e * r
                        }

                        function dt(t, n, r, e) {
                            return 2 * (1 - e) * (n - t) + 2 * e * (r - n)
                        }

                        function gt(t, n, r, e) {
                            var i = arguments.length &gt; 4 &amp;&amp; void 0 !== arguments[4] &amp;&amp; arguments[4],
                                o = vt(t, n, null, r, e);
                            return o || (o = {
                                x: yt(t.x, n.x, r.x, e),
                                y: yt(t.y, n.y, r.y, e)
                            }), i &amp;&amp; (o.a = pt(t, n, r, e)), o
                        }

                        function pt(t, n, r, e) {
                            return Math.atan2(dt(t.y, n.y, r.y, e), dt(t.x, n.x, r.x, e))
                        }

                        function mt(t, n, r, e, i) {
                            var o = i * i;
                            return i * o * (e - t + 3 * (n - r)) + 3 * o * (t + r - 2 * n) + 3 * i * (n - t) + t
                        }

                        function bt(t, n, r, e, i) {
                            var o = 1 - i;
                            return 3 * (o * o * (n - t) + 2 * o * i * (r - n) + i * i * (e - r))
                        }

                        function wt(t, n, r, e, i) {
                            var o = arguments.length &gt; 5 &amp;&amp; void 0 !== arguments[5] &amp;&amp; arguments[5],
                                u = vt(t, n, r, e, i);
                            return u || (u = {
                                x: mt(t.x, n.x, r.x, e.x, i),
                                y: mt(t.y, n.y, r.y, e.y, i)
                            }), o &amp;&amp; (u.a = xt(t, n, r, e, i)), u
                        }

                        function xt(t, n, r, e, i) {
                            return Math.atan2(bt(t.y, n.y, r.y, e.y, i), bt(t.x, n.x, r.x, e.x, i))
                        }

                        function kt(t, n, r) {
                            var e = arguments.length &gt; 3 &amp;&amp; void 0 !== arguments[3] &amp;&amp; arguments[3];
                            if (_t(n)) {
                                if (St(r)) return gt(n, r.start, r, t, e)
                            } else if (_t(r)) {
                                if (n.end) return gt(n, n.end, r, t, e)
                            } else {
                                if (n.end) return r.start ? wt(n, n.end, r.start, r, t, e) : gt(n, n.end, r, t, e);
                                if (r.start) return gt(n, r.start, r, t, e)
                            }
                            return ut(n, r, t, e)
                        }

                        function At(t, n, r) {
                            var e = kt(t, n, r, !0);
                            return e.a = function(t) {
                                var n = arguments.length &gt; 1 &amp;&amp; void 0 !== arguments[1] &amp;&amp; arguments[1];
                                return n ? t + Math.PI : t
                            }(e.a) / p, e
                        }

                        function _t(t) {
                            return !t.type || "corner" === t.type
                        }

                        function St(t) {
                            return null != t.start &amp;&amp; !_t(t)
                        }
                        var Ot = new rt;
                        var Mt = {
                                f: Q,
                                i: b
                            },
                            jt = {
                                f: Q,
                                i: function(t, n, r) {
                                    var e = b(t, n, r);
                                    return e &lt;= 0 ? 0 : e &gt;= 1 ? 1 : e
                                }
                            };

                        function Ft(t, n, r, e, i, o, u, a) {
                            return n = function(t, n, r) {
                                for (var e, i, o, u = t.length - 1, a = {}, l = 0; l &lt;= u; l++)(e = t[l]).e &amp;&amp; (e.e = n(e.e)), e.v &amp;&amp;
                                "g" === (i = e.v).t &amp;&amp; i.r &amp;&amp; (o = r.getElementById(i.r)) &amp;&amp; (a[i.r] = o.querySelectorAll("stop"));
                                return a
                            }(t, e, a),
                                function(e) {
                                    var i, o = r(e, t, Pt);
                                    return o ? "c" === o.t ? V(o.v) : "g" === o.t ? (n[o.r] &amp;&amp; function(t, n) {
                                        for (var r = 0, e = t.length; r &lt; e; r++) t[r].setAttribute("stop-color", V(n[r]))
                                    }(n[o.r], o.v), (i = o.r) ? "url(#" + i + ")" : "none") : "none" : "none"
                                }
                        }

                        function Pt(t, n, r) {
                            if (0 === t) return n;
                            if (1 === t) return r;
                            if (n &amp;&amp; r) {
                                var e = n.t;
                                if (e === r.t) switch (n.t) {
                                    case "c":
                                        return {
                                            t: e, v: A(t, n.v, r.v)
                                        };
                                    case "g":
                                        if (n.r === r.r) return {
                                            t: e,
                                            v: _(t, n.v, r.v),
                                            r: n.r
                                        }
                                }
                            }
                            return m(t, n, r)
                        }
                        var Bt = {
                            fill: Ft,
                            "fill-opacity": jt,
                            stroke: Ft,
                            "stroke-opacity": jt,
                            "stroke-width": Mt,
                            "stroke-dashoffset": {
                                f: Q,
                                i: b
                            },
                            "stroke-dasharray": {
                                f: function(t) {
                                    var n = arguments.length &gt; 1 &amp;&amp; void 0 !== arguments[1] ? arguments[1] : " ";
                                    return t &amp;&amp; t.length &gt; 0 &amp;&amp; (t = t.map((function(t) {
                                        return Math.floor(1e4 * t) / 1e4
                                    }))), U(t, n)
                                },
                                i: function(t, n, r) {
                                    var e, i, o, u = n.length,
                                        a = r.length;
                                    if (u !== a)
                                        if (0 === u) n = S(u = a, 0);
                                        else if (0 === a) a = u, r = S(u, 0);
                                        else {
                                            var l = (o = (e = u) * (i = a) / function(t, n) {
                                                for (var r; n;) r = n, n = t % n, t = r;
                                                return t || 1
                                            }(e, i)) &lt; 0 ? -o : o;
                                            n = O(n, Math.floor(l / u)), r = O(r, Math.floor(l / a)), u = a = l
                                        }
                                    for (var f = [], s = 0; s &lt; u; s++) f.push(g(w(t, n[s], r[s]), 6));
                                    return f
                                }
                            },
                            opacity: jt,
                            transform: function(n, r, e, i) {
                                if (!(n = function(n, r) {
                                    if (!n || "object" !== t(n)) return null;
                                    var e = !1;
                                    for (var i in n) n.hasOwnProperty(i) &amp;&amp; (n[i] &amp;&amp; n[i].length ? (n[i].forEach((function(t) {
                                        t.e &amp;&amp; (t.e = r(t.e))
                                    })), e = !0) : delete n[i]);
                                    return e ? n : null
                                }(n, i))) return null;
                                var o = function(t, i, o) {
                                    var u = arguments.length &gt; 3 &amp;&amp; void 0 !== arguments[3] ? arguments[3] : null;
                                    return n[t] ? e(i, n[t], o) : r &amp;&amp; r[t] ? r[t] : u
                                };
                                return r &amp;&amp; r.a &amp;&amp; n.o ? function(t) {
                                    var r = e(t, n.o, At);
                                    return Ot.recomposeSelf(r, o("r", t, b, 0) + r.a, o("k", t, x), o("s", t, x), o("t", t, x))
                                        .toString()
                                } : function(t) {
                                    return Ot.recomposeSelf(o("o", t, kt, null), o("r", t, b, 0), o("k", t, x), o("s", t, x), o("t",
                                        t, x)).toString()
                                }
                            },
                            r: Mt,
                            "#size": G,
                            "#radius": $,
                            _: function(t, n) {
                                if (Array.isArray(t))
                                    for (var r = 0; r &lt; t.length; r++) this[t[r]] = n;
                                else this[t] = n
                            }
                        };
                        return function(t) {
                            ! function(t, n) {
                                if ("function" != typeof n &amp;&amp; null !== n) throw new TypeError(
                                    "Super expression must either be null or a function");
                                t.prototype = Object.create(n &amp;&amp; n.prototype, {
                                    constructor: {
                                        value: t,
                                        writable: !0,
                                        configurable: !0
                                    }
                                }), n &amp;&amp; o(t, n)
                            }(u, t);
                            var r = a(u);

                            function u() {
                                return n(this, u), r.apply(this, arguments)
                            }
                            return e(u, null, [{
                                key: "build",
                                value: function(t) {
                                    var n = l(i(u), "build", this).call(this, t, Bt);
                                    n.el, n.options;
                                    var r = n.player;
                                    return function(t, n, r) {
                                        t.play()
                                    }(r), r
                                }
                            }]), u
                        }(L)
                    }));
                    __SVGATOR_PLAYER__.build({
                        "root": "es6BAjzpUPa1",
                        "animations": [{
                            "duration": 5000,
                            "direction": 1,
                            "iterations": 0,
                            "fill": -1,
                            "alternate": true,
                            "speed": 1,
                            "elements": {
                                "es6BAjzpUPa5": {
                                    "transform": {
                                        "data": {
                                            "k": {
                                                "x": 1,
                                                "y": 1
                                            },
                                            "t": {
                                                "x": -22.24199999813693,
                                                "y": -22.131999997506203
                                            }
                                        },
                                        "keys": {
                                            "o": [{
                                                "t": 0,
                                                "v": {
                                                    "x": -449.8447870586915,
                                                    "y": 4375.378206197992,
                                                    "type": "cusp",
                                                    "end": {
                                                        "x": -86.46074974265481,
                                                        "y": 4219.259282631204
                                                    }
                                                },
                                                "e": [0.42, 0, 1, 1]
                                            }, {
                                                "t": 3000,
                                                "v": {
                                                    "x": 630.6671909944531,
                                                    "y": 4346.514402758895,
                                                    "type": "cusp",
                                                    "start": {
                                                        "x": 153.46667424547806,
                                                        "y": 4460.703084486612
                                                    }
                                                }
                                            }],
                                            "r": [{
                                                "t": 0,
                                                "v": 525.8124774129324,
                                                "e": [0.42, 0, 0.58, 1]
                                            }, {
                                                "t": 3000,
                                                "v": 1080
                                            }]
                                        }
                                    }
                                },
                                "es6BAjzpUPa6": {
                                    "transform": {
                                        "data": {
                                            "t": {
                                                "x": -10.742000000886325,
                                                "y": -10.632000000912457
                                            }
                                        },
                                        "keys": {
                                            "o": [{
                                                "t": 3000,
                                                "v": {
                                                    "x": 664.321690072841,
                                                    "y": 4352.149525898827,
                                                    "type": "cusp",
                                                    "end": {
                                                        "x": 927.3730107758984,
                                                        "y": 4258.800277921839
                                                    }
                                                }
                                            }, {
                                                "t": 5000,
                                                "v": {
                                                    "x": 1481.419592738764,
                                                    "y": 4276.278778120452,
                                                    "type": "cusp",
                                                    "start": {
                                                        "x": 1129.8779875578145,
                                                        "y": 4184.839993122036
                                                    }
                                                }
                                            }],
                                            "r": [{
                                                "t": 3000,
                                                "v": 192.99999780112944
                                            }, {
                                                "t": 5000,
                                                "v": 1272.9999978011292
                                            }]
                                        }
                                    }
                                }
                            }
                        }],
                        "options": {
                            "start": "load",
                            "hover": "freeze",
                            "click": "freeze",
                            "scroll": 25,
                            "font": "embed",
                            "exportedIds": "unique",
                            "svgFormat": "animated",
                            "title": "Component 11 – 1"
                        },
                        "animationSettings": {
                            "duration": 5000,
                            "direction": 1,
                            "iterations": 0,
                            "fill": -1,
                            "alternate": true,
                            "speed": 1
                        }
                    })

                </script>
            </svg>
        </div>
    </section>

    <section id="section-registration-form">
        <div class="container">
            <div class="registration-form">
                <h3>
                    <?= $settingPageRecuitment['registration-title'] ?>
                </h3>
                <div class="registration-form-flex">
                    <div class="registration-form-img">
                        <img src="<?= $settingPageRecuitment['registration_form_img'] ?>" alt="">
                    </div>

                    <div class="registration-form-content">
                        <form action="">
                            <select name="position" id="position" required="">
                                <option value="position-1">Chọn chức vụ</option>
                                <option value="position-2">Trưởng phòng IT</option>
                                <option value="position-3">Trưởng phòng Marketing</option>
                                <option value="position-4">Thực tập sinh IT</option>
                            </select>

                            <input type="text" placeholder="Họ và tên *" required="">

                            <input type="text" placeholder="Số điện thoại *" required="">

                            <input type="text" placeholder="Email *" required="">

                            <input type="file" required="">

                            <div>
                                <button class="custom-btn btn-9" type="submit">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php
    getFooter();
?>
