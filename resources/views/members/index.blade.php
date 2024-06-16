<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員一覧画面</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
    <div class="d-flex justify-content-end mb-3">
    <a href="{{ route('members.create')}}">>>登録</a>
    {{ csrf_field() }}
    </div>
        
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>名前</th>
                        <th>電話番号</th>
                        <th>メールアドレス</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                    <tr>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->phone }}</td>
                        <td>{{ $member->email }}</td>
                        <td><a href="{{ route('members.edit', ['id' => $member->id]) }}">>>編集</a></td>
                        {{ csrf_field() }}
                    </tr>
                    @endforeach
        </div>
    </tbody>
    </table>
    
</body>
</html>