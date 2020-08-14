/*!
 * persianDatepicker v0.1.0
 * http://github.com/behzadi/persianDatepicker/
 *
 * Copyright (c) 2013 Mohammad hasan Behzadi  All rights reserved.
 *
 * Released under the MIT license.
 *
 * jalali Date Functions from NASA.gov
 *
 * Date: Tue Jan 1 2013
 */

 function range (start, end, step) {
     var range = [];
     var typeofStart = typeof start;
     var typeofEnd = typeof end;

     if (step === 0) {
         throw TypeError("Step cannot be zero.");
     }

     if (typeofStart == "undefined" || typeofEnd == "undefined") {
         throw TypeError("Must pass start and end arguments.");
     } else if (typeofStart != typeofEnd) {
         throw TypeError("Start and end arguments must be of same type.");
     }

     typeof step == "undefined" && (step = 1);

     if (end < start) {
         step = -step;
     }

     if (typeofStart == "number") {

         while (step > 0 ? end >= start : end <= start) {
             range.push(start);
             start += step;
         }

     } else if (typeofStart == "string") {

         if (start.length != 1 || end.length != 1) {
             throw TypeError("Only strings with one character are supported.");
         }

         start = start.charCodeAt(0);
         end = end.charCodeAt(0);

         while (step > 0 ? end >= start : end <= start) {
             range.push(String.fromCharCode(start));
             start += step;
         }

     } else {
         throw TypeError("Only string and number types are supported");
     }

     return range;

 }

(function(n) {
    n.fn.persianDatepicker = function(i) {
        var r = "persianDatepicker",
            u = this.data(r);
        return u ? i === !0 ? u : this : this.each(function() {
            return n(this).data(r, new t(this, i))
        })
    };
    var t = function() {
        function t(t, i) {
            var h = {
                    months: ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند"],
                    dowTitle: ["شنبه", "یکشنبه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنج شنبه", "جمعه"],
                    shortDowTitle: ["ش", "ی", "د", "س", "چ", "پ", "ج"],
                    showGregorianDate: !1,
                    persianNumbers: !0,
                    formatDate: "YYYY/MM/DD",
                    selectedBefore: !1,
                    selectedDate: null,
                    startDate: null,
                    endDate: null,
                    nextArrow: "◄",
                    prevArrow: "►",
                    theme: "default",
                    alwaysShow: !1,
                    selectableYears: range(1300,1500,1),
                    selectableMonths: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
                    cellWidth: 35,
                    cellHeight: 25,
                    fontSize: 13,
                    isRTL: !1,
                    closeOnBlur: !0,
                    calendarPosition: {
                        x: 0,
                        y: 0
                    },
                    onShow: function() {},
                    onHide: function() {},
                    onSelect: function() {},
                    onRender: function() {}
                },
                r = this,
                f, u, s, e, o;
            if (r.el = n(t), f = r.el, r.options = n.extend(!1, {}, h, i), u = r.options, _fontSize = u.fontSize, _cw = parseInt(u.cellWidth), _ch = parseInt(u.cellHeight), r.cellStyle = "style='width:" + _cw + "px;height:" + _ch + "px; line-height:" + _ch + "px; font-size:" + _fontSize + "px; ' ", r.headerStyle = "style='height:" + _ch + "px;line-height:" + _ch + "px; font-size:" + (_fontSize + 4) + "px;' ", r.selectUlStyle = "style='margin-top:" + _ch + "px;height:" + (_ch * 7 + 20) + "px; font-size:" + (_fontSize - 2) + "px;' ", r.selectMonthLiStyle = "style='height:" + (_ch * 7 + 7) / 4 + "px;line-height:" + (_ch * 7 + 7) / 4 + "px; width:" + 6.7 * _cw / 3 + "px;width:" + 6.7 * _cw / 3 + "px\\9;' ", r.selectYearLiStyle = "style='height:" + (_ch * 7 + 10) / 6 + "px;line-height:" + (_ch * 7 + 10) / 6 + "px; width:" + (6.7 * _cw - 14) / 3 + "px;width:" + (6.7 * _cw - 15) / 3 + "px\\9;' ", r.footerStyle = "style='height:" + _ch + "px;line-height:" + _ch + "px; font-size:" + _fontSize + "px;' ", r.jDateFunctions = new jDateFunctions, r.options.startDate != null && (r.options.startDate == "today" && (r.options.startDate = r.now().toString("YYYY/MM/DD")), r.options.endDate == "today" && (r.options.endDate = r.now().toString("YYYY/MM/DD")), r.options.selectedDate = r.options.startDate), r.options.selectedDate == undefined && (s = new RegExp("^([1-9][0-9][0-9][0-9])/([0]?[1-9]|[1][0-2])/([0]?[1-9]|[1-2][0-9]|[3][0-1])$"), f.is("input") ? s.test(f.val()) && (r.options.selectedDate = f.val()) : s.test(f.html()) && (r.options.selectedDate = f.html())), r._persianDate = r.options.selectedDate != undefined ? (new persianDate).parse(r.options.selectedDate) : r.now(), u.selectableYears != undefined && u.selectableYears._indexOf(r._persianDate.year) == -1 && (r._persianDate.year = u.selectableYears[0]), r.options.selectableMonths._indexOf(r._persianDate.month) == -1 && (r._persianDate.month = u.selectableMonths[0]), r.persianDate = r._persianDate, r._id = "pdp-" + Math.round(Math.random() * 1e7), r.persianDate.formatDate = u.formatDate, r.calendar = n('<div id="' + r._id + '" class="pdp-' + u.theme + '" />'), r.options.startDate != null)
                for (r.options.selectableYears = [], e = r.persianDate.parse(r.options.startDate).year; e <= r.persianDate.parse(r.options.endDate).year; e++) r.options.selectableYears.push(e);
            (f.attr("pdp-id") || "").length || f.attr("pdp-id", r._id);
            f.addClass("pdp-el").on("click", function(n) {
                r.show(n)
            }).on("focus", function(n) {
                r.show(n)
            });
            if (u.closeOnBlur) f.on("blur", function(n) {
                r.calendar.is(":hover") || r.hide(n)
            });
            u.selectedBefore && (r.options.selectedDate != undefined ? (jd = r.jDateFunctions.getJulianDayFromPersian(r.persianDate.parse(r.options.selectedDate)), r.showDate(f, r.persianDate.parse(r.options.selectedDate).toString("YYYY/MM/DD/" + r.jDateFunctions.getWeekday(jd)), r.now().gDate, u.showGregorianDate)) : (jd = r.jDateFunctions.getJulianDayFromPersian(r.now()), r.showDate(f, r.now().toString("YYYY/MM/DD/" + r.jDateFunctions.getWeekday(jd)), r.now().gDate, u.showGregorianDate)));
            u.isRTL && f.addClass("rtl");
            r.calendar.length && !u.alwaysShow && r.calendar.hide();
            n(document).bind("mouseup", function(t) {
                var e = t.target,
                    o = r.calendar,
                    i;
                f.is(e) || o.is(e) || o.has(e).length !== 0 || !o.is(":visible") || r.hide();
                i = n(".pdp-" + u.theme + " .yearSelect");
                i.is(t.target) || i.has(t.target).length !== 0 || i.hide();
                i = n(".pdp-" + u.theme + " .monthSelect");
                i.is(t.target) || i.has(t.target).length !== 0 || i.hide()
            });
            o = function() {
                var n = f.offset();
                r.calendar.css({
                    top: n.top + f.outerHeight() + u.calendarPosition.y + "px",
                    left: n.left + u.calendarPosition.x + "px"
                })
            };
            r.onresize = o;
            n(window).resize(o);
            n("body").append(r.calendar);
            r.render();
            o()
        }
        return t.prototype = {
            show: function() {
                this.calendar.show();
                n.each(n(".pdp-el").not(this.el), function(n, t) {
                    if (t.length) t.options.onHide(t.calendar)
                });
                this.options.onShow(this.calendar);
                this.onresize()
            },
            hide: function() {
                this.options.onHide(this.calendar);
                this.options && !this.options.alwaysShow && this.calendar.hide()
            },
            render: function() {
                this.calendar.children().remove();
                this.header();
                this.dows();
                this.content();
                this.footer();
                this.options.onRender()
            },
            header: function() {
                var t = this,
                    e, o, u, s;
                _monthYear = n('<div class="" />');
                _monthYear.appendTo(this.calendar);
                _head = n('<div class="pdp-header" ' + t.headerStyle + " />");
                _head.appendTo(this.calendar);
                _next = n('<div class="nextArrow" />').html(this.options.nextArrow).attr("title", "ماه بعد");
                t.options.endDate == null || t.persianDate.parse(t.options.endDate).year > t.persianDate.year || t.persianDate.parse(t.options.endDate).month > t.persianDate.month ? (_next.bind("click", function() {
                    for (nextMonth = t.persianDate.month + 1; t.options.selectableMonths._indexOf(nextMonth) == -1 && nextMonth < 13; nextMonth++);
                    t.persianDate.addMonth(nextMonth - t.persianDate.month);
                    t.render()
                }), _next.removeClass("disabled")) : _next.addClass("disabled");
                _next.appendTo(_head);
                var f = n('<ul class="monthSelect" ' + t.selectUlStyle + " />").hide(),
                    r = n('<ul class="yearSelect" ' + t.selectUlStyle + " />").hide(),
                    h = n("<span class=\"month-click\" />").html(t.options.months[t.persianDate.month - 1]).mousedown(function() {
                        return !1
                    }).click(function(n) {
                        n.stopPropagation();
                        r.css({
                            display: "none"
                        });
                        f.css({
                            display: "inline-block"
                        })
                    }),
                    l = n("<span class=\"year-click\" />").html(t.options.persianNumbers ? t.jDateFunctions.toPersianNums(t.persianDate.year) : t.persianDate.year).mousedown(function() {
                        return !1
                    }).click(function(n) {
                        n.stopPropagation();
                        f.css({
                            display: "none"
                        });
                        r.css({
                            display: "inline-block"
                        });
                        r.scrollTop(70)
                    });
                for (_startDate = t.options.startDate != null ? t.persianDate.parse(t.options.startDate) : t.persianDate.parse("1/1/1"), _endDate = t.options.endDate != null ? t.persianDate.parse(t.options.endDate) : t.persianDate.parse("9999/1/1"), e = function(u, f) {
                        var o = !1,
                            e;
                        for (u === undefined && f === undefined ? (b = t.persianDate.year - 7, a = t.persianDate.year + 14) : f == 0 ? (b = u - 6, a = u, o = !0) : u == 0 && (b = f + 1, a = b + 6), e = [], i = b; i < a && b > 0; i++) e.push(parseInt(i));
                        n.each(t.options.selectableYears || (o ? e.reverse() : e), function(i, u) {
                            var f = n("<li " + t.selectYearLiStyle + " />").html(t.options.persianNumbers ? t.jDateFunctions.toPersianNums(u) : u);
                            u == t.persianDate.year && f.addClass("selected");
                            f.attr("value", u);
                            f.bind("click", function() {
                                t.persianDate.date = 1;
                                t.persianDate.year = parseInt(u);
                                (_endDate.year == u || _endDate.year == 9999) && (t.persianDate.month = _endDate.month);
                                (_startDate.year == u || _startDate.year == 9999) && (t.persianDate.month = _startDate.month);
                                t.render()
                            });
                            o ? r.prepend(f) : r.append(f)
                        })
                    }, e(), i = 1; i <= 12; i++) o = t.options.months[i - 1], u = t.options.selectableMonths._indexOf(i) == -1 || _startDate.year == t.persianDate.year && _startDate.month > i || _endDate.year == t.persianDate.year && i > _endDate.month ? n('<li class="disableMonth" ' + t.selectMonthLiStyle + " />").html(o) : n("<li " + t.selectMonthLiStyle + " />").html(o), i == t.persianDate.month && u.addClass("selected"), u.data("month", {
                    month: o,
                    monthNum: i
                }), u.hasClass("disableMonth") || u.bind("click", function() {
                    t.persianDate.date = 1;
                    t.persianDate.month = n(this).data("month").monthNum;
                    t.render()
                }), f.append(u);
                r.bind("scroll", function() {
                    t.options.selectableYears == undefined && (c = n(this).find("li").length, firstYear = parseInt(n(this).children("li:first").val()), lastYear = parseInt(n(this).children("li:last").val()), lisHeight = c / 3 * (n(this).find("li:first").height() + 4), _com = n(this).scrollTop().toString().length * 500, n(this).scrollTop() < _com.toString().length * 100 && firstYear >= 1 && e(firstYear, 0), _com = n(this).scrollTop().toString().length * 100, lisHeight - n(this).scrollTop() > -_com && lisHeight - n(this).scrollTop() < _com && (e(0, lastYear), n(this).scrollTop(n(this).scrollTop() - 50)), n(this).scrollTop() < _com.toString().length && firstYear >= 30 && n(this).scrollTop(_com.toString().length * 100))
                });
                _monthYear.append(f).append(r);
                s = n('<div class="monthYear" />').append(h).append("<span>&nbsp;&nbsp;<\/span>").append(l);
                _head.append(s);
                _prev = n('<div class="prevArrow" />').html(this.options.prevArrow).attr("title", "ماه قبل");
                t.options.startDate == null || t.persianDate.parse(t.options.startDate).year < t.persianDate.year || t.persianDate.parse(t.options.startDate).month < t.persianDate.month ? (_prev.bind("click", function() {
                    for (prevMonth = t.persianDate.month - 1; t.options.selectableMonths._indexOf(prevMonth) == -1 && prevMonth > 0; prevMonth--);
                    t.persianDate.addMonth(-(t.persianDate.month - prevMonth));
                    t.render()
                }), _prev.removeClass("disabled")) : _prev.addClass("disabled");
                _prev.appendTo(_head)
            },
            dows: function() {
                for (_row = n('<div class="dows" />'), i = 0; i < 7; i++) _cell = n('<div class="dow cell " ' + this.cellStyle + " />").html(this.options.shortDowTitle[i]), _cell.appendTo(_row);
                _row.appendTo(this.calendar)
            },
            content: function() {
                var t = this,
                    u, i, r;
                for (_days = n('<div class="days" />'), _days.appendTo(this.calendar), jd = t.persianDate, jd.date = 1, _start = t.jDateFunctions.getWeekday(t.jDateFunctions.getJulianDayFromPersian(jd)), _end = t.jDateFunctions.getLastDayOfPersianMonth(t.persianDate), u = 0, i = 0; u < 6; u++) {
                    for (_row = n("<div />"), r = 0; r < 7; r++, i++) i < _start || i - _start + 1 > _end ? _cell = n('<div class="nul cell " ' + t.cellStyle + " />").html("&nbsp;") : (_dt = t.getDate(t.persianDate, i - _start + 1), _today = "", _selday = "", _disday = "", t.now().compare(_dt) == 0 && (_today = "today"), t.options.startDate != null && (t.persianDate.parse(t.options.startDate).compare(_dt) == -1 || t.persianDate.parse(t.options.endDate).compare(_dt) == 1) && (_disday = "disday"), t.options.selectedDate != undefined ? t.persianDate.parse(t.options.selectedDate).date == i - _start + 1 && (_selday = "selday") : i - _start + 1 == t.now().date && (_selday = "selday"), _fri = r == 6 ? "friday" : "", _cell = n('<div class="day cell ' + _fri + " " + _today + " " + _selday + " " + _disday + '" ' + t.cellStyle + " />"), _cell.attr("data-jdate", _dt.toString("YYYY/MM/DD")), _cell.attr("data-gdate", t.jDateFunctions.getGDate(_dt)._toString("YYYY/MM/DD")), _cell.html(t.options.persianNumbers ? t.jDateFunctions.toPersianNums(i - _start + 1) : i - _start + 1), (t.options.startDate == undefined || t.persianDate.parse(t.options.startDate).compare(_dt) != -1 && t.persianDate.parse(t.options.endDate).compare(_dt) != 1) && _cell.bind("click", function() {
                        t.calendar.find(".day").removeClass("selday");
                        n(this).addClass("selday");
                        t.options.showGregorianDate ? t.showDate(t.el, n(this).data("jdate"), n(this).data("gdate"), !0) : t.showDate(t.el, n(this).data("jdate"), n(this).data("gdate"), !1);
                        t.hide()
                    })), _cell.appendTo(_row);
                    _row.appendTo(_days)
                }
            },
            footer: function() {
                var t = this;
                _footer = n('<div class="pdp-footer" ' + t.footerStyle + " />");
                _footer.appendTo(this.calendar);
                t.options.selectableMonths._indexOf(t.persianDate.month) > -1 && (_goToday = n('<a class="goToday" />'), _goToday.attr("data-jdate", t.now().toString("YYYY/MM/DD/DW")), _goToday.attr("data-gdate", t.jDateFunctions.getGDate(t.now())), _goToday.attr("href", "javascript:;").html("امروز"), t.options.startDate == null && _goToday.bind("click", function() {
                    t.persianDate = t.now();
                    t.showDate(t.el, n(this).data("jdate"), n(this).data("gdate"), t.options.showGregorianDate);
                    t.calendar.find(".day").removeClass("selday");
                    t.render();
                    t.calendar.find(".today").addClass("selday");
                    t.hide()
                }), _goToday.appendTo(_footer))
            },
            showDate: function(n, t, i, r) {
                var u = this;
                t = u.persianDate.parse(t).toString(u.options.formatDate);
                i = new Date(i)._toString(u.options.formatDate);
                n.is("input:text") ? r ? n.val(i) : n.val(t) : r ? n.html(i) : n.html(t);
                n.attr("data-jDate", t);
                n.attr("data-gDate", i);
                this.options.onSelect()
            },
            getDate: function(n, t) {
                return n.date = t, n.day = this.jDateFunctions.getWeekday(this.jDateFunctions.getJulianDayFromPersian(n)), n
            },
            now: function() {
                return this.jDateFunctions.getPCalendarDate(this.jDateFunctions.getJulianDay(new Date))
            }
        }, t
    }();
    (function() {
        Number.prototype.padLeft = function(n, t) {
            var i = String(n || 10).length - String(this).length + 1;
            return i > 0 ? new Array(i).join(t || "0") + this : this
        };
        Date.prototype._toString = function(n) {
            return (months = ["Januray", "February", "March", "April", "May", "June", "Julay", "August", "September", "October", "November", "December"], dows = ["Sun", "Mon", "Tue", "Wed", "Tur", "Fri", "Sat"], n === undefined || n == "default") ? this.toLocaleDateString() : n.replace("YYYY", this.getFullYear()).replace("MM", this.getMonth() + 1).replace("DD", this.getDate()).replace("0M", this.getMonth() + 1 > 9 ? this.getMonth() + 1 : "0" + (this.getMonth() + 1)).replace("0D", this.getDate() > 9 ? this.getDate() : "0" + this.getDate()).replace("hh", this.getHours() == 0 ? (new Date).getHours() : this.getHours()).replace("mm", this.getMinutes() == 0 ? (new Date).getMinutes() : this.getMinutes()).replace("ss", this.getSeconds() == 0 ? (new Date).getSeconds() : this.getSeconds()).replace("ms", this.getMilliseconds() == 0 ? (new Date).getMilliseconds() : this.getMilliseconds()).replace("tm", this.getHours() >= 12 && this.getMinutes() > 0 ? "PM" : "AM").replace("NM", months[this.getMonth()]).replace("DW", this.getDay()).replace("ND", dows[this.getDay()])
        };
        Array.prototype._indexOf = function(t) {
            return n.inArray(t, this)
        }
    })()
})(jQuery);
var persianDate = function() {
        function n() {
            var n = this;
            n.months = ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند"];
            n.dowTitle = ["شنبه", "یکشنبه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنج شنبه", "جمعه"];
            n.year = 1300;
            n.month = 1;
            n.date = 1;
            n.day = 1;
            n.gDate = new Date
        }
        return n.prototype = {
            now: function() {
                var n = new jDateFunctions;
                return n.getPCalendarDate(n.getJulianDay(new Date))
            },
            addDay: function(t) {
                for (var i, r, u = new jDateFunctions, e = t > 0 ? t : -t, f = 0; f < e; f++) i = new n, i.month = this.month, i.year = this.year, i = i.addMonth(-1), r = t > 0 ? u.getLastDayOfPersianMonth(this) : u.getLastDayOfPersianMonth(i), t > 0 ? this.date += 1 : this.date -= 1, t > 0 ? this.date > r && (this.date = 1, this.addMonth(1)) : t < 0 && (this.month > 1 && this.date > r ? (this.date = 1, this.addMonth(1)) : this.date == 0 && (this.addMonth(-1), this.date = r));
                return this
            },
            addMonth: function(n) {
                for (var i = n > 0 ? n : -n, t = 0; t < i; t++) n > 0 ? this.month += 1 : this.month -= 1, this.month == 13 ? (this.month = 1, this.addYear(1)) : this.month == 0 && (this.month = 12, this.addYear(-1));
                return this
            },
            addYear: function(n) {
                return this.year += n, this
            },
            compare: function(n) {
                return n.year == this.year && n.month == this.month && n.date == this.date ? 0 : n.year > this.year ? 1 : n.year == this.year && n.month > this.month ? 1 : n.year == this.year && n.month == this.month && n.date > this.date ? 1 : -1
            },
            parse: function(t) {
                arr = t.split("/");
                y = arr[0];
                m = arr[1];
                d = arr[2];
                var i = new n;
                return jdf = new jDateFunctions, i.year = parseInt(y), i.month = parseInt(m), i.date = parseInt(d), i.day = jdf.getWeekday(jdf.getJulianDayFromPersian(i)), i.gDate = jdf.getGCalendarDate(jdf.getJulianDayFromPersian(i), "jgmonth"), i
            },
            toString: function(n) {
                return n === undefined ? this.year + "/" + this.month + "/" + this.date : n.replace("YYYY", this.year).replace("MM", this.month).replace("DD", this.date).replace("0M", this.month > 9 ? this.month : "0" + this.month.toString()).replace("0D", this.date > 9 ? this.date : "0" + this.date.toString()).replace("hh", this.gDate.getHours()).replace("mm", this.gDate.getMinutes()).replace("ss", this.gDate.getSeconds()).replace("tm", this.gDate.getHours() >= 12 && this.gDate.getMinutes() > 0 ? "ب.ظ" : "ق.ظ").replace("ms", this.gDate.getMilliseconds()).replace("NM", this.months[this.month - 1]).replace("DW", this.day).replace("ND", this.dowTitle[this.day])
            }
        }, n
    }(),
    jDateFunctions = function() {
        function n() {}
        return n.prototype = {
            toPersianNums: function(n) {
                for (strnum = n.toString(), nums = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"], res = "", i = 0; i < strnum.length; i++) res += nums[parseInt(strnum[i])];
                return res
            },
            getGDate: function(n) {
                return this.getGCalendarDate(this.getJulianDayFromPersian(n), "gmonth")
            },
            getPCalendarDate: function(n) {
                var r = 0,
                    f = 0,
                    c = 0,
                    h, v, u, i;
                if (n > 0) {
                    var l = n + .5,
                        y = Math.floor(l),
                        w = l - y,
                        e = Math.floor(n) + .5,
                        t = new persianDate;
                    t.year = 475;
                    t.month = 1;
                    t.date = 1;
                    var a = e - this.getJulianDayFromPersian(t),
                        p = Math.floor(a / 1029983),
                        o = a % 1029983,
                        s;
                    o == 1029982 ? s = 2820 : (h = Math.floor(o / 366), v = o % 366, s = Math.floor((2134 * h + 2816 * v + 2815) / 1028522) + h + 1);
                    r = s + 2820 * p + 474;
                    r <= 0 && r--;
                    t.year = r;
                    t.month = 1;
                    t.date = 1;
                    u = e - this.getJulianDayFromPersian(t) + 1;
                    f = u <= 186 ? Math.ceil(u / 31) : Math.ceil((u - 6) / 30);
                    t.year = r;
                    t.month = f;
                    t.date = 1;
                    c = e - this.getJulianDayFromPersian(t) + 1
                }
                return i = new persianDate, i.year = r, i.month = f, i.date = c, i.day = this.getWeekday(this.getJulianDayFromPersian(i)), i.gDate = new Date, i
            },
            getGCalendarDate: function(n, t) {
                var e = 0,
                    i = 0,
                    l = 0,
                    s;
                if (n > 0) {
                    var a = n + .5,
                        u = Math.floor(a),
                        y = a - u,
                        o;
                    t == "jmonth" || t == "jgmonth" && u < 2299161 ? o = u : (t == "gmonth" || t == "jgmonth" && u >= 2299161) && (s = Math.floor((u - 1867216.25) / 36524.25), o = u + 1 + s - Math.floor(s / 4));
                    var h = o + 1524,
                        c = Math.floor((h - 122.1) / 365.25),
                        v = Math.floor(365.25 * c),
                        f = Math.floor((h - v) / 30.6001);
                    l = h - v - Math.floor(30.6001 * f) + y;
                    f < 14 ? i = f - 1 : (f == 14 || f == 15) && (i = f - 13);
                    i > 2 ? e = c - 4716 : (i == 1 || i == 2) && (e = c - 4715)
                }
                return r = new Date, new Date(e, i - 1, l, r.getHours(), r.getMinutes(), r.getSeconds(), r.getMilliseconds())
            },
            getJulianDay: function(n, t) {
                var t = t === undefined ? 0 : t,
                    r = n.getFullYear(),
                    i = n.getMonth() + 1,
                    u = n.getDate(),
                    f = r + 0,
                    e = i + 0,
                    n = u + 0,
                    o, s;
                return e <= 2 && (f = f - 1, e = e + 12), o = 0, u < 1 || (i == 1 || i == 3 || i == 5 || i == 7 || i == 8 || i == 10 || i == 12) && u > 31 || (i == 4 || i == 6 || i == 9 || i == 11) && u > 30, t == 2 || t == 0 && (r < 1582 || r == 1582 && i < 10 || r == 1582 && i == 10 && u <= 4) ? (o = 0, r / 4 == Math.round(r / 4) && i == 2 && u > 29) : (t == 1 || t == 0 && (r > 1582 || r == 1582 && i > 10 || r == 1582 && i == 10 && u >= 15)) && (s = Math.floor(f / 100), o = 2 - s + Math.floor(s / 4), r / 4 == Math.round(r / 4) && (r / 100 == Math.round(r / 100) ? r / 400 == Math.round(r / 400) && i == 2 && u > 29 : i == 2 && u > 29)), Math.floor(365.25 * (f + 4716)) + Math.floor(30.6001 * (e + 1)) + n + o - 1524.5
            },
            getJulianDayFromPersian: function(n) {
                y0 = n.year;
                m0 = n.month;
                d0 = n.date;
                var t = y0 - (y0 >= 0 ? 474 : 473),
                    i = 474 + t % 2820;
                return d0 + (m0 <= 7 ? (m0 - 1) * 31 : (m0 - 1) * 30 + 6) + Math.floor((i * 682 - 110) / 2816) + (i - 1) * 365 + Math.floor(t / 2820) * 1029983 + (1948320.5 - 1)
            },
            getWeekday: function(n) {
                return wds = [1, 2, 3, 4, 5, 6, 0], wd = Math.floor((n + 1.5) % 7), wds[wd]
            },
            getLastDayOfPersianMonth: function(n) {
                return (y = n.year, m = n.month, m >= 1 && m <= 6) ? 31 : m >= 7 && m < 12 ? 30 : (m != 12, ((y - (y > 0 ? 474 : 473)) % 2820 + 474 + 38) * 682 % 2816 < 682) ? 30 : 29
            }
        }, n
    }()
