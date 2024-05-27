@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2" style="border: 1px solid black;">
            <div class="overflow-auto">
                
                  <div><a href="#">Link 1</a></div>
                  <div>Link 2</div>
                
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
                <!-- Dodajte ostale kartice ovdje -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="..." class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="border">Najtrazeniji predmeti</div>
            <!-- Dodajte karusel sa predmetima ovdje -->
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