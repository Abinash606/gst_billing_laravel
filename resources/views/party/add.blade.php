@extends('layout.app')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title font-weight-bold text-uppercase"> Add Clients </h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- Start Form  -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        @if (session('status'))
                           <div class=" alert alert-success"> {{ session ('status') }}  </div>
                        @endif

                        @if (count($errors))
                        <div class=" alert alert-danger">
                            <strong> Validation error : please fix the following issues</strong>
                            <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li> 
                        @endforeach
                        </ul>


                        </div>
                        @endif
                        <h4 class="header-title text-uppercase"> Basic Info</h4>
                        <hr>
                        <form class="needs-validation" method="POST" action="{{ route('create_party') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom01">Type</label>
                                        <select name="party_type" class="form-control border-bottom "
                                            id="validationCustom01" placeholder="Please select Type">
                                            <option value="client" selected>Client</option>
                                            <option value="vendor">Vendor</option>
                                            <option value="employee">Employee</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom01">Full Name</label>
                                        <input type="text" class="form-control border-bottom" id="validationCustom01"
                                            placeholder="Enter client's full name" name="full_name">
                                        <div class="invalid-feedback">
                                            Please provide a Full name.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom02">Phone/Mobile Number</label>
                                        <input type="text" class="form-control border-bottom " id="validationCustom02"
                                            placeholder="Enter phone/mobile number" name="phone_no">
                                        <div class="invalid-feedback">
                                            Please provide a Number.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom03">Address</label>
                                        <input type="text" class="form-control border-bottom " id="validationCustom02"
                                            placeholder="Enter Address" name="address">
                                        <div class="invalid-feedback">
                                            Please provide a valid Address.
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <h4 class="header-title text-uppercase">Bank Details</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom04">Account Holder Name</label>
                                        <input type="text" class="form-control border-bottom " id="validationCustom04"
                                            placeholder="Enter Accoumt Holder name" 
                                            name="account_holder_name">
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom05">Account Number</label>
                                        <input type="text" class="form-control border-bottom " id="validationCustom05"
                                            placeholder="Enter Account Number" name="account_no">
                                        <div class="invalid-feedback">
                                            Please provide a valid Code.
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="validationCustom02">Bank Name</label>
                                        <input type="text" class="form-control border-bottom " id="validationCustom02"
                                            placeholder="Enter Bank Name" name="bank_name">
                                        <div class="invalid-feedback">
                                            Please provide a GSTIN No.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">IFSC Code</label>
                                    <input type="text" class="form-control border-bottom "
                                        id="validationCustom02" placeholder="Enter IFSC Code"
                                        required="" name="ifsc_code">
                                    <div class="invalid-feedback">
                                        Please provide a Email.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">ZIP Code</label>
                                    <input type="text" class="form-control border-bottom "
                                        id="validationCustom02" placeholder="Enter ZIP Code"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please provide a Zip.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">State</label>
                                    <input type="text" class="form-control border-bottom "
                                        id="validationCustom02" placeholder="Enter State" required="">
                                    <div class="invalid-feedback">
                                        Please provide a State.
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="validationCustom02">Branch Address</label>
                                    <input type="text" class="form-control border-bottom " id="validationCustom02"
                                        placeholder="Enter Branch"  name="branch_address">
                                    <div class="invalid-feedback">
                                        Please provide a Branch Name.
                                    </div>
                                </div>
                            </div>
                            <br>

                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-secondary" type="reset">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
