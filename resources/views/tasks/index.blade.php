<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootflat/2.0.4/css/bootflat.min.css" integrity="sha512-3TYUrzSN1ix3NZvR8B8s5H8kXIIU0lQAsPWUE5CyFOwXKXTwS5MxfBdrVRYAr3mkYMajX90zvJpJcXIGXwcEBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
    <nav class="my-navbar">
        <a class="my-navbar-brand" href="/">Todo App</a>
    </nav>
</header>
<main>
    <div class="cotainer">
        <div class="row">
            <div class="col col-md-4">
                <nav class="panel panel-default">
                    <nav class="panel-heading">フォルダ</nav>
                    <div class="panel-body">
                        <a href="#" class="btn btn-default btn-block">
                            フォルダを追加する
                        </a>
                    </div>
                    <div class="list-group">
                        @foreach($folders as $folder)
                          <a href="{{ route('tasks.index', ['id' => $folder->id]) }}"
                          class="list-group-item {{ $current_folder_id === $folder->id ? 'active' : '' }}">
                            {{ $folder->title }}
                          </a>
                        @endforeach
                    </div>
                </nav>
            </div>
            <div class="column col-md-8">
                <!-- ここにタスクが表示される -->
            </div>
        </div>
    </div>
</main>
</body>
</html>
