<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Historial medico</title>
    <link href="css/stylepdf.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="images/Logo-azul-small.png">
      </div>
      <div id="company">
        <h2 class="name">www.caldendarplus.test</h2>
        <div>Universidad Tecnológica de Nezahualcoyotl</div>
        <div>Ciudad Neza, Estado de México.</div>
        <div>Desarrollado por The Crew</div>
        <div><a href="">ITIC801-M</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">Expediente clinico</div>
          <h2 class="name">{{$user->name}} {{$user->apellido}}</h2>
          <div class="address"></div>
          <div class="name"></div>
        </div>
        <div id="invoice">
          <h1>Historial</h1>
          <div class="date">Fecha de expedición:</div>
          <div class="date"><?php $dt = new DateTime(); 
            echo $dt->format('d-M-Y'); ?></div>
        </div>
      </div>
      	<div><h3>Calendar+ ha guardado todos sus datos medicos desde que comenzo a usar la aplicación.</h3></div>
      <div id="notices">
        <div><h2>Medicamentos que ha consumido</h2></div>
        <div class="notice">
           <table border="1" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th class="total" width="180">Medicamento</th>
                  <th class="total" width="50">Fecha</th>
                  <th class="total" width="50" colspan="2">Cantidad</th>
                  <th class="total" width="60" colspan="2">Hora</th>
                </tr>
              </thead>
              <tbody>
                @forelse($medicamentos as $med)
                  <tr>
                    <td>{{$med->nombre_med}}</td>
                    <td>{{$med->fecha}}</td>
                    <td colspan="2">{{$med->cantidad_med}}</td>
                    <td colspan="2">{{$med->intervalo}}</td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="6">
                      No ha consumido medicamentos
                    </td>
                  </tr>
                @endforelse
              </tbody>
              <tfoot>
              </tfoot>
            </table>
        </div>
      </div>
      <div id="notices">
        <div><h2>Sintomas y Notas</h2></div>
        <div class="notice">
           <table border="1" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th class="total" width="180">Medicamento</th>
                  <th class="total" width="50">Fecha</th>
                  <th class="total" width="50" colspan="2">Cantidad</th>
                  <th class="total" width="60" colspan="2">Hora</th>
                </tr>
              </thead>
              <tbody>
                @forelse($medicamentos as $med)
                  <tr>
                    <td>{{$med->nombre_med}}</td>
                    <td>{{$med->fecha}}</td>
                    <td colspan="2">{{$med->cantidad_med}}</td>
                    <td colspan="2">{{$med->intervalo}}</td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="6">
                      No ha consumido medicamentos
                    </td>
                  </tr>
                @endforelse
              </tbody>
              <tfoot>
              </tfoot>
            </table>
        </div>
      </div>
    </main>
    <footer>
      Calendar+ fue desarrollado por The Crew, 2020 #QuedenseEnCasa
    </footer>
  </body>
</html>