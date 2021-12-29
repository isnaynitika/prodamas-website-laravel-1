<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Article extends Model
{
    protected $table = "articles";

    protected $fillable = ["status","kategori","gambar_sampul","text_sampul","judul","slug","article","picture"];

    public function getCreatedAtAttribute() {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }

}
