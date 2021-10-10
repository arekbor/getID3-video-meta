<?php
require 'getID3-master/getid3/getid3.php';

$getID3 = new getID3;
$result = array();
$index=0;
$dir = 'videos/'; #folder z plikami wideo

$files = scandir($dir);
foreach($files as $file) {
    if(!in_array($file, array(".", ".."))){
        $index++;
        $analyze = $getID3->analyze($dir.'/'.$file);
        $result[$index] = array(
            "bitrate"=>$analyze['bitrate'],
            "fileformat"=>$analyze['fileformat'],
            "filename"=>$analyze['filename'],
            "filenamepath"=>$analyze['filenamepath'],
            "filepath"=>$analyze['filepath'],
            "filesize"=>$analyze['filesize'],
            "mime_type"=>$analyze['mime_type'],
            "playtime_seconds"=>$analyze['playtime_seconds'],
            "playtime_string"=>$analyze['playtime_string']
        );
    }
}
echo json_encode($result);