document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('taskForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const task = document.getElementById('task').value;
        const dueDate = document.getElementById('dueDate').value;
        
        // Aquí puedes enviar los datos al servidor para guardar la tarea y la fecha de vencimiento
        // Por ejemplo, utilizando fetch() o XMLHttpRequest
        
        // Luego, puedes mostrar un mensaje de éxito o error
        const messageContainer = document.getElementById('message');
        messageContainer.textContent = "Enviando tarea...";

        // Simular envío exitoso después de 2 segundos
        setTimeout(function() {
            messageContainer.textContent = "Tarea enviada correctamente.";
        }, 2000);
    });
});
