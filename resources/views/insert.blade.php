@extends('base')
@section('title')
 this is | insertpage   
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card mt-4">
                <form action="{{route('insertpage')}}" method="post">
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label for="name">name</label>
                        <input type="text" class="form-control  @if($errors->has('name')) is-invalid @else is-valid @endif" name="name" value="{{old('name')}}">                            
                        <label class="small text-danger">{{$errors->first('name')}}</label>
                        </div>
                        <div class="form-group">
                            <label for="roll_no">roll_no</label>
                            <input type="text" class="form-control  @if($errors->has('roll_no')) is-invalid @else is-valid @endif"
                        name="roll_no" value="{{old('roll_no')}}">
                            <label class="small text-danger">{{$errors->first('roll_no')}}</label>
                        </div>
                        <div class="form-group">
                            <label for="roll_code">roll_code</label>
                            <input type="text"
                                class="form-control  @if($errors->has('roll_code')) is-invalid @else is-valid @endif"
                        name="roll_code" value="{{old('roll_code')}}">
                            <label class="small text-danger">{{$errors->first('roll_code')}}</label>
                        </div>
                        <div class="form-group">
                            <label for="science">science</label>
                            <input type="text"
                                class="form-control  @if($errors->has('science')) is-invalid @else is-valid @endif"
                        name="science" value="{{old('science')}}">
                            <label class="small text-danger">{{$errors->first('science')}}</label>
                        </div>
                        <div class="form-group">
                            <label for="math">math</label>
                            <input type="text"
                                class="form-control  @if($errors->has('math')) is-invalid @else is-valid @endif"
                        name="math" value="{{old('math')}}">
                            <label class="small text-danger">{{$errors->first('math')}}</label>
                        </div>
                        <div class="form-group">
                            <label for="hindi">hindi</label>
                            <input type="text"
                                class="form-control  @if($errors->has('hindi')) is-invalid @else is-valid @endif"
                        name="hindi" value="{{old('english')}}">
                            <label class="small text-danger">{{$errors->first('hindi')}}</label>
                        </div>
                        <div class="form-group">
                            <label for="sst">sst</label>
                         <input type="text" class="form-control  @if($errors->has('sst')) is-invalid @else is-valid @endif"
                        name="sst" value="{{old('sst')}}">
                            <label class="small text-danger">{{$errors->first('sst')}}</label>
                        </div>
                        <div class="form-group">
                            <label for="english">English</label>
                            <input type="text"
                                class="form-control  @if($errors->has('english')) is-invalid @else is-valid @endif"
                        name="english" value="{{old('english')}}">
                            <label class="small text-danger">{{$errors->first('english')}}</label>
                        </div>
                        <div class="form-group ">
                            <input type="submit" name="send" class="btn btn-danger btn-block">
                        </div>
                        
                         </div>
                </form>
            </div>
          
        </div>
    </div>
</div>
@endsection
