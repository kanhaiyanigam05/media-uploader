<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageUploader extends Component
{
    /**
     * Create a new component instance.
     */
    public $newName;
    public function __construct(public string $name = 'image', public string $image = '', public array $images = [], public string $label = '', public string $type = 'image', public string $columns = 'col-lg-2 col-md-3 col-4', public bool $multiple = false)
    {
        $this->newName = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.image-uploader');
    }
}
