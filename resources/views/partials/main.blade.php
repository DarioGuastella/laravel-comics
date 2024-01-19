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

<style>
    /* Jumbotron */
    #jumbo {
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: top;
    }

    #jumbotron {
        height: 25rem;
    }

    /* comics cards */
    #cardsWrapper {
        display: flex;
        padding: 2rem;
        flex-wrap: wrap;
    }

    .myBtn {
        background-color: #0282f9;
        display: inline-block;
        border-radius: 0;
    }

    .loadText {
        font-size: 0.8rem;
        font-weight: 600;
        color: white;
    }

    .currentSeries {
        padding: 0.4rem 1.6rem;
        transform: translate(0, -50%);
    }

    .loadBtn {
        margin-bottom: 1rem;
        padding: 0.6rem 4rem;

    }

    h3 {
        margin-bottom: 0;
    }

    /* card singola */

    .comics-title {
    margin-bottom: 0;
    font-weight: 500;
    font-size: 0.9rem;
    padding: 1rem 0 2rem 0;
    color: #d3cfcf;
}

.comics-img {
    height: 12rem;
    width: 12rem;
    object-fit: cover;
    object-position: top;
}

.myCard {
    width: calc(100% / 6);
}

.my-bg-dark {
    background-color: #222;
}
</style>