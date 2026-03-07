
(function(){
    // During static testing, respond safely to AJAX/fetch requests so code that expects JSON doesn't crash.
    try{
        const ajaxPatterns = ['wp-admin/admin-ajax.php'];
        const blocked = ['vd-group.net'];
        const origFetch = window.fetch.bind(window);
        window.fetch = function(input, init){
            try{
                const url = (typeof input === 'string') ? input : (input && input.url) || '';
                if(ajaxPatterns.some(b=> url && url.indexOf(b) !== -1)){
                    // Return an empty JSON response so callers using .json() won't throw.
                    return Promise.resolve(new Response(JSON.stringify({data:{}}), {status:200, headers:{'Content-Type':'application/json'}}));
                }
                if(blocked.some(b=> url && url.indexOf(b) !== -1)){
                    return Promise.resolve(new Response('', {status:204}));
                }
            }catch(e){}
            return origFetch(input, init);
        };
        const origOpen = XMLHttpRequest.prototype.open;
        XMLHttpRequest.prototype.open = function(method, url){
            try{
                if(ajaxPatterns.some(b=> url && url.indexOf(b) !== -1) || blocked.some(b=> url && url.indexOf(b) !== -1)){
                    this._blocked = true;
                }
            }catch(e){}
            return origOpen.apply(this, arguments);
        };
        const origSend = XMLHttpRequest.prototype.send;
        XMLHttpRequest.prototype.send = function(){
            if(this._blocked){
                try{ this.readyState = 4; this.status = 200; this.responseText = JSON.stringify({data:{}}); this.onreadystatechange && this.onreadystatechange(); this.onload && this.onload(); }catch(e){}
                return;
            }
            return origSend.apply(this, arguments);
        };
    }catch(e){}

    // Ensure the wpr lazyload bg container exists to avoid insertAdjacentElement on null
    try{
        if(!document.querySelector('#wpr-lazyload-bg-container')){
            var __wpr_bg = document.createElement('div');
            __wpr_bg.id = 'wpr-lazyload-bg-container';
            document.body && document.body.appendChild(__wpr_bg);
        }
    }catch(e){}

    // Minimal hoverIntent fallback for jQuery if plugin not present
    try{
        if(window.jQuery && !jQuery.fn.hoverIntent){
            jQuery.fn.hoverIntent = function(over, out){
                if(typeof over === 'function') this.on('mouseenter', over);
                if(typeof out === 'function') this.on('mouseleave', out);
                return this;
            };
        }
    }catch(e){}
})();



(function(){
    // Block fetch/XHR to remote admin-ajax and vd-group.net during static testing
    try{
        const blocked = ['wp-admin/admin-ajax.php','vd-group.net'];
        const origFetch = window.fetch.bind(window);
        window.fetch = function(input, init){
            try{
                const url = (typeof input === 'string') ? input : (input && input.url) || '';
                if(blocked.some(b=> url && url.indexOf(b) !== -1)){
                    return Promise.resolve(new Response(null, {status:204}));
                }
            }catch(e){}
            return origFetch(input, init);
        };
        const origOpen = XMLHttpRequest.prototype.open;
        XMLHttpRequest.prototype.open = function(method, url){
            try{
                if(blocked.some(b=> url && url.indexOf(b) !== -1)){
                    this._blocked = true;
                }
            }catch(e){}
            return origOpen.apply(this, arguments);
        };
        const origSend = XMLHttpRequest.prototype.send;
        XMLHttpRequest.prototype.send = function(){
            if(this._blocked){
                try{ this.readyState = 4; this.status = 204; this.onreadystatechange && this.onreadystatechange(); }catch(e){}
                return;
            }
            return origSend.apply(this, arguments);
        };
    }catch(e){}

    // Ensure the wpr lazyload bg container exists to avoid insertAdjacentElement on null
    try{
        if(!document.querySelector('#wpr-lazyload-bg-container')){
            var __wpr_bg = document.createElement('div');
            __wpr_bg.id = 'wpr-lazyload-bg-container';
            document.body && document.body.appendChild(__wpr_bg);
        }
    }catch(e){}

    // Minimal hoverIntent fallback for jQuery if plugin not present
    try{
        if(window.jQuery && !jQuery.fn.hoverIntent){
            jQuery.fn.hoverIntent = function(over, out){
                if(typeof over === 'function') this.on('mouseenter', over);
                if(typeof out === 'function') this.on('mouseleave', out);
                return this;
            };
        }
    }catch(e){}
})();


if (navigator.userAgent.match(/MSIE|Internet Explorer/i) || navigator.userAgent.match(/Trident\/7\..*?rv:11/i)) { var href = document.location.href; if (!href.match(/[?&]nowprocket/)) { if (href.indexOf("?") == -1) { if (href.indexOf("#") == -1) { document.location.href = href + "?nowprocket=1" } else { document.location.href = href.replace("#", "?nowprocket=1#") } } else { if (href.indexOf("#") == -1) { document.location.href = href + "&nowprocket=1" } else { document.location.href = href.replace("#", "&nowprocket=1#") } } } }

/* ---- extracted script block ---- */

