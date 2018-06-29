@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Thanks!!!!!Coming!!!!!</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if(6<=$hour<12)
                       <img src="img/morning.jpeg">;
                    @elseif(12<=$hour<18)
                        <img src="img/hello!!.jpg"
                    @else
                         <img src="img/good night.jpeg">
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
