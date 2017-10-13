@extends('layouts.app')

@section('content')
<div class="col-lg-12">
  <form action="" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label>Name Role</label>
      <input type="text" class="form-control" placeholder="Masukkan Role">
    </div>

    <table class="table table-bordered">
      @foreach($permissions as $controller => $actions)
      <tr>
        <td valign="center">
        {{$controller}}
        </td>
        <td>
          @foreach($actions as $action)
          <div class="checkbox">
            <label>
              <input name="permissions[]" type="checkbox" value="{{$action. "".$controller}}">
              {{strtoupper($action)}}
            </label>
          </div>
            @endforeach
        </td>
      </tr>
      @endforeach
    </table>
    <div class="form-group text-align">
      <button type="submit" class="btn btn-primary">
        Simpan
      </button>
    </div>
  </form>
</div>
