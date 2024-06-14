<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員編集画面</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    </head>
    <body>
    <h1>会員編集 会員ID:{{ $member->('id') }}</h1>
    <div class="d-flex flex-column mb-3">
    <div class="p-2"><input type="text" name="" id="name" placeholder="名前"></div>
    <div class="p-2"><input type="text" name="" id="phone" placeholder="電話番号"></div>
    <div class="p-2"><input type="text" name="" id="email" placeholder="メールアドレス"></div>
    <div class="p-2"><input type="submit" value="編集"></div>
    <div class="p-2"><input type="submit" value="削除"></div>
    </div>
</body>
</html>