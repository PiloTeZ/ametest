<?php

namespace app\components\historyExportColumns;

use app\models\History;

interface HistoryExportColumnsInterface
{
    public static function date(History $model): string;

    public static function user(History $model): string;

    public static function type(History $model): string;

    public static function event(History $model): string;

    public static function message(History $model): string;
}
