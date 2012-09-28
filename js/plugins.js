// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; args.callee = args.callee.caller; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};

// make it safe to use console.log always
(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());

// fullscreen plugin - @thomasgaillard
(function(a){a.fn.fullScreen=function(){var b=a("#enter-fullscreen");var c=a("#exit-fullscreen");var d=document.documentElement;if(b&&(d.requestFullscreen||d.mozRequestFullScreen||d.webkitRequestFullScreen))b.css("display","block");if(b){b.click(function(){if(d.requestFullscreen)d.requestFullscreen();else if(d.mozRequestFullScreen)d.mozRequestFullScreen();else if(d.webkitRequestFullScreen)d.webkitRequestFullScreen()})}if(c){c.click(function(){if(document.exitFullscreen)document.exitFullscreen();else if(document.mozCancelFullScreen)document.mozCancelFullScreen();else if(document.webkitCancelFullScreen)document.webkitCancelFullScreen()})}document.addEventListener("fullscreenchange",function(){if(document.fullscreen){b.css("display","none");c.css("display","block")}else{b.css("display","block");c.css("display","none")}},false);document.addEventListener("mozfullscreenchange",function(){if(document.mozFullScreen){b.css("display","none");c.css("display","block")}else{b.css("display","block");c.css("display","none")}},false);document.addEventListener("webkitfullscreenchange",function(){if(document.webkitIsFullScreen){b.css("display","none");c.css("display","block")}else{b.css("display","block");c.css("display","none")}},false);return this}})(jQuery)