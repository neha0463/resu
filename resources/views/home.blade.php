@extends('base')
@section('title')
This is | homepage    
@endsection
@section('content')
<div class="container">
    <div class="row">
     <div class="col-lg-4 mx-auto">
         <div class="card mt-3">
             <div class="card-body">
             <form action="{{route('homepage')}}" method="Post">
                     <div class="form-group">
                         <label for="roll_no">roll_no</label>
                     <input type="text" class="form-control  @if($errors->has('roll_no')) is-invalid @else is-valid @endif" name="roll_no" value="">
                     <label class="small text-danger">{{$errors->first('roll_no')}}</label>
                         </div>
                         <div class="form-group">
                            <label for="roll_code">roll_code</label>
                        <input type="text" class="form-control  @if($errors->has('roll_code')) is-invalid @else is-valid @endif" name="roll_code" value="">
                        <label class="small text-danger">{{$errors->first('roll_code')}}</label>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="enter" class="btn btn-success btn-block">
                            </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
     
        <table class="table">
            <tr>
                <th>name</th>
                <th>roll_no</th>
                <th>roll_code</th>
                <th>science</th>
                <th>math</th>
                <th>hindi</th>
                <th>english</th>
                <th>sst</th>
                 </tr>
                 @foreach($data as $a)
                 <tr>
                 <td>{{$a->name}}</td>
                 <td>{{$a->roll_no}}</td>
                 <td>{{$a->roll_code}}</td>
                 <td>{{$a->science}}</td>
                 <td>{{$a->math}}</td>
                 <td>{{$a->hindi}}</th>
                 <td>{{$a->english}}</td>
                 <td>{{$a->sst}}</td>
                 <td><a href="{{route('delete',['id'->$a->id])}}" class="btn btn-danger">Delete</a></td>
                    <td><a href="{{route('edit',['id'->$a->id])}}" class="btn btn-success">Delete</a></td>
                
                </tr>
                 @endforeach
        </table>
    </div>

@endsection