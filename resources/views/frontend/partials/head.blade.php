@section('title')
<title>{{ config('app.name') .' '. $settings->company_ar .' '. $settings->company_en }}</title>
@show
<meta http-equiv="Content-type" charset="utf-8" content="text/html; charset=utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="{{ config('app.name') }}" content="E-commerce">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="theme-color" content="black">
<meta name="description" content="{{ trans('general.meta_description') . $settings->company_ar . $settings->company_en . trans('general.app_keywords')}}">
<meta name="keywords" content="{{ trans('general.app_keywords') }}" />
<meta name="author" content="{{ trans('general.app_author') }}">
<meta name="country" content="{{ $settings->country }}">
<meta name="mobile" content="{{ $settings->mobile }}">
<meta name="phone" content="{{ $settings->phone }}">
<meta name="logo" content="{{ asset(env('LARGE').$settings->logo) }}">
<meta name="email" content="{{ $settings->email }}">
<meta name="address" content="{{ $settings->address }}">
<meta name="name" content="{{ $settings->company }}">
<meta name="lang" content="{{ app()->getLocale() }}">
<meta name="google-site-verification" content="fy3pTvV0z024nR79nukGxw-tnOmJ2F5BnMeayo-g4-c" />
<link rel="shortcut icon" href="{{ asset('images/logo.ico') }}" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/logo.jpg') }}">
<link href="{{ asset('images/logo.jpg') }}" rel="shortcut icon" type="image/jpg">


<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="Nashkw ناش NashKw">
<meta itemprop="description" content="ناش NASH هي ماركة كويتية مسجلة بدولة الكويت , بدأنا 2014 ونستمر حتى نختصر جميع خطوط الموضة في قطع تناسب المرأة الراقية التي تحتاج التألق في ظهورها وتهتم بنظافة التصنيع والخامات الممتازة. أما القطع الرجالية فهي أصيلة تبرز شخصية ذات أفق غير محدود . أما قطع الأطفال فهي هدايا صغيرة تستمتع باقتنائها كالألعاب المبهرة .. هذه قطع تفرحنا عند صناعتها ناشNashKwناش NASH هي ماركة كويتية مسجلة بدولة الكويت , بدأنا 2014 ونستمر حتى نختصر جميع خطوط الموضة في قطع تناسب المرأة الراقية التي تحتاج التألق في ظهورها وتهتم بنظافة التصنيع والخامات الممتازة. أما القطع الرجالية فهي أصيلة تبرز شخصية ذات أفق غير محدود . أما قطع الأطفال فهي هدايا صغيرة تستمتع باقتنائها كالألعاب المبهرة .. هذه قطع تفرحنا عند صناعتها ">
<meta itemprop="image" content="images/logo.jpg">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="http://nashkw.com">
<meta property="og:type" content="website">
<meta property="og:title" content="Nashkw ناش NashKw">
<meta property="og:description" content="ناش NASH هي ماركة كويتية مسجلة بدولة الكويت , بدأنا 2014 ونستمر حتى نختصر جميع خطوط الموضة في قطع تناسب المرأة الراقية التي تحتاج التألق في ظهورها وتهتم بنظافة التصنيع والخامات الممتازة. أما القطع الرجالية فهي أصيلة تبرز شخصية ذات أفق غير محدود . أما قطع الأطفال فهي هدايا صغيرة تستمتع باقتنائها كالألعاب المبهرة .. هذه قطع تفرحنا عند صناعتها ناشNashKwناش NASH هي ماركة كويتية مسجلة بدولة الكويت , بدأنا 2014 ونستمر حتى نختصر جميع خطوط الموضة في قطع تناسب المرأة الراقية التي تحتاج التألق في ظهورها وتهتم بنظافة التصنيع والخامات الممتازة. أما القطع الرجالية فهي أصيلة تبرز شخصية ذات أفق غير محدود . أما قطع الأطفال فهي هدايا صغيرة تستمتع باقتنائها كالألعاب المبهرة .. هذه قطع تفرحنا عند صناعتها ">
<meta property="og:image" content="images/logo.jpg">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Nashkw ناش NashKw">
<meta name="twitter:description" content="ناش NASH هي ماركة كويتية مسجلة بدولة الكويت , بدأنا 2014 ونستمر حتى نختصر جميع خطوط الموضة في قطع تناسب المرأة الراقية التي تحتاج التألق في ظهورها وتهتم بنظافة التصنيع والخامات الممتازة. أما القطع الرجالية فهي أصيلة تبرز شخصية ذات أفق غير محدود . أما قطع الأطفال فهي هدايا صغيرة تستمتع باقتنائها كالألعاب المبهرة .. هذه قطع تفرحنا عند صناعتها ناشNashKwناش NASH هي ماركة كويتية مسجلة بدولة الكويت , بدأنا 2014 ونستمر حتى نختصر جميع خطوط الموضة في قطع تناسب المرأة الراقية التي تحتاج التألق في ظهورها وتهتم بنظافة التصنيع والخامات الممتازة. أما القطع الرجالية فهي أصيلة تبرز شخصية ذات أفق غير محدود . أما قطع الأطفال فهي هدايا صغيرة تستمتع باقتنائها كالألعاب المبهرة .. هذه قطع تفرحنا عند صناعتها ">
<meta name="twitter:image" content="http://nashkw.com/images/logo.jpg">