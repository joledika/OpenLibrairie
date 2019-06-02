@extends('templates.default')


@section('title',"Livres")
@section('description',"liste des livres")

@section('heading',"liste des livres")


@section('content')





        <div class="d-flex justify-content-end">
                <a title="Voir les catégories" href="{{ route('category') }}" class="ui green button tags icon"><i class="ui tags icon"></i></a>
                <a title="Ajouter un livre" class="ui blue button plus icon mr-1" href="{{route('add_book_path')}}"><i class="ui plus icon"></i> </a>
                     {{--  DROPDOWN FILTER  --}}



                     <div class="ui floating dropdown labeled icon button">
                         <i class="filter icon"></i>
                         <span class="text">
                           @if(isset($cat))

                           <span  class="item">
                               <div class="ui {{$cat->color}} empty circular label"></div>
                               {{ $cat->name }}
                           </span>
                         @else
                           Filtre
                         @endif
                         </span>

                         <div class="menu">
                             <div class="ui icon search input">
                             <i class="search icon"></i>
                             <input type="text" placeholder="Search tags...">
                             </div>
                             <div class="divider"></div>
                             @if(isset($cat))
                               <div style="background-color:pink" class="header p-4">


                               <a href="{{ route('books_path') }}" style="color:crimson;cursor:pointer" >
                                 <i class="delete icon"></i>
                                 <code>Effacer le filtre</code>
                               </a>
                               </div>
                            @endif
                             <div class="divider"></div>
                             <div class="header">
                             <i class="tags icon"></i>
                             Catégorie
                             </div>
                             <div class="scrolling menu">
                               @foreach($categories as $category)
                               <a href="{{ route('books_filter_path',$category->slug) }}" class="item">
                                   <div class="ui {{$category->color}} empty circular label"></div>
                                   {{ $category->name }}
                               </a>
                             @endforeach
                           </div>
                         </div>
                     </div>

        </div>


<hr>


    {{--  END DROPDOWN FILTER  --}}


    <div class="ui four column doubling stackable grid container">



        @forelse ($livres as $livre)
        <div class="column">
                <div class="ui special cards">

                        <div class="card">
                            <div class="ui small content">
                                <div class="right floated meta">{{$livre->created_at->diffForHumans()}}</div>
                                    <img class="ui avatar image" src="/storage/{{isset($livre->user->profile->picture)?$livre->user->profile->picture:'users/image/avatar/'.($livre->user->profile->gender=='female'?'female':'male').'.png'}}">
                                    
                                </div>

                          <div class="blurring dimmable image">
                            <div class="ui dimmer">
                              <div class="content">
                                <div class="center">
                                  <a href="{{route('book_path',[$livre->category->name,$livre->slug])}}" class="ui inverted button"><i class="ui eye icon"></i> Regarder</a>
                                </div>
                              </div>
                            </div>
                            <img style="height:250px;"  src="/storage/{{isset($livre->image)?$livre->image:'books/image/default.jpg'}}">

                          </div>
                          <div class="content text-center">
                            <a href="{{route('book_path',[$livre->category->name,$livre->slug])}}" class="header">{{$livre->title}}</a>

                          </div>


                          <div class="meta ml-3">
                                <a href="{{ route('books_filter_path',$livre->category) }}" class="ui {{$livre->category->color}} small left ribbon label">{{$livre->category->name}}</a>

                            </div>

                            <div class="content">
                            <span class="right floated">
                              <i class="download icon"></i>

                            </button>
                                {{ $livre->downloaded->downloads }}
                            </span>
                            <i class="comment icon"></i>
                            {{$livre->commentaries()->count()}} commentaires
                            </div>
                            </div>
                </div>
        </div>

        @empty
        <div class="ui icon message mt-5" >
            <i class="info icon"></i>
            <div class="content">
                <div class="header">
                    Auncun enregistrement
                <p>Désolé, il n'y pas d'enregistrement en ce moment.</p>
                </div>
            </div>
        </div>
        @endforelse

    </div>
    <hr>

    <div class="d-flex justify-content-center mt-4">

      {{$livres->links()}}
    </div>












@endsection

@section('script')
<script>
$('.special.cards .image').dimmer({
    on: 'hover'
  });
</script>
<script>
    $('.ui.dropdown')
  .dropdown()
;
</script>
@endsection
