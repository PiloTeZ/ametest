<?php

namespace app\components\historyExportColumns;

use app\models\History;

/**
 * Класс для примера. Не используется, так как не нужно на данный момент
 */
class HistoryExportColumnsTask extends HistoryExportColumnsDefault
{
    public static function message(History $model): string
    {
        return 'Какое-то свое содержимое для ячейки "Текст"';
    }
}
