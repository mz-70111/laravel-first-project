<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <link rel="stylesheet" href="/../../../statics/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200&family=Cairo:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تسجيل الدخول</title>
    
</head>
<body>
    <div class="login">
        <div class="parent">
            <form action="{{route('auth')}}" method="POST">
                    @csrf
                    @method('GET')
                <div>
                 <input type="text" name="username" placeholder="اسم المستخدم" value= @if (@empty($username)){{old('username')}} @else{{$username}} @endif>
                
                </div>
                @error('username')
                    {{$message}}
                @enderror
                <div class="pass-div">
                <input id="pass-id" type="password" name="password" placeholder="كلمة المرور" value= @if (@empty($password)){{old('password')}}  @else{{$password}} @endif >
                <button id="pass-toggle">عرض</button>
                </div>
                @error('password')
                    {{$message}}
                @enderror
        <script>
        var myButton = document.getElementById('pass-toggle'),
            myInput = document.getElementById('pass-id');
            myButton.onclick = function (e) {
        e.preventDefault();
        if (this.textContent == 'عرض') {
          this.textContent = 'إخفاء';
          myInput.setAttribute('type', 'text');
        } else {
          this.textContent = 'عرض';
          myInput.setAttribute('type', 'password');
        }
      }; 
        </script>
        
        <div>
           <input type="submit" value="تسجيل دخول"> 
        </div>
        @if (@empty($error))   
        @else
         {{$error}}
        @endif
    </form>
    </div>
</body>
</html>