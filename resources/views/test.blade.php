@php
@endphp
<x-layouts-app>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('献立作成') }}
        </h2>
    </x-slot>

    <div class="px-3 md:px-20">
        <div class="m-4">
            <button class="btn btn-block btn-primary">献立作成</button>
        </div>
        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th class="hidden md:table-cell md:text-center"><i class="fa-solid fa-lock fa-lg"></i></th>
                        <th class="hidden md:table-cell">日付</th>
                        <th class="hidden md:table-cell">レシピ名</th>
                        <th class="hidden md:table-cell">タグ</th>
                        <th class="hidden md:table-cell">材料</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr class="hover w-full md:w-max">
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none md:text-center"
                            data-label="ロック 🔑">
                            <input type="checkbox" class="checkbox" />
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none"
                            data-label="日付 📅" data-label="">
                            4月1日(火)
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none"
                            data-label="レシピ 🍛" data-label="">
                            唐揚げ
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] before:text-center md:before:content-none md:max-w-28"
                            data-label="タグ 🏷️" data-label="">
                            <span class="badge badge-accent badge-sm text-white">揚げ物</span>
                            <span class="badge badge-accent badge-sm text-white">揚げ物</span>
                            <span class="badge badge-accent badge-sm text-white">揚げ物</span>
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] md:before:content-none"
                            data-label="材料 🥕">
                            鶏肉、ニンニク、天ぷらこ、油
                        </td>
                    </tr>
                    <!-- row 1 -->
                    <tr class="hover w-full md:w-max">
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] md:before:content-none md:text-center"
                            data-label="ロック 🔑">
                            <input type="checkbox" class="checkbox" />
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] md:before:content-none"
                            data-label="日付 📅" data-label="">
                            4月1日(火)
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] md:before:content-none"
                            data-label="レシピ 🍛" data-label="">
                            唐揚げ
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] md:before:content-none md:max-w-28"
                            data-label="タグ 🏷️" data-label="">
                            <span class="badge badge-accent badge-sm text-white">揚げ物</span>
                            <span class="badge badge-accent badge-sm text-white">揚げ物</span>
                            <span class="badge badge-accent badge-sm text-white">揚げ物</span>
                        </td>
                        <td class="block md:table-cell w-full md:w-max before:inline-block before:w-20 before:content-[attr(data-label)] md:before:content-none"
                            data-label="材料 🥕">
                            鶏肉、ニンニク、天ぷらこ、油
                        </td>
                    </tr>
                    <!-- 未選択 -->
                    <tr class="hover w-full md:w-max">
                        <td class="m-4 p-auto">
                            <div class="text-center">
                                <button class="btn btn-outline btn-primary btn-wide btn-sm">レシピ選択</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts-app>
