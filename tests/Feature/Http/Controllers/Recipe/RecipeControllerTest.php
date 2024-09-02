<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Controllers\Recipe;

use App\Models\Recipe;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use packages\Recipe\DTO\RecipeIndexResponseDtoList;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class RecipeControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function ログインしていない場合_レスポンスステータスがリダイレクトで返る(): void
    {
        $response = $this->get(route('recipes'));

        $response->assertStatus(302);
    }

    #[Test]
    public function ログインしていない場合_ログインページへリダイレクトする(): void
    {
        $response = $this->get(route('recipes'));

        $response->assertStatus(302)->assertRedirect(route('login'));
    }

    #[Test]
    public function レスポンスステータスが成功で返るか(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('recipes'));

        $response->assertStatus(200);
    }

    /**
     * 画面描写
     */
    #[Test]
    public function レシピ一覧と表示されているか(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('recipes'));

        $response->assertSee('レシピ一覧');
    }

    #[Test]
    public function search_料理名_材料_タグと表示されているか(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('recipes'));

        $response->assertSee('レシピ一覧');
        $response->assertSeeInOrder(['Search', '料理名', '材料', 'タグ']);
    }

    #[Test]
    public function 一覧表示確認(): void
    {
        $user = User::factory()->create();
        $tag = Tag::factory()->create([
            'user_id' => $user->id,
            'name' => '父',
        ]);
        $recipe = Recipe::factory()->create([
            'user_id' => $user->id,
            'last_make_date' => Carbon::now(),
        ]);
        $recipe->tags()->attach(['tag_id' => $tag->id]);

        $response = $this->actingAs($user)->get(route('recipes'));

        $response->assertSee('レシピ一覧');
        $response->assertSeeInOrder([$tag->name, $recipe->name, $recipe->last_make_date->format('Y-m-d'), $recipe->ingredient]);
    }

    #[Test]
    public function 一覧表示確認_レシピに紐づくタグが空の場合は特定の文言が表示される(): void
    {
        $user = User::factory()->create();
        $recipe = Recipe::factory()->create([
            'user_id' => $user->id,
            'last_make_date' => null,
        ]);

        $response = $this->actingAs($user)->get(route('recipes'));

        $response->assertSee('レシピ一覧');
        $response->assertSeeInOrder(['タグなし', $recipe->name, '未作成', $recipe->ingredient]);
    }

    #[Test]
    public function 一覧表示確認_作成日が空の場合は特定の文言が表示される(): void
    {

        $user = User::factory()->create();
        $tag = Tag::factory()->create([
            'user_id' => $user->id,
            'name' => '父',
        ]);
        $recipe = Recipe::factory()->create([
            'user_id' => $user->id,
            'last_make_date' => null,
        ]);
        $recipe->tags()->attach(['tag_id' => $tag->id]);

        $response = $this->actingAs($user)->get(route('recipes'));

        $response->assertSee('レシピ一覧');
        $response->assertSeeInOrder([$tag->name, $recipe->name, '未作成', $recipe->ingredient]);
    }

    #[Test]
    public function 一覧表示確認_特定の件数以下の場合_すべて表示される(): void
    {
        /** @var int $per_page 一覧ページの表示件数 */
        $per_page = intval(config('app.number_of_recipe_on_list_page'));

        $user = User::factory()->create();
        $recipe = Recipe::factory($per_page)->create([
            'user_id' => $user->id,
            'last_make_date' => null,
        ]);

        $response = $this->actingAs($user)->get(route('recipes'));

        $response->assertSee('レシピ一覧');
        $response->assertViewHas('response_dto', function (RecipeIndexResponseDtoList $response_dto) use ($per_page) {
            return count($response_dto->getRecipes()) === $per_page;
        });
    }

    #[Test]
    public function 一覧表示確認_デフォルトソートが作成日順になっていること(): void
    {
        /** @var int $per_page 一覧ページの表示件数 */
        $per_page = intval(config('app.number_of_recipe_on_list_page'));

        $user = User::factory()->create();
        $recipes = Recipe::factory($per_page)->create([
            'user_id' => $user->id,
            'last_make_date' => null,
        ]);
        $recipe_name_list = $recipes->sortBy([['created_at', 'asc'], ['id', 'asc']])->pluck('name')->toArray();

        $response = $this->actingAs($user)->get(route('recipes'));

        $response->assertSee('レシピ一覧');
        $response->assertSeeTextInOrder($recipe_name_list);
    }

    #[Test]
    public function 一覧表示確認_最近作っていない順を指定した場合_最後に作った日の昇順になっていること(): void
    {
        /** @var int $per_page 一覧ページの表示件数 */
        $per_page = intval(config('app.number_of_recipe_on_list_page'));

        $user = User::factory()->create();
        $recipes = Recipe::factory($per_page)->create([
            'user_id' => $user->id,
        ]);
        $recipe_name_list = $recipes->sortBy([['last_make_date', 'asc'], ['id', 'asc']])->pluck('name')->toArray();

        $response = $this->actingAs($user)->get(route('recipes', ['sort' => 'last_make_date']));

        $response->assertSee('レシピ一覧');
        $response->assertSeeTextInOrder($recipe_name_list);
    }

    #[Test]
    public function 一覧表示_検索機能_料理名_合致する場合(): void
    {
        $user = User::factory()->create();
        $recipe_name = '唐揚げカレー';
        $recipe = Recipe::factory()->create([
            'user_id' => $user->id,
            'name' => $recipe_name,
        ]);

        $response = $this->actingAs($user)->get(route('recipes', ['recipe_name' => '唐揚げ']));

        $response->assertSee('レシピ一覧');
        $response->assertSee($recipe_name);
    }

    #[Test]
    public function 一覧表示_検索機能_料理名_1件も合致しない場合(): void
    {
        $user = User::factory()->create();
        $recipe_name = '唐揚げカレー';
        $recipe = Recipe::factory()->create([
            'user_id' => $user->id,
            'name' => $recipe_name,
        ]);

        $response = $this->actingAs($user)->get(route('recipes', ['recipe_name' => 'シチュー']));

        $response->assertSee('レシピ一覧');
        $response->assertSee('レシピが見つかりませんでした。');
    }
}
