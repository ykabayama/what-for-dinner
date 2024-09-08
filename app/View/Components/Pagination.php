<?php

declare(strict_types=1);

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;

class Pagination extends Component
{
    public int $current_page;

    public ?string $previous_page_url;

    public ?string $next_page_url;

    /**
     * Create a new component instance.
     */
    public function __construct(
        LengthAwarePaginator $paginator)
    {
        $this->current_page = $paginator->currentPage();
        $this->previous_page_url = $paginator->previousPageUrl();
        $this->next_page_url = $paginator->nextPageUrl();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pagination');
    }
}
