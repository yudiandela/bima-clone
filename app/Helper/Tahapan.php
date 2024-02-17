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
}
