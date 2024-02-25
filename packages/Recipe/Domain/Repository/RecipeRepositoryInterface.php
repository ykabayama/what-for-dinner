<?php

declare(strict_types=1);

namespace packages\Recipe\Domain\Repository;

use Illuminate\Pagination\LengthAwarePaginator;

interface RecipeRepositoryInterface
{
    public function getList(int $per_page, int $user_id, ?string $name, ?string $ingredient, ?string $tag, string $orderby, string $direction): LengthAwarePaginator;
}
