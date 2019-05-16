@extends('templates.default')


{{--  @section('title',"Livres")
@section('description',"liste des livres")

@section('heading',"liste des livres")  --}}


@section('content')




    <div class="d-flex justify-content-end mt-2">

        <button class="ui tiny teal button" type="submit"><i class="edit icon"></i>Modifier</button>
        <button class="ui tiny orange button" type="submit"><i class="trash icon"></i>supprimer</button>
        <button class="ui tiny green button" type="submit"><i class="download icon"></i>télécharger</button>

    </div>


    <div style="margin-top:10px">
        <img class="ui small centered circular image" src="{{asset('img/elliot.jpg')}}">
    </div>
    <div class="ui one column grid mt-2">

        <div class="column">

            <div class="ui raised segment">

                <span class="ui header">titre</span>
                <p>description</p>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, reiciendis. Exercitationem harum dolorem nihil obcaecati perferendis deserunt quos repudiandae quidem, delectus pariatur distinctio nesciunt explicabo corrupti atque assumenda sequi consectetur excepturi necessitatibus commodi dolor officiis aspernatur rem? Eaque, obcaecati eius. Nesciunt nemo id iste asperiores dolores nostrum cumque earum vero rerum quos error, labore facilis, voluptatum, libero molestiae iure doloremque officia itaque repudiandae facere? Error, suscipit, iste similique eligendi hic cupiditate quae consequuntur repellendus expedita quod unde harum nam nulla ipsam autem praesentium magnam eius rem? Dolor fuga assumenda, magnam quos repellendus deserunt quibusdam maiores, possimus odio quis odit facere? </p>

            </div>
        </div>

    </div>

    <div class="ui comments">

        <div class="comment">
            <a class="avatar">
            <img src="{{asset('img/elliot.jpg')}}">
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
            <img src="{{asset('img/elliot.jpg')}}">
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



@stop
