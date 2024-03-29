<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
<meta http-equiv="X-UA-Compatible" content="ie=edge"/>

<title>@yield('title') - {{ config('app.name')}}</title>

<!-- CSS files -->
<link href="{{asset('./adminhome/css/tabler.css')}}" rel="stylesheet"/>

{{-- <!-- Scripts -->
@vite(['resources/css/app.css']) --}}

<style>
  @import url('https://rsms.me/inter/inter.css');
  :root {
    --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
  }
  body {
    font-feature-settings: "cv03", "cv04", "cv11";
  }
</style>