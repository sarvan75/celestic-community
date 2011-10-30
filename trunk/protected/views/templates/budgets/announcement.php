<html>
<style type="text/css">
* {font-family:Tahoma, Verdana, Arial;}
#template{font-size:13px;font-family:Verdana, Tahoma, Arial;}
</style>
<body>
	<div align="center" style="margin:auto;">
		<table id="template" style="width:650px">
			<thead style="background-color:#263849; color:#CCCCCC;">
				<tr>
					<th scope="col" style="border-top:5px solid #5188C2; text-align:left;">
						<img src="https://qbit.com.mx/labs/celestic/images/celestic.png" alt="<?php echo $applicationName; ?>" />
					</th>
				</tr>
			</thead>
			<tfoot style="background-color:#263849; color:#CCCCCC; padding:5px;">
				<tr>
					<td id="footer" style="padding:5px;">
						<p>
							Copyright &copy; 2011 <?php echo $applicationName; ?>. Todos los derechos reservados. | <a href="<?php echo $applicationUrl; ?>/?r=site/privacy"></a>Declaraci&oacute;n de Privacidad<a>
						</p>
						<p style="font-size:11px;">
							Este mensaje y cualquier documento que lleve adjunto, es confidencial y destinado &uacute;nicamente a la persona o entidad a quien ha sido enviado. Si Usted ha recibido este mensaje por error, le informamos que el contenido en el mismo es reservado y el uso no autorizado est&aacute; prohibido legalmente, por ello, por favor, le rogamos que nos lo notifique al e-mail info@celestic.mx<br />
							Aviso: Qbit Mexhico y el equipo de <?php echo $applicationName; ?> en ning&uacute;n momento colecta informaci&oacute;n personal de sus usuarios.<br />
							No respondas a este mensaje, fue enviado utilizando un servicio autom&aacute;tico de notificaciones.
						</p>
					</td>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<td valign="top" id="maincontent" style="padding-top:15px;">
						<p>Una presupuesto para el proyecto <b><?php echo $budget->Projects->project_name; ?></b> esta pendiente para su revisi&oacute;n.</p>
						<p>
							Si deseas aprovarlo o cancelarlo puedes utilizar los siguientes enlaces:<br />
							<div style="padding:15px; background-color:#F2F2F2; border:1px solid #cccccc;">
								<span style="border:1px solid #000000; background-color:#263849; font-size:11px; padding:4px 10px 5px; font-weight:bold; margin:5px;">
									<a style="color:#ffffff" href="<?php echo $urlToAprove; ?>" target="_blank">Aprobar</a>
								</span>
								<span style="border:1px solid #cccccc; background-color:#cccccc; font-size:11px; padding:4px 10px 5px; font-weight:bold; margin:5px;">
									<a style="color:#263849" href="<?php echo $urlToDeclive; ?>" target="_blank">Rechazar</a>
								</span>
							</div>
						</p>
						<p>
							El archivo que contiene la informaci&oacute;n sobre esta propuesta se encuentra en:<br />
							<a href="<?php echo $urltoPDF; ?>" target="_blank"><?php echo $urltoPDF; ?></a>
						</p>
						<p>
							Para ver m&aacute;s detalles sobre esta propuesta y los par&aacute;metros tomados en cuenta en el desarrollo de este proyecto, puedes ir directamente a esta direcci&oacute;n:<br />.
							<a href="<?php echo $applicationUrl; ?>"><?php echo $applicationName; ?></a>
						</p>
						<p>
							<a href="<?php echo $applicationUrl; ?>"><?php echo $applicationName; ?> Team</a>
						</p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>