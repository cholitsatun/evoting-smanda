@extends('admin.layout')
@section('content')
<style type="text/css">
    .pagination li{
        float: left;
        list-style-type: none;
        margin:5px;
    }
</style>
<div class="product-status mg-b-30 mg-t-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4 style="display:inline">Daftar Pemilih</h4>
                    <p></p>
                    <div class="custom-pro-edt-ds" style="display:inline; margin-bottom:7px">
                        <form action="/admin/voters/cari" method="GET" style="float: left">
                            <input type="text" name="cari" placeholder="Cari Pemilih .." value="{{ old('cari') }}" class="btn btn-ctl-bt waves-effect waves-light m-r-10">
                            <input type="submit" value="CARI" class="btn btn-ctl-bt waves-effect waves-light m-r-10">
                        </form>

                        <form action="/admin/voters/tambah" style="display:inline; float:right">
                            <button class="btn btn-ctl-bt waves-effect waves-light m-r-10">Tambah Pemilih</button>
                        </form>
                        <button class="btn btn-ctl-bt waves-effect waves-light m-r-10" data-toggle="modal" data-target="#myModal"  style="display:inline; float:right">Tambah Pemilih (Excel)</button>
                    </div>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Status</th>
                            <th>Setting</th>
                        </tr>
                            @foreach ($a as $nomor=>$item)
                            <tr>
                            <td>{{$nomor+1}}</td>
                            <td>{{$item->nisn}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->class}}</td>
                            <td>
                                @if ($item->status==0)
                                <button class="ds-setting">Belum Voting</button>
                                @else
                                <button class="pd-setting">Sudah Voting</button>
                                @endif
                            </td>
                            <td>
                                <a href="/admin/voters/{{$item->id}}/edit"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                <form action="/admin/voters/{{$item->id}}" method="POST" style="display:inline">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                            @endforeach
                            
                        

                    </table>
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                    
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                                <h4 class="modal-title" style="color:black">Tambah Pemilih (format file .ods, .xlsx, atau .xls)</h4>
                            </div>
                            <div class="modal-body">
                                <form action="/admin/voters/import" method="POST" style="display:inline" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" placeholder="Choose File" name="excel">
                                    @if ($errors->has('excel'))
                                    <p style="color:red; margin-top:1em">{{$errors->first('excel')}}</p>
                                    @endif
                            </div>
                            
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            
                                <button type="submit" class="btn btn-default" name="excel">Tambah Pemilih</button>
                            </form>
                           
                            </div>
                        </div>
                    
                        </div>
                    </div>
                    <div class="custom-pagination">
                        {{-- <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection