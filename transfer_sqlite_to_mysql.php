<?php

use Illuminate\Support\Facades\DB;

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Koneksi ke SQLite lama
$sqlite = new PDO('sqlite:' . 'C:\Users\Tude Raditya\Herd\laravel11\database\database.sqlite');

// Ambil daftar tabel
$tables = $sqlite->query("SELECT name FROM sqlite_master WHERE type='table' AND name NOT LIKE 'sqlite_%'")
                 ->fetchAll(PDO::FETCH_COLUMN);

foreach ($tables as $table) {
    echo "Transfering table: $table...\n";

    try {
        $rows = $sqlite->query("SELECT * FROM $table")->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($rows)) {
            foreach ($rows as $row) {
                DB::table($table)->insert($row);
            }
        }

        echo "✅ $table selesai.\n";
    } catch (Exception $e) {
        echo "⚠️ Gagal di tabel $table: " . $e->getMessage() . "\n";
    }
}

echo "\n🎉 Semua data berhasil ditransfer ke MySQL!\n";
