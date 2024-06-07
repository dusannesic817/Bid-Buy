@extends('layouts.app')


@section('content')
<div class="container mt-5">
    <x-message 
    type="{{session('alertType')}}"
    message="{{ __(session('alertMsg')) }}"
    />
    <div class="row mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Spisak Kategorija</li>
                <li class="breadcrumb-item active" aria-current="page">Ime Kategorije</li>
                <li class="breadcrumb-item active" aria-current="page">Ime Podkategorije</li>
                <li class="breadcrumb-item active" aria-current="page">Naziva predmeta</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="fixed-image">
                <img id="mainImage" src="{{ Storage::url('public/auction_images/' . $auction->images->first()->img_path) }}" class="main-image fixed-image" alt="Image">
            </div>
            <div class="d-flex flex-row justify-content-between mt-3">
                @foreach ($auction->images as $index => $image)
                    @if ($index === 0)
                        @continue
                    @endif
                    <div style="flex: 1;" class="me-2" >
                        <img id="smallImage{{ $index + 1 }}" src="{{ Storage::url('public/auction_images/' . $image->img_path) }}" class="img-fluid" alt="Image" width="100px">
                    </div>
                @endforeach
            </div>
        </div>

        <div class="col-md-5">
            <div class="ms-3">
                <h5 class="mb-5">{{$auction->name}}</h5>
                <div class="d-flex flex-column bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <div>Current Value: {{$currentOffer}} $</div>
                        <form method="POST" action="{{route('offer.store')}}">
                            @csrf
                            <input type="hidden" name="auction_id" value="{{ $auction->id }}">
                            <div class="input-group mb-3">
                                <input 
                                type="text" 
                                name="price"
                                class="form-control @error('price') is-invalid @enderror"
                                placeholder="Offer" 
                                style="border-color: #f79420;">
                                @error('started_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <button class="btn btn-outline-warning" type="submit" id="button-addon1" style="border-color: #f79420;">Licitiraj</button>
                            </div>
                        </form>
                       
                        <small class="text-muted ms-1">{{$nextOffer}} minumum</small>
                    </div>
                    <div class="d-flex flex-row justify-content-between bd-highlight mb-3">
                        <div class="p-2 bd-highlight"><i class="bi bi-clock-fill" style="font-size: 20px; color: #85c440"></i> 1 dan, 6 sati</div>
                        <div class="p-2 bd-highlight">{{$countOffers}} offers</div>
                   
                      </div>
                   
                    <div class="p-2 bd-highlight">Pregleda: 13</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Seller</h5>
                    <div class="d-flex flex-column bd-highlight mb-3">
                        <div class="mb-2" style="font-size: 24px;"><i class="bi bi-person-fill" style="font-size: 24px; color: #85c440"></i>{{$auction->user->username}}({{$count}})</div>
                        <div class="mb-2">{{$auction->user->name}}, {{$auction->user->address}}</div>
                        <div class="mb-2">Broj Pozitivnih ocena</div>
                        <div class="mb-2">Broj negativnih ocena</div>
                      </div>
                      <div class="row mb-2">
                        <div class="col">
                            <button type="button" class="btn btn-outline-warning w-100"><i class="bi bi-chat-square-dots"></i> Ask Saller</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-outline-warning w-100"><i class="bi bi-shop-window"></i> All seller items</button>
                        </div>
                    </div>
                    
                </div>
              </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="row border-bottom">
                <h4 class="mb-3">Detalji premeta</h4>
                <div class="col-md-6 border-top" style="background-color: #fef4e3;">
                    Stanje
                </div>
                <div class="col-md-6 border-top">
                    {{$auction->conditions->name}}
                </div>
            </div>
            <div class="row mt-3">
                <div>{{$auction->short_description}}</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row ">
                <h4 class="mb-3">Uslovi prodaje i napomena</h4>
                <div class="col-md-6 border-top" style="background-color: #fef4e3;">Placanje</div>
                <div class="col-md-6 border-top">Nazivi placanje</div>
            </div>
            <div class="row  border-bottom">
                <div class="col-md-6 border-top" style="background-color: #fef4e3;">Isporuka</div>
                <div class="col-md-6 border-top">Naborjane vrste isporuke</div>
            </div>
            <div class="row mt-3">
                <div>{{$auction->description}}</div>
            </div>
        </div>
    </div>
</div>

@endsection