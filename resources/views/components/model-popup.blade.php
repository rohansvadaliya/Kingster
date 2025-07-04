@if (Route::is(['index']))
<!-- Provider Modal -->
<div class="modal fade" id="provider" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h5>Become a Provider</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="wizard-fieldset">
                <div class="modal-body pb-0">
                    <ul class="d-flex align-items-center flex-wrap mb-1 border-bottom" id="providerwizard">
                        <li class="active d-flex align-items-center me-4 mb-3">
                            <span class="avatar avatar-md rounded me-2 border-bottom">1</span>
                            <h6 class="fs-16 fw-medium">Choose Category</h6>
                        </li>
                        <li class="d-flex align-items-center me-4 mb-3">
                            <span class="avatar avatar-md rounded me-2">2</span>
                            <h6 class="fs-16 fw-medium">Service Location</h6>
                        </li>
                        <li class="d-flex align-items-center me-4 mb-3">
                            <span class="avatar avatar-md rounded me-2">3</span>
                            <h6 class="fs-16 fw-medium">Personal Info</h6>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <span class="avatar avatar-md rounded me-2">4</span>
                            <h6 class="fs-16 fw-medium">Confirmation</h6>
                        </li>
                    </ul>
                </div>
                <fieldset class="first-field" id="first-field">
                    <div class="modal-body pb-1">
                        <div class="bg-light-300 p-3 br-10 text-center mb-4">
                            <h4>List your service & Get the leads around you</h4>
                            <p>List your service & Get the leads around you</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">What type of Service do your Provide?</label>
                            <select class="select">
                                <option>Select Service</option>
                                <option>House Cleaning</option>
                                <option>Car Wash</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Popular Service Categories</label>
                            <div class="category-badge">
                                <span class="badge d-inline-flex align-items-center mb-2 me-2"><img
                                        src="{{URL::asset('assets/img/icons/service-icon-01.svg')}}" alt="icon"
                                        class="me-2">Construction</span>
                                <span class="badge d-inline-flex align-items-center mb-2 me-2"><img
                                        src="{{URL::asset('assets/img/icons/service-icon-02.svg')}}" alt="icon"
                                        class="me-2">Removals</span>
                                <span class="badge d-inline-flex align-items-center mb-2 me-2"><img
                                        src="{{URL::asset('assets/img/icons/service-icon-03.svg')}}" alt="icon" class="me-2">Furniture
                                    Assembly</span>
                                <span class="badge d-inline-flex align-items-center mb-2 me-2"><img
                                        src="{{URL::asset('assets/img/icons/service-icon-04.svg')}}" alt="icon"
                                        class="me-2">Electrical</span>
                                <span class="badge d-inline-flex align-items-center mb-2"><img
                                        src="{{URL::asset('assets/img/icons/service-icon-05.svg')}}" alt="icon" class="me-2">Computer
                                    Service</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-end">
                        <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Get Started</a>
                    </div>
                </fieldset>
                <fieldset class="second-field">
                    <div class="modal-body pb-1">
                        <div class="bg-light-300 p-3 br-10 text-center mb-4">
                            <h4>List your service & Get the leads around you</h4>
                            <p>List your service & Get the leads around you</p>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">What type of Service do your Provide?</label>
                            <select class="select">
                                <option>Select Service</option>
                                <option selected>House Cleaning</option>
                                <option>Car Wash</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">What type of Sub Services do your Provide?</label>
                            <div class="form-check ps-0">
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service1" type="checkbox"
                                        id="service1" checked>
                                    <label class="form-check-label ms-2" for="service1">
                                        Commercial Property
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="service2">
                                    <label class="form-check-label ms-2" for="service2">
                                        Empty House Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center active mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="service3" checked>
                                    <label class="form-check-label ms-2" for="service3">
                                        Glass Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="service4">
                                    <label class="form-check-label ms-2" for="service4">
                                        Carpet washing
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center active mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="service5" checked>
                                    <label class="form-check-label ms-2" for="service5">
                                        Sofa Washing
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="service6">
                                    <label class="form-check-label ms-2" for="service6">
                                        Office Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="service7">
                                    <label class="form-check-label ms-2" for="service7">
                                        Exterior Glass Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="service8">
                                    <label class="form-check-label ms-2" for="service8">
                                        Shop Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="service9">
                                    <label class="form-check-label ms-2" for="service9">
                                        Ironing Service
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="service10">
                                    <label class="form-check-label ms-2" for="service10">
                                        Bed Washing
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center justify-content-between">
                        <a href="javascript:void(0);" class="btn btn-light prev_btn"><i
                                class="ti ti-arrow-left me-2"></i>Back</a>
                        <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Add Location<i
                                class="ti ti-arrow-right ms-2"></i></a>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="modal-body pb-1">
                        <div class="bg-light-300 p-3 br-10 text-center mb-4">
                            <h4>Where would you like to see leads from?</h4>
                            <p>Tell us the area you cover so we can show you leads for your location</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <select class="select">
                                <option selected>Rochester</option>
                                <option>Wisbech</option>
                                <option>Marlow</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">State</label>
                            <select class="select">
                                <option selected>Newyork</option>
                                <option>Fenland</option>
                                <option>Wycombe</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <select class="select">
                                <option selected>United States</option>
                                <option>United Kingdom</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center justify-content-between">
                        <a href="javascript:void(0);" class="btn btn-light prev_btn"><i
                                class="ti ti-arrow-left me-2"></i>Back</a>
                        <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Add Location<i
                                class="ti ti-arrow-right ms-2"></i></a>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="modal-body pb-1">
                        <div class="bg-light-300 p-3 br-10 text-center mb-4">
                            <h4>Some details about you</h4>
                            <p>You’re just a few steps away from viewing our House Cleaning leads</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Your Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Company Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check ps-0">
                                    <label class="form-label d-block">Select Gender</label>
                                    <div class="form-radio d-inline-flex align-items-center active mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="gender" type="radio"
                                            id="male" checked>
                                        <label class="form-check-label ms-2" for="male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3">
                                        <input class="form-check-input ms-0 mt-0" name="gender" type="radio"
                                            id="female">
                                        <label class="form-check-label ms-2" for="female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check ps-0">
                                    <label class="form-label d-block">Does your company have a website?</label>
                                    <div class="form-radio d-inline-flex align-items-center active mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="website" type="radio"
                                            id="yes" checked>
                                        <label class="form-check-label ms-2" for="yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3">
                                        <input class="form-check-input ms-0 mt-0" name="website" type="radio"
                                            id="no">
                                        <label class="form-check-label ms-2" for="no">
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check ps-0">
                                    <label class="form-label d-block">Does your company have a website?</label>
                                    <div class="form-radio d-inline-flex align-items-center active mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="emp" type="radio" id="self"
                                            checked>
                                        <label class="form-check-label ms-2" for="self">
                                            Self-employed
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="emp" type="radio" id="two">
                                        <label class="form-check-label ms-2" for="two">
                                            2–10
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="emp" type="radio"
                                            id="three">
                                        <label class="form-check-label ms-2" for="three">
                                            11–50
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="emp" type="radio" id="four">
                                        <label class="form-check-label ms-2" for="four">
                                            51–200
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3">
                                        <input class="form-check-input ms-0 mt-0" name="emp" type="radio" id="more">
                                        <label class="form-check-label ms-2" for="more">
                                            200+
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center justify-content-between">
                        <a href="javascript:void(0);" class="btn btn-light prev_btn"><i
                                class="ti ti-arrow-left me-2"></i>Back</a>
                        <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Submit<i
                                class="ti ti-arrow-right ms-2"></i></a>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="modal-body pb-1">
                        <div class="bg-light-300 p-3 br-10 text-center mb-4">
                            <h4>Maximise your leads</h4>
                            <p>Add other services you can provide</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label d-block">What type of Sub Services do your Provide?</label>
                            <span class="badge bg-info fs-13 fw-medium">House Cleaning</span>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">What type of Sub Services do your Provide?</label>
                            <div class="form-check ps-0">
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service1" type="checkbox"
                                        id="services1">
                                    <label class="form-check-label ms-2" for="services1">
                                        Commercial Property
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="services2">
                                    <label class="form-check-label ms-2" for="services2">
                                        Empty House Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center active mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="services3" checked>
                                    <label class="form-check-label ms-2" for="services3">
                                        Glass Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="services4">
                                    <label class="form-check-label ms-2" for="services4">
                                        Carpet washing
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center active mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="services5" checked>
                                    <label class="form-check-label ms-2" for="services5">
                                        Sofa Washing
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="services6">
                                    <label class="form-check-label ms-2" for="services6">
                                        Office Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="services7">
                                    <label class="form-check-label ms-2" for="services7">
                                        Exterior Glass Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="services8">
                                    <label class="form-check-label ms-2" for="services8">
                                        Shop Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="services9">
                                    <label class="form-check-label ms-2" for="services9">
                                        Ironing Service
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox"
                                        id="services10">
                                    <label class="form-check-label ms-2" for="services10">
                                        Bed Washing
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center justify-content-end">
                        <a href="javascript:void(0);" data-bs-dismiss="modal" data-bs-toggle="modal"
                            data-bs-target="#success_modal" class="btn btn-linear-primary">Confirm & Submit</a>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>
<!-- /Provider Modal -->

<!-- Success Modal -->
<div class="modal fade" id="success_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="mb-4">
                    <span class="success-icon mx-auto mb-4">
                        <i class="ti ti-check"></i>
                    </span>
                    <h4 class="mb-1">Registration Successful</h4>
                    <p>You will get a Verification link Via email for the Verify the Account.</p>
                </div>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-linear-primary">Close</a>
            </div>
        </div>
    </div>
</div>
<!-- /Success Modal -->

<!-- Quote Modal -->
<div class="modal fade" id="quote_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="progress-fieldset">
                <div class="modal-body">
                    <div class="progress mb-3" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                        aria-valuemax="100">
                        <div class="progress-bar bg-success"></div>
                    </div>
                    <fieldset class="field-one">
                        <h4 class="mb-3">What type of property needs cleaning?</h4>
                        <ul class="list-group group-radio mb-3">
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="property1">
                                    Residential Property
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="property" type="radio"
                                    id="property1" checked>
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="property2">
                                    Commercial Property
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="property" type="radio"
                                    id="property2">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="property3">
                                    Commercial Property
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="property" type="radio"
                                    id="property3">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="property4">
                                    Public Facilities
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="property" type="radio"
                                    id="property4">
                            </li>
                        </ul>
                        <div class="text-end">
                            <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Continue</a>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h4 class="mb-3">How large is the property?</h4>
                        <ul class="list-group group-radio mb-3">
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="size1">
                                    1RK
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="size" type="radio" id="size1"
                                    checked>
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="size2">
                                    1BHK
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="size" type="radio" id="size2">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="size3">
                                    2BHK
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="size" type="radio" id="size3">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="size4">
                                    3BHK
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="size" type="radio" id="size4">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="size5">
                                    4BHK
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="size" type="radio" id="size5">
                            </li>
                        </ul>
                        <div class="text-end">
                            <a href="javascript:void(0);" class="btn btn-light prev_btn me-3">Back</a>
                            <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Continue</a>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h4 class="mb-3">How large is the property?</h4>
                        <ul class="list-group group-radio mb-3">
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="room1">
                                    0
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="room" type="radio" id="room1"
                                    checked>
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="room2">
                                    1
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="room" type="radio" id="room2">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="room3">
                                    2
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="room" type="radio" id="room3">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="room4">
                                    3
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="room" type="radio" id="room4">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="room5">
                                    4
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="room" type="radio" id="room5">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="room6">
                                    5+
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="room" type="radio" id="room6">
                            </li>
                        </ul>
                        <div class="text-end">
                            <a href="javascript:void(0);" class="btn btn-light prev_btn me-3">Back</a>
                            <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Continue</a>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h4 class="mb-3">How many bathroom(s) need cleaning?</h4>
                        <ul class="list-group group-radio mb-3">
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="bathroom1">
                                    I don’t need bathroom cleaning
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="bathroom" type="radio"
                                    id="bathroom1" checked>
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="bathroom2">
                                    1 bathroom
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="bathroom" type="radio"
                                    id="bathroom2">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="bathroom3">
                                    1 bathroom + 1 additional toilet
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="bathroom" type="radio"
                                    id="bathroom3">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="bathroom4">
                                    2 bathrooms
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="bathroom" type="radio"
                                    id="bathroom4">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="bathroom5">
                                    2 bathrooms + 1 additional toilet
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="bathroom" type="radio"
                                    id="bathroom5">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="bathroom6">
                                    3+ bathrooms
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="bathroom" type="radio"
                                    id="bathroom6">
                            </li>
                        </ul>
                        <div class="text-end">
                            <a href="javascript:void(0);" class="btn btn-light prev_btn me-3">Back</a>
                            <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Continue</a>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h4 class="mb-3">How many bathroom(s) need cleaning?</h4>
                        <ul class="list-group group-radio mb-3">
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="balcony1">
                                    I don’t need balcony cleaning
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="balcony" type="radio" id="balcony1"
                                    checked>
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="balcony2">
                                    1 balcony
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="balcony" type="radio" id="balcony2">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="balcony3">
                                    1 balcony + 1 additional toilet
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="balcony" type="radio" id="balcony3">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="balcony4">
                                    2 balconys
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="balcony" type="radio" id="balcony4">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="balcony5">
                                    2 balconys + 1 additional toilet
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="balcony" type="radio" id="balcony5">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="balcony6">
                                    3+ balconys
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="balcony" type="radio" id="balcony6">
                            </li>
                        </ul>
                        <div class="text-end">
                            <a href="javascript:void(0);" class="btn btn-light prev_btn me-3">Back</a>
                            <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Continue</a>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h4 class="mb-3">What type of cleaning would you like?</h4>
                        <ul class="list-group group-radio mb-3">
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="clean1">
                                    Standard Cleaning
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="clean" type="radio" id="clean1"
                                    checked>
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="clean2">
                                    1 clean
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="clean" type="radio" id="clean2">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="clean3">
                                    Move-out Cleaning
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="clean" type="radio" id="clean3">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="clean4">
                                    Deep Cleaning
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="clean" type="radio" id="clean4">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="clean5">
                                    Commercial Cleaning
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="clean" type="radio" id="clean5">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="clean6">
                                    Green Cleaning
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="clean" type="radio" id="clean6">
                            </li>
                        </ul>
                        <div class="text-end">
                            <a href="javascript:void(0);" class="btn btn-light prev_btn me-3">Back</a>
                            <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Continue</a>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h4 class="mb-3">How often do you need cleaning?</h4>
                        <ul class="list-group group-radio mb-3">
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="clean1">
                                    Daily
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="time" type="radio" id="time1"
                                    checked>
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="time2">
                                    Twice a week
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="time" type="radio" id="time2">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="time3">
                                    Weekly
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="time" type="radio" id="time3">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="time4">
                                    Every other week
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="time" type="radio" id="time4">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="time5">
                                    Once a month
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="time" type="radio" id="time5">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="time6">
                                    One time clean
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="time" type="radio" id="time6">
                            </li>
                        </ul>
                        <div class="text-end">
                            <a href="javascript:void(0);" class="btn btn-light prev_btn me-3">Back</a>
                            <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Continue</a>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h4 class="mb-3">Do you need any additional services?</h4>
                        <ul class="list-group group-radio mb-3">
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="addon-service1">
                                    I don’t need any other services
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="addon-service" type="radio"
                                    id="addon-service1" checked>
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="addon-service2">
                                    Bedsheet / linen changes
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="addon-service" type="radio"
                                    id="addon-service2">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="addon-service3">
                                    Furniture dusting
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="addon-service" type="radio"
                                    id="addon-service3">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="addon-service4">
                                    Utensils addon-serviceing
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="addon-service" type="radio"
                                    id="addon-service4">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="addon-service5">
                                    Washing clothes
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="addon-service" type="radio"
                                    id="addon-service5">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="addon-service6">
                                    Watering Plants
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="addon-service" type="radio"
                                    id="addon-service6">
                            </li>
                        </ul>
                        <div class="text-end">
                            <a href="javascript:void(0);" class="btn btn-light prev_btn me-3">Back</a>
                            <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Continue</a>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h4 class="mb-3">Which time(s) are you available for cleaning?</h4>
                        <ul class="list-group group-radio mb-3">
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="times1">
                                    Any time
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="times" type="radio" id="times1"
                                    checked>
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="times2">
                                    Early morning ( before 9AM )
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="times" type="radio" id="times2">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="times3">
                                    Morning ( 9AM - noon )
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="times" type="radio" id="times3">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="times4">
                                    Early afternoon ( noon - 3PM )
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="times" type="radio" id="times4">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="times5">
                                    Late afternoon ( 3 PM - 6PM )
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="times" type="radio" id="times5">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="times6">
                                    Evening ( after 6PM )
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="times" type="radio" id="times6">
                            </li>
                        </ul>
                        <div class="text-end">
                            <a href="javascript:void(0);" class="btn btn-light prev_btn me-3">Back</a>
                            <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Continue</a>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h4 class="mb-3">How likely are you to make a hiring decision?</h4>
                        <ul class="list-group group-radio mb-3">
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="hire1">
                                    I am ready to hire now
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="hire" type="radio" id="hire1"
                                    checked>
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="hire2">
                                    I am definitely going to hire someone
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="hire" type="radio" id="hire2">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="hire3">
                                    I am likely to hire someone
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="hire" type="radio" id="hire3">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="hire4">
                                    I am possibly hire someone
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="hire" type="radio" id="hire4">
                            </li>
                            <li
                                class="list-group-item form-check d-flex align-items-center justify-content-between p-3">
                                <label class="form-check-label" for="hire5">
                                    I am planning and researching
                                </label>
                                <input class="form-check-input ms-0 mt-0" name="hire" type="radio" id="hire5">
                            </li>
                        </ul>
                        <div class="text-end">
                            <a href="javascript:void(0);" class="btn btn-light prev_btn me-3">Back</a>
                            <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Continue</a>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h4 class="mb-1">Where do you need the cleaner?</h4>
                        <p class="mb-3">The zip code or locality for the location where you require a cleaner.</p>
                        <div class="input-group mb-3">
                            <span class="input-group-text px-2 bg-white"><i class="ti ti-map-pin"></i></span>
                            <input type="text" class="form-control border-start-0 ps-0">
                        </div>
                        <div class="text-end">
                            <a href="javascript:void(0);" class="btn btn-light prev_btn me-3">Back</a>
                            <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Continue</a>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h4 class="mb-3">What email address would you like quotes sent to?</h4>
                        <div class="input-group mb-3">
                            <span class="input-group-text px-2 bg-white"><i class="ti ti-mail"></i></span>
                            <input type="text" class="form-control border-start-0 ps-0">
                        </div>
                        <div class="text-end">
                            <a href="javascript:void(0);" class="btn btn-light prev_btn me-3">Back</a>
                            <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Continue</a>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h4 class="mb-1">Your contact info stays private</h4>
                        <p class="mb-3">Some providers prefer giving quotes by phone for more details</p>
                        <div class="input-group mb-3">
                            <span class="input-group-text px-2 bg-white"><i class="ti ti-phone"></i></span>
                            <input type="text" class="form-control border-start-0 ps-0">
                        </div>
                        <div class="text-end">
                            <a href="javascript:void(0);" class="btn btn-light prev_btn me-3">Back</a>
                            <a href="javascript:void(0);" data-bs-dismiss="modal" data-bs-toggle="modal"
                                data-bs-target="#quote_success" class="btn btn-linear-primary next_btn">Submit</a>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Quote Modal -->

