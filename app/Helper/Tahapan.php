<?php

namespace App\Helper;

class Tahapan
{
    public function __construct()
    {
        //
    }

    public static function get(string $status): string
    {
        return match ($status) {
            'seleksi' => 'Tahapan Seleksi/Usulan',
            'pelaksanaan' => 'Tahapan Pelaksanaan Kegiatan',
            'seleksi-lanjutan' => 'Tahapan Seleksi Lanjutan',
            'pasca-pelaksanaan' => 'Tahapan Pasca Pelaksanaan Kegiatan',
            default => '',
        };
    }

    public static function step(string $status): int
    {
        return match ($status) {
            'seleksi' => 1,
            'pelaksanaan' => 2,
            'seleksi-lanjutan' => 3,
            'pasca-pelaksanaan' => 4,
            default => 0,
        };
    }
}
