
/*
* jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
*
* Uses the built in easing capabilities added In jQuery 1.1
* to offer multiple easing options
*
* TERMS OF USE - jQuery Easing
*
* Open source under the BSD License.
*
* Copyright Â© 2008 George McGinley Smith
* All rights reserved.
*
* Redistribution and use in source and binary forms, with or without modification,
* are permitted provided that the following conditions are met:
*
* Redistributions of source code must retain the above copyright notice, this list of
* conditions and the following disclaimer.
* Redistributions in binary form must reproduce the above copyright notice, this list
* of conditions and the following disclaimer in the documentation and/or other materials
* provided with the distribution.
*
* Neither the name of the author nor the names of contributors may be used to endorse
* or promote products derived from this software without specific prior written permission.
*
* THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
* EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
* MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
* COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
* EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
* GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
* AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
* NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED
* OF THE POSSIBILITY OF SUCH DAMAGE.
*
*/

// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];
jQuery.extend(jQuery.easing, {
    def: 'easeOutQuad',
    swing: function (x, t, b, c, d) {
        return jQuery.easing[jQuery.easing.def](x, t, b, c, d)
    },
    easeInQuad: function (x, t, b, c, d) {
        return c * (t /= d) * t + b
    },
    easeOutQuad: function (x, t, b, c, d) {
        return -c * (t /= d) * (t - 2) + b
    },
    easeInOutQuad: function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t + b;
        return -c / 2 * ((--t) * (t - 2) - 1) + b
    },
    easeInCubic: function (x, t, b, c, d) {
        return c * (t /= d) * t * t + b
    },
    easeOutCubic: function (x, t, b, c, d) {
        return c * ((t = t / d - 1) * t * t + 1) + b
    },
    easeInOutCubic: function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
        return c / 2 * ((t -= 2) * t * t + 2) + b
    },
    easeInQuart: function (x, t, b, c, d) {
        return c * (t /= d) * t * t * t + b
    },
    easeOutQuart: function (x, t, b, c, d) {
        return -c * ((t = t / d - 1) * t * t * t - 1) + b
    },
    easeInOutQuart: function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
        return -c / 2 * ((t -= 2) * t * t * t - 2) + b
    },
    easeInQuint: function (x, t, b, c, d) {
        return c * (t /= d) * t * t * t * t + b
    },
    easeOutQuint: function (x, t, b, c, d) {
        return c * ((t = t / d - 1) * t * t * t * t + 1) + b
    },
    easeInOutQuint: function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t * t * t + b;
        return c / 2 * ((t -= 2) * t * t * t * t + 2) + b
    },
    easeInSine: function (x, t, b, c, d) {
        return -c * Math.cos(t / d * (Math.PI / 2)) + c + b
    },
    easeOutSine: function (x, t, b, c, d) {
        return c * Math.sin(t / d * (Math.PI / 2)) + b
    },
    easeInOutSine: function (x, t, b, c, d) {
        return -c / 2 * (Math.cos(Math.PI * t / d) - 1) + b
    },
    easeInExpo: function (x, t, b, c, d) {
        return (t == 0) ? b : c * Math.pow(2, 10 * (t / d - 1)) + b
    },
    easeOutExpo: function (x, t, b, c, d) {
        return (t == d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b
    },
    easeInOutExpo: function (x, t, b, c, d) {
        if (t == 0) return b;
        if (t == d) return b + c;
        if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
        return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b
    },
    easeInCirc: function (x, t, b, c, d) {
        return -c * (Math.sqrt(1 - (t /= d) * t) - 1) + b
    },
    easeOutCirc: function (x, t, b, c, d) {
        return c * Math.sqrt(1 - (t = t / d - 1) * t) + b
    },
    easeInOutCirc: function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return -c / 2 * (Math.sqrt(1 - t * t) - 1) + b;
        return c / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + b
    },
    easeInElastic: function (x, t, b, c, d) {
        var s = 1.70158;
        var p = 0;
        var a = c;
        if (t == 0) return b;
        if ((t /= d) == 1) return b + c;
        if (!p) p = d * .3;
        if (a < Math.abs(c)) {
            a = c;
            var s = p / 4
        } else var s = p / (2 * Math.PI) * Math.asin(c / a);
        return -(a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b
    },
    easeOutElastic: function (x, t, b, c, d) {
        var s = 1.70158;
        var p = 0;
        var a = c;
        if (t == 0) return b;
        if ((t /= d) == 1) return b + c;
        if (!p) p = d * .3;
        if (a < Math.abs(c)) {
            a = c;
            var s = p / 4
        } else var s = p / (2 * Math.PI) * Math.asin(c / a);
        return a * Math.pow(2, -10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b
    },
    easeInOutElastic: function (x, t, b, c, d) {
        var s = 1.70158;
        var p = 0;
        var a = c;
        if (t == 0) return b;
        if ((t /= d / 2) == 2) return b + c;
        if (!p) p = d * (.3 * 1.5);
        if (a < Math.abs(c)) {
            a = c;
            var s = p / 4
        } else var s = p / (2 * Math.PI) * Math.asin(c / a); if (t < 1) return -.5 * (a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
        return a * Math.pow(2, -10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p) * .5 + c + b
    },
    easeInBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        return c * (t /= d) * t * ((s + 1) * t - s) + b
    },
    easeOutBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        return c * ((t = t / d - 1) * t * ((s + 1) * t + s) + 1) + b
    },
    easeInOutBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        if ((t /= d / 2) < 1) return c / 2 * (t * t * (((s *= (1.525)) + 1) * t - s)) + b;
        return c / 2 * ((t -= 2) * t * (((s *= (1.525)) + 1) * t + s) + 2) + b
    },
    easeInBounce: function (x, t, b, c, d) {
        return c - jQuery.easing.easeOutBounce(x, d - t, 0, c, d) + b
    },
    easeOutBounce: function (x, t, b, c, d) {
        if ((t /= d) < (1 / 2.75)) {
            return c * (7.5625 * t * t) + b
        } else if (t < (2 / 2.75)) {
            return c * (7.5625 * (t -= (1.5 / 2.75)) * t + .75) + b
        } else if (t < (2.5 / 2.75)) {
            return c * (7.5625 * (t -= (2.25 / 2.75)) * t + .9375) + b
        } else {
            return c * (7.5625 * (t -= (2.625 / 2.75)) * t + .984375) + b
        }
    },
    easeInOutBounce: function (x, t, b, c, d) {
        if (t < d / 2) return jQuery.easing.easeInBounce(x, t * 2, 0, c, d) * .5 + b;
        return jQuery.easing.easeOutBounce(x, t * 2 - d, 0, c, d) * .5 + c * .5 + b
    }
});



/*
* jQuery Superfish Menu Plugin
* Copyright (c) 2013 Joel Birch
*
* Dual licensed under the MIT and GPL licenses:
*        http://www.opensource.org/licenses/mit-license.php
*        http://www.gnu.org/licenses/gpl.html
*/


(function (e) {
    e.fn.superfish = function (t) {
        var n = e.fn.superfish,
            r = n.c,
            i = e(['<span class="', r.arrowClass, '"> <i class="icon icon-bottom4"></i> </span>'].join("")),
            s = function () {
                var t = e(this),
                    n = u(t);
                clearTimeout(n.sfTimer);
                t.showSuperfishUl().siblings().hideSuperfishUl()
            }, o = function () {
                var t = e(this),
                    r = u(t),
                    i = n.op;
                clearTimeout(r.sfTimer);
                r.sfTimer = setTimeout(function () {
                    i.retainPath = e.inArray(t[0], i.$path) > -1;
                    t.hideSuperfishUl();
                    if (i.$path.length && t.parents(["li.", i.hoverClass].join("")).length < 1) {
                        s.call(i.$path)
                    }
                }, i.delay)
            }, u = function (e) {
                var t = e.parents(["ul.", r.menuClass, ":first"].join(""))[0];
                n.op = n.o[t.serial];
                return t
            }, a = function (e) {
                e.addClass(r.anchorClass).append(i.clone())
            };
        return this.each(function () {
            var i = this.serial = n.o.length;
            var u = e.extend({}, n.defaults, t);
            u.$path = e("li." + u.pathClass, this).slice(0, u.pathLevels).each(function () {
                e(this).addClass([u.hoverClass, r.bcClass].join(" ")).filter("li:has(ul)").removeClass(u.pathClass)
            });
            n.o[i] = n.op = u;
            e("li:has(ul)", this)[e.fn.hoverIntent && !u.disableHI ? "hoverIntent" : "hover"](s, o).each(function () {
                if (u.autoArrows) a(e(">a:first-child", this))
            }).not("." + r.bcClass).hideSuperfishUl();
            var f = e("a", this);
            f.each(function (e) {
                var t = f.eq(e).parents("li");
                f.eq(e).focus(function () {
                    s.call(t)
                }).blur(function () {
                    o.call(t)
                })
            });
            u.onInit.call(this)
        }).each(function () {
            var t = [r.menuClass];
            if (n.op.dropShadows && !(e.browser.msie && e.browser.version < 7)) t.push(r.shadowClass);
            e(this).addClass(t.join(" "))
        })
    };
    var t = e.fn.superfish;
    t.o = [];
    t.op = {};
    t.IE7fix = function () {
        var n = t.op;
        if (e.browser.msie && e.browser.version > 6 && n.dropShadows && n.animation.opacity != undefined) this.toggleClass(t.c.shadowClass + "-off")
    };
    t.c = {
        bcClass: "sf-breadcrumb",
        menuClass: "sf-js-enabled",
        anchorClass: "sf-with-ul",
        arrowClass: "sf-sub-indicator",
        shadowClass: "sf-shadow"
    };
    t.defaults = {
        hoverClass: "sfHover",
        pathClass: "overideThisToUse",
        pathLevels: 1,
        delay: 800,
        animation: {
            opacity: "show"
        },
        speed: "normal",
        autoArrows: true,
        dropShadows: true,
        disableHI: false,
        onInit: function () {},
        onBeforeShow: function () {},
        onShow: function () {},
        onHide: function () {}
    };
    e.fn.extend({
        hideSuperfishUl: function () {
            var n = t.op,
                r = n.retainPath === true ? n.$path : "";
            n.retainPath = false;
            var i = e(["li.", n.hoverClass].join(""), this).add(this).not(r).removeClass(n.hoverClass).find(">ul").hide().css("visibility", "hidden");
            n.onHide.call(i);
            return this
        },
        showSuperfishUl: function () {
            var e = t.op,
                n = t.c.shadowClass + "-off",
                r = this.addClass(e.hoverClass).find(">ul:hidden").css("visibility", "visible");
            t.IE7fix.call(r);
            e.onBeforeShow.call(r);
            r.animate(e.animation, e.speed, function () {
                t.IE7fix.call(r);
                e.onShow.call(r)
            });
            return this
        }
    })
})(jQuery);



/*
* Select Lava
*/
(function (e) {
    e.fn.lavaLamp = function (t) {
        t = e.extend({
            fx: "swing",
            speed: 500,
            click: function () {
                return true
            },
            startItem: "no",
            autoReturn: true,
            returnDelay: 0,
            setOnClick: true,
            homeTop: 0,
            homeLeft: 0,
            homeWidth: 0,
            homeHeight: 0,
            returnHome: false
        }, t || {});
        var n;
        if (t.homeTop || t.homeLeft) {
            n = e('<li class="current"></li>').css({
                left: t.homeLeft,
                top: t.homeTop,
                width: t.homeWidth,
                height: t.homeHeight,
                position: "absolute"
            });
            e(this).prepend(n)
        }
        return this.each(function () {
            function l(n) {
                if (!n) n = a;
                var r = 0,
                    i = 0;
                if (!e.browser.msie) {
                    r = (u.outerWidth() - u.innerWidth()) / 2;
                    i = (u.outerHeight() - u.innerHeight()) / 2
                }
                u.stop().animate({
                    left: n.offsetLeft - r,
                    width: n.offsetWidth,
                    height: n.offsetHeight
                }, t.speed, t.fx)
            }
            var r = location.pathname + location.search + location.hash;
            var i = new Object;
            var s;
            var u;
            var a;
            e.expr[":"].parents = function (t, n, r) {
                return e(t).parents(r[3]).length < 1
            };
            var f = e("li", this).filter(":parents(ul ul, .sub-menu)");
            if (t.startItem == "no") i = e('li a[href$="' + r + '"]', this).parent("li");
            if (i.length == 0 && t.startItem == "no") i = e('li a[href$="' + location.pathname.substring(location.pathname.lastIndexOf("/") + 1) + location.search + location.hash + '"]', this).parent("li");
            if (i.length == 0 || t.startItem != "no") {
                if (t.startItem == "no") t.startItem = 0;
                i = e(f[t.startItem])
            }
            a = e("li.selectedLava", this)[0] || e(i).addClass("selectedLava")[0];
            f.mouseenter(function () {
                if (e(this).hasClass("homeLava")) {
                    a = e(this)[0]
                }
                l(this)
            });
            u = e('<li class="back"><div class="left"></div></li>').appendTo(this);
            e(this).mouseleave(function () {
                if (t.autoReturn) {
                    if (t.returnHome && n) {
                        l(n[0])
                    } else if (t.returnDelay) {
                        if (s) clearTimeout(s);
                        s = setTimeout(function () {
                            l(null)
                        }, t.returnDelay + t.speed)
                    } else {
                        l(null)
                    }
                }
            });
            f.click(function (n) {
                if (t.setOnClick) {
                    e(a).removeClass("selectedLava");
                    e(this).addClass("selectedLava");
                    a = this
                }
                return t.click.apply(this, [n, this])
            });
            if (t.homeTop || t.homeLeft) u.css({
                left: t.homeLeft,
                width: t.homeWidth,
                height: t.homeHeight
            });
            else u.css({
                left: a.offsetLeft,
                width: a.offsetWidth,
                height: a.offsetHeight
            })
        })
    }
})(jQuery);





jQuery.easing["jswing"] = jQuery.easing["swing"];
jQuery.extend(jQuery.easing, {
    def: "easeOutQuad",
    swing: function (e, t, n, r, i) {
        return jQuery.easing[jQuery.easing.def](e, t, n, r, i)
    },
    easeInQuad: function (e, t, n, r, i) {
        return r * (t /= i) * t + n
    },
    easeOutQuad: function (e, t, n, r, i) {
        return -r * (t /= i) * (t - 2) + n
    },
    easeInOutQuad: function (e, t, n, r, i) {
        if ((t /= i / 2) < 1) return r / 2 * t * t + n;
        return -r / 2 * (--t * (t - 2) - 1) + n
    },
    easeInCubic: function (e, t, n, r, i) {
        return r * (t /= i) * t * t + n
    },
    easeOutCubic: function (e, t, n, r, i) {
        return r * ((t = t / i - 1) * t * t + 1) + n
    },
    easeInOutCubic: function (e, t, n, r, i) {
        if ((t /= i / 2) < 1) return r / 2 * t * t * t + n;
        return r / 2 * ((t -= 2) * t * t + 2) + n
    },
    easeInQuart: function (e, t, n, r, i) {
        return r * (t /= i) * t * t * t + n
    },
    easeOutQuart: function (e, t, n, r, i) {
        return -r * ((t = t / i - 1) * t * t * t - 1) + n
    },
    easeInOutQuart: function (e, t, n, r, i) {
        if ((t /= i / 2) < 1) return r / 2 * t * t * t * t + n;
        return -r / 2 * ((t -= 2) * t * t * t - 2) + n
    },
    easeInQuint: function (e, t, n, r, i) {
        return r * (t /= i) * t * t * t * t + n
    },
    easeOutQuint: function (e, t, n, r, i) {
        return r * ((t = t / i - 1) * t * t * t * t + 1) + n
    },
    easeInOutQuint: function (e, t, n, r, i) {
        if ((t /= i / 2) < 1) return r / 2 * t * t * t * t * t + n;
        return r / 2 * ((t -= 2) * t * t * t * t + 2) + n
    },
    easeInSine: function (e, t, n, r, i) {
        return -r * Math.cos(t / i * (Math.PI / 2)) + r + n
    },
    easeOutSine: function (e, t, n, r, i) {
        return r * Math.sin(t / i * (Math.PI / 2)) + n
    },
    easeInOutSine: function (e, t, n, r, i) {
        return -r / 2 * (Math.cos(Math.PI * t / i) - 1) + n
    },
    easeInExpo: function (e, t, n, r, i) {
        return t == 0 ? n : r * Math.pow(2, 10 * (t / i - 1)) + n
    },
    easeOutExpo: function (e, t, n, r, i) {
        return t == i ? n + r : r * (-Math.pow(2, -10 * t / i) + 1) + n
    },
    easeInOutExpo: function (e, t, n, r, i) {
        if (t == 0) return n;
        if (t == i) return n + r;
        if ((t /= i / 2) < 1) return r / 2 * Math.pow(2, 10 * (t - 1)) + n;
        return r / 2 * (-Math.pow(2, -10 * --t) + 2) + n
    },
    easeInCirc: function (e, t, n, r, i) {
        return -r * (Math.sqrt(1 - (t /= i) * t) - 1) + n
    },
    easeOutCirc: function (e, t, n, r, i) {
        return r * Math.sqrt(1 - (t = t / i - 1) * t) + n
    },
    easeInOutCirc: function (e, t, n, r, i) {
        if ((t /= i / 2) < 1) return -r / 2 * (Math.sqrt(1 - t * t) - 1) + n;
        return r / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + n
    },
    easeInElastic: function (e, t, n, r, i) {
        var s = 1.70158;
        var o = 0;
        var u = r;
        if (t == 0) return n;
        if ((t /= i) == 1) return n + r;
        if (!o) o = i * .3;
        if (u < Math.abs(r)) {
            u = r;
            var s = o / 4
        } else var s = o / (2 * Math.PI) * Math.asin(r / u);
        return -(u * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * i - s) * 2 * Math.PI / o)) + n
    },
    easeOutElastic: function (e, t, n, r, i) {
        var s = 1.70158;
        var o = 0;
        var u = r;
        if (t == 0) return n;
        if ((t /= i) == 1) return n + r;
        if (!o) o = i * .3;
        if (u < Math.abs(r)) {
            u = r;
            var s = o / 4
        } else var s = o / (2 * Math.PI) * Math.asin(r / u);
        return u * Math.pow(2, -10 * t) * Math.sin((t * i - s) * 2 * Math.PI / o) + r + n
    },
    easeInOutElastic: function (e, t, n, r, i) {
        var s = 1.70158;
        var o = 0;
        var u = r;
        if (t == 0) return n;
        if ((t /= i / 2) == 2) return n + r;
        if (!o) o = i * .3 * 1.5;
        if (u < Math.abs(r)) {
            u = r;
            var s = o / 4
        } else var s = o / (2 * Math.PI) * Math.asin(r / u); if (t < 1) return -.5 * u * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * i - s) * 2 * Math.PI / o) + n;
        return u * Math.pow(2, -10 * (t -= 1)) * Math.sin((t * i - s) * 2 * Math.PI / o) * .5 + r + n
    },
    easeInBack: function (e, t, n, r, i, s) {
        if (s == undefined) s = 1.70158;
        return r * (t /= i) * t * ((s + 1) * t - s) + n
    },
    easeOutBack: function (e, t, n, r, i, s) {
        if (s == undefined) s = 1.70158;
        return r * ((t = t / i - 1) * t * ((s + 1) * t + s) + 1) + n
    },
    easeInOutBack: function (e, t, n, r, i, s) {
        if (s == undefined) s = 1.70158;
        if ((t /= i / 2) < 1) return r / 2 * t * t * (((s *= 1.525) + 1) * t - s) + n;
        return r / 2 * ((t -= 2) * t * (((s *= 1.525) + 1) * t + s) + 2) + n
    },
    easeInBounce: function (e, t, n, r, i) {
        return r - jQuery.easing.easeOutBounce(e, i - t, 0, r, i) + n
    },
    easeOutBounce: function (e, t, n, r, i) {
        if ((t /= i) < 1 / 2.75) {
            return r * 7.5625 * t * t + n
        } else if (t < 2 / 2.75) {
            return r * (7.5625 * (t -= 1.5 / 2.75) * t + .75) + n
        } else if (t < 2.5 / 2.75) {
            return r * (7.5625 * (t -= 2.25 / 2.75) * t + .9375) + n
        } else {
            return r * (7.5625 * (t -= 2.625 / 2.75) * t + .984375) + n
        }
    },
    easeInOutBounce: function (e, t, n, r, i) {
        if (t < i / 2) return jQuery.easing.easeInBounce(e, t * 2, 0, r, i) * .5 + n;
        return jQuery.easing.easeOutBounce(e, t * 2 - i, 0, r, i) * .5 + r * .5 + n
    }
});






