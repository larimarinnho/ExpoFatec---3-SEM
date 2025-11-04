<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Usuário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css.css/style.css">

</head>
<body class="bg-light">
     <!-- HEADER (CABEÇALHO)  -->
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
        <!--  container principal: ALINHA SIDEBAR E CONTEÚDO  -->

    <div class="d-flex" style="min-height: calc(100vh - 70px);"> 
        <!--   (MENU LATERAL)  -->
        <nav class="sidebar-custom p-3" style="width: 280px; overflow-y: auto;">
            <div class="logo-container">
                <ul class="nav flex-column">
                    <li class="nav-item"> <a href="dashboard.html" class="nav-link active" aria-current="page"><i class="bi bi-house me-2"></i>HOME</a></li>
                    <li class="nav-item"><a href="usuario.html" class="nav-link"><i class="bi bi-person me-2"></i> USUÁRIO</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-people me-2"></i>PROFESSOR</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-folder me-2"></i>PROJETOS</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-mortarboard me-2"></i>ALUNOS</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-graph-up me-2"></i>RESULTADO</a></li>
                </ul>
            </div>
        </nav>
        <!--  ÁREA DE CONTEÚDO (FORMULÁRIO E TÍTULO)  -->
        <div class="flex-grow-1 p-4" style="overflow-y: auto;"> 
            
            <!-- <h1 class="h2 fw-bold mb-4 text-dark">USUÁRIO</h1> -->
            
            <div class="d-flex flex-column align-items-center">

                <div class="card card-custom" style="max-width: 600px; width: 100%;">
                    <div class="card-header card-header-custom">
                        <h2 class="h5 fw-bold mb-0">Dados Pessoais</h2>
                    </div> 	
                    <div class="card-body">
                       <form id="userForm">
                       <div class="mb-3">
                            <label for="fullName" class="form-label fw-500">Nome Completo</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Digite seu nome completo" value="Larissa Marinho"> 
                         </div>
                         <!-- /*--- NOME SOCIAL ---*/ -->
                       <div class="mb-3">
                            <label for="socialName" class="form-label fw-500">Nome Social</label>
                            <input type="text" class="form-control" id="socialName" placeholder="Digite seu nome social (opcional)" value="Larissa">
                         </div>
                         <!-- /*--- LINHA: E-MAIL E GÊNERO ---*/ -->
                       <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label fw-500">E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="seuemail@exeplo.com" value="larissa@email.com">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="gender" class="form-label fw-500">Gênero</label>
                                <select class="form-select" id="gender">
                                    <option value="">Selecione</option>
                                    <option value="feminino">Feminino</option>
                                    <option value="masculino">Masculino</option> 
                                    <option value="outro">Outro</option>
                                </select>
                            </div>
                         </div>
                         <!-- /*--- LINHA: CPF E CELULAR ---*/ -->
                       <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cpf" class="form-label fw-500">CPF</label>
                                <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00" value="123.456.789-00">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label fw-500">Celular</label>
                                <input type="tel" class="form-control" id="phone" placeholder="(11) 99999-9999" value="(11) 98765-4321">
                            </div>
                        </div>
                        <!-- /*--- SENHA ---*/ -->
                       <div class="mb-3">
                            <label for="password" class="form-label fw-500">Senha</label>
                            <input type="password" class="form-control" id="password" placeholder="••••••••" value="senha123">
                         </div>
                            <!-- /*--- BOTÕES SALVAR/CANCELAR ---*/ -->
                       <div class="d-flex gap-3 mt-4">
                            <button type="submit" class="btn btn-primary-custom flex-grow-1">
                                <i class="bi bi-check-circle me-2"></i> Salvar Alterações
                            </button>
                            <button type="button" class="btn btn-outline-custom flex-grow-1" onclick="resetForm()">
                                <i class="bi bi-arrow-counterclockwise me-2"></i> Cancelar
                            </button>
                         </div>
                        <!-- /*--- BOTÃO ALTERAR SENHA ---*/ -->
                       <button type="button" class="btn btn-light border w-100 mt-3" onclick="window.location.href='alterar-senha.html'" style="border-color: var(--primary-red); color: var(--primary-red);">
                            <i class="bi bi-key me-2"></i> Alterar Senha
                         </button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- /*--- (BOTÕES FLUTUANTES) ---*/ -->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('nav');
            // Esta lógica esconde/mostra a sidebar. É simples, mas funciona!
            sidebar.style.display = sidebar.style.display === 'none' ? 'block' : 'none'; 
        }

        function logout() {
            if (confirm('Deseja realmente sair do sistema?')) {
                window.location.href = 'login.html';
            }
        }

        function resetForm() {
            document.getElementById('userForm').reset();
        }

        document.getElementById('userForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Dados salvos com sucesso!');
        });
    </script>
</body>
</html>