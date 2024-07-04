<!DOCTYPE html>
<!-- <html lang="ru"> -->
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Авторизация | ИдёмВКино</title>

  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
  @vite(['resources/admin/js/accordeon.js','resources/admin/css/styles.css', 'resources/admin/css/normalize.css'])

</head>

<body>

  <header class="page-header">
    <h1 class="page-header__title">Идём<span>в</span>кино</h1>
    <span class="page-header__subtitle">Администраторррская</span>

  </header>

  <main>
    <section class="login">
      <header class="login__header">
        <h2 class="login__title">Регистрация</h2>
      </header>
      <div class="login__wrapper">
        <form class="login__form" action="{{route('register')}}" method="post" autocomplete="off" accept-charset="utf-8">
          @csrf
          <label class="login__label" for="name">
            {{$errors->has('name')? 'Ошибка имени:' : 'Имя'}}
            @error('name')
            <span style="font-weight: 500; color: darkred">{{$message}}</span>
            @enderror
            <input class="login__input" type="name" placeholder="Имя нового администратора" value="{{old('name')}}" name="name" required autofocus>
          </label>
          <label class="login__label" for="email">
            {{$errors->has('email')? 'Ошибка E-mail:' : 'E-mail'}}
            @error('email')
            <span style="font-weight: 500; color: darkred">{{$message}}</span>
            @enderror
            <input class="login__input" type="email" placeholder="example@domain.xyz" value="{{old('email')}}" name="email" required>

          </label>
          <label class="login__label" for="password">
            {{$errors->has('password')? 'Ошибка пароля:' : 'Пароль'}}
            @error('password')
            <span style="font-weight: 500; color: darkred">{{$message}}</span>
            @enderror
            <input class="login__input" type="password" placeholder="Минимум 8 символов" name="password" required>

          </label>
          <label class="login__label" for="password_confirmation">
            Повторите пароль
            <input class="login__input" type="password" placeholder="Повторите пароль" name="password_confirmation" required>
          </label>
          <div class="text-center">
            <input value="Зарегистрироваться" type="submit" class="login__button">
            <div><a class="login__label" href="{{route('dashboard')}}">ВЕРНУТЬСЯ В АДМИНИСТРАТОРСКУЮ</a></div>
          </div>
        </form>
      </div>
    </section>
  </main>


</body>

</html>