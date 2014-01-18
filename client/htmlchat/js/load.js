var desktopHtml = '<div class="topcmm-123flashchat-common-main-div topcmm-123flashchat-common-global-font-div"><div class="topcmm-123flashchat-common-main-div-outline"><div class="topcmm-123flashchat-common-main-div-interior" id="topcmm-123flashchat-common-main-div-interior"><div class="topcmm-123flashchat-loading-container" id="topcmm-123flashchat-loading-container" style="display:none;"><div class="topcmm-123flashchat-loading-center-block" align="center"><div class="topcmm-123flashchat-loading-background"><div class="topcmm-123flashchat-loading-loading-logo"><img id="topcmm-123flashchat-loading-loading-img-url"></div><div class="topcmm-123flashchat-loading-loading-img-text">Version 9.7</div><div class="topcmm-123flashchat-loading-loading-img" id="topcmm-123flashchat-loading-loading-img"><img src="img/common/topcmm-123flashchat-loading-img.gif"/></div><div class="topcmm-123flashchat-loading-loading-text"><span class="topcmm-123flashchat-loading-loading-text-loading" id="topcmm-123flashchat-loading-loading-text-loading">Loading ...</span></div></div></div></div></div></div></div><div id="div_flashchat" style="position: absolute; right: 0px; bottom: 0px;"></div>';
var mobileHtml = '<div id="topcmm-123flashchat-common-main-div-body" style="position: absolute;"><div id="topcmm-123flashchat-common-main-div-interior" class="topcmm-123flashchat-common-main-div-container"><div id="topcmm-123flashchat-loading-container" class="topcmm-123flashchat-welcome-page topcmm-123flashchat-min-height"><div class="topcmm-123flashchat-welcome-logo-area"><div class="topcmm-123flashchat-welcome-logo-area-interior"><div class="topcmm-123flashchat-welcome-logo-area-interior-table"><div class="topcmm-123flashchat-welcome-logo"></div></div></div></div><div class="topcmm-123flashchat-welcome-area" id="topcmm-123flashchat-welcome-area"><div class="topcmm-123flashchat-welcome-text-area"><span></span></div><div class="topcmm-123flashchat-welcome-powered-by"><span>Powered by TOPCMM</span></div></div><div class="topcmm-123flashchat-welcome-light-background"></div></div></div></div><div id="topcmm-123flashchat-mask-double-loading" class="ui-loader ui-corner-all ui-body-a ui-loader-default"><span class="ui-icon ui-icon-loading"></span></div><div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: -100px; opacity: 0.6; background-color: rgb(0, 0, 0); z-index: 340; display: none;" id="topcmm-123flashchat-mask-model"></div><div style="position: absolute; left: 0px; top: 42px; right: 0px; opacity: 0.8; background-color: rgb(0, 0, 0); z-index: 3400; height: 40px; display: none;" id="topcmm-123flashchat-private-tip-model"><span id="topcmm-123flashchat-private-chat-tip-message" style="color: #FFFFFF; " class="topcmm-123flashchat-private-chat-tip"></span></div>';
var loadHtml;
var isForMobile = false;

var TopcmmUtil =
{
    includeCss : function(sCSSFileName)
    {
        this.includeCssWithId(sCSSFileName, "");
    },

    includeCssWithId : function(sCSSFileName, id)
    {
        var sobj = document.createElement('link');
        sobj.rel = "stylesheet";
        sobj.type = "text/css";
        if ("" != id)
        {
            sobj.id = id;
        }
        sobj.href = sCSSFileName;
        var headobj = document.getElementsByTagName('head')[0];
        headobj.appendChild(sobj);
    },

    includeAppleTouchIcon : function(iconFileName, size)
    {
        var sobj = document.createElement('link');
        sobj.rel = "apple-touch-icon";

        if ("" != size)
        {
            sobj.setAttribute("sizes", size)
        }
        sobj.href = iconFileName;
        var headobj = document.getElementsByTagName('head')[0];
        headobj.appendChild(sobj);
    },

    includeMobileMetaTag : function(name, content)
    {
        var sobj = document.createElement("meta");
        sobj.name = name;
        sobj.content = content;
        var headobj = document.getElementsByTagName('head')[0];
        headobj.appendChild(sobj);
    }
};

