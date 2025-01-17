@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection

@section('content')
<div class="edit__wrapper">
    <div class="edit__heading">
        <a href="">商品一覧</a> ＞ キウイ
    </div>
    <div class="edit__form">
        <form class="edit__form-inner"action="">
            <div class="form__main">
                <div class="form__main-left">
                    <img src="{{ asset('img/kiwi.png') }}" alt="">
                    <label class="form__label-image" for="image">ファイルを選択</label>
                    <span class="form__image-name">image01.jpeg</span>
                    <input class="form__input-file" type="file" name="image" id="image">
                    <div class="form__error">
                        <ul>
                            <li>商品画像を登録してください</li>
                            <li>「.png」または「.jpeg」形式でアップロードしてください</li>
                        </ul>
                    </div>
                </div>
                <div class="form__main-right">
                    <label class="form__label" for="name">商品名</label>
                    <input class="form__input-text" type="text" id="name" name="name" placeholder="商品名を入力">
                    <div class="form__error">
                        <ul>
                            <li>商品名を入力してください</li>
                        </ul>
                    </div>
                    <label  class="form__label"for="price">値段</label>
                    <input class="form__input-text" type="text" id="price" name="price" placeholder="値段を入力">
                    <div class="form__error">
                        <ul>
                            <li>値段を入力してください</li>
                            <li>数値で入力してください</li>
                            <li>0-10000円以内で入力してください</li>
                        </ul>
                    </div>
                    <label class="form__label" for="name">季節</label>
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
                            <li>季節を選択してください</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="form__discript">
                <label class="form__label" for="discript">商品説明</label>
                <textarea class="form__textarea" name="discript" id="discript" placeholder="商品の説明を入力"></textarea>
                <div class="form__error">
                    <ul>
                        <li>商品説明を入力してください</li>
                        <li>120文字以内で入力してください</li>
                    </ul>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-return">戻る</button>
                <button class="form__button-save">変更を保存</button>
            </div>
        </form>
    </div>
</div>
@endsection