@if (session('sucess'))
   <div class="alert alert-success" role="alert">
        {{ session('sucess') }}
   </div>  
@endif

@if (session('error'))
   <div class="alert alert-danger" role="alert">
        {{ session('error') }}
   </div>  
@endif

@if ($errors->any())
   @foreach ($errors->all() as $error )
         <div class="alert alert-danger" role"alert">
            {{ $error }}
         </div>
   @endforeach    
@endif