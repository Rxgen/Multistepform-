@extends('layout.app');

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('products.create.step.two.post') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">Step 3: Status & Stock</div>
  
                    <div class="card-body">
  
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
  
                            
                            <div class="form-group">
                                <label for="title"> Age:</label>
                                <input type="text" value=" " class="form-control" id="taskTitle"  name="name">
                            </div>
                            <div class="form-group">
                                <label for="title"> Age:</label>
                                <input type="text" value=" " class="form-control" id="taskTitle"  name="name">
                            </div>
                            <div class="form-group">
                                <label for="title"> Age:</label>
                                <input type="text" value=" " class="form-control" id="taskTitle"  name="name">
                            </div>
                            <div class="form-group">
                                <label for="title"> Age:</label>
                                <input type="text" value=" " class="form-control" id="taskTitle"  name="name">
                            </div>
  
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('products.create.step.one') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
