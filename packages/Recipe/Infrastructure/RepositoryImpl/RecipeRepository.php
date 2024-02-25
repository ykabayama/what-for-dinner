<?php

declare(strict_types=1);

namespace packages\Recipe\Infrastructure\RepositoryImpl;

use App\Models\Recipe;
use Illuminate\Pagination\LengthAwarePaginator;
use packages\Recipe\Domain\Repository\RecipeRepositoryInterface;

/**
 * use packages\Recipe\Infrastructure\RepositoryImpl\RecipeRepository;
 */
class RecipeRepository implements RecipeRepositoryInterface
{
    public function getList(int $per_page, int $user_id, ?string $name, ?string $ingredient, ?string $tag, string $orderby, string $direction): LengthAwarePaginator
    {
        $recipes = Recipe::with('tags')
            ->where('user_id', $user_id)
            ->when($name, function ($query) use ($name) {
                return $query->where('name', 'like', '%'.addcslashes($name, '%_\\').'%');
            })
            ->when($ingredient, function ($query) use ($ingredient) {
                return $query->where('ingredient', 'like', '%'.addcslashes($ingredient, '%_\\').'%');
            })
            ->when($tag, function ($query) use ($tag) {
                return $query->whereHas('tags', function ($query) use ($tag) {
                    $query->where('name', 'LIKE', '%'.addcslashes($tag, '%_\\').'%');
                });
            })
            ->orderBy($orderby, $direction)
            ->paginate($per_page);

        return $recipes;
    }
}
