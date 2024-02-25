@props([
    'name' => '', // レシピ名
    'ingredient' => '', // 材料
    'tags' => [], // タグ
    'width' => 'w-full md:w-3/5', // カード幅
    'date_label' => '', // 日付ラベル
    'date' => null, // 日付
])
<div {{ $attributes->merge(['class' => 'card' . ' ' . $width . ' ' . 'bg-neutral shadow-xl']) }}>
    <div class="card-body h-auto">
        <h4>
            <div>
                @isset($tags)
                    @if (count($tags) > 0)
                        @foreach ($tags as $tag)
                            <span class="badge badge-accent text-white">{{ $tag->getName() }}</span>
                        @endforeach
                    @else
                        <span class="badge badge-primary text-white">タグなし</span>
                    @endif
                @endisset
            </div>
        </h4>
        <h1 class="card-title">{{ $name }}</h1>
        @isset($date)
            <h3 class="text-sm">{{ $date_label }}：{{ $date }}</h3>
        @endisset
        <h3 class="font-bold">
            材料
        </h3>
        <h4 class="text-sm">
            {!! nl2br(e($ingredient)) !!}
        </h4>
        <div class="card-actions justify-end">
            <button class="btn btn-primary text-base-100" onclick="location.href='/'">
                <i class="fa-solid fa-circle-info"></i>
                詳細
            </button>
        </div>
    </div>
</div>
