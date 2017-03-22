@extends('layouts.app')

@section('content')
<div class="container" ng-app="myApp" ng-controller="shopController" ng-init="getCart()">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">  Product List  <span style="float:right"><a href="cart">@{{checkout}} </a> Cart(@{{cart_count }})</span> </div>
                <div class="panel-body">
                 <div class="row"> 
                      <div class="col-sm-6 col-md-4" ng-repeat="X in product">
                        <div class="thumbnail">
                           <img ng-src="@{{imageUrl}}@{{X.photo}}" width="100%" style="height:150px">
                          <div class="caption">
                            <input type='hidden' ng-model="product[$index]" value="@{{X.id}}">
                            <h3>@{{X.product_title}}</h3>
                            <p ng-bind-html="html">@{{X.description}}</p> 
                             <p>Price : @{{X.price}} INR </p> 
                             <p></p>
                             <p ng-model="firstName">@{{firstName}}</p>
                            <p> 
                                <button class="btn btn-primary" ng-click="addCart(X.id,cart_count)"  ng-model="add_to_cart"  ng-disabled="add_to_cart"  style="display:block"  role="button">Add to Cart</button>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
