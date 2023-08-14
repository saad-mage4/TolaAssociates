<div class="row">
    <div class="col-12 mb-5">
        <h3 class="top-heading"><img class="small-img" src="./img/citizen_tax_filing.png" alt="tax_filing">Business Incorporation</h3>
        <h2 class="text-center mt-3"><strong>Purpose of Business Incorporation</strong></h2>
        <p class="text-center">Select the best option suited to your requirement</p>
    </div>
    <div class="col-12">
        <div class="col-lg-7 mx-auto">
            <div class="grid-boxes">

                <a href="#!">
                    <div class="box">
                        <div class="logo">
                            <img src="img/sole_proprietor.png" alt="logo_img">
                        </div>
                        <h4>Sole Proprietor</h4>
                    </div>

                    <a href="#!">
                        <div class="box">
                            <div class="logo">
                                <img src="img/aop_partnership.png" alt="logo_img">
                            </div>
                            <h4>AOP / Partnership</h4>
                        </div>
                    </a>

                    <a href="#!">
                        <div class="box">
                            <div class="logo">
                                <img src="img/add_business_ntn.png" alt="logo_img">
                            </div>
                            <h4>Add Business to NTN</h4>
                        </div>
                    </a>

                    <a href="#!">
                        <div class="box">
                            <div class="logo">
                                <img src="img/remove_business_ntn.png" alt="logo_img">
                            </div>
                            <h4>Remove Business from NTN</h4>
                        </div>
                    </a>

            </div>
        </div>
    </div>

    <div class="col-12 my-5">
        <a href="#!" class="font-weight-bold go-back btn btn-primary">Back</a>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.go-back').on('click', function(e) {
            e.preventDefault();
            $('[data-container="2"]').removeClass('d-none');
            $(this).parents('.row').remove();
        });
    });
</script>