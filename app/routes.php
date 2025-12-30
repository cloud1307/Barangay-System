<?php

return [
    /* Authentication */
    '/' => 'User@index',
    '/login' => 'User@login',
    '/logout' => 'User@logout',

    '/admin/home' => 'Admin@index',
    '/admin/accounts' => 'Admin@accounts',
    '/admin/officials' => 'Admin@officials',
    '/admin/positions' => 'Admin@positions',
    '/admin/puroks' => 'Admin@puroks',
    '/admin/residents' => 'Admin@residents',
    '/admin/households' => 'Admin@households',
    '/admin/permits' => 'Admin@permits',
    '/admin/clearances' => 'Admin@clearances',
    '/admin/complaints' => 'Admin@complaints',
    '/admin/records' => 'Admin@records',

    // ✅ Specific first
    '/admin/blotters/violations' => 'Admin@violations',
    '/admin/blotters' => 'Admin@blotters',

    '/admin/archives' => 'Admin@archives',
    '/admin/reports' => 'Admin@reports',
    '/admin/settings' => 'Admin@settings',
];