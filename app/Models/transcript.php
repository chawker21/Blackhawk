<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transcript extends Model
{
    protected $table = 'transcripts';
    protected $casts = ['transcript' => 'array',
    ];
    public static function getTranscript($value)
    {
        return collect($value);
    }

    public static function searcher($request, $query)
    {
        $result = transcript::where('description', 'like', "%$query%")->first();

        return ($result);
    }
}
