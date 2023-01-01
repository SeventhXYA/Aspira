<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
    <style>
        @media (min-width: 600px) {
            .parent {
                margin: 0 80px;
            }
        }

        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        .parent {
            margin: 0 10px;
            border-radius: 30px;
            border: 1px solid rgb(180, 180, 180);
        }
    </style>
</head>

<body>
    <div class="parent">
        <h1 style="
            text-align: center;
            padding: 30px;
        ">Reset Password</h1>

        <hr>

        <div style="
            padding: 30px;
        ">
            <p>Halo, <b>{{ $reset->user->firstname . ' ' . $reset->user->lastname }}</b>!
                Anda dapat melakukan reset Password dengan menekan tombol berikut ini.</p>

            <div style="
            text-align: center;
            margin: 30px 0;
        ">
                <a href="{{ env('APP_URL') }}/reset?token={{ $reset->token }}"
                    style="
                    color: white;
                    font-weight: bold;
                    padding: 10px 20px;
                    text-decoration: none;  
                    background-color: #3abff8;
                    border: 1px solid rgb(224, 224, 224);
                    border-radius: 10px;
                    cursor: pointer;
                ">
                    RESET PASSWORD
                </a>
            </div>

            <p>Reset password hanya akan berlaku selama 24 jam. Jika Anda tidak merasa mengajukan Reset Password, Anda
                dapat mengabaikan pesan ini.</p>
        </div>

        <hr>

        <div style="
            padding: 30px;
        ">
            <p style="
                font-size: 0.8rem;
                color: #00000080
            ">
                Copyright &copy;{{ now()->year }} Generasi Permata. By CSR ASM Permata</p>
        </div>
    </div>
</body>

</html>
