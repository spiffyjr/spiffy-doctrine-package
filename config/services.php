<?php

return [
    // cache
    'doctrine.cache.array' => ['Doctrine\Common\Cache\ArrayCache'],
    'doctrine.cache.file' => ['Doctrine\Common\Cache\FileCache', ['cache/doctrine']],
    'doctrine.cache.filesystem' => ['Doctrine\Common\Cache\FilesystemCache', ['cache/doctrine']]
];
