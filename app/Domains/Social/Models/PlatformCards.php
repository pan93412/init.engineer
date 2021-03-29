<?php

namespace App\Domains\Social\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PlatformCards.
 */
class PlatformCards extends Model
{
    use SoftDeletes,
        Uuid;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'social_platform_cards';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'platform_type',
        'platform_id',
        'card_id',
        'active',
        'likes',
        'shares',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
        'likes' => 'integer',
        'shares' => 'integer',
    ];
}