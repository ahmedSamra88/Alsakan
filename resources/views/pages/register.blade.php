{{-- start register page --}}
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('css/slider.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
    <body>
        <div class="register">
            @include('inc.navbar')
            <div class="form-register">
                <div class="container register-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form">
                                <h3 class="text-right">يمكنك التسجيل عن طريق رقم الجوال .</h3>
                                <form action="" method="post">
                                    <div class="form-group row">
                                        <div class="">
                                          <input type="tel" class="form-control" name="phone" id="" placeholder="05X XXX XXXX">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="">
                                          <button type="submit" class="btn">ارسال</button>
                                        </div>
                                      </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center">
                                <p class="lead">
                                    اك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لور
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
{{-- end register page --}}