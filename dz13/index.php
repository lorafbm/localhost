<?php
error_reporting(-1);
ini_set('display_errors', 1);
header('Content-type: text/html; charset=utf-8'); ?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>dz13</title>
    <script src="/dz13/vendor/public/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="/dz13/vendor/public/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/dz13/vendor/public/bootstrap/dist/css/bootstrap-theme.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/dz13/css/style.css">
    <script src="/dz13/vendor/public/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
<!--<div class="alert alert-success" role="alert">
    <span class="glyphicon glyphicon-ok" aria-hidden="true">  Новость добавлена!
</div>-->
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CMS сайта</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Помощь <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Настройки <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Выход</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="row">
        <div class="col-md-2 col-sm-2">
            <ul class="nav nav-pills nav nav-stacked">
                <li role="presentation" class="active"><a href="#">Главная</a></li>
                <li role="presentation"><a href="#">Товары</a></li>
                <li role="presentation"><a href="#">Книги</a></li>
                <li role="presentation"><a href="#">Пользователи</a></li>
                <li role="presentation"><a href="#">Новости</a></li>

            </ul>
        </div>
        <div class="col-md-10 col-sm-10">

            <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign
" aria-hidden="true"></span>&nbsp;&nbsp;Новый товар</a>
            <table class="table table-striped">
                <tr class="bg-info">
                    <th></th>
                    <th>ID</th>
                    <th>Изображение</th>
                    <th>Наименование товара</th>
                    <th>Артикул</th>
                    <th>Описание</th>
                    <th>Цена</th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Поиск...">
                            <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Искать!</button>
                    </span>
                        </div><!-- /input-group -->
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>25</td>
                    <td><img src="/dz13/img/image009.png" width="80px" class="thumbnail"></td>
                    <td>Плитка тротуарная</td>
                    <td>25-пп</td>
                    <td>Плитка тротуарная 125*125 микс</td>
                    <td>125,00</td>
                    <td><a href="#" class="glyphicon glyphicon-pencil"></a></td>
                    <td><a href="#" class="glyphicon glyphicon-remove" data-toggle="modal" data-target="#myModal"></a>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>26</td>
                    <td><img src="/dz13/img/image011.png" width="80px" class="thumbnail"></td>
                    <td>Плитка тротуарная</td>
                    <td>26-пп</td>
                    <td>Плитка тротуарная 125*125 микс</td>
                    <td>125,00</td>
                    <td><a href="#" class="glyphicon glyphicon-pencil"></a></td>
                    <td><a href="#" class="glyphicon glyphicon-remove" data-toggle="modal" data-target="#myModal"></a>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>27</td>
                    <td><img src="/dz13/img/image013.png" width="80px" class="thumbnail"></td>
                    <td>Плитка тротуарная</td>
                    <td>27-пп</td>
                    <td>Плитка тротуарная 125*125 микс</td>
                    <td>125,00</td>
                    <td><a href="#" class="glyphicon glyphicon-pencil"></a></td>
                    <td><a href="#" class="glyphicon glyphicon-remove" data-toggle="modal" data-target="#myModal"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>28</td>
                    <td><img src="/dz13/img/image015.png" width="80px" class="thumbnail"></td>
                    <td>Плитка тротуарная</td>
                    <td>28-пп</td>
                    <td>Плитка тротуарная 125*125 микс</td>
                    <td>125,00</td>
                    <td><a href="#" class="glyphicon glyphicon-pencil"></a></td>
                    <td><a href="#" class="glyphicon glyphicon-remove" data-toggle="modal" data-target="#myModal"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>29</td>
                    <td><img src="/dz13/img/image019.png" width="80px" class="thumbnail"></td>
                    <td>Плитка тротуарная</td>
                    <td>29-пп</td>
                    <td>Плитка тротуарная 125*125 микс</td>
                    <td>125,00</td>
                    <td><a href="#" class="glyphicon glyphicon-pencil"></a></td>
                    <td><a href="#" class="glyphicon glyphicon-remove" data-toggle="modal" data-target="#myModal"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>30</td>
                    <td><img src="/dz13/img/image025.png" width="80px" class="thumbnail"></td>
                    <td>Плитка тротуарная</td>
                    <td>30-пп</td>
                    <td>Плитка тротуарная 125*125 микс</td>
                    <td>125,00</td>
                    <td><a href="#" class="glyphicon glyphicon-pencil"></a></td>
                    <td><a href="#" class="glyphicon glyphicon-remove" data-toggle="modal" data-target="#myModal"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>31</td>
                    <td><img src="/dz13/img/image027.png" width="80px" class="thumbnail"></td>
                    <td>Плитка тротуарная</td>
                    <td>31-пп</td>
                    <td>Плитка тротуарная 125*125 микс</td>
                    <td>125,00</td>
                    <td><a href="#" class="glyphicon glyphicon-pencil"></a></td>
                    <td><a href="#" class="glyphicon glyphicon-remove" data-toggle="modal" data-target="#myModal"></td>
                </tr>
            </table>
            <input type="button" value="Удалить" data-toggle="modal" data-target="#myModal" style="margin: 10px;"
                   class="btn btn-danger">
            </form>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Удаление</h4>
                        </div>
                        <div class="modal-body">
                            Вы уверены?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
                            <button type="button" class="btn btn-primary">Да</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>

