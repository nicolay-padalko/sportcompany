<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sport_Company
 */


?>


<hr class="style1">
<br>

<section id="contact" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>Contato</h3>
                 <p class="lead">Para mais informações entre em contato</p>
                <form>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-user" style="font-size:30px"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Nome">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-home" style="font-size:30px"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Bairro">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope " style="font-size:30px"></i>
                            </span>
                            <input type="email" class="form-control" placeholder="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-phone" style="font-size:30px"></i>
                            </span>
                            <input type="email" class="form-control" placeholder="telefone">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-pencil" style="font-size:30px"></i>
                            </span>
                            <textarea class="form-control" placeholder="Menssagem" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <input type="submit" value="enviar" class="btn btn-primary btn-block btn-lg">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 align-self-center">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-gr.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!--post modal-->

<div class="modal fade" id="logInModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title">Log In</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="title">Nome</label>
                            <input type="text" class="form-control">
                        </div>
                    </form>
                    <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control">
                        </div>
                    </form>
                    <form>
                        <div class="form-group">
                            <label for="title">Senha</label>
                            <input type="password" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">fechar</button>
                <button class="btn btn-warning" data-dismiss="modal">Enviar</button>
            </div>
        </div>
    </div>
</div>



<footer id="main-footer" class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3">
                <p class="lead">Copyright Sport-Company &copy; 2018</p>
            </div>
            <div class="col-md-3">  
                <i class="fa fa-facebook-official" style="font-size:48px"></i>
            </div>
            <div class="col-md-3">
                <i class="fa fa-instagram" style="font-size:48px"></i>
            </div>
            <div class="col-md-3">
                <i class="fa fa-youtube" style="font-size:48px"></i>
            </div>
        </div>
    </div>
</footer>


<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
