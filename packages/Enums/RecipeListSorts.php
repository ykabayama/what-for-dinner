<?php

declare(strict_types=1);

namespace packages\Enums;

enum RecipeListSorts: string
{
    case CREATED_AT = 'created_at';
    case LAST_MAKE_DATE = 'last_make_date';

    /**
     * @return string[] {orderby, direction}
     */
    public function getSort(): array
    {
        return match ($this) {
            self::CREATED_AT => ['created_at', 'asc'],
            self::LAST_MAKE_DATE => ['last_make_date', 'asc'],
        };
    }
}
