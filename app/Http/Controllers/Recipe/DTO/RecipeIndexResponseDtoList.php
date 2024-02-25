<?php

declare(strict_types=1);

namespace App\Http\Controllers\Recipe\DTO;

use Illuminate\Pagination\LengthAwarePaginator;

class RecipeIndexResponseDtoList
{
    private array $recipes;

    private LengthAwarePaginator $paginator;

    private bool $exists_search_word;

    public function __construct(array $recipes, LengthAwarePaginator $paginator, RecipeIndexRequestDto $request_dto)
    {
        $this->recipes = $recipes;
        $this->paginator = $paginator;
        $this->exists_search_word = $this->existsSearchWord($request_dto);
    }

    private function existsSearchWord(RecipeIndexRequestDto $request_dto): bool
    {
        return boolval($request_dto->getName() ?? $request_dto->getIngredient() ?? $request_dto->getTag() ?? null);
    }

    public function getRecipes(): array
    {
        return $this->recipes;
    }

    public function getPaginator(): LengthAwarePaginator
    {
        return $this->paginator;
    }

    /**
     * Get the value of exists_search_word
     */
    public function getExistsSearchWord(): bool
    {
        return $this->exists_search_word;
    }
}
