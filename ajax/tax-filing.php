<div class="row">
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
                            <option value="2023">2020</option>
                            <option value="2022">2019</option>
                            <option value="2021">2018</option>
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

<script>
    $(document).ready(function() {
        $('.go-back').on('click', function(e) {
            e.preventDefault();
            $('[data-container="2"]').removeClass('d-none');
            $(this).parents('.row').remove();
        });
    });
</script>