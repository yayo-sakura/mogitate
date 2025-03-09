@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/@product_search.css') }}">
@endsection

@section('content')
<div class="ProductList">
    <div class="ProductList__heading">
        <div class="title">
            <h2>“ストロベリー”の商品一覧</h2>
        </div>
        <div class="ProductAddition__button">
            <button class="ProductAddition__button-submit" type="submit">+ 商品を追加</button>
        </div>
    </div>

    <form class="ProductList__content">
        <div class="SearchForm__item">
            <input class="SearchForm__item-input" type="text" placeholder="商品名で検索"/>
            <div class="SearchForm__button">
                <button class="SearchForm__button-submit" type="submit">検索</button>
            </div>
        </div>
        <div class="SearchForm__sorting">
            <div class=section__title>
                <h3>価格順で表示</h3>
            </div>
            <select class="SearchForm__item-select">
                <option value=""selected hidden>価格で並べ替え</option>
                <option value="high">高い順に表示</option>
                <option value="low">安い順に表示</option>
            </select>
        </div>