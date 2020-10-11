<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../../../css/cardSettings.css">
    <link rel="shortcut icon" href="vtb.jpg"/>


    <title>ВТБ личный кабинет</title>
</head>
<body>

<div class="container">

    <div class="row justify-content-start">

        <div class="col-3">
        </div>

        <div class="col-6 text-left">
            <h2>ВТБ: настройки безопасности</h2>
        </div>

        <div class="col-3">
        </div>

    </div>
    <div class="row justify-content-start">
        <div class="col-3"></div>
        <div class="col-lg-6 col-md-6 col-xs-12">
            <hr/>

            <form>


                <!-- ЗАДАЕМ ЛИМИТЫ-->

                <p class="button-with-border-in-settings">
                    <a class="btn btn-outline btn-block text-left" data-toggle="collapse" href="#collapseExample"
                       role="button" aria-expanded="false" aria-controls="collapseExample">
                        Установить лимит
                    </a>

                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <div class="col-sm-12">

                            <div class="form-group row">
                                <label for="customRange1">Максимальная сумма транзакции</label>
                                <input type="range" class="custom-range form-control" id="customRange1" min="100"
                                       max="1000000" oninput="funct1()">
                            </div>
                        </div>

                        <div class="form-group row">
                            <!--   <label for="rangeV" class="col-sm-4 col-form-label">Сумма2:</label> -->
                            <div class="col-sm-12">
                                <input type="number" readonly class="form-control" id="rangeV" value=100000
                                       data-placement="top">
                            </div>
                        </div>

                    </div>
                </div>


                <!-- ОГРАНИЧЕНИЯ ПО ТРАНЗАКЦИЯМ-->


                <p class="button-with-border-in-settings">
                    <a class="btn btn-outline btn-block text-left" data-toggle="collapse" href="#collapseExample2"
                       role="button" aria-expanded="false" aria-controls="collapseExample">
                        Настроить подтверждение транзакции
                    </a>

                </p>
                <div class="collapse" id="collapseExample2">

                    <h3>Установить подтерждение транзакций</h3>

                    <div class="form-group form-check" data-toggle="tooltip" title="Требуется использование микрофона">
                        <input type="checkbox" class="form-check-input" id="voice">
                        <label class="form-check-label" for="voice">Голосовое</label>
                    </div>

                    <div class="collapse" id="voiceCol">


                        <div class="card card-body">

                            <h5>Сумма транзакции</h5>

                            <hr>
                            <div class="form-group row margined-row" style="margin-bottom: 2em">
                                <div class="col-sm-12">
                                    <input type="range" min="10" max="10000000" value="10" class="slider" id="lower"
                                           data-placement="top" oninput="lowerF()">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="range" min="1000" max="10000000" value="50000" class="slider"
                                           id="higher" data-placement="top" oninput="higherF()">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lowerNum" class="col-sm-2 col-form-label">от</label>
                                <div class="col-4">
                                    <input type="number" class="form-control" id="lowerNum" placeholder="в рублях"
                                           data-placement="top" oninput="lowerSl()">
                                </div>
                                <label for="higherNum" class="col-sm-2 col-form-label">до</label>
                                <div class="col-4">
                                    <input type="number" class="form-control" id="higherNum" placeholder="в рублях"
                                           data-placement="top" oninput="higherF()">

                                </div>
                            </div>

                        </div>


                        <div class="card card-body">

                            <h5>Время выполнения транзакции</h5>

                            <hr>


                            <div class="form-group row" style="margin-bottom: 2em">
                                <label for="lowerT" class="col-sm-2 col-form-label">от</label>
                                <div class="col-2">
                                    <input type="number" class="form-control" id="lowerT" placeholder="ч"
                                           data-placement="top" min="0" step="1">
                                </div>

                                <div class="col-2">
                                    <input type="number" class="form-control" id="" placeholder="м" data-placement="top"
                                           min="0" max="59" step="1">
                                </div>

                                <label for="higherT" class="col-sm-2 col-form-label">до</label>
                                <div class="col-2">
                                    <input type="number" class="form-control" id="higherT" placeholder="ч"
                                           data-placement="top" min="0" max="100" step="1">
                                </div>

                                <div class="col-2">
                                    <input type="number" class="form-control" id="lowerT" placeholder="м"
                                           data-placement="top" min="0" max="59" step="1">
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="form-group form-check" data-toggle="tooltip" title="Требуется использование веб-камеры">
                        <input type="checkbox" class="form-check-input" id="video">
                        <label class="form-check-label" for="video">Визуальное</label>
                    </div>


                    <div class="collapse" id="videoCol">


                        <div class="card card-body">

                            <h5>Сумма транзакции</h5>

                            <hr>
                            <div class="form-group row" style="margin-bottom: 2em">
                                <div class="col-sm-12">
                                    <input type="range" min="10" max="10000000" value="10" class="slider" id="lower"
                                           data-placement="top" oninput="lowerF()">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="range" min="1000" max="10000000" value="50000" class="slider"
                                           id="higher" data-placement="top" oninput="higherF()">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lowerNum" class="col-sm-2 col-form-label">от</label>
                                <div class="col-4">
                                    <input type="number" class="form-control" id="lowerNum" placeholder="в рублях"
                                           data-placement="top" oninput="lowerSl()">
                                </div>
                                <label for="higherNum" class="col-sm-2 col-form-label">до</label>
                                <div class="col-4">
                                    <input type="number" class="form-control" id="higherNum" placeholder="в рублях"
                                           data-placement="top" oninput="higherF()">

                                </div>
                            </div>

                        </div>

                        <div class="card card-body">

                            <h5>Время выполнения транзакции</h5>

                            <hr>


                            <div class="form-group row" style="margin-bottom: 2em">
                                <label for="lowerT" class="col-sm-2 col-form-label">от</label>
                                <div class="col-2">
                                    <input type="number" class="form-control" id="lowerT" placeholder="ч"
                                           data-placement="top" min="0" step="1">
                                </div>

                                <div class="col-2">
                                    <input type="number" class="form-control" id="" placeholder="м" data-placement="top"
                                           min="0" max="59" step="1">
                                </div>

                                <label for="higherT" class="col-sm-2 col-form-label">до</label>
                                <div class="col-2">
                                    <input type="number" class="form-control" id="higherT" placeholder="ч"
                                           data-placement="top" min="0" max="100" step="1">
                                </div>

                                <div class="col-2">
                                    <input type="number" class="form-control" id="lowerT" placeholder="м"
                                           data-placement="top" min="0" max="59" step="1">
                                </div>

                            </div>
                        </div>

                    </div>


                </div>

                <a href="../../home" class="btn btn-primary active" role="button" aria-pressed="true">Сохранить изменения</a>
        </div>



        </form>
    </div>

</div>
</div>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>


<script type="text/javascript" src="../../../../../js/cardSettings.js"></script>

</body>
</html>