(function (e) {
    e.fn.jflickrfeed = function (t, n) {
        t = e.extend(true, {
            flickrbase: "http://api.flickr.com/services/feeds/",
            feedapi: "photos_public.gne",
            limit: 20,
            qstrings: {
                lang: "en-us",
                format: "json",
                jsoncallback: "?"
            },
            cleanDescription: true,
            useTemplate: true,
            itemTemplate: "",
            itemCallback: function () {}
        }, t);
        var r = t.flickrbase + t.feedapi + "?";
        var i = true;
        for (var s in t.qstrings) {
            if (!i) r += "&";
            r += s + "=" + t.qstrings[s];
            i = false
        }
        return e(this).each(function () {
            var i = e(this);
            var s = this;
            e.getJSON(r, function (r) {
                e.each(r.items, function (e, n) {
                    if (e < t.limit) {
                        if (t.cleanDescription) {
                            var r = /<p>(.*?)<\/p>/g;
                            var o = n.description;
                            if (r.test(o)) {
                                n.description = o.match(r)[2];
                                if (n.description != undefined) n.description = n.description.replace("<p>", "").replace("</p>", "")
                            }
                        }
                        n["image_s"] = n.media.m.replace("_m", "_s");
                        n["image_t"] = n.media.m.replace("_m", "_t");
                        n["image_m"] = n.media.m.replace("_m", "_m");
                        n["image"] = n.media.m.replace("_m", "");
                        n["image_b"] = n.media.m.replace("_m", "_b");
                        delete n.media;
                        if (t.useTemplate) {
                            var u = t.itemTemplate;
                            for (var a in n) {
                                var f = new RegExp("{{" + a + "}}", "g");
                                u = u.replace(f, n[a])
                            }
                            i.append(u)
                        }
                        t.itemCallback.call(s, n)
                    }
                });
                if (e.isFunction(n)) {
                    n.call(s, r)
                }
            })
        })
    }
})(jQuery);




(function (e) {
    function t(t, n) {
        return parseInt(e.css(t[0], n)) || 0
    }

    function n(e) {
        return e[0].offsetWidth + t(e, "marginLeft") + t(e, "marginRight")
    }

    function r(e) {
        return e[0].offsetHeight + t(e, "marginTop") + t(e, "marginBottom")
    }
    e.fn.jCarouselLite = function (t) {
        t = e.extend({
            btnPrev: null,
            btnNext: null,
            btnGo: null,
            mouseWheel: false,
            auto: null,
            hoverPause: false,
            speed: 200,
            easing: null,
            vertical: false,
            circular: true,
            visible: 3,
            start: 0,
            scroll: 1,
            beforeStart: null,
            afterEnd: null
        }, t || {});
        return this.each(function () {
            function w() {
                E();
                b = setInterval(function () {
                    x(v + t.scroll)
                }, t.auto + t.speed)
            }

            function E() {
                clearInterval(b)
            }

            function S() {
                return p.slice(v).slice(0, h)
            }

            function x(n) {
                if (!i) {
                    if (t.beforeStart) t.beforeStart.call(this, S());
                    if (t.circular) {
                        if (n < 0) {
                            f.css(s, -((v + c) * m) + "px");
                            v = n + c
                        } else if (n > d - h) {
                            f.css(s, -((v - c) * m) + "px");
                            v = n - c
                        } else v = n
                    } else {
                        if (n < 0 || n > d - h) return;
                        else v = n
                    }
                    i = true;
                    f.animate(s == "left" ? {
                        left: -(v * m)
                    } : {
                        top: -(v * m)
                    }, t.speed, t.easing, function () {
                        if (t.afterEnd) t.afterEnd.call(this, S());
                        i = false
                    });
                    if (!t.circular) {
                        e(t.btnPrev + "," + t.btnNext).removeClass("disabled");
                        e(v - t.scroll < 0 && t.btnPrev || v + t.scroll > d - h && t.btnNext || []).addClass("disabled")
                    }
                }
                return false
            }
            var i = false,
                s = t.vertical ? "top" : "left",
                u = t.vertical ? "height" : "width";
            var a = e(this),
                f = e("ul", a),
                l = e("li", f),
                c = l.size(),
                h = t.visible;
            if (t.circular) {
                f.prepend(l.slice(c - h + 1).clone()).append(l.slice(0, t.scroll).clone());
                t.start += h - 1
            }
            var p = e("li", f),
                d = p.size(),
                v = t.start;
            a.css("visibility", "visible");
            p.css({
                overflow: "hidden",
                "float": t.vertical ? "none" : "left"
            });
            f.css({
                margin: "0",
                padding: "0",
                position: "relative",
                "list-style-type": "none",
                "z-index": "1"
            });
            a.css({
                overflow: "hidden",
                position: "relative",
                "z-index": "2",
                left: "0px"
            });
            var m = t.vertical ? r(p) : n(p);
            var g = m * d;
            var y = m * h;
            p.css({
                width: p.width(),
                height: p.height()
            });
            f.css(u, g + "px").css(s, -(v * m));
            a.css(u, y + "px");
            if (t.btnPrev) {
                e(t.btnPrev).click(function () {
                    return x(v - t.scroll)
                });
                if (t.hoverPause) {
                    e(t.btnPrev).hover(function () {
                        E()
                    }, function () {
                        w()
                    })
                }
            }
            if (t.btnNext) {
                e(t.btnNext).click(function () {
                    return x(v + t.scroll)
                });
                if (t.hoverPause) {
                    e(t.btnNext).hover(function () {
                        E()
                    }, function () {
                        w()
                    })
                }
            }
            if (t.btnGo) e.each(t.btnGo, function (n, r) {
                e(r).click(function () {
                    return x(t.circular ? t.visible + n : n)
                })
            });
            if (t.mouseWheel && a.mousewheel) a.mousewheel(function (e, n) {
                return n > 0 ? x(v - t.scroll) : x(v + t.scroll)
            });
            var b;
            if (t.auto) {
                if (t.hoverPause) {
                    a.hover(function () {
                        E()
                    }, function () {
                        w()
                    })
                }
                w()
            }
        })
    };
})(jQuery);




// tipsy, facebook style tooltips for jquery
// (c) 2008-2010 jason frame [jason@onehackoranother.com]
// released under the MIT license
(function (e) {
    function t(e) {
        if (e.attr("title") || typeof e.attr("original-title") != "string") {
            e.attr("original-title", e.attr("title") || "").removeAttr("title")
        }
    }

    function n(n, r) {
        this.$element = e(n);
        this.options = r;
        this.enabled = true;
        t(this.$element)
    }
    n.prototype = {
        show: function () {
            var t = this.getTitle();
            if (t && this.enabled) {
                var n = this.tip();
                n.find(".tipsy-inner")[this.options.html ? "html" : "text"](t);
                n[0].className = "tipsy";
                n.remove().css({
                    top: 0,
                    left: 0,
                    visibility: "hidden",
                    display: "block"
                }).appendTo(document.body);
                var r = e.extend({}, this.$element.offset(), {
                    width: this.$element[0].offsetWidth,
                    height: this.$element[0].offsetHeight
                });
                var i = n[0].offsetWidth,
                    s = n[0].offsetHeight;
                var o = typeof this.options.gravity == "function" ? this.options.gravity.call(this.$element[0]) : this.options.gravity;
                var u;
                switch (o.charAt(0)) {
                case "n":
                    u = {
                        top: r.top + r.height + this.options.offset,
                        left: r.left + r.width / 2 - i / 2
                    };
                    break;
                case "s":
                    u = {
                        top: r.top - s - this.options.offset,
                        left: r.left + r.width / 2 - i / 2
                    };
                    break;
                case "e":
                    u = {
                        top: r.top + r.height / 2 - s / 2,
                        left: r.left - i - this.options.offset
                    };
                    break;
                case "w":
                    u = {
                        top: r.top + r.height / 2 - s / 2,
                        left: r.left + r.width + this.options.offset
                    };
                    break
                }
                if (o.length == 2) {
                    if (o.charAt(1) == "w") {
                        u.left = r.left + r.width / 2 - 15
                    } else {
                        u.left = r.left + r.width / 2 - i + 15
                    }
                }
                n.css(u).addClass("tipsy-" + o);
                if (this.options.fade) {
                    n.stop().css({
                        opacity: 0,
                        display: "block",
                        visibility: "visible"
                    }).animate({
                        opacity: this.options.opacity
                    })
                } else {
                    n.css({
                        visibility: "visible",
                        opacity: this.options.opacity
                    })
                }
            }
        },
        hide: function () {
            if (this.options.fade) {
                this.tip().stop().fadeOut(function () {
                    e(this).remove()
                })
            } else {
                this.tip().remove()
            }
        },
        getTitle: function () {
            var e, n = this.$element,
                r = this.options;
            t(n);
            var e, r = this.options;
            if (typeof r.title == "string") {
                e = n.attr(r.title == "title" ? "original-title" : r.title)
            } else if (typeof r.title == "function") {
                e = r.title.call(n[0])
            }
            e = ("" + e).replace(/(^\s*|\s*$)/, "");
            return e || r.fallback
        },
        tip: function () {
            if (!this.$tip) {
                this.$tip = e('<div class="tipsy"></div>').html('<div class="tipsy-arrow"></div><div class="tipsy-inner"/></div>')
            }
            return this.$tip
        },
        validate: function () {
            if (!this.$element[0].parentNode) {
                this.hide();
                this.$element = null;
                this.options = null
            }
        },
        enable: function () {
            this.enabled = true
        },
        disable: function () {
            this.enabled = false
        },
        toggleEnabled: function () {
            this.enabled = !this.enabled
        }
    };
    e.fn.tipsy = function (t) {
        function r(r) {
            var i = e.data(r, "tipsy");
            if (!i) {
                i = new n(r, e.fn.tipsy.elementOptions(r, t));
                e.data(r, "tipsy", i)
            }
            return i
        }

        function i() {
            var e = r(this);
            e.hoverState = "in";
            if (t.delayIn == 0) {
                e.show()
            } else {
                setTimeout(function () {
                    if (e.hoverState == "in") e.show()
                }, t.delayIn)
            }
        }

        function s() {
            var e = r(this);
            e.hoverState = "out";
            if (t.delayOut == 0) {
                e.hide()
            } else {
                setTimeout(function () {
                    if (e.hoverState == "out") e.hide()
                }, t.delayOut)
            }
        }
        if (t === true) {
            return this.data("tipsy")
        } else if (typeof t == "string") {
            return this.data("tipsy")[t]()
        }
        t = e.extend({}, e.fn.tipsy.defaults, t);
        if (!t.live) this.each(function () {
            r(this)
        });
        if (t.trigger != "manual") {
            var o = t.live ? "live" : "bind",
                u = t.trigger == "hover" ? "mouseenter" : "focus",
                a = t.trigger == "hover" ? "mouseleave" : "blur";
            this[o](u, i)[o](a, s)
        }
        return this
    };
    e.fn.tipsy.defaults = {
        delayIn: 0,
        delayOut: 0,
        fade: false,
        fallback: "",
        gravity: "n",
        html: false,
        live: false,
        offset: 0,
        opacity: 1,
        title: "title",
        trigger: "hover"
    };
    e.fn.tipsy.elementOptions = function (t, n) {
        return e.metadata ? e.extend({}, n, e(t).metadata()) : n
    };
    e.fn.tipsy.autoNS = function () {
        return e(this).offset().top > e(document).scrollTop() + e(window).height() / 2 ? "s" : "n"
    };
    e.fn.tipsy.autoWE = function () {
        return e(this).offset().left > e(document).scrollLeft() + e(window).width() / 2 ? "e" : "w"
    }
})(jQuery);




