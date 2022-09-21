@extends('admin.master')
@section('content')
    <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title mb-0">Shipping information</h6>
                            <div class="dropdown morphing scale-left">
                                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                    aria-label="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                <ul class="dropdown-menu shadow border-0 p-2">
                                    <li><a class="dropdown-item" href="#">File Info</a></li>
                                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                                    <li><a class="dropdown-item" href="#">Move to</a></li>
                                    <li><a class="dropdown-item" href="#">Rename</a></li>
                                    <li><a class="dropdown-item" href="#">Block</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 row-deck">
                                <div class="col-md-6">
                                    <div>
                                        <div class="d-flex align-items-center fs-5 mb-3">
                                            <div class="avatar rounded-circle no-thumbnail"><i class="fa fa-user"></i></div>
                                            <div class="flex-fill ms-2 text-truncate">
                                                <div class="h6 mb-0">Fidel Tonn</div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center fs-5 mb-3">
                                            <div class="avatar rounded-circle no-thumbnail"><i class="fa fa-map-marker"></i>
                                            </div>
                                            <div class="flex-fill ms-2 text-truncate">
                                                <div class="h6 mb-0">134 Oakmound Road, Chicago, 60653</div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center fs-5">
                                            <div class="avatar rounded-circle no-thumbnail"><i class="fa fa-phone"></i>
                                            </div>
                                            <div class="flex-fill ms-2 text-truncate">
                                                <div class="h6 mb-0">773-268-2525</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-success d-block w-100">
                                        <i class="fa fa-bus fs-3 d-block mb-3"></i>
                                        <span class="fs-5">Standard</span>
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-success d-block w-100">
                                        <i class="fa fa-plane fs-3 d-block mb-3"></i>
                                        <span class="fs-5">1 Days</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title mb-0">Review items (6)</h6>
                            <div class="dropdown morphing scale-left">
                                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                    aria-label="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                <ul class="dropdown-menu shadow border-0 p-2">
                                    <li><a class="dropdown-item" href="#">File Info</a></li>
                                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                                    <li><a class="dropdown-item" href="#">Move to</a></li>
                                    <li><a class="dropdown-item" href="#">Rename</a></li>
                                    <li><a class="dropdown-item" href="#">Block</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 row-deck">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="d-flex align-items-center fs-5 mb-3">
                                        <div class="rounded no-thumbnail"><img class="img-fluid"
                                                src="../assets/img/ecommerce/4.png" width="60" alt=""></div>
                                        <div class="ms-2">
                                            <div class="h6 mb-2">Bag</div>
                                            <div class="h6 mb-0 text-success">$19.49 X 2 = <strong>$38.98</strong></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="d-flex align-items-center fs-5 mb-3">
                                        <div class="rounded no-thumbnail"><img class="img-fluid"
                                                src="../assets/img/ecommerce/5.png" width="60" alt=""></div>
                                        <div class="ms-2">
                                            <div class="h6 mb-2">Water Bottel</div>
                                            <div class="h6 mb-0 text-success">$49.99 X 1 = <strong>$49.99</strong></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="d-flex align-items-center fs-5 mb-3">
                                        <div class="rounded no-thumbnail"><img class="img-fluid"
                                                src="../assets/img/ecommerce/6.png" width="60" alt=""></div>
                                        <div class="ms-2">
                                            <div class="h6 mb-2">Wooden</div>
                                            <div class="h6 mb-0 text-success">$22.00 X 1 = <strong>$22.00</strong></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="d-flex align-items-center fs-5 mb-3">
                                        <div class="rounded no-thumbnail"><img class="img-fluid"
                                                src="../assets/img/ecommerce/1.png" width="60" alt=""></div>
                                        <div class="ms-2">
                                            <div class="h6 mb-2">Light</div>
                                            <div class="h6 mb-0 text-success">$89.99 X 2 = <strong>$179.89</strong></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="d-flex align-items-center fs-5 mb-3">
                                        <div class="rounded no-thumbnail"><img class="img-fluid"
                                                src="../assets/img/ecommerce/2.png" width="60" alt=""></div>
                                        <div class="ms-2">
                                            <div class="h6 mb-2">Chair</div>
                                            <div class="h6 mb-0 text-success">$25.00 X 2 = <strong>$50.00</strong></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="d-flex align-items-center fs-5 mb-3">
                                        <div class="rounded no-thumbnail"><img class="img-fluid"
                                                src="../assets/img/ecommerce/3.png" width="60" alt=""></div>
                                        <div class="ms-2">
                                            <div class="h6 mb-2">Clock</div>
                                            <div class="h6 mb-0 text-success">$11.49 X 2 = <strong>$22.98</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title mb-0">Payment Details</h6>
                            <div class="dropdown morphing scale-left">
                                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                    aria-label="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                <ul class="dropdown-menu shadow border-0 p-2">
                                    <li><a class="dropdown-item" href="#">File Info</a></li>
                                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                                    <li><a class="dropdown-item" href="#">Move to</a></li>
                                    <li><a class="dropdown-item" href="#">Rename</a></li>
                                    <li><a class="dropdown-item" href="#">Block</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <h6 class="mb-3">Card Detail</h6>
                                    <form class="row">
                                        <div class="col-12">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                                <input type="number" class="form-control"
                                                    placeholder="Credit Card Number">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                <input type="number" class="form-control" placeholder="MM/YY">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                                <input type="number" class="form-control" placeholder="CVV">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                <input type="text" class="form-control" placeholder="Name on Card">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table align-middle text-end table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td class="text-muted">Total</td>
                                                    <td>$363.93</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">Discount</td>
                                                    <td>$30.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">Delivery Charges</td>
                                                    <td>$50.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">Tax</td>
                                                    <td>$10.00</td>
                                                </tr>
                                                <tr class="border-top fs-5">
                                                    <td><strong>Payable Amount</strong></td>
                                                    <td><strong>$453.93</strong></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <button class="btn btn-success btn-lg px-5 fs-5 me-5">Pay
                                                            Now</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
