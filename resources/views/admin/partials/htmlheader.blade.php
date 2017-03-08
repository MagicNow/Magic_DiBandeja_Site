<head>
    <meta charset="UTF-8">
    <title> DiBandeja Admin - @yield('htmlheader_title', 'Login') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
            <meta name="csrf-token" content="{!! csrf_token() !!}">

    <!-- Bootstrap 3.3.7 -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    {!! Html::style('assets/admin/plugins/select2/select2.min.css') !!}
    {!! Html::style('assets/admin/css/app.css') !!}

    {!! Html::style('assets/admin/css/skins/skin-blue.css') !!}
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    {!! Html::style('assets/admin/plugins/datatables/dataTables.bootstrap.css') !!}
    {!! Html::style('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}
    {!! Html::style('assets/admin/plugins/datepicker/datepicker3.css') !!}
    {!! Html::style('assets/admin/plugins/mt-select/css/style.css') !!}
    
    <!-- iCheck -->
  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
