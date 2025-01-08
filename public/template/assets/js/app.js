/**
 * SimpleBar.js - v5.3.0
 * Scrollbars, simpler.
 * https://grsmto.github.io/simplebar/
 *
 * Made by Adrien Denat from a fork by Jonathan Nicol
 * Under MIT License
 */

!(function (t, e) {
    "object" == typeof exports && "undefined" != typeof module
        ? (module.exports = e())
        : "function" == typeof define && define.amd
        ? define(e)
        : ((t = t || self).SimpleBar = e());
})(this, function () {
    "use strict";
    var t =
        "undefined" != typeof globalThis
            ? globalThis
            : "undefined" != typeof window
            ? window
            : "undefined" != typeof global
            ? global
            : "undefined" != typeof self
            ? self
            : {};
    function e(t, e) {
        return t((e = { exports: {} }), e.exports), e.exports;
    }
    var r,
        n,
        i,
        o = "object",
        s = function (t) {
            return t && t.Math == Math && t;
        },
        a =
            s(typeof globalThis == o && globalThis) ||
            s(typeof window == o && window) ||
            s(typeof self == o && self) ||
            s(typeof t == o && t) ||
            Function("return this")(),
        c = function (t) {
            try {
                return !!t();
            } catch (t) {
                return !0;
            }
        },
        l = !c(function () {
            return (
                7 !=
                Object.defineProperty({}, "a", {
                    get: function () {
                        return 7;
                    },
                }).a
            );
        }),
        u = {}.propertyIsEnumerable,
        f = Object.getOwnPropertyDescriptor,
        h = {
            f:
                f && !u.call({ 1: 2 }, 1)
                    ? function (t) {
                          var e = f(this, t);
                          return !!e && e.enumerable;
                      }
                    : u,
        },
        d = function (t, e) {
            return {
                enumerable: !(1 & t),
                configurable: !(2 & t),
                writable: !(4 & t),
                value: e,
            };
        },
        p = {}.toString,
        v = function (t) {
            return p.call(t).slice(8, -1);
        },
        g = "".split,
        y = c(function () {
            return !Object("z").propertyIsEnumerable(0);
        })
            ? function (t) {
                  return "String" == v(t) ? g.call(t, "") : Object(t);
              }
            : Object,
        b = function (t) {
            if (null == t) throw TypeError("Can't call method on " + t);
            return t;
        },
        m = function (t) {
            return y(b(t));
        },
        x = function (t) {
            return "object" == typeof t ? null !== t : "function" == typeof t;
        },
        E = function (t, e) {
            if (!x(t)) return t;
            var r, n;
            if (
                e &&
                "function" == typeof (r = t.toString) &&
                !x((n = r.call(t)))
            )
                return n;
            if ("function" == typeof (r = t.valueOf) && !x((n = r.call(t))))
                return n;
            if (
                !e &&
                "function" == typeof (r = t.toString) &&
                !x((n = r.call(t)))
            )
                return n;
            throw TypeError("Can't convert object to primitive value");
        },
        w = {}.hasOwnProperty,
        O = function (t, e) {
            return w.call(t, e);
        },
        _ = a.document,
        S = x(_) && x(_.createElement),
        A = function (t) {
            return S ? _.createElement(t) : {};
        },
        k =
            !l &&
            !c(function () {
                return (
                    7 !=
                    Object.defineProperty(A("div"), "a", {
                        get: function () {
                            return 7;
                        },
                    }).a
                );
            }),
        L = Object.getOwnPropertyDescriptor,
        M = {
            f: l
                ? L
                : function (t, e) {
                      if (((t = m(t)), (e = E(e, !0)), k))
                          try {
                              return L(t, e);
                          } catch (t) {}
                      if (O(t, e)) return d(!h.f.call(t, e), t[e]);
                  },
        },
        T = function (t) {
            if (!x(t)) throw TypeError(String(t) + " is not an object");
            return t;
        },
        j = Object.defineProperty,
        R = {
            f: l
                ? j
                : function (t, e, r) {
                      if ((T(t), (e = E(e, !0)), T(r), k))
                          try {
                              return j(t, e, r);
                          } catch (t) {}
                      if ("get" in r || "set" in r)
                          throw TypeError("Accessors not supported");
                      return "value" in r && (t[e] = r.value), t;
                  },
        },
        W = l
            ? function (t, e, r) {
                  return R.f(t, e, d(1, r));
              }
            : function (t, e, r) {
                  return (t[e] = r), t;
              },
        z = function (t, e) {
            try {
                W(a, t, e);
            } catch (r) {
                a[t] = e;
            }
            return e;
        },
        C = e(function (t) {
            var e = a["__core-js_shared__"] || z("__core-js_shared__", {});
            (t.exports = function (t, r) {
                return e[t] || (e[t] = void 0 !== r ? r : {});
            })("versions", []).push({
                version: "3.2.1",
                mode: "global",
                copyright: "© 2019 Denis Pushkarev (zloirock.ru)",
            });
        }),
        N = C("native-function-to-string", Function.toString),
        I = a.WeakMap,
        D = "function" == typeof I && /native code/.test(N.call(I)),
        P = 0,
        V = Math.random(),
        F = function (t) {
            return (
                "Symbol(" +
                String(void 0 === t ? "" : t) +
                ")_" +
                (++P + V).toString(36)
            );
        },
        B = C("keys"),
        H = function (t) {
            return B[t] || (B[t] = F(t));
        },
        q = {},
        $ = a.WeakMap;
    if (D) {
        var X = new $(),
            Y = X.get,
            G = X.has,
            U = X.set;
        (r = function (t, e) {
            return U.call(X, t, e), e;
        }),
            (n = function (t) {
                return Y.call(X, t) || {};
            }),
            (i = function (t) {
                return G.call(X, t);
            });
    } else {
        var Q = H("state");
        (q[Q] = !0),
            (r = function (t, e) {
                return W(t, Q, e), e;
            }),
            (n = function (t) {
                return O(t, Q) ? t[Q] : {};
            }),
            (i = function (t) {
                return O(t, Q);
            });
    }
    var K = {
            set: r,
            get: n,
            has: i,
            enforce: function (t) {
                return i(t) ? n(t) : r(t, {});
            },
            getterFor: function (t) {
                return function (e) {
                    var r;
                    if (!x(e) || (r = n(e)).type !== t)
                        throw TypeError(
                            "Incompatible receiver, " + t + " required"
                        );
                    return r;
                };
            },
        },
        J = e(function (t) {
            var e = K.get,
                r = K.enforce,
                n = String(N).split("toString");
            C("inspectSource", function (t) {
                return N.call(t);
            }),
                (t.exports = function (t, e, i, o) {
                    var s = !!o && !!o.unsafe,
                        c = !!o && !!o.enumerable,
                        l = !!o && !!o.noTargetGet;
                    "function" == typeof i &&
                        ("string" != typeof e ||
                            O(i, "name") ||
                            W(i, "name", e),
                        (r(i).source = n.join("string" == typeof e ? e : ""))),
                        t !== a
                            ? (s ? !l && t[e] && (c = !0) : delete t[e],
                              c ? (t[e] = i) : W(t, e, i))
                            : c
                            ? (t[e] = i)
                            : z(e, i);
                })(Function.prototype, "toString", function () {
                    return (
                        ("function" == typeof this && e(this).source) ||
                        N.call(this)
                    );
                });
        }),
        Z = a,
        tt = function (t) {
            return "function" == typeof t ? t : void 0;
        },
        et = function (t, e) {
            return arguments.length < 2
                ? tt(Z[t]) || tt(a[t])
                : (Z[t] && Z[t][e]) || (a[t] && a[t][e]);
        },
        rt = Math.ceil,
        nt = Math.floor,
        it = function (t) {
            return isNaN((t = +t)) ? 0 : (t > 0 ? nt : rt)(t);
        },
        ot = Math.min,
        st = function (t) {
            return t > 0 ? ot(it(t), 9007199254740991) : 0;
        },
        at = Math.max,
        ct = Math.min,
        lt = function (t) {
            return function (e, r, n) {
                var i,
                    o = m(e),
                    s = st(o.length),
                    a = (function (t, e) {
                        var r = it(t);
                        return r < 0 ? at(r + e, 0) : ct(r, e);
                    })(n, s);
                if (t && r != r) {
                    for (; s > a; ) if ((i = o[a++]) != i) return !0;
                } else
                    for (; s > a; a++)
                        if ((t || a in o) && o[a] === r) return t || a || 0;
                return !t && -1;
            };
        },
        ut = { includes: lt(!0), indexOf: lt(!1) }.indexOf,
        ft = function (t, e) {
            var r,
                n = m(t),
                i = 0,
                o = [];
            for (r in n) !O(q, r) && O(n, r) && o.push(r);
            for (; e.length > i; )
                O(n, (r = e[i++])) && (~ut(o, r) || o.push(r));
            return o;
        },
        ht = [
            "constructor",
            "hasOwnProperty",
            "isPrototypeOf",
            "propertyIsEnumerable",
            "toLocaleString",
            "toString",
            "valueOf",
        ],
        dt = ht.concat("length", "prototype"),
        pt = {
            f:
                Object.getOwnPropertyNames ||
                function (t) {
                    return ft(t, dt);
                },
        },
        vt = { f: Object.getOwnPropertySymbols },
        gt =
            et("Reflect", "ownKeys") ||
            function (t) {
                var e = pt.f(T(t)),
                    r = vt.f;
                return r ? e.concat(r(t)) : e;
            },
        yt = function (t, e) {
            for (var r = gt(e), n = R.f, i = M.f, o = 0; o < r.length; o++) {
                var s = r[o];
                O(t, s) || n(t, s, i(e, s));
            }
        },
        bt = /#|\.prototype\./,
        mt = function (t, e) {
            var r = Et[xt(t)];
            return (
                r == Ot || (r != wt && ("function" == typeof e ? c(e) : !!e))
            );
        },
        xt = (mt.normalize = function (t) {
            return String(t).replace(bt, ".").toLowerCase();
        }),
        Et = (mt.data = {}),
        wt = (mt.NATIVE = "N"),
        Ot = (mt.POLYFILL = "P"),
        _t = mt,
        St = M.f,
        At = function (t, e) {
            var r,
                n,
                i,
                o,
                s,
                c = t.target,
                l = t.global,
                u = t.stat;
            if ((r = l ? a : u ? a[c] || z(c, {}) : (a[c] || {}).prototype))
                for (n in e) {
                    if (
                        ((o = e[n]),
                        (i = t.noTargetGet ? (s = St(r, n)) && s.value : r[n]),
                        !_t(l ? n : c + (u ? "." : "#") + n, t.forced) &&
                            void 0 !== i)
                    ) {
                        if (typeof o == typeof i) continue;
                        yt(o, i);
                    }
                    (t.sham || (i && i.sham)) && W(o, "sham", !0),
                        J(r, n, o, t);
                }
        },
        kt = function (t) {
            if ("function" != typeof t)
                throw TypeError(String(t) + " is not a function");
            return t;
        },
        Lt = function (t, e, r) {
            if ((kt(t), void 0 === e)) return t;
            switch (r) {
                case 0:
                    return function () {
                        return t.call(e);
                    };
                case 1:
                    return function (r) {
                        return t.call(e, r);
                    };
                case 2:
                    return function (r, n) {
                        return t.call(e, r, n);
                    };
                case 3:
                    return function (r, n, i) {
                        return t.call(e, r, n, i);
                    };
            }
            return function () {
                return t.apply(e, arguments);
            };
        },
        Mt = function (t) {
            return Object(b(t));
        },
        Tt =
            Array.isArray ||
            function (t) {
                return "Array" == v(t);
            },
        jt =
            !!Object.getOwnPropertySymbols &&
            !c(function () {
                return !String(Symbol());
            }),
        Rt = a.Symbol,
        Wt = C("wks"),
        zt = function (t) {
            return (
                Wt[t] || (Wt[t] = (jt && Rt[t]) || (jt ? Rt : F)("Symbol." + t))
            );
        },
        Ct = zt("species"),
        Nt = function (t, e) {
            var r;
            return (
                Tt(t) &&
                    ("function" != typeof (r = t.constructor) ||
                    (r !== Array && !Tt(r.prototype))
                        ? x(r) && null === (r = r[Ct]) && (r = void 0)
                        : (r = void 0)),
                new (void 0 === r ? Array : r)(0 === e ? 0 : e)
            );
        },
        It = [].push,
        Dt = function (t) {
            var e = 1 == t,
                r = 2 == t,
                n = 3 == t,
                i = 4 == t,
                o = 6 == t,
                s = 5 == t || o;
            return function (a, c, l, u) {
                for (
                    var f,
                        h,
                        d = Mt(a),
                        p = y(d),
                        v = Lt(c, l, 3),
                        g = st(p.length),
                        b = 0,
                        m = u || Nt,
                        x = e ? m(a, g) : r ? m(a, 0) : void 0;
                    g > b;
                    b++
                )
                    if ((s || b in p) && ((h = v((f = p[b]), b, d)), t))
                        if (e) x[b] = h;
                        else if (h)
                            switch (t) {
                                case 3:
                                    return !0;
                                case 5:
                                    return f;
                                case 6:
                                    return b;
                                case 2:
                                    It.call(x, f);
                            }
                        else if (i) return !1;
                return o ? -1 : n || i ? i : x;
            };
        },
        Pt = {
            forEach: Dt(0),
            map: Dt(1),
            filter: Dt(2),
            some: Dt(3),
            every: Dt(4),
            find: Dt(5),
            findIndex: Dt(6),
        },
        Vt = function (t, e) {
            var r = [][t];
            return (
                !r ||
                !c(function () {
                    r.call(
                        null,
                        e ||
                            function () {
                                throw 1;
                            },
                        1
                    );
                })
            );
        },
        Ft = Pt.forEach,
        Bt = Vt("forEach")
            ? function (t) {
                  return Ft(
                      this,
                      t,
                      arguments.length > 1 ? arguments[1] : void 0
                  );
              }
            : [].forEach;
    At(
        { target: "Array", proto: !0, forced: [].forEach != Bt },
        { forEach: Bt }
    );
    var Ht = {
        CSSRuleList: 0,
        CSSStyleDeclaration: 0,
        CSSValueList: 0,
        ClientRectList: 0,
        DOMRectList: 0,
        DOMStringList: 0,
        DOMTokenList: 1,
        DataTransferItemList: 0,
        FileList: 0,
        HTMLAllCollection: 0,
        HTMLCollection: 0,
        HTMLFormElement: 0,
        HTMLSelectElement: 0,
        MediaList: 0,
        MimeTypeArray: 0,
        NamedNodeMap: 0,
        NodeList: 1,
        PaintRequestList: 0,
        Plugin: 0,
        PluginArray: 0,
        SVGLengthList: 0,
        SVGNumberList: 0,
        SVGPathSegList: 0,
        SVGPointList: 0,
        SVGStringList: 0,
        SVGTransformList: 0,
        SourceBufferList: 0,
        StyleSheetList: 0,
        TextTrackCueList: 0,
        TextTrackList: 0,
        TouchList: 0,
    };
    for (var qt in Ht) {
        var $t = a[qt],
            Xt = $t && $t.prototype;
        if (Xt && Xt.forEach !== Bt)
            try {
                W(Xt, "forEach", Bt);
            } catch (t) {
                Xt.forEach = Bt;
            }
    }
    var Yt = !(
            "undefined" == typeof window ||
            !window.document ||
            !window.document.createElement
        ),
        Gt = zt("species"),
        Ut = Pt.filter;
    At(
        {
            target: "Array",
            proto: !0,
            forced: !(function (t) {
                return !c(function () {
                    var e = [];
                    return (
                        ((e.constructor = {})[Gt] = function () {
                            return { foo: 1 };
                        }),
                        1 !== e[t](Boolean).foo
                    );
                });
            })("filter"),
        },
        {
            filter: function (t) {
                return Ut(
                    this,
                    t,
                    arguments.length > 1 ? arguments[1] : void 0
                );
            },
        }
    );
    var Qt =
            Object.keys ||
            function (t) {
                return ft(t, ht);
            },
        Kt = l
            ? Object.defineProperties
            : function (t, e) {
                  T(t);
                  for (var r, n = Qt(e), i = n.length, o = 0; i > o; )
                      R.f(t, (r = n[o++]), e[r]);
                  return t;
              },
        Jt = et("document", "documentElement"),
        Zt = H("IE_PROTO"),
        te = function () {},
        ee = function () {
            var t,
                e = A("iframe"),
                r = ht.length;
            for (
                e.style.display = "none",
                    Jt.appendChild(e),
                    e.src = String("javascript:"),
                    (t = e.contentWindow.document).open(),
                    t.write("<script>document.F=Object</script>"),
                    t.close(),
                    ee = t.F;
                r--;

            )
                delete ee.prototype[ht[r]];
            return ee();
        },
        re =
            Object.create ||
            function (t, e) {
                var r;
                return (
                    null !== t
                        ? ((te.prototype = T(t)),
                          (r = new te()),
                          (te.prototype = null),
                          (r[Zt] = t))
                        : (r = ee()),
                    void 0 === e ? r : Kt(r, e)
                );
            };
    q[Zt] = !0;
    var ne = zt("unscopables"),
        ie = Array.prototype;
    null == ie[ne] && W(ie, ne, re(null));
    var oe,
        se,
        ae,
        ce = function (t) {
            ie[ne][t] = !0;
        },
        le = {},
        ue = !c(function () {
            function t() {}
            return (
                (t.prototype.constructor = null),
                Object.getPrototypeOf(new t()) !== t.prototype
            );
        }),
        fe = H("IE_PROTO"),
        he = Object.prototype,
        de = ue
            ? Object.getPrototypeOf
            : function (t) {
                  return (
                      (t = Mt(t)),
                      O(t, fe)
                          ? t[fe]
                          : "function" == typeof t.constructor &&
                            t instanceof t.constructor
                          ? t.constructor.prototype
                          : t instanceof Object
                          ? he
                          : null
                  );
              },
        pe = zt("iterator"),
        ve = !1;
    [].keys &&
        ("next" in (ae = [].keys())
            ? (se = de(de(ae))) !== Object.prototype && (oe = se)
            : (ve = !0)),
        null == oe && (oe = {}),
        O(oe, pe) ||
            W(oe, pe, function () {
                return this;
            });
    var ge = { IteratorPrototype: oe, BUGGY_SAFARI_ITERATORS: ve },
        ye = R.f,
        be = zt("toStringTag"),
        me = function (t, e, r) {
            t &&
                !O((t = r ? t : t.prototype), be) &&
                ye(t, be, { configurable: !0, value: e });
        },
        xe = ge.IteratorPrototype,
        Ee = function () {
            return this;
        },
        we =
            Object.setPrototypeOf ||
            ("__proto__" in {}
                ? (function () {
                      var t,
                          e = !1,
                          r = {};
                      try {
                          (t = Object.getOwnPropertyDescriptor(
                              Object.prototype,
                              "__proto__"
                          ).set).call(r, []),
                              (e = r instanceof Array);
                      } catch (t) {}
                      return function (r, n) {
                          return (
                              T(r),
                              (function (t) {
                                  if (!x(t) && null !== t)
                                      throw TypeError(
                                          "Can't set " +
                                              String(t) +
                                              " as a prototype"
                                      );
                              })(n),
                              e ? t.call(r, n) : (r.__proto__ = n),
                              r
                          );
                      };
                  })()
                : void 0),
        Oe = ge.IteratorPrototype,
        _e = ge.BUGGY_SAFARI_ITERATORS,
        Se = zt("iterator"),
        Ae = function () {
            return this;
        },
        ke = function (t, e, r, n, i, o, s) {
            !(function (t, e, r) {
                var n = e + " Iterator";
                (t.prototype = re(xe, { next: d(1, r) })),
                    me(t, n, !1),
                    (le[n] = Ee);
            })(r, e, n);
            var a,
                c,
                l,
                u = function (t) {
                    if (t === i && g) return g;
                    if (!_e && t in p) return p[t];
                    switch (t) {
                        case "keys":
                        case "values":
                        case "entries":
                            return function () {
                                return new r(this, t);
                            };
                    }
                    return function () {
                        return new r(this);
                    };
                },
                f = e + " Iterator",
                h = !1,
                p = t.prototype,
                v = p[Se] || p["@@iterator"] || (i && p[i]),
                g = (!_e && v) || u(i),
                y = ("Array" == e && p.entries) || v;
            if (
                (y &&
                    ((a = de(y.call(new t()))),
                    Oe !== Object.prototype &&
                        a.next &&
                        (de(a) !== Oe &&
                            (we
                                ? we(a, Oe)
                                : "function" != typeof a[Se] && W(a, Se, Ae)),
                        me(a, f, !0))),
                "values" == i &&
                    v &&
                    "values" !== v.name &&
                    ((h = !0),
                    (g = function () {
                        return v.call(this);
                    })),
                p[Se] !== g && W(p, Se, g),
                (le[e] = g),
                i)
            )
                if (
                    ((c = {
                        values: u("values"),
                        keys: o ? g : u("keys"),
                        entries: u("entries"),
                    }),
                    s)
                )
                    for (l in c) (!_e && !h && l in p) || J(p, l, c[l]);
                else At({ target: e, proto: !0, forced: _e || h }, c);
            return c;
        },
        Le = K.set,
        Me = K.getterFor("Array Iterator"),
        Te = ke(
            Array,
            "Array",
            function (t, e) {
                Le(this, {
                    type: "Array Iterator",
                    target: m(t),
                    index: 0,
                    kind: e,
                });
            },
            function () {
                var t = Me(this),
                    e = t.target,
                    r = t.kind,
                    n = t.index++;
                return !e || n >= e.length
                    ? ((t.target = void 0), { value: void 0, done: !0 })
                    : "keys" == r
                    ? { value: n, done: !1 }
                    : "values" == r
                    ? { value: e[n], done: !1 }
                    : { value: [n, e[n]], done: !1 };
            },
            "values"
        );
    (le.Arguments = le.Array), ce("keys"), ce("values"), ce("entries");
    var je = Object.assign,
        Re =
            !je ||
            c(function () {
                var t = {},
                    e = {},
                    r = Symbol();
                return (
                    (t[r] = 7),
                    "abcdefghijklmnopqrst".split("").forEach(function (t) {
                        e[t] = t;
                    }),
                    7 != je({}, t)[r] ||
                        "abcdefghijklmnopqrst" != Qt(je({}, e)).join("")
                );
            })
                ? function (t, e) {
                      for (
                          var r = Mt(t),
                              n = arguments.length,
                              i = 1,
                              o = vt.f,
                              s = h.f;
                          n > i;

                      )
                          for (
                              var a,
                                  c = y(arguments[i++]),
                                  u = o ? Qt(c).concat(o(c)) : Qt(c),
                                  f = u.length,
                                  d = 0;
                              f > d;

                          )
                              (a = u[d++]),
                                  (l && !s.call(c, a)) || (r[a] = c[a]);
                      return r;
                  }
                : je;
    At(
        { target: "Object", stat: !0, forced: Object.assign !== Re },
        { assign: Re }
    );
    var We = zt("toStringTag"),
        ze =
            "Arguments" ==
            v(
                (function () {
                    return arguments;
                })()
            ),
        Ce = function (t) {
            var e, r, n;
            return void 0 === t
                ? "Undefined"
                : null === t
                ? "Null"
                : "string" ==
                  typeof (r = (function (t, e) {
                      try {
                          return t[e];
                      } catch (t) {}
                  })((e = Object(t)), We))
                ? r
                : ze
                ? v(e)
                : "Object" == (n = v(e)) && "function" == typeof e.callee
                ? "Arguments"
                : n;
        },
        Ne = {};
    Ne[zt("toStringTag")] = "z";
    var Ie =
            "[object z]" !== String(Ne)
                ? function () {
                      return "[object " + Ce(this) + "]";
                  }
                : Ne.toString,
        De = Object.prototype;
    Ie !== De.toString && J(De, "toString", Ie, { unsafe: !0 });
    var Pe = "\t\n\v\f\r                　\u2028\u2029\ufeff",
        Ve = "[" + Pe + "]",
        Fe = RegExp("^" + Ve + Ve + "*"),
        Be = RegExp(Ve + Ve + "*$"),
        He = function (t) {
            return function (e) {
                var r = String(b(e));
                return (
                    1 & t && (r = r.replace(Fe, "")),
                    2 & t && (r = r.replace(Be, "")),
                    r
                );
            };
        },
        qe = { start: He(1), end: He(2), trim: He(3) }.trim,
        $e = a.parseInt,
        Xe = /^[+-]?0[Xx]/,
        Ye =
            8 !== $e(Pe + "08") || 22 !== $e(Pe + "0x16")
                ? function (t, e) {
                      var r = qe(String(t));
                      return $e(r, e >>> 0 || (Xe.test(r) ? 16 : 10));
                  }
                : $e;
    At({ global: !0, forced: parseInt != Ye }, { parseInt: Ye });
    var Ge = function (t) {
            return function (e, r) {
                var n,
                    i,
                    o = String(b(e)),
                    s = it(r),
                    a = o.length;
                return s < 0 || s >= a
                    ? t
                        ? ""
                        : void 0
                    : (n = o.charCodeAt(s)) < 55296 ||
                      n > 56319 ||
                      s + 1 === a ||
                      (i = o.charCodeAt(s + 1)) < 56320 ||
                      i > 57343
                    ? t
                        ? o.charAt(s)
                        : n
                    : t
                    ? o.slice(s, s + 2)
                    : i - 56320 + ((n - 55296) << 10) + 65536;
            };
        },
        Ue = { codeAt: Ge(!1), charAt: Ge(!0) },
        Qe = Ue.charAt,
        Ke = K.set,
        Je = K.getterFor("String Iterator");
    ke(
        String,
        "String",
        function (t) {
            Ke(this, { type: "String Iterator", string: String(t), index: 0 });
        },
        function () {
            var t,
                e = Je(this),
                r = e.string,
                n = e.index;
            return n >= r.length
                ? { value: void 0, done: !0 }
                : ((t = Qe(r, n)),
                  (e.index += t.length),
                  { value: t, done: !1 });
        }
    );
    var Ze = function (t, e, r) {
            for (var n in e) J(t, n, e[n], r);
            return t;
        },
        tr = !c(function () {
            return Object.isExtensible(Object.preventExtensions({}));
        }),
        er = e(function (t) {
            var e = R.f,
                r = F("meta"),
                n = 0,
                i =
                    Object.isExtensible ||
                    function () {
                        return !0;
                    },
                o = function (t) {
                    e(t, r, { value: { objectID: "O" + ++n, weakData: {} } });
                },
                s = (t.exports = {
                    REQUIRED: !1,
                    fastKey: function (t, e) {
                        if (!x(t))
                            return "symbol" == typeof t
                                ? t
                                : ("string" == typeof t ? "S" : "P") + t;
                        if (!O(t, r)) {
                            if (!i(t)) return "F";
                            if (!e) return "E";
                            o(t);
                        }
                        return t[r].objectID;
                    },
                    getWeakData: function (t, e) {
                        if (!O(t, r)) {
                            if (!i(t)) return !0;
                            if (!e) return !1;
                            o(t);
                        }
                        return t[r].weakData;
                    },
                    onFreeze: function (t) {
                        return tr && s.REQUIRED && i(t) && !O(t, r) && o(t), t;
                    },
                });
            q[r] = !0;
        }),
        rr =
            (er.REQUIRED,
            er.fastKey,
            er.getWeakData,
            er.onFreeze,
            zt("iterator")),
        nr = Array.prototype,
        ir = zt("iterator"),
        or = function (t, e, r, n) {
            try {
                return n ? e(T(r)[0], r[1]) : e(r);
            } catch (e) {
                var i = t.return;
                throw (void 0 !== i && T(i.call(t)), e);
            }
        },
        sr = e(function (t) {
            var e = function (t, e) {
                (this.stopped = t), (this.result = e);
            };
            (t.exports = function (t, r, n, i, o) {
                var s,
                    a,
                    c,
                    l,
                    u,
                    f,
                    h,
                    d = Lt(r, n, i ? 2 : 1);
                if (o) s = t;
                else {
                    if (
                        "function" !=
                        typeof (a = (function (t) {
                            if (null != t)
                                return t[ir] || t["@@iterator"] || le[Ce(t)];
                        })(t))
                    )
                        throw TypeError("Target is not iterable");
                    if (
                        void 0 !== (h = a) &&
                        (le.Array === h || nr[rr] === h)
                    ) {
                        for (c = 0, l = st(t.length); l > c; c++)
                            if (
                                (u = i ? d(T((f = t[c]))[0], f[1]) : d(t[c])) &&
                                u instanceof e
                            )
                                return u;
                        return new e(!1);
                    }
                    s = a.call(t);
                }
                for (; !(f = s.next()).done; )
                    if ((u = or(s, d, f.value, i)) && u instanceof e) return u;
                return new e(!1);
            }).stop = function (t) {
                return new e(!0, t);
            };
        }),
        ar = function (t, e, r) {
            if (!(t instanceof e))
                throw TypeError(
                    "Incorrect " + (r ? r + " " : "") + "invocation"
                );
            return t;
        },
        cr = zt("iterator"),
        lr = !1;
    try {
        var ur = 0,
            fr = {
                next: function () {
                    return { done: !!ur++ };
                },
                return: function () {
                    lr = !0;
                },
            };
        (fr[cr] = function () {
            return this;
        }),
            Array.from(fr, function () {
                throw 2;
            });
    } catch (t) {}
    var hr = function (t, e, r, n, i) {
            var o = a[t],
                s = o && o.prototype,
                l = o,
                u = n ? "set" : "add",
                f = {},
                h = function (t) {
                    var e = s[t];
                    J(
                        s,
                        t,
                        "add" == t
                            ? function (t) {
                                  return e.call(this, 0 === t ? 0 : t), this;
                              }
                            : "delete" == t
                            ? function (t) {
                                  return (
                                      !(i && !x(t)) &&
                                      e.call(this, 0 === t ? 0 : t)
                                  );
                              }
                            : "get" == t
                            ? function (t) {
                                  return i && !x(t)
                                      ? void 0
                                      : e.call(this, 0 === t ? 0 : t);
                              }
                            : "has" == t
                            ? function (t) {
                                  return (
                                      !(i && !x(t)) &&
                                      e.call(this, 0 === t ? 0 : t)
                                  );
                              }
                            : function (t, r) {
                                  return e.call(this, 0 === t ? 0 : t, r), this;
                              }
                    );
                };
            if (
                _t(
                    t,
                    "function" != typeof o ||
                        !(
                            i ||
                            (s.forEach &&
                                !c(function () {
                                    new o().entries().next();
                                }))
                        )
                )
            )
                (l = r.getConstructor(e, t, n, u)), (er.REQUIRED = !0);
            else if (_t(t, !0)) {
                var d = new l(),
                    p = d[u](i ? {} : -0, 1) != d,
                    v = c(function () {
                        d.has(1);
                    }),
                    g = (function (t, e) {
                        if (!e && !lr) return !1;
                        var r = !1;
                        try {
                            var n = {};
                            (n[cr] = function () {
                                return {
                                    next: function () {
                                        return { done: (r = !0) };
                                    },
                                };
                            }),
                                t(n);
                        } catch (t) {}
                        return r;
                    })(function (t) {
                        new o(t);
                    }),
                    y =
                        !i &&
                        c(function () {
                            for (var t = new o(), e = 5; e--; ) t[u](e, e);
                            return !t.has(-0);
                        });
                g ||
                    (((l = e(function (e, r) {
                        ar(e, l, t);
                        var i = (function (t, e, r) {
                            var n, i;
                            return (
                                we &&
                                    "function" == typeof (n = e.constructor) &&
                                    n !== r &&
                                    x((i = n.prototype)) &&
                                    i !== r.prototype &&
                                    we(t, i),
                                t
                            );
                        })(new o(), e, l);
                        return null != r && sr(r, i[u], i, n), i;
                    })).prototype = s),
                    (s.constructor = l)),
                    (v || y) && (h("delete"), h("has"), n && h("get")),
                    (y || p) && h(u),
                    i && s.clear && delete s.clear;
            }
            return (
                (f[t] = l),
                At({ global: !0, forced: l != o }, f),
                me(l, t),
                i || r.setStrong(l, t, n),
                l
            );
        },
        dr = er.getWeakData,
        pr = K.set,
        vr = K.getterFor,
        gr = Pt.find,
        yr = Pt.findIndex,
        br = 0,
        mr = function (t) {
            return t.frozen || (t.frozen = new xr());
        },
        xr = function () {
            this.entries = [];
        },
        Er = function (t, e) {
            return gr(t.entries, function (t) {
                return t[0] === e;
            });
        };
    xr.prototype = {
        get: function (t) {
            var e = Er(this, t);
            if (e) return e[1];
        },
        has: function (t) {
            return !!Er(this, t);
        },
        set: function (t, e) {
            var r = Er(this, t);
            r ? (r[1] = e) : this.entries.push([t, e]);
        },
        delete: function (t) {
            var e = yr(this.entries, function (e) {
                return e[0] === t;
            });
            return ~e && this.entries.splice(e, 1), !!~e;
        },
    };
    var wr = {
            getConstructor: function (t, e, r, n) {
                var i = t(function (t, o) {
                        ar(t, i, e),
                            pr(t, { type: e, id: br++, frozen: void 0 }),
                            null != o && sr(o, t[n], t, r);
                    }),
                    o = vr(e),
                    s = function (t, e, r) {
                        var n = o(t),
                            i = dr(T(e), !0);
                        return !0 === i ? mr(n).set(e, r) : (i[n.id] = r), t;
                    };
                return (
                    Ze(i.prototype, {
                        delete: function (t) {
                            var e = o(this);
                            if (!x(t)) return !1;
                            var r = dr(t);
                            return !0 === r
                                ? mr(e).delete(t)
                                : r && O(r, e.id) && delete r[e.id];
                        },
                        has: function (t) {
                            var e = o(this);
                            if (!x(t)) return !1;
                            var r = dr(t);
                            return !0 === r ? mr(e).has(t) : r && O(r, e.id);
                        },
                    }),
                    Ze(
                        i.prototype,
                        r
                            ? {
                                  get: function (t) {
                                      var e = o(this);
                                      if (x(t)) {
                                          var r = dr(t);
                                          return !0 === r
                                              ? mr(e).get(t)
                                              : r
                                              ? r[e.id]
                                              : void 0;
                                      }
                                  },
                                  set: function (t, e) {
                                      return s(this, t, e);
                                  },
                              }
                            : {
                                  add: function (t) {
                                      return s(this, t, !0);
                                  },
                              }
                    ),
                    i
                );
            },
        },
        Or =
            (e(function (t) {
                var e,
                    r = K.enforce,
                    n = !a.ActiveXObject && "ActiveXObject" in a,
                    i = Object.isExtensible,
                    o = function (t) {
                        return function () {
                            return t(
                                this,
                                arguments.length ? arguments[0] : void 0
                            );
                        };
                    },
                    s = (t.exports = hr("WeakMap", o, wr, !0, !0));
                if (D && n) {
                    (e = wr.getConstructor(o, "WeakMap", !0)),
                        (er.REQUIRED = !0);
                    var c = s.prototype,
                        l = c.delete,
                        u = c.has,
                        f = c.get,
                        h = c.set;
                    Ze(c, {
                        delete: function (t) {
                            if (x(t) && !i(t)) {
                                var n = r(this);
                                return (
                                    n.frozen || (n.frozen = new e()),
                                    l.call(this, t) || n.frozen.delete(t)
                                );
                            }
                            return l.call(this, t);
                        },
                        has: function (t) {
                            if (x(t) && !i(t)) {
                                var n = r(this);
                                return (
                                    n.frozen || (n.frozen = new e()),
                                    u.call(this, t) || n.frozen.has(t)
                                );
                            }
                            return u.call(this, t);
                        },
                        get: function (t) {
                            if (x(t) && !i(t)) {
                                var n = r(this);
                                return (
                                    n.frozen || (n.frozen = new e()),
                                    u.call(this, t)
                                        ? f.call(this, t)
                                        : n.frozen.get(t)
                                );
                            }
                            return f.call(this, t);
                        },
                        set: function (t, n) {
                            if (x(t) && !i(t)) {
                                var o = r(this);
                                o.frozen || (o.frozen = new e()),
                                    u.call(this, t)
                                        ? h.call(this, t, n)
                                        : o.frozen.set(t, n);
                            } else h.call(this, t, n);
                            return this;
                        },
                    });
                }
            }),
            zt("iterator")),
        _r = zt("toStringTag"),
        Sr = Te.values;
    for (var Ar in Ht) {
        var kr = a[Ar],
            Lr = kr && kr.prototype;
        if (Lr) {
            if (Lr[Or] !== Sr)
                try {
                    W(Lr, Or, Sr);
                } catch (t) {
                    Lr[Or] = Sr;
                }
            if ((Lr[_r] || W(Lr, _r, Ar), Ht[Ar]))
                for (var Mr in Te)
                    if (Lr[Mr] !== Te[Mr])
                        try {
                            W(Lr, Mr, Te[Mr]);
                        } catch (t) {
                            Lr[Mr] = Te[Mr];
                        }
        }
    }
    var Tr = "Expected a function",
        jr = NaN,
        Rr = "[object Symbol]",
        Wr = /^\s+|\s+$/g,
        zr = /^[-+]0x[0-9a-f]+$/i,
        Cr = /^0b[01]+$/i,
        Nr = /^0o[0-7]+$/i,
        Ir = parseInt,
        Dr = "object" == typeof t && t && t.Object === Object && t,
        Pr = "object" == typeof self && self && self.Object === Object && self,
        Vr = Dr || Pr || Function("return this")(),
        Fr = Object.prototype.toString,
        Br = Math.max,
        Hr = Math.min,
        qr = function () {
            return Vr.Date.now();
        };
    function $r(t, e, r) {
        var n,
            i,
            o,
            s,
            a,
            c,
            l = 0,
            u = !1,
            f = !1,
            h = !0;
        if ("function" != typeof t) throw new TypeError(Tr);
        function d(e) {
            var r = n,
                o = i;
            return (n = i = void 0), (l = e), (s = t.apply(o, r));
        }
        function p(t) {
            var r = t - c;
            return void 0 === c || r >= e || r < 0 || (f && t - l >= o);
        }
        function v() {
            var t = qr();
            if (p(t)) return g(t);
            a = setTimeout(
                v,
                (function (t) {
                    var r = e - (t - c);
                    return f ? Hr(r, o - (t - l)) : r;
                })(t)
            );
        }
        function g(t) {
            return (a = void 0), h && n ? d(t) : ((n = i = void 0), s);
        }
        function y() {
            var t = qr(),
                r = p(t);
            if (((n = arguments), (i = this), (c = t), r)) {
                if (void 0 === a)
                    return (function (t) {
                        return (l = t), (a = setTimeout(v, e)), u ? d(t) : s;
                    })(c);
                if (f) return (a = setTimeout(v, e)), d(c);
            }
            return void 0 === a && (a = setTimeout(v, e)), s;
        }
        return (
            (e = Yr(e) || 0),
            Xr(r) &&
                ((u = !!r.leading),
                (o = (f = "maxWait" in r) ? Br(Yr(r.maxWait) || 0, e) : o),
                (h = "trailing" in r ? !!r.trailing : h)),
            (y.cancel = function () {
                void 0 !== a && clearTimeout(a),
                    (l = 0),
                    (n = c = i = a = void 0);
            }),
            (y.flush = function () {
                return void 0 === a ? s : g(qr());
            }),
            y
        );
    }
    function Xr(t) {
        var e = typeof t;
        return !!t && ("object" == e || "function" == e);
    }
    function Yr(t) {
        if ("number" == typeof t) return t;
        if (
            (function (t) {
                return (
                    "symbol" == typeof t ||
                    ((function (t) {
                        return !!t && "object" == typeof t;
                    })(t) &&
                        Fr.call(t) == Rr)
                );
            })(t)
        )
            return jr;
        if (Xr(t)) {
            var e = "function" == typeof t.valueOf ? t.valueOf() : t;
            t = Xr(e) ? e + "" : e;
        }
        if ("string" != typeof t) return 0 === t ? t : +t;
        t = t.replace(Wr, "");
        var r = Cr.test(t);
        return r || Nr.test(t)
            ? Ir(t.slice(2), r ? 2 : 8)
            : zr.test(t)
            ? jr
            : +t;
    }
    var Gr = function (t, e, r) {
            var n = !0,
                i = !0;
            if ("function" != typeof t) throw new TypeError(Tr);
            return (
                Xr(r) &&
                    ((n = "leading" in r ? !!r.leading : n),
                    (i = "trailing" in r ? !!r.trailing : i)),
                $r(t, e, { leading: n, maxWait: e, trailing: i })
            );
        },
        Ur = "Expected a function",
        Qr = NaN,
        Kr = "[object Symbol]",
        Jr = /^\s+|\s+$/g,
        Zr = /^[-+]0x[0-9a-f]+$/i,
        tn = /^0b[01]+$/i,
        en = /^0o[0-7]+$/i,
        rn = parseInt,
        nn = "object" == typeof t && t && t.Object === Object && t,
        on = "object" == typeof self && self && self.Object === Object && self,
        sn = nn || on || Function("return this")(),
        an = Object.prototype.toString,
        cn = Math.max,
        ln = Math.min,
        un = function () {
            return sn.Date.now();
        };
    function fn(t) {
        var e = typeof t;
        return !!t && ("object" == e || "function" == e);
    }
    function hn(t) {
        if ("number" == typeof t) return t;
        if (
            (function (t) {
                return (
                    "symbol" == typeof t ||
                    ((function (t) {
                        return !!t && "object" == typeof t;
                    })(t) &&
                        an.call(t) == Kr)
                );
            })(t)
        )
            return Qr;
        if (fn(t)) {
            var e = "function" == typeof t.valueOf ? t.valueOf() : t;
            t = fn(e) ? e + "" : e;
        }
        if ("string" != typeof t) return 0 === t ? t : +t;
        t = t.replace(Jr, "");
        var r = tn.test(t);
        return r || en.test(t)
            ? rn(t.slice(2), r ? 2 : 8)
            : Zr.test(t)
            ? Qr
            : +t;
    }
    var dn = function (t, e, r) {
            var n,
                i,
                o,
                s,
                a,
                c,
                l = 0,
                u = !1,
                f = !1,
                h = !0;
            if ("function" != typeof t) throw new TypeError(Ur);
            function d(e) {
                var r = n,
                    o = i;
                return (n = i = void 0), (l = e), (s = t.apply(o, r));
            }
            function p(t) {
                var r = t - c;
                return void 0 === c || r >= e || r < 0 || (f && t - l >= o);
            }
            function v() {
                var t = un();
                if (p(t)) return g(t);
                a = setTimeout(
                    v,
                    (function (t) {
                        var r = e - (t - c);
                        return f ? ln(r, o - (t - l)) : r;
                    })(t)
                );
            }
            function g(t) {
                return (a = void 0), h && n ? d(t) : ((n = i = void 0), s);
            }
            function y() {
                var t = un(),
                    r = p(t);
                if (((n = arguments), (i = this), (c = t), r)) {
                    if (void 0 === a)
                        return (function (t) {
                            return (
                                (l = t), (a = setTimeout(v, e)), u ? d(t) : s
                            );
                        })(c);
                    if (f) return (a = setTimeout(v, e)), d(c);
                }
                return void 0 === a && (a = setTimeout(v, e)), s;
            }
            return (
                (e = hn(e) || 0),
                fn(r) &&
                    ((u = !!r.leading),
                    (o = (f = "maxWait" in r) ? cn(hn(r.maxWait) || 0, e) : o),
                    (h = "trailing" in r ? !!r.trailing : h)),
                (y.cancel = function () {
                    void 0 !== a && clearTimeout(a),
                        (l = 0),
                        (n = c = i = a = void 0);
                }),
                (y.flush = function () {
                    return void 0 === a ? s : g(un());
                }),
                y
            );
        },
        pn = "Expected a function",
        vn = "__lodash_hash_undefined__",
        gn = "[object Function]",
        yn = "[object GeneratorFunction]",
        bn = /^\[object .+?Constructor\]$/,
        mn = "object" == typeof t && t && t.Object === Object && t,
        xn = "object" == typeof self && self && self.Object === Object && self,
        En = mn || xn || Function("return this")();
    var wn = Array.prototype,
        On = Function.prototype,
        _n = Object.prototype,
        Sn = En["__core-js_shared__"],
        An = (function () {
            var t = /[^.]+$/.exec((Sn && Sn.keys && Sn.keys.IE_PROTO) || "");
            return t ? "Symbol(src)_1." + t : "";
        })(),
        kn = On.toString,
        Ln = _n.hasOwnProperty,
        Mn = _n.toString,
        Tn = RegExp(
            "^" +
                kn
                    .call(Ln)
                    .replace(/[\\^$.*+?()[\]{}|]/g, "\\$&")
                    .replace(
                        /hasOwnProperty|(function).*?(?=\\\()| for .+?(?=\\\])/g,
                        "$1.*?"
                    ) +
                "$"
        ),
        jn = wn.splice,
        Rn = Vn(En, "Map"),
        Wn = Vn(Object, "create");
    function zn(t) {
        var e = -1,
            r = t ? t.length : 0;
        for (this.clear(); ++e < r; ) {
            var n = t[e];
            this.set(n[0], n[1]);
        }
    }
    function Cn(t) {
        var e = -1,
            r = t ? t.length : 0;
        for (this.clear(); ++e < r; ) {
            var n = t[e];
            this.set(n[0], n[1]);
        }
    }
    function Nn(t) {
        var e = -1,
            r = t ? t.length : 0;
        for (this.clear(); ++e < r; ) {
            var n = t[e];
            this.set(n[0], n[1]);
        }
    }
    function In(t, e) {
        for (var r, n, i = t.length; i--; )
            if ((r = t[i][0]) === (n = e) || (r != r && n != n)) return i;
        return -1;
    }
    function Dn(t) {
        return (
            !(!Bn(t) || ((e = t), An && An in e)) &&
            ((function (t) {
                var e = Bn(t) ? Mn.call(t) : "";
                return e == gn || e == yn;
            })(t) ||
            (function (t) {
                var e = !1;
                if (null != t && "function" != typeof t.toString)
                    try {
                        e = !!(t + "");
                    } catch (t) {}
                return e;
            })(t)
                ? Tn
                : bn
            ).test(
                (function (t) {
                    if (null != t) {
                        try {
                            return kn.call(t);
                        } catch (t) {}
                        try {
                            return t + "";
                        } catch (t) {}
                    }
                    return "";
                })(t)
            )
        );
        var e;
    }
    function Pn(t, e) {
        var r,
            n,
            i = t.__data__;
        return (
            "string" == (n = typeof (r = e)) ||
            "number" == n ||
            "symbol" == n ||
            "boolean" == n
                ? "__proto__" !== r
                : null === r
        )
            ? i["string" == typeof e ? "string" : "hash"]
            : i.map;
    }
    function Vn(t, e) {
        var r = (function (t, e) {
            return null == t ? void 0 : t[e];
        })(t, e);
        return Dn(r) ? r : void 0;
    }
    function Fn(t, e) {
        if ("function" != typeof t || (e && "function" != typeof e))
            throw new TypeError(pn);
        var r = function () {
            var n = arguments,
                i = e ? e.apply(this, n) : n[0],
                o = r.cache;
            if (o.has(i)) return o.get(i);
            var s = t.apply(this, n);
            return (r.cache = o.set(i, s)), s;
        };
        return (r.cache = new (Fn.Cache || Nn)()), r;
    }
    function Bn(t) {
        var e = typeof t;
        return !!t && ("object" == e || "function" == e);
    }
    (zn.prototype.clear = function () {
        this.__data__ = Wn ? Wn(null) : {};
    }),
        (zn.prototype.delete = function (t) {
            return this.has(t) && delete this.__data__[t];
        }),
        (zn.prototype.get = function (t) {
            var e = this.__data__;
            if (Wn) {
                var r = e[t];
                return r === vn ? void 0 : r;
            }
            return Ln.call(e, t) ? e[t] : void 0;
        }),
        (zn.prototype.has = function (t) {
            var e = this.__data__;
            return Wn ? void 0 !== e[t] : Ln.call(e, t);
        }),
        (zn.prototype.set = function (t, e) {
            return (this.__data__[t] = Wn && void 0 === e ? vn : e), this;
        }),
        (Cn.prototype.clear = function () {
            this.__data__ = [];
        }),
        (Cn.prototype.delete = function (t) {
            var e = this.__data__,
                r = In(e, t);
            return (
                !(r < 0) && (r == e.length - 1 ? e.pop() : jn.call(e, r, 1), !0)
            );
        }),
        (Cn.prototype.get = function (t) {
            var e = this.__data__,
                r = In(e, t);
            return r < 0 ? void 0 : e[r][1];
        }),
        (Cn.prototype.has = function (t) {
            return In(this.__data__, t) > -1;
        }),
        (Cn.prototype.set = function (t, e) {
            var r = this.__data__,
                n = In(r, t);
            return n < 0 ? r.push([t, e]) : (r[n][1] = e), this;
        }),
        (Nn.prototype.clear = function () {
            this.__data__ = {
                hash: new zn(),
                map: new (Rn || Cn)(),
                string: new zn(),
            };
        }),
        (Nn.prototype.delete = function (t) {
            return Pn(this, t).delete(t);
        }),
        (Nn.prototype.get = function (t) {
            return Pn(this, t).get(t);
        }),
        (Nn.prototype.has = function (t) {
            return Pn(this, t).has(t);
        }),
        (Nn.prototype.set = function (t, e) {
            return Pn(this, t).set(t, e), this;
        }),
        (Fn.Cache = Nn);
    var Hn = Fn,
        qn = (function () {
            if ("undefined" != typeof Map) return Map;
            function t(t, e) {
                var r = -1;
                return (
                    t.some(function (t, n) {
                        return t[0] === e && ((r = n), !0);
                    }),
                    r
                );
            }
            return (function () {
                function e() {
                    this.__entries__ = [];
                }
                return (
                    Object.defineProperty(e.prototype, "size", {
                        get: function () {
                            return this.__entries__.length;
                        },
                        enumerable: !0,
                        configurable: !0,
                    }),
                    (e.prototype.get = function (e) {
                        var r = t(this.__entries__, e),
                            n = this.__entries__[r];
                        return n && n[1];
                    }),
                    (e.prototype.set = function (e, r) {
                        var n = t(this.__entries__, e);
                        ~n
                            ? (this.__entries__[n][1] = r)
                            : this.__entries__.push([e, r]);
                    }),
                    (e.prototype.delete = function (e) {
                        var r = this.__entries__,
                            n = t(r, e);
                        ~n && r.splice(n, 1);
                    }),
                    (e.prototype.has = function (e) {
                        return !!~t(this.__entries__, e);
                    }),
                    (e.prototype.clear = function () {
                        this.__entries__.splice(0);
                    }),
                    (e.prototype.forEach = function (t, e) {
                        void 0 === e && (e = null);
                        for (
                            var r = 0, n = this.__entries__;
                            r < n.length;
                            r++
                        ) {
                            var i = n[r];
                            t.call(e, i[1], i[0]);
                        }
                    }),
                    e
                );
            })();
        })(),
        $n =
            "undefined" != typeof window &&
            "undefined" != typeof document &&
            window.document === document,
        Xn =
            "undefined" != typeof global && global.Math === Math
                ? global
                : "undefined" != typeof self && self.Math === Math
                ? self
                : "undefined" != typeof window && window.Math === Math
                ? window
                : Function("return this")(),
        Yn =
            "function" == typeof requestAnimationFrame
                ? requestAnimationFrame.bind(Xn)
                : function (t) {
                      return setTimeout(function () {
                          return t(Date.now());
                      }, 1e3 / 60);
                  },
        Gn = 2;
    var Un = 20,
        Qn = [
            "top",
            "right",
            "bottom",
            "left",
            "width",
            "height",
            "size",
            "weight",
        ],
        Kn = "undefined" != typeof MutationObserver,
        Jn = (function () {
            function t() {
                (this.connected_ = !1),
                    (this.mutationEventsAdded_ = !1),
                    (this.mutationsObserver_ = null),
                    (this.observers_ = []),
                    (this.onTransitionEnd_ = this.onTransitionEnd_.bind(this)),
                    (this.refresh = (function (t, e) {
                        var r = !1,
                            n = !1,
                            i = 0;
                        function o() {
                            r && ((r = !1), t()), n && a();
                        }
                        function s() {
                            Yn(o);
                        }
                        function a() {
                            var t = Date.now();
                            if (r) {
                                if (t - i < Gn) return;
                                n = !0;
                            } else (r = !0), (n = !1), setTimeout(s, e);
                            i = t;
                        }
                        return a;
                    })(this.refresh.bind(this), Un));
            }
            return (
                (t.prototype.addObserver = function (t) {
                    ~this.observers_.indexOf(t) || this.observers_.push(t),
                        this.connected_ || this.connect_();
                }),
                (t.prototype.removeObserver = function (t) {
                    var e = this.observers_,
                        r = e.indexOf(t);
                    ~r && e.splice(r, 1),
                        !e.length && this.connected_ && this.disconnect_();
                }),
                (t.prototype.refresh = function () {
                    this.updateObservers_() && this.refresh();
                }),
                (t.prototype.updateObservers_ = function () {
                    var t = this.observers_.filter(function (t) {
                        return t.gatherActive(), t.hasActive();
                    });
                    return (
                        t.forEach(function (t) {
                            return t.broadcastActive();
                        }),
                        t.length > 0
                    );
                }),
                (t.prototype.connect_ = function () {
                    $n &&
                        !this.connected_ &&
                        (document.addEventListener(
                            "transitionend",
                            this.onTransitionEnd_
                        ),
                        window.addEventListener("resize", this.refresh),
                        Kn
                            ? ((this.mutationsObserver_ = new MutationObserver(
                                  this.refresh
                              )),
                              this.mutationsObserver_.observe(document, {
                                  attributes: !0,
                                  childList: !0,
                                  characterData: !0,
                                  subtree: !0,
                              }))
                            : (document.addEventListener(
                                  "DOMSubtreeModified",
                                  this.refresh
                              ),
                              (this.mutationEventsAdded_ = !0)),
                        (this.connected_ = !0));
                }),
                (t.prototype.disconnect_ = function () {
                    $n &&
                        this.connected_ &&
                        (document.removeEventListener(
                            "transitionend",
                            this.onTransitionEnd_
                        ),
                        window.removeEventListener("resize", this.refresh),
                        this.mutationsObserver_ &&
                            this.mutationsObserver_.disconnect(),
                        this.mutationEventsAdded_ &&
                            document.removeEventListener(
                                "DOMSubtreeModified",
                                this.refresh
                            ),
                        (this.mutationsObserver_ = null),
                        (this.mutationEventsAdded_ = !1),
                        (this.connected_ = !1));
                }),
                (t.prototype.onTransitionEnd_ = function (t) {
                    var e = t.propertyName,
                        r = void 0 === e ? "" : e;
                    Qn.some(function (t) {
                        return !!~r.indexOf(t);
                    }) && this.refresh();
                }),
                (t.getInstance = function () {
                    return (
                        this.instance_ || (this.instance_ = new t()),
                        this.instance_
                    );
                }),
                (t.instance_ = null),
                t
            );
        })(),
        Zn = function (t, e) {
            for (var r = 0, n = Object.keys(e); r < n.length; r++) {
                var i = n[r];
                Object.defineProperty(t, i, {
                    value: e[i],
                    enumerable: !1,
                    writable: !1,
                    configurable: !0,
                });
            }
            return t;
        },
        ti = function (t) {
            return (t && t.ownerDocument && t.ownerDocument.defaultView) || Xn;
        },
        ei = ai(0, 0, 0, 0);
    function ri(t) {
        return parseFloat(t) || 0;
    }
    function ni(t) {
        for (var e = [], r = 1; r < arguments.length; r++)
            e[r - 1] = arguments[r];
        return e.reduce(function (e, r) {
            return e + ri(t["border-" + r + "-width"]);
        }, 0);
    }
    function ii(t) {
        var e = t.clientWidth,
            r = t.clientHeight;
        if (!e && !r) return ei;
        var n = ti(t).getComputedStyle(t),
            i = (function (t) {
                for (
                    var e = {}, r = 0, n = ["top", "right", "bottom", "left"];
                    r < n.length;
                    r++
                ) {
                    var i = n[r],
                        o = t["padding-" + i];
                    e[i] = ri(o);
                }
                return e;
            })(n),
            o = i.left + i.right,
            s = i.top + i.bottom,
            a = ri(n.width),
            c = ri(n.height);
        if (
            ("border-box" === n.boxSizing &&
                (Math.round(a + o) !== e && (a -= ni(n, "left", "right") + o),
                Math.round(c + s) !== r && (c -= ni(n, "top", "bottom") + s)),
            !(function (t) {
                return t === ti(t).document.documentElement;
            })(t))
        ) {
            var l = Math.round(a + o) - e,
                u = Math.round(c + s) - r;
            1 !== Math.abs(l) && (a -= l), 1 !== Math.abs(u) && (c -= u);
        }
        return ai(i.left, i.top, a, c);
    }
    var oi =
        "undefined" != typeof SVGGraphicsElement
            ? function (t) {
                  return t instanceof ti(t).SVGGraphicsElement;
              }
            : function (t) {
                  return (
                      t instanceof ti(t).SVGElement &&
                      "function" == typeof t.getBBox
                  );
              };
    function si(t) {
        return $n
            ? oi(t)
                ? (function (t) {
                      var e = t.getBBox();
                      return ai(0, 0, e.width, e.height);
                  })(t)
                : ii(t)
            : ei;
    }
    function ai(t, e, r, n) {
        return { x: t, y: e, width: r, height: n };
    }
    var ci = (function () {
            function t(t) {
                (this.broadcastWidth = 0),
                    (this.broadcastHeight = 0),
                    (this.contentRect_ = ai(0, 0, 0, 0)),
                    (this.target = t);
            }
            return (
                (t.prototype.isActive = function () {
                    var t = si(this.target);
                    return (
                        (this.contentRect_ = t),
                        t.width !== this.broadcastWidth ||
                            t.height !== this.broadcastHeight
                    );
                }),
                (t.prototype.broadcastRect = function () {
                    var t = this.contentRect_;
                    return (
                        (this.broadcastWidth = t.width),
                        (this.broadcastHeight = t.height),
                        t
                    );
                }),
                t
            );
        })(),
        li = function (t, e) {
            var r,
                n,
                i,
                o,
                s,
                a,
                c,
                l =
                    ((n = (r = e).x),
                    (i = r.y),
                    (o = r.width),
                    (s = r.height),
                    (a =
                        "undefined" != typeof DOMRectReadOnly
                            ? DOMRectReadOnly
                            : Object),
                    (c = Object.create(a.prototype)),
                    Zn(c, {
                        x: n,
                        y: i,
                        width: o,
                        height: s,
                        top: i,
                        right: n + o,
                        bottom: s + i,
                        left: n,
                    }),
                    c);
            Zn(this, { target: t, contentRect: l });
        },
        ui = (function () {
            function t(t, e, r) {
                if (
                    ((this.activeObservations_ = []),
                    (this.observations_ = new qn()),
                    "function" != typeof t)
                )
                    throw new TypeError(
                        "The callback provided as parameter 1 is not a function."
                    );
                (this.callback_ = t),
                    (this.controller_ = e),
                    (this.callbackCtx_ = r);
            }
            return (
                (t.prototype.observe = function (t) {
                    if (!arguments.length)
                        throw new TypeError(
                            "1 argument required, but only 0 present."
                        );
                    if (
                        "undefined" != typeof Element &&
                        Element instanceof Object
                    ) {
                        if (!(t instanceof ti(t).Element))
                            throw new TypeError(
                                'parameter 1 is not of type "Element".'
                            );
                        var e = this.observations_;
                        e.has(t) ||
                            (e.set(t, new ci(t)),
                            this.controller_.addObserver(this),
                            this.controller_.refresh());
                    }
                }),
                (t.prototype.unobserve = function (t) {
                    if (!arguments.length)
                        throw new TypeError(
                            "1 argument required, but only 0 present."
                        );
                    if (
                        "undefined" != typeof Element &&
                        Element instanceof Object
                    ) {
                        if (!(t instanceof ti(t).Element))
                            throw new TypeError(
                                'parameter 1 is not of type "Element".'
                            );
                        var e = this.observations_;
                        e.has(t) &&
                            (e.delete(t),
                            e.size || this.controller_.removeObserver(this));
                    }
                }),
                (t.prototype.disconnect = function () {
                    this.clearActive(),
                        this.observations_.clear(),
                        this.controller_.removeObserver(this);
                }),
                (t.prototype.gatherActive = function () {
                    var t = this;
                    this.clearActive(),
                        this.observations_.forEach(function (e) {
                            e.isActive() && t.activeObservations_.push(e);
                        });
                }),
                (t.prototype.broadcastActive = function () {
                    if (this.hasActive()) {
                        var t = this.callbackCtx_,
                            e = this.activeObservations_.map(function (t) {
                                return new li(t.target, t.broadcastRect());
                            });
                        this.callback_.call(t, e, t), this.clearActive();
                    }
                }),
                (t.prototype.clearActive = function () {
                    this.activeObservations_.splice(0);
                }),
                (t.prototype.hasActive = function () {
                    return this.activeObservations_.length > 0;
                }),
                t
            );
        })(),
        fi = "undefined" != typeof WeakMap ? new WeakMap() : new qn(),
        hi = function t(e) {
            if (!(this instanceof t))
                throw new TypeError("Cannot call a class as a function.");
            if (!arguments.length)
                throw new TypeError("1 argument required, but only 0 present.");
            var r = Jn.getInstance(),
                n = new ui(e, r, this);
            fi.set(this, n);
        };
    ["observe", "unobserve", "disconnect"].forEach(function (t) {
        hi.prototype[t] = function () {
            var e;
            return (e = fi.get(this))[t].apply(e, arguments);
        };
    });
    var di = void 0 !== Xn.ResizeObserver ? Xn.ResizeObserver : hi,
        pi = null,
        vi = null;
    function gi() {
        if (null === pi) {
            if ("undefined" == typeof document) return (pi = 0);
            var t = document.body,
                e = document.createElement("div");
            e.classList.add("simplebar-hide-scrollbar"), t.appendChild(e);
            var r = e.getBoundingClientRect().right;
            t.removeChild(e), (pi = r);
        }
        return pi;
    }
    Yt &&
        window.addEventListener("resize", function () {
            vi !== window.devicePixelRatio &&
                ((vi = window.devicePixelRatio), (pi = null));
        });
    var yi = function (t) {
            return function (e, r, n, i) {
                kt(r);
                var o = Mt(e),
                    s = y(o),
                    a = st(o.length),
                    c = t ? a - 1 : 0,
                    l = t ? -1 : 1;
                if (n < 2)
                    for (;;) {
                        if (c in s) {
                            (i = s[c]), (c += l);
                            break;
                        }
                        if (((c += l), t ? c < 0 : a <= c))
                            throw TypeError(
                                "Reduce of empty array with no initial value"
                            );
                    }
                for (; t ? c >= 0 : a > c; c += l)
                    c in s && (i = r(i, s[c], c, o));
                return i;
            };
        },
        bi = { left: yi(!1), right: yi(!0) }.left;
    At(
        { target: "Array", proto: !0, forced: Vt("reduce") },
        {
            reduce: function (t) {
                return bi(
                    this,
                    t,
                    arguments.length,
                    arguments.length > 1 ? arguments[1] : void 0
                );
            },
        }
    );
    var mi = R.f,
        xi = Function.prototype,
        Ei = xi.toString,
        wi = /^\s*function ([^ (]*)/;
    !l ||
        "name" in xi ||
        mi(xi, "name", {
            configurable: !0,
            get: function () {
                try {
                    return Ei.call(this).match(wi)[1];
                } catch (t) {
                    return "";
                }
            },
        });
    var Oi,
        _i,
        Si = function () {
            var t = T(this),
                e = "";
            return (
                t.global && (e += "g"),
                t.ignoreCase && (e += "i"),
                t.multiline && (e += "m"),
                t.dotAll && (e += "s"),
                t.unicode && (e += "u"),
                t.sticky && (e += "y"),
                e
            );
        },
        Ai = RegExp.prototype.exec,
        ki = String.prototype.replace,
        Li = Ai,
        Mi =
            ((Oi = /a/),
            (_i = /b*/g),
            Ai.call(Oi, "a"),
            Ai.call(_i, "a"),
            0 !== Oi.lastIndex || 0 !== _i.lastIndex),
        Ti = void 0 !== /()??/.exec("")[1];
    (Mi || Ti) &&
        (Li = function (t) {
            var e,
                r,
                n,
                i,
                o = this;
            return (
                Ti && (r = new RegExp("^" + o.source + "$(?!\\s)", Si.call(o))),
                Mi && (e = o.lastIndex),
                (n = Ai.call(o, t)),
                Mi && n && (o.lastIndex = o.global ? n.index + n[0].length : e),
                Ti &&
                    n &&
                    n.length > 1 &&
                    ki.call(n[0], r, function () {
                        for (i = 1; i < arguments.length - 2; i++)
                            void 0 === arguments[i] && (n[i] = void 0);
                    }),
                n
            );
        });
    var ji = Li;
    At({ target: "RegExp", proto: !0, forced: /./.exec !== ji }, { exec: ji });
    var Ri = zt("species"),
        Wi = !c(function () {
            var t = /./;
            return (
                (t.exec = function () {
                    var t = [];
                    return (t.groups = { a: "7" }), t;
                }),
                "7" !== "".replace(t, "$<a>")
            );
        }),
        zi = !c(function () {
            var t = /(?:)/,
                e = t.exec;
            t.exec = function () {
                return e.apply(this, arguments);
            };
            var r = "ab".split(t);
            return 2 !== r.length || "a" !== r[0] || "b" !== r[1];
        }),
        Ci = function (t, e, r, n) {
            var i = zt(t),
                o = !c(function () {
                    var e = {};
                    return (
                        (e[i] = function () {
                            return 7;
                        }),
                        7 != ""[t](e)
                    );
                }),
                s =
                    o &&
                    !c(function () {
                        var e = !1,
                            r = /a/;
                        return (
                            (r.exec = function () {
                                return (e = !0), null;
                            }),
                            "split" === t &&
                                ((r.constructor = {}),
                                (r.constructor[Ri] = function () {
                                    return r;
                                })),
                            r[i](""),
                            !e
                        );
                    });
            if (
                !o ||
                !s ||
                ("replace" === t && !Wi) ||
                ("split" === t && !zi)
            ) {
                var a = /./[i],
                    l = r(i, ""[t], function (t, e, r, n, i) {
                        return e.exec === ji
                            ? o && !i
                                ? { done: !0, value: a.call(e, r, n) }
                                : { done: !0, value: t.call(r, e, n) }
                            : { done: !1 };
                    }),
                    u = l[0],
                    f = l[1];
                J(String.prototype, t, u),
                    J(
                        RegExp.prototype,
                        i,
                        2 == e
                            ? function (t, e) {
                                  return f.call(t, this, e);
                              }
                            : function (t) {
                                  return f.call(t, this);
                              }
                    ),
                    n && W(RegExp.prototype[i], "sham", !0);
            }
        },
        Ni = Ue.charAt,
        Ii = function (t, e, r) {
            return e + (r ? Ni(t, e).length : 1);
        },
        Di = function (t, e) {
            var r = t.exec;
            if ("function" == typeof r) {
                var n = r.call(t, e);
                if ("object" != typeof n)
                    throw TypeError(
                        "RegExp exec method returned something other than an Object or null"
                    );
                return n;
            }
            if ("RegExp" !== v(t))
                throw TypeError("RegExp#exec called on incompatible receiver");
            return ji.call(t, e);
        };
    Ci("match", 1, function (t, e, r) {
        return [
            function (e) {
                var r = b(this),
                    n = null == e ? void 0 : e[t];
                return void 0 !== n
                    ? n.call(e, r)
                    : new RegExp(e)[t](String(r));
            },
            function (t) {
                var n = r(e, t, this);
                if (n.done) return n.value;
                var i = T(t),
                    o = String(this);
                if (!i.global) return Di(i, o);
                var s = i.unicode;
                i.lastIndex = 0;
                for (var a, c = [], l = 0; null !== (a = Di(i, o)); ) {
                    var u = String(a[0]);
                    (c[l] = u),
                        "" === u && (i.lastIndex = Ii(o, st(i.lastIndex), s)),
                        l++;
                }
                return 0 === l ? null : c;
            },
        ];
    });
    var Pi = Math.max,
        Vi = Math.min,
        Fi = Math.floor,
        Bi = /\$([$&'`]|\d\d?|<[^>]*>)/g,
        Hi = /\$([$&'`]|\d\d?)/g;
    Ci("replace", 2, function (t, e, r) {
        return [
            function (r, n) {
                var i = b(this),
                    o = null == r ? void 0 : r[t];
                return void 0 !== o ? o.call(r, i, n) : e.call(String(i), r, n);
            },
            function (t, i) {
                var o = r(e, t, this, i);
                if (o.done) return o.value;
                var s = T(t),
                    a = String(this),
                    c = "function" == typeof i;
                c || (i = String(i));
                var l = s.global;
                if (l) {
                    var u = s.unicode;
                    s.lastIndex = 0;
                }
                for (var f = []; ; ) {
                    var h = Di(s, a);
                    if (null === h) break;
                    if ((f.push(h), !l)) break;
                    "" === String(h[0]) &&
                        (s.lastIndex = Ii(a, st(s.lastIndex), u));
                }
                for (var d, p = "", v = 0, g = 0; g < f.length; g++) {
                    h = f[g];
                    for (
                        var y = String(h[0]),
                            b = Pi(Vi(it(h.index), a.length), 0),
                            m = [],
                            x = 1;
                        x < h.length;
                        x++
                    )
                        m.push(void 0 === (d = h[x]) ? d : String(d));
                    var E = h.groups;
                    if (c) {
                        var w = [y].concat(m, b, a);
                        void 0 !== E && w.push(E);
                        var O = String(i.apply(void 0, w));
                    } else O = n(y, a, b, m, E, i);
                    b >= v && ((p += a.slice(v, b) + O), (v = b + y.length));
                }
                return p + a.slice(v);
            },
        ];
        function n(t, r, n, i, o, s) {
            var a = n + t.length,
                c = i.length,
                l = Hi;
            return (
                void 0 !== o && ((o = Mt(o)), (l = Bi)),
                e.call(s, l, function (e, s) {
                    var l;
                    switch (s.charAt(0)) {
                        case "$":
                            return "$";
                        case "&":
                            return t;
                        case "`":
                            return r.slice(0, n);
                        case "'":
                            return r.slice(a);
                        case "<":
                            l = o[s.slice(1, -1)];
                            break;
                        default:
                            var u = +s;
                            if (0 === u) return e;
                            if (u > c) {
                                var f = Fi(u / 10);
                                return 0 === f
                                    ? e
                                    : f <= c
                                    ? void 0 === i[f - 1]
                                        ? s.charAt(1)
                                        : i[f - 1] + s.charAt(1)
                                    : e;
                            }
                            l = i[u - 1];
                    }
                    return void 0 === l ? "" : l;
                })
            );
        }
    });
    var qi = function (t) {
        return Array.prototype.reduce.call(
            t,
            function (t, e) {
                var r = e.name.match(/data-simplebar-(.+)/);
                if (r) {
                    var n = r[1].replace(/\W+(.)/g, function (t, e) {
                        return e.toUpperCase();
                    });
                    switch (e.value) {
                        case "true":
                            t[n] = !0;
                            break;
                        case "false":
                            t[n] = !1;
                            break;
                        case void 0:
                            t[n] = !0;
                            break;
                        default:
                            t[n] = e.value;
                    }
                }
                return t;
            },
            {}
        );
    };
    function $i(t) {
        return t && t.ownerDocument && t.ownerDocument.defaultView
            ? t.ownerDocument.defaultView
            : window;
    }
    function Xi(t) {
        return t && t.ownerDocument ? t.ownerDocument : document;
    }
    var Yi = (function () {
        function t(e, r) {
            var n = this;
            (this.onScroll = function () {
                var t = $i(n.el);
                n.scrollXTicking ||
                    (t.requestAnimationFrame(n.scrollX),
                    (n.scrollXTicking = !0)),
                    n.scrollYTicking ||
                        (t.requestAnimationFrame(n.scrollY),
                        (n.scrollYTicking = !0));
            }),
                (this.scrollX = function () {
                    n.axis.x.isOverflowing &&
                        (n.showScrollbar("x"), n.positionScrollbar("x")),
                        (n.scrollXTicking = !1);
                }),
                (this.scrollY = function () {
                    n.axis.y.isOverflowing &&
                        (n.showScrollbar("y"), n.positionScrollbar("y")),
                        (n.scrollYTicking = !1);
                }),
                (this.onMouseEnter = function () {
                    n.showScrollbar("x"), n.showScrollbar("y");
                }),
                (this.onMouseMove = function (t) {
                    (n.mouseX = t.clientX),
                        (n.mouseY = t.clientY),
                        (n.axis.x.isOverflowing || n.axis.x.forceVisible) &&
                            n.onMouseMoveForAxis("x"),
                        (n.axis.y.isOverflowing || n.axis.y.forceVisible) &&
                            n.onMouseMoveForAxis("y");
                }),
                (this.onMouseLeave = function () {
                    n.onMouseMove.cancel(),
                        (n.axis.x.isOverflowing || n.axis.x.forceVisible) &&
                            n.onMouseLeaveForAxis("x"),
                        (n.axis.y.isOverflowing || n.axis.y.forceVisible) &&
                            n.onMouseLeaveForAxis("y"),
                        (n.mouseX = -1),
                        (n.mouseY = -1);
                }),
                (this.onWindowResize = function () {
                    (n.scrollbarWidth = n.getScrollbarWidth()),
                        n.hideNativeScrollbar();
                }),
                (this.hideScrollbars = function () {
                    (n.axis.x.track.rect =
                        n.axis.x.track.el.getBoundingClientRect()),
                        (n.axis.y.track.rect =
                            n.axis.y.track.el.getBoundingClientRect()),
                        n.isWithinBounds(n.axis.y.track.rect) ||
                            (n.axis.y.scrollbar.el.classList.remove(
                                n.classNames.visible
                            ),
                            (n.axis.y.isVisible = !1)),
                        n.isWithinBounds(n.axis.x.track.rect) ||
                            (n.axis.x.scrollbar.el.classList.remove(
                                n.classNames.visible
                            ),
                            (n.axis.x.isVisible = !1));
                }),
                (this.onPointerEvent = function (t) {
                    var e, r;
                    (n.axis.x.track.rect =
                        n.axis.x.track.el.getBoundingClientRect()),
                        (n.axis.y.track.rect =
                            n.axis.y.track.el.getBoundingClientRect()),
                        (n.axis.x.isOverflowing || n.axis.x.forceVisible) &&
                            (e = n.isWithinBounds(n.axis.x.track.rect)),
                        (n.axis.y.isOverflowing || n.axis.y.forceVisible) &&
                            (r = n.isWithinBounds(n.axis.y.track.rect)),
                        (e || r) &&
                            (t.preventDefault(),
                            t.stopPropagation(),
                            "mousedown" === t.type &&
                                (e &&
                                    ((n.axis.x.scrollbar.rect =
                                        n.axis.x.scrollbar.el.getBoundingClientRect()),
                                    n.isWithinBounds(n.axis.x.scrollbar.rect)
                                        ? n.onDragStart(t, "x")
                                        : n.onTrackClick(t, "x")),
                                r &&
                                    ((n.axis.y.scrollbar.rect =
                                        n.axis.y.scrollbar.el.getBoundingClientRect()),
                                    n.isWithinBounds(n.axis.y.scrollbar.rect)
                                        ? n.onDragStart(t, "y")
                                        : n.onTrackClick(t, "y"))));
                }),
                (this.drag = function (e) {
                    var r = n.axis[n.draggedAxis].track,
                        i = r.rect[n.axis[n.draggedAxis].sizeAttr],
                        o = n.axis[n.draggedAxis].scrollbar,
                        s =
                            n.contentWrapperEl[
                                n.axis[n.draggedAxis].scrollSizeAttr
                            ],
                        a = parseInt(
                            n.elStyles[n.axis[n.draggedAxis].sizeAttr],
                            10
                        );
                    e.preventDefault(), e.stopPropagation();
                    var c =
                        ((("y" === n.draggedAxis ? e.pageY : e.pageX) -
                            r.rect[n.axis[n.draggedAxis].offsetAttr] -
                            n.axis[n.draggedAxis].dragOffset) /
                            (i - o.size)) *
                        (s - a);
                    "x" === n.draggedAxis &&
                        ((c =
                            n.isRtl && t.getRtlHelpers().isRtlScrollbarInverted
                                ? c - (i + o.size)
                                : c),
                        (c =
                            n.isRtl && t.getRtlHelpers().isRtlScrollingInverted
                                ? -c
                                : c)),
                        (n.contentWrapperEl[
                            n.axis[n.draggedAxis].scrollOffsetAttr
                        ] = c);
                }),
                (this.onEndDrag = function (t) {
                    var e = Xi(n.el),
                        r = $i(n.el);
                    t.preventDefault(),
                        t.stopPropagation(),
                        n.el.classList.remove(n.classNames.dragging),
                        e.removeEventListener("mousemove", n.drag, !0),
                        e.removeEventListener("mouseup", n.onEndDrag, !0),
                        (n.removePreventClickId = r.setTimeout(function () {
                            e.removeEventListener("click", n.preventClick, !0),
                                e.removeEventListener(
                                    "dblclick",
                                    n.preventClick,
                                    !0
                                ),
                                (n.removePreventClickId = null);
                        }));
                }),
                (this.preventClick = function (t) {
                    t.preventDefault(), t.stopPropagation();
                }),
                (this.el = e),
                (this.minScrollbarWidth = 20),
                (this.options = Object.assign({}, t.defaultOptions, {}, r)),
                (this.classNames = Object.assign(
                    {},
                    t.defaultOptions.classNames,
                    {},
                    this.options.classNames
                )),
                (this.axis = {
                    x: {
                        scrollOffsetAttr: "scrollLeft",
                        sizeAttr: "width",
                        scrollSizeAttr: "scrollWidth",
                        offsetSizeAttr: "offsetWidth",
                        offsetAttr: "left",
                        overflowAttr: "overflowX",
                        dragOffset: 0,
                        isOverflowing: !0,
                        isVisible: !1,
                        forceVisible: !1,
                        track: {},
                        scrollbar: {},
                    },
                    y: {
                        scrollOffsetAttr: "scrollTop",
                        sizeAttr: "height",
                        scrollSizeAttr: "scrollHeight",
                        offsetSizeAttr: "offsetHeight",
                        offsetAttr: "top",
                        overflowAttr: "overflowY",
                        dragOffset: 0,
                        isOverflowing: !0,
                        isVisible: !1,
                        forceVisible: !1,
                        track: {},
                        scrollbar: {},
                    },
                }),
                (this.removePreventClickId = null),
                t.instances.has(this.el) ||
                    ((this.recalculate = Gr(this.recalculate.bind(this), 64)),
                    (this.onMouseMove = Gr(this.onMouseMove.bind(this), 64)),
                    (this.hideScrollbars = dn(
                        this.hideScrollbars.bind(this),
                        this.options.timeout
                    )),
                    (this.onWindowResize = dn(
                        this.onWindowResize.bind(this),
                        64,
                        { leading: !0 }
                    )),
                    (t.getRtlHelpers = Hn(t.getRtlHelpers)),
                    this.init());
        }
        (t.getRtlHelpers = function () {
            var e = document.createElement("div");
            e.innerHTML =
                '<div class="hs-dummy-scrollbar-size"><div style="height: 200%; width: 200%; margin: 10px 0;"></div></div>';
            var r = e.firstElementChild;
            document.body.appendChild(r);
            var n = r.firstElementChild;
            r.scrollLeft = 0;
            var i = t.getOffset(r),
                o = t.getOffset(n);
            r.scrollLeft = 999;
            var s = t.getOffset(n);
            return {
                isRtlScrollingInverted:
                    i.left !== o.left && o.left - s.left != 0,
                isRtlScrollbarInverted: i.left !== o.left,
            };
        }),
            (t.getOffset = function (t) {
                var e = t.getBoundingClientRect(),
                    r = Xi(t),
                    n = $i(t);
                return {
                    top: e.top + (n.pageYOffset || r.documentElement.scrollTop),
                    left:
                        e.left +
                        (n.pageXOffset || r.documentElement.scrollLeft),
                };
            });
        var e = t.prototype;
        return (
            (e.init = function () {
                t.instances.set(this.el, this),
                    Yt &&
                        (this.initDOM(),
                        (this.scrollbarWidth = this.getScrollbarWidth()),
                        this.recalculate(),
                        this.initListeners());
            }),
            (e.initDOM = function () {
                var t = this;
                if (
                    Array.prototype.filter.call(this.el.children, function (e) {
                        return e.classList.contains(t.classNames.wrapper);
                    }).length
                )
                    (this.wrapperEl = this.el.querySelector(
                        "." + this.classNames.wrapper
                    )),
                        (this.contentWrapperEl =
                            this.options.scrollableNode ||
                            this.el.querySelector(
                                "." + this.classNames.contentWrapper
                            )),
                        (this.contentEl =
                            this.options.contentNode ||
                            this.el.querySelector(
                                "." + this.classNames.contentEl
                            )),
                        (this.offsetEl = this.el.querySelector(
                            "." + this.classNames.offset
                        )),
                        (this.maskEl = this.el.querySelector(
                            "." + this.classNames.mask
                        )),
                        (this.placeholderEl = this.findChild(
                            this.wrapperEl,
                            "." + this.classNames.placeholder
                        )),
                        (this.heightAutoObserverWrapperEl =
                            this.el.querySelector(
                                "." +
                                    this.classNames.heightAutoObserverWrapperEl
                            )),
                        (this.heightAutoObserverEl = this.el.querySelector(
                            "." + this.classNames.heightAutoObserverEl
                        )),
                        (this.axis.x.track.el = this.findChild(
                            this.el,
                            "." +
                                this.classNames.track +
                                "." +
                                this.classNames.horizontal
                        )),
                        (this.axis.y.track.el = this.findChild(
                            this.el,
                            "." +
                                this.classNames.track +
                                "." +
                                this.classNames.vertical
                        ));
                else {
                    for (
                        this.wrapperEl = document.createElement("div"),
                            this.contentWrapperEl =
                                document.createElement("div"),
                            this.offsetEl = document.createElement("div"),
                            this.maskEl = document.createElement("div"),
                            this.contentEl = document.createElement("div"),
                            this.placeholderEl = document.createElement("div"),
                            this.heightAutoObserverWrapperEl =
                                document.createElement("div"),
                            this.heightAutoObserverEl =
                                document.createElement("div"),
                            this.wrapperEl.classList.add(
                                this.classNames.wrapper
                            ),
                            this.contentWrapperEl.classList.add(
                                this.classNames.contentWrapper
                            ),
                            this.offsetEl.classList.add(this.classNames.offset),
                            this.maskEl.classList.add(this.classNames.mask),
                            this.contentEl.classList.add(
                                this.classNames.contentEl
                            ),
                            this.placeholderEl.classList.add(
                                this.classNames.placeholder
                            ),
                            this.heightAutoObserverWrapperEl.classList.add(
                                this.classNames.heightAutoObserverWrapperEl
                            ),
                            this.heightAutoObserverEl.classList.add(
                                this.classNames.heightAutoObserverEl
                            );
                        this.el.firstChild;

                    )
                        this.contentEl.appendChild(this.el.firstChild);
                    this.contentWrapperEl.appendChild(this.contentEl),
                        this.offsetEl.appendChild(this.contentWrapperEl),
                        this.maskEl.appendChild(this.offsetEl),
                        this.heightAutoObserverWrapperEl.appendChild(
                            this.heightAutoObserverEl
                        ),
                        this.wrapperEl.appendChild(
                            this.heightAutoObserverWrapperEl
                        ),
                        this.wrapperEl.appendChild(this.maskEl),
                        this.wrapperEl.appendChild(this.placeholderEl),
                        this.el.appendChild(this.wrapperEl);
                }
                if (!this.axis.x.track.el || !this.axis.y.track.el) {
                    var e = document.createElement("div"),
                        r = document.createElement("div");
                    e.classList.add(this.classNames.track),
                        r.classList.add(this.classNames.scrollbar),
                        e.appendChild(r),
                        (this.axis.x.track.el = e.cloneNode(!0)),
                        this.axis.x.track.el.classList.add(
                            this.classNames.horizontal
                        ),
                        (this.axis.y.track.el = e.cloneNode(!0)),
                        this.axis.y.track.el.classList.add(
                            this.classNames.vertical
                        ),
                        this.el.appendChild(this.axis.x.track.el),
                        this.el.appendChild(this.axis.y.track.el);
                }
                (this.axis.x.scrollbar.el = this.axis.x.track.el.querySelector(
                    "." + this.classNames.scrollbar
                )),
                    (this.axis.y.scrollbar.el =
                        this.axis.y.track.el.querySelector(
                            "." + this.classNames.scrollbar
                        )),
                    this.options.autoHide ||
                        (this.axis.x.scrollbar.el.classList.add(
                            this.classNames.visible
                        ),
                        this.axis.y.scrollbar.el.classList.add(
                            this.classNames.visible
                        )),
                    this.el.setAttribute("data-simplebar", "init");
            }),
            (e.initListeners = function () {
                var t = this,
                    e = $i(this.el);
                this.options.autoHide &&
                    this.el.addEventListener("mouseenter", this.onMouseEnter),
                    ["mousedown", "click", "dblclick"].forEach(function (e) {
                        t.el.addEventListener(e, t.onPointerEvent, !0);
                    }),
                    ["touchstart", "touchend", "touchmove"].forEach(function (
                        e
                    ) {
                        t.el.addEventListener(e, t.onPointerEvent, {
                            capture: !0,
                            passive: !0,
                        });
                    }),
                    this.el.addEventListener("mousemove", this.onMouseMove),
                    this.el.addEventListener("mouseleave", this.onMouseLeave),
                    this.contentWrapperEl.addEventListener(
                        "scroll",
                        this.onScroll
                    ),
                    e.addEventListener("resize", this.onWindowResize);
                var r = !1,
                    n = e.ResizeObserver || di;
                (this.resizeObserver = new n(function () {
                    r && t.recalculate();
                })),
                    this.resizeObserver.observe(this.el),
                    this.resizeObserver.observe(this.contentEl),
                    e.requestAnimationFrame(function () {
                        r = !0;
                    }),
                    (this.mutationObserver = new e.MutationObserver(
                        this.recalculate
                    )),
                    this.mutationObserver.observe(this.contentEl, {
                        childList: !0,
                        subtree: !0,
                        characterData: !0,
                    });
            }),
            (e.recalculate = function () {
                var t = $i(this.el);
                (this.elStyles = t.getComputedStyle(this.el)),
                    (this.isRtl = "rtl" === this.elStyles.direction);
                var e = this.heightAutoObserverEl.offsetHeight <= 1,
                    r = this.heightAutoObserverEl.offsetWidth <= 1,
                    n = this.contentEl.offsetWidth,
                    i = this.contentWrapperEl.offsetWidth,
                    o = this.elStyles.overflowX,
                    s = this.elStyles.overflowY;
                (this.contentEl.style.padding =
                    this.elStyles.paddingTop +
                    " " +
                    this.elStyles.paddingRight +
                    " " +
                    this.elStyles.paddingBottom +
                    " " +
                    this.elStyles.paddingLeft),
                    (this.wrapperEl.style.margin =
                        "-" +
                        this.elStyles.paddingTop +
                        " -" +
                        this.elStyles.paddingRight +
                        " -" +
                        this.elStyles.paddingBottom +
                        " -" +
                        this.elStyles.paddingLeft);
                var a = this.contentEl.scrollHeight,
                    c = this.contentEl.scrollWidth;
                (this.contentWrapperEl.style.height = e ? "auto" : "100%"),
                    (this.placeholderEl.style.width = r ? n + "px" : "auto"),
                    (this.placeholderEl.style.height = a + "px");
                var l = this.contentWrapperEl.offsetHeight;
                (this.axis.x.isOverflowing = c > n),
                    (this.axis.y.isOverflowing = a > l),
                    (this.axis.x.isOverflowing =
                        "hidden" !== o && this.axis.x.isOverflowing),
                    (this.axis.y.isOverflowing =
                        "hidden" !== s && this.axis.y.isOverflowing),
                    (this.axis.x.forceVisible =
                        "x" === this.options.forceVisible ||
                        !0 === this.options.forceVisible),
                    (this.axis.y.forceVisible =
                        "y" === this.options.forceVisible ||
                        !0 === this.options.forceVisible),
                    this.hideNativeScrollbar();
                var u = this.axis.x.isOverflowing ? this.scrollbarWidth : 0,
                    f = this.axis.y.isOverflowing ? this.scrollbarWidth : 0;
                (this.axis.x.isOverflowing =
                    this.axis.x.isOverflowing && c > i - f),
                    (this.axis.y.isOverflowing =
                        this.axis.y.isOverflowing && a > l - u),
                    (this.axis.x.scrollbar.size = this.getScrollbarSize("x")),
                    (this.axis.y.scrollbar.size = this.getScrollbarSize("y")),
                    (this.axis.x.scrollbar.el.style.width =
                        this.axis.x.scrollbar.size + "px"),
                    (this.axis.y.scrollbar.el.style.height =
                        this.axis.y.scrollbar.size + "px"),
                    this.positionScrollbar("x"),
                    this.positionScrollbar("y"),
                    this.toggleTrackVisibility("x"),
                    this.toggleTrackVisibility("y");
            }),
            (e.getScrollbarSize = function (t) {
                if ((void 0 === t && (t = "y"), !this.axis[t].isOverflowing))
                    return 0;
                var e,
                    r = this.contentEl[this.axis[t].scrollSizeAttr],
                    n = this.axis[t].track.el[this.axis[t].offsetSizeAttr],
                    i = n / r;
                return (
                    (e = Math.max(~~(i * n), this.options.scrollbarMinSize)),
                    this.options.scrollbarMaxSize &&
                        (e = Math.min(e, this.options.scrollbarMaxSize)),
                    e
                );
            }),
            (e.positionScrollbar = function (e) {
                if ((void 0 === e && (e = "y"), this.axis[e].isOverflowing)) {
                    var r = this.contentWrapperEl[this.axis[e].scrollSizeAttr],
                        n = this.axis[e].track.el[this.axis[e].offsetSizeAttr],
                        i = parseInt(this.elStyles[this.axis[e].sizeAttr], 10),
                        o = this.axis[e].scrollbar,
                        s =
                            this.contentWrapperEl[
                                this.axis[e].scrollOffsetAttr
                            ],
                        a =
                            (s =
                                "x" === e &&
                                this.isRtl &&
                                t.getRtlHelpers().isRtlScrollingInverted
                                    ? -s
                                    : s) /
                            (r - i),
                        c = ~~((n - o.size) * a);
                    (c =
                        "x" === e &&
                        this.isRtl &&
                        t.getRtlHelpers().isRtlScrollbarInverted
                            ? c + (n - o.size)
                            : c),
                        (o.el.style.transform =
                            "x" === e
                                ? "translate3d(" + c + "px, 0, 0)"
                                : "translate3d(0, " + c + "px, 0)");
                }
            }),
            (e.toggleTrackVisibility = function (t) {
                void 0 === t && (t = "y");
                var e = this.axis[t].track.el,
                    r = this.axis[t].scrollbar.el;
                this.axis[t].isOverflowing || this.axis[t].forceVisible
                    ? ((e.style.visibility = "visible"),
                      (this.contentWrapperEl.style[this.axis[t].overflowAttr] =
                          "scroll"))
                    : ((e.style.visibility = "hidden"),
                      (this.contentWrapperEl.style[this.axis[t].overflowAttr] =
                          "hidden")),
                    this.axis[t].isOverflowing
                        ? (r.style.display = "block")
                        : (r.style.display = "none");
            }),
            (e.hideNativeScrollbar = function () {
                (this.offsetEl.style[this.isRtl ? "left" : "right"] =
                    this.axis.y.isOverflowing || this.axis.y.forceVisible
                        ? "-" + this.scrollbarWidth + "px"
                        : 0),
                    (this.offsetEl.style.bottom =
                        this.axis.x.isOverflowing || this.axis.x.forceVisible
                            ? "-" + this.scrollbarWidth + "px"
                            : 0);
            }),
            (e.onMouseMoveForAxis = function (t) {
                void 0 === t && (t = "y"),
                    (this.axis[t].track.rect =
                        this.axis[t].track.el.getBoundingClientRect()),
                    (this.axis[t].scrollbar.rect =
                        this.axis[t].scrollbar.el.getBoundingClientRect()),
                    this.isWithinBounds(this.axis[t].scrollbar.rect)
                        ? this.axis[t].scrollbar.el.classList.add(
                              this.classNames.hover
                          )
                        : this.axis[t].scrollbar.el.classList.remove(
                              this.classNames.hover
                          ),
                    this.isWithinBounds(this.axis[t].track.rect)
                        ? (this.showScrollbar(t),
                          this.axis[t].track.el.classList.add(
                              this.classNames.hover
                          ))
                        : this.axis[t].track.el.classList.remove(
                              this.classNames.hover
                          );
            }),
            (e.onMouseLeaveForAxis = function (t) {
                void 0 === t && (t = "y"),
                    this.axis[t].track.el.classList.remove(
                        this.classNames.hover
                    ),
                    this.axis[t].scrollbar.el.classList.remove(
                        this.classNames.hover
                    );
            }),
            (e.showScrollbar = function (t) {
                void 0 === t && (t = "y");
                var e = this.axis[t].scrollbar.el;
                this.axis[t].isVisible ||
                    (e.classList.add(this.classNames.visible),
                    (this.axis[t].isVisible = !0)),
                    this.options.autoHide && this.hideScrollbars();
            }),
            (e.onDragStart = function (t, e) {
                void 0 === e && (e = "y");
                var r = Xi(this.el),
                    n = $i(this.el),
                    i = this.axis[e].scrollbar,
                    o = "y" === e ? t.pageY : t.pageX;
                (this.axis[e].dragOffset = o - i.rect[this.axis[e].offsetAttr]),
                    (this.draggedAxis = e),
                    this.el.classList.add(this.classNames.dragging),
                    r.addEventListener("mousemove", this.drag, !0),
                    r.addEventListener("mouseup", this.onEndDrag, !0),
                    null === this.removePreventClickId
                        ? (r.addEventListener("click", this.preventClick, !0),
                          r.addEventListener("dblclick", this.preventClick, !0))
                        : (n.clearTimeout(this.removePreventClickId),
                          (this.removePreventClickId = null));
            }),
            (e.onTrackClick = function (t, e) {
                var r = this;
                if ((void 0 === e && (e = "y"), this.options.clickOnTrack)) {
                    var n = $i(this.el);
                    this.axis[e].scrollbar.rect =
                        this.axis[e].scrollbar.el.getBoundingClientRect();
                    var i =
                            this.axis[e].scrollbar.rect[
                                this.axis[e].offsetAttr
                            ],
                        o = parseInt(this.elStyles[this.axis[e].sizeAttr], 10),
                        s =
                            this.contentWrapperEl[
                                this.axis[e].scrollOffsetAttr
                            ],
                        a =
                            ("y" === e ? this.mouseY - i : this.mouseX - i) < 0
                                ? -1
                                : 1,
                        c = -1 === a ? s - o : s + o;
                    !(function t() {
                        var i, o;
                        -1 === a
                            ? s > c &&
                              ((s -= r.options.clickOnTrackSpeed),
                              r.contentWrapperEl.scrollTo(
                                  (((i = {})[r.axis[e].offsetAttr] = s), i)
                              ),
                              n.requestAnimationFrame(t))
                            : s < c &&
                              ((s += r.options.clickOnTrackSpeed),
                              r.contentWrapperEl.scrollTo(
                                  (((o = {})[r.axis[e].offsetAttr] = s), o)
                              ),
                              n.requestAnimationFrame(t));
                    })();
                }
            }),
            (e.getContentElement = function () {
                return this.contentEl;
            }),
            (e.getScrollElement = function () {
                return this.contentWrapperEl;
            }),
            (e.getScrollbarWidth = function () {
                try {
                    return "none" ===
                        getComputedStyle(
                            this.contentWrapperEl,
                            "::-webkit-scrollbar"
                        ).display ||
                        "scrollbarWidth" in document.documentElement.style ||
                        "-ms-overflow-style" in document.documentElement.style
                        ? 0
                        : gi();
                } catch (t) {
                    return gi();
                }
            }),
            (e.removeListeners = function () {
                var t = this,
                    e = $i(this.el);
                this.options.autoHide &&
                    this.el.removeEventListener(
                        "mouseenter",
                        this.onMouseEnter
                    ),
                    ["mousedown", "click", "dblclick"].forEach(function (e) {
                        t.el.removeEventListener(e, t.onPointerEvent, !0);
                    }),
                    ["touchstart", "touchend", "touchmove"].forEach(function (
                        e
                    ) {
                        t.el.removeEventListener(e, t.onPointerEvent, {
                            capture: !0,
                            passive: !0,
                        });
                    }),
                    this.el.removeEventListener("mousemove", this.onMouseMove),
                    this.el.removeEventListener(
                        "mouseleave",
                        this.onMouseLeave
                    ),
                    this.contentWrapperEl &&
                        this.contentWrapperEl.removeEventListener(
                            "scroll",
                            this.onScroll
                        ),
                    e.removeEventListener("resize", this.onWindowResize),
                    this.mutationObserver && this.mutationObserver.disconnect(),
                    this.resizeObserver && this.resizeObserver.disconnect(),
                    this.recalculate.cancel(),
                    this.onMouseMove.cancel(),
                    this.hideScrollbars.cancel(),
                    this.onWindowResize.cancel();
            }),
            (e.unMount = function () {
                this.removeListeners(), t.instances.delete(this.el);
            }),
            (e.isWithinBounds = function (t) {
                return (
                    this.mouseX >= t.left &&
                    this.mouseX <= t.left + t.width &&
                    this.mouseY >= t.top &&
                    this.mouseY <= t.top + t.height
                );
            }),
            (e.findChild = function (t, e) {
                var r =
                    t.matches ||
                    t.webkitMatchesSelector ||
                    t.mozMatchesSelector ||
                    t.msMatchesSelector;
                return Array.prototype.filter.call(t.children, function (t) {
                    return r.call(t, e);
                })[0];
            }),
            t
        );
    })();
    return (
        (Yi.defaultOptions = {
            autoHide: !0,
            forceVisible: !1,
            clickOnTrack: !0,
            clickOnTrackSpeed: 40,
            classNames: {
                contentEl: "simplebar-content",
                contentWrapper: "simplebar-content-wrapper",
                offset: "simplebar-offset",
                mask: "simplebar-mask",
                wrapper: "simplebar-wrapper",
                placeholder: "simplebar-placeholder",
                scrollbar: "simplebar-scrollbar",
                track: "simplebar-track",
                heightAutoObserverWrapperEl:
                    "simplebar-height-auto-observer-wrapper",
                heightAutoObserverEl: "simplebar-height-auto-observer",
                visible: "simplebar-visible",
                horizontal: "simplebar-horizontal",
                vertical: "simplebar-vertical",
                hover: "simplebar-hover",
                dragging: "simplebar-dragging",
            },
            scrollbarMinSize: 25,
            scrollbarMaxSize: 0,
            timeout: 1e3,
        }),
        (Yi.instances = new WeakMap()),
        (Yi.initDOMLoadedElements = function () {
            document.removeEventListener(
                "DOMContentLoaded",
                this.initDOMLoadedElements
            ),
                window.removeEventListener("load", this.initDOMLoadedElements),
                Array.prototype.forEach.call(
                    document.querySelectorAll("[data-simplebar]"),
                    function (t) {
                        "init" === t.getAttribute("data-simplebar") ||
                            Yi.instances.has(t) ||
                            new Yi(t, qi(t.attributes));
                    }
                );
        }),
        (Yi.removeObserver = function () {
            this.globalObserver.disconnect();
        }),
        (Yi.initHtmlApi = function () {
            (this.initDOMLoadedElements =
                this.initDOMLoadedElements.bind(this)),
                "undefined" != typeof MutationObserver &&
                    ((this.globalObserver = new MutationObserver(
                        Yi.handleMutations
                    )),
                    this.globalObserver.observe(document, {
                        childList: !0,
                        subtree: !0,
                    })),
                "complete" === document.readyState ||
                ("loading" !== document.readyState &&
                    !document.documentElement.doScroll)
                    ? window.setTimeout(this.initDOMLoadedElements)
                    : (document.addEventListener(
                          "DOMContentLoaded",
                          this.initDOMLoadedElements
                      ),
                      window.addEventListener(
                          "load",
                          this.initDOMLoadedElements
                      ));
        }),
        (Yi.handleMutations = function (t) {
            t.forEach(function (t) {
                Array.prototype.forEach.call(t.addedNodes, function (t) {
                    1 === t.nodeType &&
                        (t.hasAttribute("data-simplebar")
                            ? !Yi.instances.has(t) &&
                              new Yi(t, qi(t.attributes))
                            : Array.prototype.forEach.call(
                                  t.querySelectorAll("[data-simplebar]"),
                                  function (t) {
                                      "init" ===
                                          t.getAttribute("data-simplebar") ||
                                          Yi.instances.has(t) ||
                                          new Yi(t, qi(t.attributes));
                                  }
                              ));
                }),
                    Array.prototype.forEach.call(t.removedNodes, function (t) {
                        1 === t.nodeType &&
                            (t.hasAttribute('[data-simplebar="init"]')
                                ? Yi.instances.has(t) &&
                                  Yi.instances.get(t).unMount()
                                : Array.prototype.forEach.call(
                                      t.querySelectorAll(
                                          '[data-simplebar="init"]'
                                      ),
                                      function (t) {
                                          Yi.instances.has(t) &&
                                              Yi.instances.get(t).unMount();
                                      }
                                  ));
                    });
            });
        }),
        (Yi.getOptions = qi),
        Yt && Yi.initHtmlApi(),
        Yi
    );
});

/*!
 * Bootstrap v5.1.3 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
!(function (t, e) {
    "object" == typeof exports && "undefined" != typeof module
        ? (module.exports = e())
        : "function" == typeof define && define.amd
        ? define(e)
        : ((t =
              "undefined" != typeof globalThis
                  ? globalThis
                  : t || self).bootstrap = e());
})(this, function () {
    "use strict";
    const t = "transitionend",
        e = (t) => {
            let e = t.getAttribute("data-bs-target");
            if (!e || "#" === e) {
                let i = t.getAttribute("href");
                if (!i || (!i.includes("#") && !i.startsWith("."))) return null;
                i.includes("#") &&
                    !i.startsWith("#") &&
                    (i = `#${i.split("#")[1]}`),
                    (e = i && "#" !== i ? i.trim() : null);
            }
            return e;
        },
        i = (t) => {
            const i = e(t);
            return i && document.querySelector(i) ? i : null;
        },
        n = (t) => {
            const i = e(t);
            return i ? document.querySelector(i) : null;
        },
        s = (e) => {
            e.dispatchEvent(new Event(t));
        },
        o = (t) =>
            !(!t || "object" != typeof t) &&
            (void 0 !== t.jquery && (t = t[0]), void 0 !== t.nodeType),
        r = (t) =>
            o(t)
                ? t.jquery
                    ? t[0]
                    : t
                : "string" == typeof t && t.length > 0
                ? document.querySelector(t)
                : null,
        a = (t, e, i) => {
            Object.keys(i).forEach((n) => {
                const s = i[n],
                    r = e[n],
                    a =
                        r && o(r)
                            ? "element"
                            : null == (l = r)
                            ? `${l}`
                            : {}.toString
                                  .call(l)
                                  .match(/\s([a-z]+)/i)[1]
                                  .toLowerCase();
                var l;
                if (!new RegExp(s).test(a))
                    throw new TypeError(
                        `${t.toUpperCase()}: Option "${n}" provided type "${a}" but expected type "${s}".`
                    );
            });
        },
        l = (t) =>
            !(!o(t) || 0 === t.getClientRects().length) &&
            "visible" === getComputedStyle(t).getPropertyValue("visibility"),
        c = (t) =>
            !t ||
            t.nodeType !== Node.ELEMENT_NODE ||
            !!t.classList.contains("disabled") ||
            (void 0 !== t.disabled
                ? t.disabled
                : t.hasAttribute("disabled") &&
                  "false" !== t.getAttribute("disabled")),
        h = (t) => {
            if (!document.documentElement.attachShadow) return null;
            if ("function" == typeof t.getRootNode) {
                const e = t.getRootNode();
                return e instanceof ShadowRoot ? e : null;
            }
            return t instanceof ShadowRoot
                ? t
                : t.parentNode
                ? h(t.parentNode)
                : null;
        },
        d = () => {},
        u = (t) => {
            t.offsetHeight;
        },
        f = () => {
            const { jQuery: t } = window;
            return t && !document.body.hasAttribute("data-bs-no-jquery")
                ? t
                : null;
        },
        p = [],
        m = () => "rtl" === document.documentElement.dir,
        g = (t) => {
            var e;
            (e = () => {
                const e = f();
                if (e) {
                    const i = t.NAME,
                        n = e.fn[i];
                    (e.fn[i] = t.jQueryInterface),
                        (e.fn[i].Constructor = t),
                        (e.fn[i].noConflict = () => (
                            (e.fn[i] = n), t.jQueryInterface
                        ));
                }
            }),
                "loading" === document.readyState
                    ? (p.length ||
                          document.addEventListener("DOMContentLoaded", () => {
                              p.forEach((t) => t());
                          }),
                      p.push(e))
                    : e();
        },
        _ = (t) => {
            "function" == typeof t && t();
        },
        b = (e, i, n = !0) => {
            if (!n) return void _(e);
            const o =
                ((t) => {
                    if (!t) return 0;
                    let { transitionDuration: e, transitionDelay: i } =
                        window.getComputedStyle(t);
                    const n = Number.parseFloat(e),
                        s = Number.parseFloat(i);
                    return n || s
                        ? ((e = e.split(",")[0]),
                          (i = i.split(",")[0]),
                          1e3 * (Number.parseFloat(e) + Number.parseFloat(i)))
                        : 0;
                })(i) + 5;
            let r = !1;
            const a = ({ target: n }) => {
                n === i && ((r = !0), i.removeEventListener(t, a), _(e));
            };
            i.addEventListener(t, a),
                setTimeout(() => {
                    r || s(i);
                }, o);
        },
        v = (t, e, i, n) => {
            let s = t.indexOf(e);
            if (-1 === s) return t[!i && n ? t.length - 1 : 0];
            const o = t.length;
            return (
                (s += i ? 1 : -1),
                n && (s = (s + o) % o),
                t[Math.max(0, Math.min(s, o - 1))]
            );
        },
        y = /[^.]*(?=\..*)\.|.*/,
        w = /\..*/,
        E = /::\d+$/,
        A = {};
    let T = 1;
    const O = { mouseenter: "mouseover", mouseleave: "mouseout" },
        C = /^(mouseenter|mouseleave)/i,
        k = new Set([
            "click",
            "dblclick",
            "mouseup",
            "mousedown",
            "contextmenu",
            "mousewheel",
            "DOMMouseScroll",
            "mouseover",
            "mouseout",
            "mousemove",
            "selectstart",
            "selectend",
            "keydown",
            "keypress",
            "keyup",
            "orientationchange",
            "touchstart",
            "touchmove",
            "touchend",
            "touchcancel",
            "pointerdown",
            "pointermove",
            "pointerup",
            "pointerleave",
            "pointercancel",
            "gesturestart",
            "gesturechange",
            "gestureend",
            "focus",
            "blur",
            "change",
            "reset",
            "select",
            "submit",
            "focusin",
            "focusout",
            "load",
            "unload",
            "beforeunload",
            "resize",
            "move",
            "DOMContentLoaded",
            "readystatechange",
            "error",
            "abort",
            "scroll",
        ]);
    function L(t, e) {
        return (e && `${e}::${T++}`) || t.uidEvent || T++;
    }
    function x(t) {
        const e = L(t);
        return (t.uidEvent = e), (A[e] = A[e] || {}), A[e];
    }
    function D(t, e, i = null) {
        const n = Object.keys(t);
        for (let s = 0, o = n.length; s < o; s++) {
            const o = t[n[s]];
            if (o.originalHandler === e && o.delegationSelector === i) return o;
        }
        return null;
    }
    function S(t, e, i) {
        const n = "string" == typeof e,
            s = n ? i : e;
        let o = P(t);
        return k.has(o) || (o = t), [n, s, o];
    }
    function N(t, e, i, n, s) {
        if ("string" != typeof e || !t) return;
        if ((i || ((i = n), (n = null)), C.test(e))) {
            const t = (t) =>
                function (e) {
                    if (
                        !e.relatedTarget ||
                        (e.relatedTarget !== e.delegateTarget &&
                            !e.delegateTarget.contains(e.relatedTarget))
                    )
                        return t.call(this, e);
                };
            n ? (n = t(n)) : (i = t(i));
        }
        const [o, r, a] = S(e, i, n),
            l = x(t),
            c = l[a] || (l[a] = {}),
            h = D(c, r, o ? i : null);
        if (h) return void (h.oneOff = h.oneOff && s);
        const d = L(r, e.replace(y, "")),
            u = o
                ? (function (t, e, i) {
                      return function n(s) {
                          const o = t.querySelectorAll(e);
                          for (
                              let { target: r } = s;
                              r && r !== this;
                              r = r.parentNode
                          )
                              for (let a = o.length; a--; )
                                  if (o[a] === r)
                                      return (
                                          (s.delegateTarget = r),
                                          n.oneOff && j.off(t, s.type, e, i),
                                          i.apply(r, [s])
                                      );
                          return null;
                      };
                  })(t, i, n)
                : (function (t, e) {
                      return function i(n) {
                          return (
                              (n.delegateTarget = t),
                              i.oneOff && j.off(t, n.type, e),
                              e.apply(t, [n])
                          );
                      };
                  })(t, i);
        (u.delegationSelector = o ? i : null),
            (u.originalHandler = r),
            (u.oneOff = s),
            (u.uidEvent = d),
            (c[d] = u),
            t.addEventListener(a, u, o);
    }
    function I(t, e, i, n, s) {
        const o = D(e[i], n, s);
        o && (t.removeEventListener(i, o, Boolean(s)), delete e[i][o.uidEvent]);
    }
    function P(t) {
        return (t = t.replace(w, "")), O[t] || t;
    }
    const j = {
            on(t, e, i, n) {
                N(t, e, i, n, !1);
            },
            one(t, e, i, n) {
                N(t, e, i, n, !0);
            },
            off(t, e, i, n) {
                if ("string" != typeof e || !t) return;
                const [s, o, r] = S(e, i, n),
                    a = r !== e,
                    l = x(t),
                    c = e.startsWith(".");
                if (void 0 !== o) {
                    if (!l || !l[r]) return;
                    return void I(t, l, r, o, s ? i : null);
                }
                c &&
                    Object.keys(l).forEach((i) => {
                        !(function (t, e, i, n) {
                            const s = e[i] || {};
                            Object.keys(s).forEach((o) => {
                                if (o.includes(n)) {
                                    const n = s[o];
                                    I(
                                        t,
                                        e,
                                        i,
                                        n.originalHandler,
                                        n.delegationSelector
                                    );
                                }
                            });
                        })(t, l, i, e.slice(1));
                    });
                const h = l[r] || {};
                Object.keys(h).forEach((i) => {
                    const n = i.replace(E, "");
                    if (!a || e.includes(n)) {
                        const e = h[i];
                        I(t, l, r, e.originalHandler, e.delegationSelector);
                    }
                });
            },
            trigger(t, e, i) {
                if ("string" != typeof e || !t) return null;
                const n = f(),
                    s = P(e),
                    o = e !== s,
                    r = k.has(s);
                let a,
                    l = !0,
                    c = !0,
                    h = !1,
                    d = null;
                return (
                    o &&
                        n &&
                        ((a = n.Event(e, i)),
                        n(t).trigger(a),
                        (l = !a.isPropagationStopped()),
                        (c = !a.isImmediatePropagationStopped()),
                        (h = a.isDefaultPrevented())),
                    r
                        ? ((d = document.createEvent("HTMLEvents")),
                          d.initEvent(s, l, !0))
                        : (d = new CustomEvent(e, {
                              bubbles: l,
                              cancelable: !0,
                          })),
                    void 0 !== i &&
                        Object.keys(i).forEach((t) => {
                            Object.defineProperty(d, t, { get: () => i[t] });
                        }),
                    h && d.preventDefault(),
                    c && t.dispatchEvent(d),
                    d.defaultPrevented && void 0 !== a && a.preventDefault(),
                    d
                );
            },
        },
        M = new Map(),
        H = {
            set(t, e, i) {
                M.has(t) || M.set(t, new Map());
                const n = M.get(t);
                n.has(e) || 0 === n.size
                    ? n.set(e, i)
                    : console.error(
                          `Bootstrap doesn't allow more than one instance per element. Bound instance: ${
                              Array.from(n.keys())[0]
                          }.`
                      );
            },
            get: (t, e) => (M.has(t) && M.get(t).get(e)) || null,
            remove(t, e) {
                if (!M.has(t)) return;
                const i = M.get(t);
                i.delete(e), 0 === i.size && M.delete(t);
            },
        };
    class B {
        constructor(t) {
            (t = r(t)) &&
                ((this._element = t),
                H.set(this._element, this.constructor.DATA_KEY, this));
        }
        dispose() {
            H.remove(this._element, this.constructor.DATA_KEY),
                j.off(this._element, this.constructor.EVENT_KEY),
                Object.getOwnPropertyNames(this).forEach((t) => {
                    this[t] = null;
                });
        }
        _queueCallback(t, e, i = !0) {
            b(t, e, i);
        }
        static getInstance(t) {
            return H.get(r(t), this.DATA_KEY);
        }
        static getOrCreateInstance(t, e = {}) {
            return (
                this.getInstance(t) ||
                new this(t, "object" == typeof e ? e : null)
            );
        }
        static get VERSION() {
            return "5.1.3";
        }
        static get NAME() {
            throw new Error(
                'You have to implement the static method "NAME", for each component!'
            );
        }
        static get DATA_KEY() {
            return `bs.${this.NAME}`;
        }
        static get EVENT_KEY() {
            return `.${this.DATA_KEY}`;
        }
    }
    const R = (t, e = "hide") => {
        const i = `click.dismiss${t.EVENT_KEY}`,
            s = t.NAME;
        j.on(document, i, `[data-bs-dismiss="${s}"]`, function (i) {
            if (
                (["A", "AREA"].includes(this.tagName) && i.preventDefault(),
                c(this))
            )
                return;
            const o = n(this) || this.closest(`.${s}`);
            t.getOrCreateInstance(o)[e]();
        });
    };
    class W extends B {
        static get NAME() {
            return "alert";
        }
        close() {
            if (j.trigger(this._element, "close.bs.alert").defaultPrevented)
                return;
            this._element.classList.remove("show");
            const t = this._element.classList.contains("fade");
            this._queueCallback(() => this._destroyElement(), this._element, t);
        }
        _destroyElement() {
            this._element.remove(),
                j.trigger(this._element, "closed.bs.alert"),
                this.dispose();
        }
        static jQueryInterface(t) {
            return this.each(function () {
                const e = W.getOrCreateInstance(this);
                if ("string" == typeof t) {
                    if (
                        void 0 === e[t] ||
                        t.startsWith("_") ||
                        "constructor" === t
                    )
                        throw new TypeError(`No method named "${t}"`);
                    e[t](this);
                }
            });
        }
    }
    R(W, "close"), g(W);
    const $ = '[data-bs-toggle="button"]';
    class z extends B {
        static get NAME() {
            return "button";
        }
        toggle() {
            this._element.setAttribute(
                "aria-pressed",
                this._element.classList.toggle("active")
            );
        }
        static jQueryInterface(t) {
            return this.each(function () {
                const e = z.getOrCreateInstance(this);
                "toggle" === t && e[t]();
            });
        }
    }
    function q(t) {
        return (
            "true" === t ||
            ("false" !== t &&
                (t === Number(t).toString()
                    ? Number(t)
                    : "" === t || "null" === t
                    ? null
                    : t))
        );
    }
    function F(t) {
        return t.replace(/[A-Z]/g, (t) => `-${t.toLowerCase()}`);
    }
    j.on(document, "click.bs.button.data-api", $, (t) => {
        t.preventDefault();
        const e = t.target.closest($);
        z.getOrCreateInstance(e).toggle();
    }),
        g(z);
    const U = {
            setDataAttribute(t, e, i) {
                t.setAttribute(`data-bs-${F(e)}`, i);
            },
            removeDataAttribute(t, e) {
                t.removeAttribute(`data-bs-${F(e)}`);
            },
            getDataAttributes(t) {
                if (!t) return {};
                const e = {};
                return (
                    Object.keys(t.dataset)
                        .filter((t) => t.startsWith("bs"))
                        .forEach((i) => {
                            let n = i.replace(/^bs/, "");
                            (n =
                                n.charAt(0).toLowerCase() +
                                n.slice(1, n.length)),
                                (e[n] = q(t.dataset[i]));
                        }),
                    e
                );
            },
            getDataAttribute: (t, e) => q(t.getAttribute(`data-bs-${F(e)}`)),
            offset(t) {
                const e = t.getBoundingClientRect();
                return {
                    top: e.top + window.pageYOffset,
                    left: e.left + window.pageXOffset,
                };
            },
            position: (t) => ({ top: t.offsetTop, left: t.offsetLeft }),
        },
        V = {
            find: (t, e = document.documentElement) =>
                [].concat(...Element.prototype.querySelectorAll.call(e, t)),
            findOne: (t, e = document.documentElement) =>
                Element.prototype.querySelector.call(e, t),
            children: (t, e) =>
                [].concat(...t.children).filter((t) => t.matches(e)),
            parents(t, e) {
                const i = [];
                let n = t.parentNode;
                for (
                    ;
                    n && n.nodeType === Node.ELEMENT_NODE && 3 !== n.nodeType;

                )
                    n.matches(e) && i.push(n), (n = n.parentNode);
                return i;
            },
            prev(t, e) {
                let i = t.previousElementSibling;
                for (; i; ) {
                    if (i.matches(e)) return [i];
                    i = i.previousElementSibling;
                }
                return [];
            },
            next(t, e) {
                let i = t.nextElementSibling;
                for (; i; ) {
                    if (i.matches(e)) return [i];
                    i = i.nextElementSibling;
                }
                return [];
            },
            focusableChildren(t) {
                const e = [
                    "a",
                    "button",
                    "input",
                    "textarea",
                    "select",
                    "details",
                    "[tabindex]",
                    '[contenteditable="true"]',
                ]
                    .map((t) => `${t}:not([tabindex^="-"])`)
                    .join(", ");
                return this.find(e, t).filter((t) => !c(t) && l(t));
            },
        },
        K = "carousel",
        X = {
            interval: 5e3,
            keyboard: !0,
            slide: !1,
            pause: "hover",
            wrap: !0,
            touch: !0,
        },
        Y = {
            interval: "(number|boolean)",
            keyboard: "boolean",
            slide: "(boolean|string)",
            pause: "(string|boolean)",
            wrap: "boolean",
            touch: "boolean",
        },
        Q = "next",
        G = "prev",
        Z = "left",
        J = "right",
        tt = { ArrowLeft: J, ArrowRight: Z },
        et = "slid.bs.carousel",
        it = "active",
        nt = ".active.carousel-item";
    class st extends B {
        constructor(t, e) {
            super(t),
                (this._items = null),
                (this._interval = null),
                (this._activeElement = null),
                (this._isPaused = !1),
                (this._isSliding = !1),
                (this.touchTimeout = null),
                (this.touchStartX = 0),
                (this.touchDeltaX = 0),
                (this._config = this._getConfig(e)),
                (this._indicatorsElement = V.findOne(
                    ".carousel-indicators",
                    this._element
                )),
                (this._touchSupported =
                    "ontouchstart" in document.documentElement ||
                    navigator.maxTouchPoints > 0),
                (this._pointerEvent = Boolean(window.PointerEvent)),
                this._addEventListeners();
        }
        static get Default() {
            return X;
        }
        static get NAME() {
            return K;
        }
        next() {
            this._slide(Q);
        }
        nextWhenVisible() {
            !document.hidden && l(this._element) && this.next();
        }
        prev() {
            this._slide(G);
        }
        pause(t) {
            t || (this._isPaused = !0),
                V.findOne(
                    ".carousel-item-next, .carousel-item-prev",
                    this._element
                ) && (s(this._element), this.cycle(!0)),
                clearInterval(this._interval),
                (this._interval = null);
        }
        cycle(t) {
            t || (this._isPaused = !1),
                this._interval &&
                    (clearInterval(this._interval), (this._interval = null)),
                this._config &&
                    this._config.interval &&
                    !this._isPaused &&
                    (this._updateInterval(),
                    (this._interval = setInterval(
                        (document.visibilityState
                            ? this.nextWhenVisible
                            : this.next
                        ).bind(this),
                        this._config.interval
                    )));
        }
        to(t) {
            this._activeElement = V.findOne(nt, this._element);
            const e = this._getItemIndex(this._activeElement);
            if (t > this._items.length - 1 || t < 0) return;
            if (this._isSliding)
                return void j.one(this._element, et, () => this.to(t));
            if (e === t) return this.pause(), void this.cycle();
            const i = t > e ? Q : G;
            this._slide(i, this._items[t]);
        }
        _getConfig(t) {
            return (
                (t = {
                    ...X,
                    ...U.getDataAttributes(this._element),
                    ...("object" == typeof t ? t : {}),
                }),
                a(K, t, Y),
                t
            );
        }
        _handleSwipe() {
            const t = Math.abs(this.touchDeltaX);
            if (t <= 40) return;
            const e = t / this.touchDeltaX;
            (this.touchDeltaX = 0), e && this._slide(e > 0 ? J : Z);
        }
        _addEventListeners() {
            this._config.keyboard &&
                j.on(this._element, "keydown.bs.carousel", (t) =>
                    this._keydown(t)
                ),
                "hover" === this._config.pause &&
                    (j.on(this._element, "mouseenter.bs.carousel", (t) =>
                        this.pause(t)
                    ),
                    j.on(this._element, "mouseleave.bs.carousel", (t) =>
                        this.cycle(t)
                    )),
                this._config.touch &&
                    this._touchSupported &&
                    this._addTouchEventListeners();
        }
        _addTouchEventListeners() {
            const t = (t) =>
                    this._pointerEvent &&
                    ("pen" === t.pointerType || "touch" === t.pointerType),
                e = (e) => {
                    t(e)
                        ? (this.touchStartX = e.clientX)
                        : this._pointerEvent ||
                          (this.touchStartX = e.touches[0].clientX);
                },
                i = (t) => {
                    this.touchDeltaX =
                        t.touches && t.touches.length > 1
                            ? 0
                            : t.touches[0].clientX - this.touchStartX;
                },
                n = (e) => {
                    t(e) && (this.touchDeltaX = e.clientX - this.touchStartX),
                        this._handleSwipe(),
                        "hover" === this._config.pause &&
                            (this.pause(),
                            this.touchTimeout &&
                                clearTimeout(this.touchTimeout),
                            (this.touchTimeout = setTimeout(
                                (t) => this.cycle(t),
                                500 + this._config.interval
                            )));
                };
            V.find(".carousel-item img", this._element).forEach((t) => {
                j.on(t, "dragstart.bs.carousel", (t) => t.preventDefault());
            }),
                this._pointerEvent
                    ? (j.on(this._element, "pointerdown.bs.carousel", (t) =>
                          e(t)
                      ),
                      j.on(this._element, "pointerup.bs.carousel", (t) => n(t)),
                      this._element.classList.add("pointer-event"))
                    : (j.on(this._element, "touchstart.bs.carousel", (t) =>
                          e(t)
                      ),
                      j.on(this._element, "touchmove.bs.carousel", (t) => i(t)),
                      j.on(this._element, "touchend.bs.carousel", (t) => n(t)));
        }
        _keydown(t) {
            if (/input|textarea/i.test(t.target.tagName)) return;
            const e = tt[t.key];
            e && (t.preventDefault(), this._slide(e));
        }
        _getItemIndex(t) {
            return (
                (this._items =
                    t && t.parentNode
                        ? V.find(".carousel-item", t.parentNode)
                        : []),
                this._items.indexOf(t)
            );
        }
        _getItemByOrder(t, e) {
            const i = t === Q;
            return v(this._items, e, i, this._config.wrap);
        }
        _triggerSlideEvent(t, e) {
            const i = this._getItemIndex(t),
                n = this._getItemIndex(V.findOne(nt, this._element));
            return j.trigger(this._element, "slide.bs.carousel", {
                relatedTarget: t,
                direction: e,
                from: n,
                to: i,
            });
        }
        _setActiveIndicatorElement(t) {
            if (this._indicatorsElement) {
                const e = V.findOne(".active", this._indicatorsElement);
                e.classList.remove(it), e.removeAttribute("aria-current");
                const i = V.find("[data-bs-target]", this._indicatorsElement);
                for (let e = 0; e < i.length; e++)
                    if (
                        Number.parseInt(
                            i[e].getAttribute("data-bs-slide-to"),
                            10
                        ) === this._getItemIndex(t)
                    ) {
                        i[e].classList.add(it),
                            i[e].setAttribute("aria-current", "true");
                        break;
                    }
            }
        }
        _updateInterval() {
            const t = this._activeElement || V.findOne(nt, this._element);
            if (!t) return;
            const e = Number.parseInt(t.getAttribute("data-bs-interval"), 10);
            e
                ? ((this._config.defaultInterval =
                      this._config.defaultInterval || this._config.interval),
                  (this._config.interval = e))
                : (this._config.interval =
                      this._config.defaultInterval || this._config.interval);
        }
        _slide(t, e) {
            const i = this._directionToOrder(t),
                n = V.findOne(nt, this._element),
                s = this._getItemIndex(n),
                o = e || this._getItemByOrder(i, n),
                r = this._getItemIndex(o),
                a = Boolean(this._interval),
                l = i === Q,
                c = l ? "carousel-item-start" : "carousel-item-end",
                h = l ? "carousel-item-next" : "carousel-item-prev",
                d = this._orderToDirection(i);
            if (o && o.classList.contains(it))
                return void (this._isSliding = !1);
            if (this._isSliding) return;
            if (this._triggerSlideEvent(o, d).defaultPrevented) return;
            if (!n || !o) return;
            (this._isSliding = !0),
                a && this.pause(),
                this._setActiveIndicatorElement(o),
                (this._activeElement = o);
            const f = () => {
                j.trigger(this._element, et, {
                    relatedTarget: o,
                    direction: d,
                    from: s,
                    to: r,
                });
            };
            if (this._element.classList.contains("slide")) {
                o.classList.add(h),
                    u(o),
                    n.classList.add(c),
                    o.classList.add(c);
                const t = () => {
                    o.classList.remove(c, h),
                        o.classList.add(it),
                        n.classList.remove(it, h, c),
                        (this._isSliding = !1),
                        setTimeout(f, 0);
                };
                this._queueCallback(t, n, !0);
            } else n.classList.remove(it), o.classList.add(it), (this._isSliding = !1), f();
            a && this.cycle();
        }
        _directionToOrder(t) {
            return [J, Z].includes(t)
                ? m()
                    ? t === Z
                        ? G
                        : Q
                    : t === Z
                    ? Q
                    : G
                : t;
        }
        _orderToDirection(t) {
            return [Q, G].includes(t)
                ? m()
                    ? t === G
                        ? Z
                        : J
                    : t === G
                    ? J
                    : Z
                : t;
        }
        static carouselInterface(t, e) {
            const i = st.getOrCreateInstance(t, e);
            let { _config: n } = i;
            "object" == typeof e && (n = { ...n, ...e });
            const s = "string" == typeof e ? e : n.slide;
            if ("number" == typeof e) i.to(e);
            else if ("string" == typeof s) {
                if (void 0 === i[s])
                    throw new TypeError(`No method named "${s}"`);
                i[s]();
            } else n.interval && n.ride && (i.pause(), i.cycle());
        }
        static jQueryInterface(t) {
            return this.each(function () {
                st.carouselInterface(this, t);
            });
        }
        static dataApiClickHandler(t) {
            const e = n(this);
            if (!e || !e.classList.contains("carousel")) return;
            const i = {
                    ...U.getDataAttributes(e),
                    ...U.getDataAttributes(this),
                },
                s = this.getAttribute("data-bs-slide-to");
            s && (i.interval = !1),
                st.carouselInterface(e, i),
                s && st.getInstance(e).to(s),
                t.preventDefault();
        }
    }
    j.on(
        document,
        "click.bs.carousel.data-api",
        "[data-bs-slide], [data-bs-slide-to]",
        st.dataApiClickHandler
    ),
        j.on(window, "load.bs.carousel.data-api", () => {
            const t = V.find('[data-bs-ride="carousel"]');
            for (let e = 0, i = t.length; e < i; e++)
                st.carouselInterface(t[e], st.getInstance(t[e]));
        }),
        g(st);
    const ot = "collapse",
        rt = { toggle: !0, parent: null },
        at = { toggle: "boolean", parent: "(null|element)" },
        lt = "show",
        ct = "collapse",
        ht = "collapsing",
        dt = "collapsed",
        ut = ":scope .collapse .collapse",
        ft = '[data-bs-toggle="collapse"]';
    class pt extends B {
        constructor(t, e) {
            super(t),
                (this._isTransitioning = !1),
                (this._config = this._getConfig(e)),
                (this._triggerArray = []);
            const n = V.find(ft);
            for (let t = 0, e = n.length; t < e; t++) {
                const e = n[t],
                    s = i(e),
                    o = V.find(s).filter((t) => t === this._element);
                null !== s &&
                    o.length &&
                    ((this._selector = s), this._triggerArray.push(e));
            }
            this._initializeChildren(),
                this._config.parent ||
                    this._addAriaAndCollapsedClass(
                        this._triggerArray,
                        this._isShown()
                    ),
                this._config.toggle && this.toggle();
        }
        static get Default() {
            return rt;
        }
        static get NAME() {
            return ot;
        }
        toggle() {
            this._isShown() ? this.hide() : this.show();
        }
        show() {
            if (this._isTransitioning || this._isShown()) return;
            let t,
                e = [];
            if (this._config.parent) {
                const t = V.find(ut, this._config.parent);
                e = V.find(
                    ".collapse.show, .collapse.collapsing",
                    this._config.parent
                ).filter((e) => !t.includes(e));
            }
            const i = V.findOne(this._selector);
            if (e.length) {
                const n = e.find((t) => i !== t);
                if (
                    ((t = n ? pt.getInstance(n) : null),
                    t && t._isTransitioning)
                )
                    return;
            }
            if (j.trigger(this._element, "show.bs.collapse").defaultPrevented)
                return;
            e.forEach((e) => {
                i !== e && pt.getOrCreateInstance(e, { toggle: !1 }).hide(),
                    t || H.set(e, "bs.collapse", null);
            });
            const n = this._getDimension();
            this._element.classList.remove(ct),
                this._element.classList.add(ht),
                (this._element.style[n] = 0),
                this._addAriaAndCollapsedClass(this._triggerArray, !0),
                (this._isTransitioning = !0);
            const s = `scroll${n[0].toUpperCase() + n.slice(1)}`;
            this._queueCallback(
                () => {
                    (this._isTransitioning = !1),
                        this._element.classList.remove(ht),
                        this._element.classList.add(ct, lt),
                        (this._element.style[n] = ""),
                        j.trigger(this._element, "shown.bs.collapse");
                },
                this._element,
                !0
            ),
                (this._element.style[n] = `${this._element[s]}px`);
        }
        hide() {
            if (this._isTransitioning || !this._isShown()) return;
            if (j.trigger(this._element, "hide.bs.collapse").defaultPrevented)
                return;
            const t = this._getDimension();
            (this._element.style[t] = `${
                this._element.getBoundingClientRect()[t]
            }px`),
                u(this._element),
                this._element.classList.add(ht),
                this._element.classList.remove(ct, lt);
            const e = this._triggerArray.length;
            for (let t = 0; t < e; t++) {
                const e = this._triggerArray[t],
                    i = n(e);
                i &&
                    !this._isShown(i) &&
                    this._addAriaAndCollapsedClass([e], !1);
            }
            (this._isTransitioning = !0),
                (this._element.style[t] = ""),
                this._queueCallback(
                    () => {
                        (this._isTransitioning = !1),
                            this._element.classList.remove(ht),
                            this._element.classList.add(ct),
                            j.trigger(this._element, "hidden.bs.collapse");
                    },
                    this._element,
                    !0
                );
        }
        _isShown(t = this._element) {
            return t.classList.contains(lt);
        }
        _getConfig(t) {
            return (
                ((t = {
                    ...rt,
                    ...U.getDataAttributes(this._element),
                    ...t,
                }).toggle = Boolean(t.toggle)),
                (t.parent = r(t.parent)),
                a(ot, t, at),
                t
            );
        }
        _getDimension() {
            return this._element.classList.contains("collapse-horizontal")
                ? "width"
                : "height";
        }
        _initializeChildren() {
            if (!this._config.parent) return;
            const t = V.find(ut, this._config.parent);
            V.find(ft, this._config.parent)
                .filter((e) => !t.includes(e))
                .forEach((t) => {
                    const e = n(t);
                    e && this._addAriaAndCollapsedClass([t], this._isShown(e));
                });
        }
        _addAriaAndCollapsedClass(t, e) {
            t.length &&
                t.forEach((t) => {
                    e ? t.classList.remove(dt) : t.classList.add(dt),
                        t.setAttribute("aria-expanded", e);
                });
        }
        static jQueryInterface(t) {
            return this.each(function () {
                const e = {};
                "string" == typeof t && /show|hide/.test(t) && (e.toggle = !1);
                const i = pt.getOrCreateInstance(this, e);
                if ("string" == typeof t) {
                    if (void 0 === i[t])
                        throw new TypeError(`No method named "${t}"`);
                    i[t]();
                }
            });
        }
    }
    j.on(document, "click.bs.collapse.data-api", ft, function (t) {
        ("A" === t.target.tagName ||
            (t.delegateTarget && "A" === t.delegateTarget.tagName)) &&
            t.preventDefault();
        const e = i(this);
        V.find(e).forEach((t) => {
            pt.getOrCreateInstance(t, { toggle: !1 }).toggle();
        });
    }),
        g(pt);
    var mt = "top",
        gt = "bottom",
        _t = "right",
        bt = "left",
        vt = "auto",
        yt = [mt, gt, _t, bt],
        wt = "start",
        Et = "end",
        At = "clippingParents",
        Tt = "viewport",
        Ot = "popper",
        Ct = "reference",
        kt = yt.reduce(function (t, e) {
            return t.concat([e + "-" + wt, e + "-" + Et]);
        }, []),
        Lt = [].concat(yt, [vt]).reduce(function (t, e) {
            return t.concat([e, e + "-" + wt, e + "-" + Et]);
        }, []),
        xt = "beforeRead",
        Dt = "read",
        St = "afterRead",
        Nt = "beforeMain",
        It = "main",
        Pt = "afterMain",
        jt = "beforeWrite",
        Mt = "write",
        Ht = "afterWrite",
        Bt = [xt, Dt, St, Nt, It, Pt, jt, Mt, Ht];
    function Rt(t) {
        return t ? (t.nodeName || "").toLowerCase() : null;
    }
    function Wt(t) {
        if (null == t) return window;
        if ("[object Window]" !== t.toString()) {
            var e = t.ownerDocument;
            return (e && e.defaultView) || window;
        }
        return t;
    }
    function $t(t) {
        return t instanceof Wt(t).Element || t instanceof Element;
    }
    function zt(t) {
        return t instanceof Wt(t).HTMLElement || t instanceof HTMLElement;
    }
    function qt(t) {
        return (
            "undefined" != typeof ShadowRoot &&
            (t instanceof Wt(t).ShadowRoot || t instanceof ShadowRoot)
        );
    }
    const Ft = {
        name: "applyStyles",
        enabled: !0,
        phase: "write",
        fn: function (t) {
            var e = t.state;
            Object.keys(e.elements).forEach(function (t) {
                var i = e.styles[t] || {},
                    n = e.attributes[t] || {},
                    s = e.elements[t];
                zt(s) &&
                    Rt(s) &&
                    (Object.assign(s.style, i),
                    Object.keys(n).forEach(function (t) {
                        var e = n[t];
                        !1 === e
                            ? s.removeAttribute(t)
                            : s.setAttribute(t, !0 === e ? "" : e);
                    }));
            });
        },
        effect: function (t) {
            var e = t.state,
                i = {
                    popper: {
                        position: e.options.strategy,
                        left: "0",
                        top: "0",
                        margin: "0",
                    },
                    arrow: { position: "absolute" },
                    reference: {},
                };
            return (
                Object.assign(e.elements.popper.style, i.popper),
                (e.styles = i),
                e.elements.arrow &&
                    Object.assign(e.elements.arrow.style, i.arrow),
                function () {
                    Object.keys(e.elements).forEach(function (t) {
                        var n = e.elements[t],
                            s = e.attributes[t] || {},
                            o = Object.keys(
                                e.styles.hasOwnProperty(t) ? e.styles[t] : i[t]
                            ).reduce(function (t, e) {
                                return (t[e] = ""), t;
                            }, {});
                        zt(n) &&
                            Rt(n) &&
                            (Object.assign(n.style, o),
                            Object.keys(s).forEach(function (t) {
                                n.removeAttribute(t);
                            }));
                    });
                }
            );
        },
        requires: ["computeStyles"],
    };
    function Ut(t) {
        return t.split("-")[0];
    }
    function Vt(t, e) {
        var i = t.getBoundingClientRect();
        return {
            width: i.width / 1,
            height: i.height / 1,
            top: i.top / 1,
            right: i.right / 1,
            bottom: i.bottom / 1,
            left: i.left / 1,
            x: i.left / 1,
            y: i.top / 1,
        };
    }
    function Kt(t) {
        var e = Vt(t),
            i = t.offsetWidth,
            n = t.offsetHeight;
        return (
            Math.abs(e.width - i) <= 1 && (i = e.width),
            Math.abs(e.height - n) <= 1 && (n = e.height),
            { x: t.offsetLeft, y: t.offsetTop, width: i, height: n }
        );
    }
    function Xt(t, e) {
        var i = e.getRootNode && e.getRootNode();
        if (t.contains(e)) return !0;
        if (i && qt(i)) {
            var n = e;
            do {
                if (n && t.isSameNode(n)) return !0;
                n = n.parentNode || n.host;
            } while (n);
        }
        return !1;
    }
    function Yt(t) {
        return Wt(t).getComputedStyle(t);
    }
    function Qt(t) {
        return ["table", "td", "th"].indexOf(Rt(t)) >= 0;
    }
    function Gt(t) {
        return (
            ($t(t) ? t.ownerDocument : t.document) || window.document
        ).documentElement;
    }
    function Zt(t) {
        return "html" === Rt(t)
            ? t
            : t.assignedSlot ||
                  t.parentNode ||
                  (qt(t) ? t.host : null) ||
                  Gt(t);
    }
    function Jt(t) {
        return zt(t) && "fixed" !== Yt(t).position ? t.offsetParent : null;
    }
    function te(t) {
        for (
            var e = Wt(t), i = Jt(t);
            i && Qt(i) && "static" === Yt(i).position;

        )
            i = Jt(i);
        return i &&
            ("html" === Rt(i) ||
                ("body" === Rt(i) && "static" === Yt(i).position))
            ? e
            : i ||
                  (function (t) {
                      var e =
                          -1 !==
                          navigator.userAgent.toLowerCase().indexOf("firefox");
                      if (
                          -1 !== navigator.userAgent.indexOf("Trident") &&
                          zt(t) &&
                          "fixed" === Yt(t).position
                      )
                          return null;
                      for (
                          var i = Zt(t);
                          zt(i) && ["html", "body"].indexOf(Rt(i)) < 0;

                      ) {
                          var n = Yt(i);
                          if (
                              "none" !== n.transform ||
                              "none" !== n.perspective ||
                              "paint" === n.contain ||
                              -1 !==
                                  ["transform", "perspective"].indexOf(
                                      n.willChange
                                  ) ||
                              (e && "filter" === n.willChange) ||
                              (e && n.filter && "none" !== n.filter)
                          )
                              return i;
                          i = i.parentNode;
                      }
                      return null;
                  })(t) ||
                  e;
    }
    function ee(t) {
        return ["top", "bottom"].indexOf(t) >= 0 ? "x" : "y";
    }
    var ie = Math.max,
        ne = Math.min,
        se = Math.round;
    function oe(t, e, i) {
        return ie(t, ne(e, i));
    }
    function re(t) {
        return Object.assign({}, { top: 0, right: 0, bottom: 0, left: 0 }, t);
    }
    function ae(t, e) {
        return e.reduce(function (e, i) {
            return (e[i] = t), e;
        }, {});
    }
    const le = {
        name: "arrow",
        enabled: !0,
        phase: "main",
        fn: function (t) {
            var e,
                i = t.state,
                n = t.name,
                s = t.options,
                o = i.elements.arrow,
                r = i.modifiersData.popperOffsets,
                a = Ut(i.placement),
                l = ee(a),
                c = [bt, _t].indexOf(a) >= 0 ? "height" : "width";
            if (o && r) {
                var h = (function (t, e) {
                        return re(
                            "number" !=
                                typeof (t =
                                    "function" == typeof t
                                        ? t(
                                              Object.assign({}, e.rects, {
                                                  placement: e.placement,
                                              })
                                          )
                                        : t)
                                ? t
                                : ae(t, yt)
                        );
                    })(s.padding, i),
                    d = Kt(o),
                    u = "y" === l ? mt : bt,
                    f = "y" === l ? gt : _t,
                    p =
                        i.rects.reference[c] +
                        i.rects.reference[l] -
                        r[l] -
                        i.rects.popper[c],
                    m = r[l] - i.rects.reference[l],
                    g = te(o),
                    _ = g
                        ? "y" === l
                            ? g.clientHeight || 0
                            : g.clientWidth || 0
                        : 0,
                    b = p / 2 - m / 2,
                    v = h[u],
                    y = _ - d[c] - h[f],
                    w = _ / 2 - d[c] / 2 + b,
                    E = oe(v, w, y),
                    A = l;
                i.modifiersData[n] =
                    (((e = {})[A] = E), (e.centerOffset = E - w), e);
            }
        },
        effect: function (t) {
            var e = t.state,
                i = t.options.element,
                n = void 0 === i ? "[data-popper-arrow]" : i;
            null != n &&
                ("string" != typeof n ||
                    (n = e.elements.popper.querySelector(n))) &&
                Xt(e.elements.popper, n) &&
                (e.elements.arrow = n);
        },
        requires: ["popperOffsets"],
        requiresIfExists: ["preventOverflow"],
    };
    function ce(t) {
        return t.split("-")[1];
    }
    var he = { top: "auto", right: "auto", bottom: "auto", left: "auto" };
    function de(t) {
        var e,
            i = t.popper,
            n = t.popperRect,
            s = t.placement,
            o = t.variation,
            r = t.offsets,
            a = t.position,
            l = t.gpuAcceleration,
            c = t.adaptive,
            h = t.roundOffsets,
            d =
                !0 === h
                    ? (function (t) {
                          var e = t.x,
                              i = t.y,
                              n = window.devicePixelRatio || 1;
                          return {
                              x: se(se(e * n) / n) || 0,
                              y: se(se(i * n) / n) || 0,
                          };
                      })(r)
                    : "function" == typeof h
                    ? h(r)
                    : r,
            u = d.x,
            f = void 0 === u ? 0 : u,
            p = d.y,
            m = void 0 === p ? 0 : p,
            g = r.hasOwnProperty("x"),
            _ = r.hasOwnProperty("y"),
            b = bt,
            v = mt,
            y = window;
        if (c) {
            var w = te(i),
                E = "clientHeight",
                A = "clientWidth";
            w === Wt(i) &&
                "static" !== Yt((w = Gt(i))).position &&
                "absolute" === a &&
                ((E = "scrollHeight"), (A = "scrollWidth")),
                (w = w),
                (s !== mt && ((s !== bt && s !== _t) || o !== Et)) ||
                    ((v = gt), (m -= w[E] - n.height), (m *= l ? 1 : -1)),
                (s !== bt && ((s !== mt && s !== gt) || o !== Et)) ||
                    ((b = _t), (f -= w[A] - n.width), (f *= l ? 1 : -1));
        }
        var T,
            O = Object.assign({ position: a }, c && he);
        return l
            ? Object.assign(
                  {},
                  O,
                  (((T = {})[v] = _ ? "0" : ""),
                  (T[b] = g ? "0" : ""),
                  (T.transform =
                      (y.devicePixelRatio || 1) <= 1
                          ? "translate(" + f + "px, " + m + "px)"
                          : "translate3d(" + f + "px, " + m + "px, 0)"),
                  T)
              )
            : Object.assign(
                  {},
                  O,
                  (((e = {})[v] = _ ? m + "px" : ""),
                  (e[b] = g ? f + "px" : ""),
                  (e.transform = ""),
                  e)
              );
    }
    const ue = {
        name: "computeStyles",
        enabled: !0,
        phase: "beforeWrite",
        fn: function (t) {
            var e = t.state,
                i = t.options,
                n = i.gpuAcceleration,
                s = void 0 === n || n,
                o = i.adaptive,
                r = void 0 === o || o,
                a = i.roundOffsets,
                l = void 0 === a || a,
                c = {
                    placement: Ut(e.placement),
                    variation: ce(e.placement),
                    popper: e.elements.popper,
                    popperRect: e.rects.popper,
                    gpuAcceleration: s,
                };
            null != e.modifiersData.popperOffsets &&
                (e.styles.popper = Object.assign(
                    {},
                    e.styles.popper,
                    de(
                        Object.assign({}, c, {
                            offsets: e.modifiersData.popperOffsets,
                            position: e.options.strategy,
                            adaptive: r,
                            roundOffsets: l,
                        })
                    )
                )),
                null != e.modifiersData.arrow &&
                    (e.styles.arrow = Object.assign(
                        {},
                        e.styles.arrow,
                        de(
                            Object.assign({}, c, {
                                offsets: e.modifiersData.arrow,
                                position: "absolute",
                                adaptive: !1,
                                roundOffsets: l,
                            })
                        )
                    )),
                (e.attributes.popper = Object.assign({}, e.attributes.popper, {
                    "data-popper-placement": e.placement,
                }));
        },
        data: {},
    };
    var fe = { passive: !0 };
    const pe = {
        name: "eventListeners",
        enabled: !0,
        phase: "write",
        fn: function () {},
        effect: function (t) {
            var e = t.state,
                i = t.instance,
                n = t.options,
                s = n.scroll,
                o = void 0 === s || s,
                r = n.resize,
                a = void 0 === r || r,
                l = Wt(e.elements.popper),
                c = [].concat(
                    e.scrollParents.reference,
                    e.scrollParents.popper
                );
            return (
                o &&
                    c.forEach(function (t) {
                        t.addEventListener("scroll", i.update, fe);
                    }),
                a && l.addEventListener("resize", i.update, fe),
                function () {
                    o &&
                        c.forEach(function (t) {
                            t.removeEventListener("scroll", i.update, fe);
                        }),
                        a && l.removeEventListener("resize", i.update, fe);
                }
            );
        },
        data: {},
    };
    var me = { left: "right", right: "left", bottom: "top", top: "bottom" };
    function ge(t) {
        return t.replace(/left|right|bottom|top/g, function (t) {
            return me[t];
        });
    }
    var _e = { start: "end", end: "start" };
    function be(t) {
        return t.replace(/start|end/g, function (t) {
            return _e[t];
        });
    }
    function ve(t) {
        var e = Wt(t);
        return { scrollLeft: e.pageXOffset, scrollTop: e.pageYOffset };
    }
    function ye(t) {
        return Vt(Gt(t)).left + ve(t).scrollLeft;
    }
    function we(t) {
        var e = Yt(t),
            i = e.overflow,
            n = e.overflowX,
            s = e.overflowY;
        return /auto|scroll|overlay|hidden/.test(i + s + n);
    }
    function Ee(t) {
        return ["html", "body", "#document"].indexOf(Rt(t)) >= 0
            ? t.ownerDocument.body
            : zt(t) && we(t)
            ? t
            : Ee(Zt(t));
    }
    function Ae(t, e) {
        var i;
        void 0 === e && (e = []);
        var n = Ee(t),
            s = n === (null == (i = t.ownerDocument) ? void 0 : i.body),
            o = Wt(n),
            r = s ? [o].concat(o.visualViewport || [], we(n) ? n : []) : n,
            a = e.concat(r);
        return s ? a : a.concat(Ae(Zt(r)));
    }
    function Te(t) {
        return Object.assign({}, t, {
            left: t.x,
            top: t.y,
            right: t.x + t.width,
            bottom: t.y + t.height,
        });
    }
    function Oe(t, e) {
        return e === Tt
            ? Te(
                  (function (t) {
                      var e = Wt(t),
                          i = Gt(t),
                          n = e.visualViewport,
                          s = i.clientWidth,
                          o = i.clientHeight,
                          r = 0,
                          a = 0;
                      return (
                          n &&
                              ((s = n.width),
                              (o = n.height),
                              /^((?!chrome|android).)*safari/i.test(
                                  navigator.userAgent
                              ) || ((r = n.offsetLeft), (a = n.offsetTop))),
                          { width: s, height: o, x: r + ye(t), y: a }
                      );
                  })(t)
              )
            : zt(e)
            ? (function (t) {
                  var e = Vt(t);
                  return (
                      (e.top = e.top + t.clientTop),
                      (e.left = e.left + t.clientLeft),
                      (e.bottom = e.top + t.clientHeight),
                      (e.right = e.left + t.clientWidth),
                      (e.width = t.clientWidth),
                      (e.height = t.clientHeight),
                      (e.x = e.left),
                      (e.y = e.top),
                      e
                  );
              })(e)
            : Te(
                  (function (t) {
                      var e,
                          i = Gt(t),
                          n = ve(t),
                          s = null == (e = t.ownerDocument) ? void 0 : e.body,
                          o = ie(
                              i.scrollWidth,
                              i.clientWidth,
                              s ? s.scrollWidth : 0,
                              s ? s.clientWidth : 0
                          ),
                          r = ie(
                              i.scrollHeight,
                              i.clientHeight,
                              s ? s.scrollHeight : 0,
                              s ? s.clientHeight : 0
                          ),
                          a = -n.scrollLeft + ye(t),
                          l = -n.scrollTop;
                      return (
                          "rtl" === Yt(s || i).direction &&
                              (a +=
                                  ie(i.clientWidth, s ? s.clientWidth : 0) - o),
                          { width: o, height: r, x: a, y: l }
                      );
                  })(Gt(t))
              );
    }
    function Ce(t) {
        var e,
            i = t.reference,
            n = t.element,
            s = t.placement,
            o = s ? Ut(s) : null,
            r = s ? ce(s) : null,
            a = i.x + i.width / 2 - n.width / 2,
            l = i.y + i.height / 2 - n.height / 2;
        switch (o) {
            case mt:
                e = { x: a, y: i.y - n.height };
                break;
            case gt:
                e = { x: a, y: i.y + i.height };
                break;
            case _t:
                e = { x: i.x + i.width, y: l };
                break;
            case bt:
                e = { x: i.x - n.width, y: l };
                break;
            default:
                e = { x: i.x, y: i.y };
        }
        var c = o ? ee(o) : null;
        if (null != c) {
            var h = "y" === c ? "height" : "width";
            switch (r) {
                case wt:
                    e[c] = e[c] - (i[h] / 2 - n[h] / 2);
                    break;
                case Et:
                    e[c] = e[c] + (i[h] / 2 - n[h] / 2);
            }
        }
        return e;
    }
    function ke(t, e) {
        void 0 === e && (e = {});
        var i = e,
            n = i.placement,
            s = void 0 === n ? t.placement : n,
            o = i.boundary,
            r = void 0 === o ? At : o,
            a = i.rootBoundary,
            l = void 0 === a ? Tt : a,
            c = i.elementContext,
            h = void 0 === c ? Ot : c,
            d = i.altBoundary,
            u = void 0 !== d && d,
            f = i.padding,
            p = void 0 === f ? 0 : f,
            m = re("number" != typeof p ? p : ae(p, yt)),
            g = h === Ot ? Ct : Ot,
            _ = t.rects.popper,
            b = t.elements[u ? g : h],
            v = (function (t, e, i) {
                var n =
                        "clippingParents" === e
                            ? (function (t) {
                                  var e = Ae(Zt(t)),
                                      i =
                                          ["absolute", "fixed"].indexOf(
                                              Yt(t).position
                                          ) >= 0 && zt(t)
                                              ? te(t)
                                              : t;
                                  return $t(i)
                                      ? e.filter(function (t) {
                                            return (
                                                $t(t) &&
                                                Xt(t, i) &&
                                                "body" !== Rt(t)
                                            );
                                        })
                                      : [];
                              })(t)
                            : [].concat(e),
                    s = [].concat(n, [i]),
                    o = s[0],
                    r = s.reduce(function (e, i) {
                        var n = Oe(t, i);
                        return (
                            (e.top = ie(n.top, e.top)),
                            (e.right = ne(n.right, e.right)),
                            (e.bottom = ne(n.bottom, e.bottom)),
                            (e.left = ie(n.left, e.left)),
                            e
                        );
                    }, Oe(t, o));
                return (
                    (r.width = r.right - r.left),
                    (r.height = r.bottom - r.top),
                    (r.x = r.left),
                    (r.y = r.top),
                    r
                );
            })($t(b) ? b : b.contextElement || Gt(t.elements.popper), r, l),
            y = Vt(t.elements.reference),
            w = Ce({
                reference: y,
                element: _,
                strategy: "absolute",
                placement: s,
            }),
            E = Te(Object.assign({}, _, w)),
            A = h === Ot ? E : y,
            T = {
                top: v.top - A.top + m.top,
                bottom: A.bottom - v.bottom + m.bottom,
                left: v.left - A.left + m.left,
                right: A.right - v.right + m.right,
            },
            O = t.modifiersData.offset;
        if (h === Ot && O) {
            var C = O[s];
            Object.keys(T).forEach(function (t) {
                var e = [_t, gt].indexOf(t) >= 0 ? 1 : -1,
                    i = [mt, gt].indexOf(t) >= 0 ? "y" : "x";
                T[t] += C[i] * e;
            });
        }
        return T;
    }
    function Le(t, e) {
        void 0 === e && (e = {});
        var i = e,
            n = i.placement,
            s = i.boundary,
            o = i.rootBoundary,
            r = i.padding,
            a = i.flipVariations,
            l = i.allowedAutoPlacements,
            c = void 0 === l ? Lt : l,
            h = ce(n),
            d = h
                ? a
                    ? kt
                    : kt.filter(function (t) {
                          return ce(t) === h;
                      })
                : yt,
            u = d.filter(function (t) {
                return c.indexOf(t) >= 0;
            });
        0 === u.length && (u = d);
        var f = u.reduce(function (e, i) {
            return (
                (e[i] = ke(t, {
                    placement: i,
                    boundary: s,
                    rootBoundary: o,
                    padding: r,
                })[Ut(i)]),
                e
            );
        }, {});
        return Object.keys(f).sort(function (t, e) {
            return f[t] - f[e];
        });
    }
    const xe = {
        name: "flip",
        enabled: !0,
        phase: "main",
        fn: function (t) {
            var e = t.state,
                i = t.options,
                n = t.name;
            if (!e.modifiersData[n]._skip) {
                for (
                    var s = i.mainAxis,
                        o = void 0 === s || s,
                        r = i.altAxis,
                        a = void 0 === r || r,
                        l = i.fallbackPlacements,
                        c = i.padding,
                        h = i.boundary,
                        d = i.rootBoundary,
                        u = i.altBoundary,
                        f = i.flipVariations,
                        p = void 0 === f || f,
                        m = i.allowedAutoPlacements,
                        g = e.options.placement,
                        _ = Ut(g),
                        b =
                            l ||
                            (_ !== g && p
                                ? (function (t) {
                                      if (Ut(t) === vt) return [];
                                      var e = ge(t);
                                      return [be(t), e, be(e)];
                                  })(g)
                                : [ge(g)]),
                        v = [g].concat(b).reduce(function (t, i) {
                            return t.concat(
                                Ut(i) === vt
                                    ? Le(e, {
                                          placement: i,
                                          boundary: h,
                                          rootBoundary: d,
                                          padding: c,
                                          flipVariations: p,
                                          allowedAutoPlacements: m,
                                      })
                                    : i
                            );
                        }, []),
                        y = e.rects.reference,
                        w = e.rects.popper,
                        E = new Map(),
                        A = !0,
                        T = v[0],
                        O = 0;
                    O < v.length;
                    O++
                ) {
                    var C = v[O],
                        k = Ut(C),
                        L = ce(C) === wt,
                        x = [mt, gt].indexOf(k) >= 0,
                        D = x ? "width" : "height",
                        S = ke(e, {
                            placement: C,
                            boundary: h,
                            rootBoundary: d,
                            altBoundary: u,
                            padding: c,
                        }),
                        N = x ? (L ? _t : bt) : L ? gt : mt;
                    y[D] > w[D] && (N = ge(N));
                    var I = ge(N),
                        P = [];
                    if (
                        (o && P.push(S[k] <= 0),
                        a && P.push(S[N] <= 0, S[I] <= 0),
                        P.every(function (t) {
                            return t;
                        }))
                    ) {
                        (T = C), (A = !1);
                        break;
                    }
                    E.set(C, P);
                }
                if (A)
                    for (
                        var j = function (t) {
                                var e = v.find(function (e) {
                                    var i = E.get(e);
                                    if (i)
                                        return i
                                            .slice(0, t)
                                            .every(function (t) {
                                                return t;
                                            });
                                });
                                if (e) return (T = e), "break";
                            },
                            M = p ? 3 : 1;
                        M > 0 && "break" !== j(M);
                        M--
                    );
                e.placement !== T &&
                    ((e.modifiersData[n]._skip = !0),
                    (e.placement = T),
                    (e.reset = !0));
            }
        },
        requiresIfExists: ["offset"],
        data: { _skip: !1 },
    };
    function De(t, e, i) {
        return (
            void 0 === i && (i = { x: 0, y: 0 }),
            {
                top: t.top - e.height - i.y,
                right: t.right - e.width + i.x,
                bottom: t.bottom - e.height + i.y,
                left: t.left - e.width - i.x,
            }
        );
    }
    function Se(t) {
        return [mt, _t, gt, bt].some(function (e) {
            return t[e] >= 0;
        });
    }
    const Ne = {
            name: "hide",
            enabled: !0,
            phase: "main",
            requiresIfExists: ["preventOverflow"],
            fn: function (t) {
                var e = t.state,
                    i = t.name,
                    n = e.rects.reference,
                    s = e.rects.popper,
                    o = e.modifiersData.preventOverflow,
                    r = ke(e, { elementContext: "reference" }),
                    a = ke(e, { altBoundary: !0 }),
                    l = De(r, n),
                    c = De(a, s, o),
                    h = Se(l),
                    d = Se(c);
                (e.modifiersData[i] = {
                    referenceClippingOffsets: l,
                    popperEscapeOffsets: c,
                    isReferenceHidden: h,
                    hasPopperEscaped: d,
                }),
                    (e.attributes.popper = Object.assign(
                        {},
                        e.attributes.popper,
                        {
                            "data-popper-reference-hidden": h,
                            "data-popper-escaped": d,
                        }
                    ));
            },
        },
        Ie = {
            name: "offset",
            enabled: !0,
            phase: "main",
            requires: ["popperOffsets"],
            fn: function (t) {
                var e = t.state,
                    i = t.options,
                    n = t.name,
                    s = i.offset,
                    o = void 0 === s ? [0, 0] : s,
                    r = Lt.reduce(function (t, i) {
                        return (
                            (t[i] = (function (t, e, i) {
                                var n = Ut(t),
                                    s = [bt, mt].indexOf(n) >= 0 ? -1 : 1,
                                    o =
                                        "function" == typeof i
                                            ? i(
                                                  Object.assign({}, e, {
                                                      placement: t,
                                                  })
                                              )
                                            : i,
                                    r = o[0],
                                    a = o[1];
                                return (
                                    (r = r || 0),
                                    (a = (a || 0) * s),
                                    [bt, _t].indexOf(n) >= 0
                                        ? { x: a, y: r }
                                        : { x: r, y: a }
                                );
                            })(i, e.rects, o)),
                            t
                        );
                    }, {}),
                    a = r[e.placement],
                    l = a.x,
                    c = a.y;
                null != e.modifiersData.popperOffsets &&
                    ((e.modifiersData.popperOffsets.x += l),
                    (e.modifiersData.popperOffsets.y += c)),
                    (e.modifiersData[n] = r);
            },
        },
        Pe = {
            name: "popperOffsets",
            enabled: !0,
            phase: "read",
            fn: function (t) {
                var e = t.state,
                    i = t.name;
                e.modifiersData[i] = Ce({
                    reference: e.rects.reference,
                    element: e.rects.popper,
                    strategy: "absolute",
                    placement: e.placement,
                });
            },
            data: {},
        },
        je = {
            name: "preventOverflow",
            enabled: !0,
            phase: "main",
            fn: function (t) {
                var e = t.state,
                    i = t.options,
                    n = t.name,
                    s = i.mainAxis,
                    o = void 0 === s || s,
                    r = i.altAxis,
                    a = void 0 !== r && r,
                    l = i.boundary,
                    c = i.rootBoundary,
                    h = i.altBoundary,
                    d = i.padding,
                    u = i.tether,
                    f = void 0 === u || u,
                    p = i.tetherOffset,
                    m = void 0 === p ? 0 : p,
                    g = ke(e, {
                        boundary: l,
                        rootBoundary: c,
                        padding: d,
                        altBoundary: h,
                    }),
                    _ = Ut(e.placement),
                    b = ce(e.placement),
                    v = !b,
                    y = ee(_),
                    w = "x" === y ? "y" : "x",
                    E = e.modifiersData.popperOffsets,
                    A = e.rects.reference,
                    T = e.rects.popper,
                    O =
                        "function" == typeof m
                            ? m(
                                  Object.assign({}, e.rects, {
                                      placement: e.placement,
                                  })
                              )
                            : m,
                    C = { x: 0, y: 0 };
                if (E) {
                    if (o || a) {
                        var k = "y" === y ? mt : bt,
                            L = "y" === y ? gt : _t,
                            x = "y" === y ? "height" : "width",
                            D = E[y],
                            S = E[y] + g[k],
                            N = E[y] - g[L],
                            I = f ? -T[x] / 2 : 0,
                            P = b === wt ? A[x] : T[x],
                            j = b === wt ? -T[x] : -A[x],
                            M = e.elements.arrow,
                            H = f && M ? Kt(M) : { width: 0, height: 0 },
                            B = e.modifiersData["arrow#persistent"]
                                ? e.modifiersData["arrow#persistent"].padding
                                : { top: 0, right: 0, bottom: 0, left: 0 },
                            R = B[k],
                            W = B[L],
                            $ = oe(0, A[x], H[x]),
                            z = v ? A[x] / 2 - I - $ - R - O : P - $ - R - O,
                            q = v ? -A[x] / 2 + I + $ + W + O : j + $ + W + O,
                            F = e.elements.arrow && te(e.elements.arrow),
                            U = F
                                ? "y" === y
                                    ? F.clientTop || 0
                                    : F.clientLeft || 0
                                : 0,
                            V = e.modifiersData.offset
                                ? e.modifiersData.offset[e.placement][y]
                                : 0,
                            K = E[y] + z - V - U,
                            X = E[y] + q - V;
                        if (o) {
                            var Y = oe(f ? ne(S, K) : S, D, f ? ie(N, X) : N);
                            (E[y] = Y), (C[y] = Y - D);
                        }
                        if (a) {
                            var Q = "x" === y ? mt : bt,
                                G = "x" === y ? gt : _t,
                                Z = E[w],
                                J = Z + g[Q],
                                tt = Z - g[G],
                                et = oe(
                                    f ? ne(J, K) : J,
                                    Z,
                                    f ? ie(tt, X) : tt
                                );
                            (E[w] = et), (C[w] = et - Z);
                        }
                    }
                    e.modifiersData[n] = C;
                }
            },
            requiresIfExists: ["offset"],
        };
    function Me(t, e, i) {
        void 0 === i && (i = !1);
        var n = zt(e);
        zt(e) &&
            (function (t) {
                var e = t.getBoundingClientRect();
                e.width, t.offsetWidth, e.height, t.offsetHeight;
            })(e);
        var s,
            o,
            r = Gt(e),
            a = Vt(t),
            l = { scrollLeft: 0, scrollTop: 0 },
            c = { x: 0, y: 0 };
        return (
            (n || (!n && !i)) &&
                (("body" !== Rt(e) || we(r)) &&
                    (l =
                        (s = e) !== Wt(s) && zt(s)
                            ? {
                                  scrollLeft: (o = s).scrollLeft,
                                  scrollTop: o.scrollTop,
                              }
                            : ve(s)),
                zt(e)
                    ? (((c = Vt(e)).x += e.clientLeft), (c.y += e.clientTop))
                    : r && (c.x = ye(r))),
            {
                x: a.left + l.scrollLeft - c.x,
                y: a.top + l.scrollTop - c.y,
                width: a.width,
                height: a.height,
            }
        );
    }
    function He(t) {
        var e = new Map(),
            i = new Set(),
            n = [];
        function s(t) {
            i.add(t.name),
                []
                    .concat(t.requires || [], t.requiresIfExists || [])
                    .forEach(function (t) {
                        if (!i.has(t)) {
                            var n = e.get(t);
                            n && s(n);
                        }
                    }),
                n.push(t);
        }
        return (
            t.forEach(function (t) {
                e.set(t.name, t);
            }),
            t.forEach(function (t) {
                i.has(t.name) || s(t);
            }),
            n
        );
    }
    var Be = { placement: "bottom", modifiers: [], strategy: "absolute" };
    function Re() {
        for (var t = arguments.length, e = new Array(t), i = 0; i < t; i++)
            e[i] = arguments[i];
        return !e.some(function (t) {
            return !(t && "function" == typeof t.getBoundingClientRect);
        });
    }
    function We(t) {
        void 0 === t && (t = {});
        var e = t,
            i = e.defaultModifiers,
            n = void 0 === i ? [] : i,
            s = e.defaultOptions,
            o = void 0 === s ? Be : s;
        return function (t, e, i) {
            void 0 === i && (i = o);
            var s,
                r,
                a = {
                    placement: "bottom",
                    orderedModifiers: [],
                    options: Object.assign({}, Be, o),
                    modifiersData: {},
                    elements: { reference: t, popper: e },
                    attributes: {},
                    styles: {},
                },
                l = [],
                c = !1,
                h = {
                    state: a,
                    setOptions: function (i) {
                        var s = "function" == typeof i ? i(a.options) : i;
                        d(),
                            (a.options = Object.assign({}, o, a.options, s)),
                            (a.scrollParents = {
                                reference: $t(t)
                                    ? Ae(t)
                                    : t.contextElement
                                    ? Ae(t.contextElement)
                                    : [],
                                popper: Ae(e),
                            });
                        var r,
                            c,
                            u = (function (t) {
                                var e = He(t);
                                return Bt.reduce(function (t, i) {
                                    return t.concat(
                                        e.filter(function (t) {
                                            return t.phase === i;
                                        })
                                    );
                                }, []);
                            })(
                                ((r = [].concat(n, a.options.modifiers)),
                                (c = r.reduce(function (t, e) {
                                    var i = t[e.name];
                                    return (
                                        (t[e.name] = i
                                            ? Object.assign({}, i, e, {
                                                  options: Object.assign(
                                                      {},
                                                      i.options,
                                                      e.options
                                                  ),
                                                  data: Object.assign(
                                                      {},
                                                      i.data,
                                                      e.data
                                                  ),
                                              })
                                            : e),
                                        t
                                    );
                                }, {})),
                                Object.keys(c).map(function (t) {
                                    return c[t];
                                }))
                            );
                        return (
                            (a.orderedModifiers = u.filter(function (t) {
                                return t.enabled;
                            })),
                            a.orderedModifiers.forEach(function (t) {
                                var e = t.name,
                                    i = t.options,
                                    n = void 0 === i ? {} : i,
                                    s = t.effect;
                                if ("function" == typeof s) {
                                    var o = s({
                                        state: a,
                                        name: e,
                                        instance: h,
                                        options: n,
                                    });
                                    l.push(o || function () {});
                                }
                            }),
                            h.update()
                        );
                    },
                    forceUpdate: function () {
                        if (!c) {
                            var t = a.elements,
                                e = t.reference,
                                i = t.popper;
                            if (Re(e, i)) {
                                (a.rects = {
                                    reference: Me(
                                        e,
                                        te(i),
                                        "fixed" === a.options.strategy
                                    ),
                                    popper: Kt(i),
                                }),
                                    (a.reset = !1),
                                    (a.placement = a.options.placement),
                                    a.orderedModifiers.forEach(function (t) {
                                        return (a.modifiersData[t.name] =
                                            Object.assign({}, t.data));
                                    });
                                for (
                                    var n = 0;
                                    n < a.orderedModifiers.length;
                                    n++
                                )
                                    if (!0 !== a.reset) {
                                        var s = a.orderedModifiers[n],
                                            o = s.fn,
                                            r = s.options,
                                            l = void 0 === r ? {} : r,
                                            d = s.name;
                                        "function" == typeof o &&
                                            (a =
                                                o({
                                                    state: a,
                                                    options: l,
                                                    name: d,
                                                    instance: h,
                                                }) || a);
                                    } else (a.reset = !1), (n = -1);
                            }
                        }
                    },
                    update:
                        ((s = function () {
                            return new Promise(function (t) {
                                h.forceUpdate(), t(a);
                            });
                        }),
                        function () {
                            return (
                                r ||
                                    (r = new Promise(function (t) {
                                        Promise.resolve().then(function () {
                                            (r = void 0), t(s());
                                        });
                                    })),
                                r
                            );
                        }),
                    destroy: function () {
                        d(), (c = !0);
                    },
                };
            if (!Re(t, e)) return h;
            function d() {
                l.forEach(function (t) {
                    return t();
                }),
                    (l = []);
            }
            return (
                h.setOptions(i).then(function (t) {
                    !c && i.onFirstUpdate && i.onFirstUpdate(t);
                }),
                h
            );
        };
    }
    var $e = We(),
        ze = We({ defaultModifiers: [pe, Pe, ue, Ft] }),
        qe = We({ defaultModifiers: [pe, Pe, ue, Ft, Ie, xe, je, le, Ne] });
    const Fe = Object.freeze({
            __proto__: null,
            popperGenerator: We,
            detectOverflow: ke,
            createPopperBase: $e,
            createPopper: qe,
            createPopperLite: ze,
            top: mt,
            bottom: gt,
            right: _t,
            left: bt,
            auto: vt,
            basePlacements: yt,
            start: wt,
            end: Et,
            clippingParents: At,
            viewport: Tt,
            popper: Ot,
            reference: Ct,
            variationPlacements: kt,
            placements: Lt,
            beforeRead: xt,
            read: Dt,
            afterRead: St,
            beforeMain: Nt,
            main: It,
            afterMain: Pt,
            beforeWrite: jt,
            write: Mt,
            afterWrite: Ht,
            modifierPhases: Bt,
            applyStyles: Ft,
            arrow: le,
            computeStyles: ue,
            eventListeners: pe,
            flip: xe,
            hide: Ne,
            offset: Ie,
            popperOffsets: Pe,
            preventOverflow: je,
        }),
        Ue = "dropdown",
        Ve = "Escape",
        Ke = "Space",
        Xe = "ArrowUp",
        Ye = "ArrowDown",
        Qe = new RegExp("ArrowUp|ArrowDown|Escape"),
        Ge = "click.bs.dropdown.data-api",
        Ze = "keydown.bs.dropdown.data-api",
        Je = "show",
        ti = '[data-bs-toggle="dropdown"]',
        ei = ".dropdown-menu",
        ii = m() ? "top-end" : "top-start",
        ni = m() ? "top-start" : "top-end",
        si = m() ? "bottom-end" : "bottom-start",
        oi = m() ? "bottom-start" : "bottom-end",
        ri = m() ? "left-start" : "right-start",
        ai = m() ? "right-start" : "left-start",
        li = {
            offset: [0, 2],
            boundary: "clippingParents",
            reference: "toggle",
            display: "dynamic",
            popperConfig: null,
            autoClose: !0,
        },
        ci = {
            offset: "(array|string|function)",
            boundary: "(string|element)",
            reference: "(string|element|object)",
            display: "string",
            popperConfig: "(null|object|function)",
            autoClose: "(boolean|string)",
        };
    class hi extends B {
        constructor(t, e) {
            super(t),
                (this._popper = null),
                (this._config = this._getConfig(e)),
                (this._menu = this._getMenuElement()),
                (this._inNavbar = this._detectNavbar());
        }
        static get Default() {
            return li;
        }
        static get DefaultType() {
            return ci;
        }
        static get NAME() {
            return Ue;
        }
        toggle() {
            return this._isShown() ? this.hide() : this.show();
        }
        show() {
            if (c(this._element) || this._isShown(this._menu)) return;
            const t = { relatedTarget: this._element };
            if (
                j.trigger(this._element, "show.bs.dropdown", t).defaultPrevented
            )
                return;
            const e = hi.getParentFromElement(this._element);
            this._inNavbar
                ? U.setDataAttribute(this._menu, "popper", "none")
                : this._createPopper(e),
                "ontouchstart" in document.documentElement &&
                    !e.closest(".navbar-nav") &&
                    []
                        .concat(...document.body.children)
                        .forEach((t) => j.on(t, "mouseover", d)),
                this._element.focus(),
                this._element.setAttribute("aria-expanded", !0),
                this._menu.classList.add(Je),
                this._element.classList.add(Je),
                j.trigger(this._element, "shown.bs.dropdown", t);
        }
        hide() {
            if (c(this._element) || !this._isShown(this._menu)) return;
            const t = { relatedTarget: this._element };
            this._completeHide(t);
        }
        dispose() {
            this._popper && this._popper.destroy(), super.dispose();
        }
        update() {
            (this._inNavbar = this._detectNavbar()),
                this._popper && this._popper.update();
        }
        _completeHide(t) {
            j.trigger(this._element, "hide.bs.dropdown", t).defaultPrevented ||
                ("ontouchstart" in document.documentElement &&
                    []
                        .concat(...document.body.children)
                        .forEach((t) => j.off(t, "mouseover", d)),
                this._popper && this._popper.destroy(),
                this._menu.classList.remove(Je),
                this._element.classList.remove(Je),
                this._element.setAttribute("aria-expanded", "false"),
                U.removeDataAttribute(this._menu, "popper"),
                j.trigger(this._element, "hidden.bs.dropdown", t));
        }
        _getConfig(t) {
            if (
                ((t = {
                    ...this.constructor.Default,
                    ...U.getDataAttributes(this._element),
                    ...t,
                }),
                a(Ue, t, this.constructor.DefaultType),
                "object" == typeof t.reference &&
                    !o(t.reference) &&
                    "function" != typeof t.reference.getBoundingClientRect)
            )
                throw new TypeError(
                    `${Ue.toUpperCase()}: Option "reference" provided type "object" without a required "getBoundingClientRect" method.`
                );
            return t;
        }
        _createPopper(t) {
            if (void 0 === Fe)
                throw new TypeError(
                    "Bootstrap's dropdowns require Popper (https://popper.js.org)"
                );
            let e = this._element;
            "parent" === this._config.reference
                ? (e = t)
                : o(this._config.reference)
                ? (e = r(this._config.reference))
                : "object" == typeof this._config.reference &&
                  (e = this._config.reference);
            const i = this._getPopperConfig(),
                n = i.modifiers.find(
                    (t) => "applyStyles" === t.name && !1 === t.enabled
                );
            (this._popper = qe(e, this._menu, i)),
                n && U.setDataAttribute(this._menu, "popper", "static");
        }
        _isShown(t = this._element) {
            return t.classList.contains(Je);
        }
        _getMenuElement() {
            return V.next(this._element, ei)[0];
        }
        _getPlacement() {
            const t = this._element.parentNode;
            if (t.classList.contains("dropend")) return ri;
            if (t.classList.contains("dropstart")) return ai;
            const e =
                "end" ===
                getComputedStyle(this._menu)
                    .getPropertyValue("--bs-position")
                    .trim();
            return t.classList.contains("dropup") ? (e ? ni : ii) : e ? oi : si;
        }
        _detectNavbar() {
            return null !== this._element.closest(".navbar");
        }
        _getOffset() {
            const { offset: t } = this._config;
            return "string" == typeof t
                ? t.split(",").map((t) => Number.parseInt(t, 10))
                : "function" == typeof t
                ? (e) => t(e, this._element)
                : t;
        }
        _getPopperConfig() {
            const t = {
                placement: this._getPlacement(),
                modifiers: [
                    {
                        name: "preventOverflow",
                        options: { boundary: this._config.boundary },
                    },
                    { name: "offset", options: { offset: this._getOffset() } },
                ],
            };
            return (
                "static" === this._config.display &&
                    (t.modifiers = [{ name: "applyStyles", enabled: !1 }]),
                {
                    ...t,
                    ...("function" == typeof this._config.popperConfig
                        ? this._config.popperConfig(t)
                        : this._config.popperConfig),
                }
            );
        }
        _selectMenuItem({ key: t, target: e }) {
            const i = V.find(
                ".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)",
                this._menu
            ).filter(l);
            i.length && v(i, e, t === Ye, !i.includes(e)).focus();
        }
        static jQueryInterface(t) {
            return this.each(function () {
                const e = hi.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t])
                        throw new TypeError(`No method named "${t}"`);
                    e[t]();
                }
            });
        }
        static clearMenus(t) {
            if (
                t &&
                (2 === t.button || ("keyup" === t.type && "Tab" !== t.key))
            )
                return;
            const e = V.find(ti);
            for (let i = 0, n = e.length; i < n; i++) {
                const n = hi.getInstance(e[i]);
                if (!n || !1 === n._config.autoClose) continue;
                if (!n._isShown()) continue;
                const s = { relatedTarget: n._element };
                if (t) {
                    const e = t.composedPath(),
                        i = e.includes(n._menu);
                    if (
                        e.includes(n._element) ||
                        ("inside" === n._config.autoClose && !i) ||
                        ("outside" === n._config.autoClose && i)
                    )
                        continue;
                    if (
                        n._menu.contains(t.target) &&
                        (("keyup" === t.type && "Tab" === t.key) ||
                            /input|select|option|textarea|form/i.test(
                                t.target.tagName
                            ))
                    )
                        continue;
                    "click" === t.type && (s.clickEvent = t);
                }
                n._completeHide(s);
            }
        }
        static getParentFromElement(t) {
            return n(t) || t.parentNode;
        }
        static dataApiKeydownHandler(t) {
            if (
                /input|textarea/i.test(t.target.tagName)
                    ? t.key === Ke ||
                      (t.key !== Ve &&
                          ((t.key !== Ye && t.key !== Xe) ||
                              t.target.closest(ei)))
                    : !Qe.test(t.key)
            )
                return;
            const e = this.classList.contains(Je);
            if (!e && t.key === Ve) return;
            if ((t.preventDefault(), t.stopPropagation(), c(this))) return;
            const i = this.matches(ti) ? this : V.prev(this, ti)[0],
                n = hi.getOrCreateInstance(i);
            if (t.key !== Ve)
                return t.key === Xe || t.key === Ye
                    ? (e || n.show(), void n._selectMenuItem(t))
                    : void ((e && t.key !== Ke) || hi.clearMenus());
            n.hide();
        }
    }
    j.on(document, Ze, ti, hi.dataApiKeydownHandler),
        j.on(document, Ze, ei, hi.dataApiKeydownHandler),
        j.on(document, Ge, hi.clearMenus),
        j.on(document, "keyup.bs.dropdown.data-api", hi.clearMenus),
        j.on(document, Ge, ti, function (t) {
            t.preventDefault(), hi.getOrCreateInstance(this).toggle();
        }),
        g(hi);
    const di = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
        ui = ".sticky-top";
    class fi {
        constructor() {
            this._element = document.body;
        }
        getWidth() {
            const t = document.documentElement.clientWidth;
            return Math.abs(window.innerWidth - t);
        }
        hide() {
            const t = this.getWidth();
            this._disableOverFlow(),
                this._setElementAttributes(
                    this._element,
                    "paddingRight",
                    (e) => e + t
                ),
                this._setElementAttributes(di, "paddingRight", (e) => e + t),
                this._setElementAttributes(ui, "marginRight", (e) => e - t);
        }
        _disableOverFlow() {
            this._saveInitialAttribute(this._element, "overflow"),
                (this._element.style.overflow = "hidden");
        }
        _setElementAttributes(t, e, i) {
            const n = this.getWidth();
            this._applyManipulationCallback(t, (t) => {
                if (
                    t !== this._element &&
                    window.innerWidth > t.clientWidth + n
                )
                    return;
                this._saveInitialAttribute(t, e);
                const s = window.getComputedStyle(t)[e];
                t.style[e] = `${i(Number.parseFloat(s))}px`;
            });
        }
        reset() {
            this._resetElementAttributes(this._element, "overflow"),
                this._resetElementAttributes(this._element, "paddingRight"),
                this._resetElementAttributes(di, "paddingRight"),
                this._resetElementAttributes(ui, "marginRight");
        }
        _saveInitialAttribute(t, e) {
            const i = t.style[e];
            i && U.setDataAttribute(t, e, i);
        }
        _resetElementAttributes(t, e) {
            this._applyManipulationCallback(t, (t) => {
                const i = U.getDataAttribute(t, e);
                void 0 === i
                    ? t.style.removeProperty(e)
                    : (U.removeDataAttribute(t, e), (t.style[e] = i));
            });
        }
        _applyManipulationCallback(t, e) {
            o(t) ? e(t) : V.find(t, this._element).forEach(e);
        }
        isOverflowing() {
            return this.getWidth() > 0;
        }
    }
    const pi = {
            className: "modal-backdrop",
            isVisible: !0,
            isAnimated: !1,
            rootElement: "body",
            clickCallback: null,
        },
        mi = {
            className: "string",
            isVisible: "boolean",
            isAnimated: "boolean",
            rootElement: "(element|string)",
            clickCallback: "(function|null)",
        },
        gi = "show",
        _i = "mousedown.bs.backdrop";
    class bi {
        constructor(t) {
            (this._config = this._getConfig(t)),
                (this._isAppended = !1),
                (this._element = null);
        }
        show(t) {
            this._config.isVisible
                ? (this._append(),
                  this._config.isAnimated && u(this._getElement()),
                  this._getElement().classList.add(gi),
                  this._emulateAnimation(() => {
                      _(t);
                  }))
                : _(t);
        }
        hide(t) {
            this._config.isVisible
                ? (this._getElement().classList.remove(gi),
                  this._emulateAnimation(() => {
                      this.dispose(), _(t);
                  }))
                : _(t);
        }
        _getElement() {
            if (!this._element) {
                const t = document.createElement("div");
                (t.className = this._config.className),
                    this._config.isAnimated && t.classList.add("fade"),
                    (this._element = t);
            }
            return this._element;
        }
        _getConfig(t) {
            return (
                ((t = {
                    ...pi,
                    ...("object" == typeof t ? t : {}),
                }).rootElement = r(t.rootElement)),
                a("backdrop", t, mi),
                t
            );
        }
        _append() {
            this._isAppended ||
                (this._config.rootElement.append(this._getElement()),
                j.on(this._getElement(), _i, () => {
                    _(this._config.clickCallback);
                }),
                (this._isAppended = !0));
        }
        dispose() {
            this._isAppended &&
                (j.off(this._element, _i),
                this._element.remove(),
                (this._isAppended = !1));
        }
        _emulateAnimation(t) {
            b(t, this._getElement(), this._config.isAnimated);
        }
    }
    const vi = { trapElement: null, autofocus: !0 },
        yi = { trapElement: "element", autofocus: "boolean" },
        wi = ".bs.focustrap",
        Ei = "backward";
    class Ai {
        constructor(t) {
            (this._config = this._getConfig(t)),
                (this._isActive = !1),
                (this._lastTabNavDirection = null);
        }
        activate() {
            const { trapElement: t, autofocus: e } = this._config;
            this._isActive ||
                (e && t.focus(),
                j.off(document, wi),
                j.on(document, "focusin.bs.focustrap", (t) =>
                    this._handleFocusin(t)
                ),
                j.on(document, "keydown.tab.bs.focustrap", (t) =>
                    this._handleKeydown(t)
                ),
                (this._isActive = !0));
        }
        deactivate() {
            this._isActive && ((this._isActive = !1), j.off(document, wi));
        }
        _handleFocusin(t) {
            const { target: e } = t,
                { trapElement: i } = this._config;
            if (e === document || e === i || i.contains(e)) return;
            const n = V.focusableChildren(i);
            0 === n.length
                ? i.focus()
                : this._lastTabNavDirection === Ei
                ? n[n.length - 1].focus()
                : n[0].focus();
        }
        _handleKeydown(t) {
            "Tab" === t.key &&
                (this._lastTabNavDirection = t.shiftKey ? Ei : "forward");
        }
        _getConfig(t) {
            return (
                (t = { ...vi, ...("object" == typeof t ? t : {}) }),
                a("focustrap", t, yi),
                t
            );
        }
    }
    const Ti = "modal",
        Oi = "Escape",
        Ci = { backdrop: !0, keyboard: !0, focus: !0 },
        ki = {
            backdrop: "(boolean|string)",
            keyboard: "boolean",
            focus: "boolean",
        },
        Li = "hidden.bs.modal",
        xi = "show.bs.modal",
        Di = "resize.bs.modal",
        Si = "click.dismiss.bs.modal",
        Ni = "keydown.dismiss.bs.modal",
        Ii = "mousedown.dismiss.bs.modal",
        Pi = "modal-open",
        ji = "show",
        Mi = "modal-static";
    class Hi extends B {
        constructor(t, e) {
            super(t),
                (this._config = this._getConfig(e)),
                (this._dialog = V.findOne(".modal-dialog", this._element)),
                (this._backdrop = this._initializeBackDrop()),
                (this._focustrap = this._initializeFocusTrap()),
                (this._isShown = !1),
                (this._ignoreBackdropClick = !1),
                (this._isTransitioning = !1),
                (this._scrollBar = new fi());
        }
        static get Default() {
            return Ci;
        }
        static get NAME() {
            return Ti;
        }
        toggle(t) {
            return this._isShown ? this.hide() : this.show(t);
        }
        show(t) {
            this._isShown ||
                this._isTransitioning ||
                j.trigger(this._element, xi, { relatedTarget: t })
                    .defaultPrevented ||
                ((this._isShown = !0),
                this._isAnimated() && (this._isTransitioning = !0),
                this._scrollBar.hide(),
                document.body.classList.add(Pi),
                this._adjustDialog(),
                this._setEscapeEvent(),
                this._setResizeEvent(),
                j.on(this._dialog, Ii, () => {
                    j.one(this._element, "mouseup.dismiss.bs.modal", (t) => {
                        t.target === this._element &&
                            (this._ignoreBackdropClick = !0);
                    });
                }),
                this._showBackdrop(() => this._showElement(t)));
        }
        hide() {
            if (!this._isShown || this._isTransitioning) return;
            if (j.trigger(this._element, "hide.bs.modal").defaultPrevented)
                return;
            this._isShown = !1;
            const t = this._isAnimated();
            t && (this._isTransitioning = !0),
                this._setEscapeEvent(),
                this._setResizeEvent(),
                this._focustrap.deactivate(),
                this._element.classList.remove(ji),
                j.off(this._element, Si),
                j.off(this._dialog, Ii),
                this._queueCallback(() => this._hideModal(), this._element, t);
        }
        dispose() {
            [window, this._dialog].forEach((t) => j.off(t, ".bs.modal")),
                this._backdrop.dispose(),
                this._focustrap.deactivate(),
                super.dispose();
        }
        handleUpdate() {
            this._adjustDialog();
        }
        _initializeBackDrop() {
            return new bi({
                isVisible: Boolean(this._config.backdrop),
                isAnimated: this._isAnimated(),
            });
        }
        _initializeFocusTrap() {
            return new Ai({ trapElement: this._element });
        }
        _getConfig(t) {
            return (
                (t = {
                    ...Ci,
                    ...U.getDataAttributes(this._element),
                    ...("object" == typeof t ? t : {}),
                }),
                a(Ti, t, ki),
                t
            );
        }
        _showElement(t) {
            const e = this._isAnimated(),
                i = V.findOne(".modal-body", this._dialog);
            (this._element.parentNode &&
                this._element.parentNode.nodeType === Node.ELEMENT_NODE) ||
                document.body.append(this._element),
                (this._element.style.display = "block"),
                this._element.removeAttribute("aria-hidden"),
                this._element.setAttribute("aria-modal", !0),
                this._element.setAttribute("role", "dialog"),
                (this._element.scrollTop = 0),
                i && (i.scrollTop = 0),
                e && u(this._element),
                this._element.classList.add(ji),
                this._queueCallback(
                    () => {
                        this._config.focus && this._focustrap.activate(),
                            (this._isTransitioning = !1),
                            j.trigger(this._element, "shown.bs.modal", {
                                relatedTarget: t,
                            });
                    },
                    this._dialog,
                    e
                );
        }
        _setEscapeEvent() {
            this._isShown
                ? j.on(this._element, Ni, (t) => {
                      this._config.keyboard && t.key === Oi
                          ? (t.preventDefault(), this.hide())
                          : this._config.keyboard ||
                            t.key !== Oi ||
                            this._triggerBackdropTransition();
                  })
                : j.off(this._element, Ni);
        }
        _setResizeEvent() {
            this._isShown
                ? j.on(window, Di, () => this._adjustDialog())
                : j.off(window, Di);
        }
        _hideModal() {
            (this._element.style.display = "none"),
                this._element.setAttribute("aria-hidden", !0),
                this._element.removeAttribute("aria-modal"),
                this._element.removeAttribute("role"),
                (this._isTransitioning = !1),
                this._backdrop.hide(() => {
                    document.body.classList.remove(Pi),
                        this._resetAdjustments(),
                        this._scrollBar.reset(),
                        j.trigger(this._element, Li);
                });
        }
        _showBackdrop(t) {
            j.on(this._element, Si, (t) => {
                this._ignoreBackdropClick
                    ? (this._ignoreBackdropClick = !1)
                    : t.target === t.currentTarget &&
                      (!0 === this._config.backdrop
                          ? this.hide()
                          : "static" === this._config.backdrop &&
                            this._triggerBackdropTransition());
            }),
                this._backdrop.show(t);
        }
        _isAnimated() {
            return this._element.classList.contains("fade");
        }
        _triggerBackdropTransition() {
            if (
                j.trigger(this._element, "hidePrevented.bs.modal")
                    .defaultPrevented
            )
                return;
            const { classList: t, scrollHeight: e, style: i } = this._element,
                n = e > document.documentElement.clientHeight;
            (!n && "hidden" === i.overflowY) ||
                t.contains(Mi) ||
                (n || (i.overflowY = "hidden"),
                t.add(Mi),
                this._queueCallback(() => {
                    t.remove(Mi),
                        n ||
                            this._queueCallback(() => {
                                i.overflowY = "";
                            }, this._dialog);
                }, this._dialog),
                this._element.focus());
        }
        _adjustDialog() {
            const t =
                    this._element.scrollHeight >
                    document.documentElement.clientHeight,
                e = this._scrollBar.getWidth(),
                i = e > 0;
            ((!i && t && !m()) || (i && !t && m())) &&
                (this._element.style.paddingLeft = `${e}px`),
                ((i && !t && !m()) || (!i && t && m())) &&
                    (this._element.style.paddingRight = `${e}px`);
        }
        _resetAdjustments() {
            (this._element.style.paddingLeft = ""),
                (this._element.style.paddingRight = "");
        }
        static jQueryInterface(t, e) {
            return this.each(function () {
                const i = Hi.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === i[t])
                        throw new TypeError(`No method named "${t}"`);
                    i[t](e);
                }
            });
        }
    }
    j.on(
        document,
        "click.bs.modal.data-api",
        '[data-bs-toggle="modal"]',
        function (t) {
            const e = n(this);
            ["A", "AREA"].includes(this.tagName) && t.preventDefault(),
                j.one(e, xi, (t) => {
                    t.defaultPrevented ||
                        j.one(e, Li, () => {
                            l(this) && this.focus();
                        });
                });
            const i = V.findOne(".modal.show");
            i && Hi.getInstance(i).hide(),
                Hi.getOrCreateInstance(e).toggle(this);
        }
    ),
        R(Hi),
        g(Hi);
    const Bi = "offcanvas",
        Ri = { backdrop: !0, keyboard: !0, scroll: !1 },
        Wi = { backdrop: "boolean", keyboard: "boolean", scroll: "boolean" },
        $i = "show",
        zi = ".offcanvas.show",
        qi = "hidden.bs.offcanvas";
    class Fi extends B {
        constructor(t, e) {
            super(t),
                (this._config = this._getConfig(e)),
                (this._isShown = !1),
                (this._backdrop = this._initializeBackDrop()),
                (this._focustrap = this._initializeFocusTrap()),
                this._addEventListeners();
        }
        static get NAME() {
            return Bi;
        }
        static get Default() {
            return Ri;
        }
        toggle(t) {
            return this._isShown ? this.hide() : this.show(t);
        }
        show(t) {
            this._isShown ||
                j.trigger(this._element, "show.bs.offcanvas", {
                    relatedTarget: t,
                }).defaultPrevented ||
                ((this._isShown = !0),
                (this._element.style.visibility = "visible"),
                this._backdrop.show(),
                this._config.scroll || new fi().hide(),
                this._element.removeAttribute("aria-hidden"),
                this._element.setAttribute("aria-modal", !0),
                this._element.setAttribute("role", "dialog"),
                this._element.classList.add($i),
                this._queueCallback(
                    () => {
                        this._config.scroll || this._focustrap.activate(),
                            j.trigger(this._element, "shown.bs.offcanvas", {
                                relatedTarget: t,
                            });
                    },
                    this._element,
                    !0
                ));
        }
        hide() {
            this._isShown &&
                (j.trigger(this._element, "hide.bs.offcanvas")
                    .defaultPrevented ||
                    (this._focustrap.deactivate(),
                    this._element.blur(),
                    (this._isShown = !1),
                    this._element.classList.remove($i),
                    this._backdrop.hide(),
                    this._queueCallback(
                        () => {
                            this._element.setAttribute("aria-hidden", !0),
                                this._element.removeAttribute("aria-modal"),
                                this._element.removeAttribute("role"),
                                (this._element.style.visibility = "hidden"),
                                this._config.scroll || new fi().reset(),
                                j.trigger(this._element, qi);
                        },
                        this._element,
                        !0
                    )));
        }
        dispose() {
            this._backdrop.dispose(),
                this._focustrap.deactivate(),
                super.dispose();
        }
        _getConfig(t) {
            return (
                (t = {
                    ...Ri,
                    ...U.getDataAttributes(this._element),
                    ...("object" == typeof t ? t : {}),
                }),
                a(Bi, t, Wi),
                t
            );
        }
        _initializeBackDrop() {
            return new bi({
                className: "offcanvas-backdrop",
                isVisible: this._config.backdrop,
                isAnimated: !0,
                rootElement: this._element.parentNode,
                clickCallback: () => this.hide(),
            });
        }
        _initializeFocusTrap() {
            return new Ai({ trapElement: this._element });
        }
        _addEventListeners() {
            j.on(this._element, "keydown.dismiss.bs.offcanvas", (t) => {
                this._config.keyboard && "Escape" === t.key && this.hide();
            });
        }
        static jQueryInterface(t) {
            return this.each(function () {
                const e = Fi.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (
                        void 0 === e[t] ||
                        t.startsWith("_") ||
                        "constructor" === t
                    )
                        throw new TypeError(`No method named "${t}"`);
                    e[t](this);
                }
            });
        }
    }
    j.on(
        document,
        "click.bs.offcanvas.data-api",
        '[data-bs-toggle="offcanvas"]',
        function (t) {
            const e = n(this);
            if (
                (["A", "AREA"].includes(this.tagName) && t.preventDefault(),
                c(this))
            )
                return;
            j.one(e, qi, () => {
                l(this) && this.focus();
            });
            const i = V.findOne(zi);
            i && i !== e && Fi.getInstance(i).hide(),
                Fi.getOrCreateInstance(e).toggle(this);
        }
    ),
        j.on(window, "load.bs.offcanvas.data-api", () =>
            V.find(zi).forEach((t) => Fi.getOrCreateInstance(t).show())
        ),
        R(Fi),
        g(Fi);
    const Ui = new Set([
            "background",
            "cite",
            "href",
            "itemtype",
            "longdesc",
            "poster",
            "src",
            "xlink:href",
        ]),
        Vi = /^(?:(?:https?|mailto|ftp|tel|file|sms):|[^#&/:?]*(?:[#/?]|$))/i,
        Ki =
            /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i,
        Xi = (t, e) => {
            const i = t.nodeName.toLowerCase();
            if (e.includes(i))
                return (
                    !Ui.has(i) ||
                    Boolean(Vi.test(t.nodeValue) || Ki.test(t.nodeValue))
                );
            const n = e.filter((t) => t instanceof RegExp);
            for (let t = 0, e = n.length; t < e; t++)
                if (n[t].test(i)) return !0;
            return !1;
        };
    function Yi(t, e, i) {
        if (!t.length) return t;
        if (i && "function" == typeof i) return i(t);
        const n = new window.DOMParser().parseFromString(t, "text/html"),
            s = [].concat(...n.body.querySelectorAll("*"));
        for (let t = 0, i = s.length; t < i; t++) {
            const i = s[t],
                n = i.nodeName.toLowerCase();
            if (!Object.keys(e).includes(n)) {
                i.remove();
                continue;
            }
            const o = [].concat(...i.attributes),
                r = [].concat(e["*"] || [], e[n] || []);
            o.forEach((t) => {
                Xi(t, r) || i.removeAttribute(t.nodeName);
            });
        }
        return n.body.innerHTML;
    }
    const Qi = "tooltip",
        Gi = new Set(["sanitize", "allowList", "sanitizeFn"]),
        Zi = {
            animation: "boolean",
            template: "string",
            title: "(string|element|function)",
            trigger: "string",
            delay: "(number|object)",
            html: "boolean",
            selector: "(string|boolean)",
            placement: "(string|function)",
            offset: "(array|string|function)",
            container: "(string|element|boolean)",
            fallbackPlacements: "array",
            boundary: "(string|element)",
            customClass: "(string|function)",
            sanitize: "boolean",
            sanitizeFn: "(null|function)",
            allowList: "object",
            popperConfig: "(null|object|function)",
        },
        Ji = {
            AUTO: "auto",
            TOP: "top",
            RIGHT: m() ? "left" : "right",
            BOTTOM: "bottom",
            LEFT: m() ? "right" : "left",
        },
        tn = {
            animation: !0,
            template:
                '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
            trigger: "hover focus",
            title: "",
            delay: 0,
            html: !1,
            selector: !1,
            placement: "top",
            offset: [0, 0],
            container: !1,
            fallbackPlacements: ["top", "right", "bottom", "left"],
            boundary: "clippingParents",
            customClass: "",
            sanitize: !0,
            sanitizeFn: null,
            allowList: {
                "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i],
                a: ["target", "href", "title", "rel"],
                area: [],
                b: [],
                br: [],
                col: [],
                code: [],
                div: [],
                em: [],
                hr: [],
                h1: [],
                h2: [],
                h3: [],
                h4: [],
                h5: [],
                h6: [],
                i: [],
                img: ["src", "srcset", "alt", "title", "width", "height"],
                li: [],
                ol: [],
                p: [],
                pre: [],
                s: [],
                small: [],
                span: [],
                sub: [],
                sup: [],
                strong: [],
                u: [],
                ul: [],
            },
            popperConfig: null,
        },
        en = {
            HIDE: "hide.bs.tooltip",
            HIDDEN: "hidden.bs.tooltip",
            SHOW: "show.bs.tooltip",
            SHOWN: "shown.bs.tooltip",
            INSERTED: "inserted.bs.tooltip",
            CLICK: "click.bs.tooltip",
            FOCUSIN: "focusin.bs.tooltip",
            FOCUSOUT: "focusout.bs.tooltip",
            MOUSEENTER: "mouseenter.bs.tooltip",
            MOUSELEAVE: "mouseleave.bs.tooltip",
        },
        nn = "fade",
        sn = "show",
        on = "show",
        rn = "out",
        an = ".tooltip-inner",
        ln = ".modal",
        cn = "hide.bs.modal",
        hn = "hover",
        dn = "focus";
    class un extends B {
        constructor(t, e) {
            if (void 0 === Fe)
                throw new TypeError(
                    "Bootstrap's tooltips require Popper (https://popper.js.org)"
                );
            super(t),
                (this._isEnabled = !0),
                (this._timeout = 0),
                (this._hoverState = ""),
                (this._activeTrigger = {}),
                (this._popper = null),
                (this._config = this._getConfig(e)),
                (this.tip = null),
                this._setListeners();
        }
        static get Default() {
            return tn;
        }
        static get NAME() {
            return Qi;
        }
        static get Event() {
            return en;
        }
        static get DefaultType() {
            return Zi;
        }
        enable() {
            this._isEnabled = !0;
        }
        disable() {
            this._isEnabled = !1;
        }
        toggleEnabled() {
            this._isEnabled = !this._isEnabled;
        }
        toggle(t) {
            if (this._isEnabled)
                if (t) {
                    const e = this._initializeOnDelegatedTarget(t);
                    (e._activeTrigger.click = !e._activeTrigger.click),
                        e._isWithActiveTrigger()
                            ? e._enter(null, e)
                            : e._leave(null, e);
                } else {
                    if (this.getTipElement().classList.contains(sn))
                        return void this._leave(null, this);
                    this._enter(null, this);
                }
        }
        dispose() {
            clearTimeout(this._timeout),
                j.off(this._element.closest(ln), cn, this._hideModalHandler),
                this.tip && this.tip.remove(),
                this._disposePopper(),
                super.dispose();
        }
        show() {
            if ("none" === this._element.style.display)
                throw new Error("Please use show on visible elements");
            if (!this.isWithContent() || !this._isEnabled) return;
            const t = j.trigger(this._element, this.constructor.Event.SHOW),
                e = h(this._element),
                i =
                    null === e
                        ? this._element.ownerDocument.documentElement.contains(
                              this._element
                          )
                        : e.contains(this._element);
            if (t.defaultPrevented || !i) return;
            "tooltip" === this.constructor.NAME &&
                this.tip &&
                this.getTitle() !== this.tip.querySelector(an).innerHTML &&
                (this._disposePopper(), this.tip.remove(), (this.tip = null));
            const n = this.getTipElement(),
                s = ((t) => {
                    do {
                        t += Math.floor(1e6 * Math.random());
                    } while (document.getElementById(t));
                    return t;
                })(this.constructor.NAME);
            n.setAttribute("id", s),
                this._element.setAttribute("aria-describedby", s),
                this._config.animation && n.classList.add(nn);
            const o =
                    "function" == typeof this._config.placement
                        ? this._config.placement.call(this, n, this._element)
                        : this._config.placement,
                r = this._getAttachment(o);
            this._addAttachmentClass(r);
            const { container: a } = this._config;
            H.set(n, this.constructor.DATA_KEY, this),
                this._element.ownerDocument.documentElement.contains(
                    this.tip
                ) ||
                    (a.append(n),
                    j.trigger(this._element, this.constructor.Event.INSERTED)),
                this._popper
                    ? this._popper.update()
                    : (this._popper = qe(
                          this._element,
                          n,
                          this._getPopperConfig(r)
                      )),
                n.classList.add(sn);
            const l = this._resolvePossibleFunction(this._config.customClass);
            l && n.classList.add(...l.split(" ")),
                "ontouchstart" in document.documentElement &&
                    [].concat(...document.body.children).forEach((t) => {
                        j.on(t, "mouseover", d);
                    });
            const c = this.tip.classList.contains(nn);
            this._queueCallback(
                () => {
                    const t = this._hoverState;
                    (this._hoverState = null),
                        j.trigger(this._element, this.constructor.Event.SHOWN),
                        t === rn && this._leave(null, this);
                },
                this.tip,
                c
            );
        }
        hide() {
            if (!this._popper) return;
            const t = this.getTipElement();
            if (
                j.trigger(this._element, this.constructor.Event.HIDE)
                    .defaultPrevented
            )
                return;
            t.classList.remove(sn),
                "ontouchstart" in document.documentElement &&
                    []
                        .concat(...document.body.children)
                        .forEach((t) => j.off(t, "mouseover", d)),
                (this._activeTrigger.click = !1),
                (this._activeTrigger.focus = !1),
                (this._activeTrigger.hover = !1);
            const e = this.tip.classList.contains(nn);
            this._queueCallback(
                () => {
                    this._isWithActiveTrigger() ||
                        (this._hoverState !== on && t.remove(),
                        this._cleanTipClass(),
                        this._element.removeAttribute("aria-describedby"),
                        j.trigger(this._element, this.constructor.Event.HIDDEN),
                        this._disposePopper());
                },
                this.tip,
                e
            ),
                (this._hoverState = "");
        }
        update() {
            null !== this._popper && this._popper.update();
        }
        isWithContent() {
            return Boolean(this.getTitle());
        }
        getTipElement() {
            if (this.tip) return this.tip;
            const t = document.createElement("div");
            t.innerHTML = this._config.template;
            const e = t.children[0];
            return (
                this.setContent(e),
                e.classList.remove(nn, sn),
                (this.tip = e),
                this.tip
            );
        }
        setContent(t) {
            this._sanitizeAndSetContent(t, this.getTitle(), an);
        }
        _sanitizeAndSetContent(t, e, i) {
            const n = V.findOne(i, t);
            e || !n ? this.setElementContent(n, e) : n.remove();
        }
        setElementContent(t, e) {
            if (null !== t)
                return o(e)
                    ? ((e = r(e)),
                      void (this._config.html
                          ? e.parentNode !== t &&
                            ((t.innerHTML = ""), t.append(e))
                          : (t.textContent = e.textContent)))
                    : void (this._config.html
                          ? (this._config.sanitize &&
                                (e = Yi(
                                    e,
                                    this._config.allowList,
                                    this._config.sanitizeFn
                                )),
                            (t.innerHTML = e))
                          : (t.textContent = e));
        }
        getTitle() {
            const t =
                this._element.getAttribute("data-bs-original-title") ||
                this._config.title;
            return this._resolvePossibleFunction(t);
        }
        updateAttachment(t) {
            return "right" === t ? "end" : "left" === t ? "start" : t;
        }
        _initializeOnDelegatedTarget(t, e) {
            return (
                e ||
                this.constructor.getOrCreateInstance(
                    t.delegateTarget,
                    this._getDelegateConfig()
                )
            );
        }
        _getOffset() {
            const { offset: t } = this._config;
            return "string" == typeof t
                ? t.split(",").map((t) => Number.parseInt(t, 10))
                : "function" == typeof t
                ? (e) => t(e, this._element)
                : t;
        }
        _resolvePossibleFunction(t) {
            return "function" == typeof t ? t.call(this._element) : t;
        }
        _getPopperConfig(t) {
            const e = {
                placement: t,
                modifiers: [
                    {
                        name: "flip",
                        options: {
                            fallbackPlacements: this._config.fallbackPlacements,
                        },
                    },
                    { name: "offset", options: { offset: this._getOffset() } },
                    {
                        name: "preventOverflow",
                        options: { boundary: this._config.boundary },
                    },
                    {
                        name: "arrow",
                        options: { element: `.${this.constructor.NAME}-arrow` },
                    },
                    {
                        name: "onChange",
                        enabled: !0,
                        phase: "afterWrite",
                        fn: (t) => this._handlePopperPlacementChange(t),
                    },
                ],
                onFirstUpdate: (t) => {
                    t.options.placement !== t.placement &&
                        this._handlePopperPlacementChange(t);
                },
            };
            return {
                ...e,
                ...("function" == typeof this._config.popperConfig
                    ? this._config.popperConfig(e)
                    : this._config.popperConfig),
            };
        }
        _addAttachmentClass(t) {
            this.getTipElement().classList.add(
                `${this._getBasicClassPrefix()}-${this.updateAttachment(t)}`
            );
        }
        _getAttachment(t) {
            return Ji[t.toUpperCase()];
        }
        _setListeners() {
            this._config.trigger.split(" ").forEach((t) => {
                if ("click" === t)
                    j.on(
                        this._element,
                        this.constructor.Event.CLICK,
                        this._config.selector,
                        (t) => this.toggle(t)
                    );
                else if ("manual" !== t) {
                    const e =
                            t === hn
                                ? this.constructor.Event.MOUSEENTER
                                : this.constructor.Event.FOCUSIN,
                        i =
                            t === hn
                                ? this.constructor.Event.MOUSELEAVE
                                : this.constructor.Event.FOCUSOUT;
                    j.on(this._element, e, this._config.selector, (t) =>
                        this._enter(t)
                    ),
                        j.on(this._element, i, this._config.selector, (t) =>
                            this._leave(t)
                        );
                }
            }),
                (this._hideModalHandler = () => {
                    this._element && this.hide();
                }),
                j.on(this._element.closest(ln), cn, this._hideModalHandler),
                this._config.selector
                    ? (this._config = {
                          ...this._config,
                          trigger: "manual",
                          selector: "",
                      })
                    : this._fixTitle();
        }
        _fixTitle() {
            const t = this._element.getAttribute("title"),
                e = typeof this._element.getAttribute("data-bs-original-title");
            (t || "string" !== e) &&
                (this._element.setAttribute("data-bs-original-title", t || ""),
                !t ||
                    this._element.getAttribute("aria-label") ||
                    this._element.textContent ||
                    this._element.setAttribute("aria-label", t),
                this._element.setAttribute("title", ""));
        }
        _enter(t, e) {
            (e = this._initializeOnDelegatedTarget(t, e)),
                t && (e._activeTrigger["focusin" === t.type ? dn : hn] = !0),
                e.getTipElement().classList.contains(sn) || e._hoverState === on
                    ? (e._hoverState = on)
                    : (clearTimeout(e._timeout),
                      (e._hoverState = on),
                      e._config.delay && e._config.delay.show
                          ? (e._timeout = setTimeout(() => {
                                e._hoverState === on && e.show();
                            }, e._config.delay.show))
                          : e.show());
        }
        _leave(t, e) {
            (e = this._initializeOnDelegatedTarget(t, e)),
                t &&
                    (e._activeTrigger["focusout" === t.type ? dn : hn] =
                        e._element.contains(t.relatedTarget)),
                e._isWithActiveTrigger() ||
                    (clearTimeout(e._timeout),
                    (e._hoverState = rn),
                    e._config.delay && e._config.delay.hide
                        ? (e._timeout = setTimeout(() => {
                              e._hoverState === rn && e.hide();
                          }, e._config.delay.hide))
                        : e.hide());
        }
        _isWithActiveTrigger() {
            for (const t in this._activeTrigger)
                if (this._activeTrigger[t]) return !0;
            return !1;
        }
        _getConfig(t) {
            const e = U.getDataAttributes(this._element);
            return (
                Object.keys(e).forEach((t) => {
                    Gi.has(t) && delete e[t];
                }),
                ((t = {
                    ...this.constructor.Default,
                    ...e,
                    ...("object" == typeof t && t ? t : {}),
                }).container =
                    !1 === t.container ? document.body : r(t.container)),
                "number" == typeof t.delay &&
                    (t.delay = { show: t.delay, hide: t.delay }),
                "number" == typeof t.title && (t.title = t.title.toString()),
                "number" == typeof t.content &&
                    (t.content = t.content.toString()),
                a(Qi, t, this.constructor.DefaultType),
                t.sanitize &&
                    (t.template = Yi(t.template, t.allowList, t.sanitizeFn)),
                t
            );
        }
        _getDelegateConfig() {
            const t = {};
            for (const e in this._config)
                this.constructor.Default[e] !== this._config[e] &&
                    (t[e] = this._config[e]);
            return t;
        }
        _cleanTipClass() {
            const t = this.getTipElement(),
                e = new RegExp(
                    `(^|\\s)${this._getBasicClassPrefix()}\\S+`,
                    "g"
                ),
                i = t.getAttribute("class").match(e);
            null !== i &&
                i.length > 0 &&
                i.map((t) => t.trim()).forEach((e) => t.classList.remove(e));
        }
        _getBasicClassPrefix() {
            return "bs-tooltip";
        }
        _handlePopperPlacementChange(t) {
            const { state: e } = t;
            e &&
                ((this.tip = e.elements.popper),
                this._cleanTipClass(),
                this._addAttachmentClass(this._getAttachment(e.placement)));
        }
        _disposePopper() {
            this._popper && (this._popper.destroy(), (this._popper = null));
        }
        static jQueryInterface(t) {
            return this.each(function () {
                const e = un.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t])
                        throw new TypeError(`No method named "${t}"`);
                    e[t]();
                }
            });
        }
    }
    g(un);
    const fn = {
            ...un.Default,
            placement: "right",
            offset: [0, 8],
            trigger: "click",
            content: "",
            template:
                '<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
        },
        pn = { ...un.DefaultType, content: "(string|element|function)" },
        mn = {
            HIDE: "hide.bs.popover",
            HIDDEN: "hidden.bs.popover",
            SHOW: "show.bs.popover",
            SHOWN: "shown.bs.popover",
            INSERTED: "inserted.bs.popover",
            CLICK: "click.bs.popover",
            FOCUSIN: "focusin.bs.popover",
            FOCUSOUT: "focusout.bs.popover",
            MOUSEENTER: "mouseenter.bs.popover",
            MOUSELEAVE: "mouseleave.bs.popover",
        };
    class gn extends un {
        static get Default() {
            return fn;
        }
        static get NAME() {
            return "popover";
        }
        static get Event() {
            return mn;
        }
        static get DefaultType() {
            return pn;
        }
        isWithContent() {
            return this.getTitle() || this._getContent();
        }
        setContent(t) {
            this._sanitizeAndSetContent(t, this.getTitle(), ".popover-header"),
                this._sanitizeAndSetContent(
                    t,
                    this._getContent(),
                    ".popover-body"
                );
        }
        _getContent() {
            return this._resolvePossibleFunction(this._config.content);
        }
        _getBasicClassPrefix() {
            return "bs-popover";
        }
        static jQueryInterface(t) {
            return this.each(function () {
                const e = gn.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t])
                        throw new TypeError(`No method named "${t}"`);
                    e[t]();
                }
            });
        }
    }
    g(gn);
    const _n = "scrollspy",
        bn = { offset: 10, method: "auto", target: "" },
        vn = { offset: "number", method: "string", target: "(string|element)" },
        yn = "active",
        wn = ".nav-link, .list-group-item, .dropdown-item",
        En = "position";
    class An extends B {
        constructor(t, e) {
            super(t),
                (this._scrollElement =
                    "BODY" === this._element.tagName ? window : this._element),
                (this._config = this._getConfig(e)),
                (this._offsets = []),
                (this._targets = []),
                (this._activeTarget = null),
                (this._scrollHeight = 0),
                j.on(this._scrollElement, "scroll.bs.scrollspy", () =>
                    this._process()
                ),
                this.refresh(),
                this._process();
        }
        static get Default() {
            return bn;
        }
        static get NAME() {
            return _n;
        }
        refresh() {
            const t =
                    this._scrollElement === this._scrollElement.window
                        ? "offset"
                        : En,
                e = "auto" === this._config.method ? t : this._config.method,
                n = e === En ? this._getScrollTop() : 0;
            (this._offsets = []),
                (this._targets = []),
                (this._scrollHeight = this._getScrollHeight()),
                V.find(wn, this._config.target)
                    .map((t) => {
                        const s = i(t),
                            o = s ? V.findOne(s) : null;
                        if (o) {
                            const t = o.getBoundingClientRect();
                            if (t.width || t.height)
                                return [U[e](o).top + n, s];
                        }
                        return null;
                    })
                    .filter((t) => t)
                    .sort((t, e) => t[0] - e[0])
                    .forEach((t) => {
                        this._offsets.push(t[0]), this._targets.push(t[1]);
                    });
        }
        dispose() {
            j.off(this._scrollElement, ".bs.scrollspy"), super.dispose();
        }
        _getConfig(t) {
            return (
                ((t = {
                    ...bn,
                    ...U.getDataAttributes(this._element),
                    ...("object" == typeof t && t ? t : {}),
                }).target = r(t.target) || document.documentElement),
                a(_n, t, vn),
                t
            );
        }
        _getScrollTop() {
            return this._scrollElement === window
                ? this._scrollElement.pageYOffset
                : this._scrollElement.scrollTop;
        }
        _getScrollHeight() {
            return (
                this._scrollElement.scrollHeight ||
                Math.max(
                    document.body.scrollHeight,
                    document.documentElement.scrollHeight
                )
            );
        }
        _getOffsetHeight() {
            return this._scrollElement === window
                ? window.innerHeight
                : this._scrollElement.getBoundingClientRect().height;
        }
        _process() {
            const t = this._getScrollTop() + this._config.offset,
                e = this._getScrollHeight(),
                i = this._config.offset + e - this._getOffsetHeight();
            if ((this._scrollHeight !== e && this.refresh(), t >= i)) {
                const t = this._targets[this._targets.length - 1];
                this._activeTarget !== t && this._activate(t);
            } else {
                if (
                    this._activeTarget &&
                    t < this._offsets[0] &&
                    this._offsets[0] > 0
                )
                    return (this._activeTarget = null), void this._clear();
                for (let e = this._offsets.length; e--; )
                    this._activeTarget !== this._targets[e] &&
                        t >= this._offsets[e] &&
                        (void 0 === this._offsets[e + 1] ||
                            t < this._offsets[e + 1]) &&
                        this._activate(this._targets[e]);
            }
        }
        _activate(t) {
            (this._activeTarget = t), this._clear();
            const e = wn
                    .split(",")
                    .map(
                        (e) => `${e}[data-bs-target="${t}"],${e}[href="${t}"]`
                    ),
                i = V.findOne(e.join(","), this._config.target);
            i.classList.add(yn),
                i.classList.contains("dropdown-item")
                    ? V.findOne(
                          ".dropdown-toggle",
                          i.closest(".dropdown")
                      ).classList.add(yn)
                    : V.parents(i, ".nav, .list-group").forEach((t) => {
                          V.prev(t, ".nav-link, .list-group-item").forEach(
                              (t) => t.classList.add(yn)
                          ),
                              V.prev(t, ".nav-item").forEach((t) => {
                                  V.children(t, ".nav-link").forEach((t) =>
                                      t.classList.add(yn)
                                  );
                              });
                      }),
                j.trigger(this._scrollElement, "activate.bs.scrollspy", {
                    relatedTarget: t,
                });
        }
        _clear() {
            V.find(wn, this._config.target)
                .filter((t) => t.classList.contains(yn))
                .forEach((t) => t.classList.remove(yn));
        }
        static jQueryInterface(t) {
            return this.each(function () {
                const e = An.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t])
                        throw new TypeError(`No method named "${t}"`);
                    e[t]();
                }
            });
        }
    }
    j.on(window, "load.bs.scrollspy.data-api", () => {
        V.find('[data-bs-spy="scroll"]').forEach((t) => new An(t));
    }),
        g(An);
    const Tn = "active",
        On = "fade",
        Cn = "show",
        kn = ".active",
        Ln = ":scope > li > .active";
    class xn extends B {
        static get NAME() {
            return "tab";
        }
        show() {
            if (
                this._element.parentNode &&
                this._element.parentNode.nodeType === Node.ELEMENT_NODE &&
                this._element.classList.contains(Tn)
            )
                return;
            let t;
            const e = n(this._element),
                i = this._element.closest(".nav, .list-group");
            if (i) {
                const e = "UL" === i.nodeName || "OL" === i.nodeName ? Ln : kn;
                (t = V.find(e, i)), (t = t[t.length - 1]);
            }
            const s = t
                ? j.trigger(t, "hide.bs.tab", { relatedTarget: this._element })
                : null;
            if (
                j.trigger(this._element, "show.bs.tab", { relatedTarget: t })
                    .defaultPrevented ||
                (null !== s && s.defaultPrevented)
            )
                return;
            this._activate(this._element, i);
            const o = () => {
                j.trigger(t, "hidden.bs.tab", { relatedTarget: this._element }),
                    j.trigger(this._element, "shown.bs.tab", {
                        relatedTarget: t,
                    });
            };
            e ? this._activate(e, e.parentNode, o) : o();
        }
        _activate(t, e, i) {
            const n = (
                    !e || ("UL" !== e.nodeName && "OL" !== e.nodeName)
                        ? V.children(e, kn)
                        : V.find(Ln, e)
                )[0],
                s = i && n && n.classList.contains(On),
                o = () => this._transitionComplete(t, n, i);
            n && s
                ? (n.classList.remove(Cn), this._queueCallback(o, t, !0))
                : o();
        }
        _transitionComplete(t, e, i) {
            if (e) {
                e.classList.remove(Tn);
                const t = V.findOne(
                    ":scope > .dropdown-menu .active",
                    e.parentNode
                );
                t && t.classList.remove(Tn),
                    "tab" === e.getAttribute("role") &&
                        e.setAttribute("aria-selected", !1);
            }
            t.classList.add(Tn),
                "tab" === t.getAttribute("role") &&
                    t.setAttribute("aria-selected", !0),
                u(t),
                t.classList.contains(On) && t.classList.add(Cn);
            let n = t.parentNode;
            if (
                (n && "LI" === n.nodeName && (n = n.parentNode),
                n && n.classList.contains("dropdown-menu"))
            ) {
                const e = t.closest(".dropdown");
                e &&
                    V.find(".dropdown-toggle", e).forEach((t) =>
                        t.classList.add(Tn)
                    ),
                    t.setAttribute("aria-expanded", !0);
            }
            i && i();
        }
        static jQueryInterface(t) {
            return this.each(function () {
                const e = xn.getOrCreateInstance(this);
                if ("string" == typeof t) {
                    if (void 0 === e[t])
                        throw new TypeError(`No method named "${t}"`);
                    e[t]();
                }
            });
        }
    }
    j.on(
        document,
        "click.bs.tab.data-api",
        '[data-bs-toggle="tab"], [data-bs-toggle="pill"], [data-bs-toggle="list"]',
        function (t) {
            ["A", "AREA"].includes(this.tagName) && t.preventDefault(),
                c(this) || xn.getOrCreateInstance(this).show();
        }
    ),
        g(xn);
    const Dn = "toast",
        Sn = "hide",
        Nn = "show",
        In = "showing",
        Pn = { animation: "boolean", autohide: "boolean", delay: "number" },
        jn = { animation: !0, autohide: !0, delay: 5e3 };
    class Mn extends B {
        constructor(t, e) {
            super(t),
                (this._config = this._getConfig(e)),
                (this._timeout = null),
                (this._hasMouseInteraction = !1),
                (this._hasKeyboardInteraction = !1),
                this._setListeners();
        }
        static get DefaultType() {
            return Pn;
        }
        static get Default() {
            return jn;
        }
        static get NAME() {
            return Dn;
        }
        show() {
            j.trigger(this._element, "show.bs.toast").defaultPrevented ||
                (this._clearTimeout(),
                this._config.animation && this._element.classList.add("fade"),
                this._element.classList.remove(Sn),
                u(this._element),
                this._element.classList.add(Nn),
                this._element.classList.add(In),
                this._queueCallback(
                    () => {
                        this._element.classList.remove(In),
                            j.trigger(this._element, "shown.bs.toast"),
                            this._maybeScheduleHide();
                    },
                    this._element,
                    this._config.animation
                ));
        }
        hide() {
            this._element.classList.contains(Nn) &&
                (j.trigger(this._element, "hide.bs.toast").defaultPrevented ||
                    (this._element.classList.add(In),
                    this._queueCallback(
                        () => {
                            this._element.classList.add(Sn),
                                this._element.classList.remove(In),
                                this._element.classList.remove(Nn),
                                j.trigger(this._element, "hidden.bs.toast");
                        },
                        this._element,
                        this._config.animation
                    )));
        }
        dispose() {
            this._clearTimeout(),
                this._element.classList.contains(Nn) &&
                    this._element.classList.remove(Nn),
                super.dispose();
        }
        _getConfig(t) {
            return (
                (t = {
                    ...jn,
                    ...U.getDataAttributes(this._element),
                    ...("object" == typeof t && t ? t : {}),
                }),
                a(Dn, t, this.constructor.DefaultType),
                t
            );
        }
        _maybeScheduleHide() {
            this._config.autohide &&
                (this._hasMouseInteraction ||
                    this._hasKeyboardInteraction ||
                    (this._timeout = setTimeout(() => {
                        this.hide();
                    }, this._config.delay)));
        }
        _onInteraction(t, e) {
            switch (t.type) {
                case "mouseover":
                case "mouseout":
                    this._hasMouseInteraction = e;
                    break;
                case "focusin":
                case "focusout":
                    this._hasKeyboardInteraction = e;
            }
            if (e) return void this._clearTimeout();
            const i = t.relatedTarget;
            this._element === i ||
                this._element.contains(i) ||
                this._maybeScheduleHide();
        }
        _setListeners() {
            j.on(this._element, "mouseover.bs.toast", (t) =>
                this._onInteraction(t, !0)
            ),
                j.on(this._element, "mouseout.bs.toast", (t) =>
                    this._onInteraction(t, !1)
                ),
                j.on(this._element, "focusin.bs.toast", (t) =>
                    this._onInteraction(t, !0)
                ),
                j.on(this._element, "focusout.bs.toast", (t) =>
                    this._onInteraction(t, !1)
                );
        }
        _clearTimeout() {
            clearTimeout(this._timeout), (this._timeout = null);
        }
        static jQueryInterface(t) {
            return this.each(function () {
                const e = Mn.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t])
                        throw new TypeError(`No method named "${t}"`);
                    e[t](this);
                }
            });
        }
    }
    return (
        R(Mn),
        g(Mn),
        {
            Alert: W,
            Button: z,
            Carousel: st,
            Collapse: pt,
            Dropdown: hi,
            Modal: Hi,
            Offcanvas: Fi,
            Popover: gn,
            ScrollSpy: An,
            Tab: xn,
            Toast: Mn,
            Tooltip: un,
        }
    );
});
//# sourceMappingURL=bootstrap.bundle.min.js.map
!(function (e, n) {
    "object" == typeof exports && "object" == typeof module
        ? (module.exports = n())
        : "function" == typeof define && define.amd
        ? define([], n)
        : "object" == typeof exports
        ? (exports.feather = n())
        : (e.feather = n());
})("undefined" != typeof self ? self : this, function () {
    return (function (e) {
        var n = {};
        function i(t) {
            if (n[t]) return n[t].exports;
            var l = (n[t] = { i: t, l: !1, exports: {} });
            return e[t].call(l.exports, l, l.exports, i), (l.l = !0), l.exports;
        }
        return (
            (i.m = e),
            (i.c = n),
            (i.d = function (e, n, t) {
                i.o(e, n) ||
                    Object.defineProperty(e, n, {
                        configurable: !1,
                        enumerable: !0,
                        get: t,
                    });
            }),
            (i.r = function (e) {
                Object.defineProperty(e, "__esModule", { value: !0 });
            }),
            (i.n = function (e) {
                var n =
                    e && e.__esModule
                        ? function () {
                              return e.default;
                          }
                        : function () {
                              return e;
                          };
                return i.d(n, "a", n), n;
            }),
            (i.o = function (e, n) {
                return Object.prototype.hasOwnProperty.call(e, n);
            }),
            (i.p = ""),
            i((i.s = 80))
        );
    })([
        function (e, n, i) {
            (function (n) {
                var i = "object",
                    t = function (e) {
                        return e && e.Math == Math && e;
                    };
                e.exports =
                    t(typeof globalThis == i && globalThis) ||
                    t(typeof window == i && window) ||
                    t(typeof self == i && self) ||
                    t(typeof n == i && n) ||
                    Function("return this")();
            }).call(this, i(75));
        },
        function (e, n) {
            var i = {}.hasOwnProperty;
            e.exports = function (e, n) {
                return i.call(e, n);
            };
        },
        function (e, n, i) {
            var t = i(0),
                l = i(11),
                r = i(33),
                o = i(62),
                a = t.Symbol,
                c = l("wks");
            e.exports = function (e) {
                return (
                    c[e] || (c[e] = (o && a[e]) || (o ? a : r)("Symbol." + e))
                );
            };
        },
        function (e, n, i) {
            var t = i(6);
            e.exports = function (e) {
                if (!t(e)) throw TypeError(String(e) + " is not an object");
                return e;
            };
        },
        function (e, n) {
            e.exports = function (e) {
                try {
                    return !!e();
                } catch (e) {
                    return !0;
                }
            };
        },
        function (e, n, i) {
            var t = i(8),
                l = i(7),
                r = i(10);
            e.exports = t
                ? function (e, n, i) {
                      return l.f(e, n, r(1, i));
                  }
                : function (e, n, i) {
                      return (e[n] = i), e;
                  };
        },
        function (e, n) {
            e.exports = function (e) {
                return "object" == typeof e
                    ? null !== e
                    : "function" == typeof e;
            };
        },
        function (e, n, i) {
            var t = i(8),
                l = i(35),
                r = i(3),
                o = i(18),
                a = Object.defineProperty;
            n.f = t
                ? a
                : function (e, n, i) {
                      if ((r(e), (n = o(n, !0)), r(i), l))
                          try {
                              return a(e, n, i);
                          } catch (e) {}
                      if ("get" in i || "set" in i)
                          throw TypeError("Accessors not supported");
                      return "value" in i && (e[n] = i.value), e;
                  };
        },
        function (e, n, i) {
            var t = i(4);
            e.exports = !t(function () {
                return (
                    7 !=
                    Object.defineProperty({}, "a", {
                        get: function () {
                            return 7;
                        },
                    }).a
                );
            });
        },
        function (e, n) {
            e.exports = {};
        },
        function (e, n) {
            e.exports = function (e, n) {
                return {
                    enumerable: !(1 & e),
                    configurable: !(2 & e),
                    writable: !(4 & e),
                    value: n,
                };
            };
        },
        function (e, n, i) {
            var t = i(0),
                l = i(19),
                r = i(17),
                o = t["__core-js_shared__"] || l("__core-js_shared__", {});
            (e.exports = function (e, n) {
                return o[e] || (o[e] = void 0 !== n ? n : {});
            })("versions", []).push({
                version: "3.1.3",
                mode: r ? "pure" : "global",
                copyright: "© 2019 Denis Pushkarev (zloirock.ru)",
            });
        },
        function (e, n, i) {
            "use strict";
            Object.defineProperty(n, "__esModule", { value: !0 });
            var t = o(i(43)),
                l = o(i(41)),
                r = o(i(40));
            function o(e) {
                return e && e.__esModule ? e : { default: e };
            }
            n.default = Object.keys(l.default)
                .map(function (e) {
                    return new t.default(e, l.default[e], r.default[e]);
                })
                .reduce(function (e, n) {
                    return (e[n.name] = n), e;
                }, {});
        },
        function (e, n) {
            e.exports = [
                "constructor",
                "hasOwnProperty",
                "isPrototypeOf",
                "propertyIsEnumerable",
                "toLocaleString",
                "toString",
                "valueOf",
            ];
        },
        function (e, n, i) {
            var t = i(72),
                l = i(20);
            e.exports = function (e) {
                return t(l(e));
            };
        },
        function (e, n) {
            e.exports = {};
        },
        function (e, n, i) {
            var t = i(11),
                l = i(33),
                r = t("keys");
            e.exports = function (e) {
                return r[e] || (r[e] = l(e));
            };
        },
        function (e, n) {
            e.exports = !1;
        },
        function (e, n, i) {
            var t = i(6);
            e.exports = function (e, n) {
                if (!t(e)) return e;
                var i, l;
                if (
                    n &&
                    "function" == typeof (i = e.toString) &&
                    !t((l = i.call(e)))
                )
                    return l;
                if ("function" == typeof (i = e.valueOf) && !t((l = i.call(e))))
                    return l;
                if (
                    !n &&
                    "function" == typeof (i = e.toString) &&
                    !t((l = i.call(e)))
                )
                    return l;
                throw TypeError("Can't convert object to primitive value");
            };
        },
        function (e, n, i) {
            var t = i(0),
                l = i(5);
            e.exports = function (e, n) {
                try {
                    l(t, e, n);
                } catch (i) {
                    t[e] = n;
                }
                return n;
            };
        },
        function (e, n) {
            e.exports = function (e) {
                if (void 0 == e) throw TypeError("Can't call method on " + e);
                return e;
            };
        },
        function (e, n) {
            var i = Math.ceil,
                t = Math.floor;
            e.exports = function (e) {
                return isNaN((e = +e)) ? 0 : (e > 0 ? t : i)(e);
            };
        },
        function (e, n, i) {
            var t;
            /*!
  Copyright (c) 2016 Jed Watson.
  Licensed under the MIT License (MIT), see
  http://jedwatson.github.io/classnames
*/
            /*!
  Copyright (c) 2016 Jed Watson.
  Licensed under the MIT License (MIT), see
  http://jedwatson.github.io/classnames
*/
            !(function () {
                "use strict";
                var i = (function () {
                    function e() {}
                    function n(e, n) {
                        for (var i = n.length, t = 0; t < i; ++t) l(e, n[t]);
                    }
                    e.prototype = Object.create(null);
                    var i = {}.hasOwnProperty;
                    var t = /\s+/;
                    function l(e, l) {
                        if (l) {
                            var r = typeof l;
                            "string" === r
                                ? (function (e, n) {
                                      for (
                                          var i = n.split(t),
                                              l = i.length,
                                              r = 0;
                                          r < l;
                                          ++r
                                      )
                                          e[i[r]] = !0;
                                  })(e, l)
                                : Array.isArray(l)
                                ? n(e, l)
                                : "object" === r
                                ? (function (e, n) {
                                      for (var t in n)
                                          i.call(n, t) && (e[t] = !!n[t]);
                                  })(e, l)
                                : "number" === r &&
                                  (function (e, n) {
                                      e[n] = !0;
                                  })(e, l);
                        }
                    }
                    return function () {
                        for (
                            var i = arguments.length, t = Array(i), l = 0;
                            l < i;
                            l++
                        )
                            t[l] = arguments[l];
                        var r = new e();
                        n(r, t);
                        var o = [];
                        for (var a in r) r[a] && o.push(a);
                        return o.join(" ");
                    };
                })();
                void 0 !== e && e.exports
                    ? (e.exports = i)
                    : void 0 ===
                          (t = function () {
                              return i;
                          }.apply(n, [])) || (e.exports = t);
            })();
        },
        function (e, n, i) {
            var t = i(7).f,
                l = i(1),
                r = i(2)("toStringTag");
            e.exports = function (e, n, i) {
                e &&
                    !l((e = i ? e : e.prototype), r) &&
                    t(e, r, { configurable: !0, value: n });
            };
        },
        function (e, n, i) {
            var t = i(20);
            e.exports = function (e) {
                return Object(t(e));
            };
        },
        function (e, n, i) {
            var t = i(1),
                l = i(24),
                r = i(16),
                o = i(63),
                a = r("IE_PROTO"),
                c = Object.prototype;
            e.exports = o
                ? Object.getPrototypeOf
                : function (e) {
                      return (
                          (e = l(e)),
                          t(e, a)
                              ? e[a]
                              : "function" == typeof e.constructor &&
                                e instanceof e.constructor
                              ? e.constructor.prototype
                              : e instanceof Object
                              ? c
                              : null
                      );
                  };
        },
        function (e, n, i) {
            "use strict";
            var t,
                l,
                r,
                o = i(25),
                a = i(5),
                c = i(1),
                p = i(2),
                y = i(17),
                h = p("iterator"),
                x = !1;
            [].keys &&
                ("next" in (r = [].keys())
                    ? (l = o(o(r))) !== Object.prototype && (t = l)
                    : (x = !0)),
                void 0 == t && (t = {}),
                y ||
                    c(t, h) ||
                    a(t, h, function () {
                        return this;
                    }),
                (e.exports = {
                    IteratorPrototype: t,
                    BUGGY_SAFARI_ITERATORS: x,
                });
        },
        function (e, n, i) {
            var t = i(21),
                l = Math.min;
            e.exports = function (e) {
                return e > 0 ? l(t(e), 9007199254740991) : 0;
            };
        },
        function (e, n, i) {
            var t = i(1),
                l = i(14),
                r = i(68),
                o = i(15),
                a = r(!1);
            e.exports = function (e, n) {
                var i,
                    r = l(e),
                    c = 0,
                    p = [];
                for (i in r) !t(o, i) && t(r, i) && p.push(i);
                for (; n.length > c; )
                    t(r, (i = n[c++])) && (~a(p, i) || p.push(i));
                return p;
            };
        },
        function (e, n, i) {
            var t = i(0),
                l = i(11),
                r = i(5),
                o = i(1),
                a = i(19),
                c = i(36),
                p = i(37),
                y = p.get,
                h = p.enforce,
                x = String(c).split("toString");
            l("inspectSource", function (e) {
                return c.call(e);
            }),
                (e.exports = function (e, n, i, l) {
                    var c = !!l && !!l.unsafe,
                        p = !!l && !!l.enumerable,
                        y = !!l && !!l.noTargetGet;
                    "function" == typeof i &&
                        ("string" != typeof n ||
                            o(i, "name") ||
                            r(i, "name", n),
                        (h(i).source = x.join("string" == typeof n ? n : ""))),
                        e !== t
                            ? (c ? !y && e[n] && (p = !0) : delete e[n],
                              p ? (e[n] = i) : r(e, n, i))
                            : p
                            ? (e[n] = i)
                            : a(n, i);
                })(Function.prototype, "toString", function () {
                    return (
                        ("function" == typeof this && y(this).source) ||
                        c.call(this)
                    );
                });
        },
        function (e, n) {
            var i = {}.toString;
            e.exports = function (e) {
                return i.call(e).slice(8, -1);
            };
        },
        function (e, n, i) {
            var t = i(8),
                l = i(73),
                r = i(10),
                o = i(14),
                a = i(18),
                c = i(1),
                p = i(35),
                y = Object.getOwnPropertyDescriptor;
            n.f = t
                ? y
                : function (e, n) {
                      if (((e = o(e)), (n = a(n, !0)), p))
                          try {
                              return y(e, n);
                          } catch (e) {}
                      if (c(e, n)) return r(!l.f.call(e, n), e[n]);
                  };
        },
        function (e, n, i) {
            var t = i(0),
                l = i(31).f,
                r = i(5),
                o = i(29),
                a = i(19),
                c = i(71),
                p = i(65);
            e.exports = function (e, n) {
                var i,
                    y,
                    h,
                    x,
                    s,
                    u = e.target,
                    d = e.global,
                    f = e.stat;
                if ((i = d ? t : f ? t[u] || a(u, {}) : (t[u] || {}).prototype))
                    for (y in n) {
                        if (
                            ((x = n[y]),
                            (h = e.noTargetGet
                                ? (s = l(i, y)) && s.value
                                : i[y]),
                            !p(d ? y : u + (f ? "." : "#") + y, e.forced) &&
                                void 0 !== h)
                        ) {
                            if (typeof x == typeof h) continue;
                            c(x, h);
                        }
                        (e.sham || (h && h.sham)) && r(x, "sham", !0),
                            o(i, y, x, e);
                    }
            };
        },
        function (e, n) {
            var i = 0,
                t = Math.random();
            e.exports = function (e) {
                return "Symbol(".concat(
                    void 0 === e ? "" : e,
                    ")_",
                    (++i + t).toString(36)
                );
            };
        },
        function (e, n, i) {
            var t = i(0),
                l = i(6),
                r = t.document,
                o = l(r) && l(r.createElement);
            e.exports = function (e) {
                return o ? r.createElement(e) : {};
            };
        },
        function (e, n, i) {
            var t = i(8),
                l = i(4),
                r = i(34);
            e.exports =
                !t &&
                !l(function () {
                    return (
                        7 !=
                        Object.defineProperty(r("div"), "a", {
                            get: function () {
                                return 7;
                            },
                        }).a
                    );
                });
        },
        function (e, n, i) {
            var t = i(11);
            e.exports = t("native-function-to-string", Function.toString);
        },
        function (e, n, i) {
            var t,
                l,
                r,
                o = i(76),
                a = i(0),
                c = i(6),
                p = i(5),
                y = i(1),
                h = i(16),
                x = i(15),
                s = a.WeakMap;
            if (o) {
                var u = new s(),
                    d = u.get,
                    f = u.has,
                    v = u.set;
                (t = function (e, n) {
                    return v.call(u, e, n), n;
                }),
                    (l = function (e) {
                        return d.call(u, e) || {};
                    }),
                    (r = function (e) {
                        return f.call(u, e);
                    });
            } else {
                var g = h("state");
                (x[g] = !0),
                    (t = function (e, n) {
                        return p(e, g, n), n;
                    }),
                    (l = function (e) {
                        return y(e, g) ? e[g] : {};
                    }),
                    (r = function (e) {
                        return y(e, g);
                    });
            }
            e.exports = {
                set: t,
                get: l,
                has: r,
                enforce: function (e) {
                    return r(e) ? l(e) : t(e, {});
                },
                getterFor: function (e) {
                    return function (n) {
                        var i;
                        if (!c(n) || (i = l(n)).type !== e)
                            throw TypeError(
                                "Incompatible receiver, " + e + " required"
                            );
                        return i;
                    };
                },
            };
        },
        function (e, n, i) {
            "use strict";
            Object.defineProperty(n, "__esModule", { value: !0 });
            var t =
                    Object.assign ||
                    function (e) {
                        for (var n = 1; n < arguments.length; n++) {
                            var i = arguments[n];
                            for (var t in i)
                                Object.prototype.hasOwnProperty.call(i, t) &&
                                    (e[t] = i[t]);
                        }
                        return e;
                    },
                l = o(i(22)),
                r = o(i(12));
            function o(e) {
                return e && e.__esModule ? e : { default: e };
            }
            n.default = function () {
                var e =
                    arguments.length > 0 && void 0 !== arguments[0]
                        ? arguments[0]
                        : {};
                if ("undefined" == typeof document)
                    throw new Error(
                        "`feather.replace()` only works in a browser environment."
                    );
                var n = document.querySelectorAll("[data-feather]");
                Array.from(n).forEach(function (n) {
                    return (function (e) {
                        var n =
                                arguments.length > 1 && void 0 !== arguments[1]
                                    ? arguments[1]
                                    : {},
                            i = (function (e) {
                                return Array.from(e.attributes).reduce(
                                    function (e, n) {
                                        return (e[n.name] = n.value), e;
                                    },
                                    {}
                                );
                            })(e),
                            o = i["data-feather"];
                        delete i["data-feather"];
                        var a = r.default[o].toSvg(
                                t({}, n, i, {
                                    class: (0, l.default)(n.class, i.class),
                                })
                            ),
                            c = new DOMParser()
                                .parseFromString(a, "image/svg+xml")
                                .querySelector("svg");
                        e.parentNode.replaceChild(c, e);
                    })(n, e);
                });
            };
        },
        function (e, n, i) {
            "use strict";
            Object.defineProperty(n, "__esModule", { value: !0 });
            var t,
                l = i(12),
                r = (t = l) && t.__esModule ? t : { default: t };
            n.default = function (e) {
                var n =
                    arguments.length > 1 && void 0 !== arguments[1]
                        ? arguments[1]
                        : {};
                if (
                    (console.warn(
                        "feather.toSvg() is deprecated. Please use feather.icons[name].toSvg() instead."
                    ),
                    !e)
                )
                    throw new Error(
                        "The required `key` (icon name) parameter is missing."
                    );
                if (!r.default[e])
                    throw new Error(
                        "No icon matching '" +
                            e +
                            "'. See the complete list of icons at https://feathericons.com"
                    );
                return r.default[e].toSvg(n);
            };
        },
        function (e) {
            e.exports = {
                activity: ["pulse", "health", "action", "motion"],
                airplay: ["stream", "cast", "mirroring"],
                "alert-circle": ["warning"],
                "alert-octagon": ["warning"],
                "alert-triangle": ["warning"],
                "at-sign": ["mention"],
                award: ["achievement", "badge"],
                aperture: ["camera", "photo"],
                bell: ["alarm", "notification"],
                "bell-off": ["alarm", "notification", "silent"],
                bluetooth: ["wireless"],
                "book-open": ["read"],
                book: ["read", "dictionary", "booklet", "magazine"],
                bookmark: ["read", "clip", "marker", "tag"],
                briefcase: ["work", "bag", "baggage", "folder"],
                clipboard: ["copy"],
                clock: ["time", "watch", "alarm"],
                "cloud-drizzle": ["weather", "shower"],
                "cloud-lightning": ["weather", "bolt"],
                "cloud-rain": ["weather"],
                "cloud-snow": ["weather", "blizzard"],
                cloud: ["weather"],
                codepen: ["logo"],
                codesandbox: ["logo"],
                coffee: [
                    "drink",
                    "cup",
                    "mug",
                    "tea",
                    "cafe",
                    "hot",
                    "beverage",
                ],
                command: ["keyboard", "cmd"],
                compass: ["navigation", "safari", "travel"],
                copy: ["clone", "duplicate"],
                "corner-down-left": ["arrow"],
                "corner-down-right": ["arrow"],
                "corner-left-down": ["arrow"],
                "corner-left-up": ["arrow"],
                "corner-right-down": ["arrow"],
                "corner-right-up": ["arrow"],
                "corner-up-left": ["arrow"],
                "corner-up-right": ["arrow"],
                "credit-card": ["purchase", "payment", "cc"],
                crop: ["photo", "image"],
                crosshair: ["aim", "target"],
                database: ["storage"],
                delete: ["remove"],
                disc: ["album", "cd", "dvd", "music"],
                "dollar-sign": ["currency", "money", "payment"],
                droplet: ["water"],
                edit: ["pencil", "change"],
                "edit-2": ["pencil", "change"],
                "edit-3": ["pencil", "change"],
                eye: ["view", "watch"],
                "eye-off": ["view", "watch"],
                "external-link": ["outbound"],
                facebook: ["logo"],
                "fast-forward": ["music"],
                figma: ["logo", "design", "tool"],
                film: ["movie", "video"],
                "folder-minus": ["directory"],
                "folder-plus": ["directory"],
                folder: ["directory"],
                framer: ["logo", "design", "tool"],
                frown: ["emoji", "face", "bad", "sad", "emotion"],
                gift: ["present", "box", "birthday", "party"],
                "git-branch": ["code", "version control"],
                "git-commit": ["code", "version control"],
                "git-merge": ["code", "version control"],
                "git-pull-request": ["code", "version control"],
                github: ["logo", "version control"],
                gitlab: ["logo", "version control"],
                global: ["world", "browser", "language", "translate"],
                "hard-drive": ["computer", "server"],
                hash: ["hashtag", "number", "pound"],
                headphones: ["music", "audio"],
                heart: ["like", "love"],
                "help-circle": ["question mark"],
                hexagon: ["shape", "node.js", "logo"],
                home: ["house"],
                image: ["picture"],
                inbox: ["email"],
                instagram: ["logo", "camera"],
                key: ["password", "login", "authentication"],
                "life-bouy": ["help", "life ring", "support"],
                linkedin: ["logo"],
                lock: ["security", "password"],
                "log-in": ["sign in", "arrow"],
                "log-out": ["sign out", "arrow"],
                mail: ["email"],
                "map-pin": ["location", "navigation", "travel", "marker"],
                map: ["location", "navigation", "travel"],
                maximize: ["fullscreen"],
                "maximize-2": ["fullscreen", "arrows"],
                meh: ["emoji", "face", "neutral", "emotion"],
                menu: ["bars", "navigation", "hamburger"],
                "message-circle": ["comment", "chat"],
                "message-square": ["comment", "chat"],
                "mic-off": ["record"],
                mic: ["record"],
                minimize: ["exit fullscreen"],
                "minimize-2": ["exit fullscreen", "arrows"],
                monitor: ["tv"],
                moon: ["dark", "night"],
                "more-horizontal": ["ellipsis"],
                "more-vertical": ["ellipsis"],
                "mouse-pointer": ["arrow", "cursor"],
                move: ["arrows"],
                navigation: ["location", "travel"],
                "navigation-2": ["location", "travel"],
                octagon: ["stop"],
                package: ["box"],
                paperclip: ["attachment"],
                pause: ["music", "stop"],
                "pause-circle": ["music", "stop"],
                "pen-tool": ["vector", "drawing"],
                play: ["music", "start"],
                "play-circle": ["music", "start"],
                plus: ["add", "new"],
                "plus-circle": ["add", "new"],
                "plus-square": ["add", "new"],
                pocket: ["logo", "save"],
                power: ["on", "off"],
                radio: ["signal"],
                rewind: ["music"],
                rss: ["feed", "subscribe"],
                save: ["floppy disk"],
                search: ["find", "magnifier", "magnifying glass"],
                send: ["message", "mail", "paper airplane"],
                settings: ["cog", "edit", "gear", "preferences"],
                shield: ["security"],
                "shield-off": ["security"],
                "shopping-bag": ["ecommerce", "cart", "purchase", "store"],
                "shopping-cart": ["ecommerce", "cart", "purchase", "store"],
                shuffle: ["music"],
                "skip-back": ["music"],
                "skip-forward": ["music"],
                slash: ["ban", "no"],
                sliders: ["settings", "controls"],
                smile: ["emoji", "face", "happy", "good", "emotion"],
                speaker: ["music"],
                star: ["bookmark", "favorite", "like"],
                sun: ["brightness", "weather", "light"],
                sunrise: ["weather"],
                sunset: ["weather"],
                tag: ["label"],
                target: ["bullseye"],
                terminal: ["code", "command line"],
                "thumbs-down": ["dislike", "bad"],
                "thumbs-up": ["like", "good"],
                "toggle-left": ["on", "off", "switch"],
                "toggle-right": ["on", "off", "switch"],
                trash: ["garbage", "delete", "remove"],
                "trash-2": ["garbage", "delete", "remove"],
                triangle: ["delta"],
                truck: ["delivery", "van", "shipping"],
                twitter: ["logo"],
                umbrella: ["rain", "weather"],
                "video-off": ["camera", "movie", "film"],
                video: ["camera", "movie", "film"],
                voicemail: ["phone"],
                volume: ["music", "sound", "mute"],
                "volume-1": ["music", "sound"],
                "volume-2": ["music", "sound"],
                "volume-x": ["music", "sound", "mute"],
                watch: ["clock", "time"],
                wind: ["weather", "air"],
                "x-circle": ["cancel", "close", "delete", "remove", "times"],
                "x-octagon": ["delete", "stop", "alert", "warning", "times"],
                "x-square": ["cancel", "close", "delete", "remove", "times"],
                x: ["cancel", "close", "delete", "remove", "times"],
                youtube: ["logo", "video", "play"],
                "zap-off": ["flash", "camera", "lightning"],
                zap: ["flash", "camera", "lightning"],
            };
        },
        function (e) {
            e.exports = {
                activity:
                    '<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>',
                airplay:
                    '<path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon>',
                "alert-circle":
                    '<circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line>',
                "alert-octagon":
                    '<polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line>',
                "alert-triangle":
                    '<path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line>',
                "align-center":
                    '<line x1="18" y1="10" x2="6" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="18" y1="18" x2="6" y2="18"></line>',
                "align-justify":
                    '<line x1="21" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="3" y2="18"></line>',
                "align-left":
                    '<line x1="17" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="17" y1="18" x2="3" y2="18"></line>',
                "align-right":
                    '<line x1="21" y1="10" x2="7" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="7" y2="18"></line>',
                anchor: '<circle cx="12" cy="5" r="3"></circle><line x1="12" y1="22" x2="12" y2="8"></line><path d="M5 12H2a10 10 0 0 0 20 0h-3"></path>',
                aperture:
                    '<circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>',
                archive:
                    '<polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line>',
                "arrow-down-circle":
                    '<circle cx="12" cy="12" r="10"></circle><polyline points="8 12 12 16 16 12"></polyline><line x1="12" y1="8" x2="12" y2="16"></line>',
                "arrow-down-left":
                    '<line x1="17" y1="7" x2="7" y2="17"></line><polyline points="17 17 7 17 7 7"></polyline>',
                "arrow-down-right":
                    '<line x1="7" y1="7" x2="17" y2="17"></line><polyline points="17 7 17 17 7 17"></polyline>',
                "arrow-down":
                    '<line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline>',
                "arrow-left-circle":
                    '<circle cx="12" cy="12" r="10"></circle><polyline points="12 8 8 12 12 16"></polyline><line x1="16" y1="12" x2="8" y2="12"></line>',
                "arrow-left":
                    '<line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline>',
                "arrow-right-circle":
                    '<circle cx="12" cy="12" r="10"></circle><polyline points="12 16 16 12 12 8"></polyline><line x1="8" y1="12" x2="16" y2="12"></line>',
                "arrow-right":
                    '<line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline>',
                "arrow-up-circle":
                    '<circle cx="12" cy="12" r="10"></circle><polyline points="16 12 12 8 8 12"></polyline><line x1="12" y1="16" x2="12" y2="8"></line>',
                "arrow-up-left":
                    '<line x1="17" y1="17" x2="7" y2="7"></line><polyline points="7 17 7 7 17 7"></polyline>',
                "arrow-up-right":
                    '<line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline>',
                "arrow-up":
                    '<line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline>',
                "at-sign":
                    '<circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>',
                award: '<circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>',
                "bar-chart-2":
                    '<line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line>',
                "bar-chart":
                    '<line x1="12" y1="20" x2="12" y2="10"></line><line x1="18" y1="20" x2="18" y2="4"></line><line x1="6" y1="20" x2="6" y2="16"></line>',
                "battery-charging":
                    '<path d="M5 18H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h3.19M15 6h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-3.19"></path><line x1="23" y1="13" x2="23" y2="11"></line><polyline points="11 6 7 12 13 12 9 18"></polyline>',
                battery:
                    '<rect x="1" y="6" width="18" height="12" rx="2" ry="2"></rect><line x1="23" y1="13" x2="23" y2="11"></line>',
                "bell-off":
                    '<path d="M13.73 21a2 2 0 0 1-3.46 0"></path><path d="M18.63 13A17.89 17.89 0 0 1 18 8"></path><path d="M6.26 6.26A5.86 5.86 0 0 0 6 8c0 7-3 9-3 9h14"></path><path d="M18 8a6 6 0 0 0-9.33-5"></path><line x1="1" y1="1" x2="23" y2="23"></line>',
                bell: '<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path>',
                bluetooth:
                    '<polyline points="6.5 6.5 17.5 17.5 12 23 12 1 17.5 6.5 6.5 17.5"></polyline>',
                bold: '<path d="M6 4h8a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"></path><path d="M6 12h9a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"></path>',
                "book-open":
                    '<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>',
                book: '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>',
                bookmark:
                    '<path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>',
                box: '<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>',
                briefcase:
                    '<rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>',
                calendar:
                    '<rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line>',
                "camera-off":
                    '<line x1="1" y1="1" x2="23" y2="23"></line><path d="M21 21H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h3m3-3h6l2 3h4a2 2 0 0 1 2 2v9.34m-7.72-2.06a4 4 0 1 1-5.56-5.56"></path>',
                camera: '<path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle>',
                cast: '<path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2.01" y2="20"></line>',
                "check-circle":
                    '<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline>',
                "check-square":
                    '<polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>',
                check: '<polyline points="20 6 9 17 4 12"></polyline>',
                "chevron-down": '<polyline points="6 9 12 15 18 9"></polyline>',
                "chevron-left":
                    '<polyline points="15 18 9 12 15 6"></polyline>',
                "chevron-right":
                    '<polyline points="9 18 15 12 9 6"></polyline>',
                "chevron-up": '<polyline points="18 15 12 9 6 15"></polyline>',
                "chevrons-down":
                    '<polyline points="7 13 12 18 17 13"></polyline><polyline points="7 6 12 11 17 6"></polyline>',
                "chevrons-left":
                    '<polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline>',
                "chevrons-right":
                    '<polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline>',
                "chevrons-up":
                    '<polyline points="17 11 12 6 7 11"></polyline><polyline points="17 18 12 13 7 18"></polyline>',
                chrome: '<circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="21.17" y1="8" x2="12" y2="8"></line><line x1="3.95" y1="6.06" x2="8.54" y2="14"></line><line x1="10.88" y1="21.94" x2="15.46" y2="14"></line>',
                circle: '<circle cx="12" cy="12" r="10"></circle>',
                clipboard:
                    '<path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>',
                clock: '<circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>',
                "cloud-drizzle":
                    '<line x1="8" y1="19" x2="8" y2="21"></line><line x1="8" y1="13" x2="8" y2="15"></line><line x1="16" y1="19" x2="16" y2="21"></line><line x1="16" y1="13" x2="16" y2="15"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="12" y1="15" x2="12" y2="17"></line><path d="M20 16.58A5 5 0 0 0 18 7h-1.26A8 8 0 1 0 4 15.25"></path>',
                "cloud-lightning":
                    '<path d="M19 16.9A5 5 0 0 0 18 7h-1.26a8 8 0 1 0-11.62 9"></path><polyline points="13 11 9 17 15 17 11 23"></polyline>',
                "cloud-off":
                    '<path d="M22.61 16.95A5 5 0 0 0 18 10h-1.26a8 8 0 0 0-7.05-6M5 5a8 8 0 0 0 4 15h9a5 5 0 0 0 1.7-.3"></path><line x1="1" y1="1" x2="23" y2="23"></line>',
                "cloud-rain":
                    '<line x1="16" y1="13" x2="16" y2="21"></line><line x1="8" y1="13" x2="8" y2="21"></line><line x1="12" y1="15" x2="12" y2="23"></line><path d="M20 16.58A5 5 0 0 0 18 7h-1.26A8 8 0 1 0 4 15.25"></path>',
                "cloud-snow":
                    '<path d="M20 17.58A5 5 0 0 0 18 8h-1.26A8 8 0 1 0 4 16.25"></path><line x1="8" y1="16" x2="8.01" y2="16"></line><line x1="8" y1="20" x2="8.01" y2="20"></line><line x1="12" y1="18" x2="12.01" y2="18"></line><line x1="12" y1="22" x2="12.01" y2="22"></line><line x1="16" y1="16" x2="16.01" y2="16"></line><line x1="16" y1="20" x2="16.01" y2="20"></line>',
                cloud: '<path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path>',
                code: '<polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline>',
                codepen:
                    '<polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"></polygon><line x1="12" y1="22" x2="12" y2="15.5"></line><polyline points="22 8.5 12 15.5 2 8.5"></polyline><polyline points="2 15.5 12 8.5 22 15.5"></polyline><line x1="12" y1="2" x2="12" y2="8.5"></line>',
                codesandbox:
                    '<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline><polyline points="7.5 19.79 7.5 14.6 3 12"></polyline><polyline points="21 12 16.5 14.6 16.5 19.79"></polyline><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>',
                coffee: '<path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line>',
                columns:
                    '<path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path>',
                command:
                    '<path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path>',
                compass:
                    '<circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>',
                copy: '<rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>',
                "corner-down-left":
                    '<polyline points="9 10 4 15 9 20"></polyline><path d="M20 4v7a4 4 0 0 1-4 4H4"></path>',
                "corner-down-right":
                    '<polyline points="15 10 20 15 15 20"></polyline><path d="M4 4v7a4 4 0 0 0 4 4h12"></path>',
                "corner-left-down":
                    '<polyline points="14 15 9 20 4 15"></polyline><path d="M20 4h-7a4 4 0 0 0-4 4v12"></path>',
                "corner-left-up":
                    '<polyline points="14 9 9 4 4 9"></polyline><path d="M20 20h-7a4 4 0 0 1-4-4V4"></path>',
                "corner-right-down":
                    '<polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>',
                "corner-right-up":
                    '<polyline points="10 9 15 4 20 9"></polyline><path d="M4 20h7a4 4 0 0 0 4-4V4"></path>',
                "corner-up-left":
                    '<polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path>',
                "corner-up-right":
                    '<polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>',
                cpu: '<rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line>',
                "credit-card":
                    '<rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line>',
                crop: '<path d="M6.13 1L6 16a2 2 0 0 0 2 2h15"></path><path d="M1 6.13L16 6a2 2 0 0 1 2 2v15"></path>',
                crosshair:
                    '<circle cx="12" cy="12" r="10"></circle><line x1="22" y1="12" x2="18" y2="12"></line><line x1="6" y1="12" x2="2" y2="12"></line><line x1="12" y1="6" x2="12" y2="2"></line><line x1="12" y1="22" x2="12" y2="18"></line>',
                database:
                    '<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>',
                delete: '<path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path><line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line>',
                disc: '<circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle>',
                "dollar-sign":
                    '<line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>',
                "download-cloud":
                    '<polyline points="8 17 12 21 16 17"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path>',
                download:
                    '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line>',
                droplet:
                    '<path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>',
                "edit-2":
                    '<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>',
                "edit-3":
                    '<path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>',
                edit: '<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>',
                "external-link":
                    '<path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line>',
                "eye-off":
                    '<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line>',
                eye: '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>',
                facebook:
                    '<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>',
                "fast-forward":
                    '<polygon points="13 19 22 12 13 5 13 19"></polygon><polygon points="2 19 11 12 2 5 2 19"></polygon>',
                feather:
                    '<path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path><line x1="16" y1="8" x2="2" y2="22"></line><line x1="17.5" y1="15" x2="9" y2="15"></line>',
                figma: '<path d="M5 5.5A3.5 3.5 0 0 1 8.5 2H12v7H8.5A3.5 3.5 0 0 1 5 5.5z"></path><path d="M12 2h3.5a3.5 3.5 0 1 1 0 7H12V2z"></path><path d="M12 12.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 1 1-7 0z"></path><path d="M5 19.5A3.5 3.5 0 0 1 8.5 16H12v3.5a3.5 3.5 0 1 1-7 0z"></path><path d="M5 12.5A3.5 3.5 0 0 1 8.5 9H12v7H8.5A3.5 3.5 0 0 1 5 12.5z"></path>',
                "file-minus":
                    '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="9" y1="15" x2="15" y2="15"></line>',
                "file-plus":
                    '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line>',
                "file-text":
                    '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>',
                file: '<path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline>',
                film: '<rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17" x2="7" y2="17"></line><line x1="17" y1="17" x2="22" y2="17"></line><line x1="17" y1="7" x2="22" y2="7"></line>',
                filter: '<polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>',
                flag: '<path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line>',
                "folder-minus":
                    '<path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path><line x1="9" y1="14" x2="15" y2="14"></line>',
                "folder-plus":
                    '<path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path><line x1="12" y1="11" x2="12" y2="17"></line><line x1="9" y1="14" x2="15" y2="14"></line>',
                folder: '<path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>',
                framer: '<path d="M5 16V9h14V2H5l14 14h-7m-7 0l7 7v-7m-7 0h7"></path>',
                frown: '<circle cx="12" cy="12" r="10"></circle><path d="M16 16s-1.5-2-4-2-4 2-4 2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line>',
                gift: '<polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>',
                "git-branch":
                    '<line x1="6" y1="3" x2="6" y2="15"></line><circle cx="18" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><path d="M18 9a9 9 0 0 1-9 9"></path>',
                "git-commit":
                    '<circle cx="12" cy="12" r="4"></circle><line x1="1.05" y1="12" x2="7" y2="12"></line><line x1="17.01" y1="12" x2="22.96" y2="12"></line>',
                "git-merge":
                    '<circle cx="18" cy="18" r="3"></circle><circle cx="6" cy="6" r="3"></circle><path d="M6 21V9a9 9 0 0 0 9 9"></path>',
                "git-pull-request":
                    '<circle cx="18" cy="18" r="3"></circle><circle cx="6" cy="6" r="3"></circle><path d="M13 6h3a2 2 0 0 1 2 2v7"></path><line x1="6" y1="9" x2="6" y2="21"></line>',
                github: '<path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>',
                gitlab: '<path d="M22.65 14.39L12 22.13 1.35 14.39a.84.84 0 0 1-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 0 1 4.82 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0 1 18.6 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.51L23 13.45a.84.84 0 0 1-.35.94z"></path>',
                globe: '<circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>',
                grid: '<rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>',
                "hard-drive":
                    '<line x1="22" y1="12" x2="2" y2="12"></line><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path><line x1="6" y1="16" x2="6.01" y2="16"></line><line x1="10" y1="16" x2="10.01" y2="16"></line>',
                hash: '<line x1="4" y1="9" x2="20" y2="9"></line><line x1="4" y1="15" x2="20" y2="15"></line><line x1="10" y1="3" x2="8" y2="21"></line><line x1="16" y1="3" x2="14" y2="21"></line>',
                headphones:
                    '<path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>',
                heart: '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>',
                "help-circle":
                    '<circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line>',
                hexagon:
                    '<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>',
                home: '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>',
                image: '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline>',
                inbox: '<polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>',
                info: '<circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line>',
                instagram:
                    '<rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>',
                italic: '<line x1="19" y1="4" x2="10" y2="4"></line><line x1="14" y1="20" x2="5" y2="20"></line><line x1="15" y1="4" x2="9" y2="20"></line>',
                key: '<path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path>',
                layers: '<polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline>',
                layout: '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line>',
                "life-buoy":
                    '<circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line><line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line><line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line><line x1="14.83" y1="9.17" x2="18.36" y2="5.64"></line><line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line>',
                "link-2":
                    '<path d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3"></path><line x1="8" y1="12" x2="16" y2="12"></line>',
                link: '<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>',
                linkedin:
                    '<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle>',
                list: '<line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line>',
                loader: '<line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>',
                lock: '<rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path>',
                "log-in":
                    '<path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line>',
                "log-out":
                    '<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line>',
                mail: '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline>',
                "map-pin":
                    '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle>',
                map: '<polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line>',
                "maximize-2":
                    '<polyline points="15 3 21 3 21 9"></polyline><polyline points="9 21 3 21 3 15"></polyline><line x1="21" y1="3" x2="14" y2="10"></line><line x1="3" y1="21" x2="10" y2="14"></line>',
                maximize:
                    '<path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>',
                meh: '<circle cx="12" cy="12" r="10"></circle><line x1="8" y1="15" x2="16" y2="15"></line><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line>',
                menu: '<line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line>',
                "message-circle":
                    '<path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>',
                "message-square":
                    '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>',
                "mic-off":
                    '<line x1="1" y1="1" x2="23" y2="23"></line><path d="M9 9v3a3 3 0 0 0 5.12 2.12M15 9.34V4a3 3 0 0 0-5.94-.6"></path><path d="M17 16.95A7 7 0 0 1 5 12v-2m14 0v2a7 7 0 0 1-.11 1.23"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line>',
                mic: '<path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line>',
                "minimize-2":
                    '<polyline points="4 14 10 14 10 20"></polyline><polyline points="20 10 14 10 14 4"></polyline><line x1="14" y1="10" x2="21" y2="3"></line><line x1="3" y1="21" x2="10" y2="14"></line>',
                minimize:
                    '<path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"></path>',
                "minus-circle":
                    '<circle cx="12" cy="12" r="10"></circle><line x1="8" y1="12" x2="16" y2="12"></line>',
                "minus-square":
                    '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="8" y1="12" x2="16" y2="12"></line>',
                minus: '<line x1="5" y1="12" x2="19" y2="12"></line>',
                monitor:
                    '<rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line>',
                moon: '<path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>',
                "more-horizontal":
                    '<circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle>',
                "more-vertical":
                    '<circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle>',
                "mouse-pointer":
                    '<path d="M3 3l7.07 16.97 2.51-7.39 7.39-2.51L3 3z"></path><path d="M13 13l6 6"></path>',
                move: '<polyline points="5 9 2 12 5 15"></polyline><polyline points="9 5 12 2 15 5"></polyline><polyline points="15 19 12 22 9 19"></polyline><polyline points="19 9 22 12 19 15"></polyline><line x1="2" y1="12" x2="22" y2="12"></line><line x1="12" y1="2" x2="12" y2="22"></line>',
                music: '<path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle>',
                "navigation-2":
                    '<polygon points="12 2 19 21 12 17 5 21 12 2"></polygon>',
                navigation:
                    '<polygon points="3 11 22 2 13 21 11 13 3 11"></polygon>',
                octagon:
                    '<polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>',
                package:
                    '<line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>',
                paperclip:
                    '<path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>',
                "pause-circle":
                    '<circle cx="12" cy="12" r="10"></circle><line x1="10" y1="15" x2="10" y2="9"></line><line x1="14" y1="15" x2="14" y2="9"></line>',
                pause: '<rect x="6" y="4" width="4" height="16"></rect><rect x="14" y="4" width="4" height="16"></rect>',
                "pen-tool":
                    '<path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle>',
                percent:
                    '<line x1="19" y1="5" x2="5" y2="19"></line><circle cx="6.5" cy="6.5" r="2.5"></circle><circle cx="17.5" cy="17.5" r="2.5"></circle>',
                "phone-call":
                    '<path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>',
                "phone-forwarded":
                    '<polyline points="19 1 23 5 19 9"></polyline><line x1="15" y1="5" x2="23" y2="5"></line><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>',
                "phone-incoming":
                    '<polyline points="16 2 16 8 22 8"></polyline><line x1="23" y1="1" x2="16" y2="8"></line><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>',
                "phone-missed":
                    '<line x1="23" y1="1" x2="17" y2="7"></line><line x1="17" y1="1" x2="23" y2="7"></line><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>',
                "phone-off":
                    '<path d="M10.68 13.31a16 16 0 0 0 3.41 2.6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7 2 2 0 0 1 1.72 2v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.42 19.42 0 0 1-3.33-2.67m-2.67-3.34a19.79 19.79 0 0 1-3.07-8.63A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91"></path><line x1="23" y1="1" x2="1" y2="23"></line>',
                "phone-outgoing":
                    '<polyline points="23 7 23 1 17 1"></polyline><line x1="16" y1="8" x2="23" y2="1"></line><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>',
                phone: '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>',
                "pie-chart":
                    '<path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path>',
                "play-circle":
                    '<circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon>',
                play: '<polygon points="5 3 19 12 5 21 5 3"></polygon>',
                "plus-circle":
                    '<circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line>',
                "plus-square":
                    '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line>',
                plus: '<line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line>',
                pocket: '<path d="M4 3h16a2 2 0 0 1 2 2v6a10 10 0 0 1-10 10A10 10 0 0 1 2 11V5a2 2 0 0 1 2-2z"></path><polyline points="8 10 12 14 16 10"></polyline>',
                power: '<path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line>',
                printer:
                    '<polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect>',
                radio: '<circle cx="12" cy="12" r="2"></circle><path d="M16.24 7.76a6 6 0 0 1 0 8.49m-8.48-.01a6 6 0 0 1 0-8.49m11.31-2.82a10 10 0 0 1 0 14.14m-14.14 0a10 10 0 0 1 0-14.14"></path>',
                "refresh-ccw":
                    '<polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path>',
                "refresh-cw":
                    '<polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>',
                repeat: '<polyline points="17 1 21 5 17 9"></polyline><path d="M3 11V9a4 4 0 0 1 4-4h14"></path><polyline points="7 23 3 19 7 15"></polyline><path d="M21 13v2a4 4 0 0 1-4 4H3"></path>',
                rewind: '<polygon points="11 19 2 12 11 5 11 19"></polygon><polygon points="22 19 13 12 22 5 22 19"></polygon>',
                "rotate-ccw":
                    '<polyline points="1 4 1 10 7 10"></polyline><path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>',
                "rotate-cw":
                    '<polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path>',
                rss: '<path d="M4 11a9 9 0 0 1 9 9"></path><path d="M4 4a16 16 0 0 1 16 16"></path><circle cx="5" cy="19" r="1"></circle>',
                save: '<path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline>',
                scissors:
                    '<circle cx="6" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><line x1="20" y1="4" x2="8.12" y2="15.88"></line><line x1="14.47" y1="14.48" x2="20" y2="20"></line><line x1="8.12" y1="8.12" x2="12" y2="12"></line>',
                search: '<circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line>',
                send: '<line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>',
                server: '<rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line>',
                settings:
                    '<circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>',
                "share-2":
                    '<circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>',
                share: '<path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line>',
                "shield-off":
                    '<path d="M19.69 14a6.9 6.9 0 0 0 .31-2V5l-8-3-3.16 1.18"></path><path d="M4.73 4.73L4 5v7c0 6 8 10 8 10a20.29 20.29 0 0 0 5.62-4.38"></path><line x1="1" y1="1" x2="23" y2="23"></line>',
                shield: '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>',
                "shopping-bag":
                    '<path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path>',
                "shopping-cart":
                    '<circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>',
                shuffle:
                    '<polyline points="16 3 21 3 21 8"></polyline><line x1="4" y1="20" x2="21" y2="3"></line><polyline points="21 16 21 21 16 21"></polyline><line x1="15" y1="15" x2="21" y2="21"></line><line x1="4" y1="4" x2="9" y2="9"></line>',
                sidebar:
                    '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line>',
                "skip-back":
                    '<polygon points="19 20 9 12 19 4 19 20"></polygon><line x1="5" y1="19" x2="5" y2="5"></line>',
                "skip-forward":
                    '<polygon points="5 4 15 12 5 20 5 4"></polygon><line x1="19" y1="5" x2="19" y2="19"></line>',
                slack: '<path d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z"></path><path d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"></path><path d="M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z"></path><path d="M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z"></path><path d="M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z"></path><path d="M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z"></path><path d="M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z"></path><path d="M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z"></path>',
                slash: '<circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>',
                sliders:
                    '<line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line>',
                smartphone:
                    '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line>',
                smile: '<circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line>',
                speaker:
                    '<rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><circle cx="12" cy="14" r="4"></circle><line x1="12" y1="6" x2="12.01" y2="6"></line>',
                square: '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>',
                star: '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>',
                "stop-circle":
                    '<circle cx="12" cy="12" r="10"></circle><rect x="9" y="9" width="6" height="6"></rect>',
                sun: '<circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>',
                sunrise:
                    '<path d="M17 18a5 5 0 0 0-10 0"></path><line x1="12" y1="2" x2="12" y2="9"></line><line x1="4.22" y1="10.22" x2="5.64" y2="11.64"></line><line x1="1" y1="18" x2="3" y2="18"></line><line x1="21" y1="18" x2="23" y2="18"></line><line x1="18.36" y1="11.64" x2="19.78" y2="10.22"></line><line x1="23" y1="22" x2="1" y2="22"></line><polyline points="8 6 12 2 16 6"></polyline>',
                sunset: '<path d="M17 18a5 5 0 0 0-10 0"></path><line x1="12" y1="9" x2="12" y2="2"></line><line x1="4.22" y1="10.22" x2="5.64" y2="11.64"></line><line x1="1" y1="18" x2="3" y2="18"></line><line x1="21" y1="18" x2="23" y2="18"></line><line x1="18.36" y1="11.64" x2="19.78" y2="10.22"></line><line x1="23" y1="22" x2="1" y2="22"></line><polyline points="16 5 12 9 8 5"></polyline>',
                tablet: '<rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line>',
                tag: '<path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line>',
                target: '<circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle>',
                terminal:
                    '<polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line>',
                thermometer:
                    '<path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"></path>',
                "thumbs-down":
                    '<path d="M10 15v4a3 3 0 0 0 3 3l4-9V2H5.72a2 2 0 0 0-2 1.7l-1.38 9a2 2 0 0 0 2 2.3zm7-13h2.67A2.31 2.31 0 0 1 22 4v7a2.31 2.31 0 0 1-2.33 2H17"></path>',
                "thumbs-up":
                    '<path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>',
                "toggle-left":
                    '<rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect><circle cx="8" cy="12" r="3"></circle>',
                "toggle-right":
                    '<rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect><circle cx="16" cy="12" r="3"></circle>',
                tool: '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>',
                "trash-2":
                    '<polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>',
                trash: '<polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>',
                trello: '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><rect x="7" y="7" width="3" height="9"></rect><rect x="14" y="7" width="3" height="5"></rect>',
                "trending-down":
                    '<polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline>',
                "trending-up":
                    '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline>',
                triangle:
                    '<path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>',
                truck: '<rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle>',
                tv: '<rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect><polyline points="17 2 12 7 7 2"></polyline>',
                twitch: '<path d="M21 2H3v16h5v4l4-4h5l4-4V2zm-10 9V7m5 4V7"></path>',
                twitter:
                    '<path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>',
                type: '<polyline points="4 7 4 4 20 4 20 7"></polyline><line x1="9" y1="20" x2="15" y2="20"></line><line x1="12" y1="4" x2="12" y2="20"></line>',
                umbrella:
                    '<path d="M23 12a11.05 11.05 0 0 0-22 0zm-5 7a3 3 0 0 1-6 0v-7"></path>',
                underline:
                    '<path d="M6 3v7a6 6 0 0 0 6 6 6 6 0 0 0 6-6V3"></path><line x1="4" y1="21" x2="20" y2="21"></line>',
                unlock: '<rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 9.9-1"></path>',
                "upload-cloud":
                    '<polyline points="16 16 12 12 8 16"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path><polyline points="16 16 12 12 8 16"></polyline>',
                upload: '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line>',
                "user-check":
                    '<path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline>',
                "user-minus":
                    '<path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="23" y1="11" x2="17" y2="11"></line>',
                "user-plus":
                    '<path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line>',
                "user-x":
                    '<path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="18" y1="8" x2="23" y2="13"></line><line x1="23" y1="8" x2="18" y2="13"></line>',
                user: '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>',
                users: '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>',
                "video-off":
                    '<path d="M16 16v1a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h2m5.66 0H14a2 2 0 0 1 2 2v3.34l1 1L23 7v10"></path><line x1="1" y1="1" x2="23" y2="23"></line>',
                video: '<polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>',
                voicemail:
                    '<circle cx="5.5" cy="11.5" r="4.5"></circle><circle cx="18.5" cy="11.5" r="4.5"></circle><line x1="5.5" y1="16" x2="18.5" y2="16"></line>',
                "volume-1":
                    '<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>',
                "volume-2":
                    '<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>',
                "volume-x":
                    '<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><line x1="23" y1="9" x2="17" y2="15"></line><line x1="17" y1="9" x2="23" y2="15"></line>',
                volume: '<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>',
                watch: '<circle cx="12" cy="12" r="7"></circle><polyline points="12 9 12 12 13.5 13.5"></polyline><path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83"></path>',
                "wifi-off":
                    '<line x1="1" y1="1" x2="23" y2="23"></line><path d="M16.72 11.06A10.94 10.94 0 0 1 19 12.55"></path><path d="M5 12.55a10.94 10.94 0 0 1 5.17-2.39"></path><path d="M10.71 5.05A16 16 0 0 1 22.58 9"></path><path d="M1.42 9a15.91 15.91 0 0 1 4.7-2.88"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line>',
                wifi: '<path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line>',
                wind: '<path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"></path>',
                "x-circle":
                    '<circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line>',
                "x-octagon":
                    '<polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line>',
                "x-square":
                    '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="9" x2="15" y2="15"></line><line x1="15" y1="9" x2="9" y2="15"></line>',
                x: '<line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line>',
                youtube:
                    '<path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>',
                "zap-off":
                    '<polyline points="12.41 6.75 13 2 10.57 4.92"></polyline><polyline points="18.57 12.91 21 10 15.66 10"></polyline><polyline points="8 8 3 14 12 14 11 22 16 16"></polyline><line x1="1" y1="1" x2="23" y2="23"></line>',
                zap: '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>',
                "zoom-in":
                    '<circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line>',
                "zoom-out":
                    '<circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="8" y1="11" x2="14" y2="11"></line>',
            };
        },
        function (e) {
            e.exports = {
                xmlns: "http://www.w3.org/2000/svg",
                width: 24,
                height: 24,
                viewBox: "0 0 24 24",
                fill: "none",
                stroke: "currentColor",
                "stroke-width": 2,
                "stroke-linecap": "round",
                "stroke-linejoin": "round",
            };
        },
        function (e, n, i) {
            "use strict";
            Object.defineProperty(n, "__esModule", { value: !0 });
            var t =
                    Object.assign ||
                    function (e) {
                        for (var n = 1; n < arguments.length; n++) {
                            var i = arguments[n];
                            for (var t in i)
                                Object.prototype.hasOwnProperty.call(i, t) &&
                                    (e[t] = i[t]);
                        }
                        return e;
                    },
                l = (function () {
                    function e(e, n) {
                        for (var i = 0; i < n.length; i++) {
                            var t = n[i];
                            (t.enumerable = t.enumerable || !1),
                                (t.configurable = !0),
                                "value" in t && (t.writable = !0),
                                Object.defineProperty(e, t.key, t);
                        }
                    }
                    return function (n, i, t) {
                        return i && e(n.prototype, i), t && e(n, t), n;
                    };
                })(),
                r = a(i(22)),
                o = a(i(42));
            function a(e) {
                return e && e.__esModule ? e : { default: e };
            }
            var c = (function () {
                function e(n, i) {
                    var l =
                        arguments.length > 2 && void 0 !== arguments[2]
                            ? arguments[2]
                            : [];
                    !(function (e, n) {
                        if (!(e instanceof n))
                            throw new TypeError(
                                "Cannot call a class as a function"
                            );
                    })(this, e),
                        (this.name = n),
                        (this.contents = i),
                        (this.tags = l),
                        (this.attrs = t({}, o.default, {
                            class: "feather feather-" + n,
                        }));
                }
                return (
                    l(e, [
                        {
                            key: "toSvg",
                            value: function () {
                                var e =
                                    arguments.length > 0 &&
                                    void 0 !== arguments[0]
                                        ? arguments[0]
                                        : {};
                                return (
                                    "<svg " +
                                    (function (e) {
                                        return Object.keys(e)
                                            .map(function (n) {
                                                return n + '="' + e[n] + '"';
                                            })
                                            .join(" ");
                                    })(
                                        t({}, this.attrs, e, {
                                            class: (0, r.default)(
                                                this.attrs.class,
                                                e.class
                                            ),
                                        })
                                    ) +
                                    ">" +
                                    this.contents +
                                    "</svg>"
                                );
                            },
                        },
                        {
                            key: "toString",
                            value: function () {
                                return this.contents;
                            },
                        },
                    ]),
                    e
                );
            })();
            n.default = c;
        },
        function (e, n, i) {
            "use strict";
            var t = o(i(12)),
                l = o(i(39)),
                r = o(i(38));
            function o(e) {
                return e && e.__esModule ? e : { default: e };
            }
            e.exports = {
                icons: t.default,
                toSvg: l.default,
                replace: r.default,
            };
        },
        function (e, n, i) {
            e.exports = i(0);
        },
        function (e, n, i) {
            var t = i(2)("iterator"),
                l = !1;
            try {
                var r = 0,
                    o = {
                        next: function () {
                            return { done: !!r++ };
                        },
                        return: function () {
                            l = !0;
                        },
                    };
                (o[t] = function () {
                    return this;
                }),
                    Array.from(o, function () {
                        throw 2;
                    });
            } catch (e) {}
            e.exports = function (e, n) {
                if (!n && !l) return !1;
                var i = !1;
                try {
                    var r = {};
                    (r[t] = function () {
                        return {
                            next: function () {
                                return { done: (i = !0) };
                            },
                        };
                    }),
                        e(r);
                } catch (e) {}
                return i;
            };
        },
        function (e, n, i) {
            var t = i(30),
                l = i(2)("toStringTag"),
                r =
                    "Arguments" ==
                    t(
                        (function () {
                            return arguments;
                        })()
                    );
            e.exports = function (e) {
                var n, i, o;
                return void 0 === e
                    ? "Undefined"
                    : null === e
                    ? "Null"
                    : "string" ==
                      typeof (i = (function (e, n) {
                          try {
                              return e[n];
                          } catch (e) {}
                      })((n = Object(e)), l))
                    ? i
                    : r
                    ? t(n)
                    : "Object" == (o = t(n)) && "function" == typeof n.callee
                    ? "Arguments"
                    : o;
            };
        },
        function (e, n, i) {
            var t = i(47),
                l = i(9),
                r = i(2)("iterator");
            e.exports = function (e) {
                if (void 0 != e) return e[r] || e["@@iterator"] || l[t(e)];
            };
        },
        function (e, n, i) {
            "use strict";
            var t = i(18),
                l = i(7),
                r = i(10);
            e.exports = function (e, n, i) {
                var o = t(n);
                o in e ? l.f(e, o, r(0, i)) : (e[o] = i);
            };
        },
        function (e, n, i) {
            var t = i(2),
                l = i(9),
                r = t("iterator"),
                o = Array.prototype;
            e.exports = function (e) {
                return void 0 !== e && (l.Array === e || o[r] === e);
            };
        },
        function (e, n, i) {
            var t = i(3);
            e.exports = function (e, n, i, l) {
                try {
                    return l ? n(t(i)[0], i[1]) : n(i);
                } catch (n) {
                    var r = e.return;
                    throw (void 0 !== r && t(r.call(e)), n);
                }
            };
        },
        function (e, n) {
            e.exports = function (e) {
                if ("function" != typeof e)
                    throw TypeError(String(e) + " is not a function");
                return e;
            };
        },
        function (e, n, i) {
            var t = i(52);
            e.exports = function (e, n, i) {
                if ((t(e), void 0 === n)) return e;
                switch (i) {
                    case 0:
                        return function () {
                            return e.call(n);
                        };
                    case 1:
                        return function (i) {
                            return e.call(n, i);
                        };
                    case 2:
                        return function (i, t) {
                            return e.call(n, i, t);
                        };
                    case 3:
                        return function (i, t, l) {
                            return e.call(n, i, t, l);
                        };
                }
                return function () {
                    return e.apply(n, arguments);
                };
            };
        },
        function (e, n, i) {
            "use strict";
            var t = i(53),
                l = i(24),
                r = i(51),
                o = i(50),
                a = i(27),
                c = i(49),
                p = i(48);
            e.exports = function (e) {
                var n,
                    i,
                    y,
                    h,
                    x = l(e),
                    s = "function" == typeof this ? this : Array,
                    u = arguments.length,
                    d = u > 1 ? arguments[1] : void 0,
                    f = void 0 !== d,
                    v = 0,
                    g = p(x);
                if (
                    (f && (d = t(d, u > 2 ? arguments[2] : void 0, 2)),
                    void 0 == g || (s == Array && o(g)))
                )
                    for (i = new s((n = a(x.length))); n > v; v++)
                        c(i, v, f ? d(x[v], v) : x[v]);
                else
                    for (h = g.call(x), i = new s(); !(y = h.next()).done; v++)
                        c(i, v, f ? r(h, d, [y.value, v], !0) : y.value);
                return (i.length = v), i;
            };
        },
        function (e, n, i) {
            var t = i(32),
                l = i(54);
            t(
                {
                    target: "Array",
                    stat: !0,
                    forced: !i(46)(function (e) {
                        Array.from(e);
                    }),
                },
                { from: l }
            );
        },
        function (e, n, i) {
            var t = i(6),
                l = i(3);
            e.exports = function (e, n) {
                if ((l(e), !t(n) && null !== n))
                    throw TypeError(
                        "Can't set " + String(n) + " as a prototype"
                    );
            };
        },
        function (e, n, i) {
            var t = i(56);
            e.exports =
                Object.setPrototypeOf ||
                ("__proto__" in {}
                    ? (function () {
                          var e,
                              n = !1,
                              i = {};
                          try {
                              (e = Object.getOwnPropertyDescriptor(
                                  Object.prototype,
                                  "__proto__"
                              ).set).call(i, []),
                                  (n = i instanceof Array);
                          } catch (e) {}
                          return function (i, l) {
                              return (
                                  t(i, l),
                                  n ? e.call(i, l) : (i.__proto__ = l),
                                  i
                              );
                          };
                      })()
                    : void 0);
        },
        function (e, n, i) {
            var t = i(0).document;
            e.exports = t && t.documentElement;
        },
        function (e, n, i) {
            var t = i(28),
                l = i(13);
            e.exports =
                Object.keys ||
                function (e) {
                    return t(e, l);
                };
        },
        function (e, n, i) {
            var t = i(8),
                l = i(7),
                r = i(3),
                o = i(59);
            e.exports = t
                ? Object.defineProperties
                : function (e, n) {
                      r(e);
                      for (var i, t = o(n), a = t.length, c = 0; a > c; )
                          l.f(e, (i = t[c++]), n[i]);
                      return e;
                  };
        },
        function (e, n, i) {
            var t = i(3),
                l = i(60),
                r = i(13),
                o = i(15),
                a = i(58),
                c = i(34),
                p = i(16)("IE_PROTO"),
                y = function () {},
                h = function () {
                    var e,
                        n = c("iframe"),
                        i = r.length;
                    for (
                        n.style.display = "none",
                            a.appendChild(n),
                            n.src = String("javascript:"),
                            (e = n.contentWindow.document).open(),
                            e.write("<script>document.F=Object</script>"),
                            e.close(),
                            h = e.F;
                        i--;

                    )
                        delete h.prototype[r[i]];
                    return h();
                };
            (e.exports =
                Object.create ||
                function (e, n) {
                    var i;
                    return (
                        null !== e
                            ? ((y.prototype = t(e)),
                              (i = new y()),
                              (y.prototype = null),
                              (i[p] = e))
                            : (i = h()),
                        void 0 === n ? i : l(i, n)
                    );
                }),
                (o[p] = !0);
        },
        function (e, n, i) {
            var t = i(4);
            e.exports =
                !!Object.getOwnPropertySymbols &&
                !t(function () {
                    return !String(Symbol());
                });
        },
        function (e, n, i) {
            var t = i(4);
            e.exports = !t(function () {
                function e() {}
                return (
                    (e.prototype.constructor = null),
                    Object.getPrototypeOf(new e()) !== e.prototype
                );
            });
        },
        function (e, n, i) {
            "use strict";
            var t = i(26).IteratorPrototype,
                l = i(61),
                r = i(10),
                o = i(23),
                a = i(9),
                c = function () {
                    return this;
                };
            e.exports = function (e, n, i) {
                var p = n + " Iterator";
                return (
                    (e.prototype = l(t, { next: r(1, i) })),
                    o(e, p, !1, !0),
                    (a[p] = c),
                    e
                );
            };
        },
        function (e, n, i) {
            var t = i(4),
                l = /#|\.prototype\./,
                r = function (e, n) {
                    var i = a[o(e)];
                    return (
                        i == p ||
                        (i != c && ("function" == typeof n ? t(n) : !!n))
                    );
                },
                o = (r.normalize = function (e) {
                    return String(e).replace(l, ".").toLowerCase();
                }),
                a = (r.data = {}),
                c = (r.NATIVE = "N"),
                p = (r.POLYFILL = "P");
            e.exports = r;
        },
        function (e, n) {
            n.f = Object.getOwnPropertySymbols;
        },
        function (e, n, i) {
            var t = i(21),
                l = Math.max,
                r = Math.min;
            e.exports = function (e, n) {
                var i = t(e);
                return i < 0 ? l(i + n, 0) : r(i, n);
            };
        },
        function (e, n, i) {
            var t = i(14),
                l = i(27),
                r = i(67);
            e.exports = function (e) {
                return function (n, i, o) {
                    var a,
                        c = t(n),
                        p = l(c.length),
                        y = r(o, p);
                    if (e && i != i) {
                        for (; p > y; ) if ((a = c[y++]) != a) return !0;
                    } else
                        for (; p > y; y++)
                            if ((e || y in c) && c[y] === i) return e || y || 0;
                    return !e && -1;
                };
            };
        },
        function (e, n, i) {
            var t = i(28),
                l = i(13).concat("length", "prototype");
            n.f =
                Object.getOwnPropertyNames ||
                function (e) {
                    return t(e, l);
                };
        },
        function (e, n, i) {
            var t = i(0),
                l = i(69),
                r = i(66),
                o = i(3),
                a = t.Reflect;
            e.exports =
                (a && a.ownKeys) ||
                function (e) {
                    var n = l.f(o(e)),
                        i = r.f;
                    return i ? n.concat(i(e)) : n;
                };
        },
        function (e, n, i) {
            var t = i(1),
                l = i(70),
                r = i(31),
                o = i(7);
            e.exports = function (e, n) {
                for (var i = l(n), a = o.f, c = r.f, p = 0; p < i.length; p++) {
                    var y = i[p];
                    t(e, y) || a(e, y, c(n, y));
                }
            };
        },
        function (e, n, i) {
            var t = i(4),
                l = i(30),
                r = "".split;
            e.exports = t(function () {
                return !Object("z").propertyIsEnumerable(0);
            })
                ? function (e) {
                      return "String" == l(e) ? r.call(e, "") : Object(e);
                  }
                : Object;
        },
        function (e, n, i) {
            "use strict";
            var t = {}.propertyIsEnumerable,
                l = Object.getOwnPropertyDescriptor,
                r = l && !t.call({ 1: 2 }, 1);
            n.f = r
                ? function (e) {
                      var n = l(this, e);
                      return !!n && n.enumerable;
                  }
                : t;
        },
        function (e, n, i) {
            "use strict";
            var t = i(32),
                l = i(64),
                r = i(25),
                o = i(57),
                a = i(23),
                c = i(5),
                p = i(29),
                y = i(2),
                h = i(17),
                x = i(9),
                s = i(26),
                u = s.IteratorPrototype,
                d = s.BUGGY_SAFARI_ITERATORS,
                f = y("iterator"),
                v = function () {
                    return this;
                };
            e.exports = function (e, n, i, y, s, g, m) {
                l(i, n, y);
                var M,
                    w,
                    b,
                    z = function (e) {
                        if (e === s && O) return O;
                        if (!d && e in H) return H[e];
                        switch (e) {
                            case "keys":
                            case "values":
                            case "entries":
                                return function () {
                                    return new i(this, e);
                                };
                        }
                        return function () {
                            return new i(this);
                        };
                    },
                    A = n + " Iterator",
                    k = !1,
                    H = e.prototype,
                    V = H[f] || H["@@iterator"] || (s && H[s]),
                    O = (!d && V) || z(s),
                    j = ("Array" == n && H.entries) || V;
                if (
                    (j &&
                        ((M = r(j.call(new e()))),
                        u !== Object.prototype &&
                            M.next &&
                            (h ||
                                r(M) === u ||
                                (o
                                    ? o(M, u)
                                    : "function" != typeof M[f] && c(M, f, v)),
                            a(M, A, !0, !0),
                            h && (x[A] = v))),
                    "values" == s &&
                        V &&
                        "values" !== V.name &&
                        ((k = !0),
                        (O = function () {
                            return V.call(this);
                        })),
                    (h && !m) || H[f] === O || c(H, f, O),
                    (x[n] = O),
                    s)
                )
                    if (
                        ((w = {
                            values: z("values"),
                            keys: g ? O : z("keys"),
                            entries: z("entries"),
                        }),
                        m)
                    )
                        for (b in w) (!d && !k && b in H) || p(H, b, w[b]);
                    else t({ target: n, proto: !0, forced: d || k }, w);
                return w;
            };
        },
        function (e, n) {
            var i;
            i = (function () {
                return this;
            })();
            try {
                i = i || Function("return this")() || (0, eval)("this");
            } catch (e) {
                "object" == typeof window && (i = window);
            }
            e.exports = i;
        },
        function (e, n, i) {
            var t = i(0),
                l = i(36),
                r = t.WeakMap;
            e.exports = "function" == typeof r && /native code/.test(l.call(r));
        },
        function (e, n, i) {
            var t = i(21),
                l = i(20);
            e.exports = function (e, n, i) {
                var r,
                    o,
                    a = String(l(e)),
                    c = t(n),
                    p = a.length;
                return c < 0 || c >= p
                    ? i
                        ? ""
                        : void 0
                    : (r = a.charCodeAt(c)) < 55296 ||
                      r > 56319 ||
                      c + 1 === p ||
                      (o = a.charCodeAt(c + 1)) < 56320 ||
                      o > 57343
                    ? i
                        ? a.charAt(c)
                        : r
                    : i
                    ? a.slice(c, c + 2)
                    : o - 56320 + ((r - 55296) << 10) + 65536;
            };
        },
        function (e, n, i) {
            "use strict";
            var t = i(77),
                l = i(37),
                r = i(74),
                o = l.set,
                a = l.getterFor("String Iterator");
            r(
                String,
                "String",
                function (e) {
                    o(this, {
                        type: "String Iterator",
                        string: String(e),
                        index: 0,
                    });
                },
                function () {
                    var e,
                        n = a(this),
                        i = n.string,
                        l = n.index;
                    return l >= i.length
                        ? { value: void 0, done: !0 }
                        : ((e = t(i, l, !0)),
                          (n.index += e.length),
                          { value: e, done: !1 });
                }
            );
        },
        function (e, n, i) {
            i(78), i(55);
            var t = i(45);
            e.exports = t.Array.from;
        },
        function (e, n, i) {
            i(79), (e.exports = i(44));
        },
    ]);
});
//# sourceMappingURL=feather.min.js.map
/**
 * Theme: Unikit - Responsive Bootstrap 5 Admin Dashboard
 * Author: Mannatthemes
 * Module/App: Main Js
 */

