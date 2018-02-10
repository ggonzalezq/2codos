@extends('admin/app')

@section('breadcrumbs')
  @parent
  <li class="breadcrumb-item active">All deals</li>
@endsection

@section('content')
  <header>
    <h1 class="h3 display">Deals</h1>
  </header>
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Title</th>
                <th>Last updated</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection


