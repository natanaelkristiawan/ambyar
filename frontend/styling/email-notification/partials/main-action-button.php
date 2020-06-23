<!-- @if(isset($button)) -->
<!-- MODULE ROW // -->
<tr>
	<td align="center" valign="top">
		<!-- CENTERING TABLE // -->
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr style="padding-top:0;">
				<td align="center" valign="top">
					<!-- FLEXIBLE CONTAINER // -->
					<table border="0" cellpadding="0" cellspacing="0" width="100%" width="{{ $var['max-width'] }}" class="flexibleContainer">
						<tr>
							<td style="padding: 20px 15px;" align="center" valign="top" width="{{ $var['max-width'] }}" class="flexibleContainerCell">

								<!-- CONTENT TABLE // -->
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="emailButton" style="background-color: {{ $var['main-top-color'] }}; border-radius:4px;">
									<tr>

										<td align="center" valign="middle" class="buttonContent">
											<a style="color:{{ $var['button-text-color'] }};text-decoration:none;font-family:Helvetica,Arial,sans-serif;" href="{{ isset($button['url']) ? $button['url'] : url('/') }}" target="_blank">Cek status pembayaran</a>
										</td>

										<!-- <td align="center" valign="middle" class="buttonContent" style="padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;">
											<a style="color:{{ $var['button-text-color'] }};text-decoration:none;font-family:Helvetica,Arial,sans-serif;font-size:17px;line-height:135%;" href="{{ isset($button['url']) ? $button['url'] : url('/') }}" target="_blank">{{ isset($button['label']) ? $button['label'] : 'Go To Our Site' }}</a>
										</td> -->

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
<!-- @endif -->