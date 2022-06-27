<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDO App フォルダ作成</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootflat/2.0.4/css/bootflat.min.css" integrity="sha512-3TYUrzSN1ix3NZvR8B8s5H8kXIIU0lQAsPWUE5CyFOwXKXTwS5MxfBdrVRYAr3mkYMajX90zvJpJcXIGXwcEBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/">ToDo App</a>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col col-md-offset-3 col-md-6">
                    <nav class="panel panel-default">
                        <div class="panel-heading">フォルダを追加する</div>
                        <div class="panel-body">
                            @if($errors->any())
                              <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $message)
                                      <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                              </div>
                            @endif  
                            <form action="{{ route('folders.create') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="title">フォルダ名</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">送信</button>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
