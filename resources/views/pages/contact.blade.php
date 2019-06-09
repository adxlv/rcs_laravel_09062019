@extends('layouts.main')

@section('saturs')
    
    <form action="/submitform" method="get">
      <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input name="yourname" type="text" class="form-control" >
        
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="youremail" type="text" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Your message</label>
        <textarea name="yourmessage" class="form-control" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if ($formSuccess == 'form-successfull')
        <h1> Pāāāāāāāāldies </h1>
    @endif

    @if ($formSuccess == 'form-not-successfull')
        <h1> Nop this is wrong </h1>
    @endif

@endsection
