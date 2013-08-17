/**
 * 4399WEB 通用登录模块
 * @author  YJC @ web.4399.com
 * @since  2012-08-16
 */
var USER, user_action = (function(W, D, $){ // 登录模块
  var lived = false, // 是否已绑定全局元素事件
    keys = [], // user: [key, verification_code_status]
    keys_time = [], // 验证码/加密信息存入时间
    keys_timeout = 900000, // keys有效期
    checking = '', // 标记当前正在请求密钥的用户名
    recorded = false, // 标记是否已经访问 record log
    index = 0, // 标记当前使用哪一个登录模块
    code_104 = false, // 标记上次登录是否得到104错误代码
    modules = []; // 登录模块引用
  var from_www = (D.referrer && ( ! /\/ddt\//.test(location.href)) &&
    (
      D.referrer.indexOf('http://www.4399.com/')===0 ||
      D.referrer.indexOf('http://so2.4399.com/')===0 ||
      D.referrer.indexOf('http://web.4399.com/4399login/')===0 ||
      D.referrer.indexOf('http://huodong.4399.com/')===0
    )
  );

  function get_game_name(){
    var  _s = W.location.href.replace("http://",'').toLowerCase();
    var  _1 = _s.split('/');
    var  _2 = _s.split('.');
    if (_2[0] == 'web') {
      var  _r = _s.substr(_s.indexOf('?')).match(/\b(game|game_src)=([^&]+)/);
      if (_r) return _r[2];
      else if (_1[1].indexOf('.') == -1) return _1[1];
      else return '';
    }
    else return _2[0];
  }

  var from_se = (get_game_name() && !/\/(hd|other)\//.test(location.href) && D.referrer &&
    (
      D.referrer.indexOf('http://www.baidu.com/')===0 ||
      D.referrer.indexOf('http://www.sogou.com/')===0 ||
      D.referrer.indexOf('http://www.google.com/')===0 ||
      D.referrer.indexOf('http://so.360.cn/')===0
    )
  );

  var cid = /\bcid=(\d+)/.exec(location.search);
  cid = cid ? parseInt(cid[1]) : '';

  var other_login_sites = {
    qq: {dir:'qzone',name:'TencentLogin',type:'qq_login',title:'QQ号'},
    weibo: {dir:'weibo',name:'WeiboLogin',type:'weibo_login',title:'新浪微博'},
    taobao: {dir:'taobao',name:'TaobaoLogin',type:'taobao_login',title:'淘宝'},
    _default:'qq'
  }, _last_login_tip = null;

  var _evt = {};
  function event_emit(type){
    if (_evt[type]) {
      for (var i = 0, l = _evt[type].length; i < l; i++) {
        _evt[type][i].apply(null, Array.prototype.slice.call(arguments, 1));
      }
    }
  }
  function event_on(type, fn){
    if (typeof fn !== 'function') {
      return;
    }
    if ( ! _evt[type]) {
      _evt[type] = [];
    }
    _evt[type].push(fn);
  }

  var util = {
    from_www: function(){ return from_www; },
    from_se: function(){ return from_se; },
    unique_id: (function(){
      var  i = 0;
      return function(){
        var  id = "ID-U-" + (i++);
        if (D.getElementById(id)) return arguments.callee();
        return id;
      };
    })(),
    cookie: function(name, value, ttl, path, domain){
      // 获取cookie
      if (arguments.length == 1) {
        try {
          var  a = (new RegExp('\\b'+name+'=([^;]*);?', 'i')).exec(D.cookie.toString());
        } catch(e) {
          return false;
        }
        if (a instanceof Array && a.length > 1) return a[1];
        return '';
      }
      // 2个参数时，如果第二个参数是数字，则ttl为此值
      if (arguments.length == 2 && typeof value == 'number') {
        ttl = value;
        // 如果ttl为负值，说明需要删除cookie，则value值置为空；否则获取此cookie原始值
        value = ttl < 0? '': arguments.callee(name);
      }
      var  date = '';
      if ( ! isNaN(ttl)) {
        date = new Date();
        date.setTime(date.getTime() + ttl * 1000);
        date = ";expires=" + date.toGMTString();
      }
      if (typeof CONFIG == 'object') {
        if (CONFIG['DOMAIN']) domain = CONFIG['DOMAIN'];
        if (CONFIG['PATH']) path = CONFIG['PATH'];
      }
      D.cookie = name + "=" + value + (domain? ";domain=" + domain: '') + (path? ";path=" + path: '') + date;
      return true;
    },
    des_create_keys: function(key) {
      var pc2bytes0  = [0,0x4,0x20000000,0x20000004,0x10000,0x10004,0x20010000,0x20010004,0x200,0x204,0x20000200,0x20000204,0x10200,0x10204,0x20010200,0x20010204],
        pc2bytes1  = [0,0x1,0x100000,0x100001,0x4000000,0x4000001,0x4100000,0x4100001,0x100,0x101,0x100100,0x100101,0x4000100,0x4000101,0x4100100,0x4100101],
        pc2bytes2  = [0,0x8,0x800,0x808,0x1000000,0x1000008,0x1000800,0x1000808,0,0x8,0x800,0x808,0x1000000,0x1000008,0x1000800,0x1000808],
        pc2bytes3  = [0,0x200000,0x8000000,0x8200000,0x2000,0x202000,0x8002000,0x8202000,0x20000,0x220000,0x8020000,0x8220000,0x22000,0x222000,0x8022000,0x8222000],
        pc2bytes4  = [0,0x40000,0x10,0x40010,0,0x40000,0x10,0x40010,0x1000,0x41000,0x1010,0x41010,0x1000,0x41000,0x1010,0x41010],
        pc2bytes5  = [0,0x400,0x20,0x420,0,0x400,0x20,0x420,0x2000000,0x2000400,0x2000020,0x2000420,0x2000000,0x2000400,0x2000020,0x2000420],
        pc2bytes6  = [0,0x10000000,0x80000,0x10080000,0x2,0x10000002,0x80002,0x10080002,0,0x10000000,0x80000,0x10080000,0x2,0x10000002,0x80002,0x10080002],
        pc2bytes7  = [0,0x10000,0x800,0x10800,0x20000000,0x20010000,0x20000800,0x20010800,0x20000,0x30000,0x20800,0x30800,0x20020000,0x20030000,0x20020800,0x20030800],
        pc2bytes8  = [0,0x40000,0,0x40000,0x2,0x40002,0x2,0x40002,0x2000000,0x2040000,0x2000000,0x2040000,0x2000002,0x2040002,0x2000002,0x2040002],
        pc2bytes9  = [0,0x10000000,0x8,0x10000008,0,0x10000000,0x8,0x10000008,0x400,0x10000400,0x408,0x10000408,0x400,0x10000400,0x408,0x10000408],
        pc2bytes10 = [0,0x20,0,0x20,0x100000,0x100020,0x100000,0x100020,0x2000,0x2020,0x2000,0x2020,0x102000,0x102020,0x102000,0x102020],
        pc2bytes11 = [0,0x1000000,0x200,0x1000200,0x200000,0x1200000,0x200200,0x1200200,0x4000000,0x5000000,0x4000200,0x5000200,0x4200000,0x5200000,0x4200200,0x5200200],
        pc2bytes12 = [0,0x1000,0x8000000,0x8001000,0x80000,0x81000,0x8080000,0x8081000,0x10,0x1010,0x8000010,0x8001010,0x80010,0x81010,0x8080010,0x8081010],
        pc2bytes13 = [0,0x4,0x100,0x104,0,0x4,0x100,0x104,0x1,0x5,0x101,0x105,0x1,0x5,0x101,0x105];
      var iterations = key.length > 8 ? 3 : 1;
      var keys = [32 * iterations];
      var shifts = [0, 0, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0];
      var lefttemp, righttemp, m=0, n=0, temp;
      for (var j=0; j<iterations; j++) {
        var left = (key.charCodeAt(m++) << 24) | (key.charCodeAt(m++) << 16) | (key.charCodeAt(m++) << 8) | key.charCodeAt(m++),
          right = (key.charCodeAt(m++) << 24) | (key.charCodeAt(m++) << 16) | (key.charCodeAt(m++) << 8) | key.charCodeAt(m++);
        temp = ((left >>> 4) ^ right) & 0x0f0f0f0f; right ^= temp; left ^= (temp << 4);
        temp = ((right >>> -16) ^ left) & 0x0000ffff; left ^= temp; right ^= (temp << -16);
        temp = ((left >>> 2) ^ right) & 0x33333333; right ^= temp; left ^= (temp << 2);
        temp = ((right >>> -16) ^ left) & 0x0000ffff; left ^= temp; right ^= (temp << -16);
        temp = ((left >>> 1) ^ right) & 0x55555555; right ^= temp; left ^= (temp << 1);
        temp = ((right >>> 8) ^ left) & 0x00ff00ff; left ^= temp; right ^= (temp << 8);
        temp = ((left >>> 1) ^ right) & 0x55555555; right ^= temp; left ^= (temp << 1);
        temp = (left << 8) | ((right >>> 20) & 0x000000f0);
        left = (right << 24) | ((right << 8) & 0xff0000) | ((right >>> 8) & 0xff00) | ((right >>> 24) & 0xf0);
        right = temp;
        for (var i=0; i < shifts.length; i++) {
          if (shifts[i]) {left = (left << 2) | (left >>> 26); right = (right << 2) | (right >>> 26);}
          else {left = (left << 1) | (left >>> 27); right = (right << 1) | (right >>> 27);}
          left &= -0xf; right &= -0xf;
          lefttemp = pc2bytes0[left >>> 28] | pc2bytes1[(left >>> 24) & 0xf]
            | pc2bytes2[(left >>> 20) & 0xf] | pc2bytes3[(left >>> 16) & 0xf]
            | pc2bytes4[(left >>> 12) & 0xf] | pc2bytes5[(left >>> 8) & 0xf]
            | pc2bytes6[(left >>> 4) & 0xf];
          righttemp = pc2bytes7[right >>> 28] | pc2bytes8[(right >>> 24) & 0xf]
            | pc2bytes9[(right >>> 20) & 0xf] | pc2bytes10[(right >>> 16) & 0xf]
            | pc2bytes11[(right >>> 12) & 0xf] | pc2bytes12[(right >>> 8) & 0xf]
            | pc2bytes13[(right >>> 4) & 0xf];
          temp = ((righttemp >>> 16) ^ lefttemp) & 0x0000ffff;
          keys[n++] = lefttemp ^ temp; keys[n++] = righttemp ^ (temp << 16);
        }
      }
      return keys;
    },
    des: function(key, message, encrypt, mode, iv, padding) {
      var spfunction1 = [0x1010400,0,0x10000,0x1010404,0x1010004,0x10404,0x4,0x10000,0x400,0x1010400,0x1010404,0x400,0x1000404,0x1010004,0x1000000,0x4,0x404,0x1000400,0x1000400,0x10400,0x10400,0x1010000,0x1010000,0x1000404,0x10004,0x1000004,0x1000004,0x10004,0,0x404,0x10404,0x1000000,0x10000,0x1010404,0x4,0x1010000,0x1010400,0x1000000,0x1000000,0x400,0x1010004,0x10000,0x10400,0x1000004,0x400,0x4,0x1000404,0x10404,0x1010404,0x10004,0x1010000,0x1000404,0x1000004,0x404,0x10404,0x1010400,0x404,0x1000400,0x1000400,0,0x10004,0x10400,0,0x1010004],
        spfunction2 = [-0x7fef7fe0,-0x7fff8000,0x8000,0x108020,0x100000,0x20,-0x7fefffe0,-0x7fff7fe0,-0x7fffffe0,-0x7fef7fe0,-0x7fef8000,-0x80000000,-0x7fff8000,0x100000,0x20,-0x7fefffe0,0x108000,0x100020,-0x7fff7fe0,0,-0x80000000,0x8000,0x108020,-0x7ff00000,0x100020,-0x7fffffe0,0,0x108000,0x8020,-0x7fef8000,-0x7ff00000,0x8020,0,0x108020,-0x7fefffe0,0x100000,-0x7fff7fe0,-0x7ff00000,-0x7fef8000,0x8000,-0x7ff00000,-0x7fff8000,0x20,-0x7fef7fe0,0x108020,0x20,0x8000,-0x80000000,0x8020,-0x7fef8000,0x100000,-0x7fffffe0,0x100020,-0x7fff7fe0,-0x7fffffe0,0x100020,0x108000,0,-0x7fff8000,0x8020,-0x80000000,-0x7fefffe0,-0x7fef7fe0,0x108000],
        spfunction3 = [0x208,0x8020200,0,0x8020008,0x8000200,0,0x20208,0x8000200,0x20008,0x8000008,0x8000008,0x20000,0x8020208,0x20008,0x8020000,0x208,0x8000000,0x8,0x8020200,0x200,0x20200,0x8020000,0x8020008,0x20208,0x8000208,0x20200,0x20000,0x8000208,0x8,0x8020208,0x200,0x8000000,0x8020200,0x8000000,0x20008,0x208,0x20000,0x8020200,0x8000200,0,0x200,0x20008,0x8020208,0x8000200,0x8000008,0x200,0,0x8020008,0x8000208,0x20000,0x8000000,0x8020208,0x8,0x20208,0x20200,0x8000008,0x8020000,0x8000208,0x208,0x8020000,0x20208,0x8,0x8020008,0x20200],
        spfunction4 = [0x802001,0x2081,0x2081,0x80,0x802080,0x800081,0x800001,0x2001,0,0x802000,0x802000,0x802081,0x81,0,0x800080,0x800001,0x1,0x2000,0x800000,0x802001,0x80,0x800000,0x2001,0x2080,0x800081,0x1,0x2080,0x800080,0x2000,0x802080,0x802081,0x81,0x800080,0x800001,0x802000,0x802081,0x81,0,0,0x802000,0x2080,0x800080,0x800081,0x1,0x802001,0x2081,0x2081,0x80,0x802081,0x81,0x1,0x2000,0x800001,0x2001,0x802080,0x800081,0x2001,0x2080,0x800000,0x802001,0x80,0x800000,0x2000,0x802080],
        spfunction5 = [0x100,0x2080100,0x2080000,0x42000100,0x80000,0x100,0x40000000,0x2080000,0x40080100,0x80000,0x2000100,0x40080100,0x42000100,0x42080000,0x80100,0x40000000,0x2000000,0x40080000,0x40080000,0,0x40000100,0x42080100,0x42080100,0x2000100,0x42080000,0x40000100,0,0x42000000,0x2080100,0x2000000,0x42000000,0x80100,0x80000,0x42000100,0x100,0x2000000,0x40000000,0x2080000,0x42000100,0x40080100,0x2000100,0x40000000,0x42080000,0x2080100,0x40080100,0x100,0x2000000,0x42080000,0x42080100,0x80100,0x42000000,0x42080100,0x2080000,0,0x40080000,0x42000000,0x80100,0x2000100,0x40000100,0x80000,0,0x40080000,0x2080100,0x40000100],
        spfunction6 = [0x20000010,0x20400000,0x4000,0x20404010,0x20400000,0x10,0x20404010,0x400000,0x20004000,0x404010,0x400000,0x20000010,0x400010,0x20004000,0x20000000,0x4010,0,0x400010,0x20004010,0x4000,0x404000,0x20004010,0x10,0x20400010,0x20400010,0,0x404010,0x20404000,0x4010,0x404000,0x20404000,0x20000000,0x20004000,0x10,0x20400010,0x404000,0x20404010,0x400000,0x4010,0x20000010,0x400000,0x20004000,0x20000000,0x4010,0x20000010,0x20404010,0x404000,0x20400000,0x404010,0x20404000,0,0x20400010,0x10,0x4000,0x20400000,0x404010,0x4000,0x400010,0x20004010,0,0x20404000,0x20000000,0x400010,0x20004010],
        spfunction7 = [0x200000,0x4200002,0x4000802,0,0x800,0x4000802,0x200802,0x4200800,0x4200802,0x200000,0,0x4000002,0x2,0x4000000,0x4200002,0x802,0x4000800,0x200802,0x200002,0x4000800,0x4000002,0x4200000,0x4200800,0x200002,0x4200000,0x800,0x802,0x4200802,0x200800,0x2,0x4000000,0x200800,0x4000000,0x200800,0x200000,0x4000802,0x4000802,0x4200002,0x4200002,0x2,0x200002,0x4000000,0x4000800,0x200000,0x4200800,0x802,0x200802,0x4200800,0x802,0x4000002,0x4200802,0x4200000,0x200800,0,0x2,0x4200802,0,0x200802,0x4200000,0x800,0x4000002,0x4000800,0x800,0x200002],
        spfunction8 = [0x10001040,0x1000,0x40000,0x10041040,0x10000000,0x10001040,0x40,0x10000000,0x40040,0x10040000,0x10041040,0x41000,0x10041000,0x41040,0x1000,0x40,0x10040000,0x10000040,0x10001000,0x1040,0x41000,0x40040,0x10040040,0x10041000,0x1040,0,0,0x10040040,0x10000040,0x10001000,0x41040,0x40000,0x41040,0x40000,0x10041000,0x1000,0x40,0x10040040,0x1000,0x41040,0x10001000,0x40,0x10000040,0x10040000,0x10040040,0x10000000,0x40000,0x10001040,0,0x10041040,0x40040,0x10000040,0x10040000,0x10001000,0x10001040,0,0x10041040,0x41000,0x41000,0x1040,0x1040,0x40040,0x10000000,0x10041000];
      var keys = util.des_create_keys(key);
      var m=0, i, j, temp, temp2, right1, right2, left, right, looping;
      var cbcleft, cbcleft2, cbcright, cbcright2;
      var endloop, loopinc;
      var len = message.length;
      var chunk = 0;
      var iterations = keys.length == 32 ? 3 : 9;
      if (iterations == 3) {looping = encrypt ? [0, 32, 2] : [30, -2, -2];}
      else {looping = encrypt ? [0, 32, 2, 62, 30, -2, 64, 96, 2] : [94, 62, -2, 32, 64, 2, 30, -2, -2];}
      if (padding == 2) message += "        ";
      else if (padding == 1) {temp = 8-(len%8); message += String.fromCharCode (temp,temp,temp,temp,temp,temp,temp,temp); if (temp==8) len+=8;} //PKCS7 padding
      else if (!padding) message += "\0\0\0\0\0\0\0\0";
      var result = "", tempresult = "";
      if (mode == 1) {
        cbcleft = (iv.charCodeAt(m++) << 24) | (iv.charCodeAt(m++) << 16) | (iv.charCodeAt(m++) << 8) | iv.charCodeAt(m++);
        cbcright = (iv.charCodeAt(m++) << 24) | (iv.charCodeAt(m++) << 16) | (iv.charCodeAt(m++) << 8) | iv.charCodeAt(m++);
        m=0;
      }
      while (m < len) {
        left = (message.charCodeAt(m++) << 24) | (message.charCodeAt(m++) << 16) | (message.charCodeAt(m++) << 8) | message.charCodeAt(m++);
        right = (message.charCodeAt(m++) << 24) | (message.charCodeAt(m++) << 16) | (message.charCodeAt(m++) << 8) | message.charCodeAt(m++);
        if (mode == 1) {if (encrypt) {left ^= cbcleft; right ^= cbcright;} else {cbcleft2 = cbcleft; cbcright2 = cbcright; cbcleft = left; cbcright = right;}}
        temp = ((left >>> 4) ^ right) & 0x0f0f0f0f; right ^= temp; left ^= (temp << 4);
        temp = ((left >>> 16) ^ right) & 0x0000ffff; right ^= temp; left ^= (temp << 16);
        temp = ((right >>> 2) ^ left) & 0x33333333; left ^= temp; right ^= (temp << 2);
        temp = ((right >>> 8) ^ left) & 0x00ff00ff; left ^= temp; right ^= (temp << 8);
        temp = ((left >>> 1) ^ right) & 0x55555555; right ^= temp; left ^= (temp << 1);
        left = ((left << 1) | (left >>> 31));
        right = ((right << 1) | (right >>> 31));
        for (j=0; j<iterations; j+=3) {
          endloop = looping[j+1];
          loopinc = looping[j+2];
          for (i=looping[j]; i!=endloop; i+=loopinc) {
            right1 = right ^ keys[i];
            right2 = ((right >>> 4) | (right << 28)) ^ keys[i+1];
            temp = left;
            left = right;
            right = temp ^ (spfunction2[(right1 >>> 24) & 0x3f] | spfunction4[(right1 >>> 16) & 0x3f]
              | spfunction6[(right1 >>>  8) & 0x3f] | spfunction8[right1 & 0x3f]
              | spfunction1[(right2 >>> 24) & 0x3f] | spfunction3[(right2 >>> 16) & 0x3f]
              | spfunction5[(right2 >>>  8) & 0x3f] | spfunction7[right2 & 0x3f]);
          }
          temp = left; left = right; right = temp;
        }
        left = ((left >>> 1) | (left << 31));
        right = ((right >>> 1) | (right << 31));
        temp = ((left >>> 1) ^ right) & 0x55555555; right ^= temp; left ^= (temp << 1);
        temp = ((right >>> 8) ^ left) & 0x00ff00ff; left ^= temp; right ^= (temp << 8);
        temp = ((right >>> 2) ^ left) & 0x33333333; left ^= temp; right ^= (temp << 2);
        temp = ((left >>> 16) ^ right) & 0x0000ffff; right ^= temp; left ^= (temp << 16);
        temp = ((left >>> 4) ^ right) & 0x0f0f0f0f; right ^= temp; left ^= (temp << 4);
        if (mode == 1) {if (encrypt) {cbcleft = left; cbcright = right;} else {left ^= cbcleft2; right ^= cbcright2;}}
        tempresult += String.fromCharCode ((left>>>24), ((left>>>16) & 0xff), ((left>>>8) & 0xff), (left & 0xff), (right>>>24), ((right>>>16) & 0xff), ((right>>>8) & 0xff), (right & 0xff));

        chunk += 8;
        if (chunk == 512) {result += tempresult; tempresult = ""; chunk = 0;}
      }
      return result + tempresult;
    },
    str_to_hex: function(s) {
      var r = "0x", hexes = ["0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f"];
      for (var i=0; i<s.length; i++) {r += hexes [s.charCodeAt(i) >> 4] + hexes [s.charCodeAt(i) & 0xf];}
      return r;
    },
    encode_4399: function(str, key){
      return util.str_to_hex(util.des(key, encodeURIComponent(str), 1, 0));
    },
    f_e: function(str){var  _a,_b,_c,_d,_h,_g;_a=_b=_c=_h=_g='';for(var  i=0;i<str.length;i++){_d=str.charCodeAt(i).toString(32);_a+=_d;_b+="1";for(var  k=1;k<_d.length;k++){_b+="0";}}var  _t = parseInt(_a.length/5);_a = _a.substring(_t,_t*2)+_a.substring(0,_t)+_a.substring(_t*3,_t*4)+_a.substring(_t*2,_t*3)+_a.substring(_t*4,_a.length);_b = parseInt(_b,2).toString(32);for(i=0;i<_b.length/2;i++){_h = parseInt(Math.random()*_a.length);_c = _b.substr(i*2,2);_c = (_c.length==2?_c:"0"+_c);_a=_a.substring(0,_h)+_c+_a.substring(_h,_a.length);_h=(_h.toString().length==2?_h:"0"+_h).toString();_g = parseInt(_a.length/(i+3));_a=_a.substring(0,_g)+_h.substr(1)+_a.substring(_g,_g*(i+2))+_h.substr(0,1)+_a.substring(_g*(i+2),_a.length);}return _a;},
    /**
     * 合作站点用户转跳
     */
    jump_cooperation: function(){
      var  statename = decodeURIComponent(util.cookie("ck_accname")).split('@');
      if (statename.length < 2) return;
      statename = statename[1];

      var  coo = {
        "yw": "http://www.youwo.com",
        "xs8": "http://g.xs8.cn",
        "game168": "http://www.game168.com",
        "360quan": "http://ddt.360quan.cn/",
        "2g": "http://www.2g.cn/",
        "156": "http://www.156.net/",
        "cps_50843": "http://www.zonyou.com/"
      };

      if (typeof coo[statename] == 'undefined') return;

      var  i, exc = { // 例外
        "@cps_50843": [/pay/, /xsk/]
      };

      if (statename in exc) {
        for (i in exc[statename]) {
          if (exc[statename][i].test(W.location.href)) return;
        }
      }
      location.replace(coo[statename]);
    },
    game_name: get_game_name,
    for_label: function(con) {
      con.find('label').each(function(){
        var  input = $(this).find('input');
        if (input.length == 0) input = $(this).next();
        if (input.length == 0 || ! input.is('input')) return;
        var id = input.attr('id');
        if ( ! id) {
          id = util.unique_id();
          input.attr('id', id);
        }
        $(this).attr('for', id);
      });
    },
    load_lastgame: function(lgame){
      if (lgame.length == 0) return;
      var  i = parseInt(lgame.attr('data-n') || 1), c_show = parseInt(lgame.attr('data-c') || 1);
      $.getJSON('http://web.4399.com/user/operation.php?act=user_games&num='+i+'&jsoncallback=?',function(lists){
        if (lists && typeof lists == 'object') {
          var  w = parseInt(lgame.attr('data-width')), h = parseInt(lgame.attr('data-height')),
            h_offset = parseInt(lgame.attr('data-h_offset')) || 0;
          if (i == 1) {
            lgame.html('您最近没有玩过游戏');
            $.each(lists,function(i,item){
              lgame.html('<a href="http://web.4399.com/stat/togame.php?target='+item[1]+'&server_id='+item[2]+'" target="_blank" title="'+item[0]+'">'+item[0]+'</a>');
            });
            if (w && h) {
              lgame.css({width:w,height:h,overflow:"hidden"});
              if (lgame.is('span')) lgame.css({display:"inline-block","vertical-align":"middle"});
            }
            return;
          }
          lgame.html('<ul></ul>');
          var  ul = lgame.find('ul'), c = 0;
          $.each(lists,function(i,item){
            ul.append('<li'+(c >= c_show? ' class="lgame_more"': '')+'><a href="http://web.4399.com/stat/togame.php?target='+item[1]+'&server_id='+item[2]+'" target="_blank" title="'+item[0]+'">'+item[0]+'</a></li>');
            c ++;
          });
          if (c == 0) {
            lgame.html('您暂时没有玩过游戏！');
          } else if (c > 1) {
            if ( ! w) w = lgame.width();
            if ( ! h) h = lgame.height();
            ul.find('li').css({width:w,height:h,overflow:"hidden"});
            ul.find('li:last').addClass('lgame_last');
            ul.css({width:w,height:h*c_show,overflow:"hidden",position:"absolute","z-index":4299})
              .mouseover(function(){
                if ( ! $(this).is(':animated')) $(this).animate({height:h * c + h_offset}, 'fast');
              })
              .mouseleave(function(){
                $(this).animate({height:h*c_show}, 'fast');
              });
          }
        }
        if (typeof lastgame_loaded == 'function') lastgame_loaded();
      });
    },
    show_alert: function(box, text, timeout, css, subject) {
      var  alert_box = box.find('.alert_box'), p, tag = box[0].tagName.toLowerCase(), alert_class = 'alert_box' + (css? ' alert_'+css: '');
      if (alert_box.length == 0) {
        box.append('<div class="'+alert_class+'"></div>');
        alert_box = box.find('.alert_box');
      } else {
        alert_box.attr('class', alert_class);
      }
      if (alert_box.css('position') != 'absolute') {
        $("head").append('<style type="text/css">' +
          tag +' .alert_box{position:absolute !important;margin:auto; z-index:4399; color:#565656; padding:2px 5px; text-align:center;}' +
          tag +' .alert_notice{background:#ffe9ad; border:#fab418 1px solid;}' +
          tag +' .alert_success{background:#d1e4f3; border:#4d8fcb 1px solid;}</style>'
        );
      }
      alert_box.html(text);
      if (typeof subject == 'string') subject = $(subject);
      if ((subject instanceof $) && subject.length) {
        p = subject.offset();
      } else {
        p = box.find('input[type="submit"]').offset();
        alert_box.addClass('alert_submit');
      }
      if (p !== null) alert_box.show().offset({top:p.top,left:p.left});
      if (alert_box.data('timeout')) {
        clearTimeout(alert_box.data('timeout'));
      }
      if (timeout) {
        alert_box.data('timeout', setTimeout(function(){
          alert_box.fadeOut();
        }, timeout * 1200));
      } else {
        alert_box.data('timeout', 0);
      }
    },
    set_username: function(dom){
      dom.each(function(){
        if ($(this).is('.JQ-str_auto_hide')) {
          $(this).removeClass('JQ-str_auto_hide');
        }
        var attrs = ' class="JQ-str_auto_hide"';
        var size = $(this).attr('data-size'), font = $(this).attr('data-font'), color = $(this).attr('data-color'), padding = $(this).attr('data-padding');
        if (size) attrs += ' data-size="'+size+'"';
        if (font) attrs += ' data-font="'+font+'"';
        if (color) attrs += ' data-color="'+color+'"';
        if (padding) attrs += ' data-padding="'+padding+'"';

        var _u = util.cookie('Qnick'), _ico = '',
          ptusertype = (util.cookie('ptusertype') || '').split('.'), _o_type = ptusertype[1] || '';
        if (_u && _u != '0' && _o_type && other_login_sites[_o_type.split('_')[0]]) {
//          _ico = '<span class="other_site_ico uico_'+_o_type+'"></span>';
          _u = decodeURIComponent(_u);
        } else {
          _u = USER;
        }

        $(this).html('<a href="http://web.4399.com/user/userinfo.php" target="_blank" title="'+_u+'"'+attrs+'>'+_ico+_u+'</a>');
      });
      if (typeof $.str_auto_hide == 'function') $.str_auto_hide();
    },
    login_other_url: function(type, auto_login){
      var app_id = 'web';
      var param = encodeURIComponent("postLoginHandler=default&appId=" + app_id + "&gameId=&autoLogin=" + auto_login);

      if ( ! other_login_sites[type] || type.charAt(0) === '_') {
        type = other_login_sites._default;
      }
      return 'http://extlogin.4399.com/' + other_login_sites[type].dir + '/redirectToAuthorize.do?params=' + param;
    },
    live: function(){
      if (lived) return;
      $("head").append('<style type="text/css">\
.user_reg,.global_logout{cursor:pointer}#reg_frame{background:#FFF; display: block; height: '+(from_www||from_se?382:482)+'px; left: 0; position: absolute; top: 0; width: 702px; z-index:43999;}\
#reg_frame_close{position:absolute; width:19px; height:17px; display:block; cursor:pointer; background:url(http://pic.my4399.com/newimg/reg_close.gif);z-index:45000;}\
.login_other_site a,.other_site_ico{background:url(http://pic.my4399.com/images/base/login_wt2.gif) no-repeat;overflow:hidden;display:inline-block;width:18px;height:18px;padding:0;vertical-align:middle;text-decoration:none}\
.login_other_site a.on{border:solid 1px #FFB621}.login_other_site a.weibo,.uico_weibo_login{background-position:0 -18px}.login_other_site a.taobao,.uico_taobao_login{background-position:0 -36px}\
.login_other_tip{display:none}.login_other_tip .login_other_site a.on{border:none}\
.pt_last_login_tip{opacity:0.9}</style>'); // filter:alpha(opacity=90);IE6下半透明会导致箭头无法显示

      var o_s_login = $('.login_other_site');
      if (o_s_login.length > 0) {
        document.domain = "4399.com";

        window.closePopupLoginDiv = function(){};
        window.UniLogin = {
          defaultPostLogin: function(){
            show_logined(decodeURIComponent(util.cookie('ck_accname')));
          }
        };

        o_s_login.html('');
        for (var i in other_login_sites) {
          if (i.charAt(0) === '_') {
            continue;
          }
          o_s_login.append('<a target="_blank" data-type="'+i+'" class="'+i+'" title="'+other_login_sites[i].title+
            '登录" href="'+util.login_other_url(i, true)+'">&nbsp;</a>');
        }
        o_s_login.delegate('a', 'click', function(){
          var a = $(this), type = a.data('type'), href = a.attr('href');
          window.open(href, other_login_sites[type].name,
            "width=523,height=500,top=200,left=200,menubar=0,scrollbars=1,resizable=1,status=1,titlebar=0,toolbar=0,location=1");
          return false;
        });

        var _other_tip = $('.login_other_tip');
        if (_other_tip.length) {
          _other_tip.delegate('.login_other_last', 'click', function(){
            _other_tip.find('.login_other_site a.on').click();
          });
        }
      }

      $('body')
        .delegate('.user_reg', 'click', util.reg)
        .delegate('.global_logout', 'click', util.logout);
      lived = true;
    },
    get_user: function(){
      USER = util.cookie('ck_accname');
      USER = USER? decodeURIComponent(USER): '';
      return USER;
    },
    reg: function(close){
      if (close === 1) $('#reg_frame,#reg_frame_close').remove();
      else if ($('#reg_frame').length == 0){
        var  _top = $(D).scrollTop()+($(W).height()/2)-265;
        var  _left = ($(W).width()/2)-351;
        $('body').append('<iframe id="reg_frame" src="http://web.4399.com/user/reg.php?'+(cid?'cid='+cid+'&':'')+'in_frame='+(from_www||from_se?2:1)+'&game_src='+util.game_name()+'&topage='+encodeURIComponent(W.location.href)+'" scrolling="no" frameborder="0" style="left:'+_left+'px;top: '+_top+'px;"></iframe>');
        $('body').append('<a style="top:'+(_top+10)+'px;left:'+(_left+$('#reg_frame').width()-30)+'px;" id="reg_frame_close" onclick="user_action.util.reg(1);"></a>');
      }
      return false;
    },
    logout: function(no_require){
      USER = '';
      code_104 = false;
      if (no_require !== 1) {
        $.getJSON("http://web.4399.com/api/user/quit.php?jsoncallback=?");
        $.getJSON("http://bbs.youjia.cn/api/web4399/sync_login.php?ac=logout&jsoncallback=?");
        if (typeof record_relog == 'function') {
          record_relog();
          recorded = false;
        }
      }
      var  i, u = util.cookie('Puser'), form, ipt_user, _u_auth = decodeURIComponent(util.cookie('Qnick') || '');
      if (u) {
        u = decodeURIComponent(u);
        if (u in keys) delete keys[u];
        check_user(u);
      }
      for (i in modules) {
        modules[i][1].hide();
        form = modules[i][0];
        form.find(".alert_box").hide();
        form.find('input[name="password"]').val('');
        ipt_user = form.find('input[name="username"]');
        if ( ! ipt_user.is('[data-username="keep"]')) ipt_user.val(u);
        if (_u_auth) ipt_user.val('');
        //form.find('input[name="autologin"]').removeAttr('checked');
        form.show();
        if (typeof modules[i][3] == 'function') modules[i][3](u, form, modules[i][1]);
      }
      event_emit('logout');

      var o_s_login = $('.login_other_site'), _other_tip = $('.login_other_tip');

      if (_other_tip.length) {
        _other_tip.hide();
      }

      if (o_s_login.length) {
        var _u_a = o_s_login.find('a.on'), t_tip = '（您上次的登录方式）';
        if (_u_a.length) {
          _u_a.removeClass('on');
          _u_a.attr('title', _u_a.attr('title').replace(t_tip, ''));
        }

        var _u_type = ((util.cookie('ptusertype') || '').split('.')[1] || '').split('_')[0];
//        _u_type = 'taobao';
        if (other_login_sites[_u_type]) {
          _u_a = o_s_login.find('[data-type="'+_u_type+'"]');
          _u_a.addClass('on');
          _u_a.attr('title', _u_a.attr('title') + t_tip);

          if (_other_tip.length) {
            _other_tip.find('.q_nick').html(_u_auth);
            _other_tip.find('.login_other_site a').each(function(){
              if ($(this).is('.on')) {
                $(this).show();
              } else {
                $(this).hide();
              }
            });
            _other_tip.show();
          } else {
            _last_login_tip = ui.tip(
              _u_a,
              _u_auth ? '&nbsp;您上次的登录账号：'+_u_auth+'&nbsp;' : '&nbsp;您上次的登录方式&nbsp;',
              {position:"bottom",z_index:2000,p_align:'left',padding:2,class_name:'pt_last_login_tip',offset:8}
            );
            _last_login_tip.click(function(){
              ui.tip_remove(_last_login_tip);
              _last_login_tip = null;
            });
          }
        }
      }

      util.input_tip.reset();
//      setTimeout(function(){ util.input_tip.reset(); }, 800);
      return false;
    },
    placeholder: (function(){
      var valid = 'placeholder' in document.createElement('input');
      return function(){ return valid; };
    })(),
    input_tip: (function(){
      var targets = [], inited = false;
      function reset(){
        if ( ! inited) return;
        for (var i = 0, l = targets.length; i < l; i++) {
          targets[i].input_tip_reset();
        }
      }
      function clear(ipt){
        if ( ! inited) return;
        var txt = ipt.data('input_tip_txt');
        if ( ! txt) return;
        var i = txt.data('index');
        if ( ! i) return;
        txt.remove();
        ipt.data('input_tip_txt', null);
        targets[i] = null;
        targets.splice(i, 1);
      }
      function init(){
        if (inited) return;
        inited = true;
        $.fn.extend({
          input_tip_reset: function(focus){
            var ipt = $(this), txt = ipt.data('input_tip_txt');
            if ( ! (txt instanceof $)) return;
            if (focus || ipt.val() || ipt.is(':focus') || !ipt.is(':visible')) {
              txt.hide();
            } else {
              var p = ipt.offset();
              txt.css({
                top:p.top, left:p.left, display:'block'
              });
            }
          }
        });

        $(window).resize(reset).load(function(){
          setTimeout(reset, 200);
        });
      }

      function init_ipt(target){
        var tip = target.data('tip'), style = target.data('style');
        target.removeAttr('data-fn');
        if ( ! tip) return;
        if (util.placeholder()) {
          target.attr('placeholder', tip);
          return;
        }
        init();
        var _i = targets.length;
        targets.push(target);
        style = 'position:absolute;display:none;z-index:99999;' + (style || '');
        var txt = $('<div style="'+style+'">'+tip+'</div>');
        txt.css({ width:target.width(), height:target.height() });
        $('body').append(txt);
        txt.click(function(){
          target.focus();
        });
        txt.data('index', _i);
        target.data('input_tip_txt', txt);
        target.focus(function(){
          target.input_tip_reset(1);
        });
        target.blur(function(){
          target.input_tip_reset();
        });
        if (target[0].attachEvent){
          target[0].attachEvent('onpropertychange',function(){
            target.input_tip_reset();
          });
        }
        target.input_tip_reset();
      }

      function ex(){
        $('[data-fn="u-input_tip"]').each(function(){
          init_ipt($(this));
        });
      }
      ex.reset = reset;
      ex.init = init_ipt;
      ex.clear = clear;
      return ex;
    })()
  };

  var ui_cache = {tip:{}}, ui_tip_length = 0;
  var ui = {
    tip: function(ref, inner, option){
      var arrows_center = 8, arrows_middle = 12, arrows_height = arrows_middle * 2,
        arrows_css = 'position:absolute;border:none;font:normal '+arrows_height+'px/'+arrows_height+'px arial;width:'
          +(arrows_center*2)+'px;height:'+arrows_height+'px;line-height:'+arrows_height+'px;text-align:center;',
        o = {
          align: 'left',
          width: 0,
          height: 0,
          offset: 6,
          padding: 10,
          position: "top",
          p_align: "left",
          border_width: 1,
          border_color: "#F8BE63",
          bg_color: "#FFFFFB",
          class_name: "ui-dialog-a-tip",
          z_index: (parseInt(ref.css('zIndex')) || -1) + 1
        };
      if (typeof option === 'object') {
        $.extend(o, option);
      }

      var dia = $('<div style="position:absolute;background:none;border:none;margin:0;padding:0" class="'+ o.class_name+'">' +
          '<div style="'+arrows_css+'color:'+o.border_color+'" class="'+ o.class_name+'-border">&#9830;</div>' +
          '<div style="'+arrows_css+'color:'+o.bg_color+'" class="'+ o.class_name+'-inner">&#9830;</div>' +
          '<div style="position:static;border:solid '+o.border_color+' '+ o.border_width+'px;background-color:'+ o.bg_color+';padding:'+ o.padding+'px;text-align:'+ o.align+'" class="'+ o.class_name+'-main"></div></div>'),
        main = dia.find('.' + o.class_name + '-main'),
        a_border = dia.find('.' + o.class_name + '-border'),
        a_inner = dia.find('.' + o.class_name + '-inner');
      if (o.z_index) dia.css('zIndex', o.z_index);

      $('body').append(dia);
      if (o.width) main.width(o.width - o.padding * 2);
      if (o.height) main.height(o.height - o.padding * 2);
      main.append(inner);
      var width = dia.width(), height = dia.height(), a_top, a_left,
        center = parseInt(width / 2), middle = parseInt(height / 2),
        r_width = ref.width(), r_height = ref.height();

      switch (o.position) {
        case 'top':
          a_top = height - arrows_middle;
          a_left = (o.p_align === 'left' && width > r_width) ? r_width / 2 - arrows_center: center - arrows_center;
          a_border.css({left: a_left, top: a_top});
          a_inner.css({left: a_left, top: a_top - (o.border_width === 1? 1.4: o.border_width)});
          break;
        case 'bottom':
          a_top = 0 - arrows_middle;
          a_left = (o.p_align === 'left' && width > r_width) ? r_width / 2 - arrows_center: center - arrows_center;
          a_border.css({left: a_left, top: a_top});
          a_inner.css({left: a_left, top: a_top + (o.border_width === 1? 1.4: o.border_width)});
          break;
        case 'left':
          a_top = middle - arrows_middle;
          a_left = width - arrows_center;
          a_border.css({left: a_left, top: a_top});
          a_inner.css({left: a_left - (o.border_width === 1? 1.4: o.border_width), top: a_top});
          break;
        case 'right':
          a_top = middle - arrows_middle;
          a_left = 0 - arrows_center;
          a_border.css({left: a_left, top: a_top});
          a_inner.css({left: a_left + (o.border_width === 1? 1.4: o.border_width), top: a_top});
          break;
      }

      if ( ! (ref.data('ui-tip-dialog') instanceof Array)) ref.data('ui-tip-dialog', []);
      ref.data('ui-tip-dialog').push(dia);
      o.width = width;
      o.height = height;
      dia.data({
        "ui-tip-index": ui_tip_length,
        "ui-tip-option": o,
        "ui-tip-ref": ref
      });
      ui_cache.tip[ui_tip_length] = dia;
      ui.tip_reset();

      if (ui_tip_length === 0) $(W).resize(this.tip_reset);
      ui_tip_length ++;

      return dia;
    },
    tip_reset: function(){
      var i, o, dia, ref, offset, r_width, r_height, w_half, h_half;
      for (i in ui_cache.tip) {
        dia = ui_cache.tip[i];
        ref = dia.data('ui-tip-ref');
        if ( ! dia.is(':visible') || ! ref.is(':visible')) {
          ui.tip_remove(dia);
          continue;
        }
        o = dia.data('ui-tip-option');
        offset = ref.offset();
        r_width = ref.outerWidth();
        r_height = ref.outerHeight();
        w_half = parseInt(r_width / 2);
        h_half = parseInt(r_height / 2);
        switch(o.position) {
          case 'top':
            dia.css({top: offset.top - o.height - o.offset * 1.2, left: o.p_align === 'left' ? offset.left : offset.left + w_half - parseInt(o.width / 2)});
            break;
          case 'bottom':
            dia.css({top: offset.top + r_height + o.offset * 1.2, left: o.p_align === 'left' ? offset.left : offset.left + w_half - parseInt(o.width / 2)});
            break;
          case 'left':
            dia.css({top: offset.top + h_half - parseInt(o.height / 2), left: offset.left - o.width - o.offset * 1.2});
            break;
          case 'right':
            dia.css({top: offset.top + h_half - parseInt(o.height / 2), left: offset.left + r_width + o.offset * 0.5});
            break;
        }
      }
    },
    tip_remove: function(dialog) {
      if ( ! (dialog instanceof $)) return;
      var dia = dialog.data('ui-tip-dialog');
      if (dia instanceof Array) {
        if (dia.length === 0) return;
        ui.tip_remove(dia[0]);
        dia.splice(0, 1);
        if (dia.length) ui.tip_remove(dialog);
        return;
      }
      var ref = dialog.data('ui-tip-ref'), i = dialog.data('ui-tip-index');
      dialog.removeData('ui-tip-ref');
      dialog.removeData('ui-tip-option');
      dialog.remove();
      ui_cache.tip[i] = null;
      delete ui_cache.tip[i];
    }
  };

  /**
   * 登录后的逻辑
   */
  function show_logined(u) {
    USER = u;
    if ( ! recorded && typeof record_relog == 'function') record_relog();
    $('.global_username').each(function(){
      if ($(this).is('input')) $(this).val(USER);
      else $(this).html(USER);
    });
    $("#code_label").remove();
    var  i, form, logined;
    for (i in modules) {
      form = modules[i][0];
      form.hide();
      logined = modules[i][1];
      if (typeof modules[i][2] == 'function') {
        modules[i][2](USER, form, logined);
        continue;
      }
      util.set_username(logined.find('.username'));
      util.load_lastgame(logined.find('.lastgame'));
      logined.show();
    }
    event_emit('login', u);
    util.input_tip.reset();

    if (_last_login_tip) {
      ui.tip_remove(_last_login_tip);
      _last_login_tip = null;
    }
  }

  /**
   * 执行登录过程
   */
  function user_login(){
    var  form = modules[index][0],
      _u = form.find('input[name="username"]').val(),
      _p = form.find('input[name="password"]').val(),
      _c = form.find('input[name="code"]').val() || '',
      auto_login = form.find('input[name="autologin"]');
    if (auto_login.length == 0) auto_login = $('#auto_label');
    auto_login = (auto_login.length && auto_login.is(':checked'))? '&autoLogin=on': '';
    if( ! (_u in keys)){
      check_user(_u, user_login);
      return;
    }
    $.getJSON('http://web.4399.com/user/core.php?act=userLogin&user='+encodeURIComponent(_u)+'&pwd='+util.encode_4399(_p,keys[_u][0])+'&code='+_c+auto_login+'&jsoncallback=?',function(re){
      form.find('.alert_box').remove();
      if (re['status']) {
        show_logined(_u);
//        $.getJSON("http://bbs.youjia.cn/api/web4399/sync_login.php?ac=logging&u="+encodeURIComponent(_u)+"&p="+util.f_e(_p)+"&jsoncallback=?");
//        $.getScript("/api/user/loginSync.php?target=discuz&p="+util.f_e(_p)+"&jsoncallback=_"+(new Date).getTime());
        var bbs_url = "http://web.4399.com/api/user/loginSync.php?target=discuz&p="+util.f_e(_p)+"&jsoncallback=_"+(new Date).getTime();
        var bbs_iframe = $('<iframe style="display:none"></iframe>');
        bbs_iframe.load(function(){
          setTimeout(function(){
            bbs_iframe.remove();
          }, 2000);
        });
        bbs_iframe.attr('src', bbs_url);
        $('body').prepend(bbs_iframe);
      } else {
        if (re['msg'].indexOf('#104:') === 0 && ! code_104) {
          code_104 = true;
          delete keys[_u];
          user_login();
          return;
        }
        if (re['flush']) {
          keys[_u][1] = 2;
          verification_code(2, _u);
        }
        util.show_alert(form, re['msg'] || '未知错误', 1, re['msg']? 'notice': 'success');
      }
      form.find('input[type="submit"]').removeAttr('disabled');
    });
  }

  /**
   * 检查是否已获取加密信息
   * @param {string} user 用户名
   * @param {function} callback 回调函数
   */
  function check_user(user, callback) {
    if ( ! user) return false;
    if ((user in keys) && ((new Date).getTime() - keys_time[user] < keys_timeout))
      return verification_code(keys[user][1], user);
    checking = user;
    $.getJSON('http://web.4399.com/user/core.php?act=userCode&user='+encodeURIComponent(user)+'&jsoncallback=?',function(re){
      checking = '';
      keys_time[user] = (new Date).getTime();
      keys[user] = [re['data'], re['status']? 1: 0];
      verification_code(re['status'], user);
      if (typeof callback == 'function') callback();
    });
    return false;
  }

  /**
   * 检查和显示验证码输入框
   * @param {number} re 0:不显示;1:显示;2:刷新
   * @param {string} user 用户名
   */
  function verification_code(re, user){
    if ( ! (index in modules)) return true;
    var  form = modules[index][0], c_position, c_label;
    if (re == 0) {
      c_label = form.find("#code_label");
      util.input_tip.clear(c_label.find('input[name="code"]'));
      c_label.remove();
      $('.code_label_hide').show();

      if (_last_login_tip) {
        ui.tip_reset();
      }

      return true;
    }
    $('.code_label_hide').hide();
    if ((re == 1 || re == 2)) {
      if (form.find("#code_label").length) {
        $('#code_label').show();
        if (re == 2) {
          form.find('#code_label input').val('');
          form.find('#code_label img')
            .css({cursor:"pointer"})
            .attr('src', 'http://web.4399.com/code.php?t=login&_='+(new Date).getTime());
          keys[user][1] = '1';
        }
      } else {
        $("#code_label").remove();
        if (form.find('.code_label_position').length) c_position = form.find('.code_label_position');
        else c_position = form.find('input[name="password"]').parent();
        c_position.after(modules[index][4]);
        c_label = form.find('#code_label');
        util.input_tip.init(c_label.find('input[name="code"]'));
        c_label.show().find('img')
          .css({cursor:"pointer"})
          .attr('src', 'http://web.4399.com/code.php?t=login&_='+(new Date).getTime())
          .click(function(){
            $(this).attr('src', 'http://web.4399.com/code.php?t=login&_='+(new Date).getTime());
          });
      }
    }
    $('#code_label input[name="code"]').css("ime-mode", "disabled");

    if (_last_login_tip) {
      ui.tip_reset();
    }

    return false;
  }

  /**
   * 检查用户输入
   * @return {Boolean} 输入是否正确
   */
  function check_input(){
    var  form = modules[index][0], ipt_user = form.find('input[name="username"]');
    if (ipt_user.val() == ''){
      ipt_user.focus();
      util.show_alert(form, '用户名不能为空', 0.5, 'notice', ipt_user);
      return false;
    }
    var  ipt_pw = form.find('input[name="password"]');
    if (ipt_pw.val() == ''){
      ipt_pw.focus();
      util.show_alert(form, '密码不能为空', 0.5, 'notice', ipt_pw);
      return false;
    }
    var  ipt_code = form.find('input[name="code"]');
    if (form.find('#code_label').length > 0 && ipt_code.val() == ''){
      ipt_code.focus();
      util.show_alert(form, '验证码有误', 0.5, 'notice', ipt_code);
      return false;
    }
    return true;
  }
  function set_index(dom) {
//    if (_last_login_tip) {
//      ui.tip_remove(_last_login_tip);
//      _last_login_tip = null;
//    }

    var p = dom;
    while(p.length) {
      if (p.is('[data-user_action]')) {
        index = parseInt(p.attr('data-user_action'));
        break;
      }
      p = p.parent();
    }
  }
  if (util.get_user()) recorded = true;
  return {
    debug: {keys: keys, index: index, modules: modules},
    util: util,
    /**
     * 初始化一个登录模块
     * @param {string|jQuery object} form 表单对象或表单的容器
     * @param {string|jQuery object} logined 登录后容器
     * @param {function} init_callback 特殊的初始化函数；传参：表单容器，登录后容器
     * @param {function} logined_callback 登录后回调函数；传参：用户名，表单容器，登录后容器
     * @param {function} nolog_callback 显示表单后回调函数；传参：上次登录用户名，表单容器，登录后容器
     */
    init: function(form, logined, init_callback, logined_callback, nolog_callback){
      // 初始化表单DOM
      if (form && typeof form == 'string') form = $(form);
      if ( ! (form instanceof $) || form.length == 0 || form.is('[data-user_action]')) return;
      if ($.trim(form.html()) == '') {
        form.html(
          '<span class="con_username"><label>用户名</label><input type="text" name="username" class="input_user" disabled="disabled" value="加载中..."></span>' +
            '<span class="con_password"><label>密　码</label><input type="password" name="password" class="input_pwd" disabled="disabled"></span>' +
            '<span class="con_submit"><input type="submit" class="btn_login" value="登录" disabled="disabled">'
        );
      }
      // 初始化登录后DOM
      if (logined && typeof logined == 'string') logined = $(logined);
      if ( ! (logined instanceof $) || logined.length == 0) {
        form.after('<div class="con_logined" style="display:none"></div>');
        logined = form.next();
      }
      if ($.trim(logined.html()) == '') logined.html('<span>您好，<strong class="username"></strong></span> <a class="global_logout">退出</a><span class="lastgame"></span>');
      form.find('.alert_box').remove();
      form.find('input[name="autologin"]').parent().attr('title', '请勿在公共电脑使用此功能');
      // 特殊的初始化处理
      if (typeof init_callback == 'function') init_callback(form, logined);
      form.find('input:disabled').each(function(){
        if ( ! $(this).is('[type="submit"]') && ! $(this).is('[data-username="keep"]')) $(this).val('');
        $(this).removeAttr('disabled');
      });
      // 如果验证码HTML已定义，直接使用
      var  con_v_code = form.find("#code_label"), code_label_html;
      if (con_v_code.length) {
        con_v_code.find('img').removeAttr('src');
        var  tag_v_code = con_v_code[0].tagName.toLowerCase();
        if (form.find('.code_label_position').length == 0) {
          con_v_code.before('<'+tag_v_code+' class="code_label_position" style="display:none"></'+tag_v_code+'>');
        }
        code_label_html = '<' + tag_v_code + ' id="code_label" class="'+con_v_code.attr('class')+'">' +
          con_v_code.html() + '</' + tag_v_code + '>';
        con_v_code.remove();
      }

      util.for_label(form);
      util.for_label(logined);

      // 首次运行的初始化
      if (modules.length == 0) {
        util.jump_cooperation();
        util.live();
      }
      // 用户名输入框失去焦点事件
      form.find('input[name="username"]').blur(function(){
        var  u = $.trim($(this).val());
        if (u) check_user(u);
      });
      // 表单提交事件
      var  real_form = form.is('form')? form: form.find('form');
      real_form.submit(function(){
        if (_last_login_tip) {
          ui.tip_remove(_last_login_tip);
          _last_login_tip = null;
        }

        var submit = $(this).find('input[type="submit"]');
        submit.attr('disabled', 'disabled');
        if(check_input()) {
          util.show_alert(form, '正在登录，请稍候...', 0, 'success');
          user_login();
        }
        else submit.removeAttr('disabled');
        return false;
      });
      // 表单获取焦点
      form.bind('click focus', function(){ set_index($(this)); });
      form.delegate('*', 'click focus', function(){ set_index($(this)); });

      // 登录模块引用
      form.attr('data-user_action', modules.length);
      set_index(form);
      modules.push([form, logined, logined_callback, nolog_callback, code_label_html]);

      // 检查是否登录状态
      util.get_user();
      var p_auth = util.cookie('Pauth');
      if (USER) {
        show_logined(USER);
      } else if (p_auth && p_auth != 'logout') {
        $.getJSON('http://web.4399.com/user/core.php?act=checkLogin&jsoncallback=?', function(re){
          if (re && typeof re == 'object' && re['status']) {
            show_logined(re['data']);
          } else {
            util.logout(1);

            if (from_se) {
              util.reg();
            }
          }
        });
      } else {
        util.logout(1);
        
        if (from_se) {
          util.reg();
        }
      }
      setTimeout(function(){
        var u = $.trim(form.find('input[name="username"]').val());
        if (u != checking) check_user(u);
      }, 100);

      util.input_tip();
    },
    auto: function(){
      user_action.init(
        $("#login #log_form").length? "#log_form": ($('#login_form').length? "#login_form": "#nolog"),
        $("#login #log_div").length? "#log_div": "#logined",
        function(form, logined){
          if ( ! form.attr('data-source')) form.css({position:"relative"}).find('input[type="submit"]').val(' ');
          if (form.attr('id') == 'log_form') {
            form.html('<label class="log_user"><span>用户名：</span><input type="text" name="username" class="input_user" disabled="disabled" value="加载中..."/></label><label class="log_password"><span>密　码：</span><input type="password" name="password" class="input_pwd" disabled="disabled"/></label><label id="code_label"><span>验证码：</span><input type="text" name="code" class="input_code" size="6" autocomplete="off"/> <img width="66" height="20" title="点击换下一个"/></label><input type="submit" class="btn_login" value="登录" disabled="disabled"/>');
            logined.html('<p class="log_username">您好，<strong class="username"></strong> <a class="btn_logout">退出</a></p><p class="log_lgame">最近玩过的游戏：</p><p class="lastgame"></p>');
          }
          if ( ! $("#code_label").is('li,label,.use_class')) $('head').append('<style type="text/css">#code_label{position:absolute;background-color:#FFF;margin:2px auto;padding:5px;width:100%;color:#000}</style>');
        },
        typeof login_callback == 'function'? login_callback: function(user, form, logined){
          user_action.util.set_username(logined.find("#ustr,.username"));
          if (logined.find(".global_logout").length == 0) {
            logined.find('a:contains("退出")').removeAttr('href').addClass('global_logout');
          }
          user_action.util.load_lastgame(logined.find('#lgame,.lastgame'));
          logined.show();
          $('.logined').show();
          $('.nolog').hide();
        },
        function(user, form, logined){
          if (form.attr('id') == 'log_form' && form.parent().attr('id') == 'login') {
            $('.nolog').show();
            $('.logined').hide();
          }
        }
      );
    },
    on: event_on
  };
})(window, document, jQuery);

if (typeof user_action_not_auto == 'undefined') user_action.auto();