<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body p-4">
                <form action="{{url('index')}}">
                    <div class="text-center mb-3">
                        <h3 class="mb-2">Welcome</h3>
                        <p>Enter your credentials to access your account</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <label class="form-label">Password</label>
                            <a href="javascript:void(0);"
                                class="text-primary fw-medium text-decoration-underline mb-1 fs-14"
                                data-bs-toggle="modal" data-bs-target="#forgot-modal">Forgot Password?</a>
                        </div>
                        <input type="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="remembers_me">
                                <label class="form-check-label" for="remembers_me">
                                    Remember Me
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="otp_signin">
                                <label class="form-check-label" for="otp_signin">
                                    Sign in with OTP
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-lg btn-linear-primary w-100">Sign In</button>
                    </div>
                    <div class="login-or mb-3">
                        <span class="span-or">Or sign in with </span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <a href="javascript:void(0);"
                            class="btn btn-light flex-fill d-flex align-items-center justify-content-center me-3"><img
                                src="{{URL::asset('assets/img/icons/google-icon.svg')}}" class="me-2" alt="Img">Google</a>
                        <a href="javascript:void(0);"
                            class="btn btn-light flex-fill d-flex align-items-center justify-content-center"><img
                                src="{{URL::asset('assets/img/icons/fb-icon.svg')}}" class="me-2" alt="Img">Facebook</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p>Don’t have a account? <a href="javascript:void(0);" class="text-primary"
                                data-bs-toggle="modal" data-bs-target="#register-modal"> Join us Today</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Login Modal -->

<!-- Register Modal -->
<div class="modal fade" id="register-modal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body p-4">
                <form action="#">
                    <div class="text-center mb-3">
                        <h3 class="mb-2">Registration</h3>
                        <p>Enter your credentials to access your account</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input class="form-control" id="phone" name="phone" type="text">
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <label class="form-label">Password</label>
                            <p class="text-gray-6 fw-medium  mb-1">Must be 8 Characters at Least</p>
                        </div>
                        <input type="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="remember_me">
                                <label class="form-check-label" for="remember_me">
                                    I agree to <a href="javascript:void(0);"
                                        class="text-primary text-decoration-underline">Terms of use</a> & <a
                                        href="javascript:void(0);"
                                        class="text-primary text-decoration-underline">Privacy policy</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#login-modal"
                            class="btn btn-lg btn-linear-primary w-100">Sign Up</button>
                    </div>
                    <div class="login-or mb-3">
                        <span class="span-or">Or sign up with </span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <a href="javascript:void(0);"
                            class="btn btn-light flex-fill d-flex align-items-center justify-content-center me-3"><img
                                src="{{URL::asset('assets/img/icons/google-icon.svg')}}" class="me-2" alt="Img">Google</a>
                        <a href="javascript:void(0);"
                            class="btn btn-light flex-fill d-flex align-items-center justify-content-center"><img
                                src="{{URL::asset('assets/img/icons/fb-icon.svg')}}" class="me-2" alt="Img">Facebook</a>
                    </div>
                    <div class=" d-flex justify-content-center">
                        <p>Already have a account? <a href="javascript:void(0);" class="text-primary"
                                data-bs-target="#login-modal" data-bs-toggle="modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Register Modal -->

<!-- Forgot Modal -->
<div class="modal fade" id="forgot-modal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body p-4">
                <form action="#">
                    <div class="text-center mb-3">
                        <h3 class="mb-2">Forgot Password?</h3>
                        <p>Enter your email, we will send you a otp to reset your password.</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-lg btn-linear-primary w-100" data-bs-toggle="modal"
                            data-bs-target="#otp-email-modal">Submit</button>
                    </div>
                    <div class=" d-flex justify-content-center">
                        <p>Remember Password? <a href="javascript:void(0);" class="text-primary"
                                data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Forgot Modal -->

<!-- Email otp Modal -->
<div class="modal fade" id="otp-email-modal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body p-4">
                <form action="#" class="digit-group">
                    <div class="text-center mb-3">
                        <h3 class="mb-2">Email OTP Verification</h3>
                        <p class="fs-14">OTP sent to your Email Address ending ******doe@example.com</p>
                    </div>
                    <div class="text-center otp-input">
                        <div class="d-flex align-items-center mb-3">
                            <input type="text" class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3"
                                id="digit-1" name="digit-1" data-next="digit-2" maxlength="1">
                            <input type="text" class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3"
                                id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1"
                                maxlength="1">
                            <input type="text" class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3"
                                id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2"
                                maxlength="1">
                            <input type="text" class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold"
                                id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3"
                                maxlength="1">
                        </div>
                        <div>
                            <div class="badge bg-danger-transparent mb-3">
                                <p class="d-flex align-items-center "><i class="ti ti-clock me-1"></i>09:59</p>
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <p>Didn't get the OTP? <a href="javascript:void(0);" class="text-primary">Resend
                                        OTP</a></p>
                            </div>
                            <div>
                                <button type="button" class="btn btn-lg btn-linear-primary w-100"
                                    data-bs-toggle="modal" data-bs-target="#otp-phone-modal">Verify &
                                    Proceed</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Email otp Modal -->

<!-- Phone otp Modal -->
<div class="modal fade" id="otp-phone-modal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body p-4">
                <form action="#" class="digit-group">
                    <div class="text-center mb-3">
                        <h3 class="mb-2">Phone OTP Verification</h3>
                        <p>OTP sent to your mobile number ending ******9575</p>
                    </div>
                    <div class="text-center otp-input">
                        <div class="d-flex align-items-center mb-3">
                            <input type="text" class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3"
                                id="digit-5" name="digit-5" data-next="digit-6" maxlength="1">
                            <input type="text" class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3"
                                id="digit-6" name="digit-6" data-next="digit-7" data-previous="digit-5"
                                maxlength="1">
                            <input type="text" class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold me-3"
                                id="digit-7" name="digit-7" data-next="digit-8" data-previous="digit-6"
                                maxlength="1">
                            <input type="text" class=" rounded w-100 py-sm-3 py-2 text-center fs-26 fw-bold"
                                id="digit-8" name="digit-8" data-next="digit-9" data-previous="digit-7"
                                maxlength="1">
                        </div>
                        <div>
                            <div class="badge bg-danger-transparent mb-3">
                                <p class="d-flex align-items-center "><i class="ti ti-clock me-1"></i>09:59</p>
                            </div>
                            <div class="mb-3 d-flex justify-content-center">
                                <p>Didn't get the OTP? <a href="javascript:void(0);" class="text-primary">Resend
                                        OTP</a></p>
                            </div>
                            <div>
                                <button type="button" class="btn btn-lg btn-linear-primary w-100"
                                    data-bs-toggle="modal" data-bs-target="#reset-password">Verify &
                                    Proceed</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Phone otp Modal -->

<!-- Reset password Modal -->
<div class="modal fade" id="reset-password" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body p-4">
                <div class="text-center mb-3">
                    <h3 class="mb-2">Reset Password</h3>
                    <p class="fs-14">Your new password must be different from previous used passwords.</p>
                </div>
                <form action="#">
                    <div class="input-block mb-3">
                        <div class="mb-3">
                            <label class="form-label">New Password</label>
                            <div class="pass-group" id="passwordInput">
                                <input type="password" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="password-strength d-flex" id="passwordStrength">
                            <span id="poor"></span>
                            <span id="weak"></span>
                            <span id="strong"></span>
                            <span id="heavy"></span>
                        </div>
                        <div id="passwordInfo" class="mb-2"></div>
                        <p class="fs-12">Use 8 or more characters with a mix of letters, numbers & symbols.</p>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <label class="form-label">Confirm Password</label>
                        </div>
                        <input type="password" class="form-control">
                    </div>
                    <div>
                        <button type="button" class="btn btn-lg btn-linear-primary w-100" data-bs-toggle="modal"
                            data-bs-target="#success_modal">Save Change</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Reset password Modal -->

<!-- success message Modal -->
<div class="modal fade" id="success-modal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body p-4">
                <div class="text-center">
                    <span class="success-check mb-3 mx-auto"><i class="ti ti-check"></i></span>
                    <h4 class="mb-2">Success</h4>
                    <p>Your new password has been successfully saved</p>
                    <div>
                        <button type="submit" class="btn btn-lg btn-linear-primary w-100">Back to Sign In</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /success message Modal -->

<!-- Free trail Modal -->
<div class="modal fade" id="free-trail" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body p-4">
                <form action="{{url('index')}}">
                    <div class="text-center mb-3">
                        <h3 class="mb-2">Start your free trial</h3>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Company Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Domain</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Work Email</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-lg btn-linear-primary w-100">Register</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Free trail Modal -->

<!-- Success Modal -->
<div class="modal fade" id="quote_success" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="mb-4">
                    <span class="success-icon mx-auto mb-4">
                        <i class="ti ti-check"></i>
                    </span>
                    <h4 class="mb-1">We’ve found the best options that fits you </h4>
                    <p>Please check the email, we sent you the list of service providers to the email </p>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-light me-3">Close</a>
                    <a href="{{url('booking-details')}}" class="btn btn-linear-primary">Booking Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Success Modal -->

<div class="back-to-top">
    <a class="back-to-top-icon align-items-center justify-content-center d-flex" href="#top"><i
            class="fa-solid fa-arrow-up"></i></a>
</div>

@endif

@if (Route::is(['index-6']))

		<!-- Modal -->
		<div class="modal fade modal-content-video" id="video" tabindex="-1">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">
								<i class="fa fa-times" aria-hidden="true"></i>
							</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="video-home">
							<video controls id="promovideo">
								<iframe src="https://www.youtube.com/embed/ExJZAegsOis"></iframe>
							</video>
						</div>
					</div>
				</div>
			</div>
		</div>

@endif

@if (Route::is(['service-details']))
<!-- Provider Modal -->
<div class="modal fade" id="provider" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h5>Become a Provider</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>				
            <div class="wizard-fieldset">
                <div class="modal-body pb-0">
                    <ul class="d-flex align-items-center flex-wrap mb-1 border-bottom" id="providerwizard">
                        <li class="active d-flex align-items-center me-4 mb-3">
                            <span class="avatar avatar-md rounded me-2 border-bottom">1</span>
                            <h6 class="fs-16 fw-medium">Choose Category</h6>
                        </li>
                        <li class="d-flex align-items-center me-4 mb-3">
                            <span class="avatar avatar-md rounded me-2">2</span>
                            <h6 class="fs-16 fw-medium">Service Location</h6>
                        </li>
                        <li class="d-flex align-items-center me-4 mb-3">
                            <span class="avatar avatar-md rounded me-2">3</span>
                            <h6 class="fs-16 fw-medium">Personal Info</h6>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <span class="avatar avatar-md rounded me-2">4</span>
                            <h6 class="fs-16 fw-medium">Confirmation</h6>
                        </li>
                    </ul>
                </div>
                <fieldset   class="first-field" id="first-field">
                    <div class="modal-body pb-1">
                        <div class="bg-light-300 p-3 br-10 text-center mb-4">
                            <h4>List your service & Get the leads around you</h4>
                            <p>List your service & Get the leads around you</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">What type of Service do your Provide?</label>
                            <select class="select">
                                <option>Select Service</option>
                                <option>House Cleaning</option>
                                <option>Car Wash</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Popular Service Categories</label>
                            <div class="category-badge">
                                <span class="badge d-inline-flex align-items-center mb-2 me-2"><img src="{{URL::asset('assets/img/icons/service-icon-01.svg')}}" alt="icon" class="me-2">Construction</span>
                                <span class="badge d-inline-flex align-items-center mb-2 me-2"><img src="{{URL::asset('assets/img/icons/service-icon-02.svg')}}" alt="icon" class="me-2">Removals</span>
                                <span class="badge d-inline-flex align-items-center mb-2 me-2"><img src="{{URL::asset('assets/img/icons/service-icon-03.svg')}}" alt="icon" class="me-2">Furniture Assembly</span>
                                <span class="badge d-inline-flex align-items-center mb-2 me-2"><img src="{{URL::asset('assets/img/icons/service-icon-04.svg')}}" alt="icon" class="me-2">Electrical</span>
                                <span class="badge d-inline-flex align-items-center mb-2"><img src="{{URL::asset('assets/img/icons/service-icon-05.svg')}}" alt="icon" class="me-2">Computer Service</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-end">
                        <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Get Started</a>
                    </div>
                </fieldset>
                <fieldset  class="second-field">
                    <div class="modal-body pb-1">
                        <div class="bg-light-300 p-3 br-10 text-center mb-4">
                            <h4>List your service & Get the leads around you</h4>
                            <p>List your service & Get the leads around you</p>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">What type of Service do your Provide?</label>
                            <select class="select">
                                <option>Select Service</option>
                                <option selected>House Cleaning</option>
                                <option>Car Wash</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">What type of Sub Services do your Provide?</label>
                            <div class="form-check ps-0">
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service1" type="checkbox" id="service1" checked>
                                    <label class="form-check-label ms-2" for="service1">
                                        Commercial Property
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service2">
                                    <label class="form-check-label ms-2" for="service2">
                                        Empty House Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center active mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service3" checked>
                                    <label class="form-check-label ms-2" for="service3">
                                        Glass Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service4">
                                    <label class="form-check-label ms-2" for="service4">
                                        Carpet washing
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center active mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service5" checked>
                                    <label class="form-check-label ms-2" for="service5">
                                        Sofa Washing
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service6">
                                    <label class="form-check-label ms-2" for="service6">
                                        Office Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service7">
                                    <label class="form-check-label ms-2" for="service7">
                                        Exterior Glass Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service8">
                                    <label class="form-check-label ms-2" for="service8">
                                        Shop Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service9">
                                    <label class="form-check-label ms-2" for="service9">
                                        Ironing Service
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service10">
                                    <label class="form-check-label ms-2" for="service10">
                                        Bed Washing
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center justify-content-between">
                        <a href="javascript:void(0);" class="btn btn-light prev_btn"><i class="ti ti-arrow-left me-2"></i>Back</a>
                        <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Add Location<i class="ti ti-arrow-right ms-2"></i></a>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="modal-body pb-1">
                        <div class="bg-light-300 p-3 br-10 text-center mb-4">
                            <h4>Where would you like to see leads from?</h4>
                            <p>Tell us the area you cover so we can show you leads for your location</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <select class="select">
                                <option selected>Rochester</option>
                                <option>Wisbech</option>
                                <option>Marlow</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">State</label>
                            <select class="select">
                                <option selected>Newyork</option>
                                <option>Fenland</option>
                                <option>Wycombe</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <select class="select">
                                <option selected>United States</option>
                                <option>United Kingdom</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center justify-content-between">
                        <a href="javascript:void(0);" class="btn btn-light prev_btn"><i class="ti ti-arrow-left me-2"></i>Back</a>
                        <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Add Location<i class="ti ti-arrow-right ms-2"></i></a>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="modal-body pb-1">
                        <div class="bg-light-300 p-3 br-10 text-center mb-4">
                            <h4>Some details about you</h4>
                            <p>You’re just a few steps away from viewing our House Cleaning leads</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Your Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Company Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check ps-0">
                                    <label class="form-label d-block">Select Gender</label>
                                    <div class="form-radio d-inline-flex align-items-center active mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="gender" type="radio" id="male" checked>
                                        <label class="form-check-label ms-2" for="male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3">
                                        <input class="form-check-input ms-0 mt-0" name="gender" type="radio" id="female">
                                        <label class="form-check-label ms-2" for="female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check ps-0">
                                    <label class="form-label d-block">Does your company have a website?</label>
                                    <div class="form-radio d-inline-flex align-items-center active mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="website" type="radio" id="yes" checked>
                                        <label class="form-check-label ms-2" for="yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3">
                                        <input class="form-check-input ms-0 mt-0" name="website" type="radio" id="no">
                                        <label class="form-check-label ms-2" for="no">
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check ps-0">
                                    <label class="form-label d-block">Does your company have a website?</label>
                                    <div class="form-radio d-inline-flex align-items-center active mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="emp" type="radio" id="self" checked>
                                        <label class="form-check-label ms-2" for="self">
                                            Self-employed
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="emp" type="radio" id="two">
                                        <label class="form-check-label ms-2" for="two">
                                            2–10
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="emp" type="radio" id="three">
                                        <label class="form-check-label ms-2" for="three">
                                            11–50
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="emp" type="radio" id="four">
                                        <label class="form-check-label ms-2" for="four">
                                            51–200
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3">
                                        <input class="form-check-input ms-0 mt-0" name="emp" type="radio" id="more">
                                        <label class="form-check-label ms-2" for="more">
                                            200+
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center justify-content-between">
                        <a href="javascript:void(0);" class="btn btn-light prev_btn"><i class="ti ti-arrow-left me-2"></i>Back</a>
                        <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Submit<i class="ti ti-arrow-right ms-2"></i></a>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="modal-body pb-1">
                        <div class="bg-light-300 p-3 br-10 text-center mb-4">
                            <h4>Maximise your leads</h4>
                            <p>Add other services you can provide</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label d-block">What type of Sub Services do your Provide?</label>
                            <span class="badge bg-info fs-13 fw-medium">House Cleaning</span>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">What type of Sub Services do your Provide?</label>
                            <div class="form-check ps-0">
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service1" type="checkbox" id="services1">
                                    <label class="form-check-label ms-2" for="services1">
                                        Commercial Property
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services2">
                                    <label class="form-check-label ms-2" for="services2">
                                        Empty House Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center active mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services3" checked>
                                    <label class="form-check-label ms-2" for="services3">
                                        Glass Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services4">
                                    <label class="form-check-label ms-2" for="services4">
                                        Carpet washing
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center active mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services5" checked>
                                    <label class="form-check-label ms-2" for="services5">
                                        Sofa Washing
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services6">
                                    <label class="form-check-label ms-2" for="services6">
                                        Office Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services7">
                                    <label class="form-check-label ms-2" for="services7">
                                        Exterior Glass Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services8">
                                    <label class="form-check-label ms-2" for="services8">
                                        Shop Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services9">
                                    <label class="form-check-label ms-2" for="services9">
                                        Ironing Service
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services10">
                                    <label class="form-check-label ms-2" for="services10">
                                        Bed Washing
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center justify-content-end">
                        <a href="javascript:void(0);" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#success_modal" class="btn btn-linear-primary">Confirm & Submit</a>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>
