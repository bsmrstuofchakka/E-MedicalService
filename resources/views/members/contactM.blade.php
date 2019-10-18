@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
<div class="search_input"  id="search_input_box">
    <div class="container">
        {!! Form::open(array('url' => url('contactInfo/search'), 'files' => true, 'class'=>'d-flex justify-content-between') )  !!}


        <input type="search" class="form-control" id="search_input" name="search"   placeholder="Search Here">

        <button type="submit" class="btn"></button>


        {!! Form::close() !!}
    </div>
</div>
@include('layout.afterSearchMaster')




<section class="features_area section_gap">
        <div class="container">



            <div>
                <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Contact Information
				</span>

                </div>

                <table class="responstable">

                    <tr>
                        <th>User ID</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Father's Name</th>
                        <th>Mother's Name</th>
                        <th>Permanent Address</th>
                        <th>Contact in Emergency</th>
                        <th>Relationship with Him/Her</th>
                        @if($userTable->userType==1)
                        <th>Action</th>
                            @endif
                    </tr>


                    @if(isset($contactInfoMember[0]))
                        @foreach($contactInfoMember as $contactInfoM)
                            <tr>
                                <th>{{$contactInfoM->userId}}</th>
                                <th>{{$contactInfoM->cnumber}}</th>
                                <th>{{$contactInfoM->email}}</th>
                                <th>{{$contactInfoM->fname}}</th>
                                <th>{{$contactInfoM->mname}}</th>
                                <th>{{$contactInfoM->paddress}}</th>
                                <th>{{$contactInfoM->contactEmergency}}</th>
                                <th>{{$contactInfoM->relationship}}</th>
                                @if($userTable->userType==1)

                                <th>
                                    <a href="{{url('contactInfo/Edit').'?id='.$contactInfoM->id}}">Edit /</a>
                                    <a href="{{url('contactInfo/Delete').'?id='.$contactInfoM->id}}">Delete</a>
                                </th>
                                    @endif
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