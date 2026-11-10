<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'nim', 'tanggal', 'mata_kuliah', 'jam_masuk', 'status', 'keterangan'])]


class dashboard extends Model
{
    /** @use HasFactory<\Database\Factories\DashboardFactory> */
    use HasFactory;
}
