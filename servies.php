<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <style>
        .donation {
            margin-left: 186px;
            /* padding-left: 20px; */
            margin-top: 100px;
            /* margin-right: 2px; */
            position: absolute;
            width: 300px;
            height: 80vh;
            border: 2px solid rgb(from 255 255 255 .5);
            border-radius: 20px;
            /* backdrop: blur 2px;; */
            background: transparent;
            backdrop-filter: blur(20px);
            transition: transform .5s ease;
            transform: scale(0);

        }

        .donation.active {
            transform: scale(1);
        }

        .resived {
            margin-left: 186px;
            /* padding-left: 20px; */
            margin-top: 100px;
            /* margin-right: 2px; */
            position: absolute;
            width: 700px;
            height: 500px;
            border: 2px solid rgb(from 255 255 255 .5);
            border-radius: 20px;
            background: lightgray;
            transition: transform .5s ease;
            transform: scale(0);
        }

        .resived.active {
            transform: scale(1);
        }

        .input-box label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translate(-5%);
            font-size: 1em;
            color: #162916;
            font-weight: 600;
            pointer-events: none;
            transition: .5s;
        }
    </style>
</head>

<body
    style="background-image: url(https://plus.unsplash.com/premium_photo-1681488489639-2b8ed629bffd?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D); ">
    <header>
    <a href="homepage.php" class="back" style="font-size: 25px;"><i class="ri-arrow-left-line"></i></a>
    </header>
    <div class="donation">
        <div class="formbox-register">
            <h2>Registration</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><i class="ri-user-fill"></i></span>
                    <input type="text" required>
                    <label for="">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="ri-mail-fill"></i></span>
                    <input type="email" required>
                    <label for="">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="ri-lock-password-line"></i></span>
                    <input type="text" required>
                    <label for="">Location</label>
                    <!-- <textarea name="#" id="" cols="13" rows="13" placeholder="Adress"></textarea> -->
                </div>
                <div class="remainder-foroget">
                    <label><input type="checkbox">I agree to terms & condition</label>
                </div>
                <button type="submit" class="btn">Submit</button>
                <div class="login-registration">
                    <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <div class="resived">

    </div>
    <div class="nav-buttons">
        <ul class="btn-list">
            <li><button class="pro-btn b1">donation</button></li>
            <li><button class="pro-btn b2">Resive</button></li>
            <!-- <li><button class="pro-btn b3">Events</button></li>
            <li><button class="pro-btn b4">help</button></li> -->
        </ul>
    </div>
    <script>
        const resived = document.querySelector('.resived');
        const donation = document.querySelector('.donation');
        const dono = document.querySelector('.b1');
        const resive = document.querySelector('.b2');

        dono.addEventListener('click', () => {
            donation.classList.add('active');
        })
        dono.addEventListener('click', () => {
            resived.classList.remove('active');
        })
        resive.addEventListener('click', () => {
            resived.classList.add('active');
        })
        resive.addEventListener('click', () => {
            donation.classList.remove('active');
        })
    </script>
</body>

</html>