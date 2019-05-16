@extends('templates.default')


@section('title',"Articles")
{{-- @section('description',{{$post->body}}) --}}

{{-- @section('heading',{{$post->tile}}) --}}


@section('content')
    <div class="d-flex justify-content-end mt-2">

        <button class="ui tiny teal button" type="submit"><i class="edit icon"></i>Modifier</button>
        <button class="ui tiny orange button" type="submit"><i class="trash icon"></i>supprimer</button>

    </div>




    <div class="ui one column grid mt-2">

        <div class="column">

            <div class="ui raised segment">

                <span class="ui header">{{$post->name}}</span>
                <p>{!!$post->body!!}</p>


            </div>
        </div>

    </div>

    <div class="ui comments">
            <div class="comment">
              <a class="avatar">
                <img src="/images/avatar/small/joe.jpg">
              </a>
              <div class="content">
                <a class="author">Joe Henderson</a>
                <div class="metadata">
                  <div class="date">1 day ago</div>
                </div>
                <div class="text">
                  <p>The hours, minutes and seconds stand as visible reminders that your effort put them all there. </p>
                  <p>Preserve until your next run, when the watch lets you see how Impermanent your efforts are.</p>
                </div>
                <div class="actions">
                  <a class="reply">Reply</a>
                </div>
              </div>
            </div>
            <div class="comment">
              <a class="avatar">
                <img src="/images/avatar/small/christian.jpg">
              </a>
              <div class="content">
                <a class="author">Christian Rocha</a>
                <div class="metadata">
                  <div class="date">2 days ago</div>
                </div>
                <div class="text">
                  I re-tweeted this.
                </div>
                <div class="actions">
                  <a class="reply">Reply</a>
                </div>
              </div>
            </div>
            <form class="ui reply form">
              <div class="field">
                <textarea></textarea>
              </div>
              <div class="ui primary submit labeled icon button">
                <i class="icon edit"></i> Add Comment
              </div>
            </form>
          </div>






@endsection
