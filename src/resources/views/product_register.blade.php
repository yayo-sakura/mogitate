@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product_register.css') }}">
@endsection

@section('content')
<div class="ProductRegister">
    <div class="ProductRegister__heading">
        <h2>商品登録</h2>
    </div>
    <form class="form" action="/products" method="post">
    @csrf
        <div class="form__group">
            <div class="form__group-product">
                <div class="form__label">
                    <span class="form__label--item">商品名</span>
                    <span class="form__label--required">必須</span>
                </div>
                <input type="text" name="name" placeholder="商品名を入力" />
            </div>
            <div class="form__group-product">
                <div class="form__label">
                    <span class="form__label--item">値段</span>
                    <span class="form__label--required">必須</span>
                </div>
                <input type="text" name="price" placeholder="値段を入力" />
            </div>
            <div class="form__group-product">
                <div class="form__label">
                    <span class="form__label--item">商品画像</span>
                    <span class="form__label--required">必須</span>
                </div>
                <input type="file" name="image" />
            </div>
            <div class="form__group-product">
                <div class="form__label">
                    <span class="form__label--item">季節</span>
                    <span class="form__label--required">必須</span>
                    <span class="form__label--multiple">複数選択可</span>
                </div>
                <input type="checkbox" class="checkbox" name="season"><label>春</label>
                <input type="checkbox" class="checkbox" name="season"><label>夏</label>
                <input type="checkbox" class="checkbox" name="season"><label>秋</label>
                <input type="checkbox" class="checkbox" name="season"><label>冬</label>
            </div>
            <div class="form__group-explanation">
                <div class="form__label">
                    <span class="form__label--item">商品説明</span>
                    <span class="form__label--required">必須</span>
                </div>
                <textarea name="description" cols="120" rows="10" placeholder="商品の説明を入力"></textarea>
            </div>
            <div class="form__button">
                <button class="form__button-return" type="submit">戻る</button>
                <button class="form__button-register" type="submit">登録</button>
            </div>
        </div>
    </form>
</div>
@endsection