<?php

$databases = array();

$settings['hash_salt'] = 'cHFS17Q_TbGMXfFA5gzzA3Zql_HG0kZHtYDetu2Zjcx1tRcL0X00h71krAMMPkU1H3C--JBMGg';

$settings['update_free_access'] = FALSE;

// $settings['container_yamls'][] = __DIR__ . '/services.yml';

$settings['file_scan_ignore_directories'] = ['node_modules', 'bower_components', 'vendor'];
$databases['default']['default'] = array (
  'database' => 'd8ucms',
  'username' => 'd8ucms',
  'password' => 'd8ucms',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '5432',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\pgsql',
  'driver' => 'pgsql',
);
$settings['install_profile'] = 'minimal';
$config_directories['sync'] = 'sites/default/files/config_73i8uZvLZt0ZwhzHNBn8XPradMSOqpIDK4CnSVSZKKrovEnmhdsR2WNjXUATFLBq15ysOQIBpA/sync';
