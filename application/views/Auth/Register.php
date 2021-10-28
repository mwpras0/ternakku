<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-7 mx-auto">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Register </h4>
                                <form class="forms-sample" method="POST" action="<?= base_url('Auth/register')?>">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            placeholder=" Name" value="<?= set_value('nama'); ?>">
                                        <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" id="password2" name="password1"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Ulangi Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" id="password2" name="password2"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>