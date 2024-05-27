<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/app-logo.uArxjNY2.png')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid row  ">
        <div class="container col-5 bg-white m-1">
            <div class="card p-4">
                <h3 class="card-title text-center mb-4">كن اول من يعرف اطلاق المرحلة القادمة</h3>
                <form id="emailForm" action="{{ route('storeEmail') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="بريدك الإلكتروني" aria-label="بريدك الإلكتروني" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="submit" id="button-addon2">إرسال</button>
                    </div>
                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </form>
            </div>
        </div>

        <div class="container left-container col-5 ">
            <h1>المنصة
                تحت التطوير
                مسألة وقت ...</h1>
        </div>
    </div>

</body>

</html>