@extends('admin.layout')
@section('content')
@php
    $warna = array('red', 'yellow', 'green', 'blue');
@endphp
<div class="product-status mg-b-30 mg-t-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Hasil Voting</h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="analytics-rounded mg-b-30 res-mg-t-30">
                                    <div class="analytics-rounded-content">
                                        <div class="text-center">
                                            <div id="sparkline-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <table>
                                    <tr>
                                        <th>Warna</th>
                                        <th>Pasangan Calon</th>
                                        <th>Jumlah Suara</th>
                                    </tr>
                                
                                    @foreach ($paslon as $nomor=>$item)
                                    <tr>
                                        <td><i class="fa fa-square" style="color:{{$warna[$nomor]}};"></i></td>
                                        <td>
                                            {{$item->nama_ketos}} - {{$item->nama_waketos}}
                                        </td>
                                        <td>{{$item->suara}}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td><i class="fa fa-square" style="color:{{$warna[$jmlhpaslon]}};"></i></td>
                                        <td>Golput/Tidak Memilih</td>
                                        <td>{{$golput}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script>
    $(function () {
        $("#sparkline-bar").sparkline([
            @foreach ($paslon as $item) 
                {{$item->suara}},
            @endforeach
            {{$golput}}
        ],
        {
            type: 'pie',
            width: 'auto',
            height : 200,
            sliceColors: ['red', 'yellow', 'green', 'blue'],
        })
    });
</script>
@endsection