@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sample Form</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @else
                        <form method="POST" action="/subscribe">
                            @csrf
                            <div class="form-group">
                                <label for="usr">Name:</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="usr">Email:</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password')}}">
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment:</label>
                                <textarea class="form-control" rows="5" name="comment"></textarea>
                            </div>
                            <div class="form-group">
                            <label class="checkbox-inline"><input name="level" type="radio" value="1"> Level 1</label>
                            <label class="checkbox-inline"><input name="level" type="radio" value="2"> Level 2</label>
                            <label class="checkbox-inline"><input name="level" type="radio" value="3"> Level 3</label>
                                @error('level')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="sel1">Experience:</label>
                                <select class="form-control" name="experience">
                                    <option value="beginner">Beginner</option>
                                    <option value="intermediate">Intermediate</option>
                                    <option value="expert">Expert</option>
                                </select>
                                @error('experience')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>

                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
