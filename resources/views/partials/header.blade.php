
<header class="d-flex container justify-content-between">
    <!-- Logo -->
    <img class="p-4 header-logo" src="../assets/img/dc-logo.png" alt="">
    <!-- navigatore -->
    <nav class="d-flex align-items-center">

        @foreach ($navPages as $navPage)
        <a class="{{($navPage["page"] == "COMICS" ? 'mx-3 active' : 'mx-3')}}"  href="#">{{ $navPage["page"] }}</a>
        @endforeach
        
    </nav>
</header>