<!-- /Provider Modal -->

<!-- Success Modal -->
<div class="modal fade" id="success_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="mb-4">
                    <span class="success-icon mx-auto mb-4">
                        <i class="ti ti-check"></i>
                    </span>
                    <h4 class="mb-1">Registration Successful</h4>
                    <p>You will get a Verification link Via email for the Verify the  Account.</p>
                </div>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-linear-primary">Close</a>
            </div>
        </div>
    </div>
</div>
<!-- /Success Modal -->

<!-- Add Review -->
<div class="modal fade" id="add-review" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h5>Add Review</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>		
            <form action="{{url('service-details')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Rate your Review</label>
                        <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class="rating me-1"><i class="ti ti-star-filled"></i></a>
                            <a href="javascript:void(0);" class="rating me-1"><i class="ti ti-star-filled"></i></a>
                            <a href="javascript:void(0);" class="rating me-1"><i class="ti ti-star-filled"></i></a>
                            <a href="javascript:void(0);" class="rating me-1"><i class="ti ti-star-filled"></i></a>
                            <a href="javascript:void(0);" class="rating me-1"><i class="ti ti-star-filled"></i></a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Review Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Write Your Review</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-end">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add Review -->

<!-- Add Enquiry -->
<div class="modal fade" id="add-enquiry" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h5>Enquiry</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>		
            <form action="{{url('service-details')}}">
                <div class="modal-body">
                    <div class="bg-light-500 p-3 mb-3 br-10">
                        <div class="d-flex align-items-center">
                            <span class="avatar avatar-xl">
                                <img src="{{URL::asset('assets/img/services/rated-service-02.jpg')}}" alt="img" class="img-fluid br-10">
                            </span>
                            <div class="ms-2">
                                <h6 class="fs-14 fw-medium mb-1">Product Name</h6>
                                <p><i class="ti ti-star-filled text-warning me-2"></i><span class="text-gray-9">4.9</span>(255 reviews)</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Write us a Message</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-end">
                    <a href="javascript:void(0);" class="btn btn-light me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>				
        </div>
    </div>
</div>
<!-- /Add Enquiry -->

<!-- Add Contact -->
<div class="modal fade" id="add-contact" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h5>Contact Provider</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>		
            <form action="{{url('service-details')}}">
                <div class="modal-body">
                    <div class="bg-light-500 p-3 mb-3 br-10">
                        <div class="d-flex align-items-center">
                            <span class="avatar avatar-xl">
                                <img src="{{URL::asset('assets/img/profiles/avatar-01.jpg')}}" alt="img" class="img-fluid rounded-circle">
                            </span>
                            <div class="ms-2">
                                <h6 class="fs-14 fw-medium mb-1">Thomas Herzberg</h6>
                                <p><i class="ti ti-star-filled text-warning me-2"></i><span class="text-gray-9">4.9</span> (255 reviews)</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Write us a Message</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-end">
                    <a href="javascript:void(0);" class="btn btn-light me-2"  data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>				
        </div>
    </div>
</div>
<!-- /Add Contact -->					

<div class="back-to-top">
    <a class="back-to-top-icon align-items-center justify-content-center d-flex"  href="#top"><i class="fa-solid fa-arrow-up"></i></a>
</div>	

@endif
@if (Route::is(['service-details2']))
<!-- Provider Modal -->
<div class="modal fade" id="provider" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h5>Become a Provider</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>				
            <div class="wizard-fieldset">
                <div class="modal-body pb-0">
                    <ul class="d-flex align-items-center flex-wrap mb-1 border-bottom" id="providerwizard">
                        <li class="active d-flex align-items-center me-4 mb-3">
                            <span class="avatar avatar-md rounded me-2 border-bottom">1</span>
                            <h6 class="fs-16 fw-medium">Choose Category</h6>
                        </li>
                        <li class="d-flex align-items-center me-4 mb-3">
                            <span class="avatar avatar-md rounded me-2">2</span>
                            <h6 class="fs-16 fw-medium">Service Location</h6>
                        </li>
                        <li class="d-flex align-items-center me-4 mb-3">
                            <span class="avatar avatar-md rounded me-2">3</span>
                            <h6 class="fs-16 fw-medium">Personal Info</h6>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <span class="avatar avatar-md rounded me-2">4</span>
                            <h6 class="fs-16 fw-medium">Confirmation</h6>
                        </li>
                    </ul>
                </div>
                <fieldset   class="first-field" id="first-field">
                    <div class="modal-body pb-1">
                        <div class="bg-light-300 p-3 br-10 text-center mb-4">
                            <h4>List your service & Get the leads around you</h4>
                            <p>List your service & Get the leads around you</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">What type of Service do your Provide?</label>
                            <select class="select">
                                <option>Select Service</option>
                                <option>House Cleaning</option>
                                <option>Car Wash</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Popular Service Categories</label>
                            <div class="category-badge">
                                <span class="badge d-inline-flex align-items-center mb-2 me-2"><img src="{{URL::asset('assets/img/icons/service-icon-01.svg')}}" alt="icon" class="me-2">Construction</span>
                                <span class="badge d-inline-flex align-items-center mb-2 me-2"><img src="{{URL::asset('assets/img/icons/service-icon-02.svg')}}" alt="icon" class="me-2">Removals</span>
                                <span class="badge d-inline-flex align-items-center mb-2 me-2"><img src="{{URL::asset('assets/img/icons/service-icon-03.svg')}}" alt="icon" class="me-2">Furniture Assembly</span>
                                <span class="badge d-inline-flex align-items-center mb-2 me-2"><img src="{{URL::asset('assets/img/icons/service-icon-04.svg')}}" alt="icon" class="me-2">Electrical</span>
                                <span class="badge d-inline-flex align-items-center mb-2"><img src="{{URL::asset('assets/img/icons/service-icon-05.svg')}}" alt="icon" class="me-2">Computer Service</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-end">
                        <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Get Started</a>
                    </div>
                </fieldset>
                <fieldset  class="second-field">
                    <div class="modal-body pb-1">
                        <div class="bg-light-300 p-3 br-10 text-center mb-4">
                            <h4>List your service & Get the leads around you</h4>
                            <p>List your service & Get the leads around you</p>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">What type of Service do your Provide?</label>
                            <select class="select">
                                <option>Select Service</option>
                                <option selected>House Cleaning</option>
                                <option>Car Wash</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">What type of Sub Services do your Provide?</label>
                            <div class="form-check ps-0">
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service1" type="checkbox" id="service1" checked>
                                    <label class="form-check-label ms-2" for="service1">
                                        Commercial Property
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service2">
                                    <label class="form-check-label ms-2" for="service2">
                                        Empty House Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center active mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service3" checked>
                                    <label class="form-check-label ms-2" for="service3">
                                        Glass Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service4">
                                    <label class="form-check-label ms-2" for="service4">
                                        Carpet washing
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center active mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service5" checked>
                                    <label class="form-check-label ms-2" for="service5">
                                        Sofa Washing
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service6">
                                    <label class="form-check-label ms-2" for="service6">
                                        Office Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service7">
                                    <label class="form-check-label ms-2" for="service7">
                                        Exterior Glass Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service8">
                                    <label class="form-check-label ms-2" for="service8">
                                        Shop Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service9">
                                    <label class="form-check-label ms-2" for="service9">
                                        Ironing Service
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="service10">
                                    <label class="form-check-label ms-2" for="service10">
                                        Bed Washing
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center justify-content-between">
                        <a href="javascript:void(0);" class="btn btn-light prev_btn"><i class="ti ti-arrow-left me-2"></i>Back</a>
                        <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Add Location<i class="ti ti-arrow-right ms-2"></i></a>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="modal-body pb-1">
                        <div class="bg-light-300 p-3 br-10 text-center mb-4">
                            <h4>Where would you like to see leads from?</h4>
                            <p>Tell us the area you cover so we can show you leads for your location</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <select class="select">
                                <option selected>Rochester</option>
                                <option>Wisbech</option>
                                <option>Marlow</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">State</label>
                            <select class="select">
                                <option selected>Newyork</option>
                                <option>Fenland</option>
                                <option>Wycombe</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <select class="select">
                                <option selected>United States</option>
                                <option>United Kingdom</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center justify-content-between">
                        <a href="javascript:void(0);" class="btn btn-light prev_btn"><i class="ti ti-arrow-left me-2"></i>Back</a>
                        <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Add Location<i class="ti ti-arrow-right ms-2"></i></a>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="modal-body pb-1">
                        <div class="bg-light-300 p-3 br-10 text-center mb-4">
                            <h4>Some details about you</h4>
                            <p>You’re just a few steps away from viewing our House Cleaning leads</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Your Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Company Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check ps-0">
                                    <label class="form-label d-block">Select Gender</label>
                                    <div class="form-radio d-inline-flex align-items-center active mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="gender" type="radio" id="male" checked>
                                        <label class="form-check-label ms-2" for="male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3">
                                        <input class="form-check-input ms-0 mt-0" name="gender" type="radio" id="female">
                                        <label class="form-check-label ms-2" for="female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check ps-0">
                                    <label class="form-label d-block">Does your company have a website?</label>
                                    <div class="form-radio d-inline-flex align-items-center active mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="website" type="radio" id="yes" checked>
                                        <label class="form-check-label ms-2" for="yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3">
                                        <input class="form-check-input ms-0 mt-0" name="website" type="radio" id="no">
                                        <label class="form-check-label ms-2" for="no">
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check ps-0">
                                    <label class="form-label d-block">Does your company have a website?</label>
                                    <div class="form-radio d-inline-flex align-items-center active mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="emp" type="radio" id="self" checked>
                                        <label class="form-check-label ms-2" for="self">
                                            Self-employed
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="emp" type="radio" id="two">
                                        <label class="form-check-label ms-2" for="two">
                                            2–10
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="emp" type="radio" id="three">
                                        <label class="form-check-label ms-2" for="three">
                                            11–50
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3 me-3">
                                        <input class="form-check-input ms-0 mt-0" name="emp" type="radio" id="four">
                                        <label class="form-check-label ms-2" for="four">
                                            51–200
                                        </label>
                                    </div>
                                    <div class="form-radio d-inline-flex align-items-center mb-3">
                                        <input class="form-check-input ms-0 mt-0" name="emp" type="radio" id="more">
                                        <label class="form-check-label ms-2" for="more">
                                            200+
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center justify-content-between">
                        <a href="javascript:void(0);" class="btn btn-light prev_btn"><i class="ti ti-arrow-left me-2"></i>Back</a>
                        <a href="javascript:void(0);" class="btn btn-linear-primary next_btn">Submit<i class="ti ti-arrow-right ms-2"></i></a>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="modal-body pb-1">
                        <div class="bg-light-300 p-3 br-10 text-center mb-4">
                            <h4>Maximise your leads</h4>
                            <p>Add other services you can provide</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label d-block">What type of Sub Services do your Provide?</label>
                            <span class="badge bg-info fs-13 fw-medium">House Cleaning</span>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">What type of Sub Services do your Provide?</label>
                            <div class="form-check ps-0">
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service1" type="checkbox" id="services1">
                                    <label class="form-check-label ms-2" for="services1">
                                        Commercial Property
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services2">
                                    <label class="form-check-label ms-2" for="services2">
                                        Empty House Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center active mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services3" checked>
                                    <label class="form-check-label ms-2" for="services3">
                                        Glass Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services4">
                                    <label class="form-check-label ms-2" for="services4">
                                        Carpet washing
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center active mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services5" checked>
                                    <label class="form-check-label ms-2" for="services5">
                                        Sofa Washing
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services6">
                                    <label class="form-check-label ms-2" for="services6">
                                        Office Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services7">
                                    <label class="form-check-label ms-2" for="services7">
                                        Exterior Glass Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services8">
                                    <label class="form-check-label ms-2" for="services8">
                                        Shop Cleaning
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services9">
                                    <label class="form-check-label ms-2" for="services9">
                                        Ironing Service
                                    </label>
                                </div>
                                <div class="form-checkbox d-inline-flex align-items-center mb-2 me-3">
                                    <input class="form-check-input ms-0 mt-0" name="service" type="checkbox" id="services10">
                                    <label class="form-check-label ms-2" for="services10">
                                        Bed Washing
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center justify-content-end">
                        <a href="javascript:void(0);" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#success_modal" class="btn btn-linear-primary">Confirm & Submit</a>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>
<!-- /Provider Modal -->

<!-- Success Modal -->
<div class="modal fade" id="success_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="mb-4">
                    <span class="success-icon mx-auto mb-4">
                        <i class="ti ti-check"></i>
                    </span>
                    <h4 class="mb-1">Registration Successful</h4>
                    <p>You will get a Verification link Via email for the Verify the  Account.</p>
                </div>
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-linear-primary">Close</a>
            </div>
        </div>
    </div>
</div>
<!-- /Success Modal -->

<!-- Add Review -->
<div class="modal fade" id="add-review" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h5>Add Review</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>		
            <form action="{{url('service-details2')}}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Rate your Review</label>
                        <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class="rating me-1"><i class="ti ti-star-filled"></i></a>
                            <a href="javascript:void(0);" class="rating me-1"><i class="ti ti-star-filled"></i></a>
                            <a href="javascript:void(0);" class="rating me-1"><i class="ti ti-star-filled"></i></a>
                            <a href="javascript:void(0);" class="rating me-1"><i class="ti ti-star-filled"></i></a>
                            <a href="javascript:void(0);" class="rating me-1"><i class="ti ti-star-filled"></i></a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Review Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Write Your Review</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-end">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add Review -->

<!-- Add Enquiry -->
<div class="modal fade" id="add-enquiry" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h5>Enquiry</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>		
            <form action="{{url('service-details2')}}">
                <div class="modal-body">
                    <div class="bg-light-500 p-3 mb-3 br-10">
                        <div class="d-flex align-items-center">
                            <span class="avatar avatar-xl">
                                <img src="{{URL::asset('assets/img/services/rated-service-02.jpg')}}" alt="img" class="img-fluid br-10">
                            </span>
                            <div class="ms-2">
                                <h6 class="fs-14 fw-medium mb-1">Product Name</h6>
                                <p><i class="ti ti-star-filled text-warning me-2"></i><span class="text-gray-9">4.9</span>(255 reviews)</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Write us a Message</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-end">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>				
        </div>
    </div>
</div>
<!-- /Add Enquiry -->

