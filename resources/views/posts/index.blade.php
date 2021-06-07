@extends('layouts.app')

@section('content')
@guest
<div class="top_content">
    <div class="top_content_item">
        <img src="{{ asset('img/4340451_m.jpg') }}"  alt="">
        <div class="top_content_item">
            <h2 id="char">さあ、釣りに出かけよう！！</h2>
        </div>
    </div>
</div>
@endguest
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class="">
                    @if (session('flash_message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('flash_message') }}
                        </div>
                    @endif
                    @if(!empty($prefecture))
                        <div class="text-center">
                            <h1>「{{ $prefecture->prefectures_name }}」の投稿一覧</h1>
                        </div>
                    @elseif($check === true)
                        <div class="text-center">
                            <h1>「{{ $port_name->port_name }}」の投稿一覧</h1>
                                <div class="l-content is-noPaddingBottom">
                                    <div id="map" style="height:500px">
                                    </div>
                                    <div>
                                        <h3>データ</h3>
                                        <table border="1" class="port_data">
                                            <tr>
                                                <td>名前</td>
                                                <td>ここに漁港名</td>
                                            </tr>
                                            <tr>
                                                <td>都道府県</td>
                                                <td>ここに都道府県</td>
                                            </tr>
                                            <tr>
                                                <td>駐車スペース</td>
                                                <td>あり</td>
                                            </tr>
                                            <tr>
                                                <td>トイレ</td>
                                                <td>あり</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="text-center">
                            <h1>投稿一覧</h1>
                        </div>
                    @endif
                    @foreach($posts as $post)
                        <article>
                            <div class="l-content">
                                <div class="p-postCardList">
                                    <a href="{{ route('users.show', [ $post->user_id ]) }}">
                                        {{ $post->user->name }}
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h3 class="">漁港名： 
                                        <a href="{{ route('posts.index', [ 'port_name' => $post->port_name ]) }}">
                                            {{ $post->port_name }}
                                        </a>
                                    </h3>
                                    <h6 class="">
                                        <a href="{{ route('posts.index', [ 'prefectures_id' => $post->prefectures_id ]) }}">
                                            [{{ $post->prefecture->prefectures_name }}]
                                        </a>
                                    </h6>
                                    <h5 class="">内容：{{ $post->content }}</h5>
                                    <div class="">
                                        @if($post->image_path)
                                            <img src="{{ $post->image_path }}" alt="画像">
                                        @endif
                                    </div>
                                    <div class="text-center top_btn">
                                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary text-center">詳細</a>
                                    </div>
                                    <p class="created-at">{{ $post->created_at }}</p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
