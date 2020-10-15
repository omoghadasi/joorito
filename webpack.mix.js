const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.styles([
    'resources/css/adminpanel/material-dashboard.min.css',
    'resources/css/adminpanel/material-dashboard-rtl.min.css',
],'public/assets/adminpanel/css/app.css')
mix.scripts([
    'resources/js/adminpanel/core/jquery.min.js',
    'resources/js/adminpanel/core/popper.min.js',
    'resources/js/adminpanel/core/bootstrap-material-design.min.js',
    'resources/js/adminpanel/plugins/perfect-scrollbar.jquery.min.js',
    'resources/js/adminpanel/plugins/moment.min.js',
    'resources/js/adminpanel/plugins/sweetalert2.js',
    'resources/js/adminpanel/plugins/jquery.validate.min.js',
    'resources/js/adminpanel/plugins/jquery.bootstrap-wizard.js',
    'resources/js/adminpanel/plugins/bootstrap-selectpicker.js',
    'resources/js/adminpanel/plugins/bootstrap-datetimepicker.min.js',
    'resources/js/adminpanel/plugins/jquery.dataTables.min.js',
    'resources/js/adminpanel/plugins/bootstrap-tagsinput.js',
    'resources/js/adminpanel/plugins/jasny-bootstrap.min.js',
    'resources/js/adminpanel/plugins/fullcalendar.min.js',
    'resources/js/adminpanel/plugins/jquery-jvectormap.js',
    'resources/js/adminpanel/plugins/nouislider.min.js',
    'resources/js/adminpanel/plugins/arrive.min.js',
    'resources/js/adminpanel/plugins/chartist.min.js',
    'resources/js/adminpanel/plugins/bootstrap-notify.js',
    'resources/js/adminpanel/material-dashboard.min.js',
],'public/assets/adminpanel/js/app.js')