<!-- Add Contact -->
<div class="modal fade" id="add-contact" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <h5>Contact Provider</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>		
            <form action="{{url('service-details2')}}">
                <div class="modal-body">
                    <div class="bg-light-500 p-3 mb-3 br-10">
                        <div class="d-flex align-items-center">
                            <span class="avatar avatar-xl">
                                <img src="{{URL::asset('assets/img/profiles/avatar-01.jpg')}}" alt="img" class="img-fluid rounded-circle">
                            </span>
                            <div class="ms-2">
                                <h6 class="fs-14 fw-medium mb-1">Thomas Herzberg</h6>
                                <p><i class="ti ti-star-filled text-warning me-2"></i><span class="text-gray-9">4.9</span>(255 reviews)</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Write us a Message</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-end">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>				
        </div>
    </div>
</div>
<!-- /Add Contact -->					

<div class="back-to-top">
    <a class="back-to-top-icon align-items-center justify-content-center d-flex"  href="#top"><i class="fa-solid fa-arrow-up"></i></a>
</div>	
@endif

@if (Route::is(['create-service']))
<!-- Modal Succss -->
<div class="modal fade service-models" id="successmodal">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center py-4">
                    <span class="success-check mb-3 mx-auto"><i class="ti ti-check"></i></span>
                    <h4 class="mb-2">Service Created Successfullly</h4>
                    <p>“Electrical Services” has been Created, and updated on your Service List</p>
                    <div class="f-flex align-items-center justify-content-center mt-3">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Close</a>
                        <a href="{{url('service-details')}}" class="btn btn-linear-primary">Preview</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Succss -->

<div class="back-to-top">
    <a class="back-to-top-icon align-items-center justify-content-center d-flex" href="#top"><i
            class="fa-solid fa-arrow-up"></i></a>
</div>

@endif

@if (Route::is(['user-dashboard']))
	<!-- Delete Account -->
	<div class="modal fade custom-modal" id="del-account">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Delete Account</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
				<form action="{{url('user-dashboard')}}">
					<div class="modal-body">
						<p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
						<div class="mb-0">
							<label class="form-label">Password</label>
							<div class="pass-group">
								<input type="password" class="form-control pass-input" placeholder="*************">
								<span class="toggle-password feather-eye-off"></span>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" class="btn btn-dark">Delete Account</button>
					</div>	
				</form>
            </div>
        </div>
    </div>
	<!-- /Cancel Appointment -->
@endif

@if (Route::is(['user-booking-list']))
<!-- Reschedule Appointment -->
<div class="modal fade custom-modal" id="reschedule">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Reschedule Appointment</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <form action="{{url('user-bookings')}}">
                    <div class="mb-3">
                        <label class="form-label">Appointment Date</label>
                        <div class="form-icon">
                            <input type="text" class="form-control datetimepicker" placeholder="DD/MM/YYYY">
                            <span class="cus-icon"><i class="feather-calendar"></i></span>
                        </div>
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Appointment Time</label>
                        <div class="form-icon">
                            <input type="text" class="form-control timepicker" placeholder="DD/MM/YYYY">
                            <span class="cus-icon"><i class="feather-clock"></i></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="acc-submit">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Reschedule Appointment -->

<!-- Cancel Appointment -->
<div class="modal fade custom-modal" id="cancel_appointment">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Cancel Appointment</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('user-bookings')}}">
                <div class="modal-body">
                    <p>Are you sure you want to cancel <span class="text-dark"> John Doe</span> appointment on 
                        <span class="text-dark"> Oct 28, 2022</span> at time <span class="text-dark"> 10AM - 12PM</span></p>
                </div>
                <div class="modal-footer">
                    <div class="acc-submit">
                        <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Dismiss</a>
                        <button class="btn btn-dark" type="submit">Yes, Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Cancel Appointment -->

<!-- Add Review -->
<div class="modal fade custom-modal" id="add-review">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Write A Review</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('user-bookings')}}">
                <div class="modal-body">
                    <div class="write-review">
                        <div class="review-add d-flex align-items-center mb-3">
                            <div class="rev-img me-2">
                                <img src="{{URL::asset('assets/img/services/service-19.jpg')}}" alt="image">
                            </div>
                            <div>
                                <h6 class="fs-16 fw-medium mb-1">Computer Services</h6>
                                <p class="fs-12">Newyork, USA</p>
                            </div>
                        </div>
                        <div class="form-info d-flex align-items-center justify-content-between mb-3">
                            <p class="fw-medium text-dark mb-0">Rate The Service</p>
                            <div class="rating-select mb-0">
                                <a href="javascript:void(0);"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0);"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0);"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0);"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0);"><i class="fas fa-star"></i></a>
                            </div>
                        </div>
                        <div class="mb-0">
                            <label class="col-form-label">Write your Review</label>
                            <textarea class="form-control" rows="4" placeholder="Please write your review"></textarea>
                        </div>							
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Send</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Add Review -->

<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('user-booking-list')}}">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->

@endif
@if (Route::is(['favourites']))
<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('favourites')}}">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Cancel Appointment -->
@endif
@if (Route::is(['customer-wallet']))
<!-- Add Wallet -->
<div class="modal fade wallet-modal" id="add-wallet" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	  <div class="modal-content">
		<div class="modal-header d-flex align-items-center justify-content-between  border-0">
			<h5>Add Wallet</h5>
			<a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
		</div>
		<div class="modal-body pb-0">
			<form>
				<div class="mb-0">
				  <label for="amount" class="form-label">Amount</label>
				  <input type="text" class="form-control" id="amount">
				</div>
			  </form>
			  <div class="row">
				<div class="col-md-4">
					<div class="bank-selection">
						<input type="radio" value="attach_link" id="rolelink" name="attachment" checked="">
						<label for="rolelink">
							<img src="{{URL::asset('assets/img/icons/paypal.svg')}}" alt="Paypal">
							<span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
						</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="bank-selection">
						<input type="radio" value="attach_link" id="rolelink1" name="attachment">
						<label for="rolelink1">
							<img src="{{URL::asset('assets/img/icons/stripe.svg')}}" alt="Stripe">
							<span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
						</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="bank-selection">
						<input type="radio" value="attach_link" id="rolelink2" name="attachment">
						<label for="rolelink2">
							<img src="{{URL::asset('assets/img/icons/bank-transfer.svg')}}" alt="image">
							<span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
		  <button type="button" class="btn btn-dark">Submit</button>
		</div>
	  </div>
	</div>
  </div>

  <!-- Delete Account -->
	<div class="modal fade custom-modal" id="del-account">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Delete Account</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
				<form action="{{url('customer-wallet')}}">
					<div class="modal-body">
						<p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
						<div class="mb-0">
							<label class="form-label">Password</label>
							<div class="pass-group">
								<input type="password" class="form-control pass-input" placeholder="*************">
								<span class="toggle-password feather-eye-off"></span>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" class="btn btn-dark">Delete Account</button>
					</div>	
				</form>
            </div>
        </div>
    </div>
	<!-- /Cancel Appointment -->

@endif
@if (Route::is(['customer-reviews']))
<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('customer-reviews')}}">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Cancel Appointment -->


<!-- Add Wallet -->
 <div class="modal fade wallet-modal" id="add-wallet" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header d-flex align-items-center justify-content-between  border-0">
        <h5>Add Wallet</h5>
        <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
    </div>
    <div class="modal-body">
        <form>
            <div class="mb-3">
              <label for="amount" class="form-label">Amount</label>
              <input type="text" class="form-control" id="amount">
            </div>
          </form>
          <div class="row">
            <div class="col-md-4">
                <div class="bank-selection">
                    <input type="radio" value="attach_link" id="rolelink" name="attachment" checked="">
                    <label for="rolelink">
                        <img src="{{URL::asset('assets/img/icons/paypal.svg')}}" alt="Paypal">
                        <span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bank-selection">
                    <input type="radio" value="attach_link" id="rolelink1" name="attachment">
                    <label for="rolelink1">
                        <img src="{{URL::asset('assets/img/icons/stripe.svg')}}" alt="Stripe">
                        <span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bank-selection">
                    <input type="radio" value="attach_link" id="rolelink2" name="attachment">
                    <label for="rolelink2">
                        <img src="{{URL::asset('assets/img/icons/bank-transfer.svg')}}" alt="image">
                        <span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
      <button type="button" class="btn btn-dark">Submit</button>
    </div>
  </div>
</div>
</div>
@endif

@if (Route::is(['account-settings']))
<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('account-settings')}}">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Cancel Appointment -->

@endif

@if (Route::is(['provider-dashboard']))
 <!-- Add Staff-->
 <div class="modal fade custom-modal" id="add-staff">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Add Staff </h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body pb-0">
                <form action="{{url('staff-list')}}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <div class="d-flex profile-upload align-items-center">
                                    <span class="d-flex justify-content-center align-items-center p-4 bg-light rounded me-2"><i class="ti ti-photo"></i></span>
                                    <div>
                                        <h6 class="fs-16">Profile</h6>
                                        <span class="fs-14">Image size does not exceed 5MB</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Country</label>
                                <select class="select">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">State</label>
                                <select class="select">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <select class="select">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Zip Code</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Services</label>
                                <select class="select">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="select">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /Add Staff -->

<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="#">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->
@endif

@if (Route::is(['provider-services']))
 <!-- Inactive -->
 <div class="modal fade custom-modal" id="in-active">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Inactive Service</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <div class="write-review">
                    <form action="{{url('provider-services')}}">
                        <p>Are you sure want to inactive this service?</p>
                        <div class="modal-submit text-end">
                            <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-dark">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inactive -->

<!-- active -->
<div class="modal fade custom-modal" id="active">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Active Services</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <div class="write-review">
                    <form action="{{url('provider-services')}}">
                        <p>Are you sure want to active this service?</p>
                        <div class="modal-submit text-end">
                            <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-dark">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /active -->

<!-- Delete Service -->
<div class="modal fade custom-modal" id="del-service">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Service</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <div class="write-review">
                    <form action="{{url('provider-services')}}">
                        <p>Are you sure want to delete this service?</p>
                        <div class="modal-submit text-end">
                            <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-dark">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Service -->

<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
            <h5 class="modal-title">Delete Account</h5>
            <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
        </div>
        <form action="#">
            <div class="modal-body">
                <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                <div class="mb-0">
                    <label class="form-label">Password</label>
                    <div class="pass-group">
                        <input type="password" class="form-control pass-input" placeholder="*************">
                        <span class="toggle-password feather-eye-off"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                <button type="submit" class="btn btn-dark">Delete Account</button>
            </div>	
        </form>
    </div>
</div>
</div>
<!-- /Delete Account -->
@endif

@if (Route::is(['provider-booking']))
 <!-- Delete Account -->
 <div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="#">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->

<!-- Add Booking -->
<div class="modal fade custom-modal" id="add_booking">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Add Booking</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('provider-booking')}}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Staff</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Jeff Fitch</option>
                                    <option>Donald Gordon</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Service</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Computer Services</option>
                                    <option>Car Repair Services</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Customer</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Jeff Fitch</option>
                                    <option>Donald Gordon</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <div class="sel-cal Calendar-icon">
                                    <span><i class="ti ti-calendar-month"></i></span>
                                    <input class="form-control datetimepicker" type="text" placeholder="dd-mm-yyyy">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <div class="sel-cal Calendar-icon">
                                            <span><i class="ti ti-clock"></i></span>
                                            <input class="form-control timepicker" type="text" placeholder="dd-mm-yyyy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <div class="sel-cal Calendar-icon">
                                            <span><i class="ti ti-clock"></i></span>
                                            <input class="form-control timepicker" type="text" placeholder="dd-mm-yyyy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-0">
                                <label class="form-label">Booking Message</label>
                                <textarea rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Add Booking -->

<!-- Reschedule Appointment -->
<div class="modal fade custom-modal" id="reschedule">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Reschedule Appointment</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <form action="{{url('user-bookings')}}">
                    <div class="mb-3">
                        <label class="form-label">Appointment Date</label>
                        <div class="form-icon">
                            <input type="text" class="form-control datetimepicker" placeholder="DD/MM/YYYY">
                            <span class="cus-icon"><i class="feather-calendar"></i></span>
                        </div>
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Appointment Time</label>
                        <div class="form-icon">
                            <input type="text" class="form-control timepicker" placeholder="DD/MM/YYYY">
                            <span class="cus-icon"><i class="feather-clock"></i></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="acc-submit">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Reschedule Appointment -->

<!-- Cancel Appointment -->
<div class="modal fade custom-modal" id="cancel_appointment">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Cancel Appointment</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('user-bookings')}}">
                <div class="modal-body">
                    <p>Are you sure you want to cancel <span class="text-dark"> John Doe</span> appointment on 
                        <span class="text-dark"> Oct 28, 2022</span> at time <span class="text-dark"> 10AM - 12PM</span></p>
                </div>
                <div class="modal-footer">
                    <div class="acc-submit">
                        <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Dismiss</a>
                        <button class="btn btn-dark" type="submit">Yes, Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Cancel Appointment -->

<!-- Add Review -->
<div class="modal fade custom-modal" id="add-review">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Write A Review</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('user-bookings')}}">
                <div class="modal-body">
                    <div class="write-review">
                        <div class="review-add d-flex align-items-center mb-3">
                            <div class="rev-img me-2">
                                <img src="{{URL::asset('assets/img/services/service-19.jpg')}}" alt="image">
                            </div>
                            <div>
                                <h6 class="fs-16 fw-medium mb-1">Computer Services</h6>
                                <p class="fs-12">Newyork, USA</p>
                            </div>
                        </div>
                        <div class="form-info d-flex align-items-center justify-content-between mb-3">
                            <p class="fw-medium text-dark mb-0">Rate The Service</p>
                            <div class="rating-select mb-0">
                                <a href="javascript:void(0);"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0);"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0);"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0);"><i class="fas fa-star"></i></a>
                                <a href="javascript:void(0);"><i class="fas fa-star"></i></a>
                            </div>
                        </div>
                        <div class="mb-0">
                            <label class="col-form-label">Write your Review</label>
                            <textarea class="form-control" rows="4" placeholder="Please write your review"></textarea>
                        </div>							
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Send</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Add Review -->

@endif
@if (Route::is(['staff-list']))

 <!-- Add Staff-->
 <div class="modal fade custom-modal" id="add-staff">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Add Staff </h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body pb-0">
                <form action="{{url('staff-list')}}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <div class="d-flex profile-upload align-items-center">
                                    <span
                                        class="d-flex justify-content-center align-items-center p-4 bg-light rounded me-2"><i
                                            class="ti ti-photo"></i></span>
                                    <div>
                                        <h6 class="fs-16">Profile</h6>
                                        <span class="fs-14">Image size does not exceed 5MB</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Country</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Brazil</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">State</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Myanmar</option>
                                    <option>Cyprus</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>London</option>
                                    <option>Paris</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Zip Code</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Services</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Computer Repair</option>
                                    <option>Plumbing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Add Staff -->

<!-- Edit Staff-->
<div class="modal fade custom-modal" id="edit-staff">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Edit Staff </h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body pb-0">
                <form action="{{url('staff-list')}}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <div class="d-flex profile-upload align-items-center">
                                    <span
                                        class="d-flex justify-content-center align-items-center p-4 bg-light rounded me-2"><i
                                            class="ti ti-photo"></i></span>
                                    <div>
                                        <h6 class="fs-16">Profile</h6>
                                        <span class="fs-14">Image size does not exceed 5MB</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control pass-input" value="Jeff Fitch">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control pass-input" value="jeff@example.com">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control pass-input" value="1748116543">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Country</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>Brazil</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">State</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>Myanmar</option>
                                    <option>Cyprus</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>London</option>
                                    <option>Paris</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Zip Code</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Services</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>Computer Repair</option>
                                    <option>Plumbing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Staff -->

<!-- Delete Staff -->
<div class="modal fade custom-modal" id="del-staff">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Staff</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <div class="write-review">
                    <form action="{{url('staff-list')}}">
                        <p>Are you sure want to delete this Staff?</p>
                        <div class="modal-submit text-end">
                            <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-dark">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Staff -->

<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="#">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type
                        your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->


@endif
@if (Route::is(['customer-list']))
 <!-- Add Customer -->
 <div class="modal fade custom-modal" id="add-user">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Add Customer </h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body p-4">
                <form action="{{url('success')}}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">First Name</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">Last Name</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="col-form-label">Email</label>
                                <input type="email" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="col-form-label">Phone Number</label>
                                <input type="number" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="col-form-label">Address</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">Country</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Brazil</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">State</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Myanmar</option>
                                    <option>Cyprus</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">City</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>London</option>
                                    <option>Paris</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">Zip Code</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="col-form-label">Status</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Add Customer -->

<!-- Edit Customer -->
<div class="modal fade custom-modal" id="edit-user">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Edit Customer </h5>
                <a href="#" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body p-4">
                <form action="{{url('success')}}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">First Name</label>
                                <input type="text" class="form-control pass-input" value="Anthony">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">Last Name</label>
                                <input type="text" class="form-control pass-input" value=" Lewis">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="col-form-label">Email</label>
                                <input type="email" class="form-control pass-input" value="anthony@example.com">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="col-form-label">Phone Number</label>
                                <input type="number" class="form-control pass-input" value="16349672145">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="col-form-label">Address</label>
                                <input type="text" class="form-control pass-input" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">Country</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>Brazil</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">State</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>Myanmar</option>
                                    <option>Cyprus</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">City</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>London</option>
                                    <option>Paris</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">Zip Code</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="col-form-label">Status</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Customer -->

