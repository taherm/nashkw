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
mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');
// backend
mix.styles([
    '../Documents/home/metronic_v4.5.6/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
    '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css',
    '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',

    '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css',
    '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/morris/morris.css"',
    '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/fullcalendar/fullcalendar.min.css"',
    '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/jqvmap/jqvmap/jqvmap.css"',


    '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/jquery-multi-select/css/multi-select.css',
    '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/select2/css/select2.min.css',
    '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/select2/css/select2-bootstrap.min.css',
    '../../Documents/Home/metronic_v4.5.6/theme//assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css',
    '../../Documents/Home/metronic_v4.5.6/theme//assets/global/plugins/jquery-minicolors/jquery.minicolors.css',


    '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css',
    '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.css',
    '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css',

    '../../Documents/Home/metronic_v4.5.6/theme/assets/global/css/components.min.css',
    '../../Documents/Home/metronic_v4.5.6/theme/assets/global/css/plugins.min.css',

    '../../Documents/Home/metronic_v4.5.6/theme/assets/layouts/layout2/css/layout.min.css',
    // '../../Documents/Home/metronic_v4.5.6/theme/assets/layouts/layout/css/themes/darkblue.min.css',
    // '../../Documents/Home/metronic_v4.5.6/theme/assets/layouts/layout2/css/themes/blue.min.css',
    // '../../Documents/Home/metronic_v4.5.6/theme/assets/layouts/layout2/css/themes/light.min.css',
    '../../Documents/Home/metronic_v4.5.6/theme/assets/layouts/layout2/css/themes/grey.min.css',
    '../../Documents/Home/metronic_v4.5.6/theme/assets/layouts/layout2/css/custom.min.css',
    './node_modules/jquery.minicolors/jquery.minicolors.css',
    './node_modules/font-awesome/css/font-awesome.min.css',
    './resources/assets/css/backend-custom.css',

], 'public/css/backend.css').version();
mix.scripts([
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/respond.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/excanvas.min.js',

        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/jquery.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/select2/js/select2.full.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/pages/scripts/components-multi-select.min.js',


        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/scripts/datatable.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/pages/scripts/table-datatables-managed.min.js',

        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/js.cookie.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/jquery.blockui.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',

        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/moment.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/morris/morris.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/morris/raphael-min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/counterup/jquery.waypoints.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/counterup/jquery.counterup.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/amcharts/amcharts/amcharts.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/amcharts/amcharts/serial.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/amcharts/amcharts/pie.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/amcharts/amcharts/radar.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/amcharts/amcharts/themes/light.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/amcharts/amcharts/themes/patterns.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/amcharts/amcharts/themes/chalk.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/amcharts/ammap/ammap.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/amcharts/amstockcharts/amstock.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/fullcalendar/fullcalendar.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/flot/jquery.flot.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/flot/jquery.flot.resize.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/flot/jquery.flot.categories.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/jquery.sparkline.min.js',


        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/ckeditor/ckeditor.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/autosize/autosize.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/jquery-minicolors/jquery.minicolors.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/pages/scripts/components-color-pickers.min.js',

        '../../Documents/Home/metronic_v4.5.6/theme/assets/global/scripts/app.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/pages/scripts/dashboard.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/pages/scripts/components-form-tools.min.js',

        '../../Documents/Home/metronic_v4.5.6/theme/assets/layouts/layout2/scripts/layout.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/layouts/layout2/scripts/demo.min.js',
        '../../Documents/Home/metronic_v4.5.6/theme/assets/layouts/global/scripts/quick-sidebar.min.js',
        './node_modules/tinymce/tinymce.min.js',
        './node_modules/jquery-minicolors/jquery.minicolors.min.js',
        './resources/assets/js/backend-custom.js',
    ],
    'public/js/backend.js').version();
mix.styles([
        '../../Documents/Home/expert-theme/expert/css/bootstrap.min.css',
        '../../Documents/Home/expert-theme/expert/css/nivo-slider.css',
        '../../Documents/Home/expert-theme/expert/css/jquery-ui.min.css',
        '../../Documents/Home/expert-theme/expert/css/meanmenu.min.css',
        '../../Documents/Home/expert-theme/expert/css/owl.carousel.css',
        '../../Documents/Home/expert-theme/expert/css/font-awesome.min.css',
        '../../Documents/Home/expert-theme/expert/css/jquery.simpleGallery.css',
        '../../Documents/Home/expert-theme/expert/css/jquery.simpleLens.css',
        '../../Documents/Home/expert-theme/expert/style.css',
        '../../Documents/Home/expert-theme/expert/css/responsive.css',
        './resources/assets/css/frontend-custom.css',
    ]
    , 'public/css/frontend.css').version();
mix.styles([
        '../../Documents/Home/expert-theme/expert/js/vendor/jquery-1.12.0.min.js',
        '../../Documents/Home/expert-theme/expert/js/bootstrap.min.js',
        '../../Documents/Home/expert-theme/expert/js/jquery.nivo.slider.pack.js',
        '../../Documents/Home/expert-theme/expert/js/owl.carousel.min.js',
        '../../Documents/Home/expert-theme/expert/js/jquery-ui.min.js',
        '../../Documents/Home/expert-theme/expert/js/jquery.meanmenu.js',
        '../../Documents/Home/expert-theme/expert/js/jquery.simpleGallery.min.js',
        '../../Documents/Home/expert-theme/expert/js/jquery.simpleLens.min.js',
        '../../Documents/Home/expert-theme/expert/js/wow.min.js',
        '../../Documents/Home/expert-theme/expert/js/plugins.js',
        '../../Documents/Home/expert-theme/expert/js/main.js',
        './resources/assets/js/frontend-custom.js',
        '../../Documents/Home/expert-theme/expert/js/vendor/modernizr-2.8.3.min.js',
    ]
    , 'public/js/frontend.js').version();

mix.copyDirectory('../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/simple-line-icons/fonts', 'public/css/fonts');
mix.copyDirectory('../../Documents/Home/metronic_v4.5.6/theme/assets/global/plugins/datatables/images', 'public/plugins/datatables/images');
mix.copyDirectory('../../Documents/Home/metronic_v4.5.6/theme/assets/global/img', 'public/img');
mix.copyDirectory('../../Documents/Home/metronic_v4.5.6/theme/assets/layouts/layout/img', 'public/img');
mix.copyDirectory('./node_modules/font-awesome/fonts', 'public/fonts');
mix.copyDirectory('./node_modules/tinymce/plugins', 'public/js/plugins');
mix.copyDirectory('./node_modules/tinymce/skins', 'public/js/skins');
mix.copyDirectory('./node_modules/tinymce/themes', 'public/js/themes');
mix.copyDirectory('../../Documents/Home/expert-theme/expert/img', 'public/img');
mix.copyDirectory('../../Documents/Home/expert-theme/expert/fonts', 'public/fonts');
