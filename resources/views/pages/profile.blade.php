@extends('layouts.app')

@section('content')
<h1 class="display-4 fw-bold text-center"><br><strong>About Me</strong><br><br></h1>
<div class="container-fluid" style="background: linear-gradient(120deg, #d6d6d6, white);padding: 20px;">
    <div class="row">
        <div class="col-md-4"><img class="rounded-circle img-fluid" src="{{ asset('storage/profilepicture.jpg') }}"></div>
        <div class="col-md-8">
            <p><br><span style="color: rgb(0, 0, 0);">My name is Low Han Cheng, the Web Programming lab demonstrator&nbsp;for Cognitive Science students in FSKPM, UNIMAS. My job scope is to teach students about HTML, CSS, Bootstrap, PHP, JavaScript, WordPress and Laravel practically.</span><br><br></p>
            <h1 class="fs-3">Related Experience</h1>
            <ul class="list-group">
                <li class="list-group-item"><span style="font-size: 20px;"><br><strong>Website Administrator (2020)</strong><br>I was the Former leader of Information Technology unit in Inter-varsity Education Counselling Group (IVEC). I led my team to manage, maintain and update&nbsp;<a href="http://www.quansheng.org/"><span style="color: var(--bs-link-color);">QuanSheng.org</span></a>&nbsp;website. I'm in charge of the website redesign project in 2020 as well.<br><br></span></li>
                <li class="list-group-item"><span style="font-size: 20px;"><br><br><strong>Assistant Project Manager (2019)</strong><br>I was the Assistant Project Manager for '<a href="https://pdksatok.com.my/"><span style="color: var(--bs-link-color);">PPDK Sri Satok</span></a>&nbsp;Website Development Project' in Cognitive Neuroscience Club, UNIMAS. I was responsible in supervising the progress of technical team, doing survey for domain &amp; host, and involved in the design &amp; development process of the website.<br><br><br></span></li>
            </ul>
        </div>
    </div>
</div>
@endsection