<!-- Delete Customer -->
<div class="modal fade custom-modal" id="delete-user">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Customer</h5>
                <a href="#" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <div class="write-review">
                    <form action="{{url('staff-list')}}">
                        <p>Are you sure want to delete this Customer?</p>
                        <div class="modal-submit text-end">
                            <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-dark">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Customer -->

<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="#">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type
                        your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->


@endif
@if (Route::is(['provider-payout']))
 <!-- Set Payout -->
 <div class="modal fade wallet-modal" id="set-payout" data-bs-backdrop="static" data-bs-keyboard="false"
 tabindex="-1"  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
         <div class="modal-header d-flex align-items-center justify-content-between  border-0">
             <h5>Set Your Payouts</h5>
             <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                     class="ti ti-circle-x-filled fs-20"></i></a>
         </div>
         <div class="modal-body">
             <div class="row">
                 <div class="col-md-4">
                     <div class="bank-selection">
                         <input type="radio" value="attach_link" id="rolelink" name="attachment" checked="">
                         <label for="rolelink">
                             <img src="{{URL::asset('assets/img/icons/paypal.svg')}}" alt="Paypal">
                             <span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
                         </label>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="bank-selection">
                         <input type="radio" value="attach_link" id="rolelink1" name="attachment">
                         <label for="rolelink1">
                             <img src="{{URL::asset('assets/img/icons/stripe.svg')}}" alt="Stripe">
                             <span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
                         </label>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="bank-selection">
                         <input type="radio" value="attach_link" id="rolelink2" name="attachment">
                         <label for="rolelink2">
                             <img src="{{URL::asset('assets/img/icons/bank-transfer.svg')}}" alt="image">
                             <span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
                         </label>
                     </div>
                 </div>
             </div>
             <form>
                 <div>
                     <label for="amount" class="form-label">Card Number</label>
                     <input type="text" id="amount" class="form-control">
                 </div>
             </form>
         </div>
         <div class="modal-footer">
             <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
             <button type="button" class="btn btn-dark">Submit</button>
         </div>
     </div>
 </div>
</div>
<!-- /Set payout -->

<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
 <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
         <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
             <h5 class="modal-title">Delete Account</h5>
             <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                     class="ti ti-circle-x-filled fs-20"></i></a>
         </div>
         <form action="#">
             <div class="modal-body">
                 <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type
                     your password.</p>
                 <div class="mb-0">
                     <label class="form-label">Password</label>
                     <div class="pass-group">
                         <input type="password" class="form-control pass-input" placeholder="*************">
                         <span class="toggle-password feather-eye-off"></span>
                     </div>
                 </div>
             </div>
             <div class="modal-footer">
                 <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                 <button type="submit" class="btn btn-dark">Delete Account</button>
             </div>
         </form>
     </div>
 </div>
</div>
<!-- /Delete Account -->

<!-- Set Payout -->
<div class="modal fade wallet-modal" id="withdraw" data-bs-keyboard="false"
 tabindex="-1"  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
         <div class="modal-header d-flex align-items-center justify-content-between  border-0">
             <h5>Withdraw</h5>
             <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                     class="ti ti-circle-x-filled fs-20"></i></a>
         </div>
         <div class="modal-body">
             <div class="bg-light border p-3 rounded mb-3">
                 <div class="row g-3">
                     <div class="col-lg-6">
                         <div>
                             <p class="mb-1">Available Balance</p>
                             <span class="text-dark">$180</span>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div>
                             <p class="mb-1">Payment Method</p>
                             <span class="text-dark">Paypal</span>
                         </div>
                     </div>
                 </div>
             </div>
             <div>
                 <label class="form-label">Enter Amount</label>
                 <input type="text" class="form-control">
             </div>
             <p class="d-flex align-items-center mt-2"><i class="feather-info me-2"></i>Minimum withdraw amount is $1.00</p>
         </div>
         <div class="modal-footer">
             <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
             <button type="button" class="btn btn-dark">Withdraw</button>
         </div>
     </div>
 </div>
</div>
<!-- /Set payout -->

@endif

@if (Route::is(['provider-holiday']))
 <!-- Add Holiday -->
 <div class="modal fade custom-modal" id="add-holiday">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Add Holiday </h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="wallet-add">
                        <div class="form-group">
                            <label class="col-form-label">Holiday Name</label>
                            <input type="text" class="form-control" placeholder="Enter Holiday Name">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">From</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">To</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Description</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>						
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Add Holiday -->

<!-- Add Leave -->
<div class="modal fade custom-modal" id="add-leave">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Add Leave </h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="wallet-add">
                        <div class="form-group">
                            <label class="col-form-label">From</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">To</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Reason</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>							
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Add Leave -->

<!-- Alert Message -->
<div class="modal fade custom-modal" id="alertmsg">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Add Message</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="msg-alert">
                        <p>If You Take Your Appointment Automatically Cancelled.</p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Ok</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Alert Message -->

<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="#">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->
 <!-- Booking Details -->
 <div class="toggle-sidebar">
    <div class="sidebar-layout">
        <div class="sidebar-header pb-3 mb-3">
            <h5>Booking Details</h5>
            <a href="javascript:void(0);" class="sidebar-close"><i class="ti ti-x"></i></a>
        </div>
        <div class="sidebar-body">
            <div class="book-confirm bk-wrap">
                <div class="d-flex justify-content-between">
                    <h6>Services<span class="badge badge-soft-success">Confirmed</span></h6>
                    <a href="javascript:void(0);" class="edit-book"><i class="feather-edit"></i></a>
                </div>
                <ul>
                    <li><span class="bk-date"><i class="feather-calendar"></i> Date & Time  </span> : Oct 28, 2023 - 10AM to 12 AM</li>
                    <li><span class="bk-date"><i class="feather-map-pin"></i> Location  </span> : New York</li>
                    <li><span class="bk-date"><i class="feather-user"></i> User Name  </span> : John Smith</li>
                </ul>
                <div class="d-flex align-items-center mb-3">
                    <a href="javascript:void(0);" class="btn btn-dark btn-sm me-2" data-bs-toggle="modal" data-bs-target="#reschedule"><i class="feather-user me-1"></i> Reschedule</a>
                    <a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#cancel_appointment"><i class="feather-x-circle me-1"></i> Cancel</a>
                </div>
            </div>
            <div class="book-customer bk-wrap pt-3">
                <h5>Provider Details</h5>
                <div class="d-flex align-items-center flex-wrap justify-content-between mb-3">
                    <div class="d-flex align-items-center">
                        <span class="avatar avatar-md me-2"><img src="{{URL::asset('assets/img/profiles/avatar-02.jpg')}}" class="rounded-circle" alt="User"></span>
                        <div>
                        <h6 class="fs-14 fw-medium">John Doe</h6>
                        <p class="mb-0">Montana, USA</p>
                    </div>
                    </div>
                    <div>
                        <a href="{{url('user-chat')}}" class="btn btn-dark btn-sm"><i class="ti ti-message me-1"></i>Chat</a>
                    </div>
                </div>
            </div>
            <div class="bk-wrap py-3">
                <h5>Appointment Message</h5>
                <p class="mb-0">Thanks for your interest in our services</p>
            </div>
            <div class="bk-wrap bk-service py-3">
                <div>
                    <h5>House Cleaning Services</h5>
                    <p class="mb-0">quick and quality service</p>
                </div>
                <p class="bk-price">$100.00</p>
            </div>
            <div class="bk-wrap bk-history pt-3">
                <h4>Booking History</h4>
                <ul>
                    <li>
                        <span>
                            <i class="feather-calendar"></i>
                        </span>
                        <div class="book-crete">
                            <h6>Booking created</h6>
                            <p>Oct 28 2023 1:28 PM</p>
                        </div>
                    </li>
                    <li>
                        <span>
                            <i class="feather-user"></i>
                        </span>
                        <div class="book-crete">
                            <h6>Assigned to John Smith</h6>
                            <p>Oct 28 2023 1:28 PM</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /Booking Details -->	
@endif

@if (Route::is(['provider-coupons']))
<!-- Add coupons -->
<div class="modal fade custom-modal" id="add-coupons">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between  border-0">
                <h5>Add Coupon</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('provider-coupons')}}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Services</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Car Repair</option>
                                    <option>Interior Designing</option>
                                    <option>House Cleaning</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Coupon Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Code</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Coupon Type</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Percentage</option>
                                            <option>Fixed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Discount</label>
                                        <div class=" input-icon position-relative">
                                            <span class="input-icon-addon"><i
                                                    class="ti ti-square-rounded-percentage"></i></span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Start Date</label>
                                        <div class=" input-icon position-relative">
                                            <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
                                            <input type="text" class="form-control datetimepicker"
                                                placeholder="dd-mm-yyyy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">End Date</label>
                                        <div class=" input-icon position-relative">
                                            <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
                                            <input type="text" class="form-control datetimepicker"
                                                placeholder="dd-mm-yyyy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Company Name</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Black Friday</option>
                                            <option>Valentines</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="form-check form-switch d-flex align-items-center">
                                            <input class="form-check-input me-1" type="checkbox" role="switch" id="switch-sm" checked>
                                            <h6 class="fs-14">Once per Customer</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex  flex-column">
                                        <label class="form-label">End Date</label>
                                        <div class="d-flex">
                                            <div class="form-check me-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Inactive
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- /Add coupons -->

<!--Edit coupons -->
<div class="modal fade custom-modal" id="edit-coupons">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between  border-0">
                <h5>Edit Coupon</h5>
                <a href="#" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('provider-coupons')}}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Services</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Car Repair</option>
                                    <option selected>Interior Designing</option>
                                    <option>House Cleaning</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Coupon Name</label>
                                        <input type="text" class="form-control" value="Black Friday">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Code</label>
                                        <input type="text" class="form-control" value="GIFTGUIDE">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Coupon Type</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>Percentage</option>
                                            <option>Fixed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Discount</label>
                                        <div class=" input-icon position-relative">
                                            <span class="input-icon-addon"><i class="ti ti-square-rounded-percentage"></i></span>
                                            <input type="text" class="form-control" value="5%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Start Date</label>
                                        <div class=" input-icon position-relative">
                                            <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
                                            <input type="text" class="form-control datetimepicker"
                                                placeholder="dd-mm-yyyy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">End Date</label>
                                        <div class=" input-icon position-relative">
                                            <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
                                            <input type="text" class="form-control datetimepicker"
                                                placeholder="dd-mm-yyyy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Company Name</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Black Friday</option>
                                            <option selected>Valentines</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="form-check form-switch d-flex align-items-center">
                                            <input class="form-check-input me-1" type="checkbox" role="switch" id="switch-sm" checked>
                                            <h6 class="fs-14">Once per Customer</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex  flex-column">
                                        <label class="form-label">End Date</label>
                                        <div class="d-flex">
                                            <div class="form-check me-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                Inactive
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- /Edit coupons -->

<!-- Delete Staff -->
<div class="modal fade custom-modal" id="del-coupons">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete coupons</h5>
                <a href="#" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <div class="write-review">
                    <form action="{{url('provider-coupons')}}">
                        <p>Are you sure want to delete this coupons?</p>
                        <div class="modal-submit text-end">
                            <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-dark">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Staff -->

<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="#">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->

@endif
@if (Route::is(['provider-offers']))
 <!-- Add Offers -->
 <div class="modal fade wallet-modal" id="add-offer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between  border-0">
                <h5>Add Offer</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('provider-offers')}}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Offer Type</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Fixed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Offer Price</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Start Date</label>
                            <div class=" input-icon position-relative">
                                <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
                                <input type="text" class="form-control datetimepicker" placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">End Date</label>
                            <div class=" input-icon position-relative">
                                <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
                                <input type="text" class="form-control datetimepicker" placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- /Add Offers -->

<!-- Edit Offers -->
<div class="modal fade wallet-modal" id="edit-offer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between  border-0">
                <h5>Edit Offer</h5>
                <a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('provider-offers')}}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Offer Type</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>Fixed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Offer Price</label>
                                <input type="text" class="form-control" value="$20">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Start Date</label>
                            <div class=" input-icon position-relative">
                                <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
                                <input type="text" class="form-control datetimepicker" placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">End Date</label>
                            <div class=" input-icon position-relative">
                                <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
                                <input type="text" class="form-control datetimepicker" placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Offers -->

<!-- Delete offer -->
<div class="modal fade custom-modal" id="del-offer">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
            <h5 class="modal-title">Delete Offer</h5>
            <a href="#" data-bs-dismiss="modal" aria-label="Close"><i
                    class="ti ti-circle-x-filled fs-20"></i></a>
        </div>
        <div class="modal-body">
            <div class="write-review">
                <form action="{{url('provider-offers')}}">
                    <p>Are you sure want to delete this offer?</p>
                    <div class="modal-submit text-end">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-dark">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /Delete offer -->

<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('provider-offers')}}">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type
                        your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->

@endif
@if (Route::is(['booking-details']))

<!-- Add Review -->
<div class="modal fade custom-modal" id="add-review">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header d-flex align-items-center justify-content-between border-bottom">
				<h5 class="modal-title">Write A Review</h5>
				<a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
			</div>
			<form action="{{url('customer-reviews')}}">
				<div class="modal-body">
					<div class="write-review">
						<div class="review-add d-flex align-items-center mb-3">
							<div class="rev-img me-2">
								<img src="{{URL::asset('assets/img/services/service-19.jpg')}}" alt="image">
							</div>
							<div>
								<h6 class="fs-16 fw-medium mb-1">Computer Services</h6>
								<p class="fs-12">Newyork, USA</p>
							</div>
						</div>
						<div class="form-info d-flex align-items-center justify-content-between mb-3">
							<p class="fw-medium text-dark mb-0">Rate The Service</p>
							<div class="rating-select mb-0">
								<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
								<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
								<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
								<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
								<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
							</div>
						</div>
						<div class="mb-0">
							<label class="col-form-label">Write your Review</label>
							<textarea class="form-control" rows="4" placeholder="Please write your review"></textarea>
						</div>							
					</div>
				</div>
				<div class="modal-footer">
					<a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
					<button type="submit" class="btn btn-dark">Send</button>
				</div>	
			</form>
		</div>
	</div>
</div>
<!-- /Add Review -->
@endif

@if (Route::is(['blogs']))
<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
            <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
        </div>
        <div class="modal-body p-4">
          <form action="{{url('index')}}">
            <div class="text-center mb-3">
                <h3 class="mb-2">Welcome</h3>
                <p>Enter your credentials to access your account</p>
            </div>
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <label class="form-label">Password</label>
                    <a href="javascript:void(0);" class="text-primary fw-medium text-decoration-underline mb-1 fs-14" data-bs-toggle="modal" data-bs-target="#forgot-modal">Forgot Password?</a>
                </div>
                <input type="password" class="form-control">
            </div>
            <div class="mb-3">
                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="remembers_me">
                        <label class="form-check-label" for="remembers_me">
                            Remember Me
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="otp_signin">
                        <label class="form-check-label" for="otp_signin">
                            Sign in with OTP
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-lg btn-linear-primary w-100">Sign In</button>
            </div>
            <div class="login-or mb-3">
                <span class="span-or">Or sign in with </span>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="javascript:void(0);" class="btn btn-light flex-fill d-flex align-items-center justify-content-center me-3"><img src="{{URL::asset('assets/img/icons/google-icon.svg')}}" class="me-2" alt="Img">Google</a>
                <a href="javascript:void(0);" class="btn btn-light flex-fill d-flex align-items-center justify-content-center"><img src="{{URL::asset('assets/img/icons/fb-icon.svg')}}" class="me-2" alt="Img">Facebook</a>
            </div>
            <div class="mb-4 d-flex justify-content-center">
                <p>Don’t have a account? <a href="javascript:void(0);" class="text-primary" data-bs-toggle="modal" data-bs-target="#register-modal"> Join us Today</a></p>
            </div>
            <div class="d-flex align-items-center justify-content-center flex-wrap row-gap-2 login-modules pt-4">
                <a href="javascript:void(0);" class="btn btn-dark me-2" data-bs-target="#free-trail" data-bs-toggle="modal">Users</a>
                <a href="javascript:void(0);" class="btn btn-dark me-2">Providers</a>
                <a href="javascript:void(0);" class="btn btn-dark me-2">Admin</a>
            </div>
          </form>
        </div>
        
      </div>
    </div>
</div>
<!-- /Login Modal -->
<!-- Register Modal -->
<div class="modal fade" id="register-modal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
            <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
        </div>
        <div class="modal-body p-4">
         <form action="#">
            <div class="text-center mb-3">
                <h3 class="mb-2">Registration</h3>
                <p>Enter your credentials to access your account</p>
            </div>
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input class="form-control" id="phone" name="phone" type="text">
            </div>
            <div class="mb-3">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <label class="form-label">Password</label>
                    <p  class="text-gray-6 fw-medium  mb-1">Must be 8 Characters at Least</p>
                </div>
                <input type="password" class="form-control">
            </div>
            <div class="mb-3">
                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="remember_me">
                        <label class="form-check-label" for="remember_me">
                            I agree to <a href="javascript:void(0);" class="text-primary text-decoration-underline">Terms of use</a> & <a href="javascript:void(0);" class="text-primary text-decoration-underline">Privacy policy</a>
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button type="button" data-bs-toggle="modal" data-bs-target="#login-modal" class="btn btn-lg btn-linear-primary w-100">Sign Up</button>
            </div>
            <div class="login-or mb-3">
                <span class="span-or">Or sign up with </span>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="javascript:void(0);" class="btn btn-light flex-fill d-flex align-items-center justify-content-center me-3"><img src="{{URL::asset('assets/img/icons/google-icon.svg')}}" class="me-2" alt="Img">Google</a>
                <a href="javascript:void(0);" class="btn btn-light flex-fill d-flex align-items-center justify-content-center"><img src="{{URL::asset('assets/img/icons/fb-icon.svg')}}" class="me-2" alt="Img">Facebook</a>
            </div>
            <div class=" d-flex justify-content-center">
                <p>Already have a account? <a href="javascript:void(0);" class="text-primary" data-bs-target="#login-modal" data-bs-toggle="modal">Sign In</a></p>
            </div>
         </form>
        </div>
        
      </div>
    </div>
</div>
<!-- /Register Modal -->

@endif
@if (Route::is(['provider-reviews']))
  <!-- Delete Staff -->
  <div class="modal fade custom-modal" id="del-review">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Review</h5>
                <a href="#" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <div class="write-review">
                    <form action="{{url('provider-reviews')}}">
                        <p>Are you sure want to delete this Review?</p>
                        <div class="modal-submit text-end">
                            <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-dark">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Staff -->


@endif
@if (Route::is(['provider-earnings']))

  <!-- Delete Staff -->
  <div class="modal fade custom-modal" id="del-earning">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Earnings</h5>
                <a href="#" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <div class="write-review">
                    <form action="{{url('provider-earnings')}}">
                        <p>Are you sure want to delete this Earning?</p>
                        <div class="modal-submit text-end">
                            <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-dark">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Staff -->
@endif
@if (Route::is(['provider-chat']))
<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="#">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->

@endif
@if (Route::is(['provider-appointment-settings']))
<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="#">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type
                        your
                        password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->

@endif
@if (Route::is(['provider-accounts-settings']))
<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="javascript:void(0);">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->

@endif
@if (Route::is(['provider-social-profile']))
<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="javascript:void(0);">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->

@endif

@if (Route::is(['provider-security-settings']))
<!-- Change Password -->
<div class="modal fade" id="change-password" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-between  border-0">
        <h5>Change  Password</h5>
        <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
    </div>
        <form action="{{url('provider-security-settings')}}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Current Password</label>
                        <div class="pass-group">
                            <input type="password" class="pass-input form-control">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-input form-control">
                                    <span class="toggle-password feather-eye-off"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>
                                <label class="form-label">Confirm New Password</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-input form-control">
                                    <span class="toggle-password feather-eye-off"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <div class="modal-footer">
        <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-dark">Update Password</button>
        </div>
        </div>
    </div>
</div>
<!-- /Change Password -->

<!-- Change Email -->
<div class="modal fade" id="change-email" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between  border-0">
            <h5>Change  Email</h5>
            <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
        </div>
            <form action="{{url('provider-security-settings')}}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Current Email Address</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">New Email Address</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>
                                <label class="form-label">Confirm New Password</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-input form-control">
                                    <span class="toggle-password feather-eye-off"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </form>
            <div class="modal-footer">
            <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-dark">Change Email</button>
            </div>
        </div>
    </div>
</div>
<!-- /Change Email -->

<!-- Change Phone Number -->
<div class="modal fade" id="change-phone-number" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between  border-0">
            <h5>Current Phone Number</h5>
            <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
        </div>
            <form action="{{url('provider-security-settings')}}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Current Phone Number</label>
                        <input class="form-control" id="phone" name="phone" type="text">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">New Phone Number</label>
                                <input class="form-control" id="phone1" name="phone" type="text">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>
                                <label class="form-label">Confirm New Password</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-input form-control">
                                    <span class="toggle-password feather-eye-off"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </form>
            <div class="modal-footer">
            <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-dark">Change Number</button>
            </div>
        </div>
    </div>
</div>
<!-- /Change Phone Number -->

<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="#">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->
@endif

@if (Route::is(['provider-plan']))
	<!-- Add Payment -->
    <div class="modal fade custom-modal" id="add-payment">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Add Payment Method</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <form action="{{url('provider-coupons')}}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Card Number</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Expiration date</label>
                                            <div class=" input-icon position-relative">
                                                <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
                                                <input type="text" class="form-control monthpicker"
                                                    placeholder="mm-yyyy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Security code</label>
                                                <input type="text" class="form-control" placeholder="CVV">
                                            </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-dark">Add Card</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Payment -->

    <!-- Delete Account -->
    <div class="modal fade custom-modal" id="del-account">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Delete Account</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <form action="javascript:void(0);">
                    <div class="modal-body">
                        <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type
                            your password.</p>
                        <div class="mb-0">
                            <label class="form-label">Password</label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-input" placeholder="*************">
                                <span class="toggle-password feather-eye-off"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-dark">Delete Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Delete Account -->

@endif
@if (Route::is(['payment-settings']))
<!-- Add Payment -->
<div class="modal fade wallet-modal" id="add-payment-methods" data-bs-backdrop="static" data-bs-keyboard="false"
tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-between  border-0">
            <h5>Add Payment Method</h5>
            <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                    class="ti ti-circle-x-filled fs-20"></i></a>
        </div>
        <form action="{{url('provider-plan')}}">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Card Number</label>
                                    <input type="text" class="form-control" placeholder="**** **** ****">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Expiration date</label>
                                    <div class=" input-icon position-relative">
                                        <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
                                        <input type="text" class="form-control monthpicker"
                                            placeholder="mm-yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Security code</label>
                                    <input type="text" class="form-control" placeholder="CVV">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="modal-footer">
            <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-dark">Add Card</button>
        </div>
    </div>
</div>
</div>
<!-- /Add Payment -->

<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
            <h5 class="modal-title">Delete Account</h5>
            <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                    class="ti ti-circle-x-filled fs-20"></i></a>
        </div>
        <form action="#">
            <div class="modal-body">
                <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type
                    your password.</p>
                <div class="mb-0">
                    <label class="form-label">Password</label>
                    <div class="pass-group">
                        <input type="password" class="form-control pass-input" placeholder="*************">
                        <span class="toggle-password feather-eye-off"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                <button type="submit" class="btn btn-dark">Delete Account</button>
            </div>
        </form>
    </div>
</div>
</div>
<!-- /Delete Account -->

@endif
@if (Route::is(['provider-notifcations']))
<!-- Add coupons -->
<div class="modal fade wallet-modal" id="add-coupons" data-bs-backdrop="static" data-bs-keyboard="false"
tabindex="-1"  aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-between  border-0">
            <h5>Add Coupon</h5>
            <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                    class="ti ti-circle-x-filled fs-20"></i></a>
        </div>
        <form action="{{url('provider-coupons')}}">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Services</label>
                            <select class="select">
                                <option>Select</option>
                                <option>Car Repair</option>
                                <option>Interior Designing</option>
                                <option>House Cleaning</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Coupon Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Code</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Coupon Type</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Percentage</option>
                                        <option>Fixed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Discount</label>
                                    <div class=" input-icon position-relative">
                                        <span class="input-icon-addon"><i
                                                class="ti ti-square-rounded-percentage"></i></span>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Start Date</label>
                                    <div class=" input-icon position-relative">
                                        <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
                                        <input type="text" class="form-control datetimepicker"
                                            placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">End Date</label>
                                    <div class=" input-icon position-relative">
                                        <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
                                        <input type="text" class="form-control datetimepicker"
                                            placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Company Name</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Black Friday</option>
                                        <option>Valentines</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="form-check form-switch d-flex align-items-center">
                                        <input class="form-check-input me-1" type="checkbox" role="switch" id="switch-sm" checked>
                                        <h6 class="fs-14">Once per Customer</h6>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex  flex-column">
                                    <label class="form-label">End Date</label>
                                    <div class="d-flex">
                                        <div class="form-check me-2">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Active
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Inactive
                                        </label>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="modal-footer">
            <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-dark">Submit</button>
        </div>
    </div>
</div>
</div>
<!-- /Add coupons -->

<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
            <h5 class="modal-title">Delete Account</h5>
            <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
        </div>
        <form action="#">
            <div class="modal-body">
                <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                <div class="mb-0">
                    <label class="form-label">Password</label>
                    <div class="pass-group">
                        <input type="password" class="form-control pass-input" placeholder="*************">
                        <span class="toggle-password feather-eye-off"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                <button type="submit" class="btn btn-dark">Delete Account</button>
            </div>	
        </form>
    </div>
</div>
</div>
<!-- /Delete Account -->


@endif

@if (Route::is(['provider-connected-apps']))
<!-- Add coupons -->
<div class="modal fade wallet-modal" id="add-coupons" data-bs-backdrop="static" data-bs-keyboard="false"
tabindex="-1"  aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-between  border-0">
            <h5>Add Coupon</h5>
            <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                    class="ti ti-circle-x-filled fs-20"></i></a>
        </div>
        <form action="{{url('provider-coupons')}}">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Services</label>
                            <select class="select">
                                <option>Select</option>
                                <option>Car Repair</option>
                                <option>Interior Designing</option>
                                <option>House Cleaning</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Coupon Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Code</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Coupon Type</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Percentage</option>
                                        <option>Fixed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Discount</label>
                                    <div class=" input-icon position-relative">
                                        <span class="input-icon-addon"><i
                                                class="ti ti-square-rounded-percentage"></i></span>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Start Date</label>
                                    <div class=" input-icon position-relative">
                                        <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
                                        <input type="text" class="form-control datetimepicker"
                                            placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">End Date</label>
                                    <div class=" input-icon position-relative">
                                        <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
                                        <input type="text" class="form-control datetimepicker"
                                            placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Company Name</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Black Friday</option>
                                        <option>Valentines</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="form-check form-switch d-flex align-items-center">
                                        <input class="form-check-input me-1" type="checkbox" role="switch" id="switch-sm" checked>
                                        <h6 class="fs-14">Once per Customer</h6>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex  flex-column">
                                    <label class="form-label">End Date</label>
                                    <div class="d-flex">
                                        <div class="form-check me-2">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Active
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Inactive
                                        </label>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="modal-footer">
            <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-dark">Submit</button>
        </div>
    </div>
</div>
</div>
<!-- /Add coupons -->

<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
            <h5 class="modal-title">Delete Account</h5>
            <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
        </div>
        <form action="#">
            <div class="modal-body">
                <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                <div class="mb-0">
                    <label class="form-label">Password</label>
                    <div class="pass-group">
                        <input type="password" class="form-control pass-input" placeholder="*************">
                        <span class="toggle-password feather-eye-off"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                <button type="submit" class="btn btn-dark">Delete Account</button>
            </div>	
        </form>
    </div>
</div>
</div>
<!-- /Delete Account -->

@endif

@if (Route::is(['verification']))
	<!-- Upload Document -->
    <div class="modal fade verification-document" id="upload-document" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between  border-0">
            <h5>Document Verification</h5>
            <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
        </div>
            <form action="{{url('verification')}}">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <div class="pass-group">
                                <input type="password" class="pass-input form-control">
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Document Type</label>
                            <select class="select">
                                <option>Select</option>
                                <option>Passport</option>
                                <option>Visa</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Document Number</label>
                            <div class="pass-group">
                                <input type="password" class="pass-input form-control">
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <div class="pass-group">
                                <input type="password" class="pass-input form-control">
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Upload Document</label>
                            <div class="file-upload drag-file w-100 d-flex align-items-center justify-content-center flex-column mb-2">
                                <span class="upload-img d-block mb-2"><i class="ti ti-upload text-dark"></i></span>
                                <p class="mb-0 text-center fs-16 text-dark">Drag or Click here to Upload documents</p>
                                <p class="text-center fs-14">Document file size does not exceed 5MB</p>
                                <input type="file" accept="video/image">
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="passport-document">
                                <div class="row w-100">
                                    <div class="col-md-10">
                                        <div class="d-flex align-items-center">
                                            <div class="file-icon me-2">
                                                <span ><i class="ti ti-file"></i></span>
                                            </div>
                                            <div>
                                                <h6 class="d-flex align-items-center fs-16">Passport_For_Verification.pdf <i class="ti ti-circle-check-filled text-success ms-1"></i></h6>
                                                <span class="fs-14 text-gray">1.25 MB</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 d-flex justify-content-end align-items-center">
                                        <div class="d-flex justify-content-end">
                                            <a href="javascript:void(0);"><span class="d-flex align-items-center"><i class="ti ti-trash text-dark"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                    
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="passport-document">
                                <div class="row w-100">
                                    <div class="col-md-10">
                                        <div class="d-flex align-items-center">
                                            <div class="file-icon me-2">
                                                <span ><i class="ti ti-file"></i></span>
                                            </div>
                                            <div class="file-progress">
                                                <h6 class="d-flex align-items-center fs-16 mb-2">Card_debit.jpg<i class="ti ti-circle-check-filled text-success ms-1"></i></h6>
                                                <div class="progress progress-xs  flex-grow-1 mb-1">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary rounded"
                                                        role="progressbar" style="width: 80%;" aria-valuenow="80"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 d-flex justify-content-end align-items-center">
                                        <div class="d-flex justify-content-end">
                                            <a href="javascript:void(0);"><span class="d-flex align-items-center"><i class="ti ti-loader-2 text-dark"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                    
                            </div>
                        </div>
                        
                    </div>
                    <div>
                        <span class="text-success fs-14 d-flex align-items-center"><i class="ti ti-circle-check-filled text-success me-1"></i> Document Uploaded Successfully</span>
                    </div>
                </div>
            </div>
            </form>
            <div class="modal-footer">
            <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-dark">Submit</button>
            </div>
            </div>
        </div>
    </div>
    <!-- /Upload Document -->

    <!-- Change Email -->
    <div class="modal fade" id="change-email" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between  border-0">
                <h5>Change  Email</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
                <form action="{{url('provider-security-settings')}}">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Current Email Address</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">New Email Address</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div>
                                    <label class="form-label">Confirm New Password</label>
                                    <div class="pass-group">
                                        <input type="password" class="pass-input form-control">
                                        <span class="ti toggle-password ti-eye-off"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </form>
                <div class="modal-footer">
                <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark">Change Email</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Email -->

    <!-- Change Phone Number -->
    <div class="modal fade" id="change-phone-number" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between  border-0">
                <h5>Current Phone Number</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
                <form action="{{url('provider-security-settings')}}">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Current Phone Number</label>
                            <input class="form-control" id="phone" name="phone" type="text">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">New Phone Number</label>
                                    <input class="form-control" id="phone1" name="phone" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div>
                                    <label class="form-label">Confirm New Password</label>
                                    <div class="pass-group">
                                        <input type="password" class="pass-input form-control">
                                        <span class="ti toggle-password ti-eye-off"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </form>
                <div class="modal-footer">
                <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark">Change Number</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Phone Number -->

    <!-- Delete Account -->
    <div class="modal fade custom-modal" id="del-account">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Delete Account</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                        <div class="mb-0">
                            <label class="form-label">Password</label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-input" placeholder="*************">
                                <span class="toggle-password feather-eye-off"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-dark">Delete Account</button>
                    </div>	
                </form>
            </div>
        </div>
    </div>
    <!-- /Delete Account -->

@endif

@if (Route::is(['provider-leave-history']))
 <!-- Add Holiday -->
 <div class="modal fade custom-modal" id="add-holiday">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Add Holiday</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="wallet-add">
                        <div class="form-group">
                            <label class="col-form-label">Holiday Name</label>
                            <input type="text" class="form-control" placeholder="Enter Holiday Name">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">From</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">To</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Description</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Add Holiday -->

<!-- Add Leave -->
<div class="modal fade custom-modal" id="add-leave">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Add Leave </h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="wallet-add">
                        <div class="form-group">
                            <label class="col-form-label">From</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">To</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Reason</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Add Leave -->

<!-- Edit Leave -->
<div class="modal fade custom-modal" id="edit-leave">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Edit Leave </h5>
                <a href="#" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="wallet-add">
                        <div class="form-group">
                            <label class="col-form-label">From</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">To</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Reason</label>
                            <textarea class="form-control" rows="3" cols="12">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius odio similique labore ad magni obcaecati facere beatae at.
                            </textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Leave -->

<!-- Delete Leave -->
<div class="modal fade custom-modal" id="del-leave">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete leave</h5>
                <a href="#" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <div class="write-review">
                    <form action="{{url('staff-list')}}">
                        <p>Are you sure want to delete this leave?</p>
                        <div class="modal-submit text-end">
                            <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-dark">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Leave -->

<!-- Alert Message -->
<div class="modal fade custom-modal" id="alertmsg">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Add Message</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="msg-alert">
                        <p>If You Take Your Appointment Automatically Cancelled.</p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Ok</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Alert Message -->

<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="#">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type
                        your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->

@endif
@if (Route::is(['notification-settings']))
<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('notification-settings')}}">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Cancel Appointment -->

