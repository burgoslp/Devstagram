@if($posts->count() > 0)
               
    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($posts as $post)
            <div>
                <a href="{{route('posts.show',['user'=>$post->user->username,'post'=>$post->id])}}"><img src="{{asset('uploads')."/".$post->imagen}}" alt="imagen del post {{$post->titulo}}"></a>
            </div>
        @endforeach
    </div>                                  
@else 
   @auth
        {{$autenticado}}       
   @endauth
   @guest
        {{$invitado }}
   @endguest   
@endif
            