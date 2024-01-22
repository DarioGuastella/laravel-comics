<!-- Jumbotron -->
<div id="jumbotron">
    <img id="jumbo" src="../assets/img/jumbotron.jpg" alt="">
</div>

<!-- Comics cards -->
<section class="my-bg-dark">
    <div class="container">
    <div class="currentSeries myBtn">
        <h3>CURRENT SERIES</h3>
    </div>
    <div id="cardsWrapper">
        @foreach ($fumetti as $fumetto)
        <div class="myCard">
            <img class="comics-img" src="{{ $fumetto["thumb"] }}" alt="">
            <h3 class="comics-title">{{ strtoupper($fumetto["title"]) }}</h3>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        <button class="myBtn loadBtn btn">
            <h3 class="loadText">LOAD MORE</h3>
        </button>
    </div>

</div>
</section>