@endif
@if (Route::is(['provider-device-management']))
<!-- Add coupons -->
<div class="modal fade wallet-modal" id="add-coupons" data-bs-backdrop="static" data-bs-keyboard="false"
tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-between  border-0">
            <h5>Add Coupon</h5>
            <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                    class="ti ti-circle-x-filled fs-20"></i></a>
        </div>
        <form action="{{url('provider-coupons')}}">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Services</label>
                            <select class="select">
                                <option>Select</option>
                                <option>Car Repair</option>
                                <option>Interior Designing</option>
                                <option>House Cleaning</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Coupon Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Code</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Coupon Type</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Percentage</option>
                                        <option>Fixed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Discount</label>
                                    <div class=" input-icon position-relative">
                                        <span class="input-icon-addon"><i
                                                class="ti ti-square-rounded-percentage"></i></span>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Start Date</label>
                                    <div class=" input-icon position-relative">
                                        <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
                                        <input type="text" class="form-control datetimepicker"
                                            placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">End Date</label>
                                    <div class=" input-icon position-relative">
                                        <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
                                        <input type="text" class="form-control datetimepicker"
                                            placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Company Name</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Black Friday</option>
                                        <option>Valentines</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="form-check form-switch d-flex align-items-center">
                                        <input class="form-check-input me-1" type="checkbox" role="switch" id="switch-sm" checked>
                                        <h6 class="fs-14">Once per Customer</h6>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex  flex-column">
                                    <label class="form-label">End Date</label>
                                    <div class="d-flex">
                                        <div class="form-check me-2">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Active
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Inactive
                                        </label>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="modal-footer">
            <button type="button" class="btn bg-gray" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-dark">Submit</button>
        </div>
    </div>
</div>
</div>
<!-- /Add coupons -->

<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
            <h5 class="modal-title">Delete Account</h5>
            <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
        </div>
        <form action="#">
            <div class="modal-body">
                <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                <div class="mb-0">
                    <label class="form-label">Password</label>
                    <div class="pass-group">
                        <input type="password" class="form-control pass-input" placeholder="*************">
                        <span class="toggle-password feather-eye-off"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                <button type="submit" class="btn btn-dark">Delete Account</button>
            </div>	
        </form>
    </div>
</div>
</div>
<!-- /Delete Account -->

@endif

@if (Route::is(['provider-service-list']))
 <!-- Inactive -->
 <div class="modal fade custom-modal" id="in-active">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Inactive Service</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <div class="write-review">
                    <form action="{{url('provider-services')}}">
                        <p>Are you sure want to inactive this service?</p>
                        <div class="modal-submit text-end">
                            <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-dark">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inactive -->

<!-- active -->
<div class="modal fade custom-modal" id="active">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Active Services</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <div class="write-review">
                    <form action="{{url('provider-services')}}">
                        <p>Are you sure want to active this service?</p>
                        <div class="modal-submit text-end">
                            <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-dark">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /active -->

<!-- Delete Service -->
<div class="modal fade custom-modal" id="del-service">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Service</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <div class="write-review">
                    <form action="{{url('provider-services')}}">
                        <p>Are you sure want to delete this service?</p>
                        <div class="modal-submit text-end">
                            <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-dark">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Service -->

<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
            <h5 class="modal-title">Delete Account</h5>
            <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
        </div>
        <form action="#">
            <div class="modal-body">
                <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                <div class="mb-0">
                    <label class="form-label">Password</label>
                    <div class="pass-group">
                        <input type="password" class="form-control pass-input" placeholder="*************">
                        <span class="toggle-password feather-eye-off"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                <button type="submit" class="btn btn-dark">Delete Account</button>
            </div>	
        </form>
    </div>
</div>
</div>
<!-- /Delete Account -->

@endif

@if (Route::is(['provider-subscribtion']))
<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="#">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->

@endif
@if (Route::is(['provider-transaction']))

        <!--Transaction Detail -->
        <div class="modal fade  rounded" id="transaction-detail" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center justify-content-between  border-0">
                        <h5>Transaction Details</h5>
                        <span class="badge badge-primary-transparent">TXID24081032</span>
                        <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                                class="ti ti-circle-x-filled fs-20"></i></a>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <span class="fs-12">Client Name</span>
                                    <h6 class="fs-14">Lori Broaddus</h6>
                                </div>
                                <div class="mb-3">
                                    <span class="fs-12">Transaction Date</span>
                                    <h6 class="fs-14">07 Oct 2025 11:22:51</h6>
                                </div>
                                <div>
                                    <span class="fs-12">Amount</span>
                                    <h6 class="fs-14">$300</h6>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <span class="fs-12">Service</span>
                                    <h6 class="fs-14">Computer Repair</h6>
                                </div>
                                <div class="mb-3">
                                    <span class="fs-12">Payment Method</span>
                                    <h6 class="fs-14">Paypal</h6>
                                </div>
                                <div>
                                    <span class="fs-12">Status</span>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-success-100 d-flex align-items-center"><i
                                                class="ti ti-point-filled"></i>Completed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Transaction detail -->

        <!-- Delete Account -->
        <div class="modal fade custom-modal" id="del-account">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                        <h5 class="modal-title">Delete Account</h5>
                        <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i
                                class="ti ti-circle-x-filled fs-20"></i></a>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type
                                your password.</p>
                            <div class="mb-0">
                                <label class="form-label">Password</label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input" placeholder="*************">
                                    <span class="toggle-password feather-eye-off"></span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-dark">Delete Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Delete Account -->

@endif

@if (Route::is(['security-settings']))
	<!-- Change Password -->
    <div class="modal fade custom-modal" id="change-password">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content doctor-profile">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Change Password</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="{{url('success')}}">
                        <div class="mb-3">
                            <label class="form-label">Current Password</label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-input" placeholder="*************">
                                <span class="toggle-password feather-eye-off"></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">New Password</label>
                            <div class="pass-group" id="passwordInput">
                                <input type="password" class="form-control pass-input" placeholder="*************">
                                <span class="toggle-password feather-eye-off"></span>
                            </div>
                            <div class="password-strength" id="passwordStrength">
                                <span id="poor"></span>
                                <span id="weak"></span>
                                <span id="strong"></span>
                                <span id="heavy"></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-e">Change Email</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <div class="modal-body p-4">
                    <form action="{{url('provider-security-settings')}}">
                        <div class="wallet-add">
                            <div class="mb-3">
                                <label class="form-label">Current Email Address</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm New Password</label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input" placeholder="*************">
                                    <span class="toggle-password feather-eye-off"></span>
                                </div>
                            </div>
                        </label">Confirm New Password</label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-input" placeholder="*************">
                                <span class="toggle-password feather-eye-off"></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-top">
                    <div class="acc-submit">
                        <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                        <button class="btn btn-dark" type="submit">Update Password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Password -->

    <!-- Change Email -->
     <div class="modal fade custom-modal" id="change-email">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content doctor-profile">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-titldiv>
                    </form>
                </div>
                <div class="modal-footer border-top">
                    <div class="acc-submit">
                        <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                        <button class="btn btn-dark" type="submit">Change Email</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Email -->

    <!-- Change Phone -->
	<div class="modal fade custom-modal" id="change-phone">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content doctor-profile">
				<div class="modal-header d-flex align-items-center justify-content-between border-bottom">
					<h5 class="modal-title">Change Phone Number</h5>
					<a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
				</div>
				<div class="modal-body p-4">
					<form action="{{url('provider-security-settings')}}">
						<div class="wallet-add">
							<div class="mb-3">
								<label class="form-label">Current Phone Number</label>
								<input class="form-control form-control-lg group_formcontrol" id="phone" name="phone" type="text" placeholder="Enter Phone Number">
							</div>
							<div class="mb-3">
								<label class="form-label">New Phone Number <span class="text-danger">*</span></label>
								<input class="form-control form-control-lg group_formcontrol" id="phone1" name="phone" type="text" placeholder="Enter Phone Number">
							</div>
							<div class="mb-3">
								<label class="form-label">Confirm New Password</label>
								<div class="pass-group">
									<input type="password" class="form-control pass-input" placeholder="*************">
									<span class="toggle-password feather-eye-off"></span>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer border-top">
					<div class="acc-submit">
						<a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
						<button class="btn btn-dark" type="submit">Change Number</button>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- /Change Phone -->

	<!-- Delete Account -->
	<div class="modal fade custom-modal" id="del-account">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Delete Account</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
				<form action="{{url('security-settings')}}">
					<div class="modal-body">
						<p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
						<div class="mb-0">
							<label class="form-label">Password</label>
							<div class="pass-group">
								<input type="password" class="form-control pass-input" placeholder="*************">
								<span class="toggle-password feather-eye-off"></span>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" class="btn btn-dark">Delete Account</button>
					</div>	
				</form>
            </div>
        </div>
    </div>
	<!-- /Cancel Appointment -->

@endif
@if (Route::is(['staff-details']))
  <!-- Edit Availability -->
  <div class="modal fade custom-modal" id="edit-availability">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content doctor-profile">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Update Availability</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="modal-wizard">
                        <ul class="d-flex align-items-center mb-3" id="progress-list">
                            <li class="d-flex align-items-center active me-3">
                                <span><i class="feather-calendar me-2"></i></span>
                                <p class="fs-14 fw-medium">Add Days</p>
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <span><i class="ti ti-calendar-filled me-2"></i></span>
                                <p class="fs-14 fw-medium">Breaks</p>
                            </li>
                            <li class="d-flex align-items-center">
                                <span><i class="ti ti-clock-off me-2"></i></span>
                                <p class="fs-14 fw-medium">Unavailable Days</p>
                            </li>
                        </ul>
                    </div>
                    <div class="available-slot-details">
                        <fieldset id="first-availability">
                            <div class="accordion" id="availability_accordion">
                                <div>
                                    <div class="card shadow-none rounded">
                                        <div class="card-body">
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="accordion-headingOne">
                                                    <div class="accordion-button p-0 border-bottom pb-3" data-bs-toggle="collapse" data-bs-target="#accordion-collapseOne" aria-expanded="true" aria-controls="accordion-collapseOne">
                                                        <h6 class="fs-16 fw-medium ms-4">Monday</h6>
                                                        <div class="form-check form-switch ms-auto">
                                                            <input class="form-check-input" type="checkbox">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="accordion-collapseOne" class="accordion-collapse collapse show" aria-labelledby="accordion-headingOne" data-bs-parent="#availability_accordion">
                                                    <div class="accordion-body border-0 p-0 mt-3">
                                                        <div class="row gx-3">
                                                            <div class="col-md-6 col-lg">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Start Time <span class="text-danger">*</span></label>
                                                                    <div class=" input-icon position-relative">
                                                                        <span class="input-icon-addon"><i class="ti ti-clock"></i></span>
                                                                        <input type="text" class="form-control timepicker" placeholder="dd-mm-yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-lg">
                                                                <div class="mb-3">
                                                                    <label class="form-label">End Time <span class="text-danger">*</span></label>
                                                                    <div class=" input-icon position-relative">
                                                                        <span class="input-icon-addon"><i class="ti ti-clock"></i></span>
                                                                        <input type="text" class="form-control timepicker" placeholder="dd-mm-yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-lg">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Duration <span class="text-danger">*</span></label>
                                                                    <select class="select">
                                                                        <option>Select</option>
                                                                        <option>1 Hr</option>
                                                                        <option>2 Hr</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-lg">
                                                                <div class="mb-3">
                                                                    <label class="form-label">No of Slots <span class="text-danger">*</span></label>
                                                                    <select class="select">
                                                                        <option>Select</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-lg">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Interval  Duration <span class="text-danger">*</span></label>
                                                                    <select class="select">
                                                                        <option>Select</option>
                                                                        <option>15 Mins</option>
                                                                        <option>30 Mins</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>	
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <a href="javascript:void(0);" class="text-primary d-inline-flex align-items-center add-extra fs-14 mb-3"><i class="ti ti-circle-plus me-2"></i>Add New</a>
                                                            <button type="button" class="btn btn-dark"><i class="ti ti-rotate-clockwise-2 me-2"></i>Generate Time Slots</button>
                                                        </div>	
                                                        <div class="slots-available mt-3">
                                                            <div class="d-flex align-items-center justify-content-between pb-3 mb-3 border-bottom">
                                                                <h6 class="fs-16 fw-medium">Slot 1</h6>
                                                                <a href="javascript:void(0);" class="text-danger fs-12 fw-medium rounded p-1 bg-white d-block">Remove this Slot</a>
                                                            </div>
                                                            <div>
                                                                <div class="row g-2">
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">8:30 - 9:30 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">9:30 - 10:00 <span class="d-block fs-10">4 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">10:00 - 10:30<span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">10:00 - 10:30<span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">10:30 - 11:00 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">11:30 - 12:00 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">8:30 - 9:30 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">9:30 - 10:00 <span class="d-block fs-10">4 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">10:00 - 10:30<span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">10:00 - 10:30<span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">10:30 - 11:00 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">11:30 - 12:00 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">8:30 - 9:30 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">9:30 - 10:00 <span class="d-block fs-10">4 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">10:00 - 10:30<span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">10:00 - 10:30<span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">10:30 - 11:00 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">11:30 - 12:00 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>											
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow-none rounded">
                                        <div class="card-body">
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="accordion-headingTwo">
                                                    <div class="accordion-button p-0 border-bottom pb-3" data-bs-toggle="collapse" data-bs-target="#accordion-collapseTwo" aria-expanded="false" aria-controls="accordion-collapseTwo" >
                                                        <h6 class="fs-16 fw-medium ms-4">Tuesday</h6>
                                                        <div class="form-check form-switch ms-auto">
                                                            <input class="form-check-input" type="checkbox">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="accordion-collapseTwo" class="accordion-collapse collapse" aria-labelledby="accordion-headingTwo" data-bs-parent="#availability_accordion">
                                                    <div class="accordion-body border-0 p-0 mt-3">
                                                        <div class="row gx-3">
                                                            <div class="col-md-6 col-lg">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Start Time <span class="text-danger">*</span></label>
                                                                    <div class=" input-icon position-relative">
                                                                        <span class="input-icon-addon"><i class="ti ti-clock"></i></span>
                                                                        <input type="text" class="form-control timepicker" placeholder="dd-mm-yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-lg">
                                                                <div class="mb-3">
                                                                    <label class="form-label">End Time <span class="text-danger">*</span></label>
                                                                    <div class=" input-icon position-relative">
                                                                        <span class="input-icon-addon"><i class="ti ti-clock"></i></span>
                                                                        <input type="text" class="form-control timepicker" placeholder="dd-mm-yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-lg">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Duration <span class="text-danger">*</span></label>
                                                                    <select class="select">
                                                                        <option>Select</option>
                                                                        <option>1 Hr</option>
                                                                        <option>2 Hr</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-lg">
                                                                <div class="mb-3">
                                                                    <label class="form-label">No of Slots <span class="text-danger">*</span></label>
                                                                    <select class="select">
                                                                        <option>Select</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-lg">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Interval  Duration <span class="text-danger">*</span></label>
                                                                    <select class="select">
                                                                        <option>Select</option>
                                                                        <option>15 Mins</option>
                                                                        <option>30 Mins</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>	
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <a href="javascript:void(0);" class="text-primary d-inline-flex align-items-center add-extra fs-14 mb-3"><i class="ti ti-circle-plus me-2"></i>Add New</a>
                                                            <button type="button" class="btn btn-dark"><i class="ti ti-rotate-clockwise-2 me-2"></i>Generate Time Slots</button>
                                                        </div>	
                                                        <div class="slots-available mt-3">
                                                            <div class="d-flex align-items-center justify-content-between pb-3 mb-3 border-bottom">
                                                                <h6 class="fs-16 fw-medium">Slot 1</h6>
                                                                <a href="javascript:void(0);" class="text-danger fs-12 fw-medium rounded p-1 bg-white d-block">Remove this Slot</a>
                                                            </div>
                                                            <div>
                                                                <div class="row g-2">
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment2">
                                                                                <span class="visit-rsn fs-12 bg-white">8:30 - 9:30 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment2">
                                                                                <span class="visit-rsn fs-12 bg-white">9:30 - 10:00 <span class="d-block fs-10">4 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment2">
                                                                                <span class="visit-rsn fs-12 bg-white">10:00 - 10:30<span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment2">
                                                                                <span class="visit-rsn fs-12 bg-white">10:00 - 10:30<span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment2">
                                                                                <span class="visit-rsn fs-12 bg-white">10:30 - 11:00 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment2">
                                                                                <span class="visit-rsn fs-12 bg-white">11:30 - 12:00 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment2">
                                                                                <span class="visit-rsn fs-12 bg-white">8:30 - 9:30 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment2">
                                                                                <span class="visit-rsn fs-12 bg-white">9:30 - 10:00 <span class="d-block fs-10">4 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment2">
                                                                                <span class="visit-rsn fs-12 bg-white">10:00 - 10:30<span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment2">
                                                                                <span class="visit-rsn fs-12 bg-white">10:00 - 10:30<span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment2">
                                                                                <span class="visit-rsn fs-12 bg-white">10:30 - 11:00 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment2">
                                                                                <span class="visit-rsn fs-12 bg-white">11:30 - 12:00 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment2">
                                                                                <span class="visit-rsn fs-12 bg-white">8:30 - 9:30 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment2">
                                                                                <span class="visit-rsn fs-12 bg-white">9:30 - 10:00 <span class="d-block fs-10">4 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment2">
                                                                                <span class="visit-rsn fs-12 bg-white">10:00 - 10:30<span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">10:00 - 10:30<span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">10:30 - 11:00 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                                                        <div class="form-check-inline visits w-100 p-0 me-0">
                                                                            <label class="visit-btns">
                                                                                <input type="radio" class="form-check-input" name="appointment">
                                                                                <span class="visit-rsn fs-12 bg-white">11:30 - 12:00 <span class="d-block fs-10">2 Slots</span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>											
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center mt-3 pt-3 border-top">
                                <button class="btn btn-dark next_btn" type="button">Save  & Continue</button>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="accordion" id="availability_accordion2">
                                <form action="{{url('staff-details')}}">
                                    <div class="card shadow-none rounded">
                                        <div class="card-body pb-0">
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="accordion2-headingOne">
                                                    <div class="accordion-button p-0 border-bottom pb-3" data-bs-toggle="collapse" data-bs-target="#accordion2-collapseOne" aria-expanded="true" aria-controls="accordion2-collapseOne" >
                                                        <h6 class="fs-16 fw-medium ms-4">All Days</h6>
                                                        <div class="form-check form-switch ms-auto">
                                                            <input class="form-check-input" type="checkbox">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="accordion2-collapseOne" class="accordion-collapse collapse show" aria-labelledby="accordion2-headingOne" data-bs-parent="#availability_accordion2">
                                                    <div class="accordion-body border-0 p-0 mt-3">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Morning Break</label>
                                                                    <div class="sel-cal Calendar-icon">
                                                                        <span><i class="ti ti-clock"></i></span>
                                                                        <input class="form-control timepicker" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Lunch</label>
                                                                    <div class="sel-cal Calendar-icon">
                                                                        <span><i class="ti ti-clock"></i></span>
                                                                        <input class="form-control timepicker" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Evening Break</label>
                                                                    <div class="sel-cal Calendar-icon">
                                                                        <span><i class="ti ti-clock"></i></span>
                                                                        <input class="form-control timepicker" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>												
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow-none rounded">
                                        <div class="card-body pb-0">
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="accordion2-headingTwo">
                                                    <div class="accordion-button p-0 border-bottom pb-3" data-bs-toggle="collapse" data-bs-target="#accordion2-collapseTwo" aria-expanded="false" aria-controls="accordion2-collapseTwo" >
                                                        <h6 class="fs-16 fw-medium ms-4">Monday</h6>
                                                        <div class="form-check form-switch ms-auto">
                                                            <input class="form-check-input" type="checkbox">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="accordion2-collapseTwo" class="accordion-collapse collapse" aria-labelledby="accordion2-headingTwo" data-bs-parent="#availability_accordion2">
                                                    <div class="accordion-body border-0 p-0 mt-3">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Morning Break</label>
                                                                    <div class="sel-cal Calendar-icon">
                                                                        <span><i class="ti ti-clock"></i></span>
                                                                        <input class="form-control timepicker" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Lunch</label>
                                                                    <div class="sel-cal Calendar-icon">
                                                                        <span><i class="ti ti-clock"></i></span>
                                                                        <input class="form-control timepicker" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Evening Break</label>
                                                                    <div class="sel-cal Calendar-icon">
                                                                        <span><i class="ti ti-clock"></i></span>
                                                                        <input class="form-control timepicker" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>										
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="d-flex justify-content-end align-items-center mt-3 pt-3 border-top">
                                <a href="javascript:void(0);" class="btn btn-light prev_btn me-2">Back</a>
                                <button class="btn btn-dark next_btn" type="button">Save  & Continue</button>
                            </div>
                        </fieldset>
                        <fieldset>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Stat Date & End Date <span class="text-danger"> *</span></label>
                                            <div class="sel-cal Calendar-icon">
                                                <span><i class="ti ti-calendar"></i></span>
                                                <input class="form-control datetimepicker" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-0">
                                            <h6 class="fw-medium fs-16 mb-2">Unavailable days</h6>
                                            <div class="d-flex align-items-center justify-content-between border rounded p-2 bg-light-300">
                                                <div>
                                                    <span class="fs-14 d-block mb-1">Unavailable on</span>
                                                    <p class="fs-14 fw-medium">Sep 15 2025, Wednesday</p>
                                                </div>
                                                
                                                <span class="badge badge-success">Upcoming</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="d-flex justify-content-end align-items-center mt-3 pt-3 border-top">
                                <a href="javascript:void(0);" class="btn btn-light prev_btn me-2">Back</a>
                                <button class="btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#successmodal">Save  & Continue</button>
                            </div>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
 <!-- /Edit Availability -->

 <!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="#">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->

