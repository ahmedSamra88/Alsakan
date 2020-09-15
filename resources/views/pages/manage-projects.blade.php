{{-- start management page --}}
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
    <body>
        <div class="management">
            @include('inc.navbar')
            <div class="container management-container text-right">
                <h3>ادارة المشاريع</h3>
                @include('inc.datatable',['id'=>'م','title'=>'اسم المشروع'])
            </div>
        </div>
        
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
{{-- end management page --}}