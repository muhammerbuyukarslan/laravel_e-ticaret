@extends('layouts.master')
@section('title','Anasayfa')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Kategoriler</div>
                    <div class="list-group categories">
                        <a href="#" class="list-group-item"><i class="fa fa-television"></i> Kategori</a>
                        <a href="#" class="list-group-item"><i class="fa fa-television"></i> Kategori</a>
                        <a href="#" class="list-group-item"><i class="fa fa-television"></i> Kategori</a>
                        <a href="#" class="list-group-item"><i class="fa fa-television"></i> Kategori</a>
                        <a href="#" class="list-group-item"><i class="fa fa-television"></i> Kategori</a>
                        <a href="#" class="list-group-item"><i class="fa fa-television"></i> Kategori</a>
                        <a href="#" class="list-group-item"><i class="fa fa-television"></i> Kategori</a>
                        <a href="#" class="list-group-item"><i class="fa fa-television"></i> Kategori</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="https://api.lorem.space/image/pizza?w=640&h=400&hash=8B7BCDC2" alt="...">
                            <div class="carousel-caption">
                                Slide 1
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://api.lorem.space/image/pizza?w=640&h=400&hash=500B67FB" alt="...">
                            <div class="carousel-caption">
                                Slide 2
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://api.lorem.space/image/pizza?w=640&h=400&hash=A89D0DE6" alt="...">
                            <div class="carousel-caption">
                                Slide 3
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" id="sidebar-product">
                    <div class="panel-heading">Günün Fırsatı</div>
                    <div class="panel-body">
                        <a href="#">
                            <img src="https://api.lorem.space/image/pizza?w=400&h=485&hash=A89D0DE6" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Öne Çıkan Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 product">
                            <a href="#"><img src="https://api.lorem.space/image/burger?w=400&h=400&hash=500B67FB"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="https://api.lorem.space/image/burger?w=400&h=400&hash=8B7BCDC2"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="https://api.lorem.space/image/burger?w=640&h=400&hash=A89D0DE6"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="https://api.lorem.space/image/burger?w=400&h=400&hash=225E6693"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Çok Satan Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 product">
                            <a href="#"><img src="https://api.lorem.space/image/pizza?w=400&h=400&hash=9D9539E7"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="https://api.lorem.space/image/pizza?w=400&h=400&hash=BDC01094"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="https://api.lorem.space/image/drink?w=400&h=400&hash=7F5AE56A"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="https://api.lorem.space/image/pizza?w=400&h=400&hash=4F32C4CF"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">İndirimli Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 product">
                            <a href="#"><img src="https://api.lorem.space/image/drink?w=400&h=400&hash=4F32C4CF"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="https://api.lorem.space/image/drink?w=400&h=400&hash=7F5AE56A"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="https://api.lorem.space/image/drink?w=400&h=400&hash=BDC01094"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="https://api.lorem.space/image/drink?w=400&h=400&hash=9D9539E7"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
