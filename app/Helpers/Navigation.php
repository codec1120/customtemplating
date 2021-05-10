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
            'name' => 'obituary-section',
            'icon' => null,
            'label' => 'Homepage Obituary',
            'link' => '#',
            'active' => null,
            'slug' => 'obituary-section',
            'parent_slug' => 'home-page-elements',
            'visible' => true
        ],
        [
            'name' => 'hero-slider',
            'icon' => null,
            'label' => 'Homepage Hero Banner',
            'link' => '#',
            'active' => null,
            'slug' => 'hero-slider',
            'parent_slug' => 'header-elements',
            'visible' => true
        ],
        [
            'name' => 'testimonial-section',
            'icon' => null,
            'label' => 'Homepage Testimonial',
            'link' => '#',
            'active' => null,
            'slug' => 'testimonial-section',
            'parent_slug' => 'home-page-elements',
            'visible' => true
        ],
        [
            'name' => 'staff-section',
            'icon' => null,
            'label' => 'Homepage Staff',
            'link' => '#',
            'active' => null,
            'slug' => 'staff-section',
            'parent_slug' => 'home-page-elements',
            'visible' => true
        ],
        [
            'name' => 'pre-build-headers',
            'icon' => null,
            'label' => 'Pre-Build Headers',
            'link' => '#',
            'active' => NULL,
            'slug' => 'pre-build-headers',
            'parent_slug' => 'header-elements',
            'visible' => false
        ],
        [
            'name' => 'navigation',
            'icon' => null,
            'label' => 'Navigation',
            'link' => '#',
            'active' => NULL,
            'slug' => 'navigation',
            'parent_slug' => 'header-elements',
            'visible' => false
        ],
        
        [
            'name' => 'top-bar',
            'icon' => null,
            'label' => 'Top Bar',
            'link' => '#',
            'active' => null,
            'slug' => 'top-bar',
            'parent_slug' => 'header-elements',
            'visible' => false
        ],
        [
            'name' => 'about-section',
            'icon' => null,
            'label' => 'About Section',
            'link' => '#',
            'active' => null,
            'slug' => 'about-section',
            'parent_slug' => 'home-page-elements',
            'visible' => false
        ],
        
        [
            'name' => 'service-overview-section',
            'icon' => null,
            'label' => 'Service Overview Section',
            'link' => '#',
            'active' => null,
            'slug' => 'service-overview-section',
            'parent_slug' => 'home-page-elements',
            'visible' => false
        ]
    ];
 }