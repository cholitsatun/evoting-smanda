@extends('admin.layout')
@section('content')
<div class="single-product-tab-area mg-b-30 mg-t-30">
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Edit VIsi Misi</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <form action="/admin/visimisis/{{$visi->id}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                <textarea name="visi" class="mytextarea" cols="auto" rows="5" placeholder="Visi" style="width:100%">{!! $visi->visi !!}</textarea>
                                            </div>
                                            @if ($errors->has('visi'))
                                                <p style="color:red; margin-top:1em">{{$errors->first('visi')}}</p>
                                            @endif
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                <textarea name="misi" class="mytextarea" cols="auto" rows="5" placeholder="Misi" style="width:100%">{!! $visi->misi !!}</textarea>
                                            </div>
                                                @if ($errors->has('misi'))
                                                    <p style="color:red; margin-top:1em">{{$errors->first('misi')}}</p>
                                                @endif
                                            <select name="calon" class="form-control pro-edt-select form-control-primary">
                                                <option value="">Pilih Calon</option>
                                                @foreach ($calon as $item)
                                                    <option value={{$item->id}} {{$item->id == $visi->paslon_id ? "selected" : ""}} >{{$item->nama_ketos}} - {{$item->nama_waketos}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('calon'))
                                                <p style="color:red; margin-top:1em">{{$errors->first('calon')}}</p>
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