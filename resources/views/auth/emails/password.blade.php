<h4>VTE AgendAtivo - Redefinição de Senha</h4>

Clique <strong><a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}">aqui</a></strong>
 para redefinir sua senha.

<p>
    Ou copie este link para a sua barra de endereços:
    <br><br>
    {{ $link }}
</p>
