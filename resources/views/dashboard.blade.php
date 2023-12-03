<x-layouts-app>
    <x-slot name="header">
        <h2 class="text-xl font-bold leading-tight text-gray-800 dark:text-gray-200">
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
                <div class="card w-full bg-base-100 shadow-xl md:w-2/5">
                    <div class="card-body">
                        <h2 class="card-title">唐揚げ</h2>
                        <ul>
                            <li>1つめの材料</li>
                            <li>2つめの材料</li>
                            <li>3つめの材料</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">
                                <i class="fa-solid fa-circle-info"></i>
                                詳細
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div
                class="mx-0 mb-3 mt-10 text-center text-2xl max-md:sticky max-md:top-16 max-md:z-10 max-md:rounded max-md:bg-white max-md:shadow">
                献立
            </div>
            <div class="mb-5 flex flex-col justify-center max-md:space-y-4 md:flex-row md:space-x-4">
                <div class="card flex-auto bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">唐揚げ</h2>
                        <h3 class="text-sm">料理予定日：12月3日(水)</h3>
                        <ul>
                            <li>1つめの材料</li>
                            <li>2つめの材料</li>
                            <li>3つめの材料</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">
                                <i class="fa-solid fa-circle-info"></i>
                                詳細
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card flex-auto bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">唐揚げ</h2>
                        <h3 class="text-sm">料理予定日：12月3日(水)</h3>
                        <ul>
                            <li>1つめの材料</li>
                            <li>2つめの材料</li>
                            <li>3つめの材料</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">
                                <i class="fa-solid fa-circle-info"></i>
                                詳細
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card flex-auto bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">唐揚げ</h2>
                        <h3 class="text-sm">料理予定日：12月3日(水)</h3>
                        <ul>
                            <li>1つめの材料</li>
                            <li>2つめの材料</li>
                            <li>3つめの材料</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">
                                <i class="fa-solid fa-circle-info"></i>
                                詳細
                            </button>
                        </div>
                    </div>
                </div>
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
                <div class="card flex-auto bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">唐揚げ</h2>
                        <h3 class="text-sm">前回作成日：12月3日(水)</h3>
                        <ul>
                            <li>1つめの材料</li>
                            <li>2つめの材料</li>
                            <li>3つめの材料</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">
                                <i class="fa-solid fa-circle-info"></i>
                                詳細
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card flex-auto bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">唐揚げ</h2>
                        <h3 class="text-sm">前回作成日：12月3日(水)</h3>
                        <ul>
                            <li>1つめの材料</li>
                            <li>2つめの材料</li>
                            <li>3つめの材料</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">
                                <i class="fa-solid fa-circle-info"></i>
                                詳細
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card flex-auto bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">唐揚げ</h2>
                        <h3 class="text-sm">前回作成日：12月3日(水)</h3>
                        <ul>
                            <li>1つめの材料</li>
                            <li>2つめの材料</li>
                            <li>3つめの材料</li>
                        </ul>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">
                                <i class="fa-solid fa-circle-info"></i>
                                詳細
                            </button>
                        </div>
                    </div>
                </div>
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
