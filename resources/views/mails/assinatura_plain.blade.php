Olá {{$content['nome_usuario']}}.

Parabéns, você deu o primeiro passo para cuidar dos seus dentes, confira abaixo os detalhes de sua contratação:
                
Nº Protocolo: {{$content['protocolo']}}
Responsável financeiro: {{$content['responsavel_financeiro']['nome']}}
CPF: {{$content['responsavel_financeiro']['cpf']}}


Qtd    Nome Plano    Valor Unit    Valor Total

@foreach ($content['planos'] as $plano)
    {{$plano['quantity']}}    {{$plano['name']}}    R$ {{$plano['price']}}    R$ {{$plano['price']*$plano['quantity']}}
@endforeach

Não responda este e-mail, em caso de dúvidas entre em contato conosco através do email: contatoDaOperadora@com.br
