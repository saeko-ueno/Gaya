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


        function greeting($hour){
            if(6<=$hour<12){
                $result=return <img src="img/morning.jpeg">;
            }
              print $result    
            }
        }
?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
