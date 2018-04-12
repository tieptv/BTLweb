@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
       <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nhà sản xuất
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Quốc gia</th>
                                <th>Mô tả</th> 
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($manufacture as $manu)
                            <tr class="odd gradeX" align="center">
                                <td>{{$manu->id}}</td>
                                <td>{{$manu->name}}</td>
                                <td>{{$manu->country}}</td>
                                <td>{{$manu->description}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/manufacture/delete/{{$manu->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/manufacture/edit/{{$manu->id}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection