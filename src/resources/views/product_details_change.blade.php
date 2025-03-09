@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product_details_change.css') }}">
@endsection

@section('content')
<div class="Product">
    <form class="form">
        <div class="form__group">
            <div class="form__group-img">
                <input type="file" name="file" />
            </div>
            <div class="form__group-product">
                <div class="form__label">
                    <span class="form__label--item">商品名</span>
                </div>
                <input type="text" name="namet" placeholder="商品名を入力" />
            </div>
            <div class="form__group-product">
                <div class="form__label">
                    <span class="form__label--item">値段</span>
                </div>
                <input type="text" name="price" placeholder="値段を入力" />
            </div>
            <div class="form__group-product">
                <div class="form__label">
                    <span class="form__label--item">季節</span>
                </div>
                <input type="radio" class="radio" name="season"><label>春</label>
                <input type="radio" class="radio" name="season"><label>夏</label>
                <input type="radio" class="radio" name="season"><label>秋</label>
                <input type="radio" class="radio" name="season"><label>冬</label>
            </div>
        </div>
        <div class="Product__details">
            <div class="form__group-product">
                <div class="form__label">
                    <span class="form__label--item">商品説明</span>
                </div>
                <textarea name="description" cols="120" rows="10" placeholder="商品の説明を入力"></textarea>
            </div>
        </div>
    
        <div class="form__button">
            <button class="form__button-return" type="submit">戻る</button>
            <button class="form__button-change" type="submit">変更を保存</button>
            <input class="search-form__item-reset" type="reset" />
        </div>
    </form>
</div>
@endsection



        
            
