@extends('admin.layout')
@section('content')
<div class="single-product-tab-area mg-b-30 mg-t-30">
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Tambah Calon Pasangan</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <form action="/admin/paslons" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" placeholder="Nama Ketua OSIS" name="ketos">
                                            </div>
                                            @if ($errors->has('ketos'))
                                                <p style="color:red; margin-top:1em">{{$errors->first('ketos')}}</p>
                                            @endif
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" placeholder="Nama Wakil Ketua OSIS" name="waketos">
                                            </div>
                                            @if ($errors->has('waketos'))
                                                <p style="color:red; margin-top:1em">{{$errors->first('waketos')}}</p>
                                            @endif
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                <input type="file" class="form-control" placeholder="Foto" name="foto">
                                            </div>
                                            @if ($errors->has('foto'))
                                                <p style="color:red; margin-top:1em">{{$errors->first('foto')}}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="text-center custom-pro-edt-ds">
                                            <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                                                </button>
                    
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection