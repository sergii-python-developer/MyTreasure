<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HomePage</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="card" style="width: 25rem;">
            <img class="card-img-top" src="{{asset('storage/articles/images/0b0619d7ea877120e79e4244b12586dd.jpg')}}">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <div class="article-date-and-author">
                    <h6 class="">Date: 20:16 23/10/2019</h6>
                    <h6 class="">Author: Admin <img src="{{asset('storage/articles/regularImages/octoface.svg')}}"></h6>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="button-and-activity">
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    <div class="activity">
                        <div class="likes">
                            <img class="activity-img" src="{{asset('storage/articles/regularImages/thumbsup.svg')}}">
                            <p>322</p>
                        </div>
                        <div class="views">
                            <img class="activity-img" src="{{asset('storage/articles/regularImages/eye.svg')}}">
                            <p>30</p>
                        </div>
                        <div class="comments">
                            <img class="activity-img" src="{{asset('storage/articles/regularImages/comment.svg')}}">
                            <p>10</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
