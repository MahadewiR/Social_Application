<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            max-width: 400px;
            margin: 40px auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #f7f7f7;
        }

        /* untuk card keseluruhan login */

        .card-header {
            background-color: #242729;
            padding: 20px;
            border-bottom: 1px solid #ddd;
            border-radius: 10px 10px 0 0;
        }

        /* untuk header card login */

        .card-header h5 {
            color: #fff;
            font-weight: bold;
        }

        /* untuk ngubah warna font register */

        .card-body {
            padding: 50px;
        }

        /* untuk body card register */

        .form-control {
            height: 40px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* untuk atur panjang form control card register*/

        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 10px rgba(52, 152, 219, 0.5);
        }


        .btn {
            height: 40px;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
        }

        /* untuk atur panjang button card register */

        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
        }

        /* untuk warna button register */

        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }

        /* untuk warna hover button register */

        .btn-danger {
            background-color: #e74c3c;
            border-color: #e74c3c;
        }

        /* untuk warna button kembali */

        .btn-danger:hover {
            background-color: #c0392b;
            border-color: #c0392b;
        }

        /* untuk warna hover button kembali */
    </style>
</head>

<div class="card">
    @include('sweetalert::alert')
    <div class="card-header">
        <h5 align="center" class="card-title">Register</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('action-register') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter nama">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-3">Register</button>
            <a href="{{ route('login') }}" class="btn btn-danger w-100">Kembali</a>
        </form>
    </div>
</div>
