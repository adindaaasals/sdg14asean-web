<?php

// Set LD_LIBRARY_PATH untuk memastikan pustaka yang diperlukan dapat ditemukan
putenv("LD_LIBRARY_PATH=" . __DIR__ . "/lib");
echo getenv("LD_LIBRARY_PATH");

// Memuat aplikasi utama
require __DIR__ . '/../public/index.php';
