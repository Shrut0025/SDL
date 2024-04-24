<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indian Railways Time Table</title>
  <style>
    h1{
      color: #cc1f1f;
      font-style: italic;
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .header {
      background-color: #003366;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    .header img {
      height: 80px;
      margin-bottom: 10px;
    }
    .timetable {
      margin: 20px auto;
      max-width: 800px;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .timetable table {
      width: 100%;
      border-collapse: collapse;
    }
    .timetable th, .timetable td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
    }
    .timetable th {
      background-color: #cc1f1f;
    }
    .timetable td {
      background-color: #fff;
    }
  </style>
</head>
<body>

<div class="header">
  <img src="railway.png" alt="Indian Railway Logo">
  <h1>Indian Railways Time Table</h1>
</div>

<div class="timetable">
  <table>
    <thead>
      <tr>
        <th>Train No.</th>
        <th>Train Name</th>
        <th>Departure</th>
        <th>Arrival</th>
        <th>Days</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>12345</td>
        <td>Indian Express</td>
        <td>08:00 AM</td>
        <td>12:00 PM</td>
        <td>Daily</td>
      </tr>
      <tr>
        <td>54321</td>
        <td>Rajdhani Express</td>
        <td>10:00 AM</td>
        <td>03:00 PM</td>
        <td>Monday, Wednesday, Friday</td>
      </tr>
      <!-- Add more rows for other trains -->
    </tbody>
  </table>
</div>

</body>
</html>