(() => { class RocketLazyLoadScripts { constructor() { this.v = "2.0.4", this.userEvents = ["keydown", "keyup", "mousedown", "mouseup", "mousemove", "mouseover", "mouseout", "touchmove", "touchstart", "touchend", "touchcancel", "wheel", "click", "dblclick", "input"], this.attributeEvents = ["onblur", "onclick", "oncontextmenu", "ondblclick", "onfocus", "onmousedown", "onmouseenter", "onmouseleave", "onmousemove", "onmouseout", "onmouseover", "onmouseup", "onmousewheel", "onscroll", "onsubmit"] } async t() { this.i(), this.o(), /iP(ad|hone)/.test(navigator.userAgent) && this.h(), this.u(), this.l(this), this.m(), this.k(this), this.p(this), this._(), await Promise.all([this.R(), this.L()]), this.lastBreath = Date.now(), this.S(this), this.P(), this.D(), this.O(), this.M(), await this.C(this.delayedScripts.normal), await this.C(this.delayedScripts.defer), await this.C(this.delayedScripts.async), await this.T(), await this.F(), await this.j(), await this.A(), window.dispatchEvent(new Event("rocket-allScriptsLoaded")), this.everythingLoaded = !0, this.lastTouchEnd && await new Promise(t => setTimeout(t, 500 - Date.now() + this.lastTouchEnd)), this.I(), this.H(), this.U(), this.W() } i() { this.CSPIssue = sessionStorage.getItem("rocketCSPIssue"), document.addEventListener("securitypolicyviolation", t => { this.CSPIssue || "script-src-elem" !== t.violatedDirective || "data" !== t.blockedURI || (this.CSPIssue = !0, sessionStorage.setItem("rocketCSPIssue", !0)) }, { isRocket: !0 }) } o() { window.addEventListener("pageshow", t => { this.persisted = t.persisted, this.realWindowLoadedFired = !0 }, { isRocket: !0 }), window.addEventListener("pagehide", () => { this.onFirstUserAction = null }, { isRocket: !0 }) } h() { let t; function e(e) { t = e } window.addEventListener("touchstart", e, { isRocket: !0 }), window.addEventListener("touchend", function i(o) { o.changedTouches[0] && t.changedTouches[0] && Math.abs(o.changedTouches[0].pageX - t.changedTouches[0].pageX) < 10 && Math.abs(o.changedTouches[0].pageY - t.changedTouches[0].pageY) < 10 && o.timeStamp - t.timeStamp < 200 && (window.removeEventListener("touchstart", e, { isRocket: !0 }), window.removeEventListener("touchend", i, { isRocket: !0 }), "INPUT" === o.target.tagName && "text" === o.target.type || (o.target.dispatchEvent(new TouchEvent("touchend", { target: o.target, bubbles: !0 })), o.target.dispatchEvent(new MouseEvent("mouseover", { target: o.target, bubbles: !0 })), o.target.dispatchEvent(new PointerEvent("click", { target: o.target, bubbles: !0, cancelable: !0, detail: 1, clientX: o.changedTouches[0].clientX, clientY: o.changedTouches[0].clientY })), event.preventDefault())) }, { isRocket: !0 }) } q(t) { this.userActionTriggered || ("mousemove" !== t.type || this.firstMousemoveIgnored ? "keyup" === t.type || "mouseover" === t.type || "mouseout" === t.type || (this.userActionTriggered = !0, this.onFirstUserAction && this.onFirstUserAction()) : this.firstMousemoveIgnored = !0), "click" === t.type && t.preventDefault(), t.stopPropagation(), t.stopImmediatePropagation(), "touchstart" === this.lastEvent && "touchend" === t.type && (this.lastTouchEnd = Date.now()), "click" === t.type && (this.lastTouchEnd = 0), this.lastEvent = t.type, t.composedPath && t.composedPath()[0].getRootNode() instanceof ShadowRoot && (t.rocketTarget = t.composedPath()[0]), this.savedUserEvents.push(t) } u() { this.savedUserEvents = [], this.userEventHandler = this.q.bind(this), this.userEvents.forEach(t => window.addEventListener(t, this.userEventHandler, { passive: !1, isRocket: !0 })), document.addEventListener("visibilitychange", this.userEventHandler, { isRocket: !0 }) } U() { this.userEvents.forEach(t => window.removeEventListener(t, this.userEventHandler, { passive: !1, isRocket: !0 })), document.removeEventListener("visibilitychange", this.userEventHandler, { isRocket: !0 }), this.savedUserEvents.forEach(t => { (t.rocketTarget || t.target).dispatchEvent(new window[t.constructor.name](t.type, t)) }) } m() { const t = "return false", e = Array.from(this.attributeEvents, t => "data-rocket-" + t), i = "[" + this.attributeEvents.join("],[") + "]", o = "[data-rocket-" + this.attributeEvents.join("],[data-rocket-") + "]", s = (e, i, o) => { o && o !== t && (e.setAttribute("data-rocket-" + i, o), e["rocket" + i] = new Function("event", o), e.setAttribute(i, t)) }; new MutationObserver(t => { for (const n of t) "attributes" === n.type && (n.attributeName.startsWith("data-rocket-") || this.everythingLoaded ? n.attributeName.startsWith("data-rocket-") && this.everythingLoaded && this.N(n.target, n.attributeName.substring(12)) : s(n.target, n.attributeName, n.target.getAttribute(n.attributeName))), "childList" === n.type && n.addedNodes.forEach(t => { if (t.nodeType === Node.ELEMENT_NODE) if (this.everythingLoaded) for (const i of [t, ...t.querySelectorAll(o)]) for (const t of i.getAttributeNames()) e.includes(t) && this.N(i, t.substring(12)); else for (const e of [t, ...t.querySelectorAll(i)]) for (const t of e.getAttributeNames()) this.attributeEvents.includes(t) && s(e, t, e.getAttribute(t)) }) }).observe(document, { subtree: !0, childList: !0, attributeFilter: [...this.attributeEvents, ...e] }) } I() { this.attributeEvents.forEach(t => { document.querySelectorAll("[data-rocket-" + t + "]").forEach(e => { this.N(e, t) }) }) } N(t, e) { const i = t.getAttribute("data-rocket-" + e); i && (t.setAttribute(e, i), t.removeAttribute("data-rocket-" + e)) } k(t) { Object.defineProperty(HTMLElement.prototype, "onclick", { get() { return this.rocketonclick || null }, set(e) { this.rocketonclick = e, this.setAttribute(t.everythingLoaded ? "onclick" : "data-rocket-onclick", "this.rocketonclick(event)") } }) } S(t) { function e(e, i) { let o = e[i]; e[i] = null, Object.defineProperty(e, i, { get: () => o, set(s) { t.everythingLoaded ? o = s : e["rocket" + i] = o = s } }) } e(document, "onreadystatechange"), e(window, "onload"), e(window, "onpageshow"); try { Object.defineProperty(document, "readyState", { get: () => t.rocketReadyState, set(e) { t.rocketReadyState = e }, configurable: !0 }), document.readyState = "loading" } catch (t) { console.log("WPRocket DJE readyState conflict, bypassing") } } l(t) { this.originalAddEventListener = EventTarget.prototype.addEventListener, this.originalRemoveEventListener = EventTarget.prototype.removeEventListener, this.savedEventListeners = [], EventTarget.prototype.addEventListener = function (e, i, o) { o && o.isRocket || !t.B(e, this) && !t.userEvents.includes(e) || t.B(e, this) && !t.userActionTriggered || e.startsWith("rocket-") || t.everythingLoaded ? t.originalAddEventListener.call(this, e, i, o) : (t.savedEventListeners.push({ target: this, remove: !1, type: e, func: i, options: o }), "mouseenter" !== e && "mouseleave" !== e || t.originalAddEventListener.call(this, e, t.savedUserEvents.push, o)) }, EventTarget.prototype.removeEventListener = function (e, i, o) { o && o.isRocket || !t.B(e, this) && !t.userEvents.includes(e) || t.B(e, this) && !t.userActionTriggered || e.startsWith("rocket-") || t.everythingLoaded ? t.originalRemoveEventListener.call(this, e, i, o) : t.savedEventListeners.push({ target: this, remove: !0, type: e, func: i, options: o }) } } J(t, e) { this.savedEventListeners = this.savedEventListeners.filter(i => { let o = i.type, s = i.target || window; return e !== o || t !== s || (this.B(o, s) && (i.type = "rocket-" + o), this.$(i), !1) }) } H() { EventTarget.prototype.addEventListener = this.originalAddEventListener, EventTarget.prototype.removeEventListener = this.originalRemoveEventListener, this.savedEventListeners.forEach(t => this.$(t)) } $(t) { t.remove ? this.originalRemoveEventListener.call(t.target, t.type, t.func, t.options) : this.originalAddEventListener.call(t.target, t.type, t.func, t.options) } p(t) { let e; function i(e) { return t.everythingLoaded ? e : e.split(" ").map(t => "load" === t || t.startsWith("load.") ? "rocket-jquery-load" : t).join(" ") } function o(o) { function s(e) { const s = o.fn[e]; o.fn[e] = o.fn.init.prototype[e] = function () { return this[0] === window && t.userActionTriggered && ("string" == typeof arguments[0] || arguments[0] instanceof String ? arguments[0] = i(arguments[0]) : "object" == typeof arguments[0] && Object.keys(arguments[0]).forEach(t => { const e = arguments[0][t]; delete arguments[0][t], arguments[0][i(t)] = e })), s.apply(this, arguments), this } } if (o && o.fn && !t.allJQueries.includes(o)) { const e = { DOMContentLoaded: [], "rocket-DOMContentLoaded": [] }; for (const t in e) document.addEventListener(t, () => { e[t].forEach(t => t()) }, { isRocket: !0 }); o.fn.ready = o.fn.init.prototype.ready = function (i) { function s() { parseInt(o.fn.jquery) > 2 ? setTimeout(() => i.bind(document)(o)) : i.bind(document)(o) } return "function" == typeof i && (t.realDomReadyFired ? !t.userActionTriggered || t.fauxDomReadyFired ? s() : e["rocket-DOMContentLoaded"].push(s) : e.DOMContentLoaded.push(s)), o([]) }, s("on"), s("one"), s("off"), t.allJQueries.push(o) } e = o } t.allJQueries = [], o(window.jQuery), Object.defineProperty(window, "jQuery", { get: () => e, set(t) { o(t) } }) } P() { const t = new Map; document.write = document.writeln = function (e) { const i = document.currentScript, o = document.createRange(), s = i.parentElement; let n = t.get(i); void 0 === n && (n = i.nextSibling, t.set(i, n)); const c = document.createDocumentFragment(); o.setStart(c, 0), c.appendChild(o.createContextualFragment(e)), s.insertBefore(c, n) } } async R() { return new Promise(t => { this.userActionTriggered ? t() : this.onFirstUserAction = t }) } async L() { return new Promise(t => { document.addEventListener("DOMContentLoaded", () => { this.realDomReadyFired = !0, t() }, { isRocket: !0 }) }) } async j() { return this.realWindowLoadedFired ? Promise.resolve() : new Promise(t => { window.addEventListener("load", t, { isRocket: !0 }) }) } M() { this.pendingScripts = []; this.scriptsMutationObserver = new MutationObserver(t => { for (const e of t) e.addedNodes.forEach(t => { "SCRIPT" !== t.tagName || t.noModule || t.isWPRocket || this.pendingScripts.push({ script: t, promise: new Promise(e => { const i = () => { const i = this.pendingScripts.findIndex(e => e.script === t); i >= 0 && this.pendingScripts.splice(i, 1), e() }; t.addEventListener("load", i, { isRocket: !0 }), t.addEventListener("error", i, { isRocket: !0 }), setTimeout(i, 1e3) }) }) }) }), this.scriptsMutationObserver.observe(document, { childList: !0, subtree: !0 }) } async F() { await this.X(), this.pendingScripts.length ? (await this.pendingScripts[0].promise, await this.F()) : this.scriptsMutationObserver.disconnect() } D() { this.delayedScripts = { normal: [], async: [], defer: [] }, document.querySelectorAll("script[type$=rocketlazyloadscript]").forEach(t => { t.hasAttribute("data-rocket-src") ? t.hasAttribute("async") && !1 !== t.async ? this.delayedScripts.async.push(t) : t.hasAttribute("defer") && !1 !== t.defer || "module" === t.getAttribute("data-rocket-type") ? this.delayedScripts.defer.push(t) : this.delayedScripts.normal.push(t) : this.delayedScripts.normal.push(t) }) } async _() { await this.L(); let t = []; document.querySelectorAll("script[type$=rocketlazyloadscript][data-rocket-src]").forEach(e => { let i = e.getAttribute("data-rocket-src"); if (i && !i.startsWith("data:")) { i.startsWith("//") && (i = location.protocol + i); try { const o = new URL(i).origin; o !== location.origin && t.push({ src: o, crossOrigin: e.crossOrigin || "module" === e.getAttribute("data-rocket-type") }) } catch (t) { } } }), t = [...new Map(t.map(t => [JSON.stringify(t), t])).values()], this.Y(t, "preconnect") } async G(t) { if (await this.K(), !0 !== t.noModule || !("noModule" in HTMLScriptElement.prototype)) return new Promise(e => { let i; function o() { (i || t).setAttribute("data-rocket-status", "executed"), e() } try { if (navigator.userAgent.includes("Firefox/") || "" === navigator.vendor || this.CSPIssue) i = document.createElement("script"), [...t.attributes].forEach(t => { let e = t.nodeName; "type" !== e && ("data-rocket-type" === e && (e = "type"), "data-rocket-src" === e && (e = "src"), i.setAttribute(e, t.nodeValue)) }), t.text && (i.text = t.text), t.nonce && (i.nonce = t.nonce), i.hasAttribute("src") ? (i.addEventListener("load", o, { isRocket: !0 }), i.addEventListener("error", () => { i.setAttribute("data-rocket-status", "failed-network"), e() }, { isRocket: !0 }), setTimeout(() => { i.isConnected || e() }, 1)) : (i.text = t.text, o()), i.isWPRocket = !0, t.parentNode.replaceChild(i, t); else { const i = t.getAttribute("data-rocket-type"), s = t.getAttribute("data-rocket-src"); i ? (t.type = i, t.removeAttribute("data-rocket-type")) : t.removeAttribute("type"), t.addEventListener("load", o, { isRocket: !0 }), t.addEventListener("error", i => { this.CSPIssue && i.target.src.startsWith("data:") ? (console.log("WPRocket: CSP fallback activated"), t.removeAttribute("src"), this.G(t).then(e)) : (t.setAttribute("data-rocket-status", "failed-network"), e()) }, { isRocket: !0 }), s ? (t.fetchPriority = "high", t.removeAttribute("data-rocket-src"), t.src = s) : t.src = "data:text/javascript;base64," + window.btoa(unescape(encodeURIComponent(t.text))) } } catch (i) { t.setAttribute("data-rocket-status", "failed-transform"), e() } }); t.setAttribute("data-rocket-status", "skipped") } async C(t) { const e = t.shift(); return e ? (e.isConnected && await this.G(e), this.C(t)) : Promise.resolve() } O() { this.Y([...this.delayedScripts.normal, ...this.delayedScripts.defer, ...this.delayedScripts.async], "preload") } Y(t, e) { this.trash = this.trash || []; let i = !0; var o = document.createDocumentFragment(); t.forEach(t => { const s = t.getAttribute && t.getAttribute("data-rocket-src") || t.src; if (s && !s.startsWith("data:")) { const n = document.createElement("link"); n.href = s, n.rel = e, "preconnect" !== e && (n.as = "script", n.fetchPriority = i ? "high" : "low"), t.getAttribute && "module" === t.getAttribute("data-rocket-type") && (n.crossOrigin = !0), t.crossOrigin && (n.crossOrigin = t.crossOrigin), t.integrity && (n.integrity = t.integrity), t.nonce && (n.nonce = t.nonce), o.appendChild(n), this.trash.push(n), i = !1 } }), document.head.appendChild(o) } W() { this.trash.forEach(t => t.remove()) } async T() { try { document.readyState = "interactive" } catch (t) { } this.fauxDomReadyFired = !0; try { await this.K(), this.J(document, "readystatechange"), document.dispatchEvent(new Event("rocket-readystatechange")), await this.K(), document.rocketonreadystatechange && document.rocketonreadystatechange(), await this.K(), this.J(document, "DOMContentLoaded"), document.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this.K(), this.J(window, "DOMContentLoaded"), window.dispatchEvent(new Event("rocket-DOMContentLoaded")) } catch (t) { console.error(t) } } async A() { try { document.readyState = "complete" } catch (t) { } try { await this.K(), this.J(document, "readystatechange"), document.dispatchEvent(new Event("rocket-readystatechange")), await this.K(), document.rocketonreadystatechange && document.rocketonreadystatechange(), await this.K(), this.J(window, "load"), window.dispatchEvent(new Event("rocket-load")), await this.K(), window.rocketonload && window.rocketonload(), await this.K(), this.allJQueries.forEach(t => t(window).trigger("rocket-jquery-load")), await this.K(), this.J(window, "pageshow"); const t = new Event("rocket-pageshow"); t.persisted = this.persisted, window.dispatchEvent(t), await this.K(), window.rocketonpageshow && window.rocketonpageshow({ persisted: this.persisted }) } catch (t) { console.error(t) } } async K() { Date.now() - this.lastBreath > 45 && (await this.X(), this.lastBreath = Date.now()) } async X() { return document.hidden ? new Promise(t => setTimeout(t)) : new Promise(t => requestAnimationFrame(t)) } B(t, e) { return e === document && "readystatechange" === t || (e === document && "DOMContentLoaded" === t || (e === window && "DOMContentLoaded" === t || (e === window && "load" === t || e === window && "pageshow" === t))) } static run() { (new RocketLazyLoadScripts).t() } } RocketLazyLoadScripts.run() })();

