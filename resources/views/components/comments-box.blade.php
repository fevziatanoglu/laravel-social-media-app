@include('components/forms/comment-form')
@foreach ($post->comments as $comment)
    @include('components/items/comment-item')
@endforeach
