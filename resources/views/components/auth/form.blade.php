<div class="modal fade" id="{{$id}}" tabindex="-1" aria-labelledby="logModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
            <div class="text-end mt-2 me-2">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                        <div class="text-center mb-5">
                            <img src="/storage/logos/logo_bid_buy.png" width="200px">
                        </div>
                        <div class="row text-center mb-3">
                            <div class="col-md-12">
                                <h4 style="color: #014675">{{$type}}</h4>
                            </div>
                        </div>
                        {{$slot}}
                    </div>
                </div>
            </div>
        </div>
    
    