@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê banner
    </div>
    <div class="table-responsive">
    <?php
                            use Illuminate\Support\Facades\Session;
                            $message = Session::get('message');
                            if('$message')
                            {
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
      <table class="table table-striped b-t b-light" id="myTable">
        <thead>
          <tr>
            <th style="width:20px;">
            </th>
            <th>Tên slide</th>
            <th>Hình ảnh</th>
            <th>Mô tả</th>
            <th>Tình trạng</th>
          </tr>
        </thead>
        <tbody>
            @foreach($all_slide as $key => $slide)
          <tr>
            <td></td>
            <td>{{ $slide->slider_name }}</td>
            <td><img src="public/uploads/slider/{{ $slide->slider_image }}" height="120" width="500" alt=""></td>
            <td>{{ $slide->slider_desc }}</td>
            <td><span class="text-ellipsis">
                <?php
                if($slide->slider_status==1){
                ?>
                    <a href="{{URL::to('/unactive-slide/'.$slide->slider_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
            <?php
                }else{
            ?>
                    <a href="{{URL::to('/active-slide/'.$slide->slider_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
            <?php
                }
            ?>
            </span>
        </td>
            <td>
            <a onclick="return confirm('Are you sure to delete ?')" href="{{URL::to('/delete-slide/'.$slide->slider_id)}}" class="active styling-edit" ui-toggle-class="">
                  <i class="fa fa-times text-danger text"></i>
            </a>
            </td>
          </tr>
            @endforeach
        </tbody>

      </table>
    </div>

  </div>
</div>
@endsection
