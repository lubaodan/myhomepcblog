<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
</head>
	<body>
		<!-- if -->
		给你买个
		@if($total >= 90)
			游戏机
		@elseif($total >=80 && $total <90)
			望远镜
		@elseif($total >=60 && @total <80)
		     鸡掰
		@else
			锤子
		@endif

		@for($i=1;$i<=100;$i++)
			{{$i}}
		@endfor

		

		@foreach($users as $k=>$v)

			{{$v['name']}}
		@endforeach
		</body>
			
</html>