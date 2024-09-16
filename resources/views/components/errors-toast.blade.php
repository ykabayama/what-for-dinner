@props(['errors'])
@if ($errors->any())
    <div class="toast toast-top toast-end z-30">
        @foreach ($errors->all() as $error)
            <div>
                <div class="alert alert-error">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <span>{{ $error }}</span>
                    <button class="alert-close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
@endif
