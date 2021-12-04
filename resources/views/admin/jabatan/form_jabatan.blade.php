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
                    <label class="control-label col-md-3 col-sm-3 ">jafung</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="text" name="jafung" class="form-control">
                    </div>
                </div>
                <div class="form-group row ">
                    <label class="control-label col-md-3 col-sm-3 ">Tanggal</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="date" name="tanggal" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 ">SK</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="number" name="sk" class="form-control">
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
    </div>
</div>
@endsection