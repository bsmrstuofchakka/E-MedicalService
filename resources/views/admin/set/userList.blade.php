@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
<div class="search_input"  id="search_input_box">
    <div class="container">
        {!! Form::open(array('url' => url('users/search'), 'files' => true, 'class'=>'d-flex justify-content-between') )  !!}


        <input type="search" class="form-control" id="search_input" name="search"   placeholder="Search Here">

        <button type="submit" class="btn"></button>


        {!! Form::close() !!}
    </div>
</div>
@include('layout.afterSearchMaster')





<section class="features_area section_gap">
        <div class="container">



            <div >
                <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
                    <span class="contact100-form-title-1">
                       User List
                    </span>
                </div>

                <div class="col-12">
                    <a class="primary-btn text-uppercase"  href="{{url('users/add')}}">Add User</a>
                </div>

                <table class="responstable">

                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>User Type</th>
                        <th>ACTION</th>
                    </tr>


                    @if(isset($users[0]))
                    @foreach($users as $user)

                        <tr>
                            <th>{{$user->id}}</th>
                            <th>{{$user->username}}</th>
                            <th>{{$user->email}}</th>
                            @if($user->userType==1)
                                <th>Admin</th>
                            @else
                                <th>User</th>
                            @endif

                            <th>
                                <a href="{{url('users/edit').'?id='.$user->id}}">Edit /</a>
                                <a href="{{url('users/delete').'?id='.$user->id}}">Delete</a>
                            </th>
                        </tr>

                    @endforeach
                        @endif

                </table>

            </div>


        </div>


        </div>
    </section>

    <section class="about_area lite_bg">
        <div class="container">
            <div class="row align-items-center">

            </div>
            <div class="about_bg overlay"></div>
        </div>
    </section>

    </div>


@include('layout.afterMain')

