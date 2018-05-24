<!doctype html >
<html lang="{{ app()->getLocale() }}" >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="/css/normalize.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/angular.min.js"></script>
<script type="text/javascript" src="/js/angular-ui-router.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
   
    <div ng-app='myApp' >
       <div ng-controller="myCtrl">
      [: gname :] 
        [:firstName:]
       </div>

 <div class="navbar">导航栏</div>
    <div>
        <div>
            <div ui-view></div>
        </div>
    </div>

</div>

    </body>

     <script type="text/ng-template" id="home.tpl">
        <div>64534534
            <h1>首页</h1>
            salkfjsadlkfjsadl
        </div>
    </script>
    <script type="text/javascript">
    var a = function(){
        console.log("nima");
    }

    +(function(){

        angular.module('myApp',[
            'ui.router',
            ])
        .config(function($interpolateProvider,$stateProvider,$urlRouterProvider){
            $interpolateProvider.startSymbol('[:');
            $interpolateProvider.endSymbol(':]');

            $urlRouterProvider.otherwise('/home');

            $stateProvider
                .state('home',{
                    url:'/home',
                    templateUrl:'home.tpl'
                 })
                .state('login',{
                    url:'/login',
                    template:'<h1>登录</h1>'
                 })
        })

        //$rootscope
        .controller('myCtrl',function($scope){
            $scope.gname = "Bood";
             $scope.firstName= "John";
            $scope.lastName= "Doe";
        })
        //console.log($rootscope);
    })();




    </script>

   
</html>
