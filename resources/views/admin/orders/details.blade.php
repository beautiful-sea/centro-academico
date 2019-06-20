<div id="app"> 
  {{ Form::open(['url' => 'admin/orders/store', 'method' => 'POST','id' =>  'order-form']) }}

  <div class="container">


    <div class="invoice p-3 mb-3">
      <!-- title row -->
      <div class="row">
        <div class="col-12">
          <h4>
            <i class="fas fa-globe"></i> Atlética Vassouras.
            <small class="float-right">Data: {{date('d/m/Y')}}</small>
          </h4>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
          De
          <address>
            <strong>Atlética Vassouras</strong><br>
            Av. Expedicionário Osvaldo de Almeida Ramos, 280<br>
            Centro, Vassouras - RJ, 27700-000<br>
            Telefone: (24) 2471-8200<br>
            Email: atletica@universidadevassouras.edu.br
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          Para
          <address>
            <strong>{{$order->customer_name}}</strong><br>
            Email: {{$order->customer_email}}
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-2 invoice-col">
          <b>Pedido #{{$order->id}}</b><br>
          <br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Qtd</th>
                <th>Produto</th>
                <th>Tamanho</th>
                <th>Cor</th>
                <th>Subtotal</th>
              </tr>
            </thead>
            <tbody>
              @foreach($order->items as $o)
              <tr>
                <td>{{$o->amount}}</td>
                <td>{{$o->product->name}}</td>
                <td>{{$o->product->size}}</td>
                <td>{{$o->product->color}}</td>
                <td>R$ {{($o->unitary_value * $o->amount)}},00</td>
              </tr>

              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">

        <div class="col-12">
          <p class="lead">Data do Pedido: {{date('d/m/Y',strtotime($order->created_at))}}</p>

          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr class="pull-right">
                  <th colspan="2">Total:</th>
                  <td><strong>R$ {{$totalOrder}},00</strong></td>
                </tr>
              </tbody></table>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="col-4 offset-8">
          <a href="{{route('orders.generate_pdf', ['id_order' => $order->id])}}" target="_blank" class=" btn btn-primary"><i class="fa fa-print"></i> Imprimir</a>
        </div>
      </div>

    </div>

    {{ Form::close() }}
  </div>
