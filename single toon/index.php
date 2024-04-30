<?php

require_once 'Logger.php'; 


$logFile = "app.log";
$logger = Logger::getInstance($logFile);


if (isset($_POST['clearLog'])) {
    $logger->clearLog();
    header("Location: index.php"); 
    exit();
}


if (isset($_POST['logMessage'])) {
    $message = $_POST['logMessage'];
    $logger->log($message);
    
    header("Location: index.php");
    exit();
}


$logContent = file_get_contents($logFile);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Viewer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            margin-bottom: 10px;
        }
        pre {
            background-color: #f5f5f5;
            padding: 10px;
            border: 1px solid #ccc;
            overflow: auto;
            max-height: 300px;
        }
        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Log Viewer</h1>

    <form method="post" action="index.php">
        <label for="logMessage">Enter Log Message:</label>
        <input type="text" id="logMessage" name="logMessage" required>
        <button type="submit">Log Message</button>
    </form>

    <form method="post" action="index.php">
        <input type="hidden" name="clearLog" value="true">
        <button type="submit" onclick="return confirm('Are you sure you want to clear the log?')">Clear Log</button>
    </form>

    <h2>Log Content:</h2>
    <pre><?= htmlspecialchars($logContent) ?></pre>
</body>
</html>
