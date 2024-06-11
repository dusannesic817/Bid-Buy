<div class="modal fade" id="regModal" tabindex="-1" aria-labelledby="regModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
            <div class="text-end mt-2 me-2">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                        <div class="text-center mb-5">
                            <img src="/storage/logos/logo_bid_buy.png" width="200px">
                        </div>
                    <form method="POST" class="sing-register-form" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">

                            <div class="col-md-6">
                                <input 
                                id="name" 
                                type="text" 
                                class="form-control form-control-sm @error('name') is-invalid @enderror" 
                                placeholder="Name" 
                                name="name" 
                                value="{{ old('name') }}" 
                                required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input 
                                id="surname" 
                                type="text" 
                                class="form-control form-control-sm @error('surname') is-invalid @enderror" 
                                placeholder="Surname" 
                                name="surname" 
                                value="{{ old('surname') }}" 
                                required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-12">
                                <input id="email"
                                 type="email" 
                                 class="form-control form-control-sm @error('email') is-invalid @enderror" 
                                 placeholder="Email" 
                                 name="email" 
                                 value="{{ old('email') }}" 
                                 required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-md-12">
                                <input id="username"
                                 type="text" 
                                 class="form-control form-control-sm @error('username') is-invalid @enderror" 
                                 placeholder="Username" 
                                 name="username" 
                                 value="{{ old('username') }}" 
                                 required autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                           

                            <div class="col-md-12">
                                <input 
                                id="password" 
                                type="password" 
                                class="form-control form-control-sm @error('password') is-invalid @enderror" 
                                placeholder="Password"
                                name="password" 
                                required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                           

                            <div class="col-md-12">
                                <input 
                                id="password-confirm" 
                                type="password" 
                                class="form-control form-control-sm"
                                placeholder="Confirm Password"
                                name="password_confirmation" 
                                required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-md-12">
                                <input id="address"
                                 type="text" 
                                 class="form-control form-control-sm @error('address') is-invalid @enderror" 
                                 placeholder="Address" 
                                 name="address" 
                                 value="{{ old('address') }}" 
                                 required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-md-12">
                                <input id="number"
                                 type="text" 
                                 class="form-control form-control-sm @error('username') is-invalid @enderror" 
                                 placeholder="Number" 
                                 name="number" 
                                 value="{{ old('number') }}" 
                                 required autocomplete="number">

                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-5 mt-5">
                            <div class="col-md-12">
                            <button type="submit" class="custom-button w-100">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


