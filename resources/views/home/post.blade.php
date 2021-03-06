@extends('layouts.main')

@section('contents')
    <div class="article-internal">
        <div class="container">
            <div class="row">
                <article class="col-md-12">
                    <div class="article-details">
                        <span class="post-category ">{{ $post->category }}</span>
                        <span class="post-divider">/</span><span class="post-created ">{{ $post->date }}</span>
                        <span class="post-author ">{{ $post->authors_string }}</span>
                    </div>
                    <h1 class="article-title">{{ $post->title }}</h1>
                    <h5 class="article-subtitle">{{ $post->subtitle }}</h5>
                    <div class="row">
                        <figure class="col-xs-12">
                            <img class="img img-responsive article-img" src="{{ $post->main_photo->url }}" >
                            <figcaption class="article-image-caption">
                                <span class="article-image-author">{{ $post->main_photo->author }}</span>
                                {{--A mostra conta com vídeos, músicas, esculturas, fotogra as e pinturas que remetem à cultura africana contemporânea--}}
                            </figcaption>
                        </figure>
                    </div>

                    <div class="article-body">
                        <p>{!! $post->lead !!}</p>

                        <p>{!! $post->body !!}</p>
                    </div>

                    <div class="row" style="margin-top: 50px;"> {{-- ACR - transoformar este style em css!!!! --}}
                        @foreach ($post->other_photos as $photo)
                            <figure class="col-xs-6 col-md-3">
                                <img class="img img-responsive article-img" src="{{ $photo['url'] }}" >
                                <figcaption class="article-image-caption">
                                    <span class="article-image-author">{{ $photo['author'] }}</span>
                                </figcaption>
                            </figure>
                        @endforeach
                    </div>

                    <footer>
                        @foreach ($post->tags as $tag)
                            <span class="label label-default">{{ $tag }}</span>
                        @endforeach
                    </footer>
                </article>

                {{--<div class="col-md-4 article-side-list">--}}
                    {{--<article class="">--}}
                        {{--<div class="row">--}}
                            {{--<figure class="col-xs-5">--}}
                                {{--<a href=""><img class="img img-responsive article-img" src="https://picsum.photos/1500/1000/" ></a>--}}
                            {{--</figure>--}}
                            {{--<div class="col-xs-7">--}}
                                {{--<h4 class="article-title"><a href="/post">Your article title goes here</a></h4>--}}
                                {{--<div class="article-intro" >--}}
                                    {{--<p>--}}
                                        {{--Phasellus et nisl quis erat imperdiet pulvinar. Vestibulum aliquam arcu nec laoreet aliquam. Pellentesque cursus porta dignissim.--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="">--}}
                        {{--<div class="row">--}}
                            {{--<figure class="col-xs-5">--}}
                                {{--<a href=""><img class="img img-responsive article-img" src="https://picsum.photos/1500/1000/?image=1" ></a>--}}
                            {{--</figure>--}}
                            {{--<div class="col-xs-7">--}}
                                {{--<h4 class="article-title"><a href="/post">Your article title goes here</a></h4>--}}
                                {{--<div class="article-intro" >--}}
                                    {{--<p>--}}
                                        {{--Phasellus et nisl quis erat imperdiet pulvinar. Vestibulum aliquam arcu nec laoreet aliquam. Pellentesque cursus porta dignissim.--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="">--}}
                        {{--<div class="row">--}}
                            {{--<figure class="col-xs-5">--}}
                                {{--<a href=""><img class="img img-responsive article-img" src="https://picsum.photos/1500/1000/?image=100" ></a>--}}
                            {{--</figure>--}}
                            {{--<div class="col-xs-7">--}}
                                {{--<h4 class="article-title"><a href="/post">Your article title goes here</a></h4>--}}
                                {{--<div class="article-intro" >--}}
                                    {{--<p>--}}
                                        {{--Phasellus et nisl quis erat imperdiet pulvinar. Vestibulum aliquam arcu nec laoreet aliquam. Pellentesque cursus porta dignissim.--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="">--}}
                        {{--<div class="row">--}}
                            {{--<figure class="col-xs-5">--}}
                                {{--<a href=""><img class="img img-responsive article-img" src="https://picsum.photos/1500/1000/?image=111" ></a>--}}
                            {{--</figure>--}}
                            {{--<div class="col-xs-7">--}}
                                {{--<h4 class="article-title"><a href="/post">Your article title goes here</a></h4>--}}
                                {{--<div class="article-intro" >--}}
                                    {{--<p>--}}
                                        {{--Phasellus et nisl quis erat imperdiet pulvinar. Vestibulum aliquam arcu nec laoreet aliquam. Pellentesque cursus porta dignissim.--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</article>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@stop
