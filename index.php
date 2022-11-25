<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <title>PHP-Badwords</title>
</head>

<body>
    <div class="container">
        <h1 class="fw-bold text-primary text-uppercase pt-3">BadWords</h1>
        <form action="form.php">
            <div class="pt-5">
                <label for="form" class="form-label">
                    <h3>Censored word &#129296;</h3>
                </label>
                <input type="text" class="form-control w-25" id="form" placeholder="Enter the word to censor..." name="word">
            </div>
            <div class="pt-5 pb-5">
                <label for="form" class="form-label">
                    <h3>Write your sentence here &#128071;</h3>
                </label>
                <textarea class="form-control w-50" placeholder="Write here..." id="form" rows="5" name="phrase"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Invia</button>
        </form>
    </div>
</body>