<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusArtikel extends Model
{
    //use HasFactory;

    protected $fillable = [
        'status',
    ];

    public function user()
    {

        return $this->hasMany(Article::class);
    }}
