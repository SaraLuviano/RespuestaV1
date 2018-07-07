<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <title>PLATILLA RESPUESTA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <?php get_header(); ?>

     <section class="banner-sec">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php
		if (have_posts()) :
                                query_posts('category_name=noticia general' );
                    
   while (have_posts()) :?>
                        <div class="col-md-6 card">
                        <div class="card">
                            <div class="card-img-overlay"> <span class="badge badge-pill badge-danger"><?php the_tags(); ?></span> </div>
                           <div class="card">
                                        <div class="card-img-overlay"> <span class="badge badge-pill badge-danger"><?php the_tags(); ?></span> </div>
                                        <div class="card-body">
                                            <div class="news-title">
                                                <h2 class=" title-small">
                                                    <a href="#">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h2>
                                            </div>
                                            <p class="card-text"><small class="text-time"><em><?php the_post(); ?></em></small></p>
                                            <p class="card-text"><small class="text-time"><em><?php  the_content(); ?></em></small></p>

                                        </div>
                                    </div>
                        </div>
                         </div>
                        <?php
   endwhile;
endif;
		?>


                </div>

                <aside class="col-sm-12 side-bar col-md-4">
                    <ul class="nav nav-tabs" role="tablist" id="myTab">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Minuto a Minuto</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content sidebar-tabing" id="nav-tabContent">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main" role="main">

                                <?php
		if (have_posts()) :
                                query_posts('category_name=Minuto a minuto' );
   while (have_posts()) :?>
                                    <div class="card">
                                        <div class="card-img-overlay"> <span class="badge badge-pill badge-danger"><?php the_tags(); ?></span> </div>
                                        <div class="card-body">
                                            <div class="news-title">
                                                <h2 class=" title-small">
                                                    <a href="#">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h2>
                                            </div>
                                            <p class="card-text"><small class="text-time"><em><?php the_post(); ?></em></small></p>
                                            <p class="card-text"><small class="text-time"><em><?php  the_content(); ?></em></small></p>

                                        </div>
                                    </div>
                                    <?php
   endwhile;
endif;
		?>

                            </main>
                            <!-- .site-main -->
                        </div>

                    </div>
                </aside>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setMayor();

        });
        $(window).resize(function() {
            setMayor();
        });

        function setMayor() {
            var col1 = document.getElementById("col-1");
            var col2 = document.getElementById("col-2");
            var col3 = document.getElementById("col-3");
            var altoC1 = 0,
                altoC2 = 0,
                altoC3 = 0;
            var contenido = col1.querySelectorAll(".card");
            for (var i = 0; i < contenido.length; i++)
                altoC1 += contenido[i].offsetHeight + 20;
            var contenido = col2.querySelectorAll(".card");
            for (var i = 0; i < contenido.length; i++)
                altoC2 += contenido[i].offsetHeight + 20;
            var contenido = col3.querySelectorAll(".media");
            for (var i = 0; i < contenido.length; i++)
                altoC3 += contenido[i].offsetHeight + 20;

            if (altoC1 < altoC2) {
                if (altoC1 < altoC3) {
                    altoC1 = altoC1 + 'px';
                    col1.style.height = altoC1;
                    col2.style.height = altoC1;
                    col3.style.height = altoC1;
                } else {
                    altoC3 = altoC3 + 'px';
                    col1.style.height = altoC3;
                    col2.style.height = altoC3;
                    col3.style.height = altoC3;
                }
            } else {
                if (altoC2 < altoC3) {
                    altoC2 = altoC2 + 'px';
                    col1.style.height = altoC2;
                    col2.style.height = altoC2;
                    col3.style.height = altoC2;
                } else {
                    altoC3 = altoC3 + 'px';
                    col1.style.height = altoC3;
                    col2.style.height = altoC3;
                    col3.style.height = altoC3;
                }
            }
        }

    </script>
</body>

</html>
