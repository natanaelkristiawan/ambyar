<!-- MODULE ROW // -->
<!--  The "mc:hideable" is a feature for MailChimp which allows
	you to disable certain row. It works perfectly for our row structure.
	http://kb.mailchimp.com/article/template-language-creating-editable-content-areas/
-->
<tr>
	<td align="center" valign="top">
		<!-- CENTERING TABLE // -->
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td align="center" valign="top">
					<!-- FLEXIBLE CONTAINER // -->
					<table border="0" cellpadding="0" cellspacing="0" width="{{ $var['max-width'] }}" class="flexibleContainer">
						<tr>
							<td valign="top" width="{{ $var['max-width'] }}" class="flexibleContainerCell" style="padding: 20px 15px 0;">

								<!-- CONTENT TABLE // -->
								<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td valign="top" class="flexibleContainerBox">

											<div style="text-align:{{ $var['content-align'] }};font-family:Helvetica,Arial,sans-serif;margin-bottom:0;color:#5F5F5F;line-height:135%;">

												<hr style="border: 0; border-top: 1px dashed #d2d2d2; border-top: 1px dashed {{ $var['border-color'] }};">

												<h2 style="margin-bottom: 15px; margin-top: 30px;">Hai <strong>NUAN Restaurant</strong></h2>
												<p style="margin-bottom: 5px;">ada pesanan baru nih</p>
												<p style="margin-bottom: 20px;">dengan nomor pesanan <b>0132</b> dari:</p>

												<table border="0" cellpadding="0" cellspacing="0" width="100%" style="display: table; margin-bottom: 30px;">
													<tbody>
														<tr style="border-bottom: 1px solid #d2d2d2; border-bottom: 1px solid {{ $var['border-color' }};">
															<td width="40%; padding: 10px 5px;"><p style="margin: 0;">Nama Pemesan:</p></td>
															<td align="right" style="padding: 10px 5px;"><p style="margin: 0;">Ajeng Wulandari</p></td>
														</tr>
														<tr style="border-bottom: 1px solid #d2d2d2; border-bottom: 1px solid {{ $var['border-color' }};">
															<td width="40%; padding: 10px 5px;"><p style="margin: 0;">Nomor Telepon:</p></td>
															<td align="right" style="padding: 10px 5px;"><p style="margin: 0;">+62 8911 234</p></td>
														</tr>
														<tr style="border-bottom: 1px solid #d2d2d2; border-bottom: 1px solid {{ $var['border-color' }};">
															<td valign="top" width="40%; padding: 10px 5px;"><p style="padding-top: 10px; margin: 0;">Alamat:</td>
															<td valign="top" align="right" style="padding: 10px 5px;"><p style="margin: 0;">Jl. Bukit Barisan No.3, Pemecutan, Kec. Denpasar Bar., Kota Denpasar, Bali 80232, Indonesia</p></td>
														</tr>
													</tbody>
												</table>

												<h3 style="margin-bottom: 10px; padding-left: 5px; padding-right: 5px;"><b>Product yang dipesan</b></h2>
												<table border="0" cellpadding="0" cellspacing="0" width="100%" style="display: table; margin-bottom: 30px;">
													<tbody style="width: 100%;">
														<tr style="border-bottom: 1px dashed #d2d2d2; border-bottom: 1px dashed {{ $var['border-color' }};">
															<td width="80%" style="padding: 10px 5px;"><p style="margin: 0;">Spaghetti Sauce with Ground Beef</p></td>
															<td align="right" width="20%" style="padding: 10px 5px;"><p style="margin: 0;">x&nbsp;1</p></td>
														</tr>
														<tr style="border-bottom: 1px dashed #d2d2d2; border-bottom: 1px dashed {{ $var['border-color' }};">
															<td width="80%" style="padding: 10px 5px;"><p style="margin: 0;">Club Sandwich</p></td>
															<td align="right" width="20%" style="padding: 10px 5px;"><p style="margin: 0;">x&nbsp;1</p></td>
														</tr>
														<tr style="border-bottom: 1px dashed #d2d2d2; border-bottom: 1px dashed {{ $var['border-color' }};">
															<td width="80%" style="padding: 10px 5px;"><p style="margin: 0;">Orange Juice</p></td>
															<td align="right" width="20%" style="padding: 10px 5px;"><p style="margin: 0;">x&nbsp;1</p></td>
														</tr>
													</tbody>
												</table>

												<h3 style="margin-bottom: 10px; padding-left: 5px; padding-right: 5px;"><b>Detil pembayaran</b></h2>
												<table border="0" cellpadding="0" cellspacing="0" width="100%" style="display: table; margin-bottom: 30px;">
													<tbody>
														<tr style="border-bottom: 1px dashed #d2d2d2; border-bottom: 1px dashed {{ $var['border-color' }};">
															<td style="padding: 10px 5px;"><p style="margin: 0;">Harga</p></td>
															<td style="padding: 10px 5px;" align="right"><p style="margin: 0;">Rp. 90.000</p></td>
														</tr>
														<tr style="border-bottom: 1px dashed #d2d2d2; border-bottom: 1px dashed {{ $var['border-color' }};">
															<td style="padding: 10px 5px;"><p style="margin: 0;">Biaya layanan</p></td>
															<td style="padding: 10px 5px;" align="right"><p style="margin: 0;">Free</p></td>
														</tr>
														<tr style="border-bottom: 1px dashed #d2d2d2; border-bottom: 1px dashed {{ $var['border-color' }};">
															<td style="padding: 10px 5px;"><p style="margin: 0;">Ongkos kirim</p></td>
															<td style="padding: 10px 5px;" align="right"><p style="margin: 0;">Rp. 5.000</p></td>
														</tr>
														<tr style="border-bottom: 1px dashed #d2d2d2; border-bottom: 1px dashed {{ $var['border-color' }};">
															<td style="padding: 10px 5px;"><p style="margin: 0;">Metode pembayaran</p></td>
															<td style="padding: 10px 5px;" align="right"><p style="margin: 0;">Gopay</p></td>
														</tr>
															<tr style="border-bottom: 1px dashed #d2d2d2; border-bottom: 1px dashed {{ $var['border-color' }};">
															<td style="padding: 10px 5px; background-color: #f2f2f2; background-color: {{ $var['highlight-color'] }};"><p style="margin: 0;"><strong>Total</strong></p></td>
															<td style="padding: 10px 5px; background-color: #f2f2f2; background-color: {{ $var['highlight-color'] }};" align="right"><p style="margin: 0;"><strong>Rp. 95.000</strong></p></td>
														</tr>
													</tbody>
												</table>

												<p style="margin-bottom: 20px;">Eit, tapi tunggu konfirmasi pembayaran dari (Nama Customer) dulu ya sebelum menekan tombol ubah status di bawah ini:</p>

												<form action="https://coklat.otesuto.com/api/changeorderstatus/4/2/0/1" method="POST" target="_blank">
													<input
														name="_method" type="hidden" value="PUT" style="font-size: 19.6429px;"><input name="_token"
														type="hidden" value="C7TH6jBA0zynDuKP6gv0RX1jusQwesk9C53HeAyf" style="font-size: 19.6429px;">
													<button
														style="background-color: rgb(0, 140, 186); border: none; color: white; text-align: center; text-decoration: none; display: block; border-radius: 4px; width: 100%;">Pesanan
														Sedang Diproses</button>
													<hr style="border: 0; border-top: 1px solid #d2d2d2; border-top: 1px solid {{ $var['border-color'] }};">
												</form>

												<form action="https://coklat.otesuto.com/api/changeorderstatus/4/3/0/1" method="POST" target="_blank">
													<input
														name="_method" type="hidden" value="PUT" style="font-size: 19.6429px;"><input name="_token"
														type="hidden" value="C7TH6jBA0zynDuKP6gv0RX1jusQwesk9C53HeAyf" style="font-size: 19.6429px;">
													<button
														style="background-color: rgb(0, 140, 186); border: none; color: white; text-align: center; text-decoration: none; display: block; border-radius: 4px; width: 100%;">Pesanan
														Sudah Siap</button>
													<hr style="border: 0; border-top: 1px solid #d2d2d2; border-top: 1px solid {{ $var['border-color'] }};">
												</form>

												<form action="https://coklat.otesuto.com/api/changeorderstatus/4/4/0/1" method="POST" target="_blank">
													<input
														name="_method" type="hidden" value="PUT" style="font-size: 19.6429px;"><input name="_token"
														type="hidden" value="C7TH6jBA0zynDuKP6gv0RX1jusQwesk9C53HeAyf" style="font-size: 19.6429px;">
													<button
														style="background-color: rgb(0, 140, 186); border: none; color: white; text-align: center; text-decoration: none; display: block; border-radius: 4px; width: 100%;">Pesanan
														Diantarkan</button>
													<hr style="border: 0; border-top: 1px solid #d2d2d2; border-top: 1px solid {{ $var['border-color'] }};">
												</form>

												<form action="https://coklat.otesuto.com/api/changeorderstatus/4/5/0/1" method="POST" target="_blank">
													<input
														name="_method" type="hidden" value="PUT" style="font-size: 19.6429px;"><input name="_token"
														type="hidden" value="C7TH6jBA0zynDuKP6gv0RX1jusQwesk9C53HeAyf" style="font-size: 19.6429px;">
													<button
														style="background-color: rgb(0, 140, 186); border: none; color: white; text-align: center; text-decoration: none; display: block; border-radius: 4px; width: 100%;">Pesanan
														Diterima</button>
													<hr style="border: 0; border-top: 1px solid #d2d2d2; border-top: 1px solid {{ $var['border-color'] }};">
												</form>

											</div>

											<!-- <div style="text-align:{{ $var['content-align'] }};font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;">
												{!! isset($content) ? $content : '' !!}
											</div> -->

										</td>
									</tr>
								</table>
								<!-- // CONTENT TABLE -->

							</td>
						</tr>
					</table>
					<!-- // FLEXIBLE CONTAINER -->
				</td>
			</tr>
		</table>
		<!-- // CENTERING TABLE -->
	</td>
</tr>
<!-- // MODULE ROW -->