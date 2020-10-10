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
    <link rel="shortcut icon" href="vtb.jpg"/>


    <title>ВТБ личный кабинет</title>
</head>
<body>

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


                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
                           href="#list-home" role="tab" aria-controls="home">Мои карты</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                           href="#list-profile" role="tab" aria-controls="profile">История операций</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                           href="#list-messages" role="tab" aria-controls="messages">Мои устройства</a>
{{--                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"--}}
{{--                           href="#list-settings" role="tab" aria-controls="settings">Выполнить перевод</a>--}}
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                             aria-labelledby="list-home-list">

                            <div class="row">
                                @foreach($cards as $card)
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-9">
                                                    <img class="card-img-top" src="img/card1.png" alt="Card image cap">
                                                </div>
                                                <div class="col-3">
                                                    <div class="dropdown">
                                                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle"
                                                                type="button" id="menu1" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"></button>
                                                        <div class="dropdown-menu" aria-labelledby="menu1">
                                                            <a class="dropdown-item"
                                                               href="/card/{{$card['id']}}/settings">Политика
                                                                безопасности</a>
                                                            <a class="dropdown-item" data-toggle="modal"
                                                               data-target="#exampleModal"> Выполнить перевод </a>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                                         role="dialog" aria-labelledby="exampleModalLabel"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Перевод</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">

                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <hr/>
                                                                <form method="POST" action="{{ '/transactions' }}">
                                                                    @csrf
                                                                    <div class="modal-body">


                                                                        <input name="source_id" type="number"
                                                                               class="form-control" id="source_id"
                                                                               value="{{ $card['id'] }}"
                                                                               style="display:none;">

                                                                        {{--                                                                    <input type="number" class="form-control" id="exampleInputSum" placeholder="руб">--}}

                                                                        <div class="form-group row">
                                                                            <label for="money"
                                                                                   class="col-sm-4 col-form-label">Сумма</label>
                                                                            <div class="col-sm-8">
                                                                                <input name="money" type="number"
                                                                                       class="form-control" id="money"
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
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>


                                            <div class="card-body">
                                                <h5 class="card-title">Дебетовая карта</h5>
                                                номер карты: {{$card['number']}}
                                                Срок действия: {{ $card['expired'] }}
                                                Средства: {{ $card['money'] }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel"
                             aria-labelledby="list-profile-list">

                            <div class="list-group">
                                @foreach($transactions as $transaction)
                                    <div class="row">

                                        <div class="col-10">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">Перевод клиенту Сбербанка</h5>
                                                    <small>3 часа назад</small>
                                                </div>
                                                <p class="mb-1">Сумма:
                                                    <mark>{{$transaction['money']}} р.</mark>
                                                    <br> С Карты: {{$cardSearcher[$transaction['source_id']]['number']}}
                                                    <br> На карту {{$cardSearcher[$transaction['target_id']]['number']}}
                                                </p>
                                                <!--     <small>Если Вы не совершали операцию, позвоните по номеру: 223-322-32</small>
                                                -->      </a>
                                        </div>

                                        <div class="col-2">
                                            @if (is_null($transaction['status']) || $transaction['status'] == 'ok')
                                            <a href="/transaction/{{$transaction['id']}}/danger" class="badge badge-secondary">Обман</a>
                                            @else
                                            <a href="#" class="badge badge-danger">Обман</a>
                                                <span class="badge badge-warning">Заявка обрабатывается</span>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-messages" role="tabpanel"
                             aria-labelledby="list-messages-list">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col-2">#</th>
                                            <th scope="col-2">Тип</th>
                                            <!--    <th scope="col-4">Модель</th> -->
                                            <th scope="col-4">MAC-адрес</th>
                                            <th>Удалить</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="all">
                                            <th scope="row">1</th>
                                            <td>
                                                <img src="img/zz.jpg">
                                            </td>
                                            <!--  <td>Xiaomi Redmi Note 9 pro</td> -->
                                            <td>50-46-5D-6E-8C-20</td>
                                            <td>

                                                <button type="button" class="btn btn-outline-secondary"><i
                                                        class="fas fa-map"></i><img src="img/trash.png"></button>
                                            </td>
                                        </tr>
                                        <tr class="all">
                                            <th scope="row">2</th>
                                            <td>
                                                <img src="img/scer.jpg">
                                            </td>
                                            <!--  <td>Acer aspire 5750g</td> -->
                                            <td>11-16-2Y-9E-8C-20</td>
                                            <td>
                                                <button type="button" class="btn btn-outline-secondary"><i
                                                        class="fas fa-map"></i><img src="img/trash.png"></button>
                                            </td>
                                        </tr>
                                        <tr class="all">
                                            <th scope="row">3</th>
                                            <td><img src="img/sams.jpeg"></td>
                                            <!-- <td>Samsung A50</td> -->
                                            <td>40-32-1P-1G-8C-20</td>
                                            <td>
                                                <button type="button" class="btn btn-outline-secondary"><i
                                                        class="fas fa-map"></i><img src="img/trash.png"></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-outline-success">Добавить устройство</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-settings" role="tabpanel"
                             aria-labelledby="list-settings-list">

                            <h4>Денежный перевод на банковскую карту</h4>
                            <p>Срок зачисления от нескольких минут до 5-ти рабочих дней</p>
                            <hr/>
                            <form>
                                <h5>Параметры перевода</h5>

                                <div class="form-group row">
                                    <label for="exampleInputSum" class="col-sm-4 col-form-label">Сумма</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="exampleInputSum">руб.
                                    </div>
                                </div>
                                <hr/>
                                <h5>Данные получателя</h5>
                                <div class="form-group row">
                                    <label for="exampleInputNom" class="col-sm-4 col-form-label">Номер карты</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="exampleInputNom"
                                               placeholder="xxxx xxxx xxxx xxxx">
                                    </div>
                                </div>

                                <hr/>
                                <h5>Данные отправителя</h5>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Номер телефона</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="phone form-control" id="inputEmail3">
                                    </div>
                                </div>


                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Я не бот:)</label>
                                </div>
                                <button type="submit" class="btn btn-success">Перевести</button>
                            </form>


                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="col-4" id="sideBarc">

            <!-- Таймер + сообщение -->
            <div class="alert alert-info " role="alert">
                До смены пароля осталось:
                <hr/>


                <!-- Таймер -->
                <div id="countdown" class="countdown">
                    <div class="countdown-number">
                        <span class="days countdown-time"></span>
                        <span class="countdown-text">Days</span>
                    </div>
                    <div class="countdown-number">
                        <span class="hours countdown-time"></span>
                        <span class="countdown-text">Hours</span>
                    </div>
                    <div class="countdown-number">
                        <span class="minutes countdown-time"></span>
                        <span class="countdown-text">Minutes</span>
                    </div>
                    <div class="countdown-number">
                        <span class="seconds countdown-time"></span>
                        <span class="countdown-text">Seconds</span>
                    </div>
                </div>

            </div>

            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#changePas">Изменить пароль</button>

            <!-- <button type="button" class="btn btn-outline-secondary float-right" id="hidBar" onclick="hideBar()">Напомнить позже</button>
             -->
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Напомнить позже
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="#" onclick="hideBar()">через месяц</a>
                    <a class="dropdown-item" href="#" onclick="hideBar()">через неделю</a>
                    <a class="dropdown-item" href="#" onclick="hideBar()">через час</a>
                </div>
            </div>

            <div class="modal fade" id="changePas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Установить новый пароль</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form">
                            <div class="form-group row">
                                <label for="pasOld" class="col-sm-4 col-form-label col-form-label-sm">Текущий пароль</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="pasOld" aria-describedby="passwordHelpInlineOld">

                                    <small id="passwordHelpInlineOld" class="text-muted">
                                        Укажите Ваш текущий пароль
                                    </small>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="pasNew" class="col-sm-4 col-form-label col-form-label-sm">Новый пароль</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="pasNew" aria-describedby="passwordHelpInline">
                                    <small id="passwordHelpInline" class="text-muted">
                                        Пароль должен состоять из 5-16 символов
                                    </small>

                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="pasNewRep" class="col-sm-4 col-form-label col-form-label-sm">Подтверждение</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="pasNewRep" aria-describedby="passwordHelpInline2">
                                    <small id="passwordHelpInline2" class="text-muted">
                                        Пароли должны совпадать
                                    </small>

                                </div>
                            </div>



                            </form"></div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                            <button type="button" class="btn btn-success" onclick="validateNewPas()">Изменить</button>

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
<script type="text/javascript" src="js/dashboard.js"></script>

</body>
</html>
