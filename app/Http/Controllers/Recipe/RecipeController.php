<?php

declare(strict_types=1);

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Recipe\DTO\RecipeIndexRequestDto;
use App\Http\Requests\Recipe\RecipeIndexRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use packages\Recipe\UseCase\RecipeUseCase;

class RecipeController extends Controller
{
    private RecipeUseCase $recipe_use_case;

    public function __construct(RecipeUseCase $recipe_use_case)
    {
        $this->recipe_use_case = $recipe_use_case;
    }

    public function index(RecipeIndexRequest $request): View
    {
        $user = Auth::user();
        $request->flash();

        $request_dto = new RecipeIndexRequestDto($request, $user);

        $response_dto = $this->recipe_use_case->list($request_dto);

        return view('recipes.index', [
            'response_dto' => $response_dto,
        ]);
    }
}
