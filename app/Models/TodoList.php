<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TodoList extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;


    protected $fillable = [
        'title',
        'description',

    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                do {
                    $id = self::generateCustomId();
                } while (self::where('id', $id)->exists());
                $model->id = $id;
                Log::info('Generated ID: ' . $model->id);
            }
        });

    }

    /**
     * Generate a custom ID for the model.
     *
     * @return string
     */
    public static function generateCustomId()
    {
        $prefix = 'TDL';
        $uniqueId = Str::upper(Str::random(5));
        return $prefix . $uniqueId;
    }
}
