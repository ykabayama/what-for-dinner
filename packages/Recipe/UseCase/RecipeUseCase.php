<?php

declare(strict_types=1);

namespace packages\Recipe\UseCase;

use App\Http\Controllers\Recipe\DTO\RecipeIndexRequestDto;
use App\Http\Controllers\Recipe\DTO\RecipeIndexResponseDto;
use App\Http\Controllers\Recipe\DTO\RecipeIndexResponseDtoList;
use App\Http\Requests\Recipe\RecipeIndexRequest;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use packages\Recipe\Domain\Services\RecipeService;

class RecipeUseCase
{
    private RecipeService $recipe_service;

    private LengthAwarePaginator $paginator;

    private array $recipes = [];

    public function __construct(RecipeService $recipe_service)
    {
        $this->recipe_service = $recipe_service;
    }

    public function list(User $user, RecipeIndexRequest $request): RecipeIndexResponseDtoList
    {
        $per_page = intval(config('app.number_of_recipe_on_list_page'));
        $request_dto = new RecipeIndexRequestDto($request, $user, $per_page);

        $this->paginator = $this->recipe_service->getList($request_dto);

        $this->paginator->each(function (Recipe $recipe) {
            $this->recipes[] = new RecipeIndexResponseDto($recipe->id, $recipe->name, $recipe->ingredient, $recipe->last_make_date, $recipe->tags->toArray());
        });

        $response_list = new RecipeIndexResponseDtoList($this->recipes, $this->paginator, $request_dto);

        return $response_list;
    }
}
