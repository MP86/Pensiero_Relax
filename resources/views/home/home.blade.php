@extends('master')


@section('seo')
	<meta name="description" content="Massaggi Shiatsu e rilassanti anche a casa tua. I motivi di questo sito.">
    <meta name="author" content="Pensiero Relax - MP86">
@stop

@section('title')
Home
@stop

@section('content')

	<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
					
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="../img/slide1.jpg" alt="massaggio rilassante">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="../img/slide2.jpg" alt="massaggio shiatsu">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="../img/slide3.jpg" alt="sala massaggio">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
						<br> <small> o </small> <br>
						<small>Benvenuti in</small>
                    </h2>
                    <h1 class="brand-name">Pensiero Relax</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Andrea Bilotto e Matteo Pretolani</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Idea di fondo:
                        <strong>Perchè un sito?!?</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="../img/relax.jpg" alt="scritta relax">
                    <hr class="visible-xs">
                    <p>Il sito è stato pensato per voi.... I "gran stressati" che cercano un massaggio. Magari anche last-minute.</p>
                    <p>Perchè oggi il loro stress sta arrivando alle stelle e sanno che quel che gli ci vuole è un pò di relax.</p>
                    <p>Allora cosa aspetti?!? <a href="/contatti"><strong>Contattaci!!!!</strong></a> </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Il motivo:
                        <strong>Sceglierci perchè?!?</strong>
                    </h2>
                    <hr>
                    <p>Siamo professionisti che offrono un servizio anche a domicilio.</p>
                    <p>Questo perchè non essendo una spa rilassante, pensiamo che il cliente possa essere più rilassato a casa propria.
					Piuttosto che, appena usciti dal lavoro, andarsi a far fare un massaggio, cercando parcheggio chissà dove rischiando
					di fare tardi o comunque stressarsi ancor di più! In ogni caso se in studio o a casa lo decidete voi l'importante,
					per noi, è che siate a vostro agio.</p>
					<hr>
					<img class="img-responsive img-border img-center" src="../img/zen.jpg" alt="pietre zen">
					<hr>
					<h3><strong>I massaggi a casa vostra, in tutta la provincia di Forlì-Cesena (FC)</strong></h3>
					<hr>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
    
@stop

