<?php
/*
    Template Name: Home Page

 */

get_header();?>

    <section id="showcase">

 
            <div id="myCarousel" class="carousel slide" data-ride="carousel" padding>
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to "0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to "1"></li>
            <li data-target="#myCarousel" data-slide-to "2"></li>
            <li data-target="#myCarousel" data-slide-to "3"></li>
            </ol>
            <div class="carousel-inner">
 
            <div class="carousel-item active">
            <picture>
                <source srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/img/1A.jpg" media="(min-width: 990px)">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/1A_sm.jpg" width="1100" height="500">
                </picture>
                <div class="container">
                    <div class="carousel-caption  d-sm-block text-left mb-5">
                        <div class="col sm-12 d-none d-md-block">
                            <h3 class="display-4">Sport Company</h3>
                        </div>
                        <div class="col sm-12">
                            <p class="lead">Gestão Esportiva Sob Medida Para Condomínios, Clubes e Hotéis.</p>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="carousel-item">
            <picture>
                <source srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/img/2A.jpg" media="(min-width: 990px)">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/2A_sm.jpg" width="1100" height="500">
                </picture>
                <div class="container">
                    <div class="carousel-caption  d-sm-block text-left mb-5">
                        <div class="col sm-12 d-none d-md-block">
                            <h3 class="display-4">Sport Company</h3>
                        </div>
                        <div class="col sm-12">
                            <p class="lead">Para Você e seu Bebê Sair da Rotina de Forma Saudável e Dentro da Segurança do seu Lar.</p>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="carousel-item">
            <picture>
                <source srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/img/3A.jpg" media="(min-width: 990px)">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/3A_sm.jpg" width="1100" height="500">
                </picture>
                <div class="container">
                    <div class="carousel-caption d-sm-block text-left mb-5">
                        <div class="col sm-12 d-none d-md-block">
                            <h3 class="display-4">Sport Company</h3>
                        </div>
                        <div class="col sm-12">
                            <p class="lead">Qualidade de Vida Sob Medida Para Todas as Idades.</p>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="carousel-item">
            <picture>
                <source srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/img/4A.jpg" media="(min-width: 990px)">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/4A_sm.jpg" width="1100" height="500">
                </picture>
                <div class="container">
                    <div class="carousel-caption d-sm-block text-left mb-5">
                        <div class="col sm-12 d-none d-md-block">
                            <h3 class="display-4">Sport Company</h3>
                        </div>
                        <div class="col sm-12">
                            <p class="lead">Sob Medida Para o Seu Filho Gastar Energia de Forma Saudável e Dentro do Seu Condomínio.</p>
                        </div> 
                    </div>
                </div>
            </div>
            </div>


            <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#myCarousel" data-slide="next" class="carousel-control-next">
                <span class="carousel-control-next-icon"></span>
            </a>
            </div>

            
    </section>

        <!-- programas-->
    <section id="programas">
        <div class="dark-overlay">
            <div class="row">
                <div class="col text-left text-white" >
                    <div class="p-3 ml-3 mr-5 ">
                        <h1>Programas Sob Medida</h1>
                        <h6 class="d-none d-md-block">Na Sport Company, você encontra profissionais qualificados para planejar e promover atividades físicas de acordo com as necessidades e infraestruturas do local, preferências, objetivos e disponibilidades do aluno. </h6>
                        <h6 class="d-none d-md-block"> O que você deseja para um estilo de vida saudável, assistido por uma equipe qualificada a Sport Company faz Sob Medida para Condomínios, Clubes, Hotéis e
                         para Você. Confira!</h6>
                           
                </div>
            </div>
        </div>
    </section>

        <!-- Galeria -->


    <section id="galeria" class="py-5">
            <div class="container">
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="div galeria text-center">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cta1.jpg" class="img-fluid"></a>
                        <div class="caption">
                            <p>Clubes/ Hotéis</p>
                        </div> 
                        <a href="http://www.sport-company.com/clubes" class="btn btn-info" role="button">Conheça Mais</a>
                    </div>             
                </div>
                <div class="col-md-4">
                    <div class="div galeria text-center">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cta2.jpg" class="img-fluid"></a>
                        <div class="caption">
                            <p>Condomínio</p>
                        </div> 
                        <a href="http://www.sport-company.com/condominio" class="btn btn-info" role="button">Conheça Mais</a>
                    </div>             
                </div>
                <div class="col-md-4">
                    <div class="div galeria text-center">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cta3.jpg" class="img-fluid"></a>
                        <div class="caption">
                            <p>Para você</p>
                        </div> 
                        <a href="http://www.sport-company.com/voce" class="btn btn-info" role="button">Conheça Mais</a>
                    </div>             
                </div>
            </div>
        </div>
    </section>

         <!-- Atividades-->
