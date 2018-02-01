<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Hola</title>
	{!! Html::style('css/pdf.css') !!}
</head>
<body>
	<header class="clearfix">
      @include('pdf.header')
    </header>
	<main>
      <div id="invoicec">
          <h1>Titulo</h1>
          <div class="date">Fecha de consulta: {{$fecha}}</div>
        </div>
        <br>
		<table border="0" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th class="no">#</th>
					<th class="desc">DESCRIPCION</th>
					<th class="unit">PRECIO UNIDAD</th>
					<th class="total">TOTAL</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="no">{{ $data['quantity'] }}</td>
					<td class="desc">{{ $data['description'] }}</td>
					<td class="unit">{{ $data['price'] }}</td>
					<td class="total">{{ $data['total'] }}</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2"></td>
					<td>TOTAL</td>
					<td>$6,500.00</td>
				</tr>
			</tfoot>
		</table>
	<div id="thanks">¡Gracias!</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
	</main>
	<footer>
      @include('pdf.footer')
      <div align="right">
    
      </div>
    </footer>
</body>
</html>