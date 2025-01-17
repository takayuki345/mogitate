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
                <form class="search-form__inner" action="/products/search" method="">
                    <input class="search-form__input-keyword" type="text" name="keyword" placeholder="商品名で検索" />
                    <button class="search-form__button-search" type="submit">検索</button>
                    <label class="search-form__label-sort" for="price_sort">価格順で表示</label>
                    <select class="search-form__select-sort" name="price_sort" id="price_sort">
                        <option value="">高い順に表示</option>
                        <option value="">安い順に表示</option>
                    </select>
                    <button class="search-form__button-sort-reset" type="submit">高い順に表示</button>
                </form>
                <hr>
            </div>
        </div>
        <div class="index__main-contents">
            <div class="products-list">
                <div class="products-list__items">
                    <div class="products-list__item">
                        <form class="products-list__form" action="/products/id">
                            <button class="products-list__form-img"><img src="{{ asset('img/kiwi.png') }}"></button>
                            <div class="products-list__form-info">
                                <span>キウイ</span><span>¥800</span>
                            </div>
                        </form>
                    </div>
                    <div class="products-list__item">
                        <form class="products-list__form" action="">
                            <button class="products-list__form-img"><img src="{{ asset('img/strawberry.png') }}"></button>
                            <div class="products-list__form-info">
                                <span>ストロベリー</span><span>¥1200</span>
                            </div>
                        </form>
                    </div>
                    <div class="products-list__item">
                        <form class="products-list__form" action="">
                            <button class="products-list__form-img"><img src="{{ asset('img/orange.png') }}"></button>
                            <div class="products-list__form-info">
                                <span>オレンジ</span><span>¥850</span>
                            </div>
                        </form>
                    </div>
                    <div class="products-list__item">
                        <form class="products-list__form" action="">
                            <button class="products-list__form-img"><img src="{{ asset('img/watermelon.png') }}"></button>
                            <div class="products-list__form-info">
                                <span>スイカ</span><span>¥700</span>
                            </div>
                        </form>
                    </div>
                    <div class="products-list__item">
                        <form class="products-list__form" action="">
                            <button class="products-list__form-img"><img src="{{ asset('img/peach.png') }}"></button>
                            <div class="products-list__form-info">
                                <span>ピーチ</span><span>¥1000</span>
                            </div>
                        </form>
                    </div>
                    <div class="products-list__item">
                        <form class="products-list__form" action="">
                            <button class="products-list__form-img"><img src="{{ asset('img/muscat.png') }}"></button>
                            <div class="products-list__form-info">
                                <span>シャインマスカット</span><span>¥1400</span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="products-list__page">ページネーション</div>
            </div>
        </div>
    </div>
</div>
@endsection