<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録画面</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <!-- html上でのinput typeの指定はあくまでデータベースのやり取りは介さず入力された値を見るだけなのでunique重複禁止もDB介さないのでいらない。htmlには記入してもしなくてもいいが、書くと入力する側に親切 -->
    <h1>会員登録</h1>
    <form class="" action="{{ route('members.index') }}" method="post">
    {{ csrf_field() }}
    <div class="d-flex flex-column mb-3">
    <div class="p-2"><input type="text" required name="name" id="name" maxlength="15" placeholder="名前"><span>{{ $errors->first('name') }}</span></div>
    <div class="p-2"><input type="text" required name="phone" id="phone"  maxlength="15" placeholder="電話番号"><span>{{ $errors->first('phone') }}</span></div>
    <div class="p-2"><input type="email" required name="email" id="email" placeholder="メールアドレス"><span>{{ $errors->first('email') }}</span></div>
    <div class="p-2"><input type="submit" value="登録"></div>
    
</body>
</html>