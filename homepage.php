<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .vid_cont {
            border: solid;
            border-radius: 20px;
            position: absolute;
            display: flex;
            margin: auto;
            width: 750px;
            height: 450px;
            top: 120px;
            margin-left: 220px;
            /* transform: translate(1%,-30%); */
            /* margin-top: 0px; */
            /* margin-bottom: 30px; */
            /* justify-content: right; */
            overflow: hidden;
            transition: transform .5s ease;
            transform: scale(1);

        }
        .vid_cont.remove{
            transform: scale(0);
        }
    </style>
</head>

<body>
    <header>
        <a href="landing.php" class="back" style="font-size: 25px;"><i class="ri-arrow-left-line"></i></a>
        <!-- <a href="servies.php">Services</a> -->
        <button class="pro-btn b" onclick="location.href='servies.php'"">Servies</button>
            <button class=" pro-btn b0">Profile</button>
    </header>
    <div class="vid_cont v">
        <iframe width="760" height="450" src="https://www.youtube.com/embed/72NzHbzVzy0?si=Jj_X0kY0V-DSJY27"
            title="YouTube video player" frameborder="5"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div>
    <div class="wrapper2">
        <div class="profile">

        </div>

    </div>
    <div class="events">

    </div>
    <div class="help">

    </div>
    <div class="nav-buttons">
        <ul class="btn-list">
            <!-- <li><button class="pro-btn b1">donation</button></li>
            <li><button class="pro-btn b2">Resived</button></li> -->
            <li><button class="pro-btn b3">Events</button></li>
            <li><button class="pro-btn b4">help</button></li>
        </ul>
    </div>


    <script>
        const video = document.querySelector('.vid_cont');
        const wrapper2 = document.querySelector('.wrapper2');
        // const donation=document.querySelector('.donation');
        // const resived=document.querySelector('.resived');
        const events = document.querySelector('.events');
        const help = document.querySelector('.help');
        const vid = document.querySelector('.v');
        const profile = document.querySelector('.b0');
        // const dono=document.querySelector('.b1');
        // const resive=document.querySelector('.b2');
        const event = document.querySelector('.b3');
        const Help = document.querySelector('.b4');




        profile.addEventListener('click', () => {
            wrapper2.classList.add('active-popup');
        })

        profile.addEventListener('click', () => {
            video.classList.add('remove');
        })
        // dono.addEventListener('click',()=>{
        //     wrapper2.classList.remove('active-popup');
        // })
        // dono.addEventListener('click',()=>{
        //     donation.classList.add('active');
        // })
        // dono.addEventListener('click',()=>{
        //     resived.classList.remove('active');
        // })
        // dono.addEventListener('click',()=>{
        //     events.classList.remove('active');
        // })
        // dono.addEventListener('click',()=>{
        //     help.classList.remove('active');
        // })
        // profile.addEventListener('click',()=>{
        //     donation.classList.remove('active');
        // })
        // resive.addEventListener('click',()=>{
        //     donation.classList.remove('active');
        // })
        // resive.addEventListener('click',()=>{
        //     wrapper2.classList.remove('active-popup');
        // })
        // resive.addEventListener('click',()=>{
        //     resived.classList.add('active');
        // })
        // resive.addEventListener('click',()=>{
        //     events.classList.remove('active');
        // })
        // resive.addEventListener('click',()=>{
        //     help.classList.remove('active');
        // })
        // profile.addEventListener('click',()=>{
        //     resived.classList.remove('active');
        // })
        profile.addEventListener('click', () => {
            events.classList.remove('active');
        })
        profile.addEventListener('click', () => {
            help.classList.remove('active');
        })
        event.addEventListener('click', () => {
            events.classList.add('active');
        })
        event.addEventListener('click', () => {
            video.classList.add('remove');
        })
        // event.addEventListener('click',()=>{
        //     resived.classList.remove('active');
        // })
        event.addEventListener('click', () => {
            wrapper2.classList.remove('active-popup');
        })
        // event.addEventListener('click',()=>{
        //     donation.classList.remove('active');
        // })
        event.addEventListener('click', () => {
            help.classList.remove('active');
        })
        Help.addEventListener('click', () => {
            help.classList.add('active');
        })
        Help.addEventListener('click', () => {
            video.classList.add('remove');
        })
        Help.addEventListener('click', () => {
            wrapper2.classList.remove('active-popup');
        })
        // Help.addEventListener('click',()=>{
        //     donation.classList.remove('active');
        // })
        // Help.addEventListener('click',()=>{
        //     resived.classList.remove('active');
        // })
        Help.addEventListener('click', () => {
            events.classList.remove('active');
        })


    </script>
    <!-- <script src="script1.js"></script> -->
</body>

</html>