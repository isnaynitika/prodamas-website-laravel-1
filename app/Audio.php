<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected $table = "audios";

    protected $fillable = ["gambar_sampul","text_sampul","judul","slug","konten"];

    public function getCreatedAtAttribute() {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}
