<?php

// Pastikan direktori view compiler & cache di /tmp tersedia untuk lingkungan serverless Vercel
$tmpDirs = [
    '/tmp/views',
    '/tmp/cache',
    '/tmp/sessions',
];
foreach ($tmpDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Forward Vercel request ke Laravel public/index.php
require __DIR__ . '/../public/index.php';
