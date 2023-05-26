<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                    <h2>Add Student</h2>
                    @if (Session::has('success'))
                    <div class="aletr alert-success" role="alert">
                        {{ Session::get('Success')}}
                    </div>
                @endif
                    <form action="{{ url('save-student')}}" method="POST">
                        @csrf
                        <div class="md-3">
                            <label class="from-label">Name</label><br/>
                            <input type="text" class="from-control" name="name" placeholder="Enter Name" value="{{old('name')}}">
                            @error('name')
                            <div class="aletr alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="md-3">
                            <label class="from-label">Email</label><br/>
                            <input type="email" class="from-control" name="email" placeholder="Enter Email" value="{{ old('email')}}">
                            @error('email')
                            <div class="aletr alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="md-3">
                            <label class="from-label">Phone</label><br/>
                            <input type="number" class="from-control" name="phone" placeholder="Enter Phone" value="{{old('phone')}}">
                            @error('phone')
                            <div class="aletr alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="md-3">
                            <label class="from-label">Address</label><br/>
                            <textarea class="from-control" name="address" placeholder="Enter Address" value="{{old('address')}}"></textarea>
                            @error('address')
                            <div class="aletr alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        <a href="{{ url('student-list')}}" class="btn btn-sm btn-danger">Back</a>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>
