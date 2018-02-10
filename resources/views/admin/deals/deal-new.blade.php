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
          <form>
            <div class="form-group">
              <label>Email</label>
              <input type="email" placeholder="Email Address" class="form-control">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">
              <input type="submit" value="Signin" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection


