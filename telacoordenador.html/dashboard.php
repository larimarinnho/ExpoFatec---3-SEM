<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Coordenador</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css.css/style.css">
</head>

<body class="bg-light">

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
    <!-- container principal -->
    <div class="d-flex" style="min-height: calc(100vh - 70px);"> 
        
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

        <div class="flex-grow-1 p-4" style="overflow-y: auto;"> 
            
            <h1 class="h2 fw-bold mb-4 text-dark">HOME</h1>
            
            <div class="d-flex gap-3 mb-4 flex-wrap">
                <button class="btn btn-primary-custom">
                    <i class=" bi bi-plus-circle"></i> Nova Edição
                </button>
                <button class="btn btn-outline-custom">
                    <i class="bi bi-search"></i> Pesquisar
                </button>
            </div>
            
            <div class="card card-custom mb-4">
                <div class="card-header card-header-custom">
                    <h2 class="h5 fw-bold mb-0">Projetos</h2>
                </div>
                
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-custom table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Nome do Projeto</th>
                                    <th>Curso</th>
                                    <th>Semestre</th>
                                    <th>Nota</th>
                                    <th>Avaliador</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sistema de Gestão Acadêmico</td>
                                    <td>Análise e Desenvolvimento de Sistemas</td>
                                    <td> 2025.2</td>
                                    <td><span class="badge badge-custom">8.5</span></td>
                                    <td>Prof. Adriano Ruggero</td>
                                </tr>
                                <tr>
                                    <td>App Mobile de Vendas</td>
                                    <td> Desenvolvimento de Software</td>
                                    <td>2025.2</td>
                                    <td><span class="badge badge-custom">9.0</span></td>
                                    <td>Profa. Alciene</td>
                                </tr>
                                <tr>
                                    <td>Plataforma de E-learning</td>
                                    <td>Análise e Desenvolvimento de Sistemas</td>
                                    <td>2025.1</td>
                                    <td><span class="badge badge-custom bg-warning text-dark">5.9</span></td> 
                                    <td>Prof. Herculano</td>
                                </tr>
                                <tr>
                                    <td>IoT para Monitoramento Agrícola</td>
                                    <td>Tecnologia em Eletrônica</td>
                                    <td>2025.1</td>
                                    <td><span class="badge badge-custom">8.2</span></td>
                                    <td>Prof. Ana Costa</td>
                                </tr>
                                <tr>
                                    <td>Dashboard de Análise de Dados</td>
                                    <td>Análise e Desenvolvimento de Sistemas</td>
                                    <td>2025.2</td>
                                    <td><span class="badge badge-custom">8.7</span></td>
                                    <td>Prof. Pedro Martins</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            
            </div>
    </div>
    
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
            sidebar.style.display = sidebar.style.display === 'none' ? 'block' : 'none';
        }

        function logout() {
            if (confirm('Deseja realmente sair do sistema?')) {
                window.location.href = 'login.html';
            }
        }
    </script>
</body>
</html>
