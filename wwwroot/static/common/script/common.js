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
	if('undefined' == typeof(document.body.style.maxHeight)){
		alert('添加收藏夹失败，请手动添加');
	}
	var location = window.location;
	var ctrl = (navigator.userAgent.toLowerCase()).indexOf('mac') != -1 ? 'Command/Cmd': 'CTRL';
	if (document.all) {		
		window.external.addFavorite(location, '诺瓦奇兵');			
	} else if (window.sidebar) {
		window.sidebar.addPanel('诺瓦奇兵',location, "");
	} else {
		alert('您可以尝试通过快捷键' + ctrl + ' + D 加入到收藏夹~');
	}
}

function setNav(index,css)
{
   css = css||'spandown-bar';
   $('.in-bar li').eq(index).find('span').addClass(css);
}