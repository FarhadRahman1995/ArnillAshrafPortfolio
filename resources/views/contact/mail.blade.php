<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container"  id="aboutus">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-column col-lg-6 col-md-12 col-sm-12" style="background-color: greenyellow; color: black; text-align: center;overflow: hidden;position: absolute;">
                <img src="{{asset('assets/images/big_image.jpg')}}" alt="">
                <div class="inner">
                    <div class="sec-title">
                        <h2>You have got an email from : {{ $name }} </h2><br>
                        <h2>User details: </h2>  <br>
                        <h2>Name: {{ $name }}</h2>
                        <h2>Email: {{ $email }}</h2>
                        <h2>Phone: {{ $phone }}</h2>
                        <h2>Subject: {{ $subject }}</h2>
                        <h2>Message: {{ $user_query }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