<hr class="style1">
<br>

<section id="atividades">
<div class="container">

    <div class="row">
        <div class="col-md-6 p-5">
        <h3>Atividades </h3>
        <h6 class="text-secondary">Na Sport Company, você pode contar com diversas opções de aulas para serem escolhidas e personalizadas. O plano com a grade de atividades físicas e horários fixos é montado após definição do cliente. Conosco você pode contar com profissionais atenciosos que estão prontos para contribuir sob medida com seus objetivos e a sua qualidade de vida.</h6>
            <br>
            <br>
        <a href="http://www.sport-company.com/atividades/">Veja a Grade completa</a>
        </div>
        <div class="foto-hist col-md-6 mb-5">
            <a href="http://www.sport-company.com/atividades/">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/atividades.jpg" alt="" class="about-img img-fluid rounded d-none d-md-block">
            </a>
        </div>
    </div>

</div>



</section>


<!--about section-->
    <section id="complementares">
    <div class="light-overlay">
        <div class="row">
            <div class="col text-right p-3">
                <div class="p-3 ml-25">
                    <h1>Serviços Complementares</h1>
                    <h5 class="d-none d-md-block"> Com o objetivo de proporcionar aos nossos clientes mais comodidade, reunimos em nossa empresa serviços complementares que são indispensáveis para todos que desejam melhorar os resultados do treino e buscam, além disso, boa disposição, prevenção de doenças e melhora da qualidade de vida. Tenha em suas mãos a comodidade de um centro completo! Entre em contato conosco.</h5>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="about">
        <div class="container-fluid">
            <div class="row mb-5 mt-5">
                <div class="col-lg-3 col-md-6">
                    <div class="hovereffect">
                        <img  class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/avaliacao.jpg" alt="">
                        <div class="overlay">
                            <h1 class="info">Avaliação Física</h1>
                            <h2>Importante para personalizar de maneira assertiva treinamentos e atividades. <br>Identifica condições físicas atuais, como:
                            <br>• Flexibilidade • Força
                            <br>• Resistência muscular
                            <br>• Resistência cardiorepiratória
                            <br>• Equilíbrio • Condicionamento físico
                            <br>• Percentual de gordura corporal
                            <br>para uma saúde melhor.</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="hovereffect">
                        <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/nutri.jpg" alt="">
                        <div class="overlay">
                            <h1 class="info">Avaliação Nutricional</h1>
                            <h2>Define uma nutrição apropriada para antes e depois do exercício, além de:
                            <br>• Proporcionar uma boa saúde
                            <br>• Aumentar a disposição
                            <br>• Previnir doença
                            <br>• Manter um peso corporal ideal</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="hovereffect">
                        <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fisio.jpg" alt="">
                        <div class="overlay">
                            <h1 class="info">Fisioterapeuta</h1>
                            <h2>O atendimento do nosso profissional de fisioterapia é focado:
                            <br>• Massagem para dores corporais
                            <br>• Exercícios para reabilitação </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="hovereffect">
                    <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/personal.jpg" alt="">
                        <div class="overlay">
                            <h1 class="info">Personal Trainer</h1>
                            <h2>Profissional com formação e capacitado para:
                            <br>• Acompanhar o aluno durante o períodp de treino
                            <br>• Montar as séries de exercícios assistidos.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- icon boxes-->



<!-- programas-->
<section id="mural">
    <div class="container">
        <div class="light-overlay">
            <div class="row">
                <div class="col text-left p-3">
                    <div class="p-3 ml-2">
                        <h1 class="display-4">Nosso Mural</h1>
                        <h4 class="d-none d-md-block"> Aqui você fica por dentro das nossas novidades, dicas de saúde para uma ótima qualidade de vida. Acompanhe! </h4>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>

<section id="dicas" >
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-2 py-4">
                
            </div>
            <div class="col-lg-4 py-4">
                <div class="card bg-dark" style="width:320px">
                    <div class="card-body">
                        <a class="nav-link" href="http://www.sport-company.com/noticia">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fotos.jpg" alt="" class="img-fluid rounded-circle">
                        <h3 class="text-center p-4 text-white">Dicas e Notícias</h3>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 py-4">
                <div class="card bg-dark" style="width:320px">
                    <div class="card-body">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/video.jpg" alt="" class="img-fluid rounded-circle "></a>
                        <h3 class="text-center p-4 text-white">Vídeos</h3>  
                         
                    </div>
                </div>
            </div>
            <div class="col-lg-2 py-4">
                
            </div>

        </div>
    </div>
</section>


<?php get_footer(); ?>