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
    <h1>会員編集 会員ID:{{ $member->id }}</h1>
    <form class="" action="{{ route('members.update' ,  $member->id) }}" method="post">
    @method('PUT')
    {{ csrf_field() }}
    <div class="d-flex flex-column mb-3">
    <div class="p-2"><input type="text" name="name" id="name" maxlength="15" value="{{ $member->name }}">{{ $errors->first('name') }}</div>
    <div class="p-2"><input type="text" name="phone" id="phone" maxlength="15" value="{{ $member->phone }}">{{ $errors->first('phone') }}</div>
    <div class="p-2"><input type="text" name="email" id="email" maxlength="254" value="{{ $member->email }}">{{ $errors->first('email') }}</div>

    <!-- 編集ボタン -->
    <div class="p-2"><input type="hidden" value="{{ $member->id }}" name="id">
    <button type="submit" id="members-edit-{{$member->id}}"  name="action" value="send" class="submit-button">編集</button>
    </div>
    </form>

    <!-- 削除ボタン -->
    <div class="p-2">
      <form action="{{ route('members.destroy', $member->id) }}" method="post">
      {{csrf_field()}}
      {{ method_field('DELETE') }}
      <button type="submit" id="members-destroy-{{$member->id}}" name="action" value="send" class="submit-button">削除</button>
      </div>
    </form>
    </div>
</body>
</html>