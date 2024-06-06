@extends('layouts.app')


@section('content')
<div class="container mt-2">
    <div class="row">
        <aside class="col-12 col-md-3">
            <div class="row">
                <div class="mb-3"><a href="{{route('welcome.index')}}"><i class="bi bi-arrow-left-short"></i>See all products</a></div>
                <h5 class="mb-3">Subcategories</h5>
                <div>
                    <ul>
                      @foreach ($category->subcategories as $subcategory)
                      <li>
                        <a href="#">{{$subcategory->name}}</a>
                    </li>
                      @endforeach
       
                    </ul>
                </div>
                <div class="border-bottom mt-3"></div>
            </div>
            <div class="row mt-3">
                <h5>Filter</h5>
                <div class="accordion" id="sort">             
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Sortiraj
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#sort">
                            <div class="accordion-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="sort" id="flexCheckDefault1" onclick="limitCheckbox('sort', this)">
                                    <label class="form-check-label" for="flexCheckDefault1">
                                        Najnovije
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="sort" id="flexCheckDefault2" onclick="limitCheckbox('sort', this)">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        Pri isteku
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="sort" id="flexCheckDefault3" onclick="limitCheckbox('sort', this)">
                                    <label class="form-check-label" for="flexCheckDefault3">
                                        Najtraženije
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="accordion" id="condition">             
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#condition-button" aria-expanded="false" aria-controls="condition-button">
                                Stanje
                            </button>
                        </h2>
                        <div id="condition-button" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#condition">
                            <div class="accordion-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="condition" id="flexCheckCondition1" onclick="limitCheckbox('condition', this)">
                                    <label class="form-check-label" for="flexCheckCondition1">
                                        Novo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="condition" id="flexCheckCondition2" onclick="limitCheckbox('condition', this)">
                                    <label class="form-check-label" for="flexCheckCondition2">
                                        Kao Novo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="condition" id="flexCheckCondition3" onclick="limitCheckbox('condition', this)">
                                    <label class="form-check-label" for="flexCheckCondition3">
                                        Polovno
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="price">             
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#price-button" aria-expanded="false" aria-controls="condition-button">
                                Cena
                            </button>
                        </h2>
                        <div id="price-button" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#price">
                            <div class="accordion-body">
                                <div class="input-group">
                                    <span class="input-group-text">Od</span>
                                    <input type="text" aria-label="from-price" class="form-control">
                                    <span class="input-group-text">Do</span>
                                    <input type="text" aria-label="to-price" class="form-control">
                                    <button type="submit" class="btn btn-primary btn-sm">Primeni</button>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </aside>
        <div class="col-12 col-md-9">
            

            <div class="row">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('welcome.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <h5 class="mb-4">{{$category->name}}</h5>
                <div class="border-bottom"></div>
            </div>
            @foreach ($items as $item)
            <div class="row item" style="height: 230px;">
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <a href="{{route('auction.show',[$item->id])}}"><img class="ms-2 mt-2 img-fluid" src="{{ Storage::url('public/auction_images/' . $item->images->first()->img_path) }}" width="260px"></a>
                </div>
                <div class="col-6 mt-4">
                    <div class="ms-1">
                        <h5><a href="{{route('auction.show',[$item->id])}}" style="text-decoration: none; color: #014675;">{{$item->name}}</a></h5>
                        <div class="d-flex flex-row mb-3 mt-5">
                            <div class="me-3">Aukcijska Cena:</div>
                            <div>{{$item->started_price}} RSD</div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="me-3">Stanje:</div>
                            <div>{{$item->conditions->name}}</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="mt-5">
                        <div><i class="bi bi-bar-chart" style="font-size: 24px; color: rgb(132, 169, 202);"></i> 36 ponuda</div>
                        <div class="border-bottom mt-2 mb-2"></div>
                        <div><i class="bi bi-hourglass-split" style="font-size: 24px; color: rgb(132, 169, 202);"></i>{{$item->difference}}</div>
                    </div>
                </div>
             
            </div>
            <div class="w-100"></div>
            <div class="border-bottom"></div>
            @endforeach
        </div>
        
    </div>
</div>
  
</body>
@endsection