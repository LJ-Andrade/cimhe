<div class="navbar navbar-default navbar-fixed-top text-center" role="navigation">        
    <div class="container-fluid main-header">
        <div class="container">
            <div class="row item-inline">            
                <div class="inner">
                    <img src="{{ asset('webimages/main/supicon1.png') }}"/> 
                    <span>(011) 5648-7952<br>(011) 4757-6985</span> 
                </div>
                <div class="inner">
                    <img src="{{ asset('webimages/main/supicon2.png') }}"/>
                    <span>comercial@cimhe.com</span>
                </div>
                <div class="inner">
                    <img src="{{ asset('webimages/main/supicon3.png') }}"/> 
                    <span>Buenos Aires, Argentina</span>
                </div>
                <div class="pull-right">
                    <button class="FormModal btn btnBlue" data-toggle="modal" data-target="#SuelosModal">Presupuestar Suelos</button>
                    <button class="FormModal btn btnBlue" data-toggle="modal" data-target="#HormigonModal">Presupuestar Hormigón</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container nav-container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>  
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('webimages/main/logocimhe.png') }}"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                @if(Menu::activeMenu('/') == 'active')
                    <li class="{{ Menu::activeMenu('/') }}"><a href="{{ url('#top') }}">INICIO</a></li>
                @else
                    <li><a href="{{ url('/') }}">INICIO</a></li>    
                @endif
                {{-- <li class="{{ Menu::activeMenu('laboratorio') }}"><a href="{{ url('laboratorio') }}">LABORATORIO - Old</a></li> --}}
                <li class="dropdown {{ Menu::activeMenu('cimhe-sas')}} {{ Menu::activeMenu('geotecnica') }} {{  Menu::activeMenu('insumos') }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICIOS <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ Menu::activeMenu('cimhe-sas') }}"><a href="{{ url('cimhe-sas') }}">CIMHE SAS</a></li>
                        <li class="{{ Menu::activeMenu('geotecnica') }}"><a href="{{ url('geotecnica') }}">GEOTÉCNICA</a></li>
                        <li class="{{ Menu::activeMenu('insumos') }}"><a href="{{ url('insumos') }}">INSUMOS</a></li>
                    </ul>
                </li>
                <li class="{{ Menu::activeMenu('profesionales') }}"><a href="{{ url('profesionales') }}">PROFESIONALES</a></li>
                <li class="{{ Menu::activeMenu('galeria') }}"><a href="{{ url('galeria') }}">FOTOS</a></li>
                <li class="{{ Menu::activeMenu('noticias') }}"><a href="{{ url('noticias') }}">NOTICIAS</a></li>
                <li><a class="contacto" href="{{ url('/#contacto') }}">CONTACTO</a></li>   
            </ul>
            <div class="nav-mobile-extra">
                <hr>
                <div class="row item-inline">            
                    <div>
                        <button class="btn btnBlue" data-toggle="modal" data-target="#SuelosModal">Presupuestar Suelos</button> <br>
                        <button class="btn btnBlue" data-toggle="modal" data-target="#HormigonModal">Presupuestar Hormigón</button>
                    </div>
                    <div class="inner">
                        <span>Cel: (011) 5648-7952 || Tel: 4757-6985</span> 
                    </div>
                    <div class="inner">
                        <span>comercial@cimhe.com</span>
                    </div>
                    <div class="inner">
                        <span>Buenos Aires, Argentina</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>