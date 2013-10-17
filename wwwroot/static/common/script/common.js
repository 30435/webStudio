function addHomePage()
{
	if('undefined' == typeof(document.body.style.maxHeight)) {
		alert("设置首页失败，请手动设置！");
	}
	if (document.all) {
		var url= window.location;
		//var obj=$('body').get(0);
		var obj = document.getElementsByTagName("body")[0];
		try{
			obj.style.behavior='url(#default#homepage)';obj.setHomePage(url);
		} catch(e){
			if(window.netscape) {
				try {
					netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
				} catch (e) {
					alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
				}
				var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
				prefs.setCharPref('browser.startup.homepage',vrl);
			 }
		}
	} else {
		alert("设置首页失败，请手动设置！");
	}
}

function addFavorite()
{
	var location = window.location;
    try {
        window.external.addFavorite(location, "诺瓦奇兵-童年神器");
    } catch (e) {
	    try{
	        window.external.addToFavoritesBar(location, "诺瓦奇兵-童年神器", "slice");	 
		} catch(e) {
            try {
                window.sidebar.addPanel("诺瓦奇兵-童年神器", location, "");
            } catch (e) {
                alert("非常抱歉，你的浏览器目前还不支持此功能！请在浏览器的收藏夹或者书签菜单里进行手动添加。")
            }
		}
     }
}

function setNav(index,css)
{
   css = css||'spandown-bar';
   $('.in-bar li').eq(index).find('span').addClass(css);
}