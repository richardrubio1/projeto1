@extends('templates.layout')
@section('content-wrap')
<link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
        <div class="content-wrap">

                <div class="main">
                    <div class="container-fluid">

                        <form  method="GET" action="{{ route('produtos.index') }}">
                          <div class="row">
                            <div class="col-lg-6">
                              
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-success btn-flat m-b-15 m-l-15">Filtrar</button>
                              </div>
                          </div>



                        </form>
                        <!-- /# row -->
                        <section id="main-content">


                          <div class="row">
                              <div class="col s12">
                                  <p class="card-intro">
                                      &nbsp;
                                      <a class="btn btn-primary btn-flat btn-addon m-b-10 m-l-5" href="{{ route('produtos.index') }}">
                                          <i class="ti-plus"></i>Adicionar
                                      </a>
                                  </p>
                                  <div class="card table-responsive">
                                    <h4>Listagem de Clientes</h4>
                                      @if(count($produtos))
                                      <table class="table table-bordered">
                                          <thead>
                                              <tr>
                                                  <th>ID</th>
                                                  <th>Produto</th>
                                                  <th>Quantidade</th>
                                                  <th>Preço</th>
                                              </tr>
                                          </thead>

                                          <tbody>
                                              @foreach($produtos as $produto)
                                              <tr class="with-options">
                                                  <td>{{$produto->id}}</td>
                                                  <td>{{$produto->nome}}</td>
                                                  <td>{{$produto->quantidade}}</td>
                                                  <td>{{$produto->preco}}</td>>
                                                  
                                                  </td>

                                              </tr>
                                              @endforeach
                                          </tbody>
                                      </table>
                                      @else
                                      <p class="alert-disable">Não há clientes Cadastrados.</p>
                                      @endif
                                  </div>
                                 
                              </div>
                          </div>
                        </section>
                      </div>
                    </div>
                  </div>
@endsection