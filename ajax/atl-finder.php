<div class="row text-center justify-content-center">
    <div class="col-12 mb-3">
        <h2 class="text-center">ATL Finder</h2>
    </div>
    <div class="col-lg-3 col-md-12 mb-3">
        <div class="form-group">
            <label for="ntn-find">Tell us your 13 digits CNIC number</label>
            <input type="text" class="form-control" name="ntn-find" id="ntn-find">
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <button class="btn btn-danger">Search</button>
    </div>
</div>

<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Details against NTN</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Title</th>
                            <th>Title</th>
                            <th>Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 4.0
                            </td>
                            <td>Win 95+</td>
                            <td> 4</td>
                        </tr> -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Title</th>
                            <th>Title</th>
                            <th>Title</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-12 my-5">
        <a href="#!" class="font-weight-bold go-back btn btn-primary">Back</a>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.go-back').on('click', function(e) {
            e.preventDefault();
            $('[data-container="2"]').removeClass('d-none');
            $(this).parents('.row').prev().remove();
            $(this).parents('.row').remove();
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>