@extends('admin_layout')
@section('admin_content')
<div class="container-fluid">
    <style type="text/css">
        p.title_thongke {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
    <div class="row">
        <p class="title_thongke">
            Thống kê đơn hàng doanh số
        </p>
        <form action="" autocomplete="off">
            @csrf
            <div class="col-md-2">
                <p>Từ ngày: <input type="text" id="datepicker" class="form-control"></p>
                <input type="button" name="" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="Lọc kết quả">
            </div>
            <div class="col-md-2">
                <p>Đến ngày: <input type="text" id="datepicker2" class="form-control"></p>
            </div>
            <div class="col-md-2">
                <p>
                    Lọc theo:
                    <select class="dashboard-filter form-control" id="">
                        <option>--Chọn</option>
                        <option value="7ngay">7 ngày qua</option>
                        <option value="thangtruoc">Tháng trước</option>
                        <option value="thangnay">Tháng này</option>
                        <option value="365ngayqua">365 ngày qua</option>
                    </select>
                </p>
            </div>
        </form>
        <div class="col-md-12">
            <div id="myfirstchart" style="height:250px"></div>
        </div>
    </div>
    <div class="row">
        <style type="text/css">
            table.table.table-bordered.table-dark {
                background: #32383e;
            }
            table.table.table-bordered.table-dark tr th {
                color: #fff;
            }
        </style>
        <p class="title_thongke">Thống kê truy cập</p>
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">Đang online</th>
                    <th scope="col">Tổng tháng trước</th>
                    <th scope="col">Tổng tháng này</th>
                    <th scope="col">Tổng một năm</th>
                    <th scope="col">Tổng truy cập</th>
                </tr>
            </thead>
            <tbody>
                <tr>
               <td>{{$visitor_count}}</td>
                    <td>{{$visitor_last_month_count}}</td>
                    <td>{{$visitor_this_month_count}}</td>
                    <td>{{$visitor_year_count}}</td>
                    <td>{{$visitor_total}}</td>

                </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <p class="title_thongke">Thống kê tổng sản phẩm bài viết đơn hàng</p>
            <div class="morris-donut-inverse" id="donut"></div>
        </div>
        <!--  -->
        <div class="col-md-4 col-xs-12">
            <h3>Bài viết xem nhiều</h3>
            <ol class="list_views">
                @foreach($post_views as $key => $post)
                    <li>
                        <a style="color:#fff" href="{{url('/bai-viet/'.$post->post_slug)}}" target="blank">{{$post->post_title}} | <span style="color:black">{{$post->post_views}}</span></a>
                    </li>
                @endforeach
            </ol>
        </div>
        <div class="col-md-4 col-xs-12">
            <style type="text/css">
                ul.list_views {
                    margin: 10px 0;
                    color: #fff;
                }
                ul.list_views a {
                    color: orange;
                    font-weight: 400;
                }
            </style>
            <h3>Sản phẩm xem nhiều</h3>
            <ol class="list_views">
            @foreach($product_views as $key => $pro)
                    <li>
                        <a style="color:#fff" href="{{url('/chi-tiet-san-pham/'.$pro->product_id)}}" target="blank">{{$pro->product_name}} | <span style="color:black">{{$pro->product_views}}</span></a>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</div>
@endsection
