/*
 Pixel-slide - sản phẩm của PixelADD.com
 Phiên bản 1.0 - 2017
 Bản quyền miễn phí
 Sử dụng: Mọi người đều có thể sử dụng sản phẩm này mà không cần phải trả phí
 Không: Chịu trách nhiệm về sự sử dụng vào các mục đích không đúng, hoặc sự sai lệch khi hoạt động
 Cấm: sử dụng sản phẩm này quảng bá với tên gọi khác của PixelADD.com, hoặc thay đổi mã nguồn với ý đồ không tốt rồi phân phối quảng bá

 Xem thông tin về phiên bản tại www.tinhocthoidai.vn/jquery-plugin
 */
!function (a) {
    a.fn.pixel_metro = function (b) {
        function k(b) {
            b.find("span#pixel-metro-mask-bg").css({height: 0});
            var d = b[0].scrollHeight + c.padd_box;
            b.find("span#pixel-metro-mask-bg").length > 0 ? b.find("span#pixel-metro-mask-bg").css({height: d}) : (b.append("<span id='pixel-metro-mask-bg'></span>"), a("#pixel-metro-mask-bg").css)
        }

        function l(a, b) {
            var d = 0, e = c.padd_s, f = c.padd_box,
                g = Math.round((b - 2 * f - e * (c.metro_rows - 1)) / c.metro_rows),
                h = Math.round((a - 2 * f) / (g + e)), i = a - g * h - Math.round(f) - e * (h - 1);
            return d = Math.round((i / h + g) * c.metro_rows + 2 * f + e * (c.metro_rows - 1) - (f + e / 3) / (a / b))
        }

        function m(b, e, f) {
            var h = c.padd_s, j = c.padd_box, l = Math.round((f - 2 * j - h * (c.metro_rows - 1)) / c.metro_rows),
                n = (Math.round(e / l), 0), o = 0, p = 0;
            if (g)for (i = 0; i < d.length; i++)a(d[i]).clearQueue();
            for (i = 0; i < d.length; i++)strS = a(d[i]).attr("size-o"), strS = strS.toLowerCase(), "small" == strS && a(d[i]).css({
                height: Math.round(l / 2 - h / 2),
                width: Math.round(l / 2 - h / 2)
            }), "normal" == strS && a(d[i]).css({height: l, width: l}), "wide" == strS && a(d[i]).css({
                height: l,
                width: 2 * l + h + 110
            }), "big" == strS && a(d[i]).css({
                height: 2 * l + h,
                width: 2 * l + h
            }), a(d[i]).css({
                "background-color": c.bg_color,
                color: c.txt_color,
                display: "block",
                transform: "none"
            }), i > 0 ? (o += a(d[i - 1]).width() + h, p > 0 && p % 2 != 0 && (n -= Math.round(l / 2) + h / 2), Math.round(a(d[i - 1]).height()) <= Math.round(l / 2) && Math.round(a(d[i]).height()) <= Math.round(l / 2) ? (p++, p % 2 != 0 && (o -= Math.round(l / 2) + h / 2, n += Math.round(l / 2) + h / 2)) : p = 0, o + a(d[i]).width() + Math.round(j) > e && (o = Math.round(j), n += l + h)) : (n = Math.round(j), o = Math.round(j)), a(d[i]).animate({
                top: n,
                left: o
            }, function () {
                "" != c.bg_metro && a(this).index() == d.length - 1 && k(b)
            });
            g = !1
        }

        function q(a) {
            var b = [];
            if (a / 5 <= 1) b[0] = Math.round(Math.random() * (a - 1)), ticTime = Math.round(5e3 * Math.random()), setTimeout(function () {
                r(b[0])
            }, ticTime); else if (a / 5 > 1 && a / 5 <= 2) {
                for (b[0] = Math.round(Math.random() * (a - 1)), b[1] = Math.round(Math.random() * (a - 1)); b[1] == b[0];)b[1] = Math.round(Math.random() * (a - 1));
                ticTime = Math.round(5e3 * Math.random()), setTimeout(function () {
                    r(b[0])
                }, ticTime), ticTime = Math.round(5e3 * Math.random()), setTimeout(function () {
                    r(b[1])
                }, ticTime)
            } else if (a / 5 > 2 && a / 5 <= 3) {
                for (b[0] = Math.round(Math.random() * (a - 1)), b[1] = Math.round(Math.random() * (a - 1)); b[1] == b[0];)b[1] = Math.round(Math.random() * (a - 1));
                for (b[2] = Math.round(Math.random() * (a - 1)); b[2] == b[0] && b[2] == b[1];)b[2] = Math.round(Math.random() * (a - 1));
                ticTime = Math.round(5e3 * Math.random()), setTimeout(function () {
                    r(b[0])
                }, ticTime), ticTime = Math.round(5e3 * Math.random()), setTimeout(function () {
                    r(b[1])
                }, ticTime), ticTime = Math.round(5e3 * Math.random()), setTimeout(function () {
                    r(b[2])
                }, ticTime)
            } else if (a / 5 > 3 && a / 5 <= 4) {
                for (b[0] = Math.round(Math.random() * (a - 1)), b[1] = Math.round(Math.random() * (a - 1)); b[1] == b[0];)b[1] = Math.round(Math.random() * (a - 1));
                for (b[2] = Math.round(Math.random() * (a - 1)); b[2] == b[0] && b[2] == b[1];)b[2] = Math.round(Math.random() * (a - 1));
                for (b[3] = Math.round(Math.random() * (a - 1)); b[3] == b[0] && b[3] == b[1] && b[3] == b[2];)b[2] = Math.round(Math.random() * (a - 1));
                ticTime = Math.round(5e3 * Math.random()), setTimeout(function () {
                    r(b[0])
                }, ticTime), ticTime = Math.round(5e3 * Math.random()), setTimeout(function () {
                    r(b[1])
                }, ticTime), ticTime = Math.round(5e3 * Math.random()), setTimeout(function () {
                    r(b[2])
                }, ticTime), ticTime = Math.round(5e3 * Math.random()), setTimeout(function () {
                    r(b[3])
                }, ticTime)
            } else if (a / 5 > 4) {
                for (b[0] = Math.round(Math.random() * (a - 1)), b[1] = Math.round(Math.random() * (a - 1)); b[1] == b[0];)b[1] = Math.round(Math.random() * (a - 1));
                for (b[2] = Math.round(Math.random() * (a - 1)); b[2] == b[0] && b[2] == b[1];)b[2] = Math.round(Math.random() * (a - 1));
                for (b[3] = Math.round(Math.random() * (a - 1)); b[3] == b[0] && b[3] == b[1] && b[3] == b[2];)b[2] = Math.round(Math.random() * (a - 1));
                for (b[4] = Math.round(Math.random() * (a - 1)); b[4] == b[0] && b[4] == b[1] && b[4] == b[2] && b[4] == b[3];)b[4] = Math.round(Math.random() * (a - 1));
                for (b[5] = Math.round(Math.random() * (a - 1)); b[5] == b[0] && b[5] == b[1] && b[5] == b[2] && b[5] == b[3] && b[5] == b[4];)b[5] = Math.round(Math.random() * (a - 1));
                ticTime = Math.round(5e3 * Math.random()), setTimeout(function () {
                    r(b[0])
                }, ticTime), ticTime = Math.round(5e3 * Math.random()), setTimeout(function () {
                    r(b[1])
                }, ticTime), ticTime = Math.round(5e3 * Math.random()), setTimeout(function () {
                    r(b[2])
                }, ticTime), ticTime = Math.round(5e3 * Math.random()), setTimeout(function () {
                    r(b[3])
                }, ticTime), ticTime = Math.round(5e3 * Math.random()), setTimeout(function () {
                    r(b[4])
                }, ticTime), ticTime = Math.round(5e3 * Math.random()), setTimeout(function () {
                    r(b[5])
                }, ticTime)
            }
        }

        function r(a) {
            switch (eSelect = Math.round(10 * Math.random()), eSelect) {
                case 1:
                    s(a);
                    break;
                case 2:
                    t(a);
                    break;
                case 3:
                    u(a);
                    break;
                case 4:
                    s(a);
                    break;
                case 5:
                    t(a);
                    break;
                case 6:
                    u(a);
                    break;
                case 7:
                    s(a);
                    break;
                case 8:
                    t(a);
                    break;
                case 9:
                    u(a);
                    break;
                case 10:
                    s(a)
            }
        }

        function s(b) {
            if (!o[b]) {
                o[b] = !0;
                var c = a(d[b]).children().filter("div").map(function () {
                    return this
                }).get();
                if (!(c.length <= 0)) {
                    var e = -1, f = 0;
                    for (j = 0; j < c.length; j++)if ("none" != a(c[j]).css("display")) {
                        e = j;
                        break
                    }
                    e == -1 ? a(c[0]).css("display", "block") : (f = e >= c.length - 1 ? 0 : e + 1, a(c[e]).css({
                        top: 0,
                        bottom: "auto"
                    }), a(c[e]).animate({top: a(c[e]).height() * -1}, 1e3, function () {
                        a(c[e]).css({display: "none", top: 0})
                    }), a(c[f]).css({
                        top: a(c[f]).height(),
                        display: "block",
                        bottom: "auto"
                    }), a(c[f]).animate({top: 0}, 1e3, function () {
                        o[b] = !1
                    }))
                }
            }
        }

        function t(b) {
            if (!o[b]) {
                o[b] = !0;
                var c = a(d[b]).children().filter("div").map(function () {
                    return this
                }).get();
                if (!(c.length <= 0)) {
                    var e = -1, f = 0;
                    for (j = 0; j < c.length; j++)if ("none" != a(c[j]).css("display")) {
                        e = j;
                        break
                    }
                    e == -1 ? a(c[0]).css("display", "block") : (f = e >= c.length - 1 ? 0 : e + 1, a(c[e]).css({
                        bottom: 0,
                        top: "auto"
                    }), a(c[e]).animate({bottom: a(c[e]).height() * -1}, 1e3, function () {
                        a(c[e]).css({display: "none", bottom: 0})
                    }), a(c[f]).css({
                        bottom: a(c[f]).height(),
                        display: "block",
                        top: "auto"
                    }), a(c[f]).animate({bottom: 0}, 1e3, function () {
                        o[b] = !1
                    }))
                }
            }
        }

        function u(b) {
            if (!o[b]) {
                o[b] = !0;
                var e = a(d[b]).children().filter("div").map(function () {
                    return this
                }).get();
                if (!(e.length <= 0)) {
                    var f = -1, g = 0;
                    for (j = 0; j < e.length; j++)if ("none" != a(e[j]).css("display")) {
                        f = j;
                        break
                    }
                    if (f == -1) a(e[0]).css("display", "block"); else {
                        if (g = f >= e.length - 1 ? 0 : f + 1, a(e[g]).find("img").length <= 0)return;
                        "hidden" == a(d[b]).css("overflow") && a(d[b]).css({
                            overflow: "visible",
                            "background-color": "transparent",
                            "z-index": 99
                        }), a(e[f]).css({transform: "rotateX(-90deg)"}), a(e[g]).css({display: "block"}), a(e[g]).css({transform: "rotateX(90deg)"}), a(e[f]).one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function (h) {
                            a(e[f]).css("display", "none"), a(e[f]).css({transform: "rotateX(0deg)"}), a(e[g]).css({transform: "rotateX(0deg)"}), a(e[g]).one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function (e) {
                                a(d[b]).css({
                                    overflow: "hidden",
                                    "background-color": c.bg_color,
                                    "z-index": 98
                                }), o[b] = !1
                            })
                        })
                    }
                }
            }
        }

        var c = a.extend({
            width: "100%",
            height: "100%",
            delayTime: 5e3,
            bg_color: "#2d92f4",
            txt_color: "#ffffff",
            metro_rows: 3,
            bg_metro: "",
            bg_opacity: .35,
            autoFixHeight: !1,
            padd_s: 6,
            padd_box: 16
        }, b);
        this.css({width: c.width, height: c.height});
        var d = a(this).children().filter("div").map(function () {
            return this
        }).get(), e = a(this).width(), f = a(this).height(), g = !1;
        c.autoFixHeight && (this.css({height: l(e, f)}), f = a(this).height()), m(this, e, f), "" != c.bg_metro;
        var h = this;
        a(window).resize(function () {
            g || (g = !0, e = a(h).width(), m(h, e, f))
        });
        var n = !0;
        a(window).focus(function () {
            n = !0
        }), a(window).blur(function () {
            n = !1
        });
        var o = [];
        setInterval(function () {
            n && q(d.length)
        }, c.delayTime);
        return this
    }
}(jQuery);