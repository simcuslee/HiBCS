HiBCS
=====

#### 特别提示：本代码至少需百度应用引擎(BAE)中的百度云存储(BCS)支持

Licensed under the Apache License v2.0
--------------------------------------
http://www.apache.org/licenses/LICENSE-2.0

安装
----

`config.php` 填写BAE数据库名称<br />
通过平台提供的phpMyAdmin访问<br />
导入`baefile.sql`或使用`install.php`<br />
不支持URL Rewrite请自行将`no-rewrite-index.php`重命名<br />
只有`index.php`有写css样式表<br />
本地或其它空间大文件上传，修改`php.ini`配置例如:<br />

    post_max_size = 320M
    upload_max_filesize = 320M
    max_execution_time = 300
    max_input_time = 600
    memory_limit = 512M

#####欢迎批评指正 [Hi kooker](http://blog.kooker.jp/)

特别说明：
----------
使用非BAE环境请将`localhost-config.php`重命名为`config.php` 配置数据库及百度云存储相关
* 1、请自行修改`config.php`里的配置
    * ①请将 `$dbname` 改为你的数据库名字<br />
          关于如何查看自己的数据库名，可在BAE后台点击各项菜单，切换到相应的页面查看数据库名。或者在登录BAE的状态下直接打开这个网址：http://developer.baidu.com/bae/bdbs/db
    * ②请在 `$ak` `$sk` 填写你的密匙对。关于查看自己的密匙对【如果没有则请创建】，请在登录BAE的状态下打开
          http://developer.baidu.com/bae/ref/key
* 2、请在BAE后台手动创建一个bucket<br />
        http://developer.baidu.com/bae/bcs/bucket 请注意自行修改`config.php`里的`$bucket`

更新小记
--------
* 2012-11-24
    * 修复上传数据库小BUG
* 2012-11-28 
    * 修正部分问题，增加del.php【此文件有风险，请慎用！】使用时请自行去掉`//require_once 'config.php';`前的双斜杠注释，使用完请删除本文件<br />【删除所有上传到BCS并且记录在数据库的object，此文件不删除数据库记录，请配合force-install.php重装数据库！】
    * config.php无需自己配置URL
* 2012-12-6
    * 增加install.php安装文件，安装完请删除本文件
    * 增加force-install.php【此文件有风险，请慎用！】强制重装文件配合del.php使用，可以删除文件和重装数据，使用完请删除本文件
* 2012-12-12
    * 增加del-list.php 增加删除功能 【此文件有风险，请慎用！】安全起见，请自行重命名
    * 增加del-object.php 删除文件用 【此文件有风险，请慎用！】安全起见，请自行重命名及修改del-list.php中相应链接
    * 不想做用户系统，本来就只是自己用的，没那必要！

附：
----
* nginx的URL Rewrite规则，请将下面规则加入到站点配置中，重启nginx即可

    `rewrite ^/page-([0-9]+)/?$ /index.php?page=$1 last;` <br />
    `rewrite ^/del-list-([0-9]+)$/?$ /del-list.php?page=$1 last; `

#### 免责声明：已限制重复上传时间，防止短时间刷新`bcs.php`重复上传。不对代码的BUG负责！