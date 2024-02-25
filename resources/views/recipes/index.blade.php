<x-layouts-app>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('レシピ一覧') }}
        </h2>
    </x-slot>

    <div class="px-3 md:px-20">
        <div class="m-5">
            <button type="button" class="btn btn-primary text-base-100 w-full">
                <i class="fa-solid fa-plus"></i>
                新しいレシピの登録
            </button>
        </div>
        <div class="my-6 card w-full shadow-xl bg-base-100">
            <div class="card-body py-1">
                <details class="collapse bg-base-100" @if ($response_dto->getExistsSearchWord()) open @endif>
                    <summary class="collapse-title font-medium">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Search
                    </summary>
                    <div class="collapse-content">
                        <form id="search-form" action="{{ route('recipes') }}" method="GET">
                            <label class="form-control w-full my-3">
                                <div class="label">
                                    <span class="label-text">料理名 <i class="fa-solid fa-stroopwafel"></i></span>
                                </div>
                                <input type="text" name="recipe_name" placeholder="料理名を入力"
                                    value="{{ old('recipe_name') }}" class="input input-bordered w-full text-sm" />
                                @error('recipe_name')
                                    <div class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                            <label class="form-control w-full my-3">
                                <div class="label">
                                    <span class="label-text">材料 <i class="fa-solid fa-carrot"></i></span>
                                </div>
                                <input type="text" name="ingredient" placeholder="材料名を入力"
                                    value="{{ old('ingredient') }}" class="input input-bordered w-full text-sm" />
                                @error('ingredient')
                                    <div class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                            <label class="form-control w-full my-3">
                                <div class="label">
                                    <span class="label-text">タグ <i class="fa-solid fa-tag"></i></span>
                                </div>
                                <input type="text" name="tag" placeholder="タグ名を入力" value="{{ old('tag') }}"
                                    class="input input-bordered w-full text-sm" />
                                @error('tag')
                                    <div class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </div>
                                @enderror
                            </label>
                            <div class="card-actions justify-center mt-7">
                                <button type="submit" class="btn btn-primary w-full">
                                    検索
                                </button>
                            </div>
                        </form>
                    </div>
                </details>
            </div>
        </div>

        <div>
            <div class="flex flex-wrap flex-col justify-center flex-auto md:justify-between md:flex-row content-center">
                {{-- ソート --}}
                <div class="max-md:flex-auto">
                    <select class="select select-bordered w-full max-w-xs my-4" id="recipe-sort" name="sort"
                        form="search-form">
                        <option value="created_at" @if ((old('sort') === 'created_at') | (old('sort') === '')) selected @endif>
                            登録順
                        </option>
                        <option value="last_make_date" @if (old('sort') === 'last_make_date') selected @endif>
                            最近作っていない順
                        </option>
                    </select>
                </div>
                {{-- ページネーション --}}
                @php
                    $response_dto->getPaginator()->appends(request()->query())->links();
                @endphp
                <div class="md:w-96 mx-auto md:mx-4 flex flex-wrap content-center md:justify-end">
                    <x-pagination :paginator="$response_dto->getPaginator()" />
                </div>
            </div>
            {{-- レシピ --}}
            <div class="mb-5 flex flex-col flex-wrap justify-center md:flex-row">
                @if (count($response_dto->getRecipes()) === 0)
                    <p>レシピが見つかりませんでした。</p>
                @endif
                @foreach ($response_dto->getRecipes() as $recipe)
                    <x-recipe-card :name="$recipe->getName()" :ingredient="$recipe->getIngredient()" :tags="$recipe->getTags()" :
                        width="max-md:flex-auto md:w-80 mx-4" date_label="前回作成日"
                        date="{{ $recipe->getLastMakeDate() ?? '未作成' }}" class="my-2" />
                @endforeach
            </div>

            {{-- ページネーション --}}
            <div class="flex justify-center my-5">
                <x-pagination :paginator="$response_dto->getPaginator()" />
            </div>

            <div class="mb-5">
                <button type="button" class="btn btn-primary text-base-100 w-full">
                    <i class="fa-solid fa-plus"></i>
                    新しいレシピの登録
                </button>
            </div>
        </div>
    </div>
</x-layouts-app>

@vite(['resources/js/recipe/index.js'])
