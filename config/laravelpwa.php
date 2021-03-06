<?php

return [
  'name' => env('APP_NAME'),
  'short_name' => env('APP_NICK'),
  'manifest' => [
    'name' => env('APP_NAME'),
    'short_name' => env('APP_NICK'),
    'description' => 'Developer Student Clubs(DSC) is a Google Developers program for SJCET students to acquire technical skills and solve problems',
    'start_url' => '/',
    'background_color' => '#FFFFFF',
    'theme_color' => '#2F5BE7',
    'display' => 'standalone',
    'orientation' => 'any',
    'lang' => 'en-US',
    'icons' => [
      '72x72' => '/images/icons/icon-72x72.png',
      '96x96' => '/images/icons/icon-96x96.png',
      '128x128' => '/images/icons/icon-128x128.png',
      '144x144' => '/images/icons/icon-144x144.png',
      '152x152' => '/images/icons/icon-152x152.png',
      '192x192' => '/images/icons/icon-192x192.png',
      '384x384' => '/images/icons/icon-384x384.png',
      '512x512' => '/images/icons/icon-512x512.png'
    ],
    'splash' => [
      '640x1136' => '/images/icons/splash-640x1136.png',
      '750x1334' => '/images/icons/splash-750x1334.png',
      '828x1792' => '/images/icons/splash-828x1792.png',
      '1125x2436' => '/images/icons/splash-1125x2436.png',
      '1242x2208' => '/images/icons/splash-1242x2208.png',
      '1242x2688' => '/images/icons/splash-1242x2688.png',
      '1536x2048' => '/images/icons/splash-1536x2048.png',
      '1668x2224' => '/images/icons/splash-1668x2224.png',
      '1668x2388' => '/images/icons/splash-1668x2388.png',
      '2048x2732' => '/images/icons/splash-2048x2732.png',
    ],
//     'icons' => [
//       '72x72' => '/images/favicon_package_v0.16/favicon-32x32.png',
//       '96x96' => '/images/favicon_package_v0.16/favicon-32x32.png',
//       '128x128' => '/images/favicon_package_v0.16/favicon-32x32.png',
//       '144x144' => '/images/favicon_package_v0.16/favicon-32x32.png',
//       '152x152' => '/images/favicon_package_v0.16/mstile-150x150.png',
//       '192x192' => '/images/favicon_package_v0.16/android-chrome-192x192.png',
//       '384x384' => '/images/favicon_package_v0.16/android-chrome-192x192.png',
//       '512x512' => '/images/favicon_package_v0.16/android-chrome-512x512.png'
//       ],
//     'splash' => [
//       '640x1136' => '/images/splashscreens/iphone5_splash.png',
//       '750x1334' => '/images/splashscreens/iphone6_splash.png',
//       '828x1792' => '/images/splashscreens/iphoneplus_splash.png',
//       '1125x2436' => '/images/splashscreens/iphonex_splash.png',
//       '1242x2208' => '/images/splashscreens/iphonexr_splash.png',
//       '1242x2688' => '/images/splashscreens/iphonexsmax_splash.png',
//       '1536x2048' => '/images/splashscreens/ipad_splash.png',
//       '1668x2224' => '/images/splashscreens/ipadpro1_splash.png',
//       '1668x2388' => '/images/splashscreens/ipadpro3_splash.png',
//       '2048x2732' => '/images/splashscreens/ipadpro2_splash.png',
//     ],
    'custom' => [
      'tag' => 'developer student clubs',
      'tag2' => 'google developers',
      'tag3' => 'SJCET PALAI',
    ]
  ]
];
