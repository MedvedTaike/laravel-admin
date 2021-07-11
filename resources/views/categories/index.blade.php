@extends('layouts.main')

@section('special_css')
<style>
.card-header{
  border-radius: 0;
}
</style>
@endsection
@section('content')
<container>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5>Управление категориями</h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Главная</a></li>
              <li class="breadcrumb-item active">Категории</li>
            </ol>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-sm-6">
          <a href="{{ route('categories.create') }}" class="btn btn-success btn-block"><i class="fa fa-plus"></i>Добавить категорию</a>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title">Категории</h3>
          </div>  
          <div class="card-body p-0">
              @include('parts.recursive', ['categories' => $categories])
              </div>
            </div>
          </div>
    </section>
</container>
@endsection

@section('custom_script')

@endsection