/* ---- extracted script block ---- */

(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);

/* ---- extracted script block ---- */


		/* <![CDATA[ */
		window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); }
		gtag('consent', 'default', { "ad_personalization": "denied", "ad_storage": "denied", "ad_user_data": "denied", "analytics_storage": "denied", "functionality_storage": "denied", "security_storage": "denied", "personalization_storage": "denied", "region": ["AT", "BE", "BG", "CH", "CY", "CZ", "DE", "DK", "EE", "ES", "FI", "FR", "GB", "GR", "HR", "HU", "IE", "IS", "IT", "LI", "LT", "LU", "LV", "MT", "NL", "NO", "PL", "PT", "RO", "SE", "SI", "SK"], "wait_for_update": 500 });
		window._googlesitekitConsentCategoryMap = { "statistics": ["analytics_storage"], "marketing": ["ad_storage", "ad_user_data", "ad_personalization"], "functional": ["functionality_storage", "security_storage"], "preferences": ["personalization_storage"] };
		window._googlesitekitConsents = { "ad_personalization": "denied", "ad_storage": "denied", "ad_user_data": "denied", "analytics_storage": "denied", "functionality_storage": "denied", "security_storage": "denied", "personalization_storage": "denied", "region": ["AT", "BE", "BG", "CH", "CY", "CZ", "DE", "DK", "EE", "ES", "FI", "FR", "GB", "GR", "HR", "HU", "IE", "IS", "IT", "LI", "LT", "LU", "LV", "MT", "NL", "NO", "PL", "PT", "RO", "SE", "SI", "SK"], "wait_for_update": 500 };
		/* ]]> */
	

/* ---- extracted script block ---- */


		/* <![CDATA[ */
		var handl_utm = [];
		/* ]]> */
	

/* ---- extracted script block ---- */


		/* <![CDATA[ */
		window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); }
		gtag("set", "linker", { "domains": ["vd-group.net"] });
		gtag("js", new Date());
		gtag("set", "developer_id.dZTNiMT", true);
		gtag("config", "GT-PJNVZCG", { "googlesitekit_post_type": "page" });
		window._googlesitekit = window._googlesitekit || {}; window._googlesitekit.throttledEvents = []; window._googlesitekit.gtagEvent = (name, data) => { var key = JSON.stringify({ name, data }); if (!!window._googlesitekit.throttledEvents[key]) { return; } window._googlesitekit.throttledEvents[key] = true; setTimeout(() => { delete window._googlesitekit.throttledEvents[key]; }, 5); gtag("event", name, { ...data, event_source: "site-kit" }); };
		/* ]]> */
	

/* ---- extracted script block ---- */


		dataLayer = [];
		dataLayer.push ({ 'authorName': 'VD Group' });
		dataLayer.push ({ 'postType': 'page' });
		dataLayer.push ({ 'postTags': '' });
	

/* ---- extracted script block ---- */

const rocket_pairs = [{ "selector": ".yith-wcan-filters .yith-wcan-filter .filter-title.collapsable.closed,.yith-wcan-filters .yith-wcan-filter .filter-title.collapsable:not(.opened),.yith-wcan-filters .yith-wcan-filter .filter-title.collapsable:not(.open)", "style": ".yith-wcan-filters .yith-wcan-filter .filter-title.collapsable.closed:after,.yith-wcan-filters .yith-wcan-filter .filter-title.collapsable:not(.opened):after,.yith-wcan-filters .yith-wcan-filter .filter-title.collapsable:not(.open):after{--wpr-bg-d0447c74-2ef4-4288-a2da-68290ec0630e: url('https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-down.svg');}", "hash": "d0447c74-2ef4-4288-a2da-68290ec0630e", "url": "https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-down.svg" }, { "selector": ".yith-wcan-filters .yith-wcan-filter .filter-title.collapsable.open,.yith-wcan-filters .yith-wcan-filter .filter-title.collapsable.opened", "style": ".yith-wcan-filters .yith-wcan-filter .filter-title.collapsable.open:after,.yith-wcan-filters .yith-wcan-filter .filter-title.collapsable.opened:after{--wpr-bg-c5411816-15b0-4a1a-8397-884f880db160: url('https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-up.svg');}", "hash": "c5411816-15b0-4a1a-8397-884f880db160", "url": "https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-up.svg" }, { "selector": ".yith-wcan-filters .yith-wcan-filter .filter-items .filter-item.active.color:not(.no-color):not(.no-image):not(.label-right)>a", "style": ".yith-wcan-filters .yith-wcan-filter .filter-items .filter-item.active.color:not(.no-color):not(.no-image):not(.label-right)>a:after{--wpr-bg-7ccc62db-d707-4650-b23c-603a096c6fe2: url('https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/close.svg');}", "hash": "7ccc62db-d707-4650-b23c-603a096c6fe2", "url": "https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/close.svg" }, { "selector": ".yith-wcan-filters .yith-wcan-filter .filter-items .filter-item.label.active.with-image:not(.label-right)>a", "style": ".yith-wcan-filters .yith-wcan-filter .filter-items .filter-item.label.active.with-image:not(.label-right)>a:after{--wpr-bg-a0b8b3e4-1d51-4971-82bd-1c503c1b14ad: url('https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/close.svg');}", "hash": "a0b8b3e4-1d51-4971-82bd-1c503c1b14ad", "url": "https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/close.svg" }, { "selector": ".yith-wcan-filters .yith-wcan-filter .filter-items .filter-item.hierarchy-collapsable.closed>.toggle-handle", "style": ".yith-wcan-filters .yith-wcan-filter .filter-items .filter-item.hierarchy-collapsable.closed>.toggle-handle{--wpr-bg-13762b3e-95da-4063-93e9-a63f1da793e9: url('https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-down.svg');}", "hash": "13762b3e-95da-4063-93e9-a63f1da793e9", "url": "https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-down.svg" }, { "selector": ".yith-wcan-filters .yith-wcan-filter .filter-items .filter-item.hierarchy-collapsable.opened>.toggle-handle", "style": ".yith-wcan-filters .yith-wcan-filter .filter-items .filter-item.hierarchy-collapsable.opened>.toggle-handle{--wpr-bg-2a58fb13-9b06-475a-b26b-830da8bc4030: url('https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-up.svg');}", "hash": "2a58fb13-9b06-475a-b26b-830da8bc4030", "url": "https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-up.svg" }, { "selector": ".yith-wcan-filters .yith-wcan-filter .yith-wcan-dropdown.closed,.yith-wcan-filters .yith-wcan-filter .yith-wcan-dropdown:not(.opened),.yith-wcan-filters .yith-wcan-filter .yith-wcan-dropdown:not(.open)", "style": ".yith-wcan-filters .yith-wcan-filter .yith-wcan-dropdown.closed:after,.yith-wcan-filters .yith-wcan-filter .yith-wcan-dropdown:not(.opened):after,.yith-wcan-filters .yith-wcan-filter .yith-wcan-dropdown:not(.open):after{--wpr-bg-680e58ff-343f-48f5-84d5-f0115535e1b1: url('https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-down.svg');}", "hash": "680e58ff-343f-48f5-84d5-f0115535e1b1", "url": "https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-down.svg" }, { "selector": ".yith-wcan-filters .yith-wcan-filter .yith-wcan-dropdown.open,.yith-wcan-filters .yith-wcan-filter .yith-wcan-dropdown.opened", "style": ".yith-wcan-filters .yith-wcan-filter .yith-wcan-dropdown.open:after,.yith-wcan-filters .yith-wcan-filter .yith-wcan-dropdown.opened:after{--wpr-bg-a0dfba4a-b7dd-46bc-a1b8-a4b1a5fbb214: url('https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-up.svg');}", "hash": "a0dfba4a-b7dd-46bc-a1b8-a4b1a5fbb214", "url": "https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-up.svg" }, { "selector": ".yith-wcan-filters .yith-wcan-filter .yith-wcan-dropdown .dropdown-wrapper .search-field-container", "style": ".yith-wcan-filters .yith-wcan-filter .yith-wcan-dropdown .dropdown-wrapper .search-field-container:after{--wpr-bg-acc068a6-e3a5-4e73-860f-77e94ca34230: url('https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/search.svg');}", "hash": "acc068a6-e3a5-4e73-860f-77e94ca34230", "url": "https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/search.svg" }, { "selector": ".yith-wcan-filters .yith-wcan-filter.filter-placeholder .select-placeholder.closed,.yith-wcan-filters .yith-wcan-filter.filter-placeholder .select-placeholder:not(.opened),.yith-wcan-filters .yith-wcan-filter.filter-placeholder .select-placeholder:not(.open)", "style": ".yith-wcan-filters .yith-wcan-filter.filter-placeholder .select-placeholder.closed:after,.yith-wcan-filters .yith-wcan-filter.filter-placeholder .select-placeholder:not(.opened):after,.yith-wcan-filters .yith-wcan-filter.filter-placeholder .select-placeholder:not(.open):after{--wpr-bg-f315c88a-453d-400c-8659-77d16061276c: url('https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-down.svg');}", "hash": "f315c88a-453d-400c-8659-77d16061276c", "url": "https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-down.svg" }, { "selector": ".yith-wcan-filters .yith-wcan-filter.filter-placeholder .select-placeholder.open,.yith-wcan-filters .yith-wcan-filter.filter-placeholder .select-placeholder.opened", "style": ".yith-wcan-filters .yith-wcan-filter.filter-placeholder .select-placeholder.open:after,.yith-wcan-filters .yith-wcan-filter.filter-placeholder .select-placeholder.opened:after{--wpr-bg-40de9689-a9e7-4e65-b4cb-d7004ebcf536: url('https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-up.svg');}", "hash": "40de9689-a9e7-4e65-b4cb-d7004ebcf536", "url": "https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-up.svg" }, { "selector": ".yith-wcan-filters.custom-style span.checkboxbutton.checked", "style": ".yith-wcan-filters.custom-style span.checkboxbutton.checked:before{--wpr-bg-2a6dd115-1d9d-4a38-86ec-2ce405015a7b: url('https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/check.svg');}", "hash": "2a6dd115-1d9d-4a38-86ec-2ce405015a7b", "url": "https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/check.svg" }, { "selector": ".yith-wcan-filters.horizontal:not(.filters-modal) .yith-wcan-filter.filter-placeholder .filter-content.closed,.yith-wcan-filters.horizontal:not(.filters-modal) .yith-wcan-filter.filter-placeholder .filter-content:not(.opened),.yith-wcan-filters.horizontal:not(.filters-modal) .yith-wcan-filter.filter-placeholder .filter-content:not(.open)", "style": ".yith-wcan-filters.horizontal:not(.filters-modal) .yith-wcan-filter.filter-placeholder .filter-content.closed:after,.yith-wcan-filters.horizontal:not(.filters-modal) .yith-wcan-filter.filter-placeholder .filter-content:not(.opened):after,.yith-wcan-filters.horizontal:not(.filters-modal) .yith-wcan-filter.filter-placeholder .filter-content:not(.open):after{--wpr-bg-c9099ea3-95de-4561-8bbb-3b4e7e6eb66c: url('https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-down.svg');}", "hash": "c9099ea3-95de-4561-8bbb-3b4e7e6eb66c", "url": "https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-down.svg" }, { "selector": ".yith-wcan-filters.horizontal:not(.filters-modal) .yith-wcan-filter.filter-placeholder .filter-content.open,.yith-wcan-filters.horizontal:not(.filters-modal) .yith-wcan-filter.filter-placeholder .filter-content.opened", "style": ".yith-wcan-filters.horizontal:not(.filters-modal) .yith-wcan-filter.filter-placeholder .filter-content.open:after,.yith-wcan-filters.horizontal:not(.filters-modal) .yith-wcan-filter.filter-placeholder .filter-content.opened:after{--wpr-bg-b494b7d5-8664-46c1-b6ad-44504bcf1b66: url('https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-up.svg');}", "hash": "b494b7d5-8664-46c1-b6ad-44504bcf1b66", "url": "https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/arrow-up.svg" }, { "selector": ".yith-wcan-active-filters .active-filter .active-filter-label", "style": ".yith-wcan-active-filters .active-filter .active-filter-label:after{--wpr-bg-33dbac97-6961-4354-af57-34b2924a679a: url('https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/close.svg');}", "hash": "33dbac97-6961-4354-af57-34b2924a679a", "url": "https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/close.svg" }, { "selector": ".yith-wcan-filters-opener i.filter-icon", "style": ".yith-wcan-filters-opener i.filter-icon{--wpr-bg-c548b293-75b5-4e41-ba11-249e9a0a0903: url('https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/filters.svg');}", "hash": "c548b293-75b5-4e41-ba11-249e9a0a0903", "url": "https:\/\/vd-group.net\/wp-content\/plugins\/yith-woocommerce-ajax-product-filter-premium\/assets\/images\/filters.svg" }, { "selector": ".fancy-underline", "style": ".fancy-underline:after{--wpr-bg-c228b49e-4d8d-400a-89ed-94d06593d8e5: url('https:\/\/vd-group.net\/wp-content\/themes\/flatsome\/assets\/img\/underline.png');}", "hash": "c228b49e-4d8d-400a-89ed-94d06593d8e5", "url": "https:\/\/vd-group.net\/wp-content\/themes\/flatsome\/assets\/img\/underline.png" }, { "selector": ".slider-style-shadow .flickity-slider>*", "style": ".slider-style-shadow .flickity-slider>:before{--wpr-bg-634e38e8-5dc3-4b7f-b30f-1797a633bb74: url('https:\/\/vd-group.net\/wp-content\/themes\/flatsome\/assets\/img\/shadow@2x.png');}", "hash": "634e38e8-5dc3-4b7f-b30f-1797a633bb74", "url": "https:\/\/vd-group.net\/wp-content\/themes\/flatsome\/assets\/img\/shadow@2x.png" }, { "selector": ".section-title-audio b", "style": ".section-title-audio b{--wpr-bg-c2e5e55b-522d-4435-bb6f-80310d369a8f: url('https:\/\/vd-group.net\/wp-content\/themes\/flatsome-child\/assets\/img\/audio-line-dark.png');}", "hash": "c2e5e55b-522d-4435-bb6f-80310d369a8f", "url": "https:\/\/vd-group.net\/wp-content\/themes\/flatsome-child\/assets\/img\/audio-line-dark.png" }, { "selector": ".dark .section-title-audio b", "style": ".dark .section-title-audio b{--wpr-bg-b6dc93e6-d84e-4f74-aea3-6e3d80e59f94: url('https:\/\/vd-group.net\/wp-content\/themes\/flatsome-child\/assets\/img\/audio-line-light.png');}", "hash": "b6dc93e6-d84e-4f74-aea3-6e3d80e59f94", "url": "https:\/\/vd-group.net\/wp-content\/themes\/flatsome-child\/assets\/img\/audio-line-light.png" }, { "selector": ".page-template-page-no-header .header.has-sticky.sticky-jump .logo a", "style": ".page-template-page-no-header .header.has-sticky.sticky-jump .logo a{--wpr-bg-10ff4940-d86c-47d6-88a0-d9a76373d817: url('https:\/\/vd-group.net\/wp-content\/themes\/images\/logo.png');}", "hash": "10ff4940-d86c-47d6-88a0-d9a76373d817", "url": "https:\/\/vd-group.net\/wp-content\/themes\/images\/logo.png" }, { "selector": ".border-img-1", "style": ".border-img-1:before{--wpr-bg-5cb36d58-160b-47b6-b89a-166c985c0138: url('https:\/\/vd-group.net\/wp-content\/themes\/flatsome-child\/assets\/img\/border-img-1.png');}", "hash": "5cb36d58-160b-47b6-b89a-166c985c0138", "url": "https:\/\/vd-group.net\/wp-content\/themes\/flatsome-child\/assets\/img\/border-img-1.png" }, { "selector": ".border-img-2", "style": ".border-img-2:before{--wpr-bg-9232316c-edda-4f62-9083-f8c94b0ba4f7: url('https:\/\/vd-group.net\/wp-content\/themes\/flatsome-child\/assets\/img\/border-img-2.png');}", "hash": "9232316c-edda-4f62-9083-f8c94b0ba4f7", "url": "https:\/\/vd-group.net\/wp-content\/themes\/flatsome-child\/assets\/img\/border-img-2.png" }, { "selector": ".border-img-3", "style": ".border-img-3:before{--wpr-bg-59422c62-e994-46f0-b178-98a2b4daa857: url('https:\/\/vd-group.net\/wp-content\/themes\/flatsome-child\/assets\/img\/border-img-3.png');}", "hash": "59422c62-e994-46f0-b178-98a2b4daa857", "url": "https:\/\/vd-group.net\/wp-content\/themes\/flatsome-child\/assets\/img\/border-img-3.png" }, { "selector": ".border-img-4", "style": ".border-img-4:before{--wpr-bg-dcc15bb0-54a6-4e9d-994d-727328becd7c: url('https:\/\/vd-group.net\/wp-content\/themes\/flatsome-child\/assets\/img\/border-img-4.png');}", "hash": "dcc15bb0-54a6-4e9d-994d-727328becd7c", "url": "https:\/\/vd-group.net\/wp-content\/themes\/flatsome-child\/assets\/img\/border-img-4.png" }, { "selector": ".border-img-5", "style": ".border-img-5:before{--wpr-bg-40bea759-8d22-4114-934a-d71489cb5455: url('https:\/\/vd-group.net\/wp-content\/themes\/flatsome-child\/assets\/img\/border-img-5.png');}", "hash": "40bea759-8d22-4114-934a-d71489cb5455", "url": "https:\/\/vd-group.net\/wp-content\/themes\/flatsome-child\/assets\/img\/border-img-5.png" }, { "selector": ".yith-wcan-filters .yith-wcan-filter .filter-items .filter-item.text.active>a", "style": ".yith-wcan-filters .yith-wcan-filter .filter-items .filter-item.text.active>a:after{--wpr-bg-d2753a4a-fac7-47ef-83cf-f25862e23076: url('https:\/\/vd-group.net\/wp-content\/themes\/flatsome-child\/assets\/img\/close.svg');}", "hash": "d2753a4a-fac7-47ef-83cf-f25862e23076", "url": "https:\/\/vd-group.net\/wp-content\/themes\/flatsome-child\/assets\/img\/close.svg" }]; const rocket_excluded_pairs = [];

