<!DOCTYPE html>
<html>
<head>
    <title>Подписка на курс</title>
    <link href="bootstrap/css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="css/layout.css" media="all" rel="stylesheet" type="text/css" />
    <meta http-equiv="content-type" content="charset=utf-8">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta property="og:title" content="Школа для стартапов HackDay">
    <meta property="og:description" content="Учим программировать и продавать.">
    <meta property="og:image" content="http://school.hackday.ru/img/share-logo.png">
    <meta itemprop="name" content="Школа для стартапов HackDay">
    <meta itemprop="description" content="Учим программировать и продавать.">
    <meta itemprop="image" content="http://school.hackday.ru/img/share-logo.png">


    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=284092448364523";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Put this script tag to the <head> of your page -->
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?58"></script>

    <script type="text/javascript">
        VK.init({apiId: 3180592, onlyWidgets: true});
    </script>


    <!-- Place this tag after the last +1 button tag. -->
    <script type="text/javascript">
        (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
    </script>

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-181618-30']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>



</head>
<body>
<div id="fb-root"></div>

<?php
    $email = @$_REQUEST['email'];
    if($email) {

		switch(@$_REQUEST['course']) {
			case 'business':
				$course = 'business';
				break;
			case 'webdev':
				$course = 'webdev';
				break;
			default:
				$course = 'undefined';
				break;
		}

        $f = fopen("emails-" . $course . ".txt", "a");
        fwrite($f, $email . "\t" . $_REQUEST["key"] .  "\r\n");
        fclose($f);
    }
?>

<div class="container">

    <header class="row">
        <div class="span6">
            <div class="description"><a href="/">Школа для стартапов</a></div>
            <div class="name"><a href="/">HackDay</a></div>
        </div>
        <div class="span6">
            <div class="intro">Школа HackDay - это несколько образовательных направлений, по результатам которых вы получите практический опыт решения ваших задач, который вы начнете применять в своем стартапе еще до окончания курса.</div>
        </div>
    </header>

    <header class="row single-page-notice">
        <div class="span12">
            <div class="alert alert-success">Ваше обращение принято. Через несколько дней мы отправим вам информацию о курсе.</div>
        </div>
    </header>

</div>


<div class="footer">
    <p><a href="mailto:school@hackday.ru">school@hackday.ru</a></p>
</div>

</body>
</html>