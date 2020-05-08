@extends('admin.layout')
@section('content')
<div class="product-status mg-b-30 mg-t-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Daftar Calon Pasangan Ketua dan Wakil Ketua OSIS</h4>
                        <div class="add-product">
                            <a href="/admin/paslons/tambah">Tambah Paslon</a>
                        </div>
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Nama Ketua OSIS</th>
                                <th>Nama Wakil Ketua OSIS</th>
                                <th>Foto</th>>
                                <th>Setting</th>
                            </tr>
                        
                                @foreach ($b as $nomor=>$item)
                                <tr>
                                <td>{{$nomor+1}}</td>
                                <td>{{$item->nama_ketos}}</td>
                                <td>{{$item->nama_waketos}}</td>
                                <td><img src="/gambar/{{$item->foto}}" alt="{{$item->foto}}"></td>
                                <td>
                                    <a href="/admin/paslons/{{$item->id}}/edit"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                    <form action="/admin/paslons/{{$item->id}}" method="POST" style="display:inline">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                                @endforeach
                                
                            
    
                        </table>
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