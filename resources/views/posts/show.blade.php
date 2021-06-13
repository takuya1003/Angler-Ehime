@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="l-content margin_card">
                <div class=""></div>
                    <div class="">
                        @if (session('flash_message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('flash_message') }}
                            </div>
                        @endif
                        <div class=" text-center">
                            <div class=" text-left">
                                 
                            </div>
                            <div class="">
                                <h3 class="card-title text-left">漁港名：{{ $posts->port->port_name }}</h3>
                                
                                <h5 class="card-text text-left">内容：{{ $posts->content }}</h5>
                                <div class="">
                                    @if($posts->image_path)
                                        <img src="{{ $posts->image_path }}" alt="画像">
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="comment-card">
                        <h4 class="">コメント一覧</h4>
                        
                        
                        <a href="{{ route('posts.index') }}" class="btn btn-primary btn-back">戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection