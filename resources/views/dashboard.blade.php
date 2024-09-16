@php
    // TODO 実装時削除
    $recipe = [
        'name' => '唐揚げ',
        'ingredient' => '材料1
        材料2
        材料3',
        'tags' => collect([['name' => '夏'], ['name' => '鍋'], ['name' => '子供']]),
    ];
@endphp
<x-layouts-app>
    <x-slot name="header">
        <h2 class="text-xl font-bold leading-tight text-gray-800">
            <i class="fa-solid fa-utensils"></i>
            {{ __('今日の夕食は？') }}
        </h2>
    </x-slot>

    <div class="px-3 md:px-20">
        <div>
            <div
                class="mx-0 mb-3 mt-10 text-center text-2xl max-md:sticky max-md:top-16 max-md:z-10 max-md:rounded max-md:bg-white max-md:shadow">
                今日の料理
            </div>
            <div class="mb-5 flex justify-center">
                {{-- <x-recipe-card :$recipe /> --}}
            </div>
        </div>

        <div>
            <div
                class="mx-0 mb-3 mt-10 text-center text-2xl max-md:sticky max-md:top-16 max-md:z-10 max-md:rounded max-md:bg-white max-md:shadow">
                献立
            </div>
            <div class="mb-5 flex flex-col justify-center max-md:space-y-4 md:flex-row md:space-x-4">
                {{-- <x-recipe-card :$recipe width="flex-auto" dateType="料理予定日" date="12月3日(水)" />
                <x-recipe-card :$recipe width="flex-auto" dateType="料理予定日" date="12月3日(水)" />
                <x-recipe-card :$recipe width="flex-auto" dateType="料理予定日" date="12月3日(水)" />
                <x-recipe-card :$recipe width="flex-auto" dateType="料理予定日" date="12月3日(水)" /> --}}
            </div>
            <div class="mb-5">
                <button type="button" class="btn btn-neutral w-full">
                    <i class="fa-solid fa-repeat"></i>
                    献立を再生成
                </button>
            </div>
        </div>

        <div>
            <div
                class="mx-0 mb-3 mt-10 text-center text-2xl max-md:sticky max-md:top-16 max-md:z-10 max-md:rounded max-md:bg-white max-md:shadow">
                最近作っていないレシピ
            </div>
            <div class="mb-5 flex flex-col justify-center max-md:space-y-4 md:flex-row md:space-x-4">
                {{-- <x-recipe-card :$recipe width="flex-auto" dateType="前回作成日" date="12月3日(水)" />
                <x-recipe-card :$recipe width="flex-auto" dateType="前回作成日" date="12月3日(水)" />
                <x-recipe-card :$recipe width="flex-auto" dateType="前回作成日" date="12月3日(水)" />
                <x-recipe-card :$recipe width="flex-auto" dateType="前回作成日" date="12月3日(水)" /> --}}
            </div>
            <div class="mb-5">
                <button type="button" class="btn btn-neutral w-full">
                    <i class="fa-solid fa-plus"></i>
                    新しいレシピの登録
                </button>
            </div>
        </div>
    </div>
</x-layouts-app>