(function (e, t, n, r) {
    function d(t, n) {
        this.element = t;
        this.options = e.extend({}, s, n);
        this._defaults = s;
        this._name = i;
        this.init()
    }
    var i = "stellar",
        s = {
            scrollProperty: "scroll",
            positionProperty: "position",
            horizontalScrolling: true,
            verticalScrolling: true,
            horizontalOffset: 0,
            verticalOffset: 0,
            responsive: true,
            parallaxBackgrounds: true,
            parallaxElements: true,
            hideDistantElements: true,
            hideElement: function (e) {
                e.hide()
            },
            showElement: function (e) {
                e.show()
            }
        }, o = {
            scroll: {
                getLeft: function (e) {
                    return e.scrollLeft()
                },
                setLeft: function (e, t) {
                    e.scrollLeft(t)
                },
                getTop: function (e) {
                    return e.scrollTop()
                },
                setTop: function (e, t) {
                    e.scrollTop(t)
                }
            },
            position: {
                getLeft: function (e) {
                    return parseInt(e.css("left"), 10) * -1
                },
                getTop: function (e) {
                    return parseInt(e.css("top"), 10) * -1
                }
            },
            margin: {
                getLeft: function (e) {
                    return parseInt(e.css("margin-left"), 10) * -1
                },
                getTop: function (e) {
                    return parseInt(e.css("margin-top"), 10) * -1
                }
            },
            transform: {
                getLeft: function (e) {
                    var t = getComputedStyle(e[0])[f];
                    return t !== "none" ? parseInt(t.match(/(-?[0-9]+)/g)[4], 10) * -1 : 0
                },
                getTop: function (e) {
                    var t = getComputedStyle(e[0])[f];
                    return t !== "none" ? parseInt(t.match(/(-?[0-9]+)/g)[5], 10) * -1 : 0
                }
            }
        }, u = {
            position: {
                setLeft: function (e, t) {
                    e.css("left", t)
                },
                setTop: function (e, t) {
                    e.css("top", t)
                }
            },
            transform: {
                setPosition: function (e, t, n, r, i) {
                    e[0].style[f] = "translate3d(" + (t - n) + "px, " + (r - i) + "px, 0)"
                }
            }
        }, a = function () {
            var t = /^(Moz|Webkit|Khtml|O|ms|Icab)(?=[A-Z])/,
                n = e("script")[0].style,
                r = "",
                i;
            for (i in n) {
                if (t.test(i)) {
                    r = i.match(t)[0];
                    break
                }
            }
            if ("WebkitOpacity" in n) {
                r = "Webkit"
            }
            if ("KhtmlOpacity" in n) {
                r = "Khtml"
            }
            return function (e) {
                return r + (r.length > 0 ? e.charAt(0).toUpperCase() + e.slice(1) : e)
            }
        }(),
        f = a("transform"),
        l = e("<div />", {
            style: "background:#fff"
        }).css("background-position-x") !== r,
        c = l ? function (e, t, n) {
            e.css({
                "background-position-x": t,
                "background-position-y": n
            })
        } : function (e, t, n) {
            e.css("background-position", t + " " + n)
        }, h = l ? function (e) {
            return [e.css("background-position-x"), e.css("background-position-y")]
        } : function (e) {
            return e.css("background-position").split(" ")
        }, p = t.requestAnimationFrame || t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || t.oRequestAnimationFrame || t.msRequestAnimationFrame || function (e) {
            setTimeout(e, 1e3 / 60)
        };
    d.prototype = {
        init: function () {
            this.options.name = i + "_" + Math.floor(Math.random() * 1e9);
            this._defineElements();
            this._defineGetters();
            this._defineSetters();
            this._handleWindowLoadAndResize();
            this._detectViewport();
            this.refresh({
                firstLoad: true
            });
            if (this.options.scrollProperty === "scroll") {
                this._handleScrollEvent()
            } else {
                this._startAnimationLoop()
            }
        },
        _defineElements: function () {
            if (this.element === n.body) this.element = t;
            this.$scrollElement = e(this.element);
            this.$element = this.element === t ? e("body") : this.$scrollElement;
            this.$viewportElement = this.options.viewportElement !== r ? e(this.options.viewportElement) : this.$scrollElement[0] === t || this.options.scrollProperty === "scroll" ? this.$scrollElement : this.$scrollElement.parent()
        },
        _defineGetters: function () {
            var e = this,
                t = o[e.options.scrollProperty];
            this._getScrollLeft = function () {
                return t.getLeft(e.$scrollElement)
            };
            this._getScrollTop = function () {
                return t.getTop(e.$scrollElement)
            }
        },
        _defineSetters: function () {
            var t = this,
                n = o[t.options.scrollProperty],
                r = u[t.options.positionProperty],
                i = n.setLeft,
                s = n.setTop;
            this._setScrollLeft = typeof i === "function" ? function (e) {
                i(t.$scrollElement, e)
            } : e.noop;
            this._setScrollTop = typeof s === "function" ? function (e) {
                s(t.$scrollElement, e)
            } : e.noop;
            this._setPosition = r.setPosition || function (e, n, i, s, o) {
                if (t.options.horizontalScrolling) {
                    r.setLeft(e, n, i)
                }
                if (t.options.verticalScrolling) {
                    r.setTop(e, s, o)
                }
            }
        },
        _handleWindowLoadAndResize: function () {
            var n = this,
                r = e(t);
            if (n.options.responsive) {
                r.bind("load." + this.name, function () {
                    n.refresh()
                })
            }
            r.bind("resize." + this.name, function () {
                n._detectViewport();
                if (n.options.responsive) {
                    n.refresh()
                }
            })
        },
        refresh: function (n) {
            var r = this,
                i = r._getScrollLeft(),
                s = r._getScrollTop();
            if (!n || !n.firstLoad) {
                this._reset()
            }
            this._setScrollLeft(0);
            this._setScrollTop(0);
            this._setOffsets();
            this._findParticles();
            this._findBackgrounds();
            if (n && n.firstLoad && /WebKit/.test(navigator.userAgent)) {
                e(t).load(function () {
                    var e = r._getScrollLeft(),
                        t = r._getScrollTop();
                    r._setScrollLeft(e + 1);
                    r._setScrollTop(t + 1);
                    r._setScrollLeft(e);
                    r._setScrollTop(t)
                })
            }
            this._setScrollLeft(i);
            this._setScrollTop(s)
        },
        _detectViewport: function () {
            var e = this.$viewportElement.offset(),
                t = e !== null && e !== r;
            this.viewportWidth = this.$viewportElement.width();
            this.viewportHeight = this.$viewportElement.height();
            this.viewportOffsetTop = t ? e.top : 0;
            this.viewportOffsetLeft = t ? e.left : 0
        },
        _findParticles: function () {
            var t = this,
                n = this._getScrollLeft(),
                i = this._getScrollTop();
            if (this.particles !== r) {
                for (var s = this.particles.length - 1; s >= 0; s--) {
                    this.particles[s].$element.data("stellar-elementIsActive", r)
                }
            }
            this.particles = [];
            if (!this.options.parallaxElements) return;
            this.$element.find("[data-stellar-ratio]").each(function (n) {
                var i = e(this),
                    s, o, u, a, f, l, c, h, p, d = 0,
                    v = 0,
                    m = 0,
                    g = 0;
                if (!i.data("stellar-elementIsActive")) {
                    i.data("stellar-elementIsActive", this)
                } else if (i.data("stellar-elementIsActive") !== this) {
                    return
                }
                t.options.showElement(i);
                if (!i.data("stellar-startingLeft")) {
                    i.data("stellar-startingLeft", i.css("left"));
                    i.data("stellar-startingTop", i.css("top"))
                } else {
                    i.css("left", i.data("stellar-startingLeft"));
                    i.css("top", i.data("stellar-startingTop"))
                }
                u = i.position().left;
                a = i.position().top;
                f = i.css("margin-left") === "auto" ? 0 : parseInt(i.css("margin-left"), 10);
                l = i.css("margin-top") === "auto" ? 0 : parseInt(i.css("margin-top"), 10);
                h = i.offset().left - f;
                p = i.offset().top - l;
                i.parents().each(function () {
                    var t = e(this);
                    if (t.data("stellar-offset-parent") === true) {
                        d = m;
                        v = g;
                        c = t;
                        return false
                    } else {
                        m += t.position().left;
                        g += t.position().top
                    }
                });
                s = i.data("stellar-horizontal-offset") !== r ? i.data("stellar-horizontal-offset") : c !== r && c.data("stellar-horizontal-offset") !== r ? c.data("stellar-horizontal-offset") : t.horizontalOffset;
                o = i.data("stellar-vertical-offset") !== r ? i.data("stellar-vertical-offset") : c !== r && c.data("stellar-vertical-offset") !== r ? c.data("stellar-vertical-offset") : t.verticalOffset;
                t.particles.push({
                    $element: i,
                    $offsetParent: c,
                    isFixed: i.css("position") === "fixed",
                    horizontalOffset: s,
                    verticalOffset: o,
                    startingPositionLeft: u,
                    startingPositionTop: a,
                    startingOffsetLeft: h,
                    startingOffsetTop: p,
                    parentOffsetLeft: d,
                    parentOffsetTop: v,
                    stellarRatio: i.data("stellar-ratio") !== r ? i.data("stellar-ratio") : 1,
                    width: i.outerWidth(true),
                    height: i.outerHeight(true),
                    isHidden: false
                })
            })
        },
        _findBackgrounds: function () {
            var t = this,
                n = this._getScrollLeft(),
                i = this._getScrollTop(),
                s;
            this.backgrounds = [];
            if (!this.options.parallaxBackgrounds) return;
            s = this.$element.find("[data-stellar-background-ratio]");
            if (this.$element.data("stellar-background-ratio")) {
                s = s.add(this.$element)
            }
            s.each(function () {
                var s = e(this),
                    o = h(s),
                    u, a, f, l, p, d, v, m, g, y = 0,
                    b = 0,
                    w = 0,
                    E = 0;
                if (!s.data("stellar-backgroundIsActive")) {
                    s.data("stellar-backgroundIsActive", this)
                } else if (s.data("stellar-backgroundIsActive") !== this) {
                    return
                }
                if (!s.data("stellar-backgroundStartingLeft")) {
                    s.data("stellar-backgroundStartingLeft", o[0]);
                    s.data("stellar-backgroundStartingTop", o[1])
                } else {
                    c(s, s.data("stellar-backgroundStartingLeft"), s.data("stellar-backgroundStartingTop"))
                }
                p = s.css("margin-left") === "auto" ? 0 : parseInt(s.css("margin-left"), 10);
                d = s.css("margin-top") === "auto" ? 0 : parseInt(s.css("margin-top"), 10);
                v = s.offset().left - p - n;
                m = s.offset().top - d - i;
                s.parents().each(function () {
                    var t = e(this);
                    if (t.data("stellar-offset-parent") === true) {
                        y = w;
                        b = E;
                        g = t;
                        return false
                    } else {
                        w += t.position().left;
                        E += t.position().top
                    }
                });
                u = s.data("stellar-horizontal-offset") !== r ? s.data("stellar-horizontal-offset") : g !== r && g.data("stellar-horizontal-offset") !== r ? g.data("stellar-horizontal-offset") : t.horizontalOffset;
                a = s.data("stellar-vertical-offset") !== r ? s.data("stellar-vertical-offset") : g !== r && g.data("stellar-vertical-offset") !== r ? g.data("stellar-vertical-offset") : t.verticalOffset;
                t.backgrounds.push({
                    $element: s,
                    $offsetParent: g,
                    isFixed: s.css("background-attachment") === "fixed",
                    horizontalOffset: u,
                    verticalOffset: a,
                    startingValueLeft: o[0],
                    startingValueTop: o[1],
                    startingBackgroundPositionLeft: isNaN(parseInt(o[0], 10)) ? 0 : parseInt(o[0], 10),
                    startingBackgroundPositionTop: isNaN(parseInt(o[1], 10)) ? 0 : parseInt(o[1], 10),
                    startingPositionLeft: s.position().left,
                    startingPositionTop: s.position().top,
                    startingOffsetLeft: v,
                    startingOffsetTop: m,
                    parentOffsetLeft: y,
                    parentOffsetTop: b,
                    stellarRatio: s.data("stellar-background-ratio") === r ? 1 : s.data("stellar-background-ratio")
                })
            })
        },
        _reset: function () {
            var e, t, n, r, i;
            for (i = this.particles.length - 1; i >= 0; i--) {
                e = this.particles[i];
                t = e.$element.data("stellar-startingLeft");
                n = e.$element.data("stellar-startingTop");
                this._setPosition(e.$element, t, t, n, n);
                this.options.showElement(e.$element);
                e.$element.data("stellar-startingLeft", null).data("stellar-elementIsActive", null).data("stellar-backgroundIsActive", null)
            }
            for (i = this.backgrounds.length - 1; i >= 0; i--) {
                r = this.backgrounds[i];
                r.$element.data("stellar-backgroundStartingLeft", null).data("stellar-backgroundStartingTop", null);
                c(r.$element, r.startingValueLeft, r.startingValueTop)
            }
        },
        destroy: function () {
            this._reset();
            this.$scrollElement.unbind("resize." + this.name).unbind("scroll." + this.name);
            this._animationLoop = e.noop;
            e(t).unbind("load." + this.name).unbind("resize." + this.name)
        },
        _setOffsets: function () {
            var n = this,
                r = e(t);
            r.unbind("resize.horizontal-" + this.name).unbind("resize.vertical-" + this.name);
            if (typeof this.options.horizontalOffset === "function") {
                this.horizontalOffset = this.options.horizontalOffset();
                r.bind("resize.horizontal-" + this.name, function () {
                    n.horizontalOffset = n.options.horizontalOffset()
                })
            } else {
                this.horizontalOffset = this.options.horizontalOffset
            } if (typeof this.options.verticalOffset === "function") {
                this.verticalOffset = this.options.verticalOffset();
                r.bind("resize.vertical-" + this.name, function () {
                    n.verticalOffset = n.options.verticalOffset()
                })
            } else {
                this.verticalOffset = this.options.verticalOffset
            }
        },
        _repositionElements: function () {
            var e = this._getScrollLeft(),
                t = this._getScrollTop(),
                n, r, i, s, o, u, a, f = true,
                l = true,
                h, p, d, v, m;
            if (this.currentScrollLeft === e && this.currentScrollTop === t && this.currentWidth === this.viewportWidth && this.currentHeight === this.viewportHeight) {
                return
            } else {
                this.currentScrollLeft = e;
                this.currentScrollTop = t;
                this.currentWidth = this.viewportWidth;
                this.currentHeight = this.viewportHeight
            }
            for (m = this.particles.length - 1; m >= 0; m--) {
                i = this.particles[m];
                s = i.isFixed ? 1 : 0;
                if (this.options.horizontalScrolling) {
                    h = (e + i.horizontalOffset + this.viewportOffsetLeft + i.startingPositionLeft - i.startingOffsetLeft + i.parentOffsetLeft) * -(i.stellarRatio + s - 1) + i.startingPositionLeft;
                    d = h - i.startingPositionLeft + i.startingOffsetLeft
                } else {
                    h = i.startingPositionLeft;
                    d = i.startingOffsetLeft
                } if (this.options.verticalScrolling) {
                    p = (t + i.verticalOffset + this.viewportOffsetTop + i.startingPositionTop - i.startingOffsetTop + i.parentOffsetTop) * -(i.stellarRatio + s - 1) + i.startingPositionTop;
                    v = p - i.startingPositionTop + i.startingOffsetTop
                } else {
                    p = i.startingPositionTop;
                    v = i.startingOffsetTop
                } if (this.options.hideDistantElements) {
                    l = !this.options.horizontalScrolling || d + i.width > (i.isFixed ? 0 : e) && d < (i.isFixed ? 0 : e) + this.viewportWidth + this.viewportOffsetLeft;
                    f = !this.options.verticalScrolling || v + i.height > (i.isFixed ? 0 : t) && v < (i.isFixed ? 0 : t) + this.viewportHeight + this.viewportOffsetTop
                }
                if (l && f) {
                    if (i.isHidden) {
                        this.options.showElement(i.$element);
                        i.isHidden = false
                    }
                    this._setPosition(i.$element, h, i.startingPositionLeft, p, i.startingPositionTop)
                } else {
                    if (!i.isHidden) {
                        this.options.hideElement(i.$element);
                        i.isHidden = true
                    }
                }
            }
            for (m = this.backgrounds.length - 1; m >= 0; m--) {
                o = this.backgrounds[m];
                s = o.isFixed ? 0 : 1;
                u = this.options.horizontalScrolling ? (e + o.horizontalOffset - this.viewportOffsetLeft - o.startingOffsetLeft + o.parentOffsetLeft - o.startingBackgroundPositionLeft) * (s - o.stellarRatio) + "px" : o.startingValueLeft;
                a = this.options.verticalScrolling ? (t + o.verticalOffset - this.viewportOffsetTop - o.startingOffsetTop + o.parentOffsetTop - o.startingBackgroundPositionTop) * (s - o.stellarRatio) + "px" : o.startingValueTop;
                c(o.$element, u, a)
            }
        },
        _handleScrollEvent: function () {
            var e = this,
                t = false;
            var n = function () {
                e._repositionElements();
                t = false
            };
            var r = function () {
                if (!t) {
                    p(n);
                    t = true
                }
            };
            this.$scrollElement.bind("scroll." + this.name, r);
            r()
        },
        _startAnimationLoop: function () {
            var e = this;
            this._animationLoop = function () {
                p(e._animationLoop);
                e._repositionElements()
            };
            this._animationLoop()
        }
    };
    e.fn[i] = function (t) {
        var n = arguments;
        if (t === r || typeof t === "object") {
            return this.each(function () {
                if (!e.data(this, "plugin_" + i)) {
                    e.data(this, "plugin_" + i, new d(this, t))
                }
            })
        } else if (typeof t === "string" && t[0] !== "_" && t !== "init") {
            return this.each(function () {
                var r = e.data(this, "plugin_" + i);
                if (r instanceof d && typeof r[t] === "function") {
                    r[t].apply(r, Array.prototype.slice.call(n, 1))
                }
                if (t === "destroy") {
                    e.data(this, "plugin_" + i, null)
                }
            })
        }
    };
    e[i] = function (n) {
        var r = e(t);
        return r.stellar.apply(r, Array.prototype.slice.call(arguments, 0))
    };
    e[i].scrollProperty = o;
    e[i].positionProperty = u;
    t.Stellar = d
})(jQuery, this, document);
(function (c, b) {
    var a = a || function (k) {
            var f = {
                element: null,
                dragger: null,
                disable: "none",
                addBodyClasses: true,
                hyperextensible: true,
                resistance: 0.5,
                flickThreshold: 50,
                transitionSpeed: 0.3,
                easing: "ease",
                maxPosition: 266,
                minPosition: -266,
                tapToClose: true,
                touchToDrag: true,
                slideIntent: 40,
                minDragDistance: 5
            }, e = {
                    simpleStates: {
                        opening: null,
                        towards: null,
                        hyperExtending: null,
                        halfway: null,
                        flick: null,
                        translation: {
                            absolute: 0,
                            relative: 0,
                            sinceDirectionChange: 0,
                            percentage: 0
                        }
                    }
                }, h = {}, d = {
                    hasTouch: (b.ontouchstart === null),
                    eventType: function (m) {
                        var l = {
                            down: (d.hasTouch ? "touchstart" : "mousedown"),
                            move: (d.hasTouch ? "touchmove" : "mousemove"),
                            up: (d.hasTouch ? "touchend" : "mouseup"),
                            out: (d.hasTouch ? "touchcancel" : "mouseout")
                        };
                        return l[m]
                    },
                    page: function (l, m) {
                        return (d.hasTouch && m.touches.length && m.touches[0]) ? m.touches[0]["page" + l] : m["page" + l]
                    },
                    klass: {
                        has: function (m, l) {
                            return (m.className).indexOf(l) !== -1
                        },
                        add: function (m, l) {
                            if (!d.klass.has(m, l) && f.addBodyClasses) {
                                m.className += " " + l
                            }
                        },
                        remove: function (m, l) {
                            if (f.addBodyClasses) {
                                m.className = (m.className).replace(l, "").replace(/^\s+|\s+$/g, "")
                            }
                        }
                    },
                    dispatchEvent: function (l) {
                        if (typeof h[l] === "function") {
                            return h[l].call()
                        }
                    },
                    vendor: function () {
                        var m = b.createElement("div"),
                            n = "webkit Moz O ms".split(" "),
                            l;
                        for (l in n) {
                            if (typeof m.style[n[l] + "Transition"] !== "undefined") {
                                return n[l]
                            }
                        }
                    },
                    transitionCallback: function () {
                        return (e.vendor === "Moz" || e.vendor === "ms") ? "transitionend" : e.vendor + "TransitionEnd"
                    },
                    canTransform: function () {
                        return typeof f.element.style[e.vendor + "Transform"] !== "undefined"
                    },
                    deepExtend: function (l, n) {
                        var m;
                        for (m in n) {
                            if (n[m] && n[m].constructor && n[m].constructor === Object) {
                                l[m] = l[m] || {};
                                d.deepExtend(l[m], n[m])
                            } else {
                                l[m] = n[m]
                            }
                        }
                        return l
                    },
                    angleOfDrag: function (l, o) {
                        var n, m;
                        m = Math.atan2(-(e.startDragY - o), (e.startDragX - l));
                        if (m < 0) {
                            m += 2 * Math.PI
                        }
                        n = Math.floor(m * (180 / Math.PI) - 180);
                        if (n < 0 && n > -180) {
                            n = 360 - Math.abs(n)
                        }
                        return Math.abs(n)
                    },
                    events: {
                        addEvent: function g(m, l, n) {
                            if (m.addEventListener) {
                                return m.addEventListener(l, n, false)
                            } else {
                                if (m.attachEvent) {
                                    return m.attachEvent("on" + l, n)
                                }
                            }
                        },
                        removeEvent: function g(m, l, n) {
                            if (m.addEventListener) {
                                return m.removeEventListener(l, n, false)
                            } else {
                                if (m.attachEvent) {
                                    return m.detachEvent("on" + l, n)
                                }
                            }
                        },
                        prevent: function (l) {
                            if (l.preventDefault) {
                                l.preventDefault()
                            } else {
                                l.returnValue = false
                            }
                        }
                    },
                    parentUntil: function (n, l) {
                        var m = typeof l === "string";
                        while (n.parentNode) {
                            if (m && n.getAttribute && n.getAttribute(l)) {
                                return n
                            } else {
                                if (!m && n === l) {
                                    return n
                                }
                            }
                            n = n.parentNode
                        }
                        return null
                    }
                }, i = {
                    translate: {
                        get: {
                            matrix: function (n) {
                                if (!d.canTransform()) {
                                    return parseInt(f.element.style.left, 10)
                                } else {
                                    var m = c.getComputedStyle(f.element)[e.vendor + "Transform"].match(/\((.*)\)/),
                                        l = 8;
                                    if (m) {
                                        m = m[1].split(",");
                                        if (m.length === 16) {
                                            n += l
                                        }
                                        return parseInt(m[n], 10)
                                    }
                                    return 0
                                }
                            }
                        },
                        easeCallback: function () {
                            f.element.style[e.vendor + "Transition"] = "";
                            e.translation = i.translate.get.matrix(4);
                            e.easing = false;
                            clearInterval(e.animatingInterval);
                            if (e.easingTo === 0) {
                                d.klass.remove(b.body, "snapjs-right");
                                d.klass.remove(b.body, "snapjs-left")
                            }
                            d.dispatchEvent("animated");
                            d.events.removeEvent(f.element, d.transitionCallback(), i.translate.easeCallback)
                        },
                        easeTo: function (l) {
                            if (!d.canTransform()) {
                                e.translation = l;
                                i.translate.x(l)
                            } else {
                                e.easing = true;
                                e.easingTo = l;
                                f.element.style[e.vendor + "Transition"] = "all " + f.transitionSpeed + "s " + f.easing;
                                e.animatingInterval = setInterval(function () {
                                    d.dispatchEvent("animating")
                                }, 1);
                                d.events.addEvent(f.element, d.transitionCallback(), i.translate.easeCallback);
                                i.translate.x(l)
                            } if (l === 0) {
                                f.element.style[e.vendor + "Transform"] = ""
                            }
                        },
                        x: function (m) {
                            if ((f.disable === "left" && m > 0) || (f.disable === "right" && m < 0)) {
                                return
                            }
                            if (!f.hyperextensible) {
                                if (m === f.maxPosition || m > f.maxPosition) {
                                    m = f.maxPosition
                                } else {
                                    if (m === f.minPosition || m < f.minPosition) {
                                        m = f.minPosition
                                    }
                                }
                            }
                            m = parseInt(m, 10);
                            if (isNaN(m)) {
                                m = 0
                            }
                            if (d.canTransform()) {
                                var l = "translate3d(" + m + "px, 0,0)";
                                f.element.style[e.vendor + "Transform"] = l
                            } else {
                                f.element.style.width = (c.innerWidth || b.documentElement.clientWidth) + "px";
                                f.element.style.left = m + "px";
                                f.element.style.right = ""
                            }
                        }
                    },
                    drag: {
                        listen: function () {
                            e.translation = 0;
                            e.easing = false;
                            d.events.addEvent(f.element, d.eventType("down"), i.drag.startDrag);
                            d.events.addEvent(f.element, d.eventType("move"), i.drag.dragging);
                            d.events.addEvent(f.element, d.eventType("up"), i.drag.endDrag)
                        },
                        stopListening: function () {
                            d.events.removeEvent(f.element, d.eventType("down"), i.drag.startDrag);
                            d.events.removeEvent(f.element, d.eventType("move"), i.drag.dragging);
                            d.events.removeEvent(f.element, d.eventType("up"), i.drag.endDrag)
                        },
                        startDrag: function (n) {
                            var m = n.target ? n.target : n.srcElement,
                                l = d.parentUntil(m, "data-snap-ignore");
                            if (l) {
                                d.dispatchEvent("ignore");
                                return
                            }
                            if (f.dragger) {
                                var o = d.parentUntil(m, f.dragger);
                                if (!o && (e.translation !== f.minPosition && e.translation !== f.maxPosition)) {
                                    return
                                }
                            }
                            d.dispatchEvent("start");
                            f.element.style[e.vendor + "Transition"] = "";
                            e.isDragging = true;
                            e.hasIntent = null;
                            e.intentChecked = false;
                            e.startDragX = d.page("X", n);
                            e.startDragY = d.page("Y", n);
                            e.dragWatchers = {
                                current: 0,
                                last: 0,
                                hold: 0,
                                state: ""
                            };
                            e.simpleStates = {
                                opening: null,
                                towards: null,
                                hyperExtending: null,
                                halfway: null,
                                flick: null,
                                translation: {
                                    absolute: 0,
                                    relative: 0,
                                    sinceDirectionChange: 0,
                                    percentage: 0
                                }
                            }
                        },
                        dragging: function (s) {
                            if (e.isDragging && f.touchToDrag) {
                                var v = d.page("X", s),
                                    u = d.page("Y", s),
                                    t = e.translation,
                                    o = i.translate.get.matrix(4),
                                    n = v - e.startDragX,
                                    p = o > 0,
                                    q = n,
                                    w;
                                if ((e.intentChecked && !e.hasIntent)) {
                                    return
                                }
                                if (f.addBodyClasses) {
                                    if ((o) > 0) {
                                        d.klass.add(b.body, "snapjs-left");
                                        d.klass.remove(b.body, "snapjs-right")
                                    } else {
                                        if ((o) < 0) {
                                            d.klass.add(b.body, "snapjs-right");
                                            d.klass.remove(b.body, "snapjs-left")
                                        }
                                    }
                                }
                                if (e.hasIntent === false || e.hasIntent === null) {
                                    var m = d.angleOfDrag(v, u),
                                        l = (m >= 0 && m <= f.slideIntent) || (m <= 360 && m > (360 - f.slideIntent)),
                                        r = (m >= 180 && m <= (180 + f.slideIntent)) || (m <= 180 && m >= (180 - f.slideIntent));
                                    if (!r && !l) {
                                        e.hasIntent = false
                                    } else {
                                        e.hasIntent = true
                                    }
                                    e.intentChecked = true
                                }
                                if ((f.minDragDistance >= Math.abs(v - e.startDragX)) || (e.hasIntent === false)) {
                                    return
                                }
                                d.events.prevent(s);
                                d.dispatchEvent("drag");
                                e.dragWatchers.current = v;
                                if (e.dragWatchers.last > v) {
                                    if (e.dragWatchers.state !== "left") {
                                        e.dragWatchers.state = "left";
                                        e.dragWatchers.hold = v
                                    }
                                    e.dragWatchers.last = v
                                } else {
                                    if (e.dragWatchers.last < v) {
                                        if (e.dragWatchers.state !== "right") {
                                            e.dragWatchers.state = "right";
                                            e.dragWatchers.hold = v
                                        }
                                        e.dragWatchers.last = v
                                    }
                                } if (p) {
                                    if (f.maxPosition < o) {
                                        w = (o - f.maxPosition) * f.resistance;
                                        q = n - w
                                    }
                                    e.simpleStates = {
                                        opening: "left",
                                        towards: e.dragWatchers.state,
                                        hyperExtending: f.maxPosition < o,
                                        halfway: o > (f.maxPosition / 2),
                                        flick: Math.abs(e.dragWatchers.current - e.dragWatchers.hold) > f.flickThreshold,
                                        translation: {
                                            absolute: o,
                                            relative: n,
                                            sinceDirectionChange: (e.dragWatchers.current - e.dragWatchers.hold),
                                            percentage: (o / f.maxPosition) * 100
                                        }
                                    }
                                } else {
                                    if (f.minPosition > o) {
                                        w = (o - f.minPosition) * f.resistance;
                                        q = n - w
                                    }
                                    e.simpleStates = {
                                        opening: "right",
                                        towards: e.dragWatchers.state,
                                        hyperExtending: f.minPosition > o,
                                        halfway: o < (f.minPosition / 2),
                                        flick: Math.abs(e.dragWatchers.current - e.dragWatchers.hold) > f.flickThreshold,
                                        translation: {
                                            absolute: o,
                                            relative: n,
                                            sinceDirectionChange: (e.dragWatchers.current - e.dragWatchers.hold),
                                            percentage: (o / f.minPosition) * 100
                                        }
                                    }
                                }
                                i.translate.x(q + t)
                            }
                        },
                        endDrag: function (m) {
                            if (e.isDragging) {
                                d.dispatchEvent("end");
                                var l = i.translate.get.matrix(4);
                                if (e.dragWatchers.current === 0 && l !== 0 && f.tapToClose) {
                                    d.dispatchEvent("close");
                                    d.events.prevent(m);
                                    i.translate.easeTo(0);
                                    e.isDragging = false;
                                    e.startDragX = 0;
                                    return
                                }
                                if (e.simpleStates.opening === "left") {
                                    if ((e.simpleStates.halfway || e.simpleStates.hyperExtending || e.simpleStates.flick)) {
                                        if (e.simpleStates.flick && e.simpleStates.towards === "left") {
                                            i.translate.easeTo(0)
                                        } else {
                                            if ((e.simpleStates.flick && e.simpleStates.towards === "right") || (e.simpleStates.halfway || e.simpleStates.hyperExtending)) {
                                                i.translate.easeTo(f.maxPosition)
                                            }
                                        }
                                    } else {
                                        i.translate.easeTo(0)
                                    }
                                } else {
                                    if (e.simpleStates.opening === "right") {
                                        if ((e.simpleStates.halfway || e.simpleStates.hyperExtending || e.simpleStates.flick)) {
                                            if (e.simpleStates.flick && e.simpleStates.towards === "right") {
                                                i.translate.easeTo(0)
                                            } else {
                                                if ((e.simpleStates.flick && e.simpleStates.towards === "left") || (e.simpleStates.halfway || e.simpleStates.hyperExtending)) {
                                                    i.translate.easeTo(f.minPosition)
                                                }
                                            }
                                        } else {
                                            i.translate.easeTo(0)
                                        }
                                    }
                                }
                                e.isDragging = false;
                                e.startDragX = d.page("X", m)
                            }
                        }
                    }
                }, j = function (l) {
                    if (l.element) {
                        d.deepExtend(f, l);
                        e.vendor = d.vendor();
                        i.drag.listen()
                    }
                };
            this.open = function (l) {
                d.dispatchEvent("open");
                d.klass.remove(b.body, "snapjs-expand-left");
                d.klass.remove(b.body, "snapjs-expand-right");
                if (l === "left") {
                    e.simpleStates.opening = "left";
                    e.simpleStates.towards = "right";
                    d.klass.add(b.body, "snapjs-left");
                    d.klass.remove(b.body, "snapjs-right");
                    i.translate.easeTo(f.maxPosition)
                } else {
                    if (l === "right") {
                        e.simpleStates.opening = "right";
                        e.simpleStates.towards = "left";
                        d.klass.remove(b.body, "snapjs-left");
                        d.klass.add(b.body, "snapjs-right");
                        i.translate.easeTo(f.minPosition)
                    }
                }
            };
            this.close = function () {
                d.dispatchEvent("close");
                i.translate.easeTo(0)
            };
            this.expand = function (l) {
                var m = c.innerWidth || b.documentElement.clientWidth;
                if (l === "left") {
                    d.dispatchEvent("expandLeft");
                    d.klass.add(b.body, "snapjs-expand-left");
                    d.klass.remove(b.body, "snapjs-expand-right")
                } else {
                    d.dispatchEvent("expandRight");
                    d.klass.add(b.body, "snapjs-expand-right");
                    d.klass.remove(b.body, "snapjs-expand-left");
                    m *= -1
                }
                i.translate.easeTo(m)
            };
            this.on = function (l, m) {
                h[l] = m;
                return this
            };
            this.off = function (l) {
                if (h[l]) {
                    h[l] = false
                }
            };
            this.enable = function () {
                d.dispatchEvent("enable");
                i.drag.listen()
            };
            this.disable = function () {
                d.dispatchEvent("disable");
                i.drag.stopListening()
            };
            this.settings = function (l) {
                d.deepExtend(f, l)
            };
            this.state = function () {
                var l, m = i.translate.get.matrix(4);
                if (m === f.maxPosition) {
                    l = "left"
                } else {
                    if (m === f.minPosition) {
                        l = "right"
                    } else {
                        l = "closed"
                    }
                }
                return {
                    state: l,
                    info: e.simpleStates
                }
            };
            j(k)
        };
    if ((typeof module !== "undefined") && module.exports) {
        module.exports = a
    }
    if (typeof ender === "undefined") {
        this.Snap = a
    }
    if ((typeof define === "function") && define.amd) {
        define("snap", [], function () {
            return a
        })
    }
}).call(this, window, document);
(function (e) {
    e.fn.countdown = function (t, n) {
        function i() {
            eventDate = Date.parse(r["date"]) / 1e3;
            currentDate = Math.floor(e.now() / 1e3);
            if (eventDate <= currentDate) {
                n.call(this);
                clearInterval(interval)
            }
            seconds = eventDate - currentDate;
            days = Math.floor(seconds / (60 * 60 * 24));
            seconds -= days * 60 * 60 * 24;
            hours = Math.floor(seconds / (60 * 60));
            seconds -= hours * 60 * 60;
            minutes = Math.floor(seconds / 60);
            seconds -= minutes * 60;
            if (days == 1) {
                thisEl.find(".timeRefDays").text("day")
            } else {
                thisEl.find(".timeRefDays").text("days")
            } if (hours == 1) {
                thisEl.find(".timeRefHours").text("hour")
            } else {
                thisEl.find(".timeRefHours").text("hours")
            } if (minutes == 1) {
                thisEl.find(".timeRefMinutes").text("minute")
            } else {
                thisEl.find(".timeRefMinutes").text("minutes")
            } if (seconds == 1) {
                thisEl.find(".timeRefSeconds").text("second")
            } else {
                thisEl.find(".timeRefSeconds").text("seconds")
            } if (r["format"] == "on") {
                days = String(days).length >= 2 ? days : "0" + days;
                hours = String(hours).length >= 2 ? hours : "0" + hours;
                minutes = String(minutes).length >= 2 ? minutes : "0" + minutes;
                seconds = String(seconds).length >= 2 ? seconds : "0" + seconds
            }
            if (!isNaN(eventDate)) {
                thisEl.find(".days").text(days);
                thisEl.find(".hours").text(hours);
                thisEl.find(".minutes").text(minutes);
                thisEl.find(".seconds").text(seconds)
            } else {
                alert("Invalid date. Here's an example: 12 Tuesday 2012 17:30:00");
                clearInterval(interval)
            }
        }
        thisEl = e(this);
        var r = {
            date: null,
            format: null
        };
        if (t) {
            e.extend(r, t)
        }
        i();
        interval = setInterval(i, 1e3)
    }
})(jQuery);

