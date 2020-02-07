@extends ('welcome')
@section('title','News Blog')
@section('content') 
 
<div class="container">
    <div class="row ">  
        <div class="col-md-10 offset-1 m-3 "> 
                        <img class="mx-auto d-block" src="{{asset('/images/post_pic/' . $posts->images)}}"  style="width:400px; height:400px;" alt="Card image">
                        
                          <h4 class="text-design mt-3" style="text-align:center">{{$posts->title}}</h4>
                          <p class="mb-4">{{ $posts->description }}</p> 
        <span class="float-right"><strong>Author by : </strong>{{$posts->user->name}} </span>
        </div>
    </div>
    <div class="row">
        <div class="col  mb-3">
            <a href="{{ url('/') }}" class="btn btn-secondary">
                Go Back
            </a>
        </div>
    </div>
</div>
@endsection