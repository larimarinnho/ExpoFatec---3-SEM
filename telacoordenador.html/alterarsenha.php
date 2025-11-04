<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha</title>
    <!-- /*--- LINKS CSS E BOOTSTRAP ---*/ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

    <!-- /*--- HEADER (CABEÇALHO) ---*/ -->
    <div class="header-custom p-3 d-flex flex-column">
        <div class="d-flex justify-content-between align-items-center mb-2">
            
            <div class="d-flex align-items-center gap-3">
                <img src="images/logotipo-fatec.png" style="height: 35px;" alt="Logotipo da Fatec">
                <img src="images/logo-cps-header.png" style="height: 35px;" alt="Logotipo do Centro Paula de Souza">
            </div> 
            
            <div class="d-flex align-items-center gap-3">
                <span class="small"> Bem vindo, 
                    <strong> Coordenador </strong>
                </span>
                <i class="bi bi-person-circle" style="font-size: 24px;"></i>
            </div>
        </div>
        
        <div class="d-flex justify-content-between align-items-center">
        </div>
    </div>
    
    <!-- /*--- MAIN CONTAINER: ALINHA SIDEBAR E CONTEÚDO ---*/ -->
    <div class="d-flex" style="min-height: calc(100vh - 70px);"> 
        
        <!-- /*--- SIDEBAR (MENU LATERAL) ---*/ -->
        <nav class="sidebar-custom p-3" style="width: 280px; overflow-y: auto;">
            <ul class="nav flex-column">
                <li class="nav-item"><a href="dashboard.html" class="nav-link"><i class="bi bi-house me-2"></i> HOME</a></li>
                <li class="nav-item"><a href="usuario.html" class="nav-link"><i class="bi bi-person me-2"></i> USUÁRIO</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-people me-2"></i> PROFESSOR</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-folder me-2"></i> PROJETOS</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-mortarboard me-2"></i> ALUNOS</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-graph-up me-2"></i> RESULTADO</a></li>
            </ul>
        </nav>

        <!-- /*--- ÁREA DE CONTEÚDO (FORMULÁRIO) ---*/ -->
        <div class="flex-grow-1 p-4 d-flex flex-column align-items-center" style="overflow-y: auto;">
            
            <!-- <h1 class="h2 fw-bold mb-4 text-dark">ALTERAR SENHA</h1> -->
            
            <div class="card card-custom" style="max-width: 450px; width: 100%;">
                <div class="card-header card-header-custom">
                    <h2 class="h5 fw-bold mb-0 text-center">Alterar Senha</h2>
                </div>
                <div class="card-body">
                    
                    <div id="alertMessage" class="alert d-none" role="alert"></div>

                    <form id="changePasswordForm">
                        <div class="alert alert-light border mb-4" role="alert" style="border-color: var(--primary-red);">
                            <h6 class="alert-heading fw-bold small mb-2" style="color: var(--primary-red);">Requisitos de Senha:</h6>
                            <ul class="small mb-0 ps-3">
                                <li>Mínimo 8 caracteres</li>
                                <li>Pelo menos uma letra maiúscula</li>
                                <li>Pelo menos um número</li>
                                <li>Pelo menos um caractere especial (!@#$%)</li>
                            </ul>
                        </div>

                        <div class="mb-3">
                            <label for="oldPassword" class="form-label fw-500">Senha Antiga</label>
                            <input type="password" class="form-control" id="oldPassword" placeholder="Digite sua senha atual" required>
                        </div>

                        <div class="mb-3">
                            <label for="newPassword" class="form-label fw-500">Nova Senha</label>
                            <input type="password" class="form-control" id="newPassword" placeholder="Digite sua nova senha" required>
                        </div>

                        <div class="mb-4">
                            <label for="confirmPassword" class="form-label fw-500">Confirmar Nova Senha</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirme sua nova senha" required>
                        </div>

                        <div class="d-flex gap-3">
                            <button type="submit" class="btn btn-primary-custom flex-grow-1">
                                <i class="bi bi-check-circle me-2"></i> Confirmar
                            </button>
                            <button type="button" class="btn btn-outline-custom flex-grow-1" onclick="cancelarAlteracao()">
                                <i class="bi bi-x-circle me-2"></i> Cancelar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /*--- FLOATING BUTTONS (BOTÕES FLUTUANTES) ---*/ -->
    <div class="position-fixed bottom-0 end-0 p-4 d-flex flex-column gap-2" style="z-index: 1000;">
        <button class="btn float-btn-custom rounded-circle shadow d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; color: white;" title="Menu" onclick="toggleSidebar()">
            <i class="bi bi-list"></i>
        </button>
        <button class="btn float-btn-custom rounded-circle shadow d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; color: white;" title="Home" onclick="window.location.href='dashboard.html'">
            <i class="bi bi-house"></i>
        </button>
        <button class="btn float-btn-custom rounded-circle shadow d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; color: white;" title="Sair" onclick="logout()">
            <i class="bi bi-box-arrow-right"></i>
        </button>
    </div>

    <!-- /*--- SCRIPTS JAVASCRIPT ---*/ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('nav');
            sidebar.style.display = sidebar.style.display === 'none' ? 'block' : 'none';
        }

        function logout() {
            if (confirm('Deseja realmente sair do sistema?')) {
                window.location.href = 'login.html';
            }
        }

        function validarSenha(senha) {
            const minLength = senha.length >= 8;
            const hasUpperCase = /[A-Z]/.test(senha);
            const hasNumber = /[0-9]/.test(senha);
            const hasSpecialChar = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(senha);
            return minLength && hasUpperCase && hasNumber && hasSpecialChar;
        }

        function mostrarAlerta(mensagem, tipo) {
            const alertDiv = document.getElementById('alertMessage');
            alertDiv.textContent = mensagem;
            alertDiv.className = `alert alert-${tipo} d-block`;
            setTimeout(() => {
                alertDiv.classList.add('d-none');
            }, 4000);
        }

        document.getElementById('changePasswordForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const oldPassword = document.getElementById('oldPassword').value;
            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (!oldPassword || !newPassword || !confirmPassword) {
                mostrarAlerta('Todos os campos são obrigatórios!', 'danger');
                return;
            }

            if (newPassword !== confirmPassword) {
                mostrarAlerta('As senhas não coincidem!', 'danger');
                return;
            }

            if (!validarSenha(newPassword)) {
                mostrarAlerta('A nova senha não atende aos requisitos de segurança!', 'danger');
                return;
            }

            if (oldPassword === newPassword) {
                mostrarAlerta('A nova senha não pode ser igual à anterior!', 'danger');
                return;
            }

            mostrarAlerta('Senha alterada com sucesso!', 'success');
            setTimeout(() => {
                window.location.href = 'usuario.html';
            }, 2000);
        });

        function cancelarAlteracao() {
            if (confirm('Deseja cancelar a alteração de senha?')) {
                window.location.href = 'usuario.html';
            }
        }
    </script>
</body>
</html>