<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{  asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="col-md-10 container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">

                    <h3>Tambah Data User</h3>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $item )
                                <li>{{$item}}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="card-body">

                        <form action="/user/create" method="post" class="multipart/form-data">
                            @csrf
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="name" error class="@error('name') error @enderror" id="" value="{{old('name')}}"></td>
                                    <td>
                                        @error('name')
                                            {{$message}}
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="email" name="email" id="" value="{{old('email')}}"></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td><input type="password" name="password" id="" value="{{old('password')}}"></td>
                                    @error('password')
                                        {{$message}}
                                    @enderror
                                </tr>
                                <tr>
                                    <td>Level</td>
                                    <td>
                                        <select name="levels_id" id="">
                                            @foreach ($levels as $item )
                                                <option value="{{$item->id}}">{{$item->nm_level}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Foto</td>
                                    <td><input type="file" name="foto" id=""></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="" id="" value="SIMPAN"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="{{  asset('asset/bootstrap-5.0.2-dist/js/bootstrap.min.js')}}"></script>
