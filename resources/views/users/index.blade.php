@extends('layouts.main')

@section('content')
<container>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5>Управление клиентами</h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Главная</a></li>
              <li class="breadcrumb-item active">Клиенты</li>
            </ol>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-sm-6">
          <a href="{{ route('users.create') }}" class="btn btn-success btn-block"><i class="fa fa-plus"></i> Добавить клиента</a>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title">Клиенты по районам</h3>
          </div>  
          <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                @foreach($regions as $region)
                  <li class="item">
                    <div class="product-info ml-2">
                      <a href="{{ route('users.show', $region->id ) }}" class="product-title"><i class="fa fa-chevron-right btn-sm"></i>{{ $region->name }}
                        <span class="badge badge-warning float-right">{{ $region->users->count() }}</span></a>
                    </div>
                  </li>  
                @endforeach
                </ul>
           </div>
        </div>
    </section>
</container>
@endsection
