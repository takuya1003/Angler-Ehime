@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card margin_card">
                <div class="card-header">投稿ページ</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">漁港名</label>
                                @if($errors->has('port_name'))
                                    @foreach($errors->get('port_name') as $message)
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @endforeach    
                                @endif
                               <select class="form-control" name="port_id" id="">
                                    <option value="0">選択してください</option>
                                    @foreach($ports as $port)
                                        <option value="{{ $port->id }}">{{ $port->port_name }}</option>
                                    @endforeach
                               </select>
                            </div>
                        
                            <div class="form-group">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">内容</label>
                                @if($errors->has('content'))
                                    @foreach($errors->get('content') as $message)
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @endforeach    
                                @endif
                                <textarea class="form-control " name="content" id="exampleFormControlTextarea1" placeholder="ここに釣行の内容を入力" rows="3">{{ old('content') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">画像</label>
                                <input type="file" class="form-control-file" name="image" id="image">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary ">投稿！</button>
                            </div>
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection