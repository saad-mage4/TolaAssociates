<div class="row">
    <div class="col-12 mb-2">
        <h3 class="top-heading"><img class="small-img" src="./img/ntn_registration.png" alt="tax_filing">NTN Registration</h3>
        <div class="text-center mt-4">
            <img src="./img/ntn-file.png" alt="ntn-file" class="image-xs mx-auto">
            <h2>
                <strong>NTN Registration</strong>
            </h2>
            <p>We have made the simplest process for NTN registration</p>
        </div>
    </div>
    <div class="col-12 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 text-center">
                <form id="ntn-file-form" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" name="file" id="file" class="invisible" multiple>
                        <label for="file">Please upload your CNIC (front & back) and the image must be clear.</label>
                        <button class="file-upload btn btn-secondary w-100 d-flex align-items-center justify-content-around px-3 font-weight-bold rounded">
                            <img src="./img/upload.png" alt="upload">
                            <span>Click Here To Upload</span>
                        </button>
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
        $('.file-upload').on('click', function(e) {
            e.preventDefault();
            $('#file').trigger('click');
        });
    });
</script>