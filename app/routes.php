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
    '/admin/complaints' => 'Admin@complaints',
    '/admin/records' => 'Admin@records',

    //Clearances
    '/admin/clearances/barangayClearances' => 'Admin@clearances',
    '/admin/clearances/barangayIndigents' => 'Admin@barangayIndigents',
    '/admin/clearances/financialAssistance' => 'Admin@financialAssistance',

    //Permits

    '/admin/permits/business' => 'Admin@business',
    '/admin/permits/workingpermit' => 'Admin@workingpermit',
    '/admin/permits/building' => 'Admin@building',
    '/admin/permits/electrical' => 'Admin@electrical',
    '/admin/permits/cuttingtrees' => 'Admin@cuttingtrees',
    '/admin/permits/fencing' => 'Admin@fencing',
    '/admin/permits/filmpermit' => 'Admin@filmpermit',


    // ✅ Specific first
    '/admin/blotters/violations' => 'Admin@violations',
    '/admin/blotters/complaints' => 'Admin@complaints',

    '/admin/archives' => 'Admin@archives',
    '/admin/reports' => 'Admin@reports',
    '/admin/settings' => 'Admin@settings',
];