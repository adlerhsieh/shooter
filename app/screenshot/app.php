<?php

include "core/config.php";
include "core/urlloader.php";
include "core/page2images.php";

$list = UrlLoader::load("urllist.csv");

if(count($list) > 0 ) { 

	foreach($list as $item)
	{
		echo "Starting with (" . $item['id'] . ") " . $item['url'];
		call_p2i($item); 	
	}
} else {
   echo "urllist.csv檔案中無資料，請確認後再執行\n";
}
