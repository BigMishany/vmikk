<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Построения графика</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- graph_module -->
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../lib/excanvas.js"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="/js/jquery.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.colorhelpers.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.coordinate.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.navigate.js"></script>
    <script language="javascript" type="text/javascript" src="/js/lib_math.js"></script>
    <script language="javascript" type="text/javascript" src="/js/math.js"></script>
    <script type="text/javascript">



        $(function () {
            var data = [];

            var options = {
                grid: {
                    show: true,
                    borderColor: "#000",
                    borderWidth: 0,
                    aboveData: true
                },
                coordinate: {
                    type: "auto",
                    ratioXY: 1
                },
                zoom: {
                    interactive: true
                },
                pan: {
                    interactive: true
                },
                series: {
                    lines: {show: true},
                    points: {show: true}
                },
                grid: {
                    hoverable: true,
                    clickable: true
                },
            };
            $("<div id='tooltip'></div>").css({
                position: "absolute",
                display: "none",
                border: "1px solid #fdd",
                padding: "2px",
                "background-color": "#fee",
                opacity: 0.80
            }).appendTo("body");

            $('#sinus').bind('click',function () {
                var a = Number($('#a').val());
                var b = Number($('#b').val());
                var col = Number($('#col').val());
                $('#current').text('Синус')
                data = [
                    $.sinus(a,b,col),
                ];
                console.log(data);
                $.plot("#canvas-wrapper", data, options);

            });
            $('#cosinus').bind('click',function () {
                var a = Number($('#a').val());
                var b = Number($('#b').val());
                var col = Number($('#col').val());
                $('#current').text('Косинус')
                data = [
                    $.cosinus(a,b,col),
                ];
                console.log(data);
                $.plot("#canvas-wrapper", data, options);

            });
            $('#sqr').bind('click',function () {
                var a = Number($('#a').val());
                var b = Number($('#b').val());
                var col = Number($('#col').val());
                $('#current').text('Y=X^2')
                data = [
                    $.sqr(a,b,col),
                ];
                console.log(data);
                $.plot("#canvas-wrapper", data, options);

            });



            $('#sqr3').bind('click',function () {
                var a = Number($('#a').val());
                var b = Number($('#b').val());
                var col = Number($('#col').val());
                $('#current').text('Y=X^3')
                data = [
                    $.sqr33(a,b,col),
                ];
                console.log(data);
                $.plot("#canvas-wrapper", data, options);

            });

            $('#expan').bind('click',function () {
                var a = Number($('#a').val());
                var b = Number($('#b').val());
                var col = Number($('#col').val());
                $('#current').text('Y=X^2')
                data = [
                    $.expanen(a,b,col),
                ];
                console.log(data);
                $.plot("#canvas-wrapper", data, options);

            });

            $('#lnn').bind('click',function () {
                var a = Number($('#a').val());
                var b = Number($('#b').val());
                var col = Number($('#col').val());
                $('#current').text('Y=ln(x)')
                data = [
                    $.ln(a,b,col),
                ];
                console.log(data);
                $.plot("#canvas-wrapper", data, options);

            });

            $('#gipers').bind('click',function () {
                var a = Number($('#a').val());
                var b = Number($('#b').val());
                var col = Number($('#col').val());
                $('#current').text('Y=X^2')
                data = [
                    $.giper(a,b,col),
                ];
                console.log(data);
                $.plot("#canvas-wrapper", data, options);

            });

            $('#arcs').bind('click',function () {
                var col = Number($('#col').val());
                $('#current').text('Y=X^2')
                data = [
                    $.arcsin1(-1,1,col),
                ];
                console.log(data);
                $.plot("#canvas-wrapper", data, options);

            });

            $('#arcc').bind('click',function () {
                var col = Number($('#col').val());
                $('#current').text('Y=X^2')
                data = [
                    $.arccos1(-1,1,col),
                ];
                console.log(data);
                $.plot("#canvas-wrapper", data, options);

            });


            $('#square').bind('click',function () {
                $('#current').text('Произвольная фигура, по точкам')
                var col= prompt("Введитте количество точек");
                data = [$.figure(col)];
                console.log(data);
                $.plot("#canvas-wrapper", data, options);

            });



            $("#canvas-wrapper").bind("plothover", function (event, pos, item) {
                    if (item) {
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                        $("#tooltip").html("f(" +x +")" + " = " + y)
                            .css({top: item.pageY+5, left: item.pageX+5})
                            .fadeIn(200);
                    } else {
                        $("#tooltip").hide();
                    }

            });


            $('#func').bind('click',function () {
                var a = Number($('#a1').val());
                var b = Number($('#b1').val());
                var col = Number($('#col1').val());
                var expression = document.getElementById('funcs').value;
                var expr = math.compile(expression);
                var xValues = math.range(a, b+1, col).toArray();
                var yValues = xValues.map(function (x) {
                    return expr.eval({x: x});
                });
                $('#current').text('Y='+ document.getElementById('funcs').value);
                 data = [
                    $.func(xValues,yValues,((Math.abs(a)+Math.abs(b))/col)),
                ];
                console.log(data);
                $.plot("#canvas-wrapper", data, options);

            });

            $('#free').bind('click',function () {
                $('#freeze').toggle()

            });

            $('#pay').bind('click',function () {
                $('#payze').toggle()

            });

        });


    </script></head>

