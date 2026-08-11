<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonSiswa extends Model
{
    use HasFactory;
    
    // Ini biar datanya bisa disimpan dari form
    protected $fillable = ['nama_lengkap', 'nisn', 'asal_sekolah', 'nomor_hp', 'alamat'];
}