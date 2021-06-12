@extends('layout.v_template')

@section('title','Detail Transaksi')
@section('halaman','Detail Transaksi')

@section('content')
<div class="card border-primary mb-3">
	  <div class="card-body">

	  	<h3><i class="fas fa-fw fa-shopping-cart"></i> Riwayat Transaksi</h3>
	  	<strong>ID Pesan : {{$totalpesan->id_pesan}}</strong>
	  	<p align="right"><b>Tanggal Pesan :</b> {{$totalpesan->tanggal}}</p>
	  	<div class="table-responsive">
	<table class="table">
		<thead class="table-light">
			<tr>
				<th>No</th>
				<th>Nama Produk</th>
				<th>Jumlah</th>
				<th>Harga Produk</th>
				<th>Total Harga</th>	
			</tr>
		</thead>
		<tbody>
			<?php $no=1; ?>
			@foreach ($detailk as $datas)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $datas->nama_produk }}</td>
					<td>{{ $datas->jumlah }}</td>
					<td align="left">Rp.{{ number_format($datas->hargajual_produk) }},-</td>
					<td align="left">Rp.{{ number_format($datas->jumlah_harga) }},-</td>
				</tr>
			@endforeach
			<tr>
				<td colspan="4"></td>
				<td>Rp. {{number_format($totalpesan->jumlah_harga)}},-</td>
			</tr>	
		</tbody>
	</table>
</div>
	  	</div>
	  </div>
@endsection