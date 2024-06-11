@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Succesfully</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <h4 class="ms-3">Post Ad</h4>
            <div class="border-bottom"></div>
        </div>
    </div>
    <form action="{{route('auction.store')}}" method="POST"  enctype="multipart/form-data">
        @csrf
    <div class="row mt-5">
        <div class="col-md-2"><h5>Name</h5></div>
        <div class="col-md-5">
            <div class="input-group mb-3">
                <input
                type="text"
                name='name' 
                class="form-control @error('name') is-invalid @enderror"
                value="{{old('name')}}"
                />
            
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-2"><h5>Short Description</h5></div>
        <div class="col-md-8">
            <textarea 
            name="short_description"  
            id="short_description"
            class="form-control @error('short_description') is-invalid @enderror"
            value="{{old('short_description')}}"
            rows="2"></textarea>
        
            @error('short_description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-2"><h5>Description</h5></div>
        <div class="col-md-8">
            <textarea 
            name="description" 
            id="description"
            class="form-control @error('description') is-invalid @enderror"
            value="{{old('description')}}"
            rows="4"></textarea>
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-2"><h5>Images</h5></div>
        <div class="col-md-3">
            <div class="input-group">
                <input 
                type="file" 
                name="images[]" 
                class="form-control @error('images[]') is-invalid @enderror"
                value="{{old('images[]')}}"
                multiple id="postImages" 
                aria-describedby="inputGroupFileAddon04" 
                aria-label="Upload"
                /> 
            </div>
        </div>
        <div class="col-md-5">
            <div id="slike-preview" class="d-flex flex-row"></div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-2"><h5>Auction</h5></div>
        <div class="col-md-8">
            <div class="row">
                  <div class="col-6">
                        <div class="d-flex flex-row">
                            <div class="input-group">
                                <div class="mt-2 me-3">Started Price</div>
                                <input 
                                type="number" 
                                name='started_price' 
                                class="form-control @error('started_price') is-invalid @enderror"
                                value="{{old('started_price')}}"
                                />
                                @error('started_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                  </div>
                  <div class="col-6">
                    <div class="d-flex flex-row">
                        <select class="form-select form-select" aria-label=".form-select example" name="expiry_time">
                            <option selected >Auction End Date</option>
                            <option value="{{ now()->addDay()->format('Y-m-d H:i:s') }}">One Day</option>
                            <option value="{{now()->addDay()->format('Y-m-d H:i:s')}}">3 Days</option>
                            <option value="{{now()->addDay()->format('Y-m-d H:i:s')}}">5 Days</option>
                            <option value="{{now()->addDay()->format('Y-m-d H:i:s')}}">7 Days</option>
                          </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-2"><h5>Condition</h5></div>
        <div class="col-md-6">
            @foreach ($conditions as $condition)
            <div class="form-check form-check-inline">
                <input 
                class="form-check-input"
                type="checkbox" 
                id="condition_id" 
                name="condition_id" 
                value="{{$condition->id}}"
                
                >
                <label class="form-check-label" for="condition">{{$condition->name}}</label>
            </div>
            @endforeach
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-2"><h5>Category</h5></div>
        <div class="col-md-3">
            <select id="categorySelect" name="category_id" class="form-select" aria-label="Default select example">
                <option value="" selected>Choose Category</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-2"><h5>Subcategory</h5></div>
        <div class="col-md-3">
            <select id="subcategorySelect" name="subcategory_id" class="form-select" aria-label="Default select example">
                <option value="" selected>Choose Subcategory</option>
                @foreach ($subcategories as $subcategory)
                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-10">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-warning btn-sm">Post Ad</button>

            </div>
        </div>
    </div>
</form>
</div>
<div class="container">
    <div class="row">
        <a class="nav-link" href="javascript:void(0)" id="registerLink" data-bs-toggle="modal" data-bs-target="#exampleModal">Register</a>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-content">
                            <div class="text-end me-2 mt-2">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 12px; padding: 5px;"></button>
                            </div>
                            <div class="modal-body">
                              <div class="text-center mb-5">
                                <img src="img/logo_bid_buy.png" width="200px">
                              </div>
                                <form class="sing-register-form" action="login.php" method="post">
                                  <div class="text-center">
                                    <div class="mb-3 col-6">
                                        <input class="form-control form-control-sm" type="text" placeholder="Name" id="name" name="name" required>
                                    </div>
                                    <div class="mb-3">
                                      <input class="form-control form-control-sm" type="text" placeholder="Surname" id="sruname" name="surname" required>
                                    </div>
                                    <div class="mb-3">
                                      <input class="form-control form-control-sm" type="text" name="username" placeholder="Username" aria-label=".form-control-sm example" required>
                                    </div>
                                    <div class="mb-3">
                                     
                                      <input class="form-control form-control-sm" type="email" name="email" id="email" placeholder="Email Address" aria-label=".form-control-sm example"  required>
                                    </div>
                                    <div class="mb-3">
                                       
                                        <input class="form-control form-control-sm" type="password" placeholder="Password" id="password" name="password"  required>
                                    </div>
                                    <div class="mb-3">
                                     
                                      <input class="form-control form-control-sm" type="text" placeholder="Address" id="address" name="address"  required>
                                    </div>
                                    <div class="mb-3">
                                     
                                      <input class="form-control form-control-sm" type="text" placeholder="Number" id="number" name="number" required>
                                    </div>
                                    <div class="mb-5 mt-5">
                                      <button type="submit" class="custom-button w-100">Register</button>
                                    </div>
                                  </div>
                                </form>
                            </div>
                          </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>



@endsection