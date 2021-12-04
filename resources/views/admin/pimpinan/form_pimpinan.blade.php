@extends('admin.master')

@section('content')
<div class="col-md-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Form Product</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left" method="POST" action="/A_product/save" enctype="multipart/form-data">
                {{ csrf_field() }}
               
                <div class="form-group row ">
                    <label class="control-label col-md-3 col-sm-3 ">NIDN</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="text" name="nidn" class="form-control">
                    </div>
                </div>
                <div class="form-group row ">
                    <label class="control-label col-md-3 col-sm-3 ">Status</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="text" name="tempat_lahir" class="form-control">
                    </div>
                </div>
                <div class="form-group row ">
                    <label class="control-label col-md-3 col-sm-3 ">Tanggal Awal</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                </div>

                <div class="form-group row ">
                    <label class="control-label col-md-3 col-sm-3 ">Tanggal Akhir</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">Foto</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="file" name="foto" style="width: 100%;" required>
                    </div>
                </div>
        </div>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-9 col-sm-9  offset-md-3">
            <a href="/A_product" class="btn btn-primary">Cancel</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>

    </form>
</div>
@endsection