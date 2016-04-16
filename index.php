<?php include "header.php"; ?>
 <!--Perfil--> 
 <section id="perfil">
 	<div class="perfil-home">
 		<div class="foto-perfil">
 			<a href="#"><img src="img/content/foto-perfil.jpg" alt="Footo-perfil"></a>
 		</div>
 		<div class="info-perfil-home">
 			<h1 id="titulo-perfil">
 				<strong>< Marlon Henrique da Silva /></strong>
 			</h1>
 			<h2 class="icone-perfil">
 				------------ <span class="glyphicon glyphicon-hand-down"></span> ------------
 			</h2>
 			<h3 class="info-perfil">
 				Programador web <strong>NiggaByte</strong>, Diretor de projetos <strong>Provisão</strong>
 			</h3>
 		</div>
 	</div>
 </section>
<!--Fim Perfil-->

<!-- Sobre mim-->
<section id="sobre-mim">
 	<div class="sobre-mim-home">
 		<h1 class="title-sobre-home">
 			Sobre mim
 		</h1>
 		<p class="sobre-home">
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore magni dolor consequuntur odit, minima nam optio autem reiciendis? Corporis quam error perferendis, repudiandae nemo dolor qui nostrum non delectus maiores.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, dignissimos, sit earum id asperiores ex harum. Eveniet aliquid in aperiam assumenda odio quod, eum, laboriosam alias veniam enim dolorum! Esse.
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, maiores quasi. Officiis odit similique incidunt aut, laudantium et ea officia. Debitis fugit odio quam consectetur quia similique ex alias, commodi.
 		</p>
 	</div>
 </section>
<!--Fim sobre mim-->

<!--Portifolio-->
<section id="portifolio">
 	<div class="portifolio-home">
 		<div class="container">
 			<?php $cont = 0; while ($cont <= 5): ?>
 				<div class="col-md-3" id="caixas-portifolio">
 					<a href="#" id="port-home"><img src="img/content/foto-perfil.jpg" alt="foto portifolio" id="foto-portifolio"></a>
 					<h3 id="nome-projeto-portifolio">Nome do projeto!</h3>
 				</div>
 			<?php $cont++; endwhile; ?>	
 		</div>
 	</div>
 </section>
<!--Fim portifolio--> 

<?php include "footer.php"; ?>