<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table Reservation Confirmation</title>
</head>
<body>
    <h1>Table Reservation Confirmation</h1>
    <p>Dear {{ $name }},</p>
    <p>Your table has been reserved successfully!</p>
    <p><strong>Reservation Details:</strong></p>
    <p>Day: {{ $day }}</p>
    <p>Hour: {{ $hour }}</p>
    <p>Number of Persons: {{ $persons }}</p>
    <p><strong>Your Table Number: {{ $tableNumber }}</strong></p> <!-- Bold design -->
    <p>Thank you for choosing us!</p>
</body>
</html>
