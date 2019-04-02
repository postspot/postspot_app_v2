<div style="background-color: #efefef;font-family: sans-serif;">
    <table cellspacing="0" cellpadding="10" border="0" width="600" style="margin: 0 auto;background-color: white;border-bottom: 2px solid #84344b">
        <tr><td align="center"><img style="width: 200px; margin: 30px 0px;" src="https://s3.amazonaws.com/arquivoscomprodonto/logo_lateral2.png" align="center"></td></tr>
        <tr>
            <td height="40" style="vertical-align: bottom;font-weight: bold;">Olá {{$content['nome_usuario']}}.</td>
        </tr>
        <tr>
            <td height="70" style="vertical-align: middle;padding: 15px 40px;">
                Parabéns, você deu o primeiro passo para cuidar dos seus dentes, confira abaixo os detalhes de sua contratação:<br><br>
                
                <b>Nº Protocolo:</b> {{$content['protocolo']}}<br>
                <b>Responsável financeiro:</b> {{$content['responsavel_financeiro']['nome']}}<br>
                <b>CPF:</b> {{$content['responsavel_financeiro']['cpf']}}<br>
                

                <table cellspacing="0" cellpadding="10" border="2" style="margim-bottom: 10px;">
                    <thead>
                        <tr>
                            <th>Qtd.</th>
                            <th>Nome Plano</th>
                            <th>Valor Unit</th>
                            <th>Valor Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($content['planos'] as $plano)
                        <tr>
                            <td>{{$plano['quantity']}}</td>
                            <td>{{$plano['name']}}</td>
                            <td>R$ {{ str_replace(".",",",number_format($plano['price'] / 100,2)) }}</td>
                            <td>R$ {{ str_replace(".",",",number_format($plano['price']*$plano['quantity'] / 100,2)) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td height="70" style="vertical-align: middle;padding: 15px 40px; font-size: 0.8em; text-align: center">
                Não responda este e-mail, em caso de dúvidas entre em contato conosco através do email: {{$content['operadora']['email']}}
            </td>
        </tr>
    </table>        
</div>