<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuwe taak toevoegen</title>
</head>
<body>
    <h1>Nieuwe taak toevoegen</h1>
    <form action="tasksController.php?action=create" method="POST">
        <input type="hidden" name="action" value="create">
        <label for="title">Titel:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="description">Beschrijving:</label><br>
        <textarea id="description" name="description"></textarea><br>
        <label for="deadline">Deadline:</label><br>
        <input type="date" id="deadline" name="deadline"><br>
        <label for="department">Afdeling:</label><br>
        <select id="department" name="department">
            <option value="personeel">Personeel</option>
            <option value="horeca">Horeca</option>
            <option value="techniek">Techniek</option>
            <option value="inkoop">Inkoop</option>
            <option value="klantenservice">Klantenservice</option>
            <option value="groen">Groen</option>
        </select><br>
        <input type="submit" value="Opslaan">
    </form>
</body>
</html>