
<div class="swiper mySwiper m-5">
    <div class="swiper-wrapper">
        @foreach ($articles as $article)
        <div class="swiper-slide"> <x-card-article :article="$article"/> </div>
        @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>




<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
