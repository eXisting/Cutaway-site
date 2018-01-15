<!DOCTYPE html>
<html>

	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width" />

		<title>Cutaway site</title>
        <link rel="icon" href="http://www.ellyns.com/wp-content/uploads/2015/12/cropped-E-site-icon-ellyns-restaurant-glen-ellyn2-32x32.png">

        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<script src="/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="/js/core.js" type="text/javascript"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>

	<body style="background-color: #3a3a3a">
        <div class="navbar navbar-fixed-top">
            <div class="container top">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="/images/site_logo.png" id="logo">
                    </a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/experience">Experience</a></li>
                    <li><a href="/contacts">Contacts</a></li>
                </ul>
            </div>
        </div>

		<div class="container" id="wrapper">
			<div class="row" >
				<div class="col-sm-4">
					<div class="side-box">
						<h3>Random quotation</h3>
						<blockquote class="quotation">
                            «Сайт, как живой организм, изменяется и развивается.
                            Нельзя сразу написать идеальный вариант и на этом откланяться - это утопия»
                        </blockquote>
                        <blockquote class="quotation">
                            «Все должно быть очень просто, как текстовый файл и при этом функционально
                            и тогда пользователи от нас уйдут»
                        </blockquote>
                        <blockquote class="quotation">
                            «Критика - это когда критик объясняет автору, как сделал бы он, если бы умел»
                        </blockquote>
                        <blockquote class="quotation">
                            «Сумасшедшим становиться тот, кто попытался разобраться в этом сумасшедшем мире»
                        </blockquote>
                        <blockquote class="quotation">
                            «Опытный разработчик знает, какой выбор ведет к поставленной цели, в то время как
                            новичок каждый раз делает шаг в неизвестность»
                        </blockquote>
					</div>
					<div class="list-group navigation">
                        <a class="list-group-item list-group-item-action" href="/">Home</a>
                        <a class="list-group-item list-group-item-action" href="/experience">Experience</a>
                        <a class="list-group-item list-group-item-action" href="/contacts">Contacts</a>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="row">
						<?php include 'application/views/'.$content_view; ?>
					</div>
				</div>
			</div>
		</div>

        <div class="container" id="bot-container">
            <div class="row">
                <div class="col-sm-4" id="bottom-contacts">
                    <?php include "common_contacts.php" ?>
                </div>
                <div class="col-sm-8" id="bottom-info">
                    <h3>Personal information:</h3>
                    <p id="info">
                        Hi! My name is Andrey. I am 20 years old. Programming interest began in high school and every day
                        i try to improve my skills. Self motivated to carry a job.<br><br>
                        This site was developed for demonstration of my skills in Web-programming. I tried to show all of my knowledge
                        that can be used in project like that. With further study the site will be better structured.
                    </p>
                </div>
            </div>
            <div id="last">
                <a href="/">existence inc.</a> &copy; 2017</a>
            </div>
        </div>
    </body>
</html>

