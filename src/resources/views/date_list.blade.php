@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection @section('content')
<div class="todo__alert">
  @if (session('message'))
  <div class="todo__alert--success">{{ session('message') }}</div>
  @endif @if ($errors->any())
  <div class="todo__alert--danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
</div>
<div class="todo__content">
<div class="section__title">
   <h2>日付</h2>
</div>
  <form class="create-form" action="/works" method="get">
    @csrf
    <div class="create-form__item">
      <input
        class="create-form__item-input"
        type="text"

        name="content"
      value="{{ old('content') }}"
      />
     <select class="create-form__item-select">
       <option value="">カテゴリ</option>
     </select>
    </div>
    <div class="create-form__button">
      <button class="create-form__button-submit" type="submit">作成</button>
    </div>
  </form>
 <div class="section__title">
   <h2>Todo検索</h2>
 </div>
 <form class="search-form">
   <div class="search-form__item">
     <input class="search-form__item-input" type="text" />
     <select class="search-form__item-select">
       <option value="">カテゴリ</option>
     </select>
   </div>
   <div class="search-form__button">
     <button class="search-form__button-submit" type="submit">検索</button>
   </div>
 </form>
  <div class="work-table">
    <table class="work-table__inner">
      <tr class="work-table__row">
      <th class="work-table__header">
         <span class="work-table__header-span">Todo</span>
         <span class="work-table__header-span">カテゴリ</span> 
       </th>
      </tr>
      <tr class="todo-table__row">
        <td class="todo-table__item">
          <form class="update-form" action="/todos/update" method="post">
            @method('PATCH') @csrf
            <div class="update-form__item">
              <input
                class="update-form__item-input"
                type="text"
                name="content"
              />
            </div>
           <div class="update-form__item">
             <p class="update-form__item-p">Category 1</p>
           </div>
            <div class="update-form__button">
              <button class="update-form__button-submit" type="submit">
                更新
              </button>
            </div>
          </form>
        </td>
        <td class="todo-table__item">
          <form class="delete-form" action="/works/delete" method="post">
            @method('DELETE') @csrf
            <div class="delete-form__button">
              <button class="delete-form__button-submit" type="submit">
                削除
              </button>
            </div>
          </form>
        </td>
      </tr>
    </table>
  </div>
</div>
@endsection