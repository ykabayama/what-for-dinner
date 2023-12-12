{{-- @props(['ingredients' => collect([['name' => '']]), 'width' => 'w-full']) --}}
@props([
    'recipe' => [
        'name' => '',
        'ingredients' => collect([['name' => '']]),
    ],
    'width' => 'w-full md:w-3/5',
    'dateType' => '',
    'date' => null,
])
<div {{ $attributes->merge(['class' => 'card' . ' ' . $width . ' ' . 'bg-neutral shadow-xl']) }}>
    <div class="card-body">
        <h2 class="card-title">{{ $recipe['name'] }}</h2>
        @isset($date)
            <h3 class="text-sm">{{ $dateType }}：{{ $date }}</h3>
        @endisset
        <ul>
            @foreach ($recipe['ingredients'] as $ingredient)
                <li>{{ $ingredient['name'] }}</li>
            @endforeach
        </ul>
        <div class="card-actions justify-end">
            <button class="btn btn-primary text-base" onclick="location.href='/'">
                <i class="fa-solid fa-circle-info"></i>
                詳細
            </button>
        </div>
    </div>
</div>
