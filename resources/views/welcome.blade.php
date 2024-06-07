@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2" >
            <div class="overflow-auto">
               <ul class="mt-5">
                @foreach ($categories as $category)
                <li><a href="{{route('category.show',[$category->id])}}">{{$category->name}}</a></li>
                @endforeach

               </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="pt-1 ps-2">Top Offers</h5>
                    <div class="border-bottom"></div>
                </div>
                @foreach ($auctions as $auction)
                    <div class="col-md-3 mt-3 mb-3">
                        <div class="card h-100" style="width: 12rem;">
                            <a href="{{route('auction.show',[$auction->id])}}"><img src="{{ Storage::url('public/auction_images/' . $auction->images->first()->img_path) }}" class="card-img-top" alt="..." style="object-fit: cover; height: 8rem;"> </a>

                           

                            <div class="card-body">
                                <div class="card-text" style="font-size: 14px">{{$auction->name}}</div> 
                                <div class="card-text" style="font-size: 12px;">Offer</div>
                            </div>
                        </div>
                    </div>
                @endforeach  
        </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active carousel-blog">
                            <a href="https://olympics.com/en/paris-2024"><img src="/storage/logos/oi_paris.jpg" class="d-block w-100" alt="..."></a>
                            
                          </div>
                          <div class="carousel-item carousel-blog">
                           <a href="https://www.uefa.com/euro2024/"> <img src="/storage/logos/euro.jpg" class="d-block w-100" alt="..."></a>
                          </div>
                          <div class="carousel-item carousel-blog">
                            <a href="https://marketbusinessnews.com/financial-glossary/online-shopping-definition-meaning/"><img src="/storage/logos/online_shopping.jpg" class="d-block w-100" alt="...">
                          </a>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
        </div>       
            <div class="row mt-5">
                <div class="col-md-12">
                    <h5 class="pt-1 ps-2">The most popular</h5>
                    <div class="border-bottom"></div>
                </div>
                <div class="col-md-12 mt-3">
                    <div id="carouselNajtrazenijiPredmeti" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="row">
                                        <!-- Prvi slajd karusela -->
                                        @foreach ($auctions as $auction)
                                        <div class="col-2">
                                            <div class="card h-100" style="width: 12rem;"> 

                                                <a href="{{route('auction.show',[$auction->id])}}"><img src="{{ Storage::url('public/auction_images/' . $auction->images->first()->img_path) }}" class="card-img-top" alt="..." style="object-fit: cover; height: 8rem;"> </a>


                                                <div class="card-body">
                                                    <div class="card-text" style="font-size: 14px">{{$auction->name}}</div> 
                                                    <div class="card-text" style="font-size: 12px;">Offer</div> 
                                                </div>
                                            </div>
                                            
                                        </div>
                                        @endforeach
                                        <!-- Dodatne kartice -->
        
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="row">
                                        <!-- Drugi slajd karusela -->
                                        <div class="col-3">
                                            <div class="card">
                                                <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Dodatne kartice -->
                                        <div class="col-3">
                                            <div class="card">
                                                <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card">
                                                <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card">
                                                <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselNajtrazenijiPredmeti" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselNajtrazenijiPredmeti" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>  
    <div class="row mt-5">
        <div class="col-md-3">
            <div class="d-flex flex-column text-center">
                <div><i class="bi bi-shield-check" style="font-size: 64px; color: #85c440"></i></div>
                <h5>Safety</h5>
                <small>Your safety sell</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="d-flex flex-column text-center">
                <div><i class="bi bi-bookmark-star" style="font-size: 64px; color: #85c440"></i></div>
                <h5>Commitment</h5>
                <small>Since 2020 with you</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="d-flex flex-column text-center">
                <div><i class="bi bi-bar-chart"  style="font-size: 64px; color: #85c440"></i></div>
                <h5>Auction</h5>
                <small>Feel the charm of competition</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="d-flex flex-column text-center">
                <div><i class="bi bi-people-fill" style="font-size: 64px; color: #85c440"></i></div>
                <h5>Comunity</h5>
                <small>Stay in touch with the seller</small>
            </div>
        </div>
        <!-- Dodajte ostale elemente ovdje -->
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h5 class="pt-1 ps-2">Our Customers About Us</h5>
            <div class="border-bottom mb-3"></div>
            <div class="d-flex flex-row mb-4">
                <div class="col-6 me-3" ><p class="fw-bold fst-italic">"I saved a significant amount of money by purchasing at auctions."</p>
                    "I not only saved a considerable amount of money by buying through auctions, 
                    but I also earned a lot by selling through them.
                    I must mention that through this website, I met friends with whom I've continued to stay in touch even after the auctions ended."<br>
                    <p class="mt-3">- Metalkica</p>
                </div>
                     
                <div class="col-6" ><p class="fw-bold fst-italic">"Thank you very much"</p>
                    I'm glad to see you're still the most reliable website for buying and selling. 
                    I truly believe that the site has come a long way since its inception and has set a high standard for others of its kind.""<br>
                    <p class="mt-3">- Polixenia</p>
                </div>
                
            </div>
            <div class="d-flex flex-row">
                <div class="col-6 me-3" ><p class="fw-bold fst-italic">"I saved a significant amount of money by purchasing at auctions."</p>
                    "Not only can I afford many things now that I couldn't before, and free myself from those that were holding me back,
                    in a Feng Shui kind of way, but I can also, even if it's in a 'cyber' way, meet many good people, and sometimes stay in touch 
                    with some who are a little 'strange'. 
                    BIDBUY IS REALLY A WORLD, AND A WAY OF LIFE!!!""<br>
                    <p class="mt-3">- cole992</p>
                </div>
                <div class="col-6" ><p class="fw-bold fst-italic">"BidBuy is a kind of entertainment in itself, not just an online store."</p>
                    "Typically, on similar websites, we find something we need, buy it, and then forget about it, but Limundo is different.
                     People somehow socialize between themselves, selling and buying items, and the whole thing takes on a different form - it's familial and close to 
                     all of us who spend time on Limundo. One doesn't attach oneself to the items; one attaches oneself to what 
                     Limundo has managed to convey - the satisfaction of time well spent, the enjoyment of buying and selling, reminiscing about some beautiful moments
                      and some beautiful times... In a word - it's nice to be here."<br>
                    <p class="mt-3">- micov122</p>
                </div>
                
            </div>

        </div>
    </div>
</div>
</div>
<footer class="mt-3">
    <div class="pt-3 pb-3" style="background-color: #fef4e3;">
        <h5 class="text-center" style="color: #014675;">Your Bidbuy</h5>
    </div>
    <div class="text-center mt-2">Bidbut d.o.o. / Miomira Popova 12, 11070 Novi Beograd, Srbija / 011 123 73 00 / MB: 245463301 / PIB: 3450435073</div>
    <div class="d-flex justify-content-center flex-wrap mt-5">
        <div class="me-md-5 mb-3"><img src="/storage/logos/dina_card.png" width="100px"></div>
        <div class="me-md-5 mb-3"><img src="/storage/logos/visa.jpg" width="80px"></div>
        <div class="me-md-5 mb-3"><img src="/storage/logos/maestro.png" width="70px"></div>
        <div class="me-md-5 mb-3"><img src="/storage/logos/paribas.png" width="110px"></div>
        <div class="me-md-5 mb-3"><img src="/storage/logos/paypal.jpg" width="110px"></div>
        <div class="me-md-3 mb-3"><img src="/storage/logos/google_play.png" width="130px"></div>
        <div class="me-md-5 mb-3"><img src="/storage/logos/app_gallery.png" width="130px"></div>
    </div>
</footer>



@endsection