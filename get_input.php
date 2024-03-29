<!DOCTYPE html>
<html>
<head>
    <title>THE AKSHAY JANGID</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-top: 50px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 30px;
        }
        input[type=text] {
            display: block;
            width: 300px;
            margin: 10px;
            padding: 10px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px #ccc;
            transition: box-shadow 0.2s ease-in-out;
        }
        input[type=text]:focus {
            outline: none;
            box-shadow: 0 0 10px dodgerblue;
        }
        button[type=submit] {
            display: block;
            width: 200px;
            margin: 20px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            color: white;
            background-color: dodgerblue;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px #ccc;
            transition: box-shadow 0.2s ease-in-out;
        }
        button[type=submit]:hover {
            cursor: pointer;
            box-shadow: 0 0 10px dodgerblue;
        }
        .output {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
            font-size: 24px;
            font-weight: bold;
        }
        .output span {
            color: dodgerblue;
        }
    </style>
</head>
<body>
    <h1>AKSHAY JANGID</h1>
    <form action="get_input.php" method="post">
        <input type="text" name="input_value" placeholder="Enter a value">
        <button type="submit">Submit</button>
    </form>
    <?php if (isset($output)): ?>
    <div class="output">
        <span>Output:</span>
        <?php echo nl2br(htmlspecialchars($output)); ?>
    </div>
    <?php endif; ?>
</body>
</html>
