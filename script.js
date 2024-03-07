document.getElementById('taskForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const task = document.getElementById('task').value;
    const dueDate = document.getElementById('dueDate').value;

    // Aquí puedes enviar los datos al servidor para guardar la tarea y la fecha de vencimiento
    // Por ejemplo, utilizando fetch() o XMLHttpRequest
});