/* ---- extracted script block ---- */

(function(){var el=document.getElementById("ak_js_1");if(el)el.setAttribute("value",(new Date()).getTime());})();

/* ---- extracted script block ---- */

(function(){var el=document.getElementById("ak_js_2");if(el)el.setAttribute("value",(new Date()).getTime());})();

/* ---- extracted script block ---- */

(function(){var el=document.getElementById("ak_js_3");if(el)el.setAttribute("value",(new Date()).getTime());})();

/* ---- extracted script block ---- */

window.addEventListener('DOMContentLoaded', function() {
        (function($){
            $(document).ready(function(){
                $(window).on('load', function(){
                    if($('.single-product div#tab-description').length > 0){
                        var wrap = $('.single-product div#tab-description');
                        var current_height = wrap.height();
                        var your_height = 500;
                        if(current_height > your_height){
                            wrap.css('height', your_height+'px');
                            wrap.append(function(){
                                return '<div class="devvn_readmore_flatsome devvn_readmore_flatsome_more"><a class="button is-outline primary-color" title="Read More" href="javascript:void(0);">Xem thêm</a></div>';
                            });
                            wrap.append(function(){
                                return '<div class="devvn_readmore_flatsome devvn_readmore_flatsome_less" style="display: none;"><a class="button is-outline primary-color" title="Show Less" href="javascript:void(0);">Ẩn bớt</a></div>';
                            });
                            $('body').on('click','.devvn_readmore_flatsome_more', function(){
                                wrap.removeAttr('style');
                                $('body .devvn_readmore_flatsome_more').hide();
                                $('body .devvn_readmore_flatsome_less').show();
                            });
                            $('body').on('click','.devvn_readmore_flatsome_less', function(){
                                wrap.css('height', your_height+'px');
                                $('body .devvn_readmore_flatsome_less').hide();
                                $('body .devvn_readmore_flatsome_more').show();
                            });
                        }
                    }
                });
            });
        })(jQuery);
    });

