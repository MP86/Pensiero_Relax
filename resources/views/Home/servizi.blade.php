@extends('master')


@section('seo')
	<meta name="description" content="Massaggi Shiatsu e rilassanti anche a casa tua. 
	I servizi che ti possiamo offrire e a che prezzo.">
    <meta name="author" content="Pensiero Relax - MP86">
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
                    <img class="img-responsive img-border img-full" src="../img/slide1.jpg" alt="massaggio rilassante">
                    <h2>Rilassante
                        <br>
                        <small>2016</small>
                    </h2>
                    
                    <p>Il massaggio rilassante <br>
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
                    <img class="img-responsive img-border img-full" src="../img/slide2.jpg" alt="massaggio shiatsu">
                    <h2>Shiatsu
                        <br><br>
                        <small>2016</small>
                    </h2>
                    
                    <p>Il massaggio shiatsu <br>
                    per chi ha bisogno di togliersi di dosso tutta "l'incriccatura" del lavoro.
                    <br><br>
                    <small>DURATA: </small><br> 30-60 Min
                    </p>
                    <br>
                    <a href="/shiatsu" class="btn btn-default btn-lg">Per Saperne Di Più</a>
                    <hr>
                </div>
                
            </div>
        </div>

    </div>
    <!-- /.container -->
    
@stop