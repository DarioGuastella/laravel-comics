
<header class="d-flex container justify-content-between">
    <!-- Logo -->
    <img class="p-4 header-logo" src="../assets/img/dc-logo.png" alt="">
    <!-- navigatore -->
    <nav class="d-flex align-items-center">
        {{-- ToDo: ternario per classe "active" --}}
        @foreach ($navPages as $navPage)
        <a class="mx-3" href="#">{{ $navPage["page"] }}</a>
        @endforeach
    </nav>
</header>