<?php

namespace Currency\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Currency extends Model
{
    use HasTranslations;
    
    protected $table = 'currencies';

    protected $fillable = [
        'title',
        'iso',
        'code',
        'symbol',
        'status',
        'default',
    ];

    protected $translatable = [
        'title',
    ];

}
