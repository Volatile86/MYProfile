@extends('layouts.app')

@section('content')
    <style>
        body {
            background: #0e0e0e;
            background-image: url("{{ asset('profileBackgrounds/default.jpg') }}");
            background-size: cover;
            background-attachment: fixed;
            font-family: sans-serif, helvetica;
            letter-spacing: 1px;
            line-height: 1.5;
        }

        .profile-container {
            margin-top: 20px;
        }

        .profile-header {
            background: #0066cc;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .profile-pic {
            max-width: 150px;
        }

        .card {
            margin-bottom: 20px;
        }

        @media (min-width: 768px) {
            .profile-container {
                display: flex;
                justify-content: space-between;
            }

            .left-column {
                flex-basis: 30%;
            }

            .right-column {
                flex-basis: 65%;
            }
        }
    </style>

    <div class="container profile-container">
        <div class="left-column">
            <div class="card mb-4">
                <div class="card-header text-center">
                    <h2>Mr Hockey</h2>
                </div>
                <div class="card-body text-center">
                    <img class="profile-pic mb-3" src="{{ asset('testProfileContent/profilePic.jpg') }}" alt="Profile Picture">
                    <p>Hello, I'm a social media user. This is my profile.</p>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h2>About Me</h2>
                </div>
                <div class="card-body">
                    <div class="post">
                        <p>My name is Mr Hockey and I love Hockey!</p>
                    </div>
                    <!-- Add more posts as needed -->
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header text-center">
                    <h2>Photos</h2>
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('testProfileContent/profilePic.jpg') }}" class="card-img-top" alt="Photo 1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('testProfileContent/profilePic.jpg') }}" class="card-img-top" alt="Photo 2">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('testProfileContent/profilePic.jpg') }}" class="card-img-top" alt="Photo 3">
                            </div>
                        </div>
                        <!-- Add more columns for additional photos -->
                    </div>
                </div>
            </div>
        </div>

        <div class="right-column">
            <div class="card mb-4">
                <div class="card-header">
                    <h2>My Teams</h2>
                </div>
                <div class="card-body">
                    <div class="post">
                        <h4>Post Title 1</h4>
                        <p>This is the content of my first post.</p>
                    </div>
                    <div class="post">
                        <h4>Post Title 2</h4>
                        <p>This is the content of my second post.</p>
                    </div>
                    <!-- Add more posts as needed -->
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h2>My Wall</h2>
                </div>
                <div class="card-body">
                    <div class="post">
                        <h4>Post Title 1</h4>
                        <p>This is the content of my first post.</p>
                    </div>
                    <div class="post">
                        <h4>Post Title 2</h4>
                        <p>This is the content of my second post.</p>
                    </div>
                    <!-- Add more posts as needed -->
                </div>
            </div>
        </div>
    </div>
@endsection
