<!doctype html>
<html lang="ru">
@include('parts.heads.base')
<body class="bg-dark text-white">
{{--TODO лучше вынести в отдельный компонент(блейд шаблон) --}}
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">
        <a class="p-2 text-white" href="/">@Predpolozhim_ded</a>
    </h5>
    {{--TODO лучше вынести в отдельный компонент(блейд шаблон) --}}K
    <nav class="my-2 my-md-0 mr-md-3">
        {{--TODO А внего уже прокидывать переменную  с сылками и компонент будет рендерить ее --}}
        <a class="p-2 text-white" href="https://www.anilibria.tv/release/cowboy-bebop.html" target="_blank">Cowboy
            Bebop
        </a>
        {{--TODO для всего неуникального(Приколюха) текстового контенат и того который не достается из базы, лучше использовать языковые переменные--}}
        {{--NOTES composer require --dev laravel-lang/common, вроде бы так устанавливается --}}
        {{--NOTES Использование и установку , можно в доках лары найти --}}
        {{--NOTES Но опять же учиться и закладывать в проект лучше с самого начлала, так как потом проще редактировать и менять + мало уже у кого нет двуязычности на сайтах --}}
        <a class="p-2 text-white" href="/joke">Приколюха</a>

    </nav>
    <a class="btn btn-success" href="/tap">Тыкалка</a>
</div>
<div class="container">
    @yield('content')
</div>

</body>
</html>
