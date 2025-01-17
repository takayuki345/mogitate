@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="index__wrapper">
    <div class="index__heading">
        <h2 class="index__heading-title">商品一覧</h2>
        <a class="index__heading-button" href="/products/register">+ 商品を追加</a>
    </div>
    <div class="index__container">
        <div class="index__side-contents">
            <div class="search-form">
                <form class="search-form__inner" action="/products/search" method="get">
                    <input class="search-form__input-keyword" type="text" name="keyword" placeholder="商品名で検索" />
                    <button class="search-form__button-search" type="submit" name="normal">検索</button>
                    <label class="search-form__label-sort" for="price_sort">価格順で表示</label>
                    <select class="search-form__select-sort" name="price_sort" id="price_sort">
                        <option value="">価格で並べ替え</option>
                        <option value="descend">高い順に表示</option>
                        <option value="ascend">安い順に表示</option>
                    </select>
                    <button class="search-form__button-sort-reset" type="submit" name="reset">高い順に表示</button>
                </form>
                <hr>
            </div>
        </div>
        <div class="index__main-contents">
            <div class="products-list">
                <div class="products-list__items">
                    @foreach ($products as $product)
                    <div class="products-list__item">
                        <form class="products-list__form" action="/products/{{ $product->id }}">
                            <button class="products-list__form-img"><img src="{{ asset( $product->image ) }}"></button>
                            <div class="products-list__form-info">
                                <span>{{ $product->name }}</span><span>¥{{ $product->price }}</span>
                            </div>
                        </form>
                    </div>
                    @endforeach
                </div>
                <div class="products-list__page">{{ $products->links() }}</div>
            </div>
        </div>
    </div>
</div>
@endsection