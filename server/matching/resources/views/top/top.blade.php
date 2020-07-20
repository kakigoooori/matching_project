@extends('layout/layout')
@section('content')

</head>
<h1>Matching Station</h1>

<div id="carousel-1" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-1" data-slide-to="1"></li>
    <li data-target="#carousel-1" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('/img/work1.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('/img/work2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('/img/work3.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




<form method="get" action="/mypage">
<input type="submit" value="会員の方はこちら" class="btn btn-primary">
</form>
<br>
<form method="get" action="/login">
<input type="submit" value="新規登録" class="btn btn-success">
</form>
<br>
<form method="get" action="/pool">
<input type="submit" value="投稿する" class="btn btn-danger">
</form>
<br>
<form method="get" action="/search">
<input type="submit" value="検索する" class="btn btn-warning">
</form>
<br>
<form method="get" action="/login">
<input type="submit" value="ログイン" class="btn btn-info">
</form>
<h1>topページだよ</h1>
<p>
    aaaaaaaaaaaaaaaaaaaaaa<br>
    aaaaaaaaaaaaaaaaaaaaaa<br>
    aaaaaaaaaaaaaaaaaaaaaa<br>
    aaaaaaaaaaaaaaaaaaaaaa<br>
    aaaaaaaaaaaaaaaaaaaaaa<br>
</p>
<form class="form-inline my-2 my-lg-0" action="{{url('/search')}}" method="GET">
      <input class="form-control mr-sm-2" type="search" placeholder="仕事名をいれてみて"  name="work" value="">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
    </form>

@stop