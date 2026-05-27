<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anti-Hacker Lab</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 9.5%;
        justify-content: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 50px;
        border-color: #007BFF;
    }
    form {
        margin-bottom: 20px;
        align-items: center;
        display: flex;
        flex-direction: column;
        padding: 20px;  
    }
    label {
        margin-bottom: 10px;
        font-weight: bold;
    }
    input {
        padding: 5px;
        width: 300px;
        border-radius: 5px;
    }
    button {
        padding: 10px;
        margin-top: 10px;
        border: none;
        border-radius: 5px;
        background-color: #1dae46;
        font-weight: bold;
    }
    p {
        margin: 10px 0;
        font-size: 16px;
    }
    hr {
        margin: 20px 0;
    }
</style>
<body>
    <h1>Security Lab: CSRF & XSS</h1>

    <form action="<?= base_url('lab') ?>" method="post">
        
        <?= csrf_field() ?>

        <label for="user_input">Enter Text:</label>
        <input type="text" name="user_input" id="user_input" required>
        
        <button type="submit">Submit Data</button>
    </form>

    <hr>

    <?php if (isset($user_input)): ?>
        <h2>Test Results:</h2>
        
        <p><strong>Secure (Escaped):</strong> <?= ($user_input) ?></p>

        <p><strong>Vulnerable (Unescaped):</strong> <?= $user_input ?></p>
        
    <?php endif; ?>

</body>
</html>