/* ---- extracted script block ---- */


  function onClick(e) {
    e.preventDefault();
    grecaptcha.enterprise.ready(async () => {
      const token = await grecaptcha.enterprise.execute('6Lc4rK4rAAAAAFjljFlXPSJuQnkoBnSqTJR0atdt', {action: 'LOGIN'});
    });
  }


/* ---- extracted script block ---- */


/* <![CDATA[ */
(()=>{async function handleCredentialResponse(response){response.integration='woocommerce';try{const res=await fetch('wp-login.php?action=googlesitekit_auth',{method:'POST',headers:{'Content-Type':'application/x-www-form-urlencoded'},body:new URLSearchParams(response)});/* Preserve comment text in case of redirect after login on a page with a Sign in with Google button in the WordPress comments. */ const commentText=document.querySelector('#comment')?.value;const postId=document.querySelectorAll('.googlesitekit-sign-in-with-google__comments-form-button')?.[0]?.className?.match(/googlesitekit-sign-in-with-google__comments-form-button-postid-(\d+)/)?.[1];if(!! commentText?.length){sessionStorage.setItem(`siwg-comment-text-${postId}`,commentText);}if(res.ok && res.redirected){location.assign(res.url);}}catch(error){console.error(error);}}if(typeof google !=='undefined'){google.accounts.id.initialize({client_id:'891008005254-hcmicq092pb3ulg7nv7n2uedbf4onch8.apps.googleusercontent.com',callback:handleCredentialResponse,library_name:'Site-Kit'});}const defaultButtonOptions={"theme":"outline","text":"signin_with","shape":"rectangular"};document.querySelectorAll('.googlesitekit-sign-in-with-google__frontend-output-button').forEach((siwgButtonDiv)=>{const buttonOptions={shape:siwgButtonDiv.getAttribute('data-googlesitekit-siwg-shape')|| defaultButtonOptions.shape,text:siwgButtonDiv.getAttribute('data-googlesitekit-siwg-text')|| defaultButtonOptions.text,theme:siwgButtonDiv.getAttribute('data-googlesitekit-siwg-theme')|| defaultButtonOptions.theme,};if(typeof google !=='undefined'){google.accounts.id.renderButton(siwgButtonDiv,buttonOptions);}});/* If there is a matching saved comment text in sessionStorage,restore it to the comment field and remove it from sessionStorage. */ const postId=document.body.className.match(/postid-(\d+)/)?.[1];const commentField=document.querySelector('#comment');const commentText=sessionStorage.getItem(`siwg-comment-text-${postId}`);if(commentText?.length && commentField && !! postId){commentField.value=commentText;sessionStorage.removeItem(`siwg-comment-text-${postId}`);}})();
/* ]]> */


