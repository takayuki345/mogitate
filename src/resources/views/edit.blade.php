@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection

@section('content')
<div class="edit__wrapper">
    <div class="edit__heading">
        <a href="/products">商品一覧</a> ＞ {{ $product->name }}
    </div>
    <div class="edit__form">
        <form class="edit__form-inner" action="/products/{{ $product->id }}/update" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="form__main">
                <div class="form__main-left">
                    <img src="{{ asset( $product->image ) }}" alt="">
                    <label class="form__label-image" for="image">ファイルを選択</label>
                    <span class="form__image-name">{{ str_replace('img/', '', $product->image) }}</span>
                    <input class="form__input-file" type="file" name="image" id="image" accept=".png, .jpeg">
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
                <div class="form__main-right">
                    <label class="form__label" for="name">商品名</label>
                    <input class="form__input-text" type="text" id="name" name="name" placeholder="商品名を入力" value="{{ $product->name }}" />
                    <div class="form__error">
                        <ul>
                            <!-- <li>商品名を入力してください</li> -->
                             <li>
                                @error('name')
                                {{ $message }}
                                @enderror
                             </li>
                        </ul>
                    </div>
                    <label  class="form__label"for="price">値段</label>
                    <input class="form__input-text" type="text" id="price" name="price" placeholder="値段を入力" value="{{ $product->price }}" />
                    <div class="form__error">
                        <ul>
                            <!-- <li>値段を入力してください</li>
                            <li>数値で入力してください</li>
                            <li>0-10000円以内で入力してください</li> -->
                            @error('price')
                            {{ $message }}
                            @enderror
                        </ul>
                    </div>
                    <label class="form__label" for="name">季節</label>
                    @php
                    $assoc = json_decode($product->seasons, TRUE);
                    @endphp
                    <div class="form__input-checkboxes">
                        @foreach ($seasons as $season)
                        <input type="checkbox" id="{{ $season->id }}" name="season[]" value="{{ $season->id }}" @if(in_array($season->id,array_column($assoc,'id'))) checked @endif>
                        <label for="{{ $season->id }}">{{ $season->name }}</label>
                        @endforeach
                    </div>
                    <div class="form__error">
                        <ul>
                            <!-- <li>季節を選択してください</li> -->
                             <li>
                                @error('season')
                                {{ $message }}
                                @enderror
                             </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="form__descript">
                <label class="form__label" for="description">商品説明</label>
                <textarea class="form__textarea" name="description" id="description" placeholder="商品の説明を入力">{{ $product->description }}</textarea>
                <div class="form__error">
                    <ul>
                        <!-- <li>商品説明を入力してください</li>
                        <li>120文字以内で入力してください</li> -->
                        @error('description')
                        {{ $message }}
                        @enderror
                    </ul>
                </div>
            </div>
            <div class="form__button">
                <a class="form__button-return" href="/products">戻る</a>
                <button class="form__button-save">変更を保存</button>
            </div>
        </form>
    </div>
</div>
@endsection