var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

/*! jQuery v1.12.0 | (c) jQuery Foundation | jquery.org/license */
!function (a, b) {
	"object" == (typeof module === "undefined" ? "undefined" : _typeof(module)) && "object" == _typeof(module.exports) ? module.exports = a.document ? b(a, !0) : function (a) {
		if (!a.document) throw new Error("jQuery requires a window with a document");return b(a);
	} : b(a);
}("undefined" != typeof window ? window : this, function (a, b) {
	var c = [],
	    d = a.document,
	    e = c.slice,
	    f = c.concat,
	    g = c.push,
	    h = c.indexOf,
	    i = {},
	    j = i.toString,
	    k = i.hasOwnProperty,
	    l = {},
	    m = "1.12.0",
	    n = function n(a, b) {
		return new n.fn.init(a, b);
	},
	    o = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
	    p = /^-ms-/,
	    q = /-([\da-z])/gi,
	    r = function r(a, b) {
		return b.toUpperCase();
	};n.fn = n.prototype = { jquery: m, constructor: n, selector: "", length: 0, toArray: function toArray() {
			return e.call(this);
		}, get: function get(a) {
			return null != a ? 0 > a ? this[a + this.length] : this[a] : e.call(this);
		}, pushStack: function pushStack(a) {
			var b = n.merge(this.constructor(), a);return b.prevObject = this, b.context = this.context, b;
		}, each: function each(a) {
			return n.each(this, a);
		}, map: function map(a) {
			return this.pushStack(n.map(this, function (b, c) {
				return a.call(b, c, b);
			}));
		}, slice: function slice() {
			return this.pushStack(e.apply(this, arguments));
		}, first: function first() {
			return this.eq(0);
		}, last: function last() {
			return this.eq(-1);
		}, eq: function eq(a) {
			var b = this.length,
			    c = +a + (0 > a ? b : 0);return this.pushStack(c >= 0 && b > c ? [this[c]] : []);
		}, end: function end() {
			return this.prevObject || this.constructor();
		}, push: g, sort: c.sort, splice: c.splice }, n.extend = n.fn.extend = function () {
		var a,
		    b,
		    c,
		    d,
		    e,
		    f,
		    g = arguments[0] || {},
		    h = 1,
		    i = arguments.length,
		    j = !1;for ("boolean" == typeof g && (j = g, g = arguments[h] || {}, h++), "object" == (typeof g === "undefined" ? "undefined" : _typeof(g)) || n.isFunction(g) || (g = {}), h === i && (g = this, h--); i > h; h++) {
			if (null != (e = arguments[h])) for (d in e) {
				a = g[d], c = e[d], g !== c && (j && c && (n.isPlainObject(c) || (b = n.isArray(c))) ? (b ? (b = !1, f = a && n.isArray(a) ? a : []) : f = a && n.isPlainObject(a) ? a : {}, g[d] = n.extend(j, f, c)) : void 0 !== c && (g[d] = c));
			}
		}return g;
	}, n.extend({ expando: "jQuery" + (m + Math.random()).replace(/\D/g, ""), isReady: !0, error: function error(a) {
			throw new Error(a);
		}, noop: function noop() {}, isFunction: function isFunction(a) {
			return "function" === n.type(a);
		}, isArray: Array.isArray || function (a) {
			return "array" === n.type(a);
		}, isWindow: function isWindow(a) {
			return null != a && a == a.window;
		}, isNumeric: function isNumeric(a) {
			var b = a && a.toString();return !n.isArray(a) && b - parseFloat(b) + 1 >= 0;
		}, isEmptyObject: function isEmptyObject(a) {
			var b;for (b in a) {
				return !1;
			}return !0;
		}, isPlainObject: function isPlainObject(a) {
			var b;if (!a || "object" !== n.type(a) || a.nodeType || n.isWindow(a)) return !1;try {
				if (a.constructor && !k.call(a, "constructor") && !k.call(a.constructor.prototype, "isPrototypeOf")) return !1;
			} catch (c) {
				return !1;
			}if (!l.ownFirst) for (b in a) {
				return k.call(a, b);
			}for (b in a) {}return void 0 === b || k.call(a, b);
		}, type: function type(a) {
			return null == a ? a + "" : "object" == (typeof a === "undefined" ? "undefined" : _typeof(a)) || "function" == typeof a ? i[j.call(a)] || "object" : typeof a === "undefined" ? "undefined" : _typeof(a);
		}, globalEval: function globalEval(b) {
			b && n.trim(b) && (a.execScript || function (b) {
				a.eval.call(a, b);
			})(b);
		}, camelCase: function camelCase(a) {
			return a.replace(p, "ms-").replace(q, r);
		}, nodeName: function nodeName(a, b) {
			return a.nodeName && a.nodeName.toLowerCase() === b.toLowerCase();
		}, each: function each(a, b) {
			var c,
			    d = 0;if (s(a)) {
				for (c = a.length; c > d; d++) {
					if (b.call(a[d], d, a[d]) === !1) break;
				}
			} else for (d in a) {
				if (b.call(a[d], d, a[d]) === !1) break;
			}return a;
		}, trim: function trim(a) {
			return null == a ? "" : (a + "").replace(o, "");
		}, makeArray: function makeArray(a, b) {
			var c = b || [];return null != a && (s(Object(a)) ? n.merge(c, "string" == typeof a ? [a] : a) : g.call(c, a)), c;
		}, inArray: function inArray(a, b, c) {
			var d;if (b) {
				if (h) return h.call(b, a, c);for (d = b.length, c = c ? 0 > c ? Math.max(0, d + c) : c : 0; d > c; c++) {
					if (c in b && b[c] === a) return c;
				}
			}return -1;
		}, merge: function merge(a, b) {
			var c = +b.length,
			    d = 0,
			    e = a.length;while (c > d) {
				a[e++] = b[d++];
			}if (c !== c) while (void 0 !== b[d]) {
				a[e++] = b[d++];
			}return a.length = e, a;
		}, grep: function grep(a, b, c) {
			for (var d, e = [], f = 0, g = a.length, h = !c; g > f; f++) {
				d = !b(a[f], f), d !== h && e.push(a[f]);
			}return e;
		}, map: function map(a, b, c) {
			var d,
			    e,
			    g = 0,
			    h = [];if (s(a)) for (d = a.length; d > g; g++) {
				e = b(a[g], g, c), null != e && h.push(e);
			} else for (g in a) {
				e = b(a[g], g, c), null != e && h.push(e);
			}return f.apply([], h);
		}, guid: 1, proxy: function proxy(a, b) {
			var c, d, f;return "string" == typeof b && (f = a[b], b = a, a = f), n.isFunction(a) ? (c = e.call(arguments, 2), d = function d() {
				return a.apply(b || this, c.concat(e.call(arguments)));
			}, d.guid = a.guid = a.guid || n.guid++, d) : void 0;
		}, now: function now() {
			return +new Date();
		}, support: l }), "function" == typeof Symbol && (n.fn[Symbol.iterator] = c[Symbol.iterator]), n.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function (a, b) {
		i["[object " + b + "]"] = b.toLowerCase();
	});function s(a) {
		var b = !!a && "length" in a && a.length,
		    c = n.type(a);return "function" === c || n.isWindow(a) ? !1 : "array" === c || 0 === b || "number" == typeof b && b > 0 && b - 1 in a;
	}var t = function (a) {
		var b,
		    c,
		    d,
		    e,
		    f,
		    g,
		    h,
		    i,
		    j,
		    k,
		    l,
		    m,
		    n,
		    o,
		    p,
		    q,
		    r,
		    s,
		    t,
		    u = "sizzle" + 1 * new Date(),
		    v = a.document,
		    w = 0,
		    x = 0,
		    y = ga(),
		    z = ga(),
		    A = ga(),
		    B = function B(a, b) {
			return a === b && (l = !0), 0;
		},
		    C = 1 << 31,
		    D = {}.hasOwnProperty,
		    E = [],
		    F = E.pop,
		    G = E.push,
		    H = E.push,
		    I = E.slice,
		    J = function J(a, b) {
			for (var c = 0, d = a.length; d > c; c++) {
				if (a[c] === b) return c;
			}return -1;
		},
		    K = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
		    L = "[\\x20\\t\\r\\n\\f]",
		    M = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
		    N = "\\[" + L + "*(" + M + ")(?:" + L + "*([*^$|!~]?=)" + L + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + M + "))|)" + L + "*\\]",
		    O = ":(" + M + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + N + ")*)|.*)\\)|)",
		    P = new RegExp(L + "+", "g"),
		    Q = new RegExp("^" + L + "+|((?:^|[^\\\\])(?:\\\\.)*)" + L + "+$", "g"),
		    R = new RegExp("^" + L + "*," + L + "*"),
		    S = new RegExp("^" + L + "*([>+~]|" + L + ")" + L + "*"),
		    T = new RegExp("=" + L + "*([^\\]'\"]*?)" + L + "*\\]", "g"),
		    U = new RegExp(O),
		    V = new RegExp("^" + M + "$"),
		    W = { ID: new RegExp("^#(" + M + ")"), CLASS: new RegExp("^\\.(" + M + ")"), TAG: new RegExp("^(" + M + "|[*])"), ATTR: new RegExp("^" + N), PSEUDO: new RegExp("^" + O), CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + L + "*(even|odd|(([+-]|)(\\d*)n|)" + L + "*(?:([+-]|)" + L + "*(\\d+)|))" + L + "*\\)|)", "i"), bool: new RegExp("^(?:" + K + ")$", "i"), needsContext: new RegExp("^" + L + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + L + "*((?:-\\d)?\\d*)" + L + "*\\)|)(?=[^-]|$)", "i") },
		    X = /^(?:input|select|textarea|button)$/i,
		    Y = /^h\d$/i,
		    Z = /^[^{]+\{\s*\[native \w/,
		    $ = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
		    _ = /[+~]/,
		    aa = /'|\\/g,
		    ba = new RegExp("\\\\([\\da-f]{1,6}" + L + "?|(" + L + ")|.)", "ig"),
		    ca = function ca(a, b, c) {
			var d = "0x" + b - 65536;return d !== d || c ? b : 0 > d ? String.fromCharCode(d + 65536) : String.fromCharCode(d >> 10 | 55296, 1023 & d | 56320);
		},
		    da = function da() {
			m();
		};try {
			H.apply(E = I.call(v.childNodes), v.childNodes), E[v.childNodes.length].nodeType;
		} catch (ea) {
			H = { apply: E.length ? function (a, b) {
					G.apply(a, I.call(b));
				} : function (a, b) {
					var c = a.length,
					    d = 0;while (a[c++] = b[d++]) {}a.length = c - 1;
				} };
		}function fa(a, b, d, e) {
			var f,
			    h,
			    j,
			    k,
			    l,
			    o,
			    r,
			    s,
			    w = b && b.ownerDocument,
			    x = b ? b.nodeType : 9;if (d = d || [], "string" != typeof a || !a || 1 !== x && 9 !== x && 11 !== x) return d;if (!e && ((b ? b.ownerDocument || b : v) !== n && m(b), b = b || n, p)) {
				if (11 !== x && (o = $.exec(a))) if (f = o[1]) {
					if (9 === x) {
						if (!(j = b.getElementById(f))) return d;if (j.id === f) return d.push(j), d;
					} else if (w && (j = w.getElementById(f)) && t(b, j) && j.id === f) return d.push(j), d;
				} else {
					if (o[2]) return H.apply(d, b.getElementsByTagName(a)), d;if ((f = o[3]) && c.getElementsByClassName && b.getElementsByClassName) return H.apply(d, b.getElementsByClassName(f)), d;
				}if (c.qsa && !A[a + " "] && (!q || !q.test(a))) {
					if (1 !== x) w = b, s = a;else if ("object" !== b.nodeName.toLowerCase()) {
						(k = b.getAttribute("id")) ? k = k.replace(aa, "\\$&") : b.setAttribute("id", k = u), r = g(a), h = r.length, l = V.test(k) ? "#" + k : "[id='" + k + "']";while (h--) {
							r[h] = l + " " + qa(r[h]);
						}s = r.join(","), w = _.test(a) && oa(b.parentNode) || b;
					}if (s) try {
						return H.apply(d, w.querySelectorAll(s)), d;
					} catch (y) {} finally {
						k === u && b.removeAttribute("id");
					}
				}
			}return i(a.replace(Q, "$1"), b, d, e);
		}function ga() {
			var a = [];function b(c, e) {
				return a.push(c + " ") > d.cacheLength && delete b[a.shift()], b[c + " "] = e;
			}return b;
		}function ha(a) {
			return a[u] = !0, a;
		}function ia(a) {
			var b = n.createElement("div");try {
				return !!a(b);
			} catch (c) {
				return !1;
			} finally {
				b.parentNode && b.parentNode.removeChild(b), b = null;
			}
		}function ja(a, b) {
			var c = a.split("|"),
			    e = c.length;while (e--) {
				d.attrHandle[c[e]] = b;
			}
		}function ka(a, b) {
			var c = b && a,
			    d = c && 1 === a.nodeType && 1 === b.nodeType && (~b.sourceIndex || C) - (~a.sourceIndex || C);if (d) return d;if (c) while (c = c.nextSibling) {
				if (c === b) return -1;
			}return a ? 1 : -1;
		}function la(a) {
			return function (b) {
				var c = b.nodeName.toLowerCase();return "input" === c && b.type === a;
			};
		}function ma(a) {
			return function (b) {
				var c = b.nodeName.toLowerCase();return ("input" === c || "button" === c) && b.type === a;
			};
		}function na(a) {
			return ha(function (b) {
				return b = +b, ha(function (c, d) {
					var e,
					    f = a([], c.length, b),
					    g = f.length;while (g--) {
						c[e = f[g]] && (c[e] = !(d[e] = c[e]));
					}
				});
			});
		}function oa(a) {
			return a && "undefined" != typeof a.getElementsByTagName && a;
		}c = fa.support = {}, f = fa.isXML = function (a) {
			var b = a && (a.ownerDocument || a).documentElement;return b ? "HTML" !== b.nodeName : !1;
		}, m = fa.setDocument = function (a) {
			var b,
			    e,
			    g = a ? a.ownerDocument || a : v;return g !== n && 9 === g.nodeType && g.documentElement ? (n = g, o = n.documentElement, p = !f(n), (e = n.defaultView) && e.top !== e && (e.addEventListener ? e.addEventListener("unload", da, !1) : e.attachEvent && e.attachEvent("onunload", da)), c.attributes = ia(function (a) {
				return a.className = "i", !a.getAttribute("className");
			}), c.getElementsByTagName = ia(function (a) {
				return a.appendChild(n.createComment("")), !a.getElementsByTagName("*").length;
			}), c.getElementsByClassName = Z.test(n.getElementsByClassName), c.getById = ia(function (a) {
				return o.appendChild(a).id = u, !n.getElementsByName || !n.getElementsByName(u).length;
			}), c.getById ? (d.find.ID = function (a, b) {
				if ("undefined" != typeof b.getElementById && p) {
					var c = b.getElementById(a);return c ? [c] : [];
				}
			}, d.filter.ID = function (a) {
				var b = a.replace(ba, ca);return function (a) {
					return a.getAttribute("id") === b;
				};
			}) : (delete d.find.ID, d.filter.ID = function (a) {
				var b = a.replace(ba, ca);return function (a) {
					var c = "undefined" != typeof a.getAttributeNode && a.getAttributeNode("id");return c && c.value === b;
				};
			}), d.find.TAG = c.getElementsByTagName ? function (a, b) {
				return "undefined" != typeof b.getElementsByTagName ? b.getElementsByTagName(a) : c.qsa ? b.querySelectorAll(a) : void 0;
			} : function (a, b) {
				var c,
				    d = [],
				    e = 0,
				    f = b.getElementsByTagName(a);if ("*" === a) {
					while (c = f[e++]) {
						1 === c.nodeType && d.push(c);
					}return d;
				}return f;
			}, d.find.CLASS = c.getElementsByClassName && function (a, b) {
				return "undefined" != typeof b.getElementsByClassName && p ? b.getElementsByClassName(a) : void 0;
			}, r = [], q = [], (c.qsa = Z.test(n.querySelectorAll)) && (ia(function (a) {
				o.appendChild(a).innerHTML = "<a id='" + u + "'></a><select id='" + u + "-\r\\' msallowcapture=''><option selected=''></option></select>", a.querySelectorAll("[msallowcapture^='']").length && q.push("[*^$]=" + L + "*(?:''|\"\")"), a.querySelectorAll("[selected]").length || q.push("\\[" + L + "*(?:value|" + K + ")"), a.querySelectorAll("[id~=" + u + "-]").length || q.push("~="), a.querySelectorAll(":checked").length || q.push(":checked"), a.querySelectorAll("a#" + u + "+*").length || q.push(".#.+[+~]");
			}), ia(function (a) {
				var b = n.createElement("input");b.setAttribute("type", "hidden"), a.appendChild(b).setAttribute("name", "D"), a.querySelectorAll("[name=d]").length && q.push("name" + L + "*[*^$|!~]?="), a.querySelectorAll(":enabled").length || q.push(":enabled", ":disabled"), a.querySelectorAll("*,:x"), q.push(",.*:");
			})), (c.matchesSelector = Z.test(s = o.matches || o.webkitMatchesSelector || o.mozMatchesSelector || o.oMatchesSelector || o.msMatchesSelector)) && ia(function (a) {
				c.disconnectedMatch = s.call(a, "div"), s.call(a, "[s!='']:x"), r.push("!=", O);
			}), q = q.length && new RegExp(q.join("|")), r = r.length && new RegExp(r.join("|")), b = Z.test(o.compareDocumentPosition), t = b || Z.test(o.contains) ? function (a, b) {
				var c = 9 === a.nodeType ? a.documentElement : a,
				    d = b && b.parentNode;return a === d || !(!d || 1 !== d.nodeType || !(c.contains ? c.contains(d) : a.compareDocumentPosition && 16 & a.compareDocumentPosition(d)));
			} : function (a, b) {
				if (b) while (b = b.parentNode) {
					if (b === a) return !0;
				}return !1;
			}, B = b ? function (a, b) {
				if (a === b) return l = !0, 0;var d = !a.compareDocumentPosition - !b.compareDocumentPosition;return d ? d : (d = (a.ownerDocument || a) === (b.ownerDocument || b) ? a.compareDocumentPosition(b) : 1, 1 & d || !c.sortDetached && b.compareDocumentPosition(a) === d ? a === n || a.ownerDocument === v && t(v, a) ? -1 : b === n || b.ownerDocument === v && t(v, b) ? 1 : k ? J(k, a) - J(k, b) : 0 : 4 & d ? -1 : 1);
			} : function (a, b) {
				if (a === b) return l = !0, 0;var c,
				    d = 0,
				    e = a.parentNode,
				    f = b.parentNode,
				    g = [a],
				    h = [b];if (!e || !f) return a === n ? -1 : b === n ? 1 : e ? -1 : f ? 1 : k ? J(k, a) - J(k, b) : 0;if (e === f) return ka(a, b);c = a;while (c = c.parentNode) {
					g.unshift(c);
				}c = b;while (c = c.parentNode) {
					h.unshift(c);
				}while (g[d] === h[d]) {
					d++;
				}return d ? ka(g[d], h[d]) : g[d] === v ? -1 : h[d] === v ? 1 : 0;
			}, n) : n;
		}, fa.matches = function (a, b) {
			return fa(a, null, null, b);
		}, fa.matchesSelector = function (a, b) {
			if ((a.ownerDocument || a) !== n && m(a), b = b.replace(T, "='$1']"), c.matchesSelector && p && !A[b + " "] && (!r || !r.test(b)) && (!q || !q.test(b))) try {
				var d = s.call(a, b);if (d || c.disconnectedMatch || a.document && 11 !== a.document.nodeType) return d;
			} catch (e) {}return fa(b, n, null, [a]).length > 0;
		}, fa.contains = function (a, b) {
			return (a.ownerDocument || a) !== n && m(a), t(a, b);
		}, fa.attr = function (a, b) {
			(a.ownerDocument || a) !== n && m(a);var e = d.attrHandle[b.toLowerCase()],
			    f = e && D.call(d.attrHandle, b.toLowerCase()) ? e(a, b, !p) : void 0;return void 0 !== f ? f : c.attributes || !p ? a.getAttribute(b) : (f = a.getAttributeNode(b)) && f.specified ? f.value : null;
		}, fa.error = function (a) {
			throw new Error("Syntax error, unrecognized expression: " + a);
		}, fa.uniqueSort = function (a) {
			var b,
			    d = [],
			    e = 0,
			    f = 0;if (l = !c.detectDuplicates, k = !c.sortStable && a.slice(0), a.sort(B), l) {
				while (b = a[f++]) {
					b === a[f] && (e = d.push(f));
				}while (e--) {
					a.splice(d[e], 1);
				}
			}return k = null, a;
		}, e = fa.getText = function (a) {
			var b,
			    c = "",
			    d = 0,
			    f = a.nodeType;if (f) {
				if (1 === f || 9 === f || 11 === f) {
					if ("string" == typeof a.textContent) return a.textContent;for (a = a.firstChild; a; a = a.nextSibling) {
						c += e(a);
					}
				} else if (3 === f || 4 === f) return a.nodeValue;
			} else while (b = a[d++]) {
				c += e(b);
			}return c;
		}, d = fa.selectors = { cacheLength: 50, createPseudo: ha, match: W, attrHandle: {}, find: {}, relative: { ">": { dir: "parentNode", first: !0 }, " ": { dir: "parentNode" }, "+": { dir: "previousSibling", first: !0 }, "~": { dir: "previousSibling" } }, preFilter: { ATTR: function ATTR(a) {
					return a[1] = a[1].replace(ba, ca), a[3] = (a[3] || a[4] || a[5] || "").replace(ba, ca), "~=" === a[2] && (a[3] = " " + a[3] + " "), a.slice(0, 4);
				}, CHILD: function CHILD(a) {
					return a[1] = a[1].toLowerCase(), "nth" === a[1].slice(0, 3) ? (a[3] || fa.error(a[0]), a[4] = +(a[4] ? a[5] + (a[6] || 1) : 2 * ("even" === a[3] || "odd" === a[3])), a[5] = +(a[7] + a[8] || "odd" === a[3])) : a[3] && fa.error(a[0]), a;
				}, PSEUDO: function PSEUDO(a) {
					var b,
					    c = !a[6] && a[2];return W.CHILD.test(a[0]) ? null : (a[3] ? a[2] = a[4] || a[5] || "" : c && U.test(c) && (b = g(c, !0)) && (b = c.indexOf(")", c.length - b) - c.length) && (a[0] = a[0].slice(0, b), a[2] = c.slice(0, b)), a.slice(0, 3));
				} }, filter: { TAG: function TAG(a) {
					var b = a.replace(ba, ca).toLowerCase();return "*" === a ? function () {
						return !0;
					} : function (a) {
						return a.nodeName && a.nodeName.toLowerCase() === b;
					};
				}, CLASS: function CLASS(a) {
					var b = y[a + " "];return b || (b = new RegExp("(^|" + L + ")" + a + "(" + L + "|$)")) && y(a, function (a) {
						return b.test("string" == typeof a.className && a.className || "undefined" != typeof a.getAttribute && a.getAttribute("class") || "");
					});
				}, ATTR: function ATTR(a, b, c) {
					return function (d) {
						var e = fa.attr(d, a);return null == e ? "!=" === b : b ? (e += "", "=" === b ? e === c : "!=" === b ? e !== c : "^=" === b ? c && 0 === e.indexOf(c) : "*=" === b ? c && e.indexOf(c) > -1 : "$=" === b ? c && e.slice(-c.length) === c : "~=" === b ? (" " + e.replace(P, " ") + " ").indexOf(c) > -1 : "|=" === b ? e === c || e.slice(0, c.length + 1) === c + "-" : !1) : !0;
					};
				}, CHILD: function CHILD(a, b, c, d, e) {
					var f = "nth" !== a.slice(0, 3),
					    g = "last" !== a.slice(-4),
					    h = "of-type" === b;return 1 === d && 0 === e ? function (a) {
						return !!a.parentNode;
					} : function (b, c, i) {
						var j,
						    k,
						    l,
						    m,
						    n,
						    o,
						    p = f !== g ? "nextSibling" : "previousSibling",
						    q = b.parentNode,
						    r = h && b.nodeName.toLowerCase(),
						    s = !i && !h,
						    t = !1;if (q) {
							if (f) {
								while (p) {
									m = b;while (m = m[p]) {
										if (h ? m.nodeName.toLowerCase() === r : 1 === m.nodeType) return !1;
									}o = p = "only" === a && !o && "nextSibling";
								}return !0;
							}if (o = [g ? q.firstChild : q.lastChild], g && s) {
								m = q, l = m[u] || (m[u] = {}), k = l[m.uniqueID] || (l[m.uniqueID] = {}), j = k[a] || [], n = j[0] === w && j[1], t = n && j[2], m = n && q.childNodes[n];while (m = ++n && m && m[p] || (t = n = 0) || o.pop()) {
									if (1 === m.nodeType && ++t && m === b) {
										k[a] = [w, n, t];break;
									}
								}
							} else if (s && (m = b, l = m[u] || (m[u] = {}), k = l[m.uniqueID] || (l[m.uniqueID] = {}), j = k[a] || [], n = j[0] === w && j[1], t = n), t === !1) while (m = ++n && m && m[p] || (t = n = 0) || o.pop()) {
								if ((h ? m.nodeName.toLowerCase() === r : 1 === m.nodeType) && ++t && (s && (l = m[u] || (m[u] = {}), k = l[m.uniqueID] || (l[m.uniqueID] = {}), k[a] = [w, t]), m === b)) break;
							}return t -= e, t === d || t % d === 0 && t / d >= 0;
						}
					};
				}, PSEUDO: function PSEUDO(a, b) {
					var c,
					    e = d.pseudos[a] || d.setFilters[a.toLowerCase()] || fa.error("unsupported pseudo: " + a);return e[u] ? e(b) : e.length > 1 ? (c = [a, a, "", b], d.setFilters.hasOwnProperty(a.toLowerCase()) ? ha(function (a, c) {
						var d,
						    f = e(a, b),
						    g = f.length;while (g--) {
							d = J(a, f[g]), a[d] = !(c[d] = f[g]);
						}
					}) : function (a) {
						return e(a, 0, c);
					}) : e;
				} }, pseudos: { not: ha(function (a) {
					var b = [],
					    c = [],
					    d = h(a.replace(Q, "$1"));return d[u] ? ha(function (a, b, c, e) {
						var f,
						    g = d(a, null, e, []),
						    h = a.length;while (h--) {
							(f = g[h]) && (a[h] = !(b[h] = f));
						}
					}) : function (a, e, f) {
						return b[0] = a, d(b, null, f, c), b[0] = null, !c.pop();
					};
				}), has: ha(function (a) {
					return function (b) {
						return fa(a, b).length > 0;
					};
				}), contains: ha(function (a) {
					return a = a.replace(ba, ca), function (b) {
						return (b.textContent || b.innerText || e(b)).indexOf(a) > -1;
					};
				}), lang: ha(function (a) {
					return V.test(a || "") || fa.error("unsupported lang: " + a), a = a.replace(ba, ca).toLowerCase(), function (b) {
						var c;do {
							if (c = p ? b.lang : b.getAttribute("xml:lang") || b.getAttribute("lang")) return c = c.toLowerCase(), c === a || 0 === c.indexOf(a + "-");
						} while ((b = b.parentNode) && 1 === b.nodeType);return !1;
					};
				}), target: function target(b) {
					var c = a.location && a.location.hash;return c && c.slice(1) === b.id;
				}, root: function root(a) {
					return a === o;
				}, focus: function focus(a) {
					return a === n.activeElement && (!n.hasFocus || n.hasFocus()) && !!(a.type || a.href || ~a.tabIndex);
				}, enabled: function enabled(a) {
					return a.disabled === !1;
				}, disabled: function disabled(a) {
					return a.disabled === !0;
				}, checked: function checked(a) {
					var b = a.nodeName.toLowerCase();return "input" === b && !!a.checked || "option" === b && !!a.selected;
				}, selected: function selected(a) {
					return a.parentNode && a.parentNode.selectedIndex, a.selected === !0;
				}, empty: function empty(a) {
					for (a = a.firstChild; a; a = a.nextSibling) {
						if (a.nodeType < 6) return !1;
					}return !0;
				}, parent: function parent(a) {
					return !d.pseudos.empty(a);
				}, header: function header(a) {
					return Y.test(a.nodeName);
				}, input: function input(a) {
					return X.test(a.nodeName);
				}, button: function button(a) {
					var b = a.nodeName.toLowerCase();return "input" === b && "button" === a.type || "button" === b;
				}, text: function text(a) {
					var b;return "input" === a.nodeName.toLowerCase() && "text" === a.type && (null == (b = a.getAttribute("type")) || "text" === b.toLowerCase());
				}, first: na(function () {
					return [0];
				}), last: na(function (a, b) {
					return [b - 1];
				}), eq: na(function (a, b, c) {
					return [0 > c ? c + b : c];
				}), even: na(function (a, b) {
					for (var c = 0; b > c; c += 2) {
						a.push(c);
					}return a;
				}), odd: na(function (a, b) {
					for (var c = 1; b > c; c += 2) {
						a.push(c);
					}return a;
				}), lt: na(function (a, b, c) {
					for (var d = 0 > c ? c + b : c; --d >= 0;) {
						a.push(d);
					}return a;
				}), gt: na(function (a, b, c) {
					for (var d = 0 > c ? c + b : c; ++d < b;) {
						a.push(d);
					}return a;
				}) } }, d.pseudos.nth = d.pseudos.eq;for (b in { radio: !0, checkbox: !0, file: !0, password: !0, image: !0 }) {
			d.pseudos[b] = la(b);
		}for (b in { submit: !0, reset: !0 }) {
			d.pseudos[b] = ma(b);
		}function pa() {}pa.prototype = d.filters = d.pseudos, d.setFilters = new pa(), g = fa.tokenize = function (a, b) {
			var c,
			    e,
			    f,
			    g,
			    h,
			    i,
			    j,
			    k = z[a + " "];if (k) return b ? 0 : k.slice(0);h = a, i = [], j = d.preFilter;while (h) {
				(!c || (e = R.exec(h))) && (e && (h = h.slice(e[0].length) || h), i.push(f = [])), c = !1, (e = S.exec(h)) && (c = e.shift(), f.push({ value: c, type: e[0].replace(Q, " ") }), h = h.slice(c.length));for (g in d.filter) {
					!(e = W[g].exec(h)) || j[g] && !(e = j[g](e)) || (c = e.shift(), f.push({ value: c, type: g, matches: e }), h = h.slice(c.length));
				}if (!c) break;
			}return b ? h.length : h ? fa.error(a) : z(a, i).slice(0);
		};function qa(a) {
			for (var b = 0, c = a.length, d = ""; c > b; b++) {
				d += a[b].value;
			}return d;
		}function ra(a, b, c) {
			var d = b.dir,
			    e = c && "parentNode" === d,
			    f = x++;return b.first ? function (b, c, f) {
				while (b = b[d]) {
					if (1 === b.nodeType || e) return a(b, c, f);
				}
			} : function (b, c, g) {
				var h,
				    i,
				    j,
				    k = [w, f];if (g) {
					while (b = b[d]) {
						if ((1 === b.nodeType || e) && a(b, c, g)) return !0;
					}
				} else while (b = b[d]) {
					if (1 === b.nodeType || e) {
						if (j = b[u] || (b[u] = {}), i = j[b.uniqueID] || (j[b.uniqueID] = {}), (h = i[d]) && h[0] === w && h[1] === f) return k[2] = h[2];if (i[d] = k, k[2] = a(b, c, g)) return !0;
					}
				}
			};
		}function sa(a) {
			return a.length > 1 ? function (b, c, d) {
				var e = a.length;while (e--) {
					if (!a[e](b, c, d)) return !1;
				}return !0;
			} : a[0];
		}function ta(a, b, c) {
			for (var d = 0, e = b.length; e > d; d++) {
				fa(a, b[d], c);
			}return c;
		}function ua(a, b, c, d, e) {
			for (var f, g = [], h = 0, i = a.length, j = null != b; i > h; h++) {
				(f = a[h]) && (!c || c(f, d, e)) && (g.push(f), j && b.push(h));
			}return g;
		}function va(a, b, c, d, e, f) {
			return d && !d[u] && (d = va(d)), e && !e[u] && (e = va(e, f)), ha(function (f, g, h, i) {
				var j,
				    k,
				    l,
				    m = [],
				    n = [],
				    o = g.length,
				    p = f || ta(b || "*", h.nodeType ? [h] : h, []),
				    q = !a || !f && b ? p : ua(p, m, a, h, i),
				    r = c ? e || (f ? a : o || d) ? [] : g : q;if (c && c(q, r, h, i), d) {
					j = ua(r, n), d(j, [], h, i), k = j.length;while (k--) {
						(l = j[k]) && (r[n[k]] = !(q[n[k]] = l));
					}
				}if (f) {
					if (e || a) {
						if (e) {
							j = [], k = r.length;while (k--) {
								(l = r[k]) && j.push(q[k] = l);
							}e(null, r = [], j, i);
						}k = r.length;while (k--) {
							(l = r[k]) && (j = e ? J(f, l) : m[k]) > -1 && (f[j] = !(g[j] = l));
						}
					}
				} else r = ua(r === g ? r.splice(o, r.length) : r), e ? e(null, g, r, i) : H.apply(g, r);
			});
		}function wa(a) {
			for (var b, c, e, f = a.length, g = d.relative[a[0].type], h = g || d.relative[" "], i = g ? 1 : 0, k = ra(function (a) {
				return a === b;
			}, h, !0), l = ra(function (a) {
				return J(b, a) > -1;
			}, h, !0), m = [function (a, c, d) {
				var e = !g && (d || c !== j) || ((b = c).nodeType ? k(a, c, d) : l(a, c, d));return b = null, e;
			}]; f > i; i++) {
				if (c = d.relative[a[i].type]) m = [ra(sa(m), c)];else {
					if (c = d.filter[a[i].type].apply(null, a[i].matches), c[u]) {
						for (e = ++i; f > e; e++) {
							if (d.relative[a[e].type]) break;
						}return va(i > 1 && sa(m), i > 1 && qa(a.slice(0, i - 1).concat({ value: " " === a[i - 2].type ? "*" : "" })).replace(Q, "$1"), c, e > i && wa(a.slice(i, e)), f > e && wa(a = a.slice(e)), f > e && qa(a));
					}m.push(c);
				}
			}return sa(m);
		}function xa(a, b) {
			var c = b.length > 0,
			    e = a.length > 0,
			    f = function f(_f, g, h, i, k) {
				var l,
				    o,
				    q,
				    r = 0,
				    s = "0",
				    t = _f && [],
				    u = [],
				    v = j,
				    x = _f || e && d.find.TAG("*", k),
				    y = w += null == v ? 1 : Math.random() || .1,
				    z = x.length;for (k && (j = g === n || g || k); s !== z && null != (l = x[s]); s++) {
					if (e && l) {
						o = 0, g || l.ownerDocument === n || (m(l), h = !p);while (q = a[o++]) {
							if (q(l, g || n, h)) {
								i.push(l);break;
							}
						}k && (w = y);
					}c && ((l = !q && l) && r--, _f && t.push(l));
				}if (r += s, c && s !== r) {
					o = 0;while (q = b[o++]) {
						q(t, u, g, h);
					}if (_f) {
						if (r > 0) while (s--) {
							t[s] || u[s] || (u[s] = F.call(i));
						}u = ua(u);
					}H.apply(i, u), k && !_f && u.length > 0 && r + b.length > 1 && fa.uniqueSort(i);
				}return k && (w = y, j = v), t;
			};return c ? ha(f) : f;
		}return h = fa.compile = function (a, b) {
			var c,
			    d = [],
			    e = [],
			    f = A[a + " "];if (!f) {
				b || (b = g(a)), c = b.length;while (c--) {
					f = wa(b[c]), f[u] ? d.push(f) : e.push(f);
				}f = A(a, xa(e, d)), f.selector = a;
			}return f;
		}, i = fa.select = function (a, b, e, f) {
			var i,
			    j,
			    k,
			    l,
			    m,
			    n = "function" == typeof a && a,
			    o = !f && g(a = n.selector || a);if (e = e || [], 1 === o.length) {
				if (j = o[0] = o[0].slice(0), j.length > 2 && "ID" === (k = j[0]).type && c.getById && 9 === b.nodeType && p && d.relative[j[1].type]) {
					if (b = (d.find.ID(k.matches[0].replace(ba, ca), b) || [])[0], !b) return e;n && (b = b.parentNode), a = a.slice(j.shift().value.length);
				}i = W.needsContext.test(a) ? 0 : j.length;while (i--) {
					if (k = j[i], d.relative[l = k.type]) break;if ((m = d.find[l]) && (f = m(k.matches[0].replace(ba, ca), _.test(j[0].type) && oa(b.parentNode) || b))) {
						if (j.splice(i, 1), a = f.length && qa(j), !a) return H.apply(e, f), e;break;
					}
				}
			}return (n || h(a, o))(f, b, !p, e, !b || _.test(a) && oa(b.parentNode) || b), e;
		}, c.sortStable = u.split("").sort(B).join("") === u, c.detectDuplicates = !!l, m(), c.sortDetached = ia(function (a) {
			return 1 & a.compareDocumentPosition(n.createElement("div"));
		}), ia(function (a) {
			return a.innerHTML = "<a href='#'></a>", "#" === a.firstChild.getAttribute("href");
		}) || ja("type|href|height|width", function (a, b, c) {
			return c ? void 0 : a.getAttribute(b, "type" === b.toLowerCase() ? 1 : 2);
		}), c.attributes && ia(function (a) {
			return a.innerHTML = "<input/>", a.firstChild.setAttribute("value", ""), "" === a.firstChild.getAttribute("value");
		}) || ja("value", function (a, b, c) {
			return c || "input" !== a.nodeName.toLowerCase() ? void 0 : a.defaultValue;
		}), ia(function (a) {
			return null == a.getAttribute("disabled");
		}) || ja(K, function (a, b, c) {
			var d;return c ? void 0 : a[b] === !0 ? b.toLowerCase() : (d = a.getAttributeNode(b)) && d.specified ? d.value : null;
		}), fa;
	}(a);n.find = t, n.expr = t.selectors, n.expr[":"] = n.expr.pseudos, n.uniqueSort = n.unique = t.uniqueSort, n.text = t.getText, n.isXMLDoc = t.isXML, n.contains = t.contains;var u = function u(a, b, c) {
		var d = [],
		    e = void 0 !== c;while ((a = a[b]) && 9 !== a.nodeType) {
			if (1 === a.nodeType) {
				if (e && n(a).is(c)) break;d.push(a);
			}
		}return d;
	},
	    v = function v(a, b) {
		for (var c = []; a; a = a.nextSibling) {
			1 === a.nodeType && a !== b && c.push(a);
		}return c;
	},
	    w = n.expr.match.needsContext,
	    x = /^<([\w-]+)\s*\/?>(?:<\/\1>|)$/,
	    y = /^.[^:#\[\.,]*$/;function z(a, b, c) {
		if (n.isFunction(b)) return n.grep(a, function (a, d) {
			return !!b.call(a, d, a) !== c;
		});if (b.nodeType) return n.grep(a, function (a) {
			return a === b !== c;
		});if ("string" == typeof b) {
			if (y.test(b)) return n.filter(b, a, c);b = n.filter(b, a);
		}return n.grep(a, function (a) {
			return n.inArray(a, b) > -1 !== c;
		});
	}n.filter = function (a, b, c) {
		var d = b[0];return c && (a = ":not(" + a + ")"), 1 === b.length && 1 === d.nodeType ? n.find.matchesSelector(d, a) ? [d] : [] : n.find.matches(a, n.grep(b, function (a) {
			return 1 === a.nodeType;
		}));
	}, n.fn.extend({ find: function find(a) {
			var b,
			    c = [],
			    d = this,
			    e = d.length;if ("string" != typeof a) return this.pushStack(n(a).filter(function () {
				for (b = 0; e > b; b++) {
					if (n.contains(d[b], this)) return !0;
				}
			}));for (b = 0; e > b; b++) {
				n.find(a, d[b], c);
			}return c = this.pushStack(e > 1 ? n.unique(c) : c), c.selector = this.selector ? this.selector + " " + a : a, c;
		}, filter: function filter(a) {
			return this.pushStack(z(this, a || [], !1));
		}, not: function not(a) {
			return this.pushStack(z(this, a || [], !0));
		}, is: function is(a) {
			return !!z(this, "string" == typeof a && w.test(a) ? n(a) : a || [], !1).length;
		} });var A,
	    B = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,
	    C = n.fn.init = function (a, b, c) {
		var e, f;if (!a) return this;if (c = c || A, "string" == typeof a) {
			if (e = "<" === a.charAt(0) && ">" === a.charAt(a.length - 1) && a.length >= 3 ? [null, a, null] : B.exec(a), !e || !e[1] && b) return !b || b.jquery ? (b || c).find(a) : this.constructor(b).find(a);if (e[1]) {
				if (b = b instanceof n ? b[0] : b, n.merge(this, n.parseHTML(e[1], b && b.nodeType ? b.ownerDocument || b : d, !0)), x.test(e[1]) && n.isPlainObject(b)) for (e in b) {
					n.isFunction(this[e]) ? this[e](b[e]) : this.attr(e, b[e]);
				}return this;
			}if (f = d.getElementById(e[2]), f && f.parentNode) {
				if (f.id !== e[2]) return A.find(a);this.length = 1, this[0] = f;
			}return this.context = d, this.selector = a, this;
		}return a.nodeType ? (this.context = this[0] = a, this.length = 1, this) : n.isFunction(a) ? "undefined" != typeof c.ready ? c.ready(a) : a(n) : (void 0 !== a.selector && (this.selector = a.selector, this.context = a.context), n.makeArray(a, this));
	};C.prototype = n.fn, A = n(d);var D = /^(?:parents|prev(?:Until|All))/,
	    E = { children: !0, contents: !0, next: !0, prev: !0 };n.fn.extend({ has: function has(a) {
			var b,
			    c = n(a, this),
			    d = c.length;return this.filter(function () {
				for (b = 0; d > b; b++) {
					if (n.contains(this, c[b])) return !0;
				}
			});
		}, closest: function closest(a, b) {
			for (var c, d = 0, e = this.length, f = [], g = w.test(a) || "string" != typeof a ? n(a, b || this.context) : 0; e > d; d++) {
				for (c = this[d]; c && c !== b; c = c.parentNode) {
					if (c.nodeType < 11 && (g ? g.index(c) > -1 : 1 === c.nodeType && n.find.matchesSelector(c, a))) {
						f.push(c);break;
					}
				}
			}return this.pushStack(f.length > 1 ? n.uniqueSort(f) : f);
		}, index: function index(a) {
			return a ? "string" == typeof a ? n.inArray(this[0], n(a)) : n.inArray(a.jquery ? a[0] : a, this) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1;
		}, add: function add(a, b) {
			return this.pushStack(n.uniqueSort(n.merge(this.get(), n(a, b))));
		}, addBack: function addBack(a) {
			return this.add(null == a ? this.prevObject : this.prevObject.filter(a));
		} });function F(a, b) {
		do {
			a = a[b];
		} while (a && 1 !== a.nodeType);return a;
	}n.each({ parent: function parent(a) {
			var b = a.parentNode;return b && 11 !== b.nodeType ? b : null;
		}, parents: function parents(a) {
			return u(a, "parentNode");
		}, parentsUntil: function parentsUntil(a, b, c) {
			return u(a, "parentNode", c);
		}, next: function next(a) {
			return F(a, "nextSibling");
		}, prev: function prev(a) {
			return F(a, "previousSibling");
		}, nextAll: function nextAll(a) {
			return u(a, "nextSibling");
		}, prevAll: function prevAll(a) {
			return u(a, "previousSibling");
		}, nextUntil: function nextUntil(a, b, c) {
			return u(a, "nextSibling", c);
		}, prevUntil: function prevUntil(a, b, c) {
			return u(a, "previousSibling", c);
		}, siblings: function siblings(a) {
			return v((a.parentNode || {}).firstChild, a);
		}, children: function children(a) {
			return v(a.firstChild);
		}, contents: function contents(a) {
			return n.nodeName(a, "iframe") ? a.contentDocument || a.contentWindow.document : n.merge([], a.childNodes);
		} }, function (a, b) {
		n.fn[a] = function (c, d) {
			var e = n.map(this, b, c);return "Until" !== a.slice(-5) && (d = c), d && "string" == typeof d && (e = n.filter(d, e)), this.length > 1 && (E[a] || (e = n.uniqueSort(e)), D.test(a) && (e = e.reverse())), this.pushStack(e);
		};
	});var G = /\S+/g;function H(a) {
		var b = {};return n.each(a.match(G) || [], function (a, c) {
			b[c] = !0;
		}), b;
	}n.Callbacks = function (a) {
		a = "string" == typeof a ? H(a) : n.extend({}, a);var b,
		    c,
		    d,
		    e,
		    f = [],
		    g = [],
		    h = -1,
		    i = function i() {
			for (e = a.once, d = b = !0; g.length; h = -1) {
				c = g.shift();while (++h < f.length) {
					f[h].apply(c[0], c[1]) === !1 && a.stopOnFalse && (h = f.length, c = !1);
				}
			}a.memory || (c = !1), b = !1, e && (f = c ? [] : "");
		},
		    j = { add: function add() {
				return f && (c && !b && (h = f.length - 1, g.push(c)), function d(b) {
					n.each(b, function (b, c) {
						n.isFunction(c) ? a.unique && j.has(c) || f.push(c) : c && c.length && "string" !== n.type(c) && d(c);
					});
				}(arguments), c && !b && i()), this;
			}, remove: function remove() {
				return n.each(arguments, function (a, b) {
					var c;while ((c = n.inArray(b, f, c)) > -1) {
						f.splice(c, 1), h >= c && h--;
					}
				}), this;
			}, has: function has(a) {
				return a ? n.inArray(a, f) > -1 : f.length > 0;
			}, empty: function empty() {
				return f && (f = []), this;
			}, disable: function disable() {
				return e = g = [], f = c = "", this;
			}, disabled: function disabled() {
				return !f;
			}, lock: function lock() {
				return e = !0, c || j.disable(), this;
			}, locked: function locked() {
				return !!e;
			}, fireWith: function fireWith(a, c) {
				return e || (c = c || [], c = [a, c.slice ? c.slice() : c], g.push(c), b || i()), this;
			}, fire: function fire() {
				return j.fireWith(this, arguments), this;
			}, fired: function fired() {
				return !!d;
			} };return j;
	}, n.extend({ Deferred: function Deferred(a) {
			var b = [["resolve", "done", n.Callbacks("once memory"), "resolved"], ["reject", "fail", n.Callbacks("once memory"), "rejected"], ["notify", "progress", n.Callbacks("memory")]],
			    c = "pending",
			    d = { state: function state() {
					return c;
				}, always: function always() {
					return e.done(arguments).fail(arguments), this;
				}, then: function then() {
					var a = arguments;return n.Deferred(function (c) {
						n.each(b, function (b, f) {
							var g = n.isFunction(a[b]) && a[b];e[f[1]](function () {
								var a = g && g.apply(this, arguments);a && n.isFunction(a.promise) ? a.promise().progress(c.notify).done(c.resolve).fail(c.reject) : c[f[0] + "With"](this === d ? c.promise() : this, g ? [a] : arguments);
							});
						}), a = null;
					}).promise();
				}, promise: function promise(a) {
					return null != a ? n.extend(a, d) : d;
				} },
			    e = {};return d.pipe = d.then, n.each(b, function (a, f) {
				var g = f[2],
				    h = f[3];d[f[1]] = g.add, h && g.add(function () {
					c = h;
				}, b[1 ^ a][2].disable, b[2][2].lock), e[f[0]] = function () {
					return e[f[0] + "With"](this === e ? d : this, arguments), this;
				}, e[f[0] + "With"] = g.fireWith;
			}), d.promise(e), a && a.call(e, e), e;
		}, when: function when(a) {
			var b = 0,
			    c = e.call(arguments),
			    d = c.length,
			    f = 1 !== d || a && n.isFunction(a.promise) ? d : 0,
			    g = 1 === f ? a : n.Deferred(),
			    h = function h(a, b, c) {
				return function (d) {
					b[a] = this, c[a] = arguments.length > 1 ? e.call(arguments) : d, c === i ? g.notifyWith(b, c) : --f || g.resolveWith(b, c);
				};
			},
			    i,
			    j,
			    k;if (d > 1) for (i = new Array(d), j = new Array(d), k = new Array(d); d > b; b++) {
				c[b] && n.isFunction(c[b].promise) ? c[b].promise().progress(h(b, j, i)).done(h(b, k, c)).fail(g.reject) : --f;
			}return f || g.resolveWith(k, c), g.promise();
		} });var I;n.fn.ready = function (a) {
		return n.ready.promise().done(a), this;
	}, n.extend({ isReady: !1, readyWait: 1, holdReady: function holdReady(a) {
			a ? n.readyWait++ : n.ready(!0);
		}, ready: function ready(a) {
			(a === !0 ? --n.readyWait : n.isReady) || (n.isReady = !0, a !== !0 && --n.readyWait > 0 || (I.resolveWith(d, [n]), n.fn.triggerHandler && (n(d).triggerHandler("ready"), n(d).off("ready"))));
		} });function J() {
		d.addEventListener ? (d.removeEventListener("DOMContentLoaded", K), a.removeEventListener("load", K)) : (d.detachEvent("onreadystatechange", K), a.detachEvent("onload", K));
	}function K() {
		(d.addEventListener || "load" === a.event.type || "complete" === d.readyState) && (J(), n.ready());
	}n.ready.promise = function (b) {
		if (!I) if (I = n.Deferred(), "complete" === d.readyState) a.setTimeout(n.ready);else if (d.addEventListener) d.addEventListener("DOMContentLoaded", K), a.addEventListener("load", K);else {
			d.attachEvent("onreadystatechange", K), a.attachEvent("onload", K);var c = !1;try {
				c = null == a.frameElement && d.documentElement;
			} catch (e) {}c && c.doScroll && !function f() {
				if (!n.isReady) {
					try {
						c.doScroll("left");
					} catch (b) {
						return a.setTimeout(f, 50);
					}J(), n.ready();
				}
			}();
		}return I.promise(b);
	}, n.ready.promise();var L;for (L in n(l)) {
		break;
	}l.ownFirst = "0" === L, l.inlineBlockNeedsLayout = !1, n(function () {
		var a, b, c, e;c = d.getElementsByTagName("body")[0], c && c.style && (b = d.createElement("div"), e = d.createElement("div"), e.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", c.appendChild(e).appendChild(b), "undefined" != typeof b.style.zoom && (b.style.cssText = "display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1", l.inlineBlockNeedsLayout = a = 3 === b.offsetWidth, a && (c.style.zoom = 1)), c.removeChild(e));
	}), function () {
		var a = d.createElement("div");l.deleteExpando = !0;try {
			delete a.test;
		} catch (b) {
			l.deleteExpando = !1;
		}a = null;
	}();var M = function M(a) {
		var b = n.noData[(a.nodeName + " ").toLowerCase()],
		    c = +a.nodeType || 1;return 1 !== c && 9 !== c ? !1 : !b || b !== !0 && a.getAttribute("classid") === b;
	},
	    N = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
	    O = /([A-Z])/g;function P(a, b, c) {
		if (void 0 === c && 1 === a.nodeType) {
			var d = "data-" + b.replace(O, "-$1").toLowerCase();if (c = a.getAttribute(d), "string" == typeof c) {
				try {
					c = "true" === c ? !0 : "false" === c ? !1 : "null" === c ? null : +c + "" === c ? +c : N.test(c) ? n.parseJSON(c) : c;
				} catch (e) {}n.data(a, b, c);
			} else c = void 0;
		}return c;
	}function Q(a) {
		var b;for (b in a) {
			if (("data" !== b || !n.isEmptyObject(a[b])) && "toJSON" !== b) return !1;
		}return !0;
	}function R(a, b, d, e) {
		if (M(a)) {
			var f,
			    g,
			    h = n.expando,
			    i = a.nodeType,
			    j = i ? n.cache : a,
			    k = i ? a[h] : a[h] && h;if (k && j[k] && (e || j[k].data) || void 0 !== d || "string" != typeof b) return k || (k = i ? a[h] = c.pop() || n.guid++ : h), j[k] || (j[k] = i ? {} : { toJSON: n.noop }), ("object" == (typeof b === "undefined" ? "undefined" : _typeof(b)) || "function" == typeof b) && (e ? j[k] = n.extend(j[k], b) : j[k].data = n.extend(j[k].data, b)), g = j[k], e || (g.data || (g.data = {}), g = g.data), void 0 !== d && (g[n.camelCase(b)] = d), "string" == typeof b ? (f = g[b], null == f && (f = g[n.camelCase(b)])) : f = g, f;
		}
	}function S(a, b, c) {
		if (M(a)) {
			var d,
			    e,
			    f = a.nodeType,
			    g = f ? n.cache : a,
			    h = f ? a[n.expando] : n.expando;if (g[h]) {
				if (b && (d = c ? g[h] : g[h].data)) {
					n.isArray(b) ? b = b.concat(n.map(b, n.camelCase)) : b in d ? b = [b] : (b = n.camelCase(b), b = b in d ? [b] : b.split(" ")), e = b.length;while (e--) {
						delete d[b[e]];
					}if (c ? !Q(d) : !n.isEmptyObject(d)) return;
				}(c || (delete g[h].data, Q(g[h]))) && (f ? n.cleanData([a], !0) : l.deleteExpando || g != g.window ? delete g[h] : g[h] = void 0);
			}
		}
	}n.extend({ cache: {}, noData: { "applet ": !0, "embed ": !0, "object ": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" }, hasData: function hasData(a) {
			return a = a.nodeType ? n.cache[a[n.expando]] : a[n.expando], !!a && !Q(a);
		}, data: function data(a, b, c) {
			return R(a, b, c);
		}, removeData: function removeData(a, b) {
			return S(a, b);
		}, _data: function _data(a, b, c) {
			return R(a, b, c, !0);
		}, _removeData: function _removeData(a, b) {
			return S(a, b, !0);
		} }), n.fn.extend({ data: function data(a, b) {
			var c,
			    d,
			    e,
			    f = this[0],
			    g = f && f.attributes;if (void 0 === a) {
				if (this.length && (e = n.data(f), 1 === f.nodeType && !n._data(f, "parsedAttrs"))) {
					c = g.length;while (c--) {
						g[c] && (d = g[c].name, 0 === d.indexOf("data-") && (d = n.camelCase(d.slice(5)), P(f, d, e[d])));
					}n._data(f, "parsedAttrs", !0);
				}return e;
			}return "object" == (typeof a === "undefined" ? "undefined" : _typeof(a)) ? this.each(function () {
				n.data(this, a);
			}) : arguments.length > 1 ? this.each(function () {
				n.data(this, a, b);
			}) : f ? P(f, a, n.data(f, a)) : void 0;
		}, removeData: function removeData(a) {
			return this.each(function () {
				n.removeData(this, a);
			});
		} }), n.extend({ queue: function queue(a, b, c) {
			var d;return a ? (b = (b || "fx") + "queue", d = n._data(a, b), c && (!d || n.isArray(c) ? d = n._data(a, b, n.makeArray(c)) : d.push(c)), d || []) : void 0;
		}, dequeue: function dequeue(a, b) {
			b = b || "fx";var c = n.queue(a, b),
			    d = c.length,
			    e = c.shift(),
			    f = n._queueHooks(a, b),
			    g = function g() {
				n.dequeue(a, b);
			};"inprogress" === e && (e = c.shift(), d--), e && ("fx" === b && c.unshift("inprogress"), delete f.stop, e.call(a, g, f)), !d && f && f.empty.fire();
		}, _queueHooks: function _queueHooks(a, b) {
			var c = b + "queueHooks";return n._data(a, c) || n._data(a, c, { empty: n.Callbacks("once memory").add(function () {
					n._removeData(a, b + "queue"), n._removeData(a, c);
				}) });
		} }), n.fn.extend({ queue: function queue(a, b) {
			var c = 2;return "string" != typeof a && (b = a, a = "fx", c--), arguments.length < c ? n.queue(this[0], a) : void 0 === b ? this : this.each(function () {
				var c = n.queue(this, a, b);n._queueHooks(this, a), "fx" === a && "inprogress" !== c[0] && n.dequeue(this, a);
			});
		}, dequeue: function dequeue(a) {
			return this.each(function () {
				n.dequeue(this, a);
			});
		}, clearQueue: function clearQueue(a) {
			return this.queue(a || "fx", []);
		}, promise: function promise(a, b) {
			var c,
			    d = 1,
			    e = n.Deferred(),
			    f = this,
			    g = this.length,
			    h = function h() {
				--d || e.resolveWith(f, [f]);
			};"string" != typeof a && (b = a, a = void 0), a = a || "fx";while (g--) {
				c = n._data(f[g], a + "queueHooks"), c && c.empty && (d++, c.empty.add(h));
			}return h(), e.promise(b);
		} }), function () {
		var a;l.shrinkWrapBlocks = function () {
			if (null != a) return a;a = !1;var b, c, e;return c = d.getElementsByTagName("body")[0], c && c.style ? (b = d.createElement("div"), e = d.createElement("div"), e.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", c.appendChild(e).appendChild(b), "undefined" != typeof b.style.zoom && (b.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:1px;width:1px;zoom:1", b.appendChild(d.createElement("div")).style.width = "5px", a = 3 !== b.offsetWidth), c.removeChild(e), a) : void 0;
		};
	}();var T = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
	    U = new RegExp("^(?:([+-])=|)(" + T + ")([a-z%]*)$", "i"),
	    V = ["Top", "Right", "Bottom", "Left"],
	    W = function W(a, b) {
		return a = b || a, "none" === n.css(a, "display") || !n.contains(a.ownerDocument, a);
	};function X(a, b, c, d) {
		var e,
		    f = 1,
		    g = 20,
		    h = d ? function () {
			return d.cur();
		} : function () {
			return n.css(a, b, "");
		},
		    i = h(),
		    j = c && c[3] || (n.cssNumber[b] ? "" : "px"),
		    k = (n.cssNumber[b] || "px" !== j && +i) && U.exec(n.css(a, b));if (k && k[3] !== j) {
			j = j || k[3], c = c || [], k = +i || 1;do {
				f = f || ".5", k /= f, n.style(a, b, k + j);
			} while (f !== (f = h() / i) && 1 !== f && --g);
		}return c && (k = +k || +i || 0, e = c[1] ? k + (c[1] + 1) * c[2] : +c[2], d && (d.unit = j, d.start = k, d.end = e)), e;
	}var Y = function Y(a, b, c, d, e, f, g) {
		var h = 0,
		    i = a.length,
		    j = null == c;if ("object" === n.type(c)) {
			e = !0;for (h in c) {
				Y(a, b, h, c[h], !0, f, g);
			}
		} else if (void 0 !== d && (e = !0, n.isFunction(d) || (g = !0), j && (g ? (b.call(a, d), b = null) : (j = b, b = function b(a, _b2, c) {
			return j.call(n(a), c);
		})), b)) for (; i > h; h++) {
			b(a[h], c, g ? d : d.call(a[h], h, b(a[h], c)));
		}return e ? a : j ? b.call(a) : i ? b(a[0], c) : f;
	},
	    Z = /^(?:checkbox|radio)$/i,
	    $ = /<([\w:-]+)/,
	    _ = /^$|\/(?:java|ecma)script/i,
	    aa = /^\s+/,
	    ba = "abbr|article|aside|audio|bdi|canvas|data|datalist|details|dialog|figcaption|figure|footer|header|hgroup|main|mark|meter|nav|output|picture|progress|section|summary|template|time|video";function ca(a) {
		var b = ba.split("|"),
		    c = a.createDocumentFragment();if (c.createElement) while (b.length) {
			c.createElement(b.pop());
		}return c;
	}!function () {
		var a = d.createElement("div"),
		    b = d.createDocumentFragment(),
		    c = d.createElement("input");a.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", l.leadingWhitespace = 3 === a.firstChild.nodeType, l.tbody = !a.getElementsByTagName("tbody").length, l.htmlSerialize = !!a.getElementsByTagName("link").length, l.html5Clone = "<:nav></:nav>" !== d.createElement("nav").cloneNode(!0).outerHTML, c.type = "checkbox", c.checked = !0, b.appendChild(c), l.appendChecked = c.checked, a.innerHTML = "<textarea>x</textarea>", l.noCloneChecked = !!a.cloneNode(!0).lastChild.defaultValue, b.appendChild(a), c = d.createElement("input"), c.setAttribute("type", "radio"), c.setAttribute("checked", "checked"), c.setAttribute("name", "t"), a.appendChild(c), l.checkClone = a.cloneNode(!0).cloneNode(!0).lastChild.checked, l.noCloneEvent = !!a.addEventListener, a[n.expando] = 1, l.attributes = !a.getAttribute(n.expando);
	}();var da = { option: [1, "<select multiple='multiple'>", "</select>"], legend: [1, "<fieldset>", "</fieldset>"], area: [1, "<map>", "</map>"], param: [1, "<object>", "</object>"], thead: [1, "<table>", "</table>"], tr: [2, "<table><tbody>", "</tbody></table>"], col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"], td: [3, "<table><tbody><tr>", "</tr></tbody></table>"], _default: l.htmlSerialize ? [0, "", ""] : [1, "X<div>", "</div>"] };da.optgroup = da.option, da.tbody = da.tfoot = da.colgroup = da.caption = da.thead, da.th = da.td;function ea(a, b) {
		var c,
		    d,
		    e = 0,
		    f = "undefined" != typeof a.getElementsByTagName ? a.getElementsByTagName(b || "*") : "undefined" != typeof a.querySelectorAll ? a.querySelectorAll(b || "*") : void 0;if (!f) for (f = [], c = a.childNodes || a; null != (d = c[e]); e++) {
			!b || n.nodeName(d, b) ? f.push(d) : n.merge(f, ea(d, b));
		}return void 0 === b || b && n.nodeName(a, b) ? n.merge([a], f) : f;
	}function fa(a, b) {
		for (var c, d = 0; null != (c = a[d]); d++) {
			n._data(c, "globalEval", !b || n._data(b[d], "globalEval"));
		}
	}var ga = /<|&#?\w+;/,
	    ha = /<tbody/i;function ia(a) {
		Z.test(a.type) && (a.defaultChecked = a.checked);
	}function ja(a, b, c, d, e) {
		for (var f, g, h, i, j, k, m, o = a.length, p = ca(b), q = [], r = 0; o > r; r++) {
			if (g = a[r], g || 0 === g) if ("object" === n.type(g)) n.merge(q, g.nodeType ? [g] : g);else if (ga.test(g)) {
				i = i || p.appendChild(b.createElement("div")), j = ($.exec(g) || ["", ""])[1].toLowerCase(), m = da[j] || da._default, i.innerHTML = m[1] + n.htmlPrefilter(g) + m[2], f = m[0];while (f--) {
					i = i.lastChild;
				}if (!l.leadingWhitespace && aa.test(g) && q.push(b.createTextNode(aa.exec(g)[0])), !l.tbody) {
					g = "table" !== j || ha.test(g) ? "<table>" !== m[1] || ha.test(g) ? 0 : i : i.firstChild, f = g && g.childNodes.length;while (f--) {
						n.nodeName(k = g.childNodes[f], "tbody") && !k.childNodes.length && g.removeChild(k);
					}
				}n.merge(q, i.childNodes), i.textContent = "";while (i.firstChild) {
					i.removeChild(i.firstChild);
				}i = p.lastChild;
			} else q.push(b.createTextNode(g));
		}i && p.removeChild(i), l.appendChecked || n.grep(ea(q, "input"), ia), r = 0;while (g = q[r++]) {
			if (d && n.inArray(g, d) > -1) e && e.push(g);else if (h = n.contains(g.ownerDocument, g), i = ea(p.appendChild(g), "script"), h && fa(i), c) {
				f = 0;while (g = i[f++]) {
					_.test(g.type || "") && c.push(g);
				}
			}
		}return i = null, p;
	}!function () {
		var b,
		    c,
		    e = d.createElement("div");for (b in { submit: !0, change: !0, focusin: !0 }) {
			c = "on" + b, (l[b] = c in a) || (e.setAttribute(c, "t"), l[b] = e.attributes[c].expando === !1);
		}e = null;
	}();var ka = /^(?:input|select|textarea)$/i,
	    la = /^key/,
	    ma = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
	    na = /^(?:focusinfocus|focusoutblur)$/,
	    oa = /^([^.]*)(?:\.(.+)|)/;function pa() {
		return !0;
	}function qa() {
		return !1;
	}function ra() {
		try {
			return d.activeElement;
		} catch (a) {}
	}function sa(a, b, c, d, e, f) {
		var g, h;if ("object" == (typeof b === "undefined" ? "undefined" : _typeof(b))) {
			"string" != typeof c && (d = d || c, c = void 0);for (h in b) {
				sa(a, h, c, d, b[h], f);
			}return a;
		}if (null == d && null == e ? (e = c, d = c = void 0) : null == e && ("string" == typeof c ? (e = d, d = void 0) : (e = d, d = c, c = void 0)), e === !1) e = qa;else if (!e) return a;return 1 === f && (g = e, e = function e(a) {
			return n().off(a), g.apply(this, arguments);
		}, e.guid = g.guid || (g.guid = n.guid++)), a.each(function () {
			n.event.add(this, b, e, d, c);
		});
	}n.event = { global: {}, add: function add(a, b, c, d, e) {
			var f,
			    g,
			    h,
			    i,
			    j,
			    k,
			    l,
			    m,
			    o,
			    p,
			    q,
			    r = n._data(a);if (r) {
				c.handler && (i = c, c = i.handler, e = i.selector), c.guid || (c.guid = n.guid++), (g = r.events) || (g = r.events = {}), (k = r.handle) || (k = r.handle = function (a) {
					return "undefined" == typeof n || a && n.event.triggered === a.type ? void 0 : n.event.dispatch.apply(k.elem, arguments);
				}, k.elem = a), b = (b || "").match(G) || [""], h = b.length;while (h--) {
					f = oa.exec(b[h]) || [], o = q = f[1], p = (f[2] || "").split(".").sort(), o && (j = n.event.special[o] || {}, o = (e ? j.delegateType : j.bindType) || o, j = n.event.special[o] || {}, l = n.extend({ type: o, origType: q, data: d, handler: c, guid: c.guid, selector: e, needsContext: e && n.expr.match.needsContext.test(e), namespace: p.join(".") }, i), (m = g[o]) || (m = g[o] = [], m.delegateCount = 0, j.setup && j.setup.call(a, d, p, k) !== !1 || (a.addEventListener ? a.addEventListener(o, k, !1) : a.attachEvent && a.attachEvent("on" + o, k))), j.add && (j.add.call(a, l), l.handler.guid || (l.handler.guid = c.guid)), e ? m.splice(m.delegateCount++, 0, l) : m.push(l), n.event.global[o] = !0);
				}a = null;
			}
		}, remove: function remove(a, b, c, d, e) {
			var f,
			    g,
			    h,
			    i,
			    j,
			    k,
			    l,
			    m,
			    o,
			    p,
			    q,
			    r = n.hasData(a) && n._data(a);if (r && (k = r.events)) {
				b = (b || "").match(G) || [""], j = b.length;while (j--) {
					if (h = oa.exec(b[j]) || [], o = q = h[1], p = (h[2] || "").split(".").sort(), o) {
						l = n.event.special[o] || {}, o = (d ? l.delegateType : l.bindType) || o, m = k[o] || [], h = h[2] && new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)"), i = f = m.length;while (f--) {
							g = m[f], !e && q !== g.origType || c && c.guid !== g.guid || h && !h.test(g.namespace) || d && d !== g.selector && ("**" !== d || !g.selector) || (m.splice(f, 1), g.selector && m.delegateCount--, l.remove && l.remove.call(a, g));
						}i && !m.length && (l.teardown && l.teardown.call(a, p, r.handle) !== !1 || n.removeEvent(a, o, r.handle), delete k[o]);
					} else for (o in k) {
						n.event.remove(a, o + b[j], c, d, !0);
					}
				}n.isEmptyObject(k) && (delete r.handle, n._removeData(a, "events"));
			}
		}, trigger: function trigger(b, c, e, f) {
			var g,
			    h,
			    i,
			    j,
			    l,
			    m,
			    o,
			    p = [e || d],
			    q = k.call(b, "type") ? b.type : b,
			    r = k.call(b, "namespace") ? b.namespace.split(".") : [];if (i = m = e = e || d, 3 !== e.nodeType && 8 !== e.nodeType && !na.test(q + n.event.triggered) && (q.indexOf(".") > -1 && (r = q.split("."), q = r.shift(), r.sort()), h = q.indexOf(":") < 0 && "on" + q, b = b[n.expando] ? b : new n.Event(q, "object" == (typeof b === "undefined" ? "undefined" : _typeof(b)) && b), b.isTrigger = f ? 2 : 3, b.namespace = r.join("."), b.rnamespace = b.namespace ? new RegExp("(^|\\.)" + r.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, b.result = void 0, b.target || (b.target = e), c = null == c ? [b] : n.makeArray(c, [b]), l = n.event.special[q] || {}, f || !l.trigger || l.trigger.apply(e, c) !== !1)) {
				if (!f && !l.noBubble && !n.isWindow(e)) {
					for (j = l.delegateType || q, na.test(j + q) || (i = i.parentNode); i; i = i.parentNode) {
						p.push(i), m = i;
					}m === (e.ownerDocument || d) && p.push(m.defaultView || m.parentWindow || a);
				}o = 0;while ((i = p[o++]) && !b.isPropagationStopped()) {
					b.type = o > 1 ? j : l.bindType || q, g = (n._data(i, "events") || {})[b.type] && n._data(i, "handle"), g && g.apply(i, c), g = h && i[h], g && g.apply && M(i) && (b.result = g.apply(i, c), b.result === !1 && b.preventDefault());
				}if (b.type = q, !f && !b.isDefaultPrevented() && (!l._default || l._default.apply(p.pop(), c) === !1) && M(e) && h && e[q] && !n.isWindow(e)) {
					m = e[h], m && (e[h] = null), n.event.triggered = q;try {
						e[q]();
					} catch (s) {}n.event.triggered = void 0, m && (e[h] = m);
				}return b.result;
			}
		}, dispatch: function dispatch(a) {
			a = n.event.fix(a);var b,
			    c,
			    d,
			    f,
			    g,
			    h = [],
			    i = e.call(arguments),
			    j = (n._data(this, "events") || {})[a.type] || [],
			    k = n.event.special[a.type] || {};if (i[0] = a, a.delegateTarget = this, !k.preDispatch || k.preDispatch.call(this, a) !== !1) {
				h = n.event.handlers.call(this, a, j), b = 0;while ((f = h[b++]) && !a.isPropagationStopped()) {
					a.currentTarget = f.elem, c = 0;while ((g = f.handlers[c++]) && !a.isImmediatePropagationStopped()) {
						(!a.rnamespace || a.rnamespace.test(g.namespace)) && (a.handleObj = g, a.data = g.data, d = ((n.event.special[g.origType] || {}).handle || g.handler).apply(f.elem, i), void 0 !== d && (a.result = d) === !1 && (a.preventDefault(), a.stopPropagation()));
					}
				}return k.postDispatch && k.postDispatch.call(this, a), a.result;
			}
		}, handlers: function handlers(a, b) {
			var c,
			    d,
			    e,
			    f,
			    g = [],
			    h = b.delegateCount,
			    i = a.target;if (h && i.nodeType && ("click" !== a.type || isNaN(a.button) || a.button < 1)) for (; i != this; i = i.parentNode || this) {
				if (1 === i.nodeType && (i.disabled !== !0 || "click" !== a.type)) {
					for (d = [], c = 0; h > c; c++) {
						f = b[c], e = f.selector + " ", void 0 === d[e] && (d[e] = f.needsContext ? n(e, this).index(i) > -1 : n.find(e, this, null, [i]).length), d[e] && d.push(f);
					}d.length && g.push({ elem: i, handlers: d });
				}
			}return h < b.length && g.push({ elem: this, handlers: b.slice(h) }), g;
		}, fix: function fix(a) {
			if (a[n.expando]) return a;var b,
			    c,
			    e,
			    f = a.type,
			    g = a,
			    h = this.fixHooks[f];h || (this.fixHooks[f] = h = ma.test(f) ? this.mouseHooks : la.test(f) ? this.keyHooks : {}), e = h.props ? this.props.concat(h.props) : this.props, a = new n.Event(g), b = e.length;while (b--) {
				c = e[b], a[c] = g[c];
			}return a.target || (a.target = g.srcElement || d), 3 === a.target.nodeType && (a.target = a.target.parentNode), a.metaKey = !!a.metaKey, h.filter ? h.filter(a, g) : a;
		}, props: "altKey bubbles cancelable ctrlKey currentTarget detail eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "), fixHooks: {}, keyHooks: { props: "char charCode key keyCode".split(" "), filter: function filter(a, b) {
				return null == a.which && (a.which = null != b.charCode ? b.charCode : b.keyCode), a;
			} }, mouseHooks: { props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "), filter: function filter(a, b) {
				var c,
				    e,
				    f,
				    g = b.button,
				    h = b.fromElement;return null == a.pageX && null != b.clientX && (e = a.target.ownerDocument || d, f = e.documentElement, c = e.body, a.pageX = b.clientX + (f && f.scrollLeft || c && c.scrollLeft || 0) - (f && f.clientLeft || c && c.clientLeft || 0), a.pageY = b.clientY + (f && f.scrollTop || c && c.scrollTop || 0) - (f && f.clientTop || c && c.clientTop || 0)), !a.relatedTarget && h && (a.relatedTarget = h === a.target ? b.toElement : h), a.which || void 0 === g || (a.which = 1 & g ? 1 : 2 & g ? 3 : 4 & g ? 2 : 0), a;
			} }, special: { load: { noBubble: !0 }, focus: { trigger: function trigger() {
					if (this !== ra() && this.focus) try {
						return this.focus(), !1;
					} catch (a) {}
				}, delegateType: "focusin" }, blur: { trigger: function trigger() {
					return this === ra() && this.blur ? (this.blur(), !1) : void 0;
				}, delegateType: "focusout" }, click: { trigger: function trigger() {
					return n.nodeName(this, "input") && "checkbox" === this.type && this.click ? (this.click(), !1) : void 0;
				}, _default: function _default(a) {
					return n.nodeName(a.target, "a");
				} }, beforeunload: { postDispatch: function postDispatch(a) {
					void 0 !== a.result && a.originalEvent && (a.originalEvent.returnValue = a.result);
				} } }, simulate: function simulate(a, b, c) {
			var d = n.extend(new n.Event(), c, { type: a, isSimulated: !0 });n.event.trigger(d, null, b), d.isDefaultPrevented() && c.preventDefault();
		} }, n.removeEvent = d.removeEventListener ? function (a, b, c) {
		a.removeEventListener && a.removeEventListener(b, c);
	} : function (a, b, c) {
		var d = "on" + b;a.detachEvent && ("undefined" == typeof a[d] && (a[d] = null), a.detachEvent(d, c));
	}, n.Event = function (a, b) {
		return this instanceof n.Event ? (a && a.type ? (this.originalEvent = a, this.type = a.type, this.isDefaultPrevented = a.defaultPrevented || void 0 === a.defaultPrevented && a.returnValue === !1 ? pa : qa) : this.type = a, b && n.extend(this, b), this.timeStamp = a && a.timeStamp || n.now(), void (this[n.expando] = !0)) : new n.Event(a, b);
	}, n.Event.prototype = { constructor: n.Event, isDefaultPrevented: qa, isPropagationStopped: qa, isImmediatePropagationStopped: qa, preventDefault: function preventDefault() {
			var a = this.originalEvent;this.isDefaultPrevented = pa, a && (a.preventDefault ? a.preventDefault() : a.returnValue = !1);
		}, stopPropagation: function stopPropagation() {
			var a = this.originalEvent;this.isPropagationStopped = pa, a && !this.isSimulated && (a.stopPropagation && a.stopPropagation(), a.cancelBubble = !0);
		}, stopImmediatePropagation: function stopImmediatePropagation() {
			var a = this.originalEvent;this.isImmediatePropagationStopped = pa, a && a.stopImmediatePropagation && a.stopImmediatePropagation(), this.stopPropagation();
		} }, n.each({ mouseenter: "mouseover", mouseleave: "mouseout", pointerenter: "pointerover", pointerleave: "pointerout" }, function (a, b) {
		n.event.special[a] = { delegateType: b, bindType: b, handle: function handle(a) {
				var c,
				    d = this,
				    e = a.relatedTarget,
				    f = a.handleObj;return (!e || e !== d && !n.contains(d, e)) && (a.type = f.origType, c = f.handler.apply(this, arguments), a.type = b), c;
			} };
	}), l.submit || (n.event.special.submit = { setup: function setup() {
			return n.nodeName(this, "form") ? !1 : void n.event.add(this, "click._submit keypress._submit", function (a) {
				var b = a.target,
				    c = n.nodeName(b, "input") || n.nodeName(b, "button") ? n.prop(b, "form") : void 0;c && !n._data(c, "submit") && (n.event.add(c, "submit._submit", function (a) {
					a._submitBubble = !0;
				}), n._data(c, "submit", !0));
			});
		}, postDispatch: function postDispatch(a) {
			a._submitBubble && (delete a._submitBubble, this.parentNode && !a.isTrigger && n.event.simulate("submit", this.parentNode, a));
		}, teardown: function teardown() {
			return n.nodeName(this, "form") ? !1 : void n.event.remove(this, "._submit");
		} }), l.change || (n.event.special.change = { setup: function setup() {
			return ka.test(this.nodeName) ? (("checkbox" === this.type || "radio" === this.type) && (n.event.add(this, "propertychange._change", function (a) {
				"checked" === a.originalEvent.propertyName && (this._justChanged = !0);
			}), n.event.add(this, "click._change", function (a) {
				this._justChanged && !a.isTrigger && (this._justChanged = !1), n.event.simulate("change", this, a);
			})), !1) : void n.event.add(this, "beforeactivate._change", function (a) {
				var b = a.target;ka.test(b.nodeName) && !n._data(b, "change") && (n.event.add(b, "change._change", function (a) {
					!this.parentNode || a.isSimulated || a.isTrigger || n.event.simulate("change", this.parentNode, a);
				}), n._data(b, "change", !0));
			});
		}, handle: function handle(a) {
			var b = a.target;return this !== b || a.isSimulated || a.isTrigger || "radio" !== b.type && "checkbox" !== b.type ? a.handleObj.handler.apply(this, arguments) : void 0;
		}, teardown: function teardown() {
			return n.event.remove(this, "._change"), !ka.test(this.nodeName);
		} }), l.focusin || n.each({ focus: "focusin", blur: "focusout" }, function (a, b) {
		var c = function c(a) {
			n.event.simulate(b, a.target, n.event.fix(a));
		};n.event.special[b] = { setup: function setup() {
				var d = this.ownerDocument || this,
				    e = n._data(d, b);e || d.addEventListener(a, c, !0), n._data(d, b, (e || 0) + 1);
			}, teardown: function teardown() {
				var d = this.ownerDocument || this,
				    e = n._data(d, b) - 1;e ? n._data(d, b, e) : (d.removeEventListener(a, c, !0), n._removeData(d, b));
			} };
	}), n.fn.extend({ on: function on(a, b, c, d) {
			return sa(this, a, b, c, d);
		}, one: function one(a, b, c, d) {
			return sa(this, a, b, c, d, 1);
		}, off: function off(a, b, c) {
			var d, e;if (a && a.preventDefault && a.handleObj) return d = a.handleObj, n(a.delegateTarget).off(d.namespace ? d.origType + "." + d.namespace : d.origType, d.selector, d.handler), this;if ("object" == (typeof a === "undefined" ? "undefined" : _typeof(a))) {
				for (e in a) {
					this.off(e, b, a[e]);
				}return this;
			}return (b === !1 || "function" == typeof b) && (c = b, b = void 0), c === !1 && (c = qa), this.each(function () {
				n.event.remove(this, a, c, b);
			});
		}, trigger: function trigger(a, b) {
			return this.each(function () {
				n.event.trigger(a, b, this);
			});
		}, triggerHandler: function triggerHandler(a, b) {
			var c = this[0];return c ? n.event.trigger(a, b, c, !0) : void 0;
		} });var ta = / jQuery\d+="(?:null|\d+)"/g,
	    ua = new RegExp("<(?:" + ba + ")[\\s/>]", "i"),
	    va = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:-]+)[^>]*)\/>/gi,
	    wa = /<script|<style|<link/i,
	    xa = /checked\s*(?:[^=]|=\s*.checked.)/i,
	    ya = /^true\/(.*)/,
	    za = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
	    Aa = ca(d),
	    Ba = Aa.appendChild(d.createElement("div"));function Ca(a, b) {
		return n.nodeName(a, "table") && n.nodeName(11 !== b.nodeType ? b : b.firstChild, "tr") ? a.getElementsByTagName("tbody")[0] || a.appendChild(a.ownerDocument.createElement("tbody")) : a;
	}function Da(a) {
		return a.type = (null !== n.find.attr(a, "type")) + "/" + a.type, a;
	}function Ea(a) {
		var b = ya.exec(a.type);return b ? a.type = b[1] : a.removeAttribute("type"), a;
	}function Fa(a, b) {
		if (1 === b.nodeType && n.hasData(a)) {
			var c,
			    d,
			    e,
			    f = n._data(a),
			    g = n._data(b, f),
			    h = f.events;if (h) {
				delete g.handle, g.events = {};for (c in h) {
					for (d = 0, e = h[c].length; e > d; d++) {
						n.event.add(b, c, h[c][d]);
					}
				}
			}g.data && (g.data = n.extend({}, g.data));
		}
	}function Ga(a, b) {
		var c, d, e;if (1 === b.nodeType) {
			if (c = b.nodeName.toLowerCase(), !l.noCloneEvent && b[n.expando]) {
				e = n._data(b);for (d in e.events) {
					n.removeEvent(b, d, e.handle);
				}b.removeAttribute(n.expando);
			}"script" === c && b.text !== a.text ? (Da(b).text = a.text, Ea(b)) : "object" === c ? (b.parentNode && (b.outerHTML = a.outerHTML), l.html5Clone && a.innerHTML && !n.trim(b.innerHTML) && (b.innerHTML = a.innerHTML)) : "input" === c && Z.test(a.type) ? (b.defaultChecked = b.checked = a.checked, b.value !== a.value && (b.value = a.value)) : "option" === c ? b.defaultSelected = b.selected = a.defaultSelected : ("input" === c || "textarea" === c) && (b.defaultValue = a.defaultValue);
		}
	}function Ha(a, b, c, d) {
		b = f.apply([], b);var e,
		    g,
		    h,
		    i,
		    j,
		    k,
		    m = 0,
		    o = a.length,
		    p = o - 1,
		    q = b[0],
		    r = n.isFunction(q);if (r || o > 1 && "string" == typeof q && !l.checkClone && xa.test(q)) return a.each(function (e) {
			var f = a.eq(e);r && (b[0] = q.call(this, e, f.html())), Ha(f, b, c, d);
		});if (o && (k = ja(b, a[0].ownerDocument, !1, a, d), e = k.firstChild, 1 === k.childNodes.length && (k = e), e || d)) {
			for (i = n.map(ea(k, "script"), Da), h = i.length; o > m; m++) {
				g = k, m !== p && (g = n.clone(g, !0, !0), h && n.merge(i, ea(g, "script"))), c.call(a[m], g, m);
			}if (h) for (j = i[i.length - 1].ownerDocument, n.map(i, Ea), m = 0; h > m; m++) {
				g = i[m], _.test(g.type || "") && !n._data(g, "globalEval") && n.contains(j, g) && (g.src ? n._evalUrl && n._evalUrl(g.src) : n.globalEval((g.text || g.textContent || g.innerHTML || "").replace(za, "")));
			}k = e = null;
		}return a;
	}function Ia(a, b, c) {
		for (var d, e = b ? n.filter(b, a) : a, f = 0; null != (d = e[f]); f++) {
			c || 1 !== d.nodeType || n.cleanData(ea(d)), d.parentNode && (c && n.contains(d.ownerDocument, d) && fa(ea(d, "script")), d.parentNode.removeChild(d));
		}return a;
	}n.extend({ htmlPrefilter: function htmlPrefilter(a) {
			return a.replace(va, "<$1></$2>");
		}, clone: function clone(a, b, c) {
			var d,
			    e,
			    f,
			    g,
			    h,
			    i = n.contains(a.ownerDocument, a);if (l.html5Clone || n.isXMLDoc(a) || !ua.test("<" + a.nodeName + ">") ? f = a.cloneNode(!0) : (Ba.innerHTML = a.outerHTML, Ba.removeChild(f = Ba.firstChild)), !(l.noCloneEvent && l.noCloneChecked || 1 !== a.nodeType && 11 !== a.nodeType || n.isXMLDoc(a))) for (d = ea(f), h = ea(a), g = 0; null != (e = h[g]); ++g) {
				d[g] && Ga(e, d[g]);
			}if (b) if (c) for (h = h || ea(a), d = d || ea(f), g = 0; null != (e = h[g]); g++) {
				Fa(e, d[g]);
			} else Fa(a, f);return d = ea(f, "script"), d.length > 0 && fa(d, !i && ea(a, "script")), d = h = e = null, f;
		}, cleanData: function cleanData(a, b) {
			for (var d, e, f, g, h = 0, i = n.expando, j = n.cache, k = l.attributes, m = n.event.special; null != (d = a[h]); h++) {
				if ((b || M(d)) && (f = d[i], g = f && j[f])) {
					if (g.events) for (e in g.events) {
						m[e] ? n.event.remove(d, e) : n.removeEvent(d, e, g.handle);
					}j[f] && (delete j[f], k || "undefined" == typeof d.removeAttribute ? d[i] = void 0 : d.removeAttribute(i), c.push(f));
				}
			}
		} }), n.fn.extend({ domManip: Ha, detach: function detach(a) {
			return Ia(this, a, !0);
		}, remove: function remove(a) {
			return Ia(this, a);
		}, text: function text(a) {
			return Y(this, function (a) {
				return void 0 === a ? n.text(this) : this.empty().append((this[0] && this[0].ownerDocument || d).createTextNode(a));
			}, null, a, arguments.length);
		}, append: function append() {
			return Ha(this, arguments, function (a) {
				if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
					var b = Ca(this, a);b.appendChild(a);
				}
			});
		}, prepend: function prepend() {
			return Ha(this, arguments, function (a) {
				if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
					var b = Ca(this, a);b.insertBefore(a, b.firstChild);
				}
			});
		}, before: function before() {
			return Ha(this, arguments, function (a) {
				this.parentNode && this.parentNode.insertBefore(a, this);
			});
		}, after: function after() {
			return Ha(this, arguments, function (a) {
				this.parentNode && this.parentNode.insertBefore(a, this.nextSibling);
			});
		}, empty: function empty() {
			for (var a, b = 0; null != (a = this[b]); b++) {
				1 === a.nodeType && n.cleanData(ea(a, !1));while (a.firstChild) {
					a.removeChild(a.firstChild);
				}a.options && n.nodeName(a, "select") && (a.options.length = 0);
			}return this;
		}, clone: function clone(a, b) {
			return a = null == a ? !1 : a, b = null == b ? a : b, this.map(function () {
				return n.clone(this, a, b);
			});
		}, html: function html(a) {
			return Y(this, function (a) {
				var b = this[0] || {},
				    c = 0,
				    d = this.length;if (void 0 === a) return 1 === b.nodeType ? b.innerHTML.replace(ta, "") : void 0;if ("string" == typeof a && !wa.test(a) && (l.htmlSerialize || !ua.test(a)) && (l.leadingWhitespace || !aa.test(a)) && !da[($.exec(a) || ["", ""])[1].toLowerCase()]) {
					a = n.htmlPrefilter(a);try {
						for (; d > c; c++) {
							b = this[c] || {}, 1 === b.nodeType && (n.cleanData(ea(b, !1)), b.innerHTML = a);
						}b = 0;
					} catch (e) {}
				}b && this.empty().append(a);
			}, null, a, arguments.length);
		}, replaceWith: function replaceWith() {
			var a = [];return Ha(this, arguments, function (b) {
				var c = this.parentNode;n.inArray(this, a) < 0 && (n.cleanData(ea(this)), c && c.replaceChild(b, this));
			}, a);
		} }), n.each({ appendTo: "append", prependTo: "prepend", insertBefore: "before", insertAfter: "after", replaceAll: "replaceWith" }, function (a, b) {
		n.fn[a] = function (a) {
			for (var c, d = 0, e = [], f = n(a), h = f.length - 1; h >= d; d++) {
				c = d === h ? this : this.clone(!0), n(f[d])[b](c), g.apply(e, c.get());
			}return this.pushStack(e);
		};
	});var Ja,
	    Ka = { HTML: "block", BODY: "block" };function La(a, b) {
		var c = n(b.createElement(a)).appendTo(b.body),
		    d = n.css(c[0], "display");return c.detach(), d;
	}function Ma(a) {
		var b = d,
		    c = Ka[a];return c || (c = La(a, b), "none" !== c && c || (Ja = (Ja || n("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement), b = (Ja[0].contentWindow || Ja[0].contentDocument).document, b.write(), b.close(), c = La(a, b), Ja.detach()), Ka[a] = c), c;
	}var Na = /^margin/,
	    Oa = new RegExp("^(" + T + ")(?!px)[a-z%]+$", "i"),
	    Pa = function Pa(a, b, c, d) {
		var e,
		    f,
		    g = {};for (f in b) {
			g[f] = a.style[f], a.style[f] = b[f];
		}e = c.apply(a, d || []);for (f in b) {
			a.style[f] = g[f];
		}return e;
	},
	    Qa = d.documentElement;!function () {
		var b,
		    c,
		    e,
		    f,
		    g,
		    h,
		    i = d.createElement("div"),
		    j = d.createElement("div");if (j.style) {
			var _k = function _k() {
				var k,
				    l,
				    m = d.documentElement;m.appendChild(i), j.style.cssText = "-webkit-box-sizing:border-box;box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%", b = e = h = !1, c = g = !0, a.getComputedStyle && (l = a.getComputedStyle(j), b = "1%" !== (l || {}).top, h = "2px" === (l || {}).marginLeft, e = "4px" === (l || { width: "4px" }).width, j.style.marginRight = "50%", c = "4px" === (l || { marginRight: "4px" }).marginRight, k = j.appendChild(d.createElement("div")), k.style.cssText = j.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0", k.style.marginRight = k.style.width = "0", j.style.width = "1px", g = !parseFloat((a.getComputedStyle(k) || {}).marginRight), j.removeChild(k)), j.style.display = "none", f = 0 === j.getClientRects().length, f && (j.style.display = "", j.innerHTML = "<table><tr><td></td><td>t</td></tr></table>", k = j.getElementsByTagName("td"), k[0].style.cssText = "margin:0;border:0;padding:0;display:none", f = 0 === k[0].offsetHeight, f && (k[0].style.display = "", k[1].style.display = "none", f = 0 === k[0].offsetHeight)), m.removeChild(i);
			};

			j.style.cssText = "float:left;opacity:.5", l.opacity = "0.5" === j.style.opacity, l.cssFloat = !!j.style.cssFloat, j.style.backgroundClip = "content-box", j.cloneNode(!0).style.backgroundClip = "", l.clearCloneStyle = "content-box" === j.style.backgroundClip, i = d.createElement("div"), i.style.cssText = "border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute", j.innerHTML = "", i.appendChild(j), l.boxSizing = "" === j.style.boxSizing || "" === j.style.MozBoxSizing || "" === j.style.WebkitBoxSizing, n.extend(l, { reliableHiddenOffsets: function reliableHiddenOffsets() {
					return null == b && _k(), f;
				}, boxSizingReliable: function boxSizingReliable() {
					return null == b && _k(), e;
				}, pixelMarginRight: function pixelMarginRight() {
					return null == b && _k(), c;
				}, pixelPosition: function pixelPosition() {
					return null == b && _k(), b;
				}, reliableMarginRight: function reliableMarginRight() {
					return null == b && _k(), g;
				}, reliableMarginLeft: function reliableMarginLeft() {
					return null == b && _k(), h;
				} });
		}
	}();var Ra,
	    Sa,
	    Ta = /^(top|right|bottom|left)$/;a.getComputedStyle ? (Ra = function Ra(b) {
		var c = b.ownerDocument.defaultView;return c.opener || (c = a), c.getComputedStyle(b);
	}, Sa = function Sa(a, b, c) {
		var d,
		    e,
		    f,
		    g,
		    h = a.style;return c = c || Ra(a), g = c ? c.getPropertyValue(b) || c[b] : void 0, c && ("" !== g || n.contains(a.ownerDocument, a) || (g = n.style(a, b)), !l.pixelMarginRight() && Oa.test(g) && Na.test(b) && (d = h.width, e = h.minWidth, f = h.maxWidth, h.minWidth = h.maxWidth = h.width = g, g = c.width, h.width = d, h.minWidth = e, h.maxWidth = f)), void 0 === g ? g : g + "";
	}) : Qa.currentStyle && (Ra = function Ra(a) {
		return a.currentStyle;
	}, Sa = function Sa(a, b, c) {
		var d,
		    e,
		    f,
		    g,
		    h = a.style;return c = c || Ra(a), g = c ? c[b] : void 0, null == g && h && h[b] && (g = h[b]), Oa.test(g) && !Ta.test(b) && (d = h.left, e = a.runtimeStyle, f = e && e.left, f && (e.left = a.currentStyle.left), h.left = "fontSize" === b ? "1em" : g, g = h.pixelLeft + "px", h.left = d, f && (e.left = f)), void 0 === g ? g : g + "" || "auto";
	});function Ua(a, b) {
		return { get: function get() {
				return a() ? void delete this.get : (this.get = b).apply(this, arguments);
			} };
	}var Va = /alpha\([^)]*\)/i,
	    Wa = /opacity\s*=\s*([^)]*)/i,
	    Xa = /^(none|table(?!-c[ea]).+)/,
	    Ya = new RegExp("^(" + T + ")(.*)$", "i"),
	    Za = { position: "absolute", visibility: "hidden", display: "block" },
	    $a = { letterSpacing: "0", fontWeight: "400" },
	    _a = ["Webkit", "O", "Moz", "ms"],
	    ab = d.createElement("div").style;function bb(a) {
		if (a in ab) return a;var b = a.charAt(0).toUpperCase() + a.slice(1),
		    c = _a.length;while (c--) {
			if (a = _a[c] + b, a in ab) return a;
		}
	}function cb(a, b) {
		for (var c, d, e, f = [], g = 0, h = a.length; h > g; g++) {
			d = a[g], d.style && (f[g] = n._data(d, "olddisplay"), c = d.style.display, b ? (f[g] || "none" !== c || (d.style.display = ""), "" === d.style.display && W(d) && (f[g] = n._data(d, "olddisplay", Ma(d.nodeName)))) : (e = W(d), (c && "none" !== c || !e) && n._data(d, "olddisplay", e ? c : n.css(d, "display"))));
		}for (g = 0; h > g; g++) {
			d = a[g], d.style && (b && "none" !== d.style.display && "" !== d.style.display || (d.style.display = b ? f[g] || "" : "none"));
		}return a;
	}function db(a, b, c) {
		var d = Ya.exec(b);return d ? Math.max(0, d[1] - (c || 0)) + (d[2] || "px") : b;
	}function eb(a, b, c, d, e) {
		for (var f = c === (d ? "border" : "content") ? 4 : "width" === b ? 1 : 0, g = 0; 4 > f; f += 2) {
			"margin" === c && (g += n.css(a, c + V[f], !0, e)), d ? ("content" === c && (g -= n.css(a, "padding" + V[f], !0, e)), "margin" !== c && (g -= n.css(a, "border" + V[f] + "Width", !0, e))) : (g += n.css(a, "padding" + V[f], !0, e), "padding" !== c && (g += n.css(a, "border" + V[f] + "Width", !0, e)));
		}return g;
	}function fb(b, c, e) {
		var f = !0,
		    g = "width" === c ? b.offsetWidth : b.offsetHeight,
		    h = Ra(b),
		    i = l.boxSizing && "border-box" === n.css(b, "boxSizing", !1, h);if (d.msFullscreenElement && a.top !== a && b.getClientRects().length && (g = Math.round(100 * b.getBoundingClientRect()[c])), 0 >= g || null == g) {
			if (g = Sa(b, c, h), (0 > g || null == g) && (g = b.style[c]), Oa.test(g)) return g;f = i && (l.boxSizingReliable() || g === b.style[c]), g = parseFloat(g) || 0;
		}return g + eb(b, c, e || (i ? "border" : "content"), f, h) + "px";
	}n.extend({ cssHooks: { opacity: { get: function get(a, b) {
					if (b) {
						var c = Sa(a, "opacity");return "" === c ? "1" : c;
					}
				} } }, cssNumber: { animationIterationCount: !0, columnCount: !0, fillOpacity: !0, flexGrow: !0, flexShrink: !0, fontWeight: !0, lineHeight: !0, opacity: !0, order: !0, orphans: !0, widows: !0, zIndex: !0, zoom: !0 }, cssProps: { "float": l.cssFloat ? "cssFloat" : "styleFloat" }, style: function style(a, b, c, d) {
			if (a && 3 !== a.nodeType && 8 !== a.nodeType && a.style) {
				var e,
				    f,
				    g,
				    h = n.camelCase(b),
				    i = a.style;if (b = n.cssProps[h] || (n.cssProps[h] = bb(h) || h), g = n.cssHooks[b] || n.cssHooks[h], void 0 === c) return g && "get" in g && void 0 !== (e = g.get(a, !1, d)) ? e : i[b];if (f = typeof c === "undefined" ? "undefined" : _typeof(c), "string" === f && (e = U.exec(c)) && e[1] && (c = X(a, b, e), f = "number"), null != c && c === c && ("number" === f && (c += e && e[3] || (n.cssNumber[h] ? "" : "px")), l.clearCloneStyle || "" !== c || 0 !== b.indexOf("background") || (i[b] = "inherit"), !(g && "set" in g && void 0 === (c = g.set(a, c, d))))) try {
					i[b] = c;
				} catch (j) {}
			}
		}, css: function css(a, b, c, d) {
			var e,
			    f,
			    g,
			    h = n.camelCase(b);return b = n.cssProps[h] || (n.cssProps[h] = bb(h) || h), g = n.cssHooks[b] || n.cssHooks[h], g && "get" in g && (f = g.get(a, !0, c)), void 0 === f && (f = Sa(a, b, d)), "normal" === f && b in $a && (f = $a[b]), "" === c || c ? (e = parseFloat(f), c === !0 || isFinite(e) ? e || 0 : f) : f;
		} }), n.each(["height", "width"], function (a, b) {
		n.cssHooks[b] = { get: function get(a, c, d) {
				return c ? Xa.test(n.css(a, "display")) && 0 === a.offsetWidth ? Pa(a, Za, function () {
					return fb(a, b, d);
				}) : fb(a, b, d) : void 0;
			}, set: function set(a, c, d) {
				var e = d && Ra(a);return db(a, c, d ? eb(a, b, d, l.boxSizing && "border-box" === n.css(a, "boxSizing", !1, e), e) : 0);
			} };
	}), l.opacity || (n.cssHooks.opacity = { get: function get(a, b) {
			return Wa.test((b && a.currentStyle ? a.currentStyle.filter : a.style.filter) || "") ? .01 * parseFloat(RegExp.$1) + "" : b ? "1" : "";
		}, set: function set(a, b) {
			var c = a.style,
			    d = a.currentStyle,
			    e = n.isNumeric(b) ? "alpha(opacity=" + 100 * b + ")" : "",
			    f = d && d.filter || c.filter || "";c.zoom = 1, (b >= 1 || "" === b) && "" === n.trim(f.replace(Va, "")) && c.removeAttribute && (c.removeAttribute("filter"), "" === b || d && !d.filter) || (c.filter = Va.test(f) ? f.replace(Va, e) : f + " " + e);
		} }), n.cssHooks.marginRight = Ua(l.reliableMarginRight, function (a, b) {
		return b ? Pa(a, { display: "inline-block" }, Sa, [a, "marginRight"]) : void 0;
	}), n.cssHooks.marginLeft = Ua(l.reliableMarginLeft, function (a, b) {
		return b ? (parseFloat(Sa(a, "marginLeft")) || (n.contains(a.ownerDocument, a) ? a.getBoundingClientRect().left - Pa(a, {
			marginLeft: 0 }, function () {
			return a.getBoundingClientRect().left;
		}) : 0)) + "px" : void 0;
	}), n.each({ margin: "", padding: "", border: "Width" }, function (a, b) {
		n.cssHooks[a + b] = { expand: function expand(c) {
				for (var d = 0, e = {}, f = "string" == typeof c ? c.split(" ") : [c]; 4 > d; d++) {
					e[a + V[d] + b] = f[d] || f[d - 2] || f[0];
				}return e;
			} }, Na.test(a) || (n.cssHooks[a + b].set = db);
	}), n.fn.extend({ css: function css(a, b) {
			return Y(this, function (a, b, c) {
				var d,
				    e,
				    f = {},
				    g = 0;if (n.isArray(b)) {
					for (d = Ra(a), e = b.length; e > g; g++) {
						f[b[g]] = n.css(a, b[g], !1, d);
					}return f;
				}return void 0 !== c ? n.style(a, b, c) : n.css(a, b);
			}, a, b, arguments.length > 1);
		}, show: function show() {
			return cb(this, !0);
		}, hide: function hide() {
			return cb(this);
		}, toggle: function toggle(a) {
			return "boolean" == typeof a ? a ? this.show() : this.hide() : this.each(function () {
				W(this) ? n(this).show() : n(this).hide();
			});
		} });function gb(a, b, c, d, e) {
		return new gb.prototype.init(a, b, c, d, e);
	}n.Tween = gb, gb.prototype = { constructor: gb, init: function init(a, b, c, d, e, f) {
			this.elem = a, this.prop = c, this.easing = e || n.easing._default, this.options = b, this.start = this.now = this.cur(), this.end = d, this.unit = f || (n.cssNumber[c] ? "" : "px");
		}, cur: function cur() {
			var a = gb.propHooks[this.prop];return a && a.get ? a.get(this) : gb.propHooks._default.get(this);
		}, run: function run(a) {
			var b,
			    c = gb.propHooks[this.prop];return this.options.duration ? this.pos = b = n.easing[this.easing](a, this.options.duration * a, 0, 1, this.options.duration) : this.pos = b = a, this.now = (this.end - this.start) * b + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), c && c.set ? c.set(this) : gb.propHooks._default.set(this), this;
		} }, gb.prototype.init.prototype = gb.prototype, gb.propHooks = { _default: { get: function get(a) {
				var b;return 1 !== a.elem.nodeType || null != a.elem[a.prop] && null == a.elem.style[a.prop] ? a.elem[a.prop] : (b = n.css(a.elem, a.prop, ""), b && "auto" !== b ? b : 0);
			}, set: function set(a) {
				n.fx.step[a.prop] ? n.fx.step[a.prop](a) : 1 !== a.elem.nodeType || null == a.elem.style[n.cssProps[a.prop]] && !n.cssHooks[a.prop] ? a.elem[a.prop] = a.now : n.style(a.elem, a.prop, a.now + a.unit);
			} } }, gb.propHooks.scrollTop = gb.propHooks.scrollLeft = { set: function set(a) {
			a.elem.nodeType && a.elem.parentNode && (a.elem[a.prop] = a.now);
		} }, n.easing = { linear: function linear(a) {
			return a;
		}, swing: function swing(a) {
			return .5 - Math.cos(a * Math.PI) / 2;
		}, _default: "swing" }, n.fx = gb.prototype.init, n.fx.step = {};var hb,
	    ib,
	    jb = /^(?:toggle|show|hide)$/,
	    kb = /queueHooks$/;function lb() {
		return a.setTimeout(function () {
			hb = void 0;
		}), hb = n.now();
	}function mb(a, b) {
		var c,
		    d = { height: a },
		    e = 0;for (b = b ? 1 : 0; 4 > e; e += 2 - b) {
			c = V[e], d["margin" + c] = d["padding" + c] = a;
		}return b && (d.opacity = d.width = a), d;
	}function nb(a, b, c) {
		for (var d, e = (qb.tweeners[b] || []).concat(qb.tweeners["*"]), f = 0, g = e.length; g > f; f++) {
			if (d = e[f].call(c, b, a)) return d;
		}
	}function ob(a, b, c) {
		var d,
		    e,
		    f,
		    g,
		    h,
		    i,
		    j,
		    k,
		    m = this,
		    o = {},
		    p = a.style,
		    q = a.nodeType && W(a),
		    r = n._data(a, "fxshow");c.queue || (h = n._queueHooks(a, "fx"), null == h.unqueued && (h.unqueued = 0, i = h.empty.fire, h.empty.fire = function () {
			h.unqueued || i();
		}), h.unqueued++, m.always(function () {
			m.always(function () {
				h.unqueued--, n.queue(a, "fx").length || h.empty.fire();
			});
		})), 1 === a.nodeType && ("height" in b || "width" in b) && (c.overflow = [p.overflow, p.overflowX, p.overflowY], j = n.css(a, "display"), k = "none" === j ? n._data(a, "olddisplay") || Ma(a.nodeName) : j, "inline" === k && "none" === n.css(a, "float") && (l.inlineBlockNeedsLayout && "inline" !== Ma(a.nodeName) ? p.zoom = 1 : p.display = "inline-block")), c.overflow && (p.overflow = "hidden", l.shrinkWrapBlocks() || m.always(function () {
			p.overflow = c.overflow[0], p.overflowX = c.overflow[1], p.overflowY = c.overflow[2];
		}));for (d in b) {
			if (e = b[d], jb.exec(e)) {
				if (delete b[d], f = f || "toggle" === e, e === (q ? "hide" : "show")) {
					if ("show" !== e || !r || void 0 === r[d]) continue;q = !0;
				}o[d] = r && r[d] || n.style(a, d);
			} else j = void 0;
		}if (n.isEmptyObject(o)) "inline" === ("none" === j ? Ma(a.nodeName) : j) && (p.display = j);else {
			r ? "hidden" in r && (q = r.hidden) : r = n._data(a, "fxshow", {}), f && (r.hidden = !q), q ? n(a).show() : m.done(function () {
				n(a).hide();
			}), m.done(function () {
				var b;n._removeData(a, "fxshow");for (b in o) {
					n.style(a, b, o[b]);
				}
			});for (d in o) {
				g = nb(q ? r[d] : 0, d, m), d in r || (r[d] = g.start, q && (g.end = g.start, g.start = "width" === d || "height" === d ? 1 : 0));
			}
		}
	}function pb(a, b) {
		var c, d, e, f, g;for (c in a) {
			if (d = n.camelCase(c), e = b[d], f = a[c], n.isArray(f) && (e = f[1], f = a[c] = f[0]), c !== d && (a[d] = f, delete a[c]), g = n.cssHooks[d], g && "expand" in g) {
				f = g.expand(f), delete a[d];for (c in f) {
					c in a || (a[c] = f[c], b[c] = e);
				}
			} else b[d] = e;
		}
	}function qb(a, b, c) {
		var d,
		    e,
		    f = 0,
		    g = qb.prefilters.length,
		    h = n.Deferred().always(function () {
			delete i.elem;
		}),
		    i = function i() {
			if (e) return !1;for (var b = hb || lb(), c = Math.max(0, j.startTime + j.duration - b), d = c / j.duration || 0, f = 1 - d, g = 0, i = j.tweens.length; i > g; g++) {
				j.tweens[g].run(f);
			}return h.notifyWith(a, [j, f, c]), 1 > f && i ? c : (h.resolveWith(a, [j]), !1);
		},
		    j = h.promise({ elem: a, props: n.extend({}, b), opts: n.extend(!0, { specialEasing: {}, easing: n.easing._default }, c), originalProperties: b, originalOptions: c, startTime: hb || lb(), duration: c.duration, tweens: [], createTween: function createTween(b, c) {
				var d = n.Tween(a, j.opts, b, c, j.opts.specialEasing[b] || j.opts.easing);return j.tweens.push(d), d;
			}, stop: function stop(b) {
				var c = 0,
				    d = b ? j.tweens.length : 0;if (e) return this;for (e = !0; d > c; c++) {
					j.tweens[c].run(1);
				}return b ? (h.notifyWith(a, [j, 1, 0]), h.resolveWith(a, [j, b])) : h.rejectWith(a, [j, b]), this;
			} }),
		    k = j.props;for (pb(k, j.opts.specialEasing); g > f; f++) {
			if (d = qb.prefilters[f].call(j, a, k, j.opts)) return n.isFunction(d.stop) && (n._queueHooks(j.elem, j.opts.queue).stop = n.proxy(d.stop, d)), d;
		}return n.map(k, nb, j), n.isFunction(j.opts.start) && j.opts.start.call(a, j), n.fx.timer(n.extend(i, { elem: a, anim: j, queue: j.opts.queue })), j.progress(j.opts.progress).done(j.opts.done, j.opts.complete).fail(j.opts.fail).always(j.opts.always);
	}n.Animation = n.extend(qb, { tweeners: { "*": [function (a, b) {
				var c = this.createTween(a, b);return X(c.elem, a, U.exec(b), c), c;
			}] }, tweener: function tweener(a, b) {
			n.isFunction(a) ? (b = a, a = ["*"]) : a = a.match(G);for (var c, d = 0, e = a.length; e > d; d++) {
				c = a[d], qb.tweeners[c] = qb.tweeners[c] || [], qb.tweeners[c].unshift(b);
			}
		}, prefilters: [ob], prefilter: function prefilter(a, b) {
			b ? qb.prefilters.unshift(a) : qb.prefilters.push(a);
		} }), n.speed = function (a, b, c) {
		var d = a && "object" == (typeof a === "undefined" ? "undefined" : _typeof(a)) ? n.extend({}, a) : { complete: c || !c && b || n.isFunction(a) && a, duration: a, easing: c && b || b && !n.isFunction(b) && b };return d.duration = n.fx.off ? 0 : "number" == typeof d.duration ? d.duration : d.duration in n.fx.speeds ? n.fx.speeds[d.duration] : n.fx.speeds._default, (null == d.queue || d.queue === !0) && (d.queue = "fx"), d.old = d.complete, d.complete = function () {
			n.isFunction(d.old) && d.old.call(this), d.queue && n.dequeue(this, d.queue);
		}, d;
	}, n.fn.extend({ fadeTo: function fadeTo(a, b, c, d) {
			return this.filter(W).css("opacity", 0).show().end().animate({ opacity: b }, a, c, d);
		}, animate: function animate(a, b, c, d) {
			var e = n.isEmptyObject(a),
			    f = n.speed(b, c, d),
			    g = function g() {
				var b = qb(this, n.extend({}, a), f);(e || n._data(this, "finish")) && b.stop(!0);
			};return g.finish = g, e || f.queue === !1 ? this.each(g) : this.queue(f.queue, g);
		}, stop: function stop(a, b, c) {
			var d = function d(a) {
				var b = a.stop;delete a.stop, b(c);
			};return "string" != typeof a && (c = b, b = a, a = void 0), b && a !== !1 && this.queue(a || "fx", []), this.each(function () {
				var b = !0,
				    e = null != a && a + "queueHooks",
				    f = n.timers,
				    g = n._data(this);if (e) g[e] && g[e].stop && d(g[e]);else for (e in g) {
					g[e] && g[e].stop && kb.test(e) && d(g[e]);
				}for (e = f.length; e--;) {
					f[e].elem !== this || null != a && f[e].queue !== a || (f[e].anim.stop(c), b = !1, f.splice(e, 1));
				}(b || !c) && n.dequeue(this, a);
			});
		}, finish: function finish(a) {
			return a !== !1 && (a = a || "fx"), this.each(function () {
				var b,
				    c = n._data(this),
				    d = c[a + "queue"],
				    e = c[a + "queueHooks"],
				    f = n.timers,
				    g = d ? d.length : 0;for (c.finish = !0, n.queue(this, a, []), e && e.stop && e.stop.call(this, !0), b = f.length; b--;) {
					f[b].elem === this && f[b].queue === a && (f[b].anim.stop(!0), f.splice(b, 1));
				}for (b = 0; g > b; b++) {
					d[b] && d[b].finish && d[b].finish.call(this);
				}delete c.finish;
			});
		} }), n.each(["toggle", "show", "hide"], function (a, b) {
		var c = n.fn[b];n.fn[b] = function (a, d, e) {
			return null == a || "boolean" == typeof a ? c.apply(this, arguments) : this.animate(mb(b, !0), a, d, e);
		};
	}), n.each({ slideDown: mb("show"), slideUp: mb("hide"), slideToggle: mb("toggle"), fadeIn: { opacity: "show" }, fadeOut: { opacity: "hide" }, fadeToggle: { opacity: "toggle" } }, function (a, b) {
		n.fn[a] = function (a, c, d) {
			return this.animate(b, a, c, d);
		};
	}), n.timers = [], n.fx.tick = function () {
		var a,
		    b = n.timers,
		    c = 0;for (hb = n.now(); c < b.length; c++) {
			a = b[c], a() || b[c] !== a || b.splice(c--, 1);
		}b.length || n.fx.stop(), hb = void 0;
	}, n.fx.timer = function (a) {
		n.timers.push(a), a() ? n.fx.start() : n.timers.pop();
	}, n.fx.interval = 13, n.fx.start = function () {
		ib || (ib = a.setInterval(n.fx.tick, n.fx.interval));
	}, n.fx.stop = function () {
		a.clearInterval(ib), ib = null;
	}, n.fx.speeds = { slow: 600, fast: 200, _default: 400 }, n.fn.delay = function (b, c) {
		return b = n.fx ? n.fx.speeds[b] || b : b, c = c || "fx", this.queue(c, function (c, d) {
			var e = a.setTimeout(c, b);d.stop = function () {
				a.clearTimeout(e);
			};
		});
	}, function () {
		var a,
		    b = d.createElement("input"),
		    c = d.createElement("div"),
		    e = d.createElement("select"),
		    f = e.appendChild(d.createElement("option"));c = d.createElement("div"), c.setAttribute("className", "t"), c.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", a = c.getElementsByTagName("a")[0], b.setAttribute("type", "checkbox"), c.appendChild(b), a = c.getElementsByTagName("a")[0], a.style.cssText = "top:1px", l.getSetAttribute = "t" !== c.className, l.style = /top/.test(a.getAttribute("style")), l.hrefNormalized = "/a" === a.getAttribute("href"), l.checkOn = !!b.value, l.optSelected = f.selected, l.enctype = !!d.createElement("form").enctype, e.disabled = !0, l.optDisabled = !f.disabled, b = d.createElement("input"), b.setAttribute("value", ""), l.input = "" === b.getAttribute("value"), b.value = "t", b.setAttribute("type", "radio"), l.radioValue = "t" === b.value;
	}();var rb = /\r/g;n.fn.extend({ val: function val(a) {
			var b,
			    c,
			    d,
			    e = this[0];{
				if (arguments.length) return d = n.isFunction(a), this.each(function (c) {
					var e;1 === this.nodeType && (e = d ? a.call(this, c, n(this).val()) : a, null == e ? e = "" : "number" == typeof e ? e += "" : n.isArray(e) && (e = n.map(e, function (a) {
						return null == a ? "" : a + "";
					})), b = n.valHooks[this.type] || n.valHooks[this.nodeName.toLowerCase()], b && "set" in b && void 0 !== b.set(this, e, "value") || (this.value = e));
				});if (e) return b = n.valHooks[e.type] || n.valHooks[e.nodeName.toLowerCase()], b && "get" in b && void 0 !== (c = b.get(e, "value")) ? c : (c = e.value, "string" == typeof c ? c.replace(rb, "") : null == c ? "" : c);
			}
		} }), n.extend({ valHooks: { option: { get: function get(a) {
					var b = n.find.attr(a, "value");return null != b ? b : n.trim(n.text(a));
				} }, select: { get: function get(a) {
					for (var b, c, d = a.options, e = a.selectedIndex, f = "select-one" === a.type || 0 > e, g = f ? null : [], h = f ? e + 1 : d.length, i = 0 > e ? h : f ? e : 0; h > i; i++) {
						if (c = d[i], (c.selected || i === e) && (l.optDisabled ? !c.disabled : null === c.getAttribute("disabled")) && (!c.parentNode.disabled || !n.nodeName(c.parentNode, "optgroup"))) {
							if (b = n(c).val(), f) return b;g.push(b);
						}
					}return g;
				}, set: function set(a, b) {
					var c,
					    d,
					    e = a.options,
					    f = n.makeArray(b),
					    g = e.length;while (g--) {
						if (d = e[g], n.inArray(n.valHooks.option.get(d), f) >= 0) try {
							d.selected = c = !0;
						} catch (h) {
							d.scrollHeight;
						} else d.selected = !1;
					}return c || (a.selectedIndex = -1), e;
				} } } }), n.each(["radio", "checkbox"], function () {
		n.valHooks[this] = { set: function set(a, b) {
				return n.isArray(b) ? a.checked = n.inArray(n(a).val(), b) > -1 : void 0;
			} }, l.checkOn || (n.valHooks[this].get = function (a) {
			return null === a.getAttribute("value") ? "on" : a.value;
		});
	});var sb,
	    tb,
	    ub = n.expr.attrHandle,
	    vb = /^(?:checked|selected)$/i,
	    wb = l.getSetAttribute,
	    xb = l.input;n.fn.extend({ attr: function attr(a, b) {
			return Y(this, n.attr, a, b, arguments.length > 1);
		}, removeAttr: function removeAttr(a) {
			return this.each(function () {
				n.removeAttr(this, a);
			});
		} }), n.extend({ attr: function attr(a, b, c) {
			var d,
			    e,
			    f = a.nodeType;if (3 !== f && 8 !== f && 2 !== f) return "undefined" == typeof a.getAttribute ? n.prop(a, b, c) : (1 === f && n.isXMLDoc(a) || (b = b.toLowerCase(), e = n.attrHooks[b] || (n.expr.match.bool.test(b) ? tb : sb)), void 0 !== c ? null === c ? void n.removeAttr(a, b) : e && "set" in e && void 0 !== (d = e.set(a, c, b)) ? d : (a.setAttribute(b, c + ""), c) : e && "get" in e && null !== (d = e.get(a, b)) ? d : (d = n.find.attr(a, b), null == d ? void 0 : d));
		}, attrHooks: { type: { set: function set(a, b) {
					if (!l.radioValue && "radio" === b && n.nodeName(a, "input")) {
						var c = a.value;return a.setAttribute("type", b), c && (a.value = c), b;
					}
				} } }, removeAttr: function removeAttr(a, b) {
			var c,
			    d,
			    e = 0,
			    f = b && b.match(G);if (f && 1 === a.nodeType) while (c = f[e++]) {
				d = n.propFix[c] || c, n.expr.match.bool.test(c) ? xb && wb || !vb.test(c) ? a[d] = !1 : a[n.camelCase("default-" + c)] = a[d] = !1 : n.attr(a, c, ""), a.removeAttribute(wb ? c : d);
			}
		} }), tb = { set: function set(a, b, c) {
			return b === !1 ? n.removeAttr(a, c) : xb && wb || !vb.test(c) ? a.setAttribute(!wb && n.propFix[c] || c, c) : a[n.camelCase("default-" + c)] = a[c] = !0, c;
		} }, n.each(n.expr.match.bool.source.match(/\w+/g), function (a, b) {
		var c = ub[b] || n.find.attr;xb && wb || !vb.test(b) ? ub[b] = function (a, b, d) {
			var e, f;return d || (f = ub[b], ub[b] = e, e = null != c(a, b, d) ? b.toLowerCase() : null, ub[b] = f), e;
		} : ub[b] = function (a, b, c) {
			return c ? void 0 : a[n.camelCase("default-" + b)] ? b.toLowerCase() : null;
		};
	}), xb && wb || (n.attrHooks.value = { set: function set(a, b, c) {
			return n.nodeName(a, "input") ? void (a.defaultValue = b) : sb && sb.set(a, b, c);
		} }), wb || (sb = { set: function set(a, b, c) {
			var d = a.getAttributeNode(c);return d || a.setAttributeNode(d = a.ownerDocument.createAttribute(c)), d.value = b += "", "value" === c || b === a.getAttribute(c) ? b : void 0;
		} }, ub.id = ub.name = ub.coords = function (a, b, c) {
		var d;return c ? void 0 : (d = a.getAttributeNode(b)) && "" !== d.value ? d.value : null;
	}, n.valHooks.button = { get: function get(a, b) {
			var c = a.getAttributeNode(b);return c && c.specified ? c.value : void 0;
		}, set: sb.set }, n.attrHooks.contenteditable = { set: function set(a, b, c) {
			sb.set(a, "" === b ? !1 : b, c);
		} }, n.each(["width", "height"], function (a, b) {
		n.attrHooks[b] = { set: function set(a, c) {
				return "" === c ? (a.setAttribute(b, "auto"), c) : void 0;
			} };
	})), l.style || (n.attrHooks.style = { get: function get(a) {
			return a.style.cssText || void 0;
		}, set: function set(a, b) {
			return a.style.cssText = b + "";
		} });var yb = /^(?:input|select|textarea|button|object)$/i,
	    zb = /^(?:a|area)$/i;n.fn.extend({ prop: function prop(a, b) {
			return Y(this, n.prop, a, b, arguments.length > 1);
		}, removeProp: function removeProp(a) {
			return a = n.propFix[a] || a, this.each(function () {
				try {
					this[a] = void 0, delete this[a];
				} catch (b) {}
			});
		} }), n.extend({ prop: function prop(a, b, c) {
			var d,
			    e,
			    f = a.nodeType;if (3 !== f && 8 !== f && 2 !== f) return 1 === f && n.isXMLDoc(a) || (b = n.propFix[b] || b, e = n.propHooks[b]), void 0 !== c ? e && "set" in e && void 0 !== (d = e.set(a, c, b)) ? d : a[b] = c : e && "get" in e && null !== (d = e.get(a, b)) ? d : a[b];
		}, propHooks: { tabIndex: { get: function get(a) {
					var b = n.find.attr(a, "tabindex");return b ? parseInt(b, 10) : yb.test(a.nodeName) || zb.test(a.nodeName) && a.href ? 0 : -1;
				} } }, propFix: { "for": "htmlFor", "class": "className" } }), l.hrefNormalized || n.each(["href", "src"], function (a, b) {
		n.propHooks[b] = { get: function get(a) {
				return a.getAttribute(b, 4);
			} };
	}), l.optSelected || (n.propHooks.selected = { get: function get(a) {
			var b = a.parentNode;return b && (b.selectedIndex, b.parentNode && b.parentNode.selectedIndex), null;
		} }), n.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
		n.propFix[this.toLowerCase()] = this;
	}), l.enctype || (n.propFix.enctype = "encoding");var Ab = /[\t\r\n\f]/g;function Bb(a) {
		return n.attr(a, "class") || "";
	}n.fn.extend({ addClass: function addClass(a) {
			var b,
			    c,
			    d,
			    e,
			    f,
			    g,
			    h,
			    i = 0;if (n.isFunction(a)) return this.each(function (b) {
				n(this).addClass(a.call(this, b, Bb(this)));
			});if ("string" == typeof a && a) {
				b = a.match(G) || [];while (c = this[i++]) {
					if (e = Bb(c), d = 1 === c.nodeType && (" " + e + " ").replace(Ab, " ")) {
						g = 0;while (f = b[g++]) {
							d.indexOf(" " + f + " ") < 0 && (d += f + " ");
						}h = n.trim(d), e !== h && n.attr(c, "class", h);
					}
				}
			}return this;
		}, removeClass: function removeClass(a) {
			var b,
			    c,
			    d,
			    e,
			    f,
			    g,
			    h,
			    i = 0;if (n.isFunction(a)) return this.each(function (b) {
				n(this).removeClass(a.call(this, b, Bb(this)));
			});if (!arguments.length) return this.attr("class", "");if ("string" == typeof a && a) {
				b = a.match(G) || [];while (c = this[i++]) {
					if (e = Bb(c), d = 1 === c.nodeType && (" " + e + " ").replace(Ab, " ")) {
						g = 0;while (f = b[g++]) {
							while (d.indexOf(" " + f + " ") > -1) {
								d = d.replace(" " + f + " ", " ");
							}
						}h = n.trim(d), e !== h && n.attr(c, "class", h);
					}
				}
			}return this;
		}, toggleClass: function toggleClass(a, b) {
			var c = typeof a === "undefined" ? "undefined" : _typeof(a);return "boolean" == typeof b && "string" === c ? b ? this.addClass(a) : this.removeClass(a) : n.isFunction(a) ? this.each(function (c) {
				n(this).toggleClass(a.call(this, c, Bb(this), b), b);
			}) : this.each(function () {
				var b, d, e, f;if ("string" === c) {
					d = 0, e = n(this), f = a.match(G) || [];while (b = f[d++]) {
						e.hasClass(b) ? e.removeClass(b) : e.addClass(b);
					}
				} else (void 0 === a || "boolean" === c) && (b = Bb(this), b && n._data(this, "__className__", b), n.attr(this, "class", b || a === !1 ? "" : n._data(this, "__className__") || ""));
			});
		}, hasClass: function hasClass(a) {
			var b,
			    c,
			    d = 0;b = " " + a + " ";while (c = this[d++]) {
				if (1 === c.nodeType && (" " + Bb(c) + " ").replace(Ab, " ").indexOf(b) > -1) return !0;
			}return !1;
		} }), n.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function (a, b) {
		n.fn[b] = function (a, c) {
			return arguments.length > 0 ? this.on(b, null, a, c) : this.trigger(b);
		};
	}), n.fn.extend({ hover: function hover(a, b) {
			return this.mouseenter(a).mouseleave(b || a);
		} });var Cb = a.location,
	    Db = n.now(),
	    Eb = /\?/,
	    Fb = /(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;n.parseJSON = function (b) {
		if (a.JSON && a.JSON.parse) return a.JSON.parse(b + "");var c,
		    d = null,
		    e = n.trim(b + "");return e && !n.trim(e.replace(Fb, function (a, b, e, f) {
			return c && b && (d = 0), 0 === d ? a : (c = e || b, d += !f - !e, "");
		})) ? Function("return " + e)() : n.error("Invalid JSON: " + b);
	}, n.parseXML = function (b) {
		var c, d;if (!b || "string" != typeof b) return null;try {
			a.DOMParser ? (d = new a.DOMParser(), c = d.parseFromString(b, "text/xml")) : (c = new a.ActiveXObject("Microsoft.XMLDOM"), c.async = "false", c.loadXML(b));
		} catch (e) {
			c = void 0;
		}return c && c.documentElement && !c.getElementsByTagName("parsererror").length || n.error("Invalid XML: " + b), c;
	};var Gb = /#.*$/,
	    Hb = /([?&])_=[^&]*/,
	    Ib = /^(.*?):[ \t]*([^\r\n]*)\r?$/gm,
	    Jb = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
	    Kb = /^(?:GET|HEAD)$/,
	    Lb = /^\/\//,
	    Mb = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,
	    Nb = {},
	    Ob = {},
	    Pb = "*/".concat("*"),
	    Qb = Cb.href,
	    Rb = Mb.exec(Qb.toLowerCase()) || [];function Sb(a) {
		return function (b, c) {
			"string" != typeof b && (c = b, b = "*");var d,
			    e = 0,
			    f = b.toLowerCase().match(G) || [];if (n.isFunction(c)) while (d = f[e++]) {
				"+" === d.charAt(0) ? (d = d.slice(1) || "*", (a[d] = a[d] || []).unshift(c)) : (a[d] = a[d] || []).push(c);
			}
		};
	}function Tb(a, b, c, d) {
		var e = {},
		    f = a === Ob;function g(h) {
			var i;return e[h] = !0, n.each(a[h] || [], function (a, h) {
				var j = h(b, c, d);return "string" != typeof j || f || e[j] ? f ? !(i = j) : void 0 : (b.dataTypes.unshift(j), g(j), !1);
			}), i;
		}return g(b.dataTypes[0]) || !e["*"] && g("*");
	}function Ub(a, b) {
		var c,
		    d,
		    e = n.ajaxSettings.flatOptions || {};for (d in b) {
			void 0 !== b[d] && ((e[d] ? a : c || (c = {}))[d] = b[d]);
		}return c && n.extend(!0, a, c), a;
	}function Vb(a, b, c) {
		var d,
		    e,
		    f,
		    g,
		    h = a.contents,
		    i = a.dataTypes;while ("*" === i[0]) {
			i.shift(), void 0 === e && (e = a.mimeType || b.getResponseHeader("Content-Type"));
		}if (e) for (g in h) {
			if (h[g] && h[g].test(e)) {
				i.unshift(g);break;
			}
		}if (i[0] in c) f = i[0];else {
			for (g in c) {
				if (!i[0] || a.converters[g + " " + i[0]]) {
					f = g;break;
				}d || (d = g);
			}f = f || d;
		}return f ? (f !== i[0] && i.unshift(f), c[f]) : void 0;
	}function Wb(a, b, c, d) {
		var e,
		    f,
		    g,
		    h,
		    i,
		    j = {},
		    k = a.dataTypes.slice();if (k[1]) for (g in a.converters) {
			j[g.toLowerCase()] = a.converters[g];
		}f = k.shift();while (f) {
			if (a.responseFields[f] && (c[a.responseFields[f]] = b), !i && d && a.dataFilter && (b = a.dataFilter(b, a.dataType)), i = f, f = k.shift()) if ("*" === f) f = i;else if ("*" !== i && i !== f) {
				if (g = j[i + " " + f] || j["* " + f], !g) for (e in j) {
					if (h = e.split(" "), h[1] === f && (g = j[i + " " + h[0]] || j["* " + h[0]])) {
						g === !0 ? g = j[e] : j[e] !== !0 && (f = h[0], k.unshift(h[1]));break;
					}
				}if (g !== !0) if (g && a["throws"]) b = g(b);else try {
					b = g(b);
				} catch (l) {
					return { state: "parsererror", error: g ? l : "No conversion from " + i + " to " + f };
				}
			}
		}return { state: "success", data: b };
	}n.extend({ active: 0, lastModified: {}, etag: {}, ajaxSettings: { url: Qb, type: "GET", isLocal: Jb.test(Rb[1]), global: !0, processData: !0, async: !0, contentType: "application/x-www-form-urlencoded; charset=UTF-8", accepts: { "*": Pb, text: "text/plain", html: "text/html", xml: "application/xml, text/xml", json: "application/json, text/javascript" }, contents: { xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/ }, responseFields: { xml: "responseXML", text: "responseText", json: "responseJSON" }, converters: { "* text": String, "text html": !0, "text json": n.parseJSON, "text xml": n.parseXML }, flatOptions: { url: !0, context: !0 } }, ajaxSetup: function ajaxSetup(a, b) {
			return b ? Ub(Ub(a, n.ajaxSettings), b) : Ub(n.ajaxSettings, a);
		}, ajaxPrefilter: Sb(Nb), ajaxTransport: Sb(Ob), ajax: function ajax(b, c) {
			"object" == (typeof b === "undefined" ? "undefined" : _typeof(b)) && (c = b, b = void 0), c = c || {};var d,
			    e,
			    f,
			    g,
			    h,
			    i,
			    j,
			    k,
			    l = n.ajaxSetup({}, c),
			    m = l.context || l,
			    o = l.context && (m.nodeType || m.jquery) ? n(m) : n.event,
			    p = n.Deferred(),
			    q = n.Callbacks("once memory"),
			    r = l.statusCode || {},
			    s = {},
			    t = {},
			    u = 0,
			    v = "canceled",
			    w = { readyState: 0, getResponseHeader: function getResponseHeader(a) {
					var b;if (2 === u) {
						if (!k) {
							k = {};while (b = Ib.exec(g)) {
								k[b[1].toLowerCase()] = b[2];
							}
						}b = k[a.toLowerCase()];
					}return null == b ? null : b;
				}, getAllResponseHeaders: function getAllResponseHeaders() {
					return 2 === u ? g : null;
				}, setRequestHeader: function setRequestHeader(a, b) {
					var c = a.toLowerCase();return u || (a = t[c] = t[c] || a, s[a] = b), this;
				}, overrideMimeType: function overrideMimeType(a) {
					return u || (l.mimeType = a), this;
				}, statusCode: function statusCode(a) {
					var b;if (a) if (2 > u) for (b in a) {
						r[b] = [r[b], a[b]];
					} else w.always(a[w.status]);return this;
				}, abort: function abort(a) {
					var b = a || v;return j && j.abort(b), y(0, b), this;
				} };if (p.promise(w).complete = q.add, w.success = w.done, w.error = w.fail, l.url = ((b || l.url || Qb) + "").replace(Gb, "").replace(Lb, Rb[1] + "//"), l.type = c.method || c.type || l.method || l.type, l.dataTypes = n.trim(l.dataType || "*").toLowerCase().match(G) || [""], null == l.crossDomain && (d = Mb.exec(l.url.toLowerCase()), l.crossDomain = !(!d || d[1] === Rb[1] && d[2] === Rb[2] && (d[3] || ("http:" === d[1] ? "80" : "443")) === (Rb[3] || ("http:" === Rb[1] ? "80" : "443")))), l.data && l.processData && "string" != typeof l.data && (l.data = n.param(l.data, l.traditional)), Tb(Nb, l, c, w), 2 === u) return w;i = n.event && l.global, i && 0 === n.active++ && n.event.trigger("ajaxStart"), l.type = l.type.toUpperCase(), l.hasContent = !Kb.test(l.type), f = l.url, l.hasContent || (l.data && (f = l.url += (Eb.test(f) ? "&" : "?") + l.data, delete l.data), l.cache === !1 && (l.url = Hb.test(f) ? f.replace(Hb, "$1_=" + Db++) : f + (Eb.test(f) ? "&" : "?") + "_=" + Db++)), l.ifModified && (n.lastModified[f] && w.setRequestHeader("If-Modified-Since", n.lastModified[f]), n.etag[f] && w.setRequestHeader("If-None-Match", n.etag[f])), (l.data && l.hasContent && l.contentType !== !1 || c.contentType) && w.setRequestHeader("Content-Type", l.contentType), w.setRequestHeader("Accept", l.dataTypes[0] && l.accepts[l.dataTypes[0]] ? l.accepts[l.dataTypes[0]] + ("*" !== l.dataTypes[0] ? ", " + Pb + "; q=0.01" : "") : l.accepts["*"]);for (e in l.headers) {
				w.setRequestHeader(e, l.headers[e]);
			}if (l.beforeSend && (l.beforeSend.call(m, w, l) === !1 || 2 === u)) return w.abort();v = "abort";for (e in { success: 1, error: 1, complete: 1 }) {
				w[e](l[e]);
			}if (j = Tb(Ob, l, c, w)) {
				if (w.readyState = 1, i && o.trigger("ajaxSend", [w, l]), 2 === u) return w;l.async && l.timeout > 0 && (h = a.setTimeout(function () {
					w.abort("timeout");
				}, l.timeout));try {
					u = 1, j.send(s, y);
				} catch (x) {
					if (!(2 > u)) throw x;y(-1, x);
				}
			} else y(-1, "No Transport");function y(b, c, d, e) {
				var k,
				    s,
				    t,
				    v,
				    x,
				    y = c;2 !== u && (u = 2, h && a.clearTimeout(h), j = void 0, g = e || "", w.readyState = b > 0 ? 4 : 0, k = b >= 200 && 300 > b || 304 === b, d && (v = Vb(l, w, d)), v = Wb(l, v, w, k), k ? (l.ifModified && (x = w.getResponseHeader("Last-Modified"), x && (n.lastModified[f] = x), x = w.getResponseHeader("etag"), x && (n.etag[f] = x)), 204 === b || "HEAD" === l.type ? y = "nocontent" : 304 === b ? y = "notmodified" : (y = v.state, s = v.data, t = v.error, k = !t)) : (t = y, (b || !y) && (y = "error", 0 > b && (b = 0))), w.status = b, w.statusText = (c || y) + "", k ? p.resolveWith(m, [s, y, w]) : p.rejectWith(m, [w, y, t]), w.statusCode(r), r = void 0, i && o.trigger(k ? "ajaxSuccess" : "ajaxError", [w, l, k ? s : t]), q.fireWith(m, [w, y]), i && (o.trigger("ajaxComplete", [w, l]), --n.active || n.event.trigger("ajaxStop")));
			}return w;
		}, getJSON: function getJSON(a, b, c) {
			return n.get(a, b, c, "json");
		}, getScript: function getScript(a, b) {
			return n.get(a, void 0, b, "script");
		} }), n.each(["get", "post"], function (a, b) {
		n[b] = function (a, c, d, e) {
			return n.isFunction(c) && (e = e || d, d = c, c = void 0), n.ajax(n.extend({ url: a, type: b, dataType: e, data: c, success: d }, n.isPlainObject(a) && a));
		};
	}), n._evalUrl = function (a) {
		return n.ajax({ url: a, type: "GET", dataType: "script", cache: !0, async: !1, global: !1, "throws": !0 });
	}, n.fn.extend({ wrapAll: function wrapAll(a) {
			if (n.isFunction(a)) return this.each(function (b) {
				n(this).wrapAll(a.call(this, b));
			});if (this[0]) {
				var b = n(a, this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode && b.insertBefore(this[0]), b.map(function () {
					var a = this;while (a.firstChild && 1 === a.firstChild.nodeType) {
						a = a.firstChild;
					}return a;
				}).append(this);
			}return this;
		}, wrapInner: function wrapInner(a) {
			return n.isFunction(a) ? this.each(function (b) {
				n(this).wrapInner(a.call(this, b));
			}) : this.each(function () {
				var b = n(this),
				    c = b.contents();c.length ? c.wrapAll(a) : b.append(a);
			});
		}, wrap: function wrap(a) {
			var b = n.isFunction(a);return this.each(function (c) {
				n(this).wrapAll(b ? a.call(this, c) : a);
			});
		}, unwrap: function unwrap() {
			return this.parent().each(function () {
				n.nodeName(this, "body") || n(this).replaceWith(this.childNodes);
			}).end();
		} });function Xb(a) {
		return a.style && a.style.display || n.css(a, "display");
	}function Yb(a) {
		while (a && 1 === a.nodeType) {
			if ("none" === Xb(a) || "hidden" === a.type) return !0;a = a.parentNode;
		}return !1;
	}n.expr.filters.hidden = function (a) {
		return l.reliableHiddenOffsets() ? a.offsetWidth <= 0 && a.offsetHeight <= 0 && !a.getClientRects().length : Yb(a);
	}, n.expr.filters.visible = function (a) {
		return !n.expr.filters.hidden(a);
	};var Zb = /%20/g,
	    $b = /\[\]$/,
	    _b = /\r?\n/g,
	    ac = /^(?:submit|button|image|reset|file)$/i,
	    bc = /^(?:input|select|textarea|keygen)/i;function cc(a, b, c, d) {
		var e;if (n.isArray(b)) n.each(b, function (b, e) {
			c || $b.test(a) ? d(a, e) : cc(a + "[" + ("object" == (typeof e === "undefined" ? "undefined" : _typeof(e)) && null != e ? b : "") + "]", e, c, d);
		});else if (c || "object" !== n.type(b)) d(a, b);else for (e in b) {
			cc(a + "[" + e + "]", b[e], c, d);
		}
	}n.param = function (a, b) {
		var c,
		    d = [],
		    e = function e(a, b) {
			b = n.isFunction(b) ? b() : null == b ? "" : b, d[d.length] = encodeURIComponent(a) + "=" + encodeURIComponent(b);
		};if (void 0 === b && (b = n.ajaxSettings && n.ajaxSettings.traditional), n.isArray(a) || a.jquery && !n.isPlainObject(a)) n.each(a, function () {
			e(this.name, this.value);
		});else for (c in a) {
			cc(c, a[c], b, e);
		}return d.join("&").replace(Zb, "+");
	}, n.fn.extend({ serialize: function serialize() {
			return n.param(this.serializeArray());
		}, serializeArray: function serializeArray() {
			return this.map(function () {
				var a = n.prop(this, "elements");return a ? n.makeArray(a) : this;
			}).filter(function () {
				var a = this.type;return this.name && !n(this).is(":disabled") && bc.test(this.nodeName) && !ac.test(a) && (this.checked || !Z.test(a));
			}).map(function (a, b) {
				var c = n(this).val();return null == c ? null : n.isArray(c) ? n.map(c, function (a) {
					return { name: b.name, value: a.replace(_b, "\r\n") };
				}) : { name: b.name, value: c.replace(_b, "\r\n") };
			}).get();
		} }), n.ajaxSettings.xhr = void 0 !== a.ActiveXObject ? function () {
		return this.isLocal ? hc() : d.documentMode > 8 ? gc() : /^(get|post|head|put|delete|options)$/i.test(this.type) && gc() || hc();
	} : gc;var dc = 0,
	    ec = {},
	    fc = n.ajaxSettings.xhr();a.attachEvent && a.attachEvent("onunload", function () {
		for (var a in ec) {
			ec[a](void 0, !0);
		}
	}), l.cors = !!fc && "withCredentials" in fc, fc = l.ajax = !!fc, fc && n.ajaxTransport(function (b) {
		if (!b.crossDomain || l.cors) {
			var _c;return { send: function send(d, e) {
					var f,
					    g = b.xhr(),
					    h = ++dc;if (g.open(b.type, b.url, b.async, b.username, b.password), b.xhrFields) for (f in b.xhrFields) {
						g[f] = b.xhrFields[f];
					}b.mimeType && g.overrideMimeType && g.overrideMimeType(b.mimeType), b.crossDomain || d["X-Requested-With"] || (d["X-Requested-With"] = "XMLHttpRequest");for (f in d) {
						void 0 !== d[f] && g.setRequestHeader(f, d[f] + "");
					}g.send(b.hasContent && b.data || null), _c = function c(a, d) {
						var f, i, j;if (_c && (d || 4 === g.readyState)) if (delete ec[h], _c = void 0, g.onreadystatechange = n.noop, d) 4 !== g.readyState && g.abort();else {
							j = {}, f = g.status, "string" == typeof g.responseText && (j.text = g.responseText);try {
								i = g.statusText;
							} catch (k) {
								i = "";
							}f || !b.isLocal || b.crossDomain ? 1223 === f && (f = 204) : f = j.text ? 200 : 404;
						}j && e(f, i, j, g.getAllResponseHeaders());
					}, b.async ? 4 === g.readyState ? a.setTimeout(_c) : g.onreadystatechange = ec[h] = _c : _c();
				}, abort: function abort() {
					_c && _c(void 0, !0);
				} };
		}
	});function gc() {
		try {
			return new a.XMLHttpRequest();
		} catch (b) {}
	}function hc() {
		try {
			return new a.ActiveXObject("Microsoft.XMLHTTP");
		} catch (b) {}
	}n.ajaxPrefilter(function (a) {
		a.crossDomain && (a.contents.script = !1);
	}), n.ajaxSetup({ accepts: { script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript" }, contents: { script: /\b(?:java|ecma)script\b/ }, converters: { "text script": function textScript(a) {
				return n.globalEval(a), a;
			} } }), n.ajaxPrefilter("script", function (a) {
		void 0 === a.cache && (a.cache = !1), a.crossDomain && (a.type = "GET", a.global = !1);
	}), n.ajaxTransport("script", function (a) {
		if (a.crossDomain) {
			var b,
			    c = d.head || n("head")[0] || d.documentElement;return { send: function send(e, f) {
					b = d.createElement("script"), b.async = !0, a.scriptCharset && (b.charset = a.scriptCharset), b.src = a.url, b.onload = b.onreadystatechange = function (a, c) {
						(c || !b.readyState || /loaded|complete/.test(b.readyState)) && (b.onload = b.onreadystatechange = null, b.parentNode && b.parentNode.removeChild(b), b = null, c || f(200, "success"));
					}, c.insertBefore(b, c.firstChild);
				}, abort: function abort() {
					b && b.onload(void 0, !0);
				} };
		}
	});var ic = [],
	    jc = /(=)\?(?=&|$)|\?\?/;n.ajaxSetup({ jsonp: "callback", jsonpCallback: function jsonpCallback() {
			var a = ic.pop() || n.expando + "_" + Db++;return this[a] = !0, a;
		} }), n.ajaxPrefilter("json jsonp", function (b, c, d) {
		var e,
		    f,
		    g,
		    h = b.jsonp !== !1 && (jc.test(b.url) ? "url" : "string" == typeof b.data && 0 === (b.contentType || "").indexOf("application/x-www-form-urlencoded") && jc.test(b.data) && "data");return h || "jsonp" === b.dataTypes[0] ? (e = b.jsonpCallback = n.isFunction(b.jsonpCallback) ? b.jsonpCallback() : b.jsonpCallback, h ? b[h] = b[h].replace(jc, "$1" + e) : b.jsonp !== !1 && (b.url += (Eb.test(b.url) ? "&" : "?") + b.jsonp + "=" + e), b.converters["script json"] = function () {
			return g || n.error(e + " was not called"), g[0];
		}, b.dataTypes[0] = "json", f = a[e], a[e] = function () {
			g = arguments;
		}, d.always(function () {
			void 0 === f ? n(a).removeProp(e) : a[e] = f, b[e] && (b.jsonpCallback = c.jsonpCallback, ic.push(e)), g && n.isFunction(f) && f(g[0]), g = f = void 0;
		}), "script") : void 0;
	}), l.createHTMLDocument = function () {
		if (!d.implementation.createHTMLDocument) return !1;var a = d.implementation.createHTMLDocument("");return a.body.innerHTML = "<form></form><form></form>", 2 === a.body.childNodes.length;
	}(), n.parseHTML = function (a, b, c) {
		if (!a || "string" != typeof a) return null;"boolean" == typeof b && (c = b, b = !1), b = b || (l.createHTMLDocument ? d.implementation.createHTMLDocument("") : d);var e = x.exec(a),
		    f = !c && [];return e ? [b.createElement(e[1])] : (e = ja([a], b, f), f && f.length && n(f).remove(), n.merge([], e.childNodes));
	};var kc = n.fn.load;n.fn.load = function (a, b, c) {
		if ("string" != typeof a && kc) return kc.apply(this, arguments);var d,
		    e,
		    f,
		    g = this,
		    h = a.indexOf(" ");return h > -1 && (d = n.trim(a.slice(h, a.length)), a = a.slice(0, h)), n.isFunction(b) ? (c = b, b = void 0) : b && "object" == (typeof b === "undefined" ? "undefined" : _typeof(b)) && (e = "POST"), g.length > 0 && n.ajax({ url: a, type: e || "GET", dataType: "html", data: b }).done(function (a) {
			f = arguments, g.html(d ? n("<div>").append(n.parseHTML(a)).find(d) : a);
		}).always(c && function (a, b) {
			g.each(function () {
				c.apply(g, f || [a.responseText, b, a]);
			});
		}), this;
	}, n.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (a, b) {
		n.fn[b] = function (a) {
			return this.on(b, a);
		};
	}), n.expr.filters.animated = function (a) {
		return n.grep(n.timers, function (b) {
			return a === b.elem;
		}).length;
	};function lc(a) {
		return n.isWindow(a) ? a : 9 === a.nodeType ? a.defaultView || a.parentWindow : !1;
	}n.offset = { setOffset: function setOffset(a, b, c) {
			var d,
			    e,
			    f,
			    g,
			    h,
			    i,
			    j,
			    k = n.css(a, "position"),
			    l = n(a),
			    m = {};"static" === k && (a.style.position = "relative"), h = l.offset(), f = n.css(a, "top"), i = n.css(a, "left"), j = ("absolute" === k || "fixed" === k) && n.inArray("auto", [f, i]) > -1, j ? (d = l.position(), g = d.top, e = d.left) : (g = parseFloat(f) || 0, e = parseFloat(i) || 0), n.isFunction(b) && (b = b.call(a, c, n.extend({}, h))), null != b.top && (m.top = b.top - h.top + g), null != b.left && (m.left = b.left - h.left + e), "using" in b ? b.using.call(a, m) : l.css(m);
		} }, n.fn.extend({ offset: function offset(a) {
			if (arguments.length) return void 0 === a ? this : this.each(function (b) {
				n.offset.setOffset(this, a, b);
			});var b,
			    c,
			    d = { top: 0, left: 0 },
			    e = this[0],
			    f = e && e.ownerDocument;if (f) return b = f.documentElement, n.contains(b, e) ? ("undefined" != typeof e.getBoundingClientRect && (d = e.getBoundingClientRect()), c = lc(f), { top: d.top + (c.pageYOffset || b.scrollTop) - (b.clientTop || 0), left: d.left + (c.pageXOffset || b.scrollLeft) - (b.clientLeft || 0) }) : d;
		}, position: function position() {
			if (this[0]) {
				var a,
				    b,
				    c = { top: 0, left: 0 },
				    d = this[0];return "fixed" === n.css(d, "position") ? b = d.getBoundingClientRect() : (a = this.offsetParent(), b = this.offset(), n.nodeName(a[0], "html") || (c = a.offset()), c.top += n.css(a[0], "borderTopWidth", !0) - a.scrollTop(), c.left += n.css(a[0], "borderLeftWidth", !0) - a.scrollLeft()), { top: b.top - c.top - n.css(d, "marginTop", !0), left: b.left - c.left - n.css(d, "marginLeft", !0) };
			}
		}, offsetParent: function offsetParent() {
			return this.map(function () {
				var a = this.offsetParent;while (a && !n.nodeName(a, "html") && "static" === n.css(a, "position")) {
					a = a.offsetParent;
				}return a || Qa;
			});
		} }), n.each({ scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function (a, b) {
		var c = /Y/.test(b);n.fn[a] = function (d) {
			return Y(this, function (a, d, e) {
				var f = lc(a);return void 0 === e ? f ? b in f ? f[b] : f.document.documentElement[d] : a[d] : void (f ? f.scrollTo(c ? n(f).scrollLeft() : e, c ? e : n(f).scrollTop()) : a[d] = e);
			}, a, d, arguments.length, null);
		};
	}), n.each(["top", "left"], function (a, b) {
		n.cssHooks[b] = Ua(l.pixelPosition, function (a, c) {
			return c ? (c = Sa(a, b), Oa.test(c) ? n(a).position()[b] + "px" : c) : void 0;
		});
	}), n.each({ Height: "height", Width: "width" }, function (a, b) {
		n.each({ padding: "inner" + a, content: b, "": "outer" + a }, function (c, d) {
			n.fn[d] = function (d, e) {
				var f = arguments.length && (c || "boolean" != typeof d),
				    g = c || (d === !0 || e === !0 ? "margin" : "border");return Y(this, function (b, c, d) {
					var e;return n.isWindow(b) ? b.document.documentElement["client" + a] : 9 === b.nodeType ? (e = b.documentElement, Math.max(b.body["scroll" + a], e["scroll" + a], b.body["offset" + a], e["offset" + a], e["client" + a])) : void 0 === d ? n.css(b, c, g) : n.style(b, c, d, g);
				}, b, f ? d : void 0, f, null);
			};
		});
	}), n.fn.extend({ bind: function bind(a, b, c) {
			return this.on(a, null, b, c);
		}, unbind: function unbind(a, b) {
			return this.off(a, null, b);
		}, delegate: function delegate(a, b, c, d) {
			return this.on(b, a, c, d);
		}, undelegate: function undelegate(a, b, c) {
			return 1 === arguments.length ? this.off(a, "**") : this.off(b, a || "**", c);
		} }), n.fn.size = function () {
		return this.length;
	}, n.fn.andSelf = n.fn.addBack, "function" == typeof define && define.amd && define("jquery", [], function () {
		return n;
	});var mc = a.jQuery,
	    nc = a.$;return n.noConflict = function (b) {
		return a.$ === n && (a.$ = nc), b && a.jQuery === n && (a.jQuery = mc), n;
	}, b || (a.jQuery = a.$ = n), n;
});

/*!
 * Bootstrap v3.3.5 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */

/*!
 * Generated using the Bootstrap Customizer (http://getbootstrap.com/customize/?id=35b072e804118cf2fd87)
 * Config saved to config.json and https://gist.github.com/35b072e804118cf2fd87
 */
if ("undefined" == typeof jQuery) throw new Error("Bootstrap's JavaScript requires jQuery");+function (t) {
	"use strict";
	var e = t.fn.jquery.split(" ")[0].split(".");if (e[0] < 2 && e[1] < 9 || 1 == e[0] && 9 == e[1] && e[2] < 1 || e[0] > 2) throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 3");
}(jQuery), +function (t) {
	"use strict";
	function e(e) {
		return this.each(function () {
			var i = t(this),
			    n = i.data("bs.alert");n || i.data("bs.alert", n = new o(this)), "string" == typeof e && n[e].call(i);
		});
	}var i = '[data-dismiss="alert"]',
	    o = function o(e) {
		t(e).on("click", i, this.close);
	};o.VERSION = "3.3.6", o.TRANSITION_DURATION = 150, o.prototype.close = function (e) {
		function i() {
			a.detach().trigger("closed.bs.alert").remove();
		}var n = t(this),
		    s = n.attr("data-target");s || (s = n.attr("href"), s = s && s.replace(/.*(?=#[^\s]*$)/, ""));var a = t(s);e && e.preventDefault(), a.length || (a = n.closest(".alert")), a.trigger(e = t.Event("close.bs.alert")), e.isDefaultPrevented() || (a.removeClass("in"), t.support.transition && a.hasClass("fade") ? a.one("bsTransitionEnd", i).emulateTransitionEnd(o.TRANSITION_DURATION) : i());
	};var n = t.fn.alert;t.fn.alert = e, t.fn.alert.Constructor = o, t.fn.alert.noConflict = function () {
		return t.fn.alert = n, this;
	}, t(document).on("click.bs.alert.data-api", i, o.prototype.close);
}(jQuery), +function (t) {
	"use strict";
	function e(e) {
		return this.each(function () {
			var o = t(this),
			    n = o.data("bs.button"),
			    s = "object" == (typeof e === "undefined" ? "undefined" : _typeof(e)) && e;n || o.data("bs.button", n = new i(this, s)), "toggle" == e ? n.toggle() : e && n.setState(e);
		});
	}var i = function i(e, o) {
		this.$element = t(e), this.options = t.extend({}, i.DEFAULTS, o), this.isLoading = !1;
	};i.VERSION = "3.3.6", i.DEFAULTS = { loadingText: "loading..." }, i.prototype.setState = function (e) {
		var i = "disabled",
		    o = this.$element,
		    n = o.is("input") ? "val" : "html",
		    s = o.data();e += "Text", null == s.resetText && o.data("resetText", o[n]()), setTimeout(t.proxy(function () {
			o[n](null == s[e] ? this.options[e] : s[e]), "loadingText" == e ? (this.isLoading = !0, o.addClass(i).attr(i, i)) : this.isLoading && (this.isLoading = !1, o.removeClass(i).removeAttr(i));
		}, this), 0);
	}, i.prototype.toggle = function () {
		var t = !0,
		    e = this.$element.closest('[data-toggle="buttons"]');if (e.length) {
			var i = this.$element.find("input");"radio" == i.prop("type") ? (i.prop("checked") && (t = !1), e.find(".active").removeClass("active"), this.$element.addClass("active")) : "checkbox" == i.prop("type") && (i.prop("checked") !== this.$element.hasClass("active") && (t = !1), this.$element.toggleClass("active")), i.prop("checked", this.$element.hasClass("active")), t && i.trigger("change");
		} else this.$element.attr("aria-pressed", !this.$element.hasClass("active")), this.$element.toggleClass("active");
	};var o = t.fn.button;t.fn.button = e, t.fn.button.Constructor = i, t.fn.button.noConflict = function () {
		return t.fn.button = o, this;
	}, t(document).on("click.bs.button.data-api", '[data-toggle^="button"]', function (i) {
		var o = t(i.target);o.hasClass("btn") || (o = o.closest(".btn")), e.call(o, "toggle"), t(i.target).is('input[type="radio"]') || t(i.target).is('input[type="checkbox"]') || i.preventDefault();
	}).on("focus.bs.button.data-api blur.bs.button.data-api", '[data-toggle^="button"]', function (e) {
		t(e.target).closest(".btn").toggleClass("focus", /^focus(in)?$/.test(e.type));
	});
}(jQuery), +function (t) {
	"use strict";
	function e(e) {
		return this.each(function () {
			var o = t(this),
			    n = o.data("bs.carousel"),
			    s = t.extend({}, i.DEFAULTS, o.data(), "object" == (typeof e === "undefined" ? "undefined" : _typeof(e)) && e),
			    a = "string" == typeof e ? e : s.slide;n || o.data("bs.carousel", n = new i(this, s)), "number" == typeof e ? n.to(e) : a ? n[a]() : s.interval && n.pause().cycle();
		});
	}var i = function i(e, _i) {
		this.$element = t(e), this.$indicators = this.$element.find(".carousel-indicators"), this.options = _i, this.paused = null, this.sliding = null, this.interval = null, this.$active = null, this.$items = null, this.options.keyboard && this.$element.on("keydown.bs.carousel", t.proxy(this.keydown, this)), "hover" == this.options.pause && !("ontouchstart" in document.documentElement) && this.$element.on("mouseenter.bs.carousel", t.proxy(this.pause, this)).on("mouseleave.bs.carousel", t.proxy(this.cycle, this));
	};i.VERSION = "3.3.6", i.TRANSITION_DURATION = 600, i.DEFAULTS = { interval: 5e3, pause: "hover", wrap: !0, keyboard: !0 }, i.prototype.keydown = function (t) {
		if (!/input|textarea/i.test(t.target.tagName)) {
			switch (t.which) {case 37:
					this.prev();break;case 39:
					this.next();break;default:
					return;}t.preventDefault();
		}
	}, i.prototype.cycle = function (e) {
		return e || (this.paused = !1), this.interval && clearInterval(this.interval), this.options.interval && !this.paused && (this.interval = setInterval(t.proxy(this.next, this), this.options.interval)), this;
	}, i.prototype.getItemIndex = function (t) {
		return this.$items = t.parent().children(".item"), this.$items.index(t || this.$active);
	}, i.prototype.getItemForDirection = function (t, e) {
		var i = this.getItemIndex(e),
		    o = "prev" == t && 0 === i || "next" == t && i == this.$items.length - 1;if (o && !this.options.wrap) return e;var n = "prev" == t ? -1 : 1,
		    s = (i + n) % this.$items.length;return this.$items.eq(s);
	}, i.prototype.to = function (t) {
		var e = this,
		    i = this.getItemIndex(this.$active = this.$element.find(".item.active"));return t > this.$items.length - 1 || 0 > t ? void 0 : this.sliding ? this.$element.one("slid.bs.carousel", function () {
			e.to(t);
		}) : i == t ? this.pause().cycle() : this.slide(t > i ? "next" : "prev", this.$items.eq(t));
	}, i.prototype.pause = function (e) {
		return e || (this.paused = !0), this.$element.find(".next, .prev").length && t.support.transition && (this.$element.trigger(t.support.transition.end), this.cycle(!0)), this.interval = clearInterval(this.interval), this;
	}, i.prototype.next = function () {
		return this.sliding ? void 0 : this.slide("next");
	}, i.prototype.prev = function () {
		return this.sliding ? void 0 : this.slide("prev");
	}, i.prototype.slide = function (e, o) {
		var n = this.$element.find(".item.active"),
		    s = o || this.getItemForDirection(e, n),
		    a = this.interval,
		    r = "next" == e ? "left" : "right",
		    l = this;if (s.hasClass("active")) return this.sliding = !1;var h = s[0],
		    d = t.Event("slide.bs.carousel", { relatedTarget: h, direction: r });if (this.$element.trigger(d), !d.isDefaultPrevented()) {
			if (this.sliding = !0, a && this.pause(), this.$indicators.length) {
				this.$indicators.find(".active").removeClass("active");var p = t(this.$indicators.children()[this.getItemIndex(s)]);p && p.addClass("active");
			}var c = t.Event("slid.bs.carousel", { relatedTarget: h, direction: r });return t.support.transition && this.$element.hasClass("slide") ? (s.addClass(e), s[0].offsetWidth, n.addClass(r), s.addClass(r), n.one("bsTransitionEnd", function () {
				s.removeClass([e, r].join(" ")).addClass("active"), n.removeClass(["active", r].join(" ")), l.sliding = !1, setTimeout(function () {
					l.$element.trigger(c);
				}, 0);
			}).emulateTransitionEnd(i.TRANSITION_DURATION)) : (n.removeClass("active"), s.addClass("active"), this.sliding = !1, this.$element.trigger(c)), a && this.cycle(), this;
		}
	};var o = t.fn.carousel;t.fn.carousel = e, t.fn.carousel.Constructor = i, t.fn.carousel.noConflict = function () {
		return t.fn.carousel = o, this;
	};var n = function n(i) {
		var o,
		    n = t(this),
		    s = t(n.attr("data-target") || (o = n.attr("href")) && o.replace(/.*(?=#[^\s]+$)/, ""));if (s.hasClass("carousel")) {
			var a = t.extend({}, s.data(), n.data()),
			    r = n.attr("data-slide-to");r && (a.interval = !1), e.call(s, a), r && s.data("bs.carousel").to(r), i.preventDefault();
		}
	};t(document).on("click.bs.carousel.data-api", "[data-slide]", n).on("click.bs.carousel.data-api", "[data-slide-to]", n), t(window).on("load", function () {
		t('[data-ride="carousel"]').each(function () {
			var i = t(this);e.call(i, i.data());
		});
	});
}(jQuery), +function (t) {
	"use strict";
	function e(e) {
		var i = e.attr("data-target");i || (i = e.attr("href"), i = i && /#[A-Za-z]/.test(i) && i.replace(/.*(?=#[^\s]*$)/, ""));var o = i && t(i);return o && o.length ? o : e.parent();
	}function i(i) {
		i && 3 === i.which || (t(n).remove(), t(s).each(function () {
			var o = t(this),
			    n = e(o),
			    s = { relatedTarget: this };n.hasClass("open") && (i && "click" == i.type && /input|textarea/i.test(i.target.tagName) && t.contains(n[0], i.target) || (n.trigger(i = t.Event("hide.bs.dropdown", s)), i.isDefaultPrevented() || (o.attr("aria-expanded", "false"), n.removeClass("open").trigger(t.Event("hidden.bs.dropdown", s)))));
		}));
	}function o(e) {
		return this.each(function () {
			var i = t(this),
			    o = i.data("bs.dropdown");o || i.data("bs.dropdown", o = new a(this)), "string" == typeof e && o[e].call(i);
		});
	}var n = ".dropdown-backdrop",
	    s = '[data-toggle="dropdown"]',
	    a = function a(e) {
		t(e).on("click.bs.dropdown", this.toggle);
	};a.VERSION = "3.3.6", a.prototype.toggle = function (o) {
		var n = t(this);if (!n.is(".disabled, :disabled")) {
			var s = e(n),
			    a = s.hasClass("open");if (i(), !a) {
				"ontouchstart" in document.documentElement && !s.closest(".navbar-nav").length && t(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(t(this)).on("click", i);var r = { relatedTarget: this };if (s.trigger(o = t.Event("show.bs.dropdown", r)), o.isDefaultPrevented()) return;n.trigger("focus").attr("aria-expanded", "true"), s.toggleClass("open").trigger(t.Event("shown.bs.dropdown", r));
			}return !1;
		}
	}, a.prototype.keydown = function (i) {
		if (/(38|40|27|32)/.test(i.which) && !/input|textarea/i.test(i.target.tagName)) {
			var o = t(this);if (i.preventDefault(), i.stopPropagation(), !o.is(".disabled, :disabled")) {
				var n = e(o),
				    a = n.hasClass("open");if (!a && 27 != i.which || a && 27 == i.which) return 27 == i.which && n.find(s).trigger("focus"), o.trigger("click");var r = " li:not(.disabled):visible a",
				    l = n.find(".dropdown-menu" + r);if (l.length) {
					var h = l.index(i.target);38 == i.which && h > 0 && h--, 40 == i.which && h < l.length - 1 && h++, ~h || (h = 0), l.eq(h).trigger("focus");
				}
			}
		}
	};var r = t.fn.dropdown;t.fn.dropdown = o, t.fn.dropdown.Constructor = a, t.fn.dropdown.noConflict = function () {
		return t.fn.dropdown = r, this;
	}, t(document).on("click.bs.dropdown.data-api", i).on("click.bs.dropdown.data-api", ".dropdown form", function (t) {
		t.stopPropagation();
	}).on("click.bs.dropdown.data-api", s, a.prototype.toggle).on("keydown.bs.dropdown.data-api", s, a.prototype.keydown).on("keydown.bs.dropdown.data-api", ".dropdown-menu", a.prototype.keydown);
}(jQuery), +function (t) {
	"use strict";
	function e(e, o) {
		return this.each(function () {
			var n = t(this),
			    s = n.data("bs.modal"),
			    a = t.extend({}, i.DEFAULTS, n.data(), "object" == (typeof e === "undefined" ? "undefined" : _typeof(e)) && e);s || n.data("bs.modal", s = new i(this, a)), "string" == typeof e ? s[e](o) : a.show && s.show(o);
		});
	}var i = function i(e, _i2) {
		this.options = _i2, this.$body = t(document.body), this.$element = t(e), this.$dialog = this.$element.find(".modal-dialog"), this.$backdrop = null, this.isShown = null, this.originalBodyPad = null, this.scrollbarWidth = 0, this.ignoreBackdropClick = !1, this.options.remote && this.$element.find(".modal-content").load(this.options.remote, t.proxy(function () {
			this.$element.trigger("loaded.bs.modal");
		}, this));
	};i.VERSION = "3.3.6", i.TRANSITION_DURATION = 300, i.BACKDROP_TRANSITION_DURATION = 150, i.DEFAULTS = { backdrop: !0, keyboard: !0, show: !0 }, i.prototype.toggle = function (t) {
		return this.isShown ? this.hide() : this.show(t);
	}, i.prototype.show = function (e) {
		var o = this,
		    n = t.Event("show.bs.modal", { relatedTarget: e });this.$element.trigger(n), this.isShown || n.isDefaultPrevented() || (this.isShown = !0, this.checkScrollbar(), this.setScrollbar(), this.$body.addClass("modal-open"), this.escape(), this.resize(), this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', t.proxy(this.hide, this)), this.$dialog.on("mousedown.dismiss.bs.modal", function () {
			o.$element.one("mouseup.dismiss.bs.modal", function (e) {
				t(e.target).is(o.$element) && (o.ignoreBackdropClick = !0);
			});
		}), this.backdrop(function () {
			var n = t.support.transition && o.$element.hasClass("fade");o.$element.parent().length || o.$element.appendTo(o.$body), o.$element.show().scrollTop(0), o.adjustDialog(), n && o.$element[0].offsetWidth, o.$element.addClass("in"), o.enforceFocus();var s = t.Event("shown.bs.modal", { relatedTarget: e });n ? o.$dialog.one("bsTransitionEnd", function () {
				o.$element.trigger("focus").trigger(s);
			}).emulateTransitionEnd(i.TRANSITION_DURATION) : o.$element.trigger("focus").trigger(s);
		}));
	}, i.prototype.hide = function (e) {
		e && e.preventDefault(), e = t.Event("hide.bs.modal"), this.$element.trigger(e), this.isShown && !e.isDefaultPrevented() && (this.isShown = !1, this.escape(), this.resize(), t(document).off("focusin.bs.modal"), this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"), this.$dialog.off("mousedown.dismiss.bs.modal"), t.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", t.proxy(this.hideModal, this)).emulateTransitionEnd(i.TRANSITION_DURATION) : this.hideModal());
	}, i.prototype.enforceFocus = function () {
		t(document).off("focusin.bs.modal").on("focusin.bs.modal", t.proxy(function (t) {
			this.$element[0] === t.target || this.$element.has(t.target).length || this.$element.trigger("focus");
		}, this));
	}, i.prototype.escape = function () {
		this.isShown && this.options.keyboard ? this.$element.on("keydown.dismiss.bs.modal", t.proxy(function (t) {
			27 == t.which && this.hide();
		}, this)) : this.isShown || this.$element.off("keydown.dismiss.bs.modal");
	}, i.prototype.resize = function () {
		this.isShown ? t(window).on("resize.bs.modal", t.proxy(this.handleUpdate, this)) : t(window).off("resize.bs.modal");
	}, i.prototype.hideModal = function () {
		var t = this;this.$element.hide(), this.backdrop(function () {
			t.$body.removeClass("modal-open"), t.resetAdjustments(), t.resetScrollbar(), t.$element.trigger("hidden.bs.modal");
		});
	}, i.prototype.removeBackdrop = function () {
		this.$backdrop && this.$backdrop.remove(), this.$backdrop = null;
	}, i.prototype.backdrop = function (e) {
		var o = this,
		    n = this.$element.hasClass("fade") ? "fade" : "";if (this.isShown && this.options.backdrop) {
			var s = t.support.transition && n;if (this.$backdrop = t(document.createElement("div")).addClass("modal-backdrop " + n).appendTo(this.$body), this.$element.on("click.dismiss.bs.modal", t.proxy(function (t) {
				return this.ignoreBackdropClick ? void (this.ignoreBackdropClick = !1) : void (t.target === t.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus() : this.hide()));
			}, this)), s && this.$backdrop[0].offsetWidth, this.$backdrop.addClass("in"), !e) return;s ? this.$backdrop.one("bsTransitionEnd", e).emulateTransitionEnd(i.BACKDROP_TRANSITION_DURATION) : e();
		} else if (!this.isShown && this.$backdrop) {
			this.$backdrop.removeClass("in");var a = function a() {
				o.removeBackdrop(), e && e();
			};t.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", a).emulateTransitionEnd(i.BACKDROP_TRANSITION_DURATION) : a();
		} else e && e();
	}, i.prototype.handleUpdate = function () {
		this.adjustDialog();
	}, i.prototype.adjustDialog = function () {
		var t = this.$element[0].scrollHeight > document.documentElement.clientHeight;this.$element.css({ paddingLeft: !this.bodyIsOverflowing && t ? this.scrollbarWidth : "", paddingRight: this.bodyIsOverflowing && !t ? this.scrollbarWidth : "" });
	}, i.prototype.resetAdjustments = function () {
		this.$element.css({ paddingLeft: "", paddingRight: "" });
	}, i.prototype.checkScrollbar = function () {
		var t = window.innerWidth;if (!t) {
			var e = document.documentElement.getBoundingClientRect();t = e.right - Math.abs(e.left);
		}this.bodyIsOverflowing = document.body.clientWidth < t, this.scrollbarWidth = this.measureScrollbar();
	}, i.prototype.setScrollbar = function () {
		var t = parseInt(this.$body.css("padding-right") || 0, 10);this.originalBodyPad = document.body.style.paddingRight || "", this.bodyIsOverflowing && this.$body.css("padding-right", t + this.scrollbarWidth);
	}, i.prototype.resetScrollbar = function () {
		this.$body.css("padding-right", this.originalBodyPad);
	}, i.prototype.measureScrollbar = function () {
		var t = document.createElement("div");t.className = "modal-scrollbar-measure", this.$body.append(t);var e = t.offsetWidth - t.clientWidth;return this.$body[0].removeChild(t), e;
	};var o = t.fn.modal;t.fn.modal = e, t.fn.modal.Constructor = i, t.fn.modal.noConflict = function () {
		return t.fn.modal = o, this;
	}, t(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function (i) {
		var o = t(this),
		    n = o.attr("href"),
		    s = t(o.attr("data-target") || n && n.replace(/.*(?=#[^\s]+$)/, "")),
		    a = s.data("bs.modal") ? "toggle" : t.extend({ remote: !/#/.test(n) && n }, s.data(), o.data());o.is("a") && i.preventDefault(), s.one("show.bs.modal", function (t) {
			t.isDefaultPrevented() || s.one("hidden.bs.modal", function () {
				o.is(":visible") && o.trigger("focus");
			});
		}), e.call(s, a, this);
	});
}(jQuery), +function (t) {
	"use strict";
	function e(e) {
		return this.each(function () {
			var o = t(this),
			    n = o.data("bs.tooltip"),
			    s = "object" == (typeof e === "undefined" ? "undefined" : _typeof(e)) && e;(n || !/destroy|hide/.test(e)) && (n || o.data("bs.tooltip", n = new i(this, s)), "string" == typeof e && n[e]());
		});
	}var i = function i(t, e) {
		this.type = null, this.options = null, this.enabled = null, this.timeout = null, this.hoverState = null, this.$element = null, this.inState = null, this.init("tooltip", t, e);
	};i.VERSION = "3.3.6", i.TRANSITION_DURATION = 150, i.DEFAULTS = { animation: !0, placement: "top", selector: !1, template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>', trigger: "hover focus", title: "", delay: 0, html: !1, container: !1, viewport: { selector: "body", padding: 0 } }, i.prototype.init = function (e, i, o) {
		if (this.enabled = !0, this.type = e, this.$element = t(i), this.options = this.getOptions(o), this.$viewport = this.options.viewport && t(t.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : this.options.viewport.selector || this.options.viewport), this.inState = { click: !1, hover: !1, focus: !1 }, this.$element[0] instanceof document.constructor && !this.options.selector) throw new Error("`selector` option must be specified when initializing " + this.type + " on the window.document object!");for (var n = this.options.trigger.split(" "), s = n.length; s--;) {
			var a = n[s];if ("click" == a) this.$element.on("click." + this.type, this.options.selector, t.proxy(this.toggle, this));else if ("manual" != a) {
				var r = "hover" == a ? "mouseenter" : "focusin",
				    l = "hover" == a ? "mouseleave" : "focusout";this.$element.on(r + "." + this.type, this.options.selector, t.proxy(this.enter, this)), this.$element.on(l + "." + this.type, this.options.selector, t.proxy(this.leave, this));
			}
		}this.options.selector ? this._options = t.extend({}, this.options, { trigger: "manual", selector: "" }) : this.fixTitle();
	}, i.prototype.getDefaults = function () {
		return i.DEFAULTS;
	}, i.prototype.getOptions = function (e) {
		return e = t.extend({}, this.getDefaults(), this.$element.data(), e), e.delay && "number" == typeof e.delay && (e.delay = { show: e.delay, hide: e.delay }), e;
	}, i.prototype.getDelegateOptions = function () {
		var e = {},
		    i = this.getDefaults();return this._options && t.each(this._options, function (t, o) {
			i[t] != o && (e[t] = o);
		}), e;
	}, i.prototype.enter = function (e) {
		var i = e instanceof this.constructor ? e : t(e.currentTarget).data("bs." + this.type);return i || (i = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, i)), e instanceof t.Event && (i.inState["focusin" == e.type ? "focus" : "hover"] = !0), i.tip().hasClass("in") || "in" == i.hoverState ? void (i.hoverState = "in") : (clearTimeout(i.timeout), i.hoverState = "in", i.options.delay && i.options.delay.show ? void (i.timeout = setTimeout(function () {
			"in" == i.hoverState && i.show();
		}, i.options.delay.show)) : i.show());
	}, i.prototype.isInStateTrue = function () {
		for (var t in this.inState) {
			if (this.inState[t]) return !0;
		}return !1;
	}, i.prototype.leave = function (e) {
		var i = e instanceof this.constructor ? e : t(e.currentTarget).data("bs." + this.type);return i || (i = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, i)), e instanceof t.Event && (i.inState["focusout" == e.type ? "focus" : "hover"] = !1), i.isInStateTrue() ? void 0 : (clearTimeout(i.timeout), i.hoverState = "out", i.options.delay && i.options.delay.hide ? void (i.timeout = setTimeout(function () {
			"out" == i.hoverState && i.hide();
		}, i.options.delay.hide)) : i.hide());
	}, i.prototype.show = function () {
		var e = t.Event("show.bs." + this.type);if (this.hasContent() && this.enabled) {
			this.$element.trigger(e);var o = t.contains(this.$element[0].ownerDocument.documentElement, this.$element[0]);if (e.isDefaultPrevented() || !o) return;var n = this,
			    s = this.tip(),
			    a = this.getUID(this.type);this.setContent(), s.attr("id", a), this.$element.attr("aria-describedby", a), this.options.animation && s.addClass("fade");var r = "function" == typeof this.options.placement ? this.options.placement.call(this, s[0], this.$element[0]) : this.options.placement,
			    l = /\s?auto?\s?/i,
			    h = l.test(r);h && (r = r.replace(l, "") || "top"), s.detach().css({ top: 0, left: 0, display: "block" }).addClass(r).data("bs." + this.type, this), this.options.container ? s.appendTo(this.options.container) : s.insertAfter(this.$element), this.$element.trigger("inserted.bs." + this.type);var d = this.getPosition(),
			    p = s[0].offsetWidth,
			    c = s[0].offsetHeight;if (h) {
				var f = r,
				    u = this.getPosition(this.$viewport);r = "bottom" == r && d.bottom + c > u.bottom ? "top" : "top" == r && d.top - c < u.top ? "bottom" : "right" == r && d.right + p > u.width ? "left" : "left" == r && d.left - p < u.left ? "right" : r, s.removeClass(f).addClass(r);
			}var g = this.getCalculatedOffset(r, d, p, c);this.applyPlacement(g, r);var v = function v() {
				var t = n.hoverState;n.$element.trigger("shown.bs." + n.type), n.hoverState = null, "out" == t && n.leave(n);
			};t.support.transition && this.$tip.hasClass("fade") ? s.one("bsTransitionEnd", v).emulateTransitionEnd(i.TRANSITION_DURATION) : v();
		}
	}, i.prototype.applyPlacement = function (e, i) {
		var o = this.tip(),
		    n = o[0].offsetWidth,
		    s = o[0].offsetHeight,
		    a = parseInt(o.css("margin-top"), 10),
		    r = parseInt(o.css("margin-left"), 10);isNaN(a) && (a = 0), isNaN(r) && (r = 0), e.top += a, e.left += r, t.offset.setOffset(o[0], t.extend({ using: function using(t) {
				o.css({ top: Math.round(t.top), left: Math.round(t.left) });
			} }, e), 0), o.addClass("in");var l = o[0].offsetWidth,
		    h = o[0].offsetHeight;"top" == i && h != s && (e.top = e.top + s - h);var d = this.getViewportAdjustedDelta(i, e, l, h);d.left ? e.left += d.left : e.top += d.top;var p = /top|bottom/.test(i),
		    c = p ? 2 * d.left - n + l : 2 * d.top - s + h,
		    f = p ? "offsetWidth" : "offsetHeight";o.offset(e), this.replaceArrow(c, o[0][f], p);
	}, i.prototype.replaceArrow = function (t, e, i) {
		this.arrow().css(i ? "left" : "top", 50 * (1 - t / e) + "%").css(i ? "top" : "left", "");
	}, i.prototype.setContent = function () {
		var t = this.tip(),
		    e = this.getTitle();t.find(".tooltip-inner")[this.options.html ? "html" : "text"](e), t.removeClass("fade in top bottom left right");
	}, i.prototype.hide = function (e) {
		function o() {
			"in" != n.hoverState && s.detach(), n.$element.removeAttr("aria-describedby").trigger("hidden.bs." + n.type), e && e();
		}var n = this,
		    s = t(this.$tip),
		    a = t.Event("hide.bs." + this.type);return this.$element.trigger(a), a.isDefaultPrevented() ? void 0 : (s.removeClass("in"), t.support.transition && s.hasClass("fade") ? s.one("bsTransitionEnd", o).emulateTransitionEnd(i.TRANSITION_DURATION) : o(), this.hoverState = null, this);
	}, i.prototype.fixTitle = function () {
		var t = this.$element;(t.attr("title") || "string" != typeof t.attr("data-original-title")) && t.attr("data-original-title", t.attr("title") || "").attr("title", "");
	}, i.prototype.hasContent = function () {
		return this.getTitle();
	}, i.prototype.getPosition = function (e) {
		e = e || this.$element;var i = e[0],
		    o = "BODY" == i.tagName,
		    n = i.getBoundingClientRect();null == n.width && (n = t.extend({}, n, { width: n.right - n.left, height: n.bottom - n.top }));var s = o ? { top: 0, left: 0 } : e.offset(),
		    a = { scroll: o ? document.documentElement.scrollTop || document.body.scrollTop : e.scrollTop() },
		    r = o ? { width: t(window).width(), height: t(window).height() } : null;return t.extend({}, n, a, r, s);
	}, i.prototype.getCalculatedOffset = function (t, e, i, o) {
		return "bottom" == t ? { top: e.top + e.height, left: e.left + e.width / 2 - i / 2 } : "top" == t ? { top: e.top - o, left: e.left + e.width / 2 - i / 2 } : "left" == t ? { top: e.top + e.height / 2 - o / 2, left: e.left - i } : { top: e.top + e.height / 2 - o / 2, left: e.left + e.width };
	}, i.prototype.getViewportAdjustedDelta = function (t, e, i, o) {
		var n = { top: 0, left: 0 };if (!this.$viewport) return n;var s = this.options.viewport && this.options.viewport.padding || 0,
		    a = this.getPosition(this.$viewport);if (/right|left/.test(t)) {
			var r = e.top - s - a.scroll,
			    l = e.top + s - a.scroll + o;r < a.top ? n.top = a.top - r : l > a.top + a.height && (n.top = a.top + a.height - l);
		} else {
			var h = e.left - s,
			    d = e.left + s + i;h < a.left ? n.left = a.left - h : d > a.right && (n.left = a.left + a.width - d);
		}return n;
	}, i.prototype.getTitle = function () {
		var t,
		    e = this.$element,
		    i = this.options;return t = e.attr("data-original-title") || ("function" == typeof i.title ? i.title.call(e[0]) : i.title);
	}, i.prototype.getUID = function (t) {
		do {
			t += ~~(1e6 * Math.random());
		} while (document.getElementById(t));return t;
	}, i.prototype.tip = function () {
		if (!this.$tip && (this.$tip = t(this.options.template), 1 != this.$tip.length)) throw new Error(this.type + " `template` option must consist of exactly 1 top-level element!");return this.$tip;
	}, i.prototype.arrow = function () {
		return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow");
	}, i.prototype.enable = function () {
		this.enabled = !0;
	}, i.prototype.disable = function () {
		this.enabled = !1;
	}, i.prototype.toggleEnabled = function () {
		this.enabled = !this.enabled;
	}, i.prototype.toggle = function (e) {
		var i = this;e && (i = t(e.currentTarget).data("bs." + this.type), i || (i = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, i))), e ? (i.inState.click = !i.inState.click, i.isInStateTrue() ? i.enter(i) : i.leave(i)) : i.tip().hasClass("in") ? i.leave(i) : i.enter(i);
	}, i.prototype.destroy = function () {
		var t = this;clearTimeout(this.timeout), this.hide(function () {
			t.$element.off("." + t.type).removeData("bs." + t.type), t.$tip && t.$tip.detach(), t.$tip = null, t.$arrow = null, t.$viewport = null;
		});
	};var o = t.fn.tooltip;t.fn.tooltip = e, t.fn.tooltip.Constructor = i, t.fn.tooltip.noConflict = function () {
		return t.fn.tooltip = o, this;
	};
}(jQuery), +function (t) {
	"use strict";
	function e(e) {
		return this.each(function () {
			var o = t(this),
			    n = o.data("bs.popover"),
			    s = "object" == (typeof e === "undefined" ? "undefined" : _typeof(e)) && e;(n || !/destroy|hide/.test(e)) && (n || o.data("bs.popover", n = new i(this, s)), "string" == typeof e && n[e]());
		});
	}var i = function i(t, e) {
		this.init("popover", t, e);
	};if (!t.fn.tooltip) throw new Error("Popover requires tooltip.js");i.VERSION = "3.3.6", i.DEFAULTS = t.extend({}, t.fn.tooltip.Constructor.DEFAULTS, { placement: "right", trigger: "click", content: "", template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>' }), i.prototype = t.extend({}, t.fn.tooltip.Constructor.prototype), i.prototype.constructor = i, i.prototype.getDefaults = function () {
		return i.DEFAULTS;
	}, i.prototype.setContent = function () {
		var t = this.tip(),
		    e = this.getTitle(),
		    i = this.getContent();t.find(".popover-title")[this.options.html ? "html" : "text"](e), t.find(".popover-content").children().detach().end()[this.options.html ? "string" == typeof i ? "html" : "append" : "text"](i), t.removeClass("fade top bottom left right in"), t.find(".popover-title").html() || t.find(".popover-title").hide();
	}, i.prototype.hasContent = function () {
		return this.getTitle() || this.getContent();
	}, i.prototype.getContent = function () {
		var t = this.$element,
		    e = this.options;return t.attr("data-content") || ("function" == typeof e.content ? e.content.call(t[0]) : e.content);
	}, i.prototype.arrow = function () {
		return this.$arrow = this.$arrow || this.tip().find(".arrow");
	};var o = t.fn.popover;t.fn.popover = e, t.fn.popover.Constructor = i, t.fn.popover.noConflict = function () {
		return t.fn.popover = o, this;
	};
}(jQuery), +function (t) {
	"use strict";
	function e(e) {
		return this.each(function () {
			var o = t(this),
			    n = o.data("bs.tab");n || o.data("bs.tab", n = new i(this)), "string" == typeof e && n[e]();
		});
	}var i = function i(e) {
		this.element = t(e);
	};i.VERSION = "3.3.6", i.TRANSITION_DURATION = 150, i.prototype.show = function () {
		var e = this.element,
		    i = e.closest("ul:not(.dropdown-menu)"),
		    o = e.data("target");if (o || (o = e.attr("href"), o = o && o.replace(/.*(?=#[^\s]*$)/, "")), !e.parent("li").hasClass("active")) {
			var n = i.find(".active:last a"),
			    s = t.Event("hide.bs.tab", { relatedTarget: e[0] }),
			    a = t.Event("show.bs.tab", { relatedTarget: n[0] });if (n.trigger(s), e.trigger(a), !a.isDefaultPrevented() && !s.isDefaultPrevented()) {
				var r = t(o);this.activate(e.closest("li"), i), this.activate(r, r.parent(), function () {
					n.trigger({ type: "hidden.bs.tab", relatedTarget: e[0] }), e.trigger({ type: "shown.bs.tab", relatedTarget: n[0] });
				});
			}
		}
	}, i.prototype.activate = function (e, o, n) {
		function s() {
			a.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !1), e.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded", !0), r ? (e[0].offsetWidth, e.addClass("in")) : e.removeClass("fade"), e.parent(".dropdown-menu").length && e.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !0), n && n();
		}var a = o.find("> .active"),
		    r = n && t.support.transition && (a.length && a.hasClass("fade") || !!o.find("> .fade").length);a.length && r ? a.one("bsTransitionEnd", s).emulateTransitionEnd(i.TRANSITION_DURATION) : s(), a.removeClass("in");
	};var o = t.fn.tab;t.fn.tab = e, t.fn.tab.Constructor = i, t.fn.tab.noConflict = function () {
		return t.fn.tab = o, this;
	};var n = function n(i) {
		i.preventDefault(), e.call(t(this), "show");
	};t(document).on("click.bs.tab.data-api", '[data-toggle="tab"]', n).on("click.bs.tab.data-api", '[data-toggle="pill"]', n);
}(jQuery), +function (t) {
	"use strict";
	function e(e) {
		return this.each(function () {
			var o = t(this),
			    n = o.data("bs.affix"),
			    s = "object" == (typeof e === "undefined" ? "undefined" : _typeof(e)) && e;n || o.data("bs.affix", n = new i(this, s)), "string" == typeof e && n[e]();
		});
	}var i = function i(e, o) {
		this.options = t.extend({}, i.DEFAULTS, o), this.$target = t(this.options.target).on("scroll.bs.affix.data-api", t.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", t.proxy(this.checkPositionWithEventLoop, this)), this.$element = t(e), this.affixed = null, this.unpin = null, this.pinnedOffset = null, this.checkPosition();
	};i.VERSION = "3.3.6", i.RESET = "affix affix-top affix-bottom", i.DEFAULTS = { offset: 0, target: window }, i.prototype.getState = function (t, e, i, o) {
		var n = this.$target.scrollTop(),
		    s = this.$element.offset(),
		    a = this.$target.height();if (null != i && "top" == this.affixed) return i > n ? "top" : !1;if ("bottom" == this.affixed) return null != i ? n + this.unpin <= s.top ? !1 : "bottom" : t - o >= n + a ? !1 : "bottom";var r = null == this.affixed,
		    l = r ? n : s.top,
		    h = r ? a : e;return null != i && i >= n ? "top" : null != o && l + h >= t - o ? "bottom" : !1;
	}, i.prototype.getPinnedOffset = function () {
		if (this.pinnedOffset) return this.pinnedOffset;this.$element.removeClass(i.RESET).addClass("affix");var t = this.$target.scrollTop(),
		    e = this.$element.offset();return this.pinnedOffset = e.top - t;
	}, i.prototype.checkPositionWithEventLoop = function () {
		setTimeout(t.proxy(this.checkPosition, this), 1);
	}, i.prototype.checkPosition = function () {
		if (this.$element.is(":visible")) {
			var e = this.$element.height(),
			    o = this.options.offset,
			    n = o.top,
			    s = o.bottom,
			    a = Math.max(t(document).height(), t(document.body).height());"object" != (typeof o === "undefined" ? "undefined" : _typeof(o)) && (s = n = o), "function" == typeof n && (n = o.top(this.$element)), "function" == typeof s && (s = o.bottom(this.$element));var r = this.getState(a, e, n, s);if (this.affixed != r) {
				null != this.unpin && this.$element.css("top", "");var l = "affix" + (r ? "-" + r : ""),
				    h = t.Event(l + ".bs.affix");if (this.$element.trigger(h), h.isDefaultPrevented()) return;this.affixed = r, this.unpin = "bottom" == r ? this.getPinnedOffset() : null, this.$element.removeClass(i.RESET).addClass(l).trigger(l.replace("affix", "affixed") + ".bs.affix");
			}"bottom" == r && this.$element.offset({ top: a - e - s });
		}
	};var o = t.fn.affix;t.fn.affix = e, t.fn.affix.Constructor = i, t.fn.affix.noConflict = function () {
		return t.fn.affix = o, this;
	}, t(window).on("load", function () {
		t('[data-spy="affix"]').each(function () {
			var i = t(this),
			    o = i.data();o.offset = o.offset || {}, null != o.offsetBottom && (o.offset.bottom = o.offsetBottom), null != o.offsetTop && (o.offset.top = o.offsetTop), e.call(i, o);
		});
	});
}(jQuery), +function (t) {
	"use strict";
	function e(e) {
		var i,
		    o = e.attr("data-target") || (i = e.attr("href")) && i.replace(/.*(?=#[^\s]+$)/, "");return t(o);
	}function i(e) {
		return this.each(function () {
			var i = t(this),
			    n = i.data("bs.collapse"),
			    s = t.extend({}, o.DEFAULTS, i.data(), "object" == (typeof e === "undefined" ? "undefined" : _typeof(e)) && e);!n && s.toggle && /show|hide/.test(e) && (s.toggle = !1), n || i.data("bs.collapse", n = new o(this, s)), "string" == typeof e && n[e]();
		});
	}var o = function o(e, i) {
		this.$element = t(e), this.options = t.extend({}, o.DEFAULTS, i), this.$trigger = t('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]'), this.transitioning = null, this.options.parent ? this.$parent = this.getParent() : this.addAriaAndCollapsedClass(this.$element, this.$trigger), this.options.toggle && this.toggle();
	};o.VERSION = "3.3.6", o.TRANSITION_DURATION = 350, o.DEFAULTS = { toggle: !0 }, o.prototype.dimension = function () {
		var t = this.$element.hasClass("width");return t ? "width" : "height";
	}, o.prototype.show = function () {
		if (!this.transitioning && !this.$element.hasClass("in")) {
			var e,
			    n = this.$parent && this.$parent.children(".panel").children(".in, .collapsing");if (!(n && n.length && (e = n.data("bs.collapse"), e && e.transitioning))) {
				var s = t.Event("show.bs.collapse");if (this.$element.trigger(s), !s.isDefaultPrevented()) {
					n && n.length && (i.call(n, "hide"), e || n.data("bs.collapse", null));var a = this.dimension();this.$element.removeClass("collapse").addClass("collapsing")[a](0).attr("aria-expanded", !0), this.$trigger.removeClass("collapsed").attr("aria-expanded", !0), this.transitioning = 1;var r = function r() {
						this.$element.removeClass("collapsing").addClass("collapse in")[a](""), this.transitioning = 0, this.$element.trigger("shown.bs.collapse");
					};if (!t.support.transition) return r.call(this);var l = t.camelCase(["scroll", a].join("-"));this.$element.one("bsTransitionEnd", t.proxy(r, this)).emulateTransitionEnd(o.TRANSITION_DURATION)[a](this.$element[0][l]);
				}
			}
		}
	}, o.prototype.hide = function () {
		if (!this.transitioning && this.$element.hasClass("in")) {
			var e = t.Event("hide.bs.collapse");if (this.$element.trigger(e), !e.isDefaultPrevented()) {
				var i = this.dimension();this.$element[i](this.$element[i]())[0].offsetHeight, this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded", !1), this.$trigger.addClass("collapsed").attr("aria-expanded", !1), this.transitioning = 1;var n = function n() {
					this.transitioning = 0, this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse");
				};return t.support.transition ? void this.$element[i](0).one("bsTransitionEnd", t.proxy(n, this)).emulateTransitionEnd(o.TRANSITION_DURATION) : n.call(this);
			}
		}
	}, o.prototype.toggle = function () {
		this[this.$element.hasClass("in") ? "hide" : "show"]();
	}, o.prototype.getParent = function () {
		return t(this.options.parent).find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]').each(t.proxy(function (i, o) {
			var n = t(o);this.addAriaAndCollapsedClass(e(n), n);
		}, this)).end();
	}, o.prototype.addAriaAndCollapsedClass = function (t, e) {
		var i = t.hasClass("in");t.attr("aria-expanded", i), e.toggleClass("collapsed", !i).attr("aria-expanded", i);
	};var n = t.fn.collapse;t.fn.collapse = i, t.fn.collapse.Constructor = o, t.fn.collapse.noConflict = function () {
		return t.fn.collapse = n, this;
	}, t(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', function (o) {
		var n = t(this);n.attr("data-target") || o.preventDefault();var s = e(n),
		    a = s.data("bs.collapse"),
		    r = a ? "toggle" : n.data();i.call(s, r);
	});
}(jQuery), +function (t) {
	"use strict";
	function e(i, o) {
		this.$body = t(document.body), this.$scrollElement = t(t(i).is(document.body) ? window : i), this.options = t.extend({}, e.DEFAULTS, o), this.selector = (this.options.target || "") + " .nav li > a", this.offsets = [], this.targets = [], this.activeTarget = null, this.scrollHeight = 0, this.$scrollElement.on("scroll.bs.scrollspy", t.proxy(this.process, this)), this.refresh(), this.process();
	}function i(i) {
		return this.each(function () {
			var o = t(this),
			    n = o.data("bs.scrollspy"),
			    s = "object" == (typeof i === "undefined" ? "undefined" : _typeof(i)) && i;n || o.data("bs.scrollspy", n = new e(this, s)), "string" == typeof i && n[i]();
		});
	}e.VERSION = "3.3.6", e.DEFAULTS = { offset: 10 }, e.prototype.getScrollHeight = function () {
		return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight);
	}, e.prototype.refresh = function () {
		var e = this,
		    i = "offset",
		    o = 0;this.offsets = [], this.targets = [], this.scrollHeight = this.getScrollHeight(), t.isWindow(this.$scrollElement[0]) || (i = "position", o = this.$scrollElement.scrollTop()), this.$body.find(this.selector).map(function () {
			var e = t(this),
			    n = e.data("target") || e.attr("href"),
			    s = /^#./.test(n) && t(n);return s && s.length && s.is(":visible") && [[s[i]().top + o, n]] || null;
		}).sort(function (t, e) {
			return t[0] - e[0];
		}).each(function () {
			e.offsets.push(this[0]), e.targets.push(this[1]);
		});
	}, e.prototype.process = function () {
		var t,
		    e = this.$scrollElement.scrollTop() + this.options.offset,
		    i = this.getScrollHeight(),
		    o = this.options.offset + i - this.$scrollElement.height(),
		    n = this.offsets,
		    s = this.targets,
		    a = this.activeTarget;if (this.scrollHeight != i && this.refresh(), e >= o) return a != (t = s[s.length - 1]) && this.activate(t);if (a && e < n[0]) return this.activeTarget = null, this.clear();for (t = n.length; t--;) {
			a != s[t] && e >= n[t] && (void 0 === n[t + 1] || e < n[t + 1]) && this.activate(s[t]);
		}
	}, e.prototype.activate = function (e) {
		this.activeTarget = e, this.clear();var i = this.selector + '[data-target="' + e + '"],' + this.selector + '[href="' + e + '"]',
		    o = t(i).parents("li").addClass("active");o.parent(".dropdown-menu").length && (o = o.closest("li.dropdown").addClass("active")), o.trigger("activate.bs.scrollspy");
	}, e.prototype.clear = function () {
		t(this.selector).parentsUntil(this.options.target, ".active").removeClass("active");
	};var o = t.fn.scrollspy;t.fn.scrollspy = i, t.fn.scrollspy.Constructor = e, t.fn.scrollspy.noConflict = function () {
		return t.fn.scrollspy = o, this;
	}, t(window).on("load.bs.scrollspy.data-api", function () {
		t('[data-spy="scroll"]').each(function () {
			var e = t(this);i.call(e, e.data());
		});
	});
}(jQuery), +function (t) {
	"use strict";
	function e() {
		var t = document.createElement("bootstrap"),
		    e = { WebkitTransition: "webkitTransitionEnd", MozTransition: "transitionend", OTransition: "oTransitionEnd otransitionend", transition: "transitionend" };for (var i in e) {
			if (void 0 !== t.style[i]) return { end: e[i] };
		}return !1;
	}t.fn.emulateTransitionEnd = function (e) {
		var i = !1,
		    o = this;t(this).one("bsTransitionEnd", function () {
			i = !0;
		});var n = function n() {
			i || t(o).trigger(t.support.transition.end);
		};return setTimeout(n, e), this;
	}, t(function () {
		t.support.transition = e(), t.support.transition && (t.event.special.bsTransitionEnd = { bindType: t.support.transition.end, delegateType: t.support.transition.end, handle: function handle(e) {
				return t(e.target).is(this) ? e.handleObj.handler.apply(this, arguments) : void 0;
			} });
	});
}(jQuery);
/*
 * jQuery Nivo Slider v3.2
 * http://nivo.dev7studios.com
 *
 * Copyright 2012, Dev7studios
 * Free to use and abuse under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 */

(function (e) {
	var t = function t(_t, n) {
		var r = e.extend({}, e.fn.nivoSlider.defaults, n);var i = { currentSlide: 0, currentImage: "", totalSlides: 0, running: false, paused: false, stop: false, controlNavEl: false };var s = e(_t);s.data("nivo:vars", i).addClass("nivoSlider");var o = s.children();o.each(function () {
			var t = e(this);var n = "";if (!t.is("img")) {
				if (t.is("a")) {
					t.addClass("nivo-imageLink");n = t;
				}t = t.find("img:first");
			}var r = r === 0 ? t.attr("width") : t.width(),
			    s = s === 0 ? t.attr("height") : t.height();if (n !== "") {
				n.css("display", "none");
			}t.css("display", "none");i.totalSlides++;
		});if (r.randomStart) {
			r.startSlide = Math.floor(Math.random() * i.totalSlides);
		}if (r.startSlide > 0) {
			if (r.startSlide >= i.totalSlides) {
				r.startSlide = i.totalSlides - 1;
			}i.currentSlide = r.startSlide;
		}if (e(o[i.currentSlide]).is("img")) {
			i.currentImage = e(o[i.currentSlide]);
		} else {
			i.currentImage = e(o[i.currentSlide]).find("img:first");
		}if (e(o[i.currentSlide]).is("a")) {
			e(o[i.currentSlide]).css("display", "block");
		}var u = e("<img/>").addClass("nivo-main-image");u.attr("src", i.currentImage.attr("src")).show();s.append(u);e(window).resize(function () {
			s.children("img").width(s.width());u.attr("src", i.currentImage.attr("src"));u.stop().height("auto");e(".nivo-slice").remove();e(".nivo-box").remove();
		});s.append(e('<div class="nivo-caption"></div>'));var a = function a(t) {
			var n = e(".nivo-caption", s);if (i.currentImage.attr("title") != "" && i.currentImage.attr("title") != undefined) {
				var r = i.currentImage.attr("title");if (r.substr(0, 1) == "#") r = e(r).html();if (n.css("display") == "block") {
					setTimeout(function () {
						n.html(r);
					}, t.animSpeed);
				} else {
					n.html(r);n.stop().fadeIn(t.animSpeed);
				}
			} else {
				n.stop().fadeOut(t.animSpeed);
			}
		};a(r);var f = 0;if (!r.manualAdvance && o.length > 1) {
			f = setInterval(function () {
				d(s, o, r, false);
			}, r.pauseTime);
		}if (r.directionNav) {
			s.append('<div class="nivo-directionNav"><a class="nivo-prevNav">' + r.prevText + '</a><a class="nivo-nextNav">' + r.nextText + "</a></div>");e(s).on("click", "a.nivo-prevNav", function () {
				if (i.running) {
					return false;
				}clearInterval(f);f = "";i.currentSlide -= 2;d(s, o, r, "prev");
			});e(s).on("click", "a.nivo-nextNav", function () {
				if (i.running) {
					return false;
				}clearInterval(f);f = "";d(s, o, r, "next");
			});
		}if (r.controlNav) {
			i.controlNavEl = e('<div class="nivo-controlNav"></div>');s.after(i.controlNavEl);for (var l = 0; l < o.length; l++) {
				if (r.controlNavThumbs) {
					i.controlNavEl.addClass("nivo-thumbs-enabled");var c = o.eq(l);if (!c.is("img")) {
						c = c.find("img:first");
					}if (c.attr("data-thumb")) i.controlNavEl.append('<a class="nivo-control" rel="' + l + '"><img src="' + c.attr("data-thumb") + '" alt="" /></a>');
				} else {
					i.controlNavEl.append('<a class="nivo-control" rel="' + l + '">' + (l + 1) + "</a>");
				}
			}e("a:eq(" + i.currentSlide + ")", i.controlNavEl).addClass("active");e("a", i.controlNavEl).bind("click", function () {
				if (i.running) return false;if (e(this).hasClass("active")) return false;clearInterval(f);f = "";u.attr("src", i.currentImage.attr("src"));i.currentSlide = e(this).attr("rel") - 1;d(s, o, r, "control");
			});
		}if (r.pauseOnHover) {
			s.hover(function () {
				i.paused = true;clearInterval(f);f = "";
			}, function () {
				i.paused = false;if (f === "" && !r.manualAdvance) {
					f = setInterval(function () {
						d(s, o, r, false);
					}, r.pauseTime);
				}
			});
		}s.bind("nivo:animFinished", function () {
			u.attr("src", i.currentImage.attr("src"));i.running = false;e(o).each(function () {
				if (e(this).is("a")) {
					e(this).css("display", "none");
				}
			});if (e(o[i.currentSlide]).is("a")) {
				e(o[i.currentSlide]).css("display", "block");
			}if (f === "" && !i.paused && !r.manualAdvance) {
				f = setInterval(function () {
					d(s, o, r, false);
				}, r.pauseTime);
			}r.afterChange.call(this);
		});var h = function h(t, n, r) {
			if (e(r.currentImage).parent().is("a")) e(r.currentImage).parent().css("display", "block");e('img[src="' + r.currentImage.attr("src") + '"]', t).not(".nivo-main-image,.nivo-control img").width(t.width()).css("visibility", "hidden").show();var i = e('img[src="' + r.currentImage.attr("src") + '"]', t).not(".nivo-main-image,.nivo-control img").parent().is("a") ? e('img[src="' + r.currentImage.attr("src") + '"]', t).not(".nivo-main-image,.nivo-control img").parent().height() : e('img[src="' + r.currentImage.attr("src") + '"]', t).not(".nivo-main-image,.nivo-control img").height();for (var s = 0; s < n.slices; s++) {
				var o = Math.round(t.width() / n.slices);if (s === n.slices - 1) {
					t.append(e('<div class="nivo-slice" name="' + s + '"><img src="' + r.currentImage.attr("src") + '" style="position:absolute; width:' + t.width() + "px; height:auto; display:block !important; top:0; left:-" + (o + s * o - o) + 'px;" /></div>').css({ left: o * s + "px", width: t.width() - o * s + "px", height: i + "px", opacity: "0", overflow: "hidden" }));
				} else {
					t.append(e('<div class="nivo-slice" name="' + s + '"><img src="' + r.currentImage.attr("src") + '" style="position:absolute; width:' + t.width() + "px; height:auto; display:block !important; top:0; left:-" + (o + s * o - o) + 'px;" /></div>').css({ left: o * s + "px", width: o + "px", height: i + "px", opacity: "0", overflow: "hidden" }));
				}
			}e(".nivo-slice", t).height(i);u.stop().animate({ height: e(r.currentImage).height() }, n.animSpeed);
		};var p = function p(t, n, r) {
			if (e(r.currentImage).parent().is("a")) e(r.currentImage).parent().css("display", "block");e('img[src="' + r.currentImage.attr("src") + '"]', t).not(".nivo-main-image,.nivo-control img").width(t.width()).css("visibility", "hidden").show();var i = Math.round(t.width() / n.boxCols),
			    s = Math.round(e('img[src="' + r.currentImage.attr("src") + '"]', t).not(".nivo-main-image,.nivo-control img").height() / n.boxRows);for (var o = 0; o < n.boxRows; o++) {
				for (var a = 0; a < n.boxCols; a++) {
					if (a === n.boxCols - 1) {
						t.append(e('<div class="nivo-box" name="' + a + '" rel="' + o + '"><img src="' + r.currentImage.attr("src") + '" style="position:absolute; width:' + t.width() + "px; height:auto; display:block; top:-" + s * o + "px; left:-" + i * a + 'px;" /></div>').css({ opacity: 0, left: i * a + "px", top: s * o + "px", width: t.width() - i * a + "px" }));e('.nivo-box[name="' + a + '"]', t).height(e('.nivo-box[name="' + a + '"] img', t).height() + "px");
					} else {
						t.append(e('<div class="nivo-box" name="' + a + '" rel="' + o + '"><img src="' + r.currentImage.attr("src") + '" style="position:absolute; width:' + t.width() + "px; height:auto; display:block; top:-" + s * o + "px; left:-" + i * a + 'px;" /></div>').css({ opacity: 0, left: i * a + "px", top: s * o + "px", width: i + "px" }));e('.nivo-box[name="' + a + '"]', t).height(e('.nivo-box[name="' + a + '"] img', t).height() + "px");
					}
				}
			}u.stop().animate({ height: e(r.currentImage).height() }, n.animSpeed);
		};var d = function d(t, n, r, i) {
			var s = t.data("nivo:vars");if (s && s.currentSlide === s.totalSlides - 1) {
				r.lastSlide.call(this);
			}if ((!s || s.stop) && !i) {
				return false;
			}r.beforeChange.call(this);if (!i) {
				u.attr("src", s.currentImage.attr("src"));
			} else {
				if (i === "prev") {
					u.attr("src", s.currentImage.attr("src"));
				}if (i === "next") {
					u.attr("src", s.currentImage.attr("src"));
				}
			}s.currentSlide++;if (s.currentSlide === s.totalSlides) {
				s.currentSlide = 0;r.slideshowEnd.call(this);
			}if (s.currentSlide < 0) {
				s.currentSlide = s.totalSlides - 1;
			}if (e(n[s.currentSlide]).is("img")) {
				s.currentImage = e(n[s.currentSlide]);
			} else {
				s.currentImage = e(n[s.currentSlide]).find("img:first");
			}if (r.controlNav) {
				e("a", s.controlNavEl).removeClass("active");e("a:eq(" + s.currentSlide + ")", s.controlNavEl).addClass("active");
			}a(r);e(".nivo-slice", t).remove();e(".nivo-box", t).remove();var o = r.effect,
			    f = "";if (r.effect === "random") {
				f = new Array("sliceDownRight", "sliceDownLeft", "sliceUpRight", "sliceUpLeft", "sliceUpDown", "sliceUpDownLeft", "fold", "fade", "boxRandom", "boxRain", "boxRainReverse", "boxRainGrow", "boxRainGrowReverse");o = f[Math.floor(Math.random() * (f.length + 1))];if (o === undefined) {
					o = "fade";
				}
			}if (r.effect.indexOf(",") !== -1) {
				f = r.effect.split(",");o = f[Math.floor(Math.random() * f.length)];if (o === undefined) {
					o = "fade";
				}
			}if (s.currentImage.attr("data-transition")) {
				o = s.currentImage.attr("data-transition");
			}s.running = true;var l = 0,
			    c = 0,
			    d = "",
			    m = "",
			    g = "",
			    y = "";if (o === "sliceDown" || o === "sliceDownRight" || o === "sliceDownLeft") {
				h(t, r, s);l = 0;c = 0;d = e(".nivo-slice", t);if (o === "sliceDownLeft") {
					d = e(".nivo-slice", t)._reverse();
				}d.each(function () {
					var n = e(this);n.css({ top: "0px" });if (c === r.slices - 1) {
						setTimeout(function () {
							n.animate({ opacity: "1.0" }, r.animSpeed, "", function () {
								t.trigger("nivo:animFinished");
							});
						}, 100 + l);
					} else {
						setTimeout(function () {
							n.animate({ opacity: "1.0" }, r.animSpeed);
						}, 100 + l);
					}l += 50;c++;
				});
			} else if (o === "sliceUp" || o === "sliceUpRight" || o === "sliceUpLeft") {
				h(t, r, s);l = 0;c = 0;d = e(".nivo-slice", t);if (o === "sliceUpLeft") {
					d = e(".nivo-slice", t)._reverse();
				}d.each(function () {
					var n = e(this);n.css({ bottom: "0px" });if (c === r.slices - 1) {
						setTimeout(function () {
							n.animate({ opacity: "1.0" }, r.animSpeed, "", function () {
								t.trigger("nivo:animFinished");
							});
						}, 100 + l);
					} else {
						setTimeout(function () {
							n.animate({ opacity: "1.0" }, r.animSpeed);
						}, 100 + l);
					}l += 50;c++;
				});
			} else if (o === "sliceUpDown" || o === "sliceUpDownRight" || o === "sliceUpDownLeft") {
				h(t, r, s);l = 0;c = 0;var b = 0;d = e(".nivo-slice", t);if (o === "sliceUpDownLeft") {
					d = e(".nivo-slice", t)._reverse();
				}d.each(function () {
					var n = e(this);if (c === 0) {
						n.css("top", "0px");c++;
					} else {
						n.css("bottom", "0px");c = 0;
					}if (b === r.slices - 1) {
						setTimeout(function () {
							n.animate({ opacity: "1.0" }, r.animSpeed, "", function () {
								t.trigger("nivo:animFinished");
							});
						}, 100 + l);
					} else {
						setTimeout(function () {
							n.animate({ opacity: "1.0" }, r.animSpeed);
						}, 100 + l);
					}l += 50;b++;
				});
			} else if (o === "fold") {
				h(t, r, s);l = 0;c = 0;e(".nivo-slice", t).each(function () {
					var n = e(this);var i = n.width();n.css({ top: "0px", width: "0px" });if (c === r.slices - 1) {
						setTimeout(function () {
							n.animate({ width: i, opacity: "1.0" }, r.animSpeed, "", function () {
								t.trigger("nivo:animFinished");
							});
						}, 100 + l);
					} else {
						setTimeout(function () {
							n.animate({ width: i, opacity: "1.0" }, r.animSpeed);
						}, 100 + l);
					}l += 50;c++;
				});
			} else if (o === "fade") {
				h(t, r, s);m = e(".nivo-slice:first", t);m.css({ width: t.width() + "px" });m.animate({ opacity: "1.0" }, r.animSpeed * 2, "", function () {
					t.trigger("nivo:animFinished");
				});
			} else if (o === "slideInRight") {
				h(t, r, s);m = e(".nivo-slice:first", t);m.css({ width: "0px", opacity: "1" });m.animate({ width: t.width() + "px" }, r.animSpeed * 2, "", function () {
					t.trigger("nivo:animFinished");
				});
			} else if (o === "slideInLeft") {
				h(t, r, s);m = e(".nivo-slice:first", t);m.css({ width: "0px", opacity: "1", left: "", right: "0px" });m.animate({ width: t.width() + "px" }, r.animSpeed * 2, "", function () {
					m.css({ left: "0px", right: "" });t.trigger("nivo:animFinished");
				});
			} else if (o === "boxRandom") {
				p(t, r, s);g = r.boxCols * r.boxRows;c = 0;l = 0;y = v(e(".nivo-box", t));y.each(function () {
					var n = e(this);if (c === g - 1) {
						setTimeout(function () {
							n.animate({ opacity: "1" }, r.animSpeed, "", function () {
								t.trigger("nivo:animFinished");
							});
						}, 100 + l);
					} else {
						setTimeout(function () {
							n.animate({ opacity: "1" }, r.animSpeed);
						}, 100 + l);
					}l += 20;c++;
				});
			} else if (o === "boxRain" || o === "boxRainReverse" || o === "boxRainGrow" || o === "boxRainGrowReverse") {
				p(t, r, s);g = r.boxCols * r.boxRows;c = 0;l = 0;var w = 0;var E = 0;var S = [];S[w] = [];y = e(".nivo-box", t);if (o === "boxRainReverse" || o === "boxRainGrowReverse") {
					y = e(".nivo-box", t)._reverse();
				}y.each(function () {
					S[w][E] = e(this);E++;if (E === r.boxCols) {
						w++;E = 0;S[w] = [];
					}
				});for (var x = 0; x < r.boxCols * 2; x++) {
					var T = x;for (var N = 0; N < r.boxRows; N++) {
						if (T >= 0 && T < r.boxCols) {
							(function (n, i, s, u, a) {
								var f = e(S[n][i]);var l = f.width();var c = f.height();if (o === "boxRainGrow" || o === "boxRainGrowReverse") {
									f.width(0).height(0);
								}if (u === a - 1) {
									setTimeout(function () {
										f.animate({ opacity: "1", width: l, height: c }, r.animSpeed / 1.3, "", function () {
											t.trigger("nivo:animFinished");
										});
									}, 100 + s);
								} else {
									setTimeout(function () {
										f.animate({ opacity: "1", width: l, height: c }, r.animSpeed / 1.3);
									}, 100 + s);
								}
							})(N, T, l, c, g);c++;
						}T--;
					}l += 100;
				}
			}
		};var v = function v(e) {
			for (var t, n, r = e.length; r; t = parseInt(Math.random() * r, 10), n = e[--r], e[r] = e[t], e[t] = n) {}return e;
		};var m = function m(e) {
			if (this.console && typeof console.log !== "undefined") {
				console.log(e);
			}
		};this.stop = function () {
			if (!e(_t).data("nivo:vars").stop) {
				e(_t).data("nivo:vars").stop = true;m("Stop Slider");
			}
		};this.start = function () {
			if (e(_t).data("nivo:vars").stop) {
				e(_t).data("nivo:vars").stop = false;m("Start Slider");
			}
		};r.afterLoad.call(this);return this;
	};e.fn.nivoSlider = function (n) {
		return this.each(function (r, i) {
			var s = e(this);if (s.data("nivoslider")) {
				return s.data("nivoslider");
			}var o = new t(this, n);s.data("nivoslider", o);
		});
	};e.fn.nivoSlider.defaults = { effect: "random", slices: 15, boxCols: 8, boxRows: 4, animSpeed: 500, pauseTime: 3e3, startSlide: 0, directionNav: true, controlNav: true, controlNavThumbs: false, pauseOnHover: true, manualAdvance: false, prevText: "Prev", nextText: "Next", randomStart: false, beforeChange: function beforeChange() {}, afterChange: function afterChange() {}, slideshowEnd: function slideshowEnd() {}, lastSlide: function lastSlide() {}, afterLoad: function afterLoad() {} };e.fn._reverse = [].reverse;
})(jQuery);
"function" !== typeof Object.create && (Object.create = function (f) {
	function g() {}g.prototype = f;return new g();
});
(function (f, g, k) {
	var l = { init: function init(a, b) {
			this.$elem = f(b);this.options = f.extend({}, f.fn.owlCarousel.options, this.$elem.data(), a);this.userOptions = a;this.loadContent();
		}, loadContent: function loadContent() {
			function a(a) {
				var d,
				    e = "";if ("function" === typeof b.options.jsonSuccess) b.options.jsonSuccess.apply(this, [a]);else {
					for (d in a.owl) {
						a.owl.hasOwnProperty(d) && (e += a.owl[d].item);
					}b.$elem.html(e);
				}b.logIn();
			}var b = this,
			    e;"function" === typeof b.options.beforeInit && b.options.beforeInit.apply(this, [b.$elem]);"string" === typeof b.options.jsonPath ? (e = b.options.jsonPath, f.getJSON(e, a)) : b.logIn();
		}, logIn: function logIn() {
			this.$elem.data("owl-originalStyles", this.$elem.attr("style"));this.$elem.data("owl-originalClasses", this.$elem.attr("class"));this.$elem.css({ opacity: 0 });this.orignalItems = this.options.items;this.checkBrowser();this.wrapperWidth = 0;this.checkVisible = null;this.setVars();
		}, setVars: function setVars() {
			if (0 === this.$elem.children().length) return !1;this.baseClass();this.eventTypes();this.$userItems = this.$elem.children();this.itemsAmount = this.$userItems.length;
			this.wrapItems();this.$owlItems = this.$elem.find(".owl-item");this.$owlWrapper = this.$elem.find(".owl-wrapper");this.playDirection = "next";this.prevItem = 0;this.prevArr = [0];this.currentItem = 0;this.customEvents();this.onStartup();
		}, onStartup: function onStartup() {
			this.updateItems();this.calculateAll();this.buildControls();this.updateControls();this.response();this.moveEvents();this.stopOnHover();this.owlStatus();!1 !== this.options.transitionStyle && this.transitionTypes(this.options.transitionStyle);!0 === this.options.autoPlay && (this.options.autoPlay = 5E3);this.play();this.$elem.find(".owl-wrapper").css("display", "block");this.$elem.is(":visible") ? this.$elem.css("opacity", 1) : this.watchVisibility();this.onstartup = !1;this.eachMoveUpdate();"function" === typeof this.options.afterInit && this.options.afterInit.apply(this, [this.$elem]);
		}, eachMoveUpdate: function eachMoveUpdate() {
			!0 === this.options.lazyLoad && this.lazyLoad();!0 === this.options.autoHeight && this.autoHeight();this.onVisibleItems();"function" === typeof this.options.afterAction && this.options.afterAction.apply(this, [this.$elem]);
		}, updateVars: function updateVars() {
			"function" === typeof this.options.beforeUpdate && this.options.beforeUpdate.apply(this, [this.$elem]);this.watchVisibility();this.updateItems();this.calculateAll();this.updatePosition();this.updateControls();this.eachMoveUpdate();"function" === typeof this.options.afterUpdate && this.options.afterUpdate.apply(this, [this.$elem]);
		}, reload: function reload() {
			var a = this;g.setTimeout(function () {
				a.updateVars();
			}, 0);
		}, watchVisibility: function watchVisibility() {
			var a = this;if (!1 === a.$elem.is(":visible")) a.$elem.css({ opacity: 0 }), g.clearInterval(a.autoPlayInterval), g.clearInterval(a.checkVisible);else return !1;a.checkVisible = g.setInterval(function () {
				a.$elem.is(":visible") && (a.reload(), a.$elem.animate({ opacity: 1 }, 200), g.clearInterval(a.checkVisible));
			}, 500);
		}, wrapItems: function wrapItems() {
			this.$userItems.wrapAll('<div class="owl-wrapper">').wrap('<div class="owl-item"></div>');this.$elem.find(".owl-wrapper").wrap('<div class="owl-wrapper-outer">');this.wrapperOuter = this.$elem.find(".owl-wrapper-outer");this.$elem.css("display", "block");
		},
		baseClass: function baseClass() {
			var a = this.$elem.hasClass(this.options.baseClass),
			    b = this.$elem.hasClass(this.options.theme);a || this.$elem.addClass(this.options.baseClass);b || this.$elem.addClass(this.options.theme);
		}, updateItems: function updateItems() {
			var a, b;if (!1 === this.options.responsive) return !1;if (!0 === this.options.singleItem) return this.options.items = this.orignalItems = 1, this.options.itemsCustom = !1, this.options.itemsDesktop = !1, this.options.itemsDesktopSmall = !1, this.options.itemsTablet = !1, this.options.itemsTabletSmall = !1, this.options.itemsMobile = !1;a = f(this.options.responsiveBaseWidth).width();a > (this.options.itemsDesktop[0] || this.orignalItems) && (this.options.items = this.orignalItems);if (!1 !== this.options.itemsCustom) for (this.options.itemsCustom.sort(function (a, b) {
				return a[0] - b[0];
			}), b = 0; b < this.options.itemsCustom.length; b += 1) {
				this.options.itemsCustom[b][0] <= a && (this.options.items = this.options.itemsCustom[b][1]);
			} else a <= this.options.itemsDesktop[0] && !1 !== this.options.itemsDesktop && (this.options.items = this.options.itemsDesktop[1]), a <= this.options.itemsDesktopSmall[0] && !1 !== this.options.itemsDesktopSmall && (this.options.items = this.options.itemsDesktopSmall[1]), a <= this.options.itemsTablet[0] && !1 !== this.options.itemsTablet && (this.options.items = this.options.itemsTablet[1]), a <= this.options.itemsTabletSmall[0] && !1 !== this.options.itemsTabletSmall && (this.options.items = this.options.itemsTabletSmall[1]), a <= this.options.itemsMobile[0] && !1 !== this.options.itemsMobile && (this.options.items = this.options.itemsMobile[1]);this.options.items > this.itemsAmount && !0 === this.options.itemsScaleUp && (this.options.items = this.itemsAmount);
		}, response: function response() {
			var a = this,
			    b,
			    e;if (!0 !== a.options.responsive) return !1;e = f(g).width();a.resizer = function () {
				f(g).width() !== e && (!1 !== a.options.autoPlay && g.clearInterval(a.autoPlayInterval), g.clearTimeout(b), b = g.setTimeout(function () {
					e = f(g).width();a.updateVars();
				}, a.options.responsiveRefreshRate));
			};f(g).resize(a.resizer);
		}, updatePosition: function updatePosition() {
			this.jumpTo(this.currentItem);!1 !== this.options.autoPlay && this.checkAp();
		}, appendItemsSizes: function appendItemsSizes() {
			var a = this,
			    b = 0,
			    e = a.itemsAmount - a.options.items;a.$owlItems.each(function (c) {
				var d = f(this);d.css({ width: a.itemWidth }).data("owl-item", Number(c));if (0 === c % a.options.items || c === e) c > e || (b += 1);d.data("owl-roundPages", b);
			});
		}, appendWrapperSizes: function appendWrapperSizes() {
			this.$owlWrapper.css({ width: this.$owlItems.length * this.itemWidth * 2, left: 0 });this.appendItemsSizes();
		}, calculateAll: function calculateAll() {
			this.calculateWidth();this.appendWrapperSizes();this.loops();this.max();
		}, calculateWidth: function calculateWidth() {
			this.itemWidth = Math.round(this.$elem.width() / this.options.items);
		}, max: function max() {
			var a = -1 * (this.itemsAmount * this.itemWidth - this.options.items * this.itemWidth);this.options.items > this.itemsAmount ? this.maximumPixels = a = this.maximumItem = 0 : (this.maximumItem = this.itemsAmount - this.options.items, this.maximumPixels = a);return a;
		}, min: function min() {
			return 0;
		}, loops: function loops() {
			var a = 0,
			    b = 0,
			    e,
			    c;this.positionsInArray = [0];this.pagesInArray = [];for (e = 0; e < this.itemsAmount; e += 1) {
				b += this.itemWidth, this.positionsInArray.push(-b), !0 === this.options.scrollPerPage && (c = f(this.$owlItems[e]), c = c.data("owl-roundPages"), c !== a && (this.pagesInArray[a] = this.positionsInArray[e], a = c));
			}
		}, buildControls: function buildControls() {
			if (!0 === this.options.navigation || !0 === this.options.pagination) this.owlControls = f('<div class="owl-controls"/>').toggleClass("clickable", !this.browser.isTouch).appendTo(this.$elem);!0 === this.options.pagination && this.buildPagination();!0 === this.options.navigation && this.buildButtons();
		}, buildButtons: function buildButtons() {
			var a = this,
			    b = f('<div class="owl-buttons"/>');a.owlControls.append(b);a.buttonPrev = f("<div/>", { "class": "owl-prev", html: a.options.navigationText[0] || "" });a.buttonNext = f("<div/>", { "class": "owl-next", html: a.options.navigationText[1] || "" });b.append(a.buttonPrev).append(a.buttonNext);b.on("touchstart.owlControls mousedown.owlControls", 'div[class^="owl"]', function (a) {
				a.preventDefault();
			});b.on("touchend.owlControls mouseup.owlControls", 'div[class^="owl"]', function (b) {
				b.preventDefault();f(this).hasClass("owl-next") ? a.next() : a.prev();
			});
		}, buildPagination: function buildPagination() {
			var a = this;a.paginationWrapper = f('<div class="owl-pagination"/>');a.owlControls.append(a.paginationWrapper);a.paginationWrapper.on("touchend.owlControls mouseup.owlControls", ".owl-page", function (b) {
				b.preventDefault();Number(f(this).data("owl-page")) !== a.currentItem && a.goTo(Number(f(this).data("owl-page")), !0);
			});
		}, updatePagination: function updatePagination() {
			var a, b, e, c, d, g;if (!1 === this.options.pagination) return !1;this.paginationWrapper.html("");a = 0;b = this.itemsAmount - this.itemsAmount % this.options.items;for (c = 0; c < this.itemsAmount; c += 1) {
				0 === c % this.options.items && (a += 1, b === c && (e = this.itemsAmount - this.options.items), d = f("<div/>", { "class": "owl-page" }), g = f("<span></span>", { text: !0 === this.options.paginationNumbers ? a : "", "class": !0 === this.options.paginationNumbers ? "owl-numbers" : "" }), d.append(g), d.data("owl-page", b === c ? e : c), d.data("owl-roundPages", a), this.paginationWrapper.append(d));
			}this.checkPagination();
		}, checkPagination: function checkPagination() {
			var a = this;if (!1 === a.options.pagination) return !1;a.paginationWrapper.find(".owl-page").each(function () {
				f(this).data("owl-roundPages") === f(a.$owlItems[a.currentItem]).data("owl-roundPages") && (a.paginationWrapper.find(".owl-page").removeClass("active"), f(this).addClass("active"));
			});
		}, checkNavigation: function checkNavigation() {
			if (!1 === this.options.navigation) return !1;!1 === this.options.rewindNav && (0 === this.currentItem && 0 === this.maximumItem ? (this.buttonPrev.addClass("disabled"), this.buttonNext.addClass("disabled")) : 0 === this.currentItem && 0 !== this.maximumItem ? (this.buttonPrev.addClass("disabled"), this.buttonNext.removeClass("disabled")) : this.currentItem === this.maximumItem ? (this.buttonPrev.removeClass("disabled"), this.buttonNext.addClass("disabled")) : 0 !== this.currentItem && this.currentItem !== this.maximumItem && (this.buttonPrev.removeClass("disabled"), this.buttonNext.removeClass("disabled")));
		}, updateControls: function updateControls() {
			this.updatePagination();this.checkNavigation();this.owlControls && (this.options.items >= this.itemsAmount ? this.owlControls.hide() : this.owlControls.show());
		}, destroyControls: function destroyControls() {
			this.owlControls && this.owlControls.remove();
		}, next: function next(a) {
			if (this.isTransition) return !1;
			this.currentItem += !0 === this.options.scrollPerPage ? this.options.items : 1;if (this.currentItem > this.maximumItem + (!0 === this.options.scrollPerPage ? this.options.items - 1 : 0)) if (!0 === this.options.rewindNav) this.currentItem = 0, a = "rewind";else return this.currentItem = this.maximumItem, !1;this.goTo(this.currentItem, a);
		}, prev: function prev(a) {
			if (this.isTransition) return !1;this.currentItem = !0 === this.options.scrollPerPage && 0 < this.currentItem && this.currentItem < this.options.items ? 0 : this.currentItem - (!0 === this.options.scrollPerPage ? this.options.items : 1);if (0 > this.currentItem) if (!0 === this.options.rewindNav) this.currentItem = this.maximumItem, a = "rewind";else return this.currentItem = 0, !1;this.goTo(this.currentItem, a);
		}, goTo: function goTo(a, b, e) {
			var c = this;if (c.isTransition) return !1;"function" === typeof c.options.beforeMove && c.options.beforeMove.apply(this, [c.$elem]);a >= c.maximumItem ? a = c.maximumItem : 0 >= a && (a = 0);c.currentItem = c.owl.currentItem = a;if (!1 !== c.options.transitionStyle && "drag" !== e && 1 === c.options.items && !0 === c.browser.support3d) return c.swapSpeed(0), !0 === c.browser.support3d ? c.transition3d(c.positionsInArray[a]) : c.css2slide(c.positionsInArray[a], 1), c.afterGo(), c.singleItemTransition(), !1;a = c.positionsInArray[a];!0 === c.browser.support3d ? (c.isCss3Finish = !1, !0 === b ? (c.swapSpeed("paginationSpeed"), g.setTimeout(function () {
				c.isCss3Finish = !0;
			}, c.options.paginationSpeed)) : "rewind" === b ? (c.swapSpeed(c.options.rewindSpeed), g.setTimeout(function () {
				c.isCss3Finish = !0;
			}, c.options.rewindSpeed)) : (c.swapSpeed("slideSpeed"), g.setTimeout(function () {
				c.isCss3Finish = !0;
			}, c.options.slideSpeed)), c.transition3d(a)) : !0 === b ? c.css2slide(a, c.options.paginationSpeed) : "rewind" === b ? c.css2slide(a, c.options.rewindSpeed) : c.css2slide(a, c.options.slideSpeed);c.afterGo();
		}, jumpTo: function jumpTo(a) {
			"function" === typeof this.options.beforeMove && this.options.beforeMove.apply(this, [this.$elem]);a >= this.maximumItem || -1 === a ? a = this.maximumItem : 0 >= a && (a = 0);this.swapSpeed(0);!0 === this.browser.support3d ? this.transition3d(this.positionsInArray[a]) : this.css2slide(this.positionsInArray[a], 1);this.currentItem = this.owl.currentItem = a;this.afterGo();
		}, afterGo: function afterGo() {
			this.prevArr.push(this.currentItem);this.prevItem = this.owl.prevItem = this.prevArr[this.prevArr.length - 2];this.prevArr.shift(0);this.prevItem !== this.currentItem && (this.checkPagination(), this.checkNavigation(), this.eachMoveUpdate(), !1 !== this.options.autoPlay && this.checkAp());"function" === typeof this.options.afterMove && this.prevItem !== this.currentItem && this.options.afterMove.apply(this, [this.$elem]);
		}, stop: function stop() {
			this.apStatus = "stop";g.clearInterval(this.autoPlayInterval);
		},
		checkAp: function checkAp() {
			"stop" !== this.apStatus && this.play();
		}, play: function play() {
			var a = this;a.apStatus = "play";if (!1 === a.options.autoPlay) return !1;g.clearInterval(a.autoPlayInterval);a.autoPlayInterval = g.setInterval(function () {
				a.next(!0);
			}, a.options.autoPlay);
		}, swapSpeed: function swapSpeed(a) {
			"slideSpeed" === a ? this.$owlWrapper.css(this.addCssSpeed(this.options.slideSpeed)) : "paginationSpeed" === a ? this.$owlWrapper.css(this.addCssSpeed(this.options.paginationSpeed)) : "string" !== typeof a && this.$owlWrapper.css(this.addCssSpeed(a));
		},
		addCssSpeed: function addCssSpeed(a) {
			return { "-webkit-transition": "all " + a + "ms ease", "-moz-transition": "all " + a + "ms ease", "-o-transition": "all " + a + "ms ease", transition: "all " + a + "ms ease" };
		}, removeTransition: function removeTransition() {
			return { "-webkit-transition": "", "-moz-transition": "", "-o-transition": "", transition: "" };
		}, doTranslate: function doTranslate(a) {
			return { "-webkit-transform": "translate3d(" + a + "px, 0px, 0px)", "-moz-transform": "translate3d(" + a + "px, 0px, 0px)", "-o-transform": "translate3d(" + a + "px, 0px, 0px)", "-ms-transform": "translate3d(" + a + "px, 0px, 0px)", transform: "translate3d(" + a + "px, 0px,0px)" };
		}, transition3d: function transition3d(a) {
			this.$owlWrapper.css(this.doTranslate(a));
		}, css2move: function css2move(a) {
			this.$owlWrapper.css({ left: a });
		}, css2slide: function css2slide(a, b) {
			var e = this;e.isCssFinish = !1;e.$owlWrapper.stop(!0, !0).animate({ left: a }, { duration: b || e.options.slideSpeed, complete: function complete() {
					e.isCssFinish = !0;
				} });
		}, checkBrowser: function checkBrowser() {
			var a = k.createElement("div");a.style.cssText = "  -moz-transform:translate3d(0px, 0px, 0px); -ms-transform:translate3d(0px, 0px, 0px); -o-transform:translate3d(0px, 0px, 0px); -webkit-transform:translate3d(0px, 0px, 0px); transform:translate3d(0px, 0px, 0px)";
			a = a.style.cssText.match(/translate3d\(0px, 0px, 0px\)/g);this.browser = { support3d: null !== a && 1 === a.length, isTouch: "ontouchstart" in g || g.navigator.msMaxTouchPoints };
		}, moveEvents: function moveEvents() {
			if (!1 !== this.options.mouseDrag || !1 !== this.options.touchDrag) this.gestures(), this.disabledEvents();
		}, eventTypes: function eventTypes() {
			var a = ["s", "e", "x"];this.ev_types = {};!0 === this.options.mouseDrag && !0 === this.options.touchDrag ? a = ["touchstart.owl mousedown.owl", "touchmove.owl mousemove.owl", "touchend.owl touchcancel.owl mouseup.owl"] : !1 === this.options.mouseDrag && !0 === this.options.touchDrag ? a = ["touchstart.owl", "touchmove.owl", "touchend.owl touchcancel.owl"] : !0 === this.options.mouseDrag && !1 === this.options.touchDrag && (a = ["mousedown.owl", "mousemove.owl", "mouseup.owl"]);this.ev_types.start = a[0];this.ev_types.move = a[1];this.ev_types.end = a[2];
		}, disabledEvents: function disabledEvents() {
			this.$elem.on("dragstart.owl", function (a) {
				a.preventDefault();
			});this.$elem.on("mousedown.disableTextSelect", function (a) {
				return f(a.target).is("input, textarea, select, option");
			});
		},
		gestures: function gestures() {
			function a(a) {
				if (void 0 !== a.touches) return { x: a.touches[0].pageX, y: a.touches[0].pageY };if (void 0 === a.touches) {
					if (void 0 !== a.pageX) return { x: a.pageX, y: a.pageY };if (void 0 === a.pageX) return { x: a.clientX, y: a.clientY };
				}
			}function b(a) {
				"on" === a ? (f(k).on(d.ev_types.move, e), f(k).on(d.ev_types.end, c)) : "off" === a && (f(k).off(d.ev_types.move), f(k).off(d.ev_types.end));
			}function e(b) {
				b = b.originalEvent || b || g.event;d.newPosX = a(b).x - h.offsetX;d.newPosY = a(b).y - h.offsetY;d.newRelativeX = d.newPosX - h.relativePos;
				"function" === typeof d.options.startDragging && !0 !== h.dragging && 0 !== d.newRelativeX && (h.dragging = !0, d.options.startDragging.apply(d, [d.$elem]));(8 < d.newRelativeX || -8 > d.newRelativeX) && !0 === d.browser.isTouch && (void 0 !== b.preventDefault ? b.preventDefault() : b.returnValue = !1, h.sliding = !0);(10 < d.newPosY || -10 > d.newPosY) && !1 === h.sliding && f(k).off("touchmove.owl");d.newPosX = Math.max(Math.min(d.newPosX, d.newRelativeX / 5), d.maximumPixels + d.newRelativeX / 5);!0 === d.browser.support3d ? d.transition3d(d.newPosX) : d.css2move(d.newPosX);
			}
			function c(a) {
				a = a.originalEvent || a || g.event;var c;a.target = a.target || a.srcElement;h.dragging = !1;!0 !== d.browser.isTouch && d.$owlWrapper.removeClass("grabbing");d.dragDirection = 0 > d.newRelativeX ? d.owl.dragDirection = "left" : d.owl.dragDirection = "right";0 !== d.newRelativeX && (c = d.getNewPosition(), d.goTo(c, !1, "drag"), h.targetElement === a.target && !0 !== d.browser.isTouch && (f(a.target).on("click.disable", function (a) {
					a.stopImmediatePropagation();a.stopPropagation();a.preventDefault();f(a.target).off("click.disable");
				}), a = f._data(a.target, "events").click, c = a.pop(), a.splice(0, 0, c)));b("off");
			}var d = this,
			    h = { offsetX: 0, offsetY: 0, baseElWidth: 0, relativePos: 0, position: null, minSwipe: null, maxSwipe: null, sliding: null, dargging: null, targetElement: null };d.isCssFinish = !0;d.$elem.on(d.ev_types.start, ".owl-wrapper", function (c) {
				c = c.originalEvent || c || g.event;var e;if (3 === c.which) return !1;if (!(d.itemsAmount <= d.options.items)) {
					if (!1 === d.isCssFinish && !d.options.dragBeforeAnimFinish || !1 === d.isCss3Finish && !d.options.dragBeforeAnimFinish) return !1;
					!1 !== d.options.autoPlay && g.clearInterval(d.autoPlayInterval);!0 === d.browser.isTouch || d.$owlWrapper.hasClass("grabbing") || d.$owlWrapper.addClass("grabbing");d.newPosX = 0;d.newRelativeX = 0;f(this).css(d.removeTransition());e = f(this).position();h.relativePos = e.left;h.offsetX = a(c).x - e.left;h.offsetY = a(c).y - e.top;b("on");h.sliding = !1;h.targetElement = c.target || c.srcElement;
				}
			});
		}, getNewPosition: function getNewPosition() {
			var a = this.closestItem();a > this.maximumItem ? a = this.currentItem = this.maximumItem : 0 <= this.newPosX && (this.currentItem = a = 0);return a;
		}, closestItem: function closestItem() {
			var a = this,
			    b = !0 === a.options.scrollPerPage ? a.pagesInArray : a.positionsInArray,
			    e = a.newPosX,
			    c = null;f.each(b, function (d, g) {
				e - a.itemWidth / 20 > b[d + 1] && e - a.itemWidth / 20 < g && "left" === a.moveDirection() ? (c = g, a.currentItem = !0 === a.options.scrollPerPage ? f.inArray(c, a.positionsInArray) : d) : e + a.itemWidth / 20 < g && e + a.itemWidth / 20 > (b[d + 1] || b[d] - a.itemWidth) && "right" === a.moveDirection() && (!0 === a.options.scrollPerPage ? (c = b[d + 1] || b[b.length - 1], a.currentItem = f.inArray(c, a.positionsInArray)) : (c = b[d + 1], a.currentItem = d + 1));
			});return a.currentItem;
		}, moveDirection: function moveDirection() {
			var a;0 > this.newRelativeX ? (a = "right", this.playDirection = "next") : (a = "left", this.playDirection = "prev");return a;
		}, customEvents: function customEvents() {
			var a = this;a.$elem.on("owl.next", function () {
				a.next();
			});a.$elem.on("owl.prev", function () {
				a.prev();
			});a.$elem.on("owl.play", function (b, e) {
				a.options.autoPlay = e;a.play();a.hoverStatus = "play";
			});a.$elem.on("owl.stop", function () {
				a.stop();a.hoverStatus = "stop";
			});a.$elem.on("owl.goTo", function (b, e) {
				a.goTo(e);
			});
			a.$elem.on("owl.jumpTo", function (b, e) {
				a.jumpTo(e);
			});
		}, stopOnHover: function stopOnHover() {
			var a = this;!0 === a.options.stopOnHover && !0 !== a.browser.isTouch && !1 !== a.options.autoPlay && (a.$elem.on("mouseover", function () {
				a.stop();
			}), a.$elem.on("mouseout", function () {
				"stop" !== a.hoverStatus && a.play();
			}));
		}, lazyLoad: function lazyLoad() {
			var a, b, e, c, d;if (!1 === this.options.lazyLoad) return !1;for (a = 0; a < this.itemsAmount; a += 1) {
				b = f(this.$owlItems[a]), "loaded" !== b.data("owl-loaded") && (e = b.data("owl-item"), c = b.find(".lazyOwl"), "string" !== typeof c.data("src") ? b.data("owl-loaded", "loaded") : (void 0 === b.data("owl-loaded") && (c.hide(), b.addClass("loading").data("owl-loaded", "checked")), (d = !0 === this.options.lazyFollow ? e >= this.currentItem : !0) && e < this.currentItem + this.options.items && c.length && this.lazyPreload(b, c)));
			}
		}, lazyPreload: function lazyPreload(a, b) {
			function e() {
				a.data("owl-loaded", "loaded").removeClass("loading");b.removeAttr("data-src");"fade" === d.options.lazyEffect ? b.fadeIn(400) : b.show();"function" === typeof d.options.afterLazyLoad && d.options.afterLazyLoad.apply(this, [d.$elem]);
			}function c() {
				f += 1;d.completeImg(b.get(0)) || !0 === k ? e() : 100 >= f ? g.setTimeout(c, 100) : e();
			}var d = this,
			    f = 0,
			    k;"DIV" === b.prop("tagName") ? (b.css("background-image", "url(" + b.data("src") + ")"), k = !0) : b[0].src = b.data("src");c();
		}, autoHeight: function autoHeight() {
			function a() {
				var a = f(e.$owlItems[e.currentItem]).height();e.wrapperOuter.css("height", a + "px");e.wrapperOuter.hasClass("autoHeight") || g.setTimeout(function () {
					e.wrapperOuter.addClass("autoHeight");
				}, 0);
			}function b() {
				d += 1;e.completeImg(c.get(0)) ? a() : 100 >= d ? g.setTimeout(b, 100) : e.wrapperOuter.css("height", "");
			}var e = this,
			    c = f(e.$owlItems[e.currentItem]).find("img"),
			    d;void 0 !== c.get(0) ? (d = 0, b()) : a();
		}, completeImg: function completeImg(a) {
			return !a.complete || "undefined" !== typeof a.naturalWidth && 0 === a.naturalWidth ? !1 : !0;
		}, onVisibleItems: function onVisibleItems() {
			var a;!0 === this.options.addClassActive && this.$owlItems.removeClass("active");this.visibleItems = [];for (a = this.currentItem; a < this.currentItem + this.options.items; a += 1) {
				this.visibleItems.push(a), !0 === this.options.addClassActive && f(this.$owlItems[a]).addClass("active");
			}this.owl.visibleItems = this.visibleItems;
		}, transitionTypes: function transitionTypes(a) {
			this.outClass = "owl-" + a + "-out";this.inClass = "owl-" + a + "-in";
		}, singleItemTransition: function singleItemTransition() {
			var a = this,
			    b = a.outClass,
			    e = a.inClass,
			    c = a.$owlItems.eq(a.currentItem),
			    d = a.$owlItems.eq(a.prevItem),
			    f = Math.abs(a.positionsInArray[a.currentItem]) + a.positionsInArray[a.prevItem],
			    g = Math.abs(a.positionsInArray[a.currentItem]) + a.itemWidth / 2;a.isTransition = !0;a.$owlWrapper.addClass("owl-origin").css({ "-webkit-transform-origin": g + "px", "-moz-perspective-origin": g + "px", "perspective-origin": g + "px" });d.css({ position: "relative", left: f + "px" }).addClass(b).on("webkitAnimationEnd oAnimationEnd MSAnimationEnd animationend", function () {
				a.endPrev = !0;d.off("webkitAnimationEnd oAnimationEnd MSAnimationEnd animationend");a.clearTransStyle(d, b);
			});c.addClass(e).on("webkitAnimationEnd oAnimationEnd MSAnimationEnd animationend", function () {
				a.endCurrent = !0;c.off("webkitAnimationEnd oAnimationEnd MSAnimationEnd animationend");a.clearTransStyle(c, e);
			});
		}, clearTransStyle: function clearTransStyle(a, b) {
			a.css({ position: "", left: "" }).removeClass(b);this.endPrev && this.endCurrent && (this.$owlWrapper.removeClass("owl-origin"), this.isTransition = this.endCurrent = this.endPrev = !1);
		}, owlStatus: function owlStatus() {
			this.owl = { userOptions: this.userOptions, baseElement: this.$elem, userItems: this.$userItems, owlItems: this.$owlItems, currentItem: this.currentItem, prevItem: this.prevItem, visibleItems: this.visibleItems, isTouch: this.browser.isTouch, browser: this.browser, dragDirection: this.dragDirection };
		}, clearEvents: function clearEvents() {
			this.$elem.off(".owl owl mousedown.disableTextSelect");
			f(k).off(".owl owl");f(g).off("resize", this.resizer);
		}, unWrap: function unWrap() {
			0 !== this.$elem.children().length && (this.$owlWrapper.unwrap(), this.$userItems.unwrap().unwrap(), this.owlControls && this.owlControls.remove());this.clearEvents();this.$elem.attr("style", this.$elem.data("owl-originalStyles") || "").attr("class", this.$elem.data("owl-originalClasses"));
		}, destroy: function destroy() {
			this.stop();g.clearInterval(this.checkVisible);this.unWrap();this.$elem.removeData();
		}, reinit: function reinit(a) {
			a = f.extend({}, this.userOptions, a);this.unWrap();this.init(a, this.$elem);
		}, addItem: function addItem(a, b) {
			var e;if (!a) return !1;if (0 === this.$elem.children().length) return this.$elem.append(a), this.setVars(), !1;this.unWrap();e = void 0 === b || -1 === b ? -1 : b;e >= this.$userItems.length || -1 === e ? this.$userItems.eq(-1).after(a) : this.$userItems.eq(e).before(a);this.setVars();
		}, removeItem: function removeItem(a) {
			if (0 === this.$elem.children().length) return !1;a = void 0 === a || -1 === a ? -1 : a;this.unWrap();this.$userItems.eq(a).remove();this.setVars();
		} };f.fn.owlCarousel = function (a) {
		return this.each(function () {
			if (!0 === f(this).data("owl-init")) return !1;f(this).data("owl-init", !0);var b = Object.create(l);b.init(a, this);f.data(this, "owlCarousel", b);
		});
	};f.fn.owlCarousel.options = { items: 5, itemsCustom: !1, itemsDesktop: [1199, 4], itemsDesktopSmall: [979, 3], itemsTablet: [768, 2], itemsTabletSmall: !1, itemsMobile: [479, 1], singleItem: !1, itemsScaleUp: !1, slideSpeed: 200, paginationSpeed: 800, rewindSpeed: 1E3, autoPlay: !1, stopOnHover: !1, navigation: !1, navigationText: ["prev", "next"], rewindNav: !0, scrollPerPage: !1, pagination: !0, paginationNumbers: !1,
		responsive: !0, responsiveRefreshRate: 200, responsiveBaseWidth: g, baseClass: "owl-carousel", theme: "owl-theme", lazyLoad: !1, lazyFollow: !0, lazyEffect: "fade", autoHeight: !1, jsonPath: !1, jsonSuccess: !1, dragBeforeAnimFinish: !0, mouseDrag: !0, touchDrag: !0, addClassActive: !1, transitionStyle: !1, beforeUpdate: !1, afterUpdate: !1, beforeInit: !1, afterInit: !1, beforeMove: !1, afterMove: !1, afterAction: !1, startDragging: !1, afterLazyLoad: !1 };
})(jQuery, window, document);
/*! jQuery UI - v1.11.4 - 2016-03-01
* http://jqueryui.com
* Includes: core.js, widget.js, mouse.js, slider.js
* Copyright jQuery Foundation and other contributors; Licensed MIT */

(function (e) {
	"function" == typeof define && define.amd ? define(["jquery"], e) : e(jQuery);
})(function (e) {
	function t(t, s) {
		var n,
		    a,
		    o,
		    r = t.nodeName.toLowerCase();return "area" === r ? (n = t.parentNode, a = n.name, t.href && a && "map" === n.nodeName.toLowerCase() ? (o = e("img[usemap='#" + a + "']")[0], !!o && i(o)) : !1) : (/^(input|select|textarea|button|object)$/.test(r) ? !t.disabled : "a" === r ? t.href || s : s) && i(t);
	}function i(t) {
		return e.expr.filters.visible(t) && !e(t).parents().addBack().filter(function () {
			return "hidden" === e.css(this, "visibility");
		}).length;
	}e.ui = e.ui || {}, e.extend(e.ui, { version: "1.11.4", keyCode: { BACKSPACE: 8, COMMA: 188, DELETE: 46, DOWN: 40, END: 35, ENTER: 13, ESCAPE: 27, HOME: 36, LEFT: 37, PAGE_DOWN: 34, PAGE_UP: 33, PERIOD: 190, RIGHT: 39, SPACE: 32, TAB: 9, UP: 38 } }), e.fn.extend({ scrollParent: function scrollParent(t) {
			var i = this.css("position"),
			    s = "absolute" === i,
			    n = t ? /(auto|scroll|hidden)/ : /(auto|scroll)/,
			    a = this.parents().filter(function () {
				var t = e(this);return s && "static" === t.css("position") ? !1 : n.test(t.css("overflow") + t.css("overflow-y") + t.css("overflow-x"));
			}).eq(0);return "fixed" !== i && a.length ? a : e(this[0].ownerDocument || document);
		}, uniqueId: function () {
			var e = 0;return function () {
				return this.each(function () {
					this.id || (this.id = "ui-id-" + ++e);
				});
			};
		}(), removeUniqueId: function removeUniqueId() {
			return this.each(function () {
				/^ui-id-\d+$/.test(this.id) && e(this).removeAttr("id");
			});
		} }), e.extend(e.expr[":"], { data: e.expr.createPseudo ? e.expr.createPseudo(function (t) {
			return function (i) {
				return !!e.data(i, t);
			};
		}) : function (t, i, s) {
			return !!e.data(t, s[3]);
		}, focusable: function focusable(i) {
			return t(i, !isNaN(e.attr(i, "tabindex")));
		}, tabbable: function tabbable(i) {
			var s = e.attr(i, "tabindex"),
			    n = isNaN(s);return (n || s >= 0) && t(i, !n);
		} }), e("<a>").outerWidth(1).jquery || e.each(["Width", "Height"], function (t, i) {
		function s(t, i, s, a) {
			return e.each(n, function () {
				i -= parseFloat(e.css(t, "padding" + this)) || 0, s && (i -= parseFloat(e.css(t, "border" + this + "Width")) || 0), a && (i -= parseFloat(e.css(t, "margin" + this)) || 0);
			}), i;
		}var n = "Width" === i ? ["Left", "Right"] : ["Top", "Bottom"],
		    a = i.toLowerCase(),
		    o = { innerWidth: e.fn.innerWidth, innerHeight: e.fn.innerHeight, outerWidth: e.fn.outerWidth, outerHeight: e.fn.outerHeight };e.fn["inner" + i] = function (t) {
			return void 0 === t ? o["inner" + i].call(this) : this.each(function () {
				e(this).css(a, s(this, t) + "px");
			});
		}, e.fn["outer" + i] = function (t, n) {
			return "number" != typeof t ? o["outer" + i].call(this, t) : this.each(function () {
				e(this).css(a, s(this, t, !0, n) + "px");
			});
		};
	}), e.fn.addBack || (e.fn.addBack = function (e) {
		return this.add(null == e ? this.prevObject : this.prevObject.filter(e));
	}), e("<a>").data("a-b", "a").removeData("a-b").data("a-b") && (e.fn.removeData = function (t) {
		return function (i) {
			return arguments.length ? t.call(this, e.camelCase(i)) : t.call(this);
		};
	}(e.fn.removeData)), e.ui.ie = !!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase()), e.fn.extend({ focus: function (t) {
			return function (i, s) {
				return "number" == typeof i ? this.each(function () {
					var t = this;setTimeout(function () {
						e(t).focus(), s && s.call(t);
					}, i);
				}) : t.apply(this, arguments);
			};
		}(e.fn.focus), disableSelection: function () {
			var e = "onselectstart" in document.createElement("div") ? "selectstart" : "mousedown";return function () {
				return this.bind(e + ".ui-disableSelection", function (e) {
					e.preventDefault();
				});
			};
		}(), enableSelection: function enableSelection() {
			return this.unbind(".ui-disableSelection");
		}, zIndex: function zIndex(t) {
			if (void 0 !== t) return this.css("zIndex", t);if (this.length) for (var i, s, n = e(this[0]); n.length && n[0] !== document;) {
				if (i = n.css("position"), ("absolute" === i || "relative" === i || "fixed" === i) && (s = parseInt(n.css("zIndex"), 10), !isNaN(s) && 0 !== s)) return s;n = n.parent();
			}return 0;
		} }), e.ui.plugin = { add: function add(t, i, s) {
			var n,
			    a = e.ui[t].prototype;for (n in s) {
				a.plugins[n] = a.plugins[n] || [], a.plugins[n].push([i, s[n]]);
			}
		}, call: function call(e, t, i, s) {
			var n,
			    a = e.plugins[t];if (a && (s || e.element[0].parentNode && 11 !== e.element[0].parentNode.nodeType)) for (n = 0; a.length > n; n++) {
				e.options[a[n][0]] && a[n][1].apply(e.element, i);
			}
		} };var s = 0,
	    n = Array.prototype.slice;e.cleanData = function (t) {
		return function (i) {
			var s, n, a;for (a = 0; null != (n = i[a]); a++) {
				try {
					s = e._data(n, "events"), s && s.remove && e(n).triggerHandler("remove");
				} catch (o) {}
			}t(i);
		};
	}(e.cleanData), e.widget = function (t, i, s) {
		var n,
		    a,
		    o,
		    r,
		    h = {},
		    l = t.split(".")[0];return t = t.split(".")[1], n = l + "-" + t, s || (s = i, i = e.Widget), e.expr[":"][n.toLowerCase()] = function (t) {
			return !!e.data(t, n);
		}, e[l] = e[l] || {}, a = e[l][t], o = e[l][t] = function (e, t) {
			return this._createWidget ? (arguments.length && this._createWidget(e, t), void 0) : new o(e, t);
		}, e.extend(o, a, { version: s.version, _proto: e.extend({}, s), _childConstructors: [] }), r = new i(), r.options = e.widget.extend({}, r.options), e.each(s, function (t, s) {
			return e.isFunction(s) ? (h[t] = function () {
				var e = function e() {
					return i.prototype[t].apply(this, arguments);
				},
				    n = function n(e) {
					return i.prototype[t].apply(this, e);
				};return function () {
					var t,
					    i = this._super,
					    a = this._superApply;return this._super = e, this._superApply = n, t = s.apply(this, arguments), this._super = i, this._superApply = a, t;
				};
			}(), void 0) : (h[t] = s, void 0);
		}), o.prototype = e.widget.extend(r, { widgetEventPrefix: a ? r.widgetEventPrefix || t : t }, h, { constructor: o, namespace: l, widgetName: t, widgetFullName: n }), a ? (e.each(a._childConstructors, function (t, i) {
			var s = i.prototype;e.widget(s.namespace + "." + s.widgetName, o, i._proto);
		}), delete a._childConstructors) : i._childConstructors.push(o), e.widget.bridge(t, o), o;
	}, e.widget.extend = function (t) {
		for (var i, s, a = n.call(arguments, 1), o = 0, r = a.length; r > o; o++) {
			for (i in a[o]) {
				s = a[o][i], a[o].hasOwnProperty(i) && void 0 !== s && (t[i] = e.isPlainObject(s) ? e.isPlainObject(t[i]) ? e.widget.extend({}, t[i], s) : e.widget.extend({}, s) : s);
			}
		}return t;
	}, e.widget.bridge = function (t, i) {
		var s = i.prototype.widgetFullName || t;e.fn[t] = function (a) {
			var o = "string" == typeof a,
			    r = n.call(arguments, 1),
			    h = this;return o ? this.each(function () {
				var i,
				    n = e.data(this, s);return "instance" === a ? (h = n, !1) : n ? e.isFunction(n[a]) && "_" !== a.charAt(0) ? (i = n[a].apply(n, r), i !== n && void 0 !== i ? (h = i && i.jquery ? h.pushStack(i.get()) : i, !1) : void 0) : e.error("no such method '" + a + "' for " + t + " widget instance") : e.error("cannot call methods on " + t + " prior to initialization; " + "attempted to call method '" + a + "'");
			}) : (r.length && (a = e.widget.extend.apply(null, [a].concat(r))), this.each(function () {
				var t = e.data(this, s);t ? (t.option(a || {}), t._init && t._init()) : e.data(this, s, new i(a, this));
			})), h;
		};
	}, e.Widget = function () {}, e.Widget._childConstructors = [], e.Widget.prototype = { widgetName: "widget", widgetEventPrefix: "", defaultElement: "<div>", options: { disabled: !1, create: null }, _createWidget: function _createWidget(t, i) {
			i = e(i || this.defaultElement || this)[0], this.element = e(i), this.uuid = s++, this.eventNamespace = "." + this.widgetName + this.uuid, this.bindings = e(), this.hoverable = e(), this.focusable = e(), i !== this && (e.data(i, this.widgetFullName, this), this._on(!0, this.element, { remove: function remove(e) {
					e.target === i && this.destroy();
				} }), this.document = e(i.style ? i.ownerDocument : i.document || i), this.window = e(this.document[0].defaultView || this.document[0].parentWindow)), this.options = e.widget.extend({}, this.options, this._getCreateOptions(), t), this._create(), this._trigger("create", null, this._getCreateEventData()), this._init();
		}, _getCreateOptions: e.noop, _getCreateEventData: e.noop, _create: e.noop, _init: e.noop, destroy: function destroy() {
			this._destroy(), this.element.unbind(this.eventNamespace).removeData(this.widgetFullName).removeData(e.camelCase(this.widgetFullName)), this.widget().unbind(this.eventNamespace).removeAttr("aria-disabled").removeClass(this.widgetFullName + "-disabled " + "ui-state-disabled"), this.bindings.unbind(this.eventNamespace), this.hoverable.removeClass("ui-state-hover"), this.focusable.removeClass("ui-state-focus");
		}, _destroy: e.noop, widget: function widget() {
			return this.element;
		}, option: function option(t, i) {
			var s,
			    n,
			    a,
			    o = t;if (0 === arguments.length) return e.widget.extend({}, this.options);if ("string" == typeof t) if (o = {}, s = t.split("."), t = s.shift(), s.length) {
				for (n = o[t] = e.widget.extend({}, this.options[t]), a = 0; s.length - 1 > a; a++) {
					n[s[a]] = n[s[a]] || {}, n = n[s[a]];
				}if (t = s.pop(), 1 === arguments.length) return void 0 === n[t] ? null : n[t];n[t] = i;
			} else {
				if (1 === arguments.length) return void 0 === this.options[t] ? null : this.options[t];o[t] = i;
			}return this._setOptions(o), this;
		}, _setOptions: function _setOptions(e) {
			var t;for (t in e) {
				this._setOption(t, e[t]);
			}return this;
		}, _setOption: function _setOption(e, t) {
			return this.options[e] = t, "disabled" === e && (this.widget().toggleClass(this.widgetFullName + "-disabled", !!t), t && (this.hoverable.removeClass("ui-state-hover"), this.focusable.removeClass("ui-state-focus"))), this;
		}, enable: function enable() {
			return this._setOptions({ disabled: !1 });
		}, disable: function disable() {
			return this._setOptions({ disabled: !0 });
		}, _on: function _on(t, i, s) {
			var n,
			    a = this;"boolean" != typeof t && (s = i, i = t, t = !1), s ? (i = n = e(i), this.bindings = this.bindings.add(i)) : (s = i, i = this.element, n = this.widget()), e.each(s, function (s, o) {
				function r() {
					return t || a.options.disabled !== !0 && !e(this).hasClass("ui-state-disabled") ? ("string" == typeof o ? a[o] : o).apply(a, arguments) : void 0;
				}"string" != typeof o && (r.guid = o.guid = o.guid || r.guid || e.guid++);var h = s.match(/^([\w:-]*)\s*(.*)$/),
				    l = h[1] + a.eventNamespace,
				    u = h[2];u ? n.delegate(u, l, r) : i.bind(l, r);
			});
		}, _off: function _off(t, i) {
			i = (i || "").split(" ").join(this.eventNamespace + " ") + this.eventNamespace, t.unbind(i).undelegate(i), this.bindings = e(this.bindings.not(t).get()), this.focusable = e(this.focusable.not(t).get()), this.hoverable = e(this.hoverable.not(t).get());
		}, _delay: function _delay(e, t) {
			function i() {
				return ("string" == typeof e ? s[e] : e).apply(s, arguments);
			}var s = this;return setTimeout(i, t || 0);
		}, _hoverable: function _hoverable(t) {
			this.hoverable = this.hoverable.add(t), this._on(t, { mouseenter: function mouseenter(t) {
					e(t.currentTarget).addClass("ui-state-hover");
				}, mouseleave: function mouseleave(t) {
					e(t.currentTarget).removeClass("ui-state-hover");
				} });
		}, _focusable: function _focusable(t) {
			this.focusable = this.focusable.add(t), this._on(t, { focusin: function focusin(t) {
					e(t.currentTarget).addClass("ui-state-focus");
				}, focusout: function focusout(t) {
					e(t.currentTarget).removeClass("ui-state-focus");
				} });
		}, _trigger: function _trigger(t, i, s) {
			var n,
			    a,
			    o = this.options[t];if (s = s || {}, i = e.Event(i), i.type = (t === this.widgetEventPrefix ? t : this.widgetEventPrefix + t).toLowerCase(), i.target = this.element[0], a = i.originalEvent) for (n in a) {
				n in i || (i[n] = a[n]);
			}return this.element.trigger(i, s), !(e.isFunction(o) && o.apply(this.element[0], [i].concat(s)) === !1 || i.isDefaultPrevented());
		} }, e.each({ show: "fadeIn", hide: "fadeOut" }, function (t, i) {
		e.Widget.prototype["_" + t] = function (s, n, a) {
			"string" == typeof n && (n = { effect: n });var o,
			    r = n ? n === !0 || "number" == typeof n ? i : n.effect || i : t;n = n || {}, "number" == typeof n && (n = { duration: n }), o = !e.isEmptyObject(n), n.complete = a, n.delay && s.delay(n.delay), o && e.effects && e.effects.effect[r] ? s[t](n) : r !== t && s[r] ? s[r](n.duration, n.easing, a) : s.queue(function (i) {
				e(this)[t](), a && a.call(s[0]), i();
			});
		};
	}), e.widget;var a = !1;e(document).mouseup(function () {
		a = !1;
	}), e.widget("ui.mouse", { version: "1.11.4", options: { cancel: "input,textarea,button,select,option", distance: 1, delay: 0 }, _mouseInit: function _mouseInit() {
			var t = this;this.element.bind("mousedown." + this.widgetName, function (e) {
				return t._mouseDown(e);
			}).bind("click." + this.widgetName, function (i) {
				return !0 === e.data(i.target, t.widgetName + ".preventClickEvent") ? (e.removeData(i.target, t.widgetName + ".preventClickEvent"), i.stopImmediatePropagation(), !1) : void 0;
			}), this.started = !1;
		}, _mouseDestroy: function _mouseDestroy() {
			this.element.unbind("." + this.widgetName), this._mouseMoveDelegate && this.document.unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate);
		}, _mouseDown: function _mouseDown(t) {
			if (!a) {
				this._mouseMoved = !1, this._mouseStarted && this._mouseUp(t), this._mouseDownEvent = t;var i = this,
				    s = 1 === t.which,
				    n = "string" == typeof this.options.cancel && t.target.nodeName ? e(t.target).closest(this.options.cancel).length : !1;return s && !n && this._mouseCapture(t) ? (this.mouseDelayMet = !this.options.delay, this.mouseDelayMet || (this._mouseDelayTimer = setTimeout(function () {
					i.mouseDelayMet = !0;
				}, this.options.delay)), this._mouseDistanceMet(t) && this._mouseDelayMet(t) && (this._mouseStarted = this._mouseStart(t) !== !1, !this._mouseStarted) ? (t.preventDefault(), !0) : (!0 === e.data(t.target, this.widgetName + ".preventClickEvent") && e.removeData(t.target, this.widgetName + ".preventClickEvent"), this._mouseMoveDelegate = function (e) {
					return i._mouseMove(e);
				}, this._mouseUpDelegate = function (e) {
					return i._mouseUp(e);
				}, this.document.bind("mousemove." + this.widgetName, this._mouseMoveDelegate).bind("mouseup." + this.widgetName, this._mouseUpDelegate), t.preventDefault(), a = !0, !0)) : !0;
			}
		}, _mouseMove: function _mouseMove(t) {
			if (this._mouseMoved) {
				if (e.ui.ie && (!document.documentMode || 9 > document.documentMode) && !t.button) return this._mouseUp(t);if (!t.which) return this._mouseUp(t);
			}return (t.which || t.button) && (this._mouseMoved = !0), this._mouseStarted ? (this._mouseDrag(t), t.preventDefault()) : (this._mouseDistanceMet(t) && this._mouseDelayMet(t) && (this._mouseStarted = this._mouseStart(this._mouseDownEvent, t) !== !1, this._mouseStarted ? this._mouseDrag(t) : this._mouseUp(t)), !this._mouseStarted);
		}, _mouseUp: function _mouseUp(t) {
			return this.document.unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate), this._mouseStarted && (this._mouseStarted = !1, t.target === this._mouseDownEvent.target && e.data(t.target, this.widgetName + ".preventClickEvent", !0), this._mouseStop(t)), a = !1, !1;
		}, _mouseDistanceMet: function _mouseDistanceMet(e) {
			return Math.max(Math.abs(this._mouseDownEvent.pageX - e.pageX), Math.abs(this._mouseDownEvent.pageY - e.pageY)) >= this.options.distance;
		}, _mouseDelayMet: function _mouseDelayMet() {
			return this.mouseDelayMet;
		}, _mouseStart: function _mouseStart() {}, _mouseDrag: function _mouseDrag() {}, _mouseStop: function _mouseStop() {}, _mouseCapture: function _mouseCapture() {
			return !0;
		} }), e.widget("ui.slider", e.ui.mouse, { version: "1.11.4", widgetEventPrefix: "slide", options: { animate: !1, distance: 0, max: 100, min: 0, orientation: "horizontal", range: !1, step: 1, value: 0, values: null, change: null, slide: null, start: null, stop: null }, numPages: 5, _create: function _create() {
			this._keySliding = !1, this._mouseSliding = !1, this._animateOff = !0, this._handleIndex = null, this._detectOrientation(), this._mouseInit(), this._calculateNewMax(), this.element.addClass("ui-slider ui-slider-" + this.orientation + " ui-widget" + " ui-widget-content" + " ui-corner-all"), this._refresh(), this._setOption("disabled", this.options.disabled), this._animateOff = !1;
		}, _refresh: function _refresh() {
			this._createRange(), this._createHandles(), this._setupEvents(), this._refreshValue();
		}, _createHandles: function _createHandles() {
			var t,
			    i,
			    s = this.options,
			    n = this.element.find(".ui-slider-handle").addClass("ui-state-default ui-corner-all"),
			    a = "<span class='ui-slider-handle ui-state-default ui-corner-all' tabindex='0'></span>",
			    o = [];for (i = s.values && s.values.length || 1, n.length > i && (n.slice(i).remove(), n = n.slice(0, i)), t = n.length; i > t; t++) {
				o.push(a);
			}this.handles = n.add(e(o.join("")).appendTo(this.element)), this.handle = this.handles.eq(0), this.handles.each(function (t) {
				e(this).data("ui-slider-handle-index", t);
			});
		}, _createRange: function _createRange() {
			var t = this.options,
			    i = "";t.range ? (t.range === !0 && (t.values ? t.values.length && 2 !== t.values.length ? t.values = [t.values[0], t.values[0]] : e.isArray(t.values) && (t.values = t.values.slice(0)) : t.values = [this._valueMin(), this._valueMin()]), this.range && this.range.length ? this.range.removeClass("ui-slider-range-min ui-slider-range-max").css({ left: "", bottom: "" }) : (this.range = e("<div></div>").appendTo(this.element), i = "ui-slider-range ui-widget-header ui-corner-all"), this.range.addClass(i + ("min" === t.range || "max" === t.range ? " ui-slider-range-" + t.range : ""))) : (this.range && this.range.remove(), this.range = null);
		}, _setupEvents: function _setupEvents() {
			this._off(this.handles), this._on(this.handles, this._handleEvents), this._hoverable(this.handles), this._focusable(this.handles);
		}, _destroy: function _destroy() {
			this.handles.remove(), this.range && this.range.remove(), this.element.removeClass("ui-slider ui-slider-horizontal ui-slider-vertical ui-widget ui-widget-content ui-corner-all"), this._mouseDestroy();
		}, _mouseCapture: function _mouseCapture(t) {
			var i,
			    s,
			    n,
			    a,
			    o,
			    r,
			    h,
			    l,
			    u = this,
			    c = this.options;return c.disabled ? !1 : (this.elementSize = { width: this.element.outerWidth(), height: this.element.outerHeight() }, this.elementOffset = this.element.offset(), i = { x: t.pageX, y: t.pageY }, s = this._normValueFromMouse(i), n = this._valueMax() - this._valueMin() + 1, this.handles.each(function (t) {
				var i = Math.abs(s - u.values(t));(n > i || n === i && (t === u._lastChangedValue || u.values(t) === c.min)) && (n = i, a = e(this), o = t);
			}), r = this._start(t, o), r === !1 ? !1 : (this._mouseSliding = !0, this._handleIndex = o, a.addClass("ui-state-active").focus(), h = a.offset(), l = !e(t.target).parents().addBack().is(".ui-slider-handle"), this._clickOffset = l ? { left: 0, top: 0 } : { left: t.pageX - h.left - a.width() / 2, top: t.pageY - h.top - a.height() / 2 - (parseInt(a.css("borderTopWidth"), 10) || 0) - (parseInt(a.css("borderBottomWidth"), 10) || 0) + (parseInt(a.css("marginTop"), 10) || 0) }, this.handles.hasClass("ui-state-hover") || this._slide(t, o, s), this._animateOff = !0, !0));
		}, _mouseStart: function _mouseStart() {
			return !0;
		}, _mouseDrag: function _mouseDrag(e) {
			var t = { x: e.pageX, y: e.pageY },
			    i = this._normValueFromMouse(t);return this._slide(e, this._handleIndex, i), !1;
		}, _mouseStop: function _mouseStop(e) {
			return this.handles.removeClass("ui-state-active"), this._mouseSliding = !1, this._stop(e, this._handleIndex), this._change(e, this._handleIndex), this._handleIndex = null, this._clickOffset = null, this._animateOff = !1, !1;
		}, _detectOrientation: function _detectOrientation() {
			this.orientation = "vertical" === this.options.orientation ? "vertical" : "horizontal";
		}, _normValueFromMouse: function _normValueFromMouse(e) {
			var t, i, s, n, a;return "horizontal" === this.orientation ? (t = this.elementSize.width, i = e.x - this.elementOffset.left - (this._clickOffset ? this._clickOffset.left : 0)) : (t = this.elementSize.height, i = e.y - this.elementOffset.top - (this._clickOffset ? this._clickOffset.top : 0)), s = i / t, s > 1 && (s = 1), 0 > s && (s = 0), "vertical" === this.orientation && (s = 1 - s), n = this._valueMax() - this._valueMin(), a = this._valueMin() + s * n, this._trimAlignValue(a);
		}, _start: function _start(e, t) {
			var i = { handle: this.handles[t], value: this.value() };return this.options.values && this.options.values.length && (i.value = this.values(t), i.values = this.values()), this._trigger("start", e, i);
		}, _slide: function _slide(e, t, i) {
			var s, n, a;this.options.values && this.options.values.length ? (s = this.values(t ? 0 : 1), 2 === this.options.values.length && this.options.range === !0 && (0 === t && i > s || 1 === t && s > i) && (i = s), i !== this.values(t) && (n = this.values(), n[t] = i, a = this._trigger("slide", e, { handle: this.handles[t], value: i, values: n }), s = this.values(t ? 0 : 1), a !== !1 && this.values(t, i))) : i !== this.value() && (a = this._trigger("slide", e, { handle: this.handles[t], value: i }), a !== !1 && this.value(i));
		}, _stop: function _stop(e, t) {
			var i = { handle: this.handles[t], value: this.value() };this.options.values && this.options.values.length && (i.value = this.values(t), i.values = this.values()), this._trigger("stop", e, i);
		}, _change: function _change(e, t) {
			if (!this._keySliding && !this._mouseSliding) {
				var i = { handle: this.handles[t], value: this.value() };this.options.values && this.options.values.length && (i.value = this.values(t), i.values = this.values()), this._lastChangedValue = t, this._trigger("change", e, i);
			}
		}, value: function value(e) {
			return arguments.length ? (this.options.value = this._trimAlignValue(e), this._refreshValue(), this._change(null, 0), void 0) : this._value();
		}, values: function values(t, i) {
			var s, n, a;if (arguments.length > 1) return this.options.values[t] = this._trimAlignValue(i), this._refreshValue(), this._change(null, t), void 0;if (!arguments.length) return this._values();if (!e.isArray(arguments[0])) return this.options.values && this.options.values.length ? this._values(t) : this.value();for (s = this.options.values, n = arguments[0], a = 0; s.length > a; a += 1) {
				s[a] = this._trimAlignValue(n[a]), this._change(null, a);
			}this._refreshValue();
		}, _setOption: function _setOption(t, i) {
			var s,
			    n = 0;switch ("range" === t && this.options.range === !0 && ("min" === i ? (this.options.value = this._values(0), this.options.values = null) : "max" === i && (this.options.value = this._values(this.options.values.length - 1), this.options.values = null)), e.isArray(this.options.values) && (n = this.options.values.length), "disabled" === t && this.element.toggleClass("ui-state-disabled", !!i), this._super(t, i), t) {case "orientation":
					this._detectOrientation(), this.element.removeClass("ui-slider-horizontal ui-slider-vertical").addClass("ui-slider-" + this.orientation), this._refreshValue(), this.handles.css("horizontal" === i ? "bottom" : "left", "");break;case "value":
					this._animateOff = !0, this._refreshValue(), this._change(null, 0), this._animateOff = !1;break;case "values":
					for (this._animateOff = !0, this._refreshValue(), s = 0; n > s; s += 1) {
						this._change(null, s);
					}this._animateOff = !1;break;case "step":case "min":case "max":
					this._animateOff = !0, this._calculateNewMax(), this._refreshValue(), this._animateOff = !1;break;case "range":
					this._animateOff = !0, this._refresh(), this._animateOff = !1;}
		}, _value: function _value() {
			var e = this.options.value;return e = this._trimAlignValue(e);
		}, _values: function _values(e) {
			var t, i, s;if (arguments.length) return t = this.options.values[e], t = this._trimAlignValue(t);if (this.options.values && this.options.values.length) {
				for (i = this.options.values.slice(), s = 0; i.length > s; s += 1) {
					i[s] = this._trimAlignValue(i[s]);
				}return i;
			}return [];
		}, _trimAlignValue: function _trimAlignValue(e) {
			if (this._valueMin() >= e) return this._valueMin();if (e >= this._valueMax()) return this._valueMax();var t = this.options.step > 0 ? this.options.step : 1,
			    i = (e - this._valueMin()) % t,
			    s = e - i;return 2 * Math.abs(i) >= t && (s += i > 0 ? t : -t), parseFloat(s.toFixed(5));
		}, _calculateNewMax: function _calculateNewMax() {
			var e = this.options.max,
			    t = this._valueMin(),
			    i = this.options.step,
			    s = Math.floor(+(e - t).toFixed(this._precision()) / i) * i;e = s + t, this.max = parseFloat(e.toFixed(this._precision()));
		}, _precision: function _precision() {
			var e = this._precisionOf(this.options.step);return null !== this.options.min && (e = Math.max(e, this._precisionOf(this.options.min))), e;
		}, _precisionOf: function _precisionOf(e) {
			var t = "" + e,
			    i = t.indexOf(".");return -1 === i ? 0 : t.length - i - 1;
		}, _valueMin: function _valueMin() {
			return this.options.min;
		}, _valueMax: function _valueMax() {
			return this.max;
		}, _refreshValue: function _refreshValue() {
			var t,
			    i,
			    s,
			    n,
			    a,
			    o = this.options.range,
			    r = this.options,
			    h = this,
			    l = this._animateOff ? !1 : r.animate,
			    u = {};this.options.values && this.options.values.length ? this.handles.each(function (s) {
				i = 100 * ((h.values(s) - h._valueMin()) / (h._valueMax() - h._valueMin())), u["horizontal" === h.orientation ? "left" : "bottom"] = i + "%", e(this).stop(1, 1)[l ? "animate" : "css"](u, r.animate), h.options.range === !0 && ("horizontal" === h.orientation ? (0 === s && h.range.stop(1, 1)[l ? "animate" : "css"]({ left: i + "%" }, r.animate), 1 === s && h.range[l ? "animate" : "css"]({ width: i - t + "%" }, { queue: !1, duration: r.animate })) : (0 === s && h.range.stop(1, 1)[l ? "animate" : "css"]({ bottom: i + "%" }, r.animate), 1 === s && h.range[l ? "animate" : "css"]({ height: i - t + "%" }, { queue: !1, duration: r.animate }))), t = i;
			}) : (s = this.value(), n = this._valueMin(), a = this._valueMax(), i = a !== n ? 100 * ((s - n) / (a - n)) : 0, u["horizontal" === this.orientation ? "left" : "bottom"] = i + "%", this.handle.stop(1, 1)[l ? "animate" : "css"](u, r.animate), "min" === o && "horizontal" === this.orientation && this.range.stop(1, 1)[l ? "animate" : "css"]({ width: i + "%" }, r.animate), "max" === o && "horizontal" === this.orientation && this.range[l ? "animate" : "css"]({ width: 100 - i + "%" }, { queue: !1, duration: r.animate }), "min" === o && "vertical" === this.orientation && this.range.stop(1, 1)[l ? "animate" : "css"]({ height: i + "%" }, r.animate), "max" === o && "vertical" === this.orientation && this.range[l ? "animate" : "css"]({ height: 100 - i + "%" }, { queue: !1, duration: r.animate }));
		}, _handleEvents: { keydown: function keydown(t) {
				var i,
				    s,
				    n,
				    a,
				    o = e(t.target).data("ui-slider-handle-index");switch (t.keyCode) {case e.ui.keyCode.HOME:case e.ui.keyCode.END:case e.ui.keyCode.PAGE_UP:case e.ui.keyCode.PAGE_DOWN:case e.ui.keyCode.UP:case e.ui.keyCode.RIGHT:case e.ui.keyCode.DOWN:case e.ui.keyCode.LEFT:
						if (t.preventDefault(), !this._keySliding && (this._keySliding = !0, e(t.target).addClass("ui-state-active"), i = this._start(t, o), i === !1)) return;}switch (a = this.options.step, s = n = this.options.values && this.options.values.length ? this.values(o) : this.value(), t.keyCode) {case e.ui.keyCode.HOME:
						n = this._valueMin();break;case e.ui.keyCode.END:
						n = this._valueMax();break;case e.ui.keyCode.PAGE_UP:
						n = this._trimAlignValue(s + (this._valueMax() - this._valueMin()) / this.numPages);break;case e.ui.keyCode.PAGE_DOWN:
						n = this._trimAlignValue(s - (this._valueMax() - this._valueMin()) / this.numPages);break;case e.ui.keyCode.UP:case e.ui.keyCode.RIGHT:
						if (s === this._valueMax()) return;n = this._trimAlignValue(s + a);break;case e.ui.keyCode.DOWN:case e.ui.keyCode.LEFT:
						if (s === this._valueMin()) return;n = this._trimAlignValue(s - a);}this._slide(t, o, n);
			}, keyup: function keyup(t) {
				var i = e(t.target).data("ui-slider-handle-index");this._keySliding && (this._keySliding = !1, this._stop(t, i), this._change(t, i), e(t.target).removeClass("ui-state-active"));
			} } });
});
/*!
* jQuery meanMenu v2.0.8
* @Copyright (C) 2012-2014 Chris Wharton @ MeanThemes (https://github.com/meanthemes/meanMenu)
*
*/
/*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* THIS SOFTWARE AND DOCUMENTATION IS PROVIDED "AS IS," AND COPYRIGHT
* HOLDERS MAKE NO REPRESENTATIONS OR WARRANTIES, EXPRESS OR IMPLIED,
* INCLUDING BUT NOT LIMITED TO, WARRANTIES OF MERCHANTABILITY OR
* FITNESS FOR ANY PARTICULAR PURPOSE OR THAT THE USE OF THE SOFTWARE
* OR DOCUMENTATION WILL NOT INFRINGE ANY THIRD PARTY PATENTS,
* COPYRIGHTS, TRADEMARKS OR OTHER RIGHTS.COPYRIGHT HOLDERS WILL NOT
* BE LIABLE FOR ANY DIRECT, INDIRECT, SPECIAL OR CONSEQUENTIAL
* DAMAGES ARISING OUT OF ANY USE OF THE SOFTWARE OR DOCUMENTATION.
*
* You should have received a copy of the GNU General Public License
* along with this program. If not, see <http://gnu.org/licenses/>.
*
* Find more information at http://www.meanthemes.com/plugins/meanmenu/
*
*/
(function ($) {
	"use strict";

	$.fn.meanmenu = function (options) {
		var defaults = {
			meanMenuTarget: jQuery(this), // Target the current HTML markup you wish to replace
			meanMenuContainer: '.mobile-menu-area .container', // Choose where meanmenu will be placed within the HTML
			meanMenuClose: "X", // single character you want to represent the close menu button
			meanMenuCloseSize: "18px", // set font size of close button
			meanMenuOpen: "<span /><span /><span />", // text/markup you want when menu is closed
			meanRevealPosition: "right", // left right or center positions
			meanRevealPositionDistance: "0", // Tweak the position of the menu
			meanRevealColour: "", // override CSS colours for the reveal background
			meanScreenWidth: "767", // set the screen width you want meanmenu to kick in at
			meanNavPush: "", // set a height here in px, em or % if you want to budge your layout now the navigation is missing.
			meanShowChildren: true, // true to show children in the menu, false to hide them
			meanExpandableChildren: true, // true to allow expand/collapse children
			meanExpand: "+", // single character you want to represent the expand for ULs
			meanContract: "-", // single character you want to represent the contract for ULs
			meanRemoveAttrs: false, // true to remove classes and IDs, false to keep them
			onePage: false, // set to true for one page sites
			meanDisplay: "block", // override display method for table cell based layouts e.g. table-cell
			removeElements: "" // set to hide page elements
		};
		options = $.extend(defaults, options);

		// get browser width
		var currentWidth = window.innerWidth || document.documentElement.clientWidth;

		return this.each(function () {
			var meanMenu = options.meanMenuTarget;
			var meanContainer = options.meanMenuContainer;
			var meanMenuClose = options.meanMenuClose;
			var meanMenuCloseSize = options.meanMenuCloseSize;
			var meanMenuOpen = options.meanMenuOpen;
			var meanRevealPosition = options.meanRevealPosition;
			var meanRevealPositionDistance = options.meanRevealPositionDistance;
			var meanRevealColour = options.meanRevealColour;
			var meanScreenWidth = options.meanScreenWidth;
			var meanNavPush = options.meanNavPush;
			var meanRevealClass = ".meanmenu-reveal";
			var meanShowChildren = options.meanShowChildren;
			var meanExpandableChildren = options.meanExpandableChildren;
			var meanExpand = options.meanExpand;
			var meanContract = options.meanContract;
			var meanRemoveAttrs = options.meanRemoveAttrs;
			var onePage = options.onePage;
			var meanDisplay = options.meanDisplay;
			var removeElements = options.removeElements;

			//detect known mobile/tablet usage
			var isMobile = false;
			if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/Blackberry/i) || navigator.userAgent.match(/Windows Phone/i)) {
				isMobile = true;
			}

			if (navigator.userAgent.match(/MSIE 8/i) || navigator.userAgent.match(/MSIE 7/i)) {
				// add scrollbar for IE7 & 8 to stop breaking resize function on small content sites
				jQuery('html').css("overflow-y", "scroll");
			}

			var meanRevealPos = "";
			var meanCentered = function meanCentered() {
				if (meanRevealPosition === "center") {
					var newWidth = window.innerWidth || document.documentElement.clientWidth;
					var meanCenter = newWidth / 2 - 22 + "px";
					meanRevealPos = "left:" + meanCenter + ";right:auto;";

					if (!isMobile) {
						jQuery('.meanmenu-reveal').css("left", meanCenter);
					} else {
						jQuery('.meanmenu-reveal').animate({
							left: meanCenter
						});
					}
				}
			};

			var menuOn = false;
			var meanMenuExist = false;

			if (meanRevealPosition === "right") {
				meanRevealPos = "right:" + meanRevealPositionDistance + ";left:auto;";
			}
			if (meanRevealPosition === "left") {
				meanRevealPos = "left:" + meanRevealPositionDistance + ";right:auto;";
			}
			// run center function
			meanCentered();

			// set all styles for mean-reveal
			var $navreveal = "";

			var meanInner = function meanInner() {
				// get last class name
				if (jQuery($navreveal).is(".meanmenu-reveal.meanclose")) {
					$navreveal.html(meanMenuClose);
				} else {
					$navreveal.html(meanMenuOpen);
				}
			};

			// re-instate original nav (and call this on window.width functions)
			var meanOriginal = function meanOriginal() {
				jQuery('.mean-bar,.mean-push').remove();
				jQuery(meanContainer).removeClass("mean-container");
				jQuery(meanMenu).css('display', meanDisplay);
				menuOn = false;
				meanMenuExist = false;
				jQuery(removeElements).removeClass('mean-remove');
			};

			// navigation reveal
			var showMeanMenu = function showMeanMenu() {
				var meanStyles = "background:" + meanRevealColour + ";color:" + meanRevealColour + ";" + meanRevealPos;
				if (currentWidth <= meanScreenWidth) {
					jQuery(removeElements).addClass('mean-remove');
					meanMenuExist = true;
					// add class to body so we don't need to worry about media queries here, all CSS is wrapped in '.mean-container'
					jQuery(meanContainer).addClass("mean-container");
					jQuery('.mean-container').prepend('<div class="mean-bar"><a href="#nav" class="meanmenu-reveal" style="' + meanStyles + '">Show Navigation</a><nav class="mean-nav"></nav></div>');

					//push meanMenu navigation into .mean-nav
					var meanMenuContents = jQuery(meanMenu).html();
					jQuery('.mean-nav').html(meanMenuContents);

					// remove all classes from EVERYTHING inside meanmenu nav
					if (meanRemoveAttrs) {
						jQuery('nav.mean-nav ul, nav.mean-nav ul *').each(function () {
							// First check if this has mean-remove class
							if (jQuery(this).is('.mean-remove')) {
								jQuery(this).attr('class', 'mean-remove');
							} else {
								jQuery(this).removeAttr("class");
							}
							jQuery(this).removeAttr("id");
						});
					}

					// push in a holder div (this can be used if removal of nav is causing layout issues)
					jQuery(meanMenu).before('<div class="mean-push" />');
					jQuery('.mean-push').css("margin-top", meanNavPush);

					// hide current navigation and reveal mean nav link
					jQuery(meanMenu).hide();
					jQuery(".meanmenu-reveal").show();

					// turn 'X' on or off
					jQuery(meanRevealClass).html(meanMenuOpen);
					$navreveal = jQuery(meanRevealClass);

					//hide mean-nav ul
					jQuery('.mean-nav ul').hide();

					// hide sub nav
					if (meanShowChildren) {
						// allow expandable sub nav(s)
						if (meanExpandableChildren) {
							jQuery('.mean-nav ul ul').each(function () {
								if (jQuery(this).children().length) {
									jQuery(this, 'li:first').parent().append('<a class="mean-expand" href="#" style="font-size: ' + meanMenuCloseSize + '">' + meanExpand + '</a>');
								}
							});
							jQuery('.mean-expand').on("click", function (e) {
								e.preventDefault();
								if (jQuery(this).hasClass("mean-clicked")) {
									jQuery(this).text(meanExpand);
									jQuery(this).prev('ul').slideUp(300, function () {});
								} else {
									jQuery(this).text(meanContract);
									jQuery(this).prev('ul').slideDown(300, function () {});
								}
								jQuery(this).toggleClass("mean-clicked");
							});
						} else {
							jQuery('.mean-nav ul ul').show();
						}
					} else {
						jQuery('.mean-nav ul ul').hide();
					}

					// add last class to tidy up borders
					jQuery('.mean-nav ul li').last().addClass('mean-last');
					$navreveal.removeClass("meanclose");
					jQuery($navreveal).click(function (e) {
						e.preventDefault();
						if (menuOn === false) {
							$navreveal.css("text-align", "center");
							$navreveal.css("text-indent", "0");
							$navreveal.css("font-size", meanMenuCloseSize);
							jQuery('.mean-nav ul:first').slideDown();
							menuOn = true;
						} else {
							jQuery('.mean-nav ul:first').slideUp();
							menuOn = false;
						}
						$navreveal.toggleClass("meanclose");
						meanInner();
						jQuery(removeElements).addClass('mean-remove');
					});

					// for one page websites, reset all variables...
					if (onePage) {
						jQuery('.mean-nav ul > li > a:first-child').on("click", function () {
							jQuery('.mean-nav ul:first').slideUp();
							menuOn = false;
							jQuery($navreveal).toggleClass("meanclose").html(meanMenuOpen);
						});
					}
				} else {
					meanOriginal();
				}
			};

			if (!isMobile) {
				// reset menu on resize above meanScreenWidth
				jQuery(window).resize(function () {
					currentWidth = window.innerWidth || document.documentElement.clientWidth;
					if (currentWidth > meanScreenWidth) {
						meanOriginal();
					} else {
						meanOriginal();
					}
					if (currentWidth <= meanScreenWidth) {
						showMeanMenu();
						meanCentered();
					} else {
						meanOriginal();
					}
				});
			}

			jQuery(window).resize(function () {
				// get browser width
				currentWidth = window.innerWidth || document.documentElement.clientWidth;

				if (!isMobile) {
					meanOriginal();
					if (currentWidth <= meanScreenWidth) {
						showMeanMenu();
						meanCentered();
					}
				} else {
					meanCentered();
					if (currentWidth <= meanScreenWidth) {
						if (meanMenuExist === false) {
							showMeanMenu();
						}
					} else {
						meanOriginal();
					}
				}
			});

			// run main menuMenu function on load
			showMeanMenu();
		});
	};
})(jQuery);

(function (a) {
	a.fn.simpleGallery = function (d) {
		var b = a.extend({}, a.fn.simpleGallery.defaults, d);if (0 >= this.length) return window.console && console.log("There are no thumbnails in the gallery"), !1;this.each(function () {
			a("<img>").src = a(this).attr("rel");
		});a(this).on(b.show_event, function () {
			var c = a(this).parents(b.thumbnail_anchor),
			    d = c.attr(b.big_image_attr),
			    c = c.attr(b.lens_image_attr),
			    e = a(this).parents(b.gallery_container).find(b.big_image_container),
			    g = a("<img>", { src: b.loading_image });e.html(g);var f = a("<a>").attr("data-lens-image", c).addClass(b.parent_anchor_class),
			    h = a("<img>").load(function () {
				h.appendTo(f);e.html(f);
			}).attr("src", d).addClass(b.big_image_class);
		});return this;
	};a.fn.simpleGallery.ver = function () {
		return "simpleGallery-1.0.1";
	};a.fn.simpleGallery.defaults = { thumbnail_anchor: ".simpleLens-thumbnail-wrapper", big_image_class: "simpleLens-big-image", lens_image_attr: "data-lens-image", big_image_attr: "data-big-image", parent_anchor_class: "simpleLens-lens-image", gallery_container: ".simpleLens-gallery-container", big_image_container: ".simpleLens-big-image-container",
		loading_image: "images/loading.gif", show_event: "mouseenter" };
})(jQuery);

(function (c) {
	function f(c) {
		window.console && console.log(c);
	}c.fn.simpleLens = function (l) {
		var d = c.extend({}, c.fn.simpleLens.defaults, l),
		    h = { init: function init(a) {
				this.height = a.height();this.width = a.width();this.offset = a.offset();this.position = a.position();this.calc_image_limits();
			}, calc_image_limits: function calc_image_limits() {
				this.limits = { x_left: this.position.left, x_right: this.position.left + this.width, y_top: this.position.top, y_bottom: this.position.top + this.height };
			}, calc_view_position: function calc_view_position(a) {
				return { org_x: a.pageX - this.offset.left,
					org_y: a.pageY - this.offset.top };
			} },
		    e = { init: function init(a, b, c, d) {
				this.parent_anchor = a;this.lens_container = b;this.ratio = c;this.cursor_position = { top: 0, left: 0 };this.calc_cursor_size();this.insert_cursor(d.org_x, d.org_y);
			}, destroy: function destroy() {
				c("." + d.cursor_class).remove();
			}, calc_cursor_size: function calc_cursor_size() {
				this.cursor_height = this.lens_container.height() / this.ratio.x;this.cursor_width = this.lens_container.width() / this.ratio.y;this.height_center = this.cursor_height / 2;this.width_center = this.cursor_width / 2;
			}, update_cursor_position: function update_cursor_position(a, b) {
				var c = b - this.height_center,
				    d = b + this.height_center,
				    e = a - this.width_center,
				    f = a + this.width_center,
				    g = h.limits;parseFloat(g.y_top) > parseFloat(c) ? c = g.y_top : parseFloat(d) > parseFloat(g.y_bottom) && (c = g.y_bottom - this.cursor_height);parseFloat(g.x_left) > parseFloat(e) ? e = g.x_left : parseFloat(f) > parseFloat(g.x_right) && (e = g.x_right - this.cursor_width);this.cursor_position = { top: c, left: e, center_top: c + this.height_center, center_left: e + this.width_center };void 0 !== this.cursor && this.cursor.css(this.cursor_position);
			}, insert_cursor: function insert_cursor(a, b) {
				this.cursor = c("<div>", { "class": d.cursor_class });this.cursor.css({ height: this.cursor_height + "px", width: this.cursor_width + "px" });this.cursor.appendTo(this.parent_anchor);return this.update_cursor_position(a, b);
			} },
		    k = { init: function init(a) {
				this.parent_anchor = a;this.parent_div = a.parent(d.parent_class);this.lens_image_url = a.attr(d.lens_image_attr);this.lens_container = c("<div>", { "class": d.lens_class });this.lens_image = c("<img>");h.init(a.find(d.big_image_class));void 0 === this.lens_image_url && (f("Cannot find lens image. URL: " + this.lens_image_url), f(that), f(a), f(lens_image_url));
			}, update_lens_position: function update_lens_position(a) {
				this.lens_image.css({ top: a.top, left: a.left });
			}, calc_lens_position: function calc_lens_position(a) {
				return { left: -1 * (a.center_left * this.ratio.x - this.container.width), top: -1 * (a.center_top * this.ratio.y - this.container.height) };
			}, lens_event_bind: function lens_event_bind() {
				var a = this;this.parent_anchor.mousemove(function (b) {
					b = h.calc_view_position(b);e.update_cursor_position(b.org_x, b.org_y);a.update_lens_position(a.calc_lens_position(e.cursor_position, a.ratio, a.container));
				});
			}, lens_event_unbind: function lens_event_unbind() {
				void 0 !== this.parent_anchor && this.parent_anchor.unbind("mousemove");
			}, destroy: function destroy() {
				e.destroy();void 0 !== this.lens_container && 0 < this.lens_container.length && (c("." + d.lens_class).remove(), this.lens_event_unbind());
			}, load: function load(a) {
				var b = this;this.lens_container.appendTo(this.parent_div);var f = this.lens_container.height() / 2 - 25,
				    f = c("<img>", { src: d.loading_image }).css("margin-top", f);this.lens_container.html(f);this.lens_image.load(function () {
					b.lens_container.html(b.lens_image);
					b.container = { width: b.lens_container.width() / 2, height: b.lens_container.height() / 2 };b.img_size = { width: b.lens_image.width(), height: b.lens_image.height() };b.ratio = { y: b.lens_image.height() / h.height, x: b.lens_image.width() / h.width };var c = h.calc_view_position(a);e.init(b.parent_anchor, b.lens_container, b.ratio, c);b.update_lens_position(b.calc_lens_position(e.cursor_position));b.lens_event_bind();
				}).attr("src", this.lens_image_url);
			} };c(this).parents(d.parent_class).on(d.open_lens_event, d.anchor_parent_class, function (a) {
			var b = c(this);k.init(b);k.load(a);
		});c(this).parents(d.parent_class).on("mouseleave", d.anchor_parent_class, function () {
			k.destroy();
		});
	};c.fn.simpleLens.ver = function () {
		return "simpleLens-1.0.1";
	};c.fn.simpleLens.defaults = { anchor_parent_class: ".simpleLens-lens-image", lens_image_attr: "data-lens-image", big_image_class: ".simpleLens-big-image", parent_class: ".simpleLens-big-image-container", lens_class: "simpleLens-lens-element", cursor_class: "simpleLens-mouse-cursor", loading_image: "images/loading.gif",
		open_lens_event: "mouseenter" };
})(jQuery);

/*! WOW - v1.1.2 - 2015-08-19
* Copyright (c) 2015 Matthieu Aussaguel; Licensed MIT */(function () {
	var a,
	    b,
	    c,
	    d,
	    e,
	    f = function f(a, b) {
		return function () {
			return a.apply(b, arguments);
		};
	},
	    g = [].indexOf || function (a) {
		for (var b = 0, c = this.length; c > b; b++) {
			if (b in this && this[b] === a) return b;
		}return -1;
	};b = function () {
		function a() {}return a.prototype.extend = function (a, b) {
			var c, d;for (c in b) {
				d = b[c], null == a[c] && (a[c] = d);
			}return a;
		}, a.prototype.isMobile = function (a) {
			return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)
			);
		}, a.prototype.createEvent = function (a, b, c, d) {
			var e;return null == b && (b = !1), null == c && (c = !1), null == d && (d = null), null != document.createEvent ? (e = document.createEvent("CustomEvent"), e.initCustomEvent(a, b, c, d)) : null != document.createEventObject ? (e = document.createEventObject(), e.eventType = a) : e.eventName = a, e;
		}, a.prototype.emitEvent = function (a, b) {
			return null != a.dispatchEvent ? a.dispatchEvent(b) : b in (null != a) ? a[b]() : "on" + b in (null != a) ? a["on" + b]() : void 0;
		}, a.prototype.addEvent = function (a, b, c) {
			return null != a.addEventListener ? a.addEventListener(b, c, !1) : null != a.attachEvent ? a.attachEvent("on" + b, c) : a[b] = c;
		}, a.prototype.removeEvent = function (a, b, c) {
			return null != a.removeEventListener ? a.removeEventListener(b, c, !1) : null != a.detachEvent ? a.detachEvent("on" + b, c) : delete a[b];
		}, a.prototype.innerHeight = function () {
			return "innerHeight" in window ? window.innerHeight : document.documentElement.clientHeight;
		}, a;
	}(), c = this.WeakMap || this.MozWeakMap || (c = function () {
		function a() {
			this.keys = [], this.values = [];
		}return a.prototype.get = function (a) {
			var b, c, d, e, f;for (f = this.keys, b = d = 0, e = f.length; e > d; b = ++d) {
				if (c = f[b], c === a) return this.values[b];
			}
		}, a.prototype.set = function (a, b) {
			var c, d, e, f, g;for (g = this.keys, c = e = 0, f = g.length; f > e; c = ++e) {
				if (d = g[c], d === a) return void (this.values[c] = b);
			}return this.keys.push(a), this.values.push(b);
		}, a;
	}()), a = this.MutationObserver || this.WebkitMutationObserver || this.MozMutationObserver || (a = function () {
		function a() {
			"undefined" != typeof console && null !== console && console.warn("MutationObserver is not supported by your browser."), "undefined" != typeof console && null !== console && console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content.");
		}return a.notSupported = !0, a.prototype.observe = function () {}, a;
	}()), d = this.getComputedStyle || function (a) {
		return this.getPropertyValue = function (b) {
			var c;return "float" === b && (b = "styleFloat"), e.test(b) && b.replace(e, function (a, b) {
				return b.toUpperCase();
			}), (null != (c = a.currentStyle) ? c[b] : void 0) || null;
		}, this;
	}, e = /(\-([a-z]){1})/g, this.WOW = function () {
		function e(a) {
			null == a && (a = {}), this.scrollCallback = f(this.scrollCallback, this), this.scrollHandler = f(this.scrollHandler, this), this.resetAnimation = f(this.resetAnimation, this), this.start = f(this.start, this), this.scrolled = !0, this.config = this.util().extend(a, this.defaults), null != a.scrollContainer && (this.config.scrollContainer = document.querySelector(a.scrollContainer)), this.animationNameCache = new c(), this.wowEvent = this.util().createEvent(this.config.boxClass);
		}return e.prototype.defaults = { boxClass: "wow", animateClass: "animated", offset: 0, mobile: !0, live: !0, callback: null, scrollContainer: null }, e.prototype.init = function () {
			var a;return this.element = window.document.documentElement, "interactive" === (a = document.readyState) || "complete" === a ? this.start() : this.util().addEvent(document, "DOMContentLoaded", this.start), this.finished = [];
		}, e.prototype.start = function () {
			var b, c, d, e;if (this.stopped = !1, this.boxes = function () {
				var a, c, d, e;for (d = this.element.querySelectorAll("." + this.config.boxClass), e = [], a = 0, c = d.length; c > a; a++) {
					b = d[a], e.push(b);
				}return e;
			}.call(this), this.all = function () {
				var a, c, d, e;for (d = this.boxes, e = [], a = 0, c = d.length; c > a; a++) {
					b = d[a], e.push(b);
				}return e;
			}.call(this), this.boxes.length) if (this.disabled()) this.resetStyle();else for (e = this.boxes, c = 0, d = e.length; d > c; c++) {
				b = e[c], this.applyStyle(b, !0);
			}return this.disabled() || (this.util().addEvent(this.config.scrollContainer || window, "scroll", this.scrollHandler), this.util().addEvent(window, "resize", this.scrollHandler), this.interval = setInterval(this.scrollCallback, 50)), this.config.live ? new a(function (a) {
				return function (b) {
					var c, d, e, f, g;for (g = [], c = 0, d = b.length; d > c; c++) {
						f = b[c], g.push(function () {
							var a, b, c, d;for (c = f.addedNodes || [], d = [], a = 0, b = c.length; b > a; a++) {
								e = c[a], d.push(this.doSync(e));
							}return d;
						}.call(a));
					}return g;
				};
			}(this)).observe(document.body, { childList: !0, subtree: !0 }) : void 0;
		}, e.prototype.stop = function () {
			return this.stopped = !0, this.util().removeEvent(this.config.scrollContainer || window, "scroll", this.scrollHandler), this.util().removeEvent(window, "resize", this.scrollHandler), null != this.interval ? clearInterval(this.interval) : void 0;
		}, e.prototype.sync = function () {
			return a.notSupported ? this.doSync(this.element) : void 0;
		}, e.prototype.doSync = function (a) {
			var b, c, d, e, f;if (null == a && (a = this.element), 1 === a.nodeType) {
				for (a = a.parentNode || a, e = a.querySelectorAll("." + this.config.boxClass), f = [], c = 0, d = e.length; d > c; c++) {
					b = e[c], g.call(this.all, b) < 0 ? (this.boxes.push(b), this.all.push(b), this.stopped || this.disabled() ? this.resetStyle() : this.applyStyle(b, !0), f.push(this.scrolled = !0)) : f.push(void 0);
				}return f;
			}
		}, e.prototype.show = function (a) {
			return this.applyStyle(a), a.className = a.className + " " + this.config.animateClass, null != this.config.callback && this.config.callback(a), this.util().emitEvent(a, this.wowEvent), this.util().addEvent(a, "animationend", this.resetAnimation), this.util().addEvent(a, "oanimationend", this.resetAnimation), this.util().addEvent(a, "webkitAnimationEnd", this.resetAnimation), this.util().addEvent(a, "MSAnimationEnd", this.resetAnimation), a;
		}, e.prototype.applyStyle = function (a, b) {
			var c, d, e;return d = a.getAttribute("data-wow-duration"), c = a.getAttribute("data-wow-delay"), e = a.getAttribute("data-wow-iteration"), this.animate(function (f) {
				return function () {
					return f.customStyle(a, b, d, c, e);
				};
			}(this));
		}, e.prototype.animate = function () {
			return "requestAnimationFrame" in window ? function (a) {
				return window.requestAnimationFrame(a);
			} : function (a) {
				return a();
			};
		}(), e.prototype.resetStyle = function () {
			var a, b, c, d, e;for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++) {
				a = d[b], e.push(a.style.visibility = "visible");
			}return e;
		}, e.prototype.resetAnimation = function (a) {
			var b;return a.type.toLowerCase().indexOf("animationend") >= 0 ? (b = a.target || a.srcElement, b.className = b.className.replace(this.config.animateClass, "").trim()) : void 0;
		}, e.prototype.customStyle = function (a, b, c, d, e) {
			return b && this.cacheAnimationName(a), a.style.visibility = b ? "hidden" : "visible", c && this.vendorSet(a.style, { animationDuration: c }), d && this.vendorSet(a.style, { animationDelay: d }), e && this.vendorSet(a.style, { animationIterationCount: e }), this.vendorSet(a.style, { animationName: b ? "none" : this.cachedAnimationName(a) }), a;
		}, e.prototype.vendors = ["moz", "webkit"], e.prototype.vendorSet = function (a, b) {
			var c, d, e, f;d = [];for (c in b) {
				e = b[c], a["" + c] = e, d.push(function () {
					var b, d, g, h;for (g = this.vendors, h = [], b = 0, d = g.length; d > b; b++) {
						f = g[b], h.push(a["" + f + c.charAt(0).toUpperCase() + c.substr(1)] = e);
					}return h;
				}.call(this));
			}return d;
		}, e.prototype.vendorCSS = function (a, b) {
			var c, e, f, g, h, i;for (h = d(a), g = h.getPropertyCSSValue(b), f = this.vendors, c = 0, e = f.length; e > c; c++) {
				i = f[c], g = g || h.getPropertyCSSValue("-" + i + "-" + b);
			}return g;
		}, e.prototype.animationName = function (a) {
			var b;try {
				b = this.vendorCSS(a, "animation-name").cssText;
			} catch (c) {
				b = d(a).getPropertyValue("animation-name");
			}return "none" === b ? "" : b;
		}, e.prototype.cacheAnimationName = function (a) {
			return this.animationNameCache.set(a, this.animationName(a));
		}, e.prototype.cachedAnimationName = function (a) {
			return this.animationNameCache.get(a);
		}, e.prototype.scrollHandler = function () {
			return this.scrolled = !0;
		}, e.prototype.scrollCallback = function () {
			var a;return !this.scrolled || (this.scrolled = !1, this.boxes = function () {
				var b, c, d, e;for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++) {
					a = d[b], a && (this.isVisible(a) ? this.show(a) : e.push(a));
				}return e;
			}.call(this), this.boxes.length || this.config.live) ? void 0 : this.stop();
		}, e.prototype.offsetTop = function (a) {
			for (var b; void 0 === a.offsetTop;) {
				a = a.parentNode;
			}for (b = a.offsetTop; a = a.offsetParent;) {
				b += a.offsetTop;
			}return b;
		}, e.prototype.isVisible = function (a) {
			var b, c, d, e, f;return c = a.getAttribute("data-wow-offset") || this.config.offset, f = this.config.scrollContainer && this.config.scrollContainer.scrollTop || window.pageYOffset, e = f + Math.min(this.element.clientHeight, this.util().innerHeight()) - c, d = this.offsetTop(a), b = d + a.clientHeight, e >= d && b >= f;
		}, e.prototype.util = function () {
			return null != this._util ? this._util : this._util = new b();
		}, e.prototype.disabled = function () {
			return !this.config.mobile && this.util().isMobile(navigator.userAgent);
		}, e;
	}();
}).call(this);
// Avoid `console` errors in browsers that lack a console.
(function () {
	var method;
	var noop = function noop() {};
	var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
	var length = methods.length;
	var console = window.console = window.console || {};

	while (length--) {
		method = methods[length];

		// Only stub undefined methods.
		if (!console[method]) {
			console[method] = noop;
		}
	}
})();

// Place any jQuery/helper plugins in here.

/*!
 * scrollup v2.4.1
 * Url: http://markgoodyear.com/labs/scrollup/
 * Copyright (c) Mark Goodyear — @markgdyr — http://markgoodyear.com
 * License: MIT
 */
!function (l, o, e) {
	"use strict";
	l.fn.scrollUp = function (o) {
		l.data(e.body, "scrollUp") || (l.data(e.body, "scrollUp", !0), l.fn.scrollUp.init(o));
	}, l.fn.scrollUp.init = function (r) {
		var s,
		    t,
		    c,
		    i,
		    n,
		    a,
		    d,
		    p = l.fn.scrollUp.settings = l.extend({}, l.fn.scrollUp.defaults, r),
		    f = !1;switch (d = p.scrollTrigger ? l(p.scrollTrigger) : l("<a/>", { id: p.scrollName, href: "#top" }), p.scrollTitle && d.attr("title", p.scrollTitle), d.appendTo("body"), p.scrollImg || p.scrollTrigger || d.html(p.scrollText), d.css({ display: "none", position: "fixed", zIndex: p.zIndex }), p.activeOverlay && l("<div/>", { id: p.scrollName + "-active" }).css({ position: "absolute", top: p.scrollDistance + "px", width: "100%", borderTop: "1px dotted" + p.activeOverlay, zIndex: p.zIndex }).appendTo("body"), p.animation) {case "fade":
				s = "fadeIn", t = "fadeOut", c = p.animationSpeed;break;case "slide":
				s = "slideDown", t = "slideUp", c = p.animationSpeed;break;default:
				s = "show", t = "hide", c = 0;}i = "top" === p.scrollFrom ? p.scrollDistance : l(e).height() - l(o).height() - p.scrollDistance, n = l(o).scroll(function () {
			l(o).scrollTop() > i ? f || (d[s](c), f = !0) : f && (d[t](c), f = !1);
		}), p.scrollTarget ? "number" == typeof p.scrollTarget ? a = p.scrollTarget : "string" == typeof p.scrollTarget && (a = Math.floor(l(p.scrollTarget).offset().top)) : a = 0, d.click(function (o) {
			o.preventDefault(), l("html, body").animate({ scrollTop: a }, p.scrollSpeed, p.easingType);
		});
	}, l.fn.scrollUp.defaults = { scrollName: "scrollUp", scrollDistance: 300, scrollFrom: "top", scrollSpeed: 300, easingType: "linear", animation: "fade", animationSpeed: 200, scrollTrigger: !1, scrollTarget: !1, scrollText: "Scroll to top", scrollTitle: !1, scrollImg: !1, activeOverlay: !1, zIndex: 2147483647 }, l.fn.scrollUp.destroy = function (r) {
		l.removeData(e.body, "scrollUp"), l("#" + l.fn.scrollUp.settings.scrollName).remove(), l("#" + l.fn.scrollUp.settings.scrollName + "-active").remove(), l.fn.jquery.split(".")[1] >= 7 ? l(o).off("scroll", r) : l(o).unbind("scroll", r);
	}, l.scrollUp = l.fn.scrollUp;
}(jQuery, window, document);

(function ($) {
	"use strict";

	/*----------------------------
  wow js active
 ------------------------------ */

	new WOW().init();

	/*---------------------
      tooltip
 --------------------- */

	$('[data-toggle="tooltip"]').tooltip({
		animated: 'fade',
		placement: 'top',
		container: 'body'
	});

	/*----------------------------
  jQuery MeanMenu
 ------------------------------ */
	jQuery('nav#dropdown').meanmenu();

	/*------------------------------------
  search option
 ------------------------------------- */
	$('.search-option').hide();
	$(".search-img").on('click', function () {
		$('.search-option').animate({
			height: 'toggle'
		});
	});

	/*--------------------------
 	Category Accordion
 ---------------------------- */
	$('.rx-parent').on('click', function () {
		$('.rx-child').slideToggle(300);
		$(this).toggleClass('rx-change');
	});

	/*--------------------------
  collapse
 ---------------------------- */
	$('.panel-heading a').on('click', function () {
		$('.panel-heading a').removeClass('active');
		$(this).addClass('active');
	});

	/*------------------------------------
  nivoSlider active
 ------------------------------------- */
	$('#topSlider').nivoSlider({
		effect: 'random',
		slices: 15,
		boxCols: 12,
		boxRows: 4,
		animSpeed: 600,
		pauseTime: 5000,
		startSlide: 0,
		controlNavThumbs: false,
		pauseOnHover: false,
		manualAdvance: false,
		prevText: '',
		nextText: ''

	});

	/*----------------------------
  wow js active
 ------------------------------ */
	new WOW().init();

	/*----------------------------
   Product Carousel
 ------------------------------ */
	$(".product-carousel").owlCarousel({
		autoPlay: false,
		slideSpeed: 2000,
		pagination: false,
		navigation: true,
		items: 4,
		/* transitionStyle : "fade", */ /* [This code for animation ] */
		navigationText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
		itemsDesktop: [1199, 4],
		itemsDesktopSmall: [980, 3],
		itemsTablet: [768, 2],
		itemsMobile: [500, 1]
	});

	/*----------------------------
   Product Carousel
 ------------------------------ */
	$(".new-product-carousel").owlCarousel({
		autoPlay: false,
		slideSpeed: 2000,
		pagination: false,
		navigation: true,
		items: 1,
		/* transitionStyle : "fade", */ /* [This code for animation ] */
		navigationText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
		itemsDesktop: [1199, 1],
		itemsDesktopSmall: [980, 1],
		itemsTablet: [768, 1],
		itemsMobile: [479, 1]
	});
	/*----------------------------
   single Product Carousel
 ------------------------------ */
	$("#single-product").owlCarousel({
		autoPlay: false,
		slideSpeed: 2000,
		pagination: false,
		navigation: true,
		items: 3,
		margin: 30,
		navigationText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
		itemsDesktop: [1199, 3],
		itemsDesktopSmall: [980, 2],
		itemsTablet: [768, 2],
		itemsMobile: [479, 1]
	});

	/*----------------------------
  price-slider active
 ------------------------------ */
	$("#slider-range").slider({
		range: true,
		min: 88,
		max: 721,
		values: [88, 721],
		slide: function slide(event, ui) {
			$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
		}
	});
	$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

	/*--------------------------
      scrollUp
 ---------------------------- */
	$.scrollUp({
		scrollText: '<i class="fa fa-angle-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	});

	/*----------------------------
   Simple Lence Active
 ------------------------------ */
	$('#p-view .simpleLens-lens-image').simpleLens({});
})(jQuery);
/* Modernizr 2.8.3 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-fontface-backgroundsize-borderimage-borderradius-boxshadow-flexbox-hsla-multiplebgs-opacity-rgba-textshadow-cssanimations-csscolumns-generatedcontent-cssgradients-cssreflections-csstransforms-csstransforms3d-csstransitions-applicationcache-canvas-canvastext-draganddrop-hashchange-history-audio-video-indexeddb-input-inputtypes-localstorage-postmessage-sessionstorage-websockets-websqldatabase-webworkers-geolocation-inlinesvg-smil-svg-svgclippaths-touch-webgl-shiv-mq-cssclasses-addtest-prefixed-teststyles-testprop-testallprops-hasevent-prefixes-domprefixes-load
 */
;window.Modernizr = function (a, b, c) {
	function D(a) {
		j.cssText = a;
	}function E(a, b) {
		return D(n.join(a + ";") + (b || ""));
	}function F(a, b) {
		return (typeof a === "undefined" ? "undefined" : _typeof(a)) === b;
	}function G(a, b) {
		return !!~("" + a).indexOf(b);
	}function H(a, b) {
		for (var d in a) {
			var e = a[d];if (!G(e, "-") && j[e] !== c) return b == "pfx" ? e : !0;
		}return !1;
	}function I(a, b, d) {
		for (var e in a) {
			var f = b[a[e]];if (f !== c) return d === !1 ? a[e] : F(f, "function") ? f.bind(d || b) : f;
		}return !1;
	}function J(a, b, c) {
		var d = a.charAt(0).toUpperCase() + a.slice(1),
		    e = (a + " " + p.join(d + " ") + d).split(" ");return F(b, "string") || F(b, "undefined") ? H(e, b) : (e = (a + " " + q.join(d + " ") + d).split(" "), I(e, b, c));
	}function K() {
		e.input = function (c) {
			for (var d = 0, e = c.length; d < e; d++) {
				u[c[d]] = c[d] in k;
			}return u.list && (u.list = !!b.createElement("datalist") && !!a.HTMLDataListElement), u;
		}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" ")), e.inputtypes = function (a) {
			for (var d = 0, e, f, h, i = a.length; d < i; d++) {
				k.setAttribute("type", f = a[d]), e = k.type !== "text", e && (k.value = l, k.style.cssText = "position:absolute;visibility:hidden;", /^range$/.test(f) && k.style.WebkitAppearance !== c ? (g.appendChild(k), h = b.defaultView, e = h.getComputedStyle && h.getComputedStyle(k, null).WebkitAppearance !== "textfield" && k.offsetHeight !== 0, g.removeChild(k)) : /^(search|tel)$/.test(f) || (/^(url|email)$/.test(f) ? e = k.checkValidity && k.checkValidity() === !1 : e = k.value != l)), t[a[d]] = !!e;
			}return t;
		}("search tel url email datetime date month week time datetime-local number range color".split(" "));
	}var d = "2.8.3",
	    e = {},
	    f = !0,
	    g = b.documentElement,
	    h = "modernizr",
	    i = b.createElement(h),
	    j = i.style,
	    k = b.createElement("input"),
	    l = ":)",
	    m = {}.toString,
	    n = " -webkit- -moz- -o- -ms- ".split(" "),
	    o = "Webkit Moz O ms",
	    p = o.split(" "),
	    q = o.toLowerCase().split(" "),
	    r = { svg: "http://www.w3.org/2000/svg" },
	    s = {},
	    t = {},
	    u = {},
	    v = [],
	    w = v.slice,
	    x,
	    y = function y(a, c, d, e) {
		var f,
		    i,
		    j,
		    k,
		    l = b.createElement("div"),
		    m = b.body,
		    n = m || b.createElement("body");if (parseInt(d, 10)) while (d--) {
			j = b.createElement("div"), j.id = e ? e[d] : h + (d + 1), l.appendChild(j);
		}return f = ["&#173;", '<style id="s', h, '">', a, "</style>"].join(""), l.id = h, (m ? l : n).innerHTML += f, n.appendChild(l), m || (n.style.background = "", n.style.overflow = "hidden", k = g.style.overflow, g.style.overflow = "hidden", g.appendChild(n)), i = c(l, a), m ? l.parentNode.removeChild(l) : (n.parentNode.removeChild(n), g.style.overflow = k), !!i;
	},
	    z = function z(b) {
		var c = a.matchMedia || a.msMatchMedia;if (c) return c(b) && c(b).matches || !1;var d;return y("@media " + b + " { #" + h + " { position: absolute; } }", function (b) {
			d = (a.getComputedStyle ? getComputedStyle(b, null) : b.currentStyle)["position"] == "absolute";
		}), d;
	},
	    A = function () {
		function d(d, e) {
			e = e || b.createElement(a[d] || "div"), d = "on" + d;var f = d in e;return f || (e.setAttribute || (e = b.createElement("div")), e.setAttribute && e.removeAttribute && (e.setAttribute(d, ""), f = F(e[d], "function"), F(e[d], "undefined") || (e[d] = c), e.removeAttribute(d))), e = null, f;
		}var a = { select: "input", change: "input", submit: "form", reset: "form", error: "img", load: "img", abort: "img" };return d;
	}(),
	    B = {}.hasOwnProperty,
	    C;!F(B, "undefined") && !F(B.call, "undefined") ? C = function C(a, b) {
		return B.call(a, b);
	} : C = function C(a, b) {
		return b in a && F(a.constructor.prototype[b], "undefined");
	}, Function.prototype.bind || (Function.prototype.bind = function (b) {
		var c = this;if (typeof c != "function") throw new TypeError();var d = w.call(arguments, 1),
		    e = function e() {
			if (this instanceof e) {
				var a = function a() {};a.prototype = c.prototype;var f = new a(),
				    g = c.apply(f, d.concat(w.call(arguments)));return Object(g) === g ? g : f;
			}return c.apply(b, d.concat(w.call(arguments)));
		};return e;
	}), s.flexbox = function () {
		return J("flexWrap");
	}, s.canvas = function () {
		var a = b.createElement("canvas");return !!a.getContext && !!a.getContext("2d");
	}, s.canvastext = function () {
		return !!e.canvas && !!F(b.createElement("canvas").getContext("2d").fillText, "function");
	}, s.webgl = function () {
		return !!a.WebGLRenderingContext;
	}, s.touch = function () {
		var c;return "ontouchstart" in a || a.DocumentTouch && b instanceof DocumentTouch ? c = !0 : y(["@media (", n.join("touch-enabled),("), h, ")", "{#modernizr{top:9px;position:absolute}}"].join(""), function (a) {
			c = a.offsetTop === 9;
		}), c;
	}, s.geolocation = function () {
		return "geolocation" in navigator;
	}, s.postmessage = function () {
		return !!a.postMessage;
	}, s.websqldatabase = function () {
		return !!a.openDatabase;
	}, s.indexedDB = function () {
		return !!J("indexedDB", a);
	}, s.hashchange = function () {
		return A("hashchange", a) && (b.documentMode === c || b.documentMode > 7);
	}, s.history = function () {
		return !!a.history && !!history.pushState;
	}, s.draganddrop = function () {
		var a = b.createElement("div");return "draggable" in a || "ondragstart" in a && "ondrop" in a;
	}, s.websockets = function () {
		return "WebSocket" in a || "MozWebSocket" in a;
	}, s.rgba = function () {
		return D("background-color:rgba(150,255,150,.5)"), G(j.backgroundColor, "rgba");
	}, s.hsla = function () {
		return D("background-color:hsla(120,40%,100%,.5)"), G(j.backgroundColor, "rgba") || G(j.backgroundColor, "hsla");
	}, s.multiplebgs = function () {
		return D("background:url(https://),url(https://),red url(https://)"), /(url\s*\(.*?){3}/.test(j.background);
	}, s.backgroundsize = function () {
		return J("backgroundSize");
	}, s.borderimage = function () {
		return J("borderImage");
	}, s.borderradius = function () {
		return J("borderRadius");
	}, s.boxshadow = function () {
		return J("boxShadow");
	}, s.textshadow = function () {
		return b.createElement("div").style.textShadow === "";
	}, s.opacity = function () {
		return E("opacity:.55"), /^0.55$/.test(j.opacity);
	}, s.cssanimations = function () {
		return J("animationName");
	}, s.csscolumns = function () {
		return J("columnCount");
	}, s.cssgradients = function () {
		var a = "background-image:",
		    b = "gradient(linear,left top,right bottom,from(#9f9),to(white));",
		    c = "linear-gradient(left top,#9f9, white);";return D((a + "-webkit- ".split(" ").join(b + a) + n.join(c + a)).slice(0, -a.length)), G(j.backgroundImage, "gradient");
	}, s.cssreflections = function () {
		return J("boxReflect");
	}, s.csstransforms = function () {
		return !!J("transform");
	}, s.csstransforms3d = function () {
		var a = !!J("perspective");return a && "webkitPerspective" in g.style && y("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}", function (b, c) {
			a = b.offsetLeft === 9 && b.offsetHeight === 3;
		}), a;
	}, s.csstransitions = function () {
		return J("transition");
	}, s.fontface = function () {
		var a;return y('@font-face {font-family:"font";src:url("https://")}', function (c, d) {
			var e = b.getElementById("smodernizr"),
			    f = e.sheet || e.styleSheet,
			    g = f ? f.cssRules && f.cssRules[0] ? f.cssRules[0].cssText : f.cssText || "" : "";a = /src/i.test(g) && g.indexOf(d.split(" ")[0]) === 0;
		}), a;
	}, s.generatedcontent = function () {
		var a;return y(["#", h, "{font:0/0 a}#", h, ':after{content:"', l, '";visibility:hidden;font:3px/1 a}'].join(""), function (b) {
			a = b.offsetHeight >= 3;
		}), a;
	}, s.video = function () {
		var a = b.createElement("video"),
		    c = !1;try {
			if (c = !!a.canPlayType) c = new Boolean(c), c.ogg = a.canPlayType('video/ogg; codecs="theora"').replace(/^no$/, ""), c.h264 = a.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/, ""), c.webm = a.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/, "");
		} catch (d) {}return c;
	}, s.audio = function () {
		var a = b.createElement("audio"),
		    c = !1;try {
			if (c = !!a.canPlayType) c = new Boolean(c), c.ogg = a.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/, ""), c.mp3 = a.canPlayType("audio/mpeg;").replace(/^no$/, ""), c.wav = a.canPlayType('audio/wav; codecs="1"').replace(/^no$/, ""), c.m4a = (a.canPlayType("audio/x-m4a;") || a.canPlayType("audio/aac;")).replace(/^no$/, "");
		} catch (d) {}return c;
	}, s.localstorage = function () {
		try {
			return localStorage.setItem(h, h), localStorage.removeItem(h), !0;
		} catch (a) {
			return !1;
		}
	}, s.sessionstorage = function () {
		try {
			return sessionStorage.setItem(h, h), sessionStorage.removeItem(h), !0;
		} catch (a) {
			return !1;
		}
	}, s.webworkers = function () {
		return !!a.Worker;
	}, s.applicationcache = function () {
		return !!a.applicationCache;
	}, s.svg = function () {
		return !!b.createElementNS && !!b.createElementNS(r.svg, "svg").createSVGRect;
	}, s.inlinesvg = function () {
		var a = b.createElement("div");return a.innerHTML = "<svg/>", (a.firstChild && a.firstChild.namespaceURI) == r.svg;
	}, s.smil = function () {
		return !!b.createElementNS && /SVGAnimate/.test(m.call(b.createElementNS(r.svg, "animate")));
	}, s.svgclippaths = function () {
		return !!b.createElementNS && /SVGClipPath/.test(m.call(b.createElementNS(r.svg, "clipPath")));
	};for (var L in s) {
		C(s, L) && (x = L.toLowerCase(), e[x] = s[L](), v.push((e[x] ? "" : "no-") + x));
	}return e.input || K(), e.addTest = function (a, b) {
		if ((typeof a === "undefined" ? "undefined" : _typeof(a)) == "object") for (var d in a) {
			C(a, d) && e.addTest(d, a[d]);
		} else {
			a = a.toLowerCase();if (e[a] !== c) return e;b = typeof b == "function" ? b() : b, typeof f != "undefined" && f && (g.className += " " + (b ? "" : "no-") + a), e[a] = b;
		}return e;
	}, D(""), i = k = null, function (a, b) {
		function l(a, b) {
			var c = a.createElement("p"),
			    d = a.getElementsByTagName("head")[0] || a.documentElement;return c.innerHTML = "x<style>" + b + "</style>", d.insertBefore(c.lastChild, d.firstChild);
		}function m() {
			var a = s.elements;return typeof a == "string" ? a.split(" ") : a;
		}function n(a) {
			var b = j[a[h]];return b || (b = {}, i++, a[h] = i, j[i] = b), b;
		}function o(a, c, d) {
			c || (c = b);if (k) return c.createElement(a);d || (d = n(c));var g;return d.cache[a] ? g = d.cache[a].cloneNode() : f.test(a) ? g = (d.cache[a] = d.createElem(a)).cloneNode() : g = d.createElem(a), g.canHaveChildren && !e.test(a) && !g.tagUrn ? d.frag.appendChild(g) : g;
		}function p(a, c) {
			a || (a = b);if (k) return a.createDocumentFragment();c = c || n(a);var d = c.frag.cloneNode(),
			    e = 0,
			    f = m(),
			    g = f.length;for (; e < g; e++) {
				d.createElement(f[e]);
			}return d;
		}function q(a, b) {
			b.cache || (b.cache = {}, b.createElem = a.createElement, b.createFrag = a.createDocumentFragment, b.frag = b.createFrag()), a.createElement = function (c) {
				return s.shivMethods ? o(c, a, b) : b.createElem(c);
			}, a.createDocumentFragment = Function("h,f", "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" + m().join().replace(/[\w\-]+/g, function (a) {
				return b.createElem(a), b.frag.createElement(a), 'c("' + a + '")';
			}) + ");return n}")(s, b.frag);
		}function r(a) {
			a || (a = b);var c = n(a);return s.shivCSS && !g && !c.hasCSS && (c.hasCSS = !!l(a, "article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")), k || q(a, c), a;
		}var c = "3.7.0",
		    d = a.html5 || {},
		    e = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,
		    f = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,
		    g,
		    h = "_html5shiv",
		    i = 0,
		    j = {},
		    k;(function () {
			try {
				var a = b.createElement("a");a.innerHTML = "<xyz></xyz>", g = "hidden" in a, k = a.childNodes.length == 1 || function () {
					b.createElement("a");var a = b.createDocumentFragment();return typeof a.cloneNode == "undefined" || typeof a.createDocumentFragment == "undefined" || typeof a.createElement == "undefined";
				}();
			} catch (c) {
				g = !0, k = !0;
			}
		})();var s = { elements: d.elements || "abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video", version: c, shivCSS: d.shivCSS !== !1, supportsUnknownElements: k, shivMethods: d.shivMethods !== !1, type: "default", shivDocument: r, createElement: o, createDocumentFragment: p };a.html5 = s, r(b);
	}(this, b), e._version = d, e._prefixes = n, e._domPrefixes = q, e._cssomPrefixes = p, e.mq = z, e.hasEvent = A, e.testProp = function (a) {
		return H([a]);
	}, e.testAllProps = J, e.testStyles = y, e.prefixed = function (a, b, c) {
		return b ? J(a, b, c) : J(a, "pfx");
	}, g.className = g.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + (f ? " js " + v.join(" ") : ""), e;
}(this, this.document), function (a, b, c) {
	function d(a) {
		return "[object Function]" == o.call(a);
	}function e(a) {
		return "string" == typeof a;
	}function f() {}function g(a) {
		return !a || "loaded" == a || "complete" == a || "uninitialized" == a;
	}function h() {
		var a = p.shift();q = 1, a ? a.t ? m(function () {
			("c" == a.t ? _B.injectCss : _B.injectJs)(a.s, 0, a.a, a.x, a.e, 1);
		}, 0) : (a(), h()) : q = 0;
	}function i(a, c, d, e, f, i, j) {
		function k(b) {
			if (!o && g(l.readyState) && (u.r = o = 1, !q && h(), l.onload = l.onreadystatechange = null, b)) {
				"img" != a && m(function () {
					t.removeChild(l);
				}, 50);for (var d in y[c]) {
					y[c].hasOwnProperty(d) && y[c][d].onload();
				}
			}
		}var j = j || _B.errorTimeout,
		    l = b.createElement(a),
		    o = 0,
		    r = 0,
		    u = { t: d, s: c, e: f, a: i, x: j };1 === y[c] && (r = 1, y[c] = []), "object" == a ? l.data = c : (l.src = c, l.type = a), l.width = l.height = "0", l.onerror = l.onload = l.onreadystatechange = function () {
			k.call(this, r);
		}, p.splice(e, 0, u), "img" != a && (r || 2 === y[c] ? (t.insertBefore(l, s ? null : n), m(k, j)) : y[c].push(l));
	}function j(a, b, c, d, f) {
		return q = 0, b = b || "j", e(a) ? i("c" == b ? v : u, a, b, this.i++, c, d, f) : (p.splice(this.i++, 0, a), 1 == p.length && h()), this;
	}function k() {
		var a = _B;return a.loader = { load: j, i: 0 }, a;
	}var l = b.documentElement,
	    m = a.setTimeout,
	    n = b.getElementsByTagName("script")[0],
	    o = {}.toString,
	    p = [],
	    q = 0,
	    r = "MozAppearance" in l.style,
	    s = r && !!b.createRange().compareNode,
	    t = s ? l : n.parentNode,
	    l = a.opera && "[object Opera]" == o.call(a.opera),
	    l = !!b.attachEvent && !l,
	    u = r ? "object" : l ? "script" : "img",
	    v = l ? "script" : u,
	    w = Array.isArray || function (a) {
		return "[object Array]" == o.call(a);
	},
	    x = [],
	    y = {},
	    z = { timeout: function timeout(a, b) {
			return b.length && (a.timeout = b[0]), a;
		} },
	    _A,
	    _B;_B = function B(a) {
		function b(a) {
			var a = a.split("!"),
			    b = x.length,
			    c = a.pop(),
			    d = a.length,
			    c = { url: c, origUrl: c, prefixes: a },
			    e,
			    f,
			    g;for (f = 0; f < d; f++) {
				g = a[f].split("="), (e = z[g.shift()]) && (c = e(c, g));
			}for (f = 0; f < b; f++) {
				c = x[f](c);
			}return c;
		}function g(a, e, f, g, h) {
			var i = b(a),
			    j = i.autoCallback;i.url.split(".").pop().split("?").shift(), i.bypass || (e && (e = d(e) ? e : e[a] || e[g] || e[a.split("/").pop().split("?")[0]]), i.instead ? i.instead(a, e, f, g, h) : (y[i.url] ? i.noexec = !0 : y[i.url] = 1, f.load(i.url, i.forceCSS || !i.forceJS && "css" == i.url.split(".").pop().split("?").shift() ? "c" : c, i.noexec, i.attrs, i.timeout), (d(e) || d(j)) && f.load(function () {
				k(), e && e(i.origUrl, h, g), j && j(i.origUrl, h, g), y[i.url] = 2;
			})));
		}function h(a, b) {
			function c(a, c) {
				if (a) {
					if (e(a)) c || (j = function j() {
						var a = [].slice.call(arguments);k.apply(this, a), l();
					}), g(a, j, b, 0, h);else if (Object(a) === a) for (n in m = function () {
						var b = 0,
						    c;for (c in a) {
							a.hasOwnProperty(c) && b++;
						}return b;
					}(), a) {
						a.hasOwnProperty(n) && (!c && ! --m && (d(j) ? j = function j() {
							var a = [].slice.call(arguments);k.apply(this, a), l();
						} : j[n] = function (a) {
							return function () {
								var b = [].slice.call(arguments);a && a.apply(this, b), l();
							};
						}(k[n])), g(a[n], j, b, n, h));
					}
				} else !c && l();
			}var h = !!a.test,
			    i = a.load || a.both,
			    j = a.callback || f,
			    k = j,
			    l = a.complete || f,
			    m,
			    n;c(h ? a.yep : a.nope, !!i), i && c(i);
		}var i,
		    j,
		    l = this.yepnope.loader;if (e(a)) g(a, 0, l, 0);else if (w(a)) for (i = 0; i < a.length; i++) {
			j = a[i], e(j) ? g(j, 0, l, 0) : w(j) ? _B(j) : Object(j) === j && h(j, l);
		} else Object(a) === a && h(a, l);
	}, _B.addPrefix = function (a, b) {
		z[a] = b;
	}, _B.addFilter = function (a) {
		x.push(a);
	}, _B.errorTimeout = 1e4, null == b.readyState && b.addEventListener && (b.readyState = "loading", b.addEventListener("DOMContentLoaded", _A = function A() {
		b.removeEventListener("DOMContentLoaded", _A, 0), b.readyState = "complete";
	}, 0)), a.yepnope = k(), a.yepnope.executeStack = h, a.yepnope.injectJs = function (a, c, d, e, i, j) {
		var k = b.createElement("script"),
		    l,
		    o,
		    e = e || _B.errorTimeout;k.src = a;for (o in d) {
			k.setAttribute(o, d[o]);
		}c = j ? h : c || f, k.onreadystatechange = k.onload = function () {
			!l && g(k.readyState) && (l = 1, c(), k.onload = k.onreadystatechange = null);
		}, m(function () {
			l || (l = 1, c(1));
		}, e), i ? k.onload() : n.parentNode.insertBefore(k, n);
	}, a.yepnope.injectCss = function (a, c, d, e, g, i) {
		var e = b.createElement("link"),
		    j,
		    c = i ? h : c || f;e.href = a, e.rel = "stylesheet", e.type = "text/css";for (j in d) {
			e.setAttribute(j, d[j]);
		}g || (n.parentNode.insertBefore(e, n), m(c, 0));
	};
}(this, document), Modernizr.load = function () {
	yepnope.apply(window, [].slice.call(arguments, 0));
};

$(document).ready(function () {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	// Fix Carousal click
	$('.owl-item img').on('click', function () {
		$('.owl-item li').removeClass('active');
		$(this).addClass('active');
	});

	var language = $('#language').val();
	var name = 'name_' + language;
	console.log('the language', language);
	$(document).on('show.bs.modal', function (event) {
		$('.old-price-ql').show();
		var product = $(event.relatedTarget); // Button that triggered the modal
		$('.old-price-ql').html(product.data('price'));
		$('.new-price-ql').html(product.data('saleprice'));
		$('.product-heading').html(product.data('name'));
		$('.view-details').attr('href', product.data('link'));
		$('.product-image').attr('src', product.data('image'));
		$('.quick-desc').html(product.data('description'));

		// hide the on sale node if the product is not on sale
		if (product.data('price') == product.data('saleprice')) {
			$('.old-price-ql').hide();
		}
	});
	// when the color changes .. fetch all sizes related according to the product attribute.
	$('#color').on('change', function (e) {
		var product_id = $('#product_id').val();
		var color_id = e.target.value;
		console.log('productid', product_id);
		console.log('color id', color_id);
		$('#size').html('<option value="">select size</option>');
		return axios.get('/api/size', { params: { product_id: product_id, color_id: color_id } }).then(function (r) {
			return r.data.map(function (s) {
				console.log('the size', "" + s.size[name]);
				return $('#size').append("<option value=\"" + s.size.id + "\">" + s.size[name] + "</option>");
			});
		}).catch(function (e) {
			return console.log(e);
		});
	});
	// when the size changes .. should fetch the qty of the current attribute and inject it in max qty.
	$('#size').on('change', function (e) {
		var size_id = e.target.value;
		var color_id = $('#color').val();
		var product_id = $('#product_id').val();
		return axios.get('/api/qty', {
			params: {
				product_id: product_id,
				color_id: color_id,
				size_id: size_id
			}
		}).then(function (r) {
			$('#qty').attr('maxlength', r.data);
			$('#qty').attr('value', 0);
		}).catch(function (e) {
			return console.log(e);
		});
	});
	$('.qty-increase').on('click', function (e) {
		var max = parseInt($('#qty').attr('maxlength') - 1);
		var currentyQty = parseInt($('#qty').attr('value'));
		var qty = parseInt(currentyQty <= max ? currentyQty + 1 : 1);
		$('#qty').attr('value', qty);
	});

	$('.qty-decrease').on('click', function (e) {
		var currentyQty = parseInt($('#qty').attr('value'));
		var qty = currentyQty > 0 ? currentyQty - 1 : currentyQty;
		$('#qty').attr('value', qty);
	});
});
$(document).ready(function () {
	var grandTotal = $('.grandTotal').attr('value');
	console.log('grandTotal', grandTotal);
	$('.grossTotal').attr('value', grandTotal);
	$('#grossTotal').html(grandTotal);
	$('#forward').attr('disabled', 'disabled');
	$('#shipment_package').on('change', function (e) {
		var shipmentPackageId = e.target.value;
		var charge = $(this).find(':selected').data("charge");
		var is_local = $(this).find(':selected').data("is_local");
		$('#branch').html('').addClass('hidden');
		$('.branches').addClass('hidden');
		$('#branch_address').html('').addClass('hidden');
		$('#free_shipment').addClass('hidden').attr('checked', false);
		$('.free_shipment').addClass('hidden');
		if (is_local) {
			$('#free_shipment').toggleClass('hidden');
			$('.free_shipment').toggleClass('hidden');
			$('#free_shipment').click(function () {
				if ($(this).is(':checked')) {
					$('.branches').toggleClass('hidden');
					$('#branch').toggleClass('hidden');
					$('#branch_address').toggleClass('hidden');
					axios.get('/api/branch').then(function (r) {
						return r.data.map(function (v) {
							$('#branch').append("<option value=\"" + v.id + "\">" + v.name + "</option>");
						});
					}).catch(function (e) {
						return console.log(e);
					});
					var grandTotal = $('.grandTotal').attr('value');
					$('.grossTotal').attr('value', grandTotal);
					$('.grandTotal').attr('value', grandTotal);
					$('#grossTotal').html("<p>" + grandTotal + "</p>");
					$('#forward').removeAttr('disabled');
				} else {
					$('.branches').toggleClass('hidden');
					$('#branch').toggleClass('hidden');
					$('#branch_address').toggleClass('hidden');
					$('.charge').attr('value', charge);
					var grandTotal = $('.grandTotal').attr('value');
					var grossTotal = parseFloat(grandTotal) + parseFloat(charge);
					$('.grossTotal').attr('value', grossTotal);
					$('.grandTotal').attr('value', grandTotal);
					$('#grossTotal').html("<p>" + grossTotal + "</p>");
					$('#forward').removeAttr('disabled');
				}
			});
			$('.charge').attr('value', charge);
			var grandTotal = $('.grandTotal').attr('value');
			var grossTotal = parseFloat(grandTotal) + parseFloat(charge);
			$('.grossTotal').attr('value', grossTotal);
			$('.grandTotal').attr('value', grandTotal);
			$('#grossTotal').html("<p>" + grossTotal + "</p>");
			$('#forward').removeAttr('disabled');
		} else {
			$('.charge').attr('value', charge);
			var grandTotal = $('.grandTotal').attr('value');
			console.log('isnull', isNaN(charge));
			var grossTotal = parseFloat(grandTotal) + parseFloat(!isNaN(charge) ? charge : 0);
			$('.grossTotal').attr('value', grossTotal);
			$('.grandTotal').attr('value', grandTotal);
			$('#grossTotal').html("<p>" + grossTotal + "</p>");
			$('#forward').removeAttr('disabled');
		}
		console.log('charge', charge);
		console.log('grossTotal', grossTotal);
		console.log('grandTotal', grandTotal);
	});

	$('#branch').on('change', function (e) {
		$('#branch_address').html('');
		var branchAddress = $(this).find(':selected').data('address');
		$(this).append("<p>" + branchAddress + "</p>");
	});
});