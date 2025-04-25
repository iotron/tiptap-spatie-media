<?php

namespace Iotronlab\TiptapSpatieMedia\Trait;

use Iotronlab\TiptapSpatieMedia\TiptapSpatieMedia;
use Illuminate\Database\Eloquent\Model;

trait HasTipTapMedia
{
    protected static function bootHasTipTapMedia()
    {
        static::created(function ($record) {
            $columns = self::detectTipTapMediaColumns($record);
            if (!empty($columns)) {
                TiptapSpatieMedia::OnCreated($record, $columns);
            }
        });

        static::saved(function ($record) {
            $columns = self::detectTipTapMediaColumns($record);
            if (!empty($columns)) {
                TiptapSpatieMedia::OnSaved($record, $columns);
            }
        });
    }

    protected static function detectTipTapMediaColumns(Model $record): array
    {
        $columns = [];
        foreach ($record->getAttributes() as $column => $value) {
            if (is_string($value) && (str_contains($value, '<img') || str_contains($value, 'media:'))) {
                $columns[] = $column;
            }
        }
        return $columns;
    }
}
