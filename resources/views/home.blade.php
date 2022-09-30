 @include('layouts.header', ['title' => 'Rumah'])

 <div class="container text-center mt-3 p-4 bg-white">
 <h1>Home</h1>
 <div class="card-columns">
 @for ($i = 0; $i < 10; $i++)
 <div class="card">
 <img
src="https://source.unsplash.com/random?sig={{$i}}/350x250"
 class="img-thumbnail img-fluid">
 </div>
 @endfor
 </div>
 </div>

 @include('layouts.footer')
