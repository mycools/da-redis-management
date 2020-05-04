<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 12/10/2016
 * Time: 21:13
 */

return [
    'plugin' => [
        'dataFile'  => 'data/instances.json',
        'startPort' => 7001,
    ],
    'redis' => [
        'user'      => 'redis',
        'group'     => 'redis',
        'configDir' => '/etc/redis/instances',
        'serviceDir' => '/etc/systemd/system',
        'dataDir'   => '/var/lib/redis',
    ],
];