function ssc_init() {
    if (!document.body) return;
    var e = document.body;
    var t = document.documentElement;
    var n = window.innerHeight;
    var r = e.scrollHeight;
    ssc_root = document.compatMode.indexOf("CSS") >= 0 ? t : e;
    ssc_activeElement = e;
    ssc_initdone = true;
    if (top != self) {
        ssc_frame = true
    } else if (r > n && (e.offsetHeight <= n || t.offsetHeight <= n)) {
        ssc_root.style.height = "auto";
        if (ssc_root.offsetHeight <= n) {
            var i = document.createElement("div");
            i.style.clear = "both";
            e.appendChild(i)
        }
    }
    if (!ssc_fixedback) {
        e.style.backgroundAttachment = "scroll";
        t.style.backgroundAttachment = "scroll"
    }
    if (ssc_keyboardsupport) {
        ssc_addEvent("keydown", ssc_keydown)
    }
}

function ssc_scrollArray(e, t, n, r) {
    r || (r = 1e3);
    ssc_directionCheck(t, n);
    ssc_que.push({
        x: t,
        y: n,
        lastX: t < 0 ? .99 : -.99,
        lastY: n < 0 ? .99 : -.99,
        start: +(new Date)
    });
    if (ssc_pending) {
        return
    }
    var i = function () {
        var s = +(new Date);
        var o = 0;
        var u = 0;
        for (var a = 0; a < ssc_que.length; a++) {
            var f = ssc_que[a];
            var l = s - f.start;
            var c = l >= ssc_animtime;
            var h = c ? 1 : l / ssc_animtime;
            if (ssc_pulseAlgorithm) {
                h = ssc_pulse(h)
            }
            var p = f.x * h - f.lastX >> 0;
            var d = f.y * h - f.lastY >> 0;
            o += p;
            u += d;
            f.lastX += p;
            f.lastY += d;
            if (c) {
                ssc_que.splice(a, 1);
                a--
            }
        }
        if (t) {
            var v = e.scrollLeft;
            e.scrollLeft += o;
            if (o && e.scrollLeft === v) {
                t = 0
            }
        }
        if (n) {
            var m = e.scrollTop;
            e.scrollTop += u;
            if (u && e.scrollTop === m) {
                n = 0
            }
        }
        if (!t && !n) {
            ssc_que = []
        }
        if (ssc_que.length) {
            setTimeout(i, r / ssc_framerate + 1)
        } else {
            ssc_pending = false
        }
    };
    setTimeout(i, 0);
    ssc_pending = true
}

function init() {}

function ssc_wheel(e) {
    if (!ssc_initdone) {
        init()
    }
    var t = e.target;
    var n = ssc_overflowingAncestor(t);
    if (!n || e.defaultPrevented || ssc_isNodeName(t, "embed") && /\.pdf/i.test(t.src)) {
        return true
    }
    var r = e.wheelDeltaX || 0;
    var i = e.wheelDeltaY || 0;
    if (!r && !i) {
        i = e.wheelDelta || 0
    }
    if (Math.abs(r) > 1.2) {
        r *= ssc_stepsize / 120
    }
    if (Math.abs(i) > 1.2) {
        i *= ssc_stepsize / 120
    }
    ssc_scrollArray(n, -r, -i);
    e.preventDefault()
}

function ssc_keydown(e) {
    var t = e.target;
    var n = e.ctrlKey || e.altKey || e.metaKey;
    if (/input|textarea|embed/i.test(t.nodeName) || t.isContentEditable || e.defaultPrevented || n) {
        return true
    }
    if (ssc_isNodeName(t, "button") && e.keyCode === ssc_key.spacebar) {
        return true
    }
    var r, i = 0,
        s = 0;
    var o = ssc_overflowingAncestor(ssc_activeElement);
    var u = o.clientHeight;
    if (o == document.body) {
        u = window.innerHeight
    }
    switch (e.keyCode) {
    case ssc_key.up:
        s = -ssc_arrowscroll;
        break;
    case ssc_key.down:
        s = ssc_arrowscroll;
        break;
    case ssc_key.spacebar:
        r = e.shiftKey ? 1 : -1;
        s = -r * u * .9;
        break;
    case ssc_key.pageup:
        s = -u * .9;
        break;
    case ssc_key.pagedown:
        s = u * .9;
        break;
    case ssc_key.home:
        s = -o.scrollTop;
        break;
    case ssc_key.end:
        var a = o.scrollHeight - o.scrollTop - u;
        s = a > 0 ? a + 10 : 0;
        break;
    case ssc_key.left:
        i = -ssc_arrowscroll;
        break;
    case ssc_key.right:
        i = ssc_arrowscroll;
        break;
    default:
        return true
    }
    ssc_scrollArray(o, i, s);
    e.preventDefault()
}

function ssc_mousedown(e) {
    ssc_activeElement = e.target
}

function ssc_setCache(e, t) {
    for (var n = e.length; n--;) ssc_cache[ssc_uniqueID(e[n])] = t;
    return t
}

function ssc_overflowingAncestor(e) {
    var t = [];
    var n = ssc_root.scrollHeight;
    do {
        var r = ssc_cache[ssc_uniqueID(e)];
        if (r) {
            return ssc_setCache(t, r)
        }
        t.push(e);
        if (n === e.scrollHeight) {
            if (!ssc_frame || ssc_root.clientHeight + 10 < n) {
                return ssc_setCache(t, document.body)
            }
        } else if (e.clientHeight + 10 < e.scrollHeight) {
            overflow = getComputedStyle(e, "").getPropertyValue("overflow");
            if (overflow === "scroll" || overflow === "auto") {
                return ssc_setCache(t, e)
            }
        }
    } while (e = e.parentNode)
}

function ssc_addEvent(e, t, n) {
    window.addEventListener(e, t, n || false)
}

function ssc_removeEvent(e, t, n) {
    window.removeEventListener(e, t, n || false)
}

function ssc_isNodeName(e, t) {
    return e.nodeName.toLowerCase() === t.toLowerCase()
}

function ssc_directionCheck(e, t) {
    e = e > 0 ? 1 : -1;
    t = t > 0 ? 1 : -1;
    if (ssc_direction.x !== e || ssc_direction.y !== t) {
        ssc_direction.x = e;
        ssc_direction.y = t;
        ssc_que = []
    }
}

function ssc_pulse_(e) {
    var t, n, r;
    e = e * ssc_pulseScale;
    if (e < 1) {
        t = e - (1 - Math.exp(-e))
    } else {
        n = Math.exp(-1);
        e -= 1;
        r = 1 - Math.exp(-e);
        t = n + r * (1 - n)
    }
    return t * ssc_pulseNormalize
}

function ssc_pulse(e) {
    if (e >= 1) return 1;
    if (e <= 0) return 0;
    if (ssc_pulseNormalize == 1) {
        ssc_pulseNormalize /= ssc_pulse_(1)
    }
    return ssc_pulse_(e)
}
var ssc_framerate = 150;
var ssc_animtime = 500;
var ssc_stepsize = 150;
var ssc_pulseAlgorithm = true;
var ssc_pulseScale = 6;
var ssc_pulseNormalize = 1;
var ssc_keyboardsupport = true;
var ssc_arrowscroll = 50;
var ssc_frame = false;
var ssc_direction = {
    x: 0,
    y: 0
};
var ssc_initdone = false;
var ssc_fixedback = true;
var ssc_root = document.documentElement;
var ssc_activeElement;
var ssc_key = {
    left: 37,
    up: 38,
    right: 39,
    down: 40,
    spacebar: 32,
    pageup: 33,
    pagedown: 34,
    end: 35,
    home: 36
};
var ssc_que = [];
var ssc_pending = false;
var ssc_cache = {};
setInterval(function () {
    ssc_cache = {}
}, 10 * 1e3);
var ssc_uniqueID = function () {
    var e = 0;
    return function (t) {
        return t.ssc_uniqueID || (t.ssc_uniqueID = e++)
    }
}();
if (/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())) {
    ssc_addEvent("mousedown", ssc_mousedown);
    ssc_addEvent("mousewheel", ssc_wheel);
    ssc_addEvent("load", ssc_init)
}







/**
 * jQuery gMap v3
 *
 * @url         http://www.smashinglabs.pl/gmap
 * @author      Sebastian Poreba <sebastian.poreba@gmail.com>
 * @version     3.3.3
 * @date        27.12.2012
 */
