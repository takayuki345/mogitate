@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__wrapper">
    <div class="register__heading">商品登録</div>
    <div class="register__form">
        <form class="register__form-inner" action="/products/register" method="post">
            @csrf
            <div class="form__group">
                <label class="form__label" for="name">商品名<span class="required--red">必須</span></label>
                <input class="form__input-text" type="text" id="name" name="name" placeholder="商品名を入力">
                <div class="form__error">
                    <ul>
                        <li>
                        <!-- <li>商品名を入力してください</li> -->
                        @error('name')
                        {{ $message }}
                        @enderror
                        </li>
                    </ul>
                </div>
            </div>
            <div class="form__group">
                <label  class="form__label"for="price">値段<span class="required--red">必須</span></label>
                <input class="form__input-text" type="text" id="price" name="price" placeholder="値段を入力">
                <div class="form__error">
                    <ul>
                        <!-- <li>値段を入力してください</li>
                        <li>数値で入力してください</li>
                        <li>0-10000円以内で入力してください</li> -->
                        <li>
                            @error('price')
                            {{ $message }}
                            @enderror
                        </li>
                    </ul>
                </div>
            </div>
            <div class="form__group">
                <label class="form__label">商品画像<span class="required--red">必須</span></label>
                <img class="form__img" src="{{ asset('img/kiwi.png') }}" alt="">
                <div class="form__img-opt">
                    <label class="form__label-image" for="image">ファイルを選択</label>
                    <span class="form__image-name">image01.jpeg</span>
                </div>
                <input class="form__input-file" type="file" name="image" id="image">
                <div class="form__error">
                    <ul>
                        <!-- <li>商品画像を登録してください</li>
                        <li>「.png」または「.jpeg」形式でアップロードしてください</li> -->
                        <li>
                            @error('image')
                            {{ $message }}
                            @enderror
                        </li>
                    </ul>
                </div>
            </div>
            <div class="form__group">
                <label class="form__label" for="name">季節<span class="required--red">必須</span><span class="multi-selectable">複数選択可</span></label>
                <div class="form__input-checkboxes">
                    <input type="checkbox" id="spring" name="season" value="spring">
                    <label for="spring">春</label>
                    <input type="checkbox" id="summer" name="season" value="summer">
                    <label for="summer">夏</label>
                    <input type="checkbox" id="autumn" name="season" value="autumn">
                    <label for="autumn">秋</label>
                    <input type="checkbox" id="winter" name="season" value="winter">
                    <label for="winter">冬</label>
                </div>
                <div class="form__error">
                    <ul>
                        <!-- <li>季節を選択してください</li> -->
                         <li>
                            @error('season')
                            {{ $message }}
                            @enderror()
                         </li>
                    </ul>
                </div>
            </div>
            <div class="form__group">
                <label class="form__label" for="description">商品説明<span class="required--red">必須</span></label>
                <textarea class="form__textarea" name="description" id="description" placeholder="商品の説明を入力"></textarea>
                <div class="form__error">
                    <ul>
                        <!-- <li>商品説明を入力してください</li>
                        <li>120文字以内で入力してください</li> -->
                        <li>
                            @error('description')
                            {{ $message }}
                            @enderror
                        </li>
                    </ul>
                </div>
            </div>
            <div class="form__group-button">
                <a class="form__button-return" href="/products">戻る</a>
                <button class="form__button-save">変更を保存</button>
            </div>
        </form>
    </div>
</div>
@endsection