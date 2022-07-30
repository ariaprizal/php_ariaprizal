<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./asset/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1 class="title">Jawaban Soal Nomor Satu</h1>
    <div class="container-form">
        <form action="" method="post">
            <div class="input-row">
                <span class="input-text">Inputkan Jumlah Baris</span>
                <input type="text" aria-label="Jumlah Baris" >
            </div>
            <div class="input-col">
                <span class="input-text">Inputkan Jumlah Kolom</span>
                <input type="text" aria-label="Jumlah Kolom" >
            </div>
            <div class="btn-submit">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    <div class="container-result">
        <div class="show-2">
            <form action="#" method="post">
                <div class="result-row">
                    <span class="input-text">1.1</span>
                    <input type="text" aria-label="Jumlah Kolom" id="number1">
                    <span class="input-text">1.2</span>
                    <input type="text" aria-label="Jumlah Kolom" id="number2">
                    <span class="input-text">1.3</span>
                    <input type="text" aria-label="Jumlah Kolom" id="number3">
                </div>
                <div class="btn-submit">
                    <button type="button" class="submit-number">Submit</button>
                </div>
            </form>
        </div>
        <div class="show-result">
            <div class="show-number">
                <h4 class="number1"></h4>
                <h4 class="number2"></h4>
                <h4 class="number3"></h4>
            </div>
        </div>
    </div>
  
<script src="./asset/app.js"></script>
</body>
</html>