<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class SideBarMenus extends Model
{
    use Sushi;

    public function getRows()
    {
        return [
            
            [
                'name' => 'pre-build-headers',
                'icon' => null,
                'label' => 'Pre-Build Headers',
                'link' => '#',
                'active' => $this->active('pre-build-headers'),
                'slug' => 'pre-build-headers',
                'parent_slug' => 'header-elements',
                'visible' => true
            ],
            [
                'name' => 'navigation',
                'icon' => null,
                'label' => 'Navigation',
                'link' => '#',
                'active' => $this->active('navigation'),
                'slug' => 'navigation',
                'parent_slug' => 'header-elements',
                'visible' => true
            ],
            [
                'name' => 'hero-slider',
                'icon' => null,
                'label' => 'Hero/Slider',
                'link' => '#',
                'active' => $this->active('hero-slider'),
                'slug' => 'hero-slider',
                'parent_slug' => 'header-elements',
                'visible' => true
            ],
            [
                'name' => 'top-bar',
                'icon' => null,
                'label' => 'Top Bar',
                'link' => '#',
                'active' => $this->active('top-bar'),
                'slug' => 'top-bar',
                'parent_slug' => 'header-elements',
                'visible' => true
            ],
            [
                'name' => 'obituary-section',
                'icon' => null,
                'label' => 'Obituary Section',
                'link' => '#',
                'active' => $this->active('obituary-section'),
                'slug' => 'obituary-section',
                'parent_slug' => 'home-page-elements',
                'visible' => true
            ],
            [
                'name' => 'about-section',
                'icon' => null,
                'label' => 'About Section',
                'link' => '#',
                'active' => $this->active('about-section'),
                'slug' => 'about-section',
                'parent_slug' => 'home-page-elements',
                'visible' => true
            ],
            [
                'name' => 'testimonial-section',
                'icon' => null,
                'label' => 'Testimonial Section',
                'link' => '#',
                'active' => $this->active('testimonial-section'),
                'slug' => 'testimonial-section',
                'parent_slug' => 'home-page-elements',
                'visible' => true
            ],
            [
                'name' => 'service-overview-section',
                'icon' => null,
                'label' => 'Service Overview Section',
                'link' => '#',
                'active' => $this->active('service-overview-section'),
                'slug' => 'service-overview-section',
                'parent_slug' => 'home-page-elements',
                'visible' => true
            ]
        ];
    }

    protected function active(string $key): bool
    {
        return request()->segment(3) === $key ? true : false;
    }
}
