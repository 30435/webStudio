<?php
$filepath = 'e:/tmp/pic/2012092691310.jpg';
$out=file_get_contents($filepath); //filepath 图片地址
$submiturl = 'http://passport.ci.com/newapi';
$a=submitavatar($submiturl,  0, $out,  '',  FALSE,  '', 3600, TRUE);//submiturl：提交的地址

//向推博通行证上传头像
function submitavatar($url, $limit = 0, $post = '', $cookie = '', $bysocket = FALSE, $ip = '', $timeout = 15, $block = TRUE) {
    $return = '';
    $matches = parse_url($url);
    !isset($matches['host']) && $matches['host'] = '';
    !isset($matches['path']) && $matches['path'] = '';
    !isset($matches['query']) && $matches['query'] = '';
    !isset($matches['port']) && $matches['port'] = '';
    $host = $matches['host'];
    $path = $matches['path'] ? $matches['path'].($matches['query'] ? '?'.$matches['query'] : '') : '/';
    $port = !empty($matches['port']) ? $matches['port'] : 80;

    if($post) {
        $out = "POST $path?extName=test HTTP/1.0\r\n";
        $out .= "Accept: image/jpeg, application/x-ms-application, image/gif, application/xaml+xml, image/pjpeg, application/x-ms-xbap, application/vnd.ms-excel, application/vnd.ms-powerpoint, application/msword, */*\r\n";
        //$out .= "Referer: $boardurl\r\n";
        //$out .= "Accept-Language: zh-cn\r\n";
        //$out .= "Content-Type: application/x-www-form-urlencoded\r\n";
        //$out .= "User-Agent: $_SERVER[HTTP_USER_AGENT]\r\n";
        $out .= "Host: $host\r\n";
        $out .= 'Content-Length: '.strlen($post)."\r\n";
        $out .= "Connection: Close\r\n";
        $out .= "Cache-Control: no-cache\r\n";
        $out .= "Cookie: $cookie\r\n\r\n";
		//echo $out;
        $out .= $post;
    } else {
        $out = "GET $path HTTP/1.0\r\n";
        $out .= "Accept: */*\r\n";
        //$out .= "Referer: $boardurl\r\n";
        $out .= "Accept-Language: zh-cn\r\n";
        $out .= "User-Agent: $_SERVER[HTTP_USER_AGENT]\r\n";
        $out .= "Host: $host\r\n";
        $out .= "Connection: Close\r\n";
        $out .= "Cookie: $cookie\r\n\r\n";
    }
	//echo $out;
	//echo $ip . '--' . $host . '--' . $port . '--'; 
    $fp = @fsockopen(($ip ? $ip : $host), $port, $errno, $errstr, $timeout);
	//var_dump($fp);
    if(!$fp) {
		//echo 'iiii';
        return '';//note $errstr : $errno \r\n
    } else {
		//echo 'aaa';
        stream_set_blocking($fp, $block);
        stream_set_timeout($fp, $timeout);
        @fwrite($fp, $out);
        $status = stream_get_meta_data($fp);
		//var_dump($status);
        if(!$status['timed_out']) {
            while (!feof($fp)) {
                if(($header = @fgets($fp)) && ($header == "\r\n" ||  $header == "\n")) {
                    break;
                }
            }

            $stop = false;
            while(!feof($fp) && !$stop) {
                $data = fread($fp, ($limit == 0 || $limit > 8192 ? 8192 : $limit));
                $return .= $data;
                if($limit) {
                    $limit -= strlen($data);
                    $stop = $limit <= 0;
                }
            }
        }
        @fclose($fp);
		var_dump($return);
        return $return;
    }
}

