<?php
class Update {
private $updateurl;
private $versionurl;
private $currentversion;

public function __construct($updateurl, $versionurl) {
$this->updateurl = $updateurl;
$this->versionurl = $versionurl;
$this->currentversion = file_get_contents("application/configuration/version.ini");

if (!is_dir('tmp')) {
mkdir('tmp/');
}

}

public function execute($path = './') {
file_put_contents("tmp/tmp.zip", fopen($this->updateurl, 'r'));

$zip = new ZipArchive;
$extractPath = $path;
if($zip->open('tmp/tmp.zip') != "true"){
return false;
} 
/* Extract Zip File */
$zip->extractTo($extractPath);
$zip->close();

return true;
}

public function checkVersion() {
$newversion = file_get_contents($this->versionurl);
if ($this->currentversion != $newversion) {
return true;
}

return false;
}


}
?>
