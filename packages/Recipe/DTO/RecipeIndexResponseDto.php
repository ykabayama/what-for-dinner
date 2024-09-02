<?php

declare(strict_types=1);

namespace packages\Recipe\DTO;

use Illuminate\Support\Facades\Date;

class RecipeIndexResponseDto
{
    private int $id;

    private string $name;

    private ?string $ingredient;

    private ?string $last_make_date;

    /** @param RecipeIndexTagResponseDto[] $tags  */
    private array $tags = [];

    public function __construct(int $id, string $name, ?string $ingredient, ?string $last_make_date, array $tags)
    {
        $this->id = $id;
        $this->name = $name;
        $this->ingredient = $ingredient;
        $this->last_make_date = $last_make_date;

        if (count($tags) > 0) {
            foreach ($tags as $tag) {
                $this->tags[] = new RecipeIndexTagResponseDto($tag['id'], $tag['name']);
            }
        }
    }

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
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
     * Get the value of last_make_date
     *
     * @return ?string
     */
    public function getLastMakeDate(): ?string
    {
        return $this->last_make_date;
    }

    /**
     * Get the value of tags
     */
    public function getTags(): array
    {
        return $this->tags;
    }
}
