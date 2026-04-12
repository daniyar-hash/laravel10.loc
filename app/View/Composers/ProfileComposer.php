<?php

namespace App\View\Composers;
use Illuminate\View\View;

class ProfileComposer
{



    public function compose(View $view): void
    {
        $view->with('year', 1984);
    }
}