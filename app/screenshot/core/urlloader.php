<?php

class UrlLoader 
{

  static protected $urls; 

  static public function load($path)   
	{
		if(!file_exists($path))
		{
      echo "開啟檔案有問題\n";		
		} else {
     $file = fopen($path,"r");

		 while(!feof($file))
		 {
       $line = fgets($file);

			 if (false === $line) { 
				 break;
			 } else {
		 	   $urlarray = explode(",",$line); 
        	UrlLoader::$urls[] = array(
			    "id" => $urlarray[0],	
			    "url" => $urlarray[1],	
				);
			 }

		 }
      fclose($file);
     return UrlLoader::$urls;	
		}
	}

}
