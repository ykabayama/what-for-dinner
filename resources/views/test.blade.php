@php
@endphp
<x-layouts-app>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('献立作成') }}
        </h2>
    </x-slot>

    <div class="px-3 md:px-20">
        <div class="mx-4 my-6">
            <input class="input input-bordered min-w-40" type="date" name="date" id="date" min="2020-01-01"
                max="3210-12-31">
            <sapn class="mx-3">から</sapn>
            <input class="input input-bordered" type="number" name="number" id="number" min="1"
                max="7">
            <sapn class="">日分</sapn>
        </div>
        <div class="m-4 flex justify-between">
            <button class="flex-auto md:max-w-56 btn btn-primary mx-1">献立生成</button>
            <button class="md:w-56 btn btn-accent mx-1">献立決定</button>
        </div>
        <div class="overflow-x-auto border-double border-y-2 border-black">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th class="hidden md:table-cell">日付</th>
                        <th class="hidden md:table-cell">レシピ名</th>
                        <th class="hidden md:table-cell">タグ</th>
                        <th class="hidden md:table-cell">材料</th>
                        <th class="hidden md:table-cell md:text-center">変更</i></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr class="hover w-full md:w-max">
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none"
                            data-label="日付 📅">
                            4月1日(火)
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none"
                            data-label="レシピ 🍛">
                            唐揚げ
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none md:max-w-28"
                            data-label="タグ 🏷️">
                            <span class="badge badge-accent badge-sm text-white">揚げ物</span>
                            <span class="badge badge-accent badge-sm text-white">揚げ物</span>
                            <span class="badge badge-accent badge-sm text-white">揚げ物</span>
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none"
                            data-label="材料 🥕">
                            鶏肉、ニンニク、天ぷらこ、油
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none md:text-center"
                            data-label="変更 🔁">
                            <button class="btn btn-sm btn-outline btn-secondary mr-3">レシピ変更</button>
                            <button class="btn btn-sm btn-outline btn-error">削除</button>
                        </td>
                    </tr>
                    <!-- row 1 -->
                    <tr class="hover w-full md:w-max">
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none"
                            data-label="日付 📅">
                            4月1日(火)
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none"
                            data-label="レシピ 🍛">
                            唐揚げ
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none md:max-w-28"
                            data-label="タグ 🏷️">
                            <span class="badge badge-accent badge-sm text-white">揚げ物</span>
                            <span class="badge badge-accent badge-sm text-white">揚げ物</span>
                            <span class="badge badge-accent badge-sm text-white">揚げ物</span>
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none"
                            data-label="材料 🥕">
                            鶏肉、ニンニク、天ぷらこ、油
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none md:text-center"
                            data-label="変更 🔁">
                            <button class="btn btn-sm btn-outline btn-secondary mr-3">レシピ変更</button>
                            <button class="btn btn-sm btn-outline btn-error">削除</button>
                        </td>
                    </tr>
                    <!-- 未選択 -->
                    <tr class="hover w-full md:w-max">
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none"
                            data-label="日付 📅">
                            4月1日(火)
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none"
                            data-label="レシピ 🍛">
                            <span>レシピ未選択</span>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none md:text-center"
                            data-label="変更 🔁">
                            <button class="btn btn-sm btn-outline btn-secondary mr-3">レシピ選択</button>
                        </td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="m-4 flex justify-between py-2">
            <button class="md:w-56 btn btn-primary mx-1">献立生成</button>
            <button class="flex-auto md:max-w-56 btn btn-accent mx-1">献立決定</button>
        </div>
    </div>
</x-layouts-app>
