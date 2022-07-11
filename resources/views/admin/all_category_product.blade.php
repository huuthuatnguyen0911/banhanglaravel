@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Liệt kê danh mục sản phẩm
        </div>
        <div class="table-responsive">
            <?php

            use Illuminate\Support\Facades\Session;

            $message = Session::get('message');
            if ('$message') {
                echo '<span class="text-alert">' . $message . '</span>';
                Session::put('message', null);
            }
            ?>
            <table class="table table-striped b-t b-light" id="myTable">
                <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Tên danh mục</th>
                        <th>Slug</th>
                        <th>Hiển thị</th>
                        <th>Mô tả danh mục</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_category_product as $key => $cate_pro)
                    <tr>
                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                        <td>{{ $cate_pro->category_name }}</td>
                        <td>{{ $cate_pro->slug_category_product }}</td>
                        <td><span class="text-ellipsis">
                                <?php
                                if ($cate_pro->category_status == 0) {
                                ?>
                                    <a href="{{URL::to('/unactive-category-product/'.$cate_pro->category_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                <?php
                                } else {
                                ?>
                                    <a href="{{URL::to('/active-category-product/'.$cate_pro->category_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                <?php
                                }
                                ?>
                            </span></td>
                        <td>{!! $cate_pro->category_desc !!}</td>
                        <td>
                            <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>
                            <a onclick="return confirm('Are you sure to delete ?')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-times text-danger text"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- import data -->
            <form action="{{url('import-csv')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" accept=".xlsx"><br>
                <input type="submit" value="Import Excel" name="import_csv" class="btn btn-warning">
            </form>
            <!-- export data -->
            <form action="{{url('export-csv')}}" method="POST">
                @csrf
                <input type="submit" value="Export Excel" name="export_csv" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
