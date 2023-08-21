<div class="row" data-container="tax-filing">
    <div class="col-12 mb-5">
        <h3 class="top-heading"><img class="small-img" src="./img/citizen_tax_filing.png" alt="tax_filing">tax return filing</h3>
        <h2 class="text-center">Select the <strong>Tax Year</strong> you want to file</h2>
    </div>
    <div class="col-12 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 text-center">
                <form id="tax_year">
                    <div class="form-group">
                        <select name="tax-year" id="tax-year" class="w-100">
                            <option value="" selected hidden>Click Here</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 my-5">
        <a href="#!" class="font-weight-bold go-back btn btn-primary">Back</a>
    </div>
</div>
<form id="tex-filing-form" data-form="tax-filing-step-1" class="first-step d-none">
    <div class="sec-1">
        <div class="row">
            <div class="col-12">
                <img src="./img/card.png" class="image-xs mx-auto d-block" alt="card">
                <h3 class="text-center mb-2">{Username}, this is your last filled <strong>Personal Information</strong></h3>
                <p class="text-center text-muted">you can update your information for this year</p>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input class="form-control" type="text" name="fullName" id="fullName">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input class="form-control" type="date" name="dob" id="dob">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="cnicNo">CNIC No.</label>
                    <input class="form-control" type="text" name="cnicNo" id="cnicNo">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="occupation">Occupation</label>
                    <input class="form-control" type="text" name="occupation" id="occupation">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="phone">Mobile No.</label>
                    <input class="form-control" type="text" name="phone" id="phone">
                </div>
            </div>
            <div class="col-lg-6 ml-lg-0 mb-3 ml-2">
                <div class="nationality d-flex justify-content-between align-content-center">
                    <span>Nationality</span>
                    <div class="group">
                        <label for="pakistani">Pakistani</label>
                        <input type="radio" name="nationality" value="pakistani" checked id="pakistani">
                    </div>
                    <div class="group">
                        <label for="foreigner">Foreigner</label>
                        <input type="radio" name="nationality" value="foreigner" id="foreigner">
                    </div>
                </div>
            </div>
            <div class="col-lg-6"></div>
            <div class="col-lg-6 ml-lg-0 mb-3 ml-2">
                <div class="residential d-flex justify-content-between align-content-center">
                    <span>Residential status</span>
                    <div class="group">
                        <label for="resident">Resident</label>
                        <input type="radio" checked name="residential" id="resident">
                    </div>
                    <div class="group">
                        <label for="non-resident">Non-Resident</label>
                        <input type="radio" name="residential" id="non-resident">
                    </div>
                </div>
            </div>
        </div>
        <div class="row extra-options d-none">
            <div class="col-lg-12 ml-lg-0 mb-3 ml-2">
                <div class="stay-in-pak">
                    <span>Is your stay in Pakistan solely because of your employment?</span>
                    <div class="group">
                        <label for="yes-1">Yes</label>
                        <input type="radio" checked name="residential" id="yes-1">
                    </div>
                    <div class="group">
                        <label for="no-1">No</label>
                        <input type="radio" name="residential" id="no-1">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 ml-lg-0 mb-3 ml-2">
                <div class="stay-in-pak">
                    <span>Was your stay in Pakistan as of June 30, 2023 more than 3 years?</span>
                    <div class="group">
                        <label for="yes-2">Yes</label>
                        <input type="radio" checked name="stay" id="yes-2">
                    </div>
                    <div class="group">
                        <label for="no-2">No</label>
                        <input type="radio" name="stay" id="no-2">
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5 step-2-container">
            <div class="col-lg-12 text-right mb-5">
                <button class="btn btn-danger btn-step-2">Continue</button>
            </div>
        </div>
    </div>
    <div class="sec-2 d-none">
        <div class="row income-section">
            <div class="col-12">
                <ul class="list-images d-flex justify-content-center align-items-center list-unstyled">
                </ul>
            </div>
            <div class="col-12 text-center mb-3">
                <input type="hidden" name="incomes" value="">

                <h3>Now let's start <strong>Looking at your Income</strong></h3>
                <p class="text-muted">Select the sources of your income, you can select more than one if applicable</p>
            </div>
            <div class="col-lg-8 mx-auto">
                <div class="grid-boxes no-gap">

                    <a href="#!" data-img="img/salary.png" data-val="salary" data-toggle="tooltip" data-placement="top" title="Any income received from employment">
                        <div class="box">
                            <div class="logo p-3">
                                <img class="image-xs" src="img/salary.png" alt="logo_img">
                            </div>
                            <h4>Salary</h4>
                        </div>

                        <a href="#!" data-img="img/business.png" data-val="business">
                            <div class="box">
                                <div class="logo p-3">
                                    <img class="image-xs" src="img/business.png" alt="logo_img">
                                </div>
                                <h4>Business / Self Employed</h4>
                            </div>
                        </a>

                        <a href="#!" data-img="img/freelancer.png" data-val="freelancer">
                            <div class="box">
                                <div class="logo p-3">
                                    <img class="image-xs" src="img/freelancer.png" alt="logo_img">
                                </div>
                                <h4>Freelancer</h4>
                            </div>
                        </a>

                        <a href="#!" data-img="img/professional.png" data-val="professional">
                            <div class="box">
                                <div class="logo p-3">
                                    <img class="image-xs" src="img/professional.png" alt="logo_img">
                                </div>
                                <h4>Professional</h4>
                            </div>
                        </a>

                        <a href="#!" data-img="img/pensioner.png" data-val="pensioner">
                            <div class="box">
                                <div class="logo p-3">
                                    <img class="image-xs" src="img/pensioner.png" alt="logo_img">
                                </div>
                                <h4>Pensioner</h4>
                            </div>
                        </a>

                        <a href="#!" data-img="img/agriculture.png" data-val="agriculture">
                            <div class="box">
                                <div class="logo p-3">
                                    <img class="image-xs" src="img/agriculture.png" alt="logo_img">
                                </div>
                                <h4>Agriculture</h4>
                            </div>
                        </a>

                        <a href="#!" data-img="img/commission.png" data-val="commission">
                            <div class="box">
                                <div class="logo p-3">
                                    <img class="image-xs" src="img/commission.png" alt="logo_img">
                                </div>
                                <h4>Commission/Services</h4>
                            </div>
                        </a>

                        <a href="#!" data-img="img/aop.png" data-val="aop">
                            <div class="box">
                                <div class="logo p-3">
                                    <img class="image-xs" src="img/aop.png" alt="logo_img">
                                </div>
                                <h4>Partnership/AOP</h4>
                            </div>
                        </a>

                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <button class="btn font-weight-bold btn-primary btn-stepBack-1">back</button>
            </div>
            <div class="col-lg-6 text-right mb-5">
                <button class="btn font-weight-bold btn-danger disabled btn-step-3" style="pointer-events: none;" data-value="">Continue</button>
            </div>
        </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        $('.go-back').on('click', function(e) {
            e.preventDefault();
            $('[data-container="2"]').removeClass('d-none');
            $(this).parents('.row').remove();
        });

        $('select').on('change', function(e) {
            e.preventDefault();
            let val = $(this).find('option:selected').val();
            $('[data-container="tax-filing"]').hide();
            $('[data-form="tax-filing-step-1"]').removeClass('d-none');
            $('.year-selected').html('YEAR: ' + val);
            $('.tax-filing-sec, .step-2-container').removeClass('d-none');
        });

        // input focus work start
        $(".first-step input").on("focus", function(e) {
            e.preventDefault();
            $(".first-step .form-group").removeClass("active");
            $(this).parent().addClass("active");
        });
        $(".first-step input").on("focusout", function(e) {
            e.preventDefault();
            $(".first-step .form-group").removeClass("active");
            $(this).parent().removeClass("active");
        });
        // input focus work end

        $('.nationality').on('change', 'input', function(e) {
            e.preventDefault();
            let nationality = $(this).val();
            if (nationality === 'foreigner') {
                $('.extra-options').removeClass('d-none');
            } else {
                $('.extra-options').addClass('d-none');
            }
        });

        // btn-step-2
        $('.btn-step-2').on('click', function(e) {
            e.preventDefault();
            $('.sec-1').addClass('d-none');
            $('.sec-2').removeClass('d-none');
        });

        $('.btn-stepBack-1').on('click', function(e) {
            e.preventDefault();
            $('.sec-2').addClass('d-none');
            $('.sec-1').removeClass('d-none');
        });

        $('.grid-boxes.no-gap').on('click', 'a', function(e) {
            e.preventDefault();
            let img = $(this).data('img');
            let value = $(this).data('val');
            // console.log(value);
            $(this).addClass('gray-scale');
            let index = $(this).index() + 1;
            $('.sec-2 .btn-step-3').removeClass('disabled').removeAttr('style');
            $('.sec-2 .btn-step-3').data("value", value);
            var incomeVal = $(this).data('val');
            $('input[name="incomes"]').val(function() {
                return this.value + incomeVal + ',';
            });
            if ($(this).hasClass('added')) {
                $(`.list-images li[id="image-${index}"]`).remove();
                $(this).removeClass('added');
                $(this).removeClass('gray-scale');

                if ($('.list-images').children().length == 0) {
                    $('.list-images').removeClass('active');
                    $('.sec-2 .btn-step-3').addClass('disabled').css('pointer-events', 'none');
                }
            } else {
                $('.list-images').addClass('active');
                $(this).addClass('gray-scale');
                $(this).addClass('added');
                $('.list-images').append(`<li data-vall="${value}" id="image-${index}" class="mr-3"><img src="${img}" class="image-xs" alt="img-${index}"/></li>`);
            }
        });

        $('.list-images').on('click', 'li', function(e) {
            e.preventDefault();
            let incomeVal = $(this).data('vall');
            $(`.grid-boxes.no-gap a[data-val="${incomeVal}"]`).removeClass('gray-scale added');
            let newVal = $('input[name="incomes"]').val().replace(`${incomeVal},`, "");
            $('input[name="incomes"]').val(newVal);
            $(this).remove();
            if ($('.list-images').children().length == 0) {
                $('.list-images').removeClass('active');
                $('.sec-2 .btn-step-3').addClass('disabled').css('pointer-events', 'none');
            }
        });

        $('.sec-2').on('click', '.btn-step-3', function(e) {
            e.preventDefault();
            let values = $('input[name="incomes"]').val();
            values = values.replace(/,\s*$/, "");
            console.log(values);
        });

    });
</script>