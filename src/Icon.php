<?php

namespace S4mpp\Heroicons;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Icon extends Component
{
    public int $size;

    public string $style;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $name, public bool $mini = false, bool $solid = false)
    {
        if($mini)
        {
            $solid = true;
        }

        $this->size = ($mini) ? 20 : 24;

        $this->style = ($solid) ? 'solid' : 'outline';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('heroicons::'.$this->size.'.'.$this->style.'.'.$this->name);
    }
}
