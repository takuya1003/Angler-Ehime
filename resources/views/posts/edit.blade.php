@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card margin_card">
                <div class="card-header">投稿ページ</div>
                    <div class="card-body">
                        @if (session('flash_message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('flash_message') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('posts.update', $posts->id) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">漁港名</label>
                                <select class="form-control" name="port_id" id="">
                                    <option value="{{ $posts->port->id }}">{{ $posts->port->port_name }}</option>
                                    @foreach($ports as $port)
                                        <option value="{{ $port->id }}">{{ $port->port_name }}</option>
                                    @endforeach
                               </select>
                            </div>
                            
                            <div class="form-group">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">内容</label>
                                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" >{{ $posts->content }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">画像</label>
                                <input type="file" class="form-control-file" name="image" id="image">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary ">投稿！</button>
                            </div>
                            <input type="hidden" name="user_id" value="1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
