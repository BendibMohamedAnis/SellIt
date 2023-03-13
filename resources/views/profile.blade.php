<!DOCTYPE html>
<html>
    <head>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
        background: rgb(240, 149, 14)
    }
    
    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }
    
    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }
    
    .profile-button:hover {
        background: #682773
    }
    
    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }
    
    .profile-button:active {
        background: #682773;
        box-shadow: none
    }
    
    .back:hover {
        color: #682773;
        cursor: pointer
    }
    
    .labels {
        font-size: 11px
    }
    
    .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8
    }
    </style>
    </head>
<body>
    @include('includes.navbar')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" height="150px" src="https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg"><span class="font-weight-bold">{{$profile->name}}</div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">{{__('profile.Profile Settings')}}</h4>
                </div>


                <form method="POST" action="{{route('updateProfile')}}">
                    @csrf
                    @method('POST')
                    
                    <input hidden name="id" value="{{Auth::user()->id}}">
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels" >{{__('profile.Name')}}</label><input type="text" class="form-control" placeholder="first name" value="{{$profile->name}}" name="name"></div>
                        <div class="col-md-6"><label class="labels" >{{__('profile.Username')}}</label><input type="text" class="form-control" value="{{$profile->username}}" placeholder="username" name="username"></div>
                    </div>
                    <div class="row mt-3">
                    
                        <div class="col-md-12"><label class="labels" >{{__('profile.Email')}} </label><input type="text" class="form-control" placeholder="enter email " value="{{$profile->email}}" name="email"></div>
                    
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">{{__('profile.Save Profile')}}</button></div>
                </form>

            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>{{__('profile.Edit Password')}}</span></div><br>
                <div class="col-md-12"><label class="labels">{{__('profile.Old password')}}</label><input type="text" class="form-control" placeholder="{{__('profile.Old password')}}" value=""></div> <br>
                <div class="col-md-12"><label class="labels">{{__('profile.New password')}}</label><input type="text" class="form-control" placeholder="{{__('profile.New password')}}" value=""></div>
                <div class="mt-5 text-center"><button class="btn btn-success" type="button">{{__('profile.Change password')}}</button></div>
            </div>
            
        </div>
    </div>
</div>
</div>
</div>

</body>

</html>