<!-- Modal Succss -->
<div class="modal fade service-models" id="successmodal">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">              
            <div class="modal-body">
                <div class="text-center py-4">
                    <span class="success-check mb-3 mx-auto"><i class="ti ti-check"></i></span>
                    <h4 class="mb-2">Availability Created Successfully</h4>
                    <p>Availability for “Electrical Services” has been Created, and updated on your List</p>
                    <div class="f-flex align-items-center justify-content-center mt-3">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Close</a>
                        <a href="{{url('staff-list')}}" class="btn btn-dark">Go to List</a>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- Modal Succss -->
@endif
@if (Route::is(['staff-grid']))
 <!-- Add Staff-->
 <div class="modal fade custom-modal" id="add-staff">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Add Staff </h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body pb-0">
                <form action="{{url('success')}}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <div class="d-flex profile-upload align-items-center">
                                    <span class="d-flex justify-content-center align-items-center p-4 bg-light rounded me-2"><i class="ti ti-photo"></i></span>
                                    <div>
                                        <h6 class="fs-16 fw-medium">Profile</h6>
                                        <span class="fs-14">Image size does not exceed 5MB</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Country</label>
                                <select class="select">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">State</label>
                                <select class="select">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <select class="select">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Zip Code</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Services</label>
                                <select class="select">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="select">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- /Add Staff -->

 <!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="#">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->

@endif
@if (Route::is(['user-bookings-calendar']))
<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('user-bookings-calendar')}}">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Cancel Appointment -->

<!-- Booking Details -->
<div class="toggle-sidebar">
    <div class="sidebar-layout">
        <div class="sidebar-header pb-3 mb-3">
            <h5>Booking Details</h5>
            <a href="javascript:void(0);" class="sidebar-close"><i class="ti ti-x"></i></a>
        </div>
        <div class="sidebar-body">
            <div class="book-confirm bk-wrap">
                <div class="d-flex justify-content-between">
                    <h6>Services<span class="badge badge-soft-success">Confirmed</span></h6>
                    <a href="javascript:void(0);" class="edit-book"><i class="feather-edit"></i></a>
                </div>
                <ul>
                    <li><span class="bk-date"><i class="feather-calendar"></i> Date & Time  </span> : Oct 28, 2023 - 10AM to 12 AM</li>
                    <li><span class="bk-date"><i class="feather-map-pin"></i> Location  </span> : New York</li>
                    <li><span class="bk-date"><i class="feather-user"></i> User Name  </span> : John Smith</li>
                </ul>
                <div class="d-flex align-items-center mb-3">
                    <a href="javascript:void(0);" class="btn btn-dark btn-sm me-2" data-bs-toggle="modal" data-bs-target="#reschedule"><i class="feather-user me-1"></i> Reschedule</a>
                    <a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#cancel_appointment"><i class="feather-x-circle me-1"></i> Cancel</a>
                </div>
            </div>
            <div class="book-customer bk-wrap pt-3">
                <h5>Provider Details</h5>
                <div class="d-flex align-items-center flex-wrap justify-content-between mb-3">
                    <div class="d-flex align-items-center">
                        <span class="avatar avatar-md me-2"><img src="{{URL::asset('assets/img/profiles/avatar-02.jpg')}}" class="rounded-circle" alt="User"></span>
                        <div>
                        <h6 class="fs-14 fw-medium">John Doe</h6>
                        <p class="mb-0">Montana, USA</p>
                    </div>
                    </div>
                    <div>
                        <a href="{{url('user-chat')}}" class="btn btn-dark btn-sm"><i class="ti ti-message me-1"></i>Chat</a>
                    </div>
                </div>
            </div>
            <div class="bk-wrap py-3">
                <h5>Appointment Message</h5>
                <p class="mb-0">Thanks for your interest in our services</p>
            </div>
            <div class="bk-wrap bk-service py-3">
                <div>
                    <h5>House Cleaning Services</h5>
                    <p class="mb-0">quick and quality service</p>
                </div>
                <p class="bk-price">$100.00</p>
            </div>
            <div class="bk-wrap bk-history pt-3">
                <h4>Booking History</h4>
                <ul>
                    <li>
                        <span>
                            <i class="feather-calendar"></i>
                        </span>
                        <div class="book-crete">
                            <h6>Booking created</h6>
                            <p>Oct 28 2023 1:28 PM</p>
                        </div>
                    </li>
                    <li>
                        <span>
                            <i class="feather-user"></i>
                        </span>
                        <div class="book-crete">
                            <h6>Assigned to John Smith</h6>
                            <p>Oct 28 2023 1:28 PM</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /Booking Details -->	
 
<!-- Reschedule Appointment -->
<div class="modal fade custom-modal" id="reschedule">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Reschedule Appointment</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <form action="{{url('user-bookings')}}">
                    <div class="mb-3">
                        <label class="form-label">Appointment Date</label>
                        <div class="form-icon">
                            <input type="text" class="form-control datetimepicker" placeholder="DD/MM/YYYY">
                            <span class="cus-icon"><i class="feather-calendar"></i></span>
                        </div>
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Appointment Time</label>
                        <div class="form-icon">
                            <input type="text" class="form-control timepicker" placeholder="DD/MM/YYYY">
                            <span class="cus-icon"><i class="feather-clock"></i></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="acc-submit">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Reschedule Appointment -->

<!-- Cancel Appointment -->
<div class="modal fade custom-modal" id="cancel_appointment">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Cancel Appointment</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('user-bookings')}}">
                <div class="modal-body">
                    <p>Are you sure you want to cancel <span class="text-dark"> John Doe</span> appointment on 
                        <span class="text-dark"> Oct 28, 2022</span> at time <span class="text-dark"> 10AM - 12PM</span></p>
                </div>
                <div class="modal-footer">
                    <div class="acc-submit">
                        <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Dismiss</a>
                        <button class="btn btn-dark" type="submit">Yes, Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Cancel Appointment -->

@endif

@if (Route::is(['provider-booking-calendar']))
 <!-- Delete Account -->
 <div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="#">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Delete Account -->

<!-- Add Booking -->
<div class="modal fade custom-modal" id="add_booking">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Add Booking</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('provider-booking')}}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Staff</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Jeff Fitch</option>
                                    <option>Donald Gordon</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Service</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Computer Services</option>
                                    <option>Car Repair Services</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Customer</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Jeff Fitch</option>
                                    <option>Donald Gordon</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <div class="sel-cal Calendar-icon">
                                    <span><i class="ti ti-calendar-month"></i></span>
                                    <input class="form-control datetimepicker" type="text" placeholder="dd-mm-yyyy">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <div class="sel-cal Calendar-icon">
                                            <span><i class="ti ti-clock"></i></span>
                                            <input class="form-control timepicker" type="text" placeholder="dd-mm-yyyy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <div class="sel-cal Calendar-icon">
                                            <span><i class="ti ti-clock"></i></span>
                                            <input class="form-control timepicker" type="text" placeholder="dd-mm-yyyy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-0">
                                <label class="form-label">Booking Message</label>
                                <textarea rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Add Booking -->

 <!-- Reschedule Appointment -->
<div class="modal fade custom-modal" id="reschedule">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Reschedule Appointment</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body">
                <form action="{{url('user-bookings')}}">
                    <div class="mb-3">
                        <label class="form-label">Appointment Date</label>
                        <div class="form-icon">
                            <input type="text" class="form-control datetimepicker" placeholder="DD/MM/YYYY">
                            <span class="cus-icon"><i class="feather-calendar"></i></span>
                        </div>
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Appointment Time</label>
                        <div class="form-icon">
                            <input type="text" class="form-control timepicker" placeholder="DD/MM/YYYY">
                            <span class="cus-icon"><i class="feather-clock"></i></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="acc-submit">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Reschedule Appointment -->

<!-- Cancel Appointment -->
<div class="modal fade custom-modal" id="cancel_appointment">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Cancel Appointment</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('user-bookings')}}">
                <div class="modal-body">
                    <p>Are you sure you want to cancel <span class="text-dark"> John Doe</span> appointment on 
                        <span class="text-dark"> Oct 28, 2022</span> at time <span class="text-dark"> 10AM - 12PM</span></p>
                </div>
                <div class="modal-footer">
                    <div class="acc-submit">
                        <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Dismiss</a>
                        <button class="btn btn-dark" type="submit">Yes, Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Cancel Appointment -->

<!-- Booking Details -->
<div class="toggle-sidebar">
    <div class="sidebar-layout">
        <div class="sidebar-header pb-3 mb-3">
            <h5>Booking Details</h5>
            <a href="javascript:void(0);" class="sidebar-close"><i class="ti ti-x"></i></a>
        </div>
        <div class="sidebar-body">
            <div class="book-confirm bk-wrap">
                <div class="d-flex justify-content-between">
                    <h6>Services<span class="badge badge-soft-success">Confirmed</span></h6>
                    <a href="javascript:void(0);" class="edit-book"><i class="feather-edit"></i></a>
                </div>
                <ul>
                    <li><span class="bk-date"><i class="feather-calendar"></i> Date & Time  </span> : Oct 28, 2023 - 10AM to 12 AM</li>
                    <li><span class="bk-date"><i class="feather-map-pin"></i> Location  </span> : New York</li>
                    <li><span class="bk-date"><i class="feather-user"></i> User Name  </span> : John Smith</li>
                </ul>
                <div class="d-flex align-items-center mb-3">
                    <a href="javascript:void(0);" class="btn btn-dark btn-sm me-2" data-bs-toggle="modal" data-bs-target="#reschedule"><i class="feather-user me-1"></i> Reschedule</a>
                    <a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#cancel_appointment"><i class="feather-x-circle me-1"></i> Cancel</a>
                </div>
            </div>
            <div class="book-customer bk-wrap pt-3">
                <h5>Provider Details</h5>
                <div class="d-flex align-items-center flex-wrap justify-content-between mb-3">
                    <div class="d-flex align-items-center">
                        <span class="avatar avatar-md me-2"><img src="{{URL::asset('assets/img/profiles/avatar-02.jpg')}}" class="rounded-circle" alt="User"></span>
                        <div>
                        <h6 class="fs-14 fw-medium">John Doe</h6>
                        <p class="mb-0">Montana, USA</p>
                    </div>
                    </div>
                    <div>
                        <a href="{{url('user-chat')}}" class="btn btn-dark btn-sm"><i class="ti ti-message me-1"></i>Chat</a>
                    </div>
                </div>
            </div>
            <div class="bk-wrap py-3">
                <h5>Appointment Message</h5>
                <p class="mb-0">Thanks for your interest in our services</p>
            </div>
            <div class="bk-wrap bk-service py-3">
                <div>
                    <h5>House Cleaning Services</h5>
                    <p class="mb-0">quick and quality service</p>
                </div>
                <p class="bk-price">$100.00</p>
            </div>
            <div class="bk-wrap bk-history pt-3">
                <h4>Booking History</h4>
                <ul>
                    <li>
                        <span>
                            <i class="feather-calendar"></i>
                        </span>
                        <div class="book-crete">
                            <h6>Booking created</h6>
                            <p>Oct 28 2023 1:28 PM</p>
                        </div>
                    </li>
                    <li>
                        <span>
                            <i class="feather-user"></i>
                        </span>
                        <div class="book-crete">
                            <h6>Assigned to John Smith</h6>
                            <p>Oct 28 2023 1:28 PM</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /Booking Details -->	
@endif
@if (Route::is(['customer-grid']))
 <!-- Add Customer -->
 <div class="modal fade custom-modal" id="add-user">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Add Customer </h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <div class="modal-body p-4">
                <form action="{{url('success')}}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">First Name</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">Last Name</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="col-form-label">Email</label>
                                <input type="email" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="col-form-label">Phone Number</label>
                                <input type="number" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="col-form-label">Address</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">Country</label>
                                <select class="select">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">State</label>
                                <select class="select">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">City</label>
                                <select class="select">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">Zip Code</label>
                                <input type="text" class="form-control pass-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="col-form-label">Status</label>
                                <select class="select">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-dark" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /Add Customer -->

    <!-- Delete Account -->
    <div class="modal fade custom-modal" id="del-account">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                    <h5 class="modal-title">Delete Account</h5>
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                        <div class="mb-0">
                            <label class="form-label">Password</label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-input" placeholder="*************">
                                <span class="toggle-password feather-eye-off"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-dark">Delete Account</button>
                    </div>	
                </form>
            </div>
        </div>
    </div>
    <!-- /Delete Account -->

@endif

@if (Route::is(['service-request']))
<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            <form action="{{url('user-dashboard')}}">
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Cancel Appointment -->

@endif

@if (Route::is(['connected-apps','user-dashboard','security-settings']))
<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom">
                <h5 class="modal-title">Delete Account</h5>
                <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
            </div>
            @if (Route::is(['connected-apps']))
            <form action="{{url('connected-apps')}}">
                @endif
                @if (Route::is(['user-dashboard']))
              
                <form action="{{url('user-dashboard')}}">
                @endif
                @if (Route::is(['security-settings']))
                <form action="{{url('security-settings')}}">
                @endif
                <div class="modal-body">
                    <p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
                    <div class="mb-0">
                        <label class="form-label">Password</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" placeholder="*************">
                            <span class="toggle-password feather-eye-off"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-dark">Delete Account</button>
                </div>	
            </form>
        </div>
    </div>
</div>
<!-- /Cancel Appointment -->
@endif