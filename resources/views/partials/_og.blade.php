<!-- Twitter sharing -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ isset($title) ? $title . ' | ' : '' }}{{ config('app.name') }}" />
<meta name="twitter:creator" content="@laravelcm" />
<!-- /Twitter sharing -->

<!-- Facebook sharing -->
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:title" content="{{ isset($title) ? $title . ' | ' : '' }}{{ config('app.name') }}" />
<!-- /Facebook sharing -->
