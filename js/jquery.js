/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under the MIT license
 */
if ("undefined" == typeof jQuery) throw new Error("Bootstrap's JavaScript requires jQuery"); + function(a) {
    "use strict";
    var b = a.fn.jquery.split(" ")[0].split(".");
    if (b[0] < 2 && b[1] < 9 || 1 == b[0] && 9 == b[1] && b[2] < 1 || b[0] > 3) throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4")
}(jQuery), + function(a) {
    "use strict";

    function b() {
        var a = document.createElement("bootstrap"),
            b = {
                WebkitTransition: "webkitTransitionEnd",
                MozTransition: "transitionend",
                OTransition: "oTransitionEnd otransitionend",
                transition: "transitionend"
            };
        for (var c in b)
            if (void 0 !== a.style[c]) return {
                end: b[c]
            };
        return !1
    }
    a.fn.emulateTransitionEnd = function(b) {
        var c = !1,
            d = this;
        a(this).one("bsTransitionEnd", function() {
            c = !0
        });
        var e = function() {
            c || a(d).trigger(a.support.transition.end)
        };
        return setTimeout(e, b), this
    }, a(function() {
        a.support.transition = b(), a.support.transition && (a.event.special.bsTransitionEnd = {
            bindType: a.support.transition.end,
            delegateType: a.support.transition.end,
            handle: function(b) {
                if (a(b.target).is(this)) return b.handleObj.handler.apply(this, arguments)
            }
        })
    })
}(jQuery), + function(a) {
    "use strict";

    function b(b) {
        return this.each(function() {
            var d = a(this),
                e = d.data("bs.carousel"),
                f = a.extend({}, c.DEFAULTS, d.data(), "object" == typeof b && b),
                g = "string" == typeof b ? b : f.slide;
            e || d.data("bs.carousel", e = new c(this, f)), "number" == typeof b ? e.to(b) : g ? e[g]() : f.interval && e.pause().cycle()
        })
    }
    var c = function(b, c) {
        this.$element = a(b), this.$indicators = this.$element.find(".carousel-indicators"), this.options = c, this.paused = null, this.sliding = null, this.interval = null, this.$active = null, this.$items = null, this.options.keyboard && this.$element.on("keydown.bs.carousel", a.proxy(this.keydown, this)), "hover" == this.options.pause && !("ontouchstart" in document.documentElement) && this.$element.on("mouseenter.bs.carousel", a.proxy(this.pause, this)).on("mouseleave.bs.carousel", a.proxy(this.cycle, this))
    };
    c.VERSION = "3.3.7", c.TRANSITION_DURATION = 600, c.DEFAULTS = {
        interval: 5e3,
        pause: "hover",
        wrap: !0,
        keyboard: !0
    }, c.prototype.keydown = function(a) {
        if (!/input|textarea/i.test(a.target.tagName)) {
            switch (a.which) {
                case 37:
                    this.prev();
                    break;
                case 39:
                    this.next();
                    break;
                default:
                    return
            }
            a.preventDefault()
        }
    }, c.prototype.cycle = function(b) {
        return b || (this.paused = !1), this.interval && clearInterval(this.interval), this.options.interval && !this.paused && (this.interval = setInterval(a.proxy(this.next, this), this.options.interval)), this
    }, c.prototype.getItemIndex = function(a) {
        return this.$items = a.parent().children(".item"), this.$items.index(a || this.$active)
    }, c.prototype.getItemForDirection = function(a, b) {
        var c = this.getItemIndex(b),
            d = "prev" == a && 0 === c || "next" == a && c == this.$items.length - 1;
        if (d && !this.options.wrap) return b;
        var e = "prev" == a ? -1 : 1,
            f = (c + e) % this.$items.length;
        return this.$items.eq(f)
    }, c.prototype.to = function(a) {
        var b = this,
            c = this.getItemIndex(this.$active = this.$element.find(".item.active"));
        if (!(a > this.$items.length - 1 || a < 0)) return this.sliding ? this.$element.one("slid.bs.carousel", function() {
            b.to(a)
        }) : c == a ? this.pause().cycle() : this.slide(a > c ? "next" : "prev", this.$items.eq(a))
    }, c.prototype.pause = function(b) {
        return b || (this.paused = !0), this.$element.find(".next, .prev").length && a.support.transition && (this.$element.trigger(a.support.transition.end), this.cycle(!0)), this.interval = clearInterval(this.interval), this
    }, c.prototype.next = function() {
        if (!this.sliding) return this.slide("next")
    }, c.prototype.prev = function() {
        if (!this.sliding) return this.slide("prev")
    }, c.prototype.slide = function(b, d) {
        var e = this.$element.find(".item.active"),
            f = d || this.getItemForDirection(b, e),
            g = this.interval,
            h = "next" == b ? "left" : "right",
            i = this;
        if (f.hasClass("active")) return this.sliding = !1;
        var j = f[0],
            k = a.Event("slide.bs.carousel", {
                relatedTarget: j,
                direction: h
            });
        if (this.$element.trigger(k), !k.isDefaultPrevented()) {
            if (this.sliding = !0, g && this.pause(), this.$indicators.length) {
                this.$indicators.find(".active").removeClass("active");
                var l = a(this.$indicators.children()[this.getItemIndex(f)]);
                l && l.addClass("active")
            }
            var m = a.Event("slid.bs.carousel", {
                relatedTarget: j,
                direction: h
            });
            return a.support.transition && this.$element.hasClass("slide") ? (f.addClass(b), f[0].offsetWidth, e.addClass(h), f.addClass(h), e.one("bsTransitionEnd", function() {
                f.removeClass([b, h].join(" ")).addClass("active"), e.removeClass(["active", h].join(" ")), i.sliding = !1, setTimeout(function() {
                    i.$element.trigger(m)
                }, 0)
            }).emulateTransitionEnd(c.TRANSITION_DURATION)) : (e.removeClass("active"), f.addClass("active"), this.sliding = !1, this.$element.trigger(m)), g && this.cycle(), this
        }
    };
    var d = a.fn.carousel;
    a.fn.carousel = b, a.fn.carousel.Constructor = c, a.fn.carousel.noConflict = function() {
        return a.fn.carousel = d, this
    };
    var e = function(c) {
        var d, e = a(this),
            f = a(e.attr("data-target") || (d = e.attr("href")) && d.replace(/.*(?=#[^\s]+$)/, ""));
        if (f.hasClass("carousel")) {
            var g = a.extend({}, f.data(), e.data()),
                h = e.attr("data-slide-to");
            h && (g.interval = !1), b.call(f, g), h && f.data("bs.carousel").to(h), c.preventDefault()
        }
    };
    a(document).on("click.bs.carousel.data-api", "[data-slide]", e).on("click.bs.carousel.data-api", "[data-slide-to]", e), a(window).on("load", function() {
        a('[data-ride="carousel"]').each(function() {
            var c = a(this);
            b.call(c, c.data())
        })
    })
}(jQuery);
 

var Custom = Custom || {};
(function($, Custom) {
    'use strict';
    if (!$.fn.carousel) {
        throw new Error('carousel-swipe required bootstrap carousel');
    }
    var CarouselSwipe = function(element) {
        this.$element = $(element);
        this.carousel = this.$element.data('bs.carousel');
        this.options = $.extend({}, CarouselSwipe.DEFAULTS, this.carousel.options);
        this.startX = null;
        this.startY = null;
        this.startTime = null;
        this.cycling = null;
        this.$active = null;
        this.$items = null;
        this.$next = null;
        this.$prev = null;
        this.dx = null;
        this.sliding = false;
        this.$element.on('touchstart', $.proxy(this.touchstart, this)).on('touchmove', $.proxy(this.touchmove, this)).on('touchend', $.proxy(this.touchend, this)).on('slide.bs.carousel', $.proxy(this.sliding, this)).on('slid.bs.carousel', $.proxy(this.stopSliding, this));
    };
    CarouselSwipe.DEFAULTS = {
        swipe: 50
    };
    CarouselSwipe.prototype.sliding = function() {
        this.sliding = true;
    };
    CarouselSwipe.prototype.stopSliding = function() {
        this.sliding = false;
    };
    CarouselSwipe.prototype.touchstart = function(e) {
        if (this.sliding || !this.options.swipe) {
            return;
        }
        var touch = e.originalEvent.touches ? e.originalEvent.touches[0] : e;
        this.dx = 0;
        this.startX = touch.pageX;
        this.startY = touch.pageY;
        this.cycling = null;
        this.width = this.$element.width();
        this.startTime = e.timeStamp;
    };
    CarouselSwipe.prototype.touchmove = function(e) {
        if (this.sliding || !this.options.swipe) {
            return;
        }
        var touch = e.originalEvent.touches ? e.originalEvent.touches[0] : e;
        var dx = touch.pageX - this.startX;
        var dy = touch.pageY - this.startY;
        if (Math.abs(dx) < Math.abs(dy)) {
            return;
        }
        if (this.cycling === null) {
            this.cycling = !!this.carousel.interval;
            this.cycling && this.carousel.pause();
        }
        e.preventDefault();
        this.dx = dx / (this.width || 1) * 100;
        this.swipe(this.dx);
    };
    CarouselSwipe.prototype.touchend = function(e) {
        if (this.sliding || !this.options.swipe) {
            return;
        }
        if (!this.$active) {
            return;
        }
        var all = $().add(this.$active).add(this.$prev).add(this.$next).carousel_transition(true);
        var dt = (e.timeStamp - this.startTime) / 1000;
        var speed = Math.abs(this.dx / dt);
        if (this.dx > 40 || (this.dx > 0 && speed > this.options.swipe)) {
            this.carousel.prev();
        } else if (this.dx < -40 || (this.dx < 0 && speed > this.options.swipe)) {
            this.carousel.next();
        } else {
            this.$active.one($.support.transition.end, function() {
                all.removeClass('prev next');
            }).emulateTransitionEnd(this.$active.css('transition-duration').slice(0, -1) * 1000);
        }
        Custom.behaviors.bond_ga && Custom.behaviors.bond_ga.trackContentSlider(this.$active);
        all.css('left', '');
        this.cycling && this.carousel.cycle();
        this.$active = null;
    };
    CarouselSwipe.prototype.swipe = function(percent) {
        var $active = this.$active || this.getActive();
        if (percent < 0) {
            this.$prev.css('left', '0').removeClass('prev').carousel_transition(true);
            if (!this.$next.length || this.$next.hasClass('active')) {
                return;
            }
            this.$next.carousel_transition(false).addClass('next').css('left', '' + (percent + 100) + '%');
        } else {
            this.$next.css('left', '').removeClass('next').carousel_transition(true);
            if (!this.$prev.length || this.$prev.hasClass('active')) {
                return;
            }
            this.$prev.carousel_transition(false).addClass('prev').css('left', '' + (percent - 100) + '%');
        }
        $active.carousel_transition(false).css('left', '' + percent + '%');
    };
    CarouselSwipe.prototype.getActive = function() {
        this.$active = this.$element.find('.item.active');
        this.$items = this.$active.parent().children();
        this.$next = this.$active.next();
        if (!this.$next.length && this.options.wrap) {
            this.$next = this.$items.first();
        }
        this.$prev = this.$active.prev();
        if (!this.$prev.length && this.options.wrap) {
            this.$prev = this.$items.last();
        }
        return this.$active;
    };
    var old = $.fn.carousel;
    $.fn.carousel = function() {
        old.apply(this, arguments);
        return this.each(function() {
            var $this = $(this);
            var data = $this.data('bs.carousel.swipe');
            if (!data) {
                $this.data('bs.carousel.swipe', new CarouselSwipe(this));
            }
        });
    };
    $.extend($.fn.carousel, old);
    $.fn.carousel_transition = function(enable) {
        enable = enable ? '' : 'none';
        return this.each(function() {
            $(this).css('-webkit-transition', enable).css('transition', enable);
        });
    };
})(jQuery, Custom);;
(function(t) {
    "use strict";
    var e, a = {
            duration: 1e3,
            stagger: 200,
            easing: "swing",
            reverse: !1,
            callback: t.noop
        },
        n = ((e = function(e, n) {
            var r = this,
                o = t.extend(a, n);
            r.$elm = t(e), r.$elm.is("svg") && (r.options = o, r.$paths = r.$elm.find("g path"), r.totalDuration = o.duration + (o.stagger > 0 ? o.stagger * r.$paths.length : 0), r.duration = o.duration / r.totalDuration, r.totalLength = 0, r.$paths.each(function(t, e) {
                var a = e.getTotalLength();
                e.pathLen = a, e.style.strokeDasharray = [a, a].join(" "), e.style.strokeDashoffset = a, -1 === o.stagger ? (e.start = r.totalLength, r.totalLength += a, e.end = r.totalLength) : e.delay = o.stagger * t / r.totalDuration
            }), r.$elm.attr("class", function(t, e) {
                return [e, "drawsvg-initialized"].join(" ")
            }))
        }).prototype.getVal = function(e, a) {
            return 1 - t.easing[a](e, e, 0, 1, 1)
        }, e.prototype.progress = function(t) {
            var e = this,
                a = e.options,
                n = e.duration,
                r = t * e.totalLength;
            e.$paths.each(function(o, s) {
                var i, g;
                g = 1 == (i = 1 === t ? 0 : 0 === t ? 1 : a.stagger > -1 && t < s.delay || -1 === a.stagger && r < s.start ? 1 : a.stagger > -1 && t > n + s.delay || -1 === a.stagger && r > s.end ? 0 : a.stagger > -1 ? (t - s.delay) / n : (r - s.start) / s.pathLen) ? s.pathLen + "px" : i ? e.getVal(i, a.easing) * s.pathLen * (a.reverse ? -1 : 1) + "px" : 0, s.style.strokeDashoffset = g
            })
        }, e.prototype.animate = function() {
            var e = this;
            e.$elm.attr("class", function(t, e) {
                return [e, "drawsvg-animating"].join(" ")
            }), t({
                len: 0
            }).animate({
                len: 1
            }, {
                easing: "linear",
                duration: e.totalDuration,
                step: function(t, a) {
                    e.progress.call(e, t / a.end)
                },
                complete: function() {
                    e.options.callback.call(this), e.$elm.attr("class", function(t, e) {
                        return e.replace("drawsvg-animating", "drawsvg-animated")
                    })
                }
            })
        }, e);
    t.fn.drawsvg = function(e, a) {
        return this.each(function() {
            var r = t.data(this, "drawsvg");
            r && "" + e === e && r[e] ? r[e](a) : t.data(this, "drawsvg", new n(this, e))
        })
    }
});;
setInterval(function() {
    jQuery(".right.carousel-control").click();
}, 10000);