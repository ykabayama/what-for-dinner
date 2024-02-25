<?php

declare(strict_types=1);

namespace packages\Recipe\Domain\Services;

use App\Http\Controllers\Recipe\DTO\RecipeIndexRequestDto;
use Illuminate\Pagination\LengthAwarePaginator;
use packages\Recipe\Infrastructure\RepositoryImpl\RecipeRepository;

class RecipeService
{
    private RecipeRepository $recipe_repository;

    public function __construct(RecipeRepository $recipe_repository)
    {
        $this->recipe_repository = $recipe_repository;
    }

    public function getList(RecipeIndexRequestDto $request_dto): LengthAwarePaginator
    {
        $recipes = $this->recipe_repository->getList(
            $request_dto->getPerPage(),
            $request_dto->getUserId(),
            $request_dto->getName(),
            $request_dto->getIngredient(),
            $request_dto->getTag(),
            $request_dto->getOrderby(),
            $request_dto->getDirection()
        );

        return $recipes;
    }
}
