@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
@stop

@section('content')


  <div class="row">
    <!-- left column -->
    <div class="col-md-6">


        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Dados do Doador</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="quickForm" novalidate="novalidate">
              <div class="card-body">
                <div class="form-group">

                <label>Nome Completo</label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Primeiro Nome">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Apelído">
                        </div>
                    </div>
                </div>


                <label>Nacionalidade</label>
                <select class="form-control">
                    <option>Moçambique</option>
                    <option>Angola</option>
                    <option>Africa do Sul</option>
                    <option>Portugal</option>
                    <option>Brazil</option>
                </select>

                <div class="row">
                    <div class="col-md-6">
                        <label>Data de Nacimento</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                          </div>
                          <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false" autocomplete="on">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label>Telefone</label>

                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                          <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-999&quot;" data-mask="" im-insert="true" placeholder="(258) 8XX-XXX-XX">
                        </div>
                        <!-- /.input group -->
                      </div>
                </div>








            </div>


              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

    </div>
    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-6">

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="quickForm" novalidate="novalidate">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control is-invalid" id="exampleInputEmail1" placeholder="Enter email" autocomplete="off" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                <span id="exampleInputEmail1-error" class="error invalid-feedback">Please enter a email address</span></div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control is-invalid" id="exampleInputPassword1" placeholder="Password" aria-describedby="exampleInputPassword1-error">
                <span id="exampleInputPassword1-error" class="error invalid-feedback">Please provide a password</span></div>
                <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                    <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
      </div>
    </div>
    <!--/.col (right) -->
  </div>

  <div class="form-group">
    <label>Date and time range:</label>

    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="far fa-clock"></i></span>
      </div>
      <input type="text" class="form-control float-right" id="reservationtime" autocomplete="off">
    </div>
    <!-- /.input group -->
  </div>


@stop
