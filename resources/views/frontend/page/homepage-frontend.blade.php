<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Head  Start-->
    @include('frontend.partials.head-frontend')
    <!-- Head  End-->

</head>
<body>
    <!-- Navbar Start -->
    <header x-data="{navOpen : false}" class="p-4 bg-transparent absolute top-0 left-0 w-full flex items-center z-10" >
        @include('frontend.layout.header-frontend')
    </header>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section id="hero" class="" style="background-image:url('./images/banner.png');">
        @include('frontend.layout.hero-frontend')
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="pt-[30px] pb-[30px] h-[51.2vh]">
        @include('frontend.layout.about-frontend')
    </section>
    <!-- About Section End -->

    <!-- Galery Section Start -->
    <section id="galeri" class="pt-[60px] pb-12 bg-slate-100">
        @include('frontend.layout.galery-frontend')
    </section>
    <!-- Galery Section End -->

    <!-- Clients Section Start -->
    <section id="clients" class="pt-[30px] pb-[30px] bg-slate-800">
        @include('frontend.layout.clients-frontend')
    </section>
    <!-- Clients Section End -->

    <!-- Contact Start -->
    <section id="kontak" class="pt-[30px] pb-[30px]">
        @include('frontend.layout.contact-frontend')
    </section>
    <!-- Contact End -->
    
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