@extends('layouts.main')

@section('page')
Dashboard
@stop

@section('content')



<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3>{{ $moderator->count()-1 }}</h3>

            <p>Mederators</p>
        </div>
        <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
        <a href="{{ route('moderator.index') }}" class="small-box-footer">More info <i
                class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
        <div class="inner">
            <h3>{{ $categories->count() }}</h3>

            <p>All Category</p>
        </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
        <a href="{{ route('category.index') }}" class="small-box-footer">More info <i
                class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
        <div class="inner">
            <h3>{{ $products->count() }} All Products</h3>
            <p>{{ $totalVolume = $products->sum(function ($product) {
                return $product->sale_price - $product->purchase_price;
                } )}} Total Profit</p>

        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ route('product.index') }}" class="small-box-footer">More info <i
                class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
        <div class="inner">
            <h3>65</h3>

            <p>Unique Visitors</p>
        </div>
        <div class="icon">
            <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Product That sale today</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Product name</th>
                        <th>Quantity that sale</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($salesproducts as $item)
                    <tr>
                        <td>#</td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->qty }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Stock alerts</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stock_alerts as $stock_alert)
                    <tr>
                        <td>#</td>
                        <td>{{ $stock_alert->product_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

@stop
