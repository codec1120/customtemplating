<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class SideBarParentMenu extends Model
{
    use Sushi;

    public function getRows()
    {
        return [
            [
                'name' => 'header-elements',
                'icon' => null,
                'label' => 'HEADER ELEMENTS',
                'link' => '#',
                'slug' => 'header-elements',
                'visible' => true
            ],
            [
                'name' => 'home-page-elements',
                'icon' => null,
                'label' => 'HOME PAGE ELEMENTS',
                'link' => '#',
                'slug' => 'home-page-elements',
                'visible' => true
            ]
        ];
    }
}
