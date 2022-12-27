function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}(function(){var t,e,n,r,o,s,i,u,a,c,l,p,h,f,d,g,y,m,v,w,b,S,k,q,x,L,P,T,R,_,j,E,O,M,A,N,F,C,U,W,X,D,H,I,z,G,B,J,K=[].slice,Q={}.hasOwnProperty,V=function(t,e){function n(){this.constructor=t}for(var r in e)Q.call(e,r)&&(t[r]=e[r]);return n.prototype=e.prototype,t.prototype=new n,t.__super__=e.prototype,t},Y=[].indexOf||function(t){for(var e=0,n=this.length;n>e;e++)if(e in this&&this[e]===t)return e;return-1};for(b={catchupTime:100,initialRate:.03,minTime:250,ghostTime:100,maxProgressPerFrame:20,easeFactor:1.25,startOnPageLoad:!0,restartOnPushState:!0,restartOnRequestAfter:500,target:"body",elements:{checkInterval:100,selectors:["body"]},eventLag:{minSamples:10,sampleCount:3,lagThreshold:3},ajax:{trackMethods:["GET"],trackWebSockets:!0,ignoreURLs:[]}},R=function(){var t;return null!=(t="undefined"!=typeof performance&&null!==performance&&"function"==typeof performance.now?performance.now():void 0)?t:+new Date},j=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||window.msRequestAnimationFrame,w=window.cancelAnimationFrame||window.mozCancelAnimationFrame,null==j&&(j=function(t){return setTimeout(t,50)},w=function(t){return clearTimeout(t)}),O=function(t){var e,n;return e=R(),(n=function(){var r;return(r=R()-e)>=33?(e=R(),t(r,function(){return j(n)})):setTimeout(n,33-r)})()},E=function(){var t,e,n;return n=arguments[0],e=arguments[1],t=3<=arguments.length?K.call(arguments,2):[],"function"==typeof n[e]?n[e].apply(n,t):n[e]},S=function(){var t,e,n,r,o,s,i;for(e=arguments[0],s=0,i=(r=2<=arguments.length?K.call(arguments,1):[]).length;i>s;s++)if(n=r[s])for(t in n)Q.call(n,t)&&(o=n[t],null!=e[t]&&"object"==_typeof(e[t])&&null!=o&&"object"==_typeof(o)?S(e[t],o):e[t]=o);return e},y=function(t){var e,n,r,o,s;for(n=e=0,o=0,s=t.length;s>o;o++)r=t[o],n+=Math.abs(r),e++;return n/e},q=function(t,e){var n,r,o;if(null==t&&(t="options"),null==e&&(e=!0),o=document.querySelector("[data-pace-"+t+"]")){if(n=o.getAttribute("data-pace-"+t),!e)return n;try{return JSON.parse(n)}catch(t){return r=t,"undefined"!=typeof console&&null!==console?console.error("Error parsing inline pace options",r):void 0}}},i=function(){function t(){}return t.prototype.on=function(t,e,n,r){var o;return null==r&&(r=!1),null==this.bindings&&(this.bindings={}),null==(o=this.bindings)[t]&&(o[t]=[]),this.bindings[t].push({handler:e,ctx:n,once:r})},t.prototype.once=function(t,e,n){return this.on(t,e,n,!0)},t.prototype.off=function(t,e){var n,r,o;if(null!=(null!=(r=this.bindings)?r[t]:void 0)){if(null==e)return delete this.bindings[t];for(n=0,o=[];n<this.bindings[t].length;)o.push(this.bindings[t][n].handler===e?this.bindings[t].splice(n,1):n++);return o}},t.prototype.trigger=function(){var t,e,n,r,o,s,i,u,a;if(n=arguments[0],t=2<=arguments.length?K.call(arguments,1):[],null!=(i=this.bindings)?i[n]:void 0){for(o=0,a=[];o<this.bindings[n].length;)r=(u=this.bindings[n][o]).handler,e=u.ctx,s=u.once,r.apply(null!=e?e:this,t),a.push(s?this.bindings[n].splice(o,1):o++);return a}},t}(),c=window.Pace||{},window.Pace=c,S(c,i.prototype),_=c.options=S({},b,window.paceOptions,q()),H=0,z=(B=["ajax","document","eventLag","elements"]).length;z>H;H++)!0===_[F=B[H]]&&(_[F]=b[F]);a=function(t){function e(){return e.__super__.constructor.apply(this,arguments)}return V(e,t),e}(Error),e=function(){function t(){this.progress=0}return t.prototype.getElement=function(){var t;if(null==this.el){if(!(t=document.querySelector(_.target)))throw new a;this.el=document.createElement("div"),this.el.className="pace pace-active",document.body.className=document.body.className.replace(/pace-done/g,""),document.body.className+=" pace-running",this.el.innerHTML='<div class="pace-progress">\n  <div class="pace-progress-inner"></div>\n</div>\n<div class="pace-activity"></div>',null!=t.firstChild?t.insertBefore(this.el,t.firstChild):t.appendChild(this.el)}return this.el},t.prototype.finish=function(){var t;return(t=this.getElement()).className=t.className.replace("pace-active",""),t.className+=" pace-inactive",document.body.className=document.body.className.replace("pace-running",""),document.body.className+=" pace-done"},t.prototype.update=function(t){return this.progress=t,this.render()},t.prototype.destroy=function(){try{this.getElement().parentNode.removeChild(this.getElement())}catch(t){a=t}return this.el=void 0},t.prototype.render=function(){var t,e,n,r,o,s,i;if(null==document.querySelector(_.target))return!1;for(t=this.getElement(),r="translate3d("+this.progress+"%, 0, 0)",o=0,s=(i=["webkitTransform","msTransform","transform"]).length;s>o;o++)e=i[o],t.children[0].style[e]=r;return(!this.lastRenderedProgress||this.lastRenderedProgress|0!==this.progress|0)&&(t.children[0].setAttribute("data-progress-text",(0|this.progress)+"%"),this.progress>=100?n="99":(n=this.progress<10?"0":"",n+=0|this.progress),t.children[0].setAttribute("data-progress",""+n)),this.lastRenderedProgress=this.progress},t.prototype.done=function(){return this.progress>=100},t}(),u=function(){function t(){this.bindings={}}return t.prototype.trigger=function(t,e){var n,r,o,s,i;if(null!=this.bindings[t]){for(i=[],r=0,o=(s=this.bindings[t]).length;o>r;r++)n=s[r],i.push(n.call(this,e));return i}},t.prototype.on=function(t,e){var n;return null==(n=this.bindings)[t]&&(n[t]=[]),this.bindings[t].push(e)},t}(),D=window.XMLHttpRequest,X=window.XDomainRequest,W=window.WebSocket,k=function(t,e){var n,r;for(n in r=[],e.prototype)try{r.push(null==t[n]&&"function"!=typeof e[n]?"function"==typeof Object.defineProperty?Object.defineProperty(t,n,{get:function(){return e.prototype[n]},configurable:!0,enumerable:!0}):t[n]=e.prototype[n]:void 0)}catch(t){}return r},P=[],c.ignore=function(){var t,e,n;return e=arguments[0],t=2<=arguments.length?K.call(arguments,1):[],P.unshift("ignore"),n=e.apply(null,t),P.shift(),n},c.track=function(){var t,e,n;return e=arguments[0],t=2<=arguments.length?K.call(arguments,1):[],P.unshift("track"),n=e.apply(null,t),P.shift(),n},N=function(t){var e;if(null==t&&(t="GET"),"track"===P[0])return"force";if(!P.length&&_.ajax){if("socket"===t&&_.ajax.trackWebSockets)return!0;if(e=t.toUpperCase(),Y.call(_.ajax.trackMethods,e)>=0)return!0}return!1},l=function(t){function e(){var t,n=this;e.__super__.constructor.apply(this,arguments),t=function(t){var e;return e=t.open,t.open=function(r,o){return N(r)&&n.trigger("request",{type:r,url:o,request:t}),e.apply(t,arguments)}},window.XMLHttpRequest=function(e){var n;return n=new D(e),t(n),n};try{k(window.XMLHttpRequest,D)}catch(t){}if(null!=X){window.XDomainRequest=function(){var e;return e=new X,t(e),e};try{k(window.XDomainRequest,X)}catch(t){}}if(null!=W&&_.ajax.trackWebSockets){window.WebSocket=function(t,e){var r;return r=null!=e?new W(t,e):new W(t),N("socket")&&n.trigger("request",{type:"socket",url:t,protocols:e,request:r}),r};try{k(window.WebSocket,W)}catch(t){}}}return V(e,u),e}(),I=null,A=function(t){var e,n,r,o;for(n=0,r=(o=_.ajax.ignoreURLs).length;r>n;n++)if("string"==typeof(e=o[n])){if(-1!==t.indexOf(e))return!0}else if(e.test(t))return!0;return!1},(x=function(){return null==I&&(I=new l),I})().on("request",function(e){var n,r,o,s,i;return s=e.type,o=e.request,i=e.url,A(i)?void 0:c.running||!1===_.restartOnRequestAfter&&"force"!==N(s)?void 0:(r=arguments,"boolean"==typeof(n=_.restartOnRequestAfter||0)&&(n=0),setTimeout(function(){var e,n,i,u,a;if("socket"===s?o.readyState<2:0<(i=o.readyState)&&4>i){for(c.restart(),a=[],e=0,n=(u=c.sources).length;n>e;e++){if((F=u[e])instanceof t){F.watch.apply(F,r);break}a.push(void 0)}return a}},n))}),t=function(){function t(){var t=this;this.elements=[],x().on("request",function(){return t.watch.apply(t,arguments)})}return t.prototype.watch=function(t){var e,n,r,o;return r=t.type,e=t.request,o=t.url,A(o)?void 0:(n="socket"===r?new f(e):new d(e),this.elements.push(n))},t}(),d=function(t){var e,n,r,o,s,i=this;if(this.progress=0,null!=window.ProgressEvent)for(t.addEventListener("progress",function(t){return i.progress=t.lengthComputable?100*t.loaded/t.total:i.progress+(100-i.progress)/2},!1),n=0,r=(s=["load","abort","timeout","error"]).length;r>n;n++)e=s[n],t.addEventListener(e,function(){return i.progress=100},!1);else o=t.onreadystatechange,t.onreadystatechange=function(){var e;return 0===(e=t.readyState)||4===e?i.progress=100:3===t.readyState&&(i.progress=50),"function"==typeof o?o.apply(null,arguments):void 0}},f=function(t){var e,n,r,o,s=this;for(this.progress=0,n=0,r=(o=["error","open"]).length;r>n;n++)e=o[n],t.addEventListener(e,function(){return s.progress=100},!1)},r=function(t){var e,n,r,s;for(null==t&&(t={}),this.elements=[],null==t.selectors&&(t.selectors=[]),n=0,r=(s=t.selectors).length;r>n;n++)e=s[n],this.elements.push(new o(e))},o=function(){function t(t){this.selector=t,this.progress=0,this.check()}return t.prototype.check=function(){var t=this;return document.querySelector(this.selector)?this.done():setTimeout(function(){return t.check()},_.elements.checkInterval)},t.prototype.done=function(){return this.progress=100},t}(),n=function(){function t(){var t,e,n=this;this.progress=null!=(e=this.states[document.readyState])?e:100,t=document.onreadystatechange,document.onreadystatechange=function(){return null!=n.states[document.readyState]&&(n.progress=n.states[document.readyState]),"function"==typeof t?t.apply(null,arguments):void 0}}return t.prototype.states={loading:0,interactive:50,complete:100},t}(),s=function(){var t,e,n,r,o,s=this;this.progress=0,t=0,o=[],r=0,n=R(),e=setInterval(function(){var i;return i=R()-n-50,n=R(),o.push(i),o.length>_.eventLag.sampleCount&&o.shift(),t=y(o),++r>=_.eventLag.minSamples&&t<_.eventLag.lagThreshold?(s.progress=100,clearInterval(e)):s.progress=3/(t+3)*100},50)},h=function(){function t(t){this.source=t,this.last=this.sinceLastUpdate=0,this.rate=_.initialRate,this.catchup=0,this.progress=this.lastProgress=0,null!=this.source&&(this.progress=E(this.source,"progress"))}return t.prototype.tick=function(t,e){var n;return null==e&&(e=E(this.source,"progress")),e>=100&&(this.done=!0),e===this.last?this.sinceLastUpdate+=t:(this.sinceLastUpdate&&(this.rate=(e-this.last)/this.sinceLastUpdate),this.catchup=(e-this.progress)/_.catchupTime,this.sinceLastUpdate=0,this.last=e),e>this.progress&&(this.progress+=this.catchup*t),n=1-Math.pow(this.progress/100,_.easeFactor),this.progress+=n*this.rate*t,this.progress=Math.min(this.lastProgress+_.maxProgressPerFrame,this.progress),this.progress=Math.max(0,this.progress),this.progress=Math.min(100,this.progress),this.lastProgress=this.progress,this.progress},t}(),C=null,M=null,m=null,U=null,g=null,v=null,c.running=!1,L=function(){return _.restartOnPushState?c.restart():void 0},null!=window.history.pushState&&(G=window.history.pushState,window.history.pushState=function(){return L(),G.apply(window.history,arguments)}),null!=window.history.replaceState&&(J=window.history.replaceState,window.history.replaceState=function(){return L(),J.apply(window.history,arguments)}),p={ajax:t,elements:r,document:n,eventLag:s},(T=function(){var t,n,r,o,s,i,u,a;for(c.sources=C=[],n=0,o=(i=["ajax","elements","document","eventLag"]).length;o>n;n++)!1!==_[t=i[n]]&&C.push(new p[t](_[t]));for(r=0,s=(a=null!=(u=_.extraSources)?u:[]).length;s>r;r++)F=a[r],C.push(new F(_));return c.bar=m=new e,M=[],U=new h})(),c.stop=function(){return c.trigger("stop"),c.running=!1,m.destroy(),v=!0,null!=g&&("function"==typeof w&&w(g),g=null),T()},c.restart=function(){return c.trigger("restart"),c.stop(),c.start()},c.go=function(){var t;return c.running=!0,m.render(),t=R(),v=!1,g=O(function(e,n){var r,o,s,i,u,a,l,p,f,d,g,y,w,b,S;for(m.progress,o=d=0,s=!0,a=g=0,w=C.length;w>g;a=++g)for(F=C[a],f=null!=M[a]?M[a]:M[a]=[],l=y=0,b=(u=null!=(S=F.elements)?S:[F]).length;b>y;l=++y)i=u[l],s&=(p=null!=f[l]?f[l]:f[l]=new h(i)).done,p.done||(o++,d+=p.tick(e));return r=d/o,m.update(U.tick(e,r)),m.done()||s||v?(m.update(100),c.trigger("done"),setTimeout(function(){return m.finish(),c.running=!1,c.trigger("hide")},Math.max(_.ghostTime,Math.max(_.minTime-(R()-t),0)))):n()})},c.start=function(t){S(_,t),c.running=!0;try{m.render()}catch(t){a=t}return document.querySelector(".pace")?(c.trigger("start"),c.go()):setTimeout(c.start,50)},"function"==typeof define&&define.amd?define(["pace"],function(){return c}):"object"==("undefined"==typeof exports?"undefined":_typeof(exports))?module.exports=c:_.startOnPageLoad&&c.start()}).call(this);