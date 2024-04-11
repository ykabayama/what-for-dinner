<?php

declare(strict_types=1);

namespace App\Http\Controllers\Recipe\DTO;

use App\Http\Requests\Recipe\RecipeIndexRequest;
use App\Models\User;
use packages\Enums\RecipeListSorts;

class RecipeIndexRequestDto
{
    private int $user_id;

    private ?string $name;

    private ?string $ingredient;

    private ?string $tag;

    private RecipeListSorts $sort;

    private string $orderby;

    private string $direction;

    public function __construct(RecipeIndexRequest $request, User $user)
    {
        $this->user_id = $user->id;
        $this->name = $request->recipe_name;
        $this->ingredient = $request->ingredient;
        $this->tag = $request->tag;
        $this->sort = RecipeListSorts::tryFrom($request->sort ?? '') ?? RecipeListSorts::CREATED_AT;
        [$this->orderby, $this->direction] = $this->sort->getSort();
    }

    /**
     * Get the value of user_id
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * Get the value of name
     *
     * @return ?string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Get the value of ingredient
     *
     * @return ?string
     */
    public function getIngredient(): ?string
    {
        return $this->ingredient;
    }

    /**
     * Get the value of tag
     *
     * @return ?string
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * Get the value of orderby
     */
    public function getOrderby(): string
    {
        return $this->orderby;
    }

    /**
     * Get the value of direction
     */
    public function getDirection(): string
    {
        return $this->direction;
    }

    /**
     * Get the value of sort
     */
    public function getSort(): RecipeListSorts
    {
        return $this->sort;
    }
}