/* ---- extracted script block ---- */


		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	

/* ---- extracted script block ---- */


		/* <![CDATA[ */
		var wc_add_to_cart_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "Xem gi\u1ecf h\u00e0ng", "cart_url": "https:\/\/vd-group.net\/cart\/", "is_cart": "", "cart_redirect_after_add": "no" };
		/* ]]> */
	

/* ---- extracted script block ---- */


		/* <![CDATA[ */
		var woocommerce_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "i18n_password_show": "Hi\u1ec3n th\u1ecb m\u1eadt kh\u1ea9u", "i18n_password_hide": "\u1ea8n m\u1eadt kh\u1ea9u" };
		/* ]]> */
	

/* ---- extracted script block ---- */


		/* <![CDATA[ */
		var wc_store_catalog_pdf_download_local = { "ajaxurl": "https:\/\/vd-group.net\/wp-admin\/admin-ajax.php", "ajaxPDFDownloadNonce": "16705a41b0" };
		/* ]]> */
	

/* ---- extracted script block ---- */


/* <![CDATA[ */
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
/* ]]> */


/* ---- extracted script block ---- */


		/* <![CDATA[ */
		var RocketPreloadLinksConfig = { "excludeUris": "\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/checkout\/??(.*)|\/cart\/?|\/tai-khoan\/??(.*)|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/", "usesTrailingSlash": "1", "imageExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php", "fileExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm", "siteUrl": "https:\/\/vd-group.net", "onHoverDelay": "100", "rateThrottle": "3" };
		/* ]]> */
	

/* ---- extracted script block ---- */


/* <![CDATA[ */
(function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
/* ]]> */


/* ---- extracted script block ---- */


		/* <![CDATA[ */
		var rocket_lazyload_css_data = { "threshold": "300" };
		/* ]]> */
	

/* ---- extracted script block ---- */


		/* <![CDATA[ */
		!function o(n, c, a) { function u(t, e) { if (!c[t]) { if (!n[t]) { var r = "function" == typeof require && require; if (!e && r) return r(t, !0); if (s) return s(t, !0); throw (e = new Error("Cannot find module '" + t + "'")).code = "MODULE_NOT_FOUND", e } r = c[t] = { exports: {} }, n[t][0].call(r.exports, function (e) { return u(n[t][1][e] || e) }, r, r.exports, o, n, c, a) } return c[t].exports } for (var s = "function" == typeof require && require, e = 0; e < a.length; e++)u(a[e]); return u }({ 1: [function (e, t, r) { "use strict"; { const c = "undefined" == typeof rocket_pairs ? [] : rocket_pairs, a = (("undefined" == typeof rocket_excluded_pairs ? [] : rocket_excluded_pairs).map(t => { var e = t.selector; document.querySelectorAll(e).forEach(e => { e.setAttribute("data-rocket-lazy-bg-" + t.hash, "excluded") }) }), document.querySelector("#wpr-lazyload-bg-container") || (function(){var d=document.createElement("div");d.id="wpr-lazyload-bg-container";document.body&&document.body.appendChild(d);return d;})()); var o = rocket_lazyload_css_data.threshold || 300; const u = new IntersectionObserver(e => { e.forEach(t => { t.isIntersecting && c.filter(e => t.target.matches(e.selector)).map(t => { var e; t && ((e = document.createElement("style")).textContent = t.style, a.insertAdjacentElement("afterend", e), t.elements.forEach(e => { u.unobserve(e), e.setAttribute("data-rocket-lazy-bg-" + t.hash, "loaded") })) }) }) }, { rootMargin: o + "px" }); function n() { 0 < (0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : []).length && c.forEach(t => { try { document.querySelectorAll(t.selector).forEach(e => { "loaded" !== e.getAttribute("data-rocket-lazy-bg-" + t.hash) && "excluded" !== e.getAttribute("data-rocket-lazy-bg-" + t.hash) && (u.observe(e), (t.elements ||= []).push(e)) }) } catch (e) { console.error(e) } }) } n(), function () { const r = window.MutationObserver; return function (e, t) { if (e && 1 === e.nodeType) return (t = new r(t)).observe(e, { attributes: !0, childList: !0, subtree: !0 }), t } }()(document.querySelector("body"), n) } }, {}] }, {}, [1]);
		/* ]]> */
	

/* ---- extracted script block ---- */


		/* <![CDATA[ */
		var woosb_vars = { "wc_price_decimals": "0", "wc_price_format": "%2$s%1$s", "wc_price_thousand_separator": ",", "wc_price_decimal_separator": ".", "wc_currency_symbol": "\u20ab", "price_decimals": "0", "price_format": "%2$s%1$s", "price_thousand_separator": ",", "price_decimal_separator": ".", "currency_symbol": "\u20ab", "trim_zeros": "", "round_price": "1", "recalc_price": "", "change_image": "yes", "bundled_price": "price", "bundled_price_from": "sale_price", "change_price": "yes", "price_selector": ".summary > .price", "saved_text": "(saved [d])", "price_text": "Gi\u00e1 g\u00f3i s\u1ea3n ph\u1ea9m:", "selected_text": "Selected:", "alert_selection": "Please select a purchasable variation for [name] before adding this bundle to the cart.", "alert_unpurchasable": "Product [name] is unpurchasable. Please remove it before adding the bundle to the cart.", "alert_empty": "Please choose at least one product before adding this bundle to the cart.", "alert_min": "Please choose at least a total quantity of [min] products before adding this bundle to the cart.", "alert_max": "Sorry, you can only choose at max a total quantity of [max] products before adding this bundle to the cart.", "alert_total_min": "The total must meet the minimum amount of [min].", "alert_total_max": "The total must meet the maximum amount of [max]." };
		/* ]]> */
	

/* ---- extracted script block ---- */


		/* <![CDATA[ */
		/* flatsomeVars defined in layout */
		/* ]]> */
	

/* ---- extracted script block ---- */


		/* <![CDATA[ */
		var wc_order_attribution = { "params": { "lifetime": 1.0e-5, "session": 30, "base64": false, "ajaxurl": "https:\/\/vd-group.net\/wp-admin\/admin-ajax.php", "prefix": "wc_order_attribution_", "allowTracking": true }, "fields": { "source_type": "current.typ", "referrer": "current_add.rf", "utm_campaign": "current.cmp", "utm_source": "current.src", "utm_medium": "current.mdm", "utm_content": "current.cnt", "utm_id": "current.id", "utm_term": "current.trm", "utm_source_platform": "current.plt", "utm_creative_format": "current.fmt", "utm_marketing_tactic": "current.tct", "session_entry": "current_add.ep", "session_start_time": "current_add.fd", "session_pages": "session.pgs", "session_count": "udata.vst", "user_agent": "udata.uag" } };
		/* ]]> */
	

/* ---- extracted script block ---- */


/* <![CDATA[ */
window._googlesitekit.wcdata = window._googlesitekit.wcdata || {};
window._googlesitekit.wcdata.products = [];
window._googlesitekit.wcdata.add_to_cart = null;
window._googlesitekit.wcdata.currency = "VND";
window._googlesitekit.wcdata.eventsToTrack = ["add_to_cart","purchase"];
/* ]]> */


/* ---- extracted script block ---- */


		/* <![CDATA[ */
		var wc_cart_fragments_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "cart_hash_key": "wc_cart_hash_b02da388188f5ffc6c4e7d888d8e8f20", "fragment_name": "wc_fragments_b02da388188f5ffc6c4e7d888d8e8f20", "request_timeout": "5000" };
		/* ]]> */
	

