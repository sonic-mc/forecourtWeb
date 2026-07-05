<?php

/*
|--------------------------------------------------------------------------
| SEO Configuration
|--------------------------------------------------------------------------
| Site-wide SEO defaults. Page-specific titles and descriptions are set in
| the individual Blade views via @section('title') / @section('meta_description').
| Company contact details live in config/site.php.
*/

return [

    'default_title' => 'Forecourt Management Solutions | Fuel Handling Equipment Specialists Zimbabwe',

    'title_suffix' => ' | Forecourt Management Solutions',

    'default_description' => 'Leading fuel handling equipment specialists in Zimbabwe. Professional tank calibration, fuel dispenser installation, repair, maintenance & calibration services for petrol stations & commercial facilities.',

    'default_keywords' => 'fuel handling equipment Zimbabwe, tank calibration Zimbabwe, fuel dispenser installation, forecourt management, petrol station equipment, dispenser repair, flowmeter calibration, leak testing Harare',

    // Default social sharing image (relative to public/)
    'default_image' => 'images/forecourt.png',

    'locale' => 'en_ZW',

    // Twitter/X handle, including @ (leave empty if none)
    'twitter_handle' => env('SEO_TWITTER_HANDLE', ''),

    // Search engine ownership verification codes
    'google_site_verification' => env('GOOGLE_SITE_VERIFICATION', ''),
    'bing_site_verification' => env('BING_SITE_VERIFICATION', ''),

    // Local SEO: business coordinates (Graniteside, Harare)
    'geo' => [
        'latitude' => -17.8292,
        'longitude' => 31.0522,
        'region' => 'ZW-HA',
        'placename' => 'Harare, Zimbabwe',
    ],

    'business' => [
        'type' => 'LocalBusiness',
        'price_range' => '$$',
        'founding_year' => '2014',
        'area_served' => 'Zimbabwe',
    ],
];
