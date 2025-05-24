<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prolonger une reservation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
    <h2>prolongation de reservation</h2>
    <form action="prolongement.php"method="post">
        <label for="reservationId">ID de reservation:</label>
        <input type="text" id="reservationId"
        name="reservationId" required>
        <label for="newDate">Nouvelle date de retour:</label>
        <input type="date" id="newDate"
        name="newDate" required>
        <button type="submit">prolonger</button>
    </form>

   </div> 
</body>
</html>