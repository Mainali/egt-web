<?php
return [
    //List of modules are defined here
    'modules'     => [
        'home'              => "Admin Dashboard",
        'settings'          => 'Admin Config',
        'user'              => "User Management",
        'log'               => 'Log Management',
        'products'          => 'products',
        'reports'           => 'Reports',
        'stores'            => 'Stores',
        'sales'             => 'Sales / Stock',
        'vendors'           => 'Vendors',
        'replenishmenttool' => 'Replenishment Tools'
        //        'stock'      => 'Stock'
    ],
    //Module sub modules contains here
    'modulepages' =>  [
        'home'          =>  ['home' => 'Admin Dashboard'],
        'settings'      =>  ['settings' => 'Settings'],
        'user'          =>  ['permission' => 'Permissions','roles'=>'Roles','users'=>'Users'],
        'log'           =>  ['log' => 'Log Management'],
        'products'      =>  ['division'=>'Division','products'=>'Products','seasonalpromotion'=>'Seasonal Promotion','moq' => 'MOQ','mbq'=>'MBQ'],
        'reports'           =>  ['sales_vs_mbq' => 'Sales VS MBQ','division_wise_sales_vs_mbq' => 'Division:Sales VS MBQ','sales_vs_stock'=>'Sales VS Stock','division_wise_sales_vs_stock' => 'Division:Sales VS Stock','all_sales_vs_mbq'=>'All Sales VS All MBQ'],
        'stores'            =>  ['storecategory'=> 'Store Categories','stores'=>'Stores','deliverydate?day=Sunday'=>'Delivery Date','storedivisionrank'=>'Store Division Rank'],
        'sales'             => ['sales'=>'Sales' ,'stock'=>'Stock','salesAvgStoreItems'=>'Sales Average Store Items','salesCalculation'=>'Sales Calculation','salesvsmbqCalc'=> 'Sales Vs Mbq Calculation','setdefaultcalc'=>'Set Default Calculation Module' ],
        'vendors'           => ['vendors'=>'Vendors'],
        'replenishmenttool'           => ['replenishmenttools'=>'Replenishment Tools']

    ],
    //Permissions for each module is defined here
    'modulePermissions' => [
        'config'   => [
                        //Settings Sub Module
                        'config.settings.view'     =>  'View Settings',
                        'config.settings.create'   =>  'Create Settings',
                        'config.settings.edit'     =>  'Edit Settings',
                        'config.settings.delete'   =>  'Delete Settings',
                        //Language Sub Module
                        'config.language.view'     =>  'View Language',
                        'config.language.create'   =>  'Create Language',
                        'config.language.edit'     =>  'Edit Language',
                        'config.language.delete'   =>  'Delete Language'
                      ],
        'user'   => [
                        //Permission Sub Module
                        'user.permission.view'   =>  'View Permission',
                        'user.permission.create' =>  'Create Permission',
                        'user.permission.edit'   =>  'Edit Permission',
                        'user.permission.delete' =>  'Delete Permission',
                        //Roles Sub Module
                        'user.roles.view'        =>  'View Roles',
                        'user.roles.create'      =>  'Create Roles',
                        'user.roles.edit'        =>  'Edit Roles',
                        'user.roles.delete'      =>  'Delete Roles',
                        //Users Sub Module
                        'user.users.view'        =>  'View Users',
                        'user.users.create'      =>  'Create Users',
                        'user.users.edit'        =>  'Edit Users',
                        'user.users.delete'      =>  'Delete Users'
                      ],
                'products'   => [
                        //Division Sub Module
                        'products.division.view'   =>  'View Permission',
                        'products.division.create' =>  'Create Permission',
                        'products.division.edit'   =>  'Edit Permission',
                        'products.division.delete' =>  'Delete Permission',
                        //products Sub Module
                        'products.products.view'   =>  'View Permission',
                        'products.products.create' =>  'Create Permission',
                        'products.products.edit'   =>  'Edit Permission',
                        'products.products.delete' =>  'Delete Permission',
                        //products Sub Module
                        'products.moq.view'   =>  'View Permission',
                        'products.moq.create' =>  'Create Permission',
                        'products.moq.edit'   =>  'Edit Permission',
                        'products.moq.delete' =>  'Delete Permission',


        ],
        'reports'   => [
            //SalesVSMbq Sub Module
            'products.cc.view'   =>  'View Permission',
            'products.sales_vs_mbq.create' =>  'Create Permission',
            'products.sales_vs_mbq.edit'   =>  'Edit Permission',
            'products.sales_vs_mbq.delete' =>  'Delete Permission',

            //Division Wise SalesVSMbq Sub Module
            'products.cc.view'   =>  'View Permission',
            'products.division_wise_sales_vs_mbq.create' =>  'Create Permission',
            'products.division_wise_sales_vs_mbq.edit'   =>  'Edit Permission',
            'products.division_wise_sales_vs_mbq.delete' =>  'Delete Permission',

            //Division Wise SalesVSStock Sub Module
            'products.cc.view'   =>  'View Permission',
            'products.division_wise_sales_vs_stock.create' =>  'Create Permission',
            'products.division_wise_sales_vs_stock.edit'   =>  'Edit Permission',
            'products.division_wise_sales_vs_stock.delete' =>  'Delete Permission',

            //SalesVsStock Sub Module
            'products.sales_vs_stock.view'   =>  'View Permission',
            'products.sales_vs_stock.create' =>  'Create Permission',
            'products.sales_vs_stock.edit'   =>  'Edit Permission',
            'products.sales_vs_stock.delete' =>  'Delete Permission',

            //AllSalesVsStock Sub Module
            'products.all_sales_vs_stock.view'   =>  'View Permission',
            'products.all_sales_vs_stock.create' =>  'Create Permission',
            'products.all_sales_vs_stock.edit'   =>  'Edit Permission',
            'products.all_sales_vs_stock.delete' =>  'Delete Permission',


        ],
        'stores'   => [
            //stores  Module
                        'stores.storecategory.view'   =>  'View Permission',
                        'stores.storecategory.create' =>  'Create Permission',
                        'stores.storecategory.edit'   =>  'Edit Permission',
                        'stores.storecategory.delete' =>  'Delete Permission', 

                        'stores.stores.view'   =>  'View Permission',
                        'stores.stores.create' =>  'Create Permission',
                        'stores.stores.edit'   =>  'Edit Permission',
                        'stores.stores.delete' =>  'Delete Permission', 

                        'stores.storedivisionrank.view'   =>  'View Permission',
                        'stores.storedivisionrank.create' =>  'Create Permission',
                        'stores.storedivisionrank.edit'   =>  'Edit Permission',
                        'stores.storedivisionrank.delete' =>  'Delete Permission', 

                        'stores.deliverydate.view'   =>  'View Permission',
                        'stores.deliverydate.create' =>  'Create Permission',
                        'stores.deliverydate.edit'   =>  'Edit Permission',
                        'stores.deliverydate.delete' =>  'Delete Permission',

        ],
        'log'      => [
                        'log.log.view'          =>  'Log View',
                        'log.log.delete'        =>  'Log Delete'
                      ]
    ],
    //Permissions for each module is defined here
    //Icons for eash modules is defined here
    'moduleicons' =>  [
        'home'          => 'icon-home',
        'user'          => 'icon-users',
        'settings'      => 'icon-gear',
        'log'           => 'icon-file-o',
        'products'      => 'glyph-icon icon-suitcase',
        'reports'      => 'icon-signal',
        'stores'        => 'glyph-icon icon-home',
        'sales'        => 'icon-shopping-cart',
        'vendors'        => 'icon-tags',
        'replenishmenttool'        => 'icon-gear',

    ],
    //Icons for eash modules is defined here
    'cmsTitle'    => 'Bigmart', //Cms Title
    'logotitle'   => 'Bigmart' // Logo title
];


?>