(function(j){var p=function(){this.markers=[];this.mainMarker=!1;this.icon="http://www.google.com/mapfiles/marker.png"};p.prototype.dist=function(a){return Math.sqrt(Math.pow(this.markers[0].latitude-a.latitude,2)+Math.pow(this.markers[0].longitude-a.longitude,2))};p.prototype.setIcon=function(a){this.icon=a};p.prototype.addMarker=function(a){this.markers[this.markers.length]=a};p.prototype.getMarker=function(){if(this.mainmarker)return this.mainmarker;var a,b;1<this.markers.length?(a=new e.MarkerImage("http://thydzik.com/thydzikGoogleMap/markerlink.php?text="+
    this.markers.length+"&color=EF9D3F"),b="cluster of "+this.markers.length+" markers"):(a=new e.MarkerImage(this.icon),b=this.markers[0].title);return this.mainmarker=new e.Marker({position:new e.LatLng(this.markers[0].latitude,this.markers[0].longitude),icon:a,title:b,map:null})};var e=google.maps,q=new e.Geocoder,l=0,r=0,f={},f={init:function(a){var b,c=j.extend({},j.fn.gMap.defaults,a);for(b in j.fn.gMap.defaults.icon)c.icon[b]||(c.icon[b]=j.fn.gMap.defaults.icon[b]);return this.each(function(){var a=
    j(this),b=f._getMapCenter.apply(a,[c]);"fit"==c.zoom&&(c.zoomFit=!0,c.zoom=f._autoZoom.apply(a,[c]));var g={zoom:c.zoom,center:b,mapTypeControl:c.mapTypeControl,mapTypeControlOptions:{},zoomControl:c.zoomControl,zoomControlOptions:{},panControl:c.panControl,panControlOptions:{},scaleControl:c.scaleControl,scaleControlOptions:{},streetViewControl:c.streetViewControl,streetViewControlOptions:{},mapTypeId:c.maptype,scrollwheel:c.scrollwheel,maxZoom:c.maxZoom,minZoom:c.minZoom};c.controlsPositions.mapType&&
(g.mapTypeControlOptions.position=c.controlsPositions.mapType);c.controlsPositions.zoom&&(g.zoomControlOptions.position=c.controlsPositions.zoom);c.controlsPositions.pan&&(g.panControlOptions.position=c.controlsPositions.pan);c.controlsPositions.scale&&(g.scaleControlOptions.position=c.controlsPositions.scale);c.controlsPositions.streetView&&(g.streetViewControlOptions.position=c.controlsPositions.streetView);c.styles&&(g.styles=c.styles);g.mapTypeControlOptions.style=c.controlsStyle.mapType;g.zoomControlOptions.style=
    c.controlsStyle.zoom;g=new e.Map(this,g);c.log&&console.log("map center is:");c.log&&console.log(b);a.data("$gmap",g);a.data("gmap",{opts:c,gmap:g,markers:[],markerKeys:{},infoWindow:null,clusters:[]});if(0!==c.controls.length)for(b=0;b<c.controls.length;b+=1)g.controls[c.controls[b].pos].push(c.controls[b].div);c.clustering.enabled?(b=a.data("gmap"),b.markers=c.markers,f._renderCluster.apply(a,[]),e.event.addListener(g,"bounds_changed",function(){f._renderCluster.apply(a,[])})):0!==c.markers.length&&
    f.addMarkers.apply(a,[c.markers]);f._onComplete.apply(a,[])})},_delayedMode:!1,_onComplete:function(){var a=this.data("gmap"),b=this;if(0!==l)window.setTimeout(function(){f._onComplete.apply(b,[])},100);else{if(f._delayedMode){var c=f._getMapCenter.apply(this,[a.opts,!0]);f._setMapCenter.apply(this,[c]);a.opts.zoomFit&&(c=f._autoZoom.apply(this,[a.opts,!0]),a.gmap.setZoom(c))}a.opts.onComplete()}},_setMapCenter:function(a){var b=this.data("gmap");b&&b.opts.log&&console.log("delayed setMapCenter called");
  if(b&&void 0!==b.gmap&&0==l)b.gmap.setCenter(a);else{var c=this;window.setTimeout(function(){f._setMapCenter.apply(c,[a])},100)}},_boundaries:null,_getBoundaries:function(a){var b=a.markers,c,h=1E3,d=-1E3,g=1E3,e=-1E3;if(b){for(c=0;c<b.length;c+=1)b[c].latitude&&b[c].longitude&&(h>b[c].latitude&&(h=b[c].latitude),d<b[c].longitude&&(d=b[c].longitude),g>b[c].longitude&&(g=b[c].longitude),e<b[c].latitude&&(e=b[c].latitude),a.log&&console.log(b[c].latitude,b[c].longitude,h,d,g,e));f._boundaries={N:h,
  E:d,W:g,S:e}}-1E3==h&&(f._boundaries={N:0,E:0,W:0,S:0});return f._boundaries},_getBoundariesFromMarkers:function(){var a=this.data("gmap").markers,b,c=1E3,h=-1E3,d=1E3,g=-1E3;if(a){for(b=0;b<a.length;b+=1)c>a[b].getPosition().lat()&&(c=a[b].getPosition().lat()),h<a[b].getPosition().lng()&&(h=a[b].getPosition().lng()),d>a[b].getPosition().lng()&&(d=a[b].getPosition().lng()),g<a[b].getPosition().lat()&&(g=a[b].getPosition().lat());f._boundaries={N:c,E:h,W:d,S:g}}-1E3==c&&(f._boundaries={N:0,E:0,W:0,
  S:0});return f._boundaries},_getMapCenter:function(a,b){var c,h=this,d,g;if(a.markers.length&&("fit"==a.latitude||"fit"==a.longitude))return d=b?f._getBoundariesFromMarkers.apply(this):f._getBoundaries(a),c=new e.LatLng((d.N+d.S)/2,(d.E+d.W)/2),a.log&&console.log(b,d,c),c;if(a.latitude&&a.longitude)return c=new e.LatLng(a.latitude,a.longitude);c=new e.LatLng(0,0);if(a.address)return q.geocode({address:a.address},function(b,c){c===google.maps.GeocoderStatus.OK?f._setMapCenter.apply(h,[b[0].geometry.location]):
    a.log&&console.log("Geocode was not successful for the following reason: "+c)}),c;if(0<a.markers.length){g=null;for(d=0;d<a.markers.length;d+=1)if(a.markers[d].setCenter){g=a.markers[d];break}if(null===g)for(d=0;d<a.markers.length;d+=1){if(a.markers[d].latitude&&a.markers[d].longitude){g=a.markers[d];break}a.markers[d].address&&(g=a.markers[d])}if(null===g)return c;if(g.latitude&&g.longitude)return new e.LatLng(g.latitude,g.longitude);g.address&&q.geocode({address:g.address},function(b,c){c===google.maps.GeocoderStatus.OK?
    f._setMapCenter.apply(h,[b[0].geometry.location]):a.log&&console.log("Geocode was not successful for the following reason: "+c)})}return c},_renderCluster:function(){var a=this.data("gmap"),b=a.markers,c=a.clusters,h=a.opts,d;for(d=0;d<c.length;d+=1)c[d].getMarker().setMap(null);c.length=0;if(d=a.gmap.getBounds()){var g=d.getNorthEast(),e=d.getSouthWest(),k=[],m=(g.lat()-e.lat())*h.clustering.clusterSize/100;for(d=0;d<b.length;d+=1)b[d].latitude<g.lat()&&(b[d].latitude>e.lat()&&b[d].longitude<g.lng()&&
    b[d].longitude>e.lng())&&(k[k.length]=b[d]);h.log&&console.log("number of markers "+k.length+"/"+b.length);h.log&&console.log("cluster radius: "+m);for(d=0;d<k.length;d+=1){g=-1;for(b=0;b<c.length&&!(e=c[b].dist(k[d]),e<m&&(g=b,h.clustering.fastClustering));b+=1);-1===g?(b=new p,b.addMarker(k[d]),c[c.length]=b):c[g].addMarker(k[d])}h.log&&console.log("Total clusters in viewport: "+c.length);for(b=0;b<c.length;b+=1)c[b].getMarker().setMap(a.gmap)}else{var j=this;window.setTimeout(function(){f._renderCluster.apply(j)},
    1E3)}},_processMarker:function(a,b,c,h){var d=this.data("gmap"),g=d.gmap,f=d.opts,k;void 0===h&&(h=new e.LatLng(a.latitude,a.longitude));if(!b){var j={image:f.icon.image,iconSize:new e.Size(f.icon.iconsize[0],f.icon.iconsize[1]),iconAnchor:new e.Point(f.icon.iconanchor[0],f.icon.iconanchor[1]),infoWindowAnchor:new e.Size(f.icon.infowindowanchor[0],f.icon.infowindowanchor[1])};b=new e.MarkerImage(j.image,j.iconSize,null,j.iconAnchor)}c||(new e.Size(f.icon.shadowsize[0],f.icon.shadowsize[1]),j&&j.iconAnchor||
    new e.Point(f.icon.iconanchor[0],f.icon.iconanchor[1]));b={position:h,icon:b,title:a.title,map:null,draggable:!0===a.draggable?!0:!1};f.clustering.enabled||(b.map=g);k=new e.Marker(b);k.setShadow(c);d.markers.push(k);a.key&&(d.markerKeys[a.key]=k);var n;a.html&&(c={content:"string"===typeof a.html?f.html_prepend+a.html+f.html_append:a.html,pixelOffset:a.infoWindowAnchor},f.log&&console.log("setup popup with data"),f.log&&console.log(c),n=new e.InfoWindow(c),e.event.addListener(k,"click",function(){f.log&&
console.log("opening popup "+a.html);f.singleInfoWindow&&d.infoWindow&&d.infoWindow.close();n.open(g,k);d.infoWindow=n}));a.html&&a.popup&&(f.log&&console.log("opening popup "+a.html),n.open(g,k),d.infoWindow=n);a.onDragEnd&&e.event.addListener(k,"dragend",function(b){f.log&&console.log("drag end");a.onDragEnd(b)})},_geocodeMarker:function(a,b,c){var h=this;q.geocode({address:a.address},function(d,g){g===e.GeocoderStatus.OK?(l-=1,h.data("gmap").opts.log&&console.log("Geocode was successful with point: ",
    d[0].geometry.location),f._processMarker.apply(h,[a,b,c,d[0].geometry.location])):(g===e.GeocoderStatus.OVER_QUERY_LIMIT&&(!h.data("gmap").opts.noAlerts&&0===r&&alert("Error: too many geocoded addresses! Switching to 1 marker/s mode."),r+=1E3,window.setTimeout(function(){f._geocodeMarker.apply(h,[a,b,c])},r)),h.data("gmap").opts.log&&console.log("Geocode was not successful for the following reason: "+g))})},_autoZoom:function(a,b){var c=j(this).data("gmap"),e=j.extend({},c?c.opts:{},a),d,g,c=39135.758482;
  e.log&&console.log("autozooming map");d=b?f._getBoundariesFromMarkers.apply(this):f._getBoundaries(e);e=111E3*(d.E-d.W)/this.width();g=111E3*(d.S-d.N)/this.height();for(d=2;20>d&&!(e>c||g>c);d+=1)c/=2;return d-2},addMarkers:function(a){var b=this.data("gmap").opts;if(0!==a.length){b.log&&console.log("adding "+a.length+" markers");for(b=0;b<a.length;b+=1)f.addMarker.apply(this,[a[b]])}},addMarker:function(a){var b=this.data("gmap").opts;b.log&&console.log("putting marker at "+a.latitude+", "+a.longitude+
    " with address "+a.address+" and html "+a.html);var c=b.icon.image,h=new e.Size(b.icon.iconsize[0],b.icon.iconsize[1]),d=new e.Point(b.icon.iconanchor[0],b.icon.iconanchor[1]),g=new e.Size(b.icon.infowindowanchor[0],b.icon.infowindowanchor[1]),j=b.icon.shadow,k=new e.Size(b.icon.shadowsize[0],b.icon.shadowsize[1]),m=new e.Point(b.icon.shadowanchor[0],b.icon.shadowanchor[1]);a.infoWindowAnchor=g;a.icon&&(a.icon.image&&(c=a.icon.image),a.icon.iconsize&&(h=new e.Size(a.icon.iconsize[0],a.icon.iconsize[1])),
    a.icon.iconanchor&&(d=new e.Point(a.icon.iconanchor[0],a.icon.iconanchor[1])),a.icon.infowindowanchor&&new e.Size(a.icon.infowindowanchor[0],a.icon.infowindowanchor[1]),a.icon.shadow&&(j=a.icon.shadow),a.icon.shadowsize&&(k=new e.Size(a.icon.shadowsize[0],a.icon.shadowsize[1])),a.icon.shadowanchor&&(m=new e.Point(a.icon.shadowanchor[0],a.icon.shadowanchor[1])));c=new e.MarkerImage(c,h,null,d);j=new e.MarkerImage(j,k,null,m);a.address?("_address"===a.html&&(a.html=a.address),"_address"==a.title&&(a.title=
    a.address),b.log&&console.log("geocoding marker: "+a.address),l+=1,f._delayedMode=!0,f._geocodeMarker.apply(this,[a,c,j])):("_latlng"===a.html&&(a.html=a.latitude+", "+a.longitude),"_latlng"==a.title&&(a.title=a.latitude+", "+a.longitude),b=new e.LatLng(a.latitude,a.longitude),f._processMarker.apply(this,[a,c,j,b]))},removeAllMarkers:function(){var a=this.data("gmap").markers,b;for(b=0;b<a.length;b+=1)a[b].setMap(null),delete a[b];a.length=0},getMarker:function(a){return this.data("gmap").markerKeys[a]},
  fixAfterResize:function(a){var b=this.data("gmap");e.event.trigger(b.gmap,"resize");a&&b.gmap.panTo(new google.maps.LatLng(0,0));b.gmap.panTo(this.gMap("_getMapCenter",b.opts))},setZoom:function(a,b,c){var e=this.data("gmap").gmap;"fit"===a&&(a=f._autoZoom.apply(this,[b,c]));e.setZoom(parseInt(a))},changeSettings:function(a){var b=this.data("gmap"),c=[],e;for(e=0;e<b.markers.length;e+=1)c[e]={latitude:b.markers[e].getPosition().lat(),longitude:b.markers[e].getPosition().lng()};a.markers=c;a.zoom&&
  f.setZoom.apply(this,[a.zoom,a]);(a.latitude||a.longitude)&&b.gmap.panTo(f._getMapCenter.apply(this,[a]))},mapclick:function(a){google.maps.event.addListener(this.data("gmap").gmap,"click",function(b){a(b.latLng)})},geocode:function(a,b,c){q.geocode({address:a},function(a,d){d===e.GeocoderStatus.OK?b(a[0].geometry.location):c&&c(a,d)})},getRoute:function(a){var b=this.data("gmap"),c=b.gmap,f=new e.DirectionsRenderer,d=new e.DirectionsService,g={BYCAR:e.DirectionsTravelMode.DRIVING,BYBICYCLE:e.DirectionsTravelMode.BICYCLING,
    BYFOOT:e.DirectionsTravelMode.WALKING},l={MILES:e.DirectionsUnitSystem.IMPERIAL,KM:e.DirectionsUnitSystem.METRIC},k=null,m=null,n=null;void 0!==a.routeDisplay?k=a.routeDisplay instanceof jQuery?a.routeDisplay[0]:"string"==typeof a.routeDisplay?j(a.routeDisplay)[0]:null:null!==b.opts.routeFinder.routeDisplay&&(k=b.opts.routeFinder.routeDisplay instanceof jQuery?b.opts.routeFinder.routeDisplay[0]:"string"==typeof b.opts.routeFinder.routeDisplay?j(b.opts.routeFinder.routeDisplay)[0]:null);f.setMap(c);
    null!==k&&f.setPanel(k);m=void 0!==g[b.opts.routeFinder.travelMode]?g[b.opts.routeFinder.travelMode]:g.BYCAR;n=void 0!==l[b.opts.routeFinder.travelUnit]?l[b.opts.routeFinder.travelUnit]:l.KM;d.route({origin:a.from,destination:a.to,travelMode:m,unitSystem:n},function(a,c){c==e.DirectionsStatus.OK?f.setDirections(a):null!==k&&j(k).html(b.opts.routeFinder.routeErrors[c])});return this}};j.fn.gMap=function(a){if(f[a])return f[a].apply(this,Array.prototype.slice.call(arguments,1));if("object"===typeof a||
    !a)return f.init.apply(this,arguments);j.error("Method "+a+" does not exist on jQuery.gmap")};j.fn.gMap.defaults={log:!1,address:"",latitude:null,longitude:null,zoom:3,maxZoom:null,minZoom:null,markers:[],controls:{},scrollwheel:!0,maptype:google.maps.MapTypeId.ROADMAP,mapTypeControl:!0,zoomControl:!0,panControl:!1,scaleControl:!1,streetViewControl:!0,controlsPositions:{mapType:null,zoom:null,pan:null,scale:null,streetView:null},controlsStyle:{mapType:google.maps.MapTypeControlStyle.DEFAULT,zoom:google.maps.ZoomControlStyle.DEFAULT},
  singleInfoWindow:!0,html_prepend:'<div class="gmap_marker">',html_append:"</div>",icon:{image:"http://www.google.com/mapfiles/marker.png",iconsize:[20,34],iconanchor:[9,34],infowindowanchor:[9,2],shadow:"http://www.google.com/mapfiles/shadow50.png",shadowsize:[37,34],shadowanchor:[9,34]},onComplete:function(){},routeFinder:{travelMode:"BYCAR",travelUnit:"KM",routeDisplay:null,routeErrors:{INVALID_REQUEST:"The provided request is invalid.",NOT_FOUND:"One or more of the given addresses could not be found.",
    OVER_QUERY_LIMIT:"A temporary error occured. Please try again in a few minutes.",REQUEST_DENIED:"An error occured. Please contact us.",UNKNOWN_ERROR:"An unknown error occured. Please try again.",ZERO_RESULTS:"No route could be found within the given addresses."}},clustering:{enabled:!1,fastClustering:!1,clusterCount:10,clusterSize:40}}})(jQuery);


	
	


/*!
 * iCheck v0.9.1, http://git.io/uhUPMA
 * =================================
 * Powerful jQuery plugin for checkboxes and radio buttons customization
 *
 * (c) 2013 Damir Foy, http://damirfoy.com
 * MIT Licensed
 */

