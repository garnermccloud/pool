<?php
#################  PID SYSTEM #################
$script_name=__FILE__;
$scripta=explode('/',$script_name);
$script_name=$scripta[count($scripta)-1];
if(empty($script_name)) exit;
$pid112='/var/run/'.$script_name.'.pid';
$pid_exists=file_exists($pid112);
$pid_time=0;
if($pid_exists){
$pid_time=filemtime($pid112);
if(time()-$pid_time>3600){
system("rm -rf $pid112");
}
die("\n\n### RUNNING ### -- PID: $pid112\n\n");
}
system("touch $pid112");
function shut_down(){
global $pid112;
system("rm -rf $pid112");
echo "\n# ShutDown #\n";
}
register_shutdown_function("shut_down");
###############################################

require_once("db.php");



set_time_limit(0);
if(php_sapi_name() !== 'cli') die("This should only be run as cli");

$current=0;
$ticks=0;
while(1){
$max_dl=$pool_config['max_deadline'];
$cache_file="cache/info.txt";

    $f=file_get_contents($pool_config['node_url']."/mine.php?q=info");
    $g=json_decode($f,true);

        $res=array("difficulty"=>$g['data']['difficulty'], "block"=>$g['data']['block'], "height"=>$g['data']['height'], "public_key"=>$pool_config['public_key'], "limit"=>$max_dl);
        $fin=json_encode(array("status"=>"ok", "data"=>$res, "coin"=>"arionum"));
        echo "\n$fin\n";
        file_put_contents($cache_file,$fin);


    sleep(1);


}




?>