var TopcmmIncludeJs =
{
    jslist : "",
    sobj : "",
    functioname : "",
    isCallBack : false,

    includeJs : function(jslist)
    {
        if (jslist.length > 0)
        {
            TopcmmIncludeJs.setJsList(jslist);
            TopcmmIncludeJs.includeWriteJs();
        }
    },

    includeWriteJs : function()
    {
        TopcmmIncludeJs.sobj = document.createElement('script');
        TopcmmIncludeJs.sobj.type = "text/javascript";
        TopcmmIncludeJs.sobj.src = TopcmmIncludeJs.jslist[TopcmmIncludeJs.jslist.length - 1];
        var headobj = document.getElementsByTagName('head')[0];
        headobj.appendChild(TopcmmIncludeJs.sobj);
        TopcmmIncludeJs.sobj.onreadystatechange = TopcmmIncludeJs.ready;
        TopcmmIncludeJs.sobj.onerror = TopcmmIncludeJs.sobj.onload = TopcmmIncludeJs.callback;
    },

    ready : function()
    {
        if (TopcmmIncludeJs.sobj.readyState == 'loaded'
                || TopcmmIncludeJs.sobj.readyState == 'complete')
        {
            TopcmmIncludeJs.callback();
        }
    },

    callback : function()
    {
        TopcmmIncludeJs.jslist.pop();

        if (TopcmmIncludeJs.jslist.length > 0)
        {
            TopcmmIncludeJs.includeWriteJs(TopcmmIncludeJs.jslist);
        }
        else
        {
            if (TopcmmIncludeJs.functioname != null
                    && TopcmmIncludeJs.isCallBack == false)
            {
                TopcmmIncludeJs.isCallBack = true;
                eval(TopcmmIncludeJs.functioname + "()");
            }
        }
    },

    setJsList : function(jslist)
    {
        TopcmmIncludeJs.jslist = jslist.reverse();
    },

    setFunctionName : function(functioname)
    {
        TopcmmIncludeJs.functioname = functioname;
    }
};

var userAgent = navigator.userAgent.toLowerCase();
var url = location.href;
var paraString = "";

if (url.indexOf("?") != -1)
{
    paraString = url.substring(url.indexOf("?"), url.length);
}

if (null != navigator.userAgent
        .match(/(iPad)|(iPhone)|(iPod)|(android)|(BlackBerry)|(webOS)/i))
{
    isForMobile = true;
    loadForMobile();
}
else
{
    loadForDesktop();
}


function loadForMobile()
{
    window.onload = function()
    {
        onLoadForMobile();
    }
    loadHtml = mobileHtml;
    document.title = "123FlashChat";
    TopcmmUtil.includeCss("mobile/css/common/topcmm-123flashchat-common.css");
    TopcmmUtil.includeCss("mobile/css/layout/topcmm-123flashchat-layout.css");
    TopcmmUtil.includeAppleTouchIcon("mobile/img/57.png", "");
    TopcmmUtil.includeAppleTouchIcon("mobile/img/114.png", "114x114");
    TopcmmUtil.includeAppleTouchIcon("mobile/img/72.png", "72x72");
    TopcmmUtil.includeMobileMetaTag("viewport", "width=device-width, initial-scale=1.0; maximum-scale=1.0; user-scalable=0;");
    TopcmmUtil.includeMobileMetaTag("apple-mobile-web-app-capable", "yes");
    TopcmmIncludeJs.includeJs([ "mobile/js/iscroll.js" ]);
}

function loadForDesktop()
{
    loadHtml = desktopHtml;
    TopcmmUtil.includeCss("css/common/topcmm-123flashchat-common.css");
    TopcmmUtil.includeCss("css/layout/topcmm-123flashchat-layout.css");
    TopcmmUtil.includeCssWithId("css/skin/default/topcmm-123flashchat-skin-default.css", "layout-color");
    TopcmmIncludeJs.setFunctionName("loadForDesktopAfterJsInvoked");
    TopcmmIncludeJs.includeJs([ "js/swfobject.js" ]);
}

function onLoadForMobile()
{
    setTimeout(function()
    {
        window.scrollTo(0, 1)
    }, 1000);
}

function loadForDesktopAfterJsInvoked()
{
    var flashvars = {};
    var params = {};
    var attributes =
    {
        id : "topcmm_flashchat",
        name : "topcmm_flashchat",
        allowScriptAccess : "always",
        bgColor : "ffcc00",
        align : "middle"
    };

    swfobject.embedSWF("interop.swf", "div_flashchat", "1", "1", "9.0.0",
            "expressInstall.swf", flashvars, params, attributes);
}