/* ---- extracted script block ---- */


/* <![CDATA[ */
(window.wp&&wp.i18n&&wp.i18n.setLocaleData)&&wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
/* ]]> */


/* ---- extracted script block ---- */


/* <![CDATA[ */
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	(window.wp&&wp.i18n&&wp.i18n.setLocaleData)&&wp.i18n.setLocaleData( localeData, domain );
} )( "contact-form-7", {"translation-revision-date":"2024-08-11 13:44:17+0000","generator":"GlotPress\/4.0.3","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=1; plural=0;","lang":"vi_VN"},"This contact form is placed in the wrong place.":["Bi\u1ec3u m\u1eabu li\u00ean h\u1ec7 n\u00e0y \u0111\u01b0\u1ee3c \u0111\u1eb7t sai v\u1ecb tr\u00ed."],"Error:":["L\u1ed7i:"]}},"comment":{"reference":"includes\/js\/index.js"}} );
/* ]]> */


/* ---- extracted script block ---- */


/* <![CDATA[ */
var wpcf7 = {
    "api": {
        "root": "https:\/\/vd-group.net\/wp-json\/",
        "namespace": "contact-form-7\/v1"
    },
    "cached": 1
};
/* ]]> */


/* ---- extracted script block ---- */


          var dFlipLocation = 'wp-content/plugins/3d-flipbook-dflip-lite/assets/';
          var dFlipWPGlobal = {"text":{"toggleSound":"Turn on\/off Sound","toggleThumbnails":"Toggle Thumbnails","toggleOutline":"Toggle Outline\/Bookmark","previousPage":"Previous Page","nextPage":"Next Page","toggleFullscreen":"Toggle Fullscreen","zoomIn":"Zoom In","zoomOut":"Zoom Out","toggleHelp":"Toggle Help","singlePageMode":"Single Page Mode","doublePageMode":"Double Page Mode","downloadPDFFile":"Download PDF File","gotoFirstPage":"Goto First Page","gotoLastPage":"Goto Last Page","share":"Share","mailSubject":"I wanted you to see this FlipBook","mailBody":"Check out this site {{url}}","loading":"DearFlip: Loading "},"viewerType":"flipbook","moreControls":"download,pageMode,startPage,endPage,sound","hideControls":"","scrollWheel":"false","backgroundColor":"#777","backgroundImage":"","height":"auto","paddingLeft":"20","paddingRight":"20","controlsPosition":"bottom","duration":800,"soundEnable":"true","enableDownload":"true","showSearchControl":"false","showPrintControl":"false","enableAnnotation":false,"enableAnalytics":"false","webgl":"true","hard":"none","maxTextureSize":"1600","rangeChunkSize":"524288","zoomRatio":1.5,"stiffness":3,"pageMode":"0","singlePageMode":"0","pageSize":"0","autoPlay":"false","autoPlayDuration":5000,"autoPlayStart":"false","linkTarget":"2","sharePrefix":"flipbook-"};
        

/* ---- extracted script block ---- */

window.lazyLoadOptions = [{ elements_selector: "img[data-lazy-src],.rocket-lazyload", data_src: "lazy-src", data_srcset: "lazy-srcset", data_sizes: "lazy-sizes", class_loading: "lazyloading", class_loaded: "lazyloaded", threshold: 300, callback_loaded: function (element) { if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") { if (element.classList.contains("lazyloaded")) { if (typeof window.jQuery != "undefined") { if (jQuery.fn.fitVids) { jQuery(element).parent().fitVids() } } } } } }, { elements_selector: ".rocket-lazyload", data_src: "lazy-src", data_srcset: "lazy-srcset", data_sizes: "lazy-sizes", class_loading: "lazyloading", class_loaded: "lazyloaded", threshold: 300, }]; window.addEventListener('LazyLoad::Initialized', function (e) {
			var lazyLoadInstance = e.detail.instance; if (window.MutationObserver) {
				var observer = new MutationObserver(function (mutations) {
					var image_count = 0; var iframe_count = 0; var rocketlazy_count = 0; mutations.forEach(function (mutation) {
						for (var i = 0; i < mutation.addedNodes.length; i++) {
							if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') { continue }
							if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') { continue }
							images = mutation.addedNodes[i].getElementsByTagName('img'); is_image = mutation.addedNodes[i].tagName == "IMG"; iframes = mutation.addedNodes[i].getElementsByTagName('iframe'); is_iframe = mutation.addedNodes[i].tagName == "IFRAME"; rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload'); image_count += images.length; iframe_count += iframes.length; rocketlazy_count += rocket_lazy.length; if (is_image) { image_count += 1 }
							if (is_iframe) { iframe_count += 1 }
						}
					}); if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) { lazyLoadInstance.update() }
				}); var b = document.getElementsByTagName("body")[0]; var config = { childList: !0, subtree: !0 }; observer.observe(b, config)
			}
		}, !1)

/* ---- extracted script block ---- */

var rocket_beacon_data = { "ajax_url": "https:\/\/vd-group.net\/wp-admin\/admin-ajax.php", "nonce": "a9f0b391d0", "url": "https:\/\/vd-group.net", "is_mobile": false, "width_threshold": 1600, "height_threshold": 700, "delay": 500, "debug": null, "status": { "atf": true, "lrc": true, "preload_fonts": true, "preconnect_external_domain": true }, "elements": "img, video, picture, p, main, div, li, svg, section, header, span", "lrc_threshold": 1800, "preload_fonts_exclusions": ["api.fontshare.com", "cdn.fontshare.com"], "processed_extensions": ["woff2", "woff", "ttf"], "external_font_exclusions": [], "preconnect_external_domain_elements": ["link", "script", "iframe"], "preconnect_external_domain_exclusions": ["static.cloudflareinsights.com", "rel=\"profile\"", "rel=\"preconnect\"", "rel=\"dns-prefetch\"", "rel=\"icon\""] }