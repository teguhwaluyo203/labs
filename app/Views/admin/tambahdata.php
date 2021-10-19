<?php $this->extend('admin/admintemplate') ?>
<?php $this->section('content') ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Input Barang</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Id Barang</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Barang</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group mb-2">
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect02">Jenis Barang</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect02">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group mb-2">
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect02">Satuan</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect02">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Input Barang</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <?php $this->endSection('content') ?>