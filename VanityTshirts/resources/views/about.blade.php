@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>About Us</h1>
                </div>
                
                <div class="panel-body">
                    Employee directory...                    
                </div>
            </div><!--end panel-->
        
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{asset('images/default.png')}}" alt="Employee photo">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Employee of the Month</h4>
                    Here is some useless information about this employee. Lorem ipsum dolor sit amet, 
                    commune accumsan quaestio eos ut, ex est oratio persequeris. Cetero sanctus eu vim, 
                    idque efficiendi mediocritatem et nec. In vix dicam albucius maluisset, cu sed dolorum debitis. 
                    Vim at adhuc partiendo, mei vocibus apeirian eu. Graeci doming deleniti mel an, per et nullam 
                    expetendis.
                </div>
            </div><!--end media-->
        </div>
    </div><!--end row-->
</div>
@endsection