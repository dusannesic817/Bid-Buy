@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2" style="border: 1px solid black;">
            <div class="overflow-auto">
               <ul>
                    <li><a href="##">Link 1</a></li>
                    <li><a href="##">Link 1</a></li>
                    <li><a href="##">Link 1</a></li>
                    <li><a href="##">Link 1</a></li>
               </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <div class="border">Top ponude</div>
                </div>
                <div class="col-md-3 mt-3 mb-3">
                    <div class="card" style="width: 12rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-text">Price</div>
                            <div class="card-text">Offer</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mb-3">
                    <div class="card" style="width: 12rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-text">Price</div>
                            <div class="card-text">Offer</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mb-3">
                    <div class="card" style="width: 12rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-text">Price</div>
                            <div class="card-text">Offer</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mb-3">
                    <div class="card" style="width: 12rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-text">Price</div>
                            <div class="card-text">Offer</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mb-3">
                    <div class="card" style="width: 12rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-text">Price</div>
                            <div class="card-text">Offer</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mb-3">
                    <div class="card" style="width: 12rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-text">Price</div>
                            <div class="card-text">Offer</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mb-3">
                    <div class="card" style="width: 12rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-text">Price</div>
                            <div class="card-text">Offer</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mb-3">
                    <div class="card" style="width: 12rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-text">Price</div>
                            <div class="card-text">Offer</div>
                        </div>
                    </div>
                </div>
    </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Second slide label</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                            </div>
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
                    <div class="border">Najtraženiji predmeti</div>
                </div>
                <div class="col-md-12">
                    <div id="carouselNajtrazenijiPredmeti" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="row">
                                        <!-- Prvi slajd karusela -->
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
                            <!-- Dodajte još slajdova ovdje -->
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
                <div>img</div>
                <div>Text</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="d-flex flex-column text-center">
                <div>img</div>
                <div>Text</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="d-flex flex-column text-center">
                <div>img</div>
                <div>Text</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="d-flex flex-column text-center">
                <div>img</div>
                <div>Text</div>
            </div>
        </div>
        <!-- Dodajte ostale elemente ovdje -->
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <div>Our Customers </div>
            <div class="d-flex flex-row mb-4">
                <div>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </div>
                <div>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </div>
                
            </div>
            <div class="d-flex flex-row">
                <div>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </div>
                <div>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </div>
                
            </div>

        </div>
        <!-- Dodajte ostale elemente ovdje -->
    </div>
    <footer class="row mt-5">
        <div class="col-md-12">
            <div class="border">Text</div>
            <div class="d-flex mt-5">
                <div>img1</div>
                <div>img1</div>
                <div>img1</div>
            </div>
        </div>
    </footer>
</div>

@endsection