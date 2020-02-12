<?php
/*
    Template Name: noticia Page

 */

get_header(); ?>


<!-- programas-->
    <section id="historia">
        <div class="dark-overlay">
            <div class="row">
                <div class="col text-left text-white">
                    <div class="py-3 p-5 ml-5 mr-5">
                        <h1 class="display-4">Dicas e Notícias</h1>
                        <h5>A Sport Company </h5>
                    </div>
                </div>
            </div>

        </div>
    </section>


   


    <!-- Galeria -->


    <!--about section-->
    <section id="nshist">
                       
        <hr class="style1">
        <br>
        <div class="container">

            
                           <?php $custom_query = new WP_Query('cat==noticias'); 
                            while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php the_content(); ?>
	</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
                            

             
        </div>
    </section>

    <!-- icon boxes-->

<!--
    <section id="historia-boxes">
        <div class="container">
            <div class="row">
                    <div class="col-md-12 p-2">
                        <div class="historiaa card text-justify text-white" style="">
                            <div class="card-body" style="height:100dp">
                                <h5>Sport Company gestão esportiva sob medida para hotéis, clubes e condomínios, promovendo projetos orientados a prática de hábitos saudáveis.</h5> <br>
                        
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <section id="nshist">
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-12 p-2">
                    <h5 > Razão de Existir: </h5>
                    <h6 class="text-secondary"> Garantir a satisfação dos clientes na entrega de serviços esportivos proporcionando bem estar, saúde e alegria.</h6>
                </div>

                 <div class="col-md-12 p-2">
                    <h5 > Para o Futuro: </h5>
                    <h6 class="text-secondary"> Ser referência em excelência no ramo em que atua e de geração de  valor para os clientes, sociedade e colaboradores.</h6>
                </div>
            </div>
        </div>
    </section>


-->

    <?php get_footer(); ?>