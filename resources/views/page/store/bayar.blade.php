@extends('layout.app')
@section('konten')
    <div class="container">

        <div class="card border-0 shadow-sm mt-3">
            <div class="card-body">
                <div class="row ">
                    <div class="col-4">
                        <p class="text-secondary mb-1 small">Sub Total</p>
                        <h5 class="mb-0">$360.00</h5>
                    </div>
                    <div class="col-4 text-center">
                        <p class="text-secondary mb-1 small">Tax</p>
                        <h5 class="mb-0">$40.00</h5>
                    </div>
                    <div class="col-4 text-right">
                        <p class="text-secondary mb-1 small">Discount</p>
                        <h5 class="mb-0">-$100.00</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4 border-0 shadow-sm border-top-dashed">
            <div class="card-body text-center">
                <p class="text-secondary my-1">Net Payable</p>
                <h3 class="mb-0">$400.00</h3>
            </div>
        </div>

        <p class="text-center text-secondary mb-0">Pay with</p>

        <div class="btn-group mt-4 w-100" role="group" aria-label="Basic example">
            <a href="#" class="btn btn-light active">Credit Card</a>
            <a href="#" class="btn btn-light">PayPal</a>
        </div>

        <h6 class="subtitle">Card Information</h6>
        <div class="form-group float-label active">
            <input type="text" class="form-control" required="" value="Ammy Johnson">
            <label class="form-control-label">Card Holder Name</label>
        </div>
        <div class="form-group float-label active">
            <input type="text" class="form-control card-type" required="" value="D000 000O  0000 O000">
            <label class="form-control-label">Card Number</label>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group float-label active">
                    <input type="text" class="form-control" required="" value="154">
                    <label class="form-control-label">CVV</label>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group float-label active">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" required="" value="05">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" required="" value="2025">
                        </div>
                    </div>

                    <label class="form-control-label">Expiry Date</label>
                </div>
            </div>
        </div>
        <div class="form-group float-label active">
            <select class="form-control">
                <option>Australia</option>
                <option>America</option>
                <option>Africa</option>
                <option>France</option>
            </select>
            <label class="form-control-label">Country</label>
        </div>

        <a href="/tankyou" class="btn btn-lg btn-default text-white btn-block btn-rounded shadow"><span>Pay Now</span><i class="material-icons">arrow_forward</i></a>
        <br>
        <br>

    </div>
@endsection