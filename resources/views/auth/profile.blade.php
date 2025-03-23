<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodingDung | Modelo de Perfil</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container light-style flex-grow-1 container-p-y">
        <!-- Header with back button -->
        <div class="d-flex justify-content-between align-items-center py-3">
            <a href="{{ route('welcome') }}" class="btn btn-outline-primary">Voltar para a Tela Inicial</a>
            <h4 class="font-weight-bold py-3 mb-4">Configurações da conta</h4>
        </div>
        
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">Geral</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Mudar senha</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Informações</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Links sociais</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-connections">Conexões</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications">Notificações</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Carregar nova foto
                                        <input type="file" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Resetar</button>
                                    <div class="text-light small mt-1">Permitido JPG, GIF ou PNG. Tamanho máximo de 800K</div>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Nome de usuário</label>
                                    <input type="text" class="form-control mb-1" value="Noome de usuário">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nome</label>
                                    <input type="text" class="form-control" value="nome">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" value="email">
                                    <div class="alert alert-warning mt-3">
                                        Seu e-mail não está confirmado. Verifique sua caixa de entrada.<br>
                                        <a href="javascript:void(0)">Reenviar confirmação</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Empresa</label>
                                    <input type="text" class="form-control" value="Company Ltd.">
                                </div>
                            </div>
                        </div>
                        <!-- Other tabs content (same as in your code) -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Botão de Logout -->
        <div class="text-right mt-3">
            <form action="{{ route('welcome') }}" method="GET" style="display: inline;">
                @csrf <!-- Necessário para proteger contra CSRF -->
                <button type="submit" class="btn btn-danger">Sair</button>
            </form>
        </div>

        <div class="text-right mt-3">
            <button type="button" class="btn btn-primary">Salvar alterações</button>&nbsp;
            <button type="button" class="btn btn-default">Cancelar</button>
        </div>
    </div>
    
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