(function($) {

  // Cached vars
  var _iCheck = 'iCheck',
    _iCheckHelper = _iCheck + '-helper',
    _checkbox = 'checkbox',
    _radio = 'radio',
    _checked = 'checked',
    _unchecked = 'un' + _checked,
    _disabled = 'disabled',
    _determinate = 'determinate',
    _indeterminate = 'in' + _determinate,
    _update = 'update',
    _type = 'type',
    _click = 'click',
    _touch = 'touchbegin.i touchend.i',
    _add = 'addClass',
    _remove = 'removeClass',
    _callback = 'trigger',
    _label = 'label',
    _cursor = 'cursor',
    _mobile = /ipad|iphone|ipod|android|blackberry|windows phone|opera mini|silk/i.test(navigator.userAgent);

  // Plugin init
  $.fn[_iCheck] = function(options, fire) {

    // Walker
    var handle = ':' + _checkbox + ', :' + _radio,
      stack = $(),
      walker = function(object) {
        object.each(function() {
          var self = $(this);

          if (self.is(handle)) {
            stack = stack.add(self);
          } else {
            stack = stack.add(self.find(handle));
          };
        });
      };

    // Check if we should operate with some method
    if (/^(check|uncheck|toggle|indeterminate|determinate|disable|enable|update|destroy)$/i.test(options)) {

      // Normalize method's name
      options = options.toLowerCase();

      // Find checkboxes and radio buttons
      walker(this);

      return stack.each(function() {
        if (options == 'destroy') {
          tidy(this, 'ifDestroyed');
        } else {
          operate($(this), true, options);
        };

        // Fire method's callback
        if ($.isFunction(fire)) {
          fire();
        };
      });

    // Customization
    } else if (typeof options == 'object' || !options) {

      // Check if any options were passed
      var settings = $.extend({
          checkedClass: _checked,
          disabledClass: _disabled,
          indeterminateClass: _indeterminate,
          labelHover: true
        }, options),

        selector = settings.handle,
        hoverClass = settings.hoverClass || 'hover',
        focusClass = settings.focusClass || 'focus',
        activeClass = settings.activeClass || 'active',
        labelHover = !!settings.labelHover,
        labelHoverClass = settings.labelHoverClass || 'hover',

        // Setup clickable area
        area = ('' + settings.increaseArea).replace('%', '') | 0;

      // Selector limit
      if (selector == _checkbox || selector == _radio) {
        handle = ':' + selector;
      };

      // Clickable area limit
      if (area < -50) {
        area = -50;
      };

      // Walk around the selector
      walker(this);

      return stack.each(function() {

        // If already customized
        tidy(this);

        var self = $(this),
          node = this,
          id = node.id,

          // Layer styles
          offset = -area + '%',
          size = 100 + (area * 2) + '%',
          layer = {
            position: 'absolute',
            top: offset,
            left: offset,
            display: 'block',
            width: size,
            height: size,
            margin: 0,
            padding: 0,
            background: '#fff',
            border: 0,
            opacity: 0
          },

          // Choose how to hide input
          hide = _mobile ? {
            position: 'absolute',
            visibility: 'hidden'
          } : area ? layer : {
            position: 'absolute',
            opacity: 0
          },

          // Get proper class
          className = node[_type] == _checkbox ? settings.checkboxClass || 'i' + _checkbox : settings.radioClass || 'i' + _radio,

          // Find assigned labels
          label = $(_label + '[for="' + id + '"]').add(self.closest(_label)),

          // Wrap input
          parent = self.wrap('<div class="' + className + '"/>')[_callback]('ifCreated').parent().append(settings.insert),

          // Layer addition
          helper = $('<ins class="' + _iCheckHelper + '"/>').css(layer).appendTo(parent);

        // Finalize customization
        self.data(_iCheck, {o: settings, s: self.attr('style')}).css(hide);
        !!settings.inheritClass && parent[_add](node.className);
        !!settings.inheritID && id && parent.attr('id', _iCheck + '-' + id);
        parent.css('position') == 'static' && parent.css('position', 'relative');
        operate(self, true, _update);

        // Label events
        if (label.length) {
          label.on(_click + '.i mouseenter.i mouseleave.i ' + _touch, function(event) {
            var type = event[_type],
              item = $(this);

            // Do nothing if input is disabled
            if (!node[_disabled]) {

              // Click
              if (type == _click) {
                operate(self, false, true);

              // Hover state
              } else if (labelHover) {

                // mouseleave|touchend
                if (/ve|nd/.test(type)) {
                  parent[_remove](hoverClass);
                  item[_remove](labelHoverClass);
                } else {
                  parent[_add](hoverClass);
                  item[_add](labelHoverClass);
                };
              };

              if (_mobile) {
                event.stopPropagation();
              } else {
                return false;
              };
            };
          });
        };

        // Input events
        self.on(_click + '.i focus.i blur.i keyup.i keydown.i keypress.i', function(event) {
          var type = event[_type],
            key = event.keyCode;

          // Click
          if (type == _click) {
            return false;

          // Keydown
          } else if (type == 'keydown' && key == 32) {
            if (!(node[_type] == _radio && node[_checked])) {
              if (node[_checked]) {
                off(self, _checked);
              } else {
                on(self, _checked);
              };
            };

            return false;

          // Keyup
          } else if (type == 'keyup' && node[_type] == _radio) {
            !node[_checked] && on(self, _checked);

          // Focus/blur
          } else if (/us|ur/.test(type)) {
            parent[type == 'blur' ? _remove : _add](focusClass);
          };
        });

        // Helper events
        helper.on(_click + ' mousedown mouseup mouseover mouseout ' + _touch, function(event) {
          var type = event[_type],

            // mousedown|mouseup
            toggle = /wn|up/.test(type) ? activeClass : hoverClass;

          // Do nothing if input is disabled
          if (!node[_disabled]) {

            // Click
            if (type == _click) {
              operate(self, false, true);

            // Active and hover states
            } else {

              // State is on
              if (/wn|er|in/.test(type)) {

                // mousedown|mouseover|touchbegin
                parent[_add](toggle);

              // State is off
              } else {
                parent[_remove](toggle + ' ' + activeClass);
              };

              // Label hover
              if (label.length && labelHover && toggle == hoverClass) {

                // mouseout|touchend
                label[/ut|nd/.test(type) ? _remove : _add](labelHoverClass);
              };
            };

            if (_mobile) {
              event.stopPropagation();
            } else {
              return false;
            };
          };
        });
      });
    } else {
      return this;
    };
  };

  // Do something with inputs
  function operate(input, direct, method) {
    var node = input[0];
      state = /er/.test(method) ? _indeterminate : /bl/.test(method) ? _disabled : _checked,
      active = method == _update ? {
        checked: node[_checked],
        disabled: node[_disabled],
        indeterminate: input.attr(_indeterminate) == 'true' || input.attr(_determinate) == 'false'
      } : node[state];

    // Check, disable or indeterminate
    if (/^(ch|di|in)/.test(method) && !active) {
      on(input, state);

    // Uncheck, enable or determinate
    } else if (/^(un|en|de)/.test(method) && active) {
      off(input, state);

    // Update
    } else if (method == _update) {

      // Handle states
      for (var state in active) {
        if (active[state]) {
          on(input, state, true);
        } else {
          off(input, state, true);
        };
      };

    } else if (!direct || method == 'toggle') {

      // Helper or label was clicked
      if (!direct) {
        input[_callback]('ifClicked');
      };

      // Toggle checked state
      if (active) {
        if (node[_type] !== _radio) {
          off(input, state);
        };
      } else {
        on(input, state);
      };
    };
  };

  // Add checked, disabled or indeterminate state
  function on(input, state, keep) {
    var node = input[0],
      parent = input.parent(),
      checked = state == _checked,
      indeterminate = state == _indeterminate,
      callback = indeterminate ? _determinate : checked ? _unchecked : 'enabled',
      regular = option(node, callback + capitalize(node[_type])),
      specific = option(node, state + capitalize(node[_type]));

    // Prevent unnecessary actions
    if (node[state] !== true) {

      // Toggle assigned radio buttons
      if (!keep && state == _checked && node[_type] == _radio && node.name) {
        var form = input.closest('form'),
          inputs = 'input[name="' + node.name + '"]';

        inputs = form.length ? form.find(inputs) : $(inputs);

        inputs.each(function() {
          if (this !== node && $.data(this, _iCheck)) {
            off($(this), state);
          };
        });
      };

      // Indeterminate state
      if (indeterminate) {

        // Add indeterminate state
        node[state] = true;

        // Remove checked state
        if (node[_checked]) {
          off(input, _checked, 'force');
        };

      // Checked or disabled state
      } else {

        // Add checked or disabled state
        if (!keep) {
          node[state] = true;
        };

        // Remove indeterminate state
        if (checked && node[_indeterminate]) {
          off(input, _indeterminate, false);
        };
      };

      // Trigger callbacks
      callbacks(input, checked, state, keep);
    };

    // Add proper cursor
    if (node[_disabled] && !!option(node, _cursor, true)) {
      parent.find('.' + _iCheckHelper).css(_cursor, 'default');
    };

    // Add state class
    parent[_add](specific || option(node, state));

    // Remove regular state class
    parent[_remove](regular || option(node, callback) || '');
  };

  // Remove checked, disabled or indeterminate state
  function off(input, state, keep) {
    var node = input[0],
      parent = input.parent(),
      checked = state == _checked,
      indeterminate = state == _indeterminate,
      callback = indeterminate ? _determinate : checked ? _unchecked : 'enabled',
      regular = option(node, callback + capitalize(node[_type])),
      specific = option(node, state + capitalize(node[_type]));

    // Prevent unnecessary actions
    if (node[state] !== false) {

      // Toggle state
      if (indeterminate || !keep || keep == 'force') {
        node[state] = false;
      };

      // Trigger callbacks
      callbacks(input, checked, callback, keep);
    };

    // Add proper cursor
    if (!node[_disabled] && !!option(node, _cursor, true)) {
      parent.find('.' + _iCheckHelper).css(_cursor, 'pointer');
    };

    // Remove state class
    parent[_remove](specific || option(node, state) || '');

    // Add regular state class
    parent[_add](regular || option(node, callback));
  };

  // Remove all traces
  function tidy(node, callback) {
    if ($.data(node, _iCheck)) {
      var input = $(node);

      // Remove everything except input
      input.parent().html(input.attr('style', $.data(node, _iCheck).s || '')[_callback](callback || ''));

      // Unbind events
      input.off('.i').unwrap();
      $(_label + '[for="' + node.id + '"]').add(input.closest(_label)).off('.i');
    };
  };

  // Get some option
  function option(node, state, regular) {
    if ($.data(node, _iCheck)) {
      return $.data(node, _iCheck).o[state + (regular ? '' : 'Class')];
    };
  };

  // Capitalize some string
  function capitalize(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
  };

  // Executable handlers
  function callbacks(input, checked, callback, keep) {
    if (!keep) {
      if (checked) {
        input[_callback]('ifToggled');
      };

      input[_callback]('ifChanged')[_callback]('if' + capitalize(callback));
    };
  };
})(jQuery);








/*!
 * jquery.customSelect() - v0.4.1
 * http://adam.co/lab/jquery/customselect/
 * 2013-05-13
 *
 * Copyright 2013 Adam Coulombe
 * @license http://www.opensource.org/licenses/mit-license.html MIT License
 * @license http://www.gnu.org/licenses/gpl.html GPL2 License 
 */

(function ($) {
    'use strict';

    $.fn.extend({
        customSelect: function (options) {
            // filter out <= IE6
            if (typeof document.body.style.maxHeight === 'undefined') {
                return this;
            }
            var defaults = {
                    customClass: 'customSelect',
                    mapClass:    true,
                    mapStyle:    true
            },
            options = $.extend(defaults, options),
            prefix = options.customClass,
            changed = function ($select,customSelectSpan) {
                var currentSelected = $select.find(':selected'),
                customSelectSpanInner = customSelectSpan.children(':first'),
                html = currentSelected.html() || '&nbsp;';

                customSelectSpanInner.html(html);
                
                if (currentSelected.attr('disabled')) {
                	customSelectSpan.addClass(getClass('DisabledOption'));
                } else {
                	customSelectSpan.removeClass(getClass('DisabledOption'));
                }
                
                setTimeout(function () {
                    customSelectSpan.removeClass(getClass('Open'));
                    $(document).off('mouseup.'+getClass('Open'));                  
                }, 60);
            },
            getClass = function(suffix){
                return prefix + suffix;
            };

            return this.each(function () {
                var $select = $(this),
                    customSelectInnerSpan = $('<span />').addClass(getClass('Inner')),
                    customSelectSpan = $('<span />');

                $select.after(customSelectSpan.append(customSelectInnerSpan));
                
                customSelectSpan.addClass(prefix);

                if (options.mapClass) {
                    customSelectSpan.addClass($select.attr('class'));
                }
                if (options.mapStyle) {
                    customSelectSpan.attr('style', $select.attr('style'));
                }

                $select
                    .addClass('hasCustomSelect')
                    .on('update', function () {
						changed($select,customSelectSpan);
						
                        var selectBoxWidth = parseInt($select.outerWidth(), 10) -
                                (parseInt(customSelectSpan.outerWidth(), 10) -
                                    parseInt(customSelectSpan.width(), 10));
						
						// Set to inline-block before calculating outerHeight
						customSelectSpan.css({
                            display: 'inline-block'
                        });
						
                        var selectBoxHeight = customSelectSpan.outerHeight();

                        if ($select.attr('disabled')) {
                            customSelectSpan.addClass(getClass('Disabled'));
                        } else {
                            customSelectSpan.removeClass(getClass('Disabled'));
                        }

                        customSelectInnerSpan.css({
                            width:   selectBoxWidth,
                            display: 'inline-block'
                        });

                        $select.css({
                            '-webkit-appearance': 'menulist-button',
                            width:                customSelectSpan.outerWidth(),
                            position:             'absolute',
                            opacity:              0,
                            height:               selectBoxHeight,
                            fontSize:             customSelectSpan.css('font-size')
                        });
                    })
                    .on('change', function () {
                        customSelectSpan.addClass(getClass('Changed'));
                        changed($select,customSelectSpan);
                    })
                    .on('keyup', function (e) {
                        if(!customSelectSpan.hasClass(getClass('Open'))){
                            $select.blur();
                            $select.focus();
                        }else{
                            if(e.which==13||e.which==27){
                                changed($select,customSelectSpan);
                            }
                        }
                    })
                    .on('mousedown', function (e) {
                        customSelectSpan.removeClass(getClass('Changed'));
                    })
                    .on('mouseup', function (e) {
                        
                        if( !customSelectSpan.hasClass(getClass('Open'))){
                            // if FF and there are other selects open, just apply focus
                            if($('.'+getClass('Open')).not(customSelectSpan).length>0 && typeof InstallTrigger !== 'undefined'){
                                $select.focus();
                            }else{
                                customSelectSpan.addClass(getClass('Open'));
                                e.stopPropagation();
                                $(document).one('mouseup.'+getClass('Open'), function (e) {
                                    if( e.target != $select.get(0) && $.inArray(e.target,$select.find('*').get()) < 0 ){
                                        $select.blur();
                                    }else{
                                        changed($select,customSelectSpan);
                                    }
                                });
                            }
                        }
                    })
                    .focus(function () {
                        customSelectSpan.removeClass(getClass('Changed')).addClass(getClass('Focus'));
                    })
                    .blur(function () {
                        customSelectSpan.removeClass(getClass('Focus')+' '+getClass('Open'));
                    })
                    .hover(function () {
                        customSelectSpan.addClass(getClass('Hover'));
                    }, function () {
                        customSelectSpan.removeClass(getClass('Hover'));
                    })
                    .trigger('update');
            });
        }
    });
})(jQuery);







// Hotel Counting
(function($) {
	$.fn.countTo = function(options) {
		// merge the default plugin settings with the custom options
		options = $.extend({}, $.fn.countTo.defaults, options || {});

		// how many times to update the value, and how much to increment the value on each update
		var loops = Math.ceil(options.speed / options.refreshInterval),
			increment = (options.to - options.from) / loops;

		return $(this).each(function() {
			var _this = this,
				loopCount = 0,
				value = options.from,
				interval = setInterval(updateTimer, options.refreshInterval);

			function updateTimer() {
				value += increment;
				loopCount++;
				$(_this).html(value.toFixed(options.decimals));

				if (typeof(options.onUpdate) == 'function') {
					options.onUpdate.call(_this, value);
				}

				if (loopCount >= loops) {
					clearInterval(interval);
					value = options.to;

					if (typeof(options.onComplete) == 'function') {
						options.onComplete.call(_this, value);
					}
				}
			}
		});
	};

	$.fn.countTo.defaults = {
		from: 0,  // the number the element should start at
		to: 100,  // the number the element should end at
		speed: 1000,  // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,  // the number of decimal places to show
		onUpdate: null,  // callback method for every time the element is updated,
		onComplete: null,  // callback method for when the element finishes updating
	};
})(jQuery);








// noUiSlider - http://refreshless.com/nouislider/
(function(e,p){if(e.zepto&&!e.fn.removeData)throw new ReferenceError("Zepto is loaded without the data module.");e.fn.noUiSlider=function(D){function r(a,b,c){e.isArray(a)||(a=[a]);e.each(a,function(a,l){"function"===typeof l&&l.call(b,c)})}function x(a){return a instanceof e||e.zepto&&e.zepto.isZ(a)}function E(a){a.preventDefault();var b=0===a.type.indexOf("touch"),c=0===a.type.indexOf("mouse"),d=0===a.type.indexOf("pointer"),l,h,g=a;0===a.type.indexOf("MSPointer")&&(d=!0);a.originalEvent&&(a=a.originalEvent);
b&&(l=a.changedTouches[0].pageX,h=a.changedTouches[0].pageY);if(c||d)d||window.pageXOffset!==p||(window.pageXOffset=document.documentElement.scrollLeft,window.pageYOffset=document.documentElement.scrollTop),l=a.clientX+window.pageXOffset,h=a.clientY+window.pageYOffset;return e.extend(g,{x:l,y:h})}function q(a,b,c,d,l){a=a.replace(/\s/g,u+" ")+u;if(l)return 1<l&&(d=e.extend(b,d)),b.on(a,e.proxy(c,d));d.handler=c;return b.on(a,e.proxy(function(a){if(this.target.is('[class*="noUi-state-"], [disabled]'))return!1;
this.handler(E(a))},d))}function m(a){return!isNaN(parseFloat(a))&&isFinite(a)}function F(a){return parseFloat(this.style[a])}function G(a,b){function c(a){return x(a)||"string"===typeof a||!1===a}var d={handles:{r:!0,t:function(a){a=parseInt(a,10);return 1===a||2===a}},range:{r:!0,t:function(a,b,c){if(2!==a.length)return!1;a=[parseFloat(a[0]),parseFloat(a[1])];if(!m(a[0])||!m(a[1])||"range"===c&&a[0]===a[1]||a[1]<a[0])return!1;b[c]=a;return!0}},start:{r:!0,t:function(a,b,c){return 1===b.handles?
(e.isArray(a)&&(a=a[0]),a=parseFloat(a),b.start=[a],m(a)):this.parent.range.t(a,b,c)}},connect:{t:function(a,b){return!0===a||!1===a||"lower"===a&&1===b.handles||"upper"===a&&1===b.handles}},orientation:{t:function(a){return"horizontal"===a||"vertical"===a}},margin:{r:!0,t:function(a,b,c){a=parseFloat(a);b[c]=a;return m(a)}},serialization:{r:!0,t:function(a,b){if(a.resolution)switch(a.resolution){case 1:case 0.1:case 0.01:case 0.001:case 1E-4:case 1E-5:break;default:return!1}else b.serialization.resolution=
0.01;if(a.mark)return"."===a.mark||","===a.mark;b.serialization.mark=".";return a.to?1===b.handles?(e.isArray(a.to)||(a.to=[a.to]),b.serialization.to=a.to,c(a.to[0])):2===a.to.length&&c(a.to[0])&&c(a.to[1]):!1}},slide:{t:function(a){return"function"===typeof a}},set:{t:function(a,b){return this.parent.slide.t(a,b)}},step:{t:function(a,b,c){return this.parent.margin.t(a,b,c)}},init:function(){var a=this;e.each(a,function(b,c){c.parent=a});delete this.init;return this}}.init();e.each(d,function(c,d){if(d.r&&
!a[c]&&0!==a[c]||(a[c]||0===a[c])&&!d.t(a[c],a,c))throw console&&console.log&&console.group&&(console.group("Invalid noUiSlider initialisation:"),console.log("Option:\t",c),console.log("Value:\t",a[c]),console.log("Slider:\t",b[0]),console.groupEnd()),new RangeError("noUiSlider");})}function y(a,b){a=a.toFixed(b.data("decimals"));return a.replace(".",b.data("mark"))}function v(a,b,c){var d=a.data("nui").options,e=a.data("nui").base.data("handles"),h=a.data("nui").style;if(!m(b)||b===a[0].gPct(h))return!1;
b=0>b?0:100<b?100:b;if(d.step&&!c){var g=t.from(d.range,d.step);b=Math.round(b/g)*g}if(b===a[0].gPct(h)||a.siblings("."+f[1]).length&&!c&&e&&(a.data("nui").number?(c=e[0][0].gPct(h)+d.margin,b=b<c?c:b):(c=e[1][0].gPct(h)-d.margin,b=b>c?c:b),b===a[0].gPct(h)))return!1;0===a.data("nui").number&&95<b?a.addClass(f[13]):a.removeClass(f[13]);a.css(h,b+"%");a.data("store").val(y(t.is(d.range,b),a.data("nui").target));return!0}function H(a,b){var c=a.data("nui").number,d={target:a.data("nui").target,options:a.data("nui").options,
handle:a,i:c};if(x(b.to[c]))return q("change blur",b.to[c],z[0],d,2),q("change",b.to[c],d.options.set,d.target,1),b.to[c];if("string"===typeof b.to[c])return e('<input type="hidden" name="'+b.to[c]+'">').appendTo(a).addClass(f[3]).change(z[1]);if(!1===b.to[c])return{val:function(a){if(a===p)return this.handleElement.data("nui-val");this.handleElement.data("nui-val",a)},hasClass:function(){return!1},handleElement:a}}function I(a){var b=this.base,c=b.data("style"),d=a.x-this.startEvent.x,e="left"===
c?b.width():b.height();"top"===c&&(d=a.y-this.startEvent.y);d=this.position+100*d/e;v(this.handle,d);r(b.data("options").slide,b.data("target"))}function A(){var a=this.base,b=this.handle;b.children().removeClass(f[4]);w.off(n.move);w.off(n.end);e("body").off(u);a.data("target").change();r(b.data("nui").options.set,a.data("target"))}function J(a){var b=this.handle,c=b[0].gPct(b.data("nui").style);b.children().addClass(f[4]);q(n.move,w,I,{startEvent:a,position:c,base:this.base,target:this.target,handle:b});
q(n.end,w,A,{base:this.base,target:this.target,handle:b});e("body").on("selectstart"+u,function(){return!1})}function K(a){a.stopPropagation();A.call(this)}function L(a){if(!this.base.find("."+f[4]).length){var b,c,d=this.base;c=this.handles;var e=d.data("style");a=a["left"===e?"x":"y"];var h="left"===e?d.width():d.height(),g=[],k={left:d.offset().left,top:d.offset().top};for(b=0;b<c.length;b++)g.push({left:c[b].offset().left,top:c[b].offset().top});b=1===c.length?0:(g[0][e]+g[1][e])/2;c=1===c.length||
a<b?c[0]:c[1];d.addClass(f[5]);setTimeout(function(){d.removeClass(f[5])},300);v(c,100*(a-k[e])/h);r([c.data("nui").options.slide,c.data("nui").options.set],d.data("target"));d.data("target").change()}}function M(){var a=[];e.each(e(this).data("handles"),function(b,c){a.push(c.data("store").val())});return 1===a.length?a[0]:a}function N(a,b){if(a===p)return M.call(this);b=!0===b?{trigger:!0}:b||{};e.isArray(a)||(a=[a]);return this.each(function(c,d){d=e(d);e.each(e(this).data("handles"),function(c,
f){if(null!==a[c]&&a[c]!==p){var g,k;k=f.data("nui").options.range;g=a[c];b.trusted=!0;if(!1===b.trusted||1===a.length)b.trusted=!1;2===a.length&&0<=e.inArray(null,a)&&(b.trusted=!1);"string"===e.type(g)&&(g=g.replace(",","."));g=t.to(k,parseFloat(g));g=v(f,g,b.trusted);b.trigger&&r(f.data("nui").options.set,d);g||(g=f.data("store").val(),k=t.is(k,f[0].gPct(f.data("nui").style)),g!==k&&f.data("store").val(y(k,d)))}})})}var u=".nui",w=e(document),n={start:"mousedown touchstart",move:"mousemove touchmove",
end:"mouseup touchend"},O=e.fn.val,f="noUi-base noUi-origin noUi-handle noUi-input noUi-active noUi-state-tap noUi-target -lower -upper noUi-connect noUi-vertical noUi-horizontal noUi-background noUi-z-index".split(" "),s=[f[0]],B=[f[1]],C=[f[2]],t={to:function(a,b){b=0>a[0]?b+Math.abs(a[0]):b-a[0];return 100*b/this.len(a)},from:function(a,b){return 100*b/this.len(a)},is:function(a,b){return b*this.len(a)/100+a[0]},len:function(a){return a[0]>a[1]?a[0]-a[1]:a[1]-a[0]}},z=[function(){this.target.val([this.i?
null:this.val(),this.i?this.val():null],{trusted:!1})},function(a){a.stopPropagation()}];window.navigator.pointerEnabled?n={start:"pointerdown",move:"pointermove",end:"pointerup"}:window.navigator.msPointerEnabled&&(n={start:"MSPointerDown",move:"MSPointerMove",end:"MSPointerUp"});e.fn.val=function(){return this.hasClass(f[6])?N.apply(this,arguments):O.apply(this,arguments)};return function(a){return this.each(function(b,c){c=e(c);c.addClass(f[6]);var d,l,h,g,k=e("<div/>").appendTo(c),m=[],p=[B.concat([f[1]+
f[7]]),B.concat([f[1]+f[8]])],r=[C.concat([f[2]+f[7]]),C.concat([f[2]+f[8]])];a=e.extend({handles:2,margin:0,orientation:"horizontal"},a)||{};a.serialization||(a.serialization={to:[!1,!1],resolution:0.01,mark:"."});G(a,c);a.S=a.serialization;a.connect?"lower"===a.connect?(s.push(f[9],f[9]+f[7]),p[0].push(f[12])):(s.push(f[9]+f[8],f[12]),p[0].push(f[9])):s.push(f[12]);l="vertical"===a.orientation?"top":"left";h=a.S.resolution.toString().split(".");h="1"===h[0]?0:h[1].length;"vertical"===a.orientation?
s.push(f[10]):s.push(f[11]);k.addClass(s.join(" ")).data("target",c);c.data({base:k,mark:a.S.mark,decimals:h});for(d=0;d<a.handles;d++)g=e("<div><div/></div>").appendTo(k),g.addClass(p[d].join(" ")),g.children().addClass(r[d].join(" ")),q(n.start,g.children(),J,{base:k,target:c,handle:g}),q(n.end,g.children(),K,{base:k,target:c,handle:g}),g.data("nui",{target:c,decimals:h,options:a,base:k,style:l,number:d}).data("store",H(g,a.S)),g[0].gPct=F,m.push(g),v(g,t.to(a.range,a.start[d]));k.data({options:a,
handles:m,style:l});c.data({handles:m});q(n.end,k,L,{base:k,target:c,handles:m})})}.call(this,D)}})($);




