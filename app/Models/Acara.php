<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;

    protected $table = 'acara';

    protected $fillable = [
        'nama',
        'bulan',
        'tanggal',
    ];

    public static function bulan()
    {
        return [
            'Juli 2021' => 'Juli 2021',
            'Agustus 2021' => 'Agustus 2021',
            'September 2021' => 'September 2021',
            'Oktober 2021' => 'Oktober 2021',
            'November 2021' => 'November 2021',
            'Desember 2021' => 'Desember 2021',
            // 'Januari 2022' => 'Januari 2022',
            // 'Februari 2022' => 'Februari 2022',
            // 'Maret 2022' => 'Maret 2022',
            // 'April 2022' => 'April 2022',
            // 'Mei 2022' => 'Mei 2022',
            // 'Juni 2022' => 'Juni 2022',
        ];
    }
}
