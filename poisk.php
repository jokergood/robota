<?php
function tru_krapku ($fife,$poisk){
if($poisk >= strlen($fife)){
echo "Вы хотите обрезать больше чем сам файл!!!";
}else{
if(" " ==  substr($fife,$poisk,1)){
echo substr($fife,0,$poisk) ."...";
} else {
			while(" " != substr($fife,$poisk,1)){
			$poisk--;
			}
			echo substr($fife,0,$poisk)."...";
		}
}		
}


$fife = "sdfkjrhcljsd dfgklrjtvosd sdkfomlckf sdlfklsgf ghfghfghfhfghnhgkujk";

tru_krapku ($fife,145);

?>