<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elf extends Model
{
    /** @use HasFactory<\Database\Factories\ElfFactory> */
    use HasFactory;

    protected $fillable = [
        "name",
        "department",
        "job",
        "toys",
        "profile_picture",
    ];
}
