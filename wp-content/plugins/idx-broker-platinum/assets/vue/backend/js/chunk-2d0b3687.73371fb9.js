(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d0b3687"],{"27f2":function(e,t,n){"use strict";n.r(t);var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div")},a=[],u=(n("96cf"),n("1da1")),o=n("5530"),c=n("12e8"),s=n("2f62"),i=c["a"].general.repo,p={name:"redirect-page",inject:[i],computed:Object(o["a"])({},Object(s["d"])({apiKey:function(e){return e.general.apiKey},loadContent:function(e){return e.alerts.loadContent}})),watch:{loadContent:function(e){e&&(this.apiKey?this.$router.push({path:"/settings/general"}):this.$router.push({path:"/guided-setup/welcome"}))}},mounted:function(){var e=this;return Object(u["a"])(regeneratorRuntime.mark((function t(){var n,r,a;return regeneratorRuntime.wrap((function(t){while(1)switch(t.prev=t.next){case 0:return e.module="general",t.prev=1,t.next=4,e[i].get();case 4:for(a in n=t.sent,r=n.data,r)e.$store.dispatch("".concat(e.module,"/setItem"),{key:a,value:r[a]});t.next=12;break;case 9:t.prev=9,t.t0=t["catch"](1),console.error(t.t0);case 12:e.loadContent&&(e.apiKey?e.$router.push({path:"/settings/general"}):e.$router.push({path:"/guided-setup/welcome"}));case 13:case"end":return t.stop()}}),t,null,[[1,9]])})))()}},l=p,d=n("2877"),h=Object(d["a"])(l,r,a,!1,null,null,null);t["default"]=h.exports}}]);
//# sourceMappingURL=chunk-2d0b3687.73371fb9.js.map