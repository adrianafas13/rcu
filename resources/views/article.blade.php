@extends('layouts.generallayout')
	
@section('content')


<div class="container-fluid">
	<div class="article">
	
		<div class="row">
			<div class="col-md-2 col-sm-3 text-right" id="content_bar_left">
                <div class="flecha">
					<br>
                    <b><h2>►</h2></b>
                 </div>
                 <br>

                 <div class="info-container">
                 <br>
				    <div class="info-article">
                        <ul class="date-article" id="container_color">
                            <p><b>Fecha</b></p>
                            <p>01/01/2020</p>
                        </ul>
                        <br>
                        <ul class="section-article" id="container_color">
                            <p><b>Sección</b></p>
                            <p>Derecho</p>
                        </ul>
                        <br>
                        <ul class="author-article" id="container_color">
                            <p><b>Autor</b></p>
                            <p>Adriana Aguilar </p>
                        </ul>
                    </div>
					<br>
				</div>	
			</div>


			<div class="col-md-9 col-sm-3">
			<br>
                <div class="title-article">
					<h2><b>Titulo del Artículo</b></h2>
                    <br>
				</div>

				<div class="img-article">
					<img src="img/imagen1.png">
				</div>

				<div class="info-img">
					<i><small class="text-muted">información de la imagen</small></i>
				</div>
				<br>
				<div class="title-resume-article">
					<p><b><i>Resumen:</i></b></p>
				</div>
				<div class="resume-article">
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
				</div>

				
				<div class="button-article">
					<button type="button" class="btn btn-success" href="#"><i class="fas fa-download"></i> Descargar Artículo</button>
				</div>
				<br>
				
			</div>

		</div>

	</div>
</div>
		<div class=".container-xl">
			<div class="background-comment">
				<div class="row">
					<div class="col-1"></div>
					<div class="col-10">
                        <br>
                        <div class="comment-area">
								<h5>¡Deja tú comentario!</h5>
								<form action="#" method="POST">
									
									<textarea type="text" class="form-control" name="comment" placeholder="..." style="height:75px; width:100%; margin-bottom: 5px;"></textarea>
									<input class="btn btn-primary" type="submit" value="publicar" style="float: right">
								</form>
							</div>
						
						<br>
						<div class="posted-comment-area">
                        <br>
							<h5>Comentarios anteriores</h5>
							<hr>
							<h6>user</h6>
							<p><i>comment</i></p>
						</div>

					</div>
					<div class="col-1"></div>
				</div>
			</div>
		</div>
	
@endsection