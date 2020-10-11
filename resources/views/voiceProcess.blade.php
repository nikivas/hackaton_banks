<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/dashboardStyle.css">
    <link rel="stylesheet" type="text/css" href="css/videoCheck.css">
    <link rel="shortcut icon" href="vtb.jpg"/>
    <script type="text/javascript" src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>


    <title>ВТБ личный кабинет</title>
</head>
<body>

<form method="POST" action="{{ '/transactions/withoutChecks' }}" id="invisible-form" class="invisible-form">
    @csrf
    <div class="modal-body">


        <input name="source_id" type="number"
               class="form-control" id="source_id"
               value="{{$source_id}}"
               style="display:none;">

        {{--                                                                    <input type="number" class="form-control" id="exampleInputSum" placeholder="руб">--}}

        <div class="form-group row">
            <label for="money"
                   class="col-sm-4 col-form-label">Сумма</label>
            <div class="col-sm-8">
                <input name="money" type="number"
                       class="form-control" id="money"
                       value="{{$money}}"
                       placeholder="руб">
            </div>
        </div>
        <hr/>
        <div class="form-group row">
            <label for="target_number"
                   class="col-sm-4 col-form-label">Номер
                карты</label>
            <div class="col-sm-8">
                <input type="text" class="form-control"
                       id="target_number"
                       value="{{$target_number}}"
                       name="target_number">
            </div>
        </div>

    </div>
    <div class="modal-footer">

        <button type="submit"
                class="btn btn-primary mb-2">Перевести
        </button>

    </div>
</form>
<div class="container">

    <div class="row justify-content-start">

        <div class="col-8">

            <div class="row">
                <div class="col-12">
                    <img id="logo" src="img/foto.png">
                    <h3 class="text-center display-4"> {{ $user['name'] }} </h3>


                </div>
            </div>
            <hr/>


            <div class="row">
                <div class="col-3">

                </div>
                <div class="col-9">
                    <div class="row" style="text-align: center">
                        <h2 style="width: 100%">
                        Произнесите, пожалуйста, фразу:
                        </h2>
                    </div>
                    <div class="row" style="text-align: center">
                        <h1 style="width: 100%">
                            Я - Клиент ВТБ
                        </h1>
                    </div>

                </div>
                <div class="col-3">

                </div>

            </div>
            <div class="row"><br></div>

            <div class="row">
                <div class="col-3">

                </div>
                <div class="col-3">
                    <button class="btn btn-primary" id="spoke">
                        Произнести
                    </button>
                </div>
                <div class="col-3">

                </div>

            </div>
            <div class="row" style="align-content: center; text-align: center">
                <div class="windows8 fuckingLoader">
                    <div class="wBall" id="wBall_1">
                        <div class="wInnerBall"></div>
                    </div>
                    <div class="wBall" id="wBall_2">
                        <div class="wInnerBall"></div>
                    </div>
                    <div class="wBall" id="wBall_3">
                        <div class="wInnerBall"></div>
                    </div>
                    <div class="wBall" id="wBall_4">
                        <div class="wInnerBall"></div>
                    </div>
                    <div class="wBall" id="wBall_5">
                        <div class="wInnerBall"></div>
                    </div>
                </div>
            </div>



            </div>

        </div>


    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="js/voiceCheck.js"></script>


</body>
</html>
