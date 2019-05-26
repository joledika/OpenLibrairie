
  <div class="ui vertical stripe segment" id="apropos">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">Qui somme nous?</h3>
          <hr>
          <p style="text-align:justify">
            <span><strong>{{ env('APP_NAME') }}</strong></span> est<strong> un bibliothèque gratuit <i class="ui book icon"></i>  </strong>
             en ligne accessible par tous le monde,
            un site web <strong> multiplateforme </strong>c'est à dire responsive que vous ete sur pc
             <i class="ui laptop icon"></i>, tablette <i class="ui tablet icon" ></i> , ou mobile <i class="ui mobile icon"></i>.
          </p>
          <h3 class="ui header"></h3>
          <p style="text-align:justify">
            Cet application web vous facilite la vie et permet de consulter des livres et discuter <i class="ui chat icon"></i> avec les membres <i class="ui users icon"></i> .
            Il suffit juste de s'inscrire ,c'est gratuit <i class="ui handshake icon"></i><i class="ui smile outline icon"></i> .
          </p>
        </div>
        <div class="six wide right floated column">
          <img
            class="ui large bordered rounded image"
            src="{{asset('home/img/intro/biblio.jpg')}}"
          />
        </div>
      </div>
      <div class="row">
        <div class="center aligned column">
          <a href="{{ route('register') }}" class="ui huge pink button"><i class="ui save icon"></i>Inscrivez vous maintenant</a>
        </div>
      </div>
    </div>
  </div>