/*
* Exposure ( Detail Slider) - (http://http://exposure.blogocracy.org/)
* Copyright 2011, Kristoffer Jelbring
* Licensed under the MIT license.
*/
;(function($){$.exposure={v:'1.0.1',defaultTargetId:'exposure',wrapperClass:'exposureWrapper',targetClass:'exposureTarget',currentImageClass:'exposureCurrentImage',lastImageClass:'exposureLastImage',captionClass:'caption',imageDataClass:'extra',dataContainerClass:'exposureData',controlsClass:'exposureControls',slideshowControlsClass:'exposureSlideshowControls',firstPageClass:'exposureFirstPage',prevPageClass:'exposurePrevPage',nextPageClass:'exposureNextPage',lastPageClass:'exposureLastPage',pagingClass:'exposurePaging',playSlideshowClass:'exposurePlaySlideshow',pauseSlideshowClass:'exposurePauseSlideshow',maskClass:'exposureMask',thumbsClass:'exposureThumbs',imageClass:'exposureImage',imageHoverClass:'exposureHover',selectedImageClass:'selected',activeThumbClass:'active',currentThumbClass:'current',firstThumbClass:'first',lastThumbClass:'last',loadedClass:'loaded',activeLinkClass:'active',disabledLinkClass:'disabled',isDefined:function(v){return typeof v!=='undefined'},isObject:function(v){return typeof v==='object'},startsWith:function(s1,s2){if(s1&&s2){return s1.match("^"+s2)===s2}return false},widthDiff:function(el){return el?el.outerWidth(true)-el.width():0},heightDiff:function(el){return el?el.outerHeight(true)-el.height():0},createLink:function(text,onClick,linkClass){var a=$('<a href="javascript:void(0);"></a>').text(text).click(onClick);if(linkClass){a.addClass(linkClass)}return a},texts:{first:'First',previous:'Prev',next:'Next',last:'Last',play:'Play slideshow',pause:'Pause slideshow'}};var defaults={target:'#'+$.exposure.defaultTargetId,showThumbs:true,showControls:true,imageControls:false,controls:{prevNext:true,firstLast:true,pageNumbers:true},carouselControls:false,enableSlideshow:true,slideshowControlsTarget:null,autostartSlideshow:false,slideshowDelay:3000,onSlideshowPlayed:function(){},onSlideshowPaused:function(){},showCaptions:true,showExtraData:true,dataTarget:null,controlsTarget:null,onThumb:function(thumb){},onImage:function(image,imageData,thumb){image.siblings('.'+$.exposure.lastImageClass).remove()},onImageHoverOver:function(){},onImageHoverOut:function(){},onCarousel:function(firstImage,lastImage){},onNext:function(){},onPrev:function(){},onPageChanged:function(){},onPagingLink:function(link){return link},separatePageBrowsing:false,loop:true,onEndOfLoop:function(){},pageSize:5,viewFirstImage:true,visiblePages:5,preloadBuffer:3,keyboardNavigation:true,clickingNavigation:true,fixedContainerSize:false,maxWidth:null,maxHeight:null,stretchToMaxSize:false,fullScreen:false,onEnterFullScreen:function(mask){mask.show()},onExitFullScreen:function(target,mask){target.hide();mask.hide()},showThumbToolTip:true,onEmpty:function(gallery){gallery.hide();gallery.targetElement.remove();if(gallery.showControls){gallery.controlsElement.remove()}if(gallery.slideshowControlsTarget){gallery.slideshowControlsElement.remove()}},onInit:function(){},allowDuplicates:true,jsonSource:null};var Image=function(src,thumb,caption,data){this.src=src;this.thumb=thumb;this.caption=caption;this.data=data;this.loaded=false};$.fn.exposure=function(options){var gallery=this;var ex=$.exposure;var txt=ex.texts;$.extend(this,{images:[],sources:{},newImage:function(src,thumb,caption,data){var alreadyAdded=ex.isDefined(gallery.sources[src]);if(alreadyAdded&&!gallery.allowDuplicates){return-1}var image=new Image(src,thumb,caption,data);var imageIndex=gallery.images.push(image)-1;if(!alreadyAdded){gallery.sources[src]=imageIndex}return imageIndex},initialized:false,current:-1,deselectCurrentImage:function(){gallery.current=-1;gallery.find('li.'+ex.activeThumbClass).removeClass(ex.activeThumbClass)},loadQueue:[],addToLoadQueue:function(index){if(!gallery.loaded(index)&&!gallery.queued(index)){gallery.loadQueue.push(index)}},queued:function(index){return $.inArray(index,gallery.loadQueue)>-1},loaded:function(index){var image=gallery.getImage(index);if(image!==null){return image.loaded}return false},nextInLoadQueue:function(){var i;if(gallery.loadQueue.length>0){var next=gallery.loadQueue.shift();if(gallery.loaded(next)){i=$.inArray(next,this.loadQueue);gallery.loadQueue.splice(i,1);return gallery.nextInLoadQueue()}return next}return null},preloadNextInQueue:function(){if(gallery.loadQueue.length>0){var nextIndex=gallery.nextInLoadQueue();if(nextIndex!==null){gallery.loadImage(nextIndex,gallery.preloadNextInQueue)}}},loadImage:function(index,onload){var image=gallery.getImage(index);var img=$('<img />').addClass(ex.imageClass);var i;if(image!==null){image.loaded=true;if(gallery.queued(index)){i=$.inArray(index,gallery.loadQueue);gallery.loadQueue.splice(i,1)}if(typeof onload==='function'){img.load(onload)}img.attr('src',image.src)}return img},pageNumberForImage:function(index){return Math.ceil((index+1)/gallery.pageSize)},numberOfPages:function(){return this.pageNumberForImage(gallery.images.length-1)},atFirstPage:function(){return gallery.currentPage===1},atLastPage:function(){return gallery.currentPage===gallery.numberOfPages()},validPage:function(page){return page>0&&page<=gallery.numberOfPages()},createPaging:function(){var i;if(gallery.showControls&&gallery.controls.pageNumbers){var stop=gallery.imageControls?gallery.numberOfImages():gallery.numberOfPages();gallery.controlsElement.find('.'+ex.pagingClass).each(function(){for(i=1;i<=stop;i++){$(this).append(gallery.newPagingLink(i))}})}},updatePaging:function(newActivePage){if(gallery.showControls&&gallery.controls.pageNumbers){var current=gallery.imageControls?gallery.current+1:gallery.currentPage;var paging=gallery.controlsElement.find('.'+ex.pagingClass);paging.find(' span.'+ex.activeLinkClass).each(function(){$(this).replaceWith(gallery.newPagingLink(current))});paging.find('a[rel="'+newActivePage+'"]').each(function(){$(this).replaceWith($('<span>'+newActivePage+'</span>').addClass(ex.activeLinkClass))});var pageCount=gallery.imageControls?gallery.numberOfImages():gallery.numberOfPages();if(gallery.visiblePages>0&&pageCount>gallery.visiblePages){var firstVisiblePage=newActivePage;var lastVisiblePage=gallery.visiblePages;var flooredVisiblePages=Math.floor(gallery.visiblePages/2);if(newActivePage<=flooredVisiblePages){firstVisiblePage=1}else if(newActivePage>(pageCount-flooredVisiblePages)){lastVisiblePage=pageCount;firstVisiblePage=lastVisiblePage-gallery.visiblePages+1}else{firstVisiblePage-=flooredVisiblePages;lastVisiblePage=firstVisiblePage+gallery.visiblePages-1}paging.each(function(){$(this).children().each(function(i){var currentPage=i+1;if(currentPage>=firstVisiblePage&&currentPage<=lastVisiblePage){$(this).show()}else{$(this).hide()}})})}}},newPagingLink:function(index){var onclick=function(){var rel=Number($(this).attr('rel'));if(gallery.imageControls){gallery.viewImage(rel-1)}else{gallery.goToPage(rel)}};return ex.createLink(index,onclick).attr('rel',index)},getNextImage:function(){if(gallery.current===gallery.images.length-1){if(gallery.loop){return 0}else{gallery.onEndOfLoop()}}else{return gallery.current+1}return null},getPrevImage:function(){if(gallery.current===0){if(gallery.loop){return gallery.images.length-1}}else{return gallery.current-1}return null},currentPage:1,goToPage:function(page,imageToView){if(this.validPage(page)){gallery.find('li').removeClass(ex.currentThumbClass).hide();gallery.loadPage(page,imageToView);if(!gallery.imageControls){gallery.updatePaging(page)}gallery.currentPage=page;var disabled=ex.disabledLinkClass;if(gallery.showControls){if(gallery.atFirstPage()){if(gallery.controls.firstLast){gallery.find('.'+ex.firstPageClass).addClass(disabled)}if(!gallery.loop&&gallery.controls.prevNext){gallery.find('.'+ex.prevPageClass).hide()}}else{if(gallery.controls.firstLast){gallery.find('.'+ex.firstPageClass).removeClass(disabled)}if(!gallery.loop&&gallery.controls.prevNext){gallery.find('.'+ex.prevPageClass).show()}}if(gallery.atLastPage()){if(gallery.controls.firstLast){gallery.find('.'+ex.lastPageClass).addClass(disabled)}if(!gallery.loop&&gallery.controls.prevNext){gallery.find('.'+ex.nextPageClass).hide()}}else{if(gallery.controls.firstLast){gallery.find('.'+ex.lastPageClass).removeClass(disabled)}if(!gallery.loop&&gallery.controls.prevNext){gallery.find('.'+ex.nextPageClass).show()}}}if(!gallery.carouselControls){gallery.find('li.'+ex.currentThumbClass).show().each(function(i){var imageHeight=$(this).find('img').height();if(imageHeight>0){$(this).height(imageHeight)}});gallery.onPageChanged(gallery)}}},loadPage:function(page,imageToView){if(gallery.validPage(page)){var last=page*gallery.pageSize;var first=last-gallery.pageSize;if(last>gallery.images.length){last=gallery.images.length}gallery.pageTransition=true;gallery.viewThumbs(first,last-1);if(!gallery.separatePageBrowsing){if(imageToView){gallery.viewImage(imageToView)}else{if(page>1||((page===1&&gallery.viewFirstImage)||gallery.initialized)){gallery.viewImage(first)}}}gallery.pageTransition=false}},viewThumbs:function(first,last){var i;if(gallery.showThumbs){for(i=first;i<=last;i++){gallery.viewThumb(i,i===first,i===last,true)}if(!gallery.carouselControls&&gallery.currentPage<gallery.numberOfPages()){var firstNext=last+1;var lastNext=last+gallery.pageSize;if(lastNext>=gallery.images.length){lastNext=gallery.images.length-1}for(i=firstNext;i<=lastNext;i++){var container=gallery.viewThumb(i,i===firstNext,i===lastNext,false);if(container&&container.length){container.hide()}}}}},viewThumb:function(index,first,last,currentPage){if(index<0){index=gallery.images.length+index}else if(index>=gallery.images.length){index=index-gallery.images.length}var image=gallery.images[index];var container=gallery.getThumb(index).parent();if(!container.length){container=gallery.createThumbForImage(image,index);container.attr('rel',gallery.pageNumberForImage(index))}if(container.length){container.parent().append(container);if(first){container.addClass(ex.firstThumbClass)}else{container.removeClass(ex.firstThumbClass)}if(last){container.addClass(ex.lastThumbClass)}else{container.removeClass(ex.lastThumbClass)}if(currentPage){if(gallery.carouselControls){container.show()}else{container.addClass(ex.currentThumbClass)}}}return container},getThumb:function(index){return gallery.find('img[rel="'+index+'"]')},createThumbForImage:function(image,index){if(gallery.showThumbs){var thumb=gallery.getThumb(index);if(thumb===null||!thumb.length){var container=$('<li></li>');gallery.append(container);thumb=$('<img />');if(image.thumb){thumb.attr('src',image.thumb)}else{thumb.attr('src',image.src);var imageWidth=Math.ceil(thumb.width()/thumb.height()*container.height());var imageHeight=Math.ceil(thumb.height()/thumb.width()*container.width());if(imageWidth<imageHeight){thumb.css({height:'auto',maxWidth:container.width()})}else{thumb.css({width:'auto',maxHeight:container.height()})}}container.append(thumb.css('display','block'));thumb.attr('rel',index);if(image.caption&&gallery.showThumbToolTip){thumb.attr('title',image.caption)}thumb.data('data',image.data);thumb.click(function(){gallery.viewImage(Number($(this).attr('rel')))});thumb.load(function(){var imageHeight=$(this).height();if(imageHeight>0){$(this).parent().height(imageHeight)}});gallery.onThumb(thumb);return container}}return null},firstPage:function(){if(!gallery.atFirstPage()){gallery.goToPage(1)}},lastPage:function(){if(!gallery.atLastPage()){gallery.goToPage(gallery.numberOfPages())}},prevPage:function(){if(!gallery.atFirstPage()){gallery.goToPage(gallery.currentPage-1)}else if(gallery.loop){gallery.goToPage(gallery.numberOfPages())}},nextPage:function(){if(!gallery.atLastPage()){gallery.goToPage(gallery.currentPage+1)}else if(gallery.loop){gallery.goToPage(1)}},firstImageOnPage:function(index){if(!index){index=gallery.current}return gallery.pageSize===1||(index%gallery.pageSize===0)},lastImageOnPage:function(index){if(!index){index=gallery.current}var imageCount=gallery.images.length;if(gallery.pageSize===1||imageCount===1){return true}if(index>0){var currentPageSize=gallery.pageSize;var currentPage=gallery.pageNumberForImage(index);if(currentPage===gallery.numberOfPages()){var newPageSize=imageCount%gallery.pageSize;if(newPageSize>0){currentPageSize=newPageSize}}var imageIndex=index;if(currentPage>1){imageIndex-=(currentPage-1)*gallery.pageSize}return(imageIndex+1)%currentPageSize===0}return false},currentPageNumber:function(){return gallery.currentPage},numberOfImages:function(){return gallery.images.length},atFirstImage:function(){return gallery.current===0},atLastImage:function(){return gallery.current===gallery.numberOfImages()-1},getImage:function(index){if(index!==null&&index>-1&&index<gallery.images.length){return gallery.images[index]}return null},indexOfImage:function(src){if(src&&ex.isDefined(gallery.sources[src])){return gallery.sources[src]}return-1},currentImage:function(){return gallery.current},addImage:function(src,thumb,caption,data){var pageCount=gallery.numberOfPages();var index=gallery.newImage(src,thumb,caption,data);if(index>-1){var pageNumber=gallery.pageNumberForImage(index);var containers=$('.'+ex.thumbsClass+' li[rel="'+pageNumber+'"]');if(containers.length){containers.removeClass(ex.lastThumbClass)}var newPageAdded=pageNumber>pageCount;if(newPageAdded){$('.'+ex.pagingClass).empty();gallery.createPaging()}if(newPageAdded||pageNumber===gallery.currentPage){gallery.goToPage(gallery.currentPage)}}},removeImage:function(index){if(gallery.images.length===1){gallery.removeAllImages()}else{if(gallery.enableSlideshow){gallery.pauseSlideshow()}var oldPageCount=gallery.numberOfPages();gallery.images.splice(index,1);var queueIndex=$.inArray(index,gallery.loadQueue);if(queueIndex>-1){gallery.loadQueue.splice(queueIndex,1)}var container=gallery.getThumb(index).parent();container.remove();$('.'+ex.thumbsClass+' > li').each(function(i){if(i>=index){var newRel=gallery.pageNumberForImage(i);$(this).attr('rel',newRel);$(this).find('img').attr('rel',i);if(gallery.firstImageOnPage(i)){$(this).addClass(ex.firstThumbClass)}else{$(this).removeClass(ex.firstThumbClass)}if(gallery.lastImageOnPage(i)){$(this).addClass(ex.lastThumbClass)}else{$(this).removeClass(ex.lastThumbClass)}if(gallery.currentPage===newRel){$(this).show()}else{$(this).hide()}}});var pageRemoved=$.exposure.numberOfPages<oldPageCount;if(pageRemoved){$('.'+ex.pagingClass).empty();gallery.createPaging()}if(gallery.current===index){gallery.current=-1;var nextIndex=index;if(index===gallery.numberOfImages()){nextIndex=0}gallery.viewImage(nextIndex)}}},removeAllImages:function(){gallery.images=[];gallery.sources={};gallery.loadQueue=[];if(gallery.enableSlideshow){gallery.pauseSlideshow()}$('.'+ex.thumbsClass+', '+'.'+ex.pagingClass).empty();gallery.current=-1},viewImage:function(index){if(gallery.current!==index){if(gallery.enableSlideshow&&!gallery.slideshowTransition){gallery.pauseSlideshow()}var wrapper=gallery.wrapper;var validImage=false;var image=gallery.images[index];if(image){var src=image.src;var caption=image.caption;var extraImageData=image.data;if(src){validImage=true;var hasThumb=gallery.showThumbs;var thumb=null;if(gallery.showThumbs){thumb=gallery.find('img[rel="'+index+'"]');hasThumb=thumb&&thumb.length;var active=ex.activeThumbClass;if(hasThumb){thumb.parent().siblings().removeClass(active);thumb.parent().addClass(active)}else{gallery.find$('li.'+active).removeClass(active)}}wrapper.parent().removeClass(ex.loadedClass);if(gallery.loaded(index)){wrapper.parent().addClass(ex.loadedClass)}var img=gallery.loadImage(index,function(){var lastImage=wrapper.find('.'+ex.imageClass);if(lastImage.length){lastImage.removeClass(ex.currentImageClass);lastImage.addClass(ex.lastImageClass)}$(this).addClass(ex.currentImageClass);wrapper.append($(this));if(gallery.clickingNavigation){$(this).click(gallery.nextImage)}if(!$(this).width()||!$(this).height()){var i=$(this);var delay=setInterval(function(){gallery.resizeContainer(i);clearTimeout(delay)},2)}else{gallery.resizeContainer($(this))}if(gallery.fullScreen&&!gallery.infullScreen){gallery.onEnterFullScreen(gallery.mask);gallery.infullScreen=true}if(gallery.dataElement&&gallery.dataElement.length){if(gallery.showCaptions){var captionContainer=gallery.dataElement.find('.'+ex.captionClass);if(captionContainer.length){captionContainer.empty();if(!caption&&hasThumb){caption=thumb.attr('title')}}captionContainer.html(caption)}if(gallery.showExtraData){var extraImageDataContainer=gallery.dataElement.find('.'+ex.imageDataClass);if(extraImageDataContainer.length){extraImageDataContainer.empty();if(!extraImageData&&hasThumb){extraImageData=thumb.data('data')}extraImageDataContainer.html(extraImageData)}}}wrapper.hover(function(){wrapper.addClass(ex.imageHoverClass);gallery.onImageHoverOver()},function(){wrapper.removeClass(ex.imageHoverClass);gallery.onImageHoverOut()});gallery.onImage($(this),gallery.dataElement,thumb);gallery.preloadNextInQueue()})}}if(!validImage){wrapper.siblings().andSelf().empty();gallery.find('li.'+ex.activeThumbClass).removeClass(ex.activeThumbClass)}if(gallery.imageControls){var page=gallery.pageNumberForImage(index);if(gallery.currentPage!==page&&!gallery.pageTransition){gallery.goToPage(page,index)}gallery.updatePaging(index+1)}gallery.current=index;if(gallery.carouselControls&&gallery.images.length>gallery.pageSize){var firstVisibleImage=index;var lastVisibleImage=gallery.pageSize-1;var flooredVisibleImages=Math.floor(gallery.pageSize/2);if(!gallery.loop&&index<flooredVisibleImages){firstVisibleImage=0}else if(!gallery.loop&&index>=(gallery.length-flooredVisibleImages)){lastVisibleImage=gallery.length-1;firstVisibleImage=lastVisibleImage-gallery.pageSize+1}else{firstVisibleImage-=flooredVisibleImages;lastVisibleImage=firstVisibleImage+gallery.pageSize-1}gallery.onCarousel(firstVisibleImage,lastVisibleImage);gallery.find('li').removeClass(ex.currentThumbClass).hide();gallery.viewThumbs(firstVisibleImage,lastVisibleImage);gallery.currentPage=gallery.pageNumberForImage(index)}}},firstImage:function(){if(!gallery.atFirstImage()){if(gallery.separatePageBrowsing||gallery.atFirstPage()){gallery.viewImage(0)}else{gallery.goToPage(1)}}},nextImage:function(){if(!gallery.separatePageBrowsing&&gallery.lastImageOnPage()){if(gallery.atLastPage()&&gallery.loop){gallery.goToPage(1)}else{gallery.goToPage(gallery.currentPage+1)}gallery.onNext()}else{var next=gallery.getNextImage();if(next!==null){gallery.viewImage(next);gallery.onNext()}}var nextNext=gallery.getNextImage();if(nextNext!==null){gallery.addToLoadQueue(nextNext)}},prevImage:function(){if(!gallery.separatePageBrowsing&&gallery.firstImageOnPage()){if(gallery.atFirstPage()&&gallery.loop){gallery.goToPage(gallery.numberOfPages(),gallery.numberOfImages()-1)}else{var page=gallery.currentPage-1;gallery.goToPage(page,page*gallery.pageSize-1)}gallery.onPrev()}else{var prev=gallery.getPrevImage();if(prev!==null){gallery.viewImage(prev);gallery.onPrev()}}var prevPrev=gallery.getPrevImage();if(prevPrev!==null){gallery.addToLoadQueue(prevPrev)}},lastImage:function(){if(!gallery.atLastImage()){if(gallery.separatePageBrowsing||gallery.atLastPage()){gallery.viewImage(gallery.numberOfImages()-1)}else{gallery.goToPage(gallery.numberOfPages(),gallery.numberOfImages()-1)}}},imageHasData:function(){if(gallery.dataElement&&gallery.dataElement.length){var caption=gallery.dataElement.find('.'+$.exposure.captionClass).html();var extra=gallery.dataElement.find('.'+$.exposure.imageDataClass).html();return(caption&&caption.length>0)||(extra&&extra.length>0)}return false},pageTransition:false,playingSlideshow:false,slideshowTimer:null,slideshowTransition:false,slideshow:function(){gallery.slideshowTimer=setTimeout(function(){gallery.slideshowTransition=true;gallery.nextImage();gallery.slideshowTransition=false;gallery.slideshow()},gallery.slideshowDelay)},playSlideshow:function(){if(!gallery.playingSlideshow){if(gallery.slideshowControlsTarget){gallery.slideshowControlsElement.find('.'+ex.playSlideshowClass).hide();gallery.slideshowControlsElement.find('.'+ex.pauseSlideshowClass).show()}gallery.slideshow();gallery.playingSlideshow=true}gallery.onSlideshowPlayed()},pauseSlideshow:function(){if(gallery.playingSlideshow){if(gallery.slideshowControlsTarget){gallery.slideshowControlsElement.find('.'+ex.playSlideshowClass).show();gallery.slideshowControlsElement.find('.'+ex.pauseSlideshowClass).hide()}gallery.playingSlideshow=false;if(gallery.slideshowTimer){clearTimeout(gallery.slideshowTimer)}gallery.onSlideshowPaused()}},toggleSlideshow:function(){if(gallery.playingSlideshow){gallery.pauseSlideshow()}else{gallery.playSlideshow()}},first:function(){if(gallery.imageControls){gallery.firstImage()}else{gallery.firstPage()}},prev:function(){if(gallery.imageControls){gallery.prevImage()}else{gallery.prevPage()}},next:function(){if(gallery.imageControls){gallery.nextImage()}else{gallery.nextPage()}},last:function(){if(gallery.imageControls){gallery.lastImage()}else{gallery.lastPage()}},infullScreen:false,exitFullScreen:function(){if(gallery.infullScreen){gallery.pauseSlideshow();gallery.deselectCurrentImage();gallery.onExitFullScreen(gallery.targetElement,gallery.mask);gallery.infullScreen=false}},actualMaxWidth:function(image,target){return gallery.maxWidth?gallery.maxWidth-(ex.widthDiff(image)+ex.widthDiff(target)):0},actualMaxHeight:function(image,target){return gallery.maxHeight?gallery.maxHeight-(ex.heightDiff(image)+ex.heightDiff(target)):0},fitToMaxSize:function(image){var target=gallery.targetElement;if(gallery.stretchToMaxSize){if(gallery.maxWidth){image.width(gallery.actualMaxWidth(image,target))}if(gallery.maxHeight){image.height(gallery.actualMaxHeight(image,target))}}else{if(image.width()>image.height()){gallery.fitToMaxWidth(image,target);gallery.fitToMaxHeight(image,target)}else if(image.height()>image.width()){gallery.fitToMaxHeight(image,target);gallery.fitToMaxWidth(image,target)}else{var actualMaxHeight=gallery.actualMaxHeight(image,target);var smallest=gallery.actualMaxWidth(image,target);if(!smallest||(actualMaxHeight&&smallest&&actualMaxHeight<smallest)){smallest=actualMaxHeight}if(smallest&&image.width()>smallest){image.width(smallest);image.height(smallest)}}}},centerImageInWindow:function(image){var target=gallery.targetElement;target.width(image.width()).height(image.height());target.css({'top':($(window).height()-target.outerHeight(true))/2,'left':($(window).width()-target.outerWidth(true))/2});target.find('.'+ex.lastImageClass).each(function(){$(this).css({'top':(target.height()-$(this).height())/2,'left':(target.width()-$(this).width())/2})})},fitToWindow:function(){gallery.maxWidth=$(window).width();gallery.maxHeight=$(window).height();var image=gallery.targetElement.find('.'+$.exposure.currentImageClass).width('auto').height('auto');if(!image.width()||!image.height()){var delay=setInterval(function(){gallery.fitToMaxSize(image);gallery.centerImageInWindow(image);clearTimeout(delay)},2)}else{gallery.fitToMaxSize(image);gallery.centerImageInWindow(image)}},fitToMaxWidth:function(image,target){var actualMaxWidth=gallery.actualMaxWidth(image,target);if(actualMaxWidth&&image.width()>actualMaxWidth){var newHeight=Math.round(actualMaxWidth*image.height()/image.width());image.height(newHeight);image.width(actualMaxWidth)}},fitToMaxHeight:function(image,target){var actualMaxHeight=gallery.actualMaxHeight(image,target);if(actualMaxHeight&&image.height()>actualMaxHeight){var newWidth=Math.round(actualMaxHeight*image.width()/image.height());image.width(newWidth);image.height(actualMaxHeight)}},resizeContainer:function(img){gallery.fitToMaxSize(img);if(!gallery.fixedContainerSize){gallery.targetElement.show().width(img.width()).height(img.height())}}});$.extend(this,defaults,options);this.targetElement=$(this.target);if(!this.targetElement.length){this.target=defaults.target;this.targetElement=$('<div id="'+ex.defaultTargetId+'"></div>').insertBefore($(this))}var w=this.wrapper=$('<div class="'+ex.wrapperClass+'"></div>');var te=this.targetElement.addClass(ex.targetClass).append(w);if(this.showCaptions||this.showExtraData){var dataElementsHtml='';if(this.showCaptions){dataElementsHtml+='<div class="'+ex.captionClass+'"></div>'}if(this.showExtraData){dataElementsHtml+='<div class="'+ex.imageDataClass+'"></div>'}var dataElements=$(dataElementsHtml);if(dataElements.length){this.dataElement=$(this.dataTarget);if(this.dataTarget&&this.dataElement.length){this.dataElement.addClass(ex.dataContainerClass).append(dataElements)}else{this.dataElement=$('<div class="'+ex.dataContainerClass+'"></div>');te.append(this.dataElement.append(dataElements))}}}if(!this.showThumbs){this.carouselControls=false}if(this.carouselControls||!this.controlsTarget||(!this.controls.prevNext&&!this.controls.firstLast&&!this.controls.pageNumbers)){this.showControls=false}if(this.showControls){this.controlsElement=$(this.controlsTarget).addClass(ex.controlsClass).each(function(){if(gallery.controls.firstLast){$(this).append(ex.createLink(txt.first,gallery.first,ex.firstPageClass))}if(gallery.controls.prevNext){$(this).append(ex.createLink(txt.previous,gallery.prev,ex.prevPageClass))}if(gallery.controls.pageNumbers){$(this).append($('<div class="'+ex.pagingClass+'"></div>'))}if(gallery.controls.prevNext){$(this).append(ex.createLink(txt.next,gallery.next,ex.nextPageClass))}if(gallery.controls.firstLast){$(this).append(ex.createLink(txt.last,gallery.last,ex.lastPageClass))}})}if(this.enableSlideshow&&this.slideshowControlsTarget){this.slideshowControlsElement=$(this.slideshowControlsTarget).addClass(ex.slideshowControlsClass).each(function(){$(this).append(ex.createLink(txt.play,gallery.playSlideshow,ex.playSlideshowClass));$(this).append(ex.createLink(txt.pause,gallery.pauseSlideshow,ex.pauseSlideshowClass).hide())})}if(this.keyboardNavigation){if(this.carouselControls){$(document).bind('keyup','left',this.nextImage);$(document).bind('keyup','right',this.prevImage)}else{$(document).bind('keyup','left',this.prevImage);$(document).bind('keyup','right',this.nextImage);$(document).bind('keyup','ctrl+left',this.prevPage);$(document).bind('keyup','ctrl+right',this.nextPage);$(document).bind('keyup','up',this.lastImage);$(document).bind('keyup','down',this.firstImage);$(document).bind('keyup','ctrl+up',this.lastPage);$(document).bind('keyup','ctrl+down',this.firstPage)}if(this.enableSlideshow){$(document).bind('keyup','space',this.toggleSlideshow)}}if(this.fullScreen){$(window).resize(this.fitToWindow);this.mask=$('<div class="'+ex.maskClass+'"></div>').click(this.exitFullScreen).insertAfter(this.target);if(this.keyboardNavigation){$(document).bind('keyup','esc',this.exitFullScreen)}}var jsonImages=null;if(this.jsonSource){if(ex.isObject(this.jsonSource)){jsonImages=this.jsonSource}else if(this.jsonSource.length){if(ex.startsWith(this.jsonSource,"http://")||ex.startsWith(this.jsonSource,"https://")){jsonImages=$.ajax({url:this.jsonSource,type:'GET',async:false}).responseText}else{jsonImages=this.jsonSource}}}return this.addClass(ex.thumbsClass).each(function(){var i;if(jsonImages){var images=ex.isObject(jsonImages)?jsonImages:$.parseJSON(jsonImages);if(images&&images.data){for(i in images.data){var photo=images.data[i];if(photo.source&&photo.source.length){var item=$('<li></li>');var link=$('<a></a>').attr('href',photo.source);if(photo.thumb_source&&photo.thumb_source.length){var thumb=$('<img />').attr('src',photo.thumb_source);if(photo.caption&&photo.caption.length){thumb.attr('title',photo.caption)}link.append(thumb)}else if(photo.caption&&photo.caption.length){link.attr('title',photo.caption)}item.append(link);if(photo.extra_data&&photo.extra_data.length){item.append($(photo.extra_data))}$(this).append(item)}}}}var foundImage=false;var foundThumb=false;if($(this).children('li').length){var selectedIndex=null;$(this).show().children('li').each(function(){foundImage=true;var a=$(this).find('a');if(a.length){a=$(a[0]);var src=a.attr('href');var img=a.find('img');var thumbSrc=img.length?img.attr('src'):a.attr('rel');var caption=img.length?img.attr('title'):a.attr('title');var isSelected=a.hasClass(ex.selectedImageClass)&&!selectedIndex;a.remove();var thumbData=$(this).html();if(thumbSrc){foundThumb=true}$(this).remove();var imageIndex=gallery.newImage(src,thumbSrc,caption,thumbData);if(imageIndex>-1){if(isSelected){selectedIndex=imageIndex}if(gallery.loadQueue.length<gallery.preloadBuffer){gallery.addToLoadQueue(imageIndex)}}}else{$(this).remove()}});if(!gallery.showThumbs){gallery.pageSize=1;$(ex.thumbsClass).remove()}if(foundImage){gallery.preloadNextInQueue();gallery.createPaging();if(selectedIndex){gallery.goToPage(gallery.pageNumberForImage(selectedIndex));gallery.viewImage(selectedIndex)}else{gallery.goToPage(1)}if(gallery.enableSlideshow&&gallery.autostartSlideshow){gallery.playSlideshow()}}else{gallery.onEmpty(gallery)}}else{gallery.onEmpty(gallery)}gallery.onInit();gallery.initialized=true})}})(jQuery);
/*
* jQuery Hotkeys Plugin
* Copyright 2010, John Resig
* Dual licensed under the MIT or GPL Version 2 licenses.
*
* Based upon the plugin by Tzury Bar Yochay:
* http://github.com/tzuryby/hotkeys
*
* Original idea by:
* Binny V A, http://www.openjs.com/scripts/events/keyboard_shortcuts/
*/
(function(jQuery){jQuery.hotkeys={version:"0.8",specialKeys:{8:"backspace",9:"tab",13:"return",16:"shift",17:"ctrl",18:"alt",19:"pause",20:"capslock",27:"esc",32:"space",33:"pageup",34:"pagedown",35:"end",36:"home",37:"left",38:"up",39:"right",40:"down",45:"insert",46:"del",96:"0",97:"1",98:"2",99:"3",100:"4",101:"5",102:"6",103:"7",104:"8",105:"9",106:"*",107:"+",109:"-",110:".",111:"/",112:"f1",113:"f2",114:"f3",115:"f4",116:"f5",117:"f6",118:"f7",119:"f8",120:"f9",121:"f10",122:"f11",123:"f12",144:"numlock",145:"scroll",191:"/",224:"meta"},shiftNums:{"`":"~","1":"!","2":"@","3":"#","4":"$","5":"%","6":"^","7":"&","8":"*","9":"(","0":")","-":"_","=":"+",";":": ","'":"\"",",":"<",".":">","/":"?","\\":"|"}};function keyHandler(handleObj){if(typeof handleObj.data!=="string"){return}var origHandler=handleObj.handler,keys=handleObj.data.toLowerCase().split(" ");handleObj.handler=function(event){if(this!==event.target&&(/textarea|select/i.test(event.target.nodeName)||event.target.type==="text")){return}var special=event.type!=="keypress"&&jQuery.hotkeys.specialKeys[event.which],character=String.fromCharCode(event.which).toLowerCase(),key,modif="",possible={};if(event.altKey&&special!=="alt"){modif+="alt+"}if(event.ctrlKey&&special!=="ctrl"){modif+="ctrl+"}if(event.metaKey&&!event.ctrlKey&&special!=="meta"){modif+="meta+"}if(event.shiftKey&&special!=="shift"){modif+="shift+"}if(special){possible[modif+special]=true}else{possible[modif+character]=true;possible[modif+jQuery.hotkeys.shiftNums[character]]=true;if(modif==="shift+"){possible[jQuery.hotkeys.shiftNums[character]]=true}}for(var i=0,l=keys.length;i<l;i++){if(possible[keys[i]]){return origHandler.apply(this,arguments)}}}}jQuery.each(["keydown","keyup","keypress"],function(){jQuery.event.special[this]={add:keyHandler}})})(jQuery);



	
/* ===================================================
 * FitVid
 * http://fitvidsjs.com/
 * =================================================== */
 
 /*!
* FitVids 1.0
*
* Copyright 2011, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
* Credit to Thierry Koblentz - http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/
* Released under the WTFPL license - http://sam.zoy.org/wtfpl/
*
* Date: Thu Sept 01 18:00:00 2011 -0500
*/

