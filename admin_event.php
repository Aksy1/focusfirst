<?php include 'auth_admin.php'; ?>

<?php

include 'db.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $date      = trim($_POST['event_date']);
  $time      = trim($_POST['event_time']);
  $duration  = trim($_POST['duration']);
  $language  = trim($_POST['language']);
  $countdown = trim($_POST['countdown_deadline']);

  $stmt = $conn->prepare("UPDATE event_details SET event_date=?, event_time=?, duration=?, language=?, countdown_deadline=? WHERE id=1");
  $stmt->bind_param("sssss", $date, $time, $duration, $language, $countdown);
  $stmt->execute();
  $stmt->close();

  $_SESSION['success'] = "✅ Event details updated successfully.";
  header("Location: admin_event.php"); // prevent resubmission
  exit();
}

// Fetch current values
$result = $conn->query("SELECT * FROM event_details WHERE id=1");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Event Details</title>
  <link rel="stylesheet" href="static/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=shield" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0&icon_names=group" />
  <style>
    body {
      font-family: sans-serif;
      background: #f5f5f5;
    }
    form {
      max-width: 420px;
      background: #fff;
      padding: 20px;
      margin: 40px auto;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      border-radius: 8px;
    }
    label {
      font-weight: bold;
      display: block;
      margin-top: 12px;
    }
    input, button {
      width: 100%;
      padding: 10px;
      margin-top: 6px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    button {
      background: #007bff;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }
    button:hover {
      background: #0056b3;
    }
    .success {
      text-align: center;
      color: green;
      font-weight: bold;
      margin-top: 20px;
    }
  </style>
</head>
<body class="poppins-regular bg-black">
<div class="text-center pt-5">
  <img src="static/img/focusfirstlogo1.png" width="400" />
  </div>
<form method="post">
  <h2 class="text-center">Edit Event Details</h2>
  <label>Date:</label>
  <input type="text" name="event_date" value="<?php echo htmlspecialchars($row['event_date']); ?>" required>

  <label>Time:</label>
  <input type="text" name="event_time" value="<?php echo htmlspecialchars($row['event_time']); ?>" required>

  <label>Duration:</label>
  <input type="text" name="duration" value="<?php echo htmlspecialchars($row['duration']); ?>" required>

  <label>Language:</label>
  <input type="text" name="language" value="<?php echo htmlspecialchars($row['language']); ?>" required>

  <label>Countdown Deadline:</label>
  <input type="datetime-local" name="countdown_deadline"
         value="<?php echo date('Y-m-d\TH:i', strtotime($row['countdown_deadline'])); ?>" required>

  <button type="submit">Update</button>
</form>

<?php
if (isset($_SESSION['success'])) {
  echo "<div class='success'>{$_SESSION['success']}</div>";
  unset($_SESSION['success']);
}
?>

</body>
</html>
