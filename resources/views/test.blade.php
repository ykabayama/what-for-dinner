@php
    $recipe = [
        'name' => '唐揚げ',
        'ingredients' => collect([['name' => '1つ目の材料'], ['name' => '2つ目の材料'], ['name' => '3つ目の材料']]),
        'tags' => collect([['name' => '夏'], ['name' => '鍋'], ['name' => '子供']]),
    ];
@endphp
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
                <details class="collapse bg-base-100">
                    <summary class="collapse-title font-medium">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Search
                    </summary>
                    <div class="collapse-content">
                        <form action="#" method="post">
                            <label class="form-control w-full my-3">
                                <div class="label">
                                    <span class="label-text">料理名 <i class="fa-solid fa-stroopwafel"></i></span>
                                </div>
                                <input type="text" placeholder="料理名を入力"
                                    class="input input-bordered w-full text-sm" />
                            </label>
                            <label class="form-control w-full my-3">
                                <div class="label">
                                    <span class="label-text">材料 <i class="fa-solid fa-carrot"></i></span>
                                </div>
                                <input type="text" placeholder="材料を入力(','又は'、'で複数入力できます)"
                                    class="input input-bordered w-full text-sm" />
                            </label>
                            <label class="form-control w-full my-3">
                                <div class="label">
                                    <span class="label-text">タグ <i class="fa-solid fa-tag"></i></span>

                                </div>
                                <input type="text" placeholder="タグを入力(','又は'、'で複数入力できます)"
                                    class="input input-bordered w-full text-sm" />
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
                    <select class="select select-bordered w-full max-w-xs my-4">
                        <option selected>登録順</option>
                        <option>最近作っていない順</option>
                    </select>
                </div>
                {{-- ページネーション --}}
                <div class="md:w-96 mx-4 flex flex-wrap content-center md:justify-end">
                    <button class="join-item btn">
                        <i class="fa-solid fa-caret-left"></i>
                    </button>
                    <div class="join">
                        <button class="join-item btn">1</button>
                        <button class="join-item btn">2</button>
                        <button class="join-item btn btn-disabled">...</button>
                        <button class="join-item btn">99</button>
                        <button class="join-item btn">100</button>
                    </div>
                    <button class="join-item btn">
                        <i class="fa-solid fa-caret-right"></i>
                    </button>
                </div>
            </div>
            {{-- レシピ --}}
            <div class="mb-5 flex flex-col flex-wrap justify-center md:flex-row">
                <x-recipe-card :$recipe width="max-md:flex-auto md:w-80 mx-4" dateType="前回作成日" date="12月3日(水)"
                    class="my-2" />
                <x-recipe-card :$recipe width="max-md:flex-auto md:w-80 mx-4" dateType="前回作成日" date="12月3日(水)"
                    class="my-2" />
                <x-recipe-card :$recipe width="max-md:flex-auto md:w-80 mx-4" dateType="前回作成日" date="12月3日(水)"
                    class="my-2" />
                <x-recipe-card :$recipe width="max-md:flex-auto md:w-80 mx-4" dateType="前回作成日" date="12月3日(水)"
                    class="my-2" />
                <x-recipe-card :$recipe width="max-md:flex-auto md:w-80 mx-4" dateType="前回作成日" date="12月3日(水)"
                    class="my-2" />
                <x-recipe-card :$recipe width="max-md:flex-auto md:w-80 mx-4" dateType="前回作成日" date="12月3日(水)"
                    class="my-2" />
            </div>

            {{-- ページネーション --}}
            <div class="flex justify-center my-5">
                <div>
                    <button class="join-item btn">
                        <i class="fa-solid fa-caret-left"></i>
                    </button>
                </div>
                <div>
                    <div class="join">
                        <button class="join-item btn">1</button>
                        <button class="join-item btn">2</button>
                        <button class="join-item btn btn-disabled">...</button>
                        <button class="join-item btn">99</button>
                        <button class="join-item btn">100</button>
                    </div>
                </div>
                <div>
                    <button class="join-item btn">
                        <i class="fa-solid fa-caret-right"></i>
                    </button>
                </div>
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
