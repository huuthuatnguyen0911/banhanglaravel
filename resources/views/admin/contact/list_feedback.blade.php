@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info" >
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê phản hồi khách hàng
    </div>
    <div class="row w3-res-tb">
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
            <th>Thứ tự</th>
            <th>Email</th>
            <th>Nội dung phản hồi</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach($all_feedback as $key => $listfb)
            @php
                $i++;
            @endphp
          <tr>
            <td><i>{{$i}}</i></td>
            <td>{{ $listfb->c_email }}</td>
            <td>{{ $listfb->c_content }}</td>
            <td>
            <a onclick="return confirm('Are you sure to delete ?')" href="{{URL::to('/delete-feedback/'.$listfb->c_id)}}" class="active styling-edit" ui-toggle-class="">
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
