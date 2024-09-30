<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Bordered table</h4>
                    <p class="card-description">
                        Add class <code>.table-bordered</code>
                    </p>
                    <button class="btn btn-primary d-flex justify-content-end" data-toggle="modal"
                        data-target="#exampleModal">tambah data</button>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered display" id="myTable">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Waktu Pembuatan
                                    </th>
                                    <th>
                                        Nama Pengaju
                                    </th>
                                    <th>
                                        Nomor
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        20-01-2024
                                    </td>
                                    <td>
                                        Herman Beck
                                    </td>
                                    <td>
                                        $ 77.99
                                    </td>
                                    <td>
                                        <label class="badge badge-success">Completed</label>
                                        <label class="badge badge-danger">Pending</label>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-icon-text">
                                            Print
                                            <i class="ti-printer btn-icon-append"></i>
                                        </button>
                                        <button type="button" class="btn btn-dark btn-icon-text">
                                            Edit
                                            <i class="ti-file btn-icon-append"></i>
                                        </button>
                                        <button class="btn btn-danger">
                                            Delete
                                            <i class="ti-trash btn-icon-append"></i>
                                        </button>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Surat title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-sample">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama Anak</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="Nama Anak">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Tempat Lahir</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="Tempat Lahir">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Tanggal Lahir</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Anak Ke</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Anak Ke">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama ibu</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="Nama ibu">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername1">NIK ibu</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="NIK ibu">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama ayah</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="Nama ayah">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername1">NIK ayah</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="NIK ayah">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Pekerjaan ayah</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="Pekerjaan ayah">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Alamat ayah</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="Alamat ayah">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama Pelapor</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="Nama Pelapor">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nik Pelapor</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="Nik Pelapor">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Hubungan Anak Dengan Pelapor</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="Hubungan Anak Dengan Pelapor">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>