<?php

namespace App\Helpers;

 class Navigation {
     
    public $parentMenu = [
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

    public $childMenu = [
        [
            'name' => 'pre-build-headers',
            'icon' => null,
            'label' => 'Pre-Build Headers',
            'link' => '#',
            'active' => NULL,
            'slug' => 'pre-build-headers',
            'parent_slug' => 'header-elements',
            'visible' => true
        ],
        [
            'name' => 'navigation',
            'icon' => null,
            'label' => 'Navigation',
            'link' => '#',
            'active' => NULL,
            'slug' => 'navigation',
            'parent_slug' => 'header-elements',
            'visible' => true
        ],
        [
            'name' => 'hero-slider',
            'icon' => null,
            'label' => 'Hero/Slider',
            'link' => '#',
            'active' => null,
            'slug' => 'hero-slider',
            'parent_slug' => 'header-elements',
            'visible' => true
        ],
        [
            'name' => 'top-bar',
            'icon' => null,
            'label' => 'Top Bar',
            'link' => '#',
            'active' => null,
            'slug' => 'top-bar',
            'parent_slug' => 'header-elements',
            'visible' => true
        ],
        [
            'name' => 'obituary-section',
            'icon' => null,
            'label' => 'Obituary Section',
            'link' => '#',
            'active' => null,
            'slug' => 'obituary-section',
            'parent_slug' => 'home-page-elements',
            'visible' => true
        ],
        [
            'name' => 'about-section',
            'icon' => null,
            'label' => 'About Section',
            'link' => '#',
            'active' => null,
            'slug' => 'about-section',
            'parent_slug' => 'home-page-elements',
            'visible' => true
        ],
        [
            'name' => 'testimonial-section',
            'icon' => null,
            'label' => 'Testimonial Section',
            'link' => '#',
            'active' => null,
            'slug' => 'testimonial-section',
            'parent_slug' => 'home-page-elements',
            'visible' => true
        ],
        [
            'name' => 'service-overview-section',
            'icon' => null,
            'label' => 'Service Overview Section',
            'link' => '#',
            'active' => null,
            'slug' => 'service-overview-section',
            'parent_slug' => 'home-page-elements',
            'visible' => true
        ]
    ];
 }