<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

trait UserLog
{
    protected static array $usesSoftDeletesCache = [];

    public function initializeUserLog(): void
    {
        $hidden = [];
        $casts = [];

        if ($this->usesTimestamps()) {
            $hidden = array_merge($hidden, ['created_by', 'created_at', 'updated_by', 'updated_at']);
            $casts = array_merge($casts, [
                'created_by' => 'integer',
                'created_at' => 'datetime',
                'updated_by' => 'integer',
                'updated_at' => 'datetime',
            ]);
        }

        if ($this->usesSoftDeletes()) {
            $hidden = array_merge($hidden, ['deleted_by', 'deleted_at']);
            $casts = array_merge($casts, [
                'deleted_by' => 'integer',
                'deleted_at' => 'datetime',
            ]);
        }

        $this->hidden = array_values(array_unique(array_merge($this->hidden, $hidden)));

        foreach ($casts as $key => $castType) {
            if (!array_key_exists($key, $this->casts)) {
                $this->casts[$key] = $castType;
            }
        }
    }

    protected static function bootUserLog(): void
    {
        static::creating(function ($model) {
            if ($model->usesTimestamps()) {
                $userId = Auth::id();
                $model->created_by = $userId;
                $model->updated_by = $userId;
            }
        });

        static::updating(function ($model) {
            if ($model->usesTimestamps()) {
                $model->updated_by = Auth::id();
            }
        });

        static::deleting(function ($model) {
            if (!$model->usesSoftDeletes() || $model->isForceDeleting()) {
                return;
            }

            $model->deleted_by = Auth::id();
            $model->saveQuietly();
        });

        static::restoring(function ($model) {
            if ($model->usesSoftDeletes()) {
                $model->deleted_by = null;
                $model->saveQuietly();
            }
        });
    }

    public function usesSoftDeletes(): bool
    {
        $class = static::class;

        if (!array_key_exists($class, self::$usesSoftDeletesCache)) {
            self::$usesSoftDeletesCache[$class] = in_array(SoftDeletes::class, class_uses_recursive($class), true);
        }

        return self::$usesSoftDeletesCache[$class];
    }
}
