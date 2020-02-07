@extends ('welcome')
@section('title','News Blog')
@section('content') 
 
<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-3 m-3">
                
                <div class="card w-100 h-100">
                        <img class="card-img-top mx-auto d-block" src="{{asset('/images/post_pic/'.$post->images)}}"  style="width:100%" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">{{$post->title}}</h4>
                          <p class="card-text">{{ substr($post->description,0,100)}}</p>
                         
                        </div>
                        <div class="card-footer">
                                <a href="{{url("post/$post->id")}}" class="btn btn-primary float-right">See More</a>
                        </div>
                </div>
                
        </div>
        @endforeach  
    </div>
    <div class="row justify-content-center">
            {{ $posts->links() }}
    </div>
</div>
@endsection