<?php


//浏览器访问的站点目录
define('WEB_SITE', 'http://bbs.skxto9314.com/');
//本地磁盘的文档根目录
define('DOC_ROOT', str_replace('\\','/',dirname(__DIR__)).'/');
//样式表目录
define('CSS_PATH', WEB_SITE.'public/css/');
//图片库目录
define('IMG_PATH', WEB_SITE.'public/img/');
//字体库目录
define('TTF_PATH', DOC_ROOT.'public/fonts/');
//默认时区
define('TIMEZONE', 'PRC');
//调试状态，true表示在调试，false表示上线
define('IS_DEBUG', true);
//站点关闭，true表示关闭，false表示开启
define('IS_CLOSE', false);