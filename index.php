<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management</title>
    <link rel="stylesheet" href="./src/css/reset.css">
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="stylesheet" href="./src/css/overlapping-elements.css">
</head>
<body>
    <header>
        <img src="./src/img/logo.png" alt="Logo">
        <nav>
            <p>Todos os quadros</p>

            <ul>
                <li id="select">Plataforma de A</li>
                <li>Plataforma de B</li>
                <li>Plataforma de C</li>
                <li> + Criar novo quadro</li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="header-task">
            <h1>Plataforma Launch</h1>
            <button type="button" onclick="addTask()">+ Adicionar Nova Tarefa</button>
        </div>

        <div class="tasks-columns">
            <div class="task-column">
                <div class="tasks">
                    <h3>Pendencias</h3>
        
                    <div class="task">
                        <h2>Criar tela inicial</h2>
                        <p>0 de 4 completados</p>
                    </div>
                    <div class="task">
                        <h2>Criar tela inicial</h2>
                        <p>0 de 4 completados</p>
                    </div>
                    <div class="task">
                        <h2>Criar tela inicial</h2>
                        <p>0 de 4 completados</p>
                    </div>
                    <div class="task">
                        <h2>Criar tela inicial</h2>
                        <p>0 de 4 completados</p>
                    </div>
                </div>
            </div>
            <div class="task-column">
                <div class="tasks">
                    <h3>Pendencias</h3>
        
                    <div class="task">
                        <h2>Criar tela inicial</h2>
                        <p>0 de 4 completados</p>
                    </div>
                    <div class="task">
                        <h2>Criar tela inicial</h2>
                        <p>0 de 4 completados</p>
                    </div>
                    <div class="task">
                        <h2>Criar tela inicial</h2>
                        <p>0 de 4 completados</p>
                    </div>
                    <div class="task">
                        <h2>Criar tela inicial</h2>
                        <p>0 de 4 completados</p>
                    </div>
                </div>
            </div>
            <div class="task-column">
                <div class="tasks">
                    <h3>Pendencias</h3>
        
                    <div class="task">
                        <h2>Criar tela inicial</h2>
                        <p>0 de 4 completados</p>
                    </div>
                    <div class="task">
                        <h2>Criar tela inicial</h2>
                        <p>0 de 4 completados</p>
                    </div>
                    <div class="task">
                        <h2>Criar tela inicial</h2>
                        <p>0 de 4 completados</p>
                    </div>
                    <div class="task">
                        <h2>Criar tela inicial</h2>
                        <p>0 de 4 completados</p>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <section class="display-none">
        <form action="/src/php/send-to-db.php" method="post">
           <h1>Adicionar Tarefa</h1> 
            
            <div class="form-elements">
                <label for="title">Titulo</label>
                <input type="text" name="title" id="title" placeholder="e.g. Fazer uma Pausa para o Café">
            </div>

            <div class="form-elements">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" placeholder="e.g. É sempre bom fazer uma pausa. Esta pausa de 15 minutos para recarregar as baterias."></textarea>
            </div>
            
            <div class="form-elements">
                <label for="subtask">Sub-Tarefas</label>
                <div class="inputs">
                    <div class="input">
                        <input type="text" name="subtask" id="subtask" placeholder="e.g. Fazer café">
                        <button type="button" onclick="removeSubtask(this)" id="remove-subtask"> X </button>
                    </div>

                </div>

                <button type="button" onclick="addSubtask()" id="add-subtask">+ Adicionar Nova Sub-Tarefa</button>
            </div>
            
            <div class="form-elements">
                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="Pendencias">Pendencias</option>
                    <option value="Fazendo">Fazendo</option>
                    <option value="Feito">Feito</option>
                </select>
            </div>

            <input type="submit" value="Enviar">
        </form>
    </section>

    <script src="./src/js/app.js"></script>
</body>
</html>