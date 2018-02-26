<?php
			$arr=array(
					array("title"			=>"测试",
						  "Description"	    =>"图片消息",
						  "PicUrl"		    =>"https://www.baidu.com/img/bd_logo1.png",
						  "Url"			    =>"http://www.baidu.com"
						  ),

					array("title"			=>"测试",
						  "Description"	    =>"图片消息",
						  "PicUrl"		    =>"https://www.baidu.com/img/bd_logo1.png",
						  "Url"			    =>"http://www.baidu.com"
						  )
				);


			$imgnews="";

			$item="<item>
			<Title><![CDATA[%s]]></Title> 
			<Description><![CDATA[%s]]></Description>
			<PicUrl><![CDATA[%s]]></PicUrl>
			<Url><![CDATA[%s]]></Url>
			</item>";
				
			var_dump($arr[0]["title"]);
			for($i=0;$i<count($arr);$i++){
					$content=sprintf($item,$arr[$i]->title,$arr[$i]->Description,$arr[$i]->PicUrl,$arr[$i]->Url);	
					$imgnews.=$content;
			}
?>