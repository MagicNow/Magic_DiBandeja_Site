<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>DiBandeja - Novo parceiro</title>
        <style>
        	body {
        		background-color: #f4f4f4;
        	}
        </style>
    </head>
    <body style="width:100%; margin:0; padding:0; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; background-color: #f4f4f4;">
    	<table border="0" cellpadding="0" cellspacing="0" width="100%" id="headerTable" style="background-color: #293666" bgcolor="#293666">
    		<tr><td colspan="3" height="10" style="height: 10px; font-size: 0;">&nbsp;</td></tr>
    		<tr>
				<td>&nbsp;</td>
				<td class="preheader" style="color: #fff; width: 500px; text-align: center;" width="500">
					<p style="margin: 0; text-align: center;"><b>Cadastro nº {{ $parceiro->id }}!</b></p>
					<p style="margin: 0; text-align: center;">Adicione <a href="mailto:noreply@dibandeja.com.br" target="_blank" style="color: #fff">noreply@dibandeja.com.br</a> aos seus contatos.</p>
				</td>
				<td>&nbsp;</td>
			</tr>
			<tr><td colspan="3" height="10" style="height: 10px; font-size: 0;">&nbsp;</td></tr>
		</table>
    	<center>
	        <table border="0" cellpadding="0" cellspacing="0" width="500" id="bodyTable">
				<tr>
					<td height="40" style="height: 40px;">&nbsp;</td>
				</tr>
				<tr>
					<td><img src="http://dibandeja.com.br/assets/images/logo.png" alt="DiBandeja"></td>
				</tr>
				<tr>
					<td height="30" style="height: 40px;">&nbsp;</td>
				</tr>
				<tr style="background-color: #f4f4f4;">
					<td bgcolor="#f4f4f4" style="background-color: #f4f4f4;">
						<p style="margin: 0; color:#333; font: 14px Arial,'Helvetica Neue',Helvetica,sans-serif;">DiBandeja recebeu um novo cadastro de parceiro, segue abaixo dados cadastrados:</p><br><br>
						@if (!empty($parceiro->tipo))
							<p style="margin: 0; color:#333; font: 14px Arial,'Helvetica Neue',Helvetica,sans-serif;">Tipo: <b>{{ $parceiro->tipo }}</b></p>
						@endif
						@if (!empty($parceiro->nome))
							<p style="margin: 0; color:#333; font: 14px Arial,'Helvetica Neue',Helvetica,sans-serif;">Nome: <b>{{ $parceiro->nome }}</b></p>
						@endif
						@if (!empty($parceiro->apelido))
							<p style="margin: 0; color:#333; font: 14px Arial,'Helvetica Neue',Helvetica,sans-serif;">
							Apelido: <b>{{ $parceiro->apelido }}</b></p>
						@endif
						@if (!empty($parceiro->profissao))
							<p style="margin: 0; color:#333; font: 14px Arial,'Helvetica Neue',Helvetica,sans-serif;">
							Profissão: <b>{{ $parceiro->profissao }}</b></p>
						@endif
						@if (!empty($parceiro->emai))
							<p style="margin: 0; color:#333; font: 14px Arial,'Helvetica Neue',Helvetica,sans-serif;">E-mail: <b>{{ $parceiro->email }}</b></p>
						@endif
						@if (!empty($parceiro->telefone))
							<p style="margin: 0; color:#333; font: 14px Arial,'Helvetica Neue',Helvetica,sans-serif;">Telefone: <b>{{ $parceiro->telefone }}</b></p>
						@endif
						@if (!empty($parceiro->cep))
							<p style="margin: 0; color:#333; font: 14px Arial,'Helvetica Neue',Helvetica,sans-serif;">CEP: <b>{{ $parceiro->cep }}</b></p>
						@endif
						@if (!empty($parceiro->endereco))
							<p style="margin: 0; color:#333; font: 14px Arial,'Helvetica Neue',Helvetica,sans-serif;">
							Endereço: <b>{{ $parceiro->endereco }}</b></p>
						@endif
						@if (!empty($parceiro->numero))
							<p style="margin: 0; color:#333; font: 14px Arial,'Helvetica Neue',Helvetica,sans-serif;">Número: <b>{{ $parceiro->numero }}</b></p>
						@endif
						@if (!empty($parceiro->complemento))
							<p style="margin: 0; color:#333; font: 14px Arial,'Helvetica Neue',Helvetica,sans-serif;">
							Complemento: <b>{{ $parceiro->complemento }}</b></p>
						@endif
						@if (!empty($parceiro->bairro))
							<p style="margin: 0; color:#333; font: 14px Arial,'Helvetica Neue',Helvetica,sans-serif;">Bairro: <b>{{ $parceiro->bairro }}</b></p>
						@endif
						@if (!empty($parceiro->cidade))
							<p style="margin: 0; color:#333; font: 14px Arial,'Helvetica Neue',Helvetica,sans-serif;">Cidade: <b>{{ $parceiro->cidade }}</b></p>
						@endif
						@if (!empty($parceiro->estado))
							<p style="margin: 0; color:#333; font: 14px Arial,'Helvetica Neue',Helvetica,sans-serif;">Estado: <b>{{ $parceiro->estado }}</b></p>
						@endif
					</td>
					<td bgcolor="#f4f4f4" style="background-color: #f4f4f4;" width="30" style="width: 30px;"></td>
				</td>
				<tr style="background-color: #f4f4f4;">
					<td colspan="3" height="30" style="height: 30px; background-color: #f4f4f4;" bgcolor="#f4f4f4">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="3" height="30" style="height: 30px;">&nbsp;</td>
				</tr>
	        </table>
        </center>
    </body>
</html>