!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('title','Default') | Panel de Administracón</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
<body>
	@include('admin.template.nav')
    @include('flash::message')
    <div  align="center">
        <div class="card" style="width: 56rem; top: 50px">
            <div class="card-header" style="text-align: left; width: auto;">
                <b>@yield('title','Default')</b>
            </div>
            <div class="card-body">
                @yield('content')
            </div>
            <div class="card-footer text-muted" style="height: 5rem;">
                <table class="table">
                    <tr>
                        <td style="size: 100px">
                            @yield('paginate')
                        </td>
                        <td>
                            <div align="right">
                                @yield('accion')
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="{{asset('plugins/jquery/jquery.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>