<?php
$pool_config['db_connect']="mysql:host=".getenv('POOL_MYSQL_HOST').";dbname=".getenv('MYSQL_DB');
$pool_config['db_user']=getenv('MYSQL_USER');
$pool_config['db_pass']=getenv('MYSQL_PASSWORD');

$pool_config['max_deadline']=getenv('MAX_DEADLINE'); 
$pool_config['node_path']=getenv('NODE_PATH');  // path to where the node is installed
$pool_config['node_url']=getenv('NODE_URL');; // Node's access url
$pool_config['public_key']=getenv('POOL_PUBLIC_KEY');
$pool_config['private_key']=getenv('POOL_PRIVATE_KEY');
$pool_config['address']=getenv('POOL_ADDRESS');
$pool_config['fee_address']=getenv('FEE_ADDRESS');
$pool_config['fee']=getenv('FEE');;   // 0.02 = 2%  |   pool fee
$pool_config['historic_reward']=getenv('HISTORIC_REWARD');; // percentage going to historic shares 1=100%, 0.3=30%, 0=none
$pool_config['current_reward']=getenv('CURRENT_REWARD');; // percentage going to current shares1=100%, 0.3=30%, 0=none
$pool_config['miner_reward']=getenv('MINER_REWARD');; // percentage going to block winner 1=100%, 0.3=30%, 0=none
$pool_config['min_payout']=getenv('MIN_PAYOUT');;
?>
