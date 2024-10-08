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
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(71, 69, 69, 0.2);
        }
        /* untuk card keseluruhan login */ 

        .card-header {
            background-color: #242729;
            color: #ffffff;
            padding: 10px;
            border-radius: 10px 10px 0 0;
        }
        /* padding bagian header login */

        .card-body {
            padding: 50px;
        }
        /* atur design body login keseluruhan */

        .form-label {
            font-weight: bold;
        }
        /* font email dan password */

        .btn-primary {
            background-color: #768ea7;
            border-color: #7595b8;
        }
        /* warna tombol login */

        .btn-success {
            background-color: #64976f;
            border-color: #28a745;
        }
        /* warna tombol register */
        
    </style>
</head>

<div class="card">
    @include('sweetalert::alert')
    <div class="card-header">
        <h5 align="center" class="card-title">Login</h5>
    </div>
    @if ($errors->has('login'))
        <div class="alert alert-danger">
            {{ $errors->first('login') }}
        </div>
    @endif
    <div class="card-body">
        <form action="{{ route('action-login') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
            <a href="{{ route('register') }}" class="btn btn-success w-100">Register</a>
        </form>
    </div>
</div>
