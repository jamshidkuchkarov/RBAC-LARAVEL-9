@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Profile</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Profile</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="checkout-tabs">
        <div class="row">
            <div class="col-xl-10 col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-shipping" role="tabpanel" aria-labelledby="v-pills-shipping-tab">
                                <div>
                                    <h4 class="card-title">Profil ma'lumoti</h4>
                                    <p class="card-title-desc"></p>
                                    <form>
                                        <div class="form-group row mb-4">
                                            <label for="billing-name" class="col-md-2 col-form-label">Ism</label>
                                            <div class="col-md-10">
                                                <input type="text" value="{{auth()->user()->name}}" class="form-control" id="billing-name" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label for="billing-email-address" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input type="email" value="{{auth()->user()->email}}" class="form-control" id="billing-email-address" placeholder="Enter your email">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label for="billing-phone" class="col-md-2 col-form-label">Password</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="billing-phone" placeholder="Parolni kiriting..">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label for="billing-address" class="col-md-2 col-form-label">Passwordni tasdiqlash</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" id="billing-address" rows="3" placeholder="Parolni tasdiqlang!"></textarea>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-payment-tab">
                                <div>
                                    <h4 class="card-title">Payment information</h4>
                                    <p class="card-title-desc">Fill all information below</p>

                                    <div>
                                        <div class="form-check form-check-inline font-size-16">
                                            <input class="form-check-input" type="radio" name="paymentoptionsRadio" id="paymentoptionsRadio1" checked>
                                            <label class="form-check-label font-size-13" for="paymentoptionsRadio1"><i class="fab fa-cc-mastercard me-1 font-size-20 align-top"></i> Credit / Debit Card</label>
                                        </div>
                                        <div class="form-check form-check-inline font-size-16">
                                            <input class="form-check-input" type="radio" name="paymentoptionsRadio" id="paymentoptionsRadio2">
                                            <label class="form-check-label font-size-13" for="paymentoptionsRadio2"><i class="fab fa-cc-paypal me-1 font-size-20 align-top"></i> Paypal</label>
                                        </div>
                                        <div class="form-check form-check-inline font-size-16">
                                            <input class="form-check-input" type="radio" name="paymentoptionsRadio" id="paymentoptionsRadio3">
                                            <label class="form-check-label font-size-13" for="paymentoptionsRadio3"><i class="far fa-money-bill-alt me-1 font-size-20 align-top"></i> Cash on Delivery</label>
                                        </div>
                                    </div>

                                    <h5 class="mt-5 mb-3 font-size-15">For card Payment</h5>
                                    <div class="p-4 border">
                                        <form>
                                            <div class="form-group mb-0">
                                                <label for="cardnumberInput">Card Number</label>
                                                <input type="text" class="form-control" id="cardnumberInput" placeholder="0000 0000 0000 0000">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group mt-4 mb-0">
                                                        <label for="cardnameInput">Name on card</label>
                                                        <input type="text" class="form-control" id="cardnameInput" placeholder="Name on Card">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group mt-4 mb-0">
                                                        <label for="expirydateInput">Expiry date</label>
                                                        <input type="text" class="form-control" id="expirydateInput" placeholder="MM/YY">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group mt-4 mb-0">
                                                        <label for="cvvcodeInput">CVV Code</label>
                                                        <input type="text" class="form-control" id="cvvcodeInput" placeholder="Enter CVV Code">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-3">Product Images</h4>

                                                    <form action="/" method="post" class="dropzone dz-clickable">


                                                        <div class="dz-message needsclick">
                                                            <div class="mb-3">
                                                                <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                                            </div>

                                                            <h4>Drop files here or click to upload.</h4>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <a href="{{route('home')}}" class="btn text-muted d-none d-sm-inline-block btn-link">
                            <i class="mdi mdi-arrow-left me-1"></i> Orqoga</a>
                    </div> <!-- end col -->
                    <div class="col-sm-6">
                        <div class="text-end">
                            <a href="ecommerce-checkout.html" class="btn btn-success">
                                <i class="mdi mdi-truck-fast me-1"></i>Saqlash</a>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div>
    </div>
@endsection
