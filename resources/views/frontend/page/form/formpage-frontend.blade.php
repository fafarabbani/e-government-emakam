<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Head  Start-->
    @include('frontend.partials.form.head-form')
    <!-- Head  End-->

</head>
<body>
    <!-- Navbar Start -->
    <header x-data="{navOpen : false}" class="p-4 bg-transparent absolute top-0 left-0 w-full flex items-center z-10" >
        @include('frontend.layout.header-frontend')
    </header>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section id="hero" class="h-[60vh]" style="background-image:url('./images/banner.png');">
        @include('frontend.page.form.layout.hero-form')
    </section>
    <!-- Hero Section End -->

    <!-- form Section Start -->
    <section id="form" class="mt-[-80px]">
        @include('frontend.page.form.layout.form-pelaporan')
    </section>
    <!-- form Section End -->
    
    <!-- Footer Start -->
    <section class="bg-dark pt-24 pb-12">
        @include('frontend.layout.footer-frontend')
    </section>
    <!-- Footer Start -->
    
    <!-- Foot Start -->
    @include('frontend.partials.foot-frontend')
    <!-- Foot End -->
</body>
</html>