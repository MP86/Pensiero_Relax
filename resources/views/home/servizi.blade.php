@extends('master')


@section('seo')
	<meta name="description" content="Massaggi Shiatsu, Reiki e Rilassante anche a casa tua. 
	I servizi che ti possiamo offrire.">
    
@stop

@section('title')
Servizi
@stop

@section('content')

<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Tipo di
                        <strong>massaggio:</strong>
                    </h2>
                    <hr>
                </div>
                
                
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="../img/rilassante1.jpg"
                     title="massaggio Rilassante" alt="massaggio rilassante">
                    <h2>Rilassante
                        <br>
                        <small>2016</small>
                    </h2>
                    
                    <p>Il massaggio Rilassante <br>
                    pensato per abbattere totalmente lo stress accumulato.
                    <br><br>
                    <small>DURATA: </small>
                    <br>Parziale: 30 Min. (circa)
                    <br>Totale: 50 Min. (circa)
                    </p>
					<br>
                    <a href="/rilassante" class="btn btn-default btn-lg">Per Saperne Di Più</a>
                    <hr>
                </div>
                
                
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="../img/shiatsu.jpg"
                     title="massaggio Shiatsu" alt="massaggio shiatsu">
                    <h2>Shiatsu
                        <br><br>
                        <small>2016</small>
                    </h2>
                    
                    <p>Il massaggio Shiatsu <br>
                    per chi ha bisogno di togliersi di dosso tutta "l'incriccatura" del lavoro.
                    <br><br>
                    <small>DURATA: </small><br> 30-60 Min
                    </p>
                    <br>
                    <a href="/shiatsu" class="btn btn-default btn-lg">Per Saperne Di Più</a>
                    <hr>
                </div>
                
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="../img/reiki.jpg"
                     title="massaggio Reiki" alt="massaggio reiki">
                    <h2>Reiki
                        <br>
                        <small>2016</small>
                    </h2>
                    
                    <p>Il massaggio Reiki <br>
                    pensato per chi vuole recuperare le energie sprecate
                    durante il giorno.
                    <br><br>
                    <small>DURATA: </small>
                    <br>60 Min. (circa)
                    </p>
					<br>
                    <a href="/reiki" class="btn btn-default btn-lg">Per Saperne Di Più</a>
                    <hr>
                </div>
                
            </div>
        </div>

    </div>
    <!-- /.container -->
    
@stop