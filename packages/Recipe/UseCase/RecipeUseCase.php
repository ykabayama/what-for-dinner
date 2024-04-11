<?php

declare(strict_types=1);

namespace packages\Recipe\UseCase;

use App\Http\Controllers\Recipe\DTO\RecipeIndexRequestDto;
use App\Http\Controllers\Recipe\DTO\RecipeIndexResponseDto;
use App\Http\Controllers\Recipe\DTO\RecipeIndexResponseDtoList;
use App\Models\Recipe;
use Illuminate\Pagination\LengthAwarePaginator;
use packages\Recipe\Domain\Services\RecipeService;

class RecipeUseCase
{
    private RecipeService $recipe_service;

    public function __construct(RecipeService $recipe_service)
    {
        $this->recipe_service = $recipe_service;
    }

    public function list(RecipeIndexRequestDto $request_dto): RecipeIndexResponseDtoList
    {
        $per_page = intval(config('app.number_of_recipe_on_list_page'));

        /** @var LengthAwarePaginator $paginator */
        $paginator = $this->recipe_service->getList($request_dto, $per_page);

        /** @var array $recipes */
        $recipes = $paginator->map(function (Recipe $recipe) {
            return new RecipeIndexResponseDto($recipe->id, $recipe->name, $recipe->ingredient, $recipe->last_make_date, $recipe->tags->toArray());
        })->toArray();

        $response_list = new RecipeIndexResponseDtoList($recipes, $paginator, $request_dto);

        return $response_list;
    }
}
