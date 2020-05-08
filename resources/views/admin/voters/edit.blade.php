@extends('admin.layout')
@section('content')
<div class="single-product-tab-area mg-b-30 mg-t-30">
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Edit Pemilih</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <form action="/admin/voters/{{$milih->id}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" placeholder="NISN" name="nisn" value="{{$milih->nisn}}">
                                            </div>
                                            @if ($errors->has('nisn'))
                                                <p style="color:red; margin-top:1em">{{$errors->first('nisn')}}</p>
                                            @endif
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" placeholder="Nama Pemilih" name="namapemilih" value="{{$milih->name}}">
                                            </div>
                                                @if ($errors->has('namapemilih'))
                                                    <p style="color:red; margin-top:1em">{{$errors->first('namapemilih')}}</p>
                                                @endif
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-tasks" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" placeholder="Kelas" name="kelas" value="{{$milih->class}}">
                                            </div>
                                            @if ($errors->has('kelas'))
                                                <p style="color:red; margin-top:1em">{{$errors->first('kelas')}}</p>
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