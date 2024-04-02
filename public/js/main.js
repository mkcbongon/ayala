!function(e) {
    var t = {};
    function n(i) {
        if (t[i])
            return t[i].exports;
        var o = t[i] = {
            i: i,
            l: !1,
            exports: {}
        };
        return e[i].call(o.exports, o, o.exports, n),
        o.l = !0,
        o.exports
    }
    n.m = e,
    n.c = t,
    n.d = function(e, t, i) {
        n.o(e, t) || Object.defineProperty(e, t, {
            configurable: !1,
            enumerable: !0,
            get: i
        })
    }
    ,
    n.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        }
        : function() {
            return e
        }
        ;
        return n.d(t, "a", t),
        t
    }
    ,
    n.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }
    ,
    n.p = "/",
    n(n.s = 6)
}([function(e, t) {
    var n;
    n = function() {
        return this
    }();
    try {
        n = n || Function("return this")() || (0,
        eval)("this")
    } catch (e) {
        "object" == typeof window && (n = window)
    }
    e.exports = n
}
, , , , , , function(e, t, n) {
    n(7),
    e.exports = n(12)
}
, function(e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {
        value: !0
    });
    var i = function() {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1,
                i.configurable = !0,
                "value"in i && (i.writable = !0),
                Object.defineProperty(e, i.key, i)
            }
        }
        return function(t, n, i) {
            return n && e(t.prototype, n),
            i && e(t, i),
            t
        }
    }();
    var o = function() {
        function e() {
            !function(e, t) {
                if (!(e instanceof t))
                    throw new TypeError("Cannot call a class as a function")
            }(this, e),
            this.options = null,
            this.customSelect = null,
            this.selected = null,
            this.value = null,
            this.selectedValue = null,
            this.newDate = null,
            this.newTime = null,
            this.inputField = null
        }
        return i(e, [{
            key: "getElements",
            value: function() {
                this.customSelect = Array.from(document.querySelectorAll(".js-custom-select")),
                this.options = Array.from(document.querySelectorAll(".c-custom-select__option")),
                this.selected = Array.from(document.querySelectorAll(".c-custom-select__option--selected")),
                this.inputField = Array.from(document.querySelectorAll(".js-custom-selector__value"))
            }
        }, {
            key: "checkState",
            value: function(e) {
                e.classList.contains("c-custom-select--active") ? this.foldOptions(e) : this.dropOptions(e)
            }
        }, {
            key: "dropOptions",
            value: function(e) {
                e.classList.add("c-custom-select--active")
            }
        }, {
            key: "foldOptions",
            value: function(e) {
                e.classList.remove("c-custom-select--active")
            }
        }, {
            key: "getSelectedValue",
            value: function(e) {
                this.value = e.getAttribute("data-value"),
                this.inputField.value = this.value,
                this.selected[0].innerHTML = this.value,
                this.selected[0].setAttribute("data-value", this.value)
            }
        }, {
            key: "changeSelectedOption",
            value: function(e) {
                this.newDate,
                this.newTime
            }
        }, {
            key: "bindElements",
            value: function() {
                document.querySelector(".js-custom-select.c-custom-select").addEventListener("click", function() {})
            }
        }, {
            key: "init",
            value: function() {}
        }]),
        e
    }()
      , r = function() {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1,
                i.configurable = !0,
                "value"in i && (i.writable = !0),
                Object.defineProperty(e, i.key, i)
            }
        }
        return function(t, n, i) {
            return n && e(t.prototype, n),
            i && e(t, i),
            t
        }
    }();
    var a = function() {
        function e() {
            !function(e, t) {
                if (!(e instanceof t))
                    throw new TypeError("Cannot call a class as a function")
            }(this, e),
            this.header = null,
            this.previous = null,
            this.closeCookie = null,
            this.headerBG = null,
            this.siteContent = null,
            this.mainNavLinks = null,
            this.megaMenus = null,
            this.searchField = null
        }
        return r(e, [{
            key: "getElements",
            value: function() {
                this.siteContent = document.querySelector(".site-content"),
                this.header = document.getElementById("js-header-desktop"),
                this.headermb = document.getElementById("js-header-mobile"),
                this.cookie = document.getElementById("js-cookie"),
                this.closeCookie = document.getElementById("js-close-cookie"),
                this.headerBG = document.getElementById("js-header-background"),
                this.mainNavLinks = Array.from(document.querySelectorAll(".js-nav__link")),
                this.megaMenus = Array.from(document.querySelectorAll(".c-mega-menu")),
                this.searchFieldDt = Array.from(document.querySelectorAll(".js-search__field"))
            }
        }, {
            key: "checkOffsetTop",
            value: function(e) {
                var t = this;
                if (scrollY > this.previous) {
                    if (scrollY > 200) {
                        var n = this.megaMenus.filter(function(e) {
                            return 1 == e.classList.contains("is-active")
                        })
                          , i = this.searchFieldDt.filter(function(e) {
                            return 1 == e.classList.contains("is-active")
                        });
                        if (n.length >= 1 || i.length >= 1)
                            return;
                        this.setFixed("remove", this.header),
                        this.setFixed("remove", this.headerBG),
                        this.siteContent.classList.remove("is-activeHeader")
                    }
                } else {
                    if (!(scrollY + 500 < this.previous))
                        return;
                    if (this.megaMenus.filter(function(e) {
                        return 1 == e.classList.contains("is-active")
                    }).length >= 1)
                        return;
                    this.setFixed("add", this.header),
                    this.setFixed("add", this.headerBG),
                    this.siteContent.classList.add("is-activeHeader")
                }
                if (0 == scrollY) {
                    var o = this.megaMenus.filter(function(e) {
                        return 1 == e.classList.contains("is-active")
                    })
                      , r = this.searchFieldDt.filter(function(e) {
                        return 1 == e.classList.contains("is-active")
                    });
                    if (o.length >= 1 || r.length >= 1)
                        return;
                    return setTimeout(function() {
                        t.setFixed("remove", t.header),
                        t.setFixed("remove", t.headerBG)
                    }, 1e3),
                    this.mainNavLinks.forEach(function(e) {
                        e.classList.remove("is-active")
                    }),
                    void this.megaMenus.forEach(function(e) {
                        e.classList.remove("is-active"),
                        e.style.opacity = "0"
                    })
                }
                this.previous = scrollY
            }
        }, {
            key: "setFixed",
            value: function(e, t) {
                if ("add" === e) {
                    if (t.classList.add("is-fixed"),
                    this.headerBG.style.height = "112px",
                    this.mainNavLinks.forEach(function(e) {
                        e.classList.remove("is-active")
                    }),
                    this.megaMenus.forEach(function(e) {
                        e.classList.remove("is-active"),
                        e.style.opacity = "0"
                    }),
                    t == this.headerBG)
                        return void setTimeout(function() {
                            t.style.height = "112px"
                        }, 150)
                } else if (t.classList.remove("is-fixed"),
                t == this.headerBG)
                    return void (t.style.height = "0")
            }
        }, {
            key: "cookieClose",
            value: function(e) {
                this.cookie.classList.remove("is-active")
            }
        }, {
            key: "bindElements",
            value: function() {
                var e = this
                  , t = this;
                null != this.header && (this.previous = scrollY,
                document.addEventListener("scroll", this.checkOffsetTop.bind(this))),
                null != this.headermb && window.addEventListener("scroll", function() {
                    t.checkOffsetTop(e.headermb)
                }),
                null != this.closeCookie && t.closeCookie.addEventListener("click", function() {
                    t.cookieClose(t.closeCookie)
                })
            }
        }, {
            key: "init",
            value: function() {
                this.getElements(),
                this.bindElements()
            }
        }]),
        e
    }()
      , s = function() {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1,
                i.configurable = !0,
                "value"in i && (i.writable = !0),
                Object.defineProperty(e, i.key, i)
            }
        }
        return function(t, n, i) {
            return n && e(t.prototype, n),
            i && e(t, i),
            t
        }
    }();
    var l = function() {
        function e() {
            !function(e, t) {
                if (!(e instanceof t))
                    throw new TypeError("Cannot call a class as a function")
            }(this, e),
            this.headerBackgroundMobile = null,
            this.menuButton = null,
            this.menuContainer = null,
            this.mainmenuContainer = null,
            this.megamenuContainer = null,
            this.megamenuLinks = null,
            this.megaLinks = null,
            this.backButtons = null,
            this.secondLevel = null,
            this.tabs = null,
            this.defaultActiveTabs = null,
            this.searchButtonMB = null,
            this.searchFieldMB = null,
            this.navLinks = null,
            this.meganavcontainer = null,
            this.meganavs = null,
            this.headerBackground = null,
            this.currentHeight = 112
        }
        return s(e, [{
            key: "getElements",
            value: function() {
                this.headerBackgroundMobile = document.querySelector(".c-header__background--mobile"),
                this.menuButton = document.getElementById("js-menu__button"),
                this.menuContainer = document.getElementById("js-menu__container"),
                this.mainmenuContainer = document.getElementById("js-menu__mainmenu"),
                this.megamenuContainer = document.getElementById("js-menu__megamenu"),
                this.megamenuLinks = Array.from(document.querySelectorAll(".js-meganav")),
                this.megaLinks = Array.from(document.querySelectorAll(".c-mega-menu__links")),
                this.backButtons = Array.from(document.querySelectorAll(".js-back")),
                this.tabs = Array.from(document.querySelectorAll(".js-tab")),
                this.defaultActiveTabs = Array.from(document.getElementsByClassName("c-mega-menu__tab mb")),
                this.headerDesktop = document.getElementById("js-header-desktop"),
                this.navLinks = Array.from(document.querySelectorAll(".js-nav__link")),
                this.meganavcontainer = document.getElementById("js-meganav__container"),
                this.meganavs = Array.from(this.meganavcontainer.children),
                this.headerBackground = document.querySelector(".c-header__background"),
                this.megamenus = Array.from(document.querySelectorAll(".c-mega-menu")),
                this.tabsdt = Array.from(document.querySelectorAll(".js-tab-dt")),
                this.searchButtonMB = document.getElementById("js-search__button"),
                this.searchFieldMB = document.getElementById("js-search__field")
            }
        }, {
            key: "checkState",
            value: function(e) {
                var t = this;
                e.classList.contains("is-active") ? (this.setInactive(e),
                this.reset(),
                setTimeout(function() {
                    t.mainmenuContainer.style.position = "initial"
                }, 850)) : (this.setActive(e),
                this.setMobileLinks("active"),
                setTimeout(function() {
                    t.setActive(t.headerBackgroundMobile)
                }, 100),
                this.setActive(this.menuContainer),
                this.setActive(this.mainmenuContainer),
                this.setInactive(this.searchButtonMB),
                this.setInactive(this.searchFieldMB),
                document.body.style.overflow = "hidden")
            }
        }, {
            key: "reset",
            value: function() {
                var e = this;
                this.setInactive(this.megamenuContainer),
                this.setInactive(this.secondLevel),
                this.setMobileLinks("inactive"),
                setTimeout(function() {
                    e.setInactive(e.mainmenuContainer),
                    e.setInactive(e.menuContainer),
                    e.setInactive(e.headerBackgroundMobile)
                }, 500),
                this.defaultActiveTabs.forEach(function(e) {
                    e.parentElement.classList.add("is-active"),
                    e.parentElement.parentElement.classList.remove("is-active"),
                    e.parentElement.nextElementSibling.classList.remove("is-active")
                }),
                this.mainmenuContainer.style.position = "initial",
                document.body.style.overflow = "visible"
            }
        }, {
            key: "setMobileLinks",
            value: function(e) {
                "active" == e ? this.megamenuLinks.forEach(function(e, t) {
                    setTimeout(function() {
                        e.style.transform = "translateX(0)"
                    }, 100 * t)
                }) : this.megamenuLinks.forEach(function(e, t) {
                    setTimeout(function() {
                        e.style.transform = "translateX(-120%)"
                    }, 100 * t)
                })
            }
        }, {
            key: "setInactive",
            value: function(e) {
                null != e && e.classList.remove("is-active")
            }
        }, {
            key: "setActive",
            value: function(e) {
                e.classList.add("is-active")
            }
        }, {
            key: "upLevel",
            value: function(e) {
                if (e.classList.contains("back-0") && (this.megaLinks.forEach(function(e) {
                    e.style.opacity = 0
                }),
                this.setInactive(this.megamenuContainer),
                this.setActive(this.mainmenuContainer),
                this.setMobileLinks("active"),
                this.setInactive(this.secondLevel),
                this.mainmenuContainer.style.position = "initial"),
                e.classList.contains("back-1")) {
                    var t = e.parentElement.parentElement;
                    this.setInactive(t),
                    this.setActive(t.previousElementSibling)
                }
            }
        }, {
            key: "openSecondlevel",
            value: function(e) {
                var t = this
                  , n = this;
                if (e.classList.contains("no-child"))
                    n.setInactive(n.menuButton),
                    this.setMobileLinks("inactive"),
                    setTimeout(function() {
                        t.setInactive(t.menuContainer)
                    }, 850);
                else {
                    this.mainmenuContainer.style.position = "fixed";
                    var i = e.dataset.megamenu;
                    this.secondLevel = document.querySelector("[data-megaid='" + i + "' ]"),
                    this.setMobileLinks("inactive"),
                    this.setInactive(this.mainmenuContainer),
                    this.setActive(this.megamenuContainer),
                    this.setActive(this.secondLevel),
                    setTimeout(function() {
                        n.secondLevel.style.opacity = 1
                    }, 80)
                }
            }
        }, {
            key: "openTab",
            value: function(e) {
                var t = this
                  , n = e.dataset.tabcontent
                  , i = e.parentElement
                  , o = i.nextElementSibling
                  , r = o.querySelector("[data-tabid='" + n + "' ]");
                Array.from(o.querySelectorAll(".js-tab-content")).forEach(function(e) {
                    t.setInactive(e)
                }),
                e.classList.contains("mb") && (this.setInactive(i),
                this.setActive(o),
                this.setActive(r)),
                e.classList.contains("dt") && this.setActive(r)
            }
        }, {
            key: "setBackground",
            value: function(e, t) {
                if (this.headerBackground.style.height = "112px",
                "active" === e && null !== t) {
                    var n = void 0
                      , i = void 0;
                    t.classList.contains("js-nav__link") ? (n = t.dataset.megamenu,
                    i = this.meganavcontainer.querySelector("[data-megamenuid='" + n + "' ]")) : i = t;
                    var o = void 0;
                    null != i && (i.offsetHeight > 112 ? o = i.offsetHeight + 77 : this.headerBackground.classList.contains("is-fixed") ? (o = 112,
                    this.navLinks.forEach(function(e) {
                        e.classList.remove("is-active")
                    }),
                    this.megamenus.forEach(function(e) {
                        e.classList.remove("is-active"),
                        e.style.opacity = "0"
                    })) : (o = 0,
                    this.navLinks.forEach(function(e) {
                        e.classList.remove("is-active")
                    }),
                    this.megamenus.forEach(function(e) {
                        e.classList.remove("is-active"),
                        e.style.opacity = "0"
                    }))),
                    this.headerBackground.style.height = o + "px"
                } else
                    this.headerBackground.classList.contains("is-fixed") ? this.headerBackground.style.height = "112px" : this.headerBackground.classList.contains("is-active") ? this.megamenus.forEach(function(e) {
                        e.classList.remove("is-active"),
                        e.style.opacity = "0"
                    }) : this.headerBackground.style.height = "0px"
            }
        }, {
            key: "toggleActive",
            value: function(e) {
                e.classList.toggle("is-active")
            }
        }, {
            key: "toggleVisibility",
            value: function(e) {
                e.classList.toggle("is-visible")
            }
        }, {
            key: "getmeganav",
            value: function(e) {
                var t = e.dataset.megamenu
                  , n = this.meganavcontainer.querySelector("[data-megamenuid='" + t + "' ]");
                this.meganavs.forEach(function(e) {
                    e.style.opacity = "0",
                    e.classList.remove("is-active")
                }),
                null == n || n.classList.contains("is-active") || (this.toggleActive(n),
                setTimeout(function() {
                    n.style.opacity = "1"
                }, 100))
            }
        }, {
            key: "getTabContentDesktop",
            value: function(e) {
                var t = e.parentNode
                  , n = t.nextElementSibling
                  , i = e.dataset.meganavtab
                  , o = n.querySelector("[data-meganavtab-content='" + i + "' ]")
                  , r = Array.from(n.querySelectorAll('div[data-meganavtab-content]:not([data-meganavtab-content="' + i + '"])'));
                this.tabsdt.forEach(function(e) {
                    e.classList.remove("is-active")
                }),
                e.classList.add("is-active"),
                t.classList.contains("is-active") && (t.classList.remove("is-active"),
                n.classList.add("is-active")),
                o.classList.add("is-active"),
                r.forEach(function(e) {
                    e.classList.remove("is-active")
                })
            }
        }, {
            key: "mobilebindElements",
            value: function() {
                var e = this;
                e.menuButton.addEventListener("click", function() {
                    e.checkState(e.menuButton)
                }),
                e.megamenuLinks.forEach(function(t) {
                    t.addEventListener("click", function() {
                        e.openSecondlevel(t)
                    })
                }),
                e.backButtons.forEach(function(t) {
                    t.addEventListener("click", function() {
                        e.upLevel(t)
                    })
                }),
                e.tabs.forEach(function(t) {
                    t.addEventListener("click", function() {
                        e.openTab(t)
                    })
                }),
                e.searchButtonMB && e.searchButtonMB.addEventListener("click", function() {
                    e.reset()
                })
            }
        }, {
            key: "bindElements",
            value: function() {
                var e = this
                  , t = this;
                t.navLinks.forEach(function(n) {
                    n.addEventListener("mouseover", function() {
                        n.classList.contains("is-active") ? (t.getmeganav(n),
                        t.headerBackground.classList.add("is-active"),
                        t.setBackground("active", n)) : (t.navLinks.forEach(function(e) {
                            e.classList.remove("is-active")
                        }),
                        n.classList.add("is-active"),
                        e.currentHeight = t.headerBackground.offsetHeight,
                        t.getmeganav(n),
                        t.headerBackground.classList.add("is-active"),
                        t.setBackground("active", n))
                    }),
                    n.addEventListener("mouseout", function() {})
                }),
                t.headerBackground.addEventListener("mouseout", function() {
                    t.setBackground("inactive", null),
                    !t.headerBackground.classList.contains("is-active") || t.headerBackground.offsetHeight <= 112 ? t.navLinks.forEach(function(e) {
                        e.classList.remove("is-active")
                    }) : t.headerBackground.classList.remove("is-active")
                }),
                t.megamenus.forEach(function(e) {
                    e.addEventListener("mouseover", function() {
                        e.classList.contains("is-active") || (t.megamenus.forEach(function(e) {
                            e.classList.remove("is-active"),
                            e.style.opacity = "0"
                        }),
                        e.classList.add("is-active"),
                        e.style.opacity = "1",
                        t.headerBackground.classList.add("is-active"),
                        t.setBackground("active", e))
                    }),
                    e.addEventListener("mouseout", function() {})
                }),
                t.headerDesktop.addEventListener("mouseout", function() {
                    t.meganavs.forEach(function(e) {
                        e.classList.remove("is-active"),
                        e.style.opacity = "0"
                    })
                }),
                t.tabsdt.forEach(function(e) {
                    e.addEventListener("mouseenter", function() {
                        t.getTabContentDesktop(e)
                    }),
                    e.addEventListener("mouseout", function() {})
                })
            }
        }, {
            key: "init",
            value: function() {
                this.getElements(),
                null != this.menuButton && this.mobilebindElements(),
                null != this.navLinks && this.bindElements()
            }
        }]),
        e
    }()
      , c = function() {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1,
                i.configurable = !0,
                "value"in i && (i.writable = !0),
                Object.defineProperty(e, i.key, i)
            }
        }
        return function(t, n, i) {
            return n && e(t.prototype, n),
            i && e(t, i),
            t
        }
    }();
    var u = function() {
        function e() {
            !function(e, t) {
                if (!(e instanceof t))
                    throw new TypeError("Cannot call a class as a function")
            }(this, e),
            this.map = null
        }
        return c(e, [{
            key: "getElements",
            value: function() {
                this.map = document.getElementById("map")
            }
        }, {
            key: "initializeGoogleMap",
            value: function() {
                var e = {
                    lat: -25.344,
                    lng: 131.036
                }
                  , t = new google.maps.Map(document.getElementById("map"),{
                    zoom: 4,
                    center: e
                });
                new google.maps.Marker({
                    position: e,
                    map: t
                })
            }
        }, {
            key: "init",
            value: function() {
                this.getElements(),
                null != this.gallery && this.initializeGoogleMap()
            }
        }]),
        e
    }()
      , d = n(8)
      , f = n.n(d)
      , h = function() {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1,
                i.configurable = !0,
                "value"in i && (i.writable = !0),
                Object.defineProperty(e, i.key, i)
            }
        }
        return function(t, n, i) {
            return n && e(t.prototype, n),
            i && e(t, i),
            t
        }
    }();
    f.a.polyfill();
    var v = function() {
        function e() {
            !function(e, t) {
                if (!(e instanceof t))
                    throw new TypeError("Cannot call a class as a function")
            }(this, e),
            this.triggers,
            this.quickLinks = null,
            this.links = null
        }
        return h(e, [{
            key: "getElements",
            value: function() {
                this.triggers = Array.from(document.querySelectorAll(".js-scroll-to")),
                this.quickLinks = Array.from(document.querySelectorAll(".js-scroll-link")),
                this.links = Array.from(document.querySelectorAll("a"))
            }
        }, {
            key: "getTarget",
            value: function(e) {
                var t = e.dataset.target
                  , n = document.querySelector("[data-targetid='" + t + "' ]");
                n && this.scrollTo(n, 180)
            }
        }, {
            key: "getLinkTarget",
            value: function(e) {
                var t = e.dataset.target
                  , n = document.getElementById(t);
                n && this.scrollTo(n, 180)
            }
        }, {
            key: "checkhash",
            value: function() {
                var e = window.location.hash.replace(/#/g, "");
                null == document.getElementById(e) || this.scrollTo(document.getElementById(e), 150)
            }
        }, {
            key: "scrollTo",
            value: function(e, t) {
                setTimeout(function() {
                    window.scrollTo({
                        behavior: "smooth",
                        left: 0,
                        top: e.offsetTop - t
                    })
                }, 1e3)
            }
        }, {
            key: "bindElements",
            value: function() {
                var e = this
                  , t = this;
                null != t.triggers && 0 != t.triggers.length && t.triggers.forEach(function(e) {
                    e.addEventListener("click", function(n) {
                        n.preventDefault(),
                        t.getTarget(e)
                    })
                }),
                null != t.quickLinks && 0 != t.quickLinks.length && t.quickLinks.forEach(function(e) {
                    e.addEventListener("click", function(n) {
                        n.preventDefault(),
                        t.getLinkTarget(e)
                    })
                }),
                window.addEventListener("load", function(n) {
                    if (window.location.hash)
                        n.preventDefault(),
                        t.checkhash();
                    else {
                        if (null == t.links || 0 == t.links.length)
                            return;
                        t.links.forEach(function(t) {
                            t.addEventListener("click", function(n) {
                                if (t.href) {
                                    var i = t.href.split("#");
                                    i[1] && e.scrollTo(document.getElementById(i[1]), 150)
                                } else
                                    ;
                            })
                        })
                    }
                }),
                window.addEventListener("hashchange", function() {
                    location.reload()
                }, !1)
            }
        }, {
            key: "init",
            value: function() {
                this.getElements(),
                this.bindElements()
            }
        }]),
        e
    }()
      , m = function() {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1,
                i.configurable = !0,
                "value"in i && (i.writable = !0),
                Object.defineProperty(e, i.key, i)
            }
        }
        return function(t, n, i) {
            return n && e(t.prototype, n),
            i && e(t, i),
            t
        }
    }();
    var p = function() {
        function e() {
            !function(e, t) {
                if (!(e instanceof t))
                    throw new TypeError("Cannot call a class as a function")
            }(this, e),
            this.sticky = null,
            this.stickySidenav = null,
            this.stickyLinks = null,
            this.eLOffsetTop = null,
            this.initialPos = 0
        }
        return m(e, [{
            key: "getElements",
            value: function() {
                this.stickySidenav = document.querySelector(".js-sticky-sidenav"),
                this.sticky = document.querySelector(".js-sticky"),
                null != this.stickySidenav && (this.stickyLinks = Array.from(this.stickySidenav.querySelectorAll("a")))
            }
        }, {
            key: "watchWindowOffsetTop",
            value: function() {
                var e = window.scrollY
                  , t = this.sticky.offsetHeight
                  , n = this.stickySidenav.offsetHeight
                  , i = t + this.eLOffsetTop - n
                  , o = window.innerHeight
                  , r = (window.scrollY || window.pageYOffset,
                Array.from(document.querySelectorAll(".c-sticky-content > div")));
                var a = new Array;
                r.forEach(function(e, t) {
                    var n = function(e) {
                        if (0 == e.length)
                            return !1;
                        var t = window.scrollY || window.pageYOffset
                          , n = (window.innerHeight,
                        e.offsetTop - 400)
                          , i = n + e.clientHeight;
                        return t >= n && t <= i
                    }(e);
                    n ? a.push(n) : a.push("false")
                }),
                document.querySelectorAll(".js-sticky-sidenav > ul > li > a").forEach(function(e, t) {
                    e.classList.contains("is-active") && e.classList.remove("is-active")
                });
                for (var s = 0; s < a.length; s++)
                    1 == a[s] && document.querySelector(".js-sticky-sidenav > ul > li:nth-child(" + (s + 1) + ") > a").classList.add("is-active");
                a = [],
                e >= this.eLOffsetTop && e <= i ? (this.stickySidenav.style.position = "fixed",
                this.stickySidenav.style.top = "30vh") : (this.stickySidenav.style.position = "absolute",
                e > i ? this.stickySidenav.style.top = i + "px" : (this.stickySidenav.style.right = "0",
                this.stickySidenav.style.top = "unset"))
            }
        }, {
            key: "getElementOffsetTop",
            value: function() {
                this.eLOffsetTop = this.sticky.offsetTop - .3 * window.innerHeight
            }
        }, {
            key: "setScrolling",
            value: function() {
                var e = this;
                this.stickySidenav.classList.add("is-scrolling"),
                setTimeout(function() {
                    e.stickySidenav.classList.remove("is-scrolling")
                }, 1500)
            }
        }, {
            key: "setActive",
            value: function(e) {
                e.classList.add("is-active")
            }
        }, {
            key: "clearActive",
            value: function() {
                this.stickyLinks.forEach(function(e) {
                    e.classList.remove("is-active")
                })
            }
        }, {
            key: "getElemviewportPos",
            value: function(e) {}
        }, {
            key: "bindElements",
            value: function() {
                var e = this
                  , t = this;
                window.addEventListener("scroll", function() {
                    e.getElementOffsetTop(),
                    e.watchWindowOffsetTop(),
                    e.getElemviewportPos(e.fullWidthItem)
                }),
                this.stickyLinks.forEach(function(e) {
                    e.addEventListener("click", function() {
                        t.clearActive(),
                        t.setActive(e),
                        t.setScrolling()
                    })
                })
            }
        }, {
            key: "init",
            value: function() {
                this.getElements(),
                null != this.stickySidenav && null != this.sticky && (this.bindElements(),
                this.getElementOffsetTop(),
                this.getElemviewportPos(this.fullWidthItem))
            }
        }]),
        e
    }()
      , y = function() {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1,
                i.configurable = !0,
                "value"in i && (i.writable = !0),
                Object.defineProperty(e, i.key, i)
            }
        }
        return function(t, n, i) {
            return n && e(t.prototype, n),
            i && e(t, i),
            t
        }
    }();
    var g = function() {
        function e() {
            !function(e, t) {
                if (!(e instanceof t))
                    throw new TypeError("Cannot call a class as a function")
            }(this, e),
            this.stickySidenav = null,
            this.check = !0,
            this.elTop = 0
        }
        return y(e, [{
            key: "getElements",
            value: function() {
                this.stickySidenav = document.querySelector(".js-sticky-tabs")
            }
        }, {
            key: "watchWindowOffsetTop",
            value: function() {
                var e = this;
                window.scrollY,
                window.scrollY || window.pageYOffset,
                Array.from(document.querySelectorAll(".c-sticky-content > div"));
                function t(t) {
                    return 0 != t.length && (window.scrollY || window.pageYOffset) >= e.elTop - 112
                }
                t(this.stickySidenav) && this.check ? (this.stickySidenav.classList.add("issticky"),
                this.check = !1) : t(this.stickySidenav) || this.check || (this.stickySidenav.classList.remove("issticky"),
                this.check = !0)
            }
        }, {
            key: "bindElements",
            value: function() {
                var e = this;
                this.elTop = this.stickySidenav.offsetTop,
                this.stickySidenav.setAttribute("style", "height:" + (parseInt(this.stickySidenav.offsetHeight) + 80) + "px"),
                window.addEventListener("scroll", function() {
                    e.watchWindowOffsetTop(e.stickySidenav)
                })
            }
        }, {
            key: "init",
            value: function() {
                this.getElements(),
                null != this.stickySidenav && this.bindElements()
            }
        }]),
        e
    }()
      , b = function() {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1,
                i.configurable = !0,
                "value"in i && (i.writable = !0),
                Object.defineProperty(e, i.key, i)
            }
        }
        return function(t, n, i) {
            return n && e(t.prototype, n),
            i && e(t, i),
            t
        }
    }();
    var k = function() {
        function e() {
            !function(e, t) {
                if (!(e instanceof t))
                    throw new TypeError("Cannot call a class as a function")
            }(this, e),
            this.videos = null,
            this.videoCovers = null
        }
        return b(e, [{
            key: "getElements",
            value: function() {
                this.videos = Array.from(document.querySelectorAll(".js-video")),
                this.videoCovers = Array.from(document.querySelectorAll(".js-video-cover"))
            }
        }, {
            key: "playVideo",
            value: function(e) {
                var t = e.nextElementSibling;
                e.style.opacity = "0",
                e.style.position = "absolute",
                t.style.display = "block",
                setTimeout(function() {
                    e.style.display = "none",
                    t.style.opacity = "1",
                    t.play()
                }, 300)
            }
        }, {
            key: "setActive",
            value: function() {}
        }, {
            key: "bindElements",
            value: function() {
                var e = this;
                this.videoCovers.forEach(function(t, n) {
                    t.addEventListener("click", function() {
                        e.playVideo(t)
                    })
                })
            }
        }, {
            key: "init",
            value: function() {
                this.getElements(),
                null != this.videos && this.bindElements()
            }
        }]),
        e
    }()
      , w = function() {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1,
                i.configurable = !0,
                "value"in i && (i.writable = !0),
                Object.defineProperty(e, i.key, i)
            }
        }
        return function(t, n, i) {
            return n && e(t.prototype, n),
            i && e(t, i),
            t
        }
    }();
    var E = function() {
        function e() {
            !function(e, t) {
                if (!(e instanceof t))
                    throw new TypeError("Cannot call a class as a function")
            }(this, e),
            this.accordions,
            this.accordionButtons,
            this.accordionContents
        }
        return w(e, [{
            key: "getElements",
            value: function() {
                this.accordions = Array.from(document.getElementsByClassName("js-accordion")),
                this.accordionButtons = Array.from(document.getElementsByClassName("js-accordionButton")),
                this.accordionContents = Array.from(document.getElementsByClassName("js-accordionContent"))
            }
        }, {
            key: "toggleActive",
            value: function(e) {
                1 == e.classList.contains("is-active") ? (e.classList.remove("is-active"),
                e.nextElementSibling.classList.remove("is-active")) : (this.resetAccordions(this.accordionButtons),
                this.resetAccordions(this.accordionContents),
                e.classList.add("is-active"),
                e.nextElementSibling.classList.add("is-active"))
            }
        }, {
            key: "resetAccordions",
            value: function(e) {
                e.forEach(function(e) {
                    e.classList.remove("is-active")
                })
            }
        }, {
            key: "bindElements",
            value: function() {
                var e = this;
                this.accordionButtons.forEach(function(t) {
                    t.addEventListener("click", function() {
                        e.toggleActive(t)
                    })
                })
            }
        }, {
            key: "init",
            value: function() {
                this.getElements(),
                null != this.accordions && this.bindElements()
            }
        }]),
        e
    }()
      , x = window
      , L = x.requestAnimationFrame || x.webkitRequestAnimationFrame || x.mozRequestAnimationFrame || x.msRequestAnimationFrame || function(e) {
        return setTimeout(e, 16)
    }
      , S = window
      , A = S.cancelAnimationFrame || S.mozCancelAnimationFrame || function(e) {
        clearTimeout(e)
    }
    ;
    function T() {
        for (var e, t, n, i = arguments[0] || {}, o = 1, r = arguments.length; o < r; o++)
            if (null !== (e = arguments[o]))
                for (t in e)
                    i !== (n = e[t]) && void 0 !== n && (i[t] = n);
        return i
    }
    function C(e) {
        return ["true", "false"].indexOf(e) >= 0 ? JSON.parse(e) : e
    }
    function B(e, t, n, i) {
        if (i)
            try {
                e.setItem(t, n)
            } catch (e) {}
        return n
    }
    function M() {
        var e = document
          , t = e.body;
        return t || ((t = e.createElement("body")).fake = !0),
        t
    }
    var O = document.documentElement;
    function j(e) {
        var t = "";
        return e.fake && (t = O.style.overflow,
        e.style.background = "",
        e.style.overflow = O.style.overflow = "hidden",
        O.appendChild(e)),
        t
    }
    function q(e, t) {
        e.fake && (e.remove(),
        O.style.overflow = t,
        O.offsetHeight)
    }
    function I(e, t, n, i) {
        "insertRule"in e ? e.insertRule(t + "{" + n + "}", i) : e.addRule(t, n, i)
    }
    function P(e) {
        return ("insertRule"in e ? e.cssRules : e.rules).length
    }
    function _(e, t, n) {
        for (var i = 0, o = e.length; i < o; i++)
            t.call(n, e[i], i)
    }
    var H = "classList"in document.createElement("_")
      , R = H ? function(e, t) {
        return e.classList.contains(t)
    }
    : function(e, t) {
        return e.className.indexOf(t) >= 0
    }
      , D = H ? function(e, t) {
        R(e, t) || e.classList.add(t)
    }
    : function(e, t) {
        R(e, t) || (e.className += " " + t)
    }
      , W = H ? function(e, t) {
        R(e, t) && e.classList.remove(t)
    }
    : function(e, t) {
        R(e, t) && (e.className = e.className.replace(t, ""))
    }
    ;
    function N(e, t) {
        return e.hasAttribute(t)
    }
    function z(e, t) {
        return e.getAttribute(t)
    }
    function Y(e) {
        return void 0 !== e.item
    }
    function F(e, t) {
        if (e = Y(e) || e instanceof Array ? e : [e],
        "[object Object]" === Object.prototype.toString.call(t))
            for (var n = e.length; n--; )
                for (var i in t)
                    e[n].setAttribute(i, t[i])
    }
    function X(e, t) {
        e = Y(e) || e instanceof Array ? e : [e];
        for (var n = (t = t instanceof Array ? t : [t]).length, i = e.length; i--; )
            for (var o = n; o--; )
                e[i].removeAttribute(t[o])
    }
    function G(e) {
        for (var t = [], n = 0, i = e.length; n < i; n++)
            t.push(e[n]);
        return t
    }
    function V(e, t) {
        "none" !== e.style.display && (e.style.display = "none")
    }
    function J(e, t) {
        "none" === e.style.display && (e.style.display = "")
    }
    function K(e) {
        return "none" !== window.getComputedStyle(e).display
    }
    function Q(e) {
        if ("string" == typeof e) {
            var t = [e]
              , n = e.charAt(0).toUpperCase() + e.substr(1);
            ["Webkit", "Moz", "ms", "O"].forEach(function(i) {
                "ms" === i && "transform" !== e || t.push(i + n)
            }),
            e = t
        }
        for (var i = document.createElement("fakeelement"), o = (e.length,
        0); o < e.length; o++) {
            var r = e[o];
            if (void 0 !== i.style[r])
                return r
        }
        return !1
    }
    function U(e, t) {
        var n = !1;
        return /^Webkit/.test(e) ? n = "webkit" + t + "End" : /^O/.test(e) ? n = "o" + t + "End" : e && (n = t.toLowerCase() + "end"),
        n
    }
    var Z = !1;
    try {
        var $ = Object.defineProperty({}, "passive", {
            get: function() {
                Z = !0
            }
        });
        window.addEventListener("test", null, $)
    } catch (e) {}
    var ee = !!Z && {
        passive: !0
    };
    function te(e, t, n) {
        for (var i in t) {
            var o = ["touchstart", "touchmove"].indexOf(i) >= 0 && !n && ee;
            e.addEventListener(i, t[i], o)
        }
    }
    function ne(e, t) {
        for (var n in t) {
            var i = ["touchstart", "touchmove"].indexOf(n) >= 0 && ee;
            e.removeEventListener(n, t[n], i)
        }
    }
    Object.keys || (Object.keys = function(e) {
        var t = [];
        for (var n in e)
            Object.prototype.hasOwnProperty.call(e, n) && t.push(n);
        return t
    }
    ),
    "remove"in Element.prototype || (Element.prototype.remove = function() {
        this.parentNode && this.parentNode.removeChild(this)
    }
    );
    var ie = function(e) {
        e = T({
            container: ".slider",
            mode: "carousel",
            axis: "horizontal",
            items: 1,
            gutter: 0,
            edgePadding: 0,
            fixedWidth: !1,
            autoWidth: !1,
            viewportMax: !1,
            slideBy: 1,
            center: !1,
            controls: !0,
            controlsPosition: "top",
            controlsText: ["prev", "next"],
            controlsContainer: !1,
            prevButton: !1,
            nextButton: !1,
            nav: !0,
            navPosition: "top",
            navContainer: !1,
            navAsThumbnails: !1,
            arrowKeys: !1,
            speed: 300,
            autoplay: !1,
            autoplayPosition: "top",
            autoplayTimeout: 5e3,
            autoplayDirection: "forward",
            autoplayText: ["start", "stop"],
            autoplayHoverPause: !1,
            autoplayButton: !1,
            autoplayButtonOutput: !0,
            autoplayResetOnVisibility: !0,
            animateIn: "tns-fadeIn",
            animateOut: "tns-fadeOut",
            animateNormal: "tns-normal",
            animateDelay: !1,
            loop: !0,
            rewind: !1,
            autoHeight: !1,
            responsive: !1,
            lazyload: !1,
            lazyloadSelector: ".tns-lazy-img",
            touch: !0,
            mouseDrag: !1,
            swipeAngle: 15,
            nested: !1,
            preventActionWhenRunning: !1,
            preventScrollOnTouch: !1,
            freezable: !0,
            onInit: !1,
            useLocalStorage: !0,
            nonce: !1
        }, e || {});
        var t = document
          , n = window
          , i = {
            ENTER: 13,
            SPACE: 32,
            LEFT: 37,
            RIGHT: 39
        }
          , o = {}
          , r = e.useLocalStorage;
        if (r) {
            var a = navigator.userAgent
              , s = new Date;
            try {
                (o = n.localStorage) ? (o.setItem(s, s),
                r = o.getItem(s) == s,
                o.removeItem(s)) : r = !1,
                r || (o = {})
            } catch (e) {
                r = !1
            }
            r && (o.tnsApp && o.tnsApp !== a && ["tC", "tPL", "tMQ", "tTf", "t3D", "tTDu", "tTDe", "tADu", "tADe", "tTE", "tAE"].forEach(function(e) {
                o.removeItem(e)
            }),
            localStorage.tnsApp = a)
        }
        var l = o.tC ? C(o.tC) : B(o, "tC", function() {
            var e = document
              , t = M()
              , n = j(t)
              , i = e.createElement("div")
              , o = !1;
            t.appendChild(i);
            try {
                for (var r, a = "(10px * 10)", s = ["calc" + a, "-moz-calc" + a, "-webkit-calc" + a], l = 0; l < 3; l++)
                    if (r = s[l],
                    i.style.width = r,
                    100 === i.offsetWidth) {
                        o = r.replace(a, "");
                        break
                    }
            } catch (e) {}
            return t.fake ? q(t, n) : i.remove(),
            o
        }(), r)
          , c = o.tPL ? C(o.tPL) : B(o, "tPL", function() {
            var e, t = document, n = M(), i = j(n), o = t.createElement("div"), r = t.createElement("div"), a = "";
            o.className = "tns-t-subp2",
            r.className = "tns-t-ct";
            for (var s = 0; s < 70; s++)
                a += "<div></div>";
            return r.innerHTML = a,
            o.appendChild(r),
            n.appendChild(o),
            e = Math.abs(o.getBoundingClientRect().left - r.children[67].getBoundingClientRect().left) < 2,
            n.fake ? q(n, i) : o.remove(),
            e
        }(), r)
          , u = o.tMQ ? C(o.tMQ) : B(o, "tMQ", function() {
            if (window.matchMedia || window.msMatchMedia)
                return !0;
            var e, t = document, n = M(), i = j(n), o = t.createElement("div"), r = t.createElement("style"), a = "@media all and (min-width:1px){.tns-mq-test{position:absolute}}";
            return r.type = "text/css",
            o.className = "tns-mq-test",
            n.appendChild(r),
            n.appendChild(o),
            r.styleSheet ? r.styleSheet.cssText = a : r.appendChild(t.createTextNode(a)),
            e = window.getComputedStyle ? window.getComputedStyle(o).position : o.currentStyle.position,
            n.fake ? q(n, i) : o.remove(),
            "absolute" === e
        }(), r)
          , d = o.tTf ? C(o.tTf) : B(o, "tTf", Q("transform"), r)
          , f = o.t3D ? C(o.t3D) : B(o, "t3D", function(e) {
            if (!e)
                return !1;
            if (!window.getComputedStyle)
                return !1;
            var t, n = document, i = M(), o = j(i), r = n.createElement("p"), a = e.length > 9 ? "-" + e.slice(0, -9).toLowerCase() + "-" : "";
            return a += "transform",
            i.insertBefore(r, null),
            r.style[e] = "translate3d(1px,1px,1px)",
            t = window.getComputedStyle(r).getPropertyValue(a),
            i.fake ? q(i, o) : r.remove(),
            void 0 !== t && t.length > 0 && "none" !== t
        }(d), r)
          , h = o.tTDu ? C(o.tTDu) : B(o, "tTDu", Q("transitionDuration"), r)
          , v = o.tTDe ? C(o.tTDe) : B(o, "tTDe", Q("transitionDelay"), r)
          , m = o.tADu ? C(o.tADu) : B(o, "tADu", Q("animationDuration"), r)
          , p = o.tADe ? C(o.tADe) : B(o, "tADe", Q("animationDelay"), r)
          , y = o.tTE ? C(o.tTE) : B(o, "tTE", U(h, "Transition"), r)
          , g = o.tAE ? C(o.tAE) : B(o, "tAE", U(m, "Animation"), r)
          , b = n.console && "function" == typeof n.console.warn
          , k = ["container", "controlsContainer", "prevButton", "nextButton", "navContainer", "autoplayButton"]
          , w = {};
        if (k.forEach(function(n) {
            if ("string" == typeof e[n]) {
                var i = e[n]
                  , o = t.querySelector(i);
                if (w[n] = i,
                !o || !o.nodeName)
                    return void (b && console.warn("Can't find", e[n]));
                e[n] = o
            }
        }),
        !(e.container.children.length < 1)) {
            var E = e.responsive
              , x = e.nested
              , S = "carousel" === e.mode;
            if (E) {
                0 in E && (e = T(e, E[0]),
                delete E[0]);
                var O = {};
                for (var H in E) {
                    var Y = E[H];
                    Y = "number" == typeof Y ? {
                        items: Y
                    } : Y,
                    O[H] = Y
                }
                E = O,
                O = null
            }
            if (S || function e(t) {
                for (var n in t)
                    S || ("slideBy" === n && (t[n] = "page"),
                    "edgePadding" === n && (t[n] = !1),
                    "autoHeight" === n && (t[n] = !1)),
                    "responsive" === n && e(t[n])
            }(e),
            !S) {
                e.axis = "horizontal",
                e.slideBy = "page",
                e.edgePadding = !1;
                var Z = e.animateIn
                  , $ = e.animateOut
                  , ee = e.animateDelay
                  , oe = e.animateNormal
            }
            var re, ae, se = "horizontal" === e.axis, le = t.createElement("div"), ce = t.createElement("div"), ue = e.container, de = ue.parentNode, fe = ue.outerHTML, he = ue.children, ve = he.length, me = jn(), pe = !1;
            E && Zn(),
            S && (ue.className += " tns-vpfix");
            var ye, ge, be, ke, we, Ee, xe, Le, Se, Ae = e.autoWidth, Te = _n("fixedWidth"), Ce = _n("edgePadding"), Be = _n("gutter"), Me = In(), Oe = _n("center"), je = Ae ? 1 : Math.floor(_n("items")), qe = _n("slideBy"), Ie = e.viewportMax || e.fixedWidthViewportWidth, Pe = _n("arrowKeys"), _e = _n("speed"), He = e.rewind, Re = !He && e.loop, De = _n("autoHeight"), We = _n("controls"), Ne = _n("controlsText"), ze = _n("nav"), Ye = _n("touch"), Fe = _n("mouseDrag"), Xe = _n("autoplay"), Ge = _n("autoplayTimeout"), Ve = _n("autoplayText"), Je = _n("autoplayHoverPause"), Ke = _n("autoplayResetOnVisibility"), Qe = (xe = null,
            Le = _n("nonce"),
            Se = document.createElement("style"),
            xe && Se.setAttribute("media", xe),
            Le && Se.setAttribute("nonce", Le),
            document.querySelector("head").appendChild(Se),
            Se.sheet ? Se.sheet : Se.styleSheet), Ue = e.lazyload, Ze = e.lazyloadSelector, $e = [], et = Re ? (we = function() {
                if (Ae || Te && !Ie)
                    return ve - 1;
                var t = Te ? "fixedWidth" : "items"
                  , n = [];
                if ((Te || e[t] < ve) && n.push(e[t]),
                E)
                    for (var i in E) {
                        var o = E[i][t];
                        o && (Te || o < ve) && n.push(o)
                    }
                return n.length || n.push(0),
                Math.ceil(Te ? Ie / Math.min.apply(null, n) : Math.max.apply(null, n))
            }(),
            Ee = S ? Math.ceil((5 * we - ve) / 2) : 4 * we - ve,
            Ee = Math.max(we, Ee),
            Pn("edgePadding") ? Ee + 1 : Ee) : 0, tt = S ? ve + 2 * et : ve + et, nt = !(!Te && !Ae || Re), it = Te ? Li() : null, ot = !S || !Re, rt = se ? "left" : "top", at = "", st = "", lt = Te ? function() {
                return Oe && !Re ? ve - 1 : Math.ceil(-it / (Te + Be))
            }
            : Ae ? function() {
                for (var e = 0; e < tt; e++)
                    if (ye[e] >= -it)
                        return e
            }
            : function() {
                return Oe && S && !Re ? ve - 1 : Re || S ? Math.max(0, tt - Math.ceil(je)) : tt - 1
            }
            , ct = Bn(_n("startIndex")), ut = ct, dt = (Cn(),
            0), ft = Ae ? null : lt(), ht = e.preventActionWhenRunning, vt = e.swipeAngle, mt = !vt || "?", pt = !1, yt = e.onInit, gt = new function() {
                return {
                    topics: {},
                    on: function(e, t) {
                        this.topics[e] = this.topics[e] || [],
                        this.topics[e].push(t)
                    },
                    off: function(e, t) {
                        if (this.topics[e])
                            for (var n = 0; n < this.topics[e].length; n++)
                                if (this.topics[e][n] === t) {
                                    this.topics[e].splice(n, 1);
                                    break
                                }
                    },
                    emit: function(e, t) {
                        t.type = e,
                        this.topics[e] && this.topics[e].forEach(function(n) {
                            n(t, e)
                        })
                    }
                }
            }
            , bt = " tns-slider tns-" + e.mode, kt = ue.id || (ke = window.tnsId,
            window.tnsId = ke ? ke + 1 : 1,
            "tns" + window.tnsId), wt = _n("disable"), Et = !1, xt = e.freezable, Lt = !(!xt || Ae) && Un(), St = !1, At = {
                click: qi,
                keydown: function(e) {
                    e = Ni(e);
                    var t = [i.LEFT, i.RIGHT].indexOf(e.keyCode);
                    t >= 0 && (0 === t ? Jt.disabled || qi(e, -1) : Kt.disabled || qi(e, 1))
                }
            }, Tt = {
                click: function(e) {
                    if (pt) {
                        if (ht)
                            return;
                        Oi()
                    }
                    var t = zi(e = Ni(e));
                    for (; t !== $t && !N(t, "data-nav"); )
                        t = t.parentNode;
                    if (N(t, "data-nav")) {
                        var n = on = Number(z(t, "data-nav"))
                          , i = Te || Ae ? n * ve / tn : n * je
                          , o = Pt ? n : Math.min(Math.ceil(i), ve - 1);
                        ji(o, e),
                        rn === n && (dn && Ri(),
                        on = -1)
                    }
                },
                keydown: function(e) {
                    e = Ni(e);
                    var n = t.activeElement;
                    if (!N(n, "data-nav"))
                        return;
                    var o = [i.LEFT, i.RIGHT, i.ENTER, i.SPACE].indexOf(e.keyCode)
                      , r = Number(z(n, "data-nav"));
                    o >= 0 && (0 === o ? r > 0 && Wi(Zt[r - 1]) : 1 === o ? r < tn - 1 && Wi(Zt[r + 1]) : (on = r,
                    ji(r, e)))
                }
            }, Ct = {
                mouseover: function() {
                    dn && (Pi(),
                    fn = !0)
                },
                mouseout: function() {
                    fn && (Ii(),
                    fn = !1)
                }
            }, Bt = {
                visibilitychange: function() {
                    t.hidden ? dn && (Pi(),
                    vn = !0) : vn && (Ii(),
                    vn = !1)
                }
            }, Mt = {
                keydown: function(e) {
                    e = Ni(e);
                    var t = [i.LEFT, i.RIGHT].indexOf(e.keyCode);
                    t >= 0 && qi(e, 0 === t ? -1 : 1)
                }
            }, Ot = {
                touchstart: Gi,
                touchmove: Vi,
                touchend: Ji,
                touchcancel: Ji
            }, jt = {
                mousedown: Gi,
                mousemove: Vi,
                mouseup: Ji,
                mouseleave: Ji
            }, qt = Pn("controls"), It = Pn("nav"), Pt = !!Ae || e.navAsThumbnails, _t = Pn("autoplay"), Ht = Pn("touch"), Rt = Pn("mouseDrag"), Dt = "tns-slide-active", Wt = "tns-slide-cloned", Nt = "tns-complete", zt = {
                load: function(e) {
                    si(zi(e))
                },
                error: function(e) {
                    t = zi(e),
                    D(t, "failed"),
                    li(t);
                    var t
                }
            }, Yt = "force" === e.preventScrollOnTouch;
            if (qt)
                var Ft, Xt, Gt = e.controlsContainer, Vt = e.controlsContainer ? e.controlsContainer.outerHTML : "", Jt = e.prevButton, Kt = e.nextButton, Qt = e.prevButton ? e.prevButton.outerHTML : "", Ut = e.nextButton ? e.nextButton.outerHTML : "";
            if (It)
                var Zt, $t = e.navContainer, en = e.navContainer ? e.navContainer.outerHTML : "", tn = Ae ? ve : Qi(), nn = 0, on = -1, rn = On(), an = rn, sn = "tns-nav-active", ln = "Carousel Page ", cn = " (Current Slide)";
            if (_t)
                var un, dn, fn, hn, vn, mn = "forward" === e.autoplayDirection ? 1 : -1, pn = e.autoplayButton, yn = e.autoplayButton ? e.autoplayButton.outerHTML : "", gn = ["<span class='tns-visually-hidden'>", " animation</span>"];
            if (Ht || Rt)
                var bn, kn, wn = {}, En = {}, xn = !1, Ln = se ? function(e, t) {
                    return e.x - t.x
                }
                : function(e, t) {
                    return e.y - t.y
                }
                ;
            Ae || Tn(wt || Lt),
            d && (rt = d,
            at = "translate",
            f ? (at += se ? "3d(" : "3d(0px, ",
            st = se ? ", 0px, 0px)" : ", 0px)") : (at += se ? "X(" : "Y(",
            st = ")")),
            S && (ue.className = ue.className.replace("tns-vpfix", "")),
            function() {
                Pn("gutter");
                le.className = "tns-outer",
                ce.className = "tns-inner",
                le.id = kt + "-ow",
                ce.id = kt + "-iw",
                "" === ue.id && (ue.id = kt);
                bt += c || Ae ? " tns-subpixel" : " tns-no-subpixel",
                bt += l ? " tns-calc" : " tns-no-calc",
                Ae && (bt += " tns-autowidth");
                bt += " tns-" + e.axis,
                ue.className += bt,
                S ? ((re = t.createElement("div")).id = kt + "-mw",
                re.className = "tns-ovh",
                le.appendChild(re),
                re.appendChild(ce)) : le.appendChild(ce);
                if (De) {
                    var n = re || ce;
                    n.className += " tns-ah"
                }
                if (de.insertBefore(le, ue),
                ce.appendChild(ue),
                _(he, function(e, t) {
                    D(e, "tns-item"),
                    e.id || (e.id = kt + "-item" + t),
                    !S && oe && D(e, oe),
                    F(e, {
                        "aria-hidden": "true",
                        tabindex: "-1"
                    })
                }),
                et) {
                    for (var i = t.createDocumentFragment(), o = t.createDocumentFragment(), r = et; r--; ) {
                        var a = r % ve
                          , s = he[a].cloneNode(!0);
                        if (D(s, Wt),
                        X(s, "id"),
                        o.insertBefore(s, o.firstChild),
                        S) {
                            var u = he[ve - 1 - a].cloneNode(!0);
                            D(u, Wt),
                            X(u, "id"),
                            i.appendChild(u)
                        }
                    }
                    ue.insertBefore(i, ue.firstChild),
                    ue.appendChild(o),
                    he = ue.children
                }
            }(),
            function() {
                if (!S)
                    for (var t = ct, i = ct + Math.min(ve, je); t < i; t++) {
                        var o = he[t];
                        o.style.left = 100 * (t - ct) / je + "%",
                        D(o, Z),
                        W(o, oe)
                    }
                se && (c || Ae ? (I(Qe, "#" + kt + " > .tns-item", "font-size:" + n.getComputedStyle(he[0]).fontSize + ";", P(Qe)),
                I(Qe, "#" + kt, "font-size:0;", P(Qe))) : S && _(he, function(e, t) {
                    e.style.marginLeft = function(e) {
                        return l ? l + "(" + 100 * e + "% / " + tt + ")" : 100 * e / tt + "%"
                    }(t)
                }));
                if (u) {
                    if (h) {
                        var r = re && e.autoHeight ? zn(e.speed) : "";
                        I(Qe, "#" + kt + "-mw", r, P(Qe))
                    }
                    r = Hn(e.edgePadding, e.gutter, e.fixedWidth, e.speed, e.autoHeight),
                    I(Qe, "#" + kt + "-iw", r, P(Qe)),
                    S && (r = se && !Ae ? "width:" + Rn(e.fixedWidth, e.gutter, e.items) + ";" : "",
                    h && (r += zn(_e)),
                    I(Qe, "#" + kt, r, P(Qe))),
                    r = se && !Ae ? Dn(e.fixedWidth, e.gutter, e.items) : "",
                    e.gutter && (r += Wn(e.gutter)),
                    S || (h && (r += zn(_e)),
                    m && (r += Yn(_e))),
                    r && I(Qe, "#" + kt + " > .tns-item", r, P(Qe))
                } else {
                    S && De && (re.style[h] = _e / 1e3 + "s"),
                    ce.style.cssText = Hn(Ce, Be, Te, De),
                    S && se && !Ae && (ue.style.width = Rn(Te, Be, je));
                    var r = se && !Ae ? Dn(Te, Be, je) : "";
                    Be && (r += Wn(Be)),
                    r && I(Qe, "#" + kt + " > .tns-item", r, P(Qe))
                }
                if (E && u)
                    for (var a in E) {
                        a = parseInt(a);
                        var s = E[a]
                          , r = ""
                          , d = ""
                          , f = ""
                          , v = ""
                          , p = ""
                          , y = Ae ? null : _n("items", a)
                          , g = _n("fixedWidth", a)
                          , b = _n("speed", a)
                          , k = _n("edgePadding", a)
                          , w = _n("autoHeight", a)
                          , x = _n("gutter", a);
                        h && re && _n("autoHeight", a) && "speed"in s && (d = "#" + kt + "-mw{" + zn(b) + "}"),
                        ("edgePadding"in s || "gutter"in s) && (f = "#" + kt + "-iw{" + Hn(k, x, g, b, w) + "}"),
                        S && se && !Ae && ("fixedWidth"in s || "items"in s || Te && "gutter"in s) && (v = "width:" + Rn(g, x, y) + ";"),
                        h && "speed"in s && (v += zn(b)),
                        v && (v = "#" + kt + "{" + v + "}"),
                        ("fixedWidth"in s || Te && "gutter"in s || !S && "items"in s) && (p += Dn(g, x, y)),
                        "gutter"in s && (p += Wn(x)),
                        !S && "speed"in s && (h && (p += zn(b)),
                        m && (p += Yn(b))),
                        p && (p = "#" + kt + " > .tns-item{" + p + "}"),
                        (r = d + f + v + p) && Qe.insertRule("@media (min-width: " + a / 16 + "em) {" + r + "}", Qe.cssRules.length)
                    }
            }(),
            Fn();
            var Sn = Re ? S ? function() {
                var e = dt
                  , t = ft;
                e += qe,
                t -= qe,
                Ce ? (e += 1,
                t -= 1) : Te && (Me + Be) % (Te + Be) && (t -= 1),
                et && (ct > t ? ct -= ve : ct < e && (ct += ve))
            }
            : function() {
                if (ct > ft)
                    for (; ct >= dt + ve; )
                        ct -= ve;
                else if (ct < dt)
                    for (; ct <= ft - ve; )
                        ct += ve
            }
            : function() {
                ct = Math.max(dt, Math.min(ft, ct))
            }
              , An = S ? function() {
                var e, t, n, i, o, r, a, s, l, c, u;
                Ei(ue, ""),
                h || !_e ? (Ti(),
                _e && K(ue) || Oi()) : (e = ue,
                t = rt,
                n = at,
                i = st,
                o = Si(),
                r = _e,
                a = Oi,
                s = Math.min(r, 10),
                l = o.indexOf("%") >= 0 ? "%" : "px",
                o = o.replace(l, ""),
                c = Number(e.style[t].replace(n, "").replace(i, "").replace(l, "")),
                u = (o - c) / r * s,
                setTimeout(function o() {
                    r -= s,
                    c += u,
                    e.style[t] = n + c + l + i,
                    r > 0 ? setTimeout(o, s) : a()
                }, s)),
                se || Ki()
            }
            : function() {
                $e = [];
                var e = {};
                e[y] = e[g] = Oi,
                ne(he[ut], e),
                te(he[ct], e),
                Ci(ut, Z, $, !0),
                Ci(ct, oe, Z),
                y && g && _e && K(ue) || Oi()
            }
            ;
            return {
                version: "2.9.4",
                getInfo: Zi,
                events: gt,
                goTo: ji,
                play: function() {
                    Xe && !dn && (Hi(),
                    hn = !1)
                },
                pause: function() {
                    dn && (Ri(),
                    hn = !0)
                },
                isOn: pe,
                updateSliderHeight: vi,
                refresh: Fn,
                destroy: function() {
                    if (Qe.disabled = !0,
                    Qe.ownerNode && Qe.ownerNode.remove(),
                    ne(n, {
                        resize: Kn
                    }),
                    Pe && ne(t, Mt),
                    Gt && ne(Gt, At),
                    $t && ne($t, Tt),
                    ne(ue, Ct),
                    ne(ue, Bt),
                    pn && ne(pn, {
                        click: Di
                    }),
                    Xe && clearInterval(un),
                    S && y) {
                        var i = {};
                        i[y] = Oi,
                        ne(ue, i)
                    }
                    Ye && ne(ue, Ot),
                    Fe && ne(ue, jt);
                    var o = [fe, Vt, Qt, Ut, en, yn];
                    for (var r in k.forEach(function(t, n) {
                        var i = "container" === t ? le : e[t];
                        if ("object" == typeof i && i) {
                            var r = !!i.previousElementSibling && i.previousElementSibling
                              , a = i.parentNode;
                            i.outerHTML = o[n],
                            e[t] = r ? r.nextElementSibling : a.firstElementChild
                        }
                    }),
                    k = Z = $ = ee = oe = se = le = ce = ue = de = fe = he = ve = ae = me = Ae = Te = Ce = Be = Me = je = qe = Ie = Pe = _e = He = Re = De = Qe = Ue = ye = $e = et = tt = nt = it = ot = rt = at = st = lt = ct = ut = dt = ft = vt = mt = pt = yt = gt = bt = kt = wt = Et = xt = Lt = St = At = Tt = Ct = Bt = Mt = Ot = jt = qt = It = Pt = _t = Ht = Rt = Dt = Nt = zt = ge = We = Ne = Gt = Vt = Jt = Kt = Ft = Xt = ze = $t = en = Zt = tn = nn = on = rn = an = sn = ln = cn = Xe = Ge = mn = Ve = Je = pn = yn = Ke = gn = un = dn = fn = hn = vn = wn = En = bn = xn = kn = Ln = Ye = Fe = null,
                    this)
                        "rebuild" !== r && (this[r] = null);
                    pe = !1
                },
                rebuild: function() {
                    return ie(T(e, w))
                }
            }
        }
        function Tn(e) {
            e && (We = ze = Ye = Fe = Pe = Xe = Je = Ke = !1)
        }
        function Cn() {
            for (var e = S ? ct - et : ct; e < 0; )
                e += ve;
            return e % ve + 1
        }
        function Bn(e) {
            return e = e ? Math.max(0, Math.min(Re ? ve - 1 : ve - je, e)) : 0,
            S ? e + et : e
        }
        function Mn(e) {
            for (null == e && (e = ct),
            S && (e -= et); e < 0; )
                e += ve;
            return Math.floor(e % ve)
        }
        function On() {
            var e, t = Mn();
            return e = Pt ? t : Te || Ae ? Math.ceil((t + 1) * tn / ve - 1) : Math.floor(t / je),
            !Re && S && ct === ft && (e = tn - 1),
            e
        }
        function jn() {
            return n.innerWidth || t.documentElement.clientWidth || t.body.clientWidth
        }
        function qn(e) {
            return "top" === e ? "afterbegin" : "beforeend"
        }
        function In() {
            var e = Ce ? 2 * Ce - Be : 0;
            return function e(n) {
                if (null != n) {
                    var i, o, r = t.createElement("div");
                    return n.appendChild(r),
                    o = (i = r.getBoundingClientRect()).right - i.left,
                    r.remove(),
                    o || e(n.parentNode)
                }
            }(de) - e
        }
        function Pn(t) {
            if (e[t])
                return !0;
            if (E)
                for (var n in E)
                    if (E[n][t])
                        return !0;
            return !1
        }
        function _n(t, n) {
            if (null == n && (n = me),
            "items" === t && Te)
                return Math.floor((Me + Be) / (Te + Be)) || 1;
            var i = e[t];
            if (E)
                for (var o in E)
                    n >= parseInt(o) && t in E[o] && (i = E[o][t]);
            return "slideBy" === t && "page" === i && (i = _n("items")),
            S || "slideBy" !== t && "items" !== t || (i = Math.floor(i)),
            i
        }
        function Hn(e, t, n, i, o) {
            var r = "";
            if (void 0 !== e) {
                var a = e;
                t && (a -= t),
                r = se ? "margin: 0 " + a + "px 0 " + e + "px;" : "margin: " + e + "px 0 " + a + "px 0;"
            } else if (t && !n) {
                var s = "-" + t + "px";
                r = "margin: 0 " + (se ? s + " 0 0" : "0 " + s + " 0") + ";"
            }
            return !S && o && h && i && (r += zn(i)),
            r
        }
        function Rn(e, t, n) {
            return e ? (e + t) * tt + "px" : l ? l + "(" + 100 * tt + "% / " + n + ")" : 100 * tt / n + "%"
        }
        function Dn(e, t, n) {
            var i;
            if (e)
                i = e + t + "px";
            else {
                S || (n = Math.floor(n));
                var o = S ? tt : n;
                i = l ? l + "(100% / " + o + ")" : 100 / o + "%"
            }
            return i = "width:" + i,
            "inner" !== x ? i + ";" : i + " !important;"
        }
        function Wn(e) {
            var t = "";
            !1 !== e && (t = (se ? "padding-" : "margin-") + (se ? "right" : "bottom") + ": " + e + "px;");
            return t
        }
        function Nn(e, t) {
            var n = e.substring(0, e.length - t).toLowerCase();
            return n && (n = "-" + n + "-"),
            n
        }
        function zn(e) {
            return Nn(h, 18) + "transition-duration:" + e / 1e3 + "s;"
        }
        function Yn(e) {
            return Nn(m, 17) + "animation-duration:" + e / 1e3 + "s;"
        }
        function Fn() {
            if (Pn("autoHeight") || Ae || !se) {
                var e = ue.querySelectorAll("img");
                _(e, function(e) {
                    var t = e.src;
                    Ue || (t && t.indexOf("data:image") < 0 ? (e.src = "",
                    te(e, zt),
                    D(e, "loading"),
                    e.src = t) : si(e))
                }),
                L(function() {
                    di(G(e), function() {
                        ge = !0
                    })
                }),
                Pn("autoHeight") && (e = ci(ct, Math.min(ct + je - 1, tt - 1))),
                Ue ? Xn() : L(function() {
                    di(G(e), Xn)
                })
            } else
                S && Ai(),
                Vn(),
                Jn()
        }
        function Xn() {
            if (Ae && ve > 1) {
                var e = Re ? ct : ve - 1;
                !function t() {
                    var n = he[e].getBoundingClientRect().left
                      , i = he[e - 1].getBoundingClientRect().right;
                    Math.abs(n - i) <= 1 ? Gn() : setTimeout(function() {
                        t()
                    }, 16)
                }()
            } else
                Gn()
        }
        function Gn() {
            se && !Ae || (mi(),
            Ae ? (it = Li(),
            xt && (Lt = Un()),
            ft = lt(),
            Tn(wt || Lt)) : Ki()),
            S && Ai(),
            Vn(),
            Jn()
        }
        function Vn() {
            if (pi(),
            le.insertAdjacentHTML("afterbegin", '<div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">' + oi() + "</span>  of " + ve + "</div>"),
            be = le.querySelector(".tns-liveregion .current"),
            _t) {
                var t = Xe ? "stop" : "start";
                pn ? F(pn, {
                    "data-action": t
                }) : e.autoplayButtonOutput && (le.insertAdjacentHTML(qn(e.autoplayPosition), '<button type="button" data-action="' + t + '">' + gn[0] + t + gn[1] + Ve[0] + "</button>"),
                pn = le.querySelector("[data-action]")),
                pn && te(pn, {
                    click: Di
                }),
                Xe && (Hi(),
                Je && te(ue, Ct),
                Ke && te(ue, Bt))
            }
            if (It) {
                if ($t)
                    F($t, {
                        "aria-label": "Carousel Pagination"
                    }),
                    _(Zt = $t.children, function(e, t) {
                        F(e, {
                            "data-nav": t,
                            tabindex: "-1",
                            "aria-label": ln + (t + 1),
                            "aria-controls": kt
                        })
                    });
                else {
                    for (var n = "", i = Pt ? "" : 'style="display:none"', o = 0; o < ve; o++)
                        n += '<button type="button" data-nav="' + o + '" tabindex="-1" aria-controls="' + kt + '" ' + i + ' aria-label="' + ln + (o + 1) + '"></button>';
                    n = '<div class="tns-nav" aria-label="Carousel Pagination">' + n + "</div>",
                    le.insertAdjacentHTML(qn(e.navPosition), n),
                    $t = le.querySelector(".tns-nav"),
                    Zt = $t.children
                }
                if (Ui(),
                h) {
                    var r = h.substring(0, h.length - 18).toLowerCase()
                      , a = "transition: all " + _e / 1e3 + "s";
                    r && (a = "-" + r + "-" + a),
                    I(Qe, "[aria-controls^=" + kt + "-item]", a, P(Qe))
                }
                F(Zt[rn], {
                    "aria-label": ln + (rn + 1) + cn
                }),
                X(Zt[rn], "tabindex"),
                D(Zt[rn], sn),
                te($t, Tt)
            }
            qt && (Gt || Jt && Kt || (le.insertAdjacentHTML(qn(e.controlsPosition), '<div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"><button type="button" data-controls="prev" tabindex="-1" aria-controls="' + kt + '">' + Ne[0] + '</button><button type="button" data-controls="next" tabindex="-1" aria-controls="' + kt + '">' + Ne[1] + "</button></div>"),
            Gt = le.querySelector(".tns-controls")),
            Jt && Kt || (Jt = Gt.children[0],
            Kt = Gt.children[1]),
            e.controlsContainer && F(Gt, {
                "aria-label": "Carousel Navigation",
                tabindex: "0"
            }),
            (e.controlsContainer || e.prevButton && e.nextButton) && F([Jt, Kt], {
                "aria-controls": kt,
                tabindex: "-1"
            }),
            (e.controlsContainer || e.prevButton && e.nextButton) && (F(Jt, {
                "data-controls": "prev"
            }),
            F(Kt, {
                "data-controls": "next"
            })),
            Ft = gi(Jt),
            Xt = gi(Kt),
            wi(),
            Gt ? te(Gt, At) : (te(Jt, At),
            te(Kt, At))),
            $n()
        }
        function Jn() {
            if (S && y) {
                var i = {};
                i[y] = Oi,
                te(ue, i)
            }
            Ye && te(ue, Ot, e.preventScrollOnTouch),
            Fe && te(ue, jt),
            Pe && te(t, Mt),
            "inner" === x ? gt.on("outerResized", function() {
                Qn(),
                gt.emit("innerLoaded", Zi())
            }) : (E || Te || Ae || De || !se) && te(n, {
                resize: Kn
            }),
            De && ("outer" === x ? gt.on("innerLoaded", ui) : wt || ui()),
            ai(),
            wt ? ni() : Lt && ti(),
            gt.on("indexChanged", fi),
            "inner" === x && gt.emit("innerLoaded", Zi()),
            "function" == typeof yt && yt(Zi()),
            pe = !0
        }
        function Kn(e) {
            L(function() {
                Qn(Ni(e))
            })
        }
        function Qn(n) {
            if (pe) {
                "outer" === x && gt.emit("outerResized", Zi(n)),
                me = jn();
                var i, o = ae, r = !1;
                E && (Zn(),
                (i = o !== ae) && gt.emit("newBreakpointStart", Zi(n)));
                var a, s, l = je, c = wt, d = Lt, f = Pe, h = We, v = ze, m = Ye, p = Fe, y = Xe, g = Je, b = Ke, k = ct;
                if (i) {
                    var w = Te
                      , L = De
                      , A = Ne
                      , T = Oe
                      , C = Ve;
                    if (!u)
                        var B = Be
                          , M = Ce
                }
                if (Pe = _n("arrowKeys"),
                We = _n("controls"),
                ze = _n("nav"),
                Ye = _n("touch"),
                Oe = _n("center"),
                Fe = _n("mouseDrag"),
                Xe = _n("autoplay"),
                Je = _n("autoplayHoverPause"),
                Ke = _n("autoplayResetOnVisibility"),
                i && (wt = _n("disable"),
                Te = _n("fixedWidth"),
                _e = _n("speed"),
                De = _n("autoHeight"),
                Ne = _n("controlsText"),
                Ve = _n("autoplayText"),
                Ge = _n("autoplayTimeout"),
                u || (Ce = _n("edgePadding"),
                Be = _n("gutter"))),
                Tn(wt),
                Me = In(),
                se && !Ae || wt || (mi(),
                se || (Ki(),
                r = !0)),
                (Te || Ae) && (it = Li(),
                ft = lt()),
                (i || Te) && (je = _n("items"),
                qe = _n("slideBy"),
                (s = je !== l) && (Te || Ae || (ft = lt()),
                Sn())),
                i && wt !== c && (wt ? ni() : function() {
                    if (!Et)
                        return;
                    if (Qe.disabled = !1,
                    ue.className += bt,
                    Ai(),
                    Re)
                        for (var e = et; e--; )
                            S && J(he[e]),
                            J(he[tt - e - 1]);
                    if (!S)
                        for (var t = ct, n = ct + ve; t < n; t++) {
                            var i = he[t]
                              , o = t < ct + je ? Z : oe;
                            i.style.left = 100 * (t - ct) / je + "%",
                            D(i, o)
                        }
                    ei(),
                    Et = !1
                }()),
                xt && (i || Te || Ae) && (Lt = Un()) !== d && (Lt ? (Ti(Si(Bn(0))),
                ti()) : (!function() {
                    if (!St)
                        return;
                    Ce && u && (ce.style.margin = "");
                    if (et)
                        for (var e = "tns-transparent", t = et; t--; )
                            S && W(he[t], e),
                            W(he[tt - t - 1], e);
                    ei(),
                    St = !1
                }(),
                r = !0)),
                Tn(wt || Lt),
                Xe || (Je = Ke = !1),
                Pe !== f && (Pe ? te(t, Mt) : ne(t, Mt)),
                We !== h && (We ? Gt ? J(Gt) : (Jt && J(Jt),
                Kt && J(Kt)) : Gt ? V(Gt) : (Jt && V(Jt),
                Kt && V(Kt))),
                ze !== v && (ze ? (J($t),
                Ui()) : V($t)),
                Ye !== m && (Ye ? te(ue, Ot, e.preventScrollOnTouch) : ne(ue, Ot)),
                Fe !== p && (Fe ? te(ue, jt) : ne(ue, jt)),
                Xe !== y && (Xe ? (pn && J(pn),
                dn || hn || Hi()) : (pn && V(pn),
                dn && Ri())),
                Je !== g && (Je ? te(ue, Ct) : ne(ue, Ct)),
                Ke !== b && (Ke ? te(t, Bt) : ne(t, Bt)),
                i) {
                    if (Te === w && Oe === T || (r = !0),
                    De !== L && (De || (ce.style.height = "")),
                    We && Ne !== A && (Jt.innerHTML = Ne[0],
                    Kt.innerHTML = Ne[1]),
                    pn && Ve !== C) {
                        var O = Xe ? 1 : 0
                          , j = pn.innerHTML
                          , q = j.length - C[O].length;
                        j.substring(q) === C[O] && (pn.innerHTML = j.substring(0, q) + Ve[O])
                    }
                } else
                    Oe && (Te || Ae) && (r = !0);
                if ((s || Te && !Ae) && (tn = Qi(),
                Ui()),
                (a = ct !== k) ? (gt.emit("indexChanged", Zi()),
                r = !0) : s ? a || fi() : (Te || Ae) && (ai(),
                pi(),
                ii()),
                s && !S && function() {
                    for (var e = ct + Math.min(ve, je), t = tt; t--; ) {
                        var n = he[t];
                        t >= ct && t < e ? (D(n, "tns-moving"),
                        n.style.left = 100 * (t - ct) / je + "%",
                        D(n, Z),
                        W(n, oe)) : n.style.left && (n.style.left = "",
                        D(n, oe),
                        W(n, Z)),
                        W(n, $)
                    }
                    setTimeout(function() {
                        _(he, function(e) {
                            W(e, "tns-moving")
                        })
                    }, 300)
                }(),
                !wt && !Lt) {
                    if (i && !u && (Ce === M && Be === B || (ce.style.cssText = Hn(Ce, Be, Te, _e, De)),
                    se)) {
                        S && (ue.style.width = Rn(Te, Be, je));
                        var H = Dn(Te, Be, je) + Wn(Be);
                        !function(e, t) {
                            "deleteRule"in e ? e.deleteRule(t) : e.removeRule(t)
                        }(Qe, P(Qe) - 1),
                        I(Qe, "#" + kt + " > .tns-item", H, P(Qe))
                    }
                    De && ui(),
                    r && (Ai(),
                    ut = ct)
                }
                i && gt.emit("newBreakpointEnd", Zi(n))
            }
        }
        function Un() {
            if (!Te && !Ae)
                return ve <= (Oe ? je - (je - 1) / 2 : je);
            var e = Te ? (Te + Be) * ve : ye[ve]
              , t = Ce ? Me + 2 * Ce : Me + Be;
            return Oe && (t -= Te ? (Me - Te) / 2 : (Me - (ye[ct + 1] - ye[ct] - Be)) / 2),
            e <= t
        }
        function Zn() {
            for (var e in ae = 0,
            E)
                e = parseInt(e),
                me >= e && (ae = e)
        }
        function $n() {
            !Xe && pn && V(pn),
            !ze && $t && V($t),
            We || (Gt ? V(Gt) : (Jt && V(Jt),
            Kt && V(Kt)))
        }
        function ei() {
            Xe && pn && J(pn),
            ze && $t && J($t),
            We && (Gt ? J(Gt) : (Jt && J(Jt),
            Kt && J(Kt)))
        }
        function ti() {
            if (!St) {
                if (Ce && (ce.style.margin = "0px"),
                et)
                    for (var e = "tns-transparent", t = et; t--; )
                        S && D(he[t], e),
                        D(he[tt - t - 1], e);
                $n(),
                St = !0
            }
        }
        function ni() {
            if (!Et) {
                if (Qe.disabled = !0,
                ue.className = ue.className.replace(bt.substring(1), ""),
                X(ue, ["style"]),
                Re)
                    for (var e = et; e--; )
                        S && V(he[e]),
                        V(he[tt - e - 1]);
                if (se && S || X(ce, ["style"]),
                !S)
                    for (var t = ct, n = ct + ve; t < n; t++) {
                        var i = he[t];
                        X(i, ["style"]),
                        W(i, Z),
                        W(i, oe)
                    }
                $n(),
                Et = !0
            }
        }
        function ii() {
            var e = oi();
            be.innerHTML !== e && (be.innerHTML = e)
        }
        function oi() {
            var e = ri()
              , t = e[0] + 1
              , n = e[1] + 1;
            return t === n ? t + "" : t + " to " + n
        }
        function ri(e) {
            null == e && (e = Si());
            var t, n, i, o = ct;
            if (Oe || Ce ? (Ae || Te) && (n = -(parseFloat(e) + Ce),
            i = n + Me + 2 * Ce) : Ae && (n = ye[ct],
            i = n + Me),
            Ae)
                ye.forEach(function(e, r) {
                    r < tt && ((Oe || Ce) && e <= n + .5 && (o = r),
                    i - e >= .5 && (t = r))
                });
            else {
                if (Te) {
                    var r = Te + Be;
                    Oe || Ce ? (o = Math.floor(n / r),
                    t = Math.ceil(i / r - 1)) : t = o + Math.ceil(Me / r) - 1
                } else if (Oe || Ce) {
                    var a = je - 1;
                    if (Oe ? (o -= a / 2,
                    t = ct + a / 2) : t = ct + a,
                    Ce) {
                        var s = Ce * je / Me;
                        o -= s,
                        t += s
                    }
                    o = Math.floor(o),
                    t = Math.ceil(t)
                } else
                    t = o + je - 1;
                o = Math.max(o, 0),
                t = Math.min(t, tt - 1)
            }
            return [o, t]
        }
        function ai() {
            if (Ue && !wt) {
                var e = ri();
                e.push(Ze),
                ci.apply(null, e).forEach(function(e) {
                    if (!R(e, Nt)) {
                        var t = {};
                        t[y] = function(e) {
                            e.stopPropagation()
                        }
                        ,
                        te(e, t),
                        te(e, zt),
                        e.src = z(e, "data-src");
                        var n = z(e, "data-srcset");
                        n && (e.srcset = n),
                        D(e, "loading")
                    }
                })
            }
        }
        function si(e) {
            D(e, "loaded"),
            li(e)
        }
        function li(e) {
            D(e, Nt),
            W(e, "loading"),
            ne(e, zt)
        }
        function ci(e, t, n) {
            var i = [];
            for (n || (n = "img"); e <= t; )
                _(he[e].querySelectorAll(n), function(e) {
                    i.push(e)
                }),
                e++;
            return i
        }
        function ui() {
            var e = ci.apply(null, ri());
            L(function() {
                di(e, vi)
            })
        }
        function di(e, t) {
            return ge ? t() : (e.forEach(function(t, n) {
                !Ue && t.complete && li(t),
                R(t, Nt) && e.splice(n, 1)
            }),
            e.length ? void L(function() {
                di(e, t)
            }) : t())
        }
        function fi() {
            ai(),
            pi(),
            ii(),
            wi(),
            function() {
                if (ze && (rn = on >= 0 ? on : On(),
                on = -1,
                rn !== an)) {
                    var e = Zt[an]
                      , t = Zt[rn];
                    F(e, {
                        tabindex: "-1",
                        "aria-label": ln + (an + 1)
                    }),
                    W(e, sn),
                    F(t, {
                        "aria-label": ln + (rn + 1) + cn
                    }),
                    X(t, "tabindex"),
                    D(t, sn),
                    an = rn
                }
            }()
        }
        function hi(e, t) {
            for (var n = [], i = e, o = Math.min(e + t, tt); i < o; i++)
                n.push(he[i].offsetHeight);
            return Math.max.apply(null, n)
        }
        function vi() {
            var e = De ? hi(ct, je) : hi(et, ve)
              , t = re || ce;
            t.style.height !== e && (t.style.height = e + "px")
        }
        function mi() {
            ye = [0];
            var e = se ? "left" : "top"
              , t = se ? "right" : "bottom"
              , n = he[0].getBoundingClientRect()[e];
            _(he, function(i, o) {
                o && ye.push(i.getBoundingClientRect()[e] - n),
                o === tt - 1 && ye.push(i.getBoundingClientRect()[t] - n)
            })
        }
        function pi() {
            var e = ri()
              , t = e[0]
              , n = e[1];
            _(he, function(e, i) {
                i >= t && i <= n ? N(e, "aria-hidden") && (X(e, ["aria-hidden", "tabindex"]),
                D(e, Dt)) : N(e, "aria-hidden") || (F(e, {
                    "aria-hidden": "true",
                    tabindex: "-1"
                }),
                W(e, Dt))
            })
        }
        function yi(e) {
            return e.nodeName.toLowerCase()
        }
        function gi(e) {
            return "button" === yi(e)
        }
        function bi(e) {
            return "true" === e.getAttribute("aria-disabled")
        }
        function ki(e, t, n) {
            e ? t.disabled = n : t.setAttribute("aria-disabled", n.toString())
        }
        function wi() {
            if (We && !He && !Re) {
                var e = Ft ? Jt.disabled : bi(Jt)
                  , t = Xt ? Kt.disabled : bi(Kt)
                  , n = ct <= dt
                  , i = !He && ct >= ft;
                n && !e && ki(Ft, Jt, !0),
                !n && e && ki(Ft, Jt, !1),
                i && !t && ki(Xt, Kt, !0),
                !i && t && ki(Xt, Kt, !1)
            }
        }
        function Ei(e, t) {
            h && (e.style[h] = t)
        }
        function xi(e) {
            return null == e && (e = ct),
            Ae ? (Me - (Ce ? Be : 0) - (ye[e + 1] - ye[e] - Be)) / 2 : Te ? (Me - Te) / 2 : (je - 1) / 2
        }
        function Li() {
            var e = Me + (Ce ? Be : 0) - (Te ? (Te + Be) * tt : ye[tt]);
            return Oe && !Re && (e = Te ? -(Te + Be) * (tt - 1) - xi() : xi(tt - 1) - ye[tt - 1]),
            e > 0 && (e = 0),
            e
        }
        function Si(e) {
            var t;
            if (null == e && (e = ct),
            se && !Ae)
                if (Te)
                    t = -(Te + Be) * e,
                    Oe && (t += xi());
                else {
                    var n = d ? tt : je;
                    Oe && (e -= xi()),
                    t = 100 * -e / n
                }
            else
                t = -ye[e],
                Oe && Ae && (t += xi());
            return nt && (t = Math.max(t, it)),
            t += !se || Ae || Te ? "px" : "%"
        }
        function Ai(e) {
            Ei(ue, "0s"),
            Ti(e)
        }
        function Ti(e) {
            null == e && (e = Si()),
            ue.style[rt] = at + e + st
        }
        function Ci(e, t, n, i) {
            var o = e + je;
            Re || (o = Math.min(o, tt));
            for (var r = e; r < o; r++) {
                var a = he[r];
                i || (a.style.left = 100 * (r - ct) / je + "%"),
                ee && v && (a.style[v] = a.style[p] = ee * (r - e) / 1e3 + "s"),
                W(a, t),
                D(a, n),
                i && $e.push(a)
            }
        }
        function Bi(e, t) {
            ot && Sn(),
            (ct !== ut || t) && (gt.emit("indexChanged", Zi()),
            gt.emit("transitionStart", Zi()),
            De && ui(),
            dn && e && ["click", "keydown"].indexOf(e.type) >= 0 && Ri(),
            pt = !0,
            An())
        }
        function Mi(e) {
            return e.toLowerCase().replace(/-/g, "")
        }
        function Oi(e) {
            if (S || pt) {
                if (gt.emit("transitionEnd", Zi(e)),
                !S && $e.length > 0)
                    for (var t = 0; t < $e.length; t++) {
                        var n = $e[t];
                        n.style.left = "",
                        p && v && (n.style[p] = "",
                        n.style[v] = ""),
                        W(n, $),
                        D(n, oe)
                    }
                if (!e || !S && e.target.parentNode === ue || e.target === ue && Mi(e.propertyName) === Mi(rt)) {
                    if (!ot) {
                        var i = ct;
                        Sn(),
                        ct !== i && (gt.emit("indexChanged", Zi()),
                        Ai())
                    }
                    "inner" === x && gt.emit("innerLoaded", Zi()),
                    pt = !1,
                    ut = ct
                }
            }
        }
        function ji(e, t) {
            if (!Lt)
                if ("prev" === e)
                    qi(t, -1);
                else if ("next" === e)
                    qi(t, 1);
                else {
                    if (pt) {
                        if (ht)
                            return;
                        Oi()
                    }
                    var n = Mn()
                      , i = 0;
                    if ("first" === e ? i = -n : "last" === e ? i = S ? ve - je - n : ve - 1 - n : ("number" != typeof e && (e = parseInt(e)),
                    isNaN(e) || (t || (e = Math.max(0, Math.min(ve - 1, e))),
                    i = e - n)),
                    !S && i && Math.abs(i) < je) {
                        var o = i > 0 ? 1 : -1;
                        i += ct + i - ve >= dt ? ve * o : 2 * ve * o * -1
                    }
                    ct += i,
                    S && Re && (ct < dt && (ct += ve),
                    ct > ft && (ct -= ve)),
                    Mn(ct) !== Mn(ut) && Bi(t)
                }
        }
        function qi(e, t) {
            if (pt) {
                if (ht)
                    return;
                Oi()
            }
            var n;
            if (!t) {
                for (var i = zi(e = Ni(e)); i !== Gt && [Jt, Kt].indexOf(i) < 0; )
                    i = i.parentNode;
                var o = [Jt, Kt].indexOf(i);
                o >= 0 && (n = !0,
                t = 0 === o ? -1 : 1)
            }
            if (He) {
                if (ct === dt && -1 === t)
                    return void ji("last", e);
                if (ct === ft && 1 === t)
                    return void ji("first", e)
            }
            t && (ct += qe * t,
            Ae && (ct = Math.floor(ct)),
            Bi(n || e && "keydown" === e.type ? e : null))
        }
        function Ii() {
            un = setInterval(function() {
                qi(null, mn)
            }, Ge),
            dn = !0
        }
        function Pi() {
            clearInterval(un),
            dn = !1
        }
        function _i(e, t) {
            F(pn, {
                "data-action": e
            }),
            pn.innerHTML = gn[0] + e + gn[1] + t
        }
        function Hi() {
            Ii(),
            pn && _i("stop", Ve[1])
        }
        function Ri() {
            Pi(),
            pn && _i("start", Ve[0])
        }
        function Di() {
            dn ? (Ri(),
            hn = !0) : (Hi(),
            hn = !1)
        }
        function Wi(e) {
            e.focus()
        }
        function Ni(e) {
            return Yi(e = e || n.event) ? e.changedTouches[0] : e
        }
        function zi(e) {
            return e.target || n.event.srcElement
        }
        function Yi(e) {
            return e.type.indexOf("touch") >= 0
        }
        function Fi(e) {
            e.preventDefault ? e.preventDefault() : e.returnValue = !1
        }
        function Xi() {
            return r = En.y - wn.y,
            a = En.x - wn.x,
            t = Math.atan2(r, a) * (180 / Math.PI),
            n = vt,
            i = !1,
            (o = Math.abs(90 - Math.abs(t))) >= 90 - n ? i = "horizontal" : o <= n && (i = "vertical"),
            i === e.axis;
            var t, n, i, o, r, a
        }
        function Gi(e) {
            if (pt) {
                if (ht)
                    return;
                Oi()
            }
            Xe && dn && Pi(),
            xn = !0,
            kn && (A(kn),
            kn = null);
            var t = Ni(e);
            gt.emit(Yi(e) ? "touchStart" : "dragStart", Zi(e)),
            !Yi(e) && ["img", "a"].indexOf(yi(zi(e))) >= 0 && Fi(e),
            En.x = wn.x = t.clientX,
            En.y = wn.y = t.clientY,
            S && (bn = parseFloat(ue.style[rt].replace(at, "")),
            Ei(ue, "0s"))
        }
        function Vi(e) {
            if (xn) {
                var t = Ni(e);
                En.x = t.clientX,
                En.y = t.clientY,
                S ? kn || (kn = L(function() {
                    !function e(t) {
                        if (!mt)
                            return void (xn = !1);
                        A(kn);
                        xn && (kn = L(function() {
                            e(t)
                        }));
                        "?" === mt && (mt = Xi());
                        if (mt) {
                            !Yt && Yi(t) && (Yt = !0);
                            try {
                                t.type && gt.emit(Yi(t) ? "touchMove" : "dragMove", Zi(t))
                            } catch (e) {}
                            var n = bn
                              , i = Ln(En, wn);
                            if (!se || Te || Ae)
                                n += i,
                                n += "px";
                            else {
                                var o = d ? i * je * 100 / ((Me + Be) * tt) : 100 * i / (Me + Be);
                                n += o,
                                n += "%"
                            }
                            ue.style[rt] = at + n + st
                        }
                    }(e)
                })) : ("?" === mt && (mt = Xi()),
                mt && (Yt = !0)),
                ("boolean" != typeof e.cancelable || e.cancelable) && Yt && e.preventDefault()
            }
        }
        function Ji(t) {
            if (xn) {
                kn && (A(kn),
                kn = null),
                S && Ei(ue, ""),
                xn = !1;
                var n = Ni(t);
                En.x = n.clientX,
                En.y = n.clientY;
                var i = Ln(En, wn);
                if (Math.abs(i)) {
                    if (!Yi(t)) {
                        var o = zi(t);
                        te(o, {
                            click: function e(t) {
                                Fi(t),
                                ne(o, {
                                    click: e
                                })
                            }
                        })
                    }
                    S ? kn = L(function() {
                        if (se && !Ae) {
                            var e = -i * je / (Me + Be);
                            e = i > 0 ? Math.floor(e) : Math.ceil(e),
                            ct += e
                        } else {
                            var n = -(bn + i);
                            if (n <= 0)
                                ct = dt;
                            else if (n >= ye[tt - 1])
                                ct = ft;
                            else
                                for (var o = 0; o < tt && n >= ye[o]; )
                                    ct = o,
                                    n > ye[o] && i < 0 && (ct += 1),
                                    o++
                        }
                        Bi(t, i),
                        gt.emit(Yi(t) ? "touchEnd" : "dragEnd", Zi(t))
                    }) : mt && qi(t, i > 0 ? -1 : 1)
                }
            }
            "auto" === e.preventScrollOnTouch && (Yt = !1),
            vt && (mt = "?"),
            Xe && !dn && Ii()
        }
        function Ki() {
            (re || ce).style.height = ye[ct + je] - ye[ct] + "px"
        }
        function Qi() {
            var e = Te ? (Te + Be) * ve / Me : ve / je;
            return Math.min(Math.ceil(e), ve)
        }
        function Ui() {
            if (ze && !Pt && tn !== nn) {
                var e = nn
                  , t = tn
                  , n = J;
                for (nn > tn && (e = tn,
                t = nn,
                n = V); e < t; )
                    n(Zt[e]),
                    e++;
                nn = tn
            }
        }
        function Zi(e) {
            return {
                container: ue,
                slideItems: he,
                navContainer: $t,
                navItems: Zt,
                controlsContainer: Gt,
                hasControls: qt,
                prevButton: Jt,
                nextButton: Kt,
                items: je,
                slideBy: qe,
                cloneCount: et,
                slideCount: ve,
                slideCountNew: tt,
                index: ct,
                indexCached: ut,
                displayIndex: Cn(),
                navCurrentIndex: rn,
                navCurrentIndexCached: an,
                pages: tn,
                pagesCached: nn,
                sheet: Qe,
                isOn: pe,
                event: e || {}
            }
        }
        b && console.warn("No slides found in", e.container)
    }
      , oe = function() {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1,
                i.configurable = !0,
                "value"in i && (i.writable = !0),
                Object.defineProperty(e, i.key, i)
            }
        }
        return function(t, n, i) {
            return n && e(t.prototype, n),
            i && e(t, i),
            t
        }
    }();
    var re = function() {
        function e() {
            !function(e, t) {
                if (!(e instanceof t))
                    throw new TypeError("Cannot call a class as a function")
            }(this, e),
            this.slidersArray = null
        }
        return oe(e, [{
            key: "init",
            value: function() {
                if (null == Array.from(document.querySelectorAll(".js-slider")))
                    return !1;
                this.getElements()
            }
        }, {
            key: "getElements",
            value: function() {
                this.slidersArray = document.querySelectorAll(".js-slider"),
                this.directType(this.slidersArray)
            }
        }, {
            key: "directType",
            value: function(e) {
                var t = this;
                e.forEach(function(e) {
                    e.classList.contains("c-slidersgallery--hero-slides") && t.bannerGallery(e),
                    e.classList.contains("c-slidersgallery--vertical-slides") && t.verticalGallery(e),
                    e.classList.contains("c-slidersgallery--socmed-slides") && t.socmedSlider(e),
                    e.classList.contains("c-slidersgallery--images-slides") && t.imageSlider(e),
                    e.classList.contains("c-slidersgallery--images-slides-article") && t.articleimageSlider(e),
                    e.classList.contains("c-slidersgallery--single-slides") && t.singleSlider(e)
                })
            }
        }, {
            key: "bannerGallery",
            value: function(e) {
                return ie({
                    container: e,
                    items: 1,
                    mode: "gallery",
                    slideBy: "page",
                    mouseDrag: !0,
                    swipeAngle: !1,
                    speed: 500,
                    controls: !1,
                    navContainer: ".js-slider_nav"
                }),
                1
            }
        }, {
            key: "verticalGallery",
            value: function(e) {
                return ie({
                    container: e,
                    items: 1,
                    mode: "gallery",
                    slideBy: "page",
                    mouseDrag: !0,
                    swipeAngle: !1,
                    speed: 500,
                    controls: !1,
                    navContainer: ".js-slider_nav--vertical",
                    navPosition: "right",
                    axis: "vertical"
                }),
                1
            }
        }, {
            key: "socmedSlider",
            value: function(e) {
                return ie({
                    container: e,
                    loop: !0,
                    autoWidth: !0,
                    items: 3.5,
                    gutter: 40,
                    mouseDrag: !0,
                    swipeAngle: !1,
                    speed: 800,
                    autoplay: !0,
                    autoplayHoverPause: !0,
                    autoplayButtonOutput: !1,
                    controls: !0,
                    controlsContainer: ".js-slider_nav--socmed",
                    mode: "carousel",
                    slideBy: "2.5",
                    nav: !1,
                    autoplayButton: !1,
                    responsive: {
                        320: {
                            items: 1,
                            gutter: 20,
                            autoWidth: !1
                        },
                        768: {
                            items: 3.5,
                            gutter: 40
                        },
                        1280: {
                            items: 10,
                            gutter: 40
                        }
                    }
                }),
                1
            }
        }, {
            key: "imageSlider",
            value: function(e) {
                return ie({
                    container: e,
                    responsive: {
                        320: {
                            items: 1,
                            fixedWidth: 230,
                            gutter: 8,
                            edgePadding: 50,
                            autoWidth: !1
                        },
                        375: {
                            fixedWidth: 279
                        },
                        425: {
                            fixedWidth: 320
                        },
                        500: {
                            fixedWidth: 420
                        },
                        620: {
                            fixedWidth: 520
                        },
                        700: {
                            fixedWidth: 600
                        },
                        768: {
                            items: 1,
                            gutter: 24,
                            edgePadding: 150,
                            fixedWidth: 550
                        },
                        800: {
                            fixedWidth: 700
                        },
                        1170: {
                            fixedWidth: 929,
                            autoWidth: !0
                        }
                    },
                    items: 1,
                    center: !0,
                    fixedWidth: !1,
                    autoWidth: !0,
                    slideBy: 1,
                    gutter: 8,
                    edgePadding: 50,
                    autoplay: !1,
                    mouseDrag: !0,
                    swipeAngle: !1,
                    speed: 500,
                    autoplayButton: !1,
                    nav: !1,
                    controls: !0,
                    controlsContainer: ".js-slider_nav--images"
                }),
                1
            }
        }, {
            key: "articleimageSlider",
            value: function(e) {
                return ie({
                    container: e,
                    responsive: {
                        320: {
                            items: 1,
                            fixedWidth: 180,
                            gutter: 8,
                            edgePadding: 50,
                            autoWidth: !1
                        },
                        375: {
                            fixedWidth: 220
                        },
                        425: {
                            fixedWidth: 280
                        },
                        500: {
                            fixedWidth: 380
                        },
                        620: {
                            fixedWidth: 420
                        },
                        700: {
                            fixedWidth: 520
                        },
                        768: {
                            items: 1,
                            gutter: 24,
                            edgePadding: 0,
                            fixedWidth: 475
                        },
                        950: {
                            items: 1,
                            gutter: 24,
                            edgePadding: 0,
                            fixedWidth: 375
                        },
                        1024: {
                            fixedWidth: 400
                        },
                        1190: {
                            fixedWidth: 500
                        }
                    },
                    items: 1,
                    center: !0,
                    fixedWidth: !1,
                    autoWidth: !0,
                    slideBy: 1,
                    gutter: 8,
                    edgePadding: 50,
                    autoplay: !1,
                    mouseDrag: !0,
                    swipeAngle: !1,
                    speed: 500,
                    autoplayButton: !1,
                    nav: !1,
                    controls: !0,
                    controlsContainer: ".js-slider_nav--images"
                }),
                1
            }
        }, {
            key: "singleSlider",
            value: function(e) {
                return ie({
                    container: e,
                    items: 1,
                    swipeAngle: !1,
                    speed: 500,
                    autoplay: !1,
                    nav: !1,
                    controls: !0,
                    mouseDrag: !0,
                    controlsContainer: ".js-slider_nav--singleimage"
                }),
                1
            }
        }]),
        e
    }()
      , ae = n(9)
      , se = n.n(ae)
      , le = function() {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1,
                i.configurable = !0,
                "value"in i && (i.writable = !0),
                Object.defineProperty(e, i.key, i)
            }
        }
        return function(t, n, i) {
            return n && e(t.prototype, n),
            i && e(t, i),
            t
        }
    }();
    var ce = function() {
        function e() {
            !function(e, t) {
                if (!(e instanceof t))
                    throw new TypeError("Cannot call a class as a function")
            }(this, e),
            this.parallaxElements = null
        }
        return le(e, [{
            key: "init",
            value: function() {
                this.getElements(),
                this.bindElements()
            }
        }, {
            key: "getElements",
            value: function() {
                this.parallaxElements = Array.from(document.querySelectorAll(".js-rellax-scale-el"))
            }
        }, {
            key: "bindElements",
            value: function() {
                this.parallaxElements.length > 0 && this.initRellax(".js-rellax-el")
            }
        }, {
            key: "initRellax",
            value: function(e) {
                new se.a(e,{
                    center: !0
                })
            }
        }]),
        e
    }()
      , ue = function() {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1,
                i.configurable = !0,
                "value"in i && (i.writable = !0),
                Object.defineProperty(e, i.key, i)
            }
        }
        return function(t, n, i) {
            return n && e(t.prototype, n),
            i && e(t, i),
            t
        }
    }();
    function de(e) {
        if (Array.isArray(e)) {
            for (var t = 0, n = Array(e.length); t < e.length; t++)
                n[t] = e[t];
            return n
        }
        return Array.from(e)
    }
    var fe = function() {
        function e() {
            !function(e, t) {
                if (!(e instanceof t))
                    throw new TypeError("Cannot call a class as a function")
            }(this, e),
            this.searchButtons = null,
            this.searchField = null,
            this.searchButton = null,
            this.searchClose = null,
            this.mainNav = null,
            this.menuButton = null,
            this.searchTabs = null,
            this.searchResults = null,
            this.searchResultsEmpty = null,
            this.headerContainer = null,
            this.headerBackground = null,
            this.headerBackgroundMobile = null,
            this.queryKeyword = null,
            this.tagLinks = null
        }
        return ue(e, [{
            key: "getElements",
            value: function() {
                this.searchButtons = Array.from(document.querySelectorAll(".js-search__button")),
                this.searchFields = Array.from(document.querySelectorAll(".js-search__field")),
                this.searchClose = Array.from(document.querySelectorAll(".js-closeSearch")),
                this.searchTabs = Array.from(document.querySelectorAll(".js-search-tab")),
                this.searchResults = Array.from(document.querySelectorAll(".js-result-content")),
                this.searchResultsEmpty = document.getElementById("js-search-results--empty"),
                this.searchResultComponent = document.getElementById("js-search-results"),
                this.mainNav = document.getElementById("js-menu__container"),
                this.menuButton = document.getElementById("js-menu__button"),
                this.txtSearchDesktop = document.getElementById("txtSearchDesktop"),
                this.txtSearchMobile = document.getElementById("txtSearchMobile"),
                this.jsSearchHeading = document.querySelectorAll(".js-search-heading")[0],
                this.headerBackground = document.getElementById("js-header-background"),
                this.headerBackgroundMobile = document.querySelector(".c-header__background--mobile"),
                this.headerContainer = document.querySelector(".c-header__container"),
                this.tagLinks = Array.from(document.querySelectorAll(".js-tag-link"))
            }
        }, {
            key: "checkState",
            value: function(e, t) {
                e.classList.contains("is-active") ? this.setState("remove", t) : this.setState("add", t)
            }
        }, {
            key: "setState",
            value: function(e, t) {
                var n = this
                  , i = this.searchFields[t]
                  , o = this.searchButtons[t];
                "add" === e ? (i.classList.contains("dt") && (i.previousElementSibling.classList.remove("is-active"),
                i.parentElement.style.width = "53%",
                i.parentElement.style.height = "100%"),
                setTimeout(function() {
                    n.headerBackground.classList.add("is-active"),
                    n.headerBackgroundMobile.classList.add("mobile-active"),
                    n.headerBackground.style.height = "112px",
                    i.classList.add("is-active"),
                    o.classList.add("is-active"),
                    n.mainNav.classList.remove("is-active"),
                    n.menuButton.classList.remove("is-active")
                }, 200),
                setTimeout(function() {
                    document.getElementById("js-nav-dt").style.display = "none"
                }, 450)) : (i.classList.remove("is-active"),
                o.classList.remove("is-active"),
                document.getElementById("js-nav-dt").style.display = "inline-flex",
                setTimeout(function() {
                    i.classList.contains("dt") && (n.headerBackground.classList.remove("is-active"),
                    i.previousElementSibling.classList.add("is-active"),
                    i.parentElement.style.width = "unset",
                    i.parentElement.style.height = "unset"),
                    n.headerBackgroundMobile.classList.remove("mobile-active")
                }, 500))
            }
        }, {
            key: "bindElements",
            value: function() {
                var e = this
                  , t = this;
                null != this.searchButtons && null != this.searchFields && (t.searchButtons.forEach(function(e, n) {
                    e.addEventListener("click", function() {
                        t.checkState(e, n)
                    })
                }),
                t.searchClose.forEach(function(t, n) {
                    t.addEventListener("click", function() {
                        e.setState("remove", n)
                    })
                })),
                null != this.txtSearchDesktop && (this.txtSearchDesktop.onkeydown = function(e) {
                    13 === e.keyCode && t.search(t.txtSearchDesktop.value)
                }
                ,
                this.txtSearchDesktop.onkeypress = function(e) {
                    t.txtSearchMobile.value = t.txtSearchDesktop.value
                }
                ),
                null != this.txtSearchMobile && (this.txtSearchMobile.onkeydown = function(e) {
                    13 === e.keyCode && t.search(t.txtSearchMobile.value)
                }
                ,
                this.txtSearchMobile.onkeypress = function(e) {
                    t.txtSearchDesktop.value = t.txtSearchMobile.value
                }
                ),
                null != this.tagLinks && this.tagLinks.forEach(function(e) {
                    e.addEventListener("click", function(n) {
                        n.preventDefault(),
                        t.tagSearch(e)
                    })
                })
            }
        }, {
            key: "getQueryParams",
            value: function() {
                for (var e = {}, t = new URL(window.location.href).search.substring(1).split("&"), n = 0; n < t.length; n++) {
                    var i = t[n].split("=");
                    e[i[0]] = decodeURIComponent(i[1])
                }
                return e
            }
        }, {
            key: "queryProperties",
            value: function(e, t, n) {
                var i = this
                  , o = this.queryKeyword.split(" ")
                  , r = void 0
                  , a = ["residences in", "residence in", "estates in", "estate in", "condos in", "condo in", "malls in", "mall in", "offices in", "office in", "hotels in", "hotel in", "resorts in", "resort in", "Hotels and resorts in", "Hotel and resort in"].filter(function(e) {
                    return i.queryKeyword.includes(e)
                })
                  , s = e.filter(function(e, n) {
                    var i = e.searchString.filter(function(n) {
                        var i = t.filter(function(e) {
                            return e.startsWith(n) || n.startsWith(e)
                        });
                        if (i.length > 0)
                            return e.sort = i.length,
                            n
                    });
                    if (i.length > 0)
                        return e.sort = i.length,
                        e
                });
                return a.length > 0 ? (o[2] && ("metro" != (r = o[2].toLowerCase()) && "manila" != r || (r = "metro-manila"),
                "visayas" != r && "mindanao" != r || (r = "visayas-and-mindanao")),
                e.filter(function(e, t) {
                    var n = void 0;
                    return e.city && (n = e.city.toLowerCase()),
                    (e.location == r || n == r) && e.property_type == o[0].toLowerCase()
                })) : (t = t.map(function(e) {
                    return "condos" != e && "condo" != e || (e = "residence"),
                    e
                }),
                s)
            }
        }, {
            key: "processProperties",
            value: function(e) {
                return [].concat(de(e)).map(function(e) {
                    return e.searchString = e.post_title.split(" ").map(function(e) {
                        return e.toLowerCase()
                    }),
                    e.searchString.push(e.property_type),
                    e
                })
            }
        }, {
            key: "processArticles",
            value: function(e) {
                return e.map(function(e) {
                    var t = e.tags.map(function(e) {
                        return e.name.split(" ")
                    });
                    return t.length > 0 && (t = t[0].map(function(e) {
                        return e.toLowerCase()
                    })),
                    e.searchString = e.post_title.split(" ").map(function(e) {
                        return e.toLowerCase()
                    }),
                    e.searchString = [].concat(de(e.searchString), de(t)),
                    e
                })
            }
        }, {
            key: "tagSearch",
            value: function(e) {
                var t = e.dataset.tagquery;
                t.length > 0 && "" != t && (window.location.href = "/search-results/?q=" + t)
            }
        }, {
            key: "search",
            value: function(e) {
                var t = e;
                t.length > 0 && "" != t && (window.location.href = "/search-results/?q=" + t)
            }
        }, {
            key: "init",
            value: function() {
                this.getElements(),
                (null != this.searchButtons && null != this.txtSearchDesktop || null != this.txtSearchMobile) && this.bindElements();
                var e = this.getQueryParams();
                if (e.hasOwnProperty("q")) {
                    var t = e.q.toLowerCase().split(" ");
                    this.queryKeyword = e.q.toLowerCase();
                    var n = this.processArticles(window.SEARCH_ARTICLES).filter(function(e, n) {
                        var i = e.searchString.filter(function(e) {
                            if (t.filter(function(t) {
                                return t.startsWith(e) || e.startsWith(t)
                            }).length > 0)
                                return e
                        })
                          , o = e.tags.filter(function(e) {
                            if (t.filter(function(t) {
                                return t == e.slug
                            }).length > 0)
                                return e
                        });
                        if (i.length > 0 || o.length > 0)
                            return e
                    });
                    this.searchTabs[1].innerHTML = "Articles <span >(" + n.length + ")</span>",
                    this.articleresultsJson = n.map(function(e) {
                        return {
                            url: e.url,
                            date: e.date,
                            title: e.post_title,
                            image: e.image,
                            imagealt: e.imagealt,
                            content: e.content
                        }
                    }),
                    window.articleresultsJson = this.articleresultsJson;
                    var i = [].concat(de(window.SEARCH_PROPERTIES.estates), de(window.SEARCH_PROPERTIES.residences));
                    i = this.processProperties(i);
                    var o = [];
                    o = this.queryProperties(i, t, "properties");
                    var r = this.processProperties(window.SEARCH_MALLS)
                      , a = this.processProperties(window.SEARCH_OFFICES)
                      , s = this.processProperties(window.SEARCH_HOTELS_AND_RESORTS)
                      , l = this.queryProperties(r, t, "malls");
                    l && l.map(function(e) {
                        return o.push(e)
                    });
                    var c = this.queryProperties(a, t, "offices");
                    c && c.map(function(e) {
                        return o.push(e)
                    });
                    var u = this.queryProperties(s, t, "hotelsandresorts");
                    u && u.map(function(e) {
                        return o.push(e)
                    });
                    var d = n.length + o.length;
                    if (this.jsSearchHeading.innerHTML = "<span>" + d + "</span> result" + (d > 1 ? "s" : "") + " " + (d > 1 ? "were" : "was") + ' found for <span>"' + e.q + '"</span>',
                    0 != d ? this.searchResultsEmpty.classList.remove("is-active") : this.searchResultsEmpty.classList.add("is-active"),
                    this.searchTabs[0].innerHTML = "Properties <span >(" + o.length + ")</span>",
                    o = o.sort(function(e, t) {
                        return t.sort - e.sort
                    }),
                    this.propertyresultsJson = o.map(function(e) {
                        return {
                            property_type: e.property_type,
                            url: e.url,
                            title: e.post_title,
                            image: e.image,
                            imagealt: e.imagealt,
                            button_label: "hotels-and-resorts" != e.property_type ? e.property_type.toUpperCase().substring(0, e.property_type.length - 1) : e.property_type.toUpperCase().substring(0, e.property_type.indexOf("-") - 1)
                        }
                    }),
                    window.propertyresultsJson = this.propertyresultsJson,
                    null != this.searchResults && 0 != this.searchResults.length) {
                        var f = o.length
                          , h = n.length;
                        0 == f ? 0 != h && (this.searchTabs[1].classList.add("is-active"),
                        this.searchResults[1].classList.add("is-active"),
                        this.searchResults[1].style.opacity = 1) : (this.searchTabs[0].classList.add("is-active"),
                        this.searchResults[0].classList.add("is-active"),
                        this.searchResults[0].style.opacity = 1)
                    }
                }
            }
        }]),
        e
    }()
      , he = function() {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1,
                i.configurable = !0,
                "value"in i && (i.writable = !0),
                Object.defineProperty(e, i.key, i)
            }
        }
        return function(t, n, i) {
            return n && e(t.prototype, n),
            i && e(t, i),
            t
        }
    }();
    var ve = function() {
        function e() {
            !function(e, t) {
                if (!(e instanceof t))
                    throw new TypeError("Cannot call a class as a function")
            }(this, e),
            this.estate = null
        }
        return he(e, [{
            key: "getElements",
            value: function() {
                this.estate = Array.from(document.querySelectorAll(".js-estatehover"))
            }
        }, {
            key: "bindElements",
            value: function() {
                if (console.log("test"),
                this.estate.length > 0)
                    for (var e = 0; e < this.estate.length; e++)
                        document.querySelector(".estate-contbx").addEventListener("mouseover", function(e) {
                            e.target.className.includes("js-estatehover") && window.outerWidth > 924 && document.querySelector(e.target.dataset.target).classList.add("hovered")
                        }),
                        document.querySelector(".estate-contbx").addEventListener("mouseout", function(e) {
                            var t = document.querySelectorAll(".ehover");
                            if (window.outerWidth > 924)
                                for (var n = 0; n < t.length; n++)
                                    t[n].classList.remove("hovered")
                        })
            }
        }, {
            key: "init",
            value: function() {
                this.getElements(),
                this.bindElements()
            }
        }]),
        e
    }()
      , me = (n(10),
    n(11),
    function() {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var i = t[n];
                i.enumerable = i.enumerable || !1,
                i.configurable = !0,
                "value"in i && (i.writable = !0),
                Object.defineProperty(e, i.key, i)
            }
        }
        return function(t, n, i) {
            return n && e(t.prototype, n),
            i && e(t, i),
            t
        }
    }());
    var pe = new (function() {
        function e() {
            !function(e, t) {
                if (!(e instanceof t))
                    throw new TypeError("Cannot call a class as a function")
            }(this, e),
            this.components = []
        }
        return me(e, [{
            key: "component",
            value: function(e) {
                this.components.push(e)
            }
        }, {
            key: "boot",
            value: function() {
                this.components.forEach(function(e) {
                    return e.init()
                })
            }
        }]),
        e
    }());
    pe.component(new a),
    pe.component(new l),
    pe.component(new fe),
    pe.component(new u),
    pe.component(new o),
    pe.component(new v),
    pe.component(new p),
    pe.component(new g),
    pe.component(new k),
    pe.component(new E),
    pe.component(new re),
    pe.component(new ce),
    pe.component(new ve),
    document.addEventListener("DOMContentLoaded", function() {
        return pe.boot()
    })
}
, function(e, t, n) {
    !function() {
        "use strict";
        function t() {
            var e = window
              , t = document;
            if (!("scrollBehavior"in t.documentElement.style && !0 !== e.__forceSmoothScrollPolyfill__)) {
                var n, i = e.HTMLElement || e.Element, o = 468, r = {
                    scroll: e.scroll || e.scrollTo,
                    scrollBy: e.scrollBy,
                    elementScroll: i.prototype.scroll || l,
                    scrollIntoView: i.prototype.scrollIntoView
                }, a = e.performance && e.performance.now ? e.performance.now.bind(e.performance) : Date.now, s = (n = e.navigator.userAgent,
                new RegExp(["MSIE ", "Trident/", "Edge/"].join("|")).test(n) ? 1 : 0);
                e.scroll = e.scrollTo = function() {
                    void 0 !== arguments[0] && (!0 !== c(arguments[0]) ? v.call(e, t.body, void 0 !== arguments[0].left ? ~~arguments[0].left : e.scrollX || e.pageXOffset, void 0 !== arguments[0].top ? ~~arguments[0].top : e.scrollY || e.pageYOffset) : r.scroll.call(e, void 0 !== arguments[0].left ? arguments[0].left : "object" != typeof arguments[0] ? arguments[0] : e.scrollX || e.pageXOffset, void 0 !== arguments[0].top ? arguments[0].top : void 0 !== arguments[1] ? arguments[1] : e.scrollY || e.pageYOffset))
                }
                ,
                e.scrollBy = function() {
                    void 0 !== arguments[0] && (c(arguments[0]) ? r.scrollBy.call(e, void 0 !== arguments[0].left ? arguments[0].left : "object" != typeof arguments[0] ? arguments[0] : 0, void 0 !== arguments[0].top ? arguments[0].top : void 0 !== arguments[1] ? arguments[1] : 0) : v.call(e, t.body, ~~arguments[0].left + (e.scrollX || e.pageXOffset), ~~arguments[0].top + (e.scrollY || e.pageYOffset)))
                }
                ,
                i.prototype.scroll = i.prototype.scrollTo = function() {
                    if (void 0 !== arguments[0])
                        if (!0 !== c(arguments[0])) {
                            var e = arguments[0].left
                              , t = arguments[0].top;
                            v.call(this, this, void 0 === e ? this.scrollLeft : ~~e, void 0 === t ? this.scrollTop : ~~t)
                        } else {
                            if ("number" == typeof arguments[0] && void 0 === arguments[1])
                                throw new SyntaxError("Value could not be converted");
                            r.elementScroll.call(this, void 0 !== arguments[0].left ? ~~arguments[0].left : "object" != typeof arguments[0] ? ~~arguments[0] : this.scrollLeft, void 0 !== arguments[0].top ? ~~arguments[0].top : void 0 !== arguments[1] ? ~~arguments[1] : this.scrollTop)
                        }
                }
                ,
                i.prototype.scrollBy = function() {
                    void 0 !== arguments[0] && (!0 !== c(arguments[0]) ? this.scroll({
                        left: ~~arguments[0].left + this.scrollLeft,
                        top: ~~arguments[0].top + this.scrollTop,
                        behavior: arguments[0].behavior
                    }) : r.elementScroll.call(this, void 0 !== arguments[0].left ? ~~arguments[0].left + this.scrollLeft : ~~arguments[0] + this.scrollLeft, void 0 !== arguments[0].top ? ~~arguments[0].top + this.scrollTop : ~~arguments[1] + this.scrollTop))
                }
                ,
                i.prototype.scrollIntoView = function() {
                    if (!0 !== c(arguments[0])) {
                        var n = function(e) {
                            for (; e !== t.body && !1 === f(e); )
                                e = e.parentNode || e.host;
                            return e
                        }(this)
                          , i = n.getBoundingClientRect()
                          , o = this.getBoundingClientRect();
                        n !== t.body ? (v.call(this, n, n.scrollLeft + o.left - i.left, n.scrollTop + o.top - i.top),
                        "fixed" !== e.getComputedStyle(n).position && e.scrollBy({
                            left: i.left,
                            top: i.top,
                            behavior: "smooth"
                        })) : e.scrollBy({
                            left: o.left,
                            top: o.top,
                            behavior: "smooth"
                        })
                    } else
                        r.scrollIntoView.call(this, void 0 === arguments[0] || arguments[0])
                }
            }
            function l(e, t) {
                this.scrollLeft = e,
                this.scrollTop = t
            }
            function c(e) {
                if (null === e || "object" != typeof e || void 0 === e.behavior || "auto" === e.behavior || "instant" === e.behavior)
                    return !0;
                if ("object" == typeof e && "smooth" === e.behavior)
                    return !1;
                throw new TypeError("behavior member of ScrollOptions " + e.behavior + " is not a valid value for enumeration ScrollBehavior.")
            }
            function u(e, t) {
                return "Y" === t ? e.clientHeight + s < e.scrollHeight : "X" === t ? e.clientWidth + s < e.scrollWidth : void 0
            }
            function d(t, n) {
                var i = e.getComputedStyle(t, null)["overflow" + n];
                return "auto" === i || "scroll" === i
            }
            function f(e) {
                var t = u(e, "Y") && d(e, "Y")
                  , n = u(e, "X") && d(e, "X");
                return t || n
            }
            function h(t) {
                var n, i, r, s, l = (a() - t.startTime) / o;
                s = l = l > 1 ? 1 : l,
                n = .5 * (1 - Math.cos(Math.PI * s)),
                i = t.startX + (t.x - t.startX) * n,
                r = t.startY + (t.y - t.startY) * n,
                t.method.call(t.scrollable, i, r),
                i === t.x && r === t.y || e.requestAnimationFrame(h.bind(e, t))
            }
            function v(n, i, o) {
                var s, c, u, d, f = a();
                n === t.body ? (s = e,
                c = e.scrollX || e.pageXOffset,
                u = e.scrollY || e.pageYOffset,
                d = r.scroll) : (s = n,
                c = n.scrollLeft,
                u = n.scrollTop,
                d = l),
                h({
                    scrollable: s,
                    method: d,
                    startTime: f,
                    startX: c,
                    startY: u,
                    x: i,
                    y: o
                })
            }
        }
        e.exports = {
            polyfill: t
        }
    }()
}
, function(e, t, n) {
    (function(n) {
        var i, o, r;
        "undefined" != typeof window && window,
        o = [],
        void 0 === (r = "function" == typeof (i = function() {
            var e = function(t, n) {
                "use strict";
                var i = Object.create(e.prototype)
                  , o = 0
                  , r = 0
                  , a = 0
                  , s = 0
                  , l = []
                  , c = !0
                  , u = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.msRequestAnimationFrame || window.oRequestAnimationFrame || function(e) {
                    return setTimeout(e, 1e3 / 60)
                }
                  , d = null
                  , f = !1;
                try {
                    var h = Object.defineProperty({}, "passive", {
                        get: function() {
                            f = !0
                        }
                    });
                    window.addEventListener("testPassive", null, h),
                    window.removeEventListener("testPassive", null, h)
                } catch (e) {}
                var v = window.cancelAnimationFrame || window.mozCancelAnimationFrame || clearTimeout
                  , m = window.transformProp || function() {
                    var e = document.createElement("div");
                    if (null === e.style.transform) {
                        var t = ["Webkit", "Moz", "ms"];
                        for (var n in t)
                            if (void 0 !== e.style[t[n] + "Transform"])
                                return t[n] + "Transform"
                    }
                    return "transform"
                }();
                i.options = {
                    speed: -2,
                    verticalSpeed: null,
                    horizontalSpeed: null,
                    breakpoints: [576, 768, 1201],
                    center: !1,
                    wrapper: null,
                    relativeToWrapper: !1,
                    round: !0,
                    vertical: !0,
                    horizontal: !1,
                    verticalScrollAxis: "y",
                    horizontalScrollAxis: "x",
                    callback: function() {}
                },
                n && Object.keys(n).forEach(function(e) {
                    i.options[e] = n[e]
                }),
                n && n.breakpoints && function() {
                    if (3 === i.options.breakpoints.length && Array.isArray(i.options.breakpoints)) {
                        var e, t = !0, n = !0;
                        if (i.options.breakpoints.forEach(function(i) {
                            "number" != typeof i && (n = !1),
                            null !== e && i < e && (t = !1),
                            e = i
                        }),
                        t && n)
                            return
                    }
                    i.options.breakpoints = [576, 768, 1201],
                    console.warn("Rellax: You must pass an array of 3 numbers in ascending order to the breakpoints option. Defaults reverted")
                }(),
                t || (t = ".rellax");
                var p = "string" == typeof t ? document.querySelectorAll(t) : [t];
                if (p.length > 0) {
                    if (i.elems = p,
                    i.options.wrapper && !i.options.wrapper.nodeType) {
                        var y = document.querySelector(i.options.wrapper);
                        if (!y)
                            return void console.warn("Rellax: The wrapper you're trying to use doesn't exist.");
                        i.options.wrapper = y
                    }
                    var g, b = function() {
                        for (var e = 0; e < l.length; e++)
                            i.elems[e].style.cssText = l[e].style;
                        var t, n;
                        l = [],
                        r = window.innerHeight,
                        s = window.innerWidth,
                        t = s,
                        n = i.options.breakpoints,
                        g = t < n[0] ? "xs" : t >= n[0] && t < n[1] ? "sm" : t >= n[1] && t < n[2] ? "md" : "lg",
                        w(),
                        function() {
                            for (var e = 0; e < i.elems.length; e++) {
                                var t = k(i.elems[e]);
                                l.push(t)
                            }
                        }(),
                        S(),
                        c && (window.addEventListener("resize", b),
                        c = !1,
                        L())
                    }, k = function(e) {
                        var t, n = e.getAttribute("data-rellax-percentage"), o = e.getAttribute("data-rellax-speed"), a = e.getAttribute("data-rellax-xs-speed"), l = e.getAttribute("data-rellax-mobile-speed"), c = e.getAttribute("data-rellax-tablet-speed"), u = e.getAttribute("data-rellax-desktop-speed"), d = e.getAttribute("data-rellax-vertical-speed"), f = e.getAttribute("data-rellax-horizontal-speed"), h = e.getAttribute("data-rellax-vertical-scroll-axis"), v = e.getAttribute("data-rellax-horizontal-scroll-axis"), m = e.getAttribute("data-rellax-zindex") || 0, p = e.getAttribute("data-rellax-min"), y = e.getAttribute("data-rellax-max"), b = e.getAttribute("data-rellax-min-x"), k = e.getAttribute("data-rellax-max-x"), w = e.getAttribute("data-rellax-min-y"), x = e.getAttribute("data-rellax-max-y"), L = !0;
                        a || l || c || u ? t = {
                            xs: a,
                            sm: l,
                            md: c,
                            lg: u
                        } : L = !1;
                        var S = i.options.wrapper ? i.options.wrapper.scrollTop : window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
                        i.options.relativeToWrapper && (S = (window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop) - i.options.wrapper.offsetTop);
                        var A = i.options.vertical && (n || i.options.center) ? S : 0
                          , T = i.options.horizontal && (n || i.options.center) ? i.options.wrapper ? i.options.wrapper.scrollLeft : window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft : 0
                          , C = A + e.getBoundingClientRect().top
                          , B = e.clientHeight || e.offsetHeight || e.scrollHeight
                          , M = T + e.getBoundingClientRect().left
                          , O = e.clientWidth || e.offsetWidth || e.scrollWidth
                          , j = n || (A - C + r) / (B + r)
                          , q = n || (T - M + s) / (O + s);
                        i.options.center && (q = .5,
                        j = .5);
                        var I = L && null !== t[g] ? Number(t[g]) : o || i.options.speed
                          , P = d || i.options.verticalSpeed
                          , _ = f || i.options.horizontalSpeed
                          , H = h || i.options.verticalScrollAxis
                          , R = v || i.options.horizontalScrollAxis
                          , D = E(q, j, I, P, _)
                          , W = e.style.cssText
                          , N = ""
                          , z = /transform\s*:/i.exec(W);
                        if (z) {
                            var Y = z.index
                              , F = W.slice(Y)
                              , X = F.indexOf(";");
                            N = X ? " " + F.slice(11, X).replace(/\s/g, "") : " " + F.slice(11).replace(/\s/g, "")
                        }
                        return {
                            baseX: D.x,
                            baseY: D.y,
                            top: C,
                            left: M,
                            height: B,
                            width: O,
                            speed: I,
                            verticalSpeed: P,
                            horizontalSpeed: _,
                            verticalScrollAxis: H,
                            horizontalScrollAxis: R,
                            style: W,
                            transform: N,
                            zindex: m,
                            min: p,
                            max: y,
                            minX: b,
                            maxX: k,
                            minY: w,
                            maxY: x
                        }
                    }, w = function() {
                        var e = o
                          , t = a;
                        if (o = i.options.wrapper ? i.options.wrapper.scrollTop : (document.documentElement || document.body.parentNode || document.body).scrollTop || window.pageYOffset,
                        a = i.options.wrapper ? i.options.wrapper.scrollLeft : (document.documentElement || document.body.parentNode || document.body).scrollLeft || window.pageXOffset,
                        i.options.relativeToWrapper) {
                            var n = (document.documentElement || document.body.parentNode || document.body).scrollTop || window.pageYOffset;
                            o = n - i.options.wrapper.offsetTop
                        }
                        return !(e == o || !i.options.vertical) || !(t == a || !i.options.horizontal)
                    }, E = function(e, t, n, o, r) {
                        var a = {}
                          , s = (r || n) * (100 * (1 - e))
                          , l = (o || n) * (100 * (1 - t));
                        return a.x = i.options.round ? Math.round(s) : Math.round(100 * s) / 100,
                        a.y = i.options.round ? Math.round(l) : Math.round(100 * l) / 100,
                        a
                    }, x = function() {
                        window.removeEventListener("resize", x),
                        window.removeEventListener("orientationchange", x),
                        (i.options.wrapper ? i.options.wrapper : window).removeEventListener("scroll", x),
                        (i.options.wrapper ? i.options.wrapper : document).removeEventListener("touchmove", x),
                        d = u(L)
                    }, L = function() {
                        w() && !1 === c ? (S(),
                        d = u(L)) : (d = null,
                        window.addEventListener("resize", x),
                        window.addEventListener("orientationchange", x),
                        (i.options.wrapper ? i.options.wrapper : window).addEventListener("scroll", x, !!f && {
                            passive: !0
                        }),
                        (i.options.wrapper ? i.options.wrapper : document).addEventListener("touchmove", x, !!f && {
                            passive: !0
                        }))
                    }, S = function() {
                        for (var e, t = 0; t < i.elems.length; t++) {
                            var n = l[t].verticalScrollAxis.toLowerCase()
                              , c = l[t].horizontalScrollAxis.toLowerCase()
                              , u = -1 != n.indexOf("x") ? o : 0
                              , d = -1 != n.indexOf("y") ? o : 0
                              , f = -1 != c.indexOf("x") ? a : 0
                              , h = (d + (-1 != c.indexOf("y") ? a : 0) - l[t].top + r) / (l[t].height + r)
                              , v = (u + f - l[t].left + s) / (l[t].width + s)
                              , p = (e = E(v, h, l[t].speed, l[t].verticalSpeed, l[t].horizontalSpeed)).y - l[t].baseY
                              , y = e.x - l[t].baseX;
                            null !== l[t].min && (i.options.vertical && !i.options.horizontal && (p = p <= l[t].min ? l[t].min : p),
                            i.options.horizontal && !i.options.vertical && (y = y <= l[t].min ? l[t].min : y)),
                            null != l[t].minY && (p = p <= l[t].minY ? l[t].minY : p),
                            null != l[t].minX && (y = y <= l[t].minX ? l[t].minX : y),
                            null !== l[t].max && (i.options.vertical && !i.options.horizontal && (p = p >= l[t].max ? l[t].max : p),
                            i.options.horizontal && !i.options.vertical && (y = y >= l[t].max ? l[t].max : y)),
                            null != l[t].maxY && (p = p >= l[t].maxY ? l[t].maxY : p),
                            null != l[t].maxX && (y = y >= l[t].maxX ? l[t].maxX : y);
                            var g = l[t].zindex
                              , b = "translate3d(" + (i.options.horizontal ? y : "0") + "px," + (i.options.vertical ? p : "0") + "px," + g + "px) " + l[t].transform;
                            i.elems[t].style[m] = b
                        }
                        i.options.callback(e)
                    };
                    return i.destroy = function() {
                        for (var e = 0; e < i.elems.length; e++)
                            i.elems[e].style.cssText = l[e].style;
                        c || (window.removeEventListener("resize", b),
                        c = !0),
                        v(d),
                        d = null
                    }
                    ,
                    b(),
                    i.refresh = b,
                    i
                }
                console.warn("Rellax: The elements you're trying to select don't exist.")
            };
            return e
        }
        ) ? i.apply(t, o) : i) || (e.exports = r)
    }
    ).call(t, n(0))
}
, function(e, t) {
    window.onload = function(e) {
        var t = (new Date).getTime()
          , n = document.getElementById("js-cookie");
        null === localStorage.getItem("cookies") ? (n.classList.add("is-active"),
        localStorage.setItem("cookies", !0),
        localStorage.setItem("setupTime", t)) : (n.classList.remove("is-active"),
        t - localStorage.getItem("setupTime") > 864e5 && (localStorage.clear(),
        localStorage.setItem("setupTime", t)))
    }
}
, function(e, t) {
    document.addEventListener("click", function(e) {
        e.target.matches(".js-linkDelay") && (e.preventDefault(),
        setTimeout(function() {
            location.href = e.target.href
        }, 500))
    }, !1)
}
, function(e, t) {}
]);