!function(a){"use strict";a.fn.fitVids=function(b){var c={customSelector:null};if(!document.getElementById("fit-vids-style")){var d=document.createElement("div"),e=document.getElementsByTagName("base")[0]||document.getElementsByTagName("script")[0];d.className="fit-vids-style",d.id="fit-vids-style",d.style.display="none",d.innerHTML="&shy;<style>                 .fluid-width-video-wrapper {                   width: 100%;                                position: relative;                         padding: 0;                              }                                                                                       .fluid-width-video-wrapper iframe,          .fluid-width-video-wrapper object,          .fluid-width-video-wrapper embed {             position: absolute;                         top: 0;                                     left: 0;                                    width: 100%;                                height: 100%;                            }                                         </style>",e.parentNode.insertBefore(d,e)}return b&&a.extend(c,b),this.each(function(){var b=["iframe[src*='player.vimeo.com']","iframe[src*='youtube.com']","iframe[src*='youtube-nocookie.com']","iframe[src*='kickstarter.com'][src*='video.html']","object","embed"];c.customSelector&&b.push(c.customSelector);var d=a(this).find(b.join(","));d=d.not("object object"),d.each(function(){var b=a(this);if(!("embed"===this.tagName.toLowerCase()&&b.parent("object").length||b.parent(".fluid-width-video-wrapper").length)){var c="object"===this.tagName.toLowerCase()||b.attr("height")&&!isNaN(parseInt(b.attr("height"),10))?parseInt(b.attr("height"),10):b.height(),d=isNaN(parseInt(b.attr("width"),10))?b.width():parseInt(b.attr("width"),10),e=c/d;if(!b.attr("id")){var f="fitvid"+Math.floor(999999*Math.random());b.attr("id",f)}b.wrap('<div class="fluid-width-video-wrapper"></div>').parent(".fluid-width-video-wrapper").css("padding-top",100*e+"%"),b.removeAttr("height").removeAttr("width")}})})}}(jQuery);