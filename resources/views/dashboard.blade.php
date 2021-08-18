@extends('layouts\admin.app')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose" >
                    <i class="material-icons">groups</i>
                </div>
                <div class="card-content">
                    <h3 class="card-title"><b>DANH SÁCH ADMIN</b></h3>
                    <div class="row">
                        <div class="col-md-6">
                            <h3>
                                <a href="#">THÊM ADMIN</a>
                            </h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <form action="">
                                <input form-control mr-sm-2 type="search"  placeholder="Tìm kiếm" value="" name="search">
                                <button>TÌm Kiếm</button>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th>Id</th>
                                <th>Họ tên</th>
                                <th>Giới tính</th>
                                <th>SĐT</th>
                                <th>Email</th>
                                <th>Mật khẩu</th>
                                <th>cấp độ</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                                {{-- @foreach ($listCustomers as $customers) --}}
                            <tr>
                                    <th>1</th>
                                    <td>Trần Thư Hường</td>
                                    <td>Nữ</td>
                                    <td>0379370553</td>
                                    <td>tranthuhuong@gmail.com</td>
                                    <td>12345</td>
                                    <td>SuperAdmin</td>
                                    <td>
                                        <form action="#" method="post">
                                            @method('DELETE')
                                            @csrf 
                                            <button class="btn btn-warning">
                                                <i class="material-icons">edit</i>
                                            </button>
                                        </form> 
                                    </td>                  
                                    <td>
                                        <form action="#" method="post"> 
                                        {{-- @method('DELETE')
                                        @csrf --}}
                                        <button onclick="return confirm('Bạn muốn ẩn khách hàng này không?');" class="btn btn-danger">
                                            <i class="material-icons">visibility_off</i>
                                        </button>
                                        </form> 
                                    </td>               
                            </tr> 
                                {{-- @endforeach --}}
                        </table>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