<body>
<header>
    <div class="wrapper">
        <?php if ($current_user): ?>
            <a href="#" class="user"><?= $current_user['fullname'] ?></a><a href="logout.php" class="button">Выход</a>
        <?php endif; ?>
    </div>
</header>

<div id="content">
    <p id="current" align="center"></p>
    <div class="demo-container">
        <div id="canvas-wrapper" class="demo-placeholder"></div>
    </div>



    </div>
<div class="content row">

    <div class="content col-2" >
    </div>
<div class="content col-5" >
    <a href="#" align="center" id="free"></a>
    <div id="freeze">
    <div class="form-group row" >
        <label for="a" class="col-sm-2 col-form-label">Начальное значение</label>
        <div class="col-sm-10">
            <input type="text" class="col-sm-2 form-control" id="a"></br>
        </div>
    </div>
    <div class="form-group row">
        <label for="b" class="col-sm-2 col-form-label">Конечное значение</label>
        <div class="col-sm-10">
            <input type="text" class="col-sm-2 form-control" id="b"></br>
        </div>
    </div>
        <div class="form-group row">
            <label for="col" class="col-sm-2 col-form-label">Количество точек</label>
            <div class="col-sm-10">
                <input type="text" class="col-sm-2 form-control" id="col"></br>
            </div>
        </div>
        </br>
        <div id="content">
            <input type="button" class="btn btn-light" id="sinus" value="y=sin(x)">
            <input type="button" class="btn btn-light" id="cosinus" value="y=cos(x)">
            <input type="button" class="btn btn-light" id="sqr" value="y=x^2"></br>
            <input type="button" class="btn btn-light" id="sqr3" value="y=x^3">
            <input type="button" class="btn btn-light" id="arcs" value="y=arcsin(x)">
            <input type="button" class="btn btn-light" id="arcc" value="y=arccos(x)"></br>
            <input type="button" class="btn btn-light" id="expan" value="y=e^x">
            <input type="button" class="btn btn-light" id="lnn" value="y=ln(x)">
            <input type="button" class="btn btn-light" id="gipers" value="y=k/x"></br>

        </div>
    </div>
</div>


<?if (($current_user['rule']==1)||($current_user['rule']==2)){ echo('

<div class="content col-5">
    <a href="#" align="center" id="pay">Оплаченный функционал</a>
    <div id="payze">
    <div class="form-group row">
        <label for="func" class="col-sm-2 col-form-label">Введи функцию</label>
        <div class="col-sm-10">
            <input type="text" class="col-sm-2 form-control" id="funcs">
        </div>
    </div>
    <div class="form-group row">
        <label for="a1" class="col-sm-2 col-form-label">Начальное значение</label>
        <div class="col-sm-10">
            <input type="text" class="col-sm-2 form-control" id="a1">
        </div>
    </div>
    <div class="form-group row">
        <label for="b1" class="col-sm-2 col-form-label">Конечное значение</label>
        <div class="col-sm-10">
            <input type="text" class="col-sm-2 form-control" id="b1">
        </div>
    </div>
    <div class="form-group row">
        <label for="col1" class="col-sm-2 col-form-label">Шаг</label>
        <div class="col-sm-10">
            <input type="text" class="col-sm-2 form-control" id="col1">
        </div>
    </div>
    <input type="button" class="btn btn-light" id="func" value="Вычислить">
    </div>
</div>


<div class="content col-5">
    <a href="#" align="center" id="pay">Фигуры</a>
    <div id="payze">
    
    <input type="button" class="btn btn-light" id="square" value="Нарисовать">
    </div>
</div>
<?php'); }else echo("");?>


</div>



</body>

<!-- Footer -->
<footer class="page-footer font-small blue pt-4 mt-4">


    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="mailto:vmik@rmbler.ru"> VladMikk</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

</html>