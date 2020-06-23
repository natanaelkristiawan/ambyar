
<!-- EMAIL HEADER // -->
<!--
	The table "emailBody" is the email's container.
	Its width can be set to 100% for a color band
	that spans the width of the page.
-->
<table bgcolor="{{ $var['background-color'] }}" border="0" cellpadding="0" cellspacing="0" width="500" width="{{ $var['max-width'] }}" id="emailHeader">

	<!-- HEADER ROW // -->
	<tr>
		<td align="center" valign="top">
			<!-- CENTERING TABLE // -->
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td align="left" valign="top">
						<!-- FLEXIBLE CONTAINER // -->
						<table border="0" cellpadding="0" cellspacing="0" class="flexibleContainer">
							<tr>
								<td valign="top" width="{{ $var['max-width'] }}" class="flexibleContainerCell" style="padding: 30px 15px;">

									<!-- CONTENT TABLE // -->
									<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="middle" id="invisibleIntroduction" class="flexibleContainerBox" style="display:none !important; mso-hide:all;">
												<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:100%;">
													<tr>
														<td align="left" class="textContent">
															<div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#828282;text-align:center;line-height:120%;">
																{{ isset($subject) ? $subject : '' }}
															</div>
														</td>
													</tr>
												</table>
											</td>
											<td align="left" valign="middle" class="flexibleContainerBox">
												<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:100%;">
													<tr>
														<td align="left" class="textContent">
															<img src="../../img/uploads/demo/logo--nuan.png" 
																 srcset="../../img/uploads/demo/logo--nuan@2x.png 2x, 
																 ../../img/uploads/demo/logo--nuan@3x.png 3x">
															<!-- @if(isset($var['logo']))
															<img src="{{ $var['logo'] }}" style="height:{{ $var['logo-height'] }}px;">
															@endif -->
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
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
	<!-- // END -->

</table>
<!-- // END -->