feather.replace();
// Menu sticky
function windowScroll() {
    var navbar = document.getElementById("navbar-custom");
    if (
        document.body.scrollTop >= 50 ||
        document.documentElement.scrollTop >= 50
    ) {
        navbar?.classList.add("nav-sticky");
    } else {
        navbar?.classList.remove("nav-sticky");
    }
}
window.addEventListener("scroll", (ev) => {
    ev.preventDefault();
    windowScroll();
});
//  var triggerTabList = [].slice.call(document.querySelectorAll('#tab-menu a'))
//  triggerTabList.forEach(function (triggerEl) {
//      var tabTrigger = new bootstrap.Tab(triggerEl)
//      triggerEl.addEventListener('click', function (event) {
//          event.preventDefault()
//          tabTrigger.show()
//          document.body.classList.remove('enlarge-menu');
//      })
//  })
var collapses = document.querySelectorAll(".navbar-nav .collapse");
collapses.forEach((collapse) => {
    // Init collapses
    var collapseInstance = new bootstrap.Collapse(collapse, {
        toggle: false,
    });
    // Hide sibling collapses on `show.bs.collapse`
    collapse.addEventListener("show.bs.collapse", (e) => {
        e.stopPropagation();
        var closestCollapse = collapse.parentElement.closest(".collapse");
        if (closestCollapse != null) {
            var siblingCollapses =
                closestCollapse.querySelectorAll(".collapse");
            siblingCollapses.forEach((siblingCollapse) => {
                var siblingCollapseInstance =
                    bootstrap.Collapse.getInstance(siblingCollapse);
                if (siblingCollapseInstance === collapseInstance) {
                    return;
                }
                siblingCollapseInstance.hide();
            });
        }
    });
    // Hide nested collapses on `hide.bs.collapse`
    collapse.addEventListener("hide.bs.collapse", (e) => {
        e.stopPropagation();
        var childCollapses = collapse.querySelectorAll(".collapse");
        childCollapses.forEach((childCollapse) => {
            var childCollapseInstance =
                bootstrap.Collapse.getInstance(childCollapse);
            childCollapseInstance.hide();
        });
    });
});
//  Toggle sidebar onclick
try {
    document
        .getElementById("togglemenu")
        .addEventListener("click", function (event) {
            event.preventDefault();
            document.body.classList.toggle("enlarge-menu");
        });
} catch (err) {}
// Left sidebar Tab Menu Responsive Resize
if (window.screen.width < 1025) {
    document
        .getElementsByTagName("body")[0]
        .classList.add("enlarge-menu", "enlarge-menu-all");
} else if (window.screen.width < 1340) {
    document
        .getElementsByTagName("body")[0]
        .classList.remove("enlarge-menu-all");
    document.getElementsByTagName("body")[0].classList.add("enlarge-menu");
} else {
    document
        .getElementsByTagName("body")[0]
        .classList.remove("enlarge-menu", "enlarge-menu-all");
}
window.addEventListener("resize", function () {
    if (window.screen.width < 1025) {
        document
            .getElementsByTagName("body")[0]
            .classList.add("enlarge-menu", "enlarge-menu-all");
    } else if (window.screen.width < 1340) {
        document
            .getElementsByTagName("body")[0]
            .classList.remove("enlarge-menu-all");
        document.getElementsByTagName("body")[0].classList.add("enlarge-menu");
    } else {
        document
            .getElementsByTagName("body")[0]
            .classList.remove("enlarge-menu", "enlarge-menu-all");
    }
});
//  document.querySelectorAll(".leftbar-tab-menu a").forEach(function (element, index) {
//      var pageUrl = window.location.href.split(/[?#]/)[0];
//      if (element.href == pageUrl) {
//          element.classList.add("active");
//          if(!element.parentElement.parentElement.classList.contains('navbar-nav')){
//          var collapse1 = element.closest('.collapse');
//          if (collapse1) {
//              collapse1.classList.add("show");
//              var navLink1 = collapse1.parentElement.querySelector('a');
//              navLink1.classList.remove('collapsed');
//              navLink1.setAttribute("aria-expanded", "true");
//              var collapse2 = collapse1.parentElement.closest('.collapse');
//              if (collapse2) {
//                  collapse2.classList.add("show");
//                  var navLink2 = collapse2.parentElement.querySelector('a');
//                  navLink2.classList.remove('collapsed');
//                  collapse2.parentElement.childNodes[1].setAttribute("aria-expanded", "true");
//              }
//          }
//      }
//          var tabPane = element.closest('.tab-pane');
//          if (tabPane) {
//              tabPane.classList.add('active');
//              document.querySelectorAll('a').forEach(function (elementA, index) {
//                  if (elementA.href.includes(tabPane.id)) {
//                      elementA.classList.add("active");
//                  }
//              });
//          }
//      }
//  });
var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});
var dropdowns = document.querySelectorAll(
    ".dropup, .dropend, .dropdown, .dropstart"
);
var events = ["click"];
function toggleDropdown(e, dropdown) {
    var parentMenu = dropdown.closest(".dropdown-menu");
    if (parentMenu) {
        e.preventDefault();
        e.stopPropagation();
        var currentMenu = dropdown.querySelector(".dropdown-menu");
        var siblingMenus = parentMenu.querySelectorAll(".dropdown-menu");
        [].forEach.call(siblingMenus, function (menu) {
            if (menu !== currentMenu) {
                menu.classList.remove("show");
            }
        });
        currentMenu.classList.toggle("show");
    }
}
function hideDropdowns(dropdown) {
    var currentMenu = dropdown.querySelector(".dropdown-menu");
    var nestedMenus = currentMenu.querySelectorAll(".dropdown-menu");
    if (nestedMenus) {
        [].forEach.call(nestedMenus, function (menu) {
            menu.classList.remove("show");
        });
    }
}
[].forEach.call(dropdowns, function (dropdown) {
    var toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
    if (toggle) {
        toggle.addEventListener(events[0], function (e) {
            toggleDropdown(e, dropdown);
        });
    } else {
        hideDropdowns(dropdown);
    }
});
//Menu
// Toggle menu
function toggleMenu() {
    document.getElementById("mobileToggle").classList.toggle("open");
    var isOpen = document.getElementById("navigation");
    if (isOpen.style.display === "block") {
        isOpen.style.display = "none";
    } else {
        isOpen.style.display = "block";
    }
}

//  function activateMenu() {
//     var menuItems = document.getElementsByClassName("sub-menu-item");
//     if (menuItems) {
//         var matchingMenuItem = null;
//         for (var idx = 0; idx < menuItems.length; idx++) {
//             if (menuItems[idx].href === window.location.href) {
//                 matchingMenuItem = menuItems[idx];
//             }
//         }
//         if (matchingMenuItem) {
//             matchingMenuItem.classList.add('active');
//             var immediateParent = getClosest(matchingMenuItem, 'li');
//             if (immediateParent) {
//                 immediateParent.classList.add('active');
//             }
//             var parent = getClosest(matchingMenuItem, '.parent-menu-item');
//             if (parent) {
//                 parent.classList.add('active');
//                 var parentMenuitem = parent.querySelector('.menu-item');
//                 if (parentMenuitem) {
//                     parentMenuitem.classList.add('active');
//                 }
//                 var parentOfParent = getClosest(parent, '.parent-parent-menu-item');
//                 if (parentOfParent) {
//                     parentOfParent.classList.add('active');
//                 }
//             } else {
//                 var parentOfParent = getClosest(matchingMenuItem, '.parent-parent-menu-item');
//                 if (parentOfParent) {
//                     parentOfParent.classList.add('active');
//                 }
//             }
//         }
//     }
// }

document.querySelectorAll(".menu-body a").forEach(function (element, index) {
    var pageUrl = window.location.href.split(/[?#]/)[0];
    const target = element;
    if (element.href == pageUrl) {
        target.classList.add("active");
        target.parentNode.classList.add("menuitem-active");
        target.parentNode
            .querySelector(".nav-link")
            ?.setAttribute("aria-expanded", "true");

        target.parentNode.parentNode.parentNode.classList.add("show");

        // console.log(target.parentNode.parentNode.parentNode.parentNode);
        if (
            !target.parentNode.parentNode.parentNode.parentNode.classList.contains(
                "menu-body"
            )
        ) {
            target.parentNode.parentNode.parentNode.parentNode.classList.add(
                "menuitem-active"
            );
            target.parentNode.parentNode.parentNode.parentNode
                .querySelector(".nav-link")
                ?.setAttribute("aria-expanded", "true"); // add active to li of the current link
        }
        // var firstLevelParent = target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
        // if (firstLevelParent.getAttribute('id') !== 'sidebar-menu') {
        //   firstLevelParent.classList.add('show');
        // }

        // target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.classList.add('menuitem-active');
        // var parent = target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector('.nav-link');
        // if(parent && parent.getAttribute("aria-controls")!="sidebarDashboards")
        //     parent.setAttribute('aria-expanded',"true");

        var secondLevelParent =
            target.parentNode.parentNode.parentNode.parentNode.parentNode
                .parentNode.parentNode.parentNode.parentNode;
        if (secondLevelParent && secondLevelParent instanceof HTMLElement) {
            if (secondLevelParent.getAttribute("id") !== "wrapper")
                secondLevelParent.classList.add("show");
        }

        var upperLevelParent =
            target.parentNode.parentNode.parentNode.parentNode.parentNode
                .parentNode.parentNode.parentNode.parentNode;
        if (upperLevelParent) {
            upperLevelParent = upperLevelParent.parentNode;
        }
        ("navbar-nav ");

        if (upperLevelParent) {
            upperLevelParent.classList.add("menuitem-active");
            //upperLevelParent.querySelector('.nav-link')?.setAttribute('aria-expanded',"true");
        }
    }
});

if (document.querySelectorAll("#navigation").length) {
    document
        .querySelectorAll("#navigation li a")
        .forEach(function (element, index) {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (element.href == pageUrl) {
                const target = element;
                target.classList.add("active");
                var newAtrribute = target.getAttribute("aria-labelledby");
                while (true) {
                    var temp = document.querySelector("#" + newAtrribute);
                    temp?.classList.add("active");
                    newAtrribute = temp?.getAttribute("aria-labelledby");
                    temp?.setAttribute("aria-expanded", "true");
                    if (!newAtrribute) break;
                }
                // target.parentNode.classList.add('active');
                target.parentNode.parentNode.classList.add("active"); // add active to li of the current link
                target.parentNode.parentNode.parentElement
                    .querySelector(".nav-link")
                    ?.classList.add("active");
                target.parentNode.parentNode.parentNode.parentNode.classList.add(
                    "active"
                );
                target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.classList.add(
                    "active"
                );
            }
        });

    // Topbar - main menu
    document
        .querySelector(".navbar-toggle")
        .addEventListener("click", function (e) {
            e.target.classList.toggle("open");
            //document.getElementById('#navigation').slideToggle(